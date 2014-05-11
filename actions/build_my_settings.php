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

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/phpmeta/Unicode.php');

/* query user info from DB */
set_magic_quotes_runtime(0);
$friend_query=$GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."users ".
			"WHERE nickname='".linpha_addslashes($_SESSION['user_name'])."' AND ".
			"password='".linpha_addslashes($_SESSION['user_pass'])."'");
$friend_info=$friend_query->FetchRow();
?>
	<table class='admintable' width='100%' cellspacing='0'>
		<tr>
			<th class='maintable' colspan='2' bgcolor='#285088'>
				<font color='white'><?php echo $friend_user_header; ?></font>
			</th>
		</tr>
<?php

		(!isset($_REQUEST['changepw'])) ? $_REQUEST['changepw'] = false : '';

		if($_REQUEST['changepw'] == false)
		{
?>
		<form name='friend_user' method='POST' action='actions/submit_mod_data.php'>
		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_name_info.":"; ?></b></td>
			<td class='admintable'>
				<input type='text' name='friend_user_name' size='20' maxlength='25' value='<?php echo smart_htmlspecialchars($friend_info[1], ENT_QUOTES); ?>'>
<?php
				if(isset($_GET['error_nr']))
				{
					echo '<br /><font color="red">';
					if($_GET['error_nr']==4)
					{
						echo $new_user_error4;
					}
					if($_GET['error_nr']==5) {
						echo $new_user_error5;
					}
					if($_GET['error_nr']==6) {
						echo $new_user_error6;
					}
					echo '</font>';
				}
?>
			</td>
		</tr>

		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_full_name.":" ?></b></td>
			<td class='admintable'>
				<input type='text' name='friend_full_name' size='20' maxlength='50' value='<?php echo smart_htmlspecialchars($friend_info[7], ENT_QUOTES); ?>'>
			</td>
		</tr>
		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_mail_info; ?>:</b></td>
			<td class='admintable'>
				<input type='text' name='friend_user_mail' size'20' maxlength='45' value='<?php echo smart_htmlspecialchars($friend_info[3], ENT_QUOTES); ?>'>
<?php
				if(isset($_GET['error_nr'])&&$_GET['error_nr']==3) {
					echo '<br /><font color="red">'.$new_user_error3.'</font>';
				}
?>
			</td>
		</tr>
		<tr>
			<td class='admintable' colspan='3'>
			<a href='<?php echo $_SERVER['PHP_SELF'].'?page=mysettings&changepw=true';?>'>
			<b><?php echo $lostpw_new_password; ?> >></b></a></td>
		</tr>			
		<tr>
			<td align='center' class='admintable' colspan='3'>
				<input type='hidden' name='id' value='<?php echo $friend_info[0]; ?>'>
				<input type='hidden' name='action' value='frienduser'>
				<input type='submit' value='<?php echo $submit_button_friend_user; ?>'>
			</td>
		</form>
<?php
		}
		else
		{
?>		
		<form name='friend_user_pass' method='POST' action='actions/submit_mod_data.php'>
		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_old_password; ?>:</b></td>
			<td class='admintable'>
				<input type='password' name='friend_user_old_pass' size='20'>
<?php
				if(isset($_GET['error_nr'])&&$_GET['error_nr']==1) {
					echo '<br /><font color="red">'.$new_user_error1.'</font>';
				}
?>
			</td>
		</tr>
		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_new_password; ?>:</b></td>
			<td class='admintable'>
				<input type='password' name='friend_user_new_pass' size='20'>
<?php
				if(isset($_GET['error_nr'])&&$_GET['error_nr']==2) {
					echo '<br /><font color="red">'.$new_user_error2.'</font>';
				}
?>
			</td>
		</tr>
		<tr>
			<td class='admintable' width='40%'><b><?php echo $new_user_retype_password; ?>:</b></td>
			<td class='admintable'>
				<input type='password' name='friend_user_retype_pass' size='20'>
<?php
				if(isset($_GET['error_nr'])&&$_GET['error_nr']==2) {
					echo '<br /><font color="red">'.$new_user_error2.'</font>';
				}
?>
			</td>
		</tr>
		<tr>
			<td class='admintable' colspan='3'>
			<a href='<?php echo $_SERVER['PHP_SELF'].'?page=mysettings';?>'>
			<b><< <?php echo STR_BACK ?></b></a></td>
		</tr>	
		<tr>
			<td align='center' class='admintable' colspan='3'>
				<input type='hidden' name='id' value='<?php echo $friend_info[0]; ?>'>
				<input type='hidden' name='action' value='frienduser_pass'>
				<input type='submit' value='<?php echo $submit_button_friend_user; ?>'>
			</td>
		</form>
		</tr>
<?php
		}
?>
        <?php
        if(in_group('admin'))
        {
        	$print_alert="onclick=\"var foo=confirm('WARNING: really delete account?');return foo;\"";
        ?>
        <tr>
		<form name='del_user' method='POST' action='actions/delete_data.php'>
			<td align='center' class='admintable' colspan='3'>
				<input type='submit' value='<?php echo $delete_button_friend_user; ?>' 
				<?php echo $print_alert; ?>>
				<input type='hidden' name='action' value='frienduser'>
				<input type='hidden' name='id' value='<?php echo $friend_info[0]; ?>'>
			</td>
		</form>
        <?php
        }
        ?>
		</tr>
	</table>
</div>