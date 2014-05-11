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
include_once(language_file());

basket_check_permissions('basket_print');

html_header();
?>
<title><?php echo $head_title; ?> - LinPHA</title>
<style>
.break {
	page-break-before: always;
}
</style>
</head>

<body bgcolor='#FFFFFF'>

<?php

// no images selected
if(! isset($_POST['img_id']))
{
	print("<h1>$print_error</h1>");
} else {

	// 2 photos/page (10x15cm)
	$printsettings[2]['w'] = 425;
	$printsettings[2]['h'] = 319;
	$printsettings[2]['show_filenames'] = 0;
	$printsettings[2]['cols'] = 1;
	$printsettings[2]['rows_per_page'] = 2;
	
	// 4 photos/page (9x13cm)
	$printsettings[4]['w'] = 277;
	$printsettings[4]['h'] = 369;
	$printsettings[4]['show_filenames'] = 0;
	$printsettings[4]['cols'] = 2;
	$printsettings[4]['rows_per_page'] = 2;
	
	// 8 photos/page (6,5x9cm)
	$printsettings[8]['w'] = 235;
	$printsettings[8]['h'] = 180;
	$printsettings[8]['show_filenames'] = 0;
	$printsettings[8]['cols'] = 2;
	$printsettings[8]['rows_per_page'] = 4;
	
	// 16 photos/page (4,5x6,5cm)
	$printsettings[16]['w'] = 136;
	$printsettings[16]['h'] = 180;
	$printsettings[16]['show_filenames'] = 0;
	$printsettings[16]['cols'] = 4;
	$printsettings[16]['rows_per_page'] = 4;
	
	// photo index 
	$printsettings[28]['w'] = 120;
	$printsettings[28]['h'] = 90;
	$printsettings[28]['show_filenames'] = 1;
	$printsettings[28]['cols'] = 4;
	$printsettings[28]['rows_per_page'] = 7;
	
	$print_h = $printsettings[$_POST['images']]['h'];
	$print_w = $printsettings[$_POST['images']]['w'];
	
	// create table
	print("<table border='1' align='center' cellspacing='0' cellpadding='0'>");
	print("<tr>\n");
	
	$row_counter = 0;
	$col_counter = 0;
	
	// read array with images to print
	while(list($key, $image_id) = each($_POST['img_id']))
	{
		/**
		* just ignore videos (level = '0')
		*/
/*		$query_img_info = $GLOBALS['db']->Execute("SELECT name, filename, prev_path, level, id FROM ".PREFIX."photos WHERE ID='".$image_id."' AND level = '0'");
		$query_img_info = $GLOBALS['db']->Execute("SELECT ".P.".filename, ".P.".prev_path, ".P.".id ".
			"FROM ".P.", ".PREFIX."first_lev_album ".
			"WHERE ".P.".id='".$image_id."' AND ".P.".level = '0'");*/
		$sql = sql_query_str(
			array('filename','prev_path','id'),
			P.".id='".linpha_addslashes($image_id)."' AND ".P.".level = '0'",
			$order_by='',
			$additional_tables=Array()
			);
		$query_img_info = $GLOBALS['db']->Execute($sql);
		if($query_img_info->RecordCount()==1)
		{
			$image_data = $query_img_info->FetchRow(ADODB_FETCH_ASSOC);
			$col_counter++;
		
			//## orientation stuff
			list($org_width,$org_height,$org_type) = linpha_getimagesize("../".$image_data['prev_path']."/".$image_data['filename']);
	
			// need rotate?
	
			$array = scale_to_fit($org_height,$org_width,$print_h,$print_w,0);
			$unrotated_surface = $array['w'] * $array['h'];
	
			$array = scale_to_fit($org_width,$org_height,$print_h,$print_w,0);
			$rotated_surface = $array['w'] * $array['h'];
			
			if($rotated_surface > $unrotated_surface)	// which surface is bigger?
			{
				$rotate = true;
				
				// flip width and height because of rotation
				$rotated_width = $org_height;
				$rotated_height = $org_width;
			} else{
				$rotate = false;
				$rotated_width = $org_width;
				$rotated_height = $org_height;
			}
	
			$array = scale_to_fit($rotated_height,$rotated_width,$print_h,$print_w,0);
			$img_w = $array['w'];
			$img_h = $array['h'];
	
		
			if($_POST['l_or_h_quality'] == 'h')
			{
				$nh = $org_height;
				$nw = $org_width;
			} else {
				$nh = $img_h;
				$nw = $img_w;
			}
			
			// on rotate, we have to flip $nw and $nh
			if($rotate) {
				$tmp = $nh;
				$nh = $nw;
				$nw = $tmp;
				unset($tmp);
			}
	
			//## thumbnail
			print("<td width='".$print_w."' height='".$print_h."'>");
			print("<img width='".$img_w."' height='".$img_h."' ".
					"src='".TOP_DIR."/get_thumbs_on_fly.php?".
					"imgid=".$image_data['id']."&".
					"nw=".$nw."&".
					"nh=".$nh."&".
					($_POST['l_or_h_quality'] == 'h' ? "quality=80&" : '').	// if high quality selected, set quality to 80 (anything higher than 80 isn't meaningful), if low quality selected, no quality is given, and so get_thumbs_on_fly.php takes the default quality
					"rotate=".$rotate."'>");
	
			if($printsettings[$_POST['images']]['show_filenames']) {
				echo "<br/><font size='-1'>";
	
				/*if(strlen($image_data['filename'])>=15) {	// cut filenames longer than 15 characters
					$image_data[1]=substr_replace($image_data['filename'], '...', 13);
				}*/
				echo cut_string($image_data['filename'],15,0);
				echo "</font>";
			}
			
			
			print("</td>");
	
	
			// row break
			if($col_counter == $printsettings[$_POST['images']]['cols'])
			{
				print("</tr><tr>");
				$col_counter = 0;
				$row_counter++;
			}
		
		
			// pagebreak after x rows
			if($row_counter == $printsettings[$_POST['images']]['rows_per_page']) {
				print("\n</tr></table>\n<DIV CLASS='break'></DIV>\n\n");
				print("<table border='1' align='center'cellspacing='0' cellpadding='0'><tr>");
				$row_counter = 0;
				$col_counter = 0;
			}
	
			echo "\n";
		}
	}
	echo '</tr></table></body></html>';
}
?>