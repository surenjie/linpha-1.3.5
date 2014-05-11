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

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }
	/*
	@author Colin
	@uses Item.class.php
	*/
require_once("Item.class.php");
class Items{
	var $itemNumber=0;
	var $item = Array();
	var $descTxt;
	var $albums_dir;

	/* Constructor */
	function Items(){
		$this->descTxt = read_config('rss_generic_title');
		$this->albums_dir = TOP_DIR."/albums";
		$this->buildList($this->albums_dir, 1);
	}
	/* Building item list */
	function buildList($dir, $level){
		$handle = opendir($dir);
		while (false !== ($object=readdir($handle))){
			if (is_dir($dir."/".$object) &&	$object != '.' && $object != '..'){
				if(substr($object,0,1) != '.' &&//dont watch hidden folders
				filemtime($dir."/".$object."/.") > read_config('rss_last_mod')
				){
					$this->item[] = new Item($object, $level,$dir.'/'.$object);
					$this->itemNumber += 1;
				}
			// Recursive :)
			$this->buildList($dir."/".$object, $level + 1);
			}
		}
		// if there are no subdirectories, let's test the base one
//		if ($this->itemNumber == 0){
//			if(filemtime($this->albums_dir."/.") > read_config('rss_last_mod')){
//				$this->item[] = new Item("albums");
//				$this->itemNumber += 1;
//			}
//		}
		closedir($handle); 
	}
	/* @return string containing the XML description of the Item */
	function printItem($itemId = 0){
		$itemXML = "\t\t\t<item>\n";
		$itemXML .= "\t\t\t\t<title>".$this->item[$itemId]->iname.'</title>'."\n";
		$itemXML .= "\t\t\t\t<description>".$this->descTxt.$this->item[$itemId]->iname .'</description>'."\n";
		$itemXML.="\t\t\t\t<link>".$this->item[$itemId]->ilink.'</link>'."\n\t\t\t".'</item>';
		return $itemXML;
	}
}
?>