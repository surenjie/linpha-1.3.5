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

global $images_page, $indexprint, $print_low_quality, $print_high_quality, $print_button, $note;
?>
<script language='JavaScript' type='text/javascript'>
function update_quality_settings()
{
	switch(document.print_selected.images.value)
	{
		case '2':
			document.print_selected.l_or_h_quality.selectedIndex = '1';
		break;
		case '4':
		break;
		case '8':
		break;
		case '16':
			document.print_selected.l_or_h_quality.selectedIndex = '0';
		break;
		case '28':
			document.print_selected.l_or_h_quality.selectedIndex = '0';

			checkflag = 0;
			document.print_selected.button_check_all.value = check_all();
		break;
	}
}
</script>
<form name='print_selected' action='<?php echo TOP_DIR; ?>/actions/basket_build_print.php' method='POST' target='_blank'>
<br/><select name='images' size='1' onchange="update_quality_settings()">
	<option value='2'>2 <?php echo $images_page; ?></option>
	<option value='4' selected>4 <?php echo $images_page; ?></option>
	<option value='8'>8 <?php echo $images_page; ?></option>
	<option value='16'>16 <?php echo $images_page; ?></option>
	<option value='28'><?php echo $indexprint; ?></option>
</select>
<br/><br/>
<select name='l_or_h_quality'>
	<option value='l'><?php echo $print_low_quality; ?></option>
	<option value='h'><?php echo $print_high_quality; ?></option>
</select>
<br/><br/>
<input type='submit' value='<?php echo $print_button; ?>'>
<br /><hr />
<?php echo $note; ?>