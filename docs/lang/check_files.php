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

include('./lang_doc.English.php');
$english_array = $lang;

echo '<h2>Missing entries:</h2>';

$d = dir(".");
while (false !== ($entry = $d->read()))
{
	$needs_updating = false;
	if($entry != 'lang_doc.English.php' && preg_match("/^lang_doc.[a-zA-Z]+.php$/",$entry))
	{
		echo '<b>'.$entry.':</b><br />';

		unset($lang);
		include('./'.$entry);
		
		foreach($english_array AS $key=>$value) {
			if(!array_key_exists($key,$lang)) {
				echo $key.'<br />';
				$needs_updating = true;
			}
		}
		if(!$needs_updating) {
			echo 'UP - to - date!<br />';
		}

		echo '<br /><br />';
	}
}
$d->close();



?>