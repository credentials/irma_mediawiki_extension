<?php
/**
 * IRMA.php -- Make MediaWiki an IRMA issuer and verifier
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

if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

define( 'MEDIAWIKI_IRMA_VERSION', '0.1 20130924' );

$path = dirname( __FILE__ );
set_include_path( implode( PATH_SEPARATOR, array( $path ) ) . PATH_SEPARATOR . get_include_path() );

# CONFIGURATION VARIABLES

/**
 * Expiration time for the IRMA cookie. Lets the user re-authenticate
 * automatically if their session is expired. Only really useful if
 * it's much greater than $wgCookieExpiration. Default: about one year.
 */
$wgIRMACookieExpiration = 365 * 24 * 60 * 60;

$wgIRMAWebService = "http://localhost:8080/irma_web_service";

# END CONFIGURATION VARIABLES

$wgExtensionCredits['other'][] = array(
	'name' => 'IRMA',
	'version' => MEDIAWIKI_IRMA_VERSION,
	'path' => __FILE__,
	'author' => array( 'Pim Vullers' ),
	'url' => 'https://www.irmacard.org/',
	'descriptionmsg' => 'irma-desc',
);

$dir = $path . '/';

$wgExtensionMessagesFiles['IRMA'] = $dir . 'IRMA.i18n.php';

$wgAutoloadClasses['IRMAHooks'] = $dir . 'IRMA.hooks.php';
$wgAutoloadClasses['SpecialIRMACreateAccount'] = $dir . 'IRMA.hooks.php';
$wgAutoloadClasses['SpecialIRMAUserLogin'] = $dir . 'IRMA.hooks.php';

# Autoload common parent with utility methods
$wgAutoloadClasses['SpecialIRMALogin'] = $dir . 'IRMA.body.php';

$wgAutoloadClasses['IRMAUsercreateTemplate'] = $dir . 'templates/Usercreate.php';

$wgHooks['BeforePageDisplay'][] = 'IRMAHooks::onBeforePageDisplay';
$wgHooks['SpecialPage_initList'][] = 'IRMAHooks::onSpecialPage_initList';

$myResourceTemplate = array(
	'localBasePath' => $path,
	'remoteExtPath' => 'IRMA/',
	'group' => 'ext.irma',
);

$wgResourceModules['ext.irma.login'] = $myResourceTemplate + array(
	'scripts' => 'js/ext.irma.login.js',
	'styles' => 'css/ext.irma.css',
	'dependencies' => array(
		'jquery'
	)
);

$wgResourceModules['ext.irma.special.userlogin.signup'] = $myResourceTemplate + array(
	'scripts' => 'js/ext.irma.signup.js',
	'styles' => 'css/ext.irma.css',
	'dependencies' => array(
		'jquery'
	)
);

