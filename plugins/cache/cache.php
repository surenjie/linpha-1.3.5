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

include_once(TOP_DIR.'/plugins/cache/func.cache.php');

$cache_path=read_config('cache_path');
$cache_size=read_config('cache_size');

/**
* cache maintainance
*/
if(isset($_GET['act']))
{
    switch($_GET['act'])
    {
    /**
    * cleanup removed ones
    */
    case "cleanup":
        $sum=photo_cache_cleanup_invalid($force=true);
        print "<div align='center'><h1>".$cache_opt_msg."<br></h1>($elements_rem: $sum)</div>";
    break;
    
    /**
    * cleanup by element size
    */
    case "cleanup_size":
        $sum=photo_cache_cleanup_by_imagesize($_GET['size']);
        print "<div align='center'><h1>".$cache_opt_msg."<br></h1>($elements_rem: $sum)</div>";
    break;
    
    /**
    * cleanup by element date
    */
    case "cleanup_date":
        $sum=photo_cache_cleanup_by_date($_GET['date']);
        print "<div align='center'><h1>".$cache_opt_msg."<br></h1>($elements_rem: $sum)</div>";
    break;

    /**
    * cleanup cached watermark images
    */
    case "watermark":
        print "<div align='center'><h1>".$cache_opt_msg."<br></h1></div>";
    break;
    }
}

/**
* settings table
*/
echo "<h1>LinPHA ".$lang_plugins['cache']."</h1>";

$cache_path = read_config('cache_path');	// $cache_path (without get_full_path()!! is later used again in the form)
if( !is_writable( get_full_path( $cache_path ) ) )
{
	echo "<h1><font color='red'>Error: Your cache directory isn't writable!!!</font></h1>";
	echo "Disable image cache plugin or change the cache directory to a valid path.<br /><br />";
}
?>

<hr noshade>
<form name='cache' method='POST' action='<?php echo TOP_DIR; ?>/actions/submit_mod_data.php'>
<table class='admintable' width='100%' cellspacing='0'>
    <tr>
        <th class='maintable' colspan='4'>
            <?php echo $cache_options; ?>
        </th>
    </tr>
    <tr>
        <td class='maintable'>
            <?php
            echo $cache_max_size." ";
            putHelpButton('cachesize');
            ?>
        </td>
        <td class='maintable'>
            <input type='text' name='cache_max_size' size='3' align='right' style='width: 150px;' value='<?php echo $cache_size; ?>'>
        </td>
    </tr>
    <tr>
        <td class='maintable'>
            <?php
            echo $path_2_cache." ";
            putHelpButton('cachepath');
            echo $general_rotate_info;
            ?>
        </td>
        <td class='maintable'>
            <input type='text' name='path_2_cache' size='15' align='right' style='width: 150px;' value='<?php echo $cache_path; ?>'>
        </td>
    </tr>
    <tr>
        <td class='maintable' colspan='4' align='center'>
            <input type='hidden' name='action' value='cache'>
            <input type='hidden' name='plugins' value='1'>
            <input type='hidden' name='page' value='cache'>
            <input type='submit' value='<?php echo $submit_button_folder; ?>'>
        </td>
    </tr>
</table>
</form>

<!-- cache maintainance table -->
<br /><br />
<table class='admintable' width='100%' cellspacing='0'>
    <tr>
        <th class='maintable' colspan='4'>
            <?php echo $cache_maintain; ?>
        </th>
    </tr>
    <tr>
        <td class='maintable'>
    	<form name='cache_opt_by_size' method='GET' action='<?php echo TOP_DIR; ?>/admin.php'>
            <?php echo $cache_optimize_by_size; ?>
        </td>
        <td class='maintable'>
            <input type='text' name='size' value='50'>
        </td>
        <td class='maintable' align='center'>
            <input type='submit' name='cache_optimize' value='<?php echo $optimize; ?>'>
            <input type='hidden' name='act' value='cleanup_size'>
            <input type='hidden' name='plugins' value='1'>
            <input type='hidden' name='page' value='cache'>
    	</form>
        </td>
    </tr>
    <tr>
        <td class='maintable'>
    	<form name='cache_opt_by_date' method='GET' action='<?php echo TOP_DIR; ?>/admin.php'>
            <?php echo $cache_optimize_by_date; ?>
        </td>
        <td class='maintable'>
            <input type='text' name='date' value='30'>
        </td>
        <td class='maintable' align='center'>
            <input type='submit' name='cache_optimize' value='<?php echo $optimize; ?>'>
            <input type='hidden' name='act' value='cleanup_date'>
            <input type='hidden' name='plugins' value='1'>
            <input type='hidden' name='page' value='cache'>
    	</form>
        </td>
    </tr>
    <tr>
        <td class='maintable'>
            <?php
            echo $cache_optimize." ";
            putHelpButton('cacheoptimize');
            ?>
        </td>
        <td class='maintable'>
        </td>
        <td class='maintable' align='center'>
            <form name='cache_reset' method='GET' action='<?php echo TOP_DIR; ?>/admin.php'>
            <input type='submit' name='cache_optimize' value='<?php echo $optimize; ?>'>
            <input type='hidden' name='act' value='cleanup'>
            <input type='hidden' name='plugins' value='1'>
            <input type='hidden' name='page' value='cache'>
            </form>
        </td>
    </tr>
    <?php
    if(read_plugins_config('watermark'))
    {
    ?>
        <tr>
            <td class='maintable'>
                <?php
                echo $str_delete_all_cached_images_with_watermarks;
                putHelpButton('wm_delete_all_cached_images');
                ?>
            </td>
            <td class='maintable'>&nbsp;
            </td>
            <td class='maintable' align='center'>
                <form name="form_delete_all_chached_images" method="POST" action="<?php echo TOP_DIR; ?>/plugins/watermark/update_settings.php">
                <input type="submit" name="submit4" value="<?php echo $optimize; ?> ">
                <input type="hidden" name="cmd" value="delete_all_cached_images">
                <input type="hidden" name="redirect2cache" value="1">
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<!-- create cached images -->
<br /><br />
<form name='create_cached_images' action='<?php echo TOP_DIR; ?>/plugins/cache/create_cached_images.php' method='POST'>
<table class='admintable' width='100%' cellspacing='0'>
    <tr>
        <th class='maintable' colspan='3'>
            <?php echo "$str_create_cache_img"; ?>
        </th>
    </tr>
    <tr>
        <td width='33%' class='maintable'>&nbsp;</td>
        <td width='34%' class='maintable' align='center'>
            <?php
            build_album_select($with_all_albs_entry=false);
            ?>
        </td>
        <td width='33%' class='maintable'>
            <?php
            if(read_plugins_config('watermark'))
            {
                ?>
                <input type='checkbox' name="no_watermarks" value="1" checked='true'><?php echo "$str_no_watermarks"; ?><br />
                <input type='checkbox' name="with_watermarks" value="1" checked='true'><?php echo "$str_with_watermarks"; ?>
                <?php
            }
            else
            {
                echo '<input type="hidden" name="no_watermarks" value="1">';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td class='maintable' colspan='3' align='center'>
            <input type='hidden' name='action' value='create_cached_images'>
            <input type='submit' value='<?php echo $submit_button_folder; ?>'>
        </td>
    </tr>
</table>
</form>

<!-- cache stats table -->
<br /><br />
<table class='admintable' width='100%' cellspacing='0'>
<?php show_cache_stats(count_pictures()); ?>
</table>
