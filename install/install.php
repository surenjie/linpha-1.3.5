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

include_once(TOP_DIR.'/install/install_header.php');

?>
<tr>
	<td width='200' valign='top' class='leftmenu'>
		<div class='leftmenuhead'>
			<?php echo $inst_msg."\n"; ?>
		</div>
		<br />
<?php

echo "<ul type='disc'>";

	print ("<li>$inst_status_1</li>
			<li>$inst_status_step1</li>
    		</ul></td>");

	print ("<td class='mainwindow' height='100%' colspan='3'>");
	print ("<blockquote><p><font face='Verdana, Arial, Helvetica, sans-serif' size='4' color='#000000'>");
	print ("<b><u>$welc_header</u></b></font>
			<font face='Verdana, Arial, Helvetica, sans-serif' size='2' color='#000000'><br>");
	print ("$welc_text<br>");

	/* test for sql (777) */
	$decperms = fileperms("../sql/");
	$octalperms = sprintf("%o",$decperms);
	$perms=(substr($octalperms,1));

	if($perms!="0777")
	{
		print("<font color='red'><b><br>$welc_hint<br>$welc_hint1<br></b></font>");
	}
	print("</font></p>");

	/* language stuff */
?>
	<script type="text/javascript" type='text/javascript'>
	<!--
	function jumpToURL(page, form)
	{
		var index = form.language.selectedIndex;
		var lang = form.language.options[index].value;
		window.location.href = page + "?language=" + lang;
	}
	-->
	</script>
<?php
	print("<br>Select language:");
	print("<form method=GET action=sec_stage_install.php>");
	
	form_generate_select('language', 1, "onChange=\"jumpToURL('install.php', this.form)\" style='width:200px'", $include_lang, get_available_language_files());
	
	
print("<p>");
	print("<input type=submit value=$next_button>");
	print("<input type=hidden name='page' value='check'>");
	print("</p>");
	print("</form>");
	

print ("<br>The LinPHA Developers</blockquote></td></tr>");

include_once(TOP_DIR.'/footer.php');

?>
