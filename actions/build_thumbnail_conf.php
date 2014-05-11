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

?>
<div align='center'>
	<h1><?php echo $href_other_conf; ?></h1>
</div>

<form name='create_form' action='<?php echo TOP_DIR; ?>/create_all_thumbs.php' method='POST'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr>
		<th class='maintable' colspan='4'>
			<?php
                echo $th_msg;
                putHelpButton('createthumbs');
            ?>
		</th>
	</tr>
    <tr>
        <td class='admintable'><strong><?php echo $directories; ?></strong></td>
        <td class='admintable'>
            <input type='radio' name='directories' value='nothing' /><?php echo $do_nothing; ?>
        </td>
        <td class='admintable'>
            <input type='radio' name='directories' value='create' checked='checked' /><?php echo $create; ?>
        </td>
        <td class='admintable'>
            <input type='radio' id='directories_recreate' name='directories' value='recreate' onChange='showWarning()' /><?php echo $recreate; ?>
            <script language="JavaScript" type='text/javascript'>
            function showWarning()
            {
                elem = document.getElementById('directories_recreate');
                if(elem.checked)
                {
                    alert('<?php
                    echo $str_warning.':\n';
                    echo '- '.$str_thumbnails_deleted.'\n';
                    echo '- '.$str_statistics_deleted;
                    ?>');
                }
            }
            </script>
        </td>
    </tr>
    <tr>
        <td class='admintable'><strong><?php echo $just_thumb_msg; ?></strong></td>
        <td class='admintable'>
            <input type='radio' name='thumbnails' value='nothing' /><?php echo $do_nothing; ?>
        </td>
        <td class='admintable'>
            <input type='radio' name='thumbnails' value='create' checked='checked' /><?php echo $create; ?>
        </td>
        <td class='admintable'>
            <input type='radio' name='thumbnails' value='recreate' /><?php echo $recreate; ?>
        </td>
    </tr>
    <tr>
        <td class='admintable'><strong>EXIF</strong></td>
        <?php
        if(read_config('exifinfo'))
        {
            ?>
            <td class='admintable'>
                <input type='radio' name='exif' value='nothing' /><?php echo $do_nothing; ?>
            </td>
            <td class='admintable'>
                <input type='radio' name='exif' value='create' checked='checked' /><?php echo $create; ?>
            </td>
            <td class='admintable'>
                <input type='radio' name='exif' value='recreate' /><?php echo $recreate; ?>

            </td>
            <?php
        }
        else
        {
            ?>
            <td class='admintable' colspan='3'>
                <?php echo $exif_disabled_in_conf; ?>
                <input type='hidden' name='exif' value='nothing' />
            </td> 
            <?php
        }
        ?>
    </tr>
    <tr>
        <td class='admintable'><strong>IPTC</strong></td>
        <?php
        if(read_config('iptcinfo'))
        {
            ?>
            <td class='admintable'>
                <input type='radio' name='iptc' value='nothing' /><?php echo $do_nothing; ?>
            </td>
            <td class='admintable'>
                <input type='radio' name='iptc' value='create' checked='checked' /><?php echo $create; ?>
            </td>
            <td class='admintable'>
                <input type='radio' name='iptc' value='recreate' /><?php echo $recreate; ?>
            </td>
            <?php
        }
        else
        {
            ?>
            <td class='admintable' colspan='3'>
                <?php echo $iptc_disabled_in_conf; ?>
                <input type='hidden' name='iptc' value='nothing' />
            </td> 
            <?php
        }
        ?>
    </tr>
    <tr>
    	<td class='admintable' colspan="4">
			<input type='checkbox' name='silent' value="1" checked>
			<?php echo $silent_mode; ?>
		</td>
    </tr>
    <tr>
    	<td class='admintable' colspan="4">
			<input type='checkbox' name='doubles' value="1" checked>
			<?php echo $find_duplicates; ?>
			&nbsp; &nbsp;
			<input type='checkbox' name='dropdoubles' value="1">
			<?php echo $drop_duplicates; ?>
		</td>
    </tr>	    	
    <tr>
        <td class='admintable' colspan='4' align='center'>
            <input type='submit' value='<?php echo $start_button; ?>'>
        </td>
    </tr>
</table>
</form>
