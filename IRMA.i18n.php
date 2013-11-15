<?php
/**
 * IRMA.i18n.php -- Interface messages for IRMA for MediaWiki
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

$messages = array();

/** English
 * @author Pim Vullers <pim@cs.ru.nl>
 */
$messages['en'] = array(
	'irma-desc' => 'Let users log in to the wiki with their [//irmacard.org/ IRMA card].',
	'irmauserlogin' => 'Log in with your IRMAcard',
	'irmacreateaccount' => 'Create account with your IRMAcard',
	'irma-register-credential' => 'Acquire IRMAwiki credential',
	'irma-verify-credential' => 'Verify IRMAwiki credential',
	'irmaerror' => 'Verification error',
	'irmaerrortext' => 'An error occurred during verification of the IRMA URL.',
  'irmaaccountcreated' => 'Account created',
  'irmaaccountcreatedtext' => 'The user account for $1 has been created.',
	'irmaconfigerror' => 'IRMA configuration error',
	'irmaconfigerrortext' => 'The IRMA storage configuration for this wiki is invalid.
Please consult an [[Special:ListUsers/sysop|administrator]].',
	'irmacancel' => 'Verification cancelled',
	'irmacanceltext' => 'Verification of the IRMA URL was cancelled.',
	'irmafailure' => 'Verification failed',
	'irmafailuretext' => 'Verification of the IRMA URL failed.
Error message: "$1"',
	'irmasuccess' => 'Verification succeeded',
	'irmasuccesstext' => "'''Successful verification and log in as user $1'''.
	You can now edit protected pages.",
	'irmaoptional' => 'Optional',
	'irmarequired' => 'Required',
	'irmanickname' => 'Nickname',
	'irmafullname' => 'Real name',
	'irmaemail' => 'Email address',
	'irmalanguage' => 'Language',
	'irmatimezone' => 'Time zone',
	'irmachoosenick' => 'Your nickname ($1)',
	'irmachoosefull' => 'Your real name ($1)',
	'irmachooseusername' => 'Username:',
	'irmachoosepassword' => 'Password:',
	'irmaalreadyloggedin' => 'You are already logged in',
	'irmaalreadyloggedintext' => "'''You are already logged in, $1!'''",
	'irmaregisterinstructions' => '{{SITENAME}} uses the [//irmacard.org/ IRMA] technology for secure and privacy-friendly authentication on this wiki.',
	'irmalogininstructions' => '{{SITENAME}} uses the [//irmacard.org/ IRMA] technology for secure and privacy-friendly authentication on this wiki. In order to login, present your IRMA card in order to verify your IRMAwiki credential. If you do not yet have an IRMAwiki credential, [[Special:UserCreate|register]] first.',
	'prefs-irma' => 'IRMA',
	'prefs-irma-hide-irma' => 'IRMA URL on your user page',
	'prefs-irma-userinfo-update-on-login' => 'IRMA user information update',
	'prefs-irma-associated-irmas' => 'Your IRMAs for login to {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Trusted sites',
	'prefs-irma-local-identity' => 'Your IRMA for login to other sites',
	'irma-hide-irma-label' => 'Hide your IRMA URL on your user page.',
	'irma-show-irma-url-on-userpage-always' => 'Your IRMA is always shown on your user page when you visit it.',
	'irma-show-irma-url-on-userpage-never' => 'Your IRMA is never shown on your user page.',
	'irma-userinfo-update-on-login-label' => 'User profile information fields which will be automatically updated from IRMA persona every time when you log in:',
	'irma-associated-irmas-label' => 'IRMAs associated with your account:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Action',
	'irma-urls-registration' => 'Registration time',
	'irma-urls-registration-date-time'  => '$1', # only translate this message to other languages if you have to change it
	'irma-urls-delete' => 'Delete',
	'irma-add-url' => 'Add a new IRMA to your account',
	'irma-trusted-sites-label' => 'Sites you trust and where you have used your IRMA for logging in:',
	'irma-trusted-sites-table-header-column-url' => 'Trusted sites',
	'irma-trusted-sites-table-header-column-action' => 'Action',
	'irma-trusted-sites-delete-link-action-text' => 'Delete',
	'irma-trusted-sites-delete-all-link-action-text' => 'Delete all trusted sites',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Trusted site deletion',
	'irma-trusted-sites-delete-confirmation-question' => 'By clicking the "{{int:irma-trusted-sites-delete-confirmation-button-text}}" button, you will remove "$1" from the list of sites you trust.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'By clicking the "{{int:irma-trusted-sites-delete-confirmation-button-text}}" button, you will remove all trusted sites from your user profile.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirm',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" was successfully removed from the list of sites you trust.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'All sites you previously trusted were successfully removed from your user profile.',

	'irma-local-identity' => 'Your IRMA:',

	'irma-login-or-create-account' => 'Log in or create a new account',
	'irma-provider-label-irma' => 'Enter your IRMA URL',
	'irma-provider-label-google' => 'Log in using your Google account',
	'irma-provider-label-yahoo' => 'Log in using your Yahoo account',
	'irma-provider-label-aol' => 'Enter your AOL screenname',
	'irma-provider-label-wmflabs' => 'Log in using your Wmflabs account',
	'irma-provider-label-other-username' => 'Enter your $1 username',

	'specialpages-group-irma' => 'IRMA service pages and status information',

	# Rights
	'right-irma-converter-access' => 'Can add or convert their account to use IRMA identities',
	'right-irma-dashboard-access' => 'Standard access to the IRMA dashboard',
	'right-irma-dashboard-admin' => 'Administrator access to the IRMA dashboard',

	# Associated actions - in the sentence "You do not have permission to X"
	'action-irma-converter-access' => 'add or convert your account to use IRMA identities',
	'action-irma-dashboard-access' => 'access the IRMA dashboard',
	'action-irma-dashboard-admin' => 'access the IRMA administrator dashboard',

	'irma-dashboard-title' => 'IRMA dashboard',
	'irma-dashboard-title-admin' => 'IRMA dashboard (administrator)',
	'irma-dashboard-introduction' => 'The current IRMA extension settings ([$1 help])',
	'irma-dashboard-number-irma-users' => 'Number of users with IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Number of IRMAs (total)',
	'irma-dashboard-number-users-without-irma' => 'Number of users without IRMA',
);

/** Message documentation (Message documentation)
 * @author Dbc334
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author Hamilton Abreu
 * @author IAlex
 * @author Jon Harald Søby
 * @author Nemo bis
 * @author Nike
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 * @author The Evil IP address
 * @author Thomas Gries
 * @author Umherirrender
 * @author Wikinaut
 */
$messages['qqq'] = array(
	'irma-desc' => '{{desc|name=Open ID|url=http://www.mediawiki.org/wiki/Extension:IRMA}}',
	'irmaidentifier' => '{{doc-special|IRMAIdentifier|unlisted=1}}',
	'irmalogin' => 'Used as page title in Special:IRMALogin.',
	'irmaserver' => 'Used as page title of Special:IRMAServer.',
	'irma-identifier-page-text-user' => 'A short text which describes this technical IRMA identifier page for a user. The page is used only during IRMA authentication and is generally not visited otherwise.

Parameters:
* $1 - a user name',
	'irma-identifier-page-text-different-user' => 'A short text which describes this technical IRMA identifier page for a user other than then the visiting logged-in user. The page is used only during IRMA authentication and is generally not visited otherwise.

Parameters:
* $1 - a User ID',
	'irma-identifier-page-text-no-such-local-irma' => 'A short text which describes this technical IRMA identifier page when the id (subpage) is not valid in that wiki, because no user has that User ID. The page is used only during IRMA authentication and is generally not visited otherwise.',
	'irma-server-identity-page-text' => 'A short text which describes this technical IRMA server identity page which is only used during IRMA authentication and not used otherwise.',
	'irmaxrds' => 'Used as page title in Special:IRMAXRDS.

[[w:Yadis|Yadis]] is a communications protocol for discovery of services such as IRMA, OAuth, and XDI connected to a Yadis ID.',
	'irmaconvert' => 'Used as page title in Special:IRMAConvert.',
	'irmaerror' => 'Used as error page title.

This message is title for the following error messages:
* {{msg-mw|irma-convert-already-your-irma-text}}
* {{msg-mw|irma-convert-other-users-irma-text}}
* {{msg-mw|irmaclientonlytext}}
* {{msg-mw|irmadeleteerrornopassword}}
* {{msg-mw|irmadeleteerrorirmaonly}}
* {{msg-mw|irmaerrortext}}
* {{msg-mw|irma-error-no-auth}}
* {{msg-mw|irma-error-server-response}}
* {{msg-mw|irma-error-request-forgery}}
* {{msg-mw|irma-error-irma-convert-not-allowed-forced-provider}}',
	'irmaerrortext' => 'Used as error message.

The title for this error message is {{msg-mw|Openiderror}}.',
	'irma-error-no-auth' => 'Used as error message in case that an unspecified authentication response/request error occurred during the verification of the IRMA URL.

Parameter:
* $1 - a name or fully qualified URL for an internally pre-programmed provider

The title for this error message is {{msg-mw|Openiderror}}.',
	'irma-error-server-response' => 'Used as error message during the verification of the IRMA.

Parameters:
* $1 - a name or fully qualified URL for an internally pre-programmed provider
* $2 - the received server response

The title for this error message is {{msg-mw|Openiderror}}.',
	'irma-error-request-forgery' => 'The error message when an invalid token was found.',
	'irma-error-wrong-force-provider-setting' => 'Used as error message in case of an internal error occurred, if the URL value for a forced provider (designated by its internal name or a fully qualified URL) is incorrect because it contains a username parameter (it must not).

Parameters:
* $1 - a name or fully qualified URL for an internally pre-programmed provider

The title for this error message is {{msg-mw|Openiderror}}.',
	'irma-error-irma-convert-not-allowed-forced-provider' => 'Used as error message if someone tries to directly access the IRMA convert screen
even when the wiki only allowed a forced provider.

Parameter:
* $1 - a name or fully qualified URL for an internally pre-programmed provider

The title for this error message is {{msg-mw|Openiderror}}.',
	'irmaconfigerror' => 'Used as error title for the following error message:
* {{msg-mw|Openidconfigerrortext}}',
	'irmaconfigerrortext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidconfigerror}}.',
	'irmapermission' => 'Used as error title for the following error message:
* {{msg-mw|Openidpermissiontext}}',
	'irmapermissiontext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidpermission}}.',
	'irmacancel' => 'Used as error title for the following error message:
* {{msg-mw|Openidcanceltext}}',
	'irmacanceltext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidcancel}}.',
	'irmafailure' => 'Used as error title for the following error message:
* {{msg-mw|Openidfailuretext}}',
	'irmafailuretext' => 'Used as error message.

The title for this error message is {{msg-mw|Openidfailure}}.

Parameters:
* $1 - error message, or empty string',
	'irmasuccess' => 'Used as page title.

The page body for this title is:
* {{msg-mw|Openidsuccesstext}}',
	'irmasuccesstext' => 'Used as page body. The page title for this message is {{msg-mw|Openidsuccess}}.

Parameters:
* $1 - a username
* $2 - an IRMA',
	'irmausernameprefix' => 'Used as username prefix, if the nickname is not defined or is empty.',
	'irmaserverlogininstructions' => 'The message is shown to users when they want to log in on another site ($3) with their MediaWiki userpage URL (this MediaWiki as IRMA server) acting as IRMA identity.

If not logged in by cookie or session, the MediaWiki prompts the user to log in as user $2. After a successful login to the MediaWiki which acts as IRMA server, the process flow is redirected to the other IRMA consumer site, where the user will be logged via their (MediaWiki userpage) IRMA.

System message output example after parameter substitution:

"http://www.consumer.org/foo requests that you enter your password for your user MeMyself page http://www.server.org/mediawiki/index.php/User:MeMyself (this is your IRMA URL)"

Parameters:
* $1 - the fully specified user page URL which acts as IRMA identity. This is the IRMA identity for log-ins on the other, requesting site $3 (the IRMA consumer site $3)
* $2 - MediaWiki account username (on this wiki, which acts as IRMA server). Remark: a password must be associated to that MediaWiki account, IRMA alone is not sufficient.
* $3 - IRMA consumer site URL',
	'irmatrustinstructions' => 'Parameters:
* $1 - a trust root. A trust root looks much like a normal URL, but is used to describe a set of URLs. Trust roots are used by IRMA to verify that a user has approved the IRMA enabled website.',
	'irmaallowtrust' => 'Used as label for the checkbox in Special:IRMAServer. Parameters:
* $1 - a trust root. A trust root looks much like a normal URL, but is used to describe a set of URLs. Trust roots are used by IRMA to verify that a user has approved the IRMA enabled website.',
	'irmanopolicy' => 'unused at this time',
	'irmapolicy' => 'unused at this time. Parameters:
* $1 - the URL',
	'irmaoptional' => '{{Identical|Optional}}',
	'irmarequired' => '{{Identical|Required}}',
	'irmanickname' => '{{Identical|Nickname}}',
	'irmafullname' => '{{Identical|Real name}}',
	'irmaemail' => '{{Identical|E-mail address}}',
	'irmalanguage' => '{{Identical|Language}}',
	'irmatimezone' => '{{Identical|Time zone}}',
	'irmachooselegend' => 'Used as fieldset label for the "Choose an account" form.

The instruction for the form is:
* {{msg-mw|irmachooseinstructions}}',
	'irmachooseinstructions' => 'Used as instruction for the "Choose an account" form.

See also:
* {{msg-mw|Openidchooselegend|fieldset label}}',
	'irmachoosenick' => 'Used as label for the radio button in Special:IRMALogin. Parameters:
* $1 - nickname',
	'irmachoosefull' => 'Used as label for the radio button in Special:IRMALogin. Parameters:
* $1 - fullname',
	'irmachooseurl' => 'Used as label for the radio button in Special:IRMALogin. Parameters:
* $1 - IRMA URL',
	'irmachooseauto' => "Used as label for the radio button in Special:IRMALogin. Parameters:
* $1 - nickname. If nickname doesn't exist or is empty, $1 is {{msg-mw|irmausernameprefix}}.",
	'irmachoosemanual' => 'Used as label for the radio button in Special:IRMALogin.

This message is followed by the "Account name" input box.',
	'irmachooseexisting' => 'Used as label for the radio button in Special:IRMALogin.

This message is followed by the following messages:
* {{msg-mw|irmachooseusername}} (an input box follows)
* {{msg-mw|irmachoosepassword}} (an input box follows)',
	'irmachooseusername' => 'Used as label for input box in Special:IRMALogin.
{{Identical|Username}}',
	'irmachoosepassword' => 'Used as label for the "Password" input box in Special:IRMALogin.
{{Identical|Password}}',
	'irmaconvertinstructions' => 'Used as instruction text for the form in Special:IRMAConvert.

The fieldset label for the form is:
* {{msg-mw|irmaconvertoraddmoreids}}',
	'irmaconvertoraddmoreids' => 'Used as the legend of the form in Special:IRMAConvert',
	'irmaconvertsuccess' => 'Used as page title in Special:IRMAConvert.

The page body for this title is:
* {{msg-mw|Openidconvertsuccesstext}}',
	'irmaconvertsuccesstext' => 'Used as page body.

The page title for this message is {{msg-mw|Openidconvertsuccess}}.

Parameters:
* $1 - IRMA URL',
	'irma-convert-already-your-irma-text' => 'Warning text in case a user tried to add an IRMA which is already associated to their account.

Parameters:
* $1 – the conflicting (already associated) IRMA',
	'irma-convert-other-users-irma-text' => 'Warning text in case a user tried to add an IRMA which is already associated with an account of another user.

Parameters:
* $1 - the conflicting, already associated IRMA',
	'irmaalreadyloggedin' => '',
	'irmaalreadyloggedintext' => 'Parameters:
* $1 - a username',
	'irmanousername' => 'Used as error message. (Commented out at this time.)',
	'irmabadusername' => 'Used as error message. (Commented out at this time.)',
	'irmaautosubmit' => '{{doc-important|"Continue" will never be localised. It is hardcoded in a PHP extension. Translations could be made like ""Continue" (translation)"}}',
	'irmaclientonlytext' => 'Used as error message. Its title is {{msg-mw|Openiderror}}.

This is also used as "404 Not Found" page body in Special:IRMAXRDS.',
	'irmaloginlabel' => 'unused at this time',
	'irmalogininstructions' => 'Used as instruction text for the Login form in Special:IRMALogin.

This message is followed by any one of the following messages:
* {{msg-mw|irmalogininstructions-irmaloginonly|if <code>$wgIRMALoginOnly</code> is TRUE}}
* {{msg-mw|irmalogininstructions-passwordloginallowed|if <code>$wgIRMALoginOnly</code> is FALSE}}',
	'irmalogininstructions-irmaloginonly' => 'Used as instruction text for the Login form in Special:IRMALogin, if <code>$wgIRMALoginOnly</code> is TRUE.

This message follows the message:
* {{msg-mw|Openidlogininstructions}}

See also:
* {{msg-mw|Openidlogininstructions-passwordloginallowed}}',
	'irmalogininstructions-passwordloginallowed' => 'Used as instruction text for the Login form in Special:IRMALogin, if <code>$wgIRMALoginOnly</code> is FALSE.

This message follows the message:
* {{msg-mw|Openidlogininstructions}}

See also:
* {{msg-mw|Openidlogininstructions-irmaloginonly}}',
	'irmaupdateuserinfo' => 'Used in Special:IRMALogin.

This message is followed by list of IRMA attributes (nickname, email and/or language).',
	'irmadelete' => 'Used as page title',
	'irmadelete-text' => 'Refers to {{msg-mw|Openiddelete-button}}.

Followed by the "Delete" form.

Parameters:
* $1 - the URL of the removed site',
	'irmadelete-button' => 'Used as label for the Submit button in the "Delete" form.

The form is preceded by (and used in) {{msg-mw|Openiddelete-text}}.
{{Identical|Confirm}}',
	'irmadeleteerrornopassword' => 'Used as error message in Special:IRMAConvert.

The title for this error message is {{msg-mw|irmaerror}}.

See also:
* {{msg-mw|Openiddeleteerrorirmaonly}}',
	'irmadeleteerrorirmaonly' => 'Used as error message in Special:IRMAConvert.

The title for this error message is {{msg-mw|irmaerror}}.

See also:
* {{msg-mw|Openiddeleteerrornopassword}}',
	'irmadelete-success' => 'Used in Special:IRMAConvert.

See also:
* {{msg-mw|Openiddelete-error}}',
	'irmadelete-error' => 'Used as error message in Special:IRMAConvert.

See also:
* {{msg-mw|Openiddelete-success}}',
	'irma-irmas-were-not-merged' => 'When merging user accounts by UserMerge or similar extensions, IRMA(s) are not merged if $wgIRMAMergeOnAccountMerge=false (default).',
	'prefs-irma' => '{{optional}}
IRMA preferences tab title.
{{Identical|IRMA}}',
	'prefs-irma-hide-irma' => 'Label of a Special:Preference section about IRMA: if you log in with IRMA, you can hide your IRMA URL on your user page.',
	'prefs-irma-userinfo-update-on-login' => 'IRMA user information update (section header)',
	'prefs-irma-associated-irmas' => 'Your IRMAs for login to this wiki (section header)',
	'prefs-irma-trusted-sites' => 'Trusted sites (section header).
{{Identical|Trusted site}}',
	'prefs-irma-local-identity' => 'Your IRMA for login to other sites (section header)',
	'irma-hide-irma-label' => 'Hide your IRMA URL on your user page (preference label)

If <code>$wgIRMAShowUrlOnUserPage</code> is not defined, this message is used as the label for checkbox.

If <code>$wgIRMAShowUrlOnUserPage</code>\'s value is "always", this message is used as the label for:
* {{msg-mw|Openid-show-irma-url-on-userpage-always}}

If <code>$wgIRMAShowUrlOnUserPage</code>\'s value is "never", this message is used as the label for:
* {{msg-mw|Openid-show-irma-url-on-userpage-never}}',
	'irma-show-irma-url-on-userpage-always' => 'Used in [[Special:Preferences]], when <code>$wgIRMAShowUrlOnUserPage</code>\'s value is "always".

See also:
* {{msg-mw|Openid-show-irma-url-on-userpage-never}}',
	'irma-show-irma-url-on-userpage-never' => 'Used in [[Special:Preferences]], when <code>$wgIRMAShowUrlOnUserPage</code>\'s value is "never".

See also:
* {{msg-mw|Openid-show-irma-url-on-userpage-always}}',
	'irma-userinfo-update-on-login-label' => 'Update the following information from IRMA persona every time the user logs in: (preference label)',
	'irma-associated-irmas-label' => 'IRMAs associated with your account: (preference label)',
	'irma-urls-url' => '{{optional}}
{{Identical|URL}}',
	'irma-urls-action' => '{{Identical|Action}}',
	'irma-urls-registration' => 'Used in the same way as {{msg-mw|prefs-registration}}',
	'irma-urls-registration-date-time' => '{{optional}}
Used in the same way as {{msg-mw|Prefs-registration-date-time}}.

Parameters:
* $1 - timestamp (time and date)
* $2 - (Optional) date
* $3 - (Optional) time',
	'irma-urls-delete' => '{{Identical|Delete}}',
	'irma-add-url' => 'Used as link text. It is a link to Special:IRMAConvert.',
	'irma-trusted-sites-label' => 'Sites you trust and where you have used your IRMA for logging in: (preference label)',
	'irma-trusted-sites-table-header-column-url' => 'Trusted sites (table header, URL column).
{{Identical|Trusted site}}',
	'irma-trusted-sites-table-header-column-action' => 'Trusted sites (table header, action column).
{{Identical|Action}}',
	'irma-trusted-sites-delete-link-action-text' => '{{Identical|Delete}}',
	'irma-trusted-sites-delete-all-link-action-text' => 'A text for the link in the table to click to delete all trusted sites, e.g. "Delete all trusted sites"',
	'irma-trusted-sites-delete-confirmation-page-title' => 'The page title for "Trusted site deletion" in [[Special:IRMAServer]].

Used as title for any one of the following messages:
* {{msg-mw|Openid-trusted-sites-delete-all-confirmation-success-text}}
* {{msg-mw|Openid-trusted-sites-delete-confirmation-success-text}}
* {{msg-mw|Openid-trusted-sites-delete-all-confirmation-question}}
* {{msg-mw|Openid-trusted-sites-delete-confirmation-question}}',
	'irma-trusted-sites-delete-confirmation-question' => 'The question of by clicking the {{msg-mw|irma-trusted-sites-delete-confirmation-button-text}} button, you will remove $1 from the list of sites you trust.

Parameters:
* $1 - the URL of the removed site',
	'irma-trusted-sites-delete-all-confirmation-question' => 'The question of by clicking the {{msg-mw|Openid-trusted-sites-delete-confirmation-button-text}} button, you will remove all trusted sites from the list.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Used as label for the Submit button in the "Delete trusted site" form.

The form is preceded by any one of the following messages:
* {{msg-mw|Openid-trusted-sites-delete-all-confirmation-question}}
* {{msg-mw|Openid-trusted-sites-delete-confirmation-question}}
{{Identical|Confirm}}',
	'irma-trusted-sites-delete-confirmation-success-text' => 'A confirmation text which is shown, when the user has successfully removed a site from the list of trusted site.

Parameters:
* $1 - the URL of the removed site
See also:
* {{msg-mw|Openid-trusted-sites-delete-all-confirmation-success-text}}',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'A confirmation text which is shown, when the user has successfully removed all sites from the list of trusted site.

See also:
* {{msg-mw|Openid-trusted-sites-delete-confirmation-success-text}}',
	'irma-local-identity' => 'Your IRMA when used a identity to other sites (preference label)',
	'irma-login-or-create-account' => 'Used as fieldset label for the login form.',
	'irma-provider-label-irma' => '{{Related|Openid-provider-label}}',
	'irma-provider-label-google' => '{{Related|Openid-provider-label}}',
	'irma-provider-label-yahoo' => '{{Related|Openid-provider-label}}',
	'irma-provider-label-aol' => '{{Related|Openid-provider-label}}',
	'irma-provider-label-wmflabs' => '{{Related|Openid-provider-label}}',
	'irma-provider-label-other-username' => 'Parameters:
* $1 - other site name; any one of the following site name (hard-coded and not localized):
** MyIRMA
** LiveJournal
** VOX
** Blogger
** Flickr
** Verisign
** Vidoop
** ClaimID
{{Related|Openid-provider-label}}',
	'specialpages-group-irma' => '{{doc-special-group|that=are related to the IRMA extension|like=[[Special:IRMALogin]], [[Special:IRMAConvert]], [[Special:IRMADashboard]], [[Special:IRMAIdentifier]], [[Special:IRMAServer]], [[Special:IRMAXRDS]]}}',
	'right-irma-converter-access' => '{{doc-right|irma-converter-access}}
{{doc-singularthey}}',
	'right-irma-dashboard-access' => '{{doc-right|irma-dashboard-access}}
the standard access right for the IRMA dashboard, which is a restricted special page',
	'right-irma-dashboard-admin' => '{{doc-right|irma-dashboard-admin}}
the special adminstrator access right for the IRMA dashboard, which is a restricted special page',
	'action-irma-converter-access' => '{{doc-action|irma-converter-access}}
{{doc-singularthey}}',
	'action-irma-dashboard-access' => '{{doc-action|irma-dashboard-access}}
the standard access right for the IRMA dashboard, which is a restricted special page',
	'action-irma-dashboard-admin' => '{{doc-action|irma-dashboard-admin}}
the special adminstrator access right for the IRMA dashboard, which is a restricted special page',
	'irma-dashboard-title' => '{{doc-special|IRMADashboard}}
This title is for non-admins.

See also:
* {{msg-mw|Openid-dashboard-title-admin}}',
	'irma-dashboard-title-admin' => '{{doc-special|IRMADashboard}}
This title is for administrator.

See also
* {{msg-mw|Openid-dashboard-title}}',
	'irma-dashboard-introduction' => 'Intro text for the special IRMA dashboard page: the user gets status information about the current IRMA settings of this wiki.
* $1 - the URL of the help page explaining the parameters',
	'irma-dashboard-number-irma-users' => 'Used as the label in the information table on Special:IRMADashboard.
{{Related|Openid-dashboard-number}}',
	'irma-dashboard-number-irmas-in-database' => 'Used as the label in the information table on Special:IRMADashboard.
{{Related|Openid-dashboard-number}}',
	'irma-dashboard-number-users-without-irma' => 'Used as the label in the information table on Special:IRMADashboard.
{{Related|Openid-dashboard-number}}',
);

/** Afrikaans (Afrikaans)
 * @author Arnobarnard
 * @author Naudefj
 */
$messages['af'] = array(
	'irma-desc' => "Teken by die wiki aan met 'n [//irma.net/ IRMA], en teken by ander IRMA ondersteunde webwerwe aan met 'n wikigebruiker",
	'irmalogin' => 'Meld aan/ registreer met IRMA',
	'irmaserver' => 'IRMA-bediener',
	'irmaxrds' => 'Yadis-lêer',
	'irmaconvert' => 'IRMA-omskakeling',
	'irmaerror' => 'Verifikasiefout',
	'irmaerrortext' => "'n Fout het voorgekom tydens die verifikasie van die IRMA-URL.",
	'irmaconfigerror' => 'Fout met IRMA se konfigurasie',
	'irmaconfigerrortext' => "IRMA se stoor-instellings vir hierdie wiki is ongeldig.
Raadpleeg asseblief 'n [[Special:ListUsers/sysop|administrateur]].",
	'irmapermission' => 'Fout in die regte vir IRMA',
	'irmapermissiontext' => 'Die IRMA wat u verskaf het word nie toegelaat om na hierdie bediener aan te teken nie.',
	'irmacancel' => 'Verifikasie is gekanselleer',
	'irmacanceltext' => 'Verifikasie van die IRMA-URL is gekanselleer.',
	'irmafailure' => 'Verifikasie het gefaal',
	'irmafailuretext' => 'Verifikasie van die IRMA-URL het gefaal. Foutboodskap: "$1"',
	'irmasuccess' => 'Verifikasie suksesvol uitgevoer',
	'irmasuccesstext' => "'''Verifikasie en aanmelding was suksesvol vir gebruiker $1'''.

U IRMA is $2 .

Hierdie en verdere IRMA's, saam met 'n opsionele wagwoord, kan in u [[Special:Preferences|voorkeure]] bestuur word.", # Fuzzy
	'irmausernameprefix' => 'IRMAGebruiker',
	'irmaserverlogininstructions' => 'Sleutel u wagwoord hier onder in om by $3 aan te meld as gebruiker $2 (gebruikersbladsy $1).', # Fuzzy
	'irmatrustinstructions' => 'Kontroleer of u data met $1 wil deel.',
	'irmaallowtrust' => 'Laat $1 toe om hierdie gebruiker te vertrou.',
	'irmanopolicy' => "Die werf het nie 'n privaatheidsbeleid nie.",
	'irmapolicy' => 'Lees die <a target="_new" href="$1">privaatheidsbeleid</a> vir meer inligting.',
	'irmaoptional' => 'Opsioneel',
	'irmarequired' => 'Verpligtend',
	'irmanickname' => 'Noemnaam',
	'irmafullname' => 'Volledige naam', # Fuzzy
	'irmaemail' => 'E-posadres',
	'irmalanguage' => 'Taal',
	'irmatimezone' => 'Tydsone',
	'irmachooselegend' => 'Gebruikersnaamkeuse', # Fuzzy
	'irmachooseinstructions' => "Alle gebruikers moet 'n gebruikersnaam kies. U kan een kies uit die opsies hieronder.",
	'irmachoosenick' => 'U bynaam ($1)',
	'irmachoosefull' => 'U volledige naam ($1)', # Fuzzy
	'irmachooseurl' => "'n Naam vanuit u IRMA ($1)",
	'irmachooseauto' => "'n Outomaties gegenereerde naam ($1)",
	'irmachoosemanual' => "'n Naam van u keuse:",
	'irmachooseexisting' => "'n Bestaande gebruiker op hierdie wiki:",
	'irmachooseusername' => 'Gebruikersnaam:',
	'irmachoosepassword' => 'Wagwoord:',
	'irmaconvertinstructions' => "Hierdie vorm laat u toe om u gebruiker te verander om 'n IRMA-URL te gebruik of om meer IRMA-URL's by te voeg.",
	'irmaconvertoraddmoreids' => "Skakel om na IRMA of voeg 'n ander IRMA-URL by",
	'irmaconvertsuccess' => 'Suksesvol omgeskakel na IRMA',
	'irmaconvertsuccesstext' => 'U IRMA is omgeskakel na $1.',
	'irma-convert-already-your-irma-text' => 'Dit is al reeds u IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Dit is iemand anders se IRMA.', # Fuzzy
	'irmaalreadyloggedin' => "'''U is al reeds aangeteken!'''",
	'irmanousername' => 'Geen gebruikersnaam is verskaf nie.',
	'irmabadusername' => 'Slegte gebruikersnaam verskaf.',
	'irmaautosubmit' => 'Hierdie bladsy bevat \'n vorm wat outomaties ingedien sal word as u JavaScript in u bladleser geaktveer het.
As dit nie werk nie, kliek op die "Continue"-knoppie om voort te gaan.',
	'irmaclientonlytext' => "U kan nie gebruikers van die wiki as IRMA op 'n ander webwerf gebruik nie.",
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => "{{SITENAME}} ondersteun die [//irma.net/ IRMA]-standaard wat u toelaat om verskeie webtuistes te besoek sonder om telkens aan te meld.
Met IRMA kan u by verskeie webwerwe aanmeld sonder om elke keer opnuut 'n wagwoord te verskaf.
Sien die [//af.wikipedia.org/wiki/IRMA Wikipedia-artikel oor IRMA] vir meer inligting.
Daar is verskeie [http://wiki.irma.net/Public_IRMA_providers publieke IRMA-verskaffers] en u het waarskynlik reeds 'n IRMA-gebruiker by 'n ander diensverskaffer.",
	'irmaupdateuserinfo' => 'Opdateer my persoonlike inligting:',
	'irmadelete' => 'Skrap IRMA',
	'irmadelete-text' => 'Deur op die "{{int:irmadelete-button}}"-knoppie te kliek, verwyder u die IRMA $1 vanuit u gebruiker.
Dit sal dan nie langer moontlik wees om met hierdie IRMA aan te teken nie.',
	'irmadelete-button' => 'Bevestig',
	'irmadeleteerrornopassword' => "U kan nie al u IRMA's verwyder nie omdat u gebruiker nie 'n wagwoord het nie.
Sonder 'n IRMA sal u glad nie meer kan aanmeld nie.",
	'irmadeleteerrorirmaonly' => "U kan nie al u IRMA's verwyder nie omdat u slegs toegelaat word om met IRMA aan te meld.
Sonder 'n IRMA sou u glad nie meer kon aanmeld nie.",
	'irmadelete-success' => 'Die IRMA is suksesvol van u gebruiker verwyder.',
	'irmadelete-error' => "'n Fout het voorgekom tydens die verwydering van die IRMA uit u gebruiker.",
	'prefs-irma-hide-irma' => 'Wys IRMA-URL op u gebruikersblad',
	'irma-hide-irma-label' => 'Versteek u IRMA-URL op u gebruikersblad.',
	'irma-userinfo-update-on-login-label' => 'Opdateer die volgende inligting vanaf die IRMA-gebruiker elke keer as ek aanmeld:',
	'irma-associated-irmas-label' => "IRMA's aan u gebruiker gekoppel:",
	'irma-urls-action' => 'Aksie',
	'irma-urls-delete' => 'Skrap',
	'irma-add-url' => "Voeg 'n nuwe IRMA by", # Fuzzy
	'irma-login-or-create-account' => "Meld aan of skep 'n nuwe gebruiker",
	'irma-provider-label-irma' => 'Sleutel die URL van u IRMA in',
	'irma-provider-label-google' => 'Teken aan met u Google-gebruiker',
	'irma-provider-label-yahoo' => 'Teken aan met u Yahoo-gebruiker',
	'irma-provider-label-aol' => 'Teken aan met u AOL-gebruiker',
	'irma-provider-label-other-username' => 'U gebruikersnaam by $1',
	'irma-dashboard-title' => 'IRMA-beheerbord',
	'irma-dashboard-title-admin' => 'IRMA-beheerbord (administrateur)',
);

/** Gheg Albanian (Gegë)
 * @author Mdupont
 */
$messages['aln'] = array(
	'irmadelete-success' => 'IRMA u hoq me sukses nga llogaria juaj.',
	'irmadelete-error' => 'Gabim gjatë heqjes IRMA nga llogaria juaj.',
	'prefs-irma-hide-irma' => 'Fshih URL IRMA tuaj në faqen tuaj të përdoruesit, nëse ju hyni në me IRMA.',
	'irma-hide-irma-label' => 'Fshih URL IRMA tuaj në faqen tuaj të përdoruesit, nëse ju hyni në me IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Update informacionin e mëposhtëm nga persona IRMA çdo herë që në hyrje:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMAs lidhur me llogarinë tuaj:',
	'irma-urls-action' => 'Veprim',
	'irma-urls-delete' => 'Fshij',
	'irma-add-url' => 'Shto një IRMA ri', # Fuzzy
	'irma-login-or-create-account' => 'Regjistrohu ose hapni një llogari të re', # Fuzzy
	'irma-provider-label-irma' => 'Shkruani URL IRMA tuaj',
	'irma-provider-label-google' => 'Hyni në llogarinë tuaj duke përdorur Google',
	'irma-provider-label-yahoo' => 'Hyni ose duke përdorur llogarinë tuaj Yahoo',
	'irma-provider-label-aol' => 'Shkruani AOL screenname tuaj',
	'irma-provider-label-other-username' => 'Fusni emrin e përdoruesit $1',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'irmaemail' => 'የኢ-ሜል አድራሻ',
	'irmalanguage' => 'ቋንቋ',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'irmalanguage' => 'Idioma',
	'irma-urls-action' => 'Acción',
	'irma-urls-delete' => 'Borrar',
);

/** Arabic (العربية)
 * @author ;Hiba;1
 * @author Meno25
 * @author Orango
 * @author OsamaK
 */
$messages['ar'] = array(
	'irma-desc' => 'سجل الدخول للويكي [//irma.net/ بهوية مفتوحة]، وسجل الدخول لمواقع الوب الأخرى التي تعترف بالهوية المفتوحة بحساب مستخدم ويكي',
	'irmalogin' => 'سجل الدخول / أنشئ حساب مع الهوية المفتوحة',
	'irmaserver' => 'خادم الهوية المفتوحة',
	'irmaxrds' => 'ملف ياديس',
	'irmaconvert' => 'محول الهوية المفتوحة',
	'irmaerror' => 'خطأ تأكيد',
	'irmaerrortext' => 'حدث خطأ أثناء التأكد من مسار الهوية المفتوحة.',
	'irmaconfigerror' => 'خطأ ضبط الهوية المفتوحة',
	'irmaconfigerrortext' => 'ضبط تخزين الهوية المفتوحة لهذا الويكي غير صحيح.
من فضلك استشر [[Special:ListUsers/sysop|إداريا]].',
	'irmapermission' => 'خطأ سماحات الهوية المفتوحة',
	'irmapermissiontext' => 'الهوية المفتوحة التي وفرتها غير مسموح لها بتسجيل الدخول إلى هذا الخادم.',
	'irmacancel' => 'التأكيد تم إلغاؤه',
	'irmacanceltext' => 'التحقق من مسار الهوية المفتوحة تم إلغاؤه.',
	'irmafailure' => 'فشل التحقق',
	'irmafailuretext' => 'التحقق من مسار الهوية المفتوحة فشل. رسالة خطأ: "$1"',
	'irmasuccess' => 'نحج التحقق',
	'irmasuccesstext' => 'نجح التحقق من مسار الهوية المفتوحة.', # Fuzzy
	'irmausernameprefix' => 'مستخدم الهوية المفتوحة',
	'irmaserverlogininstructions' => 'أدخل كلمة سرك بالأسفل لتسجيل الدخول إلى $3 كمستخدم $2 (صفحة مستخدم $1).', # Fuzzy
	'irmatrustinstructions' => 'تأكد مما إذا كنت ترغب في مشاركة البيانات مع $1.',
	'irmaallowtrust' => 'السماح ل$1 بالوثوق بحساب هذا المستخدم.',
	'irmanopolicy' => 'الموقع لا يمتلك سياسة محددة للخصوصية.',
	'irmapolicy' => 'تحقق من <a target="_new" href="$1">سياسة الخصوصية</a> لمزيد من المعلومات.',
	'irmaoptional' => 'اختياري',
	'irmarequired' => 'مطلوب',
	'irmanickname' => 'اللقب',
	'irmafullname' => 'الاسم الكامل', # Fuzzy
	'irmaemail' => 'عنوان البريد الإلكتروني',
	'irmalanguage' => 'اللغة',
	'irmatimezone' => 'المنطقة الزمنية',
	'irmachooselegend' => 'اختيار اسم المستخدم والحساب',
	'irmachooseinstructions' => 'كل المستخدمين يحتاجون إلى لقب؛
يمكنك أن تختار واحدا من الخيارات بالأسفل.',
	'irmachoosenick' => 'اسمك المستعار ($1)',
	'irmachoosefull' => 'اسمك الكامل ($1)', # Fuzzy
	'irmachooseurl' => 'اسم مختار من هويتك المفتوحة ($1)',
	'irmachooseauto' => 'اسم مولد تلقائيا ($1)',
	'irmachoosemanual' => 'اسم من اختيارك:',
	'irmachooseexisting' => 'حساب موجود في هذا الويكي',
	'irmachooseusername' => 'اسم المستخدم:',
	'irmachoosepassword' => 'كلمة السر:',
	'irmaconvertinstructions' => 'هذه الاستمارة تتيح لك تغيير حساب مستخدمك لتستخدم مسار هوية مفتوحة أو لاضافة المزيد من مسارات هويات مفتوحة.',
	'irmaconvertoraddmoreids' => 'حوّل إلى IRMA أو أضف عنوان IRMA آخر',
	'irmaconvertsuccess' => 'تم التحول بنجاح إلى الهوية المفتوحة',
	'irmaconvertsuccesstext' => 'أنت حولت بنجاح هويتك المفتوحة إلى $1.',
	'irma-convert-already-your-irma-text' => 'هذه بالفعل هويتك المفتوحة.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'هذه هي الهوية المفتوحة لشخص آخر.', # Fuzzy
	'irmaalreadyloggedin' => 'أنت مسجل الدخول بالفعل.',
	'irmanousername' => 'لا اسم مستخدم تم تحديده.',
	'irmabadusername' => 'اسم المستخدم المحدد سيء.',
	'irmaautosubmit' => 'هذه الصفحة تحتوي على استمارة ينبغي أن يتم إرسالها تلقائيا لو أنك لديك الجافاسكريبت مفعلة.
لو لا، جرب زر "Continue".',
	'irmaclientonlytext' => 'لا يمكنك استخدام حسابات هذه الويكي كهوية مفتوحة على موقع آخر.',
	'irmaloginlabel' => 'مسار الهوية المفتوحة',
	'irmalogininstructions' => '{{SITENAME}} تدعم معيار [//irma.net/ الهوية المفتوحة] للدخول الفردي بين مواقع الوب.
الهوية المفتوحة تسمح لك بتسجيل الدخول إلى مواقع وب عديدة مختلفة بدون استخدام كلمة سر مختلفة لكل موقع.
(راجع [//en.wikipedia.org/wiki/IRMA مقالة الهوية المفتوحة في يويكيبيديا] لمزيد من المعلومات.)

إذا كان لديك بالفعل حساب في {{SITENAME}}، يمكنك [[Special:UserLogin|تسجيل الدخول]] باسم مستخدمك وكلمة سرك كالمعتاد.
لاستخدام الهوية المفتوحة في المستقبل، يمكنك [[Special:IRMAConvert|تحويل حسابك إلى الهوية المفتوحة]] بعد تسجيل دخولك بشكل عادي.

يوجد العديد من [http://wiki.irma.net/Public_IRMA_providers مزودي الهوية المفتوحة]، وقد يكون لديك حسابك بهوية مفتوحة على خدمة أخرى.', # Fuzzy
	'irmaupdateuserinfo' => 'تحديث معلوماتي الشخصية:',
	'irmadelete' => 'احذف الهوية المفتوحة',
	'irmadelete-text' => 'بالضغط على زر "{{int:irmadelete-button}}"، ستزيل الهوية المفتوحة IRMA $1 من حسابك.
لن تتمكن بعد الآن من الدخول بهذه الهوية المفتوحة.',
	'irmadelete-button' => 'أكّد',
	'irmadeleteerrornopassword' => 'لا يمكنك إزالة كل هوياتك المفتوحة لعدم وجود كلمة سر لحسابك.
لن تتمكن من الولوج بدون هوية مفتوحة.',
	'irmadeleteerrorirmaonly' => 'لا يمكنك إزالة كل هوياتك المفتوحة لأنه يسمح لك بالدخول عبر هوية مفتوحة فقط.
لن تتمكن من الولوج بدون هوية مفتوحة.',
	'irmadelete-success' => 'أزيلت الهوية المفتوحة بنجاح من حسابك.',
	'irmadelete-error' => 'صودف خطأ أثناء إزالة الهوية المفتوحة من حسابك.',
	'prefs-irma' => 'هوية مفتوحة',
	'prefs-irma-hide-irma' => 'أخفِ مسار هويتك المفتوحة من صفحتك الشخصية، إذا سجلت الدخول بالهوية المفتوحة.',
	'irma-hide-irma-label' => 'أخفِ مسار هويتك المفتوحة من صفحتك الشخصية، إذا سجلت الدخول بالهوية المفتوحة.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'حدث المعلومات التالية من شخصية الهوية المفتوحة كل مرة أسجل الدخول:', # Fuzzy
	'irma-associated-irmas-label' => 'الهويات المفتوحة المربوطة بحسابك:',
	'irma-urls-url' => 'مسار',
	'irma-urls-action' => 'إجراء',
	'irma-urls-delete' => 'حذف',
	'irma-add-url' => 'أضف هوية مفتوحة جديدة', # Fuzzy
	'irma-login-or-create-account' => 'سجل الدخول أو أنشئ حسابا جديدا',
	'irma-provider-label-irma' => 'أدخل مسار هويتك المفتوحة',
	'irma-provider-label-google' => 'سجل الدخول باستخدام حسابك في جوجل',
	'irma-provider-label-yahoo' => 'سجل الدخول باستخدام حسابك في ياهو',
	'irma-provider-label-aol' => 'أدخل اسم شاشة AOL الخاص بك',
	'irma-provider-label-other-username' => 'أدخل اسم مستخدمك في $1',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author 334a
 * @author Basharh
 */
$messages['arc'] = array(
	'irmausernameprefix' => 'ܡܦܠܚܢܐ ܕܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'irmaoptional' => 'ܓܒܝܝܐ',
	'irmafullname' => 'ܫܡܐ ܫܪܝܪܐ',
	'irmaemail' => 'ܡܘܢܥܐ ܕܒܝܠܕܪܐ ܐܠܩܛܪܘܢܝܐ',
	'irmalanguage' => 'ܠܫܢܐ',
	'irmatimezone' => 'ܙܘܢܐ ܙܒܢܝܐ:',
	'irmachooselegend' => 'ܓܒܝܐ ܕܚܘܫܒܢܐ ܘܫܡܐ ܕܡܦܠܚܢܐ',
	'irmachoosefull' => 'ܫܡܐ ܫܪܝܪܐ ܕܝܠܟ($1)',
	'irmachoosepassword' => 'ܡܠܬܐ ܕܥܠܠܐ:',
	'irmaloginlabel' => 'URL ܕܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'irmadelete' => 'ܫܘܦ ܗܝܝܘܬܐ ܦܬܝܚܬܐ',
	'irmadelete-button' => 'ܫܪܪ',
	'irma-urls-action' => 'ܥܒܕܐ',
	'irma-urls-delete' => 'ܫܘܦ',
	'irma-add-url' => 'ܐܘܣܦ ܗܝܝܘܬܐ ܦܬܝܚܬܐ ܚܕܬܐ ܠܚܘܫܒܢܟ',
	'irma-provider-label-other-username' => 'ܐܥܠ ܫܡܐ ܕܡܦܠܚܢܐ ܕܝܠܟ ܒ $1',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Dudi
 * @author Ghaly
 * @author Meno25
 */
$messages['arz'] = array(
	'irma-desc' => 'سجل الدخول للويكى [//irma.net/ بهوية مفتوحة]، وسجل الدخول لمواقع ويب أخرى تعرف الهوية المفتوحة بحساب مستخدم ويكي',
	'irmalogin' => 'تسجيل الدخول بالهوية المفتوحة', # Fuzzy
	'irmaserver' => 'خادم الهوية المفتوحة',
	'irmaxrds' => 'ملف ياديس',
	'irmaconvert' => 'محول الهوية المفتوحة',
	'irmaerror' => 'خطأ تأكيد',
	'irmaerrortext' => 'حدث خطأ أثناء التأكد من مسار الهوية المفتوحة.',
	'irmaconfigerror' => 'خطأ ضبط الهوية المفتوحة',
	'irmaconfigerrortext' => 'ضبط تخزين الهوية المفتوحة لهذا الويكى غير صحيح.
من فضلك استشر [[Special:ListUsers/sysop|إداريا]].',
	'irmapermission' => 'خطأ سماحات الهوية المفتوحة',
	'irmapermissiontext' => 'الهوية المفتوحة التى وفرتها غير مسموح لها بتسجيل الدخول إلى هذا الخادم.',
	'irmacancel' => 'التأكيد تم إلغاؤه',
	'irmacanceltext' => 'التحقق من مسار الهوية المفتوحة تم إلغاؤه.',
	'irmafailure' => 'التأكيد فشل',
	'irmafailuretext' => 'التحقق من مسار الهوية المفتوحة فشل. رسالة خطأ: "$1"',
	'irmasuccess' => 'التأكيد نجح',
	'irmasuccesstext' => 'التحقق من مسار الهوية المفتوحة نجح.', # Fuzzy
	'irmausernameprefix' => 'مستخدم الهوية المفتوحة',
	'irmaserverlogininstructions' => 'أدخل كلمة سرك بالأسفل لتسجيل الدخول إلى $3 كمستخدم $2 (صفحة مستخدم $1).', # Fuzzy
	'irmatrustinstructions' => 'تأكد مما إذا كنت ترغب فى مشاركة البيانات مع $1.',
	'irmaallowtrust' => 'السماح ل$1 بالوثوق بحساب هذا المستخدم.',
	'irmanopolicy' => 'الموقع لا يمتلك سياسة محددة للخصوصية.',
	'irmapolicy' => 'تحقق من <a target="_new" href="$1">سياسة الخصوصية</a> لمزيد من المعلومات.',
	'irmaoptional' => 'اختياري',
	'irmarequired' => 'مطلوب',
	'irmanickname' => 'اللقب',
	'irmafullname' => 'الاسم الكامل', # Fuzzy
	'irmaemail' => 'عنوان البريد الإلكتروني',
	'irmalanguage' => 'اللغة',
	'irmachooseinstructions' => 'كل المستخدمين يحتاجون إلى لقب؛
يمكنك أن تختار واحدا من الخيارات بالأسفل.',
	'irmachoosefull' => 'اسمك الكامل ($1)', # Fuzzy
	'irmachooseurl' => 'اسم مختار من هويتك المفتوحة ($1)',
	'irmachooseauto' => 'اسم مولد تلقائيا ($1)',
	'irmachoosemanual' => 'اسم من اختيارك:',
	'irmachooseexisting' => 'حساب موجود فى الويكى دى',
	'irmachoosepassword' => 'كلمة السر:',
	'irmaconvertinstructions' => 'هذه الاستمارة تتيح لك تغيير حساب المستخدم الخاص بك لكى تستخدم IRMA URL او لاضافة المزيد من IRMA URLs .',
	'irmaconvertsuccess' => 'تم التحول بنجاح إلى الهوية المفتوحة',
	'irmaconvertsuccesstext' => 'أنت حولت بنجاح هويتك المفتوحة إلى $1.',
	'irma-convert-already-your-irma-text' => 'هذه بالفعل هويتك المفتوحة.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'هذه هى الهوية المفتوحة لشخص آخر.', # Fuzzy
	'irmaalreadyloggedin' => "'''أنت مسجل الدخول بالفعل، $1!'''

لو كنت تريد استخدام الهوية المفتوحة لتسجيل الدخول فى المستقبل، يمكنك [[Special:IRMAConvert|تحويل حسابك لاستخدام الهوية المفتوحة]].", # Fuzzy
	'irmanousername' => 'مافيش اسم يوزر تم تحديده.',
	'irmabadusername' => 'اسم المستخدم المحدد سيء.',
	'irmaautosubmit' => 'هذه الصفحة تحتوى على إستمارة ينبغى أن يتم إرسالها تلقائيا لو أنك لديك الجافاسكريبت مفعلة.
لو لا، جرب زر "Continue".',
	'irmaclientonlytext' => 'أنت لا يمكنك استخدام الحسابات من هذا الويكى كهوية مفتوحة على موقع آخر.',
	'irmaloginlabel' => 'مسار الهوية المفتوحة',
	'irmalogininstructions' => '{{SITENAME}} تدعم معيار [//irma.net/ الهوية المفتوحة] للدخول الفردى بين مواقع الويب.
الهوية المفتوحة تسمح لك بتسجيل الدخول إلى مواقع ويب عديدة مختلفة بدون استخدام كلمة سر مختلفة لكل موقع.
(انظر [//en.wikipedia.org/wiki/IRMA مقالة الهوية المفتوحة فى يويكيبيديا] لمزيد من المعلومات.)

لو أنك لديك بالفعل حساب فى {{SITENAME}}، يمكنك [[Special:UserLogin|تسجيل الدخول]] باسم مستخدمك وكلمة السر الخاصة بك كالمعتاد.
لاستخدام الهوية المفتوحة فى المستقبل، يمكنك [[Special:IRMAConvert|تحويل حسابك إلى الهوية المفتوحة]] بعد تسجيل دخولك بشكل عادى.

يوجد العديد من [http://wiki.irma.net/Public_IRMA_providers موفرى الهوية المفتوحة العلنيين]، وربما يكون لديك حسابك بهوية مفتوحة على خدمة أخرى.', # Fuzzy
	'prefs-irma-hide-irma' => 'أخف هويتك هويتك المفتوحة على صفحتك الشخصية، لو سجلت الدخول بالهوية المفتوحة.',
	'irma-hide-irma-label' => 'أخف هويتك هويتك المفتوحة على صفحتك الشخصية، لو سجلت الدخول بالهوية المفتوحة.', # Fuzzy
);

/** Asturian (asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'irma-desc' => "Permite a los usuarios l'accesu a la wiki con una [//irma.net/ IRMA]. Si esto ta activao na wiki, tamién puen utilizar la URL de la so cuenta d'usuariu d'esta wiki como IRMA p'aniciar sesión n'otros sitios web qu'utilicen IRMA",
	'irmaidentifier' => 'Identificador IRMA',
	'irmalogin' => 'Aniciar sesión / crear cuenta con IRMA',
	'irmaserver' => 'Sirvidor IRMA',
	'irma-identifier-page-text-user' => 'Esta páxina ye l\'identificador del usuariu "$1".',
	'irma-identifier-page-text-different-user' => 'Esta páxina ye l\'identificador de la User ID "$1" del usuariu.',
	'irma-identifier-page-text-no-such-local-irma' => 'Esti ye un identificador llocal IRMA inválidu.',
	'irma-server-identity-page-text' => "Esta ye una páxina téunica del sirvidor IRMA p'aniciar la identificación IRMA. La páxina nun tien otru propósitu.",
	'irmaxrds' => 'Ficheru Yadis',
	'irmaconvert' => 'Convertidor IRMA',
	'irmaerror' => 'Error de verificación',
	'irmaerrortext' => 'Hebo un error mentanto se comprobaba la URL de la IRMA.',
	'irma-error-no-auth' => "Asocedió un error nun especificáu de respuesta/solicitú d'autenticación demientres la comprobación de la URL d'IRMA $1.",
	'irma-error-server-response' => "Asocedió un error demientres la comprobación de la URL d'IRMA $1.

La respuesta del sirvidor foi: ''$2''",
	'irma-error-request-forgery' => 'Hebo un error: alcontróse un pase inválidu.',
	'irma-error-wrong-force-provider-setting' => "Hebo un error internu: Atopóse un valor d'URL incorreutu pal fornidor forzáu «$1».",
	'irma-error-irma-convert-not-allowed-forced-provider' => "Nun ye posible asociar más IRMA cola so cuenta porque sólo pue utilizar el fornidor d'IRMA ''\"forzáu\"'' \"\$1\" p'aniciar sesión nesta wiki.",
	'irmaconfigerror' => "Error de configuración d'IRMA",
	'irmaconfigerrortext' => "La configuración del almacenamientu IRMA d'esta wiki ye inválida.
Consulta con un [[Special:ListUsers/sysop|alministrador]].",
	'irmapermission' => 'Error de permisos IRMA',
	'irmapermissiontext' => "La IRMA qu'indicasti nun tien permisu d'accesu nesti sirvidor.",
	'irmacancel' => "S'encaboxó la comprobación",
	'irmacanceltext' => "S'encaboxó la comprobación de la URL d'IRMA",
	'irmafailure' => 'Falló la comprobación',
	'irmafailuretext' => "Falló la comprobación de la URL d'IRMA. Mensaxe d'error: «$1»",
	'irmasuccess' => 'Comprobación correuta',
	'irmasuccesstext' => "'''Comprobación y aniciu de sesión como usuariu $1 correutos.'''

La to IRMA ye $2.

Esti y otros IRMA opcionales se puen xestionar na [[Special:Preferences#mw-prefsection-irma|llingüeta IRMA]] de les preferencies.<br />
Se pue amestar una conseña de cuenta opcional nel [[Special:Preferences#mw-prefsection-personal|perfil d'usuariu]].",
	'irmausernameprefix' => 'Usuariu IRMA',
	'irmaserverlogininstructions' => "$3 pide qu'escribas la to conseña de la páxina $1 pal usuariu $2 (esta ye la URL del to IRMA)",
	'irmatrustinstructions' => 'Comprueba si quies compartir datos con $1.',
	'irmaallowtrust' => "Permitir a $1 confiar nesta cuenta d'usuariu.",
	'irmanopolicy' => "El sitiu nun conseñó la so política d'intimidá.",
	'irmapolicy' => 'Comprueba la <a target="_new" href="$1">política d\'intimidá</a> pa mayor información.',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Requeríu',
	'irmanickname' => 'Alcuñu',
	'irmafullname' => 'Nome real',
	'irmaemail' => 'Direición de corréu electrónicu',
	'irmalanguage' => 'Llingua',
	'irmatimezone' => 'Estaya horaria',
	'irmachooselegend' => "Eleición del nome d'usuariu y cuenta",
	'irmachooseinstructions' => "Tolos usuarios necesiten un alcuñu;
pues escoyer unu ente les opciones d'abaxo.",
	'irmachoosenick' => 'El to alcuñu ($1)',
	'irmachoosefull' => 'El so nome completu ($1)',
	'irmachooseurl' => 'Un nome sacáu de la to IRMA ($1)',
	'irmachooseauto' => 'Un nome xeneráu automáticamente ($1)',
	'irmachoosemanual' => 'Un nome escoyíu por ti:',
	'irmachooseexisting' => 'Una cuenta esistente nesta wiki',
	'irmachooseusername' => "Nome d'usuariu:",
	'irmachoosepassword' => 'Contraseña:',
	'irmaconvertinstructions' => "Esti formulariu te permite camudar la to cuenta d'usuariu pa usar una URL d'IRMA o amestar más URLs d'IRMA.",
	'irmaconvertoraddmoreids' => 'Convertir a IRMA o amestar otra URL IRMA',
	'irmaconvertsuccess' => 'Convertida correutamente a IRMA',
	'irmaconvertsuccesstext' => 'Convertisti correutamente la to IRMA a $1.',
	'irma-convert-already-your-irma-text' => 'La IRMA $1 yá ta asociada cola to cuenta.',
	'irma-convert-other-users-irma-text' => "$1 ye la IRMA d'otra persona. Nun pues usar la IRMA d'otru usuariu.",
	'irmaalreadyloggedin' => 'Yá aniciasti sesión.',
	'irmaalreadyloggedintext' => "'''Yá tas identificáu, $1!'''

Pues xestionar (ver, desaniciar, amestar otres) les IRMA na [[Special:Preferences#mw-prefsection-irma|llingüeta IRMA]] de les preferencies.",
	'irmanousername' => "Nun escribisti dengún nome d'usuariu.",
	'irmabadusername' => "Escribisti mal el nome d'usuariu.",
	'irmaautosubmit' => 'Esta páxina inclúi un formulariu que tendría d\'unviase automáticamente si tien JavaScript activáu.
Sinon, pruebe a calcar nel botón "Continue" (Siguir).',
	'irmaclientonlytext' => "Nun pue usar cuentes d'esta wiki como IRMAs n'otru sitiu.",
	'irmaloginlabel' => "URL d'IRMA",
	'irmalogininstructions' => "{{SITENAME}} sofita l'estándar [//irma.net/ IRMA] pa tener un aniciu de sesión únicu pa dellos sitios web.
IRMA te permite aniciar sesión en munchos sitios web diferentes evitando usar una contraseña distinta en caún.
(Ver [//en.wikipedia.org/wiki/IRMA l'artículu d'IRMA en Wikipedia] pa más información.)
Hai munchos [//irma.net/get/ fornidores d'IRMA], y yá podríes tener dalguna cuenta con IRMA activáu n'otru serviciu.",
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''namái'' permite aniciar sesión con IRMA.",
	'irmalogininstructions-passwordloginallowed' => "Si yá tien una cuenta en {{SITENAME}}, pue [[Special:UserLogin|aniciar sesión]] col so nome d'usuariu y contraseña, como de vezu.
Pa utilizar IRMA nel futuru, pue [[Special:IRMAConvert|convertir la so cuenta a IRMA]] dempués de aniciar sesión normalmente.",
	'irmaupdateuserinfo' => 'Anovar la mio información personal:',
	'irmadelete' => 'Desaniciar IRMA',
	'irmadelete-text' => 'Al calcar nel botón "{{int:irmadelete-button}}", desaniciará el IRMA $1 de la so cuenta.
Darréu nun podrá volver a aniciar sesión con esta IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'Nun pue desaniciar toles sos IRMA porque la so cuenta nun tien contraseña.
Nun podría aniciar sesión ensin una IRMA.',
	'irmadeleteerrorirmaonly' => 'Nun pue desaniciar toles sos IRMA porque permitese namái aniciar sesión con IRMA.
Nun podría aniciar sesión ensin una IRMA.',
	'irmadelete-success' => 'La IRMA desaniciose correutamente de la to cuenta.',
	'irmadelete-error' => 'Hebo un error al desaniciar la IRMA de la so cuenta.',
	'irma-irmas-were-not-merged' => "Les IRMA nun s'amestaron cuando s'amestaron les cuentas d'usuariu.",
	'prefs-irma-hide-irma' => "URL de la so IRMA na páxina d'usuariu.",
	'prefs-irma-userinfo-update-on-login' => "Anovamientu de la información d'usuariu d'IRMA",
	'prefs-irma-associated-irmas' => "Los sos IRMA p'aniciar sesión en {{SITENAME}}",
	'prefs-irma-trusted-sites' => 'Sitios enfotaos',
	'prefs-irma-local-identity' => "La so IRMA p'aniciar sesión n'otros sitios",
	'irma-hide-irma-label' => "Anubrir la URL de la so IRMA na páxina d'usuariu.",
	'irma-show-irma-url-on-userpage-always' => "La so IRMA amuesase siempres na so páxina d'usuariu cuando la visita.",
	'irma-show-irma-url-on-userpage-never' => "La IRMA nun s'amuesa nunca na so páxina d'usuariu.",
	'irma-userinfo-update-on-login-label' => "Campos d'información del perfil d'usuariu que s'anovarán automáticamente dende la persona IRMA cada vez qu'anicie sesión:",
	'irma-associated-irmas-label' => 'IRMAs asociaes cola to cuenta:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Aición',
	'irma-urls-registration' => 'Hora del rexistru',
	'irma-urls-delete' => 'Desaniciar',
	'irma-add-url' => 'Amestar una IRMA nueva a la so cuenta',
	'irma-trusted-sites-label' => "Sitios nos que tien enfotu y onde yá utilizó la so IRMA p'aniciar sesión:",
	'irma-trusted-sites-table-header-column-url' => 'Sitios enfotaos',
	'irma-trusted-sites-table-header-column-action' => 'Aición',
	'irma-trusted-sites-delete-link-action-text' => 'Desaniciar',
	'irma-trusted-sites-delete-all-link-action-text' => 'Desaniciar tolos sitios de confianza',
	'irma-trusted-sites-delete-confirmation-page-title' => "Desaniciu d'un sitiu de confianza",
	'irma-trusted-sites-delete-confirmation-question' => 'En calcando\'l botón "{{int:irma-trusted-sites-delete-confirmation-button-text}}", desaniciará "$1" de la llista de sitios de confianza.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'En calcando\'l botón "{{int:irma-trusted-sites-delete-confirmation-button-text}}", desaniciará tolos sitios de confianza del so perfil d\'usuariu.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirmar',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" desanicióse correutamente de la llista de sitios de confianza.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => "Tolos sitios nos que confiaba anteriormente desaniciaronse correutamente del so perfil d'usuariu.",
	'irma-local-identity' => 'La so IRMA:',
	'irma-login-or-create-account' => 'Entrar o crear una cuenta nueva',
	'irma-provider-label-irma' => 'Escribi la URL de la to IRMA',
	'irma-provider-label-google' => 'Aniciar sesión usando la to cuenta de Google',
	'irma-provider-label-yahoo' => 'Aniciar sesión usando la to cuenta de Yahoo',
	'irma-provider-label-aol' => "Escribi'l nome de la to cuenta AOL",
	'irma-provider-label-wmflabs' => 'Aniciar sesión usando la to cuenta de Wmflabs',
	'irma-provider-label-other-username' => "Escribi'l nome d'usuariu de $1",
	'specialpages-group-irma' => "Páxines de serviciu d'IRMA ya información d'estáu",
	'right-irma-converter-access' => 'Pue amestar o convertir la so cuenta pa utilizar identidaes IRMA',
	'right-irma-dashboard-access' => "Accesu estándar al tableru d'IRMA",
	'right-irma-dashboard-admin' => "Accesu d'alministrador al tableru d'IRMA",
	'action-irma-converter-access' => 'amestar o convertir la so cuenta pa utilizar identidaes IRMA',
	'action-irma-dashboard-access' => "entrar al tableru d'IRMA",
	'action-irma-dashboard-admin' => "entrar al tableru d'alministrador d'IRMA",
	'irma-dashboard-title' => "Tableru d'IRMA",
	'irma-dashboard-title-admin' => "Tableru d'IRMA (alministrador)",
	'irma-dashboard-introduction' => 'La configuración actual de la estensión IRMA ([$1 ayuda])',
	'irma-dashboard-number-irma-users' => "Númberu d'usuarios con IRMA",
	'irma-dashboard-number-irmas-in-database' => "Númberu d'IRMAs (total)",
	'irma-dashboard-number-users-without-irma' => "Númberu d'usuarios ensin IRMA",
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'irmanickname' => 'Ləqəb',
	'irmaemail' => 'E-poçt ünvanı',
	'irmalanguage' => 'Dil',
	'irmatimezone' => 'Vaxt zonası',
	'irmachooseusername' => 'İstifadəçi adı:',
	'irmachoosepassword' => 'Parol:',
	'irmadelete-button' => 'Təsdiq et',
	'irma-urls-delete' => 'Sil',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'irmaoptional' => 'Теләккә күрә',
	'irmarequired' => 'Мотлаҡ',
	'irmanickname' => 'Ҡушма исем',
	'irmafullname' => 'Тулы исем', # Fuzzy
	'irmaemail' => 'Электрон почта адресы',
	'irmalanguage' => 'Тел',
	'irmatimezone' => 'Ваҡыт бүлкәте',
);

/** Belarusian (беларуская)
 * @author Тест
 */
$messages['be'] = array(
	'irmadelete-button' => 'Пацвердзіць',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'irma-desc' => 'Уваход ў {{GRAMMAR:вінавальны|{{SITENAME}}}} з дапамогай [//irma.net/ IRMA], а так сама ў іншыя сайты, якія падтрымліваюць IRMA з вікі-рахунка',
	'irmalogin' => 'Уваход у сыстэму / стварэньне рахунку з дапамогай IRMA',
	'irmaserver' => 'Сэрвэр IRMA',
	'irmaxrds' => 'Файл Yadis',
	'irmaconvert' => 'Канвэртар IRMA',
	'irmaerror' => 'Памылка праверкі',
	'irmaerrortext' => 'Пад час праверкі адрасу IRMA узьнікла памылка.',
	'irmaconfigerror' => 'Памылка ў канфігурацыі IRMA',
	'irmaconfigerrortext' => 'Канфігурацыя сховішча IRMA у {{GRAMMAR:месны|{{SITENAME}}}} — няслушная.
Калі ласка, зьвярніцеся да [[Special:ListUsers/sysop|адміністратараў]].',
	'irmapermission' => 'Памылка правоў доступу IRMA',
	'irmapermissiontext' => 'Пазначаны Вамі IRMA не дазваляе ўвайсьці на гэты сэрвэр.',
	'irmacancel' => 'Праверка адменена',
	'irmacanceltext' => 'Праверка адрасу IRMA была скасавана.',
	'irmafailure' => 'Праверка не атрымалася',
	'irmafailuretext' => 'Праверка адрасу IRMA не атрымалася. Паведамленьне пра памылку: «$1»',
	'irmasuccess' => 'Праверка прайшла пасьпяхова',
	'irmasuccesstext' => "'''Праверка і ўваход для карыстальніка $1 прайшлі пасьпяхова'''.

Ваш IRMA: $2.

Гэты і дадатковыя IRMA могуць наладжаныя ў [[Special:Preferences#mw-prefsection-irma|IRMA tab]].<br />
Неабавязковы пароль для рахунка можа быць даданы ў Вашым [[Special:Preferences#mw-prefsection-personal|профілі]].",
	'irmausernameprefix' => 'КарыстальнікIRMA',
	'irmaserverlogininstructions' => '$3 падаў запыт, каб Вы ўвялі Ваш пароль для {{GENDER:$2|удзельніка|удзельніцы}} $1 (гэта Ваш URL-адрас IRMA).',
	'irmatrustinstructions' => 'Пазначце, калі Вы жадаеце даць доступ да зьвестак для $1.',
	'irmaallowtrust' => 'Дазволіць $1 давераць гэтаму рахунку.',
	'irmanopolicy' => 'Сайт ня мае правілаў адносна прыватнасьці.',
	'irmapolicy' => 'Глядзіце дадатковую інфармацыю ў <a target="_new" href="$1">правілах адносна прыватнасьці</a>.',
	'irmaoptional' => 'Неабавязковае',
	'irmarequired' => 'Абавязковае',
	'irmanickname' => 'Мянушка',
	'irmafullname' => 'Поўнае імя', # Fuzzy
	'irmaemail' => 'Адрас электроннай пошты',
	'irmalanguage' => 'Мова',
	'irmatimezone' => 'Часавы пояс',
	'irmachooselegend' => 'Выбар імя карыстальніка і паролю',
	'irmachooseinstructions' => 'Кожны ўдзельнік павінен мець мянушку;
Вы можаце выбраць адну з пададзеных ніжэй.',
	'irmachoosenick' => 'Ваша мянушка ($1)',
	'irmachoosefull' => 'Ваша поўнае імя ($1)', # Fuzzy
	'irmachooseurl' => 'Імя атрыманае ад Вашага сэрвэра IRMA ($1)',
	'irmachooseauto' => 'Аўтаматычна створанае імя ($1)',
	'irmachoosemanual' => 'Імя на Ваш выбар:',
	'irmachooseexisting' => 'Існуючы рахунак у {{GRAMMAR:месны|{{SITENAME}}}}',
	'irmachooseusername' => 'Імя карыстальніка:',
	'irmachoosepassword' => 'Пароль:',
	'irmaconvertinstructions' => 'Гэта форма дазваляе выкарыстоўваць для Вашага рахунку адрас IRMA альбо дадаць іншыя адрасы IRMA.',
	'irmaconvertoraddmoreids' => 'Канвэртаваць у IRMA альбо дадаць іншы адрас IRMA',
	'irmaconvertsuccess' => 'Пасьпяховае пераўтварэньне ў IRMA',
	'irmaconvertsuccesstext' => 'Вы пасьпяхова пераўтварылі Ваш IRMA у $1.',
	'irma-convert-already-your-irma-text' => 'Гэта ўжо Ваш IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Гэта ня Ваш IRMA.', # Fuzzy
	'irmaalreadyloggedin' => 'Вы ўжо ўвайшлі.',
	'irmaalreadyloggedintext' => "'''Вы ўжо ўвайшлі, $1!'''

Вы можаце кіраваць (праглядаць, выдаляць, дадаваць) IRMA ва ўкладцы Вашых  [[Special:Preferences#mw-prefsection-irma|наладаў]] IRMA.",
	'irmanousername' => 'Не пазначана імя ўдзельніка.',
	'irmabadusername' => 'Пазначана няслушнае імя ўдзельніка.',
	'irmaautosubmit' => 'Гэта старонка ўтрымлівае форму, якая павінна быць аўтаматычна адпраўлена, калі ў Вас уключаны JavaScript.
Калі гэтага не адбылася, паспрабуйце націснуць кнопку «Continue» (Працягнуць).',
	'irmaclientonlytext' => 'Вы ня можаце выкарыстоўваць рахункі {{GRAMMAR:родны|{{SITENAME}}}} як IRMA на іншых сайтах.',
	'irmaloginlabel' => 'Адрас IRMA',
	'irmalogininstructions' => '{{SITENAME}} падтрымлівае стандарт [//irma.net/ IRMA], які дазваляе выкарыстоўваць адзіны рахунак для ўваходу ў розныя сайты без выкарыстаньня розных пароляў для кожнага зь іх.
(Глядзіце падрабязнасьці ў [//en.wikipedia.org/wiki/IRMA артыкуле пра IRMA у Вікіпэдыі].)

Існуе шмат [//irma.net/get/ сэрвісаў IRMA], і Вы, магчыма, ужо маеце рахунак IRMA у іншым сэрвісе.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} дазваляе Вам уваход ''толькі'' з дапамогай IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Калі Вы ўжо маеце рахунак у {{GRAMMAR:месны|{{SITENAME}}}}, Вы можаце [[Special:UserLogin|ўвайсьці]] з Вашым імем і паролем як звычайна.
Каб выкарыстоўваць IRMA у будучыні, Вы можаце [[Special:IRMAConvert|пераўтварыць Ваш рахунак у IRMA]] пасьля таго, як увайшлі звычайным чынам.',
	'irmaupdateuserinfo' => 'Абнавіць маю асабістую інфармацыю:',
	'irmadelete' => 'Выдаліць IRMA',
	'irmadelete-text' => 'Націснуўшы кнопку «{{int:irmadelete-button}}» Вы выдаліце IRMA $1 з Вашага рахунку.
Вы болей ня зможаце ўваходзіць у сыстэму з гэтым IRMA.',
	'irmadelete-button' => 'Пацьвердзіць',
	'irmadeleteerrornopassword' => 'Вы ня можаце выдаліць усе Вашыя IRMA, таму што Ваш рахунак ня мае паролю.
Вы ня зможаце ўвайсьці ў сыстэму без IRMA.',
	'irmadeleteerrorirmaonly' => 'Вы ня можаце выдаліць усе Вашыя IRMA, таму што Вам дазволена ўваходзіць у сыстэму толькі праз IRMA.
Вы ня зможаце ўвайсьці ў сыстэму без IRMA.',
	'irmadelete-success' => 'IRMA быў пасьпяхова выдалены з Вашага рахунку.',
	'irmadelete-error' => 'Адбылася памылка пад час выдаленьня IRMA з Вашага рахунку.',
	'irma-irmas-were-not-merged' => 'Рахункі IRMA ня былі аб’яднаныя падчас аб’яднаныя рахункаў.',
	'prefs-irma-hide-irma' => 'Хаваць Ваш адрас IRMA на Вашай старонцы ўдзельніка, калі Вы ўвайшлі з дапамогай IRMA.',
	'irma-hide-irma-label' => 'Хаваць Ваш адрас IRMA на Вашай старонцы ўдзельніка, калі Вы ўвайшлі з дапамогай IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Абнаўляць наступную інфармацыю з IRMA кожны раз, калі я уваходжу ў сыстэму:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA зьвязаныя з Вашым рахункам:',
	'irma-urls-action' => 'Дзеяньне',
	'irma-urls-registration' => 'Час рэгістрацыі',
	'irma-urls-delete' => 'Выдаліць',
	'irma-add-url' => 'Дадаць новы IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Увайсьці альбо стварыць новы рахунак',
	'irma-provider-label-irma' => 'Увядзіце Ваш адрас IRMA',
	'irma-provider-label-google' => 'Увайсьці з дапамогай Вашага рахунку ў Google',
	'irma-provider-label-yahoo' => 'Увайсьці з дапамогай Вашага рахунку ў Yahoo',
	'irma-provider-label-aol' => 'Увядзіце назву Вашага рахунку ў AOL',
	'irma-provider-label-other-username' => 'Увядзіце Вашае імя ўдзельніка $1',
	'specialpages-group-irma' => 'Старонка сэрвісу IRMA і інфармацыя пра статус',
	'right-irma-converter-access' => 'Можа дадаць ці прыстасаваць уласны рахунак для выкарыстаньня IRMA',
	'right-irma-dashboard-access' => 'стандартны доступ да панэлі кіраваньня IRMA',
	'right-irma-dashboard-admin' => 'доступ адміністратара да панэлі кіраваньня IRMA',
	'irma-dashboard-title' => 'Дошка IRMA',
	'irma-dashboard-title-admin' => 'Панэль кіраваньня IRMA (адміністратар)',
	'irma-dashboard-introduction' => 'Цяперашнія налады пашырэньня IRMA ([$1 дапамога])',
	'irma-dashboard-number-irma-users' => 'Колькасьць удзельнікаў з IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Колькасьць IRMA (агульна)',
	'irma-dashboard-number-users-without-irma' => 'Колькасьць удзельнікаў без IRMA',
);

/** Bulgarian (български)
 * @author DCLXVI
 * @author Spiritia
 * @author Stanqo
 */
$messages['bg'] = array(
	'irmalogin' => 'Влизане с IRMA', # Fuzzy
	'irmaserver' => 'IRMA сървър',
	'irmaxrds' => 'Yadis файл',
	'irmaconvert' => 'Конвертор за IRMA',
	'irmaerror' => 'Грешка при потвърждението',
	'irmaconfigerror' => 'IRMA грешка при конфигурирането',
	'irmapermissiontext' => 'На предоставеното IRMA не е позволено да влиза на този сървър.',
	'irmacancel' => 'Потвърждението беше прекратено',
	'irmacanceltext' => 'Потвърждението на IRMA URL беше прекратено.',
	'irmafailure' => 'Потвърждението беше неуспешно',
	'irmafailuretext' => 'Потвърждението на IRMA URL беше неуспешно. Грешка: „$1“',
	'irmasuccess' => 'Потвърждението беше успешно',
	'irmasuccesstext' => 'Потвърждението на IRMA URL беше успешно.', # Fuzzy
	'irmaserverlogininstructions' => 'Въведете паролата си по-долу за да влезете в $3 като потребител $2 (потребителска страница $1).', # Fuzzy
	'irmanopolicy' => 'Сайтът няма уточнена политика за защита на личните данни.',
	'irmapolicy' => 'За повече информация вижте политиката за <a target="_new" href="$1">защита на личните данни</a>.',
	'irmaoptional' => 'Незадължително',
	'irmarequired' => 'Изисква се',
	'irmanickname' => 'Псевдоним',
	'irmafullname' => 'Име', # Fuzzy
	'irmaemail' => 'Електронна поща',
	'irmalanguage' => 'Език',
	'irmatimezone' => 'Часова зона',
	'irmachooselegend' => 'Избиране на потребителско име и сметка',
	'irmachooseinstructions' => 'Всички потребители трябва да имат потребителско име;
можете да изберете своето от предложенията по-долу.',
	'irmachoosefull' => 'Вашето пълно име ($1)', # Fuzzy
	'irmachooseauto' => 'Автоматично генерирано име ($1)',
	'irmachoosemanual' => 'Име по избор:',
	'irmachooseexisting' => 'Съществуваща сметка в това уики',
	'irmachooseusername' => 'Потребителско име:',
	'irmachoosepassword' => 'Парола:',
	'irmaconvertinstructions' => 'Този формуляр позволява да се промени потребителската сметка да използва IRMA URL.', # Fuzzy
	'irmaconvertsuccess' => 'Преобразуването в IRMA беше успешно',
	'irmaconvertsuccesstext' => 'Успешно преобразувахте вашият IRMA в $1.',
	'irma-convert-already-your-irma-text' => 'Това вече е вашият IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Това е IRMA на някой друг.', # Fuzzy
	'irmaalreadyloggedin' => "'''Вече сте влезли в системата, $1!'''

Ако желаете да използвате IRMA за бъдещи влизания, можете да [[Special:IRMAConvert|преобразувате сметката си да използва IRMA]].", # Fuzzy
	'irmanousername' => 'Не е посочено потребителско име.',
	'irmabadusername' => 'Беше посочено невалидно име.',
	'irmaautosubmit' => 'Тази страница включва формуляр, който би трябвало да се изпрати автоматично ако Джаваскриптът е разрешен.
Ако не е, можете да използвате бутона "Continue" (Продължаване).',
	'irmaclientonlytext' => 'Не можете да използвате сметки от това уики като IRMA за друг сайт.',
	'irmaloginlabel' => 'IRMA Адрес',
	'irmalogininstructions' => "{{SITENAME}} поддържа [http://irma.net/ IRMA] стандарта за single signon between Web sites.
IRMA позволява влизането в много различни сайтове без да е необходимо да се регистрирате за всеки поотделно.
(Вижте [http://en.wikipedia.org/wiki/IRMA статията за IRMA в Уикипедия] за повече информация.)

Ако вече имате сметка в {{SITENAME}}, можете [[Special:UserLogin|да влезете]] с потребителското си име и парола, както обикновено.
Ако желаете да използвате IRMA, можете [[Special:IRMAConvert|да преобразувате сметката си в IRMA]] след като влезете в системата.

Налични са много [http://wiki.irma.net/Public_IRMA_providers обществени доставчици на IRMA] и е възможно вече да имате сметка, която поддържа IRMA в друг сайт.

; Други уикита: Ако имате сметка в уики, което поддържа IRMA като [http://wikitravel.org/ Wikitravel], [http://www.wikihow.com/ wikiHow], [http://vinismo.com/ Vinismo], [http://aboutus.org/ AboutUs] или [http://kei.ki/ Keiki], можете да влезете в {{SITENAME}} като въведете в кутията по-горе '''пълния адрес''' към потребителската си страница в другото уикиo, напр. ''<nowiki>http://kei.ki/en/User:Evan</nowiki>''.
; [http://irma.yahoo.com/ Yahoo!]: Ако имате сметка в Yahoo!, можете да влезете в този сайт като в кутията по-горе въведете вашето Yahoo! IRMA. Yahoo! IRMA адресите са от вида ''<nowiki>https://me.yahoo.com/yourusername</nowiki>''.
; [http://dev.aol.com/aol-and-63-million-irmas AOL]: Ако притежавате сметка в [http://www.aol.com/ AOL], напр. в [http://www.aim.com/ AIM], можете да влезете в {{SITENAME}} като въведете в кутията по-горе вашето AOL IRMA. AOL IRMA адресите са от вида ''<nowiki>http://irma.aol.com/yourusername</nowiki>''. Потребителското име се изписва само с малки букви и без интервали.
; [http://bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-irma-provider.html Blogger], [http://faq.wordpress.com/2007/03/06/what-is-irma/ Wordpress.com], [http://www.livejournal.com/irma/about.bml LiveJournal], [http://bradfitz.vox.com/library/post/irma-for-vox.html Vox] : Ако имате блог в някоя от тези услуги, въведете адреса на блога си в кутията по-горе, напр. ''<nowiki>http://yourusername.blogspot.com/</nowiki>'', ''<nowiki>http://yourusername.wordpress.com/</nowiki>'', ''<nowiki>http://yourusername.livejournal.com/</nowiki>'' или ''<nowiki>http://yourusername.vox.com/</nowiki>''.", # Fuzzy
	'irmaupdateuserinfo' => 'Актуализиране на моите лични данни:',
	'irmadelete' => 'Изтриване на IRMA',
	'irmadelete-button' => 'Потвърждаване',
	'prefs-irma-hide-irma' => 'Скриване на IRMA от потребителската страница ако влезете чрез IRMA.',
	'irma-hide-irma-label' => 'Скриване на IRMA от потребителската страница ако влезете чрез IRMA.', # Fuzzy
	'irma-urls-action' => 'Действие',
	'irma-urls-delete' => 'Изтриване',
	'irma-add-url' => 'Добавяне на нов IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Влизане или създаване на нова сметка',
	'irma-provider-label-irma' => 'Въведете своя IRMA адрес',
	'irma-provider-label-google' => 'Влизане чрез сметката в Google',
	'irma-provider-label-other-username' => 'Въведете вашето $1 потребителско име',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 * @author Bellayet
 * @author Ehsanulhb
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'irmalogin' => 'ওপেনআইডি-এর সাহায্য লগইন', # Fuzzy
	'irmaserver' => 'ওপেনআইডি সার্ভার',
	'irmaxrds' => 'ইয়াদিস ফাইল',
	'irmaerror' => 'নিশ্চিতকরণ ত্রুটি',
	'irmaconfigerror' => 'ওপেন আইডি কনফিগারেশন ত্রুটি',
	'irmapermission' => 'ওপেনআইডি অনুমতি ত্রুটি',
	'irmacancel' => 'নিশ্চিতকরণ বাতিল করা হয়েছে',
	'irmacanceltext' => 'ওপেনআইডি ইউআরএল-এর নিশ্চিতকরণ বাতিল করা হয়েছে।',
	'irmafailure' => 'নিশ্চিতকরণ ব্যর্থ হয়েছে',
	'irmasuccess' => 'নিশ্চিতকরণ সফল',
	'irmasuccesstext' => 'ওপেনআইডি ইউআরএল-এর নিশ্চিতকরণ সফল।', # Fuzzy
	'irmausernameprefix' => 'ওপেনআইডিইউজার',
	'irmaoptional' => 'ঐচ্ছিক',
	'irmarequired' => 'বাধ্যতামূলক',
	'irmanickname' => 'ডাকনাম',
	'irmafullname' => 'প্রকৃত নাম',
	'irmaemail' => 'ই-মেইল ঠিকানা',
	'irmalanguage' => 'ভাষা',
	'irmatimezone' => 'সময় স্থান',
	'irmachooselegend' => 'ব্যবহারকারী নামের পছন্দ', # Fuzzy
	'irmachoosenick' => 'আপনার ডাকনাম ($1)',
	'irmachoosefull' => 'আপনার পূর্ণ নাম ($1)', # Fuzzy
	'irmachooseusername' => 'ব্যবহারকারী নাম:',
	'irmachoosepassword' => 'শব্দচাবি:',
	'irmaconvertsuccess' => 'সফলভাবে ওপেনআইডিতে রূপান্তর করা হয়েছে',
	'irmadelete-button' => 'নিশ্চিত করুন',
	'irma-urls-action' => 'অ্যাকশন',
	'irma-urls-delete' => 'অপসারণ',
	'irma-add-url' => 'একটি নতুন ওপেনআইডি যোগ করুন', # Fuzzy
	'irma-login-or-create-account' => 'প্রবেশ করুন অথবা নতুন অ্যকাউন্ট তৈরি করুন',
	'irma-provider-label-irma' => 'আপনার ওপেনআইডি ইউআরএল প্রবেশ করান',
	'irma-provider-label-google' => 'আপনার গুগল অ্যাকাউন্ট ব্যবহার করে প্রবেশ করুন',
	'irma-provider-label-yahoo' => 'আপনার ইয়াহু অ্যাকাউন্ট ব্যবহার করে প্রবেশ করুন',
	'irma-provider-label-aol' => 'আপনার এওএল স্ক্রিননাম প্রবেশ করান',
	'irma-provider-label-other-username' => 'আপনার $1 ব্যবহাকারী নাম প্রবেশ করান',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwenn-Ael
 * @author Y-M D
 */
$messages['br'] = array(
	'irma-desc' => "Kevreañ ouzh ar wiki gant [//irma.net/ IRMA] ha kevreañ ouzh lec'hiennoù IRMA all gant ur gont implijer wiki.",
	'irmalogin' => 'Kevreañ / Krouiñ ur gont gant IRMA',
	'irmaserver' => 'Servijer IRMA',
	'irmaxrds' => 'Restr Yadis',
	'irmaconvert' => 'Amdroer IRMA',
	'irmaerror' => 'Fazi gwiriañ',
	'irmaerrortext' => 'Ur fazi a zo bet e-pad gwiriekadenn ar URL IRMA.',
	'irmaconfigerror' => 'Fazi kefluniadur IRMA',
	'irmaconfigerrortext' => "N'eo ket mat stokañ ar c'hefluniañ IRMA evit ar wiki-mañ.
Kit e darempred, mar plij, gant unan eus [[Special:ListUsers/sysop|merourien ]] al lec'hienn-mañ.",
	'irmapermission' => 'Fazi aotre IRMA',
	'irmapermissiontext' => "N'eo ket aotreet an IRMA hoc'h eus roet da gevreañ war ar servijer-mañ.",
	'irmacancel' => 'Gwiriekadur nullet',
	'irmacanceltext' => "Nullet eo bet ar gwiriekadenn eus ar chomlec'h IRMA.",
	'irmafailure' => "C'hwitet eo ar gwiriadur",
	'irmafailuretext' => 'C\'hwitet eo bet gwiriekadenn ar chomlec\'h IRMA. Kemennadenn fazi : "$1"',
	'irmasuccess' => 'Gwiriet pep tra ervat',
	'irmasuccesstext' => "'''Gwiriet eo bet an troaù ervat, kevreet oc'h evel $1'''.

$2 eo hoc'h IRMA.

Gallout a rit merañ an IRMA-mañ ha re all diret dre an ivinell [[Special:Preferences#mw-prefsection-irma|IRMA]] en ho Penndibaboù.<br />
Gallout a rit ouzhpennañ ur ger-tremen kont diret en ho [[Special:Preferences#mw-prefsection-personal|profil implijer]].",
	'irmausernameprefix' => 'Implijer IRMA',
	'irmaserverlogininstructions' => "Goulenn a ra $3 e lakfec'h ho ker-tremen evit ho pajenn $1 implijer $2 (URL IRMA)",
	'irmatrustinstructions' => "Gwiriañ ha c'hoant hoc'h eus da rannañ titouroù gant $1.",
	'irmaallowtrust' => 'Aotren $1 da fiziout er gont implijer-mañ.',
	'irmanopolicy' => "N'en deus ket meneget al lec'hienn a bolitikerezh prevezded.",
	'irmapolicy' => 'Gwiriañ <a target="_new" href="$1">ar bolitikerezh prevezded</a> evit muioc\'h a ditouroù.',
	'irmaoptional' => 'Diret',
	'irmarequired' => 'Rekis',
	'irmanickname' => 'Lesanv',
	'irmafullname' => 'Anv klok', # Fuzzy
	'irmaemail' => "Chomlec'h postel",
	'irmalanguage' => 'Yezh',
	'irmatimezone' => 'Takad eur :',
	'irmachooselegend' => 'Dibab an anv implijer hag anv ar gont',
	'irmachooseinstructions' => "An holl implijerien o deus ezhomm ul lesanv ;
gellout a rit dibab unan eus ar c'hinnigoù a-is.",
	'irmachoosenick' => 'Ho lesanv ($1)',
	'irmachoosefull' => "Hoc'h anv klok ($1)", # Fuzzy
	'irmachooseurl' => "Un anv tapet eus hoc'h IRMA ($1)",
	'irmachooseauto' => 'Un anv krouet emgefre ($1)',
	'irmachoosemanual' => "Un anv dibabet ganeoc'h :",
	'irmachooseexisting' => 'Ur gont zo anezhi war ar wiki-mañ',
	'irmachooseusername' => 'Anv implijer :',
	'irmachoosepassword' => 'Ger-tremen :',
	'irmaconvertinstructions' => "Gant ar furmskrid-se e c'hallit kemmañ ho kont implijer evit implijout ur chomlec'h IRMA pe evit ouzhpennañ chomlec'hioù IRMA.",
	'irmaconvertoraddmoreids' => "Amdreiñ da IRMA pe ouzhpennañ ur chomlec'h IRMA all",
	'irmaconvertsuccess' => 'Amdroet eo bet ervat davet IRMA',
	'irmaconvertsuccesstext' => "Amdroet hoc'h eus ho IRMA davet $1.",
	'irma-convert-already-your-irma-text' => "Hoc'h IRMA eo hemañ dija.", # Fuzzy
	'irma-convert-other-users-irma-text' => 'IRMA un implijer all eo hemañ.', # Fuzzy
	'irmaalreadyloggedin' => "Kevreet oc'h c'hoazh.",
	'irmaalreadyloggedintext' => "'''Kevreet oc'h c'hoazh, $1!'''

Gallout a rit merañ (gwelet, diverkañ, ouzhpennañ) IRMAoù all en ivinell [[Special:Preferences#mw-prefsection-irma|IRMA]] ho penndibaboù.",
	'irmanousername' => "N'eus bet diferet anv implijer ebet.",
	'irmabadusername' => 'Un anv implijer fall zo bet lakaet.',
	'irmaautosubmit' => "Er bajenn-mañ ez eus ur furmskrid hag a c'hallfe bezañ kaset emgefre m'hoc'h eus gweredekaet JavaScript.
Ma n'eus ket, pouezit war ar bouton \"Continue\" (kenderc'hel).",
	'irmaclientonlytext' => "Ne c'hallit ket implijout kontoù adalek ar wiki-mañ evel IRMA war lec'hiennoù all.",
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => "{{SITENAME}} a embreg an [//irma.net/ IRMA] stantard evit ur sinadur hepken etre al lec'hiennoù Kenrouedad.
Gant IRMA e c'hallit kevreañ ouzh lec'hiennoù disheñvel hep implijout ur ger-tremen disheñvel evit pep hini anezho.
(Gwelit [//br.wikipedia.org/wiki/IRMA pennad Wikipedia] evit gouzout hiroc'h.)

M'ho peus ur gont dija war {{SITENAME}} e c'hallit [[Special:UserLogin|kevreañ]] ouzh ho kont implijer hag ar ger-tremen boas anezhi. Evit implijout IRMA, en dazont, e c'hallit [[Special:IRMAConvert|amdreiñ ho kont en IRMA]] goude bezañ kevreet ent reizh.

Meur a [//irma.net/get/ bourchaser IRMA] ; gallout a rit neuze kaout ur gont IRMA gweredekaet war ur servij all dija.", # Fuzzy
	'irmaupdateuserinfo' => 'Hizivaat ma zitouroù personel :',
	'irmadelete' => 'Dilemel an IRMA',
	'irmadelete-text' => 'En ur glikañ war ar bouton "{{int:irmadelete-button}}" e c\'hallit dilemel an IRMA $1 eus ho kont.
Ne c\'hallit ket mui kevreañ ouzh an IRMA-mañ.',
	'irmadelete-button' => 'Kadarnaat',
	'irmadeleteerrornopassword' => "Ne c'hallit ket dilemel hoc'h holl IRMA abalamour ma n'eus ger-tremen ebet gant ho kont.
Ne c'hallfec'h ket kevreañ hep IRMA.",
	'irmadeleteerrorirmaonly' => "Ne c'hallit ket dilemel hoc'h holl IRMA abalamour ma ne c'hallit kevreañ nemet gant hoc'h IRMA.
Ne c'hallfec'h ket kevreañ hep IRMA.",
	'irmadelete-success' => 'Tennet eo bet ervat an IRMA eus ho kont.',
	'irmadelete-error' => "Ur fazi a zo bet pa oac'h o klask tennañ an IRMA eus ho kont.",
	'prefs-irma-hide-irma' => "Kuzhit hoc'h IRMA war ho pajenn implijer, ma kevreit gant IRMA.",
	'prefs-irma-trusted-sites' => "Lec'hiennoù a fiziañs",
	'irma-hide-irma-label' => "Kuzhit hoc'h IRMA war ho pajenn implijer, ma kevreit gant IRMA.", # Fuzzy
	'irma-userinfo-update-on-login-label' => "Hizivaat ar roadennoù da heul adalek IRMA bep tro m'en em lugan :", # Fuzzy
	'irma-associated-irmas-label' => 'An IRMAoù stag ouzh ho kont :',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Ober',
	'irma-urls-registration' => 'Deiziad enskrivañ',
	'irma-urls-delete' => 'Dilemel',
	'irma-add-url' => 'Ouzhpennañ un IRMA nevez', # Fuzzy
	'irma-trusted-sites-delete-link-action-text' => 'Dilemel',
	'irma-login-or-create-account' => 'Kevreañ pe krouiñ ur gont nevez',
	'irma-provider-label-irma' => "Ebarzhit hoc'h URL IRMA",
	'irma-provider-label-google' => 'Kevreañ dre ho kont Google',
	'irma-provider-label-yahoo' => 'Kevreañ dre ho kont Yahoo',
	'irma-provider-label-aol' => "Ebarzhit hoc'h anv AOL",
	'irma-provider-label-other-username' => "Ebarzhit hoc'h anv implijer $1",
	'irma-dashboard-number-irma-users' => 'Niver a implijerien gant IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Niver a IRMAoù (hollad)',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'irma-desc' => 'Prijava na wiki sa [//irma.net/ IRMA] i prijava na druge stranice koje podržavaju IRMA sa wiki korisničkim računom',
	'irmalogin' => 'Prijava / napravite račun sa IRMA',
	'irmaserver' => 'IRMA server',
	'irmaxrds' => 'Yadis datoteka',
	'irmaconvert' => 'IRMA pretvarač',
	'irmaerror' => 'Greška pri provjeri',
	'irmaerrortext' => 'Desila se greška pri provjeri IRMA URL adrese.',
	'irmaconfigerror' => 'Greška IRMA postavki',
	'irmaconfigerrortext' => 'IRMA konfiguracija spremanja za ovaj wiki je nevaljana.
Molimo konsultujte se sa [[Special:ListUsers/sysop|administratorom]].',
	'irmapermission' => 'Greška kod IRMA dopuštenja',
	'irmapermissiontext' => 'IRMA koji ste naveli nije dopušteno da se prijavi na ovaj server.',
	'irmacancel' => 'Provjera poništena',
	'irmacanceltext' => 'Provjera IRMA URL-a je otkazana.',
	'irmafailure' => 'Potvrda nije uspjela',
	'irmafailuretext' => 'Provjera URL-a za IRMA nije uspjela. Poruka greške: "$1"',
	'irmasuccess' => 'Provjera uspješna',
	'irmasuccesstext' => "'''Uspješna provjera i prijava kao korisnika $1'''.

Vaš IRMA je $2 .

Ovaj i daljnji IRMAevi, te neobavezna šifra računa, može biti postavljena u vašim [[Special:Preferences|postavkama]].", # Fuzzy
	'irmausernameprefix' => 'IRMAKorisnik',
	'irmaserverlogininstructions' => '$3 zahtijeca da unesete Vašu šifru za vašu $2 korisničku stranicu $1 (Ovo je vaš IRMA URL).',
	'irmatrustinstructions' => 'Provjerite da li želite dijeliti podatke sa $1.',
	'irmaallowtrust' => 'Omogući $1 da vjeruje ovom korisničkom računu.',
	'irmanopolicy' => 'Sajt nema napisana pravila privatnosti.',
	'irmapolicy' => 'Provjerite <a target="_new" href="$1">politiku privatnosti</a> za više informacija.',
	'irmaoptional' => 'opcionalno',
	'irmarequired' => 'obavezno',
	'irmanickname' => 'Nadimak',
	'irmafullname' => 'Puno ime', # Fuzzy
	'irmaemail' => 'E-mail adresa',
	'irmalanguage' => 'Jezik',
	'irmatimezone' => 'Vremenska zona',
	'irmachooselegend' => 'Odabir korisničkog imena i računa',
	'irmachooseinstructions' => 'Svi korisnici trebaju imati nadimak;
možete odabrati jedan sa opcijama ispod.',
	'irmachoosenick' => 'Vaš nadimak ($1)',
	'irmachoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'irmachooseurl' => 'Ime uzeto sa Vašeg IRMA ($1)',
	'irmachooseauto' => 'Automatski generisano ime ($1)',
	'irmachoosemanual' => 'Naziv po Vašem izboru:',
	'irmachooseexisting' => 'Postojeći račun na ovoj wiki',
	'irmachooseusername' => 'korisničko ime:',
	'irmachoosepassword' => 'Šifra:',
	'irmaconvertinstructions' => 'Ovaj obrazac Vam omogućuje da promijenite Vaš korisnički račun za upotrebu URL IRMA ili da dodate više IRMA URLova',
	'irmaconvertoraddmoreids' => 'Pretvorite u IRMA ili dodajte drugi IRMA URL',
	'irmaconvertsuccess' => 'Uspješno prevedeno u IRMA',
	'irmaconvertsuccesstext' => 'Uspješno ste pretvorili Vaš IRMA u $1.',
	'irma-convert-already-your-irma-text' => 'To je već Vaš IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'To je IRMA koji pripada nekom drugom.', # Fuzzy
	'irmaalreadyloggedin' => 'Već ste prijavljeni.',
	'irmanousername' => 'Nije navedeno korisničko ime.',
	'irmabadusername' => 'Navedeno loše korisničko ime.',
	'irmaautosubmit' => 'Ova stranica uključuje obrazac koji bi se trebao automatski poslati ako je kod Vas omogućena JavaScript. Ako nije, pokušajte nastaviti dalje putem dugmeta "Continue".',
	'irmaclientonlytext' => 'Ne možete koristiti račune sa ove wiki kao IRMA na drugom sajtu.',
	'irmaloginlabel' => 'IRMA URL adresa',
	'irmalogininstructions' => '{{SITENAME}} podržava [//irma.net/ IRMA] standard za jedinstvenu prijavu između web sajtova.
IRMA omogućuje da se prijavite na mnoge različite web stranice bez korištenja različitih šifri za svaku od njih.
(Pogledajte [//en.wikipedia.org/wiki/IRMA članak na Wikipediji o IRMA-u] za više informacija.)

Postoji mnogo [http://wiki.irma.net/Public_IRMA_providers javnih provajdera za IRMA], i možda već imate neki račun na drugom servisu koji podržava IRMA.',
	'irmaupdateuserinfo' => 'Ažuriraj moje lične informacije:',
	'irmadelete' => 'Obriši IRMA',
	'irmadelete-text' => 'Klikanjem na dugme "{{int:irmadelete-button}}" uklonićete IRMA $1 sa vašeg računa.
Nećete više biti u mogućnosti da se prijavite s ovim IRMA.',
	'irmadelete-button' => 'Potvrdi',
	'irmadeleteerrornopassword' => 'Ne možete obrisati sve vaše IRMA jer vaš račun nema šifre.
Neće se moći prijaviti bez IRMA.',
	'irmadeleteerrorirmaonly' => 'Ne možete obrisati sve vaše IRMA jer vam je omogućeno da se prijavite samo sa IRMA.
Bez OpenId nećete moći da se prijavite.',
	'irmadelete-success' => 'IRMA je uspješno uklonjen sa vašeg računa.',
	'irmadelete-error' => 'Desila se greška pri uklanjanju IRMA sa vašeg računa.',
	'prefs-irma-hide-irma' => 'Sakrij Vaš IRMA na Vašoj korisničkoj stranici, ako ste prijavljeni sa IRMA.',
	'irma-hide-irma-label' => 'Sakrij Vaš IRMA na Vašoj korisničkoj stranici, ako ste prijavljeni sa IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ažuriraj slijedeće informacije sa IRMA identiteta svaki put kad se prijavim:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMAovi pridruženi vašem računu:',
	'irma-urls-action' => 'Akcija',
	'irma-urls-delete' => 'Obriši',
	'irma-add-url' => 'Dodaj novi IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Prijavite se ili napravite novi račun',
	'irma-provider-label-irma' => 'Unesite Vaš IRMA URL',
	'irma-provider-label-google' => 'Prijava putem Vašeg Google računa',
	'irma-provider-label-yahoo' => 'Prijava putem Vašeg Yahoo računa',
	'irma-provider-label-aol' => 'Unesite svoj AOL nadimak',
	'irma-provider-label-other-username' => 'Unesite Vaše $1 korisničko ime',
	'irma-dashboard-number-irma-users' => 'Broj korisnika sa IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Broj IRMA-eva (ukupno)',
);

/** Catalan (català)
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Toniher
 */
$messages['ca'] = array(
	'irma-desc' => 'Inicieu una sessió al wiki amb un [//irma.net/ IRMA], i inicieu una sessió a qualsevol lloc web compatible amb IRMA amb el vostre compte wiki',
	'irmalogin' => 'Inicia una sessió amb IRMA', # Fuzzy
	'irmaserver' => 'Servidor IRMA',
	'irmaxrds' => 'Fitxer Yadis',
	'irmaconvert' => 'Conversor IRMA',
	'irmaerror' => 'Error de verificació',
	'irmafailure' => 'Verificació fallida',
	'irmausernameprefix' => 'Usuari IRMA',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Requerit',
	'irmanickname' => 'Sobrenom',
	'irmafullname' => 'Nom complet', # Fuzzy
	'irmaemail' => 'Adreça de correu electrònic',
	'irmalanguage' => 'Idioma',
	'irmatimezone' => 'Zona horaria',
	'irmachooseinstructions' => 'Tots els usuaris cal que tinguin un sobrenom;
podeu triar-ne un de les opcions a continuació.',
	'irmachoosefull' => 'El vostre nom complet ($1)', # Fuzzy
	'irmachooseexisting' => 'Un compte existent en aquesta wiki',
	'irmachoosepassword' => 'Contrasenya',
	'irma-urls-action' => 'Acció',
	'irma-urls-delete' => 'Elimina',
	'irma-provider-label-other-username' => "Introduïu el vostre $1 nom d'usuari",
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'irmalanguage' => 'Мотт',
	'irmachooseusername' => 'декъашхочун цӀе:',
	'irmachoosepassword' => 'Пароль:',
	'irmadelete' => 'ДӀаяккха IRMA',
	'irmadelete-button' => 'Бакъдан',
	'irma-urls-action' => 'Дийраш',
	'irma-urls-delete' => 'ДӀаяккха',
	'irma-add-url' => 'ТӀетоха керла IRMA',
);

/** Sorani Kurdish (کوردی)
 */
$messages['ckb'] = array(
	'irmadelete-button' => 'پشتدار بکەرەوە',
	'irma-urls-delete' => 'سڕینەوە',
);

/** Czech (česky)
 * @author Kuvaly
 * @author Matěj Grabovský
 * @author Michaelbrabec
 * @author Mormegil
 */
$messages['cs'] = array(
	'irma-desc' => 'Přihlašování se na wiki pomocí [//irma.net/ IRMA] a přihlašování se na jiné stránky podporující IRMA pomocí uživatelského účtu z wiki',
	'irmalogin' => 'Přihlášení / vytvoření účtu pomocí IRMA',
	'irmaserver' => 'IRMA server',
	'irmaxrds' => 'Soubor Yadis',
	'irmaconvert' => 'IRMA konvertor',
	'irmaerror' => 'Chyba při ověřování',
	'irmaerrortext' => 'Při ověřování URL IRMA se vyskytla chyba.',
	'irmaconfigerror' => 'Chyba konfigurace IRMA',
	'irmaconfigerrortext' => 'Konfigurace IRMA této wiki je neplatná.
Prosím, poraďte se se [[Special:ListUsers/sysop|správcem]].',
	'irmapermission' => 'Chyba oprávnění IRMA',
	'irmapermissiontext' => 'IRMA, který jste poskytli, nemá oprávnění příhlásit se k tomuto serveru.',
	'irmacancel' => 'Ověřování bylo zrušeno',
	'irmacanceltext' => 'Ověřování URL IRMA bylo zrušeno.',
	'irmafailure' => 'Ověřování zrušeno',
	'irmafailuretext' => 'Ověřování URL IRMA selhalo. Chybová zpráva: „$1“',
	'irmasuccess' => 'Ověřování bylo úspěšné',
	'irmasuccesstext' => "'''Úspěšně ověřeno a {{gender:|přihlášen uživatel|přihlášena uživatelka}} $1'''.

Vaše IRMA je $2 .

Toto a případná další IRMA můžete spravovat na [[Special:Preferences#mw-prefsection-irma|záložce IRMA]] v uživatelském nastavení.<br />
Nepovinné heslo k účtu si můžete přidat v [[Special:Preferences#mw-prefsection-personal|uživatelském profilu]].",
	'irmausernameprefix' => 'Uživatel IRMA',
	'irmaserverlogininstructions' => '$3 žádá, abyste {{GENDER:$2|zadal|zadala|zadali}} své heslo jako {{GENDER:$2|uživatel|uživatelka}} $2 se stránkou $1 (to je vaše IRMA URL)',
	'irmatrustinstructions' => 'Zkontrolujte, jestli chcete sdílet data s uživatelem $1.',
	'irmaallowtrust' => 'Povolit $1 důvěřovat tomuto uživatelskému účtu.',
	'irmanopolicy' => 'Lokalita nespecifikovala pravidla ochrany osobních údajů.',
	'irmapolicy' => 'Více informací na stránce <a target="_new" href="$1">Ochrana osobních údajoů</a>.',
	'irmaoptional' => 'Volitelné',
	'irmarequired' => 'Požadované',
	'irmanickname' => 'Přezdívka',
	'irmafullname' => 'Skutečné jméno',
	'irmaemail' => 'E-mailová adresa',
	'irmalanguage' => 'Jazyk',
	'irmatimezone' => 'Časové pásmo',
	'irmachooselegend' => 'Volba uživatelského jména a účtu',
	'irmachooseinstructions' => 'Kyždý uživatel musí mít přezdívku; můžete si vybrat z níže uvedených možností.',
	'irmachoosenick' => 'Vaše přezdívka ($1)',
	'irmachoosefull' => 'Vaše skutečné jméno ($1)',
	'irmachooseurl' => 'Jméno na základě vašeho IRMA ($1)',
	'irmachooseauto' => 'Automaticky vytvořené jméno ($1)',
	'irmachoosemanual' => 'Jméno, které si vyberete:',
	'irmachooseexisting' => 'Existující účet na této wiki',
	'irmachooseusername' => 'Uživatelské jméno:',
	'irmachoosepassword' => 'Heslo:',
	'irmaconvertinstructions' => 'Tento formulář vám umožňuje změnit váš učet, aby používal IRMA URL, nebo přidat více URL IRMA.',
	'irmaconvertoraddmoreids' => 'Převést na IRMA nebo přidat jinou IRMA URL',
	'irmaconvertsuccess' => 'Úspěšně převedeno na IRMA',
	'irmaconvertsuccesstext' => 'Úspěšně jste převedli váš IRMA na $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 je již k vašemu účtu přiřazeno.',
	'irma-convert-other-users-irma-text' => '$1 je IRMA někoho jiného. Nemůžete používat IRMA jiného uživatele.',
	'irmaalreadyloggedin' => 'Už jste {{GENDER:|přihlášen|přihlášena}}.',
	'irmaalreadyloggedintext' => "'''Už jste {{GENDER:$1|přihlášen, uživateli|přihlášena, uživatelko|přihlášen, uživateli}} $1!'''

Spravovat svá IRMA (prohlížet, mazat, přidávat další) můžete na [[Special:Preferences#mw-prefsection-irma|záložce IRMA]] uživatelského nastavení.",
	'irmanousername' => 'Nebylo zadáno uživatelské jméno.',
	'irmabadusername' => 'Bylo zadáno chybné uživatelské jméno.',
	'irmaautosubmit' => 'Tato stránka obsahuje formulář, který by měl být automaticky odeslán pokud máte zapnutý JavaScript.
Pokud ne, zkuste tlačátko „Continue“ (Pokračovat).',
	'irmaclientonlytext' => 'Nemůžete používat účty z této wiki jako IRMA na jinýh webech.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}} podporuje pro sjednocené přihlašování na různé webové stránky standard [//irma.net/ IRMA].
IRMA vám umožňuje přihlašovat se na množství různých webových stránek bez nutnosti používat pro každou jiné heslo.
(Více informací se dočtete v [//cs.wikipedia.org/wiki/IRMA článku o IRMA na Wikipedii].)
Existuje množství [//irma.net/get/ poskytovatelů IRMA], možná už také máte účet s podporou IRMA v rámci jiné služby.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} dovoluje přihlášení ''pouze'' pomocí IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Pokud už máte na {{grammar:6sg|{{SITENAME}}}} účet, můžete se [[Special:UserLogin|přihlásit]] pomocí uživatelského jména a hesla jako obvykle.
Pokud chcete v budoucnosti používat IRMA, můžete po normálním přihlášení [[Special:IRMAConvert|převést svůj účet na IRMA]].',
	'irmaupdateuserinfo' => 'Aktualizovat moje osobní informace:',
	'irmadelete' => 'Smazat IRMA',
	'irmadelete-text' => 'Kliknutím na tlačítko „{{int:irmadelete-button}}“ odstraníte IRMA $1 z vašeho účtu.
Nebudete se již moci tímto IRMA přihlasít.',
	'irmadelete-button' => 'Potvrdit',
	'irmadeleteerrornopassword' => 'Nemůžete smazat všechna svá IRMA, protože váš účet nemá heslo.
Bez IRMA byste se {{GENDER:|nebyl schopen|nebyla schopna|nebyli schopni}} přihlásit.',
	'irmadeleteerrorirmaonly' => 'Nemůžete smazat všechna svá IRMA, protože přihlášení je dovoleno pouze pomocí IRMA.
Bez IRMA byste se {{GENDER:|nebyl schopen|nebyla schopna|nebyli schopni}} přihlásit.',
	'irmadelete-success' => 'IRMA bylo úspěšně odstraněno z vašeho účtu.',
	'irmadelete-error' => 'Během odstraňování IRMA z vašeho účtu se vyskytla chyba.',
	'irma-irmas-were-not-merged' => 'IRMA nebyly při slučování uživatelských účtů sloučeny.',
	'prefs-irma-hide-irma' => 'Nezobrazovat IRMA na vaší uživatelské stránce, pokud se přihlašujete pomocí IRMA.',
	'irma-hide-irma-label' => 'Nezobrazovat IRMA na vaší uživatelské stránce, pokud se přihlašujete pomocí IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Aktualizovat následující informace z IRMA identity vždy, když se přihlásím:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA asociovaná s vaším účtem:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Operace',
	'irma-urls-registration' => 'Čas registrace',
	'irma-urls-delete' => 'Smazat',
	'irma-add-url' => 'Přidat nové IRMA', # Fuzzy
	'irma-local-identity' => 'Vaše IRMA:',
	'irma-login-or-create-account' => 'Přihlásit se nebo vytvořit nový účet',
	'irma-provider-label-irma' => 'Zadejte URL svého IRMA',
	'irma-provider-label-google' => 'Přihlásit se pomocí Google účtu',
	'irma-provider-label-yahoo' => 'Přihlásit se pomocí Yahoo účtu',
	'irma-provider-label-aol' => 'Přihlásit se pomocí AOL účtu',
	'irma-provider-label-wmflabs' => 'Přihlásit se pomocí účtu na Wmflabs',
	'irma-provider-label-other-username' => 'Zadejte svoje uživatelské jméno pro $1',
	'specialpages-group-irma' => 'Servisní stránky a stavové informace k IRMA',
	'right-irma-converter-access' => 'Smí přidávat nebo převádět svůj účet na užití identit IRMA',
	'right-irma-dashboard-access' => 'Standardní přístup k řídicímu panelu IRMA',
	'right-irma-dashboard-admin' => 'Správcovský přístup k řídicímu panelu IRMA',
	'irma-dashboard-title' => 'Řídicí panel IRMA',
	'irma-dashboard-title-admin' => 'Řídicí panel IRMA (správce)',
	'irma-dashboard-introduction' => 'Aktuální nastavení rozšíření IRMA ([$1 nápověda])',
	'irma-dashboard-number-irma-users' => 'Počet uživatelů s IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Počet IRMA (celkem)',
	'irma-dashboard-number-users-without-irma' => 'Počet uživatelů bez IRMA',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'irmalanguage' => 'ѩꙁꙑкъ',
);

/** Welsh (Cymraeg)
 * @author (vinny)
 */
$messages['cy'] = array(
	'irmaoptional' => 'Dewisol',
);

/** Danish (dansk)
 * @author Froztbyte
 * @author Jon Harald Søby
 */
$messages['da'] = array(
	'irmaserver' => 'IRMA-server',
	'irmaxrds' => 'Yadis-fil',
	'irmaerror' => 'Bekræftelsesfejl',
	'irmacancel' => 'Bekræftelse annulleret',
	'irmausernameprefix' => 'IRMA-bruger',
	'irmarequired' => 'Påkrævet',
	'irmanickname' => 'Kaldenavn',
	'irmalanguage' => 'Sprog',
	'irmachooseinstructions' => 'Alle brugere skal have et brugernavn;
du kan vælge et fra nedenstående muligheder.',
	'irmachooseusername' => 'Brugernavn:',
	'irmachoosepassword' => 'Adgangskode:',
	'irmanousername' => 'Intet brugernavn angivet.',
	'irmabadusername' => 'Ugyldigt brugernavn angivet.',
	'irmaloginlabel' => 'IRMA-adresse',
	'irmadelete' => 'Slet IRMA',
	'irmadelete-button' => 'Bekræft',
	'irmadelete-success' => 'IRMA er blevet fjernet fra din konto.',
	'irma-urls-action' => 'Handling',
	'irma-urls-delete' => 'Slet',
	'irma-add-url' => 'Tilføj en ny IRMA', # Fuzzy
	'irma-provider-label-aol' => 'Indtast dit AOL-brugernavn',
);

/** German (Deutsch)
 * @author ChrisiPK
 * @author Church of emacs
 * @author DaSch
 * @author Geitost
 * @author Kghbln
 * @author LWChris
 * @author Leithian
 * @author Metalhead64
 * @author Tbleher
 * @author The Evil IP address
 * @author Umherirrender
 * @author Wikinaut
 */
$messages['de'] = array(
	'irma-desc' => 'Erlaubt die Anmeldung mit einer [//irma.net/ IRMA]. Sofern es für dieses Wiki aktiviert wurde, kann man sich auch mit seinem Benutzerkonto (dieses Wikis) als IRMA bei anderen Websites per IRMA anmelden',
	'irmaidentifier' => 'IRMA-Kennung',
	'irmalogin' => 'Anmelden / Benutzerkonto erstellen mit IRMA',
	'irmaserver' => 'IRMA-Server',
	'irma-identifier-page-text-user' => 'Diese Seite ist die Kennung für den Benutzer „$1“.',
	'irma-identifier-page-text-different-user' => 'Diese Seite ist die Kennung für den Benutzer mit der Kennung $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Dies ist eine ungültige lokale IRMA-Kennung.',
	'irma-server-identity-page-text' => 'Dies ist eine technische IRMA-Server-Seite während der IRMA-Authentifizierung, die keine weitere Bedeutung hat.',
	'irmaxrds' => 'Yadis-Datei',
	'irmaconvert' => 'IRMA-Konverter',
	'irmaerror' => 'Überprüfungsfehler',
	'irmaerrortext' => 'Ein Fehler ist während der Überprüfung der IRMA-URL aufgetreten.',
	'irma-error-no-auth' => 'Bei der Verifizierung der IRMA-URL $1 ist ein unspezifizierter Authentifikations-Antwort/Anfragen-Fehler aufgetreten.',
	'irma-error-server-response' => "Während der Verifizierung der IRMA-URL $1 ist ein Fehler aufgetreten.

Die Antwort des Servers lautete: ''$2''",
	'irma-error-request-forgery' => 'Ein Fehler ist aufgetreten: Es wurde ein ungültiger Token gefunden.',
	'irma-error-wrong-force-provider-setting' => 'Es ist ein interner Fehler aufgetreten: Ein falscher URL-Wert wurde für den erzwungenen Provider „$1“ gefunden.',
	'irma-error-irma-convert-not-allowed-forced-provider' => "Es ist nicht möglich, weitere IRMAs mit deinem Benutzerkonto zu verknüpfen, da du nur den '''erzwungenen''' IRMA-Provider „$1“ zur Wikianmeldung verwenden kannst.",
	'irmaconfigerror' => 'IRMA-Konfigurationsfehler',
	'irmaconfigerrortext' => 'Die IRMA-Speicherkonfiguarion für dieses Wiki ist fehlerhaft.
Bitte benachrichtige einen [[Special:ListUsers/sysop|Administrator]].',
	'irmapermission' => 'IRMA-Berechtigungsfehler',
	'irmapermissiontext' => 'Die angegebene IRMA berechtigt nicht zur Anmeldung an diesem Server.',
	'irmacancel' => 'Überprüfung abgebrochen',
	'irmacanceltext' => 'Die Überprüfung der IRMA-URL wurde abgebrochen.',
	'irmafailure' => 'Überprüfungsfehler',
	'irmafailuretext' => 'Die Überprüfung der IRMA-URL ist fehlgeschlagen. Fehlermeldung: „$1“',
	'irmasuccess' => 'Überprüfung erfolgreich beendet',
	'irmasuccesstext' => "'''Die Überprüfung sowie die Anmeldung als Benutzer $1 war erfolgreich.'''

Deine IRMA lautet $2.

Diese und weitere IRMAs können unter dem Reiter [[Special:Preferences#mw-prefsection-irma|IRMA]] deiner Kontoeinstellungen verwaltet werden.<br />
Ein fakultatives Benutzerkontopasswort kann hingegen unter dem Reiter [[Special:Preferences#mw-prefsection-personal|Benutzerdaten]] deiner Kontoeinstellungen festgelegt werden.",
	'irmausernameprefix' => 'IRMA-Benutzer',
	'irmaserverlogininstructions' => '$3 erfordert die Eingabe deines Passworts für dein Benutzerkonto $2 auf der Seite $1 (IRMA-URL)',
	'irmatrustinstructions' => 'Prüfe, ob du Daten mit $1 teilen möchtest.',
	'irmaallowtrust' => 'Erlaube $1, diesem Benutzerkonto zu vertrauen.',
	'irmanopolicy' => 'Die Seite hat keine Datenschutzrichtlinie angegeben.',
	'irmapolicy' => 'Weitere Informationen sind in der <a target="_new" href="$1">Datenschutzrichtlinie</a> zu finden.',
	'irmaoptional' => 'Optional',
	'irmarequired' => 'Erforderlich',
	'irmanickname' => 'Benutzername',
	'irmafullname' => 'Bürgerlicher Name',
	'irmaemail' => 'E-Mail-Adresse',
	'irmalanguage' => 'Sprache',
	'irmatimezone' => 'Zeitzone',
	'irmachooselegend' => 'Wahl des Benutzernamens und Benutzerkontos',
	'irmachooseinstructions' => 'Alle Benutzer benötigen einen Benutzernamen;
du kannst einen aus der untenstehenden Liste auswählen.',
	'irmachoosenick' => 'Dein Spitzname ($1)',
	'irmachoosefull' => 'Dein bürgerlicher Name ($1)',
	'irmachooseurl' => 'Ein Name aus deiner IRMA ($1)',
	'irmachooseauto' => 'Ein automatisch erzeugter Name ($1)',
	'irmachoosemanual' => 'Ein Name deiner Wahl:',
	'irmachooseexisting' => 'Ein existierendes Benutzerkonto in diesem Wiki',
	'irmachooseusername' => 'Benutzername:',
	'irmachoosepassword' => 'Passwort:',
	'irmaconvertinstructions' => 'Mit diesem Formular kannst du dein Benutzerkonto zur Benutzung mit deiner IRMA-URL freigeben oder eine weitere IRMA-URL hinzufügen.',
	'irmaconvertoraddmoreids' => 'Zu IRMA konvertieren oder eine andere IRMA-URL hinzufügen',
	'irmaconvertsuccess' => 'Erfolgreich nach IRMA konvertiert',
	'irmaconvertsuccesstext' => 'Du hast die Konvertierung deiner IRMA nach $1 erfolgreich durchgeführt.',
	'irma-convert-already-your-irma-text' => '$1 ist eine deinem Benutzerkonto bereits zugeordnete IRMA.',
	'irma-convert-other-users-irma-text' => '$1 ist schon die IRMA eines anderen Benutzers. Du kannst diese IRMA nicht verwenden.',
	'irmaalreadyloggedin' => 'Du bist bereits angemeldet.',
	'irmaalreadyloggedintext' => "'''Du bist bereits angemeldet, $1.'''

Du kannst diese und weitere IRMAs unter dem Reiter [[Special:Preferences#mw-prefsection-irma|IRMA]] deiner Kontoeinstellungen verwalten (ansehen, löschen sowie weitere hinzufügen).",
	'irmanousername' => 'Kein Benutzername angegeben.',
	'irmabadusername' => 'Falscher Benutzername angegeben.',
	'irmaautosubmit' => 'Diese Seite enthält ein Formular, das automatisch übertragen wird, wenn JavaSkript aktiviert ist. Falls nicht, klicke bitte auf „Continue“ (Weiter).',
	'irmaclientonlytext' => 'Du kannst Benutzerkonten dieses Wiki nicht als IRMA für andere Seiten verwenden.',
	'irmaloginlabel' => 'IRMA-URL',
	'irmalogininstructions' => '{{SITENAME}} unterstützt den [//irma.net/ IRMA-Standard] für eine einheitliche Anmeldung auf mehreren Websites.
IRMA meldet dich bei vielen unterschiedlichen Websites an, ohne dass du für jede ein separates Passwort verwenden musst.
(Mehr Informationen hierzu bietet der [//de.wikipedia.org/wiki/IRMA Wikipedia-Artikel zu IRMA].)
Es gibt viele [//irma.net/get/ IRMA-Provider] und möglicherweise verfügst du bereits über ein IRMA-Benutzerkonto bei einer anderen Website.',
	'irmalogininstructions-irmaloginonly' => "Auf {{SITENAME}} kann man sich ''nur'' mit IRMA anmelden.",
	'irmalogininstructions-passwordloginallowed' => 'Sofern du bereits über ein Benutzerkonto auf {{SITENAME}} verfügst, kannst du dich hier wie gewöhnlich mit deinem Benutzernamen und Passwort [[Special:UserLogin|anmelden]].
Um IRMA zukünftig zu nutzen, kannst du dein Benutzerkonto für die Verwendung mit IRMA [[Special:IRMAConvert|umwandeln]], nachdem du dich regulär angemeldet hast.',
	'irmaupdateuserinfo' => 'Persönliche Daten aktualisieren:',
	'irmadelete' => 'IRMA löschen',
	'irmadelete-text' => 'Wenn du auf den Button „{{int:irmadelete-button}}“ klickst, löschst du die IRMA $1 von deinem Benutzerkonto.
Du wirst dich nicht mehr mit dieser IRMA anmelden können.',
	'irmadelete-button' => 'Bestätigen',
	'irmadeleteerrornopassword' => 'Du kannst nicht alle deine IRMAs löschen, da du kein Passwort gesetzt hast.
Ohne IRMA könntest du dich nicht mehr anmelden.',
	'irmadeleteerrorirmaonly' => 'Du kannst nicht alle deiner IRMAs löschen, weil du dich nur mit IRMA einloggen darfst.
Ohne IRMA könntest du dich nicht mehr anmelden.',
	'irmadelete-success' => 'Die IRMA wurde erfolgreich von deinem Benutzerkonto entfernt.',
	'irmadelete-error' => 'Beim Entfernen der IRMA von deinem Benutzerkonto ist ein Fehler aufgetreten.',
	'irma-irmas-were-not-merged' => 'Die IRMA(s) wurden während der Zusammenlegung der Benutzerkonten nicht zusammengeführt.',
	'prefs-irma-hide-irma' => 'Anzeige der IRMA auf deiner Benutzerseite',
	'prefs-irma-userinfo-update-on-login' => 'Daten, die vom IRMA-Konto bei jeder Anmeldung aktualisiert werden',
	'prefs-irma-associated-irmas' => 'Mit deinem {{SITENAME}} Benutzerkonto verbundene IRMAs:',
	'prefs-irma-trusted-sites' => 'Websites, denen du vertraust',
	'prefs-irma-local-identity' => 'Deine IRMA zur Anmeldung auf anderen Websites',
	'irma-hide-irma-label' => 'Deine IRMA-URL auf deiner Benutzerseite ausblenden.',
	'irma-show-irma-url-on-userpage-always' => 'Deine IRMA wird immer auf deiner Benutzerseite angezeigt, wenn du sie besuchst.',
	'irma-show-irma-url-on-userpage-never' => 'Deine IRMA wird niemals auf deiner Benutzerseite angezeigt.',
	'irma-userinfo-update-on-login-label' => 'Diese Benutzerprofilfelder werden vom IRMA-Konto jedes Mal automatisch aktualisiert, wenn du dich anmeldest:',
	'irma-associated-irmas-label' => 'Mit dem Konto verbundene IRMAs:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Aktion',
	'irma-urls-registration' => 'Registrierungszeitpunkt',
	'irma-urls-delete' => 'Löschen',
	'irma-add-url' => 'Eine neue IRMA deinem Benutzerkonto hinzufügen',
	'irma-trusted-sites-label' => 'Websites, denen du vertraust, und bei denen du mit deiner IRMA bekannt bist:',
	'irma-trusted-sites-table-header-column-url' => 'Websites, denen du vertraust',
	'irma-trusted-sites-table-header-column-action' => 'Aktion',
	'irma-trusted-sites-delete-link-action-text' => 'Löschen',
	'irma-trusted-sites-delete-all-link-action-text' => 'Alle Websites löschen, denen du bisher vertraut hast',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Löschen vertrauenswürdiger Websites',
	'irma-trusted-sites-delete-confirmation-question' => 'Durch Klicken auf „{{int:irma-trusted-sites-delete-confirmation-button-text}}“ entfernst du „$1“ aus der Liste der vertrauenswürdigen Websites.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Durch Klicken auf „{{int:irma-trusted-sites-delete-confirmation-button-text}}“ entfernst du alle vertrauenswürdigen Websites aus deinem Benutzerprofil.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Bestätigen',
	'irma-trusted-sites-delete-confirmation-success-text' => '„$1“ wurde erfolgreich aus der Liste der vertrauenswürdigen Websites entfernt.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Alle Websites, denen du bisher vertraut hast, wurden erfolgreich aus deinem Benutzerprofil entfernt.',
	'irma-local-identity' => 'Deine IRMA:',
	'irma-login-or-create-account' => 'Anmelden oder ein neues Benutzerkonto erstellen',
	'irma-provider-label-irma' => 'Gib deine IRMA-URL an',
	'irma-provider-label-google' => 'Mit deinem Google-Benutzerkonto anmelden',
	'irma-provider-label-yahoo' => 'Mit deinem Yahoo-Benutzerkonto anmelden',
	'irma-provider-label-aol' => 'Gib deinen AOL-Namen an',
	'irma-provider-label-wmflabs' => 'Mit deinem Wmflabs-Benutzerkonto anmelden',
	'irma-provider-label-other-username' => 'Gib deinen „$1“-Benutzernamen an',
	'specialpages-group-irma' => 'Websites von IRMA-Diensten und Statusinformationen',
	'right-irma-converter-access' => 'Benutzerkonto zur Nutzung von IRMA erstellen oder konvertieren',
	'right-irma-dashboard-access' => 'Standardzugang zur IRMA-Übersichts- und Einstellungsseite',
	'right-irma-dashboard-admin' => 'Administratorzugang zur IRMA-Übersichts- und Einstellungsseite',
	'action-irma-converter-access' => 'ein Benutzerkonto zur Nutzung von IRMA zu erstellen oder zu konvertieren',
	'action-irma-dashboard-access' => 'die IRMA-Übersichts- und Einstellungsseite anzusehen',
	'action-irma-dashboard-admin' => 'die IRMA-Administrator-Übersichts- und -Einstellungsseite anzusehen',
	'irma-dashboard-title' => 'IRMA – Übersicht',
	'irma-dashboard-title-admin' => 'IRMA – Übersicht und Einstellungen',
	'irma-dashboard-introduction' => 'Die aktuellen Einstellungen zu IRMA ([$1 Hilfe])',
	'irma-dashboard-number-irma-users' => 'Anzahl der Benutzer mit mindestens einer IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Anzahl der IRMAs (gesamt)',
	'irma-dashboard-number-users-without-irma' => 'Anzahl der Benutzer ohne IRMA',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author ChrisiPK
 * @author Imre
 * @author Kghbln
 * @author LWChris
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'irmaconfigerrortext' => 'Die IRMA-Speicherkonfiguarion für dieses Wiki ist fehlerhaft.
Bitte benachrichtigen Sie einen [[Special:ListUsers/sysop|Administrator]].',
	'irmasuccesstext' => "'''Die Überprüfung sowie die Anmeldung als Benutzer $1 war erfolgreich.'''

Ihre IRMA lautet $2.

Diese und weitere IRMAs können unter dem Reiter [[Special:Preferences#mw-prefsection-irma|IRMA]] Ihrer Kontoeinstellungen verwaltet werden.<br />
Ein fakultatives Benutzerkontopasswort kann hingegen unter dem Reiter [[Special:Preferences#mw-prefsection-personal|Benutzerdaten]] Ihrer Kontoeinstellungen festgelegt werden.",
	'irmaserverlogininstructions' => '$3 erfordert die Eingabe Ihres Passworts für Ihr Benutzerkonto $2 auf der Seite $1 (IRMA-URL)',
	'irmatrustinstructions' => 'Prüfen Sie, ob Sie Daten mit $1 teilen möchten.',
	'irmachooseinstructions' => 'Alle Benutzer benötigen einen Benutzernamen;
Sie können einen aus der untenstehenden Liste auswählen.',
	'irmachoosenick' => 'Ihr Spitzname ($1)',
	'irmachoosefull' => 'Ihr bürgerlicher Name ($1)', # Fuzzy
	'irmachooseurl' => 'Ein Name aus Ihrer IRMA ($1)',
	'irmachoosemanual' => 'Ein Name Ihrer Wahl:',
	'irmaconvertinstructions' => 'Mit diesem Formular können Sie Ihr Benutzerkonto zur Benutzung mit Ihrer IRMA-URL freigeben oder eine weitere IRMA-URL hinzufügen.',
	'irmaconvertsuccesstext' => 'Sie haben die Konvertierung Ihrer IRMA nach $1 erfolgreich durchgeführt.',
	'irma-convert-already-your-irma-text' => 'Dies ist bereits Ihre IRMA.', # Fuzzy
	'irmaalreadyloggedin' => 'Sie sind bereits angemeldet.',
	'irmaalreadyloggedintext' => "'''Sie sind bereits angemeldet, $1.'''

Sie können diese und weitere IRMAs unter dem Reiter [[Special:Preferences#mw-prefsection-irma|IRMA]] Ihrer Kontoeinstellungen verwalten (ansehen, löschen sowie weitere hinzufügen).",
	'irmaautosubmit' => 'Diese Seite enthält ein Formular, das automatisch übertragen wird, wenn JavaSkript aktiviert ist. Falls nicht, klicken Sie bitte auf „Continue“ (Weiter).',
	'irmaclientonlytext' => 'Sie können keine Benutzerkonten aus diesem Wiki als IRMA für andere Seiten verwenden.',
	'irmalogininstructions' => '{{SITENAME}} unterstützt den [//irma.net/ IRMA-Standard] für eine einheitliche Anmeldung auf mehreren Websites.
IRMA meldet Sie bei vielen unterschiedlichen Websites an, ohne dass Sie für jede ein separates Passwort verwenden müssen.
(Mehr Informationen hierzu bietet der [//de.wikipedia.org/wiki/IRMA Wikipedia-Artikel zu IRMA].)
Es gibt viele [//irma.net/get/ IRMA-Provider] und möglicherweise verfügen Sie bereits über ein IRMA-Benutzerkonto bei einer anderen Website.',
	'irmalogininstructions-passwordloginallowed' => 'Sofern Sie bereits über ein Benutzerkonto auf {{SITENAME}} verfügen, können Sie sich hier wie gewöhnlich mit Ihrem Benutzernamen und Passwort [[Special:UserLogin|anmelden]].
Um IRMA auf diesem Wiki zukünftig zu nutzen, können Sie Ihr Benutzerkonto für die Verwendung mit IRMA [[Special:IRMAConvert|umwandeln]], nachdem Sie sich regulär angemeldet haben.',
	'irmadelete-text' => 'Wenn Sie auf den Button „{{int:irmadelete-button}}“ klicken, löschen Sie die IRMA $1 von Ihrem Benutzerkonto.
Sie werden sich nicht mehr mit dieser IRMA anmelden können.',
	'irmadeleteerrornopassword' => 'Sie können nicht alle Ihre IRMAs löschen, da Sie kein Passwort gesetzt haben.
Ohne IRMA könnten Sie sich nicht mehr anmelden.',
	'irmadeleteerrorirmaonly' => 'Sie können nicht alle Ihre IRMAs löschen, weil Sie sich nur mit IRMA einloggen dürfen.
Ohne IRMA könnten Sie sich nicht mehr anmelden.',
	'irmadelete-success' => 'Die IRMA wurde erfolgreich von Ihrem Benutzerkonto entfernt.',
	'irmadelete-error' => 'Beim Entfernen der IRMA von Ihrem Benutzerkonto ist ein Fehler aufgetreten.',
	'prefs-irma-hide-irma' => 'Verstecken Sie Ihre IRMA auf Ihrer Benutzerseite, wenn Sie sich mit IRMA anmelden.',
	'irma-hide-irma-label' => 'Verstecken Sie Ihre IRMA auf Ihrer Benutzerseite, wenn Sie sich mit IRMA anmelden.', # Fuzzy
	'irma-associated-irmas-label' => 'Mit Ihrem Benutzerkonto verbundene IRMAs:',
	'irma-provider-label-irma' => 'Geben Sie Ihre IRMA-URL an',
	'irma-provider-label-google' => 'Mit Ihrem Google-Benutzerkonto anmelden',
	'irma-provider-label-yahoo' => 'Mit Ihrem Yahoo-Benutzerkonto anmelden',
	'irma-provider-label-aol' => 'Geben Sie Ihren AOL-Namen an',
	'irma-provider-label-other-username' => 'Geben Sie Ihren „$1“-Benutzernamen an',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Mirzali
 */
$messages['diq'] = array(
	'irmaoptional' => 'Opsiyonel',
	'irmarequired' => 'Lazım',
	'irmanickname' => 'Leqebe',
	'irmafullname' => 'Nameyo tam', # Fuzzy
	'irmaemail' => 'Adresa e-postey',
	'irmalanguage' => 'Zıwan',
	'irmatimezone' => 'Warey saete',
	'irmachooseusername' => 'Nameyê karberi:',
	'irmachoosepassword' => 'Parola:',
	'irmaloginlabel' => 'IRMA URL',
	'irmadelete-button' => 'Tesdiq',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Kerdış',
	'irma-urls-delete' => 'Bestere',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'irma-desc' => 'Pśizjawjenje pla wikija z [//irma.net/ IRMA] a pśizjawjenje pla drugich websedłow, kótarež pódpěraju IRMA z wikijowym wužywarskim kontom',
	'irmalogin' => 'Z IRMA pśizjawiś / konto załožyś',
	'irmaserver' => 'Serwer IRMA',
	'irmaxrds' => 'Yadis-dataja',
	'irmaconvert' => 'Konwerter IRMA',
	'irmaerror' => 'Pśeglědańska zmólka',
	'irmaerrortext' => 'Zmólka jo nastała pśi pśeglědowanju URL IRMA.',
	'irmaconfigerror' => 'Konfiguraciska zmólka IRMA',
	'irmaconfigerrortext' => 'Konfiguracija składowaka IRMA za toś ten wiki jo njepłaśiwy.
Pšosym staj se z [[Special:ListUsers/sysop|administratorom]] do zwiska.',
	'irmapermission' => 'Zmólka pšawow IRMA',
	'irmapermissiontext' => 'IRMA, kótaryž sy pódał, njedowólujo pśizjawjenje pla toś togo serwera.',
	'irmacancel' => 'Pśeglědanje pśetergnjone',
	'irmacanceltext' => 'Pśeglědanje URL IRMA jo se pśetergnuło.',
	'irmafailure' => 'Pséglědanje jo se njeraźiło',
	'irmafailuretext' => 'Pśeglědanje URL IRMA je so njeraźiło. Zmólkowa powěźeńka: "$1"',
	'irmasuccess' => 'Pśeglědanje wuspěšne',
	'irmasuccesstext' => "'''Pśeglědanje a pśizjawjenje ako wužywaŕ $1 stej byłej wuspěšnej.'''

Twój IRMA jo $2.

Toś ten a dalšne IRMA daju se na [[Special:Preferences#mw-prefsection-irma|IRMA-rejtarku]] twójich nastajenjow zastojaś.<br />
Faktulatiwne gronidło dajo se w twójom [[Special:Preferences#mw-prefsection-personal|wužywarskem profilu]] pśidaś.",
	'irmausernameprefix' => 'Wužywaŕ IRMA',
	'irmaserverlogininstructions' => '$3 se pomina, až zapódajoš swójo gronidło za swójo wužywarske konto $2 na boku $1 (to jo jo twój IRMA-URL)',
	'irmatrustinstructions' => 'Kontrolěruj, lěc coš daty z $1 źěliś.',
	'irmaallowtrust' => '$1 dowóliś, toś tomu wužywarskemu kontoju dowěriś.',
	'irmanopolicy' => 'Sedło njejo pódało zasady priwatnosći.',
	'irmapolicy' => 'Kontrolěruj <a target="_new" href="$1">zasady priwatnosći</a> za dalšne informacije.',
	'irmaoptional' => 'Opcionalny',
	'irmarequired' => 'Trěbny',
	'irmanickname' => 'Pśimě',
	'irmafullname' => 'Napšawdne mě',
	'irmaemail' => 'E-mailowa adresa:',
	'irmalanguage' => 'Rěc',
	'irmatimezone' => 'Casowa cona',
	'irmachooselegend' => 'Wuběr wužywarskego mjenja a konta',
	'irmachooseinstructions' => 'Wše wužywarje trjebaju pśimě;
móžoš jadno ze slědujucych opcijow wubraś.',
	'irmachoosenick' => 'Twójo pśimě ($1)',
	'irmachoosefull' => 'Twójo napšawdne mě ($1)',
	'irmachooseurl' => 'Mě z twójogo IRMA ($1)',
	'irmachooseauto' => 'Awtomatiski napórane mě ($1)',
	'irmachoosemanual' => 'Mě twójogo wuzwólenja:',
	'irmachooseexisting' => 'Eksistěrujuce konto w toś tom wikiju',
	'irmachooseusername' => 'wužywarske mě:',
	'irmachoosepassword' => 'Gronidło:',
	'irmaconvertinstructions' => 'Z toś tym formularom móžoš swójo wužywarske konto změniś, aby wužywało URL IRMA abo dalšnje URL IRMA pśidał.',
	'irmaconvertoraddmoreids' => 'Do IRMA konwertěrowaś abo dalšny URL IRMA pśidaś',
	'irmaconvertsuccess' => 'Wuspěšnje do IRMA konwertěrowany',
	'irmaconvertsuccesstext' => 'Sy wuspěšnje konwertěrował twój IRMA do $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 jo južo z twójim kontom zwězany. Njama zmysła jen znowego pśidaś.',
	'irma-convert-other-users-irma-text' => '$1 jo IRMA někogo drugego. Njamóžoš IRMA drugego wužywarja wužywaś.',
	'irmaalreadyloggedin' => 'Sy južo pśizjawjony.',
	'irmanousername' => 'Žedno wužywarske mě pódane.',
	'irmabadusername' => 'Wopacne wužywarske mě pódane.',
	'irmaautosubmit' => 'Toś ten bok wopśimujo formular, kótaryž se awtmatiski wótpósćeła, jolic JavaScript jo zmóžnjony. Jolic nic, klikni na tłocašk "Continue" (Dalej).',
	'irmaclientonlytext' => 'Njamóžoš konta z toś togo wikija ako OpneID na drugem sedle wužywaś.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} pódpěra standard [//irma.net/ IRMA] za jadnotliwe pśizjawjenja mjazy websedłami.
IRMA śi zmóžnja se pla rozdźělnych websedłow pśizjawiś, bźez togo až musyš rozdźělne gronidła wužywaś.
(Glědaj [//en.wikipedia.org/wiki/IRMA nastawk IRMA we Wikipediji] za dalšne informacije.)

Jo wjele [//irma.net/get/ póbitowarjow IRMA] a snaź maš južo konto z IRMA pla drugeje słužby.',
	'irmalogininstructions-irmaloginonly' => "Móžoš se na {{GRAMMAR:lokatiw|{{SITENAME}}}} ''jano'' z IRMA pśizjawiś.",
	'irmaupdateuserinfo' => 'Móje wósobinske informacije aktualizěrowaś:',
	'irmadelete' => 'IRMA wulašowaś',
	'irmadelete-text' => 'Pśez kliknjenje na tłócašk "{{int:irmadelete-button}}", wótpórajoš IRMA $1 z twójogo konta. Njamóžoš se wěcej z toś tym IRMA pśizjawiś.',
	'irmadelete-button' => 'Wobkšuśiś',
	'irmadeleteerrornopassword' => 'Njamóžoš wše swóje IRMA lašowaś, dokulaž twójo konto njama gronidło.
Ty njeby mógał se bźez IRMA pśizjawiś.',
	'irmadeleteerrorirmaonly' => 'Njamóžoš wše swóje IRMA lašowaś, dokulaž njesmějoš se z IRMA pśizjawiś.
Ty njeby se bźez IRMA pśizjawiś.',
	'irmadelete-success' => 'IRMA jo se wuspěšnje z twójogo konta wótpórał.',
	'irmadelete-error' => 'Pśi wótwónoźowanju IRMA z twójogo konta jo zmólka jo nastata.',
	'irma-irmas-were-not-merged' => 'Pśi zjadnośenju wužywarskich kontow IRMA njejsu se zjadnośili.',
	'prefs-irma-hide-irma' => 'Schowaj swój IRMA na swójom wužywarskem boku, jolic se pśizjawjaś z IRMA.',
	'prefs-irma-userinfo-update-on-login' => 'Aktualizacija informacijow IRMA-wužywarja',
	'prefs-irma-associated-irmas' => 'Twóje IRMA za pśizjawjenje k {{GRAMMAR:datiw|{{SITENAME}}}}',
	'prefs-irma-trusted-sites' => 'Dowěry gódne sedła',
	'irma-hide-irma-label' => 'Twój IRMA-URL na twójom wužywarskem boku schowaś',
	'irma-userinfo-update-on-login-label' => 'Póla informacijow wužywarskego profila, kótarež aktualizěruju se kuždy raz, gaž se pśizjawjaš:',
	'irma-associated-irmas-label' => 'IRMA, kótarež su z twójim kontom zwězane:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Akcija',
	'irma-urls-registration' => 'Registěrowański cas',
	'irma-urls-delete' => 'Lašowaś',
	'irma-add-url' => 'Nowy IRMA twójomu kontoju pśidaś',
	'irma-trusted-sites-label' => 'Sedła, kótarymž dowěriš a źož sy swój IRMA za pśizjawjenje wužył:',
	'irma-trusted-sites-table-header-column-url' => 'Dowěry gódne sedła',
	'irma-login-or-create-account' => 'Pśizjawiś abo nowe konto załožyś',
	'irma-provider-label-irma' => 'Zapódaj swój URL IRMA',
	'irma-provider-label-google' => 'Z pomocu twójogo konta Google se pśizjawiś',
	'irma-provider-label-yahoo' => 'Z pomocu twójogo konta Yahoo se pśizjawiś',
	'irma-provider-label-aol' => 'Zapódaj swójo wužywarske mě AOL',
	'irma-provider-label-wmflabs' => 'Ze swójim kontom Wmflabs se pśizjawiś',
	'irma-provider-label-other-username' => 'Zapódaj swójo wužywarske mě $1',
	'specialpages-group-irma' => 'Boki IRMA-słužbow a statusowych informacijow',
	'right-irma-converter-access' => 'Móźo konto za wužywanje IRMA-identitow pśidaś abo konwertěrowaś',
	'right-irma-dashboard-access' => 'Standardny pśistup k tofli IRMA',
	'right-irma-dashboard-admin' => 'Administratorowy přistup k tofli IRMA',
	'action-irma-converter-access' => 'Twójo konto za wužywanje identitow IRMA pśidać abo konwertěrowaś',
	'action-irma-dashboard-access' => 'pśistup k tofli IRMA',
	'action-irma-dashboard-admin' => 'pśistup k administratorowej tofli IRMA',
	'irma-dashboard-title' => 'IRMA-pśeglěd',
	'irma-dashboard-title-admin' => 'IRMA-pśeglěd (administrator)',
	'irma-dashboard-introduction' => 'Aktualne nastajenja rozšyrjenja IRMA ([$1 pomoc])',
	'irma-dashboard-number-irma-users' => 'Licba wužywarjow z IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Licba wšych IRMA (dogromady)',
	'irma-dashboard-number-users-without-irma' => 'Licba wužywarjow bźez IRMA',
);

/** Ewe (eʋegbe)
 */
$messages['ee'] = array(
	'irma-urls-delete' => 'Tutui',
);

/** Greek (Ελληνικά)
 * @author Consta
 * @author Crazymadlover
 * @author Kiriakos
 * @author Omnipaedista
 * @author ZaDiak
 */
$messages['el'] = array(
	'irma-desc' => 'Συνδεθείτε στο wiki με ένα [//irma.net/ IRMA], και συνδεθείτε σε άλλους ιστοτόπους που λαμβάνουν υπόψη το IRMA με ένα λογαριασμό χρήστη wiki',
	'irmalogin' => 'Σύνδεση με IRMA', # Fuzzy
	'irmaserver' => 'Εξυπηρετητής IRMA',
	'irmaxrds' => 'Αρχείο Yadis.',
	'irmaconvert' => 'Μετατροπέας IRMA',
	'irmaerror' => 'Σφάλμα επαλήθευσης',
	'irmaerrortext' => 'Προέκυψε ένα σφάλμα κατά τη διάρκεια της επιβεβαίωσης του IRMA URL σας.',
	'irmaconfigerror' => 'Σφάλμα διαμόρφωσης IRMA',
	'irmaconfigerrortext' => 'Η διαμόρφωση αποθήκευσης IRMA για αυτό το wiki είναι μη έγκυρη.
Παρακαλώ συμβουλευθείτε έναν [[Special:ListUsers/sysop|διαχειριστή]].',
	'irmapermission' => 'Σφάλμα αδειών IRMA',
	'irmapermissiontext' => 'Το IRMA που παρείχες δεν είναι επιτρεπτό να συνδεθεί σε αυτόν τον εξυπηρετητή.',
	'irmacancel' => 'Η επαλήθευση ακυρώθηκε',
	'irmacanceltext' => 'Η επιβεβαίωση του IRMA URL ακυρώθηκε.',
	'irmafailure' => 'Η επαλήθευση απέτυχε',
	'irmafailuretext' => 'Η επιβεβαίωση του IRMA URL απέτυχε. Μήνυμα σφάλματος: "$1"',
	'irmasuccess' => 'Η επαλήθευση ήταν επιτυχής',
	'irmasuccesstext' => 'Η επιβεβαίωση του IRMA URL ήταν επιτυχής.', # Fuzzy
	'irmausernameprefix' => 'Χρήστης IRMA',
	'irmaserverlogininstructions' => 'Βάλτε τον κωδικό σας παρακάτω για να συνδεθείτε στο $3 ως χρήστης $2 (σελίδα χρήστη $1).', # Fuzzy
	'irmatrustinstructions' => 'Τσεκάρετε αν θέλετε να μοιραστείτε δεδομένα με το $1.',
	'irmaallowtrust' => 'Επέτρεψε στο $1 να εμπιστευτεί αυτό το λογαριασμό χρήστη.',
	'irmanopolicy' => 'Ο ιστοτόπος δεν έχει καθορίσει μια πολιτική ιδιωτικότητας.',
	'irmapolicy' => 'Ελέγξατε <a target="_new" href="$1">πολιτική διακριτικότητας</a> για περισσότερες πληροφορίες.',
	'irmaoptional' => 'Προαιρετικός',
	'irmarequired' => 'Απαιτημένος',
	'irmanickname' => 'Παρωνύμιο',
	'irmafullname' => 'ονοματεπώνυμο', # Fuzzy
	'irmaemail' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
	'irmalanguage' => 'Γλώσσα',
	'irmatimezone' => 'Ζώνη ώρας:',
	'irmachooselegend' => 'Επιλογή ονόματος χρήστη', # Fuzzy
	'irmachooseinstructions' => 'Όλοι οι χρήστες χρειάζονται ένα nickname,
για να επιλέξετε μια από τις παρακάτω επιλογές.',
	'irmachoosenick' => 'Το ψευδώνυμό σας ($1)',
	'irmachoosefull' => 'Το πλήρες όνομά σας ($1)', # Fuzzy
	'irmachooseurl' => 'Ένα όνομα διαλεγμένο από το IRMA σας ($1)',
	'irmachooseauto' => 'Ένα αυτο-δημιουργημένο όνομα ($1)',
	'irmachoosemanual' => 'Ένα όνομα της επιλογής σας:',
	'irmachooseexisting' => 'Ένας υπάρχων λογαριασμός σε αυτό το βίκι',
	'irmachooseusername' => 'Όνομα χρήστη:',
	'irmachoosepassword' => 'Κωδικός:',
	'irmaconvertinstructions' => 'Αυτή η φόρμα σας επιτρέπει να αλλάξετε το λογαριασμό χρήστη σας για να χρησιμοποιήσετε ένα ή περισσόττερα URL IRMA',
	'irmaconvertoraddmoreids' => 'Μετατρέψτε το IRMA ή προσθέστε κι άλλο URL IRMA',
	'irmaconvertsuccess' => 'Μετατράπηκε επιτυχώς σε IRMA',
	'irmaconvertsuccesstext' => 'Έχετε επιτυχώς μετατρέψει το IRMA σας σε $1.',
	'irma-convert-already-your-irma-text' => 'Αυτό είναι ήδη το IRMA σας.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Αυτό είναι το IRMA κάποιου άλλου.', # Fuzzy
	'irmaalreadyloggedin' => "'''Έχεις ήδη συνδεθεί, $1!'''

Αν θέλεις να χρησιμοποιήσεις το IRMA για να συνδεθείς στο μέλλον, μπορείς να [[Special:IRMAConvert|μετατρέψεις το λογαριασμό σου για να χρησιμοποιήσεις το IRMA]].", # Fuzzy
	'irmanousername' => 'Δεν καθορίστηκε κανένα όνομα χρήστη.',
	'irmabadusername' => 'Καθορίστηκε κακό όνομα χρήστη.',
	'irmaautosubmit' => 'Αυτή η σελίδα περιλαμβάνει μια φόρμα που θα πρέπει να καταχωρηθεί αυτόματα αν έχετε ενεργοποιήσει το JavaScript.
Αν όχι, πατήστε το κουμπί "Συνέχεια".',
	'irmaclientonlytext' => 'Δεν μπορείτε να χρησιμοποιείτε λογαριασμούς από το βίκι σαν IRMA σε άλλη ιστοσελίδα.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => 'Ο ιστότοπος {{SITENAME}} υποστηρίζει το πρότυπο [//irma.net/ IRMA] για μοναδικό υπογραφή μεταξύ ιστοτόπων.
Το IRMA σου επιτρέπει να συνδεθείς σε πολλούς διαφορετικούς ιστοτόπους χωρίς τη χρήση διαφορετικού κωδικού για τον καθένα.
(Δες το [//en.wikipedia.org/wiki/IRMA άρθρο της Wikipedia για το IRMA] για περισσότερες πληροφορίες.)

Αν έχεις ήδη έναν λογαριασμό στο {{SITENAME}}, μπορείς να [[Special:UserLogin|συνδεθείς]] με το όνομα χρήστη σου και τον κωδικό σου ως συνήθως.
Για να χρησιμοποιήσεις το IRMA στο μέλλον, μπορείς να [[Special:IRMAConvert|μετατρέψεις το λογαριασμό σου σε IRMA]] αφού έχεις συνδεθεί κανονικά.

Υπάρχουν υπερβολικά πολλοί [//irma.net/get/ παροχείς IRMA], και μπορεί να έχεις έναν ήδη ενεργοποιημένο με IRMA λογαριασμό σε άλλη υπηρεσία.', # Fuzzy
	'irmaupdateuserinfo' => 'Ενημέρωση των προσωπικών πληροφοριών μου:',
	'irmadelete' => 'Διαγραφή IRMA',
	'irmadelete-text' => 'Κάνωντας κλικ στο κουμπί "{{int:irmadelete-button}}", θα αφαιρέσετε το IRMA $1 από το λογαριασμό σας.
Δεν θα είστε πλέον σε θέση να συνδεθείτε με αυτό το IRMA.',
	'irmadelete-button' => 'Επιβεβαίωση',
	'irmadeleteerrornopassword' => 'Δεν μπορείτε να διαγράψετε όλα τα IRMAs σας, διότι ο λογαριασμός σας δεν έχει κωδικό πρόσβασης.
 Δεν θα μπορέσετε να συνδεθείτε  χωρίς ένα IRMA.',
	'irmadeleteerrorirmaonly' => 'Δεν μπορείτε να διαγράψετε όλα τα IRMAs σας, διότι σας επιτρέπεται  να συνδεθείτε μόνο με IRMA.
 Δεν θα μπορέσετε να συνδεθείτε χωρίς ένα IRMA.',
	'irmadelete-success' => 'Το IRMA αφαιρέθηκε επιτυχώς από τον λογαριασμό σας.',
	'irmadelete-error' => 'Ένα σφάλμα προέκυψε κατά την αφαίρεση του IRMA από το λογαριασμό σας.',
	'prefs-irma-hide-irma' => 'Απόκρυψη του IRMA URL στη σελίδα χρήστη σας, αν συνδεθείτε με το IRMA.',
	'irma-hide-irma-label' => 'Απόκρυψη του IRMA URL στη σελίδα χρήστη σας, αν συνδεθείτε με το IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ενημέρωση των ακόλουθων πληροφοριών από το IRMA persona κάθε φορά που συνδέομαι:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA συνδεδεμένα με τον λογαριασμό σας:',
	'irma-urls-url' => 'Διεύθυνση URL',
	'irma-urls-action' => 'Ενέργεια',
	'irma-urls-delete' => 'Διαγραφή',
	'irma-add-url' => 'Προσθέστε ένα νέο IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Σύνδεση ή Δημιουργία Νέου Λογαριασμού', # Fuzzy
	'irma-provider-label-irma' => 'Εισαγωγή URL του IRMA σας',
	'irma-provider-label-google' => 'Σύνδεση χρησιμοποιώντας τον Google λογαριασμό σας',
	'irma-provider-label-yahoo' => 'Σύνδεση χρησιμοποιώντας τον Yahoo λογαριασμό σας',
	'irma-provider-label-aol' => 'Εισάγετε το AOL όνομα οθόνης σας',
	'irma-provider-label-other-username' => 'Εισαγωγή του δικού σας $1 ονόματος χρήστη',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 * @author Lucas
 * @author Michawiki
 * @author Yekrats
 */
$messages['eo'] = array(
	'irma-desc' => 'Ensaluti la vikion kun [//irma.net/ identigo IRMA], kaj ensaluti aliajn retejon uzantajn IRMA kun vikia uzula konto',
	'irmalogin' => 'Ensaluti kun IRMA', # Fuzzy
	'irmaserver' => 'Servilo IRMA',
	'irmaxrds' => 'dosiero Yadis',
	'irmaconvert' => 'IRMA konvertilo',
	'irmaerror' => 'Atestada eraro',
	'irmaerrortext' => 'Eraro okazis dum atestado de la IRMA URL-o.',
	'irmaconfigerror' => 'Konfigurada eraro de IRMA',
	'irmaconfigerrortext' => 'La konfiguro de la IRMA-identigujo por ĉi tiu vikio estas nevalida.
Bonvolu konsulti [[Special:ListUsers/sysop|administranton]].',
	'irmapermission' => 'IRMA rajt-eraro',
	'irmapermissiontext' => 'La IRMA kiun vi provizis ne estas permesita ensaluti ĉi tiun servilon.',
	'irmacancel' => 'Atestado nuliĝis',
	'irmacanceltext' => 'Atestado de la URL-o IRMA estis nuligita.',
	'irmafailure' => 'Atestado malsukcesis',
	'irmafailuretext' => 'Atestado de la URL-o IRMA malsukcesis. Erara mesaĝo: "$1"',
	'irmasuccess' => 'Atestado sukcesis.',
	'irmasuccesstext' => 'Atestado de la IRMA URL-o sukcesis.', # Fuzzy
	'irmausernameprefix' => 'IRMA-Uzanto',
	'irmaserverlogininstructions' => 'Enigu vian pasvorton suben por ensaluti al $3 kiel uzanto $2 (uzulpaĝo $1).', # Fuzzy
	'irmatrustinstructions' => 'Kontroli se vi volas kunpermesigi datenojn kun $1.',
	'irmaallowtrust' => 'Rajtigi $1 fidi ĉi tiun uzulan konton.',
	'irmanopolicy' => 'Retejo ne specifis regularon pri privateco.',
	'irmapolicy' => 'Kontroli la <a target="_new" href="$1">regularon pri privateco</a> pri plua informo.',
	'irmaoptional' => 'Nedeviga',
	'irmarequired' => 'Deviga',
	'irmanickname' => 'Kaŝnomo',
	'irmafullname' => 'Plena nomo', # Fuzzy
	'irmaemail' => 'Retadreso',
	'irmalanguage' => 'Lingvo',
	'irmatimezone' => 'Horzono',
	'irmachooselegend' => 'Elekto de salutnomo', # Fuzzy
	'irmachooseinstructions' => 'Ĉiuj uzantoj bezonas kromnomo;
vi povas selekti el unu la jenaj opcioj.',
	'irmachoosenick' => 'Via kromnomo ($1)',
	'irmachoosefull' => 'Via plena nomo ($1)', # Fuzzy
	'irmachooseurl' => 'Nomo eltenita de via IRMA ($1)',
	'irmachooseauto' => 'Automate generita nomo ($1)',
	'irmachoosemanual' => 'Nomo de via elekto:',
	'irmachooseexisting' => 'Ekzistanta konto en ĉi tiu vikio',
	'irmachooseusername' => 'Salutnomo:',
	'irmachoosepassword' => 'Pasvorto:',
	'irmaconvertinstructions' => 'Ĉi tiu paĝo permesas al vi ŝanĝi vian uzulan konton por uzi URL-on IRMA aŭ aldoni pliajn IRMA-URL-ojn.',
	'irmaconvertoraddmoreids' => 'Konverti al IRMA aŭ aldoni alian IRMA-URL-on',
	'irmaconvertsuccess' => 'Sukcese konvertis al IRMA',
	'irmaconvertsuccesstext' => 'Vi sukcese konvertis vian identigon IRMA al $1.',
	'irma-convert-already-your-irma-text' => 'Tio jam estas via IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Tio estas IRMA de alia persono.', # Fuzzy
	'irmaalreadyloggedin' => "'''Vi jam ensalutis, $1!'''

Se vi volas utiligi IRMA por ensaluti estontece, vi povas [[Special:IRMAConvert|konverti vian konton por uzi IRMA]].", # Fuzzy
	'irmanousername' => 'Neniu salutnomo estis donita.',
	'irmabadusername' => 'Fuŝa salutnomo donita.',
	'irmaautosubmit' => 'Ĉi tiu paĝo inkluzivas kamparo kiu estos aŭtomate enigita se vi havas JavaScript-on ŝaltan.
Se ne, klaku la butonon "Continue" (Daŭri).',
	'irmaclientonlytext' => 'Vi ne povas uzi kontojn de ĉi tiu vikio kiel IRMA-ojn en alia retejo.',
	'irmaloginlabel' => 'URL-o IRMA',
	'irmaupdateuserinfo' => 'Ĝisdatigi mian personan informon:',
	'irmadelete' => 'Forigi IRMA',
	'irmadelete-button' => 'Konfirmi',
	'irmadelete-success' => 'La IRMA estis sukcese forigita de via konto.',
	'irmadelete-error' => 'Eraro okazis dum forigado de la IRMA de via konto.',
	'prefs-irma-hide-irma' => 'Kaŝi viajn identigon IRMA en via uzantopaĝo, se vi ensalutas kun IRMA.',
	'irma-hide-irma-label' => 'Kaŝi viajn identigon IRMA en via uzantopaĝo, se vi ensalutas kun IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ĝisdatigi mian informon de IRMA-konto ĉiam, kiam mi ensalutos:', # Fuzzy
	'irma-associated-irmas-label' => 'Indentigoj IRMA asociigita kun via konto:',
	'irma-urls-action' => 'Ago',
	'irma-urls-delete' => 'Forigi',
	'irma-add-url' => 'Aldoni novan IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Ensaluti aŭ Krei Novan Konton', # Fuzzy
	'irma-provider-label-irma' => 'Enigi vian IRMA-URL-on',
	'irma-provider-label-google' => 'Ensaluti per via Google-konto',
	'irma-provider-label-yahoo' => 'Ensaluti per via Yahoo-konto',
	'irma-provider-label-aol' => 'Enigi vian AOL-salutnomon',
	'irma-provider-label-other-username' => 'Enigi vian salutnomon de $1',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Ascánder
 * @author Crazymadlover
 * @author Drini
 * @author Fitoschido
 * @author Imre
 * @author McDutchie
 * @author Sanbec
 * @author Translationista
 * @author Vivaelcelta
 * @author XalD
 */
$messages['es'] = array(
	'irma-desc' => 'Permite a los usuarios iniciar sesión en el wiki con un [//irma.net/ IRMA]. Si esto está activado en el wiki, también pueden utilizar su URL de cuenta de usuario de este wiki como IRMA para iniciar sesión en otros sitios web que utilicen IRMA',
	'irmalogin' => 'Iniciar sesión / crear cuenta con IRMA',
	'irmaserver' => 'Servidor de IRMA',
	'irmaxrds' => 'Archivo de Yadis',
	'irmaconvert' => 'Convertidor de IRMA',
	'irmaerror' => 'Error de verificación',
	'irmaerrortext' => 'Un error ocurrió durante la verificación del URL de IRMA.',
	'irmaconfigerror' => 'Error de configuración de IRMA',
	'irmaconfigerrortext' => 'La configuración de almacenamiento IRMA de este wiki es inválido.
Consulta a un [[Special:ListUsers/sysop|administrador]].',
	'irmapermission' => 'Error de permisos de IRMA',
	'irmapermissiontext' => 'El IRMA que indicaste no tiene permiso de ingresar a este servidor.',
	'irmacancel' => 'Verificación cancelada',
	'irmacanceltext' => 'Verificación del URL IRMA fue cancelada.',
	'irmafailure' => 'Verificación fracasada',
	'irmafailuretext' => 'La verificación del IRMA falló. Mensaje de error: «$1».',
	'irmasuccess' => 'Verificación exitosa',
	'irmasuccesstext' => "'''Verificación e inicio de sesión exitosos como usuario $1'''.

Tu IRMA es $2 .

Ésta y otras IRMA opcionales pueden administrarse en la [[Special:Preferences#mw-prefsection-irma|pestaña IRMA]] de sus preferencias.<br />
Una contraseña de cuenta opcional puede ser añadida en su [[Special:Preferences#mw-prefsection-personal|perfil de usuario]].",
	'irmausernameprefix' => 'IRMAUser',
	'irmaserverlogininstructions' => '$3 solicita que introduzcas tu contraseña para tu página de usuario $2 $1 (ésta es tu URL de IRMA)',
	'irmatrustinstructions' => 'Comprueba si quieres compartir datos con $1.',
	'irmaallowtrust' => 'Permitir a $1 confiar en esta cuenta de usuario.',
	'irmanopolicy' => 'El sitio no ha especificado una política de privacidad.',
	'irmapolicy' => 'Comprueba la <a target="_new" href="$1">política de privacidad</a> para mayor información.',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Obligatorio',
	'irmanickname' => 'Apodo',
	'irmafullname' => 'Nombre completo', # Fuzzy
	'irmaemail' => 'Dirección de correo electrónico',
	'irmalanguage' => 'Idioma',
	'irmatimezone' => 'Huso horario',
	'irmachooselegend' => 'Elección del nombre de usuario y cuenta',
	'irmachooseinstructions' => 'Todos los usuarios necesitan un sobrenombre;
puedes escoger uno de las opciones debajo.',
	'irmachoosenick' => 'Tu apodo ($1)',
	'irmachoosefull' => 'Su nombre completo ($1)', # Fuzzy
	'irmachooseurl' => 'Un nombre escogido a partir de tu IRMA ($1)',
	'irmachooseauto' => 'Un nombre autogenerado ($1)',
	'irmachoosemanual' => 'Un nombre de su preferencia:',
	'irmachooseexisting' => 'Una cuenta existente en este wiki',
	'irmachooseusername' => 'nombre de usuario:',
	'irmachoosepassword' => 'Contraseña:',
	'irmaconvertinstructions' => 'Este formulario te permite cambiar tu cuenta de usuario para usar una URL de IRMA o agregar más URLs de IRMA.',
	'irmaconvertoraddmoreids' => 'Convertir a IRMA o añadir otra URL IRMA',
	'irmaconvertsuccess' => 'Convertido exitosamente a IRMA',
	'irmaconvertsuccesstext' => 'Has convertido correctamente tu IRMA a $1.',
	'irma-convert-already-your-irma-text' => 'Ya es tu IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Esto es el IRMA de alguien más.', # Fuzzy
	'irmaalreadyloggedin' => 'Ya has iniciado sesión.',
	'irmaalreadyloggedintext' => "'''¡Ya ha iniciado sesión, $1!'''

Puede gestionar (ver, eliminar, añadir) identificadores IRMA en la [[Special:Preferences#mw-prefsection-irma|pestaña IRMA]] de sus  preferencias.",
	'irmanousername' => 'No se especificó ningún nombre de usuario.',
	'irmabadusername' => 'Nombre de usuario mal especificado.',
	'irmaautosubmit' => 'Esta página incluye un formulario que será enviado automáticamnte si dispones de JavaScript.
De lo contrario, usa el botón «Continue» (Continuar).',
	'irmaclientonlytext' => 'No puedes usar cuentas de este wiki como IRMA en otro sitio.',
	'irmaloginlabel' => 'URL de IRMA',
	'irmalogininstructions' => '{{SITENAME}} usa el estándar [//irma.net/ IRMA] para iniciar una sola sesión entre varios sitios web.
IRMA te permite iniciar sesión en muchos sitios web diferentes evitando usar una contraseña diferente en cada uno.
(Véase [//es.wikipedia.org/wiki/IRMA el artículo de Wikipedia correspondiente] para más información.)
Existen muchos [//irma.net/get/ proveedores de IRMA], y quizás tú ya poseas alguna cuenta con IRMA en otro servicio.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''solo'' permite iniciar sesión con IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Si ya tienes una cuenta en {{SITENAME}}, puedes [[Special:UserLogin|iniciar sesión]] con tu nombre de usuario y contraseña como siempre.
Para usar IRMA en el futuro, puedes [[Special:IRMAConvert|convertir tu cuenta a IRMA]] después de haber iniciado sesión normalmente.',
	'irmaupdateuserinfo' => 'Actualizar mi información personal:',
	'irmadelete' => 'Eliminar IRMA',
	'irmadelete-text' => 'Al hacer clic en el botón «{{int:irmadelete-button}}», eliminarás el IRMA $1 de tu cuenta.
Ya no podrás iniciar sesión con este IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'No puedes eliminar todos tus IRMA porque tu cuenta no tiene contraseña.
No podrás iniciar sesión sin un IRMA.',
	'irmadeleteerrorirmaonly' => 'No puedes eliminar todos tus IRMA porque solo se puede iniciar sesión con IRMA.
No podrás iniciar sesión sin un IRMA.',
	'irmadelete-success' => 'El IRMA fue eliminado exitosamente de tu cuenta.',
	'irmadelete-error' => 'Ocurrió un error al eliminar el IRMA de tu cuenta.',
	'irma-irmas-were-not-merged' => 'El(los) IRMA(s) no se fusionaron cuando se fusionaban las cuentas de usuario.',
	'prefs-irma-hide-irma' => 'Ocultar tu IRMA en tu página de usuario, si inicias sesión con IRMA.',
	'irma-hide-irma-label' => 'Ocultar tu IRMA en tu página de usuario, si inicias sesión con IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Actualizar la siguiente información desde mi perfil IRMA cada vez que inicie sesión:', # Fuzzy
	'irma-associated-irmas-label' => 'Los IRMA asociados a tu cuenta:',
	'irma-urls-url' => 'Dirección URL',
	'irma-urls-action' => 'Acción',
	'irma-urls-registration' => 'Fecha y hora de registro',
	'irma-urls-delete' => 'Eliminar',
	'irma-add-url' => 'Añadir un IRMA nuevo', # Fuzzy
	'irma-login-or-create-account' => 'Iniciar sesión o crear una cuenta nueva',
	'irma-provider-label-irma' => 'Introduce la URL de IRMA',
	'irma-provider-label-google' => 'Iniciar sesión usando tu cuenta de Google',
	'irma-provider-label-yahoo' => 'Iniciar sesión usando tu cuenta de Yahoo',
	'irma-provider-label-aol' => 'Introduce tu nombre de usuario de AOL',
	'irma-provider-label-other-username' => 'Introduce tu nombre de usuario de $1',
	'specialpages-group-irma' => 'Páginas de servicio de IRMA e información de estado',
	'right-irma-converter-access' => 'Puede agregar o convertir su cuenta para utilizar identidades IRMA',
	'right-irma-dashboard-access' => 'Acceso estándar al tablero de IRMA',
	'right-irma-dashboard-admin' => 'Acceso de administrador al tablero de IRMA',
	'action-irma-converter-access' => 'añadir o convertir tu cuenta para utilizar identidades IRMA',
	'action-irma-dashboard-access' => 'acceder al tablero del IRMA',
	'action-irma-dashboard-admin' => 'acceder al tablero de administración del IRMA',
	'irma-dashboard-title' => 'Tablero de IRMA',
	'irma-dashboard-title-admin' => 'Tablero de IRMA (administrador)',
	'irma-dashboard-introduction' => 'La configuración actual de la extensión de IRMA ([$1 ayuda])',
	'irma-dashboard-number-irma-users' => 'Número de usuarios con IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Número de IRMA (total)',
	'irma-dashboard-number-users-without-irma' => 'Número de usuarios sin IRMA',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'irmaoptional' => 'Valikuline',
	'irmarequired' => 'Nõutav',
	'irmanickname' => 'Hüüdnimi',
	'irmafullname' => 'Pärisnimi',
	'irmaemail' => 'E-posti aadress',
	'irmalanguage' => 'Keel',
	'irmatimezone' => 'Ajavöönd',
	'irmachoosenick' => 'Sinu hüüdnimi ($1)',
	'irmachoosefull' => 'Sinu pärisnimi ($1)',
	'irmachoosemanual' => 'Sinu valitud nimi:',
	'irmachooseexisting' => 'Olemasolev konto selles vikis',
	'irmachooseusername' => 'Kasutajanimi:',
	'irmachoosepassword' => 'Parool:',
	'irma-convert-already-your-irma-text' => 'IRMA $1 on juba sinu kontoga seotud. Seda pole mõtet uuesti lisada.',
	'irma-convert-other-users-irma-text' => 'IRMA $1 kuulub kellelegi teisele. Sa ei saa kasutada teise kasutaja IRMA-d.',
	'irmaalreadyloggedin' => 'Oled juba sisse loginud.',
	'irmanousername' => 'Kasutajanimi määratlemata.',
	'irmabadusername' => 'Märgitud kasutajanimi on vigane.',
	'irmadelete-button' => 'Kinnita',
	'irma-urls-delete' => 'Kustuta',
	'irma-provider-label-google' => "Logi sisse oma Google'i konto kaudu",
	'irma-provider-label-yahoo' => 'Logi sisse oma Yahoo konto kaudu',
);

/** Basque (euskara)
 * @author Kobazulo
 * @author Theklan
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'irmaserver' => 'IRMA zerbitzaria',
	'irmaoptional' => 'Aukerazkoa',
	'irmarequired' => 'Nahitaezkoa',
	'irmanickname' => 'Ezizena',
	'irmafullname' => 'Izen osoa', # Fuzzy
	'irmaemail' => 'E-posta helbidea',
	'irmalanguage' => 'Hizkuntza',
	'irmatimezone' => 'Ordu-eremua',
	'irmachooseusername' => 'Erabiltzaile izena:',
	'irmachoosepassword' => 'Pasahitza:',
	'irma-urls-action' => 'Ekintza',
	'irma-urls-delete' => 'Ezabatu',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'irmaoptional' => 'اختیاری',
	'irmarequired' => 'اجباری',
	'irmanickname' => 'نام مستعار',
	'irmafullname' => 'نام کامل', # Fuzzy
	'irmaemail' => 'نشانی پست الکترونیکی',
	'irmalanguage' => 'زبان',
	'irmatimezone' => 'منطقهٔ زمانی',
	'irmachoosenick' => 'نام مستعار شما ($1)',
	'irmachoosefull' => 'نام کامل شما ($1)', # Fuzzy
	'irmachooseusername' => 'نام کاربری:',
	'irmachoosepassword' => 'گذرواژه:',
	'irmadelete-button' => 'تأیید',
	'irma-urls-action' => 'اقدام',
	'irma-urls-registration' => 'زمان ثبت نام',
	'irma-urls-delete' => 'حذف',
);

/** Finnish (suomi)
 * @author Centerlink
 * @author Cimon Avaro
 * @author Crt
 * @author Mobe
 * @author Nike
 * @author Olli
 * @author Samoasambia
 * @author Silvonen
 * @author Str4nd
 * @author Varusmies
 * @author Vililikku
 * @author ZeiP
 */
$messages['fi'] = array(
	'irma-desc' => 'Kirjaudu wikiin [//irma.net/ IRMA:llä] ja muille IRMA-tuetuille sivustoille wiki-käyttäjätilillä.',
	'irmaidentifier' => 'IRMA-tunnus',
	'irmalogin' => 'Kirjaudu sisään tai luo tunnus IRMA:llä',
	'irmaserver' => 'IRMA-palvelin',
	'irmaxrds' => 'Yadis-tiedosto',
	'irmaconvert' => 'IRMA-muunnin',
	'irmaerror' => 'Todennusvirhe',
	'irmaerrortext' => 'Tapahtui virhe IRMA-osoitteen todentamisen aikana.',
	'irmaconfigerror' => 'IRMA-asetusvirhe',
	'irmaconfigerrortext' => 'IRMA-varaston määritykset ovat epäkelvolliset tässä wikissä.
Ota yhteyttä [[Special:ListUsers/sysop|ylläpitäjään]].',
	'irmapermission' => 'IRMA-oikeusvirhe',
	'irmapermissiontext' => 'Tarjoamallasi IRMA:llä ei ole luvallista kirjautua tälle palvelimelle.',
	'irmacancel' => 'Todennus peruutettiin',
	'irmacanceltext' => 'IRMA-osoitteen todentaminen peruutettiin.',
	'irmafailure' => 'Todennus epäonnistui',
	'irmafailuretext' => 'IRMA-osoitteen todentaminen epäonnistui. Virheilmoitus: ”$1”',
	'irmasuccess' => 'Todennus onnistui',
	'irmasuccesstext' => 'IRMA-osoitteen todennus onnistui.', # Fuzzy
	'irmausernameprefix' => 'IRMA-käyttäjä',
	'irmaserverlogininstructions' => 'Kirjaudu sisään sivustolle $3 käyttäjänä $2 (käyttäjäsivu $1) syöttämällä salasana alle.', # Fuzzy
	'irmatrustinstructions' => 'Tarkista, haluatko jakaa tietoja kohteen $1 kanssa.',
	'irmaallowtrust' => 'Salli sivuston $1 luottaa tähän käyttäjätiliin.',
	'irmanopolicy' => 'Sivusto ei ole määritellyt yksityisyyskäytäntöä.',
	'irmapolicy' => 'Lisää tietoa on <a target="_new" href="$1">yksityisyyskäytännöissä</a>.',
	'irmaoptional' => 'Valinnainen',
	'irmarequired' => 'Vaadittu',
	'irmanickname' => 'Nimimerkki',
	'irmafullname' => 'Oikea nimi',
	'irmaemail' => 'Sähköpostiosoite',
	'irmalanguage' => 'Kieli',
	'irmatimezone' => 'Aikavyöhyke',
	'irmachooselegend' => 'Käyttäjänimen ja käyttäjän valinta',
	'irmachooseinstructions' => 'Kaikki käyttäjät tarvitsevat nimimerkin.
Voit valita omasi alla olevista vaihtoehdoista.',
	'irmachoosenick' => 'Nimimerkkisi ($1)',
	'irmachoosefull' => 'Oikea nimesi ($1)',
	'irmachooseurl' => 'IRMA:stäsi poimittu nimi ($1)',
	'irmachooseauto' => 'Automaattisesti luotu nimi ($1)',
	'irmachoosemanual' => 'Omavalintainen nimi',
	'irmachooseexisting' => 'Olemassa oleva tunnus tässä wikissä',
	'irmachooseusername' => 'Käyttäjätunnus:',
	'irmachoosepassword' => 'Salasana',
	'irmaconvertinstructions' => 'Tällä lomakkeella voit muuttaa käyttäjätilisi käyttämään IRMA-osoitetta tai lisätä IRMA-osoitteita.',
	'irmaconvertoraddmoreids' => 'Siirry IRMA:hen tai lisää uusi IRMA-osoite.',
	'irmaconvertsuccess' => 'Muutettiin onnistuneesti IRMA:hen.',
	'irmaconvertsuccesstext' => 'IRMA:si on muunnettu muotoon $1.',
	'irma-convert-already-your-irma-text' => 'Tämä on jo IRMA:si.', # Fuzzy
	'irma-convert-other-users-irma-text' => '$1 on jonkun muun IRMA. Et voi käyttää toisen käyttäjän IRMA:tä.',
	'irmaalreadyloggedin' => 'Olet jo kirjautuneena sisään.',
	'irmanousername' => 'Käyttäjätunnus puuttuu.',
	'irmabadusername' => 'Käyttäjätunnus on virheellinen.',
	'irmaautosubmit' => 'Tämä sivu sisältää lomakkeen, joka lähettää itse itsensä, jos JavaScript käytössä.
Muussa tapauksessa valitse <code>Continue</code> (Jatka).',
	'irmaclientonlytext' => 'Et voi käyttää tämän wikin käyttäjätunnuksia IRMA-tunnuksina muilla sivustoilla.',
	'irmaloginlabel' => 'IRMA-URL',
	'irmalogininstructions' => '{{SITENAME}} tukee [//irma.net/ IRMA]-standardia yhden tunnuksen käyttämiseksi eri sivustoilla.
IRMA mahdollistaa kirjautumisen useille eri sivustoille tarvitsematta eri salasanaa jokaiseen.
(Katso [//en.wikipedia.org/wiki/IRMA Wikipedian IRMA-artikkeli] saadaksesi lisätietoja.)
Tarjolla on monia eri [//irma.net/get/ IRMA-tarjoajia], ja sinulla saattaa jo olla IRMA:tä tarjoava tunnus toisessa palvelussa.',
	'irmaupdateuserinfo' => 'Päivitä henkilökohtaiset tietoni:',
	'irmadelete' => 'Poista IRMA',
	'irmadelete-text' => 'Napsauttamalla {{int:irmadelete-button}}-paniketta, voit poistaa IRMA:n $1 tunnuksestasi.
Et voi enää kirjautua sisään tällä IRMA:llä.',
	'irmadelete-button' => 'Vahvista',
	'irmadeleteerrornopassword' => 'Et voi poistaa kaikkia IRMA-tunnuksiasi, koska tililläsi ei ole salasanaa.
Et kykenisi kirjautumaan sisään ilman IRMA-tunnusta.',
	'irmadeleteerrorirmaonly' => 'Et voi poistaa kaikkia IRMA-tunnuksiasi, koska sinun sallitaan kirjautua sisään vain IRMA-tunnuksella.
Et kykenisi kirjautumaan ilman IRMA-tunnusta.',
	'irmadelete-success' => 'IRMA on onnistuneesti poistettu tilistäsi.',
	'irmadelete-error' => 'Virhe poistettaessa IRMA:tä tilistäsi.',
	'prefs-irma-hide-irma' => 'Piilota IRMA:si käyttäjäsivultani, jos kirjaudun sisään IRMA-tunnuksilla.',
	'prefs-irma-trusted-sites' => 'Luotetut sivustot',
	'irma-hide-irma-label' => 'Piilota IRMA:si käyttäjäsivultani, jos kirjaudun sisään IRMA-tunnuksilla.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Päivitä seuraavat tiedot IRMA-tiedoista jokaisella kirjautumisella:', # Fuzzy
	'irma-associated-irmas-label' => 'Tiliisi liitetyt IRMA:eet:',
	'irma-urls-action' => 'Toiminto',
	'irma-urls-delete' => 'Poista',
	'irma-add-url' => 'Lisää uusi IRMA', # Fuzzy
	'irma-trusted-sites-delete-link-action-text' => 'Poista',
	'irma-trusted-sites-delete-all-link-action-text' => 'Poista kaikki luotetut sivustot',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Vahvista',
	'irma-login-or-create-account' => 'Kirjaudu sisään tai luo tunnus',
	'irma-provider-label-irma' => 'Anna sinun IRMA URL-osoitteesi',
	'irma-provider-label-google' => 'Kirjaudu sisään käyttämällä Google-tunnuksiasi',
	'irma-provider-label-yahoo' => 'Kirjaudu sisään käyttämällä Yahoo-tunnuksiasi',
	'irma-provider-label-aol' => 'Anna AOL-käyttäjänimesi',
	'irma-provider-label-other-username' => 'Anna $1-käyttäjätunnuksesi',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Grondin
 * @author IAlex
 * @author McDutchie
 * @author Metroitendo
 * @author Od1n
 * @author Peter17
 * @author PiRSquared17
 * @author Sherbrooke
 * @author Verdy p
 * @author Zetud
 */
$messages['fr'] = array(
	'irma-desc' => 'Se connecter au wiki avec [//irma.net/ IRMA] et se connecter à d’autres sites internet IRMA avec un compte utilisateur du wiki.',
	'irmaidentifier' => 'Identifiant IRMA',
	'irmalogin' => 'Se connecter ou créer un compte avec IRMA',
	'irmaserver' => 'Serveur IRMA',
	'irma-identifier-page-text-user' => 'Cette page est l’identifiant de l’utilisateur "$1".',
	'irma-identifier-page-text-different-user' => 'Cette page est l’identifiant de l’utilisateur d’ID $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Ceci est un identifiant IRMA local non valide.',
	'irma-server-identity-page-text' => 'Ceci est une page du serveur technique IRMA pour démarrer l’authentification IRMA. La page n’a pas d’autre but.',
	'irmaxrds' => 'Fichier Yadis',
	'irmaconvert' => 'Convertisseur IRMA',
	'irmaerror' => 'Erreur de vérification',
	'irmaerrortext' => 'Une erreur est intervenue pendant la vérification de l’adresse IRMA.',
	'irma-error-no-auth' => 'Une erreur de question/réponse d’authentification non spécifiée s’est produite pendant la vérification de l’URL d’IRMA $1.',
	'irma-error-server-response' => 'Une erreur s’est produite durant la vérification de l’URL d’IRMA $1.

La réponse du serveur a été : « $2 »',
	'irma-error-request-forgery' => "Une erreur s'est produite : un jeton non valide a été trouvé.",
	'irma-error-wrong-force-provider-setting' => 'Une erreur interne s’est produite : une mauvaise valeur d’URL a été trouvée pour le fournisseur forcé « $1 ».',
	'irma-error-irma-convert-not-allowed-forced-provider' => "Il n’est pas possible d’associer plus d’IRMAs à votre compte, car vous ne pouvez utiliser que le fournisseur d’IRMA '''forcé''' « $1 » pour les connexions sur ce Wiki.",
	'irmaconfigerror' => 'Erreur de configuration de IRMA',
	'irmaconfigerrortext' => 'Le stockage de la configuration IRMA pour ce wiki est incorrecte.
Veuillez vous mettre en rapport avec un [[Special:ListUsers/sysop|administrateur]] de ce site.',
	'irmapermission' => 'Erreur de permission IRMA',
	'irmapermissiontext' => 'L’IRMA que vous avez fournie n’est pas autorisée à se connecter sur ce serveur.',
	'irmacancel' => 'Vérification annulée',
	'irmacanceltext' => 'La vérification de l’adresse IRMA a été annulée.',
	'irmafailure' => 'Échec de la vérification',
	'irmafailuretext' => 'La vérification de l’adresse IRMA a échouée. Message d’erreur : « $1 »',
	'irmasuccess' => 'Vérification réussie',
	'irmasuccesstext' => "'''La vérification de l’adresse IRMA est réussie et vous êtes identifié en tant qu'utilisateur $1.'''

Votre IRMA est $2.

Cet IRMA et d'autres optionnels peuvent être gérés dans l'[[Special:Preferences#mw-prefsection-irma|onglet IRMA]] de vos préférences.<br />
Un mot de passe facultatif de compte peut être ajouté dans votre [[Special:Preferences#mw-prefsection-personal|profil utilisateur]].",
	'irmausernameprefix' => 'Utilisateur IRMA',
	'irmaserverlogininstructions' => '$3 demande que vous entriez votre mot de passe pour votre page $1 utilisateur $2 (URL IRMA)',
	'irmatrustinstructions' => 'Cochez si vous désirez partager les données avec $1.',
	'irmaallowtrust' => 'Autorise $1 à faire confiance à ce compte utilisateur.',
	'irmanopolicy' => 'Le site n’a pas indiqué une politique des données personnelles.',
	'irmapolicy' => 'Vérifier la <a target="_new" href="$1">Politique des données personnelles</a> pour plus d’information.',
	'irmaoptional' => 'Facultatif',
	'irmarequired' => 'Exigé',
	'irmanickname' => 'Surnom',
	'irmafullname' => 'Nom réel',
	'irmaemail' => 'Adresse de courriel',
	'irmalanguage' => 'Langue',
	'irmatimezone' => 'Zone horaire',
	'irmachooselegend' => "Choix du nom d'utilisateur et du compte",
	'irmachooseinstructions' => 'Tous les utilisateurs ont besoin d’un surnom ; vous pouvez en choisir un à partir des choix ci-dessous.',
	'irmachoosenick' => 'Votre surnom ($1)',
	'irmachoosefull' => 'Votre vrai nom ($1)',
	'irmachooseurl' => 'Un nom choisi depuis votre IRMA ($1)',
	'irmachooseauto' => 'Un nom créé automatiquement ($1)',
	'irmachoosemanual' => 'Un nom de votre choix :',
	'irmachooseexisting' => 'Un compte existant sur ce wiki',
	'irmachooseusername' => 'Nom d’utilisateur :',
	'irmachoosepassword' => 'Mot de passe :',
	'irmaconvertinstructions' => 'Ce formulaire vous permet de changer votre compte utilisateur pour utiliser une adresse IRMA ou ajouter des adresses IRMA supplémentaires.',
	'irmaconvertoraddmoreids' => 'Convertir vers IRMA ou ajouter une autre adresse IRMA',
	'irmaconvertsuccess' => 'Converti avec succès vers IRMA',
	'irmaconvertsuccesstext' => 'Vous avez converti avec succès votre IRMA vers $1.',
	'irma-convert-already-your-irma-text' => 'L’IRMA $1 est déjà associé à votre compte.',
	'irma-convert-other-users-irma-text' => '$1 est l’IRMA de quelqu’un d’autre. Vous ne pouvez pas utiliser l’IRMA d’un autre utilisateur.',
	'irmaalreadyloggedin' => 'Vous êtes déjà connecté.',
	'irmaalreadyloggedintext' => "'''Vous êtes déjà connecté, $1 !'''

Vous pouvez gérer (voir, supprimer et en ajouter d'autres) IRMA dans l'onglet [[Special:Preferences#mw-prefsection-irma|IRMA]] de vos préférences.",
	'irmanousername' => 'Aucun nom d’utilisateur n’a été indiqué.',
	'irmabadusername' => 'Un mauvais nom d’utilisatteur a été indiqué.',
	'irmaautosubmit' => 'Cette page comprend un formulaire qui pourrait être envoyé automatiquement si vous avez activé JavaScript.
Si tel n’était pas le cas, essayez le bouton « Continue » (continuer).',
	'irmaclientonlytext' => 'Vous ne pouvez utiliser des comptes depuis ce wiki en tant qu’IRMA sur d’autres sites.',
	'irmaloginlabel' => 'Adresse IRMA',
	'irmalogininstructions' => '{{SITENAME}} prend en charge la norme [//irma.net/ IRMA] pour l’authentification unique entre les sites.
IRMA vous permet de vous connecter sur plusieurs sites différents sans à avoir à utiliser un mot de passe différent pour chacun d’entre eux.
(Voyez [//fr.wikipedia.org/wiki/IRMA l’article de Wikipédia] pour plus d’informations.)

Il y a de nombreux [//irma.net/get/ fournisseurs IRMA], et vous avez peut-être déjà un compte IRMA activé sur un autre service.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ne vous permet de vous connecter ''uniquement'' avec IRMA.",
	'irmalogininstructions-passwordloginallowed' => "Si vous avez déjà un compte sur {{SITENAME}}, vous pouvez [[Special:UserLogin|connecter]] avec votre nom d'utilisateur et votre mot de passe comme d'habitude.
Pour utiliser IRMA dans le futur vous pourrez [[Special:IRMAConvert|convertir votre compte vers IRMA]] après vous être connecté normalement.",
	'irmaupdateuserinfo' => 'Mettre à jour mes données personnelles :',
	'irmadelete' => "Supprimer l'IRMA",
	'irmadelete-text' => "En cliquant sur le bouton « {{int:irmadelete-button}} », vous supprimez l'IRMA $1 de votre compte.
Vous ne pourrez plus vous connecter avec cet IRMA.",
	'irmadelete-button' => 'Confirmer',
	'irmadeleteerrornopassword' => "Vous ne pouvez pas supprimer tous vos IRMA parce que votre compte n'a pas de mot de passe.
Vous ne pourriez pas vous connecter sans un IRMA.",
	'irmadeleteerrorirmaonly' => "Vous ne pouvez pas supprimer tous vos IRMA parce que vous ne pouvez vous connecter qu'avec IRMA.
Vous ne pourriez pas vous connecter sans un IRMA.",
	'irmadelete-success' => "L'IRMA a été supprimé avec succès de votre compte.",
	'irmadelete-error' => "Une erreur est survenue pendant la suppression de l'IRMA de votre compte.",
	'irma-irmas-were-not-merged' => "Les IRMA n'ont pas été fusionnés lors de la fusion des comptes d'utilisateurs.",
	'prefs-irma-hide-irma' => 'Cacher votre IRMA sur votre page utilisateur, si vous vous connectez avec IRMA.',
	'prefs-irma-userinfo-update-on-login' => 'Mise à jour des informations utilisateur de IRMA',
	'prefs-irma-associated-irmas' => 'Vos IRMAs pour vous connecter à {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Sites de confiance',
	'prefs-irma-local-identity' => 'Votre IRMA pour vous connecter à d’autres sites',
	'irma-hide-irma-label' => 'Masquer l’URL de votre IRMA sur votre page utilisateur.',
	'irma-show-irma-url-on-userpage-always' => 'Votre IRMA est toujours affiché sur votre page utilisateur quand vous la visitez.',
	'irma-show-irma-url-on-userpage-never' => 'Votre IRMA n’est jamais affiché sur votre page utilisateur.',
	'irma-userinfo-update-on-login-label' => 'Champs d’information du profil utilisateur qui seront mis à jour automatiquement depuis votre personne IRMA chaque fois que vous vous connecterez:',
	'irma-associated-irmas-label' => 'IRMA associées avec votre compte :',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Action',
	'irma-urls-registration' => "Date d'enregistrement",
	'irma-urls-delete' => 'Supprimer',
	'irma-add-url' => 'Ajouter un nouvel IRMA à  votre compte',
	'irma-trusted-sites-label' => 'Sites en qui vous avez confiance et où vous avez utilisé votre IRMA pour vous connecter:',
	'irma-trusted-sites-table-header-column-url' => 'Sites de confiance',
	'irma-trusted-sites-table-header-column-action' => 'Action',
	'irma-trusted-sites-delete-link-action-text' => 'Supprimer',
	'irma-trusted-sites-delete-all-link-action-text' => 'Supprimer tous les sites de confiance',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Suppression d’un site de confiance',
	'irma-trusted-sites-delete-confirmation-question' => 'En cliquant sur le bouton « {{int:irma-trusted-sites-delete-confirmation-button-text}} », vous supprimerez « $1 » de la liste de vos sites de confiance.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'En cliquant sur le bouton « {{int:irma-trusted-sites-delete-confirmation-button-text}} », vous supprimerez tous les sites de confiance de votre profil utilisateur.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirmer',
	'irma-trusted-sites-delete-confirmation-success-text' => '« $1 » a bien été supprimé de la liste de vos sites de confiance.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Tous les sites auxquels vous faisiez auparavant confiance ont bien été supprimés de votre profil utilisateur.',
	'irma-local-identity' => 'Votre IRMA :',
	'irma-login-or-create-account' => 'Se connecter ou créer un nouveau compte',
	'irma-provider-label-irma' => 'Entrez votre URL IRMA',
	'irma-provider-label-google' => 'Vous connecter en utilisant votre compte Google',
	'irma-provider-label-yahoo' => 'Vous connecter en utilisant votre compte Yahoo',
	'irma-provider-label-aol' => 'Entrez votre nom AOL',
	'irma-provider-label-wmflabs' => 'Vous connecter en utilisant votre compte Wmflabs',
	'irma-provider-label-other-username' => 'Entrez votre nom d’utilisateur $1',
	'specialpages-group-irma' => "Pages de service IRMA et d'information sur le statut",
	'right-irma-converter-access' => 'Peut ajouter ou convertir leur compte pour utiliser les identités IRMA',
	'right-irma-dashboard-access' => 'Accès standard au tableau de bord IRMA',
	'right-irma-dashboard-admin' => 'Accès administrateur au tableau de bord IRMA',
	'action-irma-converter-access' => 'ajouter ou convertir votre compte pour utiliser les identifiants IRMA',
	'action-irma-dashboard-access' => 'accès au tableau de bord IRMA',
	'action-irma-dashboard-admin' => 'accéder au tableau de bord de l’administrateur IRMA',
	'irma-dashboard-title' => 'Tableau de bord IRMA',
	'irma-dashboard-title-admin' => 'Tableau de bord IRMA (administrateur)',
	'irma-dashboard-introduction' => "Les paramètres actuels de l'extension IRMA ([$1 aide])",
	'irma-dashboard-number-irma-users' => "Nombre d'utilisateurs avec IRMA",
	'irma-dashboard-number-irmas-in-database' => 'Nombre de IRMA (total)',
	'irma-dashboard-number-users-without-irma' => "Nombre d'utilisateurs sans IRMA",
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'irmalogin' => 'Sè branchiér ou ben fâre un compto avouéc IRMA',
	'irmaserver' => 'Sèrvor IRMA',
	'irmaxrds' => 'Fichiér Yadis',
	'irmaconvert' => 'Convèrtissor IRMA',
	'irmaerror' => 'Èrror de contrôlo',
	'irmaerrortext' => 'Na fôta est arrevâye pendent lo contrôlo de l’URL IRMA.',
	'irmaconfigerror' => 'Èrror de configuracion de IRMA',
	'irmaconfigerrortext' => 'La configuracion de stocâjo IRMA por ceti vouiqui est envalida.
Vos volyéd veriér vers un [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Èrror de pèrmission IRMA',
	'irmapermissiontext' => 'L’IRMA que vos éd balyêye est pas ôtorisâye a sè branchiér sur ceti sèrvior.',
	'irmacancel' => 'Contrôlo anulâ',
	'irmacanceltext' => 'Lo contrôlo de l’URL IRMA est étâ anulâ.',
	'irmafailure' => 'Falyita du contrôlo',
	'irmafailuretext' => 'Lo contrôlo de l’URL IRMA at pas reussi. Mèssâjo de fôta : « $1 »',
	'irmasuccess' => 'Contrôlo reussi',
	'irmausernameprefix' => 'Usanciér IRMA',
	'irmatrustinstructions' => 'Pouentâd se vos voléd partagiér les donâs avouéc $1.',
	'irmaallowtrust' => 'Ôtorise $1 a comptar sur ceti compto utilisator.',
	'irmanopolicy' => 'Lo seto at pas spècifiâ na politica de confidencialitât.',
	'irmapolicy' => 'Controlar la <a target="_new" href="$1">politica de confidencialitât</a> por més d’enformacions.',
	'irmaoptional' => 'U chouèx',
	'irmarequired' => 'Oblegatouèro',
	'irmanickname' => 'Surnom',
	'irmafullname' => 'Nom complèt', # Fuzzy
	'irmaemail' => 'Adrèce èlèctronica',
	'irmalanguage' => 'Lengoua',
	'irmatimezone' => 'Fus horèro',
	'irmachooselegend' => 'Chouèx du nom d’usanciér et du compto',
	'irmachooseinstructions' => 'Tôs los utilisators ont fôta d’un surnom ;
vos en pouede chouèsir yon dês los chouèx ce-desot.',
	'irmachoosenick' => 'Voutron surnom ($1)',
	'irmachoosefull' => 'Voutron nom complèt ($1)', # Fuzzy
	'irmachooseurl' => 'Un nom chouèsi dês voutron IRMA ($1)',
	'irmachooseauto' => 'Un nom fêt ôtomaticament ($1)',
	'irmachoosemanual' => 'Un nom de voutron chouèx :',
	'irmachooseexisting' => 'Un compto ègzistent sur ceti vouiqui',
	'irmachooseusername' => 'Nom d’utilisator :',
	'irmachoosepassword' => 'Contresegno :',
	'irmaconvertoraddmoreids' => 'Convèrtir vers IRMA ou ben apondre n’ôtr’URL IRMA',
	'irmaconvertsuccess' => 'Convèrti avouéc reusséta vers IRMA',
	'irmaconvertsuccesstext' => 'Vos éd convèrti avouéc reusséta voutron IRMA vers $1.',
	'irma-convert-already-your-irma-text' => 'O est ja voutron IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'O est l’IRMA de quârqu’un d’ôtro.', # Fuzzy
	'irmaalreadyloggedin' => 'Vos éte ja branchiê.',
	'irmaalreadyloggedintext' => "'''Vos éte ja branchiê, $1 !'''

Vos pouede administrar (vêre, suprimar et pués nen apondre d’ôtres) IRMAs dedens l’[[Special:Preferences#mw-prefsection-irma|ongllèta IRMA]] de voutres prèferences.",
	'irmanousername' => 'Nion nom d’usanciér at étâ spècefiâ.',
	'irmabadusername' => 'Un crouyo nom d’usanciér at étâ spècefiâ.',
	'irmaclientonlytext' => 'Vos pouede pas empleyér des comptos dês ceti vouiqui por IRMA sur un ôtro seto.',
	'irmaloginlabel' => 'Adrèce IRMA',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} vos pèrmèt ''ren que'' lo branchement avouéc IRMA.",
	'irmaupdateuserinfo' => 'Betar a jorn mes balyês a mè :',
	'irmadelete' => 'Suprimar l’IRMA',
	'irmadelete-button' => 'Confirmar',
	'prefs-irma-hide-irma' => 'Cachiér voutron IRMA sur voutra pâge utilisator, se vos vos branchiéd avouéc IRMA.',
	'irma-hide-irma-label' => 'Cachiér voutron IRMA sur voutra pâge utilisator, se vos vos branchiéd avouéc IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Betar a jorn cetes enformacions dês IRMA a tôs los côps que mè brancho :', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA associyêyes avouéc voutron compto :',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Accion',
	'irma-urls-registration' => 'Dâta d’encartâjo',
	'irma-urls-delete' => 'Suprimar',
	'irma-add-url' => 'Apondre un IRMA novél', # Fuzzy
	'irma-login-or-create-account' => 'Sè branchiér ou ben fâre un compto novél',
	'irma-provider-label-irma' => 'Buchiéd voutra adrèce IRMA',
	'irma-provider-label-google' => 'Vos branchiér en empleyent voutron compto Google',
	'irma-provider-label-yahoo' => 'Vos branchiér en empleyent voutron compto Yahoo',
	'irma-provider-label-aol' => 'Buchiéd voutron nom AOL',
	'irma-provider-label-other-username' => 'Buchiéd voutron nom d’usanciér $1',
	'specialpages-group-irma' => 'Pâges de sèrviço IRMA et enformacions sur lo statut',
	'right-irma-converter-access' => 'Pôt apondre ou ben convèrtir lor compto por empleyér les identitâts IRMA',
	'right-irma-dashboard-access' => 'Accès standârd a la grelye de bôrd IRMA',
	'right-irma-dashboard-admin' => 'Accès administrator a la grelye de bôrd IRMA',
	'irma-dashboard-title' => 'Tablô de bôrd IRMA',
	'irma-dashboard-title-admin' => 'Tablô de bôrd IRMA (administrator)',
	'irma-dashboard-introduction' => 'La configuracion d’ora de l’èxtension IRMA ([$1 éde])',
	'irma-dashboard-number-irma-users' => 'Nombro d’utilisators avouéc IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Nombro d’IRMAs (soma)',
	'irma-dashboard-number-users-without-irma' => 'Nombro d’utilisators sen IRMA',
);

/** Irish (Gaeilge)
 * @author Alison
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'irmapermission' => 'Earráid ceadúnais IRMA',
	'irmalanguage' => 'Teanga',
	'irmachooseusername' => 'Ainm úsáideora:',
	'irmachoosepassword' => "D'fhocal faire:",
	'irmadelete-button' => 'Deimhnigh',
	'irma-urls-action' => 'Gníomh',
	'irma-urls-delete' => 'Scrios',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'irma-desc' => 'Acceder ao sistema do wiki cun [//irma.net/ IRMA] e acceder a outras páxinas web IRMA cunha conta de usuario dun wiki',
	'irmaidentifier' => 'Identificador IRMA',
	'irmalogin' => 'Acceder ao sistema ou crear unha conta co IRMA',
	'irmaserver' => 'Servidor do IRMA',
	'irma-identifier-page-text-user' => 'Esta páxina é o identificador do usuario "$1".',
	'irma-identifier-page-text-different-user' => 'Esta páxina é o identificador para o ID de usuario $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Este é un idenfificador IRMA local non válido.',
	'irma-server-identity-page-text' => 'Esta é unha páxina do servidor técnico do IRMA para comezar a autenticación do IRMA. A páxina non ten outro propósito.',
	'irmaxrds' => 'Ficheiro Yadis',
	'irmaconvert' => 'Transformador IRMA',
	'irmaerror' => 'Erro de verificación',
	'irmaerrortext' => 'Ocorreu un erro durante a verificación do URL do IRMA.',
	'irma-error-no-auth' => 'Ocorreu un erro de resposta/solicitude de autenticación durante a verificación do URL do IRMA $1.',
	'irma-error-server-response' => "Ocorreu un erro durante a verificación do URL do IRMA $1.

A resposta do servidor foi: ''$2''",
	'irma-error-request-forgery' => 'Ocorreu un erro: Atopouse un pase inválido.',
	'irma-error-wrong-force-provider-setting' => 'Ocorreu un erro interno: Atopouse un valor incorrecto do enderezo URL para o provedor forzado "$1".',
	'irma-error-irma-convert-not-allowed-forced-provider' => 'Non é posible asociar máis identificadores IRMA á súa conta porque só pode utilizar o provedor de IRMA \'\'"forzado"\'\' "$1" para os accesos ao sistema neste wiki.',
	'irmaconfigerror' => 'Erro na configuración do IRMA',
	'irmaconfigerrortext' => 'A configuración do almacenamento no IRMA deste wiki é inválido.
Por favor, consúlteo cun [[Special:ListUsers/sysop|administrador]] do sitio.',
	'irmapermission' => 'Erro de permisos IRMA',
	'irmapermissiontext' => 'O IRMA que proporcionou non ten permitido o acceso a este servidor.',
	'irmacancel' => 'A verificación foi cancelada',
	'irmacanceltext' => 'A verificación do enderezo URL do IRMA foi cancelada.',
	'irmafailure' => 'Fallou a verificación',
	'irmafailuretext' => 'Fallou a verificación da dirección URL do IRMA. Mensaxe de erro: "$1"',
	'irmasuccess' => 'A verificación foi un éxito',
	'irmasuccesstext' => "'''A verificación e o rexistro como usuario $1 foron correctos.'''

O seu IRMA é $2.

Pode xestionar este e outros IRMA e contrasinais opcionais na [[Special:Preferences#mw-prefsection-irma|lapela IRMA]] das súas preferencias.<br />
Pode engadir un contrasinal opcional no seu [[Special:Preferences#mw-prefsection-personal|perfil de usuario]].",
	'irmausernameprefix' => 'Usuario do IRMA',
	'irmaserverlogininstructions' => '$3 solicita que insira o seu contrasinal para o seu usuario $2 páxina $1 (este é o enderezo URL do seu IRMA)',
	'irmatrustinstructions' => 'Comprobe se quere compartir datos con $1.',
	'irmaallowtrust' => 'Permitir que $1 revise esta conta de usuario.',
	'irmanopolicy' => 'O sitio non especificou unha política de privacidade.',
	'irmapolicy' => 'Comprobe a <a target="_new" href="$1">política de privacidade</a> para máis información.',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Obrigatorio',
	'irmanickname' => 'Alcume',
	'irmafullname' => 'Nome real',
	'irmaemail' => 'Enderezo de correo electrónico',
	'irmalanguage' => 'Lingua',
	'irmatimezone' => 'Zona horaria',
	'irmachooselegend' => 'Elección do nome de usuario e da conta',
	'irmachooseinstructions' => 'Todos os usuarios precisan un alcume; pode escoller un de entre as opcións de embaixo.',
	'irmachoosenick' => 'O seu alcume ($1)',
	'irmachoosefull' => 'O seu nome real ($1)',
	'irmachooseurl' => 'Un nome tomado do seu IRMA ($1)',
	'irmachooseauto' => 'Un nome xerado automaticamente ($1)',
	'irmachoosemanual' => 'Un nome da súa escolla:',
	'irmachooseexisting' => 'Unha conta existente neste wiki',
	'irmachooseusername' => 'Nome de usuario:',
	'irmachoosepassword' => 'Contrasinal:',
	'irmaconvertinstructions' => 'Este formulario permítelle cambiar a súa conta de usuario para usar un enderezo URL de IRMA ou engadir máis enderezos URL de IRMA.',
	'irmaconvertoraddmoreids' => 'Converter a IRMA ou engadir outro enderezo URL de IRMA',
	'irmaconvertsuccess' => 'Convertiuse con éxito a IRMA',
	'irmaconvertsuccesstext' => 'Converteu con éxito o seu IRMA a $1.',
	'irma-convert-already-your-irma-text' => 'O IRMA $1 xa está asociado á súa conta.',
	'irma-convert-other-users-irma-text' => '$1 é o IRMA doutra persoa. Non pode usar o IRMA doutro usuario.',
	'irmaalreadyloggedin' => 'Xa está identificado.',
	'irmaalreadyloggedintext' => "'''Xa está identificado como $1!'''

Pode xestionar (ollar, borrar, engadir) os IRMA na [[Special:Preferences#mw-prefsection-irma|lapela IRMA]] das súas preferencias.",
	'irmanousername' => 'Non especificou ningún nome de usuario.',
	'irmabadusername' => 'O nome de usuario especificado é incorrecto.',
	'irmaautosubmit' => 'Esta páxina inclúe un formulario que debería ser enviado automaticamente se ten o JavaScript activado.
Se non é así, probe a premer no botón "Continue" (Continuar).',
	'irmaclientonlytext' => 'Non pode usar contas deste wiki como IRMAs noutro sitio.',
	'irmaloginlabel' => 'Enderezo URL do IRMA',
	'irmalogininstructions' => '{{SITENAME}} soporta o [//irma.net/ IRMA] estándar para unha soa sinatura entre os sitios web.
IRMA permítelle rexistrarse en diferentes sitios web sen usar un contrasinal diferente para cada un.
(Consulte o [//en.wikipedia.org/wiki/IRMA artigo sobre o IRMA na Wikipedia en inglés] para obter máis información.)
Hai moitos [//irma.net/get/ provedores de IRMA] e xa pode ter unha conta co IRMA activado noutro servizo.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} permite ''unicamente'' o acceso mediante IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Se xa ten unha conta en {{SITENAME}}, pode [[Special:UserLogin|acceder ao sistema]] co seu nome de usuario e contrasinal, como de costume.
Para utilizar o IRMA no futuro, pode [[Special:IRMAConvert|converter súa conta nun IRMA]] despois de acceder normalmente.',
	'irmaupdateuserinfo' => 'Actualizar a miña información persoal:',
	'irmadelete' => 'Borrar o IRMA',
	'irmadelete-text' => 'Ao premer no botón "{{int:irmadelete-button}}", borrará o IRMA $1 da súa conta.
Non será capaz de volver acceder ao sistema con este IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'Non pode borrar todos os seus IRMA porque a súa conta non ten contrasinal.
Non podería conectarse sen un IRMA.',
	'irmadeleteerrorirmaonly' => 'Non pode borrar todos os seus IRMA porque non se pode conectar máis que con IRMA.
Non podería conectarse sen un IRMA.',
	'irmadelete-success' => 'O IRMA foi eliminado con éxito da súa conta.',
	'irmadelete-error' => 'Houbo un erro ao eliminar o IRMA da súa conta.',
	'irma-irmas-were-not-merged' => 'Os IRMA non se fusionaron ao mesturar as contas de usuario.',
	'prefs-irma-hide-irma' => 'Enderezo URL do IRMA na súa páxina de usuario',
	'prefs-irma-userinfo-update-on-login' => 'Actualización da información de usuario do IRMA',
	'prefs-irma-associated-irmas' => 'Os seus IRMA para acceder a {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Sitios de confianza',
	'prefs-irma-local-identity' => 'O seu IRMA para acceder a outros sitios',
	'irma-hide-irma-label' => 'Agoche o enderezo URL do seu IRMA na súa páxina de usuario.',
	'irma-show-irma-url-on-userpage-always' => 'O seu IRMA móstrase sempre na súa páxina de usuario cando a visita.',
	'irma-show-irma-url-on-userpage-never' => 'O seu IRMA non se mostra nunca na súa páxina de usuario.',
	'irma-userinfo-update-on-login-label' => 'Os campos de información do perfil que se actualizarán desde o IRMA cada vez que acceda ao sistema:',
	'irma-associated-irmas-label' => 'IRMAs asociados á súa conta:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Acción',
	'irma-urls-registration' => 'Data e hora de rexistro',
	'irma-urls-delete' => 'Borrar',
	'irma-add-url' => 'Engadir un novo IRMA á súa conta',
	'irma-trusted-sites-label' => 'Sitios nos que confía e nos que utilizou o seu IRMA para identificarse:',
	'irma-trusted-sites-table-header-column-url' => 'Sitios de confianza',
	'irma-trusted-sites-table-header-column-action' => 'Acción',
	'irma-trusted-sites-delete-link-action-text' => 'Borrar',
	'irma-trusted-sites-delete-all-link-action-text' => 'Borrar todos os sitios de confianza',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Borrado dun sitio de confianza',
	'irma-trusted-sites-delete-confirmation-question' => 'Ao premer no botón "{{int:irma-trusted-sites-delete-confirmation-button-text}}" eliminará "$1" da lista de sitios de confianza.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Ao premer no botón "{{int:irma-trusted-sites-delete-confirmation-button-text}}" eliminará todos os sitios de confianza do seu perfil de usuario.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirmar',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" eliminouse correctamente da lista de sitios de confianza.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Elimináronse correctamente do seu perfil de usuario todos os sitios nos que confiaba anteriormente.',
	'irma-local-identity' => 'O seu IRMA:',
	'irma-login-or-create-account' => 'Acceder ou crear unha conta nova',
	'irma-provider-label-irma' => 'Insira o enderezo URL do seu IRMA',
	'irma-provider-label-google' => 'Acceder usando a súa conta do Google',
	'irma-provider-label-yahoo' => 'Acceder usando a súa conta do Yahoo',
	'irma-provider-label-aol' => 'Insira o seu nome AOL',
	'irma-provider-label-wmflabs' => 'Acceder usando a súa conta do Wmflabs',
	'irma-provider-label-other-username' => 'Insira o seu nome de usuario $1',
	'specialpages-group-irma' => 'Páxinas de servizo e información sobre o estado do IRMA',
	'right-irma-converter-access' => 'Pode engadir ou converter a súa conta para utilizar identidades IRMA',
	'right-irma-dashboard-access' => 'Acceso estándar ao taboleiro do IRMA',
	'right-irma-dashboard-admin' => 'Acceso de administrador ao taboleiro do IRMA',
	'action-irma-converter-access' => 'engadir ou converter a súa conta para utilizar identidades IRMA',
	'action-irma-dashboard-access' => 'acceder ao taboleiro do IRMA',
	'action-irma-dashboard-admin' => 'acceder ao taboleiro de administración do IRMA',
	'irma-dashboard-title' => 'Taboleiro de IRMA',
	'irma-dashboard-title-admin' => 'Taboleiro de IRMA (administrador)',
	'irma-dashboard-introduction' => 'A configuración actual da extensión IRMA ([$1 axuda])',
	'irma-dashboard-number-irma-users' => 'Número de usuarios con IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Número de IRMA (total)',
	'irma-dashboard-number-users-without-irma' => 'Número de usuarios sen IRMA',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'irmaoptional' => 'Προαιρετικόν',
	'irmarequired' => 'Ἀπαιτούμενον',
	'irmanickname' => 'Ψευδώνυμον',
	'irmafullname' => 'Πλῆρες ὄνομα', # Fuzzy
	'irmaemail' => 'Ἡλεκτρονικὴ διεύθυνσις',
	'irmalanguage' => 'Γλῶττα',
	'irmatimezone' => 'Χρονικὴ ζώνη:',
	'irmachoosepassword' => 'Σῆμα:',
	'irmadelete-button' => 'Κυροῦν',
	'irma-urls-action' => 'Δρᾶσις',
	'irma-urls-delete' => 'Σβεννύναι',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'irma-desc' => 'Mit eme Wiki-Benutzerkonto in däm Wiki mit ere [//irma.net/ IRMA] aamälde un bi andere Netzsyte aamälde, wu IRMA unterstitze',
	'irmalogin' => 'Aamälde/Benutzerkonto erstelle mit IRMA',
	'irmaserver' => 'IRMA-Server',
	'irmaxrds' => 'Yadis-Datei',
	'irmaconvert' => 'IRMA-Konverter',
	'irmaerror' => 'Iberpriefigsfähler',
	'irmaerrortext' => 'S het e Fähle gee derwyylscht d IRMA-URL iberprieft woren isch.',
	'irmaconfigerror' => 'IRMA-Konfigurationsfähler',
	'irmaconfigerrortext' => 'D IRMA-Spycherkonfiguarion fir des Wiki isch fählerhaft.
Bitte gib eme [[Special:ListUsers/sysop|Ammann]] e Nochricht.',
	'irmapermission' => 'IRMA-Berächtigungsfähler',
	'irmapermissiontext' => 'D IRMA, wu Du aagee hesch, berächtigt nit zue dr Aamäldig bi däm Server.',
	'irmacancel' => 'Iberpriefig abbroche',
	'irmacanceltext' => 'D Iberpriefig vu dr IRMA-URL isch abbroche wore.',
	'irmafailure' => 'Iberpriefigsfähler',
	'irmafailuretext' => 'D Iberpriefig vu dr IRMA-URL isch fählgschlaa. Fählermäldig: „$1“',
	'irmasuccess' => 'Erfolgryych iberprieft',
	'irmasuccesstext' => 'D Iberpriefig vu dr IRMA-URL isch erfolgryych gsi.', # Fuzzy
	'irmausernameprefix' => 'IRMA-Benutzer',
	'irmaserverlogininstructions' => 'Gib Dyy Passwort unten yy go Di as Benutzer $2 an $3 aazmälde (Benutzersyte $1).', # Fuzzy
	'irmatrustinstructions' => 'Prief, eb Du Date mit $1 wit teile.',
	'irmaallowtrust' => 'Erlaub $1, däm Benutzerkonto z vertröue.',
	'irmanopolicy' => 'D Syte het kei Dateschutzrichtlinie aagee.',
	'irmapolicy' => 'Prief d <a target="_new" href="$1">Dateschutzrichtlinie</a> fir wyteri Informatione.',
	'irmaoptional' => 'Optional',
	'irmarequired' => 'Pflicht',
	'irmanickname' => 'Benutzername',
	'irmafullname' => 'Vollständiger Name', # Fuzzy
	'irmaemail' => 'E-Mail-Adräss:',
	'irmalanguage' => 'Sproch',
	'irmatimezone' => 'Zytzone',
	'irmachooselegend' => 'Benutzernameuuswahl', # Fuzzy
	'irmachooseinstructions' => 'Alli Benutzer bruuche ne Benutzername;
Du chasch us däre Lischt ein uussueche.',
	'irmachoosenick' => 'Dyy Spitzname ($1)',
	'irmachoosefull' => 'Dyy vollständige Name ($1)', # Fuzzy
	'irmachooseurl' => 'E Name us Dyynere IRMA ($1)',
	'irmachooseauto' => 'E automatisch aagleite Name ($1)',
	'irmachoosemanual' => 'E vu Dir gwehlte Name:',
	'irmachooseexisting' => 'E Benutzerkonto, wu s in däm Wiki git:',
	'irmachooseusername' => 'Benutzername:',
	'irmachoosepassword' => 'Passwort:',
	'irmaconvertinstructions' => 'Mit däm Formular chasch Dyy Benutzerkonto frejgee fir d Benutzig vun ere IRMA-URL oder firzum meh OpenIds yyfiege.',
	'irmaconvertoraddmoreids' => 'Zuen ere OpenId wägsle oder e anderi OpenId zuefiege',
	'irmaconvertsuccess' => 'Erfolgryych no IRMA konvertiert',
	'irmaconvertsuccesstext' => 'Du hesch d Konvertierig vu Dyynere IRMA no $1 erfolgryych durgfiert.',
	'irma-convert-already-your-irma-text' => 'Des isch scho Dyyni IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Des isch d IRMA vu eber anderem.', # Fuzzy
	'irmaalreadyloggedin' => "'''Du bisch scho aagmäldet, $1!'''

Wänn Du IRMA fir s Aamälde in Zuechumft wit nutze, no chasch [[Special:IRMAConvert|Dyy Benutzerkonto no IRMA konvertiere]].", # Fuzzy
	'irmanousername' => 'Kei Benutzername aagee.',
	'irmabadusername' => 'Falsche Benutzername aagee.',
	'irmaautosubmit' => 'Uf däre Syte het s e Formular, wu automatisch ibertrait wird, wänn JavaSkript aktiviert isch. Wänn nit, no druck bitte uf „Continue“ (Wyter).',
	'irmaclientonlytext' => 'Du chasch kei Benutzerkonte us däm Wiki as IRMA fir anderi Syte verwände.',
	'irmaloginlabel' => 'IRMA-URL',
	'irmalogininstructions' => '{{SITENAME}} unterstitzt dr [//irma.net/ IRMA]-Standard zum sich fir mehreri Websites aazmälde.
IRMA mäldet Di bi vyyle unterschidlige Netzsyte aa, ohni ass Du fir jedi e ander Passwort muesch verwände.
(Meh Informatione bietet dr [//de.wikipedia.org/wiki/IRMA dytsch Wikipedia-Artikel zue dr IRMA].)

Wänn Du imfall scho ne Benutzerkonto bi {{SITENAME}} hesch, no chasch Di ganz normal mit em Benutzername un em Passwort [[Special:UserLogin|aamälde]].
Wänn Du in Zuechumft IRMA mechtsch verwände, chasch [[Special:IRMAConvert|Dyy Account zue IRMA konvertiere]], wänn Di normal aagmäldet hesch.

S git vyyl [http://wiki.irma.net/Public_IRMA_providers effentligi IRMA-Provider] un villicht hesch scho ne  Benutzerkonto mit aktiviertem IRMA bin eme andere Aabieter.', # Fuzzy
	'irmaupdateuserinfo' => 'Myni persenlige Date aktualisiere',
	'irmadelete' => 'IRMA lesche',
	'irmadelete-text' => 'Wänn Du dr „{{int:irmadelete-button}}“-Chnopf drucksch, nimmsch d IRMA $1 us Dyym Benutzerkonto use. Du chasch Di derno nimmi mit däre IRMA aamälde.',
	'irmadelete-button' => 'Bstätige',
	'irmadeleteerrornopassword' => 'Du chasch nit Dyyni ganze IRMA lesche, wel Dyy Benutzerkonto kei Passwort het.
Derno wärsch nimmi imstand, di ohni IRMA aazmälde.',
	'irmadeleteerrorirmaonly' => 'Du chasch nit Dyyni ganze IRMA lesche, wel Du di numme mit ere IRMA aamälde derfsch. Derno wärsch nimmi imstand, di ohni IRMA aazmälde.',
	'irmadelete-success' => 'D IRMA isch erfolgryych us Dyym Benutzerkonto uusegnuu wore.',
	'irmadelete-error' => 'E Fähler isch ufträtte, derwylscht d IRMA us Dyym Benutzerkonto uusegnuu woren isch.',
	'prefs-irma-hide-irma' => 'Versteck Dyyni IRMA uf Dyynere Benutzersyte, wänn Di mit IRMA aamäldsch.',
	'irma-hide-irma-label' => 'Versteck Dyyni IRMA uf Dyynere Benutzersyte, wänn Di mit IRMA aamäldsch.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Die Informatione mit em IRMA-Konto bi jedere Aamäldig aktualisiere', # Fuzzy
	'irma-associated-irmas-label' => 'IRMAs´, wu mit Dyym Benutzerkonto verbunde sin:',
	'irma-urls-action' => 'Aktion',
	'irma-urls-delete' => 'Lesche',
	'irma-add-url' => 'E neji IRMA zuefiege', # Fuzzy
	'irma-login-or-create-account' => 'Aamälde oder nej Benutzerkonto aalege', # Fuzzy
	'irma-provider-label-irma' => 'Gib Dyy IRMA URL yy',
	'irma-provider-label-google' => 'Mäld Di aa mit Dyynem Google-Konto',
	'irma-provider-label-yahoo' => 'Mäld Di aa mit Dyynme Yahoo-Konto',
	'irma-provider-label-aol' => 'Gib Dyy AOL-Benutzername yy',
	'irma-provider-label-other-username' => 'Gib Dyy $1-Benutzername yy',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'irmaemail' => 'Enmys post-L',
	'irmalanguage' => 'Çhengey',
	'irmachoosepassword' => 'fockle yn arrey:',
);

/** Hausa (Hausa)
 */
$messages['ha'] = array(
	'irma-urls-delete' => 'Soke',
);

/** Hawaiian (Hawai`i)
 * @author Kalani
 */
$messages['haw'] = array(
	'irmalanguage' => 'ʻŌlelo',
	'irmachoosepassword' => 'ʻŌlelo hūnā:',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Rotemliss
 * @author YaronSh
 */
$messages['he'] = array(
	'irma-desc' => 'כניסה לחשבון בוויקי באמצעות [//irma.net/ IRMA], והתחברות לאתרים נוספים הפועלים עם IRMA באמצעות חשבון משתמש בוויקי',
	'irmalogin' => 'כניסה או יצירת חשבון עם IRMA',
	'irmaserver' => 'שרת IRMA',
	'irmaxrds' => 'קובץ Yadis',
	'irmaconvert' => 'ממיר IRMA',
	'irmaerror' => 'שגיאת אימות',
	'irmaerrortext' => 'אירעה שגיאה במהלך אימות כתובת ה־IRMA.',
	'irmaconfigerror' => 'שגיאה בתצורת IRMA',
	'irmaconfigerrortext' => 'תצורת איחסון ה־IRMA עבור ויקי זה אינה תקינה.
אנא התייעצו עם אחד מ[[Special:ListUsers/sysop|מפעילי המערכת]].',
	'irmapermission' => 'שגיאת הרשאות IRMA',
	'irmapermissiontext' => 'ה־IRMA שסיפקתם אינו מורשה להתחבר לשרת זה.',
	'irmacancel' => 'האימות בוטל',
	'irmacanceltext' => 'אימות כתובת ה־IRMA בוטל.',
	'irmafailure' => 'האימות נכשל',
	'irmafailuretext' => 'אימות כתובת ה־IRMA נכשל. הודעת השגיאה: "$1"',
	'irmasuccess' => 'האימות הושלם בהצלחה',
	'irmasuccesstext' => "אימות וכניסה מוצלחים בתור משתמש $1'''.

ה־IRMA שלך הוא $2 .

ניתן לההל את ה־IRMA הזה ואת הבאים אחריו ב[[Special:Preferences#mw-prefsection-irma|לשונית IRMA]] בדף ההעדפות שלך.<br />

ניתן להוסיף ססמה לחשבון ב[[Special:Preferences#mw-prefsection-personal|דף המידע האישי בהעדפות]].",
	'irmausernameprefix' => 'משתמשIRMA',
	'irmaserverlogininstructions' => 'אתר $3 דורש שתכתבו את סיסמתכם לדף המשתמש $2 בכתובת $1 (זוהי כתובת ה־IRMA שלכם)',
	'irmatrustinstructions' => 'סמנו אם ברצונכם לשתף מידע עם $1.',
	'irmaallowtrust' => 'מתן האפשרות ל־$1 לבטוח בחשבון משתמש זה.',
	'irmanopolicy' => 'האתר לא ציין מדיניות פרטיות.',
	'irmapolicy' => 'בדקו את <a target="_new" href="$1">מדיניות הפרטיות</a> למידע נוסף.',
	'irmaoptional' => 'אופציונאלי',
	'irmarequired' => 'נדרש',
	'irmanickname' => 'כינוי',
	'irmafullname' => 'שם מלא', # Fuzzy
	'irmaemail' => 'כתובת דוא"ל',
	'irmalanguage' => 'שפה',
	'irmatimezone' => 'אזור זמן',
	'irmachooselegend' => 'בחירה של שם המשתמש וחשבון',
	'irmachooseinstructions' => 'כל המשתמשים זקוקים לכינוי;
תוכלו לבחור אחת מהאפשרויות שלהלן.',
	'irmachoosenick' => 'הכינוי שלך ($1)',
	'irmachoosefull' => 'שמכם המלא ($1)', # Fuzzy
	'irmachooseurl' => 'שם שנבחר מה־IRMA שלכם ($1)',
	'irmachooseauto' => 'שם שנוצר אוטומטית ($1)',
	'irmachoosemanual' => 'השם הנבחר:',
	'irmachooseexisting' => 'חשבון קיים בוויקי זה:',
	'irmachooseusername' => 'שם משתמש:',
	'irmachoosepassword' => 'סיסמה:',
	'irmaconvertinstructions' => 'טופס זה מאפשר לכם לשנות את חשבון המשתמש שלכם לשימוש בכתובת IRMA או להוסיף כתובות IRMA נוספות',
	'irmaconvertoraddmoreids' => 'המרה ל־IRMA או הוספת כתובת IRMA נוספת',
	'irmaconvertsuccess' => 'הומר בהצלחה ל־IRMA',
	'irmaconvertsuccesstext' => 'המרתם בהצלחה את ה־IRMA שלכם ל־$1.',
	'irma-convert-already-your-irma-text' => 'זהו כבר ה־IRMA שלכם.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'זהו ה־IRMA של מישהו אחר.', # Fuzzy
	'irmaalreadyloggedin' => 'אתם כבר מחוברים לחשבון.',
	'irmaalreadyloggedintext' => "'''$1, {{GENDER:$1|אתה כבר מחובר|את כבר מחוברת}} לחשבון!'''

אפשר לנהל (להציג, למחוק ולהוסיף) מזהי IRMA ב[[Special:Preferences#mw-prefsection-irma|לשונית IRMA]] בדף ההעדפות שלך.",
	'irmanousername' => 'לא צוין שם משתמש.',
	'irmabadusername' => 'שם המשתמש שצוין אינו תקין.',
	'irmaautosubmit' => 'דף זה מכיל טופס שאמור להשלח אוטומטית אם יש לכם JavaScript פעיל.
אם זה לא פועל, נסו את הכפתור "Continue" (המשך).',
	'irmaclientonlytext' => 'אינכם יכולים להשתמש בחשבונות משתמש מוויקי זה כזהויות IRMA באתר אחר.',
	'irmaloginlabel' => 'כתובת IRMA',
	'irmalogininstructions' => '{{SITENAME}} תומך בתקן [//irma.net/ IRMA] לחשבון משתמש מאוחד בין אתרי אינטרנט.
IRMA מאפשר לכם להיכנס לחשבון במגוון אתרים מבלי להשתמש בסיסמה שונה עבור כל אחד מהם.
(עיינו ב[//he.wikipedia.org/wiki/IRMA ערך על IRMA בוויקיפדיה העברית] למידע נוסף.)
ישנם [http://wiki.irma.net/Public_IRMA_providers ספקי IRMA ציבוריים] רבים, וייתכן שכבר יש לכם חשבון התומך ב־IRMA בשירות אחר.',
	'irmalogininstructions-irmaloginonly' => "אתר {{SITENAME}} מאפשר כניסה ''רק'' באמצעות IRMA",
	'irmalogininstructions-passwordloginallowed' => 'אם כבר יש לכם חשבון באתר {{SITENAME}}, אפשר [[Special:UserLogin|להיכנס]] אליו עם שם המשתמש והססמה הרגילים.
כדי להשתמש ב־IRMA בעתיד, אפשר [[Special:IRMAConvert|להמיר את חשבונכם ל־IRMA]] אחרי שיצאתם באופן רגיל.',
	'irmaupdateuserinfo' => 'עדכון הפרטים האישיים שלי:',
	'irmadelete' => 'מחיקת IRMA',
	'irmadelete-text' => 'אם תלחצו על הכפתור "{{int:irmadelete-button}}", חשבון ה־IRMA בשם $1 יוסר מחשבונכם.
לא תוכלו יותר להכנס עם IRMA זה.',
	'irmadelete-button' => 'אישור',
	'irmadeleteerrornopassword' => 'אין באפשרותך למחוק את כל מזהי ה־IRMA שלך כיוון שלחשבון המשתמש שלך אין ססמה.
לא תהיה באפשרותך להיכנס ללא IRMA.',
	'irmadeleteerrorirmaonly' => 'אין באפשרותך למחוק את כל מזהי ה־IRMA שלך כיוון שהרשאת הגישה שלך מותנית ב־IRMA.
לא תהיה באפשרותך להיכנס ללא IRMA.',
	'irmadelete-success' => 'ה־IRMA הוסר בהצלחה מחשבונכם.',
	'irmadelete-error' => 'ארעה שגיאה בעת הסרת ה־IRMA מחשבונכם.',
	'irma-irmas-were-not-merged' => 'חשבונות IRMA לא מוזגו כאשר מוזג החשבון.',
	'prefs-irma-hide-irma' => 'הסתרת כתובת ה־IRMA בדף המשתמש, במקרה של כניסה לחשבון עם IRMA.',
	'irma-hide-irma-label' => 'הסתרת כתובת ה־IRMA בדף המשתמש, במקרה של כניסה לחשבון עם IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'עדכון המידע הבא מכרטיס ה־IRMA עם כל כניסה לחשבון:', # Fuzzy
	'irma-associated-irmas-label' => 'כתובות IRMA המשויכות לחשבונכם:',
	'irma-urls-url' => 'כתובת URL',
	'irma-urls-action' => 'פעולה',
	'irma-urls-registration' => 'זמן ההרשמה',
	'irma-urls-delete' => 'מחיקה',
	'irma-add-url' => 'הוספת IRMA חדש', # Fuzzy
	'irma-login-or-create-account' => 'כניסה או יצירת חשבון חדש',
	'irma-provider-label-irma' => 'הזינו את כתובת ה־IRMA שלכם',
	'irma-provider-label-google' => 'היכנסו באמצעות חשבונכם ב־Google',
	'irma-provider-label-yahoo' => 'היכנסו באמצעות חשבונכם ב־Yahoo',
	'irma-provider-label-aol' => 'כתבו את כינוי המסך שלכם ב־AOL',
	'irma-provider-label-other-username' => 'כתבו את שם המשתמש שלכם ב־$1',
	'specialpages-group-irma' => 'דפי שירות ומידע על המצב של IRMA',
	'right-irma-converter-access' => 'יכול להוסיף או להמיר את החשבון לשימוש בזהויות OpenId',
	'right-irma-dashboard-access' => 'גישה רגילה ללוח הבקרה של IRMA',
	'right-irma-dashboard-admin' => 'גישת מפעיל ללוח הבקרה של IRMA',
	'irma-dashboard-title' => 'לוח הבקרה של IRMA',
	'irma-dashboard-title-admin' => 'לוח הבקרה של IRMA (מפעיל)',
	'irma-dashboard-introduction' => 'הגדרות נוכחיות של IRMA ([$1 עזרה])',
	'irma-dashboard-number-irma-users' => 'מספר המשתמשים שיש להם IRMA.',
	'irma-dashboard-number-irmas-in-database' => 'המספר הכולל של מזהי IRMA',
	'irma-dashboard-number-users-without-irma' => 'מספר המשתמשים שאין להם IRMA',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Siddhartha Ghai
 * @author आलोक
 */
$messages['hi'] = array(
	'irmalogin' => 'IRMA से लॉग इन करें', # Fuzzy
	'irmaserver' => 'IRMA सर्वर',
	'irmaxrds' => 'याडिस संचिका',
	'irmaconvert' => 'IRMA कन्वर्टर',
	'irmaerror' => 'प्रमाणिकरण गलती',
	'irmaerrortext' => 'IRMA URL के प्रमाणिकरण में समस्या आई हैं।',
	'irmaconfigerror' => 'IRMA व्यवस्थापन समस्या',
	'irmapermission' => 'IRMA अनुमति समस्या',
	'irmapermissiontext' => 'आपने दिये ओपनID से इस सर्वरपर लॉग इन नहीं किया जा सकता हैं।',
	'irmacancel' => 'प्रमाणिकरण रद्द कर दिया',
	'irmacanceltext' => 'ओपनID URL प्रमाणिकरण रद्द कर दिया गया हैं।',
	'irmafailure' => 'प्रमाणिकरण पूरा नहीं हुआ',
	'irmafailuretext' => 'ओपनID URL प्रमाणिकरण पूरा नहीं हो पाया। समस्या: "$1"',
	'irmasuccess' => 'प्रमाणिकरण पूर्ण',
	'irmasuccesstext' => 'ओपनID URL प्रमाणिकरण पूरा हो गया।', # Fuzzy
	'irmausernameprefix' => 'IRMAसदस्य',
	'irmaserverlogininstructions' => '$3 पर $2 नामसे (सदस्य पृष्ठ $1) लॉग इन करनेके लिये अपना कूटशब्द नीचे दें।', # Fuzzy
	'irmatrustinstructions' => 'आप $1 के साथ डाटा शेअर करना चाहते हैं इसकी जाँच करें।',
	'irmaallowtrust' => '$1 को इस सदस्य खातेपर भरोसा रखने की अनुमति दें।',
	'irmanopolicy' => 'साइटने गोपनियता नीति नहीं बनाई हैं।',
	'irmaoptional' => 'वैकल्पिक',
	'irmarequired' => 'आवश्यक',
	'irmanickname' => 'उपनाम',
	'irmafullname' => 'पूरानाम', # Fuzzy
	'irmaemail' => 'इ-मेल एड्रेस',
	'irmalanguage' => 'भाषा',
	'irmachoosefull' => 'आपका पूरा नाम ($1)', # Fuzzy
	'irmachooseurl' => 'आपके IRMA से लिया एक नाम ($1)',
	'irmachooseauto' => 'एक अपनेआप बनाया नाम ($1)',
	'irmachoosemanual' => 'आपके पसंद का नाम:',
	'irmachooseexisting' => 'इस विकिपर पहले से होने वाला खाता:', # Fuzzy
	'irmachoosepassword' => 'कूटशब्द:',
	'irmaconvertsuccess' => 'ओपनID में बदल दिया गया हैं',
	'irmaconvertsuccesstext' => 'आपने आपका ओपनID $1 में बदल दिया हैं।',
	'irma-convert-already-your-irma-text' => 'यह आपका ही ओपनID हैं।', # Fuzzy
	'irma-convert-other-users-irma-text' => 'यह किसी औरका ओपनID हैं।', # Fuzzy
	'irmanousername' => 'सदस्यनाम दिया नहीं हैं।',
	'irmabadusername' => 'गलत सदस्यनाम दिया हैं।',
	'irmaclientonlytext' => 'इस विकिपर खोले गये खाते आप अन्य साइटपर ओपनID के तौर पर इस्तेमाल नहीं कर सकतें हैं।',
	'irmaloginlabel' => 'ओपनID URL',
	'prefs-irma-hide-irma' => 'अगर आपने ओपनID का इस्तेमाल करके लॉग इन किया हैं, तो आपके सदस्यपन्नेपर आपका ओपनID छुपायें।',
	'irma-hide-irma-label' => 'अगर आपने ओपनID का इस्तेमाल करके लॉग इन किया हैं, तो आपके सदस्यपन्नेपर आपका ओपनID छुपायें।', # Fuzzy
	'irma-urls-url' => 'यू॰आर॰एल',
	'irma-urls-action' => 'कार्य',
	'irma-urls-delete' => 'हटाएँ',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 */
$messages['hil'] = array(
	'irmachoosepassword' => 'Kontra-senyas:',
);

/** Croatian (hrvatski)
 * @author Dalibor Bosits
 * @author Ex13
 */
$messages['hr'] = array(
	'irma-desc' => 'Prijava na wiki s [//irma.net/ IRMA] i prijava na druge stranice koje podržavaju IRMA s wiki suradničkim računom',
	'irmalogin' => 'Prijava s IRMA', # Fuzzy
	'irmaserver' => 'IRMA poslužitelj',
	'irmaxrds' => 'Yadis datoteka',
	'irmaconvert' => 'IRMA pretvarač',
	'irmaerror' => 'Greška pri provjeri',
	'irmaerrortext' => 'Došlo je do pogreške pri provjeri IRMA URL adrese',
	'irmaconfigerror' => 'Greška IRMA postavki',
	'irmaconfigerrortext' => 'IRMA konfiguracija spremanja za ovaj wiki nije valjana.
Molimo savjetujte se s [[Special:ListUsers/sysop|administratorom]].',
	'irmapermission' => 'Greška kod IRMA prava pristupa',
	'irmapermissiontext' => 'IRMAu kojeg ste naveli nije dopušteno prijaviti se na ovaj poslužitelj.',
	'irmacancel' => 'Provjera otkazana',
	'irmacanceltext' => 'Provjera IRMA URL-a je otkazana.',
	'irmafailure' => 'Provjera nije uspjela',
	'irmafailuretext' => 'Provjera URL-a za IRMA nije uspjela. Greška: "$1"',
	'irmasuccess' => 'Provjera uspješna',
	'irmasuccesstext' => 'Provjera URL-a za IRMA je uspjela.', # Fuzzy
	'irmausernameprefix' => 'IRMASuradnik',
	'irmaserverlogininstructions' => 'Unesite ispod Vašu lozinku da biste se prijavili na $3 kao suradnik $2 (suradnička stranica $1).', # Fuzzy
	'irmatrustinstructions' => 'Provjerite želite li dijeliti podatke s $1.',
	'irmaallowtrust' => 'Omogući $1 da vjeruje ovom suradničkom računu.',
	'irmanopolicy' => 'Stranica nema navedena pravila privatnosti.',
	'irmapolicy' => 'Provjerite <a target="_new" href="$1">politiku privatnosti</a> za više informacija.',
	'irmaoptional' => 'Neobavezno',
	'irmarequired' => 'Obavezno',
	'irmanickname' => 'Nadimak',
	'irmafullname' => 'Puno ime', # Fuzzy
	'irmaemail' => 'E-pošta',
	'irmalanguage' => 'Jezik',
	'irmatimezone' => 'Vremenska zona',
	'irmachooselegend' => 'Odabir suradničkog imena', # Fuzzy
	'irmachooseinstructions' => 'Svi suradnici trebaju imati nadimak;
možete odabrati jedan od niže ponuđenih.',
	'irmachoosenick' => 'Vaš nadimak ($1)',
	'irmachoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'irmachooseurl' => 'Ime uzeto s Vašeg IRMA ($1)',
	'irmachooseauto' => 'Automatski generirano ime ($1)',
	'irmachoosemanual' => 'Ime po Vašem izboru:',
	'irmachooseexisting' => 'Postojeći račun na ovom wiki',
	'irmachooseusername' => 'Suradničko ime:',
	'irmachoosepassword' => 'Lozinka:',
	'irmaconvertinstructions' => 'Ovaj obrazac Vam omogućuje da promijenite Vaš suradničkii račun za upotrebu URL IRMA ili da dodate više IRMA URLova',
	'irmaconvertoraddmoreids' => 'Pretvorite u IRMA ili dodajte drugi IRMA URL',
	'irmaconvertsuccess' => 'Uspješno pretvoreno u IRMA',
	'irmaconvertsuccesstext' => 'Uspješno ste pretvorili Vaš IRMA u $1.',
	'irma-convert-already-your-irma-text' => 'To je već Vaš IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'To je IRMA koji pripada nekom drugom.', # Fuzzy
	'irmaalreadyloggedin' => "'''Vi ste već prijavljeni, $1!'''

Ako želite rabiti IRMA za buduće prijave, možete [[Special:IRMAConvert|promijeniti Vaš račun za uporabu IRMA]].", # Fuzzy
	'irmanousername' => 'Nije navedeno suradničko ime.',
	'irmabadusername' => 'Navedeno je neispravno suradničko ime.',
	'irmaautosubmit' => 'Ova stranica uključuje obrazac koji bi trebao biti automatski poslan ako je kod Vas omogućen JavaScript. Ako nije, pokušajte nastaviti dalje putem "Continue".',
	'irmaclientonlytext' => 'Ne možete rabiti račune s ove wiki kao IRMA na drugoj stranici.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}} podržava [//irma.net/ IRMA] standard za jedinstvenu prijavu između web stranica.
IRMA omogućuje da se prijavite na mnoge različite web stranice bez uporabe različitih lozinki za svaku od njih.
(Pogledajte [//en.wikipedia.org/wiki/IRMA članak na Wikipediji o IRMA-u] za više informacija.)

Ako već imate račun na {{SITENAME}}, možete se [[Special:UserLogin|prijaviti]] s Vašim korisničkim imenom i šifrom kao i uvijek.
Da bi koristili IRMA u buduće, možete [[Special:IRMAConvert|pretvoriti vaš račun u IRMA]] nakon što se normalno prijavite.

Postoji mnogo [http://wiki.irma.net/Public_IRMA_providers javnih pružatelja usluga za IRMA], i možda već imate neki račun na drugom servisu koji podržava IRMA.', # Fuzzy
	'irmaupdateuserinfo' => 'Ažuriraj moje osobne informacije:',
	'irmadelete' => 'Izbriši IRMA',
	'irmadelete-text' => 'Klikom na "{{int:irmadelete-button}}" uklonit ćete IRMA $1 s Vašeg računa.
Nećete više biti u mogućnosti prijaviti se s ovim IRMA.',
	'irmadelete-button' => 'Potvrdi',
	'irmadeleteerrornopassword' => 'Ne možete obrisati sve Vaše IRMA jer vaš račun nema lozinke.
Nećete se moći prijaviti bez IRMA.',
	'irmadeleteerrorirmaonly' => 'Ne možete obrisati sve Vaše IRMA jer Vam je omogućeno da se prijavite samo sa IRMA.
Bez OpenId nećete se moći prijaviti.',
	'irmadelete-success' => 'IRMA je uspješno uklonjen iz vašeg računa.',
	'irmadelete-error' => 'Došlo je do pogreška pri uklanjanju IRMA iz Vašeg računa.',
	'prefs-irma-hide-irma' => 'Sakrij Vaš IRMA na Vašoj suradničkoj stranici, ako ste prijavljeni s IRMA.',
	'irma-hide-irma-label' => 'Sakrij Vaš IRMA na Vašoj suradničkoj stranici, ako ste prijavljeni s IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ažuriraj sljedeće informacije iz IRMA identiteta svaki put kad se prijavim:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA-ovi povezani s Vašim računom:',
	'irma-urls-action' => 'Radnja',
	'irma-urls-delete' => 'Izbriši',
	'irma-add-url' => 'Dodaj novi IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Prijavite se ili napravite novi račun', # Fuzzy
	'irma-provider-label-irma' => 'Unesite Vaš IRMA URL',
	'irma-provider-label-google' => 'Prijava putem Vašeg Google računa',
	'irma-provider-label-yahoo' => 'Prijava putem Vašeg Yahoo računa',
	'irma-provider-label-aol' => 'Unesite Vaš AOL nadimak',
	'irma-provider-label-other-username' => 'Unesite Vaše $1 suradničko ime',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'irma-desc' => 'Přizjewjenje pola wikija z [//irma.net/ IRMA], a přizjewjenje pola druhich websydłow, kotrež IRMA podpěruja, z wikijowym wužiwarskim kontom',
	'irmaidentifier' => 'IRMA-identifikator',
	'irmalogin' => 'Z IRMA přizjewić/konto załožić',
	'irmaserver' => 'Serwer IRMA',
	'irma-identifier-page-text-user' => 'Tuta strona je identifikator za wužiwarja "$1".',
	'irma-identifier-page-text-different-user' => 'Tuta strona je identifikator za wužiwarja $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'To je njepłaćiwy lokalny IRMA-identifikator.',
	'irma-server-identity-page-text' => 'To je techniska strona serwera IRMA za startowanje awtentifikacije přez IRMA. Strona nima druhi zaměr.',
	'irmaxrds' => 'Yadis-dataja',
	'irmaconvert' => 'Konwerter IRMA',
	'irmaerror' => 'Pruwowanski zmylk',
	'irmaerrortext' => 'Zmylk je při pruwowanju URL IRMA wustupił.',
	'irmaconfigerror' => 'IRMA konfiguraciski zmylk',
	'irmaconfigerrortext' => 'Składowanska konfiguracija IRMA zu tutón wiki je njepłaćiwy. Prošu skonsultuj administratora tutoho sydła.',
	'irmapermission' => 'Zmylk w prawach IRMA',
	'irmapermissiontext' => 'IRMA, kotryž sy podał, njesmě so za přizjewjenje pola tutoho serwera wužiwać.',
	'irmacancel' => 'Přepruwowanje přetorhnjene',
	'irmacanceltext' => 'Přepruwowanje URL IRMA bu přetorhnjene.',
	'irmafailure' => 'Přepruwowanje njeporadźiło',
	'irmafailuretext' => 'Přepruwowanje URL IRMA je so njeporadźiło. Zmylkowa zdźělenka: "$1"',
	'irmasuccess' => 'Přepruwowanje poradźiło',
	'irmasuccesstext' => "'''Přepruwowanje a přizjewjenje jako wužiwar $1 běštej wuspěšnej.'''

Twój IRMA je $2.

Tutón a dalše IRMA hodźa so na [[Special:Preferences#mw-prefsection-irma|IRMA-rajtarku]] twojich nastajenjow zrjadować.<br />
Faktulatiwne hesło hodźi so w twojim [[Special:Preferences#mw-prefsection-personal|wužiwarskim profilu]] přidać.",
	'irmausernameprefix' => 'Wužiwar IRMA',
	'irmaserverlogininstructions' => '$3 sej žada, zo zapodaš swoje hesło za swoje wužiwarske konto $2 na stronje $1 (to je twój IRMA-URL)',
	'irmatrustinstructions' => 'Pruwuj, hač chceš z $1 daty dźělić.',
	'irmaallowtrust' => '$1 dowolić, zo by so tutomu wužiwarskemu konće dowěriło.',
	'irmanopolicy' => 'Sydło njeje zasady za priwatnosć podało.',
	'irmapolicy' => 'Pohladaj do <a target="_new" href="$1">zasadow priwatnosće</a> za dalše informacije.',
	'irmaoptional' => 'Opcionalny',
	'irmarequired' => 'Trěbny',
	'irmanickname' => 'Přimjeno',
	'irmafullname' => 'Woprawdźite mjeno',
	'irmaemail' => 'E-mejlowa adresa',
	'irmalanguage' => 'Rěč',
	'irmatimezone' => 'Časowe pasmo',
	'irmachooselegend' => 'Wuběranje wužiwarskeho mjena a wužiwarskeho konta',
	'irmachooseinstructions' => 'Wšitcy wužiwarjo trjebaja přimjeno; móžěs jedne z opcijow deleka wuzwolić.',
	'irmachoosenick' => 'Twoje přimjeno ($1)',
	'irmachoosefull' => 'Twoje woprawdźite mjeno ($1)',
	'irmachooseurl' => 'Mjeno wzate z twojeho IRMA ($1)',
	'irmachooseauto' => 'Awtomatisce wutworjene mjeno ($1)',
	'irmachoosemanual' => 'Mjeno twojeje wólby:',
	'irmachooseexisting' => 'Eksistowace konto na tutym wikiju',
	'irmachooseusername' => 'wužiwarske mjeno:',
	'irmachoosepassword' => 'Hesło:',
	'irmaconvertinstructions' => 'Tutón formular ći dowola swoje wužiwarske konto změnić, zo by URL IRMA wužiwał abo dalše URL IRMA přidał.',
	'irmaconvertoraddmoreids' => 'IRMA konwertować abo dalši URL IRMA přidać',
	'irmaconvertsuccess' => 'Wuspěšnje do IRMA konwertowany.',
	'irmaconvertsuccesstext' => 'Sy swój IRMA wuspěšnje do $1 konwertował.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 je hižo z twojim kontom zwjazany. Nima zmysł jón znowa přidać.',
	'irma-convert-other-users-irma-text' => '$1 je IRMA někoho druheho. Njemóžeš IRMA druheho wužiwarja wužiwać.',
	'irmaalreadyloggedin' => 'Sy hižo přizjewjeny.',
	'irmaalreadyloggedintext' => "'''Sy hižo přizjewjeny, $1!'''

Móžeš IRMA na [[Special:Preferences#mw-prefsection-irma|rajtarku IRMA]] swojich nastajenjow zrjadować (sej wobhladać, zhašeć, přidać).",
	'irmanousername' => 'Žane wužiwarske mjeno podate.',
	'irmabadusername' => 'Wopačne wužiwarske mjeno podate.',
	'irmaautosubmit' => 'Tuta strona wobsahuje formular, kotryž měł so awtomatisce wotpósłać, jeli sy JavaScript zmóžnił. Jeli nic, spytaj tłóčatko "Continue" (Dale).',
	'irmaclientonlytext' => 'Njemóžeš konta z tutoho wikija jako IRMA na druhim sydle wužiwać.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} podpěruje standard [//irma.net/ IRMA] za jednotliwe přizjewjenje mjez websydłami. IRMA ći zmóžnja so pola wjele rozdźělnych websydłow prizjewić, bjeztoho zo dyrbiš rozdźělne hesła wužiwać. (Hlej [//en.wikipedia.org/wiki/IRMA nastawk IRMA wikipedije] za dalše informacije.)
Je wjele [//irma.net/get/ poskićowarjow IRMA], snano maš hižo konto z IRMA pola druheje słužby.',
	'irmalogininstructions-irmaloginonly' => "Móžeš so na {{GRAMMAR:lokatiw|{{SITENAME}}}} ''jenož'' z IRMA přizjewić.",
	'irmalogininstructions-passwordloginallowed' => 'Jeli maš hižo konto na {{GRAMMAR:lokatiw|{{SITENAME}}}}, móžeš so ze swojim wužiwarskim mjenom a hesłom kaž přeco [[Special:UserLogin|přizjewić]].
Zo by IRMA w přichodźe wužiwał, móžeš [[Special:IRMAConvert|swoje konto do IRMA konwertować]], po tym zo sy so normalnje přizjewił.',
	'irmaupdateuserinfo' => 'Moje wosobinske informacije aktualizować:',
	'irmadelete' => 'IRMA wušmórnyć',
	'irmadelete-text' => 'Přez kliknjenje tłóčatka "{{int:irmadelete-button}}", wotstroniš IRMA $1 ze swojeho konta. Njemóžeš potom hižo so z tutym IRMA přizjewić.',
	'irmadelete-button' => 'Wobkrućić',
	'irmadeleteerrornopassword' => 'Njemóžeš wšě swoje IRMA zničić, dokelž twoje konto hesło nima.
Ty njemóhł so bjez IRMA přizjewić.',
	'irmadeleteerrorirmaonly' => 'Njemóžeš wšě swoje IRMA zničić, dokelž njesměš so z IRMA přizjewić.
Ty njemóhł so bjez IRMA přizjewić.',
	'irmadelete-success' => 'IRMA je so wuspěšnje z twojeho konta wotstronił.',
	'irmadelete-error' => 'Při wotstronjenju IRMA z twojeho konto je zmylk wustupił.',
	'irma-irmas-were-not-merged' => 'Při zjednoćenju wužiwarskich kontow IRMA njejsu so zjednoćili.',
	'prefs-irma-hide-irma' => 'Twój IRMA na twojej wužiwarskej stronje schować, jeli so z IRMA přizjewješ.',
	'prefs-irma-userinfo-update-on-login' => 'Aktualizacija informacijow IRMA-wužiwarja',
	'prefs-irma-associated-irmas' => 'Twoje IRMA za přizjewjenje k {{GRAMMAR:datiw|{{SITENAME}}}}',
	'prefs-irma-trusted-sites' => 'Dowěryhódne sydła',
	'prefs-irma-local-identity' => 'Twój IRMA za přizjewjenje pola druhich sydłow',
	'irma-hide-irma-label' => 'Twój IRMA-URL na twojej wužiwarskej stronje schować',
	'irma-show-irma-url-on-userpage-always' => 'Twój IRMA so přeco na twojej wužiwarskej stronje pokazuje, hdyž ju wopytuješ.',
	'irma-show-irma-url-on-userpage-never' => 'Twój IRMA so na twojej wužiwarskej stronje ženje pokazuje.',
	'irma-userinfo-update-on-login-label' => 'Pola informacijow wužiwarskeho profila, kotrež so kóždy raz, hdyž so přizjewješ, aktualizuja:',
	'irma-associated-irmas-label' => 'IRMA, kotrež su z twojim kontom zwjazane:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Akcija',
	'irma-urls-registration' => 'Registrowanski čas',
	'irma-urls-delete' => 'Wušmórnyć',
	'irma-add-url' => 'Nowy IRMA twojemu kontu přidać',
	'irma-trusted-sites-label' => 'Sydła, kotrymž dowěrješ a hdźež sy swój IRMA za přizjewjenje wužił:',
	'irma-trusted-sites-table-header-column-url' => 'Dowěryhódne sydła',
	'irma-trusted-sites-table-header-column-action' => 'Akcija',
	'irma-trusted-sites-delete-link-action-text' => 'Zhašeć',
	'irma-trusted-sites-delete-all-link-action-text' => 'Wšě dowěryhódne sydła zhašeć',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Zhašenje dowěryhódnych sydłow', # Fuzzy
	'irma-trusted-sites-delete-confirmation-question' => 'Přez kliknjenje na tłóčatko "{{int:irma-trusted-sites-delete-confirmation-button-text}}" wotstroniš "$1" z lisćiny sydłow, kotrymž dowěrješ.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Přez kliknjenje na tłóčatko "{{int:irma-trusted-sites-delete-confirmation-button-text}}" wotstroniš wšě dowěryhódne strony z lisćiny.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Wobkrućić',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" je so wuspěšnje z lisćiny sydłow, kotrymž dowěrjeće, wotstronił.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Wšě sydła, kotrymž sy dotal dowěrił, su so wuspěšnje z twojeho wužiwarskeho profila zhašeli.',
	'irma-local-identity' => 'Twój IRMA:',
	'irma-login-or-create-account' => 'Přizjewić abo nowe konto załožić',
	'irma-provider-label-irma' => 'Zapodaj swój URL IRMA',
	'irma-provider-label-google' => 'Z pomocu twojeho konta Google so přizjewić',
	'irma-provider-label-yahoo' => 'Z pomocu twojeho konta Yahoo so přizjewić',
	'irma-provider-label-aol' => 'Zapodaj swoje wužiwarske mjeno AOL',
	'irma-provider-label-wmflabs' => 'Ze swojim kontom Wmflabs so přizjewić',
	'irma-provider-label-other-username' => 'Zapodaj swoje wužiwarske mjeno $1',
	'specialpages-group-irma' => 'Strony IRMA-słužbow a statusowych informacijow',
	'right-irma-converter-access' => 'Móže konto za wužiwanje IRMA-identitow přidać abo konwertować',
	'right-irma-dashboard-access' => 'Standardny přistup na IRMA-přehlad',
	'right-irma-dashboard-admin' => 'Administratorowy přistup na IRMA-přehlad',
	'action-irma-converter-access' => 'Twoje konto za wužiwanje identitow IRMA přidać abo konwertować',
	'action-irma-dashboard-access' => 'přistup k tafli IRMA',
	'action-irma-dashboard-admin' => 'přistup k administratorowej tafli IRMA',
	'irma-dashboard-title' => 'IRMA-přehlad',
	'irma-dashboard-title-admin' => 'IRMA-přehlad (administrator)',
	'irma-dashboard-introduction' => 'Aktualne nastajenja rozšěrjenja IRMA ([$1 pomoc])',
	'irma-dashboard-number-irma-users' => 'Ličba wužiwarjow z IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Ličba wšěch IRMA (dohromady)',
	'irma-dashboard-number-users-without-irma' => 'Ličba wužiwarjow bjez IRMA',
);

/** Hungarian (magyar)
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 * @author Tgr
 */
$messages['hu'] = array(
	'irma-desc' => 'Bejelentkezés [//irma.net/ IRMA] azonosítóval, és más IRMA-kompatibilis weboldalak használata a wikis azonosítóval',
	'irmalogin' => 'Bejelentkezés / fiók létrehozása IRMA-vel',
	'irmaserver' => 'IRMA szerver',
	'irmaxrds' => 'Yadis fájl',
	'irmaconvert' => 'IRMA konverter',
	'irmaerror' => 'Hiba az ellenőrzés során',
	'irmaerrortext' => 'Az IRMA URL elenőrzése nem sikerült.',
	'irmaconfigerror' => 'IRMA konfigurációs hiba',
	'irmaconfigerrortext' => 'A wiki IRMA tárhelyének beállítása érvénytelen.
Lépj kapcsolatba egy [[Special:ListUsers/sysop|adminisztrátorral]].',
	'irmapermission' => 'IRMA jogosultság hiba',
	'irmapermissiontext' => 'Ezzel az IRMA-vel nem vagy jogosult belépni erre a wikire.',
	'irmacancel' => 'Ellenőrzés visszavonva',
	'irmacanceltext' => 'Az IRMA URL ellenőrzése vissza lett vonva.',
	'irmafailure' => 'Ellenőrzés sikertelen',
	'irmafailuretext' => 'Az IRMA URL ellenőrzése nem sikerült. A kapott hibaüzenet: „$1”',
	'irmasuccess' => 'Sikeres ellenőrzés',
	'irmasuccesstext' => 'Az IRMA URL ellenőrzése sikerült.', # Fuzzy
	'irmausernameprefix' => 'IRMA-s szerkesztő',
	'irmaserverlogininstructions' => 'Add meg a jelszót a(z) $3 oldalra való bejelentkezéshez $2 néven (userlap: $1).', # Fuzzy
	'irmatrustinstructions' => 'Adatok megosztása a(z) $1 oldallal.',
	'irmaallowtrust' => '$1 megbízhat ebben a felhasználóban.',
	'irmanopolicy' => 'Az oldalnak nincsen adatvédelmi szabályzata.',
	'irmapolicy' => 'További információkért lásd az <a target="_new" href="$1">adatvédelmi szabályzatot</a>.',
	'irmaoptional' => 'Nem kötelező',
	'irmarequired' => 'Kötelező',
	'irmanickname' => 'Felhasználónév',
	'irmafullname' => 'Teljes név', # Fuzzy
	'irmaemail' => 'E-mail cím:',
	'irmalanguage' => 'Nyelv',
	'irmatimezone' => 'Időzóna',
	'irmachooselegend' => 'Felhasználónév és fiók választás',
	'irmachooseinstructions' => 'Mindenkinek választania kell egy felhasználónevet; választhatsz egyet az alábbi opciókból.',
	'irmachoosenick' => 'A nickneved ($1)',
	'irmachoosefull' => 'A teljes neved ($1)', # Fuzzy
	'irmachooseurl' => 'Az IRMA-dből vett név ($1)',
	'irmachooseauto' => 'Egy automatikusan generált név ($1)',
	'irmachoosemanual' => 'Egy általad megadott név:',
	'irmachooseexisting' => 'Egy létező felhasználónév ezen a wikin',
	'irmachooseusername' => 'Felhasználónév:',
	'irmachoosepassword' => 'Jelszó:',
	'irmaconvertinstructions' => 'Ezzel az űrlappal átállíthatod a felhasználói fiókodat, hogy egy OpenId URL-t használjon, vagy hozzáadhatsz több IRMA URL-t',
	'irmaconvertoraddmoreids' => 'Átalakítás IRMA-ra, vagy másik IRMA URL hozzáadása',
	'irmaconvertsuccess' => 'Sikeres átállás IRMA-re',
	'irmaconvertsuccesstext' => 'Sikeresen átállítottad az IRMA-det erre: $1.',
	'irma-convert-already-your-irma-text' => 'Ez az IRMA már a tiéd.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Ez az IRMA másvalakié.', # Fuzzy
	'irmaalreadyloggedin' => "'''Már be vagy jelentkezve, $1!'''

Ha ezentúl az IRMA-del akarsz bejelentkezni, [[Special:IRMAConvert|konvertálhatod a felhasználói fiókodat IRMA-re]].", # Fuzzy
	'irmanousername' => 'Nem adtál meg felhasználónevet.',
	'irmabadusername' => 'Rossz felhasználónevet adtál meg.',
	'irmaautosubmit' => 'Az ezen az oldalon lévő űrlap automatikusan elküldi az adatokat, ha a JavaScript engedélyezve van. Ha nem, használd a "Continue" (Tovább) gombot.',
	'irmaclientonlytext' => 'Az itteni felhasználónevedet nem használhatod IRMA-ként más weboldalon.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => 'A(z) {{SITENAME}} támogatja az [//irma.net/ IRMA] szabványt a weboldalak közötti egységes bejelentkezéshez.
A IRMA lehetővé teszi, hogy számos különböző weboldalra jelentkezz be úgy, hogy csak egyszer kell megadnod a jelszavadat. (Lásd [//hu.wikipedia.org/wiki/IRMA a Wikipédia IRMA cikkét] további információkért.)

Ha már regisztráltál korábban, [[Special:UserLogin|bejelentkezhetsz]] a felhasználóneveddel és a jelszavaddal, ahogy eddig is. Ha a továbbiakban IRMA-t szeretnél használni, [[Special:IRMAConvert|állítsd át a felhasználói fiókodat IRMA-re]] miután bejelentkeztél.

Számos [//irma.net/get/ IRMA szolgáltató] van, lehetséges, hogy van már IRMA-fiókod egy másik weboldalon.', # Fuzzy
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''csak'' IRMA-s bejelentkezést engedélyez.",
	'irmaupdateuserinfo' => 'Személyes információk frissítése:',
	'irmadelete' => 'IRMA törlése',
	'irmadelete-text' => 'A {{int:irmadelete-button}} gomb megnyomásakor eltávolítod a következő IRMA-t a felhasználói fiókodból: $1.
Ezután többé nem fogsz tudni bejelentkezni ezzel az IRMA-vel.',
	'irmadelete-button' => 'Megerősítés',
	'irmadeleteerrornopassword' => 'Nem törölheted az összes IRMA-d, mert a felhasználói fiókodnak nincs jelszava.
Nem tudnál bejelentkezni IRMA nélkül.',
	'irmadeleteerrorirmaonly' => 'Nem törölheted az összes IRMA-d, mert csak azzal jelentkezhetsz be.
Nem tudnál bejelentkezni IRMA nélkül.',
	'irmadelete-success' => 'Az IRMA sikeresen eltávolítva a felhasználói fiókodból.',
	'irmadelete-error' => 'Hiba történt az IRMA felhasználói fiókodból való eltávolításakor.',
	'prefs-irma-hide-irma' => 'Az IRMA-d elrejtése a felhasználói lapodon, amikor IRMA-vel jelentkezel be.',
	'irma-hide-irma-label' => 'Az IRMA-d elrejtése a felhasználói lapodon, amikor IRMA-vel jelentkezel be.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'A következő információ frissítése az IRMA fiókom alapján minden bejelentkezéskor:', # Fuzzy
	'irma-associated-irmas-label' => 'A felhasználói fiókodhoz kapcsolt IRMA-k:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Művelet',
	'irma-urls-registration' => 'Regisztráció ideje',
	'irma-urls-delete' => 'Törlés',
	'irma-add-url' => 'Új IRMA hozzáadása', # Fuzzy
	'irma-login-or-create-account' => 'Bejelentkezés vagy új felhasználói fiók létrehozása',
	'irma-provider-label-irma' => 'IRMA URL megadása',
	'irma-provider-label-google' => 'Bejelentkezés a Google felhasználói fiókoddal',
	'irma-provider-label-yahoo' => 'Bejelentkezés a Yahoo felhasználói fiókoddal',
	'irma-provider-label-aol' => 'Add meg az AOL felhasználóneved',
	'irma-provider-label-other-username' => 'Add meg a(z) $1 felhasználóneved',
	'irma-dashboard-number-irmas-in-database' => 'IRMA-k száma (összes)',
	'irma-dashboard-number-users-without-irma' => 'IRMA nélküli felhasználók száma',
);

/** Interlingua (interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'irma-desc' => 'Aperir un session in le wiki con [//irma.net/ IRMA], e aperir un session in altere sitos web usante IRMA con un conto de usator del wiki',
	'irmalogin' => 'Aperir session / crear conto con IRMA',
	'irmaserver' => 'Servitor IRMA',
	'irmaxrds' => 'File Yadis',
	'irmaconvert' => 'Convertitor de IRMA',
	'irmaerror' => 'Error de verification',
	'irmaerrortext' => 'Un error occurreva durante le verification del adresse URL de IRMA.',
	'irmaconfigerror' => 'Error de configuration de IRMA',
	'irmaconfigerrortext' => 'Le configuration de immagazinage IRMA pro iste wiki es invalide.
Per favor contacta un [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Error de permissiones IRMA',
	'irmapermissiontext' => 'Le IRMA que tu forniva non ha le permission de aperir sessiones in iste servitor.',
	'irmacancel' => 'Verification cancellate',
	'irmacanceltext' => 'Le verification del adresse URL IRMA ha essite cancellate.',
	'irmafailure' => 'Verification fallite',
	'irmafailuretext' => 'Le verification del adresse URL de IRMA ha fallite. Message de error: "$1"',
	'irmasuccess' => 'Verification succedite',
	'irmasuccesstext' => "'''Verification e apertura de session succedite pro le usator $1'''.

Tu IRMA es $2 .

Iste IRMA e alteres (si presente) pote esser gerite in le [[Special:Preferences#mw-prefsection-irma|scheda IRMA]] de tu preferentias.<br />
Es possibile specificar un contrasigno pro le conto in tu [[Special:Preferences#mw-prefsection-personal|profilo de usator]].",
	'irmausernameprefix' => 'Usator IRMA',
	'irmaserverlogininstructions' => 'Le sito $3 requesta que tu entra le contrasigno de tu conto "$2", pagina $1 (isto es tu URL de IRMA).',
	'irmatrustinstructions' => 'Controla si tu vole divider datos con $1.',
	'irmaallowtrust' => 'Permitte que $1 se fide a iste conto de usator.',
	'irmanopolicy' => 'Le sito non ha specificate un politica de confidentialitate.',
	'irmapolicy' => 'Consulta le <a target="_new" href="$1">politica de confidentialitate</a> pro plus informationes.',
	'irmaoptional' => 'Optional',
	'irmarequired' => 'Requirite',
	'irmanickname' => 'Pseudonymo',
	'irmafullname' => 'Nomine real',
	'irmaemail' => 'Adresse de e-mail',
	'irmalanguage' => 'Lingua',
	'irmatimezone' => 'Fuso horari',
	'irmachooselegend' => 'Selection del nomine de usator e del conto',
	'irmachooseinstructions' => 'Tote le usatores require un pseudonymo;
tu pote seliger un del optiones in basso.',
	'irmachoosenick' => 'Tu pseudonymo ($1)',
	'irmachoosefull' => 'Tu nomine real ($1)',
	'irmachooseurl' => 'Un nomine seligite de tu IRMA ($1)',
	'irmachooseauto' => 'Un nomine automaticamente generate ($1)',
	'irmachoosemanual' => 'Un nomine de tu preferentia:',
	'irmachooseexisting' => 'Un conto existente in iste wiki',
	'irmachooseusername' => 'Nomine de usator:',
	'irmachoosepassword' => 'Contrasigno:',
	'irmaconvertinstructions' => 'Iste formulario te permitte cambiar tu conto de usator pro usar un URL de IRMA o adder altere URL de IRMA.',
	'irmaconvertoraddmoreids' => 'Converter in IRMA o adder un altere URL de IRMA',
	'irmaconvertsuccess' => 'Conversion a IRMA succedite',
	'irmaconvertsuccesstext' => 'Tu ha convertite con successo tu IRMA a $1.',
	'irma-convert-already-your-irma-text' => 'Le IRMA $1 es jam associate a tu conto.', # Fuzzy
	'irma-convert-other-users-irma-text' => '$1 es le IRMA de alcuno altere. Non es possibile usar le IRMA de un altere usator.',
	'irmaalreadyloggedin' => 'Tu es jam authenticate.',
	'irmaalreadyloggedintext' => "'''Tu es jam authenticate, \$1!'''

Tu pote gerer (vider, deler, adder altere) IRMAs in le [[Special:Preferences#mw-prefsection-irma|scheda \"IRMA\"]] de tu preferentias.",
	'irmanousername' => 'Nulle nomine de usator specificate.',
	'irmabadusername' => 'Mal nomine de usator specificate.',
	'irmaautosubmit' => 'Iste pagina include un formulario que debe esser submittite automaticamente si tu ha JavaScript activate.
Si non, prova le button "Continue" (Continuar).',
	'irmaclientonlytext' => 'Tu non pote usar contos ab iste wiki como contos IRMA in un altere sito.',
	'irmaloginlabel' => 'Adresse URL de IRMA',
	'irmalogininstructions' => '{{SITENAME}} supporta le standard [//irma.net/ IRMA] pro contos unificate inter sitos web.
IRMA permitte aperir session in multe diverse sitos web sin usar un contrasigno differente pro cata un.
(Vide [//ia.wikipedia.org/wiki/IRMA le articulo super IRMA in Wikipedia] pro plus informationes.)
Il ha multe [//irma.net/get/ fornitores de IRMA], e tu pote jam disponer de un conto con capacitate IRMA in un altere servicio.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''solmente'' permitte aperir session con IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Si tu ha jam un conto in {{SITENAME}}, tu pote [[Special:UserLogin|aperir session]] con tu nomine de usator e contrasigno como de costume.
Pro usar IRMA in le futuro, tu pote [[Special:IRMAConvert|converter tu conto a IRMA]] post haber aperite session del modo normal.',
	'irmaupdateuserinfo' => 'Actualisar mi informationes personal:',
	'irmadelete' => 'Deler IRMA',
	'irmadelete-text' => 'Per cliccar le button "{{int:irmadelete-button}}", tu removera le IRMA $1 de tu conto.
Tu non potera plus aperir un session con iste IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'Tu non pote deler tote tu IRMAs proque tu conto non ha un contrasigno.
Il esserea impossibile aperir un session sin IRMA.',
	'irmadeleteerrorirmaonly' => 'Tu non pote deler tote tu IRMAs proque tu ha le permission de authenticar te solmente con IRMA.
Il esserea impossibile aperir un session sin IRMA.',
	'irmadelete-success' => 'Le IRMA ha essite removite de tu conto con successo.',
	'irmadelete-error' => 'Un error occurreva durante le remotion del IRMA de tu conto.',
	'irma-irmas-were-not-merged' => 'Solmente le contos de usator, non le IRMA(s), ha essite fusionate.',
	'prefs-irma-hide-irma' => 'Celar tu IRMA in tu pagina de usator, si tu aperi un session con IRMA.',
	'irma-hide-irma-label' => 'Celar tu IRMA in tu pagina de usator.',
	'irma-userinfo-update-on-login-label' => 'Ecce le informationes de profilo que essera actualisate automaticamente ab le personage IRMA cata vice que tu aperi un session:',
	'irma-associated-irmas-label' => 'IRMAs associate con tu conto:',
	'irma-urls-action' => 'Action',
	'irma-urls-registration' => 'Hora de registration',
	'irma-urls-delete' => 'Deler',
	'irma-add-url' => 'Adder un nove IRMA a tu conto',
	'irma-login-or-create-account' => 'Aperir session o crear nove conto',
	'irma-provider-label-irma' => 'Entra le URL de tu IRMA',
	'irma-provider-label-google' => 'Aperir session con tu conto de Google',
	'irma-provider-label-yahoo' => 'Aperir session con tu conto de Yahoo',
	'irma-provider-label-aol' => 'Entra tu pseudonymo de AOL',
	'irma-provider-label-other-username' => 'Entra tu nomine de usator de $1',
	'specialpages-group-irma' => 'Paginas de servicio IRMA e informationes de stato',
	'right-irma-converter-access' => 'Pote adder o converter su conto pro usar identitates IRMA',
	'right-irma-dashboard-access' => 'Accesso standard al pannello de instrumentos IRMA',
	'right-irma-dashboard-admin' => 'Accesso administrator al pannello de instrumentos IRMA',
	'irma-dashboard-title' => 'Pannello de instrumentos IRMA',
	'irma-dashboard-title-admin' => 'Pannello de instrumentos IRMA (administrator)',
	'irma-dashboard-introduction' => 'Le configuration actual del extension IRMA ([$1 adjuta])',
	'irma-dashboard-number-irma-users' => 'Numero de usatores con IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Numero de IRMAs (total)',
	'irma-dashboard-number-users-without-irma' => 'Numero de usatores sin IRMA',
);

/** Indonesian (Bahasa Indonesia)
 * @author -iNu-
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Kenrick95
 * @author Rex
 */
$messages['id'] = array(
	'irma-desc' => 'Masuk log ke wiki dengan sebuah [//irma.net/ IRMA], dan masuk log ke situs web lain yang berbasis IRMA dengan sebuah akun pengguna wiki',
	'irmalogin' => 'Masuk log/ buat akun dengan IRMA',
	'irmaserver' => 'Server IRMA',
	'irmaxrds' => 'berkas Yadis',
	'irmaconvert' => 'Konverter IRMA',
	'irmaerror' => 'Verifikasi gagal',
	'irmaerrortext' => 'Sebuah kesalahan terjadi ketika melakukan verifikasi atas URL IRMA.',
	'irmaconfigerror' => 'Kesalahan konfigurasi IRMA',
	'irmaconfigerrortext' => 'Konfigurasi penyimpanan IRMA di wiki ini tidak sah.
Silakan hubungi salah satu [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Izin IRMA tidak sah',
	'irmapermissiontext' => 'IRMA yang Anda berikan tidak diperbolehkan untuk mengakses server ini.',
	'irmacancel' => 'Verifikasi dibatalkan',
	'irmacanceltext' => 'Verifikasi URL IRMA tersebut dibatalkan.',
	'irmafailure' => 'Verifikasi gagal',
	'irmafailuretext' => 'Verifikasi dari URL IRMA tersebut gagal.
Pesan kesalahan: "$1"',
	'irmasuccess' => 'Verifikasi berhasil',
	'irmasuccesstext' => "''Verifikasi berhasil dan masuk log sebagai pengguna $1'''.

IRMA Anda adalah $2.

Ini dan IRMA selanjutnya, dan sebuah kata sandi akun opsional, dapat dikelola di [[Special:Preferences|preferensi]] Anda.", # Fuzzy
	'irmausernameprefix' => 'PenggunaIRMA',
	'irmaserverlogininstructions' => '$3 meminta Anda memasukkan sandi untuk halaman pengguna $2 Anda di $1 (ini adalah URL IRMA Anda)',
	'irmatrustinstructions' => 'Berikan tanda cek jika Anda ingin berbagi data dengan $1.',
	'irmaallowtrust' => 'Izinkan $1 untuk mempercayai akun pengguna ini.',
	'irmanopolicy' => 'Situs ini tidak memiliki kebijakan privasi.',
	'irmapolicy' => 'Lihat <a target="_new" href="$1">kebijakan privasi</a> untuk informasi lebih lanjut.',
	'irmaoptional' => 'Opsional',
	'irmarequired' => 'Diperlukan',
	'irmanickname' => 'Nama panggilan',
	'irmafullname' => 'Nama lengkap', # Fuzzy
	'irmaemail' => 'Alamat surel',
	'irmalanguage' => 'Bahasa',
	'irmatimezone' => 'Zona waktu',
	'irmachooselegend' => 'Pilihan nama pengguna dan akun',
	'irmachooseinstructions' => 'Semua pengguna memerlukan sebuah nama panggilan;
Anda dapat memilih dari salah satu opsi berikut.',
	'irmachoosenick' => 'Nama panggilan anda ($1)',
	'irmachoosefull' => 'Nama lengkap Anda ($1)', # Fuzzy
	'irmachooseurl' => 'Sebuah nama diambil dari IRMA Anda ($1)',
	'irmachooseauto' => 'Nama yang dibuat secara otomatis ($1)',
	'irmachoosemanual' => 'Nama pilihan Anda:',
	'irmachooseexisting' => 'Akun yang telah ada di wiki ini',
	'irmachooseusername' => 'Nama pengguna:',
	'irmachoosepassword' => 'Kata sandi:',
	'irmaconvertinstructions' => 'Formulir ini mengijinkan Anda untuk mengganti akun pengguna Anda menjadi IRMA atau menambahkan pranala IRMA',
	'irmaconvertoraddmoreids' => 'Konversi ke IRMA atau tambahkan URL IRMA yang lain',
	'irmaconvertsuccess' => 'Berhasil dikonversi menjadi IRMA',
	'irmaconvertsuccesstext' => 'Anda telah berhasil mengkonversi IRMA Anda menjadi $1.',
	'irma-convert-already-your-irma-text' => 'Sudah merupakan IRMA Anda.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Itu adalah IRMA orang lain.', # Fuzzy
	'irmaalreadyloggedin' => "'''Anda telah masuk log, $1!'''

Jika Anda ingin menggunakan IRMA untuk masuk log di masa yang akan datang, Anda dapat [[Special:IRMAConvert|mengkonversi akun Anda menjadi IRMA]].", # Fuzzy
	'irmanousername' => 'Tidak ada nama pengguna diberikan.',
	'irmabadusername' => 'Nama pengguna salah.',
	'irmaautosubmit' => 'Dalam halaman ini terdapat formulir yang akan dikirimkan secara otomatis jika Anda mengaktifkan JavaScript.
Jika tidak, coba tombol "Continue" (Lanjutkan).',
	'irmaclientonlytext' => 'Anda tidak dapat menggunakan akun dari wiki ini sebagai IRMA di situs lain.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} mendukung standar [//irma.net/ IRMA] untuk info masuk tunggal lintas situs web.
IRMA mengizinkan Anda untuk masuk log di berbagai situs web tanpa harus memasukkan kata sandi yang berbeda.
(Lihat [//id.wikipedia.org/wiki/IRMA artikel Wikipedia mengenai IRMA] untuk informasi lebih lanjut.)
Ada banyak [//irma.net/get penyedia IRMA] dan Anda mungkin telah memiliki akun IRMA di salah satu layanan situs lain.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''hanya'' mengizinkan untuk masuk log dengan IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Jika Anda sudah memiliki akun di {{SITENAME}}, Anda dapat [[Special:UserLogin|masuk]] dengan nama pengguna dan sandi Anda seperti biasa.
Untuk menggunakan IRMA selanjutnya, Anda dapat [[Special:IRMAConvert|mengubah akun menjadi IRMA]] setelah Anda masuk seperti biasa.',
	'irmaupdateuserinfo' => 'Mutakhirkan informasi pribadi saya:',
	'irmadelete' => 'Hapus IRMA',
	'irmadelete-text' => 'Dengan menekan tombol "{{int:irmadelete-button}}", Anda akan menghapuskan IRMA $1 dari akun Anda.
Anda tidak akan dapat masuk log lagi dengan IRMA ini.',
	'irmadelete-button' => 'Konfirmasi',
	'irmadeleteerrornopassword' => 'Anda tidak dapat menghapus semua IRMA Anda karena akun Anda tidak diberi kata sandi.
Anda tidak akan dapat masuk log tanpa IRMA.',
	'irmadeleteerrorirmaonly' => 'Anda tidak dapat menghapus semua IRMAs Anda karena Anda hanya diijinkan masuk log dengan IRMA.
Anda tidak akan dapat masuk log tanpa IRMA.',
	'irmadelete-success' => 'IRMA telah dihapus dari akun Anda.',
	'irmadelete-error' => 'Terjadi kesalahan saat berusaha menghapus IRMA dari akun Anda.',
	'prefs-irma-hide-irma' => 'Sembunyikan URL IRMA Anda di halaman pengguna Anda, jika Anda masuk log dengan IRMA.',
	'irma-hide-irma-label' => 'Sembunyikan URL IRMA Anda di halaman pengguna Anda, jika Anda masuk log dengan IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Mutakhirkan informasi dari persona IRMA berikut setiap kali saya masuk log:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA yang dihubungkan dengan akun Anda:',
	'irma-urls-action' => 'Tindakan',
	'irma-urls-delete' => 'Hapus',
	'irma-add-url' => 'Tambahkan IRMA baru', # Fuzzy
	'irma-login-or-create-account' => 'Log Masuk atau Daftarkan Akun Baru', # Fuzzy
	'irma-provider-label-irma' => 'Masukkan URL IRMA Anda',
	'irma-provider-label-google' => 'Log masuk mengunakan akun Google Anda',
	'irma-provider-label-yahoo' => 'Log masuk mengunakan akun Yahoo Anda',
	'irma-provider-label-aol' => 'Masukkan nama pengguna AOL Anda',
	'irma-provider-label-other-username' => 'Masukkan nama pengguna $1 Anda',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'irmaoptional' => 'I cho, ka I chogị',
	'irmachoosepassword' => 'Okwúngáfè:',
	'irma-urls-delete' => 'Kàcha',
);

/** Icelandic (íslenska)
 * @author S.Örvarr.S
 */
$messages['is'] = array(
	'irmachoosepassword' => 'Lykilorð:',
);

/** Italian (italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Civvì
 * @author Darth Kule
 * @author McDutchie
 * @author Nemo bis
 * @author Pietrodn
 * @author Stefano-c
 */
$messages['it'] = array(
	'irma-desc' => 'Effettua il login alla wiki con [//irma.net/ IRMA] e agli altri siti web che utilizzano IRMA con un account wiki',
	'irmaidentifier' => 'Identificatore IRMA',
	'irmalogin' => 'Entra / crea account con IRMA',
	'irmaserver' => 'server IRMA',
	'irma-identifier-page-text-user' => 'Questa pagina è l\'identificatore per utente "$1".',
	'irmaxrds' => 'file Yadis',
	'irmaconvert' => 'convertitore IRMA',
	'irmaerror' => 'Errore di verifica',
	'irmaerrortext' => "Si è verificato un errore durante la verifica dell'URL IRMA.",
	'irmaconfigerror' => 'Errore nella configurazione IRMA',
	'irmaconfigerrortext' => 'La configurazione della memorizzazione di IRMA per questa wiki non è valida.
Per favore consulta un [[Special:ListUsers/sysop|amministratore]].',
	'irmapermission' => 'Errore nei permessi IRMA',
	'irmapermissiontext' => "L'accesso a questo server non è consentito all'IRMA indicato.",
	'irmacancel' => 'Verifica annullata',
	'irmacanceltext' => "La verifica dell'URL IRMA è stata annullata.",
	'irmafailure' => 'Verifica fallita',
	'irmafailuretext' => 'La verifica dell\'URL IRMA è fallita. Messaggio di errore: "$1"',
	'irmasuccess' => 'Verifica effettuata',
	'irmasuccesstext' => "'''La verifica è stata effettuata con successo ed ora sei connesso come utente $1'''.

Il tuo IRMA è $2.

Questo ed altri IRMA opzionali possono essere gestiti dalla [[Special:Preferences#mw-prefsection-irma|scheda IRMA]] nelle tue preferenze.<br />
È possibile aggiungere una password opzionale dal tuo [[Special:Preferences#mw-prefsection-personal|profilo utente]].",
	'irmausernameprefix' => 'Utente IRMA',
	'irmaserverlogininstructions' => "$3 richiede di inserire la tua password per l'utente $2 pagina $1 (questo è il tuo URL IRMA).",
	'irmatrustinstructions' => 'Controlla se desideri condividere i dati con $1.',
	'irmaallowtrust' => 'Permetti a $1 di fidarsi di questo account utente.',
	'irmanopolicy' => 'Il sito non ha specificato una politica relativa alla privacy.',
	'irmapolicy' => 'Controlla la <a target="_new" href="$1">politica relativa alla privacy</a> per maggiori informazioni.',
	'irmaoptional' => 'Opzionale',
	'irmarequired' => 'Obbligatorio',
	'irmanickname' => 'Nickname',
	'irmafullname' => 'Nome vero',
	'irmaemail' => 'Indirizzo e-mail',
	'irmalanguage' => 'Lingua',
	'irmatimezone' => 'Fuso orario',
	'irmachooselegend' => "Scelta del nome utente e dell'account",
	'irmachooseinstructions' => 'Tutti gli utenti hanno bisogno di un nickname;
puoi sceglierne uno dalle opzioni seguenti.',
	'irmachoosenick' => 'Il tuo nickname ($1)',
	'irmachoosefull' => 'Il tuo vero nome ($1)',
	'irmachooseurl' => 'Un nome scelto dal tuo IRMA ($1)',
	'irmachooseauto' => 'Un nome auto-generato ($1)',
	'irmachoosemanual' => 'Un nome di tua scelta:',
	'irmachooseexisting' => 'Un account esistente su questa wiki',
	'irmachooseusername' => 'Nome utente:',
	'irmachoosepassword' => 'Password:',
	'irmaconvertinstructions' => 'Questo modulo permette di cambiare il proprio account per usare un URL IRMA o aggiungere altri URL IRMA.',
	'irmaconvertoraddmoreids' => 'Converti in IRMA o aggiungi un altro URL IRMA',
	'irmaconvertsuccess' => 'Convertito con successo a IRMA',
	'irmaconvertsuccesstext' => 'Il tuo IRMA è stato convertito con successo a $1.',
	'irma-convert-already-your-irma-text' => "L'IRMA $1 è già associato alla tua utenza. Non ha senso aggiungerlo di nuovo.", # Fuzzy
	'irma-convert-other-users-irma-text' => "$1 è l'IRMA di qualcun altro. Non puoi utilizzare l'IRMA di un altro utente.",
	'irmaalreadyloggedin' => "Hai già effettuato l'accesso.",
	'irmaalreadyloggedintext' => "'''Hai già effettuato l'accesso, $1!'''

Puoi gestire (vedere, cancellare, aggiungere altri) IRMA dalla [[Special:Preferences#mw-prefsection-irma|scheda IRMA]] nelle tue preferenze.",
	'irmanousername' => 'Nessun nome utente specificato.',
	'irmabadusername' => 'Nome utente specificato errato.',
	'irmaautosubmit' => 'Questa pagina include un modulo che dovrebbe essere inviato automaticamente se hai JavaScript attivato. Se non lo è, prova a premere il pulsante "Continue".',
	'irmaclientonlytext' => 'Non puoi usare gli account di questa wiki come IRMA su un altro sito.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} supporta lo standard [//irma.net/ IRMA] per il login unico sui siti web.
IRMA consente di effettuare la registrazione su molti siti web senza dover utilizzare una password diversa per ciascuno.
(Leggi la [//it.wikipedia.org/wiki/IRMA voce di Wikipedia su IRMA] per maggiori informazioni.)

Esistono molti [//irma.net/get/ Provider IRMA]; è possibile che tu abbia già un account abilitato a IRMA su un altro servizio.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} consente ''solamente'' l'accesso con IRMA.",
	'irmalogininstructions-passwordloginallowed' => "Chi possiede già un account su {{SITENAME}} può effettuare [[Special:UserLogin|l'accesso]] con il proprio nome utente e la propria password come al solito. Per utilizzare IRMA in futuro, si può [[Special:IRMAConvert|convertire il proprio account a IRMA]] dopo aver effettuato normalmente il login.",
	'irmaupdateuserinfo' => 'Aggiorna i miei dati personali:',
	'irmadelete' => 'Cancella IRMA',
	'irmadelete-text' => 'Facendo clic sul pulsante "{{int:irmadelete-button}}" verrà rimosso l\'IRMA $1 dal proprio account.
Non si potrà più effettuare il login con questo IRMA.',
	'irmadelete-button' => 'Conferma',
	'irmadeleteerrornopassword' => 'Non è possibile eliminare tutti i tuoi IRMA perché il tuo account non ha password.
Non saresti in grado di accedere senza un IRMA.',
	'irmadeleteerrorirmaonly' => 'Non puoi eliminare tutti i tuoi IRMA perché è permesso collegarsi sono tramite IRMA.
Non saresti in grado di accedere senza un IRMA.',
	'irmadelete-success' => "L'IRMA è stato rimosso con successo dall'account.",
	'irmadelete-error' => "Si è verificato un errore durante la rimozione dell'account IRMA.",
	'irma-irmas-were-not-merged' => 'Gli IRMA non sono uniti quando vengono uniti gli account utenti.',
	'prefs-irma-hide-irma' => 'Nascondi il tuo IRMA sulla tua pagina utente, se effettui il login con IRMA.',
	'prefs-irma-trusted-sites' => 'Siti attendibili',
	'irma-hide-irma-label' => 'Nascondi il tuo IRMA sulla tua pagina utente.',
	'irma-show-irma-url-on-userpage-never' => 'Il tuo IRMA non è mai mostrato nella tua pagina utente.',
	'irma-userinfo-update-on-login-label' => 'Informazioni del profilo utente che sono automaticamente aggiornate dalla persona IRMA a ogni accesso:',
	'irma-associated-irmas-label' => 'IRMA associati al proprio account:',
	'irma-urls-action' => 'Azione',
	'irma-urls-registration' => 'Data di registrazione',
	'irma-urls-delete' => 'Cancella',
	'irma-add-url' => 'Aggiungi un nuovo IRMA alla tua utenza',
	'irma-local-identity' => 'Il tuo IRMA:',
	'irma-login-or-create-account' => 'Entra o crea una nuova utenza',
	'irma-provider-label-irma' => "Inserisci l'URL del tuo IRMA",
	'irma-provider-label-google' => 'Accedi utilizzando il tuo account Google',
	'irma-provider-label-yahoo' => 'Accedi utilizzando il tuo account Yahoo',
	'irma-provider-label-aol' => 'Inserisci il tuo screenname AOL',
	'irma-provider-label-other-username' => 'Inserisci il tuo $1 nome utente',
	'specialpages-group-irma' => 'Pagine di servizio ed informazioni sullo stato per IRMA',
	'right-irma-converter-access' => 'Può aggiungere o convertire il suo account per usare identità IRMA',
	'right-irma-dashboard-access' => 'Accesso standard al cruscotto IRMA',
	'right-irma-dashboard-admin' => 'Accesso amministrativo al cruscotto IRMA',
	'irma-dashboard-title' => 'Cruscotto IRMA',
	'irma-dashboard-title-admin' => 'Cruscotto IRMA per amministratori',
	'irma-dashboard-introduction' => "Le impostazioni attuali per l'estensione IRMA ([$1 aiuto])",
	'irma-dashboard-number-irma-users' => 'Numero di utenti con IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Numero di IRMA (totale)',
	'irma-dashboard-number-users-without-irma' => 'Numero di utenti senza IRMA',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author Schu
 * @author Shirayuki
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'irma-desc' => '[//irma.net/ IRMA] でウィキにログインできるようにする。
これをウィキで有効にすると、ウィキの利用者アカウントの URL を IRMA として他の IRMA 対応サイトにもログインできる',
	'irmaidentifier' => 'IRMA 識別子',
	'irmalogin' => 'IRMA によるログイン/アカウント作成',
	'irmaserver' => 'IRMA サーバー',
	'irma-identifier-page-text-user' => 'このページは利用者「$1」の識別子です。',
	'irma-identifier-page-text-different-user' => 'このページは利用者 ID $1 の識別子です。',
	'irma-identifier-page-text-no-such-local-irma' => '無効なローカル IRMA 識別子です。',
	'irma-server-identity-page-text' => 'このページは、IRMA 認証を開始するための、IRMA サーバーの技術的なページです。
それ以外の目的はありません。',
	'irmaxrds' => 'Yadis ファイル',
	'irmaconvert' => 'IRMA コンバーター',
	'irmaerror' => '検証エラー',
	'irmaerrortext' => 'IRMA URL の検証中にエラーが発生しました。',
	'irma-error-no-auth' => 'IRMA URL $1 を検証する際に、不明な認証レスポンス/リクエスト エラーが発生しました。',
	'irma-error-server-response' => "IRMA URL $1 を検証する際にエラーが発生しました。

サーバーの応答: ''$2''",
	'irma-error-request-forgery' => 'エラーが発生しました: 無効なトークンが見つかりました。',
	'irmaconfigerror' => 'IRMA 設定エラー',
	'irmaconfigerrortext' => 'このウィキの IRMA 格納設定は無効です。
[[Special:ListUsers/sysop|管理者]]にお問い合わせください。',
	'irmapermission' => 'IRMA パーミッションエラー',
	'irmapermissiontext' => '指定した IRMA では、このサーバーへのログインが許可されていません。',
	'irmacancel' => '検証中止',
	'irmacanceltext' => 'IRMA URL の検証は中止されました。',
	'irmafailure' => '検証失敗',
	'irmafailuretext' => 'IRMA URL の検証は失敗しました。
エラーメッセージ:「$1」',
	'irmasuccess' => '検証成功',
	'irmasuccesstext' => "'''利用者 $1 の検証とログインに成功しました'''。

あなたの IRMA は $2 です。

これを含むすべての IRMA は個人設定の [[Special:Preferences#mw-prefsection-irma|IRMA タブ]]で管理できます。<br />
アカウントパスワード (省略可能) は[[Special:Preferences#mw-prefsection-personal|利用者情報]]で追加できます。",
	'irmausernameprefix' => 'IRMA ユーザー',
	'irmaserverlogininstructions' => '利用者 $2 のページ $1 (これがあなたの IRMA URL です) に対応するパスワードを入力することを、$3 が要求しています',
	'irmatrustinstructions' => '$1 とデータを共有したいか確認してください。',
	'irmaallowtrust' => '$1 がこの利用者アカウントを信用するのを許可する。',
	'irmanopolicy' => 'サイトはプライバシーに関する方針を明記していません。',
	'irmapolicy' => 'より詳しくは<a target="_new" href="$1">プライバシーに関する方針</a>を確認してください。',
	'irmaoptional' => '省略可能',
	'irmarequired' => '必須',
	'irmanickname' => 'ニックネーム',
	'irmafullname' => '本名',
	'irmaemail' => 'メールアドレス',
	'irmalanguage' => '言語',
	'irmatimezone' => 'タイムゾーン',
	'irmachooselegend' => '利用者名とアカウントの選択',
	'irmachooseinstructions' => 'すべての利用者にはニックネームが必要です。
以下の選択肢から 1 つ選択できます。',
	'irmachoosenick' => 'あなたのニックネーム ($1)',
	'irmachoosefull' => 'あなたの本名 ($1)',
	'irmachooseurl' => 'あなたの IRMA から取得した名前 ($1)',
	'irmachooseauto' => '自動生成された名前 ($1)',
	'irmachoosemanual' => '名前を別に設定する:',
	'irmachooseexisting' => 'このウィキの既存のアカウント',
	'irmachooseusername' => '利用者名:',
	'irmachoosepassword' => 'パスワード:',
	'irmaconvertinstructions' => 'このフォームでは、あなたの利用者アカウントで IRMA URL を使用するように変更したり、IRMA URL をさらに追加できます。',
	'irmaconvertoraddmoreids' => 'IRMA への変換、または別の IRMA URL の追加',
	'irmaconvertsuccess' => 'IRMA に変換しました',
	'irmaconvertsuccesstext' => 'あなたの IRMA を $1 に変換しました。',
	'irma-convert-already-your-irma-text' => 'IRMA $1 はあなたのアカウントに既に関連付けられています。',
	'irma-convert-other-users-irma-text' => '$1 は他の誰かの IRMA です。
他の利用者の IRMA は使用できません。',
	'irmaalreadyloggedin' => 'あなたは既にログインしています。',
	'irmaalreadyloggedintext' => "'''$1 さん、あなたは既にログインしています!'''

個人設定の [[Special:Preferences#mw-prefsection-irma|IRMA タブ]]で、あなたの IRMA を管理 (表示、削除、追加など) できます。",
	'irmanousername' => '利用者名が指定されていません。',
	'irmabadusername' => '利用者名の指定が正しくありません。',
	'irmaautosubmit' => 'このページにあるフォームはあなたが JavaScript を有効にしていれば自動的に送信されるはずです。そうならない場合は、「Continue」(続行) ボタンを試してください。',
	'irmaclientonlytext' => 'このウィキのアカウントは、別のサイトで IRMA として使用できません。',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}} はウェブサイト間でのシングルサインオンのための [//irma.net/ IRMA] 規格に対応しています。IRMA によって、個別のパスワードを使用することなく、たくさんのさまざまなウェブサイトにログインできるようになります(より詳しい情報は[//ja.wikipedia.org/wiki/IRMA ウィキペディアの IRMA についての記事]を参照してください)。
多くの [//irma.net/get/ IRMA プロバイダー]が存在するため、IRMA が有効なアカウントを別のサービスで既に保持しているかもしれません。',
	'irmalogininstructions-irmaloginonly' => "IRMA で{{SITENAME}}''のみ''にログインできます。",
	'irmaupdateuserinfo' => '自分の個人情報を更新:',
	'irmadelete' => 'IRMA の削除',
	'irmadelete-text' => '「{{int:irmadelete-button}}」ボタンをクリックすると、アカウントから IRMA「$1」を除去します。
以降、この IRMA を使用してのログインができなくなります。',
	'irmadelete-button' => '確定',
	'irmadeleteerrornopassword' => 'アカウントにパスワードが設定されていないため、IRMA を削除できません。
ログインに IRMA が必要です。',
	'irmadeleteerrorirmaonly' => 'IRMA を使用してのログインのみが許可されているため、IRMA を削除できません。
ログインに IRMA が必要です。',
	'irmadelete-success' => 'あなたのアカウントから IRMA を除去しました。',
	'irmadelete-error' => 'あなたのアカウントから IRMA を除去する際にエラーが発生しました。',
	'irma-irmas-were-not-merged' => '利用者アカウントを統合する際に、IRMA は統合されませんでした。',
	'prefs-irma-hide-irma' => '利用者ページでの IRMA URL の表示',
	'prefs-irma-userinfo-update-on-login' => 'IRMA 利用者情報の更新',
	'prefs-irma-associated-irmas' => '{{SITENAME}}へのログインに使用する IRMA',
	'prefs-irma-trusted-sites' => '信頼済みサイト',
	'prefs-irma-local-identity' => '他のサイトへのログインに使用する IRMA',
	'irma-hide-irma-label' => 'IRMA を利用者ページに表示しない',
	'irma-show-irma-url-on-userpage-always' => 'あなたの IRMA が利用者ページに常に表示されます。',
	'irma-show-irma-url-on-userpage-never' => 'あなたの IRMA が利用者ページに表示されることはありません。',
	'irma-userinfo-update-on-login-label' => 'ログインするたびに IRMA ペルソナの内容をもとに自動的に更新するプロフィール情報:',
	'irma-associated-irmas-label' => 'あなたのアカウントに関連付けられた IRMA:',
	'irma-urls-action' => '操作',
	'irma-urls-registration' => '登録日時',
	'irma-urls-delete' => '削除',
	'irma-add-url' => '自分のアカウントに新しい IRMA を追加',
	'irma-trusted-sites-label' => 'IRMA を使用してログインした信頼済みサイト:',
	'irma-trusted-sites-table-header-column-url' => '信頼済みサイト',
	'irma-trusted-sites-table-header-column-action' => '操作',
	'irma-trusted-sites-delete-link-action-text' => '削除',
	'irma-trusted-sites-delete-all-link-action-text' => '信頼済みサイトをすべて削除',
	'irma-trusted-sites-delete-confirmation-page-title' => '信頼済みサイトの削除',
	'irma-trusted-sites-delete-confirmation-question' => '「{{int:irma-trusted-sites-delete-confirmation-button-text}}」ボタンをクリックすると、信頼済みサイト一覧から「$1」を除去します。',
	'irma-trusted-sites-delete-all-confirmation-question' => '「{{int:irma-trusted-sites-delete-confirmation-button-text}}」ボタンをクリックすると、利用者プロフィールから信頼済みサイトをすべて除去します。',
	'irma-trusted-sites-delete-confirmation-button-text' => '確認',
	'irma-trusted-sites-delete-confirmation-success-text' => '信頼済みサイト一覧から「$1」を除去しました。',
	'irma-trusted-sites-delete-all-confirmation-success-text' => '利用者プロフィールから、以前登録した信頼済みサイトをすべて除去しました。',
	'irma-local-identity' => 'あなたの IRMA:',
	'irma-login-or-create-account' => 'ログインまたは新規アカウント作成',
	'irma-provider-label-irma' => 'あなたの IRMA URL を入力してください',
	'irma-provider-label-google' => 'あなたの Google アカウントを使用してログインしてください',
	'irma-provider-label-yahoo' => 'あなたの Yahoo アカウントを使用してログインしてください',
	'irma-provider-label-aol' => 'あなたの AOL スクリーンネームを入力してください',
	'irma-provider-label-wmflabs' => 'あなたの Wmflabs アカウントを使用してログインしてください',
	'irma-provider-label-other-username' => 'あなたの $1 でのユーザー名を入力してください',
	'specialpages-group-irma' => 'IRMA のサービスページとステータス情報',
	'right-irma-converter-access' => 'IRMA を使用するアカウントを追加/変換',
	'right-irma-dashboard-access' => 'IRMA ダッシュボードに標準アクセス',
	'right-irma-dashboard-admin' => 'IRMA ダッシュボードに管理者アクセス',
	'action-irma-converter-access' => 'IRMA を使用するアカウントの追加/変換',
	'action-irma-dashboard-access' => 'IRMA ダッシュボードへのアクセス',
	'action-irma-dashboard-admin' => 'IRMA 管理者ダッシュボードへのアクセス',
	'irma-dashboard-title' => 'IRMA ダッシュボード',
	'irma-dashboard-title-admin' => 'IRMA ダッシュボード (管理者)',
	'irma-dashboard-introduction' => '現在の IRMA 拡張機能の設定 ([$1 ヘルプ])',
	'irma-dashboard-number-irma-users' => 'IRMA を持つ利用者の数',
	'irma-dashboard-number-irmas-in-database' => 'IRMA の数 (合計)',
	'irma-dashboard-number-users-without-irma' => 'IRMA を持たない利用者の数',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'irmaxrds' => 'Berkas Yadis',
	'irmaerror' => 'Kaluputan vérifikasi',
	'irmacancel' => 'Vérifikasi dibatalaké',
	'irmafailure' => 'Vérifikasi gagal',
	'irmatrustinstructions' => 'Mangga dipriksa yèn panjenengan péngin mbagi data karo $1.',
	'irmaallowtrust' => 'Marengaké $1 percaya karo rékening panganggo iki.',
	'irmanopolicy' => 'Situs iki durung spésifikasi kawicaksanan privasi.',
	'irmaoptional' => 'Opsional',
	'irmarequired' => 'Diperlokaké',
	'irmanickname' => 'Jeneng sesinglon',
	'irmafullname' => 'Jeneng jangkep', # Fuzzy
	'irmaemail' => 'Alamat e-mail',
	'irmalanguage' => 'Basa',
	'irmachooseinstructions' => 'Kabèh panganggo prelu jeneng sesinglon;
panjenengan bisa milih salah siji saka opsi ing ngisor iki.',
	'irmachoosefull' => 'Jeneng pepak panjenengan ($1)', # Fuzzy
	'irmachooseauto' => 'Jeneng ($1) sing digawé sacara otomatis',
	'irmachoosemanual' => 'Jeneng miturut pilihan panjenengan:',
	'irmachoosepassword' => 'Tembung sandhi:',
);

/** Georgian (ქართული)
 * @author David1010
 * @author Malafaya
 */
$messages['ka'] = array(
	'irmalogin' => 'შესვლა / შექმენით ანგარიში IRMA-ით',
	'irmaserver' => 'IRMA-ის სერვერი',
	'irmaxrds' => 'Yadis ფაილი',
	'irmaconvert' => 'IRMA-ის კონვერტორი',
	'irmaerror' => 'დადასტურების შეცდომა',
	'irmaerrortext' => 'IRMA-ის URL-ის შემოწმებისას მოხდა შეცდომა.',
	'irmaconfigerror' => 'IRMA-ის კონფიგურაციის შეცდომა',
	'irmaconfigerrortext' => 'IRMA-ის საცავის კონფიგურაცია ამ ვიკისათვის არასწორია.
გთხოვთ, მიმართეთ [[Special:ListUsers/sysop|ადმინისტრატორს]].',
	'irmapermission' => 'IRMA-ის უფლებების შეცდომა',
	'irmapermissiontext' => 'მითითებული IRMA არ გაძლევთ ამ სერვერზე შესვლის საშუალებას.',
	'irmacancel' => 'შემოწმება გაუქმებულია',
	'irmacanceltext' => 'IRMA-ის URL-ის შემოწმება გაუქმებულია.',
	'irmafailure' => 'შემოწმება ვერ განხორციელდა',
	'irmafailuretext' => 'IRMA-ის URL-ის შემოწმება წარუმატებლად დასრულდა. შეცდომის შეტყობინება: „$1“',
	'irmasuccess' => 'შემოწმება წარმატებით დასრულდა',
	'irmausernameprefix' => 'IRMA-ის მოხმარებელი',
	'irmaserverlogininstructions' => 'ქვემოთ შეიყვანეთ თქვენი პაროლი, რათა შეხვიდეთ $3-ზე როგორც მომხმარებელი $2 (პირადი გვერდი $1 — ეს არის თქვენი IRMA-ის URL).',
	'irmatrustinstructions' => 'მონიშნეთ, თუ თქვენ გსურთ გააზიაროთ მონაცემები $1-თვის.',
	'irmanopolicy' => 'ვებ-გვერდმა არ მიუთითა კონფიდენციალურობის პოლიტიკა.',
	'irmapolicy' => 'მეტი ინფორმაციისათვის იხილეთ <a target="_new" href="$1">კონფიდენციალურობის პოლიტიკა</a>.',
	'irmaoptional' => 'არასავალდებულო',
	'irmarequired' => 'სავალდებულო',
	'irmanickname' => 'მეტსახელი',
	'irmafullname' => 'ნამდვილი სახელი',
	'irmaemail' => 'ელ. ფოსტის მისამართი',
	'irmalanguage' => 'ენა',
	'irmatimezone' => 'სასაათო სარტყელი',
	'irmachooselegend' => 'მომხმარებლის სახელისა და ანგარიშის არჩევა',
	'irmachooseinstructions' => 'ყველა მომხმარებელს უნდა გქონდეს მეტსახელი;
თქვენ შეგიძლიათ აირჩიოთ ქვემოთ მოცემულიდან ერთ-ერთი.',
	'irmachoosenick' => 'თქვენი მეტსახელი ($1)',
	'irmachoosefull' => 'თქვენი ნამდვილი სახელი ($1)',
	'irmachooseurl' => 'სახელი, მიღებული თქვენი IRMA-დან ($1)',
	'irmachooseauto' => 'ავტომატურად შექმნილი სახელი ($1)',
	'irmachoosemanual' => 'სახელი თქვენი არჩევანით:',
	'irmachooseexisting' => 'არსებული ანგარიში ამ ვიკიში',
	'irmachooseusername' => 'მომხმარებლის სახელი:',
	'irmachoosepassword' => 'პაროლი:',
	'irmaconvertoraddmoreids' => 'IRMA-ში კონვერტირება ან სხვა IRMA-ის URL-ის დამატება',
	'irmaconvertsuccess' => 'წარმატებით დაკონვერტირდა IRMA-ში',
	'irmaconvertsuccesstext' => 'თქვენ წარმატებით დააკონვერტირეთ საკუთარი IRMA $1-ში.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 უკვე დაკავშირებულია თქვენ ანგარიშთან. მისი ხელმეორედ დამატება უაზროა.',
	'irma-convert-other-users-irma-text' => '$1 არის სხვისი IRMA. თქვენ არ შეგიძლიათ გამოიყენოთ სხვა მომხმარებლის IRMA.',
	'irmaalreadyloggedin' => 'თქვენ უკვე შესული ხართ.',
	'irmanousername' => 'მომხმარებლის სახელი არ არის მითითებული.',
	'irmabadusername' => 'მითითებულია არასწორი მომხმარებლის სახელი.',
	'irmaloginlabel' => 'IRMA-ის URL',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} უფლებას გაძლევთ შეხვიდეთ ''მხოლოდ'' IRMA-ის გამოყენებით.",
	'irmaupdateuserinfo' => 'ჩემი პირადი ინფორმაციის განახლება:',
	'irmadelete' => 'IRMA-ის წაშლა',
	'irmadelete-button' => 'დადასტურება',
	'irmadelete-success' => 'IRMA წარმატებით წაიშალა თქვენი ანგარიშიდან.',
	'irmadelete-error' => 'IRMA-ის თქვენი ანგარიშიდან წაშლისას მოხდა შეცდომა.',
	'irma-irmas-were-not-merged' => 'IRMA(-ები) არ გაერთიანდა ანგარიშების შერწყმისას.',
	'prefs-irma-hide-irma' => 'თქვენი მომხმარებლის გვერდზე IRMA-ის URL-ის დამალვა, თუ თქვენ შეხვედით IRMA-ის საშუალებით.',
	'irma-hide-irma-label' => 'თქვენი მომხმარებლის გვერდზე IRMA-ის URL-ის დამალვა.',
	'irma-userinfo-update-on-login-label' => 'შემდეგი ინფორმაციის განახლება ჩემ შესახებ IRMA-ით ყოველ ჯერზე, როდესაც შევალ სისტემაში:', # Fuzzy
	'irma-associated-irmas-label' => 'თქვენ ანგარიშთან დაკავშირებული IRMA-ები:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'მოქმედება',
	'irma-urls-registration' => 'რეგისტრაციის დრო',
	'irma-urls-registration-date-time' => '$1',
	'irma-urls-delete' => 'წაშლა',
	'irma-add-url' => 'ახალი IRMA-ის დამატება', # Fuzzy
	'irma-login-or-create-account' => 'შესვლა ან ახალი ანგარიშის შექმნა',
	'irma-provider-label-irma' => 'შეიყვანეთ თქვენი IRMA-ის URL',
	'irma-provider-label-google' => 'შედით თქვენი Google-ის ანგარიშით',
	'irma-provider-label-yahoo' => 'შედით თქვენი Yahoo-ს ანგარიშით',
	'irma-provider-label-aol' => 'შეიყვანეთ თქვენი AOL-ის სახელი',
	'irma-provider-label-other-username' => 'შეიყვანეთ თქვენი „$1“ მომხმარებლის სახელი',
	'specialpages-group-irma' => 'IRMA-ის მომსახურების გვერდები და სტატუსის ინფორმაცია',
	'irma-dashboard-title' => 'IRMA-ის სამართავი დაფა',
	'irma-dashboard-title-admin' => 'IRMA-ის სამართავი დაფა (ადმინისტრატორი)',
	'irma-dashboard-introduction' => 'IRMA-ის მიმდინარე გაფართოების პარამეტრები ([$1 დახმარება])',
	'irma-dashboard-number-irma-users' => 'IRMA-ის მომხმარებლების რაოდენობა',
	'irma-dashboard-number-irmas-in-database' => 'IRMA-ების რაოდენობა (სულ)',
	'irma-dashboard-number-users-without-irma' => 'IRMA-ის არმქონე მომხმარებლების რაოდენობა',
);

/** Kirmanjki (Kırmancki)
 * @author Mirzali
 */
$messages['kiu'] = array(
	'irmalanguage' => 'Zon',
	'irmatimezone' => 'Warê sate',
);

/** Kalaallisut (kalaallisut)
 * @author Qaqqalik
 */
$messages['kl'] = array(
	'irmalanguage' => 'Oqaatsit',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Lovekhmer
 * @author T-Rithy
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'irmaconvert' => 'កម្មវិធីបម្លែងIRMA',
	'irmaerror' => 'កំហុស​ក្នុងការផ្ទៀងផ្ទាត់',
	'irmacancel' => 'ការផ្ទៀងផ្ទាត់​ត្រូវបានលុបចោល',
	'irmafailure' => 'ការផ្ទៀងផ្ទាត់បរាជ័យ',
	'irmasuccess' => 'ផ្ទៀងផ្ទាត់ដោយជោគជ័យ',
	'irmatrustinstructions' => 'ចូរ​ពិនិត្យ ប្រសិនបើ​អ្នក​ចង់​ចែករំលែក​ទិន្នន័យ​ជាមួយ $1​។',
	'irmaoptional' => 'ជាជម្រើស',
	'irmarequired' => 'ត្រូវការជាចាំបាច់',
	'irmanickname' => 'ឈ្មោះហៅក្រៅ',
	'irmafullname' => 'ឈ្មោះពេញ', # Fuzzy
	'irmaemail' => 'អាសយដ្ឋានអ៊ីមែល',
	'irmalanguage' => 'ភាសា',
	'irmatimezone' => 'ល្វែងម៉ោង',
	'irmachooselegend' => 'ជំរើសអត្តនាមនិងគណនី',
	'irmachooseinstructions' => 'អ្នកប្រើប្រាស់ទាំងត្រូវការឈ្មោះហៅក្រៅ

អ្នកអាចជ្រើសរើសពីក្នុងជម្រើសខាងក្រោម។',
	'irmachoosenick' => 'ឈ្មោះហៅក្រៅរបស់អ្នក ($1)',
	'irmachoosefull' => 'ឈ្មោះពេញ​របស់អ្នក ($1)', # Fuzzy
	'irmachooseurl' => 'ឈ្មោះដែលយកពី IRMA របស់អ្នក ($1)',
	'irmachooseauto' => 'ឈ្មោះបង្កើតស្វ័យប្រវត្តិ ($1)',
	'irmachoosemanual' => 'ឈ្មោះសំរាប់អោយអ្នកជ្រើយយក៖',
	'irmachooseexisting' => 'គណនីដែលមានរួចហើយនៅក្នុងវិគីនេះ',
	'irmachooseusername' => 'អត្តនាម៖',
	'irmachoosepassword' => 'ពាក្យសំងាត់៖',
	'irmaconvertsuccess' => 'បានបម្លែងទៅ IRMA ដោយជោគជ័យ',
	'irma-convert-already-your-irma-text' => 'វាជាIRMAរបស់អ្នករួចហើយ។', # Fuzzy
	'irma-convert-other-users-irma-text' => 'វាជាIRMAរបស់អ្នកដទៃ។', # Fuzzy
	'irmaalreadyloggedin' => "'''អ្នកបានកត់ឈ្មោះចូលរួចហើយ $1!'''
ប្រសិនបើអ្នកចង់់ប្រើ IRMA ដើម្បីចុះឈ្មោះចូលនាពេលអនាគត អ្នកអាច[[Special:IRMAConvert|បម្លែងគណនីរបស់អ្នកដើម្បីប្រើ IRMA]]។", # Fuzzy
	'irmanousername' => 'មិនមានអត្តនាមបានបញ្ជាក់ទេ។',
	'irmabadusername' => 'ឈ្មោះមិនត្រឹមត្រូវត្រូវបានបញ្ជាក់',
	'prefs-irma-hide-irma' => 'អាសយដ្ឋាន URL នៃ IRMA របស់អ្នកនៅលើទំព័រអ្នកប្រើប្រាស់របស់អ្នក',
	'irma-hide-irma-label' => 'លាក់IRMAរបស់អ្នកនៅលើទំព័រអ្នកប្រើប្រាស់របស់អ្នក ប្រសិនបើអ្នកកត់ឈ្មោះចូលដោយប្រើIRMA។', # Fuzzy
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 */
$messages['kn'] = array(
	'irmaoptional' => 'ಐಚ್ಛಿಕ',
	'irmanickname' => 'ಉಪನಾಮ',
	'irmalanguage' => 'ಭಾಷೆ',
	'irmatimezone' => 'ಸಮಯ ವಲಯ',
	'irmachoosepassword' => 'ಪ್ರವೇಶಪದ:',
	'irma-urls-delete' => 'ಅಳಿಸು',
);

/** Korean (한국어)
 * @author Devunt
 * @author Ficell
 * @author Kwj2772
 * @author happyday19c
 * @author 아라
 */
$messages['ko'] = array(
	'irma-desc' => '사용자가 [//irma.net/ IRMA]를 통한 로그인을 할 수 있습니다.
또한 위키의 사용자 계정을 통해 IRMA를 지원하는 다른 사이트에도 로그인할 수 있습니다',
	'irmaidentifier' => 'IRMA 식별자',
	'irmalogin' => 'IRMA로 로그인 / 계정 만들기',
	'irmaserver' => 'IRMA 서버',
	'irma-identifier-page-text-user' => '이 문서는 "$1" 사용자에 대한 식별자입니다.',
	'irma-identifier-page-text-different-user' => '이 문서는 $1 사용자 ID에 대한 식별자입니다.',
	'irma-identifier-page-text-no-such-local-irma' => '잘못된 로컬 IRMA 식별자입니다.',
	'irma-server-identity-page-text' => '이 문서는 IRMA 인증을 시작하기 위한 기술적인 IRMA 서버의 문서입니다. 다른 목적은 없습니다.',
	'irmaxrds' => 'Yadis 파일',
	'irmaconvert' => 'IRMA 변환기',
	'irmaerror' => '인증 오류',
	'irmaerrortext' => 'IRMA URL을 인증하는 과정에 오류가 발생했습니다.',
	'irma-error-request-forgery' => '오류가 발생했습니다: 잘못된 토큰을 찾았습니다.',
	'irmaconfigerror' => 'IRMA 설정 오류',
	'irmaconfigerrortext' => '이 위키에 IRMA 저장소 설정이 잘못되었습니다.
[[Special:ListUsers/sysop|{{SITENAME}} 관리자]]에게 문의하시기 바랍니다.',
	'irmapermission' => 'IRMA 권한 오류',
	'irmapermissiontext' => '제공한 IRMA는 이 서버에 로그인할 수 없습니다.',
	'irmacancel' => '인증 취소',
	'irmacanceltext' => 'IRMA URL의 인증이 취소되었습니다.',
	'irmafailure' => '인증 실패',
	'irmafailuretext' => 'IRMA 인증이 실패했습니다. 오류 메시지: "$1"',
	'irmasuccess' => '인증 성공',
	'irmasuccesstext' => "'''성공적으로 인증되었고 $1 사용자로 로그인했습니다'''.

당신의 IRMA는 $2 입니다.

이와 선택적인 추가 IRMA는 사용자 환경 설정의 [[Special:Preferences#mw-prefsection-irma|IRMA 탭]]에서 관리할 수 있습니다.<br />
선택적인 계정 비밀번호는 [[Special:Preferences#mw-prefsection-personal|기본 정보]]에서 추가할 수 있습니다.",
	'irmausernameprefix' => 'IRMA 사용자',
	'irmaserverlogininstructions' => '$2 사용자로서 $1 문서에 비밀번호를 입력하여 $3에 요청하세요. (사용자의 IRMA URL)',
	'irmatrustinstructions' => '$1과 데이터를 공유하려면 체크하세요.',
	'irmaallowtrust' => '$1 사용자가 이 사용자 계정을 허용합니다.',
	'irmanopolicy' => '사이트가 개인정보 정책을 지정하지 않았습니다.',
	'irmapolicy' => '자세한 사항은 <a target="_new" href="$1">개인 정보 보호 정책</a>을 참고하세요.',
	'irmaoptional' => '선택 사항',
	'irmarequired' => '필수',
	'irmanickname' => '별명',
	'irmafullname' => '실명',
	'irmaemail' => '메일 주소',
	'irmalanguage' => '언어',
	'irmatimezone' => '시간대',
	'irmachooselegend' => '사용자 이름과 계정 선택',
	'irmachooseinstructions' => '모든 사용자는 별명을 가져야 합니다.
아래의 옵션 중 하나를 선택할 수 있습니다.',
	'irmachoosenick' => '별명 ($1)',
	'irmachoosefull' => '실명 ($1)',
	'irmachooseurl' => 'IRMA로 부터 선택한 이름 ($1)',
	'irmachooseauto' => '자동 생성된 이름 ($1)',
	'irmachoosemanual' => '선택한 이름:',
	'irmachooseexisting' => '이 위키에 이미 존재하는 계정입니다',
	'irmachooseusername' => '사용자 이름:',
	'irmachoosepassword' => '비밀번호:',
	'irmaconvertinstructions' => '이 양식은 IRMA URL을 통한 로그인을 설정하거나 IRMA URL을 추가하기 위한 곳입니다',
	'irmaconvertoraddmoreids' => 'IRMA로 변환하거나 IRMA URL을 추가합니다',
	'irmaconvertsuccess' => 'IRMA로의 변환이 완료되었습니다',
	'irmaconvertsuccesstext' => 'IRMA를 $1(으)로 성공적으로 변환했습니다.',
	'irma-convert-already-your-irma-text' => '$1 IRMA는 이미 계정에 연결되어 있습니다.',
	'irma-convert-other-users-irma-text' => '$1(은)는 다른 사용자의 IRMA입니다. 다른 사용자의 IRMA를 사용할 수 없습니다.',
	'irmaalreadyloggedin' => '이미 로그인했습니다.',
	'irmaalreadyloggedintext' => "'''$1 계정으로 이미 로그인했습니다!'''

사용자 환경 설정의 [[Special:Preferences#mw-prefsection-irma|IRMA 탭]]에서 IRMA를 관리(보기, 삭제, 추가)할 수 있습니다.",
	'irmanousername' => '사용자 이름을 지정하지 않았습니다.',
	'irmabadusername' => '지정한 사용자 이름이 잘못되었습니다.',
	'irmaautosubmit' => '자바 스크립트가 허용된 경우 자동으로 데이터가 전송됩니다.
만약 자동으로 되지 않는다면 "계속" 버튼을 눌러주세요.',
	'irmaclientonlytext' => '다른 사이트에 IRMA로 이 위키에서 계정을 사용할 수 없습니다.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}}에서는 다양한 웹사이트에서의 Single Sign-On을 지원하는 [//irma.net/ IRMA] 기능을 제공합니다.
IRMA는 다른 많은 웹사이트에서 서로 다른 비밀번호나 사용자 이름을 입력하는 불편없이 편리하게 로그인할 수 있도록 도와줍니다.
(IRMA에 대한 자세한 정보는 [//ko.wikipedia.org/wiki/IRMA 위키백과 IRMA 문서]를 참고하세요.)
다양한 사이트에서 [//irma.net/get/ IRMA 서비스를 제공하며], 이미 사용중인 다른 서비스가 IRMA 서비스 계정을 제공할 수도 있습니다.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}}(은)는 IRMA''로만'' 로그인을 할 수 있습니다.",
	'irmalogininstructions-passwordloginallowed' => '{{SITENAME}}에 계정이 이미 있을 경우 사용하는 사용자 이름과 비밀번호로 [[Special:UserLogin|로그인]]할 수 있습니다.
나중에 IRMA를 사용하려면, 정상적으로 로그인한 후 [[Special:IRMAConvert|계정을 IRMA로 변환]]할 수 있습니다.',
	'irmaupdateuserinfo' => '내 개인 정보를 새로 고침:',
	'irmadelete' => 'IRMA 삭제',
	'irmadelete-text' => '"{{int:irmadelete-button}}" 버튼을 누르시면, [$1 IRMA 정보]를 내 계정으로부터 삭제할 것입니다.
이후 IRMA를 통한 현재 사용자 계정으로의 로그인이 불가능하게 될 것입니다.',
	'irmadelete-button' => '확인',
	'irmadeleteerrornopassword' => '계정에 비밀번호를 설정하지 않았기 때문에 모든 IRMA 계정을 삭제할 수 없습니다.
IRMA 없이 로그인할 수 없습니다.',
	'irmadeleteerrorirmaonly' => 'IRMA를 이용해서만 로그인 할 수 있기 때문에 모든 IRMA 계정을 삭제할 수 없습니다.
IRMA 없이 로그인 할 수 없습니다.',
	'irmadelete-success' => 'IRMA가 내 계정에서 성공적으로 삭제되었습니다.',
	'irmadelete-error' => '사용자 계정으로부터 IRMA 정보를 삭제하는 과정에 오류가 발생했습니다.',
	'irma-irmas-were-not-merged' => 'IRMA가 사용자 계정을 병합하는 동안 병합하지 못했습니다.',
	'prefs-irma' => 'IRMA',
	'prefs-irma-hide-irma' => '사용자 문서에서 IRMA URL',
	'prefs-irma-userinfo-update-on-login' => 'IRMA 사용자 정보 업데이트',
	'prefs-irma-associated-irmas' => '{{SITENAME}}에 로그인한 IRMA',
	'prefs-irma-trusted-sites' => '신뢰하는 사이트',
	'prefs-irma-local-identity' => '다른 사이트에 로그인한 IRMA',
	'irma-hide-irma-label' => '사용자 문서에 IRMA URL을 숨깁니다.',
	'irma-show-irma-url-on-userpage-always' => '사용자 문서를 방문할 때 내 IRMA를 사용자 문서에 항상 보여줍니다.',
	'irma-show-irma-url-on-userpage-never' => '내 IRMA를 사용자 문서에 절대 보여주지 않습니다.',
	'irma-userinfo-update-on-login-label' => '로그인할 때 매번 IRMA 페르소나에서 자동으로 업데이트할 사용자 프로필 정보 필드:',
	'irma-associated-irmas-label' => '현재 연결된 IRMA 계정 목록:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => '동작',
	'irma-urls-registration' => '등록 시간',
	'irma-urls-delete' => '삭제',
	'irma-add-url' => '계정에 새 IRMA 추가하기',
	'irma-trusted-sites-label' => '로그인하기 위해 신뢰하고 IRMA를 사용하는 사이트:',
	'irma-trusted-sites-table-header-column-url' => '신뢰하는 사이트',
	'irma-trusted-sites-table-header-column-action' => '동작',
	'irma-trusted-sites-delete-link-action-text' => '삭제',
	'irma-trusted-sites-delete-all-link-action-text' => '모든 신뢰하는 사이트 삭제',
	'irma-trusted-sites-delete-confirmation-page-title' => '신뢰할 수 있는 사이트 삭제',
	'irma-trusted-sites-delete-confirmation-question' => '"{{int:irma-trusted-sites-delete-confirmation-button-text}}" 버튼을 클릭하면 신뢰하는 사이트의 목록에서 "$1"(을)를 제거합니다.',
	'irma-trusted-sites-delete-all-confirmation-question' => '"{{int:irma-trusted-sites-delete-confirmation-button-text}}" 버튼을 클릭하면 사용자 프로필에서 모든 신뢰하는 사이트를 제거합니다.',
	'irma-trusted-sites-delete-confirmation-button-text' => '확인',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1"(을)를 신뢰하는 사이트의 목록에서 성공적으로 제거했습니다.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => '이전에 신뢰하는 모든 사이트를 사용자 프로필에서 성공적으로 제거했습니다.',
	'irma-local-identity' => '내 IRMA:',
	'irma-login-or-create-account' => '로그인하거나 새 계정 만들기',
	'irma-provider-label-irma' => 'IRMA URL을 입력하세요',
	'irma-provider-label-google' => '구글 계정을 통해 로그인하기',
	'irma-provider-label-yahoo' => '야후 계정을 통해 로그인하기',
	'irma-provider-label-aol' => 'AOL 사용자 이름을 입력하세요',
	'irma-provider-label-wmflabs' => 'Wmflabs 계정을 통해 로그인하기',
	'irma-provider-label-other-username' => '$1 사용자 이름을 입력하세요',
	'specialpages-group-irma' => 'IRMA 서비스 문서와 상태 정보',
	'right-irma-converter-access' => 'IRMA 식별자를 사용하여 계정을 추가하거나 변환할 수 있습니다',
	'right-irma-dashboard-access' => 'IRMA 대시보드에 표준 접근',
	'right-irma-dashboard-admin' => 'IRMA 대시보드에 관리자 접근',
	'action-irma-converter-access' => 'IRMA 식별자를 사용하여 계정을 추가하거나 변환',
	'action-irma-dashboard-access' => 'IRMA 대시보드에 접근',
	'action-irma-dashboard-admin' => 'IRMA 관리자 대시보드에 접근',
	'irma-dashboard-title' => 'IRMA 대시보기',
	'irma-dashboard-title-admin' => 'IRMA 대시보드 (관리자)',
	'irma-dashboard-introduction' => '현재 IRMA 확장 기능 설정 ([$1 도움말])',
	'irma-dashboard-number-irma-users' => 'IRMA 사용자 수',
	'irma-dashboard-number-irmas-in-database' => 'IRMA의 수 (총)',
	'irma-dashboard-number-users-without-irma' => 'IRMA를 사용하지 않는 사용자 수',
);

/** Komi-Permyak (Перем Коми)
 * @author Enye Lav
 */
$messages['koi'] = array(
	'irma-urls-delete' => 'Чышкыны',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'irma-desc' => 'Heh em Wiki met ener [//irma.net/ IRMA] enlogge, un angerschwoh, woh mer IRMA kennt, met enem Metmaacher-Name fun heh fum Wiki enlogge.',
	'irmalogin' => 'Met Dinge IRMA enlogge udder ene Zohjang enreeschte',
	'irmaserver' => 'IRMA Server',
	'irmaxrds' => 'Yadis-Dattei',
	'irmaconvert' => 'IRMA Ömsetzer',
	'irmaerror' => 'Fähler beim Pröfe',
	'irmaerrortext' => 'Ene Fähler es opjetrodde beim Pröfe fun de IRMA URL.',
	'irmaconfigerror' => 'Fähler en dä Aat, wi IRMA opjesaz es',
	'irmaconfigerrortext' => 'Dem IRMA sing Enstellung för Date affzelääje es nit en Odenung.
Beß esu joot un don enem [[Special:ListUsers/sysop|Wiki-Köbes]] dofun verzälle.',
	'irmapermission' => 'Fähler mem Rääsch en IRMA',
	'irmapermissiontext' => 'Met de aanjejovve IRMA darrfs de hee ävver nit enlogge.',
	'irmacancel' => 'Övverpröfung affjebroche',
	'irmacanceltext' => 'De Övverpröfung fun dä IRMA URL woht affjebroche.',
	'irmafailure' => 'Övverpröfung jingk donevve',
	'irmafailuretext' => 'De Pröfung fun de IRMA URL es donevve jejange.
Dä Fähler wohr: „$1“',
	'irmasuccess' => 'De Pröfung hät jeflupp',
	'irmasuccesstext' => "'''Di Pröfung fun dä IRMA URL hät jot jejange. Do be jäz als dä Metmaacher $1 aanjemälldt.'''

Ding IRMA es $2

Di kanns De zosamme met ander IRMAs, wann et se jitt, op dä Sigg [[Special:Preferences#mw-prefsection-irma|IRMA tab]] en Dinge Enschtällonge verwallde.<br />
Do kanns och e Paßwood en Dinge [[Special:Preferences#mw-prefsection-personal|Enschtällong]]endraare lohße, wann De wells.",
	'irmausernameprefix' => 'IRMA Metmaacher',
	'irmaserverlogininstructions' => 'Öm op $3 met IRMA enzelogge jif heh et Paßwoot för Dinge Metmaachername $2 en.
Ding Metmaachersigg hehe un Ding IRMA-URL sinn_er beeds: $1',
	'irmatrustinstructions' => 'Loor, ov De de Date met $1 deile wells.',
	'irmaallowtrust' => 'Donn däm $1 zojestonn, däm Metmaacher ze verdraue.',
	'irmanopolicy' => 'Die Websait udder dä Server hät nix aanjejovve övver der Schotz fun private Date.',
	'irmapolicy' => 'Loor Der de <a target="_new" href="$1">Räjele för der Schotz fun private Date</a> aan, wann De mieh do drövver wesse wels.',
	'irmaoptional' => 'Nit nüdesch',
	'irmarequired' => 'Nüdesch',
	'irmanickname' => 'Spetznam',
	'irmafullname' => 'Der janze Name', # Fuzzy
	'irmaemail' => 'De e-mail Address',
	'irmalanguage' => 'Schprooch',
	'irmatimezone' => 'Ziggzohn',
	'irmachooselegend' => 'Ußwahl vum Metmaacher un Zohjang singem Name',
	'irmachooseinstructions' => 'Jede Metmaacher bruch enne Spetznam,
Do kannß Der der Dinge unge druß üßsöke.',
	'irmachoosenick' => 'Dinge Spezname ($1)',
	'irmachoosefull' => 'Dinge komplätte Name ($1)', # Fuzzy
	'irmachooseurl' => 'Enne Name uß Dinge IRMA eruß jejreffe ($1)',
	'irmachooseauto' => 'Enne automattesch zerääsch jemaate Name ($1)',
	'irmachoosemanual' => 'Ene Name, dä De Der sellver ußjedaach un jejovve häs:',
	'irmachooseexisting' => 'Ene Metmaachername, dä et alld jitt heh em Wiki',
	'irmachooseusername' => 'Metmaacher_Naame:',
	'irmachoosepassword' => 'Paßwoot:',
	'irmaconvertinstructions' => 'He kanns De Ding Aanmeldung als ene Metmaacher esu aanpasse, dat De en <i lang="en">IRMA</i> <i lang="en">URL</i> bruche kanns.
Do kanns och noch mieh <i lang="en">IRMA</i> <i lang="en">URLs</i> dobei donn.',
	'irmaconvertoraddmoreids' => 'Op <i lang="en">IRMA</i> ömshtelle, udder en <i lang="en">IRMA URL</i> dobei donn',
	'irmaconvertsuccess' => 'De Aanpassung aan IRMA hät jeklapp',
	'irmaconvertsuccesstext' => 'Do häß Ding IRMA jez ömjewandelt noh $1.',
	'irma-convert-already-your-irma-text' => 'Dat es ald Ding IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Dat wämm anders sing IRMA.', # Fuzzy
	'irmaalreadyloggedin' => 'Do bes alt enjelogg.',
	'irmaalreadyloggedintext' => "Leeven $1, Do bes alld enjelogg.'''

Do kanns Ding IRMA op dä Sigg [[Special:Preferences#mw-prefsection-irma|met  Dinge Enschtällong, onger IRMA]] verwallde, also beloore, fottschmiiße, un mieh.",
	'irmanousername' => 'Keine Metmaacher-Name aanjejovve.',
	'irmabadusername' => 'Ene kapodde Metmaacher-Name aanjejovve.',
	'irmaautosubmit' => 'Di Sigg enthääld_e Fomulaa för Ennjave, wat automattesch afjeschek weed, wann de Javaskrip enjeschalldt häs.
Wann nit, donn dä "Continue" (Wigger) Knopp nemme.',
	'irmaclientonlytext' => 'Do kann de Aanmelldunge fun hee dämm Wiki nit als <span lang="en">IRMAs</span> op annder Webßöövere nämme.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{ucfirst:{{GRAMMAR:Nominativ|{{SITENAME}}}}}} ongerstöz der <span lang="en">[//irma.net/ IRMA]</span> Standat för et eijfache un eijmoolije Enlogge zwesche diverse Websigge.
<span lang="en">IRMA</span> määd_et müjjesch, dat mer op ongerscheedlijje Websigge enlogge kann, oohne dat mer övverall en annder Paßwoot bruch.
Loor Der [//ksh.wikipedia.org/wiki/IRMA der Wikipedia ier Atikkel övver <span lang="en">IRMA</span>] aan, do steit noch mieh dren.

Wann de {{GRAMMAR:em|{{SITENAME}}}} alld aanjemeldt bes, dann kanns De met Dingem Metmaacher-Name un Paßwoot [[Special:UserLogin|enlogge]] wi sönß och.
Öm spääder och <span lang="en">IRMA</span> ze bruche, kann noh_m nomaale Enlogge Ding Aanmeldungsdate [[Special:IRMAConvert|op <span lang="en">IRMA</span> ömstelle]].

Et jitt en jruuße Zahl [http://wiki.irma.net/Public_IRMA_providers <span lang="en">IRMA Provider</span> för de Öffentleschkeit], un et künnt joot sin, dat De alld ene <span lang="en">IRMA</span>-fä\'ijje Zojang häß, op däm eine udder andere Server.
<!--
; Annder Wikis : Wann De op enem Wiki aanjemelldt bes, wat <span lang="en">IRMA</span> ongerschtöz, zem Beispöll [//wikitravel.org/ Wikitravel], [//www.wikihow.com/ wikiHow], [//vinismo.com/ Vinismo], [//aboutus.org/ AboutUs] udder [//kei.ki/ Keiki], kanns de hee op de {{SITENAME}} enlogge, indämm dat De de komplätte URL fun Dinge Metmaacher-Sigg op däm aandere Wiki hee bovve endrähß. Zem Beispöll esu jät wi: \'\'<nowiki>//kei.ki/en/User:Evan</nowiki>\'\'.
; [//irma.yahoo.com/ Yahoo!] : Wann De bei <span lang="en">Yahoo!</span> aanjemelldt bes, kanns de hee {{GRAMMAR:em|{{SITENAME}}}} enlogge, indämm dat De de Ding <span lang="en">IRMA URL</span> bovve aanjiß, di De fun <span lang="en">Yahoo!</span> bekumme häß. Di <span lang="en">IRMA URLs</span> sinn uß wi zem Beispöll: \'\'<nowiki>https://me.yahoo.com/DingeMetmaacherName</nowiki>\'\'.
; [//dev.aol.com/aol-and-63-million-irmas AOL] : Wann de ene zohjang op [//www.aol.com/ AOL] häß, esu jet wie ennen Zojang zom [//www.aim.com/ AIM], do kanns de Desch hee {{GRAMMAR:em|{{SITENAME}}}} enlogge, indämm dat De de Ding <span lang="en">IRMA</span> bovve enjiß. De <span lang="en">IRMA URLs</span> fun AOL sen opjebout wi \'\'<nowiki>//irma.aol.com/dingemetmaachername</nowiki>\'\'. Dinge Metmaacher-Name sullt uß luuter Kleinbochstave bestonn, kein Zwescheräum.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-irma-provider.html Blogger], [//faq.wordpress.com/2007/03/06/what-is-irma/ Wordpress.com], [//www.livejournal.com/irma/about.bml LiveJournal], [//bradfitz.vox.com/library/post/irma-for-vox.html Vox] : Wann de e <span lang="en">Blog</span> op einem fun dä Söövere häß, dann draach der Url fu Dingem <span lang="en">Blog</span> bovve en. Zem Beispöll: \'\'<nowiki>//dingeblogname.blogspot.com/</nowiki>\'\', \'\'<nowiki>//dingeblogname.wordpress.com/</nowiki>\'\', \'\'<nowiki>//dingeblogname.livejournal.com/</nowiki>\'\', udder \'\'<nowiki>//dingeblogname.vox.com/</nowiki>\'\'.
<!-- -->', # Fuzzy
	'irmalogininstructions-irmaloginonly' => 'Op {{GRAMMAY:Dative|{{SITENAME}}}} kam_mer sesch bloß met IRMA enlogge.',
	'irmalogininstructions-passwordloginallowed' => 'Wann De ald ene Zohjang op {{GRAMMAR:Dative|{{SITENAME}}}}, kann De Desch janz nommaal met Dingem Metmaacher-Naame un Dingem Paßwoot [[Special:UserLogin|enlogge]].
Öm könftesch Ding IRMA zom Enlogge ze nämme, kanns De [[Special:IRMAConvert|Dinge Zohang op IRMA ömschtälle]], nohdämm De enjelogg bes.',
	'irmaupdateuserinfo' => 'Donn ming päsöönlijje Enstellunge op der neuste Stand bränge:',
	'irmadelete' => 'Donn de <i lang="en">IRMA</i> fott schmiiße',
	'irmadelete-text' => 'Wann De op dä Knopp „{{int:irmadelete-button}}“ klecks, weed de <i lang="en">IRMA</i> „$1“ vun Dinge Aanmeldung heh fott jenumme.
Dann kanns De met dä <i lang="en">IRMA</i> nit mieh heh enlogge.',
	'irmadelete-button' => 'Lohß jonn!',
	'irmadeleteerrornopassword' => 'Do kanns nit all Ding <i lang="en">IRMA</i>s fott schmieße, weil Dinge Zohjang kei Paßwoot hät.
Ohne <i lang="en">IRMA</i> künnts De nit mieh enlogge.',
	'irmadeleteerrorirmaonly' => 'Do kanns nit all Ding <i lang="en">IRMA</i>s fott schmieße, weil De bloß met <i lang="en">IRMA</i>  enlogge darfß, un ohne <span i="en">IRMA</i> künnts De jaa nit mieh enlogge.',
	'irmadelete-success' => 'Di <i lang="en">IRMA</i> es jäz nit mieh met Dinge Aanmeldung verbonge.',
	'irmadelete-error' => 'Et es ene Fähler opjetrodde, wi mer di <i lang="en">IRMA</i> vun Dinge Aanmeldung fott nämme wullte.',
	'prefs-irma' => '<i lang="en">IRMA</i>',
	'prefs-irma-hide-irma' => 'Versteich Ding IRMA op Dinge Metmaacher-Sigg, wann de met <span lang="en">IRMA</span> enloggs.',
	'irma-hide-irma-label' => 'Versteich Ding IRMA op Dinge Metmaacher-Sigg, wann de met <span lang="en">IRMA</span> enloggs.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Donn jedesmol wann_esch hee enloggen, di Enfomazjuhne övver mesch heh noh vun <i lang="en">IRMA</i> op der neuste Stand bränge:', # Fuzzy
	'irma-associated-irmas-label' => 'De <i lang="en">IRMAs</i>, di jez met Dinge Aanmeldung heh verbonge sin:',
	'irma-urls-url' => 'de URL',
	'irma-urls-action' => 'Akßuhn',
	'irma-urls-registration' => 'Aanjemeldt zick',
	'irma-urls-delete' => 'Schmiiß fott',
	'irma-add-url' => 'Donn en neu <i lang="en">IRMA</i> dobei', # Fuzzy
	'irma-login-or-create-account' => 'Donn enlogge udder Desch neu aanmellde',
	'irma-provider-label-irma' => 'Donn Ding <i lang="en">IRMA</i> URL aanjevve',
	'irma-provider-label-google' => 'Donn met Dingem <i lang="en">Google account</i> enlogge',
	'irma-provider-label-yahoo' => 'Donn met Dinge <i lang="en">Yahoo</i> Kennung enlogge',
	'irma-provider-label-aol' => 'Donn met Dingem <i lang="en">AOL</i>-Name enlogge',
	'irma-provider-label-other-username' => 'Donn Dinge Metmaachername vun $1 aanjevve',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 */
$messages['ku-latn'] = array(
	'irmalanguage' => 'Ziman',
	'irmatimezone' => 'Navçeya demê',
	'irmachooseusername' => 'Navê bikarhêner:',
	'irma-trusted-sites-delete-link-action-text' => 'Jê bibe',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'irma-desc' => "Sech an d'Wiki matt enger [//irma.net/ IRMA] aloggen, a sech op aneren Internetsiten, déi IRMA ënerstetzen, matt engem Wiki-Benotzerkont aloggen.",
	'irmalogin' => 'Umellen /IRMA-Benotzerkont uleeën',
	'irmaserver' => 'IRMA-Server',
	'irmaxrds' => 'Yadis Fichier',
	'irmaconvert' => 'IRMA-Ëmwandler',
	'irmaerror' => 'Feeler bei der Iwwerpréifung',
	'irmaerrortext' => 'Beim Iwwerpréifen vun der IRMA URL ass e Feeler geschitt.',
	'irmaconfigerror' => 'OpenId-Konfiguratiounsfeeler',
	'irmaconfigerrortext' => "D'IRMA-Späicherastellung fir dës Wiki ass falsch.
Kontaktéiert w.e.g. een [[Special:ListUsers/sysop|Administrateur]].",
	'irmapermission' => 'IRMA-Autorisatiounsfeeler',
	'irmapermissiontext' => "D'OpeniD déi Dir uginn hutt ass net erlaabt fir sech op dëse Server anzeloggen.",
	'irmacancel' => 'Iwwerpréifung ofgebrach',
	'irmacanceltext' => "D'Iwwerpréifung vun der IRMA-URL gouf ofgebrach",
	'irmafailure' => 'Feeler bei der Iwwerpréifung',
	'irmafailuretext' => 'D\'iwwerpréifung vun der OpeniD URL huet net fonctionnéiert. Feeler Message: "$1"',
	'irmasuccess' => 'Iwwerpréifung huet geklappt',
	'irmasuccesstext' => "'''D'Iwwerpréifung an d'Aloggen als Benotzer $1 huet geklappt'''.

Är IRMA ass $2.

Dës a weider OpenId'en, , kann am [[Special:Preferences#mw-prefsection-irma|IRMA Tab]] vun Ären Astellungen geréiert ginn.<br />
En optionaalt Passwuert fir de Benotzerkont kann an Ärem [[Special:Preferences#mw-prefsection-personal|Benotzerprofil]] derbäigesat ginn.",
	'irmausernameprefix' => 'IRMABenotzer',
	'irmaserverlogininstructions' => '$3 freet datt Dir Äert Passwuert agitt fir Är $2-Benotzersäit $1 (dëst ass Är IRMA URL).',
	'irmatrustinstructions' => 'Klickt un wann Dir Donnéeën mat $1 deele wellt.',
	'irmaallowtrust' => 'Erlaabt $1 fir dësem Benotzerkont ze vertrauen.',
	'irmanopolicy' => 'De Site huet keng Richtlinne fir den Dateschutz uginn.',
	'irmapolicy' => 'Fir méi Informatiounen <a target="_new" href="$1">kuckt d\'Dateschutzrichtlinnen</a>.',
	'irmaoptional' => 'Facultatif',
	'irmarequired' => 'Obligatoresch',
	'irmanickname' => 'Spëtznumm',
	'irmafullname' => 'Richtegen Numm',
	'irmaemail' => 'E-Mail-Adress',
	'irmalanguage' => 'Sprooch',
	'irmatimezone' => 'Zäitzone',
	'irmachooselegend' => 'Eraussiche vum Benotzernumm a vum Benotzerkont',
	'irmachooseinstructions' => 'All Benotzer brauchen e Spëtznumm; Dir kënnt iech ee vun de Méiglechkeeten ënnendrënner auswielen.',
	'irmachoosenick' => 'Äre Spëtznumm ($1)',
	'irmachoosefull' => 'Äre richtegen Numm ($1)',
	'irmachooseurl' => 'En Numm gouf vun ärer IRMA ($1) geholl',
	'irmachooseauto' => 'En Numm deen automatesch generéiert gouf ($1)',
	'irmachoosemanual' => 'En Numm vun Ärer Wiel:',
	'irmachooseexisting' => 'E Benotzerkont deen et op dëser Wiki gëtt',
	'irmachooseusername' => 'Benotzernumm:',
	'irmachoosepassword' => 'Passwuert:',
	'irmaconvertinstructions' => "Mat dësem Formulaire kënnt dir Äre Benotzerkont ännere fir eng IRMA URL ze benotzen oder méi IRMA URL'en derbäizesetzen.",
	'irmaconvertoraddmoreids' => 'An en IRMA ëmwandelen oder eng aner IRMA URL derbäisetzen',
	'irmaconvertsuccess' => 'An en IRMA-Benotzerkont ëmgewandelt',
	'irmaconvertsuccesstext' => 'Dir hutt Är IRMA op $1 ëmgewandelt.',
	'irma-convert-already-your-irma-text' => "D'IRMA $1 ass scho mat Ärem Benotzerkont verbonn.",
	'irma-convert-other-users-irma-text' => "$1 ass engem anere seng IRMA. Dir kënnt d'IRMA vun engem anere Benotzer benotzen.",
	'irmaalreadyloggedin' => 'Dir sidd schonn ageloggt.',
	'irmanousername' => 'Kee Benotzernumm uginn.',
	'irmabadusername' => 'Falsche Benotzernumm uginn.',
	'irmaautosubmit' => 'Op dëser Säit gëtt et e Formulaire deen automatesch soll verschéckt ginn wann Dir JavaScript ageschalt hutt.
Wann net, da verich et mam Knäppche "Continue" (Weider).',
	'irmaclientonlytext' => 'Dir kënnt keng Benotzerkonten aus dëser Wiki als OpendIDen op anere Site benotzen.',
	'irmaloginlabel' => 'URL vun der IRMA',
	'irmalogininstructions' => '{{SITENAME}} ënnerstëtzt den [//irma.net/ IRMA]-Standard fir eng eenheetlech Umeldung fir méi Websäiten.
IRMA mellt Iech bäi ville verschiddene Websäiten un, ouni datt Dir fir jiddwer Säiten een anert Passwuert gebrauche musst.
(Méi Informatiounen fannt Dir am [//de.wikipedia.org/wiki/IRMA Wikipedia-Artikel iwwer IRMA].)


Et gëtt vill [//irma.net/get/ IRMA-Provider] a méiglecherweis hutt Dir schonn e Benotzerkont mat aktivéierter IRMA bäi engem aneren Ubidder.',
	'irmalogininstructions-irmaloginonly' => 'Op {{SITENAME}} kann ee sech "nëmme" mat IRMA aloggen.',
	'irmaupdateuserinfo' => 'Meng perséinlech Informatiounen aktualiséieren:',
	'irmadelete' => 'IRMA läschen',
	'irmadelete-text' => 'Wann Dir op de Knäppchen "{{int:irmadelete-button}}" klickt, dann huelt Dir d\'IRMA $1 vun Ärem Benotzerkont ewech.
Da kënnt Dir Iech net méi mat dëser IRMA aloggen.',
	'irmadelete-button' => 'Confirméieren',
	'irmadeleteerrornopassword' => 'Dir kënnt net all Är IRMAe läschen well Äre Benotzerkont kee Paswuert huet.
Dir kéint Iech net ouni eng IRMA aloggen.',
	'irmadeleteerrorirmaonly' => 'Dir kënnt net all Är IRMAe läsche well Dir Iech nëmme mat IRMA aloggen däerft.
Dir kéint Iech ouni IRMA net aloggen.',
	'irmadelete-success' => "D'IRMA gouf vun Ärem Benotzerkont ewechgeholl",
	'irmadelete-error' => 'Beim Ewehhuele vun der IRMA vun Ärem Benotzerkont ass e Feeler geschitt.',
	'prefs-irma-hide-irma' => 'Verstoppt Är IRMA op ärer Benotzersäit, wann Dir Iech mat IRMA aloggt.',
	'prefs-irma-trusted-sites' => 'Siten, deenen Dir traut',
	'irma-hide-irma-label' => 'Verstoppt Är IRMA URL op ärer Benotzersäit.',
	'irma-userinfo-update-on-login-label' => "D'Informatioune vum Benotzerprofil vun dësem IRMA-Kont ginn all Kéier aktualiséiert wann Dir Iech aloggt:",
	'irma-associated-irmas-label' => 'OpendIden déi mat Ärem Benotzerkont asoziéiert sinn',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Aktioun',
	'irma-urls-delete' => 'Läschen',
	'irma-add-url' => 'Eng nei IRMA bäi Äre Benotzerkont derbäisetzen',
	'irma-trusted-sites-label' => 'Siten deenen Dir traut an op deenen Dir IRMA benotzt hutt fir Iech anzeloggen:',
	'irma-trusted-sites-table-header-column-url' => 'Siten, deenen Dir traut',
	'irma-trusted-sites-table-header-column-action' => 'Aktioun',
	'irma-trusted-sites-delete-link-action-text' => 'Läschen',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirméieren',
	'irma-local-identity' => 'Är IRMA:',
	'irma-login-or-create-account' => 'Loggt Iech an oder maacht en neie Benotzerkont op',
	'irma-provider-label-irma' => 'Gitt Är IRMA URL un',
	'irma-provider-label-google' => 'Loggt Iech mat Ärem Goggle-Benotzerkont an',
	'irma-provider-label-yahoo' => 'Loggt Iech mat Ärem Yahoo-Benotzerkont an',
	'irma-provider-label-aol' => 'Gitt Ären AOL Numm un',
	'irma-provider-label-other-username' => 'Gitt Äre(n) $1 Benotzernumm un',
	'irma-dashboard-number-irma-users' => 'Zuel vun de Benotzer mat IRMA',
	'irma-dashboard-number-users-without-irma' => 'Zuel vun de Benotzer ouni IRMA',
);

/** Limburgish (Limburgs)
 * @author Ooswesthoesbes
 */
$messages['li'] = array(
	'irmachoosepassword' => 'Wachwaord:',
);

/** Lingala (lingála)
 * @author Eruedin
 */
$messages['ln'] = array(
	'irmaemail' => 'Adɛlɛ́sɛ-ímɛ́lɛ:',
	'irmalanguage' => 'Lokótá',
	'irmachooseusername' => 'Nkómbó ya mosáleli:',
	'irmachoosepassword' => 'Banda nayó:',
	'irmadelete-button' => 'Kondima',
	'irma-urls-delete' => 'Kolímwisa',
);

/** Lithuanian (lietuvių)
 * @author Garas
 * @author Hugo.arg
 */
$messages['lt'] = array(
	'irmaerror' => 'Tikrinimo klaida',
	'irmanickname' => 'Slapyvardis',
	'irmafullname' => 'Visas vardas', # Fuzzy
	'irmaemail' => 'El. pašto adresas',
	'irmalanguage' => 'Kalba',
	'irmachoosepassword' => 'Slaptažodis:',
);

/** Latvian (latviešu)
 * @author GreenZeb
 */
$messages['lv'] = array(
	'irmachooseusername' => 'Lietotājvārds:',
	'irmachoosepassword' => 'Parole:',
);

/** Eastern Mari (олык марий)
 * @author Сай
 */
$messages['mhr'] = array(
	'irmachoosepassword' => 'Шолыпмут:',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'irma-desc' => 'Најавувајте се на викито со [//irma.net/ IRMA], и најавувајте се со други IRMA-поддржни страници со вики-корисничка сметка',
	'irmaidentifier' => 'IRMA-назнака',
	'irmalogin' => 'Најава / создај сметка со IRMA',
	'irmaserver' => 'IRMA опслужувач',
	'irma-identifier-page-text-user' => 'Оваа страница е назнака на корисникот „$1“',
	'irma-identifier-page-text-different-user' => 'Страницава е назнаката на корисникот со назнака $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Ова е неважечка локална IRMA-назнака.',
	'irma-server-identity-page-text' => 'Ова е техничка страница на опслужувачот на IRMA што се однесува на започнувањето на заверката. Страницата нема друга цел.',
	'irmaxrds' => 'Yadis податотека',
	'irmaconvert' => 'IRMA претворач',
	'irmaerror' => 'Грешка при потврдувањето',
	'irmaerrortext' => 'Настана грешка при потврдувањето на URL адресата на IRMA.',
	'irma-error-no-auth' => 'Се појави неукажана грешка во одговорот на/барањето за заверка при проверката на URL-адресата $1 за IRMA.',
	'irma-error-server-response' => "Се појави грешка при заверката на URL-адресата $1 за IRMA.

Опслужувачот одговори: ''$2''",
	'irma-error-request-forgery' => 'Се појави грешка: пронајдена е неважечка шифра.',
	'irma-error-wrong-force-provider-setting' => 'Се појави внатрешна грешка: пронајдена е неисправна вердност на URL за наметнатиот услужник „$1“.',
	'irma-error-irma-convert-not-allowed-forced-provider' => "Не можете да поврзувате повеќе IRMA-ја со сметката бидејќи можете да го користите само ''„наметнатиот“'' услужник за IRMA „$1“ за најавите на ова вики.",
	'irmaconfigerror' => 'Грешка со конфигурацијата на IRMA',
	'irmaconfigerrortext' => 'Складишните посатвки на IRMA за ова вики се погрешни.
Консултирајте [[Special:ListUsers/sysop|администратор]].',
	'irmapermission' => 'Грешка при дозволување на IRMA',
	'irmapermissiontext' => 'На внесениот IRMA не му е дозволено најавување на овој опслужувач.',
	'irmacancel' => 'Потврдувањето е откажано',
	'irmacanceltext' => 'Потврдувањето на URL адресата на IRMA беше откажана.',
	'irmafailure' => ' Потврдувањето не успеа',
	'irmafailuretext' => 'Потврдувањето на URL адресата на IRMA не успеа. Извештај за грешката: „$1“',
	'irmasuccess' => 'Потврдувањето успеа',
	'irmasuccesstext' => "'''Проверката е успешна. Најавени сте како корисник $1'''.

Вашиот IRMA гласи $2 .

Можете да раководите со ова и други незадолжителни IRMA-ја во [[Special:Preferences#mw-prefsection-irma|јазичето за IRMA]] во вашите нагодувања.<br />
По желба можете да додадете и лозинка на сметката во вашиот [[Special:Preferences#mw-prefsection-personal|корисничкиот профил]].",
	'irmausernameprefix' => 'IRMAКорисник',
	'irmaserverlogininstructions' => '$3 бара да ја внесете лозинката за вашиот корисник $2 страница $1 (IRMA URL)',
	'irmatrustinstructions' => 'Штиклирајте ако сакате да споделувате податоци со $1.',
	'irmaallowtrust' => 'Дозволи му на $1 да ѝ верува на оваа корисничка сметка.',
	'irmanopolicy' => 'Страницата нема назначено заштита на личните податоци.',
	'irmapolicy' => 'Погледајте го <a target="_new" href="$1">правилникот за приватност</a> за повеќе информации.',
	'irmaoptional' => 'Незадолжително',
	'irmarequired' => 'Задолжително',
	'irmanickname' => 'Прекар',
	'irmafullname' => 'Вистинско име',
	'irmaemail' => 'Е-пошта',
	'irmalanguage' => 'Јазик',
	'irmatimezone' => 'Часовен појас',
	'irmachooselegend' => 'Избор на корисничко име и сметка',
	'irmachooseinstructions' => 'Сите корисници треба да имаат прекар;
можете да изберете едно од долунаведените предлози:',
	'irmachoosenick' => 'Вашиот прекар ($1)',
	'irmachoosefull' => 'Вашето вистинско име ($1)',
	'irmachooseurl' => 'Име преземено од вашиот IRMA ($1)',
	'irmachooseauto' => 'Автоматски создадено име ($1)',
	'irmachoosemanual' => 'Име по избор:',
	'irmachooseexisting' => 'Постоечка сметка на ова вики',
	'irmachooseusername' => 'корисничко име:',
	'irmachoosepassword' => 'Лозинка:',
	'irmaconvertinstructions' => 'Овој образец ви овозможува да ја промените вашата корисничка сметка за да користи IRMA URL адреса или да додавате уште IRMA URL адреси',
	'irmaconvertoraddmoreids' => 'Претворете во IRMA или додајте друга IRMA URL адреса',
	'irmaconvertsuccess' => 'Претворањето во IRMA е успешно',
	'irmaconvertsuccesstext' => 'Успешно го претворивте вашиот IRMA во $1.',
	'irma-convert-already-your-irma-text' => 'Назнаката $1 на IRMA е веќе здружена со вашата сметка.',
	'irma-convert-other-users-irma-text' => '$1 е туѓа назнака од IRMA. Не можете да користите назнаки на други корисници.',
	'irmaalreadyloggedin' => 'Веќе сте најавени.',
	'irmaalreadyloggedintext' => "'''Веќе сте најавени, $1!'''

Можете да раководите со (погледате, избришете, додавате повеќе) IRMA-ја во [[Special:Preferences#mw-prefsection-irma|јазичето за IRMA]] во вашите нагодувања",
	'irmanousername' => 'Немате наведено корисничко име.',
	'irmabadusername' => 'Беше назначено грешно име.',
	'irmaautosubmit' => 'На оваа страница стои образец кој треба да се поднесе автоматски ако имате овозможено JavaScript.
Ако ова не се случи, притиснете на копчето "Continue" (Продолжи).',
	'irmaclientonlytext' => 'Не можете да користите сметки од ова вики како IRMA за друго мрежно место.',
	'irmaloginlabel' => 'IRMA URL адреса',
	'irmalogininstructions' => '{{SITENAME}} го поддржува [//irma.net/ IRMA] - стандард за една сметка за најава на разни мрежни места.
IRMA ви овозможува да се најавувате на многу различни мрежни места без да ви треба различна лозинка за секое поединечно.
(Повеќе информации на [//mk.wikipedia.org/wiki/IRMA статијата за IRMA на Википедија].)
Постојат многу [//irma.net/get/ услужници за IRMA]. Можеби веќе имате сметка со овозможено IRMA на друга служба.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''само'' ви овозможува да се најавувате со IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Ако веќе имате сметка на {{SITENAME}}, можете да се [[Special:UserLogin|најавите]] со корисничкото име и лозинката по редовен пат.
За да користите IRMA во иднина, [[Special:IRMAConvert|претворете ја вашата сметка во IRMA]] откако ќе се најавите нормално.',
	'irmaupdateuserinfo' => 'Поднови ги моите лични информации:',
	'irmadelete' => 'Избриши го овој IRMA',
	'irmadelete-text' => 'Со кликнување на копчето „{{int:irmadelete-button}}“ ќе го отстраните IRMA $1 од вашата сметка.
Повеќе нема да можете да се најавувате со овој IRMA.',
	'irmadelete-button' => 'Потврди',
	'irmadeleteerrornopassword' => 'Не можете да ги избришете сите ваши IRMA-ја бидејќи вашата сметка нема лозинка.
Ако немате IRMA нема да можете да се најавите.',
	'irmadeleteerrorirmaonly' => 'Не можете да ги избришете сите ваши IRMA-ја бидејќи дозволено ви е да се најавувате само со IRMA.
Ако немате IRMA нема да можете да се најавите.',
	'irmadelete-success' => 'Овој IRMA е успешно отстранет од вашата сметка.',
	'irmadelete-error' => 'Настана грешка при отстранувањето на IRMA од вашата сметка.',
	'irma-irmas-were-not-merged' => 'IRMA-јата не се споија при спојувањето на корисничките сметки.',
	'prefs-irma-hide-irma' => 'Скријте ја вашата IRMA URL адреса на вашата корисничката страница, ако се најавувате со IRMA.',
	'prefs-irma-userinfo-update-on-login' => 'Поднова на информациите на корисник на IRMA',
	'prefs-irma-associated-irmas' => 'Вашите IRMA-сметки за најавување на {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Мрежни места од доверба',
	'prefs-irma-local-identity' => 'Вашиот IRMA за најава на други мрежни места',
	'irma-hide-irma-label' => 'Скриј ја адресата на мојот IRMA на корисничката страница.',
	'irma-show-irma-url-on-userpage-always' => 'Вашиот IRMA секогаш стои на корисничката страница кога ќе ја посетите.',
	'irma-show-irma-url-on-userpage-never' => 'Вашиот IRMA никогаш не се прикажува на корисничката страница.',
	'irma-userinfo-update-on-login-label' => 'Полињата за профилни информации што автоматски се подновуваат од IRMA-сметката секојпат кога ќе се најавите:',
	'irma-associated-irmas-label' => 'IRMA поврзани со вашата сметка:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Дејство',
	'irma-urls-registration' => 'Време на регистрација',
	'irma-urls-delete' => 'Избриши',
	'irma-add-url' => 'Додај нов IRMA кон сметката',
	'irma-trusted-sites-label' => 'Мрежните места на коишто им верувате и кајшто го имате користено вашиот IRMA за најава:',
	'irma-trusted-sites-table-header-column-url' => 'Мрежни места од доверба',
	'irma-trusted-sites-table-header-column-action' => 'Дејство',
	'irma-trusted-sites-delete-link-action-text' => 'Избриши',
	'irma-trusted-sites-delete-all-link-action-text' => 'Избриши ги сите доверливи мреж. места',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Бришење на доверливи мреж. места',
	'irma-trusted-sites-delete-confirmation-question' => 'Стискајќи на копчето „{{int:irma-trusted-sites-delete-confirmation-button-text}}“ ќе го отстраните „$1“ од списокот на мрежни места од доверба.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Стискајќи на копчето „{{int:irma-trusted-sites-delete-confirmation-button-text}}“ ќе ги сите мрежни места од доверба што се наведени на профилот.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Потврди',
	'irma-trusted-sites-delete-confirmation-success-text' => '„$1“ е успешно отстрането од списокот на доверливи мрежни места.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Сите мрежни места од доверба се успешно отстранети од списокот на профилот.',
	'irma-local-identity' => 'Вашиот IRMA:',
	'irma-login-or-create-account' => 'Најавете се или создајте нова сметка',
	'irma-provider-label-irma' => 'Внесете ја вашата IRMA URL адреса',
	'irma-provider-label-google' => 'Најавете се со вашата сметка на Google',
	'irma-provider-label-yahoo' => 'Најавете се со вашата сметка на Google',
	'irma-provider-label-aol' => 'Внесете го вашето име на AOL',
	'irma-provider-label-wmflabs' => 'Најавете се со вашата сметка на Wmflabs',
	'irma-provider-label-other-username' => 'Внесете го вашето $1 корисничко име',
	'specialpages-group-irma' => 'Службени страници и статусни информации на IRMA',
	'right-irma-converter-access' => 'Може да ја додава или претвора својата сметка за употреба на IRMA-идентитети',
	'right-irma-dashboard-access' => 'Стандарден пристап до таблата на IRMA',
	'right-irma-dashboard-admin' => 'Администраторски пристап до таблата на IRMA',
	'action-irma-converter-access' => 'додавање или претворање на вашата сметка за да користи идентитети со IRMA',
	'action-irma-dashboard-access' => 'пристап на контролната табла на IRMA',
	'action-irma-dashboard-admin' => 'пристап на администраторската контролна табла на IRMA',
	'irma-dashboard-title' => 'Табла на IRMA',
	'irma-dashboard-title-admin' => 'Табла на IRMA (администратор)',
	'irma-dashboard-introduction' => 'Тековни нагодувања на додатокот за IRMA ([$1 помош])',
	'irma-dashboard-number-irma-users' => 'Број на корисници со IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Број на IRMA-ја (вкупно)',
	'irma-dashboard-number-users-without-irma' => 'Број на корисници без IRMA',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'irmalogin' => 'ഓപ്പൺ ഐ.ഡി. ഉപയോഗിച്ച് ലോഗിൻ ചെയ്യുക', # Fuzzy
	'irmaserver' => 'IRMA സെർ‌വർ',
	'irmacancel' => 'സ്ഥിരീകരണം റദ്ദാക്കിയിരിക്കുന്നു',
	'irmafailure' => 'സ്ഥിരീകരണം പരാജയപ്പെട്ടു',
	'irmasuccess' => 'സ്ഥിരീകരണം വിജയിച്ചു',
	'irmausernameprefix' => 'ഓപ്പൺ ഐ.ഡി. ഉപയോക്താവ്',
	'irmaserverlogininstructions' => '$3യിലേക്ക് $2 എന്ന ഉപയോക്താവായി (ഉപയോക്തൃതാൾ $1) ലോഗിൻ ചെയ്യുവാൻ താങ്കളുടെ രഹസ്യവാക്ക് താഴെ രേഖപ്പെടുത്തുക.', # Fuzzy
	'irmatrustinstructions' => '$1 താങ്കളുടെ ഡാറ്റ പങ്കുവെക്കണമോ എന്ന കാര്യം പരിശോധിക്കുക.',
	'irmanopolicy' => 'സൈറ്റ് സ്വകാര്യതാ നയം കൊടുത്തിട്ടില്ല.',
	'irmaoptional' => 'നിർബന്ധമില്ല',
	'irmarequired' => 'അത്യാവശ്യമാണ്‌',
	'irmanickname' => 'ചെല്ലപ്പേര്',
	'irmafullname' => 'പൂർണ്ണനാമം', # Fuzzy
	'irmaemail' => 'ഇമെയിൽ വിലാസം',
	'irmalanguage' => 'ഭാഷ',
	'irmatimezone' => 'സമയ മേഖല',
	'irmachooselegend' => 'ഐച്ഛിക ഉപയോക്തൃനാമം', # Fuzzy
	'irmachooseinstructions' => 'എല്ലാ ഉപയോക്താക്കൾക്കും ഒരു വിളിപ്പേരു ആവശ്യമാണ്‌. താഴെ കൊടുത്തിരിക്കുന്നവയിൽ നിന്നു ഒരെണ്ണം താങ്കൾക്ക് തിരഞ്ഞെടുക്കാവുന്നതാണ്‌.',
	'irmachoosenick' => 'താങ്കളുടെ വിളിപ്പേര് ($1)',
	'irmachoosefull' => 'താങ്കളുടെ പൂർണ്ണനാമം ($1)', # Fuzzy
	'irmachooseurl' => 'താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി.യിൽ നിന്നു തിരഞ്ഞെടുത്ത ഒരു പേര്‌ ($1)',
	'irmachooseauto' => 'യാന്ത്രികമായി ഉണ്ടാക്കിയ പേര്‌ ($1)',
	'irmachoosemanual' => 'താങ്കൾക്ക് ഇഷ്ടമുള്ള ഒരു പേര്‌:',
	'irmachooseexisting' => 'ഈ വിക്കിയിലെ നിലവിലുള്ള അംഗത്വം',
	'irmachooseusername' => 'ഉപയോക്തൃനാമം:',
	'irmachoosepassword' => 'രഹസ്യവാക്ക്:',
	'irmaconvertsuccess' => 'ഓപ്പൺ ഐ.ഡി.യിലേക്ക് വിജയകരമായി പരിവർത്തനം ചെയ്തിരിക്കുന്നു',
	'irmaconvertsuccesstext' => 'താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി. $1ലേക്കു വിജയകരമായി പരിവർത്തനം ചെയ്തിരിക്കുന്നു.',
	'irma-convert-already-your-irma-text' => 'ഇതു ഇപ്പോൾ തന്നെ താങ്കളുടെ ഓപ്പൺ‌ഐ.ഡി.യാണ്‌.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'ഇതു മറ്റാരുടേയോ ഓപ്പൺ‌ഐ.ഡി.യാണ്‌.', # Fuzzy
	'irmanousername' => 'ഉപയോക്തൃനാമം തിരഞ്ഞെടുത്തിട്ടില്ല.',
	'irmabadusername' => 'അസാധുവായ ഉപയോക്തൃനാമമാണു തിരഞ്ഞെടുത്തിരിക്കുന്നത.',
	'irmaloginlabel' => 'ഓപ്പൺ‌ഐ.ഡി. വിലാസം',
	'irma-urls-action' => 'നടപടി',
	'irma-urls-delete' => 'മായ്ക്കുക',
);

/** Mongolian (монгол)
 * @author Chinneeb
 */
$messages['mn'] = array(
	'irmalanguage' => 'Хэл',
	'irmatimezone' => 'Цагийн бүс',
	'irmachooseusername' => 'Хэрэглэгчийн нэр:',
);

/** Marathi (मराठी)
 * @author Htt
 * @author Kaustubh
 * @author V.narsikar
 */
$messages['mr'] = array(
	'irma-desc' => 'विकिवर [//irma.net/ ओपनID] वापरून प्रवेश करा, तसेच कुठल्याही इतर ओपनID संकेतस्थळावर विकि सदस्य नाम वापरून प्रवेश करा',
	'irmalogin' => 'ओपनID वापरून प्रवेश करा', # Fuzzy
	'irmaserver' => 'ओपनID सर्व्हर',
	'irma-server-identity-page-text' => 'हे तांत्रीक ओपनआयडी विदागाराचे, ओपनआयडीस अधिकृत करणे सुरू करण्याचे पान आहे.या पानाचा ईतर काहीच उद्देश नाही.',
	'irmaxrds' => 'Yadis संचिका',
	'irmaconvert' => 'ओपनID कन्व्हर्टर',
	'irmaerror' => 'तपासणी त्रुटी',
	'irmaerrortext' => 'ओपनID URL च्या तपासणीमध्ये त्रुटी आढळलेली आहे.',
	'irmaconfigerror' => 'ओपनID व्यवस्थापन त्रुटी',
	'irmaconfigerrortext' => 'या विकिसाठीचे ओपनID जतन व्यवस्थापन चुकीचे आहे.
कृपया प्रबंधकांशी संपर्क करा.', # Fuzzy
	'irmapermission' => 'ओपनID परवानगी त्रुटी',
	'irmapermissiontext' => 'आपण दिलेल्या ओपनID या सर्व्हरवर प्रवेश करता येणार नाही.',
	'irmacancel' => 'तपासणी रद्द',
	'irmacanceltext' => 'ओपनID URL ची तपासणी रद्द केलेली आहे.',
	'irmafailure' => 'तपासणी पूर्ण झाली नाही',
	'irmafailuretext' => 'ओपनID URL ची तपासणी पूर्ण झालेली नाही. त्रुटी संदेश: "$1"',
	'irmasuccess' => 'तपासणी पूर्ण',
	'irmasuccesstext' => 'ओपनID URL ची तपासणी पूर्ण झालेली आहे.', # Fuzzy
	'irmausernameprefix' => 'ओपनIDसदस्य',
	'irmaserverlogininstructions' => '$3 वर $2 या नावाने (सदस्य पान $1) प्रवेश करण्यासाठी आपला परवलीचा शब्द खाली लिहा.', # Fuzzy
	'irmatrustinstructions' => 'तुम्ही $1 बरोबर डाटा शेअर करू इच्छिता का याची तपासणी करा.',
	'irmaallowtrust' => '$1 ला ह्या सदस्य खात्यावर विश्वास ठेवण्याची अनुमती द्या.',
	'irmanopolicy' => 'संकेतस्थळावर गोपनियता नीती दिलेली नाही.',
	'irmapolicy' => 'अधिक माहितीसाठी <a target="_new" href="$1">गुप्तता नीती</a> तपासा.',
	'irmaoptional' => 'वैकल्पिक',
	'irmarequired' => 'आवश्यक',
	'irmanickname' => 'टोपणनाव',
	'irmafullname' => 'पूर्णनाव', # Fuzzy
	'irmaemail' => 'इमेल पत्ता',
	'irmalanguage' => 'भाषा',
	'irmatimezone' => 'वेळक्षेत्र',
	'irmachooseinstructions' => 'सर्व सदस्यांना टोपणनाव असणे आवश्यक आहे;
तुम्ही खाली दिलेल्या नावांमधून एक निवडू शकता.',
	'irmachoosefull' => 'तुमचे पूर्ण नाव ($1)', # Fuzzy
	'irmachooseurl' => 'तुमच्या ओपनID मधून घेतलेले नाव ($1)',
	'irmachooseauto' => 'एक आपोआप तयार झालेले नाव ($1)',
	'irmachoosemanual' => 'तुमच्या आवडीचे नाव:',
	'irmachooseexisting' => 'या विकिवरील अस्तित्वात असलेले सदस्य खाते:', # Fuzzy
	'irmachooseusername' => 'सदस्यनाम:',
	'irmachoosepassword' => 'परवलीचा शब्द:',
	'irmaconvertinstructions' => 'हा अर्ज तुम्हाला ओपनID URL वापरण्यासाठी तुमचे सदस्यनाव बदलण्याची परवानगी देतो.', # Fuzzy
	'irmaconvertsuccess' => 'ओपनID मध्ये बदल पूर्ण झालेले आहेत',
	'irmaconvertsuccesstext' => 'तुम्ही तुमचा ओपनID $1 मध्ये यशस्वीरित्या बदललेला आहे.',
	'irma-convert-already-your-irma-text' => '$1 हा ओपनआयडी तुमच्याच खात्याशी संलग्न आहे.',
	'irma-convert-other-users-irma-text' => '$1 हा दुसर्‍या कोणाचा ओपनआयडी आहे.आपण दुसऱ्या सदस्याचा ओपनआयडी वापरू शकत नाही.',
	'irmaalreadyloggedin' => "'''$1, तुम्ही अगोदरच प्रवेश केलेला आहे!'''

जर तुम्ही भविष्यात ओपनID वापरून प्रवेश करू इच्छित असाल, तर तुम्ही [[Special:IRMAConvert|तुमचे खाते ओपनID साठी बदलू शकता]].", # Fuzzy
	'irmanousername' => 'सदस्यनाव दिले नाही.',
	'irmabadusername' => 'चुकीचे सदस्यनाव दिले आहे.',
	'irmaautosubmit' => 'या पानावरील अर्ज जर तुम्ही जावास्क्रीप्ट वापरत असाल तर आपोआप पाठविला जाईल. जर तसे झाले नाही, तर "Continue" (पुढे) कळीवर टिचकी मारा.',
	'irmaclientonlytext' => 'या विकिवरील खाती तुम्ही इतर संकेतस्थळांवर ओपनID म्हणून वापरू शकत नाही.',
	'irmaloginlabel' => 'ओपनID URL',
	'irmalogininstructions' => "{{SITENAME}} [//irma.net/ ओपनआयडी] वापरून विविध संकेतस्थळांवर प्रवेश करण्याची अनुमती देते.
ओपनआयडी वापरुन तुम्ही एकाच परवलीच्या शब्दाने विविध संकेतस्थळांवर प्रवेश करू शकता.
(अधिक माहिती साठी [//en.wikipedia.org/wiki/IRMA विकिपीडिया वरील ओपनआयडीवरील लेख] पहा.)

जर {{SITENAME}} वर अगोदरच तुमचे खाते असेल, तुम्ही नेहमीप्रमाणे तुमचे सदस्यनाव व परवलीचा शब्द वापरून [[Special:UserLogin|प्रवेश करा]].
भविष्यात ओपनआयडी वापरण्यासाठी, तुम्ही प्रवेश केल्यानंतर [[Special:IRMAConvert|तुमचे खाते ओपनआयडी मध्ये बदला]].

अनेक [http://wiki.irma.net/Public_IRMA_providers Public ओपनआयडी वितरक] आहेत, व तुम्ही अगोदरच ओपनआयडी चे खाते उघडले असण्याची शक्यता आहे.

; इतर विकि : जर तुमच्याकडे ओपनआयडी वापरणार्‍या विकिवर खाते असेल, जसे की [//wikitravel.org/ विकिट्रॅव्हल], [//www.wikihow.com/ विकिहाऊ], [//vinismo.com/ विनिस्मो], [//aboutus.org/ अबाउट‍अस] किंवा [//kei.ki/ कैकी], तुम्ही {{SITENAME}} वर तुमच्या त्या विकिवरील सदस्य पानाची '''पूर्ण URL''' वरील पृष्ठपेटीमध्ये देऊन प्रवेश करू शकता. उदाहरणार्थ, ''<nowiki>//kei.ki/en/User:Evan</nowiki>''.
; [//irma.yahoo.com/ याहू!] : जर तुमच्याकडे याहू! चे खाते असेल, तर तुम्ही वरील पृष्ठपेटीमध्ये याहू! ने दिलेल्या ओपनआयडीचा वापर करून प्रवेश करू शकता. याहू! ओपनआयडी URL ची रुपरेषा ''<nowiki>https://me.yahoo.com/तुमचेसदस्यनाव</nowiki>'' अशी आहे.
; [//dev.aol.com/aol-and-63-million-irmas एओएल] : जर तुमच्याकडे [//www.aol.com/ एओएल]चे खाते असेल, जसे की [//www.aim.com/ एम] खाते, तुम्ही {{SITENAME}} वर वरील पृष्ठपेटीमध्ये एओएल ने दिलेल्या ओपनआयडीचा वापर करून प्रवेश करू शकता. एओएल ओपनआयडी URL ची रुपरेषा ''<nowiki>//irma.aol.com/तुमचेसदस्यनाव</nowiki>'' अशी आहे. तुमच्या सदस्यनावात अंतर (space) चालणार नाही.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-irma-provider.html ब्लॉगर], [//faq.wordpress.com/2007/03/06/what-is-irma/ वर्डप्रेस.कॉम], [//www.livejournal.com/irma/about.bml लाईव्ह जर्नल], [//bradfitz.vox.com/library/post/irma-for-vox.html वॉक्स] : जर यापैकी कुठेही तुमचा ब्लॉग असेल, तर वरील पृष्ठपेटीमध्ये तुमच्या ब्लॉगची URL भरा. उदाहरणार्थ, ''<nowiki>//yourusername.blogspot.com/</nowiki>'', ''<nowiki>//yourusername.wordpress.com/</nowiki>'', ''<nowiki>//yourusername.livejournal.com/</nowiki>'', किंवा ''<nowiki>//yourusername.vox.com/</nowiki>''.", # Fuzzy
	'irmadelete-button' => 'खात्री करा',
	'prefs-irma-hide-irma' => 'जर तुम्ही ओपनID वापरून प्रवेश केला, तर तुमच्या सदस्यपानावरील तुमचा ओपनID लपवा.',
	'irma-hide-irma-label' => 'जर तुम्ही ओपनID वापरून प्रवेश केला, तर तुमच्या सदस्यपानावरील तुमचा ओपनID लपवा.', # Fuzzy
	'irma-urls-delete' => 'वगळा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 * @author Diagramma Della Verita
 */
$messages['ms'] = array(
	'irma-desc' => 'Membolehkan pengguna untuk log masuk ke dalam wiki dengan [//irma.net/ IRMA]. Jika dihidupkan pada wiki, pengguna juga obleh menggunakan URL akaun penggunanya di wiki ini sebagai IRMA untuk log masuk ke dalam tapak web lain yang sedia IRMA',
	'irmaidentifier' => 'Pengenalpastian IRMA',
	'irmalogin' => 'Log masuk / buka akaun dengan IRMA',
	'irmaserver' => 'Pelayan IRMA',
	'irma-identifier-page-text-user' => 'Halaman ini adalah pengenalpastian untuk pengguna "$1".',
	'irma-identifier-page-text-different-user' => 'Halaman ini adalah pengenalpastian untuk ID pengguna "$1".',
	'irma-identifier-page-text-no-such-local-irma' => 'Pengenalpastian IRMA setempat ini tidak sah.',
	'irma-server-identity-page-text' => 'Ini ialah halaman pelayan teknikal IRMA untuk memulakan penentusahan IRMA tanpa sebarang tujuan lain.',
	'irmaxrds' => 'Fail Yadis',
	'irmaconvert' => 'Penukar IRMA',
	'irmaerror' => 'Ralat pengesahan',
	'irmaerrortext' => 'Berlaku ralat ketika pengesahan URL IRMA.',
	'irma-error-request-forgery' => 'Berlakunya ralat: dijumpainya token yang tidak sah.',
	'irmaconfigerror' => 'Ralat konfigurasi IRMA',
	'irmaconfigerrortext' => 'Konfigurasi storan IRMA bagi wiki ini tidak sah.
Sila hubungi [[Special:ListUsers/sysop|pentadbir]].',
	'irmapermission' => 'Ralat keizinan IRMA',
	'irmapermissiontext' => 'IRMA yang anda berikan tidak dibenarkan untuk mengakses pelayan ini.',
	'irmacancel' => 'Pengesahan telah dibatalkan',
	'irmacanceltext' => 'Pengesahan URL IRMA telah dibatalkan.',
	'irmafailure' => 'Pengesahan gagal',
	'irmafailuretext' => 'Pengesahan URL IRMA gagal. Pesanan ralat: "$1"',
	'irmasuccess' => 'Pengesahan berjaya',
	'irmasuccesstext' => "'''Pengesahan berjaya dan log masuk sebagai pengguna $1'''.

IRMA anda ialah $2 .

Ini dan IRMA pilihan yang lain boleh diuruskan dalam [[Special:Preferences#mw-prefsection-irma|tab IRMA]] keutamaan anda.<br />
Kata laluan akaun pilihan boleh ditambahkan ke dalam [[Special:Preferences#mw-prefsection-personal|Profil pengguna]] anda.",
	'irmausernameprefix' => 'PenggunaIRMA',
	'irmaserverlogininstructions' => '$3 meminta supaya anda memasukkan kata laluan anda untuk laman $2 anda, $1 (iaitu URL IRMA anda)',
	'irmatrustinstructions' => 'Raitkan jika anda ingin berkongsi data dengan $1.',
	'irmaallowtrust' => 'Benarkan $1 untuk mempercayai akaun pengguna ini.',
	'irmanopolicy' => 'Tapak ini belum menetapkan dasar privasi.',
	'irmapolicy' => 'Rujuk <a target="_new" href="$1">dasar privasi</a> untuk maklumat lanjut.',
	'irmaoptional' => 'Pilihan',
	'irmarequired' => 'Wajib',
	'irmanickname' => 'Nama timangan',
	'irmafullname' => 'Nama sebenar',
	'irmaemail' => 'Alamat e-mel',
	'irmalanguage' => 'Bahasa',
	'irmatimezone' => 'Zon waktu',
	'irmachooselegend' => 'Pilihan nama pengguna dan akaun',
	'irmachooseinstructions' => 'Semua pengguna memerlukan nama timangan;
anda boleh memilih satu daripada pilihan-pilihan berikut.',
	'irmachoosenick' => 'Nama timangan anda ($1)',
	'irmachoosefull' => 'Nama sebenar anda ($1)',
	'irmachooseurl' => 'Nama yang dipilih daripada IRMA anda ($1)',
	'irmachooseauto' => 'Nama janaan automatik ($1)',
	'irmachoosemanual' => 'Nama pilihan anda:',
	'irmachooseexisting' => 'Akaun yang sedia ada di wiki ini',
	'irmachooseusername' => 'Nama pengguna:',
	'irmachoosepassword' => 'Kata laluan:',
	'irmaconvertinstructions' => 'Borang membolehkan anda untuk ini untuk menukar akaun anda untuk menggunakan IRMA URL. atau menambahkan lagi URL IRMA',
	'irmaconvertoraddmoreids' => 'Tukar ke IRMA atau tambahkan satu lagi URL IRMA',
	'irmaconvertsuccess' => 'Berjaya ditukar ke IRMA',
	'irmaconvertsuccesstext' => 'Anda telah berjaya menukar IRMA ke $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 sudah dikaitkan dengan akaun anda. Tiada perlunya menambahkannya semula.',
	'irma-convert-other-users-irma-text' => '$1 adalah IRMA orang lain. Anda tidak boleh menggunakan IRMA pengguna lain.',
	'irmaalreadyloggedin' => 'Anda sudah log masuk.',
	'irmaalreadyloggedintext' => "'''Anda sudah log masuk, $1!'''

Anda boleh menguruskan (lihat, hapuskan, tambahkan lagi) IRMA dalam [[Special:Preferences#mw-prefsection-irma|tab IRMA]] dalam keutamaan anda.",
	'irmanousername' => 'Nama pengguna tidak dinyatakan.',
	'irmabadusername' => 'Nama pengguna yang dinyatakan tidak sah.',
	'irmaautosubmit' => 'Laman ini mempunyai borang yang sepatutnya diserahkan secara automatik jika JavaScript dihidupkan.
Jika tidak, cuba butang "Continue" (sambung).',
	'irmaclientonlytext' => 'Anda tidak boleh menggunakan akaun-akaun dari wiki ini sebagai IRMA di laman lain.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} menyokong piawaian [//irma.net/ IRMA] untuk daftar masuk sekali sesama tapak web.
IRMA membolehkan anda untuk log masuk ke dalam pelbagai tapak web tanpa menggunakan kata laluan yang berbeza untuk setiap satu.
(Lihat [//ms.wikipedia.org/wiki/IRMA rencana IRMA di Wikipedia] untuk maklumat lanjut.)
Terdapat banyak [//irma.net/get/ perkhidmatan IRMA]; anda mungkin sudah membuka akaun yang dihidupkan IRMA di sebuah perkhidmatan lain.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''hanya'' membolehkan anda untuk log masuk dengan IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Jika anda sudah memiliki akaun di {{SITENAME}}, anda boleh [[Special:UserLogin|log masuk]] dengan nama pengguna dan kata laluan anda seperti biasa.
Untuk menggunakan IRMA pada masa akan datang, anda boleh [[Special:IRMAConvert|mengubah akuan anda menjadi IRMA]] selepas anda log masuk seperti biasa.',
	'irmaupdateuserinfo' => 'Kemas kinikan maklumat pribadi saya:',
	'irmadelete' => 'Hapuskan IRMA',
	'irmadelete-text' => 'Dengan menekan butang "{{int:irmadelete-button}}", anda akan menghapuskan IRMA $1 dari akaun Anda.
Anda tidak akan dapat log masuk dengan IRMA ini lagi.',
	'irmadelete-button' => 'Sahkan',
	'irmadeleteerrornopassword' => 'Anda tidak boleh menghapuskan semua IRMA Anda kerana akaun anda tidak diberi kata kata laluan.
Anda tidak boleh log masuk tanpa IRMA.',
	'irmadeleteerrorirmaonly' => 'Anda tidak boleh menghapuskan semua IRMA Anda kerana anda hanya dibenarkan untuk log masuk dengan IRMA.
Anda tidak boleh log masuk tanpa IRMA.',
	'irmadelete-success' => 'IRMA ini berjaya dibuang dari akaun anda.',
	'irmadelete-error' => 'Ralat berlaku ketika membuang IRMA ini dari akaun anda.',
	'irma-irmas-were-not-merged' => 'IRMA tidak digabungkan sekali ketika akaun-akaun pengguna digabungkan.',
	'prefs-irma-hide-irma' => 'Sorokkan URL IRMA anda pada laman pengguna anda, jika anda log masuk dengan IRMA.',
	'prefs-irma-userinfo-update-on-login' => 'Kemaskini maklumat pengguna IRMA',
	'prefs-irma-associated-irmas' => 'IRMA anda untuk log masuk ke {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Tapak-tapak yang dipercayai',
	'prefs-irma-local-identity' => 'IRMA anda untuk log masuk ke tapak-tapak lain',
	'irma-hide-irma-label' => 'Sorokkan URL IRMA anda pada laman pengguna anda.',
	'irma-show-irma-url-on-userpage-always' => 'IRMA anda sentiasa dipaparkan pada halaman pengguna anda apabila anda mengunjunginya.',
	'irma-show-irma-url-on-userpage-never' => 'IRMA anda tidak sesekali dipaparkn pada halaman pengguna anda.',
	'irma-userinfo-update-on-login-label' => 'Medan-medan maklumat profil pengguna yang akan dikemaskinikan secara automatik dari persona IRMA setia kali anda log masuk:',
	'irma-associated-irmas-label' => 'IRMA yang dikaitkan dengan akaun anda:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Tindakan',
	'irma-urls-registration' => 'Waktu pendaftaran',
	'irma-urls-delete' => 'Hapuskan',
	'irma-add-url' => 'Tambahkan IRMA baru pada akaun anda',
	'irma-trusted-sites-label' => 'Tapak-tapak yang anda percayai dan di mana anda pernah menggunakan IRMA anda untuk log masuk:',
	'irma-trusted-sites-table-header-column-url' => 'Tapak-tapak yang dipercayai',
	'irma-trusted-sites-table-header-column-action' => 'Tindakan',
	'irma-trusted-sites-delete-link-action-text' => 'Hapuskan',
	'irma-trusted-sites-delete-all-link-action-text' => 'Hapuskan semua tapak-tapak yang dipercayai',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Penghapusan tapak-tapak yang dipercayai',
	'irma-trusted-sites-delete-confirmation-question' => 'Dengan mengklik butang "{{int:irma-trusted-sites-delete-confirmation-button-text}}", anda akan menggugurkan "$1" dari senarai tapak-tapak yang anda percayai.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Dengan mengklik butang "{{int:irma-trusted-sites-delete-confirmation-button-text}}", anda akan menggugurkan semua tapak-tapak yang dipercayai dari profil pengguna anda.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Sahkan',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" berjaya digugurkan dari senarai tapak-tapak yang anda percayai.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Kesemua tapak yang pernah anda percayai berjaya digugurkan dari profil pengguna anda.',
	'irma-local-identity' => 'IRMA anda:',
	'irma-login-or-create-account' => 'Log masuk atau buka akaun baru',
	'irma-provider-label-irma' => 'Taipkan URL IRMA anda',
	'irma-provider-label-google' => 'Log masuk dengan akaun Google anda',
	'irma-provider-label-yahoo' => 'Log masuk dengan akaun Yahoo anda',
	'irma-provider-label-aol' => 'Taipkan nama pengguna AOL anda',
	'irma-provider-label-wmflabs' => 'Log masuk dengan akaun Wmflabs anda',
	'irma-provider-label-other-username' => 'Taipkan nama pengguna $1 anda',
	'specialpages-group-irma' => 'Laman-laman perkhidmatan dan maklumat status IRMA',
	'right-irma-converter-access' => 'Boleh menambahkan atau menukarkan akaun mereka untuk menggunakan identiti IRMA',
	'right-irma-dashboard-access' => 'Akses piawai ke dalam papan pemuka IRMA',
	'right-irma-dashboard-admin' => 'Akses pentadbir ke dalam papan pemuka IRMA',
	'action-irma-converter-access' => 'menambah atau menukar akaun anda untuk menggunakan identiti IRMA',
	'action-irma-dashboard-access' => 'mengakses papan pemuka IRMA',
	'action-irma-dashboard-admin' => 'mengakses papan pemuka penyelia IRMA',
	'irma-dashboard-title' => 'Papan pemuka IRMA',
	'irma-dashboard-title-admin' => 'Papan Pemuka IRMA (pentadbir)',
	'irma-dashboard-introduction' => 'Tetapan sambungan IRMA semasa ([$1 bantuan])',
	'irma-dashboard-number-irma-users' => 'Bilangan pengguna dengan IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Bilangan IRMA (jumlah)',
	'irma-dashboard-number-users-without-irma' => 'Bilangan pengguna tanpa IRMA',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Roderick Mallia
 */
$messages['mt'] = array(
	'irmalanguage' => 'Lingwa',
	'irmachooseusername' => 'Isem tal-utent',
	'irmachoosepassword' => 'Password:',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Erikoo
 */
$messages['my'] = array(
	'irmaoptional' => 'ရွေးပိုင်ခွင့်',
	'irmarequired' => 'လိုအပ်သည်',
	'irmanickname' => 'Nickname အမည်',
	'irmafullname' => 'အမည် အပြည့်အစုံ', # Fuzzy
	'irmaemail' => 'အီးမေး လိပ်စာ',
	'irmalanguage' => 'ဘာသာ',
	'irma-provider-label-google' => 'Google အကောင့် အသုံးပြု၍ Login ဝင်ရန်',
	'irma-provider-label-yahoo' => 'Yahoo အကောင့် အသုံးပြု၍ Login ဝင်ရန်',
	'irma-provider-label-aol' => 'AOL အကောင့် အားရိုက်ပါ',
	'irma-provider-label-other-username' => 'သင်၏ $1 မှ အသုံးပြုသူ အမည်အား ရိုက်ပါ',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'irmaoptional' => 'Мелень коряс',
	'irmarequired' => 'Тентеме кодаяк',
	'irmanickname' => 'Путонь лем',
	'irmafullname' => 'Лем педе-пес', # Fuzzy
	'irmaemail' => 'Е-сёрма парго',
	'irmalanguage' => 'Кель',
	'irmatimezone' => 'Шкань каркс',
	'irmachooseusername' => 'Совицянь леметь:',
	'irmachoosepassword' => 'Совамо валот:',
	'irmadelete-button' => 'Кемекстамс',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 * @author Teòtlalili
 */
$messages['nah'] = array(
	'irmaemail' => 'E-mailcān',
	'irmalanguage' => 'Tlâtòlli',
	'irmachoosepassword' => 'Motlahtōlichtacāyo',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Nghtwlkr
 */
$messages['nb'] = array(
	'irma-desc' => 'Logg inn på wikien med en [//irma.net/ IRMA] og logg inn på andre sider som bruker IRMA med kontoen herfra',
	'irmalogin' => 'Logg inn med IRMA', # Fuzzy
	'irmaserver' => 'IRMA-tjener',
	'irmaxrds' => 'Yadis-fil',
	'irmaconvert' => 'IRMA-konvertering',
	'irmaerror' => 'Bekreftelsesfeil',
	'irmaerrortext' => 'En feil oppsto under bekrefting av IRMA-adressen.',
	'irmaconfigerror' => 'Oppsettsfeil med IRMA',
	'irmaconfigerrortext' => 'Lagringsoppsettet for IRMA på denne wikien er ugyldig.
Vennligst kontakt en [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Tillatelsesfeil med IRMA',
	'irmapermissiontext' => 'Du kan ikke logge inn på denne tjeneren med IRMA-en du oppga.',
	'irmacancel' => 'Bekreftelse avbrutt',
	'irmacanceltext' => 'Bekreftelsen av IRMA-adressen ble avbrutt.',
	'irmafailure' => 'Bekreftelse mislyktes',
	'irmafailuretext' => 'Bekreftelse av IRMA-adressen mislyktes. Feilbeskjed: «$1»',
	'irmasuccess' => 'Bekreftelse lyktes',
	'irmasuccesstext' => 'Bekreftelse av IRMA-adressen lyktes.', # Fuzzy
	'irmausernameprefix' => 'IRMA-bruker',
	'irmaserverlogininstructions' => 'Skriv inn passordet ditt nedenfor for å logge på $3 som $2 (brukerside $1).', # Fuzzy
	'irmatrustinstructions' => 'Sjekk om du ønsker å dele data med $1.',
	'irmaallowtrust' => 'La $1 stole på denne kontoen.',
	'irmanopolicy' => 'Siden har ingen personvernerklæring.',
	'irmapolicy' => 'Sjekk <a href="_new" href="$1">personvernerklæringen</a> for mer informasjon.',
	'irmaoptional' => 'Valgfri',
	'irmarequired' => 'Påkrevd',
	'irmanickname' => 'Kallenavn',
	'irmafullname' => 'Fullt navn', # Fuzzy
	'irmaemail' => 'E-postadresse',
	'irmalanguage' => 'Språk',
	'irmatimezone' => 'Tidssone',
	'irmachooselegend' => 'Velg brukernavn', # Fuzzy
	'irmachooseinstructions' => 'Alle brukere må ha et kallenavn; du kan velge blant valgene nedenfor.',
	'irmachoosenick' => 'Ditt kallenavn ($1)',
	'irmachoosefull' => 'Fullt navn ($1)', # Fuzzy
	'irmachooseurl' => 'Et navn tatt fra din IRMA ($1)',
	'irmachooseauto' => 'Et automatisk opprettet navn ($1)',
	'irmachoosemanual' => 'Et valgfritt navn:',
	'irmachooseexisting' => 'En eksisterende konto på denne wikien',
	'irmachooseusername' => 'Brukernavn:',
	'irmachoosepassword' => 'Passord:',
	'irmaconvertinstructions' => 'Dette skjemaet lar deg endre brukerkontoen din til å bruke en IRMA-adresse eller å legge til flere IRMA-adresser.',
	'irmaconvertoraddmoreids' => 'Konverter til IRMA eller legg til en annen IRMA-adresse',
	'irmaconvertsuccess' => 'Konverterte til IRMA',
	'irmaconvertsuccesstext' => 'Du har konvertert din IRMA til $1.',
	'irma-convert-already-your-irma-text' => 'Det er allerede din IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Den IRMA-en tilhører noen andre.', # Fuzzy
	'irmaalreadyloggedin' => "'''$1, du er allerede logget inn.'''

Om du ønsker å bruke IRMA i framtiden, kan du [[Special:IRMAConvert|konvertere kontoen din til å bruke IRMA]].", # Fuzzy
	'irmanousername' => 'Intet brukernavn oppgitt.',
	'irmabadusername' => 'Ugyldig brukernavn oppgitt.',
	'irmaautosubmit' => 'Denne siden inneholder et skjema som vil leveres automatisk om du har JavaScript slått på.
Om ikke, trykk på «Continue» (Fortsett).',
	'irmaclientonlytext' => 'Du kan ikke bruke kontoer fra denne wikien som IRMA på en annen side.',
	'irmaloginlabel' => 'IRMA-adresse',
	'irmalogininstructions' => '{{SITENAME}} støtter [//irma.net/ IRMA]-standarden for enhetlig innlogging på forskjellige nettsteder.
IRMA lar deg logge inn på mange forskjellige nettsider uten at du må bruke forskjellige passord på hver.
(Se [//nn.wikipedia.org/wiki/IRMA Wikipedia-artikkelen om IRMA] for mer informasjon.)

Om du allerede har en konto på {{SITENAME}}, kan du [[Special:UserLogin|logga på]] som vanlig med brukarnavnet og passordet ditt.
For å bruke IRMA i fremtiden, kan du [[Special:IRMAConvert|konvertere kontoen din til IRMA]] etter at du har logget inn på vanlig måte.

Det er mange [http://wiki.irma.net/Public_IRMA_providers leverandører av IRMA], og du kan allerede ha en IRMA-aktivert konto et annet sted.', # Fuzzy
	'irmaupdateuserinfo' => 'Oppdater min personlige informasjon:',
	'irmadelete' => 'Slett IRMA',
	'irmadelete-text' => 'Ved å klikke på «{{int:irmadelete-button}}»-knappen vil du fjerne IRMA $1 fra din konto.
Du vil ikke lenger ha mulighet til å logge inn med denne IRMA.',
	'irmadelete-button' => 'Bekreft',
	'irmadeleteerrornopassword' => 'Du kan ikke slette alle dine IRMA-er fordi kontoen din ikke har noe passord.
Du ville ikke kunne logge inn uten en IRMA.',
	'irmadeleteerrorirmaonly' => 'Du kan ikke slette alle dine IRMA-er fordi du kun kan logge inn med en IRMA.
Du ville ikke kunne logge inn uten en IRMA.',
	'irmadelete-success' => 'IRMA-en har blitt fjernet fra din konto.',
	'irmadelete-error' => 'En feil oppsto i prosessen med å fjerne IRMA-en fra din konto.',
	'prefs-irma-hide-irma' => 'Skjul IRMA på brukersiden din om du logger inn med en.',
	'irma-hide-irma-label' => 'Skjul IRMA på brukersiden din om du logger inn med en.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Oppdater den følgende informasjonen fra IRMA-persona hver gang jeg logger inn:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA-er knyttet til din brukerkonto:',
	'irma-urls-action' => 'Handling',
	'irma-urls-delete' => 'Slett',
	'irma-add-url' => 'Legg til en ny IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Logg inn eller lag en ny konto', # Fuzzy
	'irma-provider-label-irma' => 'Skriv inn din IRMA-nettadresse',
	'irma-provider-label-google' => 'Logg inn med din Google-konto',
	'irma-provider-label-yahoo' => 'Logg inn med din Yahoo-konto',
	'irma-provider-label-aol' => 'Skriv inn ditt AOL-skjermnavn',
	'irma-provider-label-other-username' => 'Skriv inn ditt $1-brukernavn',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'irma-urls-action' => 'Akschoon',
	'irma-urls-delete' => 'Wegdoon',
	'irma-trusted-sites-table-header-column-action' => 'Akschoon',
	'irma-trusted-sites-delete-link-action-text' => 'Wegdoon',
);

/** Nepali (नेपाली)
 * @author RajeshPandey
 */
$messages['ne'] = array(
	'irmaemail' => 'इमेल ठेगाना',
	'irmalanguage' => 'भाषा',
	'irmatimezone' => 'समय क्षेत्र',
	'irmachooseusername' => 'प्रयोगकर्ता नाम:',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'irmachoosepassword' => 'Kupu fufu:',
);

/** Dutch (Nederlands)
 * @author Konovalov
 * @author McDutchie
 * @author Rcdeboer
 * @author SPQRobin
 * @author Siebrand
 * @author Tjcool007
 */
$messages['nl'] = array(
	'irma-desc' => 'Aanmelden bij de wiki met een [//irma.net/ IRMA] en aanmelden bij andere websites die IRMA ondersteunen met een wikigebruiker',
	'irmaidentifier' => 'IRMA',
	'irmalogin' => 'Aanmelden / registreren met IRMA',
	'irmaserver' => 'IRMA-server',
	'irma-identifier-page-text-user' => 'Deze pagina is de ID van gebruiker "$1".',
	'irma-identifier-page-text-different-user' => 'Deze pagina is de identificatie van de gebruiker $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Dit is een ongeldige lokale IRMA-identificatie.',
	'irma-server-identity-page-text' => 'Dit is een technische pagina voor IRMA-server voor het beginnen van de IRMA-authenticatie. De pagina heeft geen ander doel.',
	'irmaxrds' => 'Yadis-bestand',
	'irmaconvert' => 'IRMA-convertor',
	'irmaerror' => 'Controlefout',
	'irmaerrortext' => 'Er is een fout opgetreden tijdens de verificatie van de IRMA URL.',
	'irma-error-request-forgery' => 'Er is een fout opgetreden: er is een ongeldig token aangetroffen.',
	'irmaconfigerror' => 'Fout in de installatie van IRMA',
	'irmaconfigerrortext' => "De instellingen van de opslag van IRMA's voor deze wiki kloppen niet.
Raadpleeg een  [[Special:ListUsers/sysop|beheerder]].",
	'irmapermission' => 'Fout in de rechten voor IRMA',
	'irmapermissiontext' => 'Met de IRMA die u hebt opgegeven kunt u niet aanmelden bij deze server.',
	'irmacancel' => 'Verificatie geannuleerd',
	'irmacanceltext' => 'De verificatie van de IRMA URL is geannuleerd.',
	'irmafailure' => 'Verificatie mislukt',
	'irmafailuretext' => 'De verificatie van de IRMA URL is mislukt. Foutmelding: "$1"',
	'irmasuccess' => 'Verificatie uitgevoerd',
	'irmasuccesstext' => "'''De controle is geslaagd en u bent aangemeld als gebruiker $1.'''

Uw IRMA is $2 .

Dit IRMA en andere toekomstige IRMA's kunt u beheren in het [[Special:Preferences#mw-prefsection-irma|tabblad IRMA]] van uw voorkeuren.<br />
Optioneel kunt u een wachtwoord instellen voor deze gebruiker in uw [[Special:Preferences#mw-prefsection-personal|gebruikersprofiel]].",
	'irmausernameprefix' => 'IRMAGebruiker',
	'irmaserverlogininstructions' => '$3 vraag om het invoeren van uw wachtwoord voor uw gebruiker $2 pagina $1 (URL voor IRMA).',
	'irmatrustinstructions' => 'Controleer of u gegevens wilt delen met $1.',
	'irmaallowtrust' => 'Toestaan dat $1 deze gebruiker vertrouwt.',
	'irmanopolicy' => 'De site heeft geen privacybeleid.',
	'irmapolicy' => 'Lees het <a target="_new" href="$1">privacybeleid</a> voor meer informatie.',
	'irmaoptional' => 'Optioneel',
	'irmarequired' => 'Vereist',
	'irmanickname' => 'Gebruikersnaam',
	'irmafullname' => 'Volledige naam',
	'irmaemail' => 'E-mailadres',
	'irmalanguage' => 'Taal',
	'irmatimezone' => 'Tijdzone',
	'irmachooselegend' => 'Gebruikersnaamkeuze',
	'irmachooseinstructions' => 'Alle gebruikers moeten een gebruikersnaam kiezen. U kunt er een kiezen uit de onderstaande opties.',
	'irmachoosenick' => 'Uw bijnaam ($1)',
	'irmachoosefull' => 'Uw volledige naam ($1)',
	'irmachooseurl' => 'Een naam uit uw IRMA ($1)',
	'irmachooseauto' => 'Een automatisch samengestelde naam ($1)',
	'irmachoosemanual' => 'Een te kiezen naam:',
	'irmachooseexisting' => 'Een bestaande gebruiker op deze wiki',
	'irmachooseusername' => 'Gebruikersnaam:',
	'irmachoosepassword' => 'Wachtwoord:',
	'irmaconvertinstructions' => "Via dit formulier kunt u uw gebruiker als IRMA-URL gebruiken of meer IRMA-URL's toevoegen.",
	'irmaconvertoraddmoreids' => 'Converteren naar IRMA of een andere IRMA-URL toevoegen',
	'irmaconvertsuccess' => 'Omzetten naar IRMA is uitgevoerd',
	'irmaconvertsuccesstext' => 'Uw IRMA is omgezet naar $1.',
	'irma-convert-already-your-irma-text' => 'Het IRMA $1 is al gekoppeld aan uw gebruiker. Opnieuw toevoegen heeft geen zin.',
	'irma-convert-other-users-irma-text' => 'Iemand anders heeft het IRMA $1 al in gebruik. U kunt niet het IRMA van een andere gebruiker gebruiken.',
	'irmaalreadyloggedin' => 'U bent al aangemeld.',
	'irmaalreadyloggedintext' => "'''U bent al aangemeld, $1!'''

U kunt IRMA's beheren (bekijken, verwijderen en toevoegen) in het [[Special:Preferences#mw-prefsection-irma|tabblad IRMA]] in uw voorkeuren.",
	'irmanousername' => 'Er is geen gebruikersnaam opgegeven.',
	'irmabadusername' => 'De opgegeven gebruikersnaam is niet toegestaan.',
	'irmaautosubmit' => 'Deze pagina bevat een formulier dat automatisch wordt verzonden als JavaScript is ingeschaked.
Als dat niet werkt, klik dan op de knop "Continue" (Doorgaan).',
	'irmaclientonlytext' => 'U kunt gebruikers van deze wiki niet als IRMA gebruiken op een andere site.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}} ondersteunt de standaard [//irma.net/ IRMA] voor maar een keer hoeven aanmelden voor meerdere websites.
Met IRMA kunt u aanmelden bij veel verschillende websites zonder voor iedere site opnieuw een wachtwoord te moeten opgeven.
Zie het [//nl.wikipedia.org/wiki/IRMA Wikipedia-artikel over IRMA] voor meer informatie.
Er zijn veel [http://wiki.irma.net/Public_IRMA_providers IRMA-providers] en wellicht hebt u al een gebruiker voor IRMA bij een andere dienst.',
	'irmalogininstructions-irmaloginonly' => "Bij {{SITENAME}} kunt u zich ''alleen'' aanmelden via IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Als u al een gebruiker hebt bij op {{SITENAME}}, kunt u [[Special:UserLogin|aanmelden]] met uw gebruikersnaam en wachtwoord zoals gewoonlijk.
Om in de toekomst IRMA te gebruiken, kunt u uw [[Special:IRMAConvert|gebruiker omzetten naar IRMA]] nadat u bent aangemeld.',
	'irmaupdateuserinfo' => 'Mijn persoonlijke gegevens bijwerken:',
	'irmadelete' => 'IRMA verwijderen',
	'irmadelete-text' => 'Door te klikken op de knop "{{int:irmadelete-button}}", verwijdert u de IRMA $1 uit uw gebruiker.
Het is dan niet langer mogelijk aan te melden met de IRMA "$1".',
	'irmadelete-button' => 'Bevestigen',
	'irmadeleteerrornopassword' => "U kunt niet al uw IRMA's verwijderen omdat uw gebruiker geen wachtwoord heeft.
Dan zou u niet langer kunnen aanmelden zonder een IRMA.",
	'irmadeleteerrorirmaonly' => "U kunt niet al uw IRMA's verwijderen omdat u alleen mag aanmelden met een IRMA.
Dan zou u niet langer kunnen aanmelden zonder een IRMA.",
	'irmadelete-success' => 'De IRMA is verwijderd uit uw gebruiker.',
	'irmadelete-error' => 'Er is een fout opgetreden tijdens het verwijderen van de IRMA uit uw gebruiker.',
	'irma-irmas-were-not-merged' => "Bij het samenvoegen van de gebruikers zijn een of meer IRMA's niet samengevoegd.",
	'prefs-irma-hide-irma' => 'IRMA-URL op uw gebruikerspagina weergeven',
	'prefs-irma-userinfo-update-on-login' => 'IRMA gebruikersinformatie bewerken',
	'prefs-irma-associated-irmas' => "Uw IRMA's om aan te melden bij {{SITENAME}}",
	'prefs-irma-trusted-sites' => 'Vertrouwde sites',
	'prefs-irma-local-identity' => 'Uw IRMA voor aanmelden bij andere sites',
	'irma-hide-irma-label' => 'Uw IRMA-URL verbergen op uw gebruikerspagina.',
	'irma-show-irma-url-on-userpage-always' => 'Uw IRMA wordt altijd weergegeven op uw gebruikerspagina als u die bezoekt.',
	'irma-show-irma-url-on-userpage-never' => 'Uw IRMA wordt nooit weergegeven op uw gebruikerspagina.',
	'irma-userinfo-update-on-login-label' => 'Velden van uw gebruikersprofiel die iedere keer dat u aanmeldt worden bijgewerkt vanuit uw IRMA-persona:',
	'irma-associated-irmas-label' => "Aan uw gebruiker gekoppelde IRMA's:",
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Handeling',
	'irma-urls-registration' => 'Registratietijd',
	'irma-urls-delete' => 'Verwijderen',
	'irma-add-url' => 'Een nieuwe IRMA aan uw gebruiker toevoegen',
	'irma-trusted-sites-label' => 'Sites die u vertrouwt en waar u uw IRMA hebt gebruikt om aan te melden:',
	'irma-trusted-sites-table-header-column-url' => 'Vertrouwde sites',
	'irma-trusted-sites-table-header-column-action' => 'Handeling',
	'irma-trusted-sites-delete-link-action-text' => 'Verwijderen',
	'irma-trusted-sites-delete-all-link-action-text' => 'Alle vertrouwde sites verwijderen',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Vertrouwde site verwijderen',
	'irma-trusted-sites-delete-confirmation-question' => 'Door te klikken op de know "{{int:irma-trusted-sites-delete-confirmation-button-text}}" wordt "$1" verwijderd uit de lijst met sites die u vertrouwt.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Door te klikken op de knop "{{int:irma-trusted-sites-delete-confirmation-button-text}}" verwijderd u alle vertrouwde sites uit uw gebruikersprofiel.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Bevestigen',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" is verwijderd uit de lijst met vertrouwde sites.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Alle voorheen vertrouwde sites zijn verwijderd uit uw gebruikersprofiel.',
	'irma-local-identity' => 'Uw IRMA:',
	'irma-login-or-create-account' => 'Aanmelden of nieuwe gebruiker aanmaken',
	'irma-provider-label-irma' => 'Voer de URL van uw IRMA in',
	'irma-provider-label-google' => 'Aanmelden met uw Google-gebruiker',
	'irma-provider-label-yahoo' => 'Aanmelden met uw Yahoo-gebruiker',
	'irma-provider-label-aol' => 'Aanmelden met uw AOL-gebruiker',
	'irma-provider-label-wmflabs' => 'Aanmelden met uw gebruiker van WMF-labs',
	'irma-provider-label-other-username' => 'Geef uw gebruikersnaam bij $1 in',
	'specialpages-group-irma' => "IRMA-servicepagina's en statusinformatie",
	'right-irma-converter-access' => 'Kan gebruiker toevoegen of converteren om IRMA-identiteiten te gebruiken',
	'right-irma-dashboard-access' => 'Standaard toegang tot het IRMA-dashboard',
	'right-irma-dashboard-admin' => 'Beheerderstoegang tot het IRMA-dashboard',
	'action-irma-converter-access' => 'uw gebruiker toe te voegen of te converteren om IRMA-identiteiten te gebruiken',
	'action-irma-dashboard-access' => 'toegang te krijgen tot het IRMA-dashboard',
	'action-irma-dashboard-admin' => 'toegang te krijgen tot het IRMA-beheerdersdashboard',
	'irma-dashboard-title' => 'IRMA-dashboard',
	'irma-dashboard-title-admin' => 'IRMA-dashboard (beheerder)',
	'irma-dashboard-introduction' => 'De huidige instellingen van de IRMA-uitbreiding ([$1 hulp])',
	'irma-dashboard-number-irma-users' => 'Aantal gebruikers met IRMA',
	'irma-dashboard-number-irmas-in-database' => "Totaal aantal IRMA's",
	'irma-dashboard-number-users-without-irma' => 'Aantal gebruikers zonder IRMA',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Nghtwlkr
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'irma-desc' => 'Logg inn på wikien med ein [//irma.net/ IRMA] og logg inn på andre sider som bruker IRMA med kontoen herifrå',
	'irmalogin' => 'Logg inn med IRMA', # Fuzzy
	'irmaserver' => 'IRMA-tenar',
	'irmaxrds' => 'Yadis-fil',
	'irmaconvert' => 'IRMA-konvertering',
	'irmaerror' => 'Feil under stadfesting',
	'irmaerrortext' => 'Ein feil oppstod under stadfesting av IRMA-adressa.',
	'irmaconfigerror' => 'Konfigurasjonsfeil med IRMA',
	'irmaconfigerrortext' => 'Lagreoppsettet for IRMA på denne wikien er ugyldig.
Kontakt ein [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Tilgjengefeil med IRMA',
	'irmapermissiontext' => 'Du kan ikkje logga deg inn på denne tenaren med IRMA-en du oppgav.',
	'irmacancel' => 'Stadfesting avbrote',
	'irmacanceltext' => 'Stadfestinga av IRMA-adressa blei avbrote.',
	'irmafailure' => 'Stadfesting mislukkast',
	'irmafailuretext' => 'Stadfestinga av IRMA-adressa mislukkast. Feilmelding: «$1»',
	'irmasuccess' => 'Stadfestinga lukkast',
	'irmasuccesstext' => 'Stadfestinga av IRMA-adressa lukkast.', # Fuzzy
	'irmausernameprefix' => 'IRMA-brukar',
	'irmaserverlogininstructions' => 'Skriv inn passordet ditt nedanfor for å logga deg inn på $3 som $2 (brukarsida $1).', # Fuzzy
	'irmatrustinstructions' => 'Sjekk om du ynskjer å dela data med $1.',
	'irmaallowtrust' => 'Lat $1 stola på denne kontoen.',
	'irmanopolicy' => 'Sida har inga personvernerklæring.',
	'irmapolicy' => 'Sjekk <a href="_new" href="$1">personvernerklæringa</a> for meir informasjon.',
	'irmaoptional' => 'Valfri',
	'irmarequired' => 'Påkravd',
	'irmanickname' => 'Kallenamn',
	'irmafullname' => 'Fullt namn', # Fuzzy
	'irmaemail' => 'E-postadressa',
	'irmalanguage' => 'Språk',
	'irmatimezone' => 'Tidssone',
	'irmachooselegend' => 'Val av brukarnamn', # Fuzzy
	'irmachooseinstructions' => 'All brukarar må ha eit kallenamn; du kan velja mellom vala nedanfor.',
	'irmachoosenick' => 'Kallenamnet ditt ($1)',
	'irmachoosefull' => 'Fullt namn ($1)', # Fuzzy
	'irmachooseurl' => 'Eit namn teke frå IRMA-en din ($1)',
	'irmachooseauto' => 'Eit automatisk oppretta namn ($1)',
	'irmachoosemanual' => 'Eit valfritt namn:',
	'irmachooseexisting' => 'Ein konto på denne wikien som finst frå før',
	'irmachooseusername' => 'Brukarnamn:',
	'irmachoosepassword' => 'Passord:',
	'irmaconvertinstructions' => 'Dette skjemaet lèt deg endra brukarkontoen din slik at han kan nytta ei IRMA-adresse eller leggja til fleire IRMA-adresser.',
	'irmaconvertoraddmoreids' => 'Konverter til IRMA eller legg til ei anna IRMA-adresse',
	'irmaconvertsuccess' => 'Konverterte til IRMA',
	'irmaconvertsuccesstext' => 'Du har konvertert IRMA-en din til $1.',
	'irma-convert-already-your-irma-text' => 'Det er allereie IRMA-en din.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Den IRMA-en tilhøyrer einkvan annan.', # Fuzzy
	'irmaalreadyloggedin' => 'Du er alt innlogga.',
	'irmanousername' => 'Du oppgav ingen brukarnamn.',
	'irmabadusername' => 'Du oppgav eit ugyldig brukarnamn.',
	'irmaautosubmit' => 'Denne sida inneheld eit skjema som blir levert automatisk om du har JavaSvript slege på.
Dersom ikkje, trykk på «Continue» (Hald fram).',
	'irmaclientonlytext' => 'Du kan ikkje nytta kontoar frå denne wikien som IRMA på ei onnor sida.',
	'irmaloginlabel' => 'IRMA-adressa',
	'irmalogininstructions' => '{{SITENAME}} støttar [//irma.net/ IRMA]-standarden for einskapleg innlogging på forskjellige nettstader. IRMA lèt deg logga inn på mange forskjellige nettsider utan at du må nytta forskjellige passord på kvar. (Sjå [//nn.wikipedia.org/wiki/IRMA Wikipedia-artikkelen om IRMA] for meir informasjon.)

Om du allereie har ein konto på {{SITENAME}}, kan du [[Special:UserLogin|logga på]] som vanleg med brukarnamnet og passordet ditt. For å nytta IRMA i framtida, kan du [[Special:IRMAConvert|konvertera kontoen din til IRMA]] etter at du har logga inn på vanleg vis.

Det er mange [http://wiki.irma.net/Public_IRMA_providers leverandørar av IRMA], og du kan allereie ha ein IRMA-aktivert konto ein annan stad.', # Fuzzy
	'irmaupdateuserinfo' => 'Oppdater den personlege informasjonen min:',
	'irmadelete' => 'Slett IRMA',
	'irmadelete-text' => 'Ved å klikka på «{{int:irmadelete-button}}»-knappen vil du fjernae IRMA $1 frå kontoen din.
Du vil ikkje lenger ha høve til å logga inn med denne IRMAen.',
	'irmadelete-button' => 'Stadfest',
	'irmadeleteerrornopassword' => 'Du kan ikkje sletta alle IRMA-ane dine av di kontoen din ikkje har eit passord.
Du ville ikkje ha kunna logga inn utan ein IRMA.',
	'irmadeleteerrorirmaonly' => 'Du kan ikkje sletta alle IRMA-ane dine av di du berre har løyve til å logga inn med IRMA.
Du ville ikkje ha kunna logga inn utan ein IRMA.',
	'irmadelete-success' => 'IRMA har vorte fjerna frå kontoen din',
	'irmadelete-error' => 'Ein feil oppstod i prosessen med å fjerna IRMA frå kontoen din.',
	'prefs-irma-hide-irma' => 'Gøym IRMA på brukarsida di om du loggar inn med ein.',
	'irma-hide-irma-label' => 'Gøym IRMA på brukarsida di om du loggar inn med ein.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Oppdatér den fylgjande informasjonen frå IRMA-persona kvar gong eg loggar inn', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA-ar knytte til brukarkontoen din:',
	'irma-urls-action' => 'Handling',
	'irma-urls-delete' => 'Slett',
	'irma-add-url' => 'Legg til ein ny IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Logg inn eller lag ein ny konto', # Fuzzy
	'irma-provider-label-irma' => 'Skriv inn IRMA-URL-en din.',
	'irma-provider-label-google' => 'Logg inn med Google-kontoen din',
	'irma-provider-label-yahoo' => 'Logg inn med Yahoo-kontoen din',
	'irma-provider-label-aol' => 'Skriv inn AOL-skjermnamnet ditt',
	'irma-provider-label-other-username' => 'Skriv inn $1-brukarnamnet ditt',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'irma-desc' => "Se connècta al wiki amb [//irma.net/ IRMA] e se connècta a d'autres sites internet IRMA amb un wiki qu'utiliza un compte d'utilizaire.",
	'irmalogin' => 'Se connectar o crear un compte amb IRMA',
	'irmaserver' => 'Servidor IRMA',
	'irmaxrds' => 'Fichièr Yadis',
	'irmaconvert' => 'Convertisseire IRMA',
	'irmaerror' => 'Error de verificacion',
	'irmaerrortext' => "Una error es intervenguda pendent la verificacion de l'adreça IRMA.",
	'irmaconfigerror' => 'Error de configuracion de IRMA',
	'irmaconfigerrortext' => "L'estocatge de la configuracion IRMA per aqueste wiki es incorrècte.
Metetz-vos en rapòrt amb l’[[Special:ListUsers/sysop|administrator]].",
	'irmapermission' => 'Error de permission IRMA',
	'irmapermissiontext' => "L’IRMA qu'avètz provesida es pas autorizada a se connectar sus aqueste servidor.",
	'irmacancel' => 'Verificacion anullada',
	'irmacanceltext' => 'La verificacion de l’adreça IRMA es estada anullada.',
	'irmafailure' => 'Fracàs de la verificacion',
	'irmafailuretext' => 'La verificacion de l’adreça IRMA a fracassat. Messatge d’error : « $1 »',
	'irmasuccess' => 'Verificacion capitada',
	'irmasuccesstext' => 'Verificacion de l’adreça IRMA capitada.', # Fuzzy
	'irmausernameprefix' => 'Utilizaire IRMA',
	'irmaserverlogininstructions' => "Picatz vòstre senhal çaijós per vos connectar sus $3 coma utilizaire '''$2''' (pagina d'utilizaire $1).", # Fuzzy
	'irmatrustinstructions' => 'Marcatz se desiratz partejar las donadas amb $1.',
	'irmaallowtrust' => "Autoriza $1 a far fisança a aqueste compte d'utilizaire.",
	'irmanopolicy' => 'Lo site a pas indicat una politica de donadas personalas.',
	'irmapolicy' => 'Verificar la <a target="_new" href="$1">Politica de las donadas personalas</a> per mai d’entresenhas.',
	'irmaoptional' => 'Facultatiu',
	'irmarequired' => 'Exigit',
	'irmanickname' => 'Escais',
	'irmafullname' => 'Nom vertadièr',
	'irmaemail' => 'Adreça de corrièr electronic',
	'irmalanguage' => 'Lenga',
	'irmatimezone' => 'Zòna orària',
	'irmachooseinstructions' => "Totes los utilizaires an besonh d'un escais ; ne podètz causir un a partir de la causida çaijós.",
	'irmachoosefull' => 'Vòstre nom vertadièr ($1)',
	'irmachooseurl' => 'Un nom es estat causit dempuèi vòstra IRMA ($1)',
	'irmachooseauto' => 'Un nom creat automaticament ($1)',
	'irmachoosemanual' => "Un nom qu'avètz causit :",
	'irmachooseexisting' => 'Un compte existent sus aqueste wiki',
	'irmachoosepassword' => 'Senhal :',
	'irmaconvertinstructions' => "Aqueste formulari vos permet de cambiar vòstre compte d'utilizaire per utilizar una adreça IRMA o apondre d'adreças IRMA suplementàrias.",
	'irmaconvertoraddmoreids' => 'Convertir cap a IRMA o apondre una autra adreça IRMA',
	'irmaconvertsuccess' => 'Convertit amb succès cap a IRMA',
	'irmaconvertsuccesstext' => 'Avètz convertit amb succès vòstra IRMA cap a $1.',
	'irma-convert-already-your-irma-text' => 'L’IRMA $1 es ja associat a vòstre compte.',
	'irma-convert-other-users-irma-text' => "Aquò es quicòm d'autre qu'una IRMA.", # Fuzzy
	'irmaalreadyloggedin' => "'''Ja sètz connectat, $1 !'''

Se desiratz utilizar vòstra IRMA per vos connectar ulteriorament, podètz [[Special:IRMAConvert|convertir vòstre compte per utilizar IRMA]].", # Fuzzy
	'irmanousername' => 'Cap de nom d’utilizaire es pas estat indicat.',
	'irmabadusername' => 'Un nom d’utilizaire marrit es estat indicat.',
	'irmaautosubmit' => "Aquesta pagina conten un formulari que poiriá èsser mandat automaticament s'avètz activat JavaScript.
S’èra pas lo cas, ensajatz lo boton « Continue » (Contunhar).",
	'irmaclientonlytext' => 'Podètz pas utilizar de comptes dempuèi aqueste wiki en tant qu’IRMA sus d’autres sites.',
	'irmaloginlabel' => 'Adreça IRMA',
	'irmalogininstructions' => "{{SITENAME}} supòrta lo format [//irma.net/ IRMA] estandard per una sola signatura entre de sites Internet.
IRMA vos permet de vos connectar sus mantun site diferent sens aver d'utilizar un senhal diferent per cadun d’entre eles.
(Vejatz [//en.wikipedia.org/wiki/IRMA Wikipedia's IRMA article] per mai d'entresenhas.)

S'avètz ja un compte sus {{SITENAME}}, vos podètz [[Special:UserLogin|connectar]] amb vòstre nom d'utilizaire e son senhal coma de costuma. Per utilizar IRMA, a l’avenidor, podètz [[Special:IRMAConvert|convertir vòstre compte en IRMA]] aprèp vos èsser connectat normalament.

Existís mantun [http://wiki.irma.net/Public_IRMA_providers provesidor d'IRMA publicas], e podètz ja obténer un compte IRMA activat sus un autre servici.", # Fuzzy
	'irmaupdateuserinfo' => 'Metre a jorn mas donadas personalas :',
	'irmadelete' => "Suprimir l'IRMA",
	'irmadelete-text' => "En clicant sul boton « {{int:irmadelete-button}} », suprimtz l'IRMA $1 de vòstre compte.
Vos poiretz pas pus connectar amb aquesta IRMA.",
	'irmadelete-button' => 'Confirmar',
	'irmadelete-success' => "L'IRMA es estada suprimida amb succès de vòstre compte.",
	'irmadelete-error' => "Una error es arribada pendent la supression de l'IRMA de vòstre compte.",
	'prefs-irma-hide-irma' => "Amaga vòstra IRMA sus vòstra pagina d'utilizaire, se vos connectaz amb IRMA.",
	'irma-hide-irma-label' => "Amaga vòstra IRMA sus vòstra pagina d'utilizaire, se vos connectaz amb IRMA.", # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Metre a jorn las donadas seguentas dempuèi IRMA a cada còp que me connecti :', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA associadas amb vòstre compte :',
	'irma-urls-action' => 'Accion',
	'irma-urls-delete' => 'Suprimir',
	'irma-add-url' => 'Apondre un IRMA novèla a vòstre compte',
	'irma-login-or-create-account' => 'Se connectar o crear un compte novèl',
	'irma-provider-label-irma' => 'Picatz vòstra URL IRMA',
	'irma-provider-label-google' => 'Vos connectar en utilizant vòstre compte Google',
	'irma-provider-label-yahoo' => 'Vos connectar en utilizant vòstre compte Yahoo',
	'irma-provider-label-aol' => 'Picatz vòstre nom AOL',
	'irma-provider-label-other-username' => "Picatz vòstre nom d'utilizaire $1",
);

/** Ossetic (Ирон)
 * @author Amikeco
 */
$messages['os'] = array(
	'irmanickname' => 'Фæсномыг',
	'irmalanguage' => 'Æвзаг',
	'irmachoosepassword' => 'Пароль:',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'irmalanguage' => 'Schprooch',
	'irmachooseusername' => 'Yuuser-Naame:',
	'irmachoosepassword' => 'Paesswatt:',
	'irma-urls-delete' => 'Verwische',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'irmachoosepassword' => 'Passwuat:',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 */
$messages['pfl'] = array(
	'irma-urls-delete' => 'Lesche',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Chrumps
 * @author Herr Kriss
 * @author Maikking
 * @author Matma Rex
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'irma-desc' => 'Logowanie się do wiki z użyciem [//irma.net/ IRMA], oraz logowanie się do innych witryn używających IRMA z użyciem konta użytkownika z wiki',
	'irmaidentifier' => 'Identyfikator IRMA',
	'irmalogin' => 'Zaloguj lub utwórz konto korzystając z IRMA',
	'irmaserver' => 'Serwer IRMA',
	'irmaxrds' => 'Plik Yadis',
	'irmaconvert' => 'Obsługa IRMA',
	'irmaerror' => 'Błąd weryfikacji',
	'irmaerrortext' => 'Wystąpił błąd podczas weryfikacji adresu URL IRMA.',
	'irmaconfigerror' => 'Błąd konfiguracji IRMA',
	'irmaconfigerrortext' => 'Konfiguracja przechowywania w IRMA dla tej wiki jest nieprawidłowa.
Skonsultuj to z [[Special:ListUsers/sysop|administratorem]].',
	'irmapermission' => 'Błąd uprawnień IRMA',
	'irmapermissiontext' => 'IRMA, które podałeś nie ma uprawnień do logowania na ten serwer.',
	'irmacancel' => 'Weryfikacja anulowana',
	'irmacanceltext' => 'Weryfikacja adresu URL IRMA została przerwana.',
	'irmafailure' => 'Weryfikacja nie powiodła się',
	'irmafailuretext' => 'Weryfikacja adresu URL IRMA nie powiodła się. Komunikat o błędzie – „$1”',
	'irmasuccess' => 'Weryfikacja udana',
	'irmasuccesstext' => "'''Zweryfikowano i zalogowano użytkownika $1'''.

Twój IRMA to $2.

Tym i innymi dodatkowymi IRMA możesz zarządzać w [[Special:Preferences#mw-prefsection-irma|zakładce IRMA]] w swoich preferencjach.<br />
Opcjonalne hasło do konta możesz dodać w swoim [[Special:Preferences#mw-prefsection-personal|profilu użytkownika]].",
	'irmausernameprefix' => 'UżytkownikIRMA',
	'irmaserverlogininstructions' => '$3 zażądało abyś podał hasło użytkownika $2 strona $1 (to jest Twój IRMA adres URL).',
	'irmatrustinstructions' => 'Sprawdź, czy chcesz wymieniać informacje z $1.',
	'irmaallowtrust' => 'Zezwól $1 na użycie tego konta użytkownika.',
	'irmanopolicy' => 'Witryna nie ma określonej polityki prywatności.',
	'irmapolicy' => 'Zapoznaj się z <a target="_new" href="$1">polityką prywatności</a> aby uzyskać więcej informacji.',
	'irmaoptional' => 'Opcjonalnie',
	'irmarequired' => 'Wymagane',
	'irmanickname' => 'Nazwa użytkownika',
	'irmafullname' => 'Imię i nazwisko', # Fuzzy
	'irmaemail' => 'Adres e‐mail',
	'irmalanguage' => 'Język',
	'irmatimezone' => 'Strefa czasowa',
	'irmachooselegend' => 'Wybór nazwy użytkownika i konta',
	'irmachooseinstructions' => 'Wszyscy użytkownicy muszą mieć pseudonim.
Możesz wybrać spośród propozycji podanych poniżej.',
	'irmachoosenick' => 'Twoja nazwa konta użytkownika ($1)',
	'irmachoosefull' => 'Twoje imię i nazwisko ($1)', # Fuzzy
	'irmachooseurl' => 'Nazwa wybrana spośród IRMA ($1)',
	'irmachooseauto' => 'Automatycznie utworzono nazwę użytkownika ($1)',
	'irmachoosemanual' => 'Nazwa użytkownika wybrana przez Ciebie',
	'irmachooseexisting' => 'Istniejące konto na tej wiki',
	'irmachooseusername' => 'Nazwa użytkownika',
	'irmachoosepassword' => 'Hasło',
	'irmaconvertinstructions' => 'Formularz umożliwia przystosowanie konta użytkownika do korzystania z adresu URL IRMA lub dodanie następnych adresów URL IRMA.',
	'irmaconvertoraddmoreids' => 'Konwertuj do IRMA lub dodaj kolejny adres URL IRMA',
	'irmaconvertsuccess' => 'Przełączone na korzystanie z IRMA',
	'irmaconvertsuccesstext' => 'Zmieniłeś swoje IRMA na $1.',
	'irma-convert-already-your-irma-text' => 'Już masz swój IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'To jest IRMA należące do kogoś innego.', # Fuzzy
	'irmaalreadyloggedin' => 'Jesteś już zalogowany.',
	'irmaalreadyloggedintext' => "'''Już jesteś zalogowany jako $1!'''

Możesz zarządzać (przeglądać, usuwać, dodawać dalsze) IRMA w [[Special:Preferences#mw-prefsection-irma|zakładce IRMA]] w swoich preferencjach.",
	'irmanousername' => 'Nie wybrano żadnej nazwy użytkownika.',
	'irmabadusername' => 'Wybrano nieprawidłową nazwę użytkownika.',
	'irmaautosubmit' => 'Strona zawiera formularz, który powinien zostać automatycznie przesłany jeśli masz włączoną obsługę JavaScript.
Jeśli tak się nie stało spróbuj wcisnąć klawisz „Continue” (Kontynuuj).',
	'irmaclientonlytext' => 'Nie można korzystać z kont tej wiki jako IRMA w innych witrynach.',
	'irmaloginlabel' => 'Adres URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} korzysta ze standardu [//irma.net/ IRMA] umożliwiającego równoczesne zalogowanie się do wielu witryn.
IRMA pozwala na zalogowanie się do wielu różnych witryn sieci Web, bez użycia osobnego hasła dla każdej z nich.
(Zobacz [//pl.wikipedia.org/wiki/IRMA artykuł o IRMA w Wikipedii] jeśli chcesz uzyskać więcej informacji.)
Jest wielu [//irma.net/get/ operatorów usługi IRMA] – możliwe, że posiadasz już konto IRMA u innego usługodawcy.',
	'irmalogininstructions-irmaloginonly' => "Do {{GRAMMAR:D.lp|{{SITENAME}}}} możesz się zalogować ''wyłącznie'' przy pomocy IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Jeśli masz już konto w {{GRAMMAR:Ms.lp|{{SITENAME}}}} możesz [[Special:UserLogin|zalogować się]] przy pomocy swojej nazwy i hasła tak jak dotychczas.
Jeśli chcesz korzystać w przyszłości z IRMA, możesz [[Special:IRMAConvert|przekształcić swoje konto na  IRMA]] po tym jak się zwyczajne zalogujesz.',
	'irmaupdateuserinfo' => 'Uaktualnij moje dane',
	'irmadelete' => 'Usuń IRMA',
	'irmadelete-text' => 'Klikając na przycisk „{{int:irmadelete-button}}” usuniesz IRMA $1 ze swojego konta.
Nie będziesz już mógł więcej logować się korzystając z tego IRMA.',
	'irmadelete-button' => 'Zapisz',
	'irmadeleteerrornopassword' => 'Nie można usunąć wszystkich IRMA ponieważ konto nie ma ustalonego hasła.
Nie będziesz mógł zalogować się bez IRMA.',
	'irmadeleteerrorirmaonly' => 'Nie możesz usunąć wszystkich IRMA, ponieważ logować się możesz jedynie korzystając z IRMA.
Nie będziesz mógł się zalogować bez IRMA.',
	'irmadelete-success' => 'IRMA został pomyślnie usunięty z Twojego konta.',
	'irmadelete-error' => 'Wystąpił błąd podczas usuwania powiązania Twojego konta z IRMA.',
	'irma-irmas-were-not-merged' => 'IRMA nie zostały połączone w trakcie scalania kont użytkownika.',
	'prefs-irma-hide-irma' => 'Ukryj mój adres URL IRMA na stronie użytkownika, jeśli zaloguję się za pomocą IRMA.',
	'prefs-irma-trusted-sites' => 'Zaufane witryny',
	'irma-hide-irma-label' => 'Ukryj mój adres URL IRMA na stronie użytkownika, jeśli zaloguję się za pomocą IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Aktualizuj następujące informacje o mnie z IRMA przy każdym logowaniu', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA powiązane z Twoim kontem:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Akcja',
	'irma-urls-registration' => 'Data rejestracji',
	'irma-urls-delete' => 'Usuń',
	'irma-add-url' => 'Dodaj nowe IRMA do swojego konta',
	'irma-trusted-sites-table-header-column-url' => 'Zaufane witryny',
	'irma-trusted-sites-delete-link-action-text' => 'Usuń',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Potwierdź',
	'irma-local-identity' => 'Twój IRMA:',
	'irma-login-or-create-account' => 'Zaloguj się lub utwórz nowe konto',
	'irma-provider-label-irma' => 'Wprowadź adres IRMA',
	'irma-provider-label-google' => 'Zaloguj się korzystając z konta Google',
	'irma-provider-label-yahoo' => 'Zaloguj się korzystając z konta Yahoo',
	'irma-provider-label-aol' => 'Wprowadź nazwę wyświetlaną AOL',
	'irma-provider-label-wmflabs' => 'Zaloguj się korzystając z konta Wmflabs',
	'irma-provider-label-other-username' => 'Wprowadź swoją nazwę użytkownika $1',
	'specialpages-group-irma' => 'IRMA – strony diagnostyczne i statusu',
	'right-irma-converter-access' => 'Można dodać lub przystosować ich konto do używania tożsamości IRMA',
	'right-irma-dashboard-access' => 'Standardowy dostęp do zarządzania IRMA',
	'right-irma-dashboard-admin' => 'Administracyjny dostęp do zarządzania IRMA',
	'irma-dashboard-title' => 'Zarządzanie IRMA',
	'irma-dashboard-title-admin' => 'Zarządzanie IRMA (administrator)',
	'irma-dashboard-introduction' => 'Bieżące ustawienia rozszerzenia IRMA ([$1 pomoc])',
	'irma-dashboard-number-irma-users' => 'Liczba użytkowników z IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Wszystkich IRMA',
	'irma-dashboard-number-users-without-irma' => 'Liczba użytkowników bez IRMA',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'irma-desc' => "Intra ant la wiki con [//irma.net/ IRMA], e intra ant j'àutri sit dl'aragnà IRMA con un cont utent wiki",
	'irmalogin' => 'Intré ant ël sistema / creé un cont con IRMA',
	'irmaserver' => 'servent IRMA',
	'irmaxrds' => 'Archivi Yadis',
	'irmaconvert' => 'Convertidor IRMA',
	'irmaerror' => 'Eror ëd verìfica',
	'irmaerrortext' => "A l'é capitaje n'eror an verificand l'adrëssa IRMA.",
	'irmaconfigerror' => "Eror ëd configurassion d'IRMA",
	'irmaconfigerrortext' => "La configurassion ëd memorisassion d'IRMA për sta wiki-sì a l'é pa bon-a.
Për piasì ch'a consulta n'[[Special:ListUsers/sysop|aministrator]].",
	'irmapermission' => "Eror ëd përmess d'IRMA",
	'irmapermissiontext' => "L'IRMA ch'a l'ha dàit a peul pa intré an sto servent-sì.",
	'irmacancel' => 'Verìfica scancelà',
	'irmacanceltext' => "La verìfica dl'adrëssa IRMA a l'é stàita scancelà.",
	'irmafailure' => 'verìfica falìa',
	'irmafailuretext' => 'Verìfica ëd l\'adrëssa IRMA falìa. Messagi d\'eror: "$1"',
	'irmasuccess' => 'Verìfica andàita bin',
	'irmasuccesstext' => "'''Verìfica e intrà ant ël sistem da bin com utent $1'''.

Sò IRMA a l'é $2 .

Cost e d'àutri ospionaj IRMA a peulo esse gestì ant la [[Special:Preferences#mw-prefsection-irma|scheda IRMA]] dij sò gust.<br />
Na ciav opsional dël cont a peul esse giontà an sò [[Special:Preferences#mw-prefsection-personal|Profil utent]].",
	'irmausernameprefix' => 'Utent IRMA',
	'irmaserverlogininstructions' => "$3 a ciama ch'a anserissa soa ciav për soa pàgina $1 utent $2 (costa a l'é soa anliura IRMA).",
	'irmatrustinstructions' => "Contròla s'it veule condivide dat con $1.",
	'irmaallowtrust' => 'A përmët a $1 ëd fidesse dë sto cont utent-sì.',
	'irmanopolicy' => "Ël sit a l'ha pa spessificà dle régole ëd riservatëssa.",
	'irmapolicy' => 'Contròla le <a target="_new" href="$1">régole ëd riservatëssa</a> për savèjne ëd pi.',
	'irmaoptional' => 'Opsional',
	'irmarequired' => 'Obligatòri',
	'irmanickname' => 'Stranòm',
	'irmafullname' => 'Nòm complet', # Fuzzy
	'irmaemail' => 'Adrëssa ëd pòsta eletrònica',
	'irmalanguage' => 'Lenga',
	'irmatimezone' => 'Fus orari',
	'irmachooselegend' => 'Sèrnia ëd lë stranòm e dël cont',
	'irmachooseinstructions' => "Tùit j'utent a l'han dabzògn ëd në stranòm,
a peul sern-ne un da j'opsion sì-sota.",
	'irmachoosenick' => 'Tò stranòm ($1)',
	'irmachoosefull' => 'Tò nòm complet ($1)', # Fuzzy
	'irmachooseurl' => 'Un nòm sërnù da tò IRMA ($1)',
	'irmachooseauto' => 'Un nòm generà da sol ($1)',
	'irmachoosemanual' => 'Un nòm sërnù da ti:',
	'irmachooseexisting' => 'Un cont esistent an sta wiki-sì',
	'irmachooseusername' => 'nòm utent:',
	'irmachoosepassword' => 'Ciav:',
	'irmaconvertinstructions' => "Sta forma-sì a-j përmët ëd cangé sò cont utent për dovré n'adrëssa IRMA o për gionté d'adrësse IRMA",
	'irmaconvertoraddmoreids' => "Convertì a IRMA o gionté n'àutra adrëssa IRMA",
	'irmaconvertsuccess' => 'Convertì da bin a IRMA',
	'irmaconvertsuccesstext' => "A l'ha convertì da bin sò IRMA a $1",
	'irma-convert-already-your-irma-text' => "Cost-sì a l'é già sò IRMA.", # Fuzzy
	'irma-convert-other-users-irma-text' => "Cost-sì a l'é l'IRMA ëd cheidun d'àutri.", # Fuzzy
	'irmaalreadyloggedin' => "A l'é già intrà ant ël sistema.",
	'irmaalreadyloggedintext' => "'''A l'é già intrà ant ël sistema, $1!'''

A peul gestì (vardé, scancelé, e gionté d'àutri) IRMA ant la [[Special:Preferences#mw-prefsection-irma|Scheda IRMA]] dij sò gust.",
	'irmanousername' => 'Gnun nòm utent spessificà.',
	'irmabadusername' => 'Nòm utent spessificà pa bon.',
	'irmaautosubmit' => 'Sta pàgina-sì a conten un formolari che a dovrìa esse spedì automaticament se chiel a l\'ha JavaScript abilità.
Dësnò, ch\'a preuva ël boton "Continua".',
	'irmaclientonlytext' => "A peul pa dovré dij cont da sta wiki-sì com IRMA dzora a n'àutr sit.",
	'irmaloginlabel' => 'Adrëssa IRMA',
	'irmalogininstructions' => "{{SITENAME}} a sosten lë stàndard [//irma.net/ IRMA] për na signadura sola antra sit ëd l'aragnà. IRMA a-j përmët ëd rintré an vàire sit diferent an sl'aragnà sensa dovré na ciav diferenta për mincadun. (Ch'a lesa [//en.wikipedia.org/wiki/IRMA Artìcol IRMA ëd Wikipedia] për savèjne ëd pi).
A-i son già tanti [//irma.net/get/ fornitor d'IRMA], e a podrìa già avèj un cont abilità a IRMA dzora a n'àutr servissi.",
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} a-j përmët ''mach'' d'intré ant ël sistema con IRMA.",
	'irmalogininstructions-passwordloginallowed' => "S'a l'has già un cont dzora {{SITENAME}}, a peul [[Special:UserLogin|intré ant ël sistema]] con sò stranòm e soa ciav com al sòlit. Per dovré IRMA ant l'avnì, a peul [[Special:IRMAConvert|convertì sò cont vers IRMA]] apress esse intrà ant ël sistema normalment.",
	'irmaupdateuserinfo' => 'Modìfica mie anformassion përsonaj:',
	'irmadelete' => 'Scancela IRMA',
	'irmadelete-text' => 'An sgnacand ël boton "{{int:irmadelete-button}}", it gavras l\'IRMA $1 da tò cont.
It saras pa pi bon a intré con sto IRMA-sì.',
	'irmadelete-button' => 'Conferma',
	'irmadeleteerrornopassword' => "A peul pa scancelé tùit ij sò IRMA përchè tò sont a l'ha pa 'd ciav.
A podrà pa intré ant ël sistema sensa n'IRMA.",
	'irmadeleteerrorirmaonly' => "A peul pa scancelé tùit ij sò IRMA përchè a peule intré intré ant ël sistema mach con IRMA.
A podrà pa intré sensa n'IRMA.",
	'irmadelete-success' => "L'IRMA a l'é stàit gavà da bin da tò cont.",
	'irmadelete-error' => "A l'é capitaje n'eror an gavand l'IRMA da tò cont.",
	'irma-irmas-were-not-merged' => "J'IRMA a son pa stàit unì cand a son unisse ij cont d'utent.",
	'prefs-irma-hide-irma' => "Stërmé soa adrëssa IRMA dzora a soa pàgina utent, s'a intra con openID.",
	'irma-hide-irma-label' => "Stërmé soa adrëssa IRMA dzora a soa pàgina utent, s'a intra con openID.", # Fuzzy
	'irma-userinfo-update-on-login-label' => "Modifiché j'anformassion përsonaj sì-sota IRMA minca vira ch'i intro:", # Fuzzy
	'irma-associated-irmas-label' => 'IRMA associà con tò cont:',
	'irma-urls-url' => "Adrëssa an sl'aragnà",
	'irma-urls-action' => 'Assion',
	'irma-urls-registration' => 'Data ëd registrassion',
	'irma-urls-delete' => 'Scancela',
	'irma-add-url' => 'Gionta un neuv IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Intré ant ël sistema o creé un cont neuv',
	'irma-provider-label-irma' => "Ch'a anserissa soa adrëssa IRMA",
	'irma-provider-label-google' => 'Intra an dovrand tò cont Google',
	'irma-provider-label-yahoo' => 'Intra an dovrand tò cont Yahoo',
	'irma-provider-label-aol' => "Ch'a anserissa sò nòm AOL",
	'irma-provider-label-other-username' => "Ch'a anserissa sò nòm utent $1",
	'specialpages-group-irma' => 'Pàgina ëd sërvissi IRMA e anformassion an slë statù',
	'right-irma-converter-access' => "A peul gionté o convertì sò cont për dovré j'identità IRMA",
	'right-irma-dashboard-access' => 'Acess predefinì al cruscòt IRMA',
	'right-irma-dashboard-admin' => "Acess dl'aministrator al cruscòt IRMA",
	'irma-dashboard-title' => 'Cruscòt IRMA',
	'irma-dashboard-title-admin' => 'Cruscòt IRMA (aministrator)',
	'irma-dashboard-introduction' => "J'ampostassion corente dl'estension d'IRMA ([$1 agiut])",
	'irma-dashboard-number-irma-users' => "Nùmer d'utent con IRMA",
	'irma-dashboard-number-irmas-in-database' => "Nùmer d'IRMA (total)",
	'irma-dashboard-number-users-without-irma' => "Nùmer d'utent sensa IRMA",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'irmaoptional' => 'ستاسې په خوښه',
	'irmarequired' => 'اړين مالومات',
	'irmanickname' => 'کورنی نوم',
	'irmafullname' => 'اصلي نوم',
	'irmaemail' => 'برېښليک پته',
	'irmalanguage' => 'ژبه',
	'irmatimezone' => 'د وخت سيمه',
	'irmachooselegend' => 'د کارن نوم او ګڼون خوښه',
	'irmachooseinstructions' => 'ټولو کارنانو ته د يوه کورني نوم اړتيا شته؛
تاسې يو نوم د لاندينيو خوښنو نه ځانته ټاکلی شی.',
	'irmachoosenick' => 'ستاسې کورنی نوم ($1)',
	'irmachoosefull' => 'ستاسې اصلي نوم ($1)',
	'irmachoosemanual' => 'ستاسې د خوښې يو نوم:',
	'irmachooseusername' => 'کارن-نوم:',
	'irmachoosepassword' => 'پټنوم:',
	'irmanousername' => 'هېڅ يو کارن-نوم نه دی ځانګړی شوی.',
	'irmabadusername' => 'يو ناسم کارن-نوم مو ځانګړی کړی.',
	'irmadelete-button' => 'تاييد',
	'irma-urls-action' => 'چاره',
	'irma-urls-delete' => 'ړنګول',
	'irma-login-or-create-account' => 'ننوتل او يا يو نوی ګڼون جوړول',
	'irma-provider-label-google' => 'د ګووګل د ګڼون په مرسته ننوتل',
	'irma-provider-label-yahoo' => 'د ياهو د ګڼون په مرسته ننوتل',
	'irma-provider-label-other-username' => 'تاسې خپل $1 کارن-نوم وليکۍ',
);

/** Portuguese (português)
 * @author Giro720
 * @author Hamilton Abreu
 * @author Lijealso
 * @author Luckas
 * @author Malafaya
 * @author SandroHc
 * @author Waldir
 */
$messages['pt'] = array(
	'irma-desc' => 'Autentique-se na wiki com um [//irma.net/ IRMA] e autentique-se noutros sites que usem IRMA com uma conta de utilizador wiki',
	'irmalogin' => 'Entrar ou criar conta com IRMA',
	'irmaserver' => 'Servidor IRMA',
	'irmaxrds' => 'Ficheiro Yadis',
	'irmaconvert' => 'Conversor de IRMA',
	'irmaerror' => 'Erro de verificação',
	'irmaerrortext' => 'Ocorreu um erro durante a verificação da URL IRMA.',
	'irmaconfigerror' => 'Erro de Configuração do IRMA',
	'irmaconfigerrortext' => 'A configuração de armazenamento IRMA para esta wiki é inválida.
Por favor, consulte um [[Special:ListUsers/sysop|administrador]].',
	'irmapermission' => 'Erro de permissões IRMA',
	'irmapermissiontext' => 'O IRMA fornecido não está autorizado a autenticar-se neste servidor.',
	'irmacancel' => 'Verificação cancelada',
	'irmacanceltext' => 'A verificação da URL IRMA foi cancelada.',
	'irmafailure' => 'Verificação falhou',
	'irmafailuretext' => 'A verificação da URL IRMA falhou. Mensagem de erro: "$1"',
	'irmasuccess' => 'Verificação com sucesso',
	'irmasuccesstext' => "'''Verificado e autenticado como $1'''.

O seu IRMA é $2.

Este IRMA pode ser gerido no separador do [[Special:Preferences#mw-prefsection-irma|IRMA]] das tuas preferências.<br />Uma senha da conta opcional pode ser adicionada no teu [[Special:Preferences#mw-prefsection-personal|Perfil do utilizador]].",
	'irmausernameprefix' => 'UtilizadorIRMA',
	'irmaserverlogininstructions' => '$3 pede que introduza a palavra-chave do seu utilizador $2 página $1 (a URL do seu IRMA)',
	'irmatrustinstructions' => 'Verifique se pretender partilhar dados com $1.',
	'irmaallowtrust' => 'Permitir que $1 confie nesta conta de utilizador.',
	'irmanopolicy' => 'O site não especificou uma política de privacidade.',
	'irmapolicy' => 'Consulte a <a target="_new" href="$1">política de privacidade</a> para mais informações.',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Requerido',
	'irmanickname' => 'Alcunha',
	'irmafullname' => 'Nome completo', # Fuzzy
	'irmaemail' => 'Correio electrónico',
	'irmalanguage' => 'Língua',
	'irmatimezone' => 'Fuso horário',
	'irmachooselegend' => 'Escolha do nome de utilizador e da conta',
	'irmachooseinstructions' => 'Todos os utilizadores precisam de uma alcunha;
pode escolher uma das opções abaixo.',
	'irmachoosenick' => 'A sua alcunha ($1)',
	'irmachoosefull' => 'O seu nome completo ($1)', # Fuzzy
	'irmachooseurl' => 'Um nome escolhido a partir do seu IRMA ($1)',
	'irmachooseauto' => 'Um nome gerado automaticamente ($1)',
	'irmachoosemanual' => 'Um nome à sua escolha:',
	'irmachooseexisting' => 'Uma conta existente nesta wiki',
	'irmachooseusername' => 'Nome de utilizador:',
	'irmachoosepassword' => 'Palavra-chave:',
	'irmaconvertinstructions' => 'Este formulário permite-lhe alterar a sua conta de utilizador para usar uma URL IRMA ou adicionar mais URLs IRMA.',
	'irmaconvertoraddmoreids' => 'Converter para IRMA ou adicionar outra URL IRMA',
	'irmaconvertsuccess' => 'Convertido para IRMA com sucesso',
	'irmaconvertsuccesstext' => 'Converteu com sucesso o seu IRMA para $1.',
	'irma-convert-already-your-irma-text' => 'Esse já é o seu IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Esse é o IRMA de outra pessoa.', # Fuzzy
	'irmaalreadyloggedin' => 'Já está autenticado.',
	'irmaalreadyloggedintext' => "'''Já está autenticado, $1!'''

Pode gerir (ver, eliminar, etc.) IRMAs no separador [[Special:Preferences#mw-prefsection-irma|IRMA]] das suas preferências.",
	'irmanousername' => 'Nenhum nome de utilizador especificado.',
	'irmabadusername' => 'Nome de utilizador especificado inválido.',
	'irmaautosubmit' => 'Esta página inclui um formulário que deverá ser automaticamente submetido se tiver JavaScript ativado.
Caso contrário, utilize o botão "Continue" (Continuar).',
	'irmaclientonlytext' => 'Pode usar contas desta wiki como IRMAs noutro site.',
	'irmaloginlabel' => 'URL do IRMA',
	'irmalogininstructions' => 'A {{SITENAME}} suporta o padrão [//irma.net/ IRMA] para autenticação unificada entre sites na internet.
O IRMA permite-lhe autenticar-se em vários sites sem usar uma palavra-chave diferente para cada um
(consulte o [//pt.wikipedia.org/wiki/IRMA artigo IRMA da Wikipédia] para mais informações). Existem vários [//irma.net/get fornecedores de IRMA] e você pode já ter uma conta ativada para IRMA noutro serviço.',
	'irmalogininstructions-irmaloginonly' => "A {{SITENAME}} ''só'' permite que se autentique com um IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Se já tem uma conta na {{SITENAME}}, pode [[Special:UserLogin|entrar]] com o seu nome de utilizador e palavra-chave, como normalmente.
Para usar o IRMA no futuro, pode [[Special:IRMAConvert|converter a sua conta para IRMA]] depois de ter entrado normalmente.',
	'irmaupdateuserinfo' => 'Atualizar minha informação pessoal:',
	'irmadelete' => 'Eliminar IRMA',
	'irmadelete-text' => 'Ao clicar o botão "{{int:irmadelete-button}}", irá eliminar o IRMA $1 da sua conta.
Não poderá voltar a autenticar-se com este IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'Não pode apagar todos os seus IRMA porque a sua conta não tem palavra-chave.
Sem um IRMA não se poderia autenticar.',
	'irmadeleteerrorirmaonly' => 'Não pode apagar todos os seus IRMA, porque só se pode autenticar usando um IRMA.
Sem um IRMA não se poderia autenticar.',
	'irmadelete-success' => 'O IRMA foi removido da sua conta com sucesso.',
	'irmadelete-error' => 'Ocorreu um erro ao remover o IRMA da sua conta.',
	'irma-irmas-were-not-merged' => 'Os IRMAs não foram fundidos ao fundir as contas.',
	'prefs-irma-hide-irma' => 'Esconder o seu IRMA na sua página de utilizador, se se autenticar com IRMA.',
	'irma-hide-irma-label' => 'Esconder o seu IRMA na sua página de utilizador, se se autenticar com IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Actualizar a seguinte informação a partir do meu IRMA de cada vez que me autentico:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMAs associados à sua conta:',
	'irma-urls-action' => 'Ação',
	'irma-urls-delete' => 'Apagar',
	'irma-add-url' => 'Adicionar novo IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Entrar ou criar uma conta nova',
	'irma-provider-label-irma' => 'Introduza a sua URL IRMA',
	'irma-provider-label-google' => 'Entrar usando a sua conta do Google',
	'irma-provider-label-yahoo' => 'Entrar usando a sua conta do Yahoo',
	'irma-provider-label-aol' => 'Introduza o seu nome de utilizador AOL',
	'irma-provider-label-other-username' => 'Introduza o seu nome de utilizador $1',
	'specialpages-group-irma' => 'Páginas de serviço e informação do estado do IRMA',
	'right-irma-dashboard-access' => 'Acesso normal ao painel do IRMA',
	'right-irma-dashboard-admin' => 'Acesso de administrador ao painel do IRMA',
	'irma-dashboard-title' => 'Painel do IRMA',
	'irma-dashboard-title-admin' => 'Painel do IRMA (administrador)',
	'irma-dashboard-introduction' => 'As configurações atuais da extensão IRMA ([$1 ajuda])',
	'irma-dashboard-number-irma-users' => 'Número de utilizadores com IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Número de IRMAs (total)',
	'irma-dashboard-number-users-without-irma' => 'Número de utilizadores sem IRMA',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Danielsouzat
 * @author Eduardo.mps
 * @author Hamilton Abreu
 * @author Luckas
 * @author ZehRique
 * @author 555
 */
$messages['pt-br'] = array(
	'irma-desc' => 'Autentique-se no wiki com um [//irma.net/ IRMA], e autentique-se em outros sítios que usem IRMA com uma conta de utilizador wiki',
	'irmalogin' => 'Autenticação com IRMA', # Fuzzy
	'irmaserver' => 'Servidor IRMA',
	'irmaxrds' => 'Arquivo Yadis',
	'irmaconvert' => 'Conversor de IRMA',
	'irmaerror' => 'Erro de verificação',
	'irmaerrortext' => 'Ocorreu um erro durante a verificação da URL IRMA.',
	'irmaconfigerror' => 'Erro de Configuração do IRMA',
	'irmaconfigerrortext' => 'A configuração de armazenamento IRMA para este wiki é inválida.
Por favor, consulte um [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Erro de permissões IRMA',
	'irmapermissiontext' => 'O IRMA fornecido não está autorizado a autenticar-se neste servidor.',
	'irmacancel' => 'Verificação cancelada',
	'irmacanceltext' => 'A verificação da URL IRMA foi cancelada.',
	'irmafailure' => 'Verificação falhou',
	'irmafailuretext' => 'A verificação da URL IRMA falhou. Mensagem de erro: "$1"',
	'irmasuccess' => 'Verificação com sucesso',
	'irmasuccesstext' => 'A verificação da URL IRMA foi bem sucedida.', # Fuzzy
	'irmausernameprefix' => 'UtilizadorIRMA',
	'irmaserverlogininstructions' => 'Introduza a sua palavra-chave abaixo para se autenticar em $3 como utilizador $2 (página de utilizador $1).', # Fuzzy
	'irmatrustinstructions' => 'Verifique se pretende compartilhar dados com $1.',
	'irmaallowtrust' => 'Permitir que $1 confie nesta conta de usuário.',
	'irmanopolicy' => 'O sítio não especificou uma política de privacidade.',
	'irmapolicy' => 'Consulte a <a target="_new" href="$1">política de privacidade</a> para mais informações.',
	'irmaoptional' => 'Opcional',
	'irmarequired' => 'Requerido',
	'irmanickname' => 'Apelido',
	'irmafullname' => 'Nome real',
	'irmaemail' => 'Endereço de e-mail',
	'irmalanguage' => 'Língua',
	'irmatimezone' => 'Fuso horário',
	'irmachooselegend' => 'Escolha do nome de usuário', # Fuzzy
	'irmachooseinstructions' => 'Todos os utilizadores precisam de um apelido;
pode escolher uma das opções abaixo.',
	'irmachoosenick' => 'Seu apelido ($1)',
	'irmachoosefull' => 'O seu nome real ($1)',
	'irmachooseurl' => 'Um nome escolhido a partir do seu IRMA ($1)',
	'irmachooseauto' => 'Um nome gerado automaticamente ($1)',
	'irmachoosemanual' => 'Um nome à sua escolha:',
	'irmachooseexisting' => 'Uma conta existente nesta wiki',
	'irmachooseusername' => 'Nome de usuário:',
	'irmachoosepassword' => 'Senha:',
	'irmaconvertinstructions' => 'Este formulário lhe permite alterar sua conta de usuário para usar uma URL IRMA ou adicionar mais URLs IRMA.',
	'irmaconvertoraddmoreids' => 'Converter para IRMA ou adicionar outra URL IRMA',
	'irmaconvertsuccess' => 'Convertido para IRMA com sucesso',
	'irmaconvertsuccesstext' => 'Você converteu com sucesso o seu IRMA para $1.',
	'irma-convert-already-your-irma-text' => 'Esse já é o seu IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Esse é o IRMA de outra pessoa.', # Fuzzy
	'irmaalreadyloggedin' => "'''Você já se encontra autenticado, $1!'''

Se no futuro pretender usar IRMA para se autenticar, pode [[Special:IRMAConvert|converter a sua conta para usar IRMA]].", # Fuzzy
	'irmanousername' => 'Nenhum nome de usuário especificado.',
	'irmabadusername' => 'Nome de usuário especificado inválido.',
	'irmaautosubmit' => 'Esta página inclui um formulário que deverá ser automaticamente submetido se tiver JavaScript ativado.
Caso contrário, utilize o botão "Continue" (Continuar).',
	'irmaclientonlytext' => 'Você pode usar contas deste wiki como IRMAs em outro sítio.',
	'irmaloginlabel' => 'URL do IRMA',
	'irmalogininstructions' => '{{SITENAME}} suporta o padrão [//irma.net/ IRMA] para autenticação única entre sítios Web.
O IRMA lhe permite autenticar-se em diversos sítios Web sem usar uma senha diferente em cada um.
(Veja [//pt.wikipedia.org/wiki/IRMA o artigo IRMA na Wikipédia] para mais informação.)

Existem muitos [http://wiki.irma.net/Public_IRMA_providers fornecedores de IRMA], e você poderá já ter uma conta ativada para IRMA em outro serviço.',
	'irmaupdateuserinfo' => 'Atualizar minhas informações pessoais:',
	'irmadelete' => 'Excluir IRMA',
	'irmadelete-text' => 'Ao clicar no botão "{{int:irmadelete-button}}", você removerá o IRMA $1 de sua conta.
Você não poderá mais efetuar autenticação com este IRMA.',
	'irmadelete-button' => 'Confirmar',
	'irmadeleteerrornopassword' => 'Você não pode apagar todos os seus IRMA porque a sua conta não tem uma senha.
Você ficaria impossibilitado de entrar na sua conta sem um IRMA.',
	'irmadeleteerrorirmaonly' => 'Você não pode apagar todos os seus IRMA porque só pode entrar com IRMA.
Você não poderia entrar sem um IRMA.',
	'irmadelete-success' => 'O IRMA foi removido de sua conta com sucesso.',
	'irmadelete-error' => 'Ocorreu um erro enquanto removia o IRMA de sua conta.',
	'prefs-irma-hide-irma' => 'Ocultar o seu URL de IRMA da sua página de usuário ao se autenticar com IRMA.',
	'irma-hide-irma-label' => 'Ocultar o seu URL de IRMA da sua página de usuário ao se autenticar com IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Atualizar a seguinte informação a partir da minha "persona" IRMA cada vez que me autentico', # Fuzzy
	'irma-associated-irmas-label' => 'IRMAs associadas à sua conta:',
	'irma-urls-action' => 'Ação',
	'irma-urls-delete' => 'Excluir',
	'irma-add-url' => 'Adicionar novo IRMA', # Fuzzy
	'irma-trusted-sites-table-header-column-action' => 'Ação',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Confirmar',
	'irma-login-or-create-account' => 'Entrar ou Criar Nova Conta', # Fuzzy
	'irma-provider-label-irma' => 'Introduza a sua URL IRMA',
	'irma-provider-label-google' => 'Entrar usando a sua conta do Google',
	'irma-provider-label-yahoo' => 'Entrar usando a sua conta do Yahoo',
	'irma-provider-label-aol' => 'Digite seu nome de usuário AOL',
	'irma-provider-label-other-username' => 'Introduza o seu nome de utilizador $1',
);

/** Romanian (română)
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Memo18
 * @author Minisarm
 * @author Misterr
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'irma-desc' => 'Autentificați-vă pe acest wiki folosind un [//irma.net/ IRMA] și conectați-vă la alte site-uri web IRMA cu un cont de utilizator wiki',
	'irmalogin' => 'Autentificare / creare cont cu IRMA',
	'irmaserver' => 'Server IRMA',
	'irmaxrds' => 'Fișier Yadis',
	'irmaconvert' => 'Convertor IRMA',
	'irmaerror' => 'Eroare de verificare',
	'irmaerrortext' => 'A avut loc o eroare în timpul verificării URL-ului IRMA',
	'irmaconfigerror' => 'Eroare de configurare IRMA',
	'irmaconfigerrortext' => 'Configurarea stocării IRMA pentru acest wiki este invalidă.
Vă rugăm să contactați un [[Special:ListUsers/sysop|administrator]].',
	'irmapermission' => 'Eroare de permisiune IRMA',
	'irmapermissiontext' => 'IRMA-ul furnizat nu poate fi folosit pe acest server pentru autentificare.',
	'irmacancel' => 'Verificare anulată',
	'irmacanceltext' => 'Verificarea URL-ului IRMA a fost anulată.',
	'irmafailure' => 'Verificare eșuată',
	'irmafailuretext' => 'Verificarea URL-ului IRMA a eșuat. Mesaj de eroare: "$1"',
	'irmasuccess' => 'Verificare cu succes',
	'irmasuccesstext' => "'''Verificare finalizată cu succes și autentificare ca utilizator $1'''.

IRMA-ul dumneavoastră este $2 .

Acesta și alte IRMA-uri opționale pot fi administrate în [[Special:Preferences#mw-prefsection-irma|fila IRMA]] din cadrul preferințelor dumneavoastră.<br />
O parolă opțională a contului poate fi adăugată în secțiunea [[Special:Preferences#mw-prefsection-personal|Informații personale]].",
	'irmausernameprefix' => 'Utilizator IRMA',
	'irmaserverlogininstructions' => '$3 vă solicită să introduceți parola pentru pagina $2 dumneavoastră de utilizator $1 (URL IRMA)',
	'irmatrustinstructions' => 'Verificați dacă doriți să partajați datele cu $1.',
	'irmaallowtrust' => 'Permite lui $1 să aibă încredere în acest cont de utilizator.',
	'irmanopolicy' => 'Site-ul nu a specificat politica de confidențialitate.',
	'irmapolicy' => 'Verificați <a target="_new" href="$1">politica de confidențialitate</a> pentru mai multe informații.',
	'irmaoptional' => 'Opțional',
	'irmarequired' => 'Necesar',
	'irmanickname' => 'Poreclă',
	'irmafullname' => 'Nume complet:', # Fuzzy
	'irmaemail' => 'Adresă e-mail',
	'irmalanguage' => 'Limbă',
	'irmatimezone' => 'Fus orar',
	'irmachooselegend' => 'Alegerea numelui de utilizator și a contului',
	'irmachooseinstructions' => 'Toți utilizatorii necesită o poreclă;
se poate alege una din opțiunile de mai jos.',
	'irmachoosenick' => 'Porecla dvs. ($1)',
	'irmachoosefull' => 'Numele întreg ($1)', # Fuzzy
	'irmachooseurl' => 'Un nume ales din IRMA-ul dvs. ($1)',
	'irmachooseauto' => 'Un nume generat automat ($1)',
	'irmachoosemanual' => 'Un nume la alegere:',
	'irmachooseexisting' => 'Un cont existent pe acest wiki',
	'irmachooseusername' => 'Nume de utilizator:',
	'irmachoosepassword' => 'Parolă:',
	'irmaconvertsuccess' => 'Convertit cu succes la IRMA',
	'irmaconvertsuccesstext' => 'V-ați convertit cu succes contul IRMA la $1.',
	'irma-convert-already-your-irma-text' => 'Acesta este deja IRMA-ul dumneavoastră.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Acesta este IRMA-ul altcuiva.', # Fuzzy
	'irmaalreadyloggedin' => 'Sunteți deja autentificat.',
	'irmanousername' => 'Nici un nume de utilizator specificat.',
	'irmabadusername' => 'Nume de utilizator specificat greșit.',
	'irmaloginlabel' => 'URL IRMA',
	'irmaupdateuserinfo' => 'Actualizează informaţiile mele personale:',
	'irmadelete' => 'Şterge IRMA',
	'irmadelete-button' => 'Confirmă',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Acțiune',
	'irma-urls-registration' => 'Data înregistrării',
	'irma-urls-delete' => 'Şterge',
	'irma-add-url' => 'Adaugă un nou IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Autentificați-vă sau creați-vă un nou cont',
	'irma-provider-label-google' => 'Autentificare folosind contul Google',
	'irma-provider-label-yahoo' => 'Autentificare folosind contul Yahoo',
	'irma-provider-label-other-username' => 'Introduceți numele dumneavoastră de $1 utilizator.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'irmaserver' => 'Server IRMA',
	'irmaxrds' => 'File Yadis',
	'irmaconvert' => 'Convertitore IRMA',
	'irmaoptional' => 'Opzionele',
	'irmarequired' => 'Richieste',
	'irmanickname' => 'Soprannome',
	'irmafullname' => 'Nome vere',
	'irmaemail' => 'Indirizze e-mail',
	'irmalanguage' => 'Lènghe',
	'irmatimezone' => "Orarie d'a zone",
	'irmachoosenick' => "'U soprannome tune ($1)",
	'irmachoosefull' => "'U nome vere tune ($1)",
	'irmachoosemanual' => "Scacchie 'nu nome:",
	'irmachooseusername' => "Nome de l'utende:",
	'irmachoosepassword' => 'Passuord:',
	'irmanousername' => 'Nisciune nome utende specificate.',
	'irmabadusername' => "'U nome utende specificate non g'è valide.",
	'irmaloginlabel' => 'URL de IRMA',
	'irmadelete-button' => 'Conferme',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Azione',
	'irma-urls-registration' => 'Orarie de reggistrazzione',
	'irma-urls-delete' => 'Scangille',
	'irma-add-url' => "Aggiunge 'nu nuève IRMA a 'u cunde tune",
	'irma-login-or-create-account' => "Trase o ccreje 'nu cunde utende nuève",
	'irma-provider-label-irma' => "Mitte l'URL toje de IRMA",
	'irma-provider-label-google' => "Tràse ausanne 'u cunde utende de Google",
	'irma-provider-label-yahoo' => "Tràse ausanne 'u cunde utende de Yahoo",
	'irma-provider-label-aol' => "Mitte 'u tue nome utende AOL",
	'irma-provider-label-other-username' => "Mitte 'u tue $1 nome utende",
	'specialpages-group-irma' => "Pàggene de servizie de IRMA e 'mbormaziune de state",
	'irma-dashboard-title' => 'Cruscotte de IRMA',
	'irma-dashboard-title-admin' => 'Cruscotte de IRMA (amministratore)',
	'irma-dashboard-number-irma-users' => 'Numere de utinde cu IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Numere de IRMA (totale)',
	'irma-dashboard-number-users-without-irma' => 'Numere de utinde senze IRMA',
);

/** Faeag Rotuma (Faeag Rotuma)
 * @author Jose77
 */
$messages['rtm'] = array(
	'irmachoosepassword' => 'Ou password:',
);

/** Russian (русский)
 * @author Adata80
 * @author Aleksandrit
 * @author Ferrer
 * @author Ignatus
 * @author Kaganer
 * @author Lockal
 * @author Okras
 * @author Putnik
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'irma-desc' => 'Вход в вики с помощью [//irma.net/ IRMA], а также вход на другие сайты поддерживающие IRMA с помощью учётной записи в вики',
	'irmalogin' => 'Войти / создать учетную запись с IRMA',
	'irmaserver' => 'Сервер IRMA',
	'irmaxrds' => 'Файл Yadis',
	'irmaconvert' => 'Преобразователь IRMA',
	'irmaerror' => 'Ошибка проверки полномочий',
	'irmaerrortext' => 'Во время проверки адреса IRMA произошла ошибка.',
	'irmaconfigerror' => 'Ошибка настройки IRMA',
	'irmaconfigerrortext' => 'Настройка хранилища IRMA для этой вики ошибочна.
Пожалуйста, обратитесь к [[Special:ListUsers/sysop|администратору сайта]].',
	'irmapermission' => 'Ошибка прав доступа IRMA',
	'irmapermissiontext' => 'Указанный IRMA не позволяет войти на этот сервер.',
	'irmacancel' => 'Проверка отменена',
	'irmacanceltext' => 'Проверка адреса IRMA была отменена.',
	'irmafailure' => 'Проверка неудачна',
	'irmafailuretext' => 'Проверка адреса IRMA завершилась неудачей. Сообщение об ошибке: «$1»',
	'irmasuccess' => 'Проверка прошла успешно',
	'irmasuccesstext' => "'''Успешная проверка. Вы вошли как $1.'''

Ваш идентификатор IRMA: ''$2''.

Этот и возможные дальнейшие идентификаторы IRMA могут быть настроены на [[Special:Preferences#mw-prefsection-irma|вкладке IRMA]] в ваших настройках.<br />
Необязательный пароль к учётной записи может быть добавлен в вашем [[Special:Preferences#mw-prefsection-personal|профиле пользователя]].",
	'irmausernameprefix' => 'УчастникIRMA',
	'irmaserverlogininstructions' => 'Введите ниже свой пароль, чтобы войти на $3 как участник $2 (личная страница $1 — это ваш IRMA URL).',
	'irmatrustinstructions' => 'Отметьте, если вы хотите предоставить доступ к данным для $1.',
	'irmaallowtrust' => 'Разрешить $1 доверять этой учётной записи.',
	'irmanopolicy' => 'Сайт не указал политику конфиденциальности.',
	'irmapolicy' => 'Дополнительную информацию см. в <a target="_new" href="$1">политике конфиденциальности</a>.',
	'irmaoptional' => 'необязательное',
	'irmarequired' => 'обязательное',
	'irmanickname' => 'Псевдоним',
	'irmafullname' => 'Настоящее имя',
	'irmaemail' => 'Адрес эл. почты',
	'irmalanguage' => 'Язык',
	'irmatimezone' => 'Часовой пояс',
	'irmachooselegend' => 'Выбор имени пользователя и учётной записи',
	'irmachooseinstructions' => 'Каждый участник должен иметь псевдоним;
вы можете выбрать один из представленных ниже.',
	'irmachoosenick' => 'Ваш ник ($1)',
	'irmachoosefull' => 'Ваше настоящее имя ($1)',
	'irmachooseurl' => 'Имя, полученное из вашего IRMA ($1)',
	'irmachooseauto' => 'Автоматически созданное имя ($1)',
	'irmachoosemanual' => 'Имя на ваш выбор:',
	'irmachooseexisting' => 'Существующая учётная запись в этой вики',
	'irmachooseusername' => 'имя участника:',
	'irmachoosepassword' => 'Пароль:',
	'irmaconvertinstructions' => 'Эта форма позволяет вам сменить использование вашей учётной записи на использование адреса IRMA, добавить несколько адресов IRMA.',
	'irmaconvertoraddmoreids' => 'Преобразовать в IRMA или добавить другой адрес IRMA',
	'irmaconvertsuccess' => 'Успешное преобразование в IRMA',
	'irmaconvertsuccesstext' => 'Вы успешно преобразовали свой IRMA в $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 уже связан с вашей учётной записью.',
	'irma-convert-other-users-irma-text' => '$1 — это чей-то чужой IRMA.
Вы не можете использовать IRMA другого участника.',
	'irmaalreadyloggedin' => 'Вы уже вошли.',
	'irmaalreadyloggedintext' => "''' Вы уже вошли,  $1!'''

Вы можете управлять (просматривать, удалять, добавлять) записи IRMA на [[Special:Preferences#mw-prefsection-irma|вкладке IRMA]] в ваших предпочтениях.",
	'irmanousername' => 'Не указано имя участника.',
	'irmabadusername' => 'Указано неверное имя участника.',
	'irmaautosubmit' => 'Эта страница содержит форму, которая должна быть автоматически отправлена, если у вас включён JavaScript.
Если этого не произошло, попробуйте нажать на кнопку «Продолжить».',
	'irmaclientonlytext' => 'Вы не можете использовать учётные записи из этой вики как IRMA на другом сайте.',
	'irmaloginlabel' => 'Адрес IRMA',
	'irmalogininstructions' => '{{SITENAME}} поддерживает стандарт [//irma.net/ IRMA], позволяющий использовать одну учётную запись для входа на различные веб-сайты.
IRMA позволяет вам заходить на различные веб-сайты без указания разных паролей для них
(подробнее см. [//ru.wikipedia.org/wiki/IRMA статью об IRMA в Википедии]).

Существует множество [//irma.net/get/ общедоступных провайдеров IRMA], возможно, вы уже имеете учётную запись IRMA на другом сайте.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} позволяет вам войти ''только'' с использованием IRMA.",
	'irmaupdateuserinfo' => 'Обновить мою личную информацию:',
	'irmadelete' => 'Удалить IRMA',
	'irmadelete-text' => 'Нажав на кнопку «{{int:irmadelete-button}}», Вы удалите IRMA $1 из своей учётной записи.
Вы больше не сможете входить с этим IRMA.',
	'irmadelete-button' => 'Подтвердить',
	'irmadeleteerrornopassword' => 'Вы не можете удалить все свои IRMA, так как у вашей учётной записи нет пароля.
У вас не будет возможности войти в систему без IRMA.',
	'irmadeleteerrorirmaonly' => 'Вы не можете удалить все свои IRMA, так как вам разрешено входить в систему только с использованием IRMA.
У вас не будет возможности войти в систему без IRMA.',
	'irmadelete-success' => 'IRMA успешно удалён из Вашей учётной записи.',
	'irmadelete-error' => 'Произошла ошибка при удалении IRMA из Вашей учётной записи.',
	'irma-irmas-were-not-merged' => 'IRMA(s) не были объединены при слиянии учетных записей.',
	'prefs-irma-hide-irma' => 'Скрывать ваш IRMA на вашей странице участника, если вы вошли с помощью IRMA.',
	'irma-hide-irma-label' => 'Скрывать ваш IRMA URL на вашей странице участника.',
	'irma-userinfo-update-on-login-label' => 'Поля пользовательского профиля, которые будут автоматически обновляться через IRMA каждый раз, когда я представляюсь системе:',
	'irma-associated-irmas-label' => 'IRMA, связанные с Вашей учётной записью:',
	'irma-urls-action' => 'Действие',
	'irma-urls-registration' => 'Время регистрации',
	'irma-urls-delete' => 'Удалить',
	'irma-add-url' => 'Добавить новый IRMA к вашей учётной записи',
	'irma-login-or-create-account' => 'Представиться системе или создать новую учётную запись',
	'irma-provider-label-irma' => 'Введите URL вашего IRMA',
	'irma-provider-label-google' => 'Представиться, используя учётную запись Google',
	'irma-provider-label-yahoo' => 'Представиться, используя учётную запись Yahoo',
	'irma-provider-label-aol' => 'Введите ваше имя в AOL',
	'irma-provider-label-other-username' => 'Введите ваше имя участника $1',
	'irma-dashboard-title' => 'панель IRMA',
	'irma-dashboard-title-admin' => 'Панель IRMA (администратор)',
	'irma-dashboard-number-irma-users' => 'Чисто пользователей с IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Число IRMA (всего)',
	'irma-dashboard-number-users-without-irma' => 'Чисто пользователей без IRMA',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'irmachooseusername' => 'Мено хоснователя:',
	'irmachoosepassword' => 'Гесло:',
);

/** Sicilian (sicilianu)
 * @author Melos
 * @author Santu
 */
$messages['scn'] = array(
	'irma-desc' => "Fai lu login a la wiki cu [//irma.net/ IRMA] r a l'àutri siti web ca non ùsanu IRMA cu n'account wiki",
	'irmalogin' => 'Login cu IRMA', # Fuzzy
	'irmaserver' => 'server IRMA',
	'irmaxrds' => 'file Yadis',
	'irmaconvert' => 'cunvirtituri IRMA',
	'irmaerror' => 'Sbàgghiu di virìfica',
	'irmaerrortext' => "Ci fu n'erruri ntô mentri dâ virìfica di l'URL IRMA.",
	'irmaconfigerror' => 'Sbàgghiu ntâ cunfigurazzioni IRMA',
	'irmaconfigerrortext' => 'La cunfigurazzioni dâ mimurizzazzioni di IRMA pi sta wiki non è vàlida.
Pi favuri addumanna cunzigghiu a nu [[Special:ListUsers/sysop|amministraturi]].',
	'irmapermission' => 'Sbàgghiu nna li pirmessi IRMA',
	'irmapermissiontext' => "Non vinni pirmuttutu di fari lu login a stu server a l'IRMA ca dasti.",
	'irmacancel' => 'Virìfica scancillata',
	'irmacanceltext' => "La virìfica di l'URL IRMA vinni scancillata.",
	'irmafailure' => 'Virìfica falluta',
	'irmafailuretext' => 'La virìfica di l\'URL IRMA fallìu. Missaggiu di erruri: "$1"',
	'irmasuccess' => 'Virìfica fatta',
	'irmasuccesstext' => "La virìfica di l'URL IRMA vinni fatta cu successu.", # Fuzzy
	'irmausernameprefix' => 'Utenti IRMA',
	'irmaserverlogininstructions' => 'Nzirisci di sècutu la tò password pi fari lu  login a  $3 comu utenti $2 (pàggina utenti  $1).', # Fuzzy
	'irmatrustinstructions' => 'Cuntrolla si disìi cunnivìdiri li dati cu $1.',
	'irmaallowtrust' => "Pirmetti a $1 di fidàrisi di st'account utenti.",
	'irmanopolicy' => "Lu situ non pricisau na pulìtica supr'a la privacy.",
	'irmapolicy' => 'Cuntrolla la  <a target="_new" href="$1">pulìtica supr\'a la privacy</a> pi chiossai nfurmazzioni.',
	'irmaoptional' => 'Facultativu',
	'irmarequired' => 'Addumannatu',
	'irmanickname' => 'Nickname',
	'irmafullname' => 'Nomu cumpretu', # Fuzzy
	'irmaemail' => 'Nnirizzu e-mail',
	'irmalanguage' => 'Lingua',
	'irmachooseinstructions' => "Tutti l'utenti hannu di bisognu di nu nickname;
ni poi pigghiari unu di chisti ccà di sècutu.",
	'irmachoosefull' => 'Lu tò nomu cumpretu ($1)', # Fuzzy
	'irmachooseurl' => 'Nu nomu scigghiutu dû tò IRMA ($1)',
	'irmachooseauto' => 'Nu nomu giniràtusi sulu ($1)',
	'irmachoosemanual' => 'Nu nomu scigghiutu di tia:',
	'irmachooseexisting' => "N'account ca ggià c'è nti sta wiki:", # Fuzzy
	'irmachoosepassword' => 'Password:',
	'irmaconvertinstructions' => 'Stu mòdulu ti duna lu pirmessu di canciari lu tò account pi usari nu URL IRMA.', # Fuzzy
	'irmaconvertsuccess' => 'Canciatu cu successu a IRMA',
	'irmaconvertsuccesstext' => 'Lu tò IRMA canciau cu sucessu a $1.',
	'irma-convert-already-your-irma-text' => 'Chistu è ggià lu tò  IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => "Chistu è l'IRMA di n'àutru.", # Fuzzy
	'irmaalreadyloggedin' => "'''Facisti ggià lu login, $1!'''

Si disìi usari IRMA pi fari lu login ntô futuru, poi [[Special:IRMAConvert|canciari lu tò account pi utilizzari IRMA]].", # Fuzzy
	'irmanousername' => 'Nuddu nomu utenti spicificatu.',
	'irmabadusername' => 'Nomu utenti spicificatu sbagghiatu.',
	'irmaautosubmit' => 'Sta pàggina havi nu mòdulu c\'avissi èssiri mannatu autumàticamenti si JavaScript ci l\'hai attivatu. Si, mmeci, nun è accuddì, prova a mùnciri lu buttuni "Continue".',
	'irmaclientonlytext' => "Non poi usari li account di sta wiki comu IRMA supra a n'àutru situ.",
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => "{{SITENAME}} susteni lu standard [//irma.net/ IRMA] pô login ùnicu supr'a li siti web.
IRMA ti pirmetti di riggistràriti nni assai siti web senza utilizzari na password diffirenti pi ognidunu d'iddi.
(Leggi la [//en.wikipedia.org/wiki/IRMA vuci di Wikipedia supr'a l'IRMA] pi cchiossai nfurmazzioni.)

Si n'account ci l'hai gìa supr'a {{SITENAME}}, poi fari lu [[Special:UserLogin|login]] cu lu tò nomu utentu e la tò password comu ô sòlitu.
Pi utilizzari IRMA ntô futuru, poi [[Special:IRMAConvert|canciari lu tò account a IRMA]] doppu ca hà fattu lu login comu ô sòlitu.

Ci sunnu assai [http://wiki.irma.net/Public_IRMA_providers Provider IRMA pùbbrichi], e tu putissi aviri già n'account abbilitatu a l'IRMA supra a n'àutru sirvizu.

; Àutri wiki : Si pussedi n'account supra a na wiki abbilitata a l'IRMA, comu [//wikitravel.org/ Wikitravel], [//www.wikihow.com/ wikiHow], [//vinismo.com/ Vinismo], [//aboutus.org/ AboutUs] o [//kei.ki/ Keiki], poi fari lu login a {{SITENAME}} nzirennu l<nowiki>'</nowiki>'''URL cumpretu''' dâ tò pàggina utenti nti ss'àutra wiki ntô box misu susu. P'asèmpiu, ''<nowiki>//kei.ki/en/User:Evan</nowiki>''.
; [//irma.yahoo.com/ Yahoo!] : Si pussedi n'account cu Yahoo!, poi fari lu login a stu situ nzirennu lu tò IRMA Yahoo! ntô box currispunnenti. Li URL IRMA Yahoo! pussèdunu la furma ''<nowiki>https://me.yahoo.com/yourusername</nowiki>''.
; [//dev.aol.com/aol-and-63-million-irmas AOL] : Si pussedi n'account cu [//www.aol.com/ AOL], comu a n'account [//www.aim.com/ AIM], poi fari lu login a {{SITENAME}} nzirennu lu tò IRMA AOL ntô box curripunnenti. Li URL IRMA AOL pussèdunu la furma ''<nowiki>//irma.aol.com/yourusername</nowiki>''. Lu tò nomu utenti avissi a èssiri tuttu paru 'n caràttiri nichi, senza spàzii.
; [//bloggerindraft.blogspot.com/2008/01/new-feature-blogger-as-irma-provider.html Blogger], [//faq.wordpress.com/2007/03/06/what-is-irma/ Wordpress.com], [//www.livejournal.com/irma/about.bml LiveJournal], [//bradfitz.vox.com/library/post/irma-for-vox.html Vox] : Si pussedi nu blog supr'a unu di sti siti, nzirisci l'URL dû blog ntô box currispunnenti. P'asèmpiu, ''<nowiki>//yourusername.blogspot.com/</nowiki>'', ''<nowiki>//yourusername.wordpress.com/</nowiki>'', ''<nowiki>//yourusername.livejournal.com/</nowiki>'', o ''<nowiki>//yourusername.vox.com/</nowiki>''.", # Fuzzy
	'prefs-irma-hide-irma' => "Ammuccia lu tò IRMA supr'a tò pàggina utenti, si fai lu login cu IRMA.",
	'irma-hide-irma-label' => "Ammuccia lu tò IRMA supr'a tò pàggina utenti, si fai lu login cu IRMA.", # Fuzzy
	'irma-urls-action' => 'Azzioni',
	'irma-provider-label-google' => 'Accedi utilizzannu lu tò account Google',
	'irma-provider-label-aol' => 'Nserisci lu tò screenname AOL',
	'irma-provider-label-other-username' => 'Nserisci lu tò $1 nnomu utenti',
);

/** Sinhala (සිංහල)
 * @author Asiri wiki
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'irmalogin' => 'IRMA සමඟ පිවිසෙන්න / ගිණුමක් තනන්න',
	'irmaserver' => 'IRMA සර්වරය',
	'irmaxrds' => 'Yadis ගොනුව',
	'irmaconvert' => 'IRMA පරිවර්තකය',
	'irmaerror' => 'සත්‍යාපන දෝෂය',
	'irmaconfigerror' => 'IRMA වින්‍යාස දෝෂය',
	'irmapermission' => 'IRMA අනුමැති දෝෂය',
	'irmacancel' => 'සත්‍යාපනය අවලංගු කරන ලදී',
	'irmafailure' => 'සත්‍යාපනය අසාර්ථකයි',
	'irmasuccess' => 'සත්‍යාපනය සාර්ථකයි',
	'irmausernameprefix' => 'IRMAපරිශීලක',
	'irmapolicy' => 'තවත් තොරතුරු සඳහා <a target="_new" href="$1">පුද්ගලිකත්ව ප්‍රතිපත්තිය</a> පරික්ෂා කරන්න.',
	'irmaoptional' => 'වෛකල්පිත',
	'irmarequired' => 'අවශ්‍යයි',
	'irmanickname' => 'අපනාමය',
	'irmafullname' => 'සැබෑ නාමය',
	'irmaemail' => 'විද්‍යුත්-තැපැල් ලිපිනය',
	'irmalanguage' => 'භාෂාව',
	'irmatimezone' => 'වේලා කලාපය',
	'irmachooselegend' => 'පරිශීලක නාමය සහ ගිණුම් අභිමතය',
	'irmachoosenick' => 'ඔබේ අපනාමය ($1)',
	'irmachoosefull' => 'ඔබේ සැබෑ නාමය ($1)',
	'irmachooseauto' => 'ස්වයං-ජනිත නාමය ($1)',
	'irmachoosemanual' => 'ඔබේ කැමැත්තට අනුව නම:',
	'irmachooseexisting' => 'මෙම විකියෙහි පවත්නා ගිණුමක්',
	'irmachooseusername' => 'පරිශීලක නාමය:',
	'irmachoosepassword' => 'මුරපදය:',
	'irmaconvertsuccess' => 'IRMA වෙත සාර්ථකව හරවන ලදී',
	'irma-convert-already-your-irma-text' => 'එය දැනටමත් ඔබේ IRMA වේ.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'එය වෙන කෙනෙකුගේ IRMA එකකි.', # Fuzzy
	'irmaalreadyloggedin' => 'ඔබ දැනටමත් ප්‍රවිෂ්ට වී ඇත.',
	'irmanousername' => 'පරිශීලක නාමයක් විශේෂණය කර නොමැත.',
	'irmaloginlabel' => 'IRMA URL',
	'irmaupdateuserinfo' => 'මගේ පෞද්ගලික තොරතුරු යාවත්කාලීන කරන්න:',
	'irmadelete' => 'IRMA මකන්න',
	'irmadelete-button' => 'තහවුරු කරන්න',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'කාර්යය',
	'irma-urls-registration' => 'ලියාපදිංචි වූ වේලාව',
	'irma-urls-delete' => 'මකන්න',
	'irma-add-url' => 'නව IRMA එක් කරන්න', # Fuzzy
	'irma-login-or-create-account' => 'පිවිසෙන්න හෝ නව ගිණුමක් තනන්න',
	'irma-provider-label-irma' => 'ඔබේ IRMA URL යොදන්න',
	'irma-provider-label-google' => 'ඔබේ ගූගල් ගිණුමෙන් පිවිසෙන්න',
	'irma-provider-label-yahoo' => 'ඔබේ යාහු ගිණුමෙන් පිවිසෙන්න',
	'irma-provider-label-aol' => 'ඔබේ AOL තිරනාමය යොදන්න',
	'irma-provider-label-other-username' => 'ඔබේ $1 පරිශීලකනාමය යොදන්න',
	'irma-dashboard-title' => 'IRMA උපකරණ පුවරුව',
	'irma-dashboard-title-admin' => 'IRMA උපකරණ පුවරුව (පරිපාලක)',
);

/** Slovak (slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'irma-desc' => 'Prihlásenie sa na wiki pomocou [//irma.net/ IRMA] a prihlásenie na iné stránky podporujúce IRMA pomocou používateľského účtu wiki',
	'irmalogin' => 'Prihlásiť sa pomocou IRMA', # Fuzzy
	'irmaserver' => 'IRMA server',
	'irmaxrds' => 'Súbor Yadis',
	'irmaconvert' => 'IRMA konvertor',
	'irmaerror' => 'Chyba pri overovaní',
	'irmaerrortext' => 'Počas overovania IRMA URL sa vyskytla chyba.',
	'irmaconfigerror' => 'Chyba konfigurácie IRMA',
	'irmaconfigerrortext' => 'Konfigurácia IRMA tejto wiki je neplatná.
Prosím, poraďte sa so [[Special:ListUsers/sysop|správcom]] tejto webovej lokality.',
	'irmapermission' => 'Chyba oprávnení IRMA',
	'irmapermissiontext' => 'IRMA, ktorý ste poskytli, nemá oprávnenie prihlásiť sa k tomuto serveru',
	'irmacancel' => 'Overovanie bolo zrušené',
	'irmacanceltext' => 'Overovanie IRMA URL bolo zrušené.',
	'irmafailure' => 'Overovanie bolo zrušené',
	'irmafailuretext' => 'Overovanie IRMA URL zlyhalo. Chybová správa: „$1“',
	'irmasuccess' => 'Overenie bolo úspešné',
	'irmasuccesstext' => 'Overenie IRMA URL bolo úspešné.', # Fuzzy
	'irmausernameprefix' => 'PoužívateľIRMA',
	'irmaserverlogininstructions' => 'Dolu zadajte heslo pre prihlásenie na $3 ako používateľ $2 (používateľská stránka $1).', # Fuzzy
	'irmatrustinstructions' => 'Skontrolujte, či chcete zdieľať dáta s používateľom $1.',
	'irmaallowtrust' => 'Povoliť $1 dôverovať tomuto používateľskému účtu.',
	'irmanopolicy' => 'Lokalita nešpecifikovala politiku ochrany osobných údajov.',
	'irmapolicy' => 'Viac informácií na stránke <a target="_new" href="$1">Ochrana osobných údajov</a>',
	'irmaoptional' => 'Voliteľné',
	'irmarequired' => 'Požadované',
	'irmanickname' => 'Prezývka',
	'irmafullname' => 'Plné meno', # Fuzzy
	'irmaemail' => 'Emailová adresa',
	'irmalanguage' => 'Jazyk',
	'irmatimezone' => 'Časové pásmo',
	'irmachooselegend' => 'Výber používateľského mena', # Fuzzy
	'irmachooseinstructions' => 'Každý používateľ musí mať prezývku; môžete si vybrať z dolu uvedených možností.',
	'irmachoosenick' => 'Vaša prezývka ($1)',
	'irmachoosefull' => 'Vaše plné meno ($1)', # Fuzzy
	'irmachooseurl' => 'Meno na základe vášho IRMA ($1)',
	'irmachooseauto' => 'Automaticky vytvorené meno ($1)',
	'irmachoosemanual' => 'Meno, ktoré si vyberiete:',
	'irmachooseexisting' => 'Existujúci účet na tejto wiki',
	'irmachooseusername' => 'Používateľské meno:',
	'irmachoosepassword' => 'Heslo:',
	'irmaconvertinstructions' => 'Tento formulár vám umožňuje zmeniť váš učet, aby používal IRMA URL alebo pridať ďalšie IRMA URL.',
	'irmaconvertoraddmoreids' => 'Previesť na IRMA alebo pridať iný IRMA URL',
	'irmaconvertsuccess' => 'Úspešne prevedené na IRMA',
	'irmaconvertsuccesstext' => 'Úspešne ste previedli váš IRMA na $1.',
	'irma-convert-already-your-irma-text' => 'To už je váš IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'To je IRMA niekoho iného.', # Fuzzy
	'irmaalreadyloggedin' => "'''Už ste prihlásený, $1!'''

Ak chcete na prihlasovanie v budúcnosti využívať IRMA, môžete [[Special:IRMAConvert|previesť váš účet na IRMA]].", # Fuzzy
	'irmanousername' => 'Nebolo zadané používateľské meno.',
	'irmabadusername' => 'Bolo zadané chybné používateľské meno.',
	'irmaautosubmit' => 'Táto stránka obsahuje formulár, ktorý by mal byť automaticky odoslaný ak máte zapnutý JavaScript.
Ak nie, skúste tlačidlo „Continue“ (Pokračovať).',
	'irmaclientonlytext' => 'Nemôžete používať účty z tejto wiki ako IRMA na iných weboch.',
	'irmaloginlabel' => 'IRMA URL',
	'irmalogininstructions' => '{{SITENAME}} podporuje štandard [//irma.net/ IRMA] na zjednotené prihlasovanie na webstránky.
IRMA vám umožňuje prihlasovať sa na množstvo rozličných webstránok bez nutnosti používať pre každú odlišné heslo. (Pozri [//sk.wikipedia.org/wiki/IRMA Článok o IRMA na Wikipédii])

Ak už máte účet na {{GRAMMAR:lokál|{{SITENAME}}}}, môžete sa [[Special:UserLogin|prihlásiť]] pomocou používateľského mena a hesla ako zvyčajne. Ak chcete v budúcnosti používať IRMA, môžete po normálnom prihlásení [[Special:IRMAConvert|previesť svoj účet na IRMA]].

Existuje množstvo [http://wiki.irma.net/Public_IRMA_providers Verejných poskytovateľov IRMA] a možno už máte účet s podporou IRMA u iného poskytovateľa.', # Fuzzy
	'irmaupdateuserinfo' => 'Aktualizovať moje používateľské informácie:',
	'irmadelete' => 'Zmazať IRMA',
	'irmadelete-text' => 'Klinužím na tlačidlo „{{int:irmadelete-button}}“ odstránite IRMA $1 z vášho účtu.
Nebudete sa už pomocou tohto IRMA prihlasovať.',
	'irmadelete-button' => 'Potvrdiť',
	'irmadeleteerrornopassword' => 'Nemôžete zmazať všetky svoje IRMA, pretože účet nemá nastavené heslo.
Bez IRMA by ste sa nemohli prihlásiť.',
	'irmadeleteerrorirmaonly' => 'Nemôžete zmazať všetky svoje IRMA, pretože máte oprávnenie prihlasovať sa jedine pomocou IRMA.
Bez IRMA by ste sa nemohli prihlásiť.',
	'irmadelete-success' => 'IRMA bolo úspešne odstránené z vášho účtu.',
	'irmadelete-error' => 'Počas odstraňovania OpenIOD z vášho účtu sa vyskytla chyba.',
	'prefs-irma-hide-irma' => 'Nezobrazovať váš IRMA na vašej používateľskej stránke ak sa prihlasujete pomocou IRMA.',
	'irma-hide-irma-label' => 'Nezobrazovať váš IRMA na vašej používateľskej stránke ak sa prihlasujete pomocou IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Aktualizovať nasledovné informácie z IRMA identity vždy, keď sa prihlásim:', # Fuzzy
	'irma-associated-irmas-label' => 'IRMA asociované s vašim účtom:',
	'irma-urls-action' => 'Operácia',
	'irma-urls-delete' => 'Zmazať',
	'irma-add-url' => 'Pridať nový IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Prihlásiť sa alebo vytvoriť nový účet', # Fuzzy
	'irma-provider-label-irma' => 'Zadajte URL svojho IRMA',
	'irma-provider-label-google' => 'Prihlásiť sa pomocou účtu Google',
	'irma-provider-label-yahoo' => 'Prihlásiť sa pomocou účtu Yahoo',
	'irma-provider-label-aol' => 'Prihlásiť sa pomocou účtu AOL',
	'irma-provider-label-other-username' => 'Zadajte svoje prihlasovacie meno na $1',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'irma-desc' => 'Prijavite se v wiki z [//irma.net/ IRMA] in prijavite se v druge spletne strani s podporo IRMA z uporabniškim računom wiki',
	'irmalogin' => 'Prijavite se / ustvarite račun z IRMA',
	'irmaserver' => 'Strežnik IRMA',
	'irmaxrds' => 'Datoteka Yadis',
	'irmaconvert' => 'Pretvornik IRMA',
	'irmaerror' => 'Napaka med preverjanjem',
	'irmaerrortext' => 'Med preverjanjem URL IRMA je prišlo do napake.',
	'irmaconfigerror' => 'Napaka konfiguracije IRMA',
	'irmaconfigerrortext' => 'Konfiguracija shrambe IRMA za ta wiki je neveljavna.
Posvetujte se z [[Special:ListUsers/sysop|administratorjem]].',
	'irmapermission' => 'Napaka dovoljenj IRMA',
	'irmapermissiontext' => 'Navedenemu IRMA prijava v ta strežnik ni dovoljena.',
	'irmacancel' => 'Preverjanje je bilo preklicano',
	'irmacanceltext' => 'Preverjanje URL IRMA je bilo preklicano.',
	'irmafailure' => 'Preverjanje ni uspelo',
	'irmafailuretext' => 'Preverjanje URL IRMA ni uspelo. Sporočilo o napaki: »$1«',
	'irmasuccess' => 'Preverjanje je uspelo',
	'irmasuccesstext' => "'''Preverjanje je bilo uspešno, prijavljeni ste kot uporabnik $1'''.

Vaš IRMA je $2.

Ta in izbirne nadaljne IRMA-je lahko uprabljate na [[Special:Preferences#mw-prefsection-irma|zavihku IRMA]] v svojih nastavitvah.<br />
Izbirno geslo računa lahko dodate v svojih [[Special:Preferences#mw-prefsection-personal|Podatkih o uporabniku]].",
	'irmausernameprefix' => 'UporabnikIRMA',
	'irmaserverlogininstructions' => '$3 zahteva, da vnesete svoje geslo za vašega uporabnika $2, stran $1 (URL IRMA).',
	'irmatrustinstructions' => 'Označite, če želite deliti podatke s $1.',
	'irmaallowtrust' => 'Dovoli $1, da zaupa temu uporabniškemuu računu.',
	'irmanopolicy' => 'Stran ni določila pravilnika o zasebnosti.',
	'irmapolicy' => 'Preverite <a target="_new" href="$1">politiko zasebnosti</a> za več informacij.',
	'irmaoptional' => 'Izbirno',
	'irmarequired' => 'Zahtevano',
	'irmanickname' => 'Vzdevek',
	'irmafullname' => 'Pravo ime',
	'irmaemail' => 'E-poštni naslov',
	'irmalanguage' => 'Jezik',
	'irmatimezone' => 'Časovni pas',
	'irmachooselegend' => 'Izbira uporabniškega imena in računa',
	'irmachooseinstructions' => 'Vsi uporabniki potrebujejo vzdevek;
svojega si lahko izberete med spodnjimi možnostmi.',
	'irmachoosenick' => 'Vaš vzdevek ($1)',
	'irmachoosefull' => 'Vaše pravo ime ($1)',
	'irmachooseurl' => 'Ime vzeto iz vašega IRMA ($1)',
	'irmachooseauto' => 'Samodejno ustvarjeno ime ($1)',
	'irmachoosemanual' => 'Ime po vaši izbiri:',
	'irmachooseexisting' => 'Obstoječi račun na tem wikiju',
	'irmachooseusername' => 'Uporabniško ime:',
	'irmachoosepassword' => 'Geslo:',
	'irmaconvertinstructions' => 'Ta obrazec vam omogoča spremeniti vaš uporabniški račun za uporabo IRMA URL ali dodati več IRMA URL-jev',
	'irmaconvertoraddmoreids' => 'Pretvorite v IRMA ali dodajte še en URL IRMA',
	'irmaconvertsuccess' => 'Uspešno pretvorjeno v IRMA',
	'irmaconvertsuccesstext' => 'Uspešno ste pretvorili svoj IRMA v $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 je že povezan z vašim računom.',
	'irma-convert-other-users-irma-text' => '$1 je IRMA nekoga drugega. Ne morete uporabiti IRMA drugega uporabnika.',
	'irmaalreadyloggedin' => 'Ste že prijavljeni.',
	'irmaalreadyloggedintext' => "'''$1, ste že prijavljeni!'''

IRMA-je lahko upravljate (si jih ogledate, izbrišete in drugo) na [[Special:Preferences#mw-prefsection-irma|zavihku IRMA]] v vaših nastavitvah.",
	'irmanousername' => 'Uporabniško ime ni določeno.',
	'irmabadusername' => 'Določeno je neustrezno uporabniško ime.',
	'irmaautosubmit' => 'Ta stran vsebuje obrazec, ki bi se moral potrditi samodejno, če imate omogočen JavaScript.
Če ne, poskusite klikniti na gumb »Continue« (Nadaljuj).',
	'irmaclientonlytext' => 'Ne morete uporabiti računov s tega wikija kot IRMA-je na drugi strani.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => '{{SITENAME}} podpira standard [//irma.net/ IRMA] za enkratno prijavo med spletnimi stranmi.
IRMA vam omogoča prijavo v kopico različnih spletnih strani brez uporabe različnega gesla za vsako.
(Za več informacij si oglejte [//en.wikipedia.org/wiki/IRMA Wikipedijin članek o IRMA].)
Obstaja veliko [//irma.net/get/ ponudnikov IRMA] in morda že imate račun z omogočenim IRMA pri drugi storitvi.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} omogoča prijavo ''samo'' z IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Če že imate račun na {{SITENAME}}, se lahko [[Special:UserLogin|prijavite]] s svojim uporabniškim imenom in geslom kot običajno.
Če želite v prihodnje uporabljati IRMA, lahko [[Special:IRMAConvert|pretvorite svoj račun v IRMA]] po tem, ko ste se normalno prijavili.',
	'irmaupdateuserinfo' => 'Posodobi moje osebne podatke:',
	'irmadelete' => 'Izbriši IRMA',
	'irmadelete-text' => 'S klikom na gumb »{{int:irmadelete-button}}« boste odstranili IRMA $1 s svojega računa.
V prihodnje se s tem IRMA ne boste več mogli prijaviti.',
	'irmadelete-button' => 'Potrdi',
	'irmadeleteerrornopassword' => 'Ne morete izbrisati vseh svojih IRMA-jev, ker vaš račun nima gesla.
Brez IRMA se ne boste mogli prijaviti.',
	'irmadeleteerrorirmaonly' => 'Ne morete izbrisati vseh svojih IRMA-jev, ker se lahko prijavite samo z IRMA.
Brez IRMA se ne boste mogli prijaviti.',
	'irmadelete-success' => 'IRMA je bil uspešno odstranjen iz vašega računa.',
	'irmadelete-error' => 'Pri odstranjevanju IRMA iz vašega računa je prišlo do napake.',
	'irma-irmas-were-not-merged' => 'IRMA(-ji) med združevanjem uporabniških računov niso bili združeni.',
	'prefs-irma-hide-irma' => 'Skrijte svoj URL IRMA na svoji uporabniški strani, če se prijavite z IRMA.',
	'irma-hide-irma-label' => 'Skrijte svoj URL IRMA na svoji uporabniški strani.',
	'irma-userinfo-update-on-login-label' => 'Polja informacij profila osebe, ki bodo samodejno posodobljena iz osebe Open ID vsakič, ko se prijavite:',
	'irma-associated-irmas-label' => 'IRMA-ji, povezani z vašim računom:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Dejanje',
	'irma-urls-registration' => 'Registriran od',
	'irma-urls-delete' => 'Izbriši',
	'irma-add-url' => 'Dodaj nov IRMA k svojemu računu',
	'irma-login-or-create-account' => 'Prijavite se ali ustvarite nov račun',
	'irma-provider-label-irma' => 'Vnesite svoj URL IRMA',
	'irma-provider-label-google' => 'Prijavite se s svojim računom Google',
	'irma-provider-label-yahoo' => 'Prijavite se s svojim računom Yahoo',
	'irma-provider-label-aol' => 'Vnesite svoje prikazno ime AOL',
	'irma-provider-label-wmflabs' => 'Prijavite se s svojim računom Wmflabs',
	'irma-provider-label-other-username' => 'Vnesite svoje uporabniško ime $1',
	'specialpages-group-irma' => 'Storitvene strani in informacije o stanju IRMA',
	'right-irma-converter-access' => 'Lahko dodaja ali pretvarja svoj račun tako, da uporablja identitete IRMA',
	'right-irma-dashboard-access' => 'Običajni dostop do pregledne plošče IRMA',
	'right-irma-dashboard-admin' => 'Administratorski dostop do pregledne plošče IRMA',
	'irma-dashboard-title' => 'Pregledna plošča IRMA',
	'irma-dashboard-title-admin' => 'Pregledna plošča IRMA (administrator)',
	'irma-dashboard-introduction' => 'Trenutne nastavitve razširitve IRMA ([$1 pomoč])',
	'irma-dashboard-number-irma-users' => 'Število uporabnikov z IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Število IRMA-jev (skupno)',
	'irma-dashboard-number-users-without-irma' => 'Število uporabnikov brez IRMA',
);

/** Lower Silesian (Schläsch)
 * @author Schläsinger
 */
$messages['sli'] = array(
	'irmaxrds' => 'Yadis-Datei',
	'irmaemail' => 'E-Mail-Atresse:',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 * @author Sasa Stefanovic
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'irmaserver' => 'IRMA сервер',
	'irmaconvert' => 'IRMA претварач',
	'irmaerror' => 'Грешка при провери',
	'irmaerrortext' => 'Дошло је до грешке при проверавању адресе IRMA-ја.',
	'irmaconfigerror' => 'Грешка у поставци IRMA-ја',
	'irmapermission' => 'Грешка око IRMA права приступа',
	'irmapermissiontext' => 'IRMA-у кога сте навели није дозвољено да се улогује на овај сервер.',
	'irmacancel' => 'Провера је отказана',
	'irmacanceltext' => 'Провера адресе IRMA-ја је отказана.',
	'irmafailure' => 'Провера није успела',
	'irmafailuretext' => 'Не могу да проверим адресу IRMA-ја. Грешка: „$1“',
	'irmasuccess' => 'Провера је успела',
	'irmasuccesstext' => "'''Провера је успела. Пријављени сте као корисник $1'''.

Ваш IRMA је $2 .

Можете да управљате овим и другим необавезним налозима IRMA-ја у [[Special:Preferences#mw-prefsection-irma|језичку за IRMA]] у вашим подешавањима.<br />
Можете додати и лозинку налога у вашем [[Special:Preferences#mw-prefsection-personal|корисничком профилу]].",
	'irmaoptional' => 'Необавезно',
	'irmarequired' => 'Обавезно',
	'irmanickname' => 'Надимак',
	'irmafullname' => 'Пуно име', # Fuzzy
	'irmaemail' => 'Е-адреса',
	'irmalanguage' => 'Језик',
	'irmatimezone' => 'Временска зона',
	'irmachooselegend' => 'Одабир корисничког имена и налога',
	'irmachooseinstructions' => 'Сваки корисник треба да има надимак.
Можете да изаберете једну од доленаведених могућности.',
	'irmachoosenick' => 'Ваш надимак ($1)',
	'irmachoosefull' => 'Ваше пуно име ($1)', # Fuzzy
	'irmachooseurl' => 'Име преузето од вашег IRMA-ја ($1)',
	'irmachooseauto' => 'Самостворено корисничко име ($1)',
	'irmachoosemanual' => 'Изаберите корисничко име:',
	'irmachooseexisting' => 'Постојећи налог на овом викију',
	'irmachooseusername' => 'Корисничко име:',
	'irmachoosepassword' => 'Лозинка:',
	'irmaconvertsuccess' => 'Претварање у IRMA је успело',
	'irmaconvertsuccesstext' => 'Успешно сте претворили свој IRMA у $1.',
	'irma-convert-already-your-irma-text' => 'Ово је већ ваш IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Тај IRMA припада неком другом.', # Fuzzy
	'irmanousername' => 'Нисте навели корисничко име.',
	'irmabadusername' => 'Наведено је неисправно корисничко име.',
	'irmaclientonlytext' => 'Не можете користити налоге с овог викија као IRMA за други сајт.',
	'irmaloginlabel' => 'Адреса IRMA-ја',
	'irmaupdateuserinfo' => 'Ажурирај моје личне податке:',
	'irmadelete-button' => 'Потврди',
	'prefs-irma' => 'IRMA',
	'prefs-irma-hide-irma' => 'Сакријте своју адресу IRMA-а са корисничке странице ако се с њим пријављујете.',
	'irma-hide-irma-label' => 'Сакријте своју адресу IRMA-а са корисничке странице ако се с њим пријављујете.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ажурирај следеће податке IRMA-а сваки пут када се пријавим:', # Fuzzy
	'irma-urls-url' => 'Адреса',
	'irma-urls-action' => 'Радња',
	'irma-urls-registration-date-time' => '$1',
	'irma-urls-delete' => 'Обриши',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Ex13
 * @author Michaello
 * @author Rancher
 */
$messages['sr-el'] = array(
	'irmaserver' => 'IRMA server',
	'irmaconvert' => 'IRMA konvertor',
	'irmaerror' => 'Greška prilikom verifikacije',
	'irmaerrortext' => 'Došlo je do greške prilikom verifikacije IRMA URL-a.',
	'irmaconfigerror' => 'Greška oko konfiguracije IRMA-a',
	'irmapermission' => 'Greška oko IRMA prava pristupa',
	'irmapermissiontext' => 'IRMA-u koga ste naveli nije dozvoljeno da se uloguje na ovaj server.',
	'irmacancel' => 'Verifikacija poništena',
	'irmacanceltext' => 'Verifikacija IRMA URL-a je poništena.',
	'irmafailure' => 'Verifikacija nije prošla',
	'irmafailuretext' => 'Verifikacija IRMA URL-a nije prošla. Poruka greške: "$1"',
	'irmasuccess' => 'Verifikacija uspešna',
	'irmasuccesstext' => "'''Provera je uspela. Prijavljeni ste kao korisnik $1'''.

Vaš IRMA je $2 .

Možete da upravljate ovim i drugim neobaveznim nalozima IRMA-ja u [[Special:Preferences#mw-prefsection-irma|jezičku za IRMA]] u vašim podešavanjima.<br />
Možete dodati i lozinku naloga u vašem [[Special:Preferences#mw-prefsection-personal|korisničkom profilu]].",
	'irmaoptional' => 'Neobavezno',
	'irmarequired' => 'Obavezno',
	'irmanickname' => 'Nadimak',
	'irmafullname' => 'Puno ime', # Fuzzy
	'irmaemail' => 'E-pošta',
	'irmalanguage' => 'Jezik',
	'irmatimezone' => 'Vremenska zona',
	'irmachooselegend' => 'Odabir korisničkog imena i naloga',
	'irmachooseinstructions' => 'Svaki korisnik treba da ima nadimak;
Možete da izaberete jednu od opcija ispod.',
	'irmachoosenick' => 'Vaš nadimak ($1)',
	'irmachoosefull' => 'Vaše puno ime ($1)', # Fuzzy
	'irmachooseurl' => 'Ime preuzeto od vašeg IRMA ($1)',
	'irmachooseauto' => 'Automatski generisano korisničko ime ($1)',
	'irmachoosemanual' => 'Izaberite korisničko ime:',
	'irmachooseexisting' => 'Postojeći nalog na ovoj Viki',
	'irmachooseusername' => 'Korisničko ime:',
	'irmachoosepassword' => 'Lozinka:',
	'irmaconvertsuccess' => 'Konverzija ka IRMA je uspešna',
	'irmaconvertsuccesstext' => 'Uspešno ste prmenili svoj IRMA na $1.',
	'irma-convert-already-your-irma-text' => 'Taj IRMA je već vaš.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'To je tuđ IRMA.', # Fuzzy
	'irmanousername' => 'Nije navedeno korisničko ime.',
	'irmabadusername' => 'Zadato neispravno korisničko ime.',
	'irmaclientonlytext' => 'Vi ne možete da koristite naloge sa ovog Vikija kao IRMA-ove na drugim sajtovima.',
	'irmaloginlabel' => 'IRMA URL',
	'irmaupdateuserinfo' => 'Aktualizuj moje lične podatke:',
	'irmadelete-button' => 'Potvrdi',
	'prefs-irma' => 'IRMA',
	'prefs-irma-hide-irma' => 'Sakrijte svoj IRMA URL sa korisničke strane, ako se sa njim logujete.',
	'irma-hide-irma-label' => 'Sakrijte svoj IRMA URL sa korisničke strane, ako se sa njim logujete.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Aktualizuj sledeće informacije IRMA identiteta svaki put kad se ulogujem:', # Fuzzy
	'irma-urls-url' => 'Adresa',
	'irma-urls-action' => 'Radnja',
	'irma-urls-registration-date-time' => '$1',
	'irma-urls-delete' => 'Obriši',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'irma-desc' => 'Anmeldenge an dit Wiki mäd ne [//irma.net/ IRMA] un anmäldje an uur Websites, do der IRMA unnerstutsje, mäd een Wiki-Benutserkonto.',
	'irmalogin' => 'Anmäldje mäd IRMA', # Fuzzy
	'irmaserver' => 'IRMA-Server',
	'irmaxrds' => 'Yadis-Doatäi',
	'irmaconvert' => 'IRMA-Konverter',
	'irmaerror' => 'Wröige-Failer',
	'irmaerrortext' => 'Aan Failer is unner ju Wröige fon ju IRMA-URL aptreeden.',
	'irmaconfigerror' => 'IRMA-Konfigurationsfailer',
	'irmaconfigerrortext' => 'Ju IRMA-Spiekerkonfiguration foar dit Wiki ist failerhaft.
Täl n [[Special:ListUsers/sysop|Administrator]] Beskeed.',
	'irmapermission' => 'IRMA-Begjuchtigengsfailer',
	'irmapermissiontext' => 'Ju anroate IRMA begjuchtiget nit tou Anmäldenge an dissen Server.',
	'irmacancel' => 'Wröige oubreeken',
	'irmacanceltext' => 'Ju Wröige fon ju IRMA-URL wuud oubreeken.',
	'irmafailure' => 'Wröige-Failer',
	'irmafailuretext' => 'Ju Wröige fon ju IRMA-URL is failsloain. Failermäldenge: "$1"',
	'irmasuccess' => 'Wröige mäd Ärfoulch be-eended',
	'irmasuccesstext' => 'Ju Wröige fon ju Open-ID hied Ärfoulch.', # Fuzzy
	'irmausernameprefix' => 'IRMA-Benutser',
	'irmaserverlogininstructions' => 'Reek dien Paaswoud unner ien, uum die as Benutser $2 an $3 antoumäldjen (Benutsersiede $1).', # Fuzzy
	'irmatrustinstructions' => 'Wröich, of du Doaten mäd $1 deele moatest.',
	'irmaallowtrust' => 'Ferlööwje $1, dissen Benutserkonto tou tjouen.',
	'irmanopolicy' => 'Ju Siede häd neen Doatenskuts-Gjuchtlienje anroat.',
	'irmapolicy' => 'Wröich ju <a target="_new" href="$1">Doatenschuts-Gjuchtlienje</a> foar moor Informatione.',
	'irmaoptional' => 'Optionoal',
	'irmarequired' => 'Plicht',
	'irmanickname' => 'Benutsernoome',
	'irmafullname' => 'Fulboodigen Noome', # Fuzzy
	'irmaemail' => 'E-Mail-Adresse:',
	'irmalanguage' => 'Sproake',
	'irmatimezone' => 'Tiedzone',
	'irmachooseinstructions' => 'Aal Benutsere benöödigje n Benutsernoome;
du koast aan uut ju unnerstoundene Lieste uutwääle.',
	'irmachoosefull' => 'Din fulboodigen Noome ($1)', # Fuzzy
	'irmachooseurl' => 'N Noome uut dien IRMA ($1)',
	'irmachooseauto' => 'N automatisk moakeden Noome ($1)',
	'irmachoosemanual' => 'N Noome fon dien Woal:',
	'irmachooseexisting' => 'N existierend Benutserkonto in dit Wiki:', # Fuzzy
	'irmachoosepassword' => 'Paaswoud:',
	'irmaconvertinstructions' => 'Mäd dit Formular koast du dien Benutserkonto tou Benutsenge fon n IRMA-URL annerje.',
	'irmaconvertoraddmoreids' => 'Uumsätte tou IRMA of föich n uur IRMA-URL tou.',
	'irmaconvertsuccess' => 'Mäd Ärfoulch ätter IRMA konvertierd',
	'irmaconvertsuccesstext' => 'Du hääst ju Konvertierenge fon dien IRMA ätter $1 mäd Ärfoulch truchfierd.',
	'irma-convert-already-your-irma-text' => 'Dit is al dien IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Dit is ju IRMA fon uurswäl.', # Fuzzy
	'irmaalreadyloggedin' => "'''Du bäst al anmälded, $1!'''

Wan du IRMA foar kuumende Anmäldefoargonge nutsje moatest, koast du [[Special:IRMAConvert|dien Benutserkonto ätter IRMA konvertierje]].", # Fuzzy
	'irmanousername' => 'Naan Benutsernoome anroat.',
	'irmabadusername' => 'Falsken Benutsernoome anroat.',
	'irmaautosubmit' => 'Disse Siede änthaalt n Formular, dät automatisk uurdrain wäd, wan JavaSkript aktivierd is.
Fals nit, klik ap „Continue“ (Fääre).',
	'irmaclientonlytext' => 'Du koast neen Benutserkonten uut dissen Wiki as IRMA foar uur Sieden ferweende.',
	'irmaloginlabel' => 'IRMA-URL',
	'irmalogininstructions' => '{{SITENAME}} unnerstutset dän [//irma.net/ IRMA]-Standoard foar ne eenhaidelke Anmäldenge foar moorere Websites.
IRMA mäldet die bie fuul unnerskeedelke Websieden an, sunner dät du foar älke Siede n uur Paaswoud ferweende moast.
(Moor Informatione bjut die [//de.wikipedia.org/wiki/IRMA Wikipedia-Artikkel tou IRMA].)

Fals du al n Benutserkonto bie {{SITENAME}} hääst, koast du die gans normoal mäd Benutsernoome un Paaswoud [[Special:UserLogin|anmäldje]].
Wan du in n Toukumst IRMA ferweende moatest, koast du [[Special:IRMAConvert|dien Account tou IRMA konvertierje]], ätter dät du die normoal ienlogged hääst.

Dät rakt fuul [http://wiki.irma.net/Public_IRMA_providers eepentelke IRMA-Providere] un muugelkerwiese hääst du al n Benutserkonto mäd aktivierden IRMA bie n uur Anbjooder.', # Fuzzy
	'irmaupdateuserinfo' => 'Persöönelke Doaten aktualisierje', # Fuzzy
	'irmadelete' => 'IRMA läskje',
	'irmadelete-button' => 'Bestäätigje',
	'irmadelete-success' => 'Ju IRMA wuud mäd Ärfoulch fon din Benutserkonto wächhoald.',
	'irmadelete-error' => 'Bie dät Wächhoaljen fon ju IRMA fon din Benutserkonto is n Failer aptreeden.',
	'prefs-irma-hide-irma' => 'Fersteet dien IRMA ap dien Benutsersiede, wan du die mäd IRMA anmäldest.',
	'irma-hide-irma-label' => 'Fersteet dien IRMA ap dien Benutsersiede, wan du die mäd IRMA anmäldest.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Ju foulgjende Information fon dät IRMA-Konto bie älke Login aktualisierje', # Fuzzy
	'irma-urls-action' => 'Aktion',
	'irma-urls-delete' => 'Läskje',
	'irma-add-url' => 'Näien IRMA bietouföigje', # Fuzzy
	'irma-login-or-create-account' => 'Anmäldje of n näi Benutserkonto moakje', # Fuzzy
	'irma-provider-label-irma' => 'Reek dien IRMA-URL an',
	'irma-provider-label-google' => 'Mäd dien Google-Benutserkonto anmäldje',
	'irma-provider-label-yahoo' => 'Mäd dien Yahoo-Benutserkonto anmäldje',
	'irma-provider-label-aol' => 'Reek dien AOL-Noome an',
	'irma-provider-label-other-username' => 'Reek dien „$1“-Benutsernoome an',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'irmanickname' => 'Landihan',
	'irmalanguage' => 'Basa',
	'irmachoosepassword' => 'Sandi:',
);

/** Swedish (svenska)
 * @author Boivie
 * @author Cybjit
 * @author Fluff
 * @author Jon Harald Søby
 * @author Jopparn
 * @author Lokal Profil
 * @author M.M.S.
 * @author Najami
 * @author Nghtwlkr
 * @author Per
 * @author Rotsee
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'irma-desc' => 'Logga in på wikin med en [//irma.net/ IRMA] och logga in på andra sidor som använder IRMA med konton härifrån',
	'irmalogin' => 'Logga in / skapa konto med IRMA',
	'irmaserver' => 'IRMA-server',
	'irma-identifier-page-text-user' => 'Den här sidan fungerar som IRMA-legitimation för användaren ”$1”.',
	'irmaxrds' => 'Yadis-fil',
	'irmaconvert' => 'IRMA-konvertering',
	'irmaerror' => 'Bekräftelsefel',
	'irmaerrortext' => 'Ett fel uppstod under bekräftning av IRMA-adressen.',
	'irmaconfigerror' => 'Konfigurationsfel med IRMA',
	'irmaconfigerrortext' => 'Lagringkonfigurationen för IRMA på den här wikin är ogiltig.
Var god konsultera en [[Special:ListUsers/sysop|administratör]].',
	'irmapermission' => 'Behörighetsfel med IRMA',
	'irmapermissiontext' => 'Du kan inte logga in på den här servern med det IRMA du uppgav.',
	'irmacancel' => 'Kontrollen avbröts',
	'irmacanceltext' => 'Kontrollen av IRMA-adressen avbröts.',
	'irmafailure' => 'Kontrollen misslyckades',
	'irmafailuretext' => 'Bekräftning av IRMA-adressen misslyckades. Felmeddelande: "$1"',
	'irmasuccess' => 'Bekräftning lyckades',
	'irmasuccesstext' => "'''Du är inloggad som $1'''.

Ditt IRMA är $2.

Du kan hantera detta och andra IRMA:n i [[Special:Preferences#mw-prefsection-irma|IRMA-fliken]] bland dina inställningar.<br />
Vill du kan du också ange ett lösenord för det här kontot i din [[Special:Preferences#mw-prefsection-personal|användarprofil]].",
	'irmausernameprefix' => 'IRMA-användare',
	'irmaserverlogininstructions' => '$3 begär att du anger ditt lösenord för ditt användare $2s sida $1 (detta är din IRMA-URL)',
	'irmatrustinstructions' => 'Kolla om du vill dela data med $1.',
	'irmaallowtrust' => 'Tillåter $1 att förlita sig på detta användarkonto.',
	'irmanopolicy' => 'Sajten har inga riktlinjer för personlig integritet.',
	'irmapolicy' => 'Se <a href="_new" href="$1">riktlinjer för personlig integritet</a> för mer information.',
	'irmaoptional' => 'Frivilligt',
	'irmarequired' => 'Obligatoriskt',
	'irmanickname' => 'Smeknamn',
	'irmafullname' => 'Riktigt namn',
	'irmaemail' => 'E-postadress',
	'irmalanguage' => 'Språk',
	'irmatimezone' => 'Tidszon',
	'irmachooselegend' => 'Val av användarnamn och konto',
	'irmachooseinstructions' => 'Alla användare måste ha ett användarnamn.
Du kan välja ett från alternativen nedan.',
	'irmachoosenick' => 'Smeknamn ($1)',
	'irmachoosefull' => 'Ditt riktiga namn ($1)',
	'irmachooseurl' => 'Ett namn taget från din IRMA ($1)',
	'irmachooseauto' => 'Ett automatiskt genererat namn ($1)',
	'irmachoosemanual' => 'Valfritt namn:',
	'irmachooseexisting' => 'Ett existerande konto på denna wiki',
	'irmachooseusername' => 'Användarnamn:',
	'irmachoosepassword' => 'Lösenord:',
	'irmaconvertinstructions' => 'Detta formulär låter dig ändra dina användarkonton till att använda eller lägga till en eller flera IRMA-adresser',
	'irmaconvertoraddmoreids' => 'Konvertera till IRMA eller lägg till en ny IRMA-adress',
	'irmaconvertsuccess' => 'Konverterade till IRMA',
	'irmaconvertsuccesstext' => 'Du har konverterat ditt IRMA till $1.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 är redan associerad med ditt konto.',
	'irma-convert-other-users-irma-text' => '$1 är någon annans IRMA. Du kan inte använda ett IRMA som tillhör någon annan.',
	'irmaalreadyloggedin' => 'Du är redan inloggad.',
	'irmaalreadyloggedintext' => "'''Du är redan inloggad, $1!'''

Du kan hantera (visa, radera, m.m) IRMA:n i [[Special:Preferences#mw-prefsection-irma|IRMA-fliken]] under dina inställningar.",
	'irmanousername' => 'Inget användarnamn angivet.',
	'irmabadusername' => 'Ogiltigt användarnamn angivet.',
	'irmaautosubmit' => 'Denna sida innehåller ett formulär som kommer levereras automatiskt om du har slagit på JavaScript.
Om inte, tryck på "Continue" (Fortsätt).',
	'irmaclientonlytext' => 'Du kan inte använda konton från denna wikin som IRMA på en annan sida.',
	'irmaloginlabel' => 'IRMA-adress',
	'irmalogininstructions' => '{{SITENAME}} stödjer [//irma.net/ IRMA]-standarden för enhetlig inloggning på många webbsidor.
IRMA låter dig logga in på många webbsidor utan att använda olika lösenord för varje.
(Se [//en.wikipedia.org/wiki/IRMA Wikipedia-artikeln om IRMA] för mer information.)
Det finns många [//irma.net/get/ leverantörer av IRMA], och du kan redan ha ett IRMA-aktiverat konto på en annan plats.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} låter dig ''endast'' logga in med IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Om du redan har ett konto på {{SITENAME}} kan du [[Special:UserLogin|logga in]] med ditt användarnamn och lösenord som vanligt.
För att använda IRMA i framtiden, kan du [[Special:IRMAConvert|konvertera ditt konto till IRMA]] efter du har loggat in normalt.',
	'irmaupdateuserinfo' => 'Uppdatera min personliga information:',
	'irmadelete' => 'Ta bort IRMA',
	'irmadelete-text' => 'Genom att klicka på knappen "{{int:irmadelete-button}}" kommer du att ta bort IRMA $1 från ditt konto. Du kommer inte att kunna använda detta IRMA för att logga in.',
	'irmadelete-button' => 'Bekräfta',
	'irmadeleteerrornopassword' => 'Du kan inte radera alla dina OpenId eftersom ditt konto saknar lösenord.
Du skulle inte kunna logga in utan ett IRMA.',
	'irmadeleteerrorirmaonly' => 'Du kan inte radera alla dina IRMA eftersom du endast får logga in med IRMA.
Du skulle inte kunna logga in utan ett IRMA.',
	'irmadelete-success' => 'IRMA-kopplingen har tagits bort från ditt konto.',
	'irmadelete-error' => 'Ett fel uppstod när IRMA-kopplingen skulle tas bort från ditt konto.',
	'irma-irmas-were-not-merged' => "Eventuella IRMA:n som varit kopplade till de sammanslagna kontona har ''inte'' slagits samman.",
	'prefs-irma-hide-irma' => 'Dölj IRMA-URL:en på din användarsida, om du loggar in med IRMA.',
	'prefs-irma-associated-irmas' => 'Dina IRMAs för att logga in på {{SITENAME}}',
	'prefs-irma-trusted-sites' => 'Betrodda sidor',
	'prefs-irma-local-identity' => 'Ditt IRMA för att logga in på andra sidor',
	'irma-hide-irma-label' => 'Dölj IRMA-adressen på din användarsida.',
	'irma-show-irma-url-on-userpage-always' => 'Ditt IRMA visas alltid på din användarsida när du besöker den.',
	'irma-show-irma-url-on-userpage-never' => 'Ditt IRMA visas aldrig på din användarsida.',
	'irma-userinfo-update-on-login-label' => 'Informationsfälten på användarprofilen som kommer att uppdateras automatiskt från IRMA-profilen varje gång du loggar in:',
	'irma-associated-irmas-label' => 'IRMA:n som är kopplade till ditt konto:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Åtgärd',
	'irma-urls-registration' => 'Registreringstidpunkt',
	'irma-urls-delete' => 'Ta bort',
	'irma-add-url' => 'Lägg till ett nytt IRMA till ditt konto',
	'irma-trusted-sites-label' => 'Sidor du litar på och var du har använt ditt IRMA för att logga in:',
	'irma-trusted-sites-table-header-column-url' => 'Betrodda sidor',
	'irma-trusted-sites-table-header-column-action' => 'Åtgärd',
	'irma-trusted-sites-delete-link-action-text' => 'Radera',
	'irma-trusted-sites-delete-all-link-action-text' => 'Radera alla betrodda sidor',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Radering av betrodda sidor',
	'irma-trusted-sites-delete-confirmation-question' => 'Genom att klicka på knappen "{{int:irma-trusted-sites-delete-confirmation-button-text}}" kommer du ta bort "$1" från listan över sidor du litar på.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Genom att klicka på knappen "{{int:irma-trusted-sites-delete-confirmation-button-text}}" kommer du ta bort alla betrodda sidor från din användarprofil.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Bekräfta',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" togs bort från listan över sidor du litar på.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Alla sidor du tidigare litade på togs framgångsrikt bort från din användarprofil.',
	'irma-local-identity' => 'Ditt IRMA:',
	'irma-login-or-create-account' => 'Logga in eller skapa ett nytt konto',
	'irma-provider-label-irma' => 'Skriv in din IRMA-URL',
	'irma-provider-label-google' => 'Logga in med ditt Google-konto',
	'irma-provider-label-yahoo' => 'Logga in med ditt Yahoo-konto',
	'irma-provider-label-aol' => 'Skriv in ditt AOL-användarnamn',
	'irma-provider-label-wmflabs' => 'Logga in med ditt Wmflabs-konto',
	'irma-provider-label-other-username' => 'Skriv in ditt $1-användarnamn',
	'specialpages-group-irma' => 'Specialsidor för IRMA',
	'right-irma-converter-access' => 'Kan lägga till eller konvertera sina konton för att använda IRMA-identiteter',
	'right-irma-dashboard-access' => 'Tillgång till IRMA-kontrollpanelen',
	'right-irma-dashboard-admin' => 'Administratörstillgång till IRMA-kontrollpanelen',
	'irma-dashboard-title' => 'Kontrollpanel för IRMA',
	'irma-dashboard-title-admin' => 'Kontrollpanel för IRMA (administratör)',
	'irma-dashboard-introduction' => 'Aktuella inställningar för IRMA-tillägget ([$1 hjälp])',
	'irma-dashboard-number-irma-users' => 'Antal användare med IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Antal IRMA:n (totalt)',
	'irma-dashboard-number-users-without-irma' => 'Antal användare utan IRMA',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'irmacancel' => 'சரிபார்ப்பு  இரத்து செய்யப்பட்டது',
	'irmafailure' => 'சரிபார்ப்பு தோல்வியுற்றது',
	'irmasuccess' => 'சரிபார்ப்பு  வெற்றியடைந்தது',
	'irmaoptional' => 'விருப்பத்தேர்வு',
	'irmarequired' => 'தேவைபடுகிறது',
	'irmanickname' => 'புனைப்பெயர்',
	'irmafullname' => 'முழுப்பெயர்', # Fuzzy
	'irmaemail' => 'மின்னஞ்சல் முகவரி',
	'irmalanguage' => 'மொழி',
	'irmatimezone' => 'நேர வலயம்',
	'irmachooseinstructions' => 'எல்லாப் பயனர்களுக்கும் புனைப்பெயர் தேவை.
பின்வரும் விருப்பத் தேர்வுகளுள் ஒன்றை நீங்கள் தேர்வு  செய்யலாம்.',
	'irmachoosenick' => 'உங்கள் புனைப்பெயர் ($1)',
	'irmachoosefull' => 'உங்கள் முழுப்பெயர் ($1)', # Fuzzy
	'irmachooseusername' => 'பயனர் பெயர்:',
	'irmachoosepassword' => 'கடவுச்சொல்:',
	'irma-convert-other-users-irma-text' => 'இது வேறு ஒருவரின் IRMA.', # Fuzzy
	'irmaalreadyloggedin' => 'நீங்கள் ஏற்கனவே புகுபதிகை செய்துள்ளீர்கள்.',
	'irmanousername' => 'ஒரு பயனர் பெயரும் குறிப்பிடப்படவில்லை.',
	'irmabadusername' => 'மோசமான பயனர் பெயர் குறிப்பிடப்பட்டுள்ளது.',
	'irmadelete-button' => 'உறுதிசெய்',
	'irma-urls-url' => 'உரலி (URL)',
	'irma-urls-action' => 'செயல்',
	'irma-urls-registration' => 'பதிவு செய்யும் நேரம்',
	'irma-urls-delete' => 'நீக்கு',
	'irma-login-or-create-account' => 'புகுபதிகை செய்க அல்லது  புதிய கணக்கு ஒன்றை உருவாக்கவும்',
	'irma-provider-label-google' => 'உங்கள் கூகுள் கணக்கைப் பயன்படுத்திப் புகுபதிகை செய்க',
	'irma-provider-label-other-username' => 'உங்கள் $1 பயனர் பெயரை உள்ளிடவும்',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Ravichandra
 * @author Veeven
 */
$messages['te'] = array(
	'irma-desc' => '[//irma.net/ ఓపెన్ఐడీ]తో వికీ లోనికి ప్రవేశించండి, మరియు వికీ వాడుకరి ఖాతాతో ఓపెన్ఐడీని అంగీకరించే ఇతర వెబ్ సైట్లలోనికి ప్రవేశించండి',
	'irmalogin' => 'ఓపెన్ఐడీతో ప్రవేశించండి', # Fuzzy
	'irmaserver' => 'ఓపెన్ఐడీ సేవకి',
	'irmaerror' => 'తనిఖీ పొరపాటు',
	'irmaerrortext' => 'ఓపెన్ఐడీ చిరునామాని తనిఖీ చేయడంలో పొరపాటు జరిగింది.',
	'irmapermission' => 'ఓపెన్ఐడీ అనుమతుల పొరపాటు',
	'irmapermissiontext' => 'మీరు ఇచ్చిన ఓపెన్ఐడీకి ఈ సేవకి లోనికి ప్రవేశించే అనుమతి లేదు.',
	'irmacancel' => 'తనిఖీ రద్దయింది',
	'irmacanceltext' => 'ఓపెన్ఐడీ చిరునామా యొక్క తనిఖీని రద్దుచేసారు.',
	'irmafailure' => 'తనిఖీ విఫలమైంది',
	'irmafailuretext' => 'ఓపెన్ఐడీ చిరునామా యొక్క తనిఖీ విఫలమైంది. పొరపాటు సందేశం: "$1"',
	'irmasuccess' => 'తనిఖీ విజయవంతమైంది',
	'irmaserverlogininstructions' => '$3 లోనికి $2 (వాడుకరి పేజీ $1) అనే వాడుకరిగా ప్రవేశించడానికి మీ సంకేతపదం ఇవ్వండి.', # Fuzzy
	'irmaallowtrust' => 'ఈ వాడుకరి ఖాతాని విశ్వసించడానికి $1ని అనుమతించు.',
	'irmanopolicy' => 'సైటు అంతరంగికత విధానాన్ని పేర్కొనలేదు.',
	'irmapolicy' => 'మరింత సమాచారం కొరకు <a target="_new" href="$1">అంతరంగికత విధానా</a>న్ని చూడండి.',
	'irmaoptional' => 'ఐచ్చికం',
	'irmarequired' => 'తప్పనిసరి',
	'irmanickname' => 'ముద్దుపేరు',
	'irmafullname' => 'పూర్తిపేరు', # Fuzzy
	'irmaemail' => 'ఈ-మెయిల్ చిరునామా',
	'irmalanguage' => 'భాష',
	'irmatimezone' => 'కాలమానం',
	'irmachooseinstructions' => 'సభ్యులందరికీ ముద్దు పేరు ఉండవలెను.
క్రింద పేర్కొన్న వాటిలో ఒకటి ఎంచుకోండి',
	'irmachoosefull' => 'మీ పూర్తి పేరు ($1)', # Fuzzy
	'irmachooseurl' => 'మీ ఓపెన్ఐడీ నుండి తీసుకున్న పేరు ($1)',
	'irmachoosemanual' => 'మీరు ఎన్నుకున్న పేరు:',
	'irmachooseexisting' => 'ఈ వికీలో ఇప్పటికే ఉన్న ఖాతా',
	'irmachooseusername' => 'వాడుకరి పేరు:',
	'irmachoosepassword' => 'సంకేతపదం:',
	'irmaconvertinstructions' => 'మీ ఖాతాని ఓపెన్ఐడీ చిరునామా ఉపయోగించేలా మార్చడానికి లేదా మరిన్ని ఓపెన్ఐడీ చిరునామాలు చేర్చుకోడానికి ఈ ఫారం వీలుకల్పిస్తుంది',
	'irmaconvertsuccess' => 'విజయవంతంగా ఓపెనిఐడీకి మారారు',
	'irmaconvertsuccesstext' => 'మీ ఓపెన్ఐడీని $1కి విజయవంతంగా మార్చుకున్నారు.',
	'irma-convert-already-your-irma-text' => 'అది ఇప్పటికే మీ ఓపెన్ఐడీ.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'ఇది వేరొకరి ఓపెన్ ఐడి', # Fuzzy
	'irmanousername' => 'వాడుకరిపేరు ఇవ్వలేదు.',
	'irmabadusername' => 'తప్పుడు వాడుకరిపేరుని ఇచ్చారు.',
	'irmaclientonlytext' => 'ఈ వికీ లోని ఖాతాలను మీరు వేరే సైట్లలో ఓపెన్ఐడీలుగా ఉపయోగించలేరు.',
	'irmaloginlabel' => 'ఓపెన్ఐడీ చిరునామా',
	'irmaupdateuserinfo' => 'నా వ్యక్తిగత సమాచారాన్ని తాజాకరించు:',
	'irmadelete' => 'ఓపెన్ ఐడి తొలగించు',
	'irmadelete-button' => 'నిర్ధారించు',
	'irmadelete-success' => 'మీ ఖాతా నుండి ఆ ఓపెన్ఐడీని విజయవంతంగా తొలగించాం.',
	'irmadelete-error' => 'మీ ఖాతా నుండి ఓపెన్ఐడీని తొలగించడంలో పొరపాటు జరిగింది.',
	'prefs-irma-hide-irma' => 'నేను ఓపెన్ఐడీతో ప్రవేశిస్తే, నా ఓపెన్ఐడీ చిరునామాని నా వాడుకరి పేజీలో కనబడకుండా దాచు.',
	'irma-hide-irma-label' => 'నేను ఓపెన్ఐడీతో ప్రవేశిస్తే, నా ఓపెన్ఐడీ చిరునామాని నా వాడుకరి పేజీలో కనబడకుండా దాచు.', # Fuzzy
	'irma-associated-irmas-label' => 'మీ ఖాతాతో సంధానమై ఉన్న ఓపెన్ఐడీలు:',
	'irma-urls-action' => 'చర్య',
	'irma-urls-delete' => 'తొలగించు',
	'irma-add-url' => 'కొత్త ఓపెన్ఐడీని చేర్చు', # Fuzzy
	'irma-login-or-create-account' => 'ప్రవేశించండి లేదా కొత్త ఖాతాని సృష్టించుకోండి', # Fuzzy
	'irma-provider-label-irma' => 'మీ ఓపెన్ఐడీ చిరునామాని ఇవ్వండి',
	'irma-provider-label-google' => 'మీ గూగుల్ ఖాతాని ఉపయోగించి ప్రవేశించండి',
	'irma-provider-label-yahoo' => 'మీ యాహూ ఖాతాని ఉపయోగించి ప్రవేశించండి',
	'irma-provider-label-aol' => 'మీ ఎఓఎల్ స్క్రీన్ నామము ఇవ్వండి',
	'irma-provider-label-other-username' => 'మీ $1 వాడుకరిపేరుని ఇవ్వండి',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'irmanickname' => "Naran uza-na'in",
	'irmafullname' => 'Naran kompletu', # Fuzzy
	'irmaemail' => 'Diresaun korreiu eletróniku',
	'irmalanguage' => 'Lian',
	'irmachooseusername' => "Naran uza-na'in:",
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'irma-desc' => 'Ба вики бо [//irma.net/ IRMA] вуруд кунед, ва ба дигар сомонаҳои IRMA бо ҳисоби корбарии вики вуруд кунед',
	'irmalogin' => 'Бо IRMA вуруд кунед', # Fuzzy
	'irmaserver' => 'Хидматгузори IRMA',
	'irmaxrds' => 'Парвандаи Yadis',
	'irmaconvert' => 'Табдилкунандаи IRMA',
	'irmaerror' => 'Хатои тасдиқ',
	'irmaerrortext' => 'Дар ҳолати тасдиқи нишонаи IRMA хатое рух дод.',
	'irmaconfigerror' => 'Хатои Танзимоти IRMA',
	'irmaconfigerrortext' => 'Танзимоти захирасозии IRMA барои ин вики номӯътабар аст.
Лутфан бо мудири сомона тамос бигиред.', # Fuzzy
	'irmaoptional' => 'Ихтиёрӣ',
	'irmaemail' => 'Нишонаи почтаи электронӣ',
	'irmalanguage' => 'Забон',
	'irmachoosepassword' => 'Калимаи убур:',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'irma-desc' => 'Ba viki bo [//irma.net/ IRMA] vurud kuned, va ba digar somonahoi IRMA bo hisobi korbariji viki vurud kuned',
	'irmalogin' => 'Bo IRMA vurud kuned', # Fuzzy
	'irmaserver' => 'Xidmatguzori IRMA',
	'irmaxrds' => 'Parvandai Yadis',
	'irmaconvert' => 'Tabdilkunandai IRMA',
	'irmaerror' => 'Xatoi tasdiq',
	'irmaerrortext' => 'Dar holati tasdiqi nişonai IRMA xatoe rux dod.',
	'irmaconfigerror' => 'Xatoi Tanzimoti IRMA',
	'irmaoptional' => 'Ixtijorī',
	'irmaemail' => 'Nişonai poctai elektronī',
	'irmalanguage' => 'Zabon',
	'irmachoosepassword' => 'Kalimai ubur:',
);

/** Thai (ไทย)
 * @author Passawuth
 */
$messages['th'] = array(
	'irmaemail' => 'อีเมล',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'irmalanguage' => 'Dil',
	'irma-urls-delete' => 'Öçür',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'irma-desc' => 'Lumagda sa wiki na may [//irma.net/ IRMA], at lumagda sa iba pang mga websayt na nakakaalam sa/nakababatid ng IRMA na may kuwenta/akawnt na pang-wiki',
	'irmalogin' => 'Lumagda / lumika ng akawnt sa pamamagitan ng IRMA',
	'irmaserver' => 'Serbidor ng IRMA',
	'irmaxrds' => 'Talaksang Yadis',
	'irmaconvert' => 'Tagapagpalit ng IRMA',
	'irmaerror' => 'Kamalian sa pagpapatunay',
	'irmaerrortext' => 'Naganap ang isang kamalian habang pinatototohanan ang URL ng IRMA.',
	'irmaconfigerror' => 'Kamalian sa pagkakaayos ng IRMA',
	'irmaconfigerrortext' => 'Hindi tanggap ang kaayusang pangtaguan ng IRMA para sa wiking ito.
Makipagugnayan po lamang sa isang [[Special:ListUsers/sysop|tagapangasiwa]].',
	'irmapermission' => 'May kamalian sa mga kapahintulutang pang-IRMA',
	'irmapermissiontext' => 'Hindi pinapahintulutang makalagda sa serbidor na ito ang ibinigay mong IRMA.',
	'irmacancel' => 'Hindi itinuloy ang pagpapatotoo',
	'irmacanceltext' => 'Hindi itinuloy ang pagpapatotoo sa URL ng IRMA.',
	'irmafailure' => 'Nabigo ang pagpapatotoo',
	'irmafailuretext' => 'Nabigo ang pagpapatoo sa URL ng IRMA.  Mensaheng pangkamalian: "$1"',
	'irmasuccess' => 'Nagtagumpay ang pagpapatotoo',
	'irmasuccesstext' => "'''Matagumpay na pagpapatotoo at paglagda bilang ang tagagamit na si $1'''.

Ang IRMA mo ay $2 .

Ito at ang karagdagan ngunit maaaring meron o wala na mga IRMA na maaaring pamahalaan sa loob ng [[Special:Preferences#mw-prefsection-irma|laylayan ng IRMA]] ng mga kanaisan mo.<br />
Maaaring idagdag o hindi idagdag ang isang hudyat ng akawnt sa loob ng iyong [[Special:Preferences#mw-prefsection-personal|Balangkas ng katangian ng tagagamit]].",
	'irmausernameprefix' => 'Tagagamit ng IRMA',
	'irmaserverlogininstructions' => 'Hinihiling ni $3 na ipasok mo ang iyong hudyat para sa iyong pahina $1 ng tagagamit $2 (ito ang iyong URL ng IRMA)',
	'irmatrustinstructions' => 'Pakisuri kung nais mong isalo ang dato kay $1.',
	'irmaallowtrust' => 'Pahintulutan si $1 na pagkatiwalaan ang kuwenta ng tagagamit na ito.',
	'irmanopolicy' => 'Hindi tumukoy ang sityo (sayt) ng isang patakaran sa paglilihim na pansarili.',
	'irmapolicy' => 'Suriin ang <a target="_new" href="$1">patakaran sa paglilihim na pansarili</a> para sa mas marami pang kabatiran.',
	'irmaoptional' => 'Opsyonal (hindi talaga kailangan/maaaring wala nito)',
	'irmarequired' => 'Kinakailangan',
	'irmanickname' => 'Bansag',
	'irmafullname' => 'Buong pangalan', # Fuzzy
	'irmaemail' => 'Adres ng e-liham',
	'irmalanguage' => 'Wika',
	'irmatimezone' => 'Sona ng oras',
	'irmachooselegend' => 'Mapagpipilian ng pangalan ng tagagamit at akawnt',
	'irmachooseinstructions' => 'Lahat ng mga tagagamit ay kinakailangang may bansag;
makakapili ka mula sa mga pagpipiliang nasa ibaba.',
	'irmachoosenick' => 'Ang palayaw mo ($1)',
	'irmachoosefull' => 'Ang buong pangalan mo ($1)', # Fuzzy
	'irmachooseurl' => 'Isang pangalang napulot (napili/nakuha) mula sa iyong IRMA ($1)',
	'irmachooseauto' => 'Isang pangalang kusang nalikha ($1)',
	'irmachoosemanual' => 'Isang pangalang ikaw ang pumili:',
	'irmachooseexisting' => 'Isang umiiral na akawnt sa wiking ito:',
	'irmachooseusername' => 'Pangalan ng tagagamit:',
	'irmachoosepassword' => 'Hudyat:',
	'irmaconvertinstructions' => 'Nagpapahintulot ang pormularyong ito upang mabago mo ang iyong akawnt na pangtagagamit upang magamit ang isang URL ng IRMA o makapagdagdag ng maraming pang mga URL na pang-IRMA.',
	'irmaconvertoraddmoreids' => 'Gawing IRMA o magdagdag ng iba pang URL na pang-IRMA',
	'irmaconvertsuccess' => 'Matagumpay na napalitan (nabago) upang maging IRMA',
	'irmaconvertsuccesstext' => 'Matagumpay mong napalitan/nabago ang iyong IRMA para maging $1.',
	'irma-convert-already-your-irma-text' => 'Iyan na mismo ang iyong IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Iyan ay isa nang IRMA ng ibang tao.', # Fuzzy
	'irmaalreadyloggedin' => 'Nakalagda ka na.',
	'irmaalreadyloggedintext' => "'''Nakalagda ka na, $1!'''

Mapapamahalaan (matitingnan, mabubura, magdagdag pa) mo ang mga IRMA sa loob ng [[Special:Preferences#mw-prefsection-irma|laylay ng IRMA]] ng mga kanaisan mo.",
	'irmanousername' => 'Walang tinukoy na pangalan ng tagagamit.',
	'irmabadusername' => 'Masama ang tinukoy na pangalan ng tagagamit.',
	'irmaautosubmit' => 'Kabilang/kasama sa pahinang ito ang isang pormularyo na dapat na kusang maipasa/maipadala kapag hindi pinaandar (pinagana) ang JavaScript.
Kung hindi, subukin ang pindutang "Continue" (Magpatuloy).',
	'irmaclientonlytext' => 'Hindi mo magagamit ang mga kuwenta mula sa wiking ito bilang mga IRMA sa iba pang sityo/sayt.',
	'irmaloginlabel' => 'URL ng IRMA',
	'irmalogininstructions' => "Tinatangkilik ng {{SITENAME}} ang pamantayang [//irma.net/ IRMA] para sa mga pang-isahang ulit na paglagda sa pagitan ng mga pook sa Sangkasaputan.
Hinahayaan ka ng IRMA na makalagda sa maraming iba't ibang mga pook sa Sangkasaputan na hindi gumagamit ng isang naiibang hudyat para sa bawat isa.
(Tingnan ang [//en.wikipedia.org/wiki/IRMA artikulo hinggil sa IRMA ng Wikipedia] para sa mas marami pang kabatiran.)
Maraming mga [http://wiki.irma.net/Public_IRMA_providers tagapagbigay ng IRMA], at maaaring mayroon ka nang isang akawnt na pinagana ng IRMA na nasa ibang palingkuran.",
	'irmalogininstructions-irmaloginonly' => "Pinapayagan ka ng {{SITENAME}} na lumagdang papasok sa pamamagitan ''lamang'' ng IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Kung mayroon ka nang isang akawnt sa {{SITENAME}}, [[Special:UserLogin|Makakalagda]] ka sa pangkaraniwang paraan sa pamamagitan ng iyong pangalan ng tagagamit at hudyat. Upang magamit ang IRMA sa hinaharap, [[Special:IRMAConvert|mapapalitan mo ang iyong akawnt upang maging isang IRMA]] pagkaraan mong lumagda sa normal na paraan.',
	'irmaupdateuserinfo' => 'Isapanahon ang aking pansariling kabatiran:',
	'irmadelete' => 'Burahin ang IRMA',
	'irmadelete-text' => 'Sa pagpaindot ng pindutang "{{int:irmadelete-button}}", aalisin mo ang IRMA na $1 mula sa iyong akawnt.  Hindi ka na makalalagdang papasok sa pamamagitan ng ganitong IRMA.',
	'irmadelete-button' => 'Tiyakin',
	'irmadeleteerrornopassword' => 'Hindi mo mabubura ang lahat ng mga IRMA mo dahil walang hudyat ang akawnt mo.
Hindi ka makalalagda na walang IRMA.',
	'irmadeleteerrorirmaonly' => 'Hindi mo mabubura ang lahat ng mga IRMA mo dahil hindi pinapayagan kang lumagda sa pamamagitan lang ng IRMA.
Hindi ka maaaring makalagda na walang IRMA.',
	'irmadelete-success' => 'Matagumpay na natanggal ang IRMA mula sa iyong akawnt.',
	'irmadelete-error' => 'Naganap ang isang kamalian habang tinatanggal ang IRMA mula sa iyong akawnt.',
	'irma-irmas-were-not-merged' => 'Hindi napagsanib ang (mga) IRMA noong pinagsasanib ang mga akawnt ng tagagamit.',
	'prefs-irma' => 'IRMA',
	'prefs-irma-hide-irma' => 'Itago ang IRMA mo sa ibabaw ng iyong pahina ng tagagamit, kapag lumagda ka sa pamamagitan ng IRMA.',
	'irma-hide-irma-label' => 'Itago ang IRMA mo sa ibabaw ng iyong pahina ng tagagamit, kapag lumagda ka sa pamamagitan ng IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Isapanahon ang sumusunod na kabatiran mula sa katauhang pang-IRMA sa bawat pagkakataong lalagda akong papasok:', # Fuzzy
	'irma-associated-irmas-label' => 'Mga openID na may kaugnayan sa akawnt mo:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Galaw',
	'irma-urls-registration' => 'Oras ng pagpaparehistro',
	'irma-urls-registration-date-time' => '$1',
	'irma-urls-delete' => 'Burahin',
	'irma-add-url' => 'Magdagdag ng isang bagong IRMA', # Fuzzy
	'irma-login-or-create-account' => 'Lumagda o lumikha ng isang bagong akawnt',
	'irma-provider-label-irma' => 'Ipasok ang iyong URL na pang-IRMA',
	'irma-provider-label-google' => 'Lumagdang ginagamit ang iyong akawnt na pang-Google',
	'irma-provider-label-yahoo' => 'Lumagdang ginagamit ang akawnt mong pang-Yahoo',
	'irma-provider-label-aol' => 'Ipasok ang iyong katawagang pang-AOL',
	'irma-provider-label-other-username' => 'Ipasok ang iyong pangalang pangtagagamit na pang-$1',
	'specialpages-group-irma' => 'Mga pahina ng paglilingkod at kabatiran sa katayuan ng IRMA',
	'right-irma-converter-access' => 'Maidaragdag o mapapalitan ang kanilang akawnt upang makagamit ng mga katauhan ng IRMA',
	'right-irma-dashboard-access' => 'Pamantayang pagpunta sa tapalodo ng IRMA',
	'right-irma-dashboard-admin' => 'Pagpunta ng tagapangasiwa sa tapalodo ng IRMA',
	'irma-dashboard-title' => 'Tapalodo ng IRMA',
	'irma-dashboard-title-admin' => 'Tapalodo ng IRMA (tagapangasiwa)',
	'irma-dashboard-introduction' => 'Ang pangkasalukuyang mga katakdaan ng dugtong na IRMA ([$1 tulong])',
	'irma-dashboard-number-irma-users' => 'Bilang ng mga tagagamit na mayroong IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Bilang ng mga IRMA (kabuuan)',
	'irma-dashboard-number-users-without-irma' => 'Bilang ng mga tagagamit na walang IRMA',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Suelnur
 */
$messages['tr'] = array(
	'irma-desc' => 'Vikiye bir [//irma.net/ IRMA] ile giriş yapın, ve diğer IRMA kullanan web sitelerine bir viki kullanıcı hesabıyla giriş yapın.',
	'irmalogin' => 'IRMA ile giriş yapın', # Fuzzy
	'irmaserver' => 'IRMA sunucusu',
	'irmaxrds' => 'Yadis dosyası',
	'irmaconvert' => 'IRMA çeviricisi',
	'irmaerror' => 'Doğrulama hatası',
	'irmaerrortext' => 'IRMA adresi doğrulanırken bir hata oluştu.',
	'irmaconfigerror' => 'IRMA yapılandırma hatası',
	'irmaconfigerrortext' => 'Bu viki için IRMA depolama yapılandırması geçersiz.
Lütfen bir [[Special:ListUsers/sysop|yöneticiye]] danışın.',
	'irmapermission' => 'IRMA izinleri hatası',
	'irmapermissiontext' => "Sağladığınız IRMA'nin bu sunucuya oturum açmasına izin verilmiyor.",
	'irmacancel' => 'Doğrulama iptal edildi',
	'irmacanceltext' => 'IRMA URL doğrulaması iptal edildi.',
	'irmafailure' => 'Doğrulama başarısız',
	'irmafailuretext' => 'IRMA URL doğrulaması başarısız oldu. Hata iletisi: "$1"',
	'irmasuccess' => 'Doğrulama başarılı',
	'irmasuccesstext' => 'IRMA URL doğrulaması başarılı.', # Fuzzy
	'irmausernameprefix' => 'IRMAKullanıcısı',
	'irmaserverlogininstructions' => '$3 sitesine $2 kullanıcısı (kullanıcı sayfası $1) olarak oturum açmak için parolanızı aşağıya girin.', # Fuzzy
	'irmatrustinstructions' => '$1 ile veri paylaşmak istediğinizi kontrol edin.',
	'irmaallowtrust' => "Bu kullanıcı hesabına güvenmek için $1'e izin ver.",
	'irmanopolicy' => 'Site bir gizlilik ilkesi belirtmemiş.',
	'irmapolicy' => 'Daha fazla bilgi için <a target="_new" href="$1">gizlilik ilkesine</a> bakın.',
	'irmaoptional' => 'İsteğe Bağlı',
	'irmarequired' => 'Gerekli',
	'irmanickname' => 'Kullanıcı adı',
	'irmafullname' => 'Tam ad', # Fuzzy
	'irmaemail' => 'E-posta adresi',
	'irmalanguage' => 'Dil',
	'irmatimezone' => 'Saat dilimi',
	'irmachooselegend' => 'Kullanıcı adı ve hesap seçimi',
	'irmachooseinstructions' => 'Tüm kullanıcılar için bir kullanıcı adı gereklidir;
aşağıdaki seçeneklerden birini seçebilirsiniz.',
	'irmachoosenick' => 'Rumuzunuz ($1)',
	'irmachoosefull' => 'Tam adınız ($1)', # Fuzzy
	'irmachooseurl' => "IRMA'nizden bir isim alındı ($1)",
	'irmachooseauto' => 'Otomatik oluşturulan bir isim ($1)',
	'irmachoosemanual' => 'Tercihinizden bir isim:',
	'irmachooseexisting' => 'Bu vikide mevcut bir hesap',
	'irmachooseusername' => 'Kullanıcı adı:',
	'irmachoosepassword' => 'Parola:',
	'irmaconvertinstructions' => 'Bu form bir IRMA URLsi kullanmak ya da daha fazla IRMA URLsi eklemek için kullanıcı hesabınızı değiştirmenizi sağlar.',
	'irmaconvertoraddmoreids' => "IRMA'ye dönüştürün ya da başka bir IRMA URLsi ekleyin",
	'irmaconvertsuccess' => 'IRMAye başarıyla dönüştürüldü',
	'irmaconvertsuccesstext' => "IRMAnizi başarıyla $1'e dönüştürdünüz.",
	'irma-convert-already-your-irma-text' => 'Bu zaten sizin IRMAniz.', # Fuzzy
	'irma-convert-other-users-irma-text' => 'Bu bir başkasının IRMAsi.', # Fuzzy
	'irmaalreadyloggedin' => "'''Zaten oturum açtınız, $1!'''

Eğer gelecekte de oturum açmak için IRMA kullanmak isterseniz, [[Special:IRMAConvert|hesabınızı IRMA kullanmak için dönüştürebilirsiniz]].", # Fuzzy
	'irmanousername' => 'Herhangi bir kullanıcı adı belirtilmedi.',
	'irmabadusername' => 'Kötü bir kullanıcı adı belirtildi.',
	'irmaautosubmit' => 'Bu sayfa, JavaScript etkin ise otomatik olarak gönderilmesi gereken bir form içeriyor.
Eğer değilse, "Continue" (Devam) düğmesini deneyin.',
	'irmaclientonlytext' => 'Bu vikideki hesapları başka sitelerde IRMA olarak kullanamazsınız.',
	'irmaloginlabel' => 'IRMA URLsi',
	'irmalogininstructions' => "{{SITENAME}}, web sitelerinde tekli giriş için [//irma.net/ IRMA] standartını desteklemektedir.
IRMA, herbirine farklı şifre kullanmadan birçok web sitesine giriş yapmanıza izin verir.
(Daha fazla bilgi için [//en.wikipedia.org/wiki/IRMA Vikipedideki IRMA maddesine bakın].)

Eğer {{SITENAME}} sitesinde mevcut bir hesabınız varsa, her zamanki gibi kullanıcı adınız ve şifrenizle [[Special:UserLogin|giriş yapabilirsiniz]].
İleride IRMA kullanmak için, normal giriş yaptıktan sonra [[Special:IRMAConvert|hesabınızı IRMA'ye çevirebilirsiniz]].

Birçok [//irma.net/get/ IRMA sağlayıcısı] vardır, ve bir başka serviste halihazırda bir IRMA-etkin hesabınız olabilir.", # Fuzzy
	'irmaupdateuserinfo' => 'Kişisel bilgimlerimi güncelle:',
	'irmadelete' => "IRMA'yi sil",
	'irmadelete-text' => '"{{int:irmadelete-button}}" düğmesine tıklayarak, $1 IRMA\'sini hesabınızdan çıkaracaksınız.
Bu IRMA ile artık giriş yapamayacaksınız.',
	'irmadelete-button' => 'Onayla',
	'irmadeleteerrornopassword' => "Tüm IRMA'lerinizi silemezsiniz çünkü hesabınızın şifresi yok.
IRMA olmadan giriş yapamazsınız.",
	'irmadeleteerrorirmaonly' => "Tüm IRMA'lerinizi silemezsiniz çünkü sadece IRMA ile giriş yapmaya izniniz var.
IRMA olmadan giriş yapamazsınız.",
	'irmadelete-success' => 'IRMA hesabınızdan başarıyla kaldırıldı.',
	'irmadelete-error' => 'IRMA hesabınızdan çıkarılırken bir hata oluştu.',
	'prefs-irma-hide-irma' => 'Eğer IRMA ile giriş yaparsanız, kullanıcı sayfanızda IRMA URLnizi gizle.',
	'irma-hide-irma-label' => 'Eğer IRMA ile giriş yaparsanız, kullanıcı sayfanızda IRMA URLnizi gizle.', # Fuzzy
	'irma-userinfo-update-on-login-label' => 'Her oturum açışımda IRMA karakterinden aşağıdaki bilgileri güncelle:', # Fuzzy
	'irma-associated-irmas-label' => "Hesabınızla ilişkili IRMA'ler:",
	'irma-urls-action' => 'Eylem',
	'irma-urls-delete' => 'Sil',
	'irma-add-url' => 'Yeni bir IRMA ekle', # Fuzzy
	'irma-login-or-create-account' => 'Oturum açın ya da yeni hesap oluşturun',
	'irma-provider-label-irma' => 'IRMA URLnizi girin',
	'irma-provider-label-google' => 'Google hesabınızı kullanarak giriş yapın',
	'irma-provider-label-yahoo' => 'Yahoo hesabınızı kullanarak giriş yapın',
	'irma-provider-label-aol' => 'AOL ekran-adınızı girin',
	'irma-provider-label-other-username' => '$1 kullanıcı adınızı girin',
);

/** Turoyo (Ṫuroyo)
 * @author Ariyo
 */
$messages['tru'] = array(
	'irmalanguage' => 'Leşono:',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Alfredie
 */
$messages['ug-arab'] = array(
	'irmalanguage' => 'تىل',
);

/** Uyghur (Latin script) (Uyghurche)
 * @author Jose77
 */
$messages['ug-latn'] = array(
	'irmalanguage' => 'Til',
);

/** Ukrainian (українська)
 * @author A1
 * @author AS
 * @author Aleksandrit
 * @author Alex Khimich
 * @author Andriykopanytsia
 * @author Base
 * @author NickK
 * @author Prima klasy4na
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'irma-desc' => 'Вхід у вікі за допомогою [//irma.net/ IRMA], а також вхід на інші сайти, що підтримують IRMA за допомогою акаунта в вікі',
	'irmaidentifier' => 'Ідентифікатор IRMA',
	'irmalogin' => 'Вхід / створення аккаунту за допомогою IRMA',
	'irmaserver' => 'Сервер IRMA',
	'irma-identifier-page-text-user' => 'Ця сторінка є ідентифікатором користувача "$1".',
	'irma-identifier-page-text-different-user' => 'Ця сторінка є ідентифікатором ID користувача $1.',
	'irma-identifier-page-text-no-such-local-irma' => 'Це неприпустимий локальний ідентифікатор IRMA.',
	'irma-server-identity-page-text' => 'Це технічна сторінка сервера IRMA, призначена для запуску IRMA-аутентифікації. Сторінка не має іншої мети.',
	'irmaxrds' => 'Файл Yadis',
	'irmaconvert' => 'Перетворювач IRMA',
	'irmaerror' => 'Помилка перевірки повноважень',
	'irmaerrortext' => 'Під час перевірки адреси IRMA сталася помилка.',
	'irma-error-no-auth' => 'При перевірці IRMA URL $1 трапилася помилка відповіді/запиту невизначеної автентифікації.',
	'irma-error-server-response' => 'Сталася помилка при перевірці IRMA URL $1.

Відповідь сервера: "$2"',
	'irma-error-request-forgery' => 'Сталася помилка: виявлено неприпустимий маркер.',
	'irma-error-wrong-force-provider-setting' => 'Сталася внутрішня помилка: неправильне значення URL було знайдене для примусового провайдера "$1".',
	'irma-error-irma-convert-not-allowed-forced-provider' => 'Неможливо зв\'язати подальший IRMAs з вашим обліковим записом, тому що ви можете використовувати тільки \'\'"примусового"\'\' провайдера IRMA "$1" для входу в систему на цій вікі.',
	'irmaconfigerror' => 'Помилка налаштування IRMA',
	'irmaconfigerrortext' => 'Налаштування сховища IRMA для цієї вікі помилкова.
Будь-ласка, зверніться до [[Special:ListUsers/sysop|адміністратору сайту]].',
	'irmapermission' => 'Помилка прав доступу IRMA',
	'irmapermissiontext' => 'Вказаний IRMA не дозволяє увійти на цей сервер.',
	'irmacancel' => 'Перевірку скасовано',
	'irmacanceltext' => 'Перевірка адреси IRMA була скасована.',
	'irmafailure' => 'Перевірка невдала',
	'irmafailuretext' => 'Перевірка адреси IRMA завершилася невдачею. Повідомлення про помилку: «$1»',
	'irmasuccess' => 'Перевірка пройшла успішно',
	'irmasuccesstext' => "'''Успішна перевірка і вхід в систему як користувач $1'''.

Ваш IRMA — $2 .

Цим та іншими можливими IRMA можна керувати на [[Special:Preferences#mw-prefsection-irma|вкладці IRMA]] у Ваших налаштуваннях.<br />
Необов'язковий пароль облікового запису можна додати у Вашому [[Special:Preferences#mw-prefsection-personal|профілі користувача]].",
	'irmausernameprefix' => 'Користувач IRMA',
	'irmaserverlogininstructions' => '$3 запитує введення Вашого паролю до сторінки користувача $2 $1 (це Ваш IRMA URL)',
	'irmatrustinstructions' => 'Відзначте, якщо ви хочете надати доступ до даних для $1.',
	'irmaallowtrust' => 'Дозволити $1 довіряти цьому акаунту.',
	'irmanopolicy' => 'Сайт не вказав політику конфіденційності.',
	'irmapolicy' => 'Додаткову інформацію можна дізнатися в <a target="_new" href="$1">політиці конфіденційності</a>.',
	'irmaoptional' => "необов'язкове",
	'irmarequired' => "обов'язкове",
	'irmanickname' => 'Псевдонім',
	'irmafullname' => "Справжнє ім'я",
	'irmaemail' => 'Адреса ел. пошти',
	'irmalanguage' => 'Мова',
	'irmatimezone' => 'Часовий пояс',
	'irmachooselegend' => 'Вибір імені користувача та облікового запису',
	'irmachooseinstructions' => 'Кожен користувач повинен мати псевдонім;
ви можете вибрати один з представлених нижче.',
	'irmachoosenick' => 'Ваш нік ($1)',
	'irmachoosefull' => "Ваше справжнє ім'я ($1)",
	'irmachooseurl' => 'Ім`я, отримане з вашого IRMA ($1)',
	'irmachooseauto' => "Автоматично створене ім'я ($1)",
	'irmachoosemanual' => "Ім'я на ваш вибір:",
	'irmachooseexisting' => 'Існуючий обліковий запис на цій вікі',
	'irmachooseusername' => "Ім'я користувача:",
	'irmachoosepassword' => 'Пароль:',
	'irmaconvertinstructions' => 'Ця форма дозволяє вам змінити використання Вашого облікового запису на використання адреси IRMA або додати кілька адрес IRMA.',
	'irmaconvertoraddmoreids' => 'Перетворити на IRMA або додати іншу адресу IRMA',
	'irmaconvertsuccess' => 'Успішне перетворення в IRMA',
	'irmaconvertsuccesstext' => 'Ви успішно перетворили ваш IRMA в $1.',
	'irma-convert-already-your-irma-text' => "IRMA $1 уже пов'язано із Вашим обліковим записом.",
	'irma-convert-other-users-irma-text' => '$1 — чужий IRMA. Ви не можете використовувати IRMA іншого користувача.',
	'irmaalreadyloggedin' => 'Ви вже ввійшли.',
	'irmaalreadyloggedintext' => "'''Ви вже ввійшли, $1!'''

Ви можете керувати (переглядати, видаляти тощо) своїми IRMA у [[Special:Preferences#mw-prefsection-irma|вкладці IRMA]] Ваших налаштувань.",
	'irmanousername' => "Не вказано ім'я користувача.",
	'irmabadusername' => "Зазначено невірне ім'я користувача.",
	'irmaautosubmit' => 'Ця сторінка містить форму, яка повинна бути автоматично відправлена, якщо у вас включений JavaScript.
Якщо цього не сталося, спробуйте натиснути на кнопку «Continue» (Продовжити).',
	'irmaclientonlytext' => 'Ви не можете використовувати акаунти з цієї вікі, як IRMA на іншому сайті.',
	'irmaloginlabel' => 'Адреса IRMA',
	'irmalogininstructions' => "{{SITENAME}} підтримує [//irma.net/ IRMA] стандарт єдиного облікового запису для різних сайтів.
IRMA дозволяє Вам заходити на різні сайти, не вказуючи інший пароль для кожного з них.
(Див. [//http://uk.wikipedia.org/wiki/IRMA статтю про IRMA у Вікіпедії] для додаткової інформації.)
Існує багато [//irma.net/get/ IRMA провайдерів], і у Вас уже може бути прив'язаний до IRMA обліковий запис на іншому сервісі.",
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} дозволяє Вам увійти ''тільки'' використовуючи IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Якщо у Вас уже є обліковий запис на {{SITENAME}}, Ви можете [[Special:UserLogin|увійти]] зі своїм іменем користувача і паролем, як завжди.
Щоб використовувати IRMA у майбутньому, ви можете [[Special:IRMAConvert|конвертувати Ваш обліковий запис на IRMA]] після того, як увійдете в систему як звичайно.',
	'irmaupdateuserinfo' => 'Оновити мою особисту інформацію:',
	'irmadelete' => 'Видалити IRMA',
	'irmadelete-text' => 'Натиснувши на кнопку «{{int:irmadelete-button}}», Ви видалите IRMA $1 зі свого облікового запису. Ви більше не зможете входити із цим IRMA.',
	'irmadelete-button' => 'Підтвердити',
	'irmadeleteerrornopassword' => 'Ви не можете вилучити всі свої IRMA, бо ваш обліковий запис не має пароля.
У вас не буде можливості увійти в ситему без IRMA.',
	'irmadeleteerrorirmaonly' => 'Ви не можете вилучити всі свої IRMA, бо вам дозволено входити в систему тільки через IRMA.
У вас не буде можливості увійти в ситему без IRMA.',
	'irmadelete-success' => 'IRMA успішно вилучений з Вашого облікового запису.',
	'irmadelete-error' => 'Відбулася помилка при видаленні IRMA з Вашого облікового запису.',
	'irma-irmas-were-not-merged' => "IRMA не були об'єднані при об'єднанні облікових записів.",
	'prefs-irma-hide-irma' => 'Приховувати ваш IRMA на вашій сторінці користувача, якщо ви ввійшли з допомогою IRMA.',
	'prefs-irma-userinfo-update-on-login' => 'Оновлення інформації користувача IRMA',
	'prefs-irma-associated-irmas' => 'Ваші IRMA для входу на {{GRAMMAR:accusative|{{SITENAME}}}}',
	'prefs-irma-trusted-sites' => 'Надійні сайти',
	'prefs-irma-local-identity' => 'Ваш IRMA для входу на інші сайти',
	'irma-hide-irma-label' => 'Приховувати Ваше IRMA-посилання на Вашій сторінці користувача.',
	'irma-show-irma-url-on-userpage-always' => 'Ваш IRMA завжди відображається на Вашій сторінці користувача під час відвідування.',
	'irma-show-irma-url-on-userpage-never' => 'Ваш IRMA ніколи не відображається на Вашій сторінці користувача.',
	'irma-userinfo-update-on-login-label' => 'Оновлювати наступну інформацію про мене через IRMA щораз, коли я представляюся системі:',
	'irma-associated-irmas-label' => "IRMA, пов'язані з Вашим обліковим записом:",
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Дія',
	'irma-urls-registration' => 'Час реєстрації',
	'irma-urls-delete' => 'Видалити',
	'irma-add-url' => 'Додати новий IRMA до Вашого облікового запису',
	'irma-trusted-sites-label' => 'Сайти, яким Ви довіряєте, і де Ви використовуєте свій IRMA для входу:',
	'irma-trusted-sites-table-header-column-url' => 'Надійні сайти',
	'irma-trusted-sites-table-header-column-action' => 'Дія',
	'irma-trusted-sites-delete-link-action-text' => 'Вилучити',
	'irma-trusted-sites-delete-all-link-action-text' => 'Вилучити всі надійні сайти',
	'irma-trusted-sites-delete-confirmation-page-title' => 'Видалення надійного сайту',
	'irma-trusted-sites-delete-confirmation-question' => 'Натиснувши кнопку "{{int:irma-trusted-sites-delete-confirmation-button-text}}", Ви вилучите "$1" зі списку сайтів, яким довіряєте.',
	'irma-trusted-sites-delete-all-confirmation-question' => 'Натиснувши кнопку "{{int:irma-trusted-sites-delete-confirmation-button-text}}" Ви вилучите всі сайті, яким довіряєте, зі свого користувацького профілю.',
	'irma-trusted-sites-delete-confirmation-button-text' => 'Підтвердити',
	'irma-trusted-sites-delete-confirmation-success-text' => '"$1" було успішно видалено зі списку сайтів, яким Ви довіряєте.',
	'irma-trusted-sites-delete-all-confirmation-success-text' => 'Всі сайти, яким Ви раніше довіряли, були успішно видалені з Вашого профілю користувача.',
	'irma-local-identity' => 'Ваш IRMA:',
	'irma-login-or-create-account' => 'Увійти до системи або створити новий обліковий запис',
	'irma-provider-label-irma' => 'Введіть URL Вашого IRMA',
	'irma-provider-label-google' => 'Представитися, використовуючи обліковий запис Google',
	'irma-provider-label-yahoo' => 'Представитися, використовуючи обліковий запис Yahoo',
	'irma-provider-label-aol' => "Введіть ваше ім'я в AOL",
	'irma-provider-label-wmflabs' => 'Увійти в систему з допомогою облікового запису Wmflabs',
	'irma-provider-label-other-username' => "Введіть Ваше ім'я користувача $1",
	'specialpages-group-irma' => 'Службові сторіки IRMA та інформація про статус',
	'right-irma-converter-access' => 'Можливість додавати або конвертувати свій обліковий запис для використання IRMA',
	'right-irma-dashboard-access' => 'Стандартний доступ до панелі IRMA',
	'right-irma-dashboard-admin' => 'Доступ адміністратора до панелі IRMA',
	'action-irma-converter-access' => 'додавання/перетворення свого облікового запису для використання IRMA',
	'action-irma-dashboard-access' => 'доступ до панелі IRMA',
	'action-irma-dashboard-admin' => 'доступ до панелі адміністратора IRMA',
	'irma-dashboard-title' => 'Панель IRMA',
	'irma-dashboard-title-admin' => 'Панель IRMA (адміністратор)',
	'irma-dashboard-introduction' => 'Поточні налаштування розширення IRMA ([$1 довідка])',
	'irma-dashboard-number-irma-users' => 'Число користувачів без IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Число IRMA (всього)',
	'irma-dashboard-number-users-without-irma' => 'Число користувачів без IRMA',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'irmaerror' => 'تصدیق کی غلطی',
	'irmacancel' => 'منسوخ کر کے تصدیق',
	'irmafailure' => 'تصدیق ناکام',
	'irmanopolicy' => 'ویب سائٹ ایک راز داری کی پالیسی مخصوص نہیں ہے.',
	'irmaoptional' => 'اختیاری',
	'irmarequired' => 'کی ضرورت',
	'irmanickname' => 'عرفیت',
	'irmaemail' => 'ای میل پتہ',
	'irmalanguage' => 'زبان',
	'irmatimezone' => 'منطقۂ وقت',
	'irmachoosemanual' => 'آپ کی پسند کا ایک نام:',
	'irmachooseusername' => 'صارف کا نام:',
	'irmachoosepassword' => 'پاس ورڈ:',
	'irmadelete-button' => 'اس بات کی تصدیق',
	'irma-urls-action' => 'کارروائی',
	'irma-urls-registration' => 'رجسٹریشن کے وقت',
	'irma-urls-delete' => 'حذف کریں',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'irma-desc' => "Entra con [//irma.net/ IRMA] in te la wiki, e entra in tei altri siti web che dòpara IRMA co' na utensa wiki",
	'irmalogin' => 'Acesso con IRMA', # Fuzzy
	'irmaserver' => 'server IRMA',
	'irmaxrds' => 'file Yadis',
	'irmaconvert' => 'convertidor IRMA',
	'irmaerror' => 'Eròr ne la verifica',
	'irmaerrortext' => "Se gà verificà un eròr durante la verifica de l'URL IRMA.",
	'irmaconfigerror' => 'Eròr in te la configurassion IRMA',
	'irmaconfigerrortext' => 'La configurassion de la memorixassion de IRMA par sta wiki no la xe mia valida.
Par piaser consulta un [[Special:ListUsers/sysop|aministrador]].',
	'irmapermission' => 'Eròr in tei parmessi IRMA',
	'irmapermissiontext' => "A l'IRMA che ti gà fornìo no xe mia parmesso de entrar su sto server.",
	'irmacancel' => 'Verifica anulà',
	'irmacanceltext' => "La verifica de l'URL IRMA le stà scancelà.",
	'irmafailure' => 'Verifica mia riussìa',
	'irmafailuretext' => 'La verifica de l\'URL IRMA la xe \'ndà mal. El messajo de eròr el xe: "$1"',
	'irmasuccess' => 'Verifica efetuà',
	'irmasuccesstext' => "La verifica de l'URL IRMA la xe stà fata coretamente.", # Fuzzy
	'irmausernameprefix' => 'Utente IRMA',
	'irmaserverlogininstructions' => 'Scrivi qua la to password par entrar su $3 come utente $2 (pàxena utente  $1).', # Fuzzy
	'irmatrustinstructions' => 'Contròla se te vol dal bon condivìdar i dati con $1.',
	'irmaallowtrust' => 'Parméti a $1 de fidarse de sta utensa.',
	'irmanopolicy' => "El sito no'l gà indicà na polìtega relativa a la privacy.",
	'irmapolicy' => 'Contròla la <a target="_new" href="$1">polìtega relativa a la privacy</a> par savérghene piessè.',
	'irmaoptional' => 'Opzional',
	'irmarequired' => 'Obligatorio',
	'irmanickname' => 'Soranòme',
	'irmafullname' => 'Nome par intiero', # Fuzzy
	'irmaemail' => 'Indirisso de posta eletronica',
	'irmalanguage' => 'Lengoa',
	'irmatimezone' => 'Fuso orario',
	'irmachooseinstructions' => 'Tuti i utenti i gà da verghe un soranòme;
te pol tórghene uno da le opzioni seguenti.',
	'irmachoosefull' => 'El to nome par intiero ($1)', # Fuzzy
	'irmachooseurl' => 'Un nome sielto dal to IRMA ($1)',
	'irmachooseauto' => 'Un nome generà automaticamente ($1)',
	'irmachoosemanual' => 'Un nome a sielta tua:',
	'irmachooseexisting' => 'Na utensa esistente su sta wiki:', # Fuzzy
	'irmachoosepassword' => 'Password:',
	'irmaconvertinstructions' => 'Sto modulo el te parmete de canbiar la to utensa par doparar un URL IRMA o zontar altri URL IRMA.',
	'irmaconvertsuccess' => 'Convertìo con successo a IRMA',
	'irmaconvertsuccesstext' => 'El to IRMA el xe stà convertìo a $1.',
	'irma-convert-already-your-irma-text' => 'Sto chì el xe xà el to IRMA.', # Fuzzy
	'irma-convert-other-users-irma-text' => "Sto chì el xe l'IRMA de calchidun altro.", # Fuzzy
	'irmaalreadyloggedin' => "'''Te sì xà entrà, $1!'''

Se ti vol doparar IRMA par entrar in futuro, te pol [[Special:IRMAConvert|convertir la to utensa par doparar IRMA]].", # Fuzzy
	'irmanousername' => 'Nissun nome utente indicà.',
	'irmabadusername' => "El nome utente indicà no'l xe mia valido.",
	'irmaautosubmit' => 'Sta pàxena la include un modulo che\'l dovarìa èssar invià automaticamente se ti gà JavaScript ativà.
Se no, próa a strucar el boton "Continue" (Continua).',
	'irmaclientonlytext' => 'No te podi doparar le utense de sta wiki come IRMA su de un altro sito.',
	'irmaloginlabel' => 'URL IRMA',
	'irmalogininstructions' => "{{SITENAME}} el suporta el standard [//irma.net/ IRMA] par el login unico sui siti web.
IRMA el te permete de registrarte in molti siti web sensa doparar na password difarente par ognuno.
(Lèzi la [//en.wikipedia.org/wiki/IRMA voce de Wikipedia su l'IRMA] par savérghene piassè.)

Se te ghè zà un account su {{SITENAME}}, te podi far el [[Special:UserLogin|login]] col to nome utente e la to password come al solito.
Par doparar IRMA in futuro, te podi [[Special:IRMAConvert|convertir el to account a IRMA]] dopo che te ghè fato normalmente el login.

Ghe xe molti [//irma.net/get/ Provider IRMA], e te podaressi verghe zà un account abilità a l'IRMA su un altro servissio.", # Fuzzy
	'irmaupdateuserinfo' => 'Ajorna le me informassion personài', # Fuzzy
	'irmadelete' => 'Scancela IRMA',
	'irmadelete-button' => 'Va ben',
	'prefs-irma-hide-irma' => 'Scondi el to IRMA su la to pàxena utente, se te fè el login con IRMA.',
	'irma-hide-irma-label' => 'Scondi el to IRMA su la to pàxena utente, se te fè el login con IRMA.', # Fuzzy
	'irma-userinfo-update-on-login-label' => "Ajorna le seguenti informassion da l'utensa de IRMA ogni olta che me conéto:", # Fuzzy
	'irma-urls-action' => 'Azion',
	'irma-urls-delete' => 'Scancela',
	'irma-add-url' => 'Zonta un IRMA novo', # Fuzzy
	'irma-login-or-create-account' => 'Entra o crèa na utensa nova', # Fuzzy
	'irma-provider-label-irma' => "Inserissi l'URL del to IRMA",
	'irma-provider-label-google' => 'Entra doparando la to utensa Google',
	'irma-provider-label-yahoo' => 'Entra doparando la to utensa Yahoo',
	'irma-provider-label-aol' => 'Inserissi el to screenname AOL',
	'irma-provider-label-other-username' => 'Inserissi el to nome utente $1',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'irmaxrds' => 'Yadis-fail',
	'irmaerror' => 'Verifikacijan petuz',
	'irmaoptional' => 'Opcionaline',
	'irmarequired' => 'Pidab',
	'irmanickname' => 'Nikneim',
	'irmaemail' => 'E-počtan adres',
	'irmalanguage' => "Kel'",
	'irmatimezone' => 'Aigzon',
	'irmachoosepassword' => 'Peitsana:',
	'irmaupdateuserinfo' => 'Udištada minun personaline informacii', # Fuzzy
	'irmadelete-button' => 'Vahvištoitta',
	'irma-urls-action' => 'Tegend',
	'irma-urls-delete' => 'Heitta poiš',
);

/** Vietnamese (Tiếng Việt)
 * @author Baonguyen21022003
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'irma-desc' => 'Đăng nhập vào wiki dùng [//irma.net/ IRMA] và đăng nhập vào các website nhận IRMA dùng tài khoản wiki',
	'irmalogin' => 'Đăng nhập / mở tài khoản dùng IRMA',
	'irmaserver' => 'Dịch vụ IRMA',
	'irmaxrds' => 'Tập tin Yadis',
	'irmaconvert' => 'Chuyển đổi IRMA',
	'irmaerror' => 'Lỗi thẩm tra',
	'irmaerrortext' => 'Có lỗi khi thẩm tra địa chỉ IRMA.',
	'irmaconfigerror' => 'Lỗi thiết lập IRMA',
	'irmaconfigerrortext' => 'Cấu hình nơi lưu trữ IRMA cho wiki này không hợp lệ.
Xin hãy liên lạc với [[Special:ListUsers/sysop|bảo quản viên]].',
	'irmapermission' => 'Lỗi quyền IRMA',
	'irmapermissiontext' => 'Địa chỉ IRMA của bạn không được phép đăng nhập vào dịch vụ này.',
	'irmacancel' => 'Đã hủy bỏ thẩm tra',
	'irmacanceltext' => 'Đã hủy bỏ việc thẩm tra địa chỉ IRMA.',
	'irmafailure' => 'Không thẩm tra được',
	'irmafailuretext' => 'Không thể thẩm tra địa chỉ IRMA. Lỗi: “$1”',
	'irmasuccess' => 'Đã thẩm tra thành công',
	'irmasuccesstext' => "'''Đã xác minh và đăng nhập như $1'''.

Địa chỉ IRMA của bạn là <code>&lt;$2></code>.

Quản lý IRMA này và các IRMA sau trong [[Special:Preferences#mw-prefsection-irma|thẻ IRMA]] của trang tùy chọn.<br />
Có thể đặt một mật khẩu tùy chọn cho tài khoản trong [[Special:Preferences#mw-prefsection-personal|thẻ Thông tin cá nhân]].",
	'irmausernameprefix' => 'Thành viên IRMA',
	'irmaserverlogininstructions' => '$2, $3 yêu cầu bạn nhập mật khẩu cho trang cá nhân của bạn, $1, tức là địa chỉ IRMA của bạn.',
	'irmatrustinstructions' => 'Hãy kiểm tra hộp này nếu bạn muốn cho $1 biết thông tin cá nhân của bạn.',
	'irmaallowtrust' => 'Để $1 tin cậy vào tài khoản này.',
	'irmanopolicy' => 'Website chưa xuất bản quy định quyền riêng tư.',
	'irmapolicy' => 'Hãy đọc <a target="_new" href="$1">quy định quyền riêng tư</a> để biết thêm chi tiết.',
	'irmaoptional' => 'Tùy ý',
	'irmarequired' => 'Bắt buộc',
	'irmanickname' => 'Tên hiệu',
	'irmafullname' => 'Tên đầy đủ',
	'irmaemail' => 'Địa chỉ thư điện tử',
	'irmalanguage' => 'Ngôn ngữ',
	'irmatimezone' => 'Múi giờ',
	'irmachooselegend' => 'Lựa chọn tên người dùng và tài khoản',
	'irmachooseinstructions' => 'Mọi người dùng cần có tên hiệu; bạn có thể chọn tên hiệu ở dưới.',
	'irmachoosenick' => 'Tên hiệu của bạn ($1)',
	'irmachoosefull' => 'Tên đầy đủ của bạn ($1)',
	'irmachooseurl' => 'Tên bắt nguồn từ IRMA của bạn ($1)',
	'irmachooseauto' => 'Tên tự động ($1)',
	'irmachoosemanual' => 'Tên khác:',
	'irmachooseexisting' => 'Một tài khoản hiện có trên wiki này',
	'irmachooseusername' => 'tên người dùng:',
	'irmachoosepassword' => 'Mật khẩu:',
	'irmaconvertinstructions' => 'Mẫu này cho phép bạn thay đổi tài khoản người dùng của bạn để sử dụng một địa chỉ URL IRMA hay thêm địa chỉ IRMA.',
	'irmaconvertoraddmoreids' => 'Chuyển đổi IRMA hay thêm địa chỉ IRMA',
	'irmaconvertsuccess' => 'Đã chuyển đổi sang IRMA thành công',
	'irmaconvertsuccesstext' => 'Bạn đã chuyển đổi IRMA của bạn sang $1 thành công.',
	'irma-convert-already-your-irma-text' => 'IRMA $1 đang được liên kết với tài khoản của bạn và không cần được thêm vào nó lần nữa.', # Fuzzy
	'irma-convert-other-users-irma-text' => '$1 là IRMA của một người khác. Bạn không thể sử dụng IRMA của người dùng khác.',
	'irmaalreadyloggedin' => 'Bạn đã đăng nhập rồi.',
	'irmaalreadyloggedintext' => "'''Bạn đã đăng nhập rồi, $1!'''

Quản lý (xem, xóa, và thêm) các IRMA trong [[Special:Preferences#mw-prefsection-irma|thẻ IRMA]] tại trang tùy chọn.",
	'irmanousername' => 'Chưa chỉ định tên người dùng.',
	'irmabadusername' => 'Tên người dùng không hợp lệ.',
	'irmaautosubmit' => 'Trang này có một mẫu sẽ tự động đăng lên nếu bạn kích hoạt JavaScript.
Nếu không, hãy thử nút "Continue" (Tiếp tục).',
	'irmaclientonlytext' => 'Bạn không thể sử dụng tài khoản tại wiki này như IRMA tại trang khác.',
	'irmaloginlabel' => 'Địa chỉ IRMA',
	'irmalogininstructions' => '{{SITENAME}} hỗ trợ tiêu chuẩn [//irma.net/ IRMA] để đăng nhập một lần giữa các trang Web.
IRMA cho phép bạn đăng nhập vào nhiều trang Web khác nhau mà không phải sử dụng mật khẩu khác nhau tại mỗi trang.
(Xem thêm chi tiết tại [//vi.wikipedia.org/wiki/IRMA bài viết về IRMA của Wikipedia].)
Nhiều [//irma.net/get/ dịch vụ cung cấp IRMA], và có thể bạn đã có tài khoản tại một dịch vụ kích hoạt IRMA.',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''chỉ'' cho phép đăng nhập dùng IRMA.",
	'irmalogininstructions-passwordloginallowed' => 'Nếu bạn đã có một tài khoản tại {{SITENAME}}, bạn có thể [[Special:UserLogin|đăng nhập]] bằng tên người dùng và mật khẩu của bạn như thông thường.
Để dùng IRMA vào lần sau, bạn có thể [[Special:IRMAConvert|chuyển đổi tài khoản của bạn sang IRMA]] sau khi đã đăng nhập bình thường.',
	'irmaupdateuserinfo' => 'Cập nhật thông tin cá nhân của tôi:',
	'irmadelete' => 'Xóa IRMA',
	'irmadelete-text' => 'Khi bấm nút “{{int:irmadelete-button}}”, bạn sẽ dời IRMA $1 khỏi tài khoản của bạn.
Bạn sẽ không đăng nhập được dùng IRMA này.',
	'irmadelete-button' => 'Xác nhận',
	'irmadeleteerrornopassword' => 'Bạn không có thể xóa tất cả các IRMA của bạn vì tài khoản thiếu mật khẩu. Nếu không có IRMA thì bạn không thể đăng nhập được.',
	'irmadeleteerrorirmaonly' => 'Bạn không có thể xóa tất cả các IRMA của bạn vì bạn chỉ được phép đăng nhập dùng IRMA. Nếu không có IRMA thì bạn không thể đăng nhập được.',
	'irmadelete-success' => 'Đã dời IRMA thành công khỏi tài khoản của bạn.',
	'irmadelete-error' => 'Đã gặp lỗi khi dời IRMA khỏi tài khoản của bạn.',
	'irma-irmas-were-not-merged' => 'Các IRMA không được hợp nhất lúc khi hợp nhất các tài khoản người dùng.',
	'prefs-irma-hide-irma' => 'Ẩn địa chỉ IRMA của bạn khỏi trang cá nhân, nếu bạn đăng nhập bằng IRMA.',
	'irma-hide-irma-label' => 'Ẩn địa chỉ IRMA của bạn khỏi trang cá nhân, nếu bạn đăng nhập bằng IRMA.',
	'irma-userinfo-update-on-login-label' => 'Cập nhật thông tin sau từ persona IRMA mỗi khi tôi đăng nhập:', # Fuzzy
	'irma-associated-irmas-label' => 'Các IRMA được gắn vào tài khoản của bạn:',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => 'Tác vụ',
	'irma-urls-registration' => 'Lúc mở tài khoản',
	'irma-urls-delete' => 'Xóa',
	'irma-add-url' => 'Thêm IRMA mới', # Fuzzy
	'irma-login-or-create-account' => 'Đăng nhập hay mở tài khoản mới',
	'irma-provider-label-irma' => 'Ghi vào URL IRMA của bạn',
	'irma-provider-label-google' => 'Đăng nhập dùng tài khoản Google',
	'irma-provider-label-yahoo' => 'Đăng nhập dùng tài khoản Yahoo!',
	'irma-provider-label-aol' => 'Ghi vào tên màn hình AOL',
	'irma-provider-label-other-username' => 'Nhập tên đăng nhập $1',
	'specialpages-group-irma' => 'Các trang quản lý và trạng thái IRMA',
	'right-irma-converter-access' => 'Thêm hoặc chuyển đổi tài khoản để sử dụng danh tính IRMA',
	'right-irma-dashboard-access' => 'Truy cập chuẩn vào bảng điều khiển IRMA',
	'right-irma-dashboard-admin' => 'Truy cập như bảo quản viên vào bảng điều khiển IRMA',
	'irma-dashboard-title' => 'Bảng điều khiển IRMA',
	'irma-dashboard-title-admin' => 'Bảng điều khiển IRMA (bảo quản viên)',
	'irma-dashboard-introduction' => 'Cấu hình hiện hành của phần mở rộng IRMA ([$1 trợ giúp])',
	'irma-dashboard-number-irma-users' => 'Số người dùng qua IRMA',
	'irma-dashboard-number-irmas-in-database' => 'Tổng số IRMA',
	'irma-dashboard-number-users-without-irma' => 'Số người dùng không phải qua IRMA',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'irmaxrds' => 'Ragiv: Yadis',
	'irmaerror' => 'Kontrolamapöl',
	'irmaoptional' => 'No peflagon',
	'irmarequired' => 'Peflagon',
	'irmanickname' => 'Näinem',
	'irmafullname' => 'Nem lölik', # Fuzzy
	'irmaemail' => 'Ladet leäktronik',
	'irmalanguage' => 'Pük',
	'irmatimezone' => 'Düpakoun',
	'irmachooseinstructions' => 'Gebans valik neodons näinemi;
kanol välön bali sökölas.',
	'irmachoosefull' => 'Nem lölik ola ($1)', # Fuzzy
	'irmachooseauto' => 'Nem itjäfidiko pejaföl ($1)',
	'irmachoosemanual' => 'Nem fa ol pevälöl:',
	'irmachooseexisting' => 'Kal in vük at dabinöl',
	'irmachooseusername' => 'Gebananem:',
	'irmachoosepassword' => 'Letavöd:',
	'irmanousername' => 'Gebananem nonik pegivon.',
	'irmabadusername' => 'Gebananem no lonöföl pegivon.',
	'irma-urls-delete' => 'Moükön',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'irmaemail' => 'בליצפּאָסט אַדרעס:',
	'irmalanguage' => 'שפראך',
	'irmatimezone' => 'צײַט זאנע',
	'irmachooseusername' => 'באַניצער נאָמען:',
	'irmachoosepassword' => 'פאַסווארט:',
	'irma-urls-action' => 'אַקציע',
	'irma-urls-delete' => 'אויסמעקן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Gaoxuewei
 * @author Kuailong
 * @author Liangent
 * @author Onecountry
 * @author Qiyue2001
 * @author Wrightbus
 * @author Xiaomingyan
 * @author Yanmiao liu
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'irma-desc' => '让用户可使用一个[//irma.net/ IRMA]来登录到这个wiki。如果启用相关设置，还可以使用他们在此wiki上用户帐号URL作为IRMA来登录到其他接受IRMA的网站。',
	'irmalogin' => '使用IRMA登录或创建账号',
	'irmaserver' => 'IRMA服务器',
	'irma-identifier-page-text-no-such-local-irma' => '这是一个无效的本地IRMA标识符。',
	'irmaxrds' => 'Yadis文件',
	'irmaconvert' => 'IRMA转换',
	'irmaerror' => '验证错误',
	'irmaerrortext' => '在验证IRMA地址时出现了一个错误。',
	'irmaconfigerror' => 'IRMA配置出错',
	'irmaconfigerrortext' => 'IRMA存储配置对此wiki是无效的。
请联系[[Special:ListUsers/sysop|管理员]]。',
	'irmapermission' => 'IRMA权限错误',
	'irmapermissiontext' => '您提供的IRMA不允许在本服务器上登录。',
	'irmacancel' => '验证取消',
	'irmacanceltext' => 'IRMA地址验证被取消。',
	'irmafailure' => '验证失败',
	'irmafailuretext' => 'IRMA地址验证失败。错误信息："$1"',
	'irmasuccess' => '验证成功',
	'irmasuccesstext' => "'''成功验证并且登录为用户 $1'''。

您的IRMA是 $2 。

这个和可能将来的IRMA可以在您的设置里的[[Special:Preferences#mw-prefsection-irma|IRMA选项卡]]中管理。<br />
可选的账户密码可以在您的[[Special:Preferences#mw-prefsection-personal|用户设置]]里添加。",
	'irmausernameprefix' => 'IRMA用户',
	'irmaserverlogininstructions' => '$3请求您为用户$2的用户页面$1输入密码（这是您的IRMA URL）',
	'irmatrustinstructions' => '请确认您是否愿与$1分享数据。',
	'irmaallowtrust' => '允许$1信任这个用户的账户。',
	'irmanopolicy' => '站点没有提供隐私政策。',
	'irmapolicy' => '更多信息请见<a target="_new" href="$1">隐私权政策</a>。',
	'irmaoptional' => '可选',
	'irmarequired' => '必选',
	'irmanickname' => '昵称',
	'irmafullname' => '真实姓名',
	'irmaemail' => '电邮地址',
	'irmalanguage' => '语言',
	'irmatimezone' => '时区',
	'irmachooselegend' => '用户名和账户选择',
	'irmachooseinstructions' => '所有的用户都需要提供昵称；
您可以从下面任选一个。',
	'irmachoosenick' => '你的昵称 ($1)',
	'irmachoosefull' => '您的真实姓名（$1）',
	'irmachooseurl' => '从你的IRMA获取的名称（$1）',
	'irmachooseauto' => '自动生成的名称（$1）',
	'irmachoosemanual' => '您选择的名称：',
	'irmachooseexisting' => '本维基已经存在的帐户：',
	'irmachooseusername' => '用户名：',
	'irmachoosepassword' => '密码：',
	'irmaconvertinstructions' => '本表单可以修改您的用户账号，让该账户得以使用IRMA地址或者添加更多IRMA地址。',
	'irmaconvertoraddmoreids' => '转换到IRMA或添加另一个IRMA地址',
	'irmaconvertsuccess' => '成功转换为IRMA',
	'irmaconvertsuccesstext' => '您已经成功的将您的IRMA转化为$1。',
	'irma-convert-already-your-irma-text' => 'IRMA $1 已关联到您的帐户，将不会再次提醒您添加。', # Fuzzy
	'irma-convert-other-users-irma-text' => '$1是别人的IRMA。您不能使用他人的IRMA。',
	'irmaalreadyloggedin' => '您已经登录了。',
	'irmaalreadyloggedintext' => "'''您已经登录，$1！'''

您可以在您的设置的[[Special:Preferences#mw-prefsection-irma|IRMA 选项卡]]中管理（查看、删除和进一步添加）IRMA。",
	'irmanousername' => '没有指定用户名。',
	'irmabadusername' => '指定的用户名是错误的。',
	'irmaautosubmit' => '本页包含的表单在启用JavaScript的情况下可以自动提交。
如果没有自动提交，请按 "Continue" （继续）按钮。',
	'irmaclientonlytext' => '你不能在其他站点上使用这个wiki的帐号作为IRMA。',
	'irmaloginlabel' => 'IRMA地址',
	'irmalogininstructions' => '{{SITENAME}} 支持用于网站间单点登录的 [//irma.net/ IRMA] 标准。
IRMA 可以让您不必使用不同的密码登录不同的站点。
（详情请参见 [//en.wikipedia.org/wiki/IRMA 维基百科关于 IRMA 的条目]。）
[//irma.net/get/ IRMA 的提供者]有很多，您可能在使用其他服务时已经建立了一个可以使用 IRMA 的账户了。',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''仅''允许用 IRMA 登录。",
	'irmalogininstructions-passwordloginallowed' => '如果您在 {{SITENAME}} 上已经拥有了账号，可以以通常的方式用用户名和密码[[Special:UserLogin|登录]]。
将来使用 IRMA，您可以在正常登录后[[Special:IRMAConvert|转换账号为 IRMA]]。',
	'irmaupdateuserinfo' => '更新我的个人信息',
	'irmadelete' => '删除IRMA',
	'irmadelete-text' => '按下"{{int:irmadelete-button}}"按钮后，IRMA $1将从你的账户中删除。你以后将无法再使用这个IRMA登录。',
	'irmadelete-button' => '确认',
	'irmadeleteerrornopassword' => '不得删除全部IRMA，否则您的账户将无密码保护。
没有IRMA您将无法登录。',
	'irmadeleteerrorirmaonly' => '不得删除全部IRMA，因为这是你目前登录站点的唯一方法。
没有IRMA您将无法登录。',
	'irmadelete-success' => 'IRMA已被成功删除。',
	'irmadelete-error' => '在移除你的IRMA的时候出现了一个错误。',
	'irma-irmas-were-not-merged' => '合并用户帐号时，IRMA 没有被合并。',
	'prefs-irma-hide-irma' => 'IRMA登录时，在用户页隐藏IRMA。',
	'prefs-irma-trusted-sites' => '受信任的站点',
	'irma-hide-irma-label' => '如果您用IRMA登录时，在用户页隐藏您的IRMA。',
	'irma-userinfo-update-on-login-label' => '每次登录时，都从IRMA的用户信息中更新以下信息。', # Fuzzy
	'irma-associated-irmas-label' => '和你的账号关联的IRMA：',
	'irma-urls-url' => 'URL',
	'irma-urls-action' => '动作',
	'irma-urls-registration' => '注册时间',
	'irma-urls-delete' => '删除',
	'irma-add-url' => '向您的账户添加一个新的IRMA',
	'irma-trusted-sites-delete-link-action-text' => '删除',
	'irma-trusted-sites-delete-all-link-action-text' => '删除所有受信任的站点',
	'irma-trusted-sites-delete-confirmation-button-text' => '确认',
	'irma-login-or-create-account' => '登录或创建新账号',
	'irma-provider-label-irma' => '输入你的IRMA URL',
	'irma-provider-label-google' => '使用你的Google账号登录',
	'irma-provider-label-yahoo' => '使用你的Yahoo账号登录',
	'irma-provider-label-aol' => '输入你的AOL屏幕名称',
	'irma-provider-label-other-username' => '输入你的$1用户名',
	'specialpages-group-irma' => 'IRMA 服务页和状态信息',
	'right-irma-converter-access' => '可以添加或转换他们的帐户为使用 IRMA 验证',
	'right-irma-dashboard-access' => '对 IRMA 仪表板的标准访问',
	'right-irma-dashboard-admin' => '对 IRMA 仪表板的管理员访问',
	'action-irma-converter-access' => '添加或转换您的帐户为使用IRMA验证',
	'action-irma-dashboard-access' => '访问IRMA面板',
	'action-irma-dashboard-admin' => '访问IRMA管理员面板',
	'irma-dashboard-title' => 'IRMA 仪表板',
	'irma-dashboard-title-admin' => 'IRMA 仪表板（管理员）',
	'irma-dashboard-introduction' => '当前 IRMA 的扩展设置（[$1 help|$1 帮助]）',
	'irma-dashboard-number-irma-users' => '拥有 IRMA 的用户数',
	'irma-dashboard-number-irmas-in-database' => 'IRMA 的数量（总数）',
	'irma-dashboard-number-users-without-irma' => '没有 IRMA 的用户数',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Frankou
 * @author Gzdavidwong
 * @author Horacewai2
 * @author Liangent
 * @author Mark85296341
 * @author Shangkuanlc
 * @author Simon Shek
 * @author Waihorace
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'irma-desc' => '使用者請以 [//irma.net/ IRMA] 登入此 wiki網站，以及使用 wiki 用戶帳號登入到其他接受 IRMA 的網站',
	'irmalogin' => '使用IRMA登錄或創建賬號',
	'irmaserver' => 'IRMA 伺服器',
	'irmaxrds' => 'Yadis 檔案',
	'irmaconvert' => 'IRMA 轉換器',
	'irmaerror' => '驗證錯誤',
	'irmaerrortext' => '在驗證 IRMA 地址時出現了一個錯誤。',
	'irmaconfigerror' => 'IRMA 配置出錯',
	'irmaconfigerrortext' => '這個 wiki 的 IRMA 儲存設定是無效的。
請通知[[Special:ListUsers/sysop|管理員]]。',
	'irmapermission' => 'IRMA 的權限錯誤',
	'irmapermissiontext' => '您提供的 IRMA 不允許在本服務器上登入。',
	'irmacancel' => '驗證已取消',
	'irmacanceltext' => 'IRMA 地址驗證被取消。',
	'irmafailure' => '驗證失敗',
	'irmafailuretext' => 'IRMA 地址驗證失敗。錯誤資訊：「$1」',
	'irmasuccess' => '驗證成功',
	'irmasuccesstext' => "'''成功驗證並且登錄為用戶 $1'''。

您的IRMA是 $2 。

這個和可能將來的IRMA可以在您的設置里的[[Special:Preferences#mw-prefsection-irma|IRMA選項卡]]中管理。<br />
可選的賬戶密碼可以在您的[[Special:Preferences#mw-prefsection-personal|用戶設置]]里添加。",
	'irmausernameprefix' => 'IRMA 使用者',
	'irmaserverlogininstructions' => '$3請求您為用戶$2的用戶頁面$1輸入密碼（這是您的IRMA URL）',
	'irmatrustinstructions' => '請確認您是否願與 $1 共用資料。',
	'irmaallowtrust' => '允許 $1 信任這個用使用者的帳號。',
	'irmanopolicy' => '站點沒有提供隱私權政策。',
	'irmapolicy' => '如要取得更多資訊，請參見<a target="_new" href="$1">隱私權政策</a>。',
	'irmaoptional' => '可選',
	'irmarequired' => '必選',
	'irmanickname' => '暱稱',
	'irmafullname' => '全名', # Fuzzy
	'irmaemail' => '電郵地址',
	'irmalanguage' => '語言',
	'irmatimezone' => '時區',
	'irmachooselegend' => '用戶名和賬戶選擇',
	'irmachooseinstructions' => '所有的用戶都需要提供暱稱；
您可以從下面任選一個。',
	'irmachoosenick' => '你的暱稱（$1）',
	'irmachoosefull' => '您的全名（$1）', # Fuzzy
	'irmachooseurl' => '從您的 IRMA 得到的名稱（$1）',
	'irmachooseauto' => '自動生成的名稱（$1）',
	'irmachoosemanual' => '您選擇的名稱：',
	'irmachooseexisting' => '本維基已經存在的帳號：',
	'irmachooseusername' => '用戶名：',
	'irmachoosepassword' => '密碼：',
	'irmaconvertinstructions' => '本表單可以將您的用戶帳號修改為 IRMA 地址。',
	'irmaconvertoraddmoreids' => '轉換到 IRMA 或加入另一個 IRMA URL',
	'irmaconvertsuccess' => '成功轉換為 IRMA',
	'irmaconvertsuccesstext' => '您已經成功的將您的 IRMA 轉化為 $1。',
	'irma-convert-already-your-irma-text' => '這已是您的 IRMA 了。', # Fuzzy
	'irma-convert-other-users-irma-text' => '這是別人的 IRMA。', # Fuzzy
	'irmaalreadyloggedin' => '您已經登入。',
	'irmaalreadyloggedintext' => "'''您已經登錄，$1！'''

您可以在您的設置的[[Special:Preferences#mw-prefsection-irma|IRMA 選項卡]]中管理（查看、刪除和進一步添加）IRMA。",
	'irmanousername' => '沒有指定用戶名。',
	'irmabadusername' => '指定的用戶名是錯誤的。',
	'irmaautosubmit' => '本頁包含的表單在啟用 JavaScript 的情況下可以自動提交。
如果沒有自動提交，請按「Continue」（繼續）按鈕。',
	'irmaclientonlytext' => '你不能在其他站點上使用這個 wiki 的帳號作為 IRMA。',
	'irmaloginlabel' => 'IRMA 網址',
	'irmalogininstructions' => '{{SITENAME}} 支持用於網站間單點登錄的 [//irma.net/ IRMA] 標準。
IRMA 可以讓您不必使用不同的密碼登錄不同的站點。
（詳情請參見 [//en.wikipedia.org/wiki/IRMA 維基百科關於 IRMA 的條目]。）
[//irma.net/get/ IRMA 的提供者]有很多，您可能在使用其他服務時已經建立了一個可以使用 IRMA 的賬戶了。',
	'irmalogininstructions-irmaloginonly' => "{{SITENAME}} ''僅''允許用 IRMA 登錄。",
	'irmalogininstructions-passwordloginallowed' => '如果您在 {{SITENAME}} 上已經擁有了賬號，可以以通常的方式用用戶名和密碼[[Special:UserLogin|登錄]]。
將來使用 IRMA，您可以在正常登錄後[[Special:IRMAConvert|轉換賬號為 IRMA]]。',
	'irmaupdateuserinfo' => '更新我的個人資料',
	'irmadelete' => '刪除 IRMA',
	'irmadelete-text' => '當你按下「{{int:irmadelete-button}}」按鈕，你會將 IRMA $1 從你的帳戶中移除。你以後都不可以再使用這個 IRMA 登入。',
	'irmadelete-button' => '確認',
	'irmadeleteerrornopassword' => '不得刪除全部 IRMA，否則您的帳戶將無密碼保護。
沒有 IRMA 您將無法登入。',
	'irmadeleteerrorirmaonly' => '不得刪除全部 IRMA，因為這是你目前登入站點的唯一方法。
沒有 IRMA 您將無法登入。',
	'irmadelete-success' => 'IRMA 已被成功刪除。',
	'irmadelete-error' => '在移除你的 IRMA 的時候出現了一個錯誤。',
	'irma-irmas-were-not-merged' => '合并用戶帳號時，IRMA 沒有被合并。',
	'prefs-irma-hide-irma' => '如果使用 IRMA 登入，您可以在您的用戶頁隱藏您的 IRMA。',
	'irma-hide-irma-label' => '如果使用 IRMA 登入，您可以在您的用戶頁隱藏您的 IRMA。', # Fuzzy
	'irma-userinfo-update-on-login-label' => '每次登入時，都從 IRMA 的使用者資料中更新以下資料。', # Fuzzy
	'irma-associated-irmas-label' => '和你的帳號關聯的 IRMA：',
	'irma-urls-action' => '動作',
	'irma-urls-registration' => '註冊時間',
	'irma-urls-delete' => '刪除',
	'irma-add-url' => '加入一個新的 IRMA', # Fuzzy
	'irma-login-or-create-account' => '登錄或創建新賬號',
	'irma-provider-label-irma' => '輸入你的 IRMA URL',
	'irma-provider-label-google' => '以您的 Google 帳戶登入',
	'irma-provider-label-yahoo' => '以您的 Yahoo 帳戶登入',
	'irma-provider-label-aol' => '輸入你的 AOL 螢幕名稱',
	'irma-provider-label-other-username' => '輸入你的 $1 用戶名',
	'specialpages-group-irma' => 'IRMA 服務頁和狀態信息',
	'right-irma-dashboard-access' => '對 IRMA 儀錶板的標準訪問',
	'right-irma-dashboard-admin' => '對 IRMA 儀錶板的管理員訪問',
	'irma-dashboard-title' => 'IRMA 儀錶板',
	'irma-dashboard-title-admin' => 'IRMA 儀錶板（管理員）',
	'irma-dashboard-introduction' => '當前 IRMA 的擴展設置（[$1 help|$1 幫助]）',
	'irma-dashboard-number-irma-users' => '擁有 IRMA 的用戶數',
	'irma-dashboard-number-irmas-in-database' => 'IRMA 的數量（總數）',
	'irma-dashboard-number-users-without-irma' => '沒有 IRMA 的用戶數',
);
