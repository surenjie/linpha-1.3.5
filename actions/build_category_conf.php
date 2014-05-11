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

/*##############################################
# category page
##############################################*/
//print "<div align='center'><h1>$href_other_conf</h1></div>";

$query=$GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."category ORDER BY name");

print("<table class='admintable' width='100%' cellspacing='1' border='0'>");
print("<tr><th class='maintable' COLSPAN='6' style='height: 25px;'>$href_category_conf</th></tr>");
print("<tr><td class='admintable'><b>$cat_name_header</b></td>".
				"<td class='admintable'><b>$cat_private</b></td>".
				"<td class='admintable' colspan='2'><b>$action</b></td>");
print "<td class='admintable' align='center' width='20'>"; putHelpButton('catmod');
print "</td></tr>";

while($catinfo=$query->FetchRow())
{
	($catinfo[2]) ? $checked="checked" : $checked="";
	/* mod/delete category table */
	print "<form name=mod_category method=POST action=actions/submit_mod_data.php>";
	print "<tr><td class='admintable'><input type='text' name='cat_name' size='30' maxlength='35' value='".$catinfo[1]."'></td>".
		"<td class='admintable'><input type='checkbox' name='private_category' $checked></td>".
		"<td class='admintable'><input type=submit value='".$submit_button_mod_cat."'></td>".
		"<input type=hidden name=id value=".$catinfo[0].">".
		"<input type='hidden' name='action' value='category'></form>".
		"<form name=del_user method=POST action=actions/delete_data.php>".
		"<td class='admintable'>".
		"<input type='hidden' name='action' value='category'>".
		"<input type=submit value=".$submit_button_delete." onclick=\"return confirm('".$category_delete_warning."');\">".
		"<input type=hidden name=id value=$catinfo[0]></td></tr></form>";
}

/* add new category table */
print "<form name=new_category method=POST action=actions/submit_new_data.php>";
print "<tr><td class='adminalternate'><input type='text' name='new_category_name' size=30 maxlength=35></td>".
		"<td class='adminalternate'><input type='checkbox' name='private_category'></td>".
		"<td class='adminalternate' colspan='2'><input type=submit value='$submit_button_new_cat'></td>";
print "<td class='adminalternate' align='center' width='20'>"; putHelpButton('catnew');
print "<input type='hidden' name='action' value='category'></td></tr>";
print "</form></table><br>";
?>
