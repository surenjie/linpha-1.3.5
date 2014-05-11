<?php
/**
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

include_once(TOP_DIR.'/plugins/watermark/func.watermark.php');

/**
* redirector message for restore settings
*/
if(isset($_GET['red']))
{
   	echo $wm_restore_to."... ";
	echo $_GET['red'].'<br/>';
}

/**
* read config in db
*/
$wm_config = read_watermark();
$use_convert = read_config("use_convert");
?>
<h1>
<?php
    echo $wm_wm_man;
    if(isset($_GET['cmd']))
    {
        echo " - ";
        switch($_GET['cmd'])
        {
            case 'edit':    echo $str_edit_watermark; break;
            case 'perm':    echo $str_edit_permissions; break;
        }
    }
    
?>
</h1>
<hr noshade>
<?php
echo $wm_status.': <b>'.($wm_config['wm_active']==1 ? $wm_enabled : $wm_disabled).'</b>';
?>
<br /><br /><?php echo $wm_help_and_descr.': '; putHelpButton('watermark'); ?><br /><br />
<b>:: <a href="<?php echo TOP_DIR; ?>/admin.php?plugins=1&page=watermark&cmd=edit"><?php echo $str_edit_watermark; ?></a> ::</b>
<b>:: <a href="<?php echo TOP_DIR; ?>/admin.php?plugins=1&page=watermark&cmd=perm"><?php echo $str_edit_permissions; ?></a> ::</b>
<br /><hr />
<?php

if(isset($_GET['cmd']))
{
    switch($_GET['cmd'])
    {
        case 'edit':
            include_once(TOP_DIR.'/plugins/watermark/edit_watermark.php');
        break;
        case 'perm':
            echo $str_watermark_perm_part1."<br /><br />";
            echo $str_watermark_perm_part2." ";
            echo $str_watermark_perm_part3."<br /><br />";
            print_permissions('watermark',TOP_DIR.'/admin.php?plugins=1&page=watermark&cmd=perm');
        break;
    }
}
else
{
    if(read_plugins_config('cache'))
    {
    	?>
    	<form name="form_delete_all_chached_images" method="POST" action="<?php echo TOP_DIR; ?>/plugins/watermark/update_settings.php">
    	<input type="submit" name="submit4" value="<?php echo $str_delete_all_cached_images_with_watermarks; ?> ">
    	<?php putHelpButton('wm_delete_all_cached_images'); ?>
    	<input type="hidden" name="cmd" value="delete_all_cached_images">
    	</form>
    	<?php
    }
}

?>