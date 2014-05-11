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

if(!defined('TOP_DIR')) { define('TOP_DIR','../..'); }
ini_set('include_path', TOP_DIR);	// set in include path because in db_connect.php isn't TOP_DIR used to include adodb.inc.php!

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/plugins/facetmap/functions.php');

$fmlocation = isset($_GET['fmlocation']) ? $_GET['fmlocation'] : "";
$fmtype = isset($_GET['fmtype']) ? $_GET['fmtype'] : "";

include_once(TOP_DIR.'/include/img_view.class.php');
$img_view = new ImgView();
$img_view->setMode('facet_map');
$img_view->setLinkAdress(TOP_DIR.'/plugins/facetmap/browse_album.php?fmlocation='.$fmlocation.'&fmtype='.$fmtype);
$img_view->setDefaultView('normal');
$img_view->setDefaultOrder(read_config('sort_thumbs'));

$fmlocationwhere = ($fmlocation == 'none') ? P.".fmkey_location = ''" : P.".fmkey_location LIKE '".linpha_addslashes($fmlocation)."%'";
$fmtypewhere = ($fmtype == 'none') ? P.".fmkey_type = ''" : P.".fmkey_type LIKE '".linpha_addslashes($fmtype)."%'";
$img_view->setSql(''," FROM ".PREFIX."first_lev_album, ".P." WHERE ".$fmlocationwhere." AND ".$fmtypewhere." AND ");


if($show_header)
{
	include_once(TOP_DIR.'/header.php');
}

if(!isset($_GET['imgid']))
{

/*###############################################
## create left menu
## FACET MAP 
###############################################*/

	$pathsize = ($fmlocation == '') ? 3 : strlen($fmlocation) + 4;
	$fmlocation_where = ($pathsize == 3) ? $fmlocation : $fmlocation.".";

	echo "<tr valign='top'><td width='200' class='leftmenu'>";

	print "<div style='font-weight: normal; font-size: 8pt;'>";
	print "<br><center><b>FacetMap</b></center><p>";
	print "<div>Current selection:</div>";
	print "<div style='margin-left: 8px; font-size: 7pt;'>";
	print facetmap_categories('location',$fmlocation,"The World",TOP_DIR."/plugins/facetmap/browse_album.php?fmtype=".$fmtype."&fmlocation=")."</div>";
	print "<div style='margin-left: 8px; font-size: 7pt;'>";
	print facetmap_categories('imagetype',$fmtype,"All types",TOP_DIR."/plugins/facetmap/browse_album.php?fmlocation=".$fmlocation."&fmtype=")."</div><p>";

	print "<div>Location:</div>";
	print "<div style='margin-left: 8px; font-size: 7pt;'>";
$xxx = ($fmtype == 'none') ? PREFIX."photos.fmkey_type = ''" : PREFIX."photos.fmkey_type LIKE '".linpha_addslashes($fmtype)."%'";
	fm_print_menu('location',$fmlocation,PREFIX."photos.fmkey_location",$xxx,TOP_DIR."/plugins/facetmap/browse_album.php?fmtype=".$fmtype."&fmlocation=");
	print "</div>";

	print "<p>";
	print "<div>Image Type:</div>";
	print "<div style='margin-left: 8px; font-size: 7pt;'>";
$xxx = ($fmlocation == 'none') ? PREFIX."photos.fmkey_location = ''" : PREFIX."photos.fmkey_location LIKE '".linpha_addslashes($fmlocation)."%'";
	fm_print_menu('imagetype',$fmtype,PREFIX."photos.fmkey_type",$xxx,TOP_DIR."/plugins/facetmap/browse_album.php?fmlocation=".$fmlocation."&fmtype=");
	print "</div>";

	print "<p>";
	print "Date:";
	print "</div>";

	echo("</td>");

/*#############################################
## main view table cell
#############################################*/
?>
		<td class='mainwindow' colspan='2'>
<?php
	$img_view->setPageRegister();
	$img_view->printThumbnails($img_th." ".$in_th." Location: ".facetmap_categories('location',$fmlocation,"The World",""));
?>
		</td>
	</tr>
<?php
}
else
{
	$img_view->printImage();
}

if($show_header)
{
	include_once(TOP_DIR.'/footer.php');
}
?>
