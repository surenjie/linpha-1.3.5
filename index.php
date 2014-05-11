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

if(!defined('TOP_DIR')) { define('TOP_DIR','.'); }

/**
* show install instructions if db_connect.php doesn't exists
*/
if(!file_exists(TOP_DIR.'/sql/db_connect.php')){
	include_once(TOP_DIR.'/docs/INSTALL.html');
	exit();}

include_once(TOP_DIR.'/header.php');

if(read_config('autoconf')):first_lev_funct(); endif;

include_once(TOP_DIR.'/include/left_menu.class.php');
?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo $album."\n"; ?>
			</div>
<?php
/**
 * show left menu
 */
$menu = new LeftMenuView();
$menu->buildMenu();
?>
		</td>
<?php
/*###################################
##change $welc_header and $index_welc_text vars in /lang/lang.YOURLANG.php!!!
###################################*/
?>
		<td class='index_site' style='vertical-align: top;' colspan='2'>
		    <br /><br />
		    <?php
		    if(!read_config('random_index_image'))
		    {
                echo '<br /><br /><br /><br />';
            }
            ?>
			<font size='4'>
				<b><u><?php echo ((!empty($_SESSION["user_fullname"])) 
                    ? $welc_msg." ".$_SESSION["user_fullname"]
                    : $welc_header); ?></u></b>
			</font><br />
			<?php
			/**
			* show last viewed page (referer)
			*/
			if(isset($show_ref) && isset($_POST['referer']))
			{
				$ref = base64_decode($_POST['referer']);
				echo "<br />".$str_last_viewed_page." <a href='".$ref."'>".$ref."</a><br />";
			}
			
			/**
			* show welcome text
			*/
			?>
			<font size='2'>
			<br />
			<?php echo $index_welc_text; ?>
			<b><u><?php echo @$welc_link; ?></u></b>
			</font>
			<?php

			/**
			 * Display random image or the nice linpha index logos :-)
			 */
			if(read_config('random_index_image'))
			{
			    print_random_image();
			}
			else
			{
			?>    
			    <br /><br />
			    <img src='<?php echo TOP_DIR.'/graphics/index_logo_'.$style.'.jpg'; ?>' border='0' alt='linpha logo'>
			    <?php
			}
			?>
		</td>
	</tr>
<?php
include_once(TOP_DIR.'/footer.php');
?>