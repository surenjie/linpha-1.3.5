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

include_once(TOP_DIR.'/include/session.php');

if(in_group('admin'))
{
	if(isset($_POST['cmd']) && $_POST['cmd'] == "update_plugins")
	{
		foreach($_POST['plugins'] as $key=>$value)
		{
			$update_plugins=$GLOBALS['db']->Execute("UPDATE ".PREFIX."plugins ".
				"SET active = '".linpha_addslashes($value)."' WHERE ID = '".linpha_addslashes($key)."'");
		}
		header ("Location: ".TOP_DIR."/admin.php?redirector=plugins&page=plugins");
	}
}
?>