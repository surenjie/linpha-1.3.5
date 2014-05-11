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

ini_set('include_path', TOP_DIR);
//include_once(TOP_DIR.'/functions/db_api.php');

?>
<h1><?php echo $href_stats; ?></h1><hr noshade>

<form name='realtime' action='<?php echo TOP_DIR; ?>/actions/submit_mod_data.php' method='POST'>

<table class='admintable' width='100%' cellspacing='0'>
	<th class='maintable' colspan='4'>
		<?php echo $href_stats; ?>
	</th>

	<?php
	/**
	* show enable disable cache radios
	*/
	print_radio($stats_realtime,'stats_realtime',read_config('stats_realtime'),$stats_realtime_info,'statscaching');

	if(!read_config('stats_realtime'))
	{
    	print_select($stats_cache_time,'stats_cache_time', read_config('stats_cache_time'),
		Array("1" => "1 hour", "3" => "3 hours", "6" => "6 hours", "12" =>"12 hours", "24" => "24 hours","48" =>"2 days", "168" => "1 week"),
		"$stats_cache_time_info",'statscaching', '120');
	}
	?>	
    <tr>
        <td class='admintable' colspan='4' align='center'>
			<input class="linkbutton" type="submit" name="submit" value="<?php echo $submit_button_folder; ?>">    
        </td>
    </tr>
	<input type=hidden name="action" value="statistics">
</table>
</form>
<br />

<?php
echo "<h1>".$dir_perms."</h1><hr noshade>";
echo "".$str_change_perm." ".$statistics." <br /><br />";

print_permissions('stats',TOP_DIR.'/admin.php?page=stats&amp;plugins=1');

?>


