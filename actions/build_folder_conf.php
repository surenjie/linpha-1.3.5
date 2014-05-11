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

/*##############################################
# folder management page
##############################################*/

// build table header,  get all available groups from DB
$groups_query = $GLOBALS['db']->Execute("SELECT ID, groups FROM ".PREFIX."groups 
		WHERE groups!='uploader' 
		ORDER BY groups");
$num = $groups_query->RecordCount();
$colspan = $num+2;

// build array with all available groups
$array_groups['public'] = 'public';
while($row = $groups_query->FetchRow())
{
	$array_groups[$row[0]] = $row[1];
}

// build array with all available folders and the permissions
$folder_query = $GLOBALS['db']->Execute("SELECT ID, name, groups FROM ".PREFIX."first_lev_album ORDER BY name");
while($row = $folder_query->FetchRow())
{
	$array_folders[$row[0]]['name'] = $row[1];

	$array_folder_groups = explode(";", $row[2]);

	reset($array_groups);
	foreach($array_groups as $key => $value)
	{
		if(in_array($key, $array_folder_groups)) {
			$array_folders[$row[0]][$key] = 1;
		} else {
			$array_folders[$row[0]][$key] = 0;
		}
	}
}

?>
<div align='center'><h1><?php echo $href_folder_conf; ?></h1></div>

<b>::&nbsp;<a href='admin.php?page=user&job=group&call_from=folder'><?php echo $href_groups; ?></a>&nbsp;::<hr>
<form name="form_perm" action="actions/submit_new_data.php" method="POST" onsubmit="check_all_uncheck_rows()">
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='<?php echo $colspan; ?>'>
<?php
			echo $set_dir_perms_header;
			putHelpButton('folderperms');
?>
		</th>
	</tr>
	<tr>
		<td class='admintable'><b><?php echo $dir_name; ?></b></td>
<?php
// row heading

reset($array_groups);
for($i=0; list($key,$value) = each($array_groups); $i++)

{
	if($value=="admin"): $value="$book_admin";endif; //take care of language entries for default groups
	if($value=="friend"): $value="$friends";endif;

	echo "<td class='admintable'><b><a href='javascript:setalltogroup(".$i.")'>".$value."</a></b></td>";
}
?>
	</tr>
<?php
// main table

reset($array_folders);
for($i=0; list($key,$value) = each($array_folders); $i++)
{
?>
	<tr>
		<td class="admintable"><?php echo $array_folders[$key]['name']; ?></td>

<?php
	list($perm_key,$perm_value) = each($value);	// albumname -> ignore
	list($perm_key,$perm_value) = each($value);	// $perm_key = 0 -> group 'public'
	echo '<td class="admintable"><input name="perm['.$key.'][0]" type="checkbox" onclick="check_all('.$i.')"'.($perm_value == 1 ? ' checked' : '').'></td>'."\n";

	for($j=1; list($perm_key,$perm_value) = each($value); $j++)
	{
		echo '<td class="admintable"><input name="perm['.$key.']['.$perm_key.']" type="checkbox"'.($perm_value == 1 ? ' checked' : '').'></td>'."\n";
	}
?>

	</tr>
<?php
}
?>
	<tr>
		<td colspan="<?php echo $colspan; ?>" align="center">
			<input type='hidden' name='action' value='permissions'>
			<input type="submit" name="submit" value="<?php echo $submit_button_folder; ?>">
		</td>
	</tr>
</table>
</form>

<script language="JavaScript" type='text/javascript'>
var cols = <?php echo count($array_groups); ?>;
var rows = <?php echo count($array_folders); ?>;

function init()
{
	for(var i = 0; i < rows; i++)
	{
		if(document.forms[0].elements[i*cols].checked == true)
		{
			for(var j = 1; j < cols; j++)
			{
				document.forms[0].elements[i*cols+j].checked = true;
				document.forms[0].elements[i*cols+j].disabled = true;
			}
		}
	}
}
init();

function check_all(element_id)
{
	if(document.forms[0].elements[element_id*cols].checked)
	{
		for(var j = 1; j < cols; j++)
		{
			document.forms[0].elements[element_id*cols+j].checked = true;
			document.forms[0].elements[element_id*cols+j].disabled = true;
		}
	} else {
		for(var j = 1; j < cols; j++)
		{
			document.forms[0].elements[element_id*cols+j].checked = false;
			document.forms[0].elements[element_id*cols+j].disabled = false;
		}
		document.forms[0].elements[element_id*cols+1].checked = true;	// check group admin
	}
}

function check_all_uncheck_rows()	// check if each row contains at least one check because we cant have a album without a group assigned
{
	for(var i = 0; i < rows; i++)
	{
		var no_checked = true;
		for(var j = 0; j < cols; j++)
		{
			if(document.forms[0].elements[i*cols+j].checked == true)
			{
				no_checked = false;
			}
		}
		if(no_checked) {
			document.forms[0].elements[i*cols+1].checked = true;	// check group admin
		}
	}
}

function setalltogroup(group_id)
{
	if(group_id == 0)	// public
	{
		if(document.forms[0].elements[0].checked == true) {
			for(var i = 0; i < rows*cols; i++)
			{
				document.forms[0].elements[i].checked = false;
				document.forms[0].elements[i].disabled = false;
			}
		} else {
			for(var i = 0; i < rows; i++)
			{
				document.forms[0].elements[i*cols].checked = true;
			}
			init();
		}
	}
	else
	{
		if(document.forms[0].elements[group_id].checked == true) {	// set whole row to what the first row is (-> no "invert" of the row)
			var do_uncheck = true;
		} else {
			var do_uncheck = false;
		}
		
		for(var i = 0; i < rows; i++)
		{
			if(document.forms[0].elements[i*cols].checked == true)	// is public checked
			{
				// set row to unpublic and activate group
				for(var j = 0; j < cols; j++)
				{
					document.forms[0].elements[i*cols+j].checked = false;
					document.forms[0].elements[i*cols+j].disabled = false;
				}
				document.forms[0].elements[i*cols+group_id].checked = true;
				do_uncheck = false;	// in case there is a row which is not public to not invert the row, but check all or uncheck all
			}
			else	// is checked but not public -> uncheck
			{
				if(do_uncheck)
				{
					document.forms[0].elements[i*cols+group_id].checked = false;
				} else {
					document.forms[0].elements[i*cols+group_id].checked = true;
				}
			}
	
		}
	}
}
</script>
