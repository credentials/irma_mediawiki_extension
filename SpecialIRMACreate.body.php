<?php
/**
 * SpecialIRMACreate.body.php -- IRMA credential issuance
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


class SpecialIRMACreate extends SpecialIRMA {

  function __construct() {
    parent::__construct( 'IRMACreate' );
  }

  /**
   * Entry point
   *
   * @param $par String or null
   */
  function execute( $par ) {
    $this->setHeaders();

    // Check whether the user is logged in already
    global $wgUser;
    if ( $wgUser->getID() != 0 ) {
      $this->alreadyLoggedIn();
      return;
    }

    $this->outputHeader();

    if ( $par != null && !is_empty($par)) {
      $this->finish($par);
    } else {
      $this->credentialIssuance();
    }
  }

  function htmlRegisterButton() {
    global $wgScriptPath;

    return Html::rawElement( 'img',
      array (
        'id' => 'register',
        'title' => wfMessage('irma-register-credential')->text(),
        'src' => "$wgScriptPath/extensions/IRMA/skin/img/IRMAWiki_register.png"
      )
    );
  }

  function credentialIssuance() {
    global $wgOut;

    $wgOut->addModules('ext.irma.register');
    $wgOut->addHTML($this->htmlRegisterButton());
    $wgOut->addHTML(SpecialIRMA::htmlSmartCardJSApplet());
    $wgOut->addWikiMsg( 'irmaregisterinstructions' );
  }

  /**
   * Displays an error message
   */
  function showErrorPage( $msg, $params = array() ) {
    global $wgUser, $wgOut;
    $wgOut->showErrorPage( 'irmaerror', $msg, $params );
  }

}
