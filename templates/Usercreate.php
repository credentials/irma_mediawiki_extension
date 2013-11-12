<?php
/**
 * Html form for account creation.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Templates
 */

/**
 * @defgroup Templates Templates
 */

if( !defined( 'MEDIAWIKI' ) ) die( -1 );

/**
 * @ingroup Templates
 */
class IRMAUsercreateTemplate extends QuickTemplate {
  function addInputItem( $name, $value, $type, $msg, $helptext = false ) {
    $this->data['extraInput'][] = array(
      'name' => $name,
      'value' => $value,
      'type' => $type,
      'msg' => $msg,
      'helptext' => $helptext,
    );
  }

  function execute() {
    if( $this->data['message'] ) {
?>
  <div class="<?php $this->text('messagetype') ?>box">
    <?php if ( $this->data['messagetype'] == 'error' ) { ?>
      <strong><?php $this->msg( 'loginerror' )?></strong><br />
    <?php } ?>
    <?php $this->html('message') ?>
  </div>
  <div class="visualClear"></div>
<?php } ?>

<div id="signupstart"><?php $this->msgWiki( 'signupstart' ); ?></div>
<div id="userlogin">

<form name="userlogin2" id="userlogin2" method="post" action="<?php $this->text('action') ?>">
  <h2><?php $this->msg('createaccount') ?></h2>
  <p id="userloginlink"><?php $this->html('link') ?></p>
  <?php $this->html('header'); /* pre-table point for form plugins... */ ?>
  <?php if( $this->haveData( 'languages' ) ) { ?><div id="languagelinks"><p><?php $this->html( 'languages' ); ?></p></div><?php } ?>
  <table>
    <tr>
      <td class="mw-label"><label for='wpName2'><?php $this->msg('yourname') ?></label></td>
      <td class="mw-input">
        <?php
      echo Html::input( 'wpName', $this->data['name'], 'text', array(
        'class' => 'loginText',
        'id' => 'wpName2',
        'tabindex' => '1',
        'size' => '20',
        'required',
        'autofocus'
      ) ); ?>
      </td>
    </tr>
      <?php if( $this->data['userealname'] ) { ?>
        <tr>
          <td class="mw-label"><label for='wpRealName'><?php $this->msg('yourrealname') ?></label></td>
          <td class="mw-input">
            <input type='text' class='loginText' name="wpRealName" id="wpRealName"
              tabindex="7"
              value="<?php $this->text('realname') ?>" size='20' />
            <div class="prefsectiontip">
              <?php $this->msgWiki('prefs-help-realname'); ?>
            </div>
          </td>
      <?php } ?>
    </tr>
    <tr>
      <td></td>
      <td class="mw-submit">
        <input type='submit' name="wpCreateaccount" id="wpCreateaccount"
          tabindex="<?php echo $tabIndex++; ?>"
          value="<?php $this->msg('createaccount') ?>" />
      </td>
    </tr>
  </table>
<?php if( $this->haveData( 'uselang' ) ) { ?><input type="hidden" name="uselang" value="<?php $this->text( 'uselang' ); ?>" /><?php } ?>
<?php if( $this->haveData( 'token' ) ) { ?><input type="hidden" name="wpCreateaccountToken" value="<?php $this->text( 'token' ); ?>" /><?php } ?>
</form>
</div>
<div id="signupend"><?php $this->html( 'signupend' ); ?></div>
<?php

  }
}
