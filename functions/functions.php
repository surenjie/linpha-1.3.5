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

if(!isset($_GET['dump']))
{
	include_once(TOP_DIR."/functions/filesys.php");
	include_once(TOP_DIR."/functions/image.php");
	include_once(TOP_DIR."/functions/other.php");
	include_once(TOP_DIR."/functions/identify.php");
}
else
{
	$file_array = Array("/functions/db_api.php","/functions/filesys.php","/functions/image.php","/functions/other.php","/functions/identify.php");


	$doc_root = realpath(TOP_DIR);
?>
	<table border="1" width="100%">
		<tr>
			<th align="left">Function</th>
			<th align="left">Row</th>
			<th align="left">Used in</th>
		</tr>
<?php
	foreach($file_array AS $value) {
		$sub_folder = substr($value,0,strrpos($value,"/"));	// extract folder from filename: '/functions/db_api.php' to '/sql' (for filemanager)
?>
		<tr>
			<td colspan="3">
				<br/>
				<b>functions in: <?php echo $value; ?></b>
				<a href="file:<?php echo $doc_root.$value; ?>">(Open)</a>
			</td>
		</tr>
<?php
		$handle = fopen(TOP_DIR.$value,'r');
		for($row=1;$string = fgets($handle,2000);$row++) {
			if(substr($string, 0, 8)=='function') {
?>
				<tr>
					<td>
<?php
						echo '<a href="../admin.php?lt='.
							$doc_root.$sub_folder.
							'&page=ftp&sortby0=name&sortdir0=4&todo=openfile&f='.
							$doc_root.$value.
							'" target="_blank">';
						echo substr($string,8,strlen($string)-10).'</a>';
?>
					</td>
					<td><?php echo $row; ?></td>
					<td>
<?php
					$string = fgets($handle,2000);	// '{'
					$row++;
					$string = fgets($handle,2000);	// '/*#########'
					$row++;
					$string = fgets($handle,2000);	// ## used in:
					$row++;
					if(substr($string,0,11)=='## used in:') {
						echo substr($string,11,strlen($string)-11);
						$string = fgets($handle,2000);
						$row++;
					}
?>
					&nbsp;</td>
<?php
					// description (not used)
					while(substr($string,0,2)=='##') {
						if(substr($string,0,5)!='#####') {	// end description
							//echo substr($string,3,strlen($string)-3).'<br/>';
						}
						$string = fgets($handle,2000);
						$row++;
					}
?>
				</tr>
<?php
			}
		}
		fclose($handle);
	}
?>
	</table>
<?php
}
?>
