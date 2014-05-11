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
* The comments page for album comments
*
* This file builds the album comment page...
*
* @package comments
* @subpackage album_comments
*/
if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/header.php');

/**
 * Take good care of possible XSS. We can easily make use of is_numeric()
 * here, as albid and friends always are expected to be numeric 
 */
$numeric_test = array('albid', 'stage', 'pn');
xss_security_check($numeric_test, 'int');

/**
* create left menu
*/
include_once(TOP_DIR.'/include/left_menu.class.php');
$menu = new LeftMenuView();
$menu->generateTableHead();
$menu->buildMenu();
$menu->generateTableFooter();
?>
	<td class='mainwindow' height='100%' colspan='2'>


<?php

if(in_group('admin') && isset($_GET['stage']) && isset($_GET['albid']))
{
	$stage = get_stage();

	$result = $GLOBALS['db']->Execute("SELECT path, name FROM ".PREFIX.$stage."_lev_album WHERE ID = '".linpha_addslashes($_GET['albid'])."'");
	$alb_name = $result->FetchRow();

	$alb_info=$GLOBALS['db']->Execute("SELECT ID, comment FROM ".PREFIX."album_comments "."WHERE album='".linpha_addslashes($alb_name[0])."'");

	$album_info=$alb_info->FetchRow(ADODB_FETCH_ASSOC);
?>
	<form name='album_comment' method=POST action='<?php echo TOP_DIR; ?>/actions/store_comment.php'>
	<table class='maintable' width='100%' cellspacing='0'>
		<tr>
			<td class='commenthead' width='100%' colspan='3' style='padding-left: 15px; border: 0px;'>
				<h2><br><?php echo $alb_name[1]; ?></h2>
				<i><?php echo $album_edit; ?></i>
			</td>
		</tr>
		<tr>
			<td class='viewimage'>
<?php
	if(isset($_GET['redirect'])) {
		($_GET['redirect'] == 'insert') ? $str1 = $album_ins : '';
		($_GET['redirect'] == 'update') ? $str1 = $album_up : '';
		echo "<div align='center'><h1>".$album_com." ".$str1."!</h1></div>";
	}
?>
				<br />
				<table width='90%' align='center' style='padding-left: 15px;'>
					<tr>
						<td align='center' class='commenthead'><?php echo $img_com; ?></td>
					</tr>
					<tr>
						<td>
							<textarea name='comment' rows='5' style='width: 100%;'><?php echo stripslashes($album_info['comment']); ?></textarea>
							<br/>
							<a href='<?php echo TOP_DIR; ?>/plugins/guestbook/guestbook_view.php?mode=formatting'>
							<?php echo $formatting_possibilities; ?></a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td width='100%' style='padding-left: 15px;'>
				<hr  align='left' width='90%'>
			</td>
		</tr>
<?php
	if(!empty($album_info['comment'])) // toggle update/insert
	{
		$value_submit = $lang_plugins['update'];
		$value_hidden = 'update';
	}
	else // insert
	{
		$value_submit = $submit_button_folder;
		$value_hidden = 'insert';
	}
	?>
		<tr>
			<td align='left' style='padding-left: 15px;'>
				<input class='linkbutton' type='submit' name='update_album_info' value='<?php echo $value_submit; ?>'>
				<input type='hidden' name='action' value='<?php echo $value_hidden; ?>'>
				<input type='hidden' name='stage' value='<?php echo $_GET['stage']; ?>'>
				<input type='hidden' name='albid' value='<?php echo $_GET['albid']; ?>'>
				<input type='hidden' name='pn' value='<?php echo $_GET['pn']; ?>'>
				<input type='hidden' name='job' value='album'>
				<br /><br />
				<a class='linkbutton leftmenu' href='<?php echo TOP_DIR."/viewer.php?albid=".$_GET['albid']."&stage=".$_GET['stage']."&pn=".$_GET['pn']; ?>'>
				&nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;</a><br /><br />
			</td>
		</tr>
	</table>
	</form>
	<?php
}
else
{
	echo STR_ACCESS_DENIED;
}

echo "</td></tr>";

include_once(TOP_DIR.'/footer.php');
?>