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

ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/header.php');

include_once(TOP_DIR.'/include/left_menu.class.php');
$menu = new LeftMenuView();
$menu->generateTableHead();
$menu->buildMenu();
$menu->generateTableFooter();
?>
		<td class='adminpages' colspan='2' style='vertical-align: top;'>
			<h1><?php echo $mail_title; ?></h1><hr noshade>
<?php
/**
 * Exit if plugin is disabled
 */
exit_if_not_active('mail');

if(in_group("mail"))
	{
		echo "<b>::&nbsp;<a class='admin' href='form_mailing.php'>".$mail_send_link."</a>&nbsp;::</b>";

		if(in_group("admin"))
		{
			echo "&nbsp;&nbsp;";
			echo "<b>::&nbsp;<a class='admin' href='".TOP_DIR."/admin.php?page=mail&plugins=1'>".$book_admin."</a>&nbsp;::</b>";
		}
		echo "<hr>";
	}

	if(isset($_GET['redirector'])) {
		echo "<div align='center'><h1>".$$_GET['redirector']."</h1></div>";	// with two $$ !!
	}

?>
  			<form name='subscribe' method='POST' action='actions/submit_users.php'>
  			<table class='admintable' width='100%' cellspacing='0'>
	  			<tr>
	  				<th class='maintable' colspan='2'>
	  					<?php echo $mail_subscribe; ?>
	  				</th>
	  			</tr>
	  			<tr>
	  				<td class='maintable' width='30%'><?php echo $mail_user_name; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='join_name' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
	  			<tr>
	  				<td class='maintable'><?php echo $mail_user_email; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='join_email' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
	  			<tr>
	  				<td class='maintable'><?php echo $mail_user_email_confirm; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='join_email2' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
				<tr>
					<td class='maintable' colspan='2' align='center'>
		  				<input type='hidden' name='action' value='join'>
  						<input type='submit' value='<?php echo $mail_subscribe; ?>'>
  					</td>
  				</tr>
  			</table>
  			</form>
  			<br />
			<form name='activate' method='POST' action='actions/submit_users.php'>
  			<table class='admintable' width='100%' cellspacing='0'>
	  			<tr>
	  				<th class='maintable' colspan='2'>
	  					<?php echo $mail_activate; ?>
	  				</th>
	  			</tr>
	  			<tr>
	  				<td class='maintable' width='30%'><?php echo $mail_user_email; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='activate_email' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
	  			<tr>
	  				<td class='maintable'><?php echo $mail_user_code; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='activate_code' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
				<tr>
					<td class='maintable' colspan='2' align='center'>
		  				<input type='hidden' name='action' value='activate'>
  						<input type='submit' value='<?php echo $mail_activate; ?>'>
  					</td>
  				</tr>
  			</table>
  			</form>
  			<br />
			<form name='unsubscribe' method='POST' action='actions/submit_users.php'>
  			<table class='admintable' width='100%' cellspacing='0'>
	  			<tr>
	  				<th class='maintable' colspan='2'>
	  					<?php echo $mail_unsubscribe; ?>
	  				</th>
	  			</tr>
	  			<tr>
	  				<td class='maintable' width='30%'><?php echo $mail_user_email; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='leave_email' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
	  			<tr>
	  				<td class='maintable'><?php echo $mail_user_email_confirm; ?></td>
		  			<td class='maintable'>
		  				<input type='text' name='leave_email2' size='20' align='left' style='width: 80%;'>
					</td>
				</tr>
				<tr>
					<td class='maintable' colspan='2' align='center'>
		  				<input type='hidden' name='action' value='leave'>
  						<input type='submit' value='<?php echo $mail_unsubscribe; ?>'>
  					</td>
  				</tr>
  			</table>
  			</form>
		</td>
	</tr>

<?php
include_once(TOP_DIR.'/footer.php');
?>
