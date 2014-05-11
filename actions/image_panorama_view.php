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

html_header();
?>
<title><?php echo $head_title; ?> - LinPHA</title>
</head>

<?php
$query=$GLOBALS['db']->Execute("SELECT prev_path, filename FROM ".PREFIX."photos ".
				"WHERE ID='".linpha_addslashes($_GET['imgid'])."'");
$album_info=$query->FetchRow(ADODB_FETCH_ASSOC);

$prev_path=$album_info['prev_path'];
$filename=$album_info['filename'];

/**
* some adjustements
*
* why do we do that..??
* switched to width=100% and height=50% because the width is too much sometimes and then
* you get scrollbars
*/
/*$applet_width = round($_GET['nw']/3);
$applet_height = round($_GET['nh']/3);*/

if(!isset($_GET['lower'])) {
	$param = '&fullsize=1&nw='.$_GET['nw'].'&nh='.$_GET['nh'];
} else {
	$param = '&nw='.$_GET['nw'].'&nh='.$_GET['nh'];
}
?>

<body>
<div align='center'>
<h2><?php echo $pano_view_of." ".$filename; ?></h2>
<font color='FF0000'><?php echo $nav_hint; ?></font><br />
<applet name='ptviewer' archive='../plugins/ptviewer/ptviewer.jar' code='ptviewer.class' width='100%' height='50%' mayscript='true'>
<script language='JavaScript' type='text/javascript'>
<?php /* hint from the author of ptviewer */ ?>
if (navigator.appName != 'Netscape') document.writeln("<PARAM name=maxarray value='40000000'>");
</script>

<param name=file	value='<?php
	/**
	* use file_download.php because we don't have direct access to the albums dir anymore (.htaccess)
	*/
	echo TOP_DIR.'/get_thumbs_on_fly.php?imgid='.$_GET['imgid'].$param;
?>'>
<param name='bgcolor'	value='000080'>
<param name='pan'		value='0'>
<param name='tilt'		value='0'>
<param name='fov'		value='90'>
<param name='fovmax'	value='120'>
<param name='fovmin'	value='20'>
<param name='auto'		value='0.5'>
</applet>
<br />
<a href='http://www.fh-furtwangen.de/~dersch/' target='_blank'>Powered by PTViewer</a>
<br /><br />
<?php
echo $str_try_a_lower_resolution.' ';
$nw = round($_GET['nw']/2);
$nh = round($_GET['nh']/2);
echo '<a href="image_panorama_view.php?imgid='.$_GET['imgid'].'&lower=1&nw='.$nw.'&nh='.$nh.'">';
echo '['.$nw.'x'.$nh.']';
echo '</a><br />';
echo '('.$str_current_resolution.' ['.$_GET['nw'].'x'.$_GET['nh'].'])';
?>
<br /><br />
<a href='javascript:window.close()'><?php echo $close_win; ?></a>
</div>
</body>
</html>