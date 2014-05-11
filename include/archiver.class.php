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
 
/**
* Class to create album archives for download
*
* This class uses the system tools tar/bzip/zip to create archives
* for download. Using PHP sucks due limitations (runtime and memory limits)...
*
* @author bzrudi
*/

class Archive
{

var $files; 
var $tmpname;
var $sleeptime;
var $ziptype;
var $apps;
var $md5sums;

/**
* constructor
*/
function Archive($ziptype,$speed=0)
{
	$this->ziptype = $ziptype;
	$this->setDownloadSpeedLimit($speed);

	$this->apps = new Archive_Applications();
	$this->apps->searchApp($ziptype);

	/**
	* set tmpname
	*/
	$this->tmpname = linpha_tempnam(
		'linpha_download',	// prefix
		'.'.$this->apps->apps[$this->ziptype]['file_ext']	// suffix
	);
	
	if(!is_absolute_path(read_config('tmp_dir')))
	{
		/**
		* now tmpname is: '../sql/tmp/Linpha_download'
		*/
		$this->tmpname = substr($this->tmpname,1);
		/**
		* now tmpname is: './sql/tmp/Linpha_download'
		* need this because we do later a chdir(TOP_DIR) !!
		*
		* @todo this doesn't work if tmp_dir is '../../tmp' ?
		*/
	}
	
	//$this->tmpname = '.\sql\tmp\linpha_download_e5b91c4922f137076120c9f8d0db2316_2.rar';
}

/**
* Method to calculate max download speed rate
* @return integer sleeptime in usec 
*/
function setDownloadSpeedLimit($sleep)
{
	switch($sleep)
	{
		case "0":	$this->sleeptime = "0";			break;
		case "4":	$this->sleeptime = "900000";	break;
		case "8":	$this->sleeptime = "450000";	break;
		case "12":	$this->sleeptime = "335000";	break;
		case "16":	$this->sleeptime = "225000";	break;
		case "32":	$this->sleeptime = "115000";	break;
		case "64":	$this->sleeptime = "56500";		break;
		default:	$this->sleeptime = "0";			break;
	}
}

/**
* Method to create filelist/path for files to download
* @return string fullpath,path,src_path
*/
function getImageList($img_ids)
{
	$this->files = '';
	
	/**
	* addslashes to $img_ids coming from POST data
	*/
	$img_ids = addslashes_array($img_ids);
	
	$str_img_ids = P.".id='";
	$str_img_ids .= implode("' OR ".P.".id='",$img_ids);
	$str_img_ids .= "'";

	$sql = sql_query_str(
		array('filename','prev_path','id','md5sum'),
		$str_img_ids,
		$order_by='',
		$additional_tables=Array()
		);
	$query = $GLOBALS['db']->Execute($sql);
	if($query->RecordCount() > 0)
	{
		while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
		{
			if(!empty($data['prev_path']) && !empty($data['filename']))
			{
				$this->files .= escape_string($data['prev_path']."/".$data['filename'])." ";
				
				/**
				 * store md5sum for later use (statistics)
				 */
				$this->md5sums[] = $data['md5sum'];
			}
		}
		return true;
	}
	else
	{
		return false;
	}
}


/**
* Method to finaly create the archive on HD
*/
function makeArchive()
{
	$command = $this->apps->GetCommand($this->ziptype);
	
	/**
	* get executable path
	*/
	$this->apps->searchApp($this->ziptype);
	$path = $this->apps->found_apps[$this->ziptype];
	$exec = $this->apps->apps[$this->ziptype]['executable'];
	$executable = $path.$exec;
	$command = str_replace('{executable}',$executable,$command);
	
	$command = str_replace('{files}',$this->files,$command);		// $this->files is already escaped
	$command = str_replace('{archive_name}',escape_string($this->tmpname),$command);
	
	//error_log($command);
	
	if(!chdir(TOP_DIR)) {
		echo 'cannot chdir(TOP_DIR)!<br />';
		return false;
	}

	/**
	* delete tempfile first because winrar cannot write into this empty file (created with touch())!
	* -> it could be possible that linpha_tempnam() generates now a duplicate tmpname if another user
	* is currently using the download mode too
	* very unlikely because the session_id is included in tmpname and there is not much time between unlink() and exec()
	*/
    if(file_exists($this->tmpname)) {
        unlink($this->tmpname);
    }
	
    
	$array_output = array(); $return_value = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
	exec($command,$array_output,$return_value);

	if(!file_exists($this->tmpname)) {
		echo 'Created archive doesnt exists<br />';
		$fail = true;
	}
	
	if($return_value != 0) {
		echo 'Archiver returned an error!<br />';
		echo 'Return value was: '.$return_value.'<br />';
		echo '<b>Is the /sql/tmp/ directory writeable?</b>';
		$fail = true;
	}
	
	if(isset($fail))
	{
		echo '<pre>';
		echo $command.'<br />';
		print_r($array_output);
		echo '</pre><br />';
		
		return false;
	}
	else
	{
		return true;
	}
}

/**
* Method to send created archive to client.
* Makes use of additional header defines to let client know about
* content type and length.
*/
function startDownload()
{
	set_magic_quotes_runtime(0);
	/**
	 * disable zlib compression to avoid broken archives
	 */
	@ini_set ('zlib.output_compression', 'Off');
		
	$mime = $this->apps->apps[$this->ziptype]['mime'];
	$ext = $this->apps->apps[$this->ziptype]['file_ext'];

	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Content-Type: ".$mime);
	
	$user_agent = @strtolower($_SERVER["HTTP_USER_AGENT"]);
	
	if ((is_integer (strpos($user_agent, "msie"))) && (is_integer (strpos($user_agent, "win")))) {
		header( "Content-Disposition: filename=Linpha_download.".$ext.";" );
	}else{
		header( "Content-Disposition: attachment; filename=Linpha_download.".$ext.";" );
	}
	
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($this->tmpname));
	
	$fp=fopen($this->tmpname, "rb");
	
	if($this->sleeptime == 0){
		while(!feof($fp)) {
			$sendbuffer=fread($fp, 4096);
			echo $sendbuffer;
		}
	} else {
		while(!feof($fp)) {
			$sendbuffer=fread($fp, 4096);
			usleep($this->sleeptime);
			echo $sendbuffer;
		}
	}
	
	fclose($fp);	
	unlink($this->tmpname);
}

} // end class

class Archive_Applications
{
	//var $path_delimiter;
	var $array_path;
	var $apps;
	var $found_apps;
	
	// Constructor
	function Archive_Applications()
	{
		/**
		* not use include_once() !
		*/
		include(TOP_DIR.'/include/archiver.config.php');

		$this->array_path = get_PATH('PATH');
	}

	function getCommand($ziptype)
	{
		return $this->apps[$ziptype]['command'];
	}

	/**
	* ignoreFileext doesn't mean that these files are exluded from the archive
	* but these are excluded from compression, so we get speed improvements
	*
	* it doesn't make sense to compress already compressed image files
	* but it makes sense to compress uncompressed image files like BMP or TIFF
	*
	* what about movies..?!
	*/
	function ignoreFileext($prefix,$delimiter)
	{
		$exts = Array('jpg','JPG','jpeg','JPEG','gif','GIF','png','PNG','mov','MOV','avi','AVI','mpg','MPG','mpeg','MPEG');
		
		$str = '';
		foreach($exts AS $value) {
			$str .= $prefix.$value.$delimiter;
		}
		
		/**
		* remove last delimiter
		*/
		$str = substr($str,0,strlen($str)-strlen($delimiter));

		return $str;
	}

	function searchApps()
	{
		foreach($this->apps AS $app=>$value)
		{
			$this->searchApp($app);
		}
	}

	function searchApp($app)
	{
		if(isset($this->apps[$app]['look_for'][0]) && $this->apps[$app]['look_for'][0] == 'no')
		{
			$this->found_apps[$app] = '';
			return true;
		}

		/**
		* search file in other (given) locations
		*
		* get_PATH remove directories not allowed by safemode or open_basedir
		*/
		$array_lookfor = get_PATH($this->apps[$app]['look_for']);
		foreach($array_lookfor AS $value)
		{
			if(file_exists($value.'/'.$this->apps[$app]['executable']))
			{
				/**
				* make sure the executable path contains no spaces because this won't work
				* this behaviour has only be seen under windows, maybe we have to separate linux and
				* windows. but then, we have to escape the executable.
				*
				* calls like
				* $cmd = '"c:/program files/winrar/rar.exe" a "c:/temp/test.rar" "c:/directory with spaces/rar.txt"';
				* exec($cmd);
				* don't work!
				*
				* if somebody finds a solution, please let me know :)
				*/
				if( strpos($value,' ')!==false )
				{
				}
				else
				{
					$this->found_apps[$app] = $value.'/';
					return true;
				}
			}
		}

		/**
		* search file in PATH
		*/
		foreach($this->array_path AS $value)
		{
			if(file_exists($value.'/'.$this->apps[$app]['executable']))
			{
				$this->found_apps[$app] = $value.'/';
				return true;
			}
		}
		
		return false;
	}
	
/*
	function getPath()
	{
		$this->array_path = explode($this->path_delimiter,$_SERVER['PATH']);
		
		// if we have open_basedir restrictions, take only the paths which are allowed from open_basedir to prevent errors
		$open_basedir = ini_get('open_basedir');
		if(!empty($open_basedir)) {
			$arr_open_basedir = explode($this->path_delimiter,$open_basedir);
			
			$this->array_path = array_intersect($this->array_path, $arr_open_basedir);
		}
		// same with safemode
		$safe_mode = strtolower(ini_get('safe_mode'));
		if($safe_mode == 'on') {
			$safe_mode_exec_dir = ini_get('safe_mode_exec_dir');
			if(!empty($safe_mode_exec_dir)) {
				$arr_safe_mode_exec_dir = explode($this->path_delimiter,$safe_mode_exec_dir);
				
				$this->array_path = array_intersect($this->array_path, $safe_mode_exec_dir);
			}
		}
	}*/
}
