<?php
/**
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

/**
* read config in db
*/
$rss_title = read_config("rss_title");
$rss_description = read_config("rss_description");
$rss_link = read_config("rss_link");
$rss_language = read_config("rss_language");
$rss_copyright = read_config("rss_copyright");
$rss_generic_title = read_config("rss_generic_title");

$rss_header = 'RSS Configurations';
$rss_option = 'RSS Options';
$rss_lbl_title = 'Title';
$rss_lbl_desc = 'Description';
$rss_lbl_lnk = 'Link';
$rss_lbl_lang = 'Language';
$rss_lbl_copy = 'Copyright';
$rss_last_mod = 'Last build date: ';
$rss_create_file = "Generate RSS";
$rss_preview_file = "Preview RSS";
$rss_lbl_gen_title="Generic Title";
?>
<h1>
<?php
    echo $rss_header;
?>
</h1>
<hr noshade>
<?php
function list_lang($rss_language){
	$label = array("Afrikaans", "Albanian", "Basque","Belarusian","Bulgarian","Catalan","Chinese (Simplified)","Chinese (Traditional)","Croatian","Czech","Danish","Dutch","English","Estonian","Faeroese","Finnish","French","Galician","Gaelic","German","Greek","Hawaiian","Hungarian","Icelandic","Indonesian","Irish","Italian","Japanese","Korean","Macedonian","Norwegian","Polish","Portuguese","Romanian","Russian","Serbian","Slovak","Slovenian","Spanish","Swedish","Turkish","Ukranian");
	
	$value=array("af","sq","eu","be","bg","ca","zh-cn","zh-tw","hr","cs","da","nl","en","et","fo","fi","fr","gl","gd","de","el","haw","hu","is","in","ga","it","ja","ko","mk","no","pl","pt","ro","ru","sr","sk","sl","es","sv","tr","uk");
	
	$select = "<OPTION VALUE=''>...</OPTION>";
	foreach($label as $key=>$language){
		if($value[$key]==$rss_language){
			$select.="<OPTION SELECTED VALUE='".$value[$key]."'>".$language."</OPTION>";
		} else {
			$select.="<OPTION VALUE='".$value[$key]."'>".$language."</OPTION>";
		}
	}
	return $select;
}



echo "<form name='rss' method='POST' action='actions/submit_mod_data.php'>
	<table class='admintable' width='100%' cellspacing='0'>
	<tr><th class='maintable' colspan='4'>$rss_option</th></tr>
	
	<tr> <td class='maintable'>$rss_lbl_title</td>
	<td class = 'maintable'>
	<input type='text' name='rss_title' value='".htmlspecialchars($rss_title,ENT_QUOTES)."' size='50'></td></tr>
	
	<tr> <td class='maintable'>$rss_lbl_desc</td>
	<td class = 'maintable'>
	<input type='text' name='rss_desc' value='".htmlspecialchars($rss_description,ENT_QUOTES)."' size='50'></td></tr>
	
	<tr> <td class='maintable'>$rss_lbl_lnk</td>
	<td class = 'maintable'>
	<input type='text' name='rss_link' value='".htmlspecialchars($rss_link,ENT_QUOTES)."' size='50'></td></tr>
	
	<tr> <td class='maintable'>$rss_lbl_lang</td>
	<td class = 'maintable'>";
echo "<SELECT NAME='rss_lang'>";
echo $opt=list_lang($rss_language);
echo "</SELECT></td></tr>";
	
echo "<tr> <td class='maintable'>$rss_lbl_copy</td>
	<td class = 'maintable'>
	<input type='text' name='rss_copyright' value='".htmlspecialchars($rss_copyright,ENT_QUOTES)."' size='50'></td></tr>
	
	<tr> <td class='maintable'>".htmlspecialchars($rss_lbl_gen_title,ENT_QUOTES)."</td>
	<td class = 'maintable'>
	<input type='text' name='rss_generic_title' value='".htmlspecialchars($rss_generic_title,ENT_QUOTES)."' size='50'></td></tr>";
	
	
	echo "<tr><td class='maintable' colspan='4' align='center'>".
		"<input type='hidden' name='action' value='rss_save_settings'>".
		"<input type='hidden' name='plugins' value='1'>".
		"<input type='hidden' name='page' value='RSS'>".
		"<input type='submit' value='$submit_button_folder'></td></tr>
	</table>
	</form>";

	echo "<br><hr noshade><br>
	<form name='rss' method='POST' action='actions/submit_mod_data.php'>
	<table width='100%' cellspacing='0'><tr>".
		"<td align='center'>".
		"<input type='hidden' name='action' value='generateRSS'>".
		"<input type='hidden' name='plugins' value='1'>".
		"<input type='hidden' name='page' value='RSS'>".
		"<input type='submit' value='$rss_create_file'>".
		"</td></form><form name='rss' method='POST' action='actions/submit_mod_data.php'>".
		"<td align='center'>".
		"<input type='hidden' name='action' value='previewRSS'>".
		"<input type='hidden' name='plugins' value='1'>".
		"<input type='hidden' name='page' value='RSS'>".
		"<input type='submit' value='$rss_preview_file'>".
		"</td></tr></table>".
	"<table width='100%' cellspacing='0'><tr><td align='center' class='adminpages'>".$rss_last_mod . date('r', read_config('rss_last_mod'))."</td></tr>" .
	"</table></form>";
	// If we asked to preview RSS, let's go
if(isset($_GET['redirector']) && $_GET['redirector']=="mod_pre_rss"){
	echo "<hr noshade>";
	include_once(TOP_DIR."/plugins/RSS/RSS.class.php");
	$rss = new RSS();
	if ($rss->items->itemNumber > 0){
		echo "<span class='thispage'>";
		echo $rss->displayXML();
		echo "</span>";	
	} else {
		echo "<font color='red'>".$rss_not_created."</font>";
	}
	unset($_GET['redirector']);
}
?>