<?php
/*
* Copyright (c) 2005 Colin Bissegger <colinbissegger@yahoo.ca>
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

	/*
	@author Colin
	*/
	
if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }

// for get_stage()
include_once(TOP_DIR."/functions/other.php");

class Item{
	var $iname;
	var $ilink;

	/* Constructor */
	function Item($item_name, $item_level, $prev_path){
		$stage = get_stage($item_level);
		$prev_path=substr($prev_path,strpos($prev_path,'albums/'));
		$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id FROM ".PREFIX.$stage."_lev_album WHERE path = '".linpha_addslashes($prev_path)."'");
		$data = $query->FetchRow();
		
		$this->iname = $item_name;
		$this->ilink.=substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], 'admin.php?'));
		$this->ilink.="viewer.php?albid=".$data['id']."&amp;"."stage=".$item_level."";
	}
}
?>