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


// get file info from id
$query=$GLOBALS['db']->Execute("SELECT prev_path, filename FROM ".PREFIX."photos ".
				"WHERE ID='".linpha_addslashes($_GET['imgid'])."'");
$result=$query->FetchRow(ADODB_FETCH_ASSOC);

list($org_width,$org_height,$org_type) = linpha_getimagesize("../".$result['prev_path']."/".$result['filename']);

if($_GET['wh']=="fullsize" OR !isset($_GET['wh']) OR $_GET['wh']==0 OR $_GET['wh']=='')
{
	$nw = $org_width;
	$nh = $org_height;
}
else
{
    $pos = strpos($_GET['wh'],'x');
    $nw = substr($_GET['wh'],0,$pos);
    $nh = substr($_GET['wh'],$pos+1);
}

html_header();
?>
<title><?php echo $head_title; ?> - LinPHA</title>
</head>
<body bgcolor='#000000'>
<table width='100%' border='0'>
	<tr>
		<td align='center'>
			<font color='#CCCCCC'>
			<b>
            <?php
            echo $result['filename']." @ ";
            print_resized_view($_GET['imgid'],$org_width,$org_height, 0);
            ?>
            - <a href='javascript:window.close()'><?php echo $close_win; ?></a>
            </b>
            </font>
		</td>
	</tr>
</table>
<table width='100%' border='0'>
	<tr>
		<td align='center'>
<?php
// browser can't display tiff and other special images, so prevent fullsize view and let convert/GD
// create jpegs instead 	'gif' => 1,	'jpg' => 2,	'jpeg' => 2,'png' => 3,

// do not run convert/GD if no watermark and fullsize (speed optimize)
if( $_GET['wh'] == 'fullsize' && $org_type <= 3
	&&  !need_watermark($_GET['imgid']) )
{
	$param = '&fullsize=1';
} else {
	$param = '';
}

echo "<img src='".TOP_DIR."/get_thumbs_on_fly.php?imgid=".$_GET['imgid']."&nw=".$nw.
	"&nh=".$nh.$param."' border='1' alt='".$result['filename']."'>";
?>

		</td>
	</tr>
</table>
</body>
</html>
