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

echo "<h1>".$dir_perms."</h1><hr noshade>";
echo $str_change_perm.'<br />';

echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=download">'.$str_download_images.'</a>';
echo '<br />';

echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=img_comments">'.$str_add_image_comments.'</a>';
echo '<br />';

echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=img_description">'.$str_add_image_description.'</a>';
echo '<br />';
echo '<br />';

echo "$str_basket".":<br />";
echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=basket_print">'.$menumsg['printmode'].'</a>';
echo '<br />';

echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=basket_download">'.$menumsg['downloadmode'].'</a>';
echo '<br />';

echo '- <a href="'.TOP_DIR.'/admin.php?page=perms&amp;edit=basket_mail">'.$menumsg['mailmode'].'</a>';
echo '<br /><br />';

echo $lang_plugins['plugins'].":<br />";
if(read_plugins_config('watermark'))
{
    echo '- <a href="'.TOP_DIR.'/admin.php?plugins=1&amp;page=watermark&amp;cmd=perm">' .
    	''.$lang_plugins['watermark'].'</a>';
    echo '<br />';
}

if(read_plugins_config('stats'))
{
    echo '- <a href="'.TOP_DIR.'/admin.php?plugins=1&amp;page=perms&amp;edit=stats">' .
    	''.$lang_plugins['stats'].'</a>';
	echo '<br />';
}

echo '<br /><br />';
echo '<hr noshade>';

if(isset($_GET['edit']))
{
    echo '<h1>';
    switch($_GET['edit'])
    {
		case 'download': echo $str_download_images; putHelpButton('anondown'); break;
		case 'post': echo $str_post_comments; putHelpButton('anonpost'); break;
		case 'basket_print': echo $menumsg['printmode']; putHelpButton('printing'); break;
        case 'basket_download': echo $menumsg['downloadmode']; putHelpButton('anonalbdown'); break;
		case 'basket_mail': echo $menumsg['mailmode']; putHelpButton('mail_mode_anon'); break;
		case 'stats': echo $lang_plugins['stats']; putHelpButton('stats'); break;
		case 'img_comments': echo $str_add_image_comments; putHelpButton('anonpost'); break;
		case 'img_description': echo $str_add_image_description; break;
    }
    echo '</h1><br />';
    print_permissions($_GET['edit'],TOP_DIR.'/admin.php?page=perms&amp;edit='.$_GET['edit']);
}
?>