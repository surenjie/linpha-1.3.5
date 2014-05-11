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

$rows_page=read_config('gb_max_pages');
$anon_posts=read_config('gb_anon_posts');
$bl_filter=read_config('blacklist_guestbook');
$posts_order=read_config('gb_posts_order');
$query = $GLOBALS['db']->Execute("SELECT value FROM ".PREFIX."blacklist WHERE action= 'guestbook'");
$blacklistet_words = $query->FetchRow();

($anon_posts) ? $post_on='checked' : $post_off='checked';
($bl_filter) ? $bl_on='checked' : $bl_off='checked';

echo "<h1>$gb_header</h1><hr noshade>
<form name='guestbook' method='POST' action='actions/submit_mod_data.php'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr><th class='maintable' colspan='4'>$gb_opts</th></tr>
	<tr><td class='maintable'>$gb_rows</td>
		<td class='maintable'>
		<input type='text' name='gb_max_pages' size='3' align='right' style='width: 100px;' value='$rows_page'>
		</td></tr>
	<tr><td class='maintable'>$gb_anon</td>
		<td class='maintable'>
		$button_on_msg<input type='radio' name='anon_posts_on_off' ".@$post_on." value='1'>
		$button_off_msg<input type='radio' name='anon_posts_on_off' ".@$post_off." value='0'>
		</td></tr>
	<tr><td class='maintable'>$gb_order</td>
	<td class='maintable'>";
	form_generate_select("gb_posts_order","1"," style='width:100'",$posts_order,
	array('DESC' => "$thumb_order_date &darr;", 'ASC' => "$thumb_order_date &uarr;"));
	echo "</td></tr>";

	echo "<tr><td class='maintable' colspan='4' align='center'>".
		"<input type='hidden' name='action' value='guestbook'>".
		"<input type='hidden' name='plugins' value='1'>".
		"<input type='hidden' name='page' value='guestbook'>".
		"<input type='submit' value='$submit_button_folder'>
</table>
</form>
<br/>
<br/>
<form name='blacklist_gb' method='POST' action='actions/submit_mod_data.php'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr><th class='maintable' colspan='4'>$blacklist_opts</th></tr>
	<tr><td class='maintable'>$blacklist_onoff</td>
		<td class='maintable'>
		$button_on_msg<input type='radio' name='bl_on_off' ".@$bl_on." value='1'>
		$button_off_msg<input type='radio' name='bl_on_off' ".@$bl_off." value='0'>
		</td></tr>";
	if($bl_filter)
	{
	$number_of_spams = read_config('SPAM_attacks');
	
	echo "<tr><td class='maintable'>$blacklist_keywords</td>
	<td class='maintable'>
		<textarea name='bl_keywords' style='width: 400px; height:100px;'>$blacklistet_words[0]</textarea>
	</td></tr>
	<tr><td class='maintable' colspan='4'>$spam_blocked: <strong>$number_of_spams</strong></td>
	</td></tr>";
	}
	echo "<tr><td class='maintable' colspan='4' align='center'>".
		"<input type='hidden' name='action' value='blacklist_gb'>".
		"<input type='hidden' name='plugins' value='1'>".
		"<input type='hidden' name='page' value='guestbook'>".
		"<input type='hidden' name='blacklist' value='1'>".
		"<input type='submit' value='$submit_button_folder'>
</table>
</form>

";

?>

