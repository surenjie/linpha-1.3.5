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

/**
* linpha photo benchmark
* @author  flo
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

class benchmark {
	var $startq;
	var $maxq;
	var $addq;
	var $starth;
	var $maxh;
	var $addh;
	var $src_id;
	var $src_file;
	var $tmp_file;
	var $error;
	var $number_images;
	var $img_relation;
	var $array_timer;
	var $array_sizes;
	var $repetition;
	var $use_what;
	
/**
* konstruktor
*/
function benchmark()
{
}

function init()
{
	$this->set_variables();
	$this->check_variables();
	$this->set_img_relation();
	$this->set_tmp_file();
	$this->calc_total_images();
}

function set_variables()
{
	$this->startq = $_POST['startq'];
	$this->maxq = $_POST['maxq'];
	$this->addq = $_POST['addq'];
	$this->starth = $_POST['starth'];
	$this->maxh = $_POST['maxh'];
	$this->addh = $_POST['addh'];
	$this->repetition = $_POST['repetition'];
	$this->use_what = $_POST['use_what'];
	$this->error = '';
	
	// get src_file
	$this->src_id = $_POST['src_id'];
	$select = $GLOBALS['db']->Execute("SELECT prev_path, filename FROM ".PREFIX."photos WHERE ID = '".linpha_addslashes($this->src_id)."'");
	$data = $select->FetchRow();
	$this->src_file = $data[0].'/'.$data[1];
}

function check_variables()
{
	global $bm_notfound_err, $bm_file_err, $bm_var_err;

	if($this->src_file=="") {
		$this->error = $bm_file_err;
	} else {
		if(strpos($this->src_file, "../") !== false) {
			$this->error = "hacking is fun, isn't it ;-)";
		} else {
			if((!($this->startq > 0)) OR (!($this->starth > 0)) OR (!($this->maxq > $this->startq)) OR (!($this->maxh > $this->starth)) OR (!($this->addq > 0)) OR (!($this->addh > 0)) OR (!($this->repetition > 0))) {
				$this->error = $bm_var_err;
			} else {
				if(!file_exists($this->src_file)) {
					$this->error = $bm_notfound_err;
				}
			}
		}
	}
	
	if($this->error!="") {
		echo $this->error;
		include_once(TOP_DIR.'/footer.php');
		exit();
	}
}
	
function set_img_relation()
{
	list($org_width,$org_height,$org_type) = linpha_getimagesize($this->src_file);
	if($org_type=="") {
		$this->error = "$bm_noimg_err";
	} else {
		$this->img_relation = $org_width/$org_height;
	}

	if($this->error!="") {
		echo $this->error;
		include_once(TOP_DIR.'/footer.php');
		exit();
	}
}
	
function set_tmp_file()
{
	/* stuff for open_basedir safe_mode restrictions
	not need anymore because we use now a the linpha tmp dir linpha/sql/tmp by default!
	global $restricted;
	$basedir_name=ini_get("open_basedir");
	if(!empty($basedir_name) || ini_get('safe_mode'))
	{
		$restricted=true;
		ob_start();
		$tmp_file_org = @ob_get_contents(basename($this->src_file));
		$this->tmp_file=$tmp_file_org."jpg";
	} else {
		// get tmp file name
		$tmp_file_org = tempnam ("/tmp", basename($this->src_file));
	}*/
	
	$tmp_file_org = linpha_tempnam(basename($this->src_file),'.jpg');
	if($tmp_file_org=="") {
		$this->error = "$bm_tmpfile_err";
	}
	
	$this->tmp_file=$tmp_file_org;
	
	/* else {
		$this->tmp_file=$tmp_file_org.".jpg";
		if(!@unlink("$tmp_file_org")) {
			echo "$bm_tmpfile_warn"; // no error, just a warning
		}
	}*/
	if($this->error!="") {
		echo $this->error;
		include_once(TOP_DIR.'/footer.php');
		exit();
	}
}
	
function calc_total_images()
{
	for($q = $this->startq, $n = 0; $q <= $this->maxq; $q+=$this->addq) {
		for($h = $this->starth; $h <= $this->maxh; $h += $this->addh, $n++) {
		}
	}
	$this->number_images = $n;
}


function run_benchmark()
{
	global $bm_inloop;
	//global $restricted;
	$rotate = '';
	$watermark = '';
	$border = '';
	
	for($i=1;$i<=$this->repetition;$i++) {
	echo "$bm_inloop $i of $this->repetition #";
	echo "#";
	ob_flush();
	flush();
		for($q = $this->startq, $n = 1; $q <= $this->maxq; $q+=$this->addq) {
			echo "#";
			ob_flush();
			flush();
			for($h = $this->starth; $h <= $this->maxh; $h += $this->addh, $n++) {

				$w = round($h*$this->img_relation,0);	// calc width and round it to an integer
				echo "#";
				ob_flush();
				flush();
				start_timer("bench");
                /**
                 * warning: session will be closed!
                 */
				convert_image($this->src_file, $this->tmp_file, $q, $h, $w, $rotate, $watermark, $this->use_what/*, $border*/);
				$this->array_timer[$q][$h][$i] = stop_timer("bench");
				$this->array_sizes[$q][$h] = @filesize($this->tmp_file);
				//(!$restricted) ? unlink($this->tmp_file) :'';
				unlink($this->tmp_file);
			}
		}
	echo "<br>";
	}
}

function print_benchmark_results()
{
	global $bm_time_total, $bm_img_sec, $bm_avg_img, $bm_qual_size, $bm_quality, $bm_height, $bm_width, $bm_size, $bm_interval;
	global $thumb_order_file, $bm_qual_range, $bm_repeats, $bm_con_util, $bm_preview, $bm_save_settings;
	
	$sum = multi_array_sum($this->array_timer);
?>
	<br/>
	<?php echo "$bm_time_total $sum"; ?> sec<br/>
	<?php echo "$bm_img_sec ".round($this->number_images/$sum*$this->repetition,3)." "; ?>

	<script language="JavaScript" type='text/javascript'>
		function changesrc(q, h, w, s)
		{
			document.main_image.src = 'get_thumbs_on_fly.php?'+
				'type=<?php echo ($this->use_what); ?>'+
				'&quality='+q+
				'&nw='+w+
				'&nh='+h+
				'&imgid=<?php echo $_POST['src_id']; ?>';
			document.form_bench.q.value = q;
			document.form_bench.h.value = h;
			document.form_bench.w.value = w;
			document.form_bench.s.value = s;
			if(s == '') {
				return false;	// preview
			} else {
				return true;	// mouse over or save_settings
			}
		}
		function save_settings()
		{
			document.form_bench.s.value = '  ';
			document.form_bench.submit();
		}
	</script>
	<br/><br/><?php echo "$bm_avg_img"; ?><br/>
	<table width="75%" border="1">
		<tr>
			<td align="center" class="maintable"><?php echo "$bm_qual_size";?></td>
<?php
		for($h = $this->starth; $h <= $this->maxh; $h += $this->addh) {
?>
			<td align="center" class="maintable"><?php echo "$h x ".round($h*$this->img_relation,0)." ";?></td>
<?php
		}
?>
		</tr>
<?php
	for($q = $this->startq; $q <= $this->maxq; $q+=$this->addq) {
?>
		<tr>
			<td align="center" class="maintable" nowrap><?php echo "$q";?></td>
<?php
		for($h = $this->starth; $h <= $this->maxh; $h += $this->addh) {
?>
			<td align="center" class="maintable" nowrap>
<?php
			// only take the better half
			asort($this->array_timer[$q][$h]);
			reset($this->array_timer[$q][$h]);

			$i = 1;
			$sum = 0;
			foreach(($this->array_timer[$q][$h]) as $value)
			{
				$sum += $value;
				if($i >= ($this->repetition)/2) {
					break;
				}
				$i++;
			}
			$w = round($h*($this->img_relation),0);
			$s = round($this->array_sizes[$q][$h]/1000,1);
			
			echo '<a href="javascript:void(0)" onMouseOver="changesrc('.$q.','.$h.','.$w.','.$s.')">'.round($sum/$i,4).' sec</a>';
?>
			</td>
<?php
		}
?>
		</tr>
<?php
	}
?>
	</table><br/>

	<div align="center">
		<form name="form_bench" method="POST" action="<?php echo TOP_DIR; ?>/admin.php?page=benchmark&plugins=1&redirector=benchmark" onsubmit="return changesrc(document.form_bench.q.value,document.form_bench.h.value,document.form_bench.w.value,'')">
			<?php echo "$bm_quality"; ?><input type="text" name="q" value="<?php echo "$this->startq";?>" size="3">
			<?php echo "$bm_height"; ?><input type="text" name="h" value="<?php echo "$this->starth";?>" size="3">
			<?php echo "$bm_width"; ?><input type="text" name="w" value="<?php echo "".round($this->starth*($this->img_relation),0)." ";?>" size="3">
			<?php echo "$bm_size"; ?><input type="text" name="s" value="<?php echo "".round($this->array_sizes[$this->startq][$this->starth]/1000,1)." ";?>" size="3"> KB
			<input type="hidden" name="startq" value="<?php echo $_POST['startq']; ?>">
			<input type="hidden" name="maxq" value="<?php echo $_POST['maxq']; ?>">
			<input type="hidden" name="addq" value="<?php echo $_POST['addq']; ?>">
			<input type="hidden" name="starth" value="<?php echo $_POST['starth']; ?>">
			<input type="hidden" name="maxh" value="<?php echo $_POST['maxh']; ?>">
			<input type="hidden" name="addh" value="<?php echo $_POST['addh']; ?>">
			<input type="hidden" name="repetition" value="<?php echo $_POST['repetition']; ?>">

			<input type="submit" name="preview" value="<?php echo $bm_preview; ?>">
			<input type="button" name="save_button" value="<?php echo $bm_save_settings; ?>" onclick="save_settings()">
			<input type="hidden" name="save" value="1">
		</form>
		<table>
			<tr>
				<td height="<?php echo "$this->maxh";?>" valign="top" align="center">
<?php
					echo "<img src='".TOP_DIR."/get_thumbs_on_fly.php?".
						"type=".$this->use_what.
						"&quality=".$this->startq.
						"&nw=".round(($this->starth)*($this->img_relation),0).
						"&nh=".$this->starth.
						"&imgid=".$_POST['src_id'].
						"' name='main_image' border='0'/>";
?>
				</td>
			</tr>
		</table>
	</div>
<?php
}

function save_settings($h,$w,$q)
{
	if( (!(empty($h))) && (!(empty($w))) && (!(empty($q))) )
	{
		update_config($h,"photo_height");
		update_config($w,"photo_width");
		update_config($q,"img_quality");
	}
}

} // end class benchmark

// set default values here:
(!isset($_POST['startq']) ? $_POST['startq'] = 50 : '');
(!isset($_POST['maxq']) ? $_POST['maxq'] = 90 : '');
(!isset($_POST['addq']) ? $_POST['addq'] = 10 : '');
(!isset($_POST['starth']) ? $_POST['starth'] = 180 : '');
(!isset($_POST['maxh']) ? $_POST['maxh'] = 480 : '');
(!isset($_POST['addh']) ? $_POST['addh'] = 60 : '');
(!isset($_POST['repetition']) ? $_POST['repetition'] = 3 : '');
(!isset($_POST['src_id']) ? $_POST['src_id'] = '' : '');
(!isset($_POST['use_what']) ? $_POST['use_what'] = '' : '');

if(!empty($_POST['save'])) {
	$bench = new benchmark;
	$bench->save_settings($_POST['h'],$_POST['w'],$_POST['q']);
}
?>
<h1>Benchmark</h1><hr noshade>
<form name="benchmark" method="POST" action="<?php echo TOP_DIR; ?>/admin.php?page=benchmark&plugins=1">
<table border="0">
	<tr>
		<td class="maintable"><?php echo "$thumb_order_file:"; ?></td>
		<td>
<?php
			$select = $GLOBALS['db']->SelectLimit("SELECT ID, filename, prev_path FROM ".PREFIX."photos WHERE level = '0' ORDER by md5sum",20);	// order by md5sum to get as most different files as possible (compared to order by filename, prev_path, etc.)
			while($data = $select->FetchRow())
			{
				$input_files[$data[0]] = $data[2].'/'.$data[1];
			}
			asort($input_files);
			form_generate_select('src_id',"1"," style='width:250px'",$_POST['src_id'],$input_files );
?>
		</td>
		<td class="maintable"><?php echo $bm_current_settings; ?>:</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo "$bm_qual_range"; ?></td>
		<td  class="maintable">
			<input type="text" name="startq" value="<?php echo $_POST['startq'];?>" size="4">
			-- <input type="text" name="maxq" value="<?php echo $_POST['maxq'];?>" size="4">
			<?php echo "$bm_interval: "; ?><input type="text" name="addq" value="<?php echo $_POST['addq'];?>" size="4">
		</td>
		<td class="maintable"><?php echo $bm_quality.' '.read_config("img_quality"); ?></td>
	</tr>
	<tr>
		<td class="maintable"><?php echo "$bm_size_range"; ?></td>
		<td class="maintable">
			<input type="text" name="starth" value="<?php echo $_POST['starth'];?>" size="4">
			-- <input type="text" name="maxh" value="<?php echo $_POST['maxh'];?>" size="4">
			<?php echo "$bm_interval: "; ?><input type="text" name="addh" value="<?php echo $_POST['addh'];?>" size="4">
		</td>
		<td class="maintable"><?php echo $bm_height.' '.read_config("photo_height").' ('.$bm_width.' '.read_config("photo_width").')'; ?></td>
	</tr>
	<tr>
		<td class="maintable"><?php echo "$bm_repeats"; ?></td>
		<td><input type="text" name="repetition" value="<?php echo $_POST['repetition'];?>" size="4"></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="maintable"><?php echo "$bm_con_util"; ?></td>
		<td>
			<select name="use_what">
<?php

			$check_convert = check_convert();
			if($check_convert[0]) {
				echo '<option value="convert"'.($_POST['use_what']=='convert' ? ' selected' : '').'>Convert (ImageMagick)</option>'."\n";
			}
			if(extension_loaded('gd')) {
				echo '<option value="gd"'.($_POST['use_what']=='gd' ? ' selected' : '').'>GD Lib</option>'."\n";
				if(function_exists('imagecopyresampled')) {
					echo '<option value="gdhigh"'.($_POST['use_what']=='gdhigh' ? ' selected' : '').'>GD High quality (imagecopyresampled())</option>'."\n";
				}
			}
?>
			</select>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3">
			<br/><input type="hidden" name="cmd" value="bench">
			<input type="submit" name="submit" value="<?php echo $submit_button_folder; ?>">
		</td>
	</tr>
</table>
</form>
<hr noshade>
<br/>

<?php
if(!empty($_POST['cmd']))
{
	$bench = new benchmark;
	$bench->init();
	
	echo $bm_create.": ".$bench->use_what."<br/>\n";
	echo $bm_quality.": ".$bench->startq."-".$bench->maxq." ".$bm_interval.": ".$bench->addq."<br/>\n";
	echo "Size: ".$bench->starth."x".round($bench->starth*$bench->img_relation,0)." - ".
		$bench->maxh."x".round($bench->maxh*$bench->img_relation,0).
		" ".$bm_interval.": ".$bench->addh."<br/><br/>\n";
	echo $bm_calc." ".($bench->repetition)*($bench->number_images)." (".$bench->repetition."*".$bench->number_images.") ".$bm_img."...<br/>\n";
	@ob_flush();
	@flush();

	$bench->run_benchmark();
	$bench->print_benchmark_results();
}
?>
