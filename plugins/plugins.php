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
?>

<form name="set_plugins" method="POST" action="plugins/update_plugins.php">
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th colspan='4' class='maintable' style='height: 25px;'"><?php echo "{$lang_plugins['plugins']}"; ?></th>
	</tr>
	<tr>
		<td class='admintable'  width="50%"><b><?php echo "{$lang_plugins['plugin']}"; ?></b></th>
		<td class='admintable'  width="24%"><b><?php echo "{$lang_plugins['enabled']}"; ?></b></th>
		<td class='admintable'  width="24%"><b><?php echo "{$lang_plugins['disabled']}"; ?></b></th>
		<td class='admintable'  width="2%"><b><?php $help=str_replace("h", "H", $help); echo "$help"; ?></b></th>
	</tr>
<?php
$query_plugins=$GLOBALS['db']->Execute("SELECT ID, name, active FROM ".PREFIX."plugins ORDER by name");
while($row = $query_plugins->FetchRow())
{

	if($row[1] == "sql" && DB_TYPE != "mysql")
	{
		//hide it
	}
	else
	{
	?>
	<tr>
		<td class='admintable'><?php echo "{$lang_plugins[$row[1]]}"; ?></td>
		<td class='admintable'><input type="radio" name="plugins[<?php echo $row[0]; ?>]" value="1"<?php echo ($row[2]=="1" ? 'checked' : ''); ?>></td>
		<td class='admintable'><input type="radio" name="plugins[<?php echo $row[0]; ?>]" value="0"<?php echo ($row[2]=="0" ? ' checked' : ''); ?>></td>
		<td class='admintable'><?php  putHelpButton($row[1]); ?></td>
	</tr>
	<?php
	}
}
?>
	<tr>
		<td colspan="4" align="center">
			<input type="hidden" name="cmd" value="update_plugins">
			<input type="submit" name="submit" value="<?php echo "{$lang_plugins['update']}"; ?>">
		</td>
	</tr>
</table>
</form>