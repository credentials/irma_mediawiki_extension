<?php

/**
 * Redirect classes to hijack the core UserLogin and CreateAccount facilities, because
 * they're so badly written as to be impossible to extend
 */

class SpecialIRMACreateAccount extends SpecialRedirectToSpecial {
  function __construct() {
    parent::__construct( 'SpecialIRMACreateAccount', 'IRMALogin' );
  }
}

class SpecialIRMAUserLogin extends SpecialRedirectToSpecial {
  function __construct() {
    parent::__construct( 'SpecialIRMAUserLogin', 'IRMALogin', false, array( 'returnto', 'returntoquery' ) );
  }
}

class IRMAHooks {
/*  public static function onSpecialPage_initList( &$list ) {
    global $wgIRMASmallLogoUrl, $wgSpecialPageGroups;

    $wgIRMASmallLogoUrl = self::getIRMASmallLogoUrl();

    $list['UserLogin'] = 'SpecialIRMALogin';
    $list['CreateAccount'] = 'SpecialIRMALogin/signup';

    # Special pages are added at global scope;
    # remove server-related ones if client-only flag is set
    $addList = array( 'Login', 'Create' );

    foreach ( $addList as $sp ) {
      $key = 'IRMA' . $sp;
      $list[$key] = 'SpecialIRMA' . $sp;
      $wgSpecialPageGroups[$key] = 'irma';
    }

    return true;
  }
*/
  /**
   * @param $out OutputPage
   * @param $sk
   * @return bool
   */
  public static function onBeforePageDisplay( $out, &$sk ) {
    global $wgHideIRMALoginLink, $wgUser;

    # We need to do this *before* PersonalUrls is called
    if ( !$wgHideIRMALoginLink && $wgUser->getID() == 0 ) {
      $out->addHeadItem( 'irma-loginstyle', self::loginStyle() );
    }

    return true;
  }


  /**
   * @param $user User
   * @param $preferences array
   * @return bool
   */
/*  public static function onGetPreferences( $user, &$preferences ) {
    global $wgIRMAShowUrlOnUserPage, $wgHiddenPrefs,
      $wgAuth, $wgUser, $wgLang, $wgIRMAConsumerAndAlsoProvider;

    // setting up user_properties up_property database key names
    // example 'irma-userinfo-update-on-login-nickname'
    // FIXME: this could better be saved as a JSON encoded array in a single key

    $update = array();
    $update[ wfMessage( 'irmanickname' )->text() ] = '-nickname';
    $update[ wfMessage( 'irmaemail' )->text() ] = '-email';
    if ( !in_array( 'realname', $wgHiddenPrefs ) ) {
      $update[ wfMessage( 'irmafullname' )->text() ] = '-fullname';
    }
    $update[ wfMessage( 'irmalanguage' )->text() ] = '-language';
    $update[ wfMessage( 'irmatimezone' )->text() ] = '-timezone';

    $preferences['irma-userinfo-update-on-login'] =
      array(
        'section' => 'irma/irma-userinfo-update-on-login',
        'type' => 'multiselect',
        'label-message' => 'irma-userinfo-update-on-login-label',
        'options' => $update,
      );

    return true;
  }
*/
  /**
   * @return string
   */
  private static function getIRMASmallLogoUrl() {
    global $wgIRMASmallLogoUrl, $wgExtensionAssetsPath;

    if ( !$wgIRMASmallLogoUrl ) {
      return $wgExtensionAssetsPath . '/IRMA/icons/irma-inputicon.png';
    } else {
      return $wgIRMASmallLogoUrl;
    }

  }

  /**
   * @return string
   */
  public static function getIRMASmallLogoUrlImageTag() {
    return Xml::element( 'img',
      array( 'src' => self::getIRMASmallLogoUrl(), 'alt' => 'IRMA' ),
      ''
    );
  }

  /**
   * @return string
   */
  private static function loginStyle() {
    $irmaLogo = self::getIRMASmallLogoUrl();
    return <<<EOS
<style type='text/css'>
li#pt-irmalogin {
background: url($irmaLogo) top left no-repeat;
padding-left: 20px;
text-transform: none;
}
</style>
EOS;
  }

}
