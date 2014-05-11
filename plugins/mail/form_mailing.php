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

if(in_group("mail")) {

include_once(TOP_DIR.'/include/left_menu.class.php');
$menu = new LeftMenuView();
$menu->generateTableHead();
$menu->buildMenu();
$menu->generateTableFooter();
?>
		<td class='adminpages' colspan='2' style='vertical-align: top;'>

			<h1><?php echo $mail_title; ?></h1>
			<hr noshade>
			<form name='mail' method='POST' action='actions/mailing.php'>
			<table class='admintable' width='100%' cellspacing='0'>
				<tr>
					<th class='maintable' colspan='4'><?php echo $mail_form_title; ?></th>
				</tr>
				<tr>
					<td class='maintable'><?php echo $mail_form_subject; ?></td>
					<td class='maintable'>
						<input type='text' name='mail_subject' size='50' align='left' style='width: 100%;'>
					</td>
				</tr>
				<tr><td class='maintable' colspan='4'><?php echo $mail_form_msg; ?></td></tr>
				<tr>
					<td class='maintable' colspan='4'>
						<textarea name='mail_message' style='width: 100%;' rows='8'></textarea>
						<br /><?php echo $mail_replace_words; ?><br /><br />
					</td>
				</tr>
				<tr>
					<td class='maintable' colspan='4' align='center'>
						<input type='hidden' name='action' value='mail'>
						<input type='submit' value='<?php echo $mail_send_link; ?>'>
					</td>
				</tr>
			</table>
			</form>
			<br/>
		</td>
	</tr>

<?php
}

include_once(TOP_DIR.'/footer.php');
?>
