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


/**
* get input files
*/
$select = $GLOBALS['db']->SelectLimit("SELECT ID, filename, prev_path FROM ".PREFIX."photos WHERE level = '0' ORDER by md5sum",20);	// order by md5sum to get as most different files as possible (compared to order by filename, prev_path, etc.)
while($data = $select->FetchRow())
{
	$options[$data[0]] = $data[2].'/'.$data[1];
}
asort($options);

/**
* if no input selected, take the first found in the database
*/
if(!isset($_GET['input'])) {
	list($key,$value) = each($options);
	$_GET['input'] = $key;
	reset($options);
}

/**
* set default quality
*/
(!isset($_GET['img_quality']) ? $_GET['img_quality'] = "75" : '');

/**
* calc image width and height, only for display
*/
list($org_width,$org_height,$org_type) = @linpha_getimagesize($options[$_GET['input']]);
$maxwidth = 430;

$array = scale_to_fit($org_height,$org_width,430,430,$no_increase=1);
$width = $array['w'];
$height = $array['h'];

/**
* build array with all available aligns
*/
$array_aligns = array("center"=>$wm_center,"north"=>$wm_north,"northeast"=>$wm_northeast,"northwest"=>$wm_northwest,
			"south"=>$wm_south,"southeast"=>$wm_southeast,"southwest"=>$wm_southwest,
			"east"=>$wm_east,"west"=>$wm_west);

/**
* build array with resize options
*/
$array_resize = array("no"=>$wm_disabled,80=>"80%",70=>"70%",60=>"60%",50=>"50%",40=>"40%",30=>"30%",25=>"25%", 20=>"20%",15=>"15%",10=>"10%",5=>"5%");

/*
		if(confirm('<?php echo $wm_save_note; ?>'))
		{

*/
?>
<script language="Javascript">
	function form_save()
	{
		if(document.getElementById("radio1").checked) {
			document.form_watermark.wm_active.value = 0;
		} else {
			document.form_watermark.wm_active.value = 1;
		}
		document.form_watermark.submit();
	}
	
	function set_image()
	{
		document.getElementById("radio2").checked = true;
		document.form_watermark.submit();
	}
</script>
<form name="form_setdefault" method="POST" action="<?php echo TOP_DIR; ?>/plugins/watermark/update_settings.php">
<input type="submit" name="submit3" value="<?php echo $wm_restore_to; ?> ">
<select name="setdefault">
	<option value="initial"><?php echo $wm_inital_settings; ?></option>
	<option value="settings1"><?php echo $wm_example; ?> 1</option>
	<option value="settings2"><?php echo $wm_example; ?> 2</option>
	<option value="settings3"><?php echo $wm_example; ?> 3</option>
</select>
<input type="hidden" name="cmd" value="setdefault">
<input type="hidden" name="input" value="<?php echo $_GET['input']; ?>">
<input type="hidden" name="img_quality" value="<?php echo $_GET['img_quality']; ?>">
</form>

<form name="form_watermark" action="<?php echo TOP_DIR; ?>/plugins/watermark/update_settings.php" method="POST">
<table width="100%">
<!-- Image //-->
	<tr>
		<td colspan="2" align="center" class="maintable">
			<?php echo $wm_image_quality; ?>: <input type="text" name="img_quality" value="<?php echo $_GET['img_quality']; ?>" size="5"><br/>
			<?php echo $wm_change_example_img; ?>:
<?php
			form_generate_select('input','1',' onchange="submit()" style="width:300px"',$_GET['input'],$options);
?>
			<br/><br>
<?php
			echo '<img width="'.$width.'" height="'.$height.'" src="get_thumbs_on_fly.php?'.
				'imgid='.$_GET['input'].'&use_wm=1'.
				'&nh='.$height.'&nw='.$width.'&quality='.$_GET['img_quality'].'">';
?>
			<br/><br/>
			<input type="hidden" name="cmd" value="preview">
			<input type="submit" name="submit1" value="<?php echo $wm_preview; ?>">
			<br/><br/>
		</td>
	</tr>
	<tr>
		<td class="maintable" colspan="2">

<!-- Disable //-->
			<input type='radio' id='radio1' name='wm_watermark' value='0'<?php echo ($wm_config['wm_watermark'] == 0 ? ' checked' : ''); ?>>
			<b><?php echo $wm_disable; ?></b><br/><hr>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2" class="maintable"><br/><b><?php echo $wm_settings_for_both; ?></b></td>
	</tr>
	<tr>
		<td class="maintable" style="width:150px"><?php echo $wm_align; ?>:</td>
		<td>
			<select name="wm_align"style="width:150px">
<?php
			foreach($array_aligns as $key=>$value)
			{
				echo "<option value='".$key."'".($key == $wm_config['wm_align'] ? ' selected' : '').">".$value."</option>\n";
			}
?>
			</select>
		</td>
	</tr>
	<tr>
		<td  class="maintable"><?php echo $wm_pos_hor; ?>:</td>
		<td  class="maintable">
			<input type="text" name="wm_horizontal" style="width:150px" value="<?php echo $wm_config['wm_horizontal']; ?>">
		</td>
	</tr>
	<tr>
		<td  class="maintable"><?php echo $wm_pos_ver; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_vertical" style="width:150px" value="<?php echo $wm_config['wm_vertical']; ?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_dissolve; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_dissolve" style="width:150px" value="<?php echo $wm_config['wm_dissolve']?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_resize; ?>:</td>
		<td class="maintable">
			<select name="wm_resize" style="width:150px">
<?php
			foreach($array_resize as $key=>$value)
			{
				echo "<option value='".$key."'".($key == $wm_config['wm_resize'] ? ' selected' : '').">".$value."</option>\n";
			}
?>
			</select>
		</td>
	</tr>


<!-- Enable Image //-->
	<tr>
		<td class="maintable" colspan="2">
			<br/><input type='radio' id='radio2' name='wm_watermark' value='2'<?php echo ($wm_config['wm_watermark'] == 2 ? ' checked' : '')?>>
			<b><?php echo $wm_enable_image?></b>
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_available_images?>:</td>
		<td class="maintable">
			<select name="wm_img_img" onchange="set_image()" style="width:150px">
<?php
			foreach(readfolder(TOP_DIR."/plugins/watermark/watermarks/", $wm_no_images_found, array("jpg", "gif", "png"), 1) as $key=>$value)
			{
				echo "<option value='".$key."'".($key == $wm_config['wm_img_img'] ? ' selected' : '').">".$value."</option>\n";
			}
?>
			</select>
			<?php putHelpButton('wm_addimg'); ?>
		</td>
	</tr>

<!-- Enable Text //-->
	<tr>
		<td class="maintable" colspan="2">
			<br/><input type='radio' name='wm_watermark' value='1'<?php echo ($wm_config['wm_watermark'] == 1 ? ' checked' : '')?>>
			<b><?php echo $wm_enable_text?></b>
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_text?>:</td>
		<td class="maintable">
			<input type="text" name="wm_text" style="width:150px" value="<?php echo $wm_config['wm_text']; ?>"> <?php echo $use_convert ? "('\\n' ".$wm_linebreak.")" : ''?>
		</td>
	</tr>
<?php
	if($use_convert) {
?>
		<tr>
			<td class="maintable"><?php echo $wm_font?>:</td>
			<td class="maintable">
				<select name="wm_font" style="width:150px">
<?php
				foreach(readfolder(TOP_DIR."/plugins/watermark/font/", "No fonts found", array("ttf"), 0) as $key=>$value)
				{
					echo "<option value='".$key."'".($value == $wm_config['wm_font'] ? ' selected' : '').">".ucfirst($value)."</option>\n";
				}
?>
				</select>
				<?php putHelpButton('wm_addfont'); ?>
			</td>
		</tr>
<?php
	} else {
?>
		<tr><td><input type="hidden" name="wm_font" value="no"></td><td></td></tr>
<?php
	}
?>
	<tr>
		<td class="maintable"><?php echo $wm_fontsize; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_fontsize" style="width:150px" value="<?php echo $wm_config['wm_fontsize']; ?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_fontcolor; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_fontcolor" style="width:150px" value="<?php echo $wm_config['wm_fontcolor']; ?>">
			<?php putHelpButton('wm_color'); ?>
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_height; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_height" style="width:150px" value="<?php echo $wm_config['wm_height']; ?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_width; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_width" style="width:150px" value="<?php echo $wm_config['wm_width']; ?>">
		</td>
	</tr>



<?php
	if($use_convert) {
?>
		<tr>
			<td class="maintable"><br/><?php echo $wm_enable_shadow; ?>:</td>
			<td class="maintable"><br/>
				<input type="radio" name="wm_enable_shadow" value="1" <?php echo ($wm_config['wm_enable_shadow']==1 ? ' checked' : ''); ?>>
			</td>
		</tr>
		<tr>
			<td class="maintable"><?php echo $wm_enable_ext_shadow; ?>:</td>
			<td class="maintable">
				<input type="radio" name="wm_enable_shadow" value="2" <?php echo ($wm_config['wm_enable_shadow']==2 ? ' checked' : ''); ?>>
			</td>
		</tr>
<?php
	} else {
?>
		<tr><td><input type="hidden" name="wm_enable_shadow" value="1"></td><td></td></tr>
<?php
	}
?>
	<tr>
		<td class="maintable"><?php echo $wm_shadow_size; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_shadow_size" style="width:150px" value="<?php echo $wm_config['wm_shadow_size']; ?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_shadow_fontsize; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_shadow_fontsize" style="width:150px" value="<?php echo $wm_config['wm_shadow_fontsize']; ?>">
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_shadow_color; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_shadow_color" style="width:150px" value="<?php echo $wm_config['wm_shadow_color']; ?>">
			<?php putHelpButton('wm_color'); ?>
		</td>
	</tr>
	<tr>
		<td class="maintable"><br/><?php echo $wm_enable_rectangle; ?>:</td>
		<td class="maintable"><br/>
			<input type="checkbox" name="wm_enable_rectangle" value="1" <?php echo ($wm_config['wm_enable_rectangle']==1 ? ' checked' : ''); ?>>
		</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo $wm_rectangle_color; ?>:</td>
		<td class="maintable">
			<input type="text" name="wm_rectangle_color" style="width:150px" value="<?php echo $wm_config['wm_rectangle_color']; ?>">
			<?php putHelpButton('wm_color'); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" class="maintable">
			<br/>
			<input type="submit" name="submit2" value="<?php echo $wm_preview; ?>">
			<input type="hidden" name="wm_active" value="<?php echo $wm_config['wm_active']; ?>">
			<input type="button" name="save_button" value="Save" onclick="form_save()">
		</td>
	</tr>
</table>
</form>