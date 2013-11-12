<?php

/**
 * Redirect classes to hijack the core UserLogin and CreateAccount facilities, because
 * they're so badly written as to be impossible to extend
 */

class SpecialIRMACreateAccount extends SpecialRedirectToSpecial {
	function __construct() {
		parent::__construct( 'SpecialIRMACreateAccount', 'IRMACreate', false, array( 'returnto', 'returntoquery' ) );
	}
}

class SpecialIRMAUserLogin extends SpecialRedirectToSpecial {
	function __construct() {
		parent::__construct( 'SpecialIRMAUserLogin', 'IRMALogin', false, array( 'returnto', 'returntoquery' ) );
	}
}

class IRMAHooks {
	public static function onSpecialPage_initList( &$list ) {
		global $wgIRMALoginOnly, $wgIRMAConsumerAndAlsoProvider, $wgSpecialPageGroups, $wgIRMASmallLogoUrl;

		$wgIRMASmallLogoUrl = self::getIRMASmallLogoUrl();

		$list['UserLogin'] = 'SpecialIRMALogin';

		# as Special:CreateAccount is an alias for Special:UserLogin/signup
		# we show our own IRMA page here, too
		$list['CreateAccount'] = 'SpecialIRMACreate';

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
	 * @return string
	 */
	private static function getAssociatedIRMAsTable( $user ) {
		global $wgLang, $wgIRMAForcedProvider;

		$irma_urls_registration = SpecialIRMA::getUserIRMAInformation( $user );
		$delTitle = SpecialPage::getTitleFor( 'IRMAConvert', 'Delete' );

		$rows = '';

		foreach ( $irma_urls_registration as $url_reg ) {

			if ( !empty( $url_reg->uoi_user_registration ) ) {
				$registrationTime = wfMessage(
					'irma-urls-registration-date-time',
					$wgLang->timeanddate( $url_reg->uoi_user_registration, true ),
					$wgLang->date( $url_reg->uoi_user_registration, true ),
					$wgLang->time( $url_reg->uoi_user_registration, true )
				)->text();
			} else {
				$registrationTime = '';
			}

			$rows .= Xml::tags( 'tr', array(),
				Xml::tags( 'td',
					array(),
					self::getIRMASmallLogoUrlImageTag() .
						"&nbsp;" .
						Xml::element( 'a', array( 'href' => $url_reg->uoi_irma ), $url_reg->uoi_irma )
				) .
				Xml::tags( 'td',
					array(),
					$registrationTime
				) .
				Xml::tags( 'td',
					array(),
					Linker::link( $delTitle, wfMessage( 'irma-urls-delete' )->text(),
						array(),
						array( 'url' => $url_reg->uoi_irma )
					)
				)
			) . "\n";
		}
		$info = Xml::tags( 'table', array( 'class' => 'wikitable' ),
			Xml::tags( 'tr', array(),
				Xml::element( 'th',
					array(),
					wfMessage( 'irma-urls-url' )->text() ) .
				Xml::element( 'th',
					array(),
					wfMessage( 'irma-urls-registration' )->text() ) .
				Xml::element( 'th',
					array(),
					wfMessage( 'irma-urls-action' )->text() )
				) . "\n" .
			$rows
		);

		if ( !is_string( $wgIRMAForcedProvider ) ) {
			$info .= Linker::link(
				SpecialPage::getTitleFor( 'IRMAConvert' ),
				wfMessage( 'irma-add-url' )->escaped()
			);
		}

		return $info;

	}

	/**
	 * @param $user User
	 * @return string
	 */
	private static function getTrustTable( $user ) {
		$trusted_sites = SpecialIRMAServer::GetUserTrustArray( $user );
		$rows = '';

		foreach ( $trusted_sites as $key => $value ) {

			$deleteTrustedSiteTitle = SpecialPage::getTitleFor( 'IRMAServer', 'DeleteTrustedSite' );

			if ( $key !== "" ) {

				$rows .= Xml::tags( 'tr', array(),
					Xml::tags( 'td',
						array(),
						Xml::element( 'a', array( 'href' => $key ), $key )
					) .
					Xml::tags( 'td',
						array(),
						Linker::link( $deleteTrustedSiteTitle,
							wfMessage( 'irma-trusted-sites-delete-link-action-text' )->text(),
							array(),
							array( 'url' => $key )
						)
					)
				) . "\n";

			}

		}

		if ( $rows !== "" ) {

			$rows .= Xml::tags( 'tr', array(),
				Xml::tags( 'td',
					array(),
					"&nbsp;"
				) .
				Xml::tags( 'td',
					array(),
					Linker::link( $deleteTrustedSiteTitle,
						wfMessage( 'irma-trusted-sites-delete-all-link-action-text' )->text(),
						array(),
						array( 'url' => "*" )
					)
				)
			) . "\n";

		}

		return Xml::tags( 'table', array( 'class' => 'wikitable' ),
			Xml::tags( 'tr', array(),
				Xml::element( 'th',
					array(),
					wfMessage( 'irma-trusted-sites-table-header-column-url' )->text() ) .
				Xml::element( 'th',
					array(),
					wfMessage( 'irma-trusted-sites-table-header-column-action' )->text() )
			) . "\n" .
			$rows
		);
	}

	/**
	 * @param $user User
	 * @param $preferences array
	 * @return bool
	 */
	public static function onGetPreferences( $user, &$preferences ) {
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

		$preferences['irma-associated-irmas'] =
			array(
				'section' => 'irma/irma-associated-irmas',
				'type' => 'info',
				'label-message' => 'irma-associated-irmas-label',
				'default' => self::getAssociatedIRMAsTable( $user ),
				'raw' => true,
			);

		$preferences['irma_trust'] =
			array(
				'type' => 'hidden',
			);

		return true;
	}

	/**
	 * @param $user User
	 * @return bool
	 */
	public static function onDeleteAccount( &$user ) {
		global $wgOut;

		if ( is_object( $user ) ) {

			$username = $user->getName();
			$userID = $user->getID();

  			$dbw = wfGetDB( DB_MASTER );

			$dbw->delete( 'user_irma', array( 'uoi_user' => $userID ) );
			$wgOut->addHTML( "IRMA " . wfMessage( 'usermerge-userdeleted', $username, $userID )->escaped() . "<br />\n" );

			wfDebug( "IRMA: deleted IRMA user $username ($userID)\n" );

		}

		return true;

	}

	/**
	 * @param $fromUserObj User
	 * @param $toUserObj User
	 * @return bool
	 */
	public static function onMergeAccountFromTo( &$fromUserObj, &$toUserObj ) {
		global $wgOut, $wgIRMAMergeOnAccountMerge;

		if ( is_object( $fromUserObj ) && is_object( $toUserObj ) ) {
			$fromUsername = $fromUserObj->getName();
			$fromUserID = $fromUserObj->getID();
			$toUsername = $toUserObj->getName();
			$toUserID = $toUserObj->getID();

			if ( $wgIRMAMergeOnAccountMerge ) {
				$dbw = wfGetDB( DB_MASTER );

				$dbw->update( 'user_irma', array( 'uoi_user' => $toUserID ), array( 'uoi_user' => $fromUserID ) );
				$wgOut->addHTML( "IRMA " . wfMessage( 'usermerge-updating', 'user_irma', $fromUsername, $toUsername )->escaped() . "<br />\n" );

				wfDebug( "IRMA: transferred IRMA(s) of $fromUsername ($fromUserID) => $toUsername ($toUserID)\n" );

			} else {
				$wgOut->addHTML( wfMessage( 'irma-irmas-were-not-merged' )->escaped() . "<br />\n" );
				wfDebug( "IRMA: IRMA(s) were not merged for merged users $fromUsername ($fromUserID) => $toUsername ($toUserID)\n" );
			}
		}
		return true;
	}

	/**
	 * @param $updater DatabaseUpdater
	 * @return bool
	 */
	public static function onLoadExtensionSchemaUpdates( $updater = null ) {
		// >= 1.17 support
		$updater->addExtensionTable( 'user_irma',
			dirname( __FILE__ ) . '/patches/irma_table.sql' );

		# when updating an older IRMA version
		# make the index non unique (remove unique index uoi_user, add new index user_irma_user)
		$db = $updater->getDB();
		$info = $db->fieldInfo( 'user_irma', 'uoi_user' );

		if ( $info && !$info->isMultipleKey() ) {
			$updater->addExtensionUpdate( array( 'dropIndex', 'user_irma', 'uoi_user',
				dirname( __FILE__ ) . '/patches/patch-drop_non_multiple_key_index_uoi_user.sql', true ) );
			$updater->addExtensionIndex( 'user_irma', 'user_irma_user',
				dirname( __FILE__ ) . '/patches/patch-add_multiple_key_index_user_irma_user.sql' );
		}

		# uoi_user_registration field was added in IRMA version 0.937
		$updater->addExtensionField( 'user_irma', 'uoi_user_registration',
			dirname( __FILE__ ) . '/patches/patch-add_uoi_user_registration.sql' );

		return true;
	}

	/**
	 * @return string
	 */
	private static function getIRMASmallLogoUrl() {
		global $wgIRMASmallLogoUrl, $wgExtensionAssetsPath;

		if ( !$wgIRMASmallLogoUrl ) {
			return $wgExtensionAssetsPath . '/IRMA/skin/icons/irma-inputicon.png';
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
