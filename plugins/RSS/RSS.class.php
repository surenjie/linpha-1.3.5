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
	@uses Items.class.php
	*/
require_once("Items.class.php");

class RSS {
	var $title;
	var $description;
	var $lnk;
	var $language;
	var $copyright;
	var $items;

	
	/* Constructor
	   uses config data, and retreive folder time change
	*/
	function RSS(){
		$this->title = read_config("rss_title");
		$this->description = read_config("rss_description");
		$this->lnk = read_config("rss_link");
		$this->language = read_config("rss_language");
		$this->copyright = read_config("rss_copyright");
		$this->items = new Items();
	}
		
	/* @return status (0=ok) */
	function createFeed(){
		if(!file_exists(TOP_DIR."/sql/tmp/rss.xml")){
			touch(TOP_DIR."/sql/tmp/rss.xml");
		}
		if (is_writable(TOP_DIR."/sql/tmp/rss.xml")){
			if (!$handle=fopen(TOP_DIR."/sql/tmp/rss.xml", "wb")){
				return 1;
			}
			$content = $this->forgeXML();
			if (fwrite($handle, $content) === FALSE) {
				return 2;
			}
			fclose($handle);
			$time=time();
			update_config("$time", "rss_last_mod");
			return 0;
		}
		return 3;
	}
	/* @return string XML file */
	function forgeXML(){
		$content = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
		$content .= "\t".'<rss version="2.0">'."\n";
		$content .= "\t\t"."<channel>"."\n";
		$content .= "\t\t\t"."<title>".$this->title ."</title>"."\n";
		$content .= "\t\t\t"."<description>".$this->description."</description>"."\n";
		$content .= "\t\t\t"."<language>$this->language</language>"."\n";
		$content .= "\t\t\t"."<link>$this->lnk</link>"."\n";
		$content .= "\t\t\t"."<copyright>$this->copyright</copyright>"."\n";
		$content .= "\t\t\t"."<pubDate>".date('r', time())."</pubDate>"."\n";
		$content .= "\t\t\t"."<lastBuildDate>".date('r', time())."</lastBuildDate>"."\n";
		$content .= "\t\t\t"."<ttl>1440</ttl>"."\n";
		
		for ($i=0;$i<$this->items->itemNumber;$i++){
			$content .= $this->items->printItem($i)."\n";
		}
		$content .= "\t\t</channel>"."\n";
		$content .= "\t</rss>"."\n";
		return $content;
	}
	function displayXML(){
		$content=$this->forgeXML();
		$content=str_replace('<','&lt;',$content);
		$content=str_replace('>','&gt;',$content);
		$content=str_replace("\n",'<br>',$content);
		$content=str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$content);
		return $content;
	}
}
?>	