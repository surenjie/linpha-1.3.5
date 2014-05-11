<?php
/*
* Copyright (c) 2004 Heiko Rutenbeck <bzrudi@tuxpower.de>
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
*/

/**
* Mailing List Plugin for LinPHA by Vytautas Krivickas
* adapted by Florian Angehrn
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }

$mail_block_size=read_config('mail_block_size');
$mail_from_address=read_config('mail_from_address');
?>

<h1><?php echo $mail_title; ?></h1>
<hr noshade>
<?php echo $wm_help_and_descr.': '; putHelpButton('mail'); ?>
<br /><br />
<b>::&nbsp;<a class='admin' href='plugins/mail/form_mailing.php'><?php echo $mail_send_link; ?></a>&nbsp;::</b>
<hr noshade>
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable'><?php echo $mail_hint; ?></th>
	</tr>
	<tr>
		<td class='maintable'><?php echo $mail_user_permission.'<br />'.$mail_create_group; ?></td>
	</tr>
</table>
<br />
<form name='mail' method='POST' action='actions/submit_mod_data.php'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='4'><?php echo $mail_options; ?></th>
	</tr>
	<tr>
		<td class='maintable'><?php echo $mail_return_address; ?></td>
		<td class='maintable'>
			<input type='text' name='mail_from_address' size='50' style='width: 100%;' value='<?php echo $mail_from_address; ?>'>
		</td>
	</tr>
	<tr>
		<td class='maintable'><?php echo $mail_block; ?></td>
		<td class='maintable'>
			<input type='text' name='mail_block_size' size='3' align='right' style='width: 100px;' value='<?php echo $mail_block_size; ?>'>
			<?php echo $mail_block_help; ?>
		</td>
	</tr>
	<tr>
		<td class='maintable' align='right'><input type='checkbox' name='add_all_users'></td>
		<td class='maintable'><?php echo $str_mail_add_all_users; ?></td>
	</tr>
	<tr>
		<td class='maintable' colspan='4' align='center'>
			<input type='hidden' name='action' value='mail'>
			<input type='hidden' name='plugins' value='1'>
			<input type='hidden' name='page' value='mail'>
			<input type='submit' value='<?php echo $submit_button_folder; ?>'>
		</td>
	</tr>
</table>
</form>
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='5'><?php echo $mail_current_subscribers; ?></th>
	</tr>
	<tr>
		<td class='admintable'><b><?php echo $mail_name; ?></b></td>
		<td class='admintable'><b><?php echo $mail_mail; ?></b></td>
		<td class='admintable'><b><?php echo $mail_subscribing_date; ?></b></td>
		<td class='admintable'><b><?php echo $mail_toggle_active; ?></b></td>
		<td class='admintable' colspan='2'><b><?php echo $action; ?></b></td>
	</tr>

<?php
	$query = $GLOBALS['db']->Execute("SELECT id, name, email, date, active FROM ".PREFIX."mail_list");
	//echo $query->ErrorMsg();
	while($entries = @$query->FetchRow(ADODB_FETCH_ASSOC))
	{
?>
		<tr>
			<td class='maintable'><?php echo $entries['name']; ?></td>
			<td class='maintable'><?php echo $entries['email']; ?></td>
			<td class='maintable'><?php echo linpha_strftime('',$entries['date']); ?></td>
			<td class='maintable'>
		<form name='active_user' method='POST' action='<?php echo TOP_DIR; ?>/actions/submit_mod_data.php'>
		<input type='hidden' name='id' value='<?php echo $entries['id']; ?>'>
		<input type='submit' value='<?php echo $entries['active']; ?>'>
		<input type='hidden' name='action' value='mailinglist_toggle_active'>
		</form>
			</td>
			<td class='maintable'>
                <form name='del_user' method='POST' action='<?php echo TOP_DIR; ?>/actions/delete_data.php'>
                <input type='hidden' name='id' value='<?php echo $entries['id']; ?>'>
                <input type='submit' value='<?php echo $submit_button_delete; ?>'>
                <input type='hidden' name='action' value='mailinglist_remove'>
                </form>
			</td>
		</tr>

<?php
	}
?>
	<form name="new_user" method="POST" action="actions/submit_new_data.php"">
    	<tr>
    	    <td class='adminalternate'><input type='text' name='mail_name' size='20' maxlength='25'></td>
    		<td class='adminalternate'><input type='text' name='mail_adress' size='25' maxlength='50'></td>
    	    <td colspan='2' align='right' class='adminalternate'>&nbsp;</td>
    	    <td class='adminalternate'>
    	    	<input type='hidden' name='action' value='mailinglist_newuser'>
    	    	<input type='submit' value='<?php echo $mail_subscribe; ?>'>
	    	</td>
    	</tr>
    </form>
</table>
