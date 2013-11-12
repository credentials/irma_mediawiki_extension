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


class SpecialIRMALogin extends SpecialIRMA {

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
        'src' => "$wgScriptPath/extensions/IRMA/skin/img/IRMAWiki_verifyMember.png"
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
    global $wgUser;

    $iwAttributeStore = json_decode(file_get_contents("$this->iws/attributeStore/$id"), true);

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
}
