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

$str_edit_memberships = 'Edit memberships of';
$str_edit_members = 'Edit members of';
$str_user_group_association = "User/Group association";

?>
<form name='user_group' method='POST' action='<?php echo TOP_DIR; ?>/actions/submit_mod_data.php'>
<?php

if(isset($_POST['action']) && $_POST['action'] == "edit_memberships")
{
	$query = $GLOBALS['db']->Execute("SELECT nickname, groups FROM ".PREFIX."users ".
		"WHERE id = '".linpha_addslashes($_POST['user_id'])."'");
	$data = $query->FetchRow();
	$show_name = '<h1>'.$str_edit_memberships.': '.$data[0].'</h1>';
	$current_data = explode_and_slice($data[1],';');
	
	$query = $GLOBALS['db']->Execute("SELECT ID, groups FROM ".PREFIX."groups");
	while($data = $query->FetchRow())
	{
		$all_data[$data[0]] = $data[1];
	}
	?>
	<input type='hidden' name='user_id' value='<?php echo $_POST['user_id']; ?>'>
	<input type='hidden' name='action' value='edit_memberships'>
	
	<?php
	$job = 'user';
	$table_name = $header_groupname;
}
elseif(isset($_POST['action']) && $_POST['action'] == "edit_members")
{
	$query = $GLOBALS['db']->Execute("SELECT groups FROM ".PREFIX."groups ".
		"WHERE id = '".linpha_addslashes($_POST['group_id'])."'");
	$data = $query->FetchRow();
	$show_name = '<h1>'.$str_edit_members.': '.$data[0].'</h1>';
	
	$current_data = Array();
	$query = $GLOBALS['db']->Execute("SELECT id, nickname FROM ".PREFIX."users ".
		"WHERE groups LIKE '%;".$_POST['group_id'].";%'");
	while($data = $query->FetchRow())
	{
		$current_data[] = $data[0];
	}
	
	$query = $GLOBALS['db']->Execute("SELECT id, nickname FROM ".PREFIX."users");
	while($data = $query->FetchRow())
	{
		$all_data[$data[0]] = $data[1];
	}
	?>
	<input type='hidden' name='group_id' value='<?php echo $_POST['group_id']; ?>'>
	<input type='hidden' name='action' value='edit_members'>
	
	<?php
	$job = 'group';
	$table_name = $new_user_name_info;

}

echo $show_name;
?>
<a class='linkbutton leftmenu' href='<?php echo TOP_DIR; ?>/admin.php?page=user&amp;job=<?php echo $job; ?>'>&nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;</a>
<br /><br />
<table class='admintable' width='50%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='8' style='height: 25px;'><?php echo $str_user_group_association; ?></th>
	</tr>
	<tr>
		<td class='admintable' width='15'>
			<input type="checkbox" name="data_all" onclick="check_all()">
		</td>
		<td class='admintable'><b><?php echo $table_name; ?></b></td>
    </tr>

<?php
for($i=1; list($key,$value) = each($all_data); $i++)
{
	?>
	<tr>
		<td class='admintable' width='15' align='center'>
			<input type="checkbox" name="data[<?php echo $key; ?>]"<?php
			 echo in_array($key,$current_data) ? ' checked': ''; ?>>
		</td>
		<td class='admintable'><?php echo $value; ?></td>
    </tr>

	<?php
}
?>

	<tr>
		<td class='admintable' colspan='2' align='center'>&nbsp;</td>
    </tr>
	<tr>
		<td class='admintable' colspan='2' align='center'>
			<input type='submit' name='submit' value='<?php echo $submit_button_folder; ?>'>
		</td>
    </tr>
</table>
</form>

<script language="JavaScript" type='text/javascript'>
function check_all()
{
	var start = 2;
	if(document.forms[0].elements[start].checked)
	{
		for(var j = 1; j < <?php echo $i; ?>; j++)
		{
			document.forms[0].elements[start+j].checked = true;
		}
	} else {
		for(var j = 1; j < <?php echo $i; ?>; j++)
		{
			document.forms[0].elements[start+j].checked = false;
		}
	}
}
</script>