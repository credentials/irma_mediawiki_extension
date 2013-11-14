<?php
/**
 * SpecialIRMALogin.body.php -- IRMA credential verification
 * Copyright 2013 Pim Vullers <pim@cs.ru.nl>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @file
 * @author Pim Vullers <pim@cs.ru.nl>
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) )
  exit( 1 );


class SpecialIRMALogin extends SpecialPage {

  var $mUsername, $mReturnTo, $mPosted;
  var $mAction, $mCreateaccount;
  var $mLoginattempt;
  var $mReturnToQuery, $mToken, $mStickHTTPS;
  var $mType, $mRealName;
  var $mAbortLoginErrorMsg = 'login-abort-generic';

  private $mLoaded = false;
  private $mOverrideRequest = null;

  function __construct() {
    parent::__construct( 'IRMALogin' );
  }

  /**
   * Loader
   */
  function load() {
    global $wgHiddenPrefs;

    if ( $this->mLoaded ) { return; }
    $this->mLoaded = true;

    if ( $this->mOverrideRequest === null ) {
      $request = $this->getRequest();
    } else {
      $request = $this->mOverrideRequest;
    }

    $this->mType = $request->getText( 'type' );
    $this->mUsername = $request->getText( 'wpName' );
    $this->mPosted = $request->wasPosted();
    $this->mLoginattempt = $request->getCheck( 'wpLoginattempt' );
    $this->mAction = $request->getVal( 'action' );
    $this->mStickHTTPS = $request->getCheck( 'wpStickHTTPS' );
    $this->mToken = ( $this->mType == 'signup' ) ? $request->getVal( 'wpCreateaccountToken' ) : $request->getVal( 'wpLoginToken' );
    $this->mReturnTo = $request->getVal( 'returnto', '' );
    $this->mReturnToQuery = $request->getVal( 'returntoquery', '' );

    if( !in_array( 'realname', $wgHiddenPrefs ) ) {
      $this->mRealName = $request->getText( 'wpRealName' );
    } else {
      $this->mRealName = '';
    }

    # 1. When switching accounts, it sucks to get automatically logged out
    # 2. Do not return to PasswordReset after a successful password change
    #    but goto Wiki start page (Main_Page) instead ( bug 33997 )
    $returnToTitle = Title::newFromText( $this->mReturnTo );
    if( is_object( $returnToTitle ) && (
      $returnToTitle->isSpecial( 'Userlogout' )
      || $returnToTitle->isSpecial( 'PasswordReset' ) ) ) {
      $this->mReturnTo = '';
      $this->mReturnToQuery = '';
    }
  }

  function getDescription() {
    return $this->msg( 'irmauserlogin' )->text();
  }

  /**
   * Entry point
   *
   * @param $par String or null
   */
  function execute( $par ) {
    if ( session_id() == '' ) {
      wfSetupSession();
    }

    $this->load();
    $this->setHeaders();

    global $wgSecureLogin;
    if ($this->mType !== 'signup' && $wgSecureLogin && WebRequest::detectProtocol() !== 'https') {
      $title = $this->getFullTitle();
      $query = array(
        'returnto' => $this->mReturnTo,
        'returntoquery' => $this->mReturnToQuery,
        'wpStickHTTPS' => $this->mStickHTTPS
      );
      $url = $title->getFullURL( $query, false, PROTO_HTTPS );
      $this->getOutput()->redirect( $url );
      return;
    }

    if (strpos($par, 'signup') === 0) { # Check for [[Special:Userlogin/signup]]
      $par = preg_replace('#^signup/?#', '', $par);
      $this->mType = 'signup';
    }

    // Check whether the user is logged in already
    global $wgUser;
    if ( $wgUser->getID() != 0 ) {
      $this->alreadyLoggedIn();
      return;
    }

    if( $this->mPosted ) {
      if( ( 'submitsignup' == $this->mAction ) || $this->mCreateaccount ) {
        $this->finishSignup($par);
        return;
      } elseif ( ( 'submitlogin' == $this->mAction ) || $this->mLoginattempt ) {
        $this->processLogin();
        return;
      }
    }

    if ( $this->mType == 'signup' ) {
      if ( !empty($par)) {
        $this->finishSignup($par);
      } else {
        $this->signupForm();
      }
    } else { // Login
      if ( !empty($par)) {
        $this->finishLogin($par);
      } else {
        $this->loginForm();
      }
    }
  }

  /**
   * Displays an error message
   */
  function showErrorPage( $msg, $params = array() ) {
    global $wgUser, $wgOut;
    $wgOut->showErrorPage( 'irmaerror', $msg, $params );
  }

  function signupForm($msg = '', $msgtype = 'error' ) {
    global $wgHiddenPrefs, $wgSecureLogin;
    if ( wfReadOnly() ) {
      throw new ReadOnlyError;
    }

    $template = new IRMAUsercreateTemplate();
    $q = 'action=submitsignup&type=signup';

    $linkq = 'type=login';
    $linkmsg = 'gotaccount';
    if ( $this->mReturnTo !== '' ) {
      $returnto = '&returnto=' . wfUrlencode( $this->mReturnTo );
      if ( $this->mReturnToQuery !== '' ) {
        $returnto .= '&returntoquery=' . wfUrlencode( $this->mReturnToQuery );
      }
      $q .= $returnto;
      $linkq .= $returnto;
    }
    $link = Html::element( 'a', array( 'href' => $this->getTitle()->getLocalURL( $linkq ) ), $this->msg( $linkmsg . 'link' )->text() ); # Calling either 'gotaccountlink' or 'nologinlink'
    $template->set( 'link', $this->msg( $linkmsg )->rawParams( $link )->parse() );

    $template->set( 'header', '' );
    $template->set( 'name', $this->mUsername );
    $template->set( 'realname', $this->mRealName );
    $template->set( 'action', $this->getTitle()->getLocalURL( $q ) );
    $template->set( 'message', $msg );
    $template->set( 'messagetype', $msgtype );
    $template->set( 'userealname', !in_array( 'realname', $wgHiddenPrefs ) );
    $template->set( 'cansecurelogin', ( $wgSecureLogin === true ) );
    $template->set( 'stickHTTPS', $this->mStickHTTPS );
    if ( !self::getCreateaccountToken() ) {
      self::setCreateaccountToken();
    }
    $template->set( 'token', self::getCreateaccountToken() );

    // Use loginend-https for HTTPS requests if it's not blank, loginend otherwise
    // Ditto for signupend
    $usingHTTPS = WebRequest::detectProtocol() == 'https';
    $loginendHTTPS = $this->msg( 'loginend-https' );
    $signupendHTTPS = $this->msg( 'signupend-https' );
    if ( $usingHTTPS && !$loginendHTTPS->isBlank() ) {
      $template->set( 'loginend', $loginendHTTPS->parse() );
    } else {
      $template->set( 'loginend', $this->msg( 'loginend' )->parse() );
    }
    if ( $usingHTTPS && !$signupendHTTPS->isBlank() ) {
      $template->set( 'signupend', $signupendHTTPS->parse() );
    } else {
      $template->set( 'signupend', $this->msg( 'signupend' )->parse() );
    }

    $out = $this->getOutput();
    $out->addModules( 'ext.irma.special.userlogin.signup' );
    $out->disallowUserJs(); // just in case...
    $out->addTemplate( $template );
    $out->addHTML($this->htmlSmartCardJSApplet());
  }

  function htmlVerifyButton() {
    global $wgScriptPath;

    return Html::rawElement( 'img',
      array (
        'id' => 'verify',
        'title' => wfMessage('irma-verify-credential')->text(),
        'src' => "$wgScriptPath/extensions/IRMA/img/IRMAWiki_verifyMember.png"
      )
    );
  }

  /**
   * Displays the main provider selection login form
   */
  function loginForm() {
    global $wgOut;

    $wgOut->addModules('ext.irma.login');
    $wgOut->addHTML($this->htmlVerifyButton());
    $wgOut->addHTML($this->htmlSmartCardJSApplet());
    $wgOut->addWikiMsg( 'irmalogininstructions' );
  }

  /**
   * Called when returning from the authentication server
   */
  function finishLogin($id) {
    global $wgUser, $wgIRMAWebService;

    $iwAttributeStore = json_decode(file_get_contents("$wgIRMAWebService/attributeStore/$id"), true);

    // Constructs an empty user
    $user = User::newFromName( $iwAttributeStore['nickname'] );
    $user->load();
    $user->mId = hexdec( MWCryptRand::generateHex( 8 ) );
    $user->setToken();
    $user->setCookies();

    if ( $user instanceof User ) {
      $wgUser = $user;
      $this->displaySuccessLogin();
    } else {
      // ERROR
    }
  }

  /**
   * Display the final "Successful login"
   */
  function displaySuccessLogin() {
    global $wgUser, $wgOut;

    $this->setupSession();
    RequestContext::getMain()->setUser( $wgUser );

    # Run any hooks; ignore results
    $inject_html = '';
    wfRunHooks( 'UserLoginComplete', array( &$wgUser, &$inject_html ) );

    $wgOut->setPageTitle( wfMessage( 'irmasuccess' )->text() );
    $wgOut->setRobotPolicy( 'noindex,nofollow' );
    $wgOut->setArticleRelated( false );
    $wgOut->addWikiMsg( 'irmasuccesstext', $wgUser->getName(), $wgUser->getId());
    $wgOut->addHtml( $inject_html );
    list( $returnto, $returntoquery ) = $this->returnTo();
    $wgOut->returnToMain( null, $returnto, $returntoquery );
  }

  /**
   * Get the createaccount token from the current session
   * @return Mixed
   */
  public static function getCreateaccountToken() {
    global $wgRequest;
    return $wgRequest->getSessionData( 'wsCreateaccountToken' );
  }

  /**
   * Randomly generate a new createaccount token and attach it to the current session
   */
  public static function setCreateaccountToken() {
    global $wgRequest;
    $wgRequest->setSessionData( 'wsCreateaccountToken', MWCryptRand::generateHex( 32 ) );
  }

  /**
   * Remove any createaccount token attached to the current session
   */
  public static function clearCreateaccountToken() {
    global $wgRequest;
    $wgRequest->setSessionData( 'wsCreateaccountToken', null );
  }

  /**
   * Displays an info message saying that the user is already logged-in
   */
  function alreadyLoggedIn() {
    global $wgOut;
    $wgOut->setPageTitle( wfMessage( 'irmaalreadyloggedin' )->text() );
    $wgOut->setRobotPolicy( 'noindex,nofollow' );
    $wgOut->setArticleRelated( false );

    global $wgUser;
    $wgOut->addWikiMsg( 'irmaalreadyloggedintext', $wgUser->getName() );
    list( $returnto, $returntoquery ) = $this->returnTo();
    $wgOut->returnToMain( null, $returnto, $returntoquery );
  }

  function htmlSmartCardJSApplet() {
    global $wgOut, $wgIRMAWebService;

    $code = 'org.irmacard.scjs.SmartCardJS.class';
    $archive = $wgIRMAWebService . '/smartcardjs.jar';
    $type = 'application/x-java-applet;version=1.6';
    $scriptable = 'true';
    $mayscript = 'true';
    $hidden = 'true';
    $height = 10;
    $width = 10;

    $wgOut->addHTML(Html::rawElement('object', array(
      'classid' => 'clsid:8AD9C840-044E-11D1-B3E9-00805F499D93',
      'height' => $height,
      'width' => $width
      ), 
      Html::rawElement('param', array( 
        'name' => 'code', 
        'value' => $code )) .
      Html::rawElement('param', array(
        'name' => 'archive',
        'value' => $archive )) .
      Html::rawElement('param', array(
        'name' => 'type',
        'value' => $type )) .
      Html::rawElement('param', array(
        'name' => 'scriptable',
        'value' => $scriptable )) .
      Html::rawElement('param', array(
        'name' => 'mayscript',
        'value' => $mayscript )) .
      Html::rawElement('embed', array (
        'type' => $type,
        'code' => $code,
        'archive' => $archive,
        'scriptable' => $scriptable,
        'mayscript' => $mayscript,
        'hidden' => $hidden,
        'height' => $height,
        'width' => $width ))
      )
    );
  }

  /**
   * @param $irma_url string
   * @return String
   */
  function interwikiExpand( $irma_url ) {
    # try to make it into a title object
    $nt = Title::newFromText( $irma_url );
    # If it's got an iw, return that
    if ( !is_null( $nt ) && !is_null( $nt->getInterwiki() )
      && strlen( $nt->getInterwiki() ) > 0 ) {
      return $nt->getFullUrl( '', false, PROTO_CANONICAL );
    } else {
      return $irma_url;
    }
  }

  # Login, Finish

  /**
   * @param $irma_url string
   * @return bool
   */
  function canLogin( $irma_url ) {
    global $wgIRMAConsumerDenyByDefault, $wgIRMAConsumerAllow, $wgIRMAConsumerDeny;

    if ( $this->isLocalUrl( $irma_url ) ) {
      return false;
    }

    if ( $wgIRMAConsumerDenyByDefault ) {
      $canLogin = false;
      foreach ( $wgIRMAConsumerAllow as $allow ) {
        if ( preg_match( $allow, $irma_url ) ) {
          wfDebug( "IRMA: $irma_url matched allow pattern $allow.\n" );
          $canLogin = true;
          foreach ( $wgIRMAConsumerDeny as $deny ) {
            if ( preg_match( $deny, $irma_url ) ) {
              wfDebug( "IRMA: $irma_url matched deny pattern $deny.\n" );
              $canLogin = false;
              break;
            }
          }
          break;
        }
      }
    } else {
      $canLogin = true;
      foreach ( $wgIRMAConsumerDeny as $deny ) {
        if ( preg_match( $deny, $irma_url ) ) {
          wfDebug( "IRMA: $irma_url matched deny pattern $deny.\n" );
          $canLogin = false;
          foreach ( $wgIRMAConsumerAllow as $allow ) {
            if ( preg_match( $allow, $irma_url ) ) {
              wfDebug( "IRMA: $irma_url matched allow pattern $allow.\n" );
              $canLogin = true;
              break;
            }
          }
          break;
        }
      }
    }
    return $canLogin;
  }

  /**
   * @param $url string
   * @return bool
   */
  function isLocalUrl( $url ) {
    global $wgCanonicalServer, $wgArticlePath;

    $pattern = $wgCanonicalServer . $wgArticlePath;
    $pattern = str_replace( '$1', '(.*)', $pattern );
    $pattern = str_replace( '?', '\?', $pattern );

    return (bool)preg_match( '|^' . $pattern . '$|', $url );
  }

  /**
   * @param $irma_url string
   * @param $finish_page
   */
  function login( $irma_url, $finish_page, $skipTokenTestBecauseForcedProvider = false ) {
    global $wgOut, $wgUser, $wgRequest, $wgIRMATrustRoot;

    // Check whether an login or a convert token is present

    // Token test is skipped in the specific case that the wiki is set up to use a forced provider.
    // This login function is then called internally in the same web request.
    // In this case, for example when directly coming from the login link on the MainPage, we don't have any pre-login token

    if ( !$skipTokenTestBecauseForcedProvider
      && ( LoginForm::getLoginToken() !== $wgRequest->getVal( 'irmaProviderSelectionLoginToken' ) )
      && !( $wgUser->matchEditToken( $wgRequest->getVal( 'irmaConvertToken' ), 'irmaConvertToken' ) ) ) {

      $wgOut->showErrorPage( 'irmaerror', 'irma-error-request-forgery' );
      return;
    }

    # If it's an interwiki link, expand it
    $irma_url = $this->interwikiExpand( $irma_url );
    wfDebug( "IRMA: Attempting login with url: $irma_url\n" );

    # Check if the URL is allowed

    if ( !$this->canLogin( $irma_url ) ) {
      $wgOut->showErrorPage( 'irmapermission', 'irmapermissiontext' );
      return;
    }

    if ( !is_null( $wgIRMATrustRoot ) ) {
      $trust_root = $wgIRMATrustRoot;
    } else {
      global $wgScriptPath, $wgCanonicalServer;
      $trust_root = $wgCanonicalServer . $wgScriptPath;
    }

    wfSuppressWarnings();

    $consumer = $this->getConsumer();

    if ( !$consumer ) {
      wfDebug( "IRMA: no consumer\n" );
      $wgOut->showErrorPage( 'irmaerror', 'irmaerrortext' );
      return;
    }

    # Make sure the user has a session!
    $this->setupSession();

    $auth_request = $consumer->begin( $irma_url );

    // Handle failure status return values.
    if ( !$auth_request ) {
      wfDebug( "IRMA: no auth_request for {$irma_url}\n" );
      $wgOut->showErrorPage(
        'irmaerror',
        'irma-error-no-auth',
        array( $irma_url )
      );
      return;
    }

    if ( Auth_IRMA::isFailure( $auth_request ) ) {
      wfDebug( "IRMA: auth_request failure for {$irma_url}:\n" . print_r( $auth_request, true ) ."\n" );
      $wgOut->showErrorPage(
        'irmaerror',
        'irma-error-server-response',
        array( $irma_url, "{$auth_request->message} (status: {$auth_request->status})." )
      );
      return;
    }

    # Check the processed URLs, too

    $endpoint = $auth_request->endpoint;

    if ( !is_null( $endpoint ) ) {
      # Check if the URL is allowed

      if ( isset( $endpoint->identity_url ) && !$this->canLogin( $endpoint->identity_url ) ) {
        $wgOut->showErrorPage( 'irmapermission', 'irmapermissiontext' );
        return;
      }

      if ( isset( $endpoint->delegate ) && !$this->canLogin( $endpoint->delegate ) ) {
        $wgOut->showErrorPage( 'irmapermission', 'irmapermissiontext' );
        return;
      }
    }

    $sreg_request = Auth_IRMA_SRegRequest::build(
      // Required
      array(),
      // Optional
      array( 'nickname', 'email', 'fullname', 'language', 'timezone' )
    );

    if ( $sreg_request ) {
      $auth_request->addExtension( $sreg_request );
    }

    // Create attribute request object. Depending on your endpoint, you can request many things:
    // see http://code.google.com/apis/accounts/docs/IRMA.html#Parameters for parameters.
    // Usage: make($type_uri, $count=1, $required=false, $alias=null)
    $attribute[] = Auth_IRMA_AX_AttrInfo::make( 'http://axschema.org/contact/email', 1, 1, 'email' );
    $attribute[] = Auth_IRMA_AX_AttrInfo::make( 'http://axschema.org/namePerson/first', 1, 1, 'firstname' );
    $attribute[] = Auth_IRMA_AX_AttrInfo::make( 'http://axschema.org/namePerson/last', 1, 1, 'lastname' );

    // Create AX fetch request and add attributes
    $ax_request = new Auth_IRMA_AX_FetchRequest;

    foreach ( $attribute as $attr ) {
      $ax_request->add( $attr );
    }

    if ( $ax_request ) {
      $auth_request->addExtension( $ax_request );
    }

    $process_url = $this->scriptUrl( $finish_page );

    if ( $auth_request->shouldSendRedirect() ) {

      $redirect_url = $auth_request->redirectURL( $trust_root, $process_url );
      if ( Auth_IRMA::isFailure( $redirect_url ) ) {
        displayError( "Could not redirect to server: " . $redirect_url->message );
      } else {
        # OK, now go
        $wgOut->redirect( $redirect_url );
      }

    } else {

      // Generate form markup and render it.
      $form_id = 'irma_message';
      $form_html = $auth_request->formMarkup(
        $trust_root,
        $process_url,
        false,
        array( 'id' => $form_id )
      );

      // Display an error if the form markup couldn't be generated;
      // otherwise, render the HTML.
      if ( Auth_IRMA::isFailure( $form_html ) ) {
        displayError( 'Could not redirect to server: ' . $form_html->message );
      } else {

        $wgOut->addWikiMsg( 'irmaautosubmit' );
        $wgOut->addHTML( $form_html );

        // WORKAROUND FOR SETTING THE IDENTIFIER SELECTION
        // OVERWRITE THE TWO HIDDEN FORM VALUES BEFORE AUTO-SUBMITTING THE FORM

        $wgOut->addInlineScript(
          "jQuery( document ).ready( function(){
            jQuery( \"input[name*='irma.identity']\").val( \"http://specs.irma.net/auth/2.0/identifier_select\" );
            jQuery( \"input[name*='irma.claimed_id']\").val( \"http://specs.irma.net/auth/2.0/identifier_select\" );
            jQuery( \"#" . $form_id . "\" ).submit();
          });"
        );
      }

    }

    wfRestoreWarnings();
  }

  /**
   * @param $par string|Title|bool
   * @return string
   */
  function scriptUrl( $par = false ) {

    if ( !is_object( $par ) ) {
      $nt = $this->getTitle( $par );
    } else {
      $nt = $par;
    }

    if ( $nt === null ) {
      return '';
    }

    // adding a dummy parameter forces a canonical url which we need
    return $nt->getFullURL( array( 'dummy' => 'x'), false, PROTO_CANONICAL );

  }

  protected function setupSession() {
    if ( session_id() == '' ) {
      wfSetupSession();
    }
  }

  /**
   * @param $irma
   */
  function loginSetCookie( $irma ) {
    global $wgRequest, $wgIRMACookieExpiration;
    $wgRequest->response()->setcookie( 'IRMA', $irma, time() +  $wgIRMACookieExpiration );
  }

  /**
   * Find the user with the given irma
   *
   * @param $user
   * @return array return the registered IRMA urls and registration timestamps (if available)
   */
  public static function getUserIRMAInformation( $user ) {
    $irma_urls_registration = array();

    if ( $user instanceof User && $user->getId() != 0 ) {
      $dbr = wfGetDB( DB_SLAVE );
      $res = $dbr->select(
        array( 'user_irma' ),
        array( 'uoi_irma', 'uoi_user_registration' ),
        array( 'uoi_user' => $user->getId() ),
        __METHOD__
      );

      foreach ( $res as $row ) {
        $irma_urls_registration[] = $row;
      }
      $res->free();
    }
    return $irma_urls_registration;
  }

  /**
   * @param $irma string
   * @return null|User
   */
  public static function getUserFromUrl( $irma ) {
    $dbr = wfGetDB( DB_SLAVE );

    $id = $dbr->selectField(
      'user_irma',
      'uoi_user',
      array( 'uoi_irma' => $irma ),
      __METHOD__
    );

    if ( $id ) {
      return User::newFromId( $id );
    } else {
      return null;
    }
  }

  /**
   * @param $user User
   * @param $url string
   */
  public static function addUserUrl( $user, $url ) {
    $dbw = wfGetDB( DB_MASTER );

    $dbw->insert(
      'user_irma',
      array(
        'uoi_user' => $user->getId(),
        'uoi_irma' => $url,
        'uoi_user_registration' => wfTimestamp( TS_MW )
      ),
      __METHOD__
    );
  }

  /**
   * @param $user User
   * @param $url string
   * @return bool
   */
  public static function removeUserUrl( $user, $url ) {
    $dbw = wfGetDB( DB_MASTER );

    $dbw->delete(
      'user_irma',
      array(
        'uoi_user' => $user->getId(),
        'uoi_irma' => $url
      ),
      __METHOD__
    );

    return (bool)$dbw->affectedRows();
  }

  # Session stuff
  # -------------

  function returnTo() {
    $this->setupSession();

    $returnto = isset( $_SESSION['irma_returnto'] ) ? $_SESSION['irma_consumer_returnto'] : '';
    $returntoquery = isset( $_SESSION['irma_returntoquery'] ) ? $_SESSION['irma_consumer_returntoquery'] : '';

    return array( $returnto, $returntoquery );
  }

  function setReturnTo( $returnto, $returntoquery ) {
    $this->setupSession();

    $_SESSION['irma_consumer_returnto'] = $returnto;
    $_SESSION['irma_consumer_returntoquery'] = $returntoquery;
  }
}