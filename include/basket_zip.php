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

/**
 * @todo  language...
 */
$str_wrong_input_data = "Wrong input data";
global $type_of_archive, $str_add_more_apps, $zip_button,$str_create_archive;

/**
* error handling
*/
if(isset($_GET['error']))
{
	switch($_GET['error'])
	{
	case 1: $error_msg = $print_error;	break;	// user tried to download zip, but didn't even select a single image ;-)
	case 2: $error_msg = $str_download_error; break;	// created archive doesn't exists...
	case 3: $error_msg = $str_wrong_input_data; break;	// no valid imgid's
	}
	?>
	<script language="JavaScript" type="text/javascript">
	alert("<?php echo $error_msg; ?>");
	</script>
	<?php
}

echo $type_of_archive;
?>
<br /><br />
<form name='zip_selected' action='<?php echo TOP_DIR; ?>/actions/basket_build_zip.php' method='POST'>
<select name='ziptype' size='1' style='width:175'>
<?php
	include_once(TOP_DIR.'/include/archiver.class.php');
	$apps = new Archive_Applications();
	$apps->searchApps();
	
	foreach($apps->found_apps AS $key=>$value)
	{
		$value = $key.' (.'.$apps->apps[$key]['file_ext'].')';
		echo '<option value="'.$key.'">'.sprintf($str_create_archive,$value).'</option>'."\n";
	}
?>
</select><br />
<?php
if(in_group('admin'))
{
	echo $str_add_more_apps;
	putHelpButton('archive_apps');
	echo "<br />\n\n";
}

$speedlimit=read_config('alb_download_limit');
?>
<br />
<input type='submit' name='submit' value='<?php echo $zip_button; ?>'>