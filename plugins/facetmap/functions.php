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

/**
* linpha facetmap 
* @author torge
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }
ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');

function facetmap_name($fmtree,$fmkey)
{
	if ($fmkey == 'none')
	{
		return "Uncategorized";
	}
	else
	{
		$query=$GLOBALS['db']->Execute("SELECT name FROM ".PREFIX."facetmap WHERE fmtree='".linpha_addslashes($fmtree)."' AND fmkey='".linpha_addslashes($fmkey)."'");
		$row=$query->FetchRow();
		$query->Close();
		return $row['name'];
	}
}

function facetmap_categories($tree,$key,$maincategory,$url)
{
	$levels = ($key == '') ? 0 : (strlen($key) + 1) / 4;
	$cat = "<a href='".$url."'>".$maincategory."</a>";
	if ($key == 'none')
	{
		$cat.= "&nbsp;> Uncategorized";
	}
	else
	{	
		if ($levels > 0)
		{
			for($i = 1; $i <= $levels; $i++)
			{
				$subkey = substr($key,0,($i * 4) - 1);
				
				$cat .= "&nbsp;> ";
				if ($i < $levels)
					$cat .= "<a href='".$url.$subkey."'>".facetmap_name($tree,$subkey)."</a>";
				else
					$cat .= facetmap_name($tree,$subkey);
			}
		}
	}
	return $cat;
}

function fm_print_menu($fmtree,$fmkey,$fmfield,$wherestatement,$url)
// $fmtree = location,type,date
// $fmkey = key in tree
// $fmfield = field in image table to be looked up
// $wherestatement = aditional where statement
{
	$pathsize = ($fmkey == '') ? 3 : strlen($fmkey) + 4;
	$fmkey_where = ($pathsize == 3) ? "" :
			$fmfield." LIKE '".$fmkey.".%' AND ";

	$wherestatement = ($wherestatement == "") ? "" : $wherestatement." AND ";

	$first = 0;
	
	/**
	* @todo  is this correct?
	*/
	$sql = sql_query_str(
			array(
			"LEFT(".$fmfield.",".$pathsize.") as fmkey, COUNT(*) as count"),
			$fmkey_where.$wherestatement.$fmfield." <> '') GROUP BY (fmkey");

	$query = $GLOBALS['db']->Execute($sql);
	while($row=$query->FetchRow())
	{
		if ($first <> 0)
			print ", ";
		$first = 1;
		print "<a href='".$url.$row['fmkey']."'><b>".facetmap_name($fmtree,$row['fmkey'])."</b></a>";
		print "&nbsp;(".$row['count'].")";
	}

	if ($pathsize == 3)
	{
		$sql = sql_query_str(
				array(
				"LEFT(".$fmfield.",".$pathsize.") as fmkey, COUNT(*) as count"),
				$wherestatement.$fmfield." = '') GROUP BY (fmkey");
		$query = $GLOBALS['db']->Execute($sql);
		while($row=$query->FetchRow())
		{
			if ($first <> 0)
				print ", ";
			$first = 1;
			print "<a href='".$url."none".$row['fmkey']."'><b>Uncategorized</b></a>";
			print "&nbsp;(".$row['count'].")";
		}
	}
}


function fm_select_options($fmtree,$fmkey)
{
	$options = "";

	$query=$GLOBALS['db']->Execute("SELECT fmkey, name FROM ".PREFIX."facetmap WHERE fmtree='".linpha_addslashes($fmtree)."' ORDER BY fmkey");
	while($row=$query->FetchRow())
	{
		$level = ($row['fmkey'] == '') ? 0 : (strlen($row['fmkey']) + 1) / 4;

		$options .= "<option ";
		$options .= ($row['fmkey'] == $fmkey) ? "selected " : "";
		$options .= "value='".$row['fmkey']."'>".str_repeat('&nbsp;&nbsp;&nbsp;',$level-1).$row['name']."</option>\n";
	}
	$query->Close();
	return $options;
}

?>