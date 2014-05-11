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

include_once(TOP_DIR.'/functions/functions.php');
start_timer("linpha");

/**
 * language file stuff
 */
	if(isset($_GET['language']))	// come from install pages
	{
		/**
		 * strict division from $_GET['language'] and include() !!!
		 * make sure we don't have a include($_GET['language']) !!!
		 */
		$array_langs = get_available_language_files();
		$key = array_search( $_GET['language'], $array_langs);
		if( $key === false )
		{
			$include_lang = 'English';
		}
		else
		{
			$include_lang = $array_langs[$key];
		}
	}
	elseif(isset($_POST['language']))
	{
		/**
		 * strict division from $_POST['language'] and include() !!!
		 * make sure we don't have a include($_POST['language']) !!!
		 */
		$array_langs = get_available_language_files();
		$key = array_search( $_POST['language'], $array_langs);
		if( $key === false )
		{
			$include_lang = 'English';
		}
		else
		{
			$include_lang = $array_langs[$key];
		}		
	}
	else
	{
		$include_lang = get_http_accept_lang();
	}
	
	if( file_exists(TOP_DIR.'/lang/lang.'.$include_lang.'.php') )
	{
		include_once(TOP_DIR.'/lang/lang.'.$include_lang.'.php');
	}
	else
	{
		include_once(TOP_DIR.'/lang/lang.English.php');
	}

/**
* security: if file sql/db_connect.php exists, abort installation
*/
if(file_exists(TOP_DIR.'/sql/db_connect.php'))
{
	echo $str_reinstall_remove_dbconnect;
	echo '<br /><br />';
	echo "<a class='linkbutton leftmenu' href='../index.php'>&nbsp;&lt;&lt;&nbsp;".
			STR_BACK."&nbsp;&lt;&lt;&nbsp;</a>";
	exit(1);
}

/**
 * workaround for used function in footer.php
 */
function read_plugins_config()
{
	return false;
}

html_header();
?>
<link rel='stylesheet' href='../styles/aqua.css' type='text/css'>
<title><?php echo $page_title; ?></title>
</head>

<body>
<table width='100%' cellspacing='0' style='height: 100%;'>
	<tr>
		<td class='blackline' colspan='3'></td>
	</tr>
	<tr>
		<td class='leftheader' height='66' rowspan='2' width='200'>
			<img src='../graphics/logo_aqua_header.jpg'>
		</td>
		<td class='mainheader' height='43'>
			<div class='maintitle'><?php echo $head_title; ?></div>
		</td>
		<td class='rightheader' height='43' width='30%'></td>
	</tr>
	<tr>
		<td class='mainmenu' height='10'><a href='../index.php'>Home</a></td>
		<td class='rightheaderlower' height='10' width='30%'></td>
	</tr>
	<tr>
		<td class='blackline' colspan='3'></td>
	</tr>
