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

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

function facetmap_generate_tree($fmtree, $fmpath, $fmlevel)
{
	global $key;

	$pathlevel = ($fmpath == '') ? 0 : (strlen($fmpath) + 1) / 4;
	$thiskey = substr($fmpath,0,($fmlevel * 4) + 3);

	if ($pathlevel <> $fmlevel)
	{
		print "<ul>\n";

		$query=$GLOBALS['db']->Execute("SELECT fmkey,name,RIGHT(fmkey,3) as part FROM ".PREFIX."facetmap WHERE fmtree='".linpha_addslashes($fmtree)."' AND fmkey='".linpha_addslashes($thiskey)."'");
		while($row=$query->FetchRow())
		{
			print("<li>(".$row['part'].") ".
				"<a href='admin.php?page=facetmap&plugins=1&tree=".$fmtree."&path=".$row['fmkey']."'>".
				"<b>".$row['name']."</b></a>\n");	
		}
		$query->Close();

		facetmap_generate_tree($fmtree, $fmpath, $fmlevel + 1);
		print "</ul>\n";
	}
	else
	{
		print "<ul>\n";
	
		$query=$GLOBALS['db']->Execute("SELECT fmkey,name,RIGHT(fmkey,3) as part FROM ".PREFIX."facetmap WHERE fmtree='".linpha_addslashes($fmtree)."' AND fmpath='".linpha_addslashes($fmpath)."' ORDER BY name");
		while($row=$query->FetchRow())
		{
			print("<li>");
			if ($key == $row['fmkey'])
			{
				print "<table><tr><td>";
				print "<form name=facetmap method=POST action=".TOP_DIR."/plugins/facetmap/submit.php?action=modify>\n";
				print "(".$row['part'].") ";
				print "<input type='hidden' name='key' size=4 maxlength=3 value='".$row['fmkey']."'>\n";
				print "<input type='text' name='name' size=20 maxlength=100 value='".$row['name']."'>\n";
				print "<input type='hidden' name='tree' value='".$fmtree."'>\n";
				print "<input type='hidden' name='path' value='".$fmpath."'>\n";
				print "<input type=submit value='Save'>\n";
				print "</form>\n";

				print "</td><td>";

				print "<form name=facetmap method=POST action=".TOP_DIR."/plugins/facetmap/submit.php?action=delete>\n";
				print "<input type='hidden' name='key' size=4 maxlength=3 value='".$row['fmkey']."'>\n";
				print "<input type='hidden' name='tree' value='".$fmtree."'>\n";
				print "<input type='hidden' name='path' value='".$fmpath."'>\n";
				print "<input type=submit value='Delete'>\n";
				print "</form>\n";
				print "</td></tr></table>";
			}
			else
			{
				print("(".$row['part'].") ".
					"<a href='admin.php?page=facetmap&plugins=1&tree=".$fmtree."&path=".$row['fmkey']."'>".
					"<b>".$row['name']."</b></a> (".subcount($fmtree, $thiskey).")\n");
				print " <a href='admin.php?page=facetmap&plugins=1&tree=".$fmtree."&path=".$fmpath."&key=".$row['fmkey']."'><font size=-2>modify</font></a>";
			}
		}
		$query->Close();
	
		print "<li>\n";
		print "<form name=facetmap method=POST action=".TOP_DIR."/plugins/facetmap/submit.php?action=new>\n";
		print "New key: <input type='text' name='key' size=4 maxlength=3 value=''>\n";
		print "Name: <input type='text' name='name' size=20 maxlength=100 value=''>\n";
		print "<input type='hidden' name='tree' value='".$fmtree."'>\n";
		print "<input type='hidden' name='path' value='".$fmpath."'>\n";
		print "<input type=submit value='Save'>\n";
		print "</form>\n";
		print "</ul>\n";
	}
}

function subcount($fmtree, $thiskey)
{
	$query=$GLOBALS['db']->Execute("SELECT count(*) as count FROM ".PREFIX."facetmap WHERE fmtree='".linpha_addslashes($fmtree)."' AND fmkey LIKE '".linpha_addslashes($thiskey)."%'");
	$row=$query->FetchRow();
	$query->Close();
	return $row['count'];
}

$tree = (!isset($_GET['tree'])) ? '' : $_GET['tree'];
$path = (!isset($_GET['path'])) ? '' : $_GET['path'];
$key = (!isset($_GET['key'])) ? '' : $_GET['key'];

print "<style><!-- li {list-style-type: disc;} --></style>";

print "<b>Facetmap config</b>\n";

print "<ul>\n";
print "<li><a href='admin.php?page=facetmap&plugins=1&tree=location'><b>Location</b></a> (".subcount('location', '').")\n";
if ($tree == 'location')
	facetmap_generate_tree('location', $path, 0);

print "<li><a href='admin.php?page=facetmap&plugins=1&tree=imagetype'><b>Image Type</b></a>\n";
if ($tree == 'imagetype')
	facetmap_generate_tree('imagetype', $path, 0);

print "<li><b>Date</b>\n";
print "<br>The date facetmap is autgenerated based on image date.";
print "</ul>\n";

?>