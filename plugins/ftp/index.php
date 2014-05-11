<?php
//include/get_ride_of_magic_quotes.php:

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
* This file removes the magic quotes
* always include this file with *include_once* to prevent multiple remove of magic quotes!
*
* Magic-quotes was added to reduce code written by beginners from being dangerous.
* If you disable magic quotes, you must be very careful
* to protect yourself from SQL injection attacks.
* For details see http://www.php.net/manual/en/function.get-magic-quotes-gpc.php
*
* @author  flo
*/

/**
* Disabling magic quotes at runtime
* for example fread()
*/
set_magic_quotes_runtime(0);

/**
 * PHP 5.x workarround to prevent strftime notices about unset timezone
 */
if(check_php_version('5.1.0')) {
	$time_zone = date_default_timezone_get();
	date_default_timezone_set($time_zone);
	}

/**
* Remove magic quotes for get, post and cookie data
* We can't disable it, because we are already too late
* It could also be done with a directive in a .htaccess file
* (php_value magic_quotes_gpc 0)
*/
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value)
	{
		$value = is_array($value) ?
			array_map('stripslashes_deep', $value) :
			stripslashes($value);
		
		return $value;
	}
	
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
	
	/**
	* http://php3.de/manual/de/features.file-upload.php
	* Note that with magic_quotes_gpc on, the uploaded filename
	* has backslashes added *but the tmp_name does not*.
	* On Windows where the tmp_name path includes backslashes,
	* you *must not* run stripslashes() on the tmp_name,
	* so keep that in mind when de-magic_quotes-izing your input.
	*
	* -> do not stripslashes on whole array, but only on $_FILES[*]['name']
	*/
	foreach($_FILES AS $key=>$value)
	{
		$_FILES[$key]['name'] = stripslashes($_FILES[$key]['name']);
	}
} 
?>


<?php

// -------------------------------------------------------------------------------
//
// FSGuide
//
// (c) 2003, Tamas TURCSANYI
// contact: trajic [at] demoscene [dot] hu
//
// http://fsguide.sourceforge.net
// modified, extended to work with LinPHA, bzrudi71
// removed all code for the "right" windows as it is not required for LinPHA
// -------------------------------------------------------------------------------

/**
* TOP_DIR not defined because of security, this file has to be included from admin.php and nothing else
*/
require(TOP_DIR.'/plugins/ftp/includes/config.inc.php');
require(TOP_DIR.'/plugins/ftp/includes/predefine.inc.php');
init();

$todo = '';
if (isset($_REQUEST['todo']))
  $todo = htmlspecialchars($_REQUEST['todo']);

switch($todo) {
	case 'delete':
		execute_action('delete'); display();
	break;
	case 'mkdir_form':
		$message .= mkdir_form($dirleft); display();
	break;
	case 'createdir':
    	create_directory(); display();
	break;
	case 'upload_form':
		uploadform($dirleft);
	break;
	case 'upload':
		upload(); display();
	break;
	case 'copy_form':
		copy_form(); display();
	break;
	case 'docopy':
		copy_recursive(); display();
	break;
	case 'rename_form':
		rename_form(); display();
	break;
	case 'dorename':
		dorename($_POST['originame'],$default['STARTDIR_LEFT'].'/'.$_POST['rename_to']); display();
	break;
	case 'openfile':
		display_file($_REQUEST['f']);
	break;
	case 'edit':
		edit_file($_REQUEST['f']);
	break;
	case 'save_textfile':
		save_textfile(); display();
	break;
	case 'save_binaryfile':
		save_binaryfile(); display();
	break;
	case 'change_perm_form':
		change_perm_form(); display();
	break;
	case 'change_perm':
		change_perm(); display();
	break;
	default:
		display();
	break;
}

// ----------------------------------------------------------------------------
function fsguideErrorHandler ($errno, $errstr, $errfile, $errline) {

if(strpos($errstr, "PHP_SELF") === false){
  if ( !isset( $GLOBALS['message'] ) )
    $GLOBALS['message']  = "<LI>" . $errstr . NL;
  else
    $GLOBALS['message'] .= "<LI>" . $errstr . NL;

  if ( defined( 'DISPLAY_ERRORS' ) )
    echo "<LI>" . $errstr . NL;
}
}

// ----------------------------------------------------------------------------
function change_perm_form()
{
	global $submit_button_folder, $str_change_perm, $str_read, $str_write, $str_execute, $str_owner, $str_group, $str_all_other;

	$perm = get_readable_fileperms($_REQUEST['f']);
	
	(substr($perm, 1, 1)!="-" ? $ur = 1 : '');
	(substr($perm, 2, 1)!="-" ? $uw = 1 : '');
	(substr($perm, 3, 1)!="-" ? $ux = 1 : '');
	(substr($perm, 4, 1)!="-" ? $gr = 1 : '');
	(substr($perm, 5, 1)!="-" ? $gw = 1 : '');
	(substr($perm, 6, 1)!="-" ? $gx = 1 : '');
	(substr($perm, 7, 1)!="-" ? $or = 1 : '');
	(substr($perm, 8, 1)!="-" ? $ow = 1 : '');
	(substr($perm, 9, 1)!="-" ? $ox = 1 : '');


?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES); ?>?page=ftp" method="post">
    <FIELDSET>
		<LEGEND><?php echo $str_change_perm.' '.$_REQUEST['f']; ?></LEGEND>

	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td width="100">&nbsp;</td>
			<td class='admintable' width="75"><?php echo $str_read; ?></td>
			<td class='admintable' width="75"><?php echo $str_write; ?></td>
			<td class='admintable' width="75"><?php echo $str_execute; ?></td>
		</tr>
		<tr>
			<td class='admintable'><?php echo $str_owner; ?></td>
			<td><input name="ur" type="checkbox" value="4"<?=(isset($ur) ? ' checked' : '')?>></td>
			<td><input name="uw" type="checkbox" value="2"<?=(isset($uw) ? ' checked' : '')?>></td>
			<td><input name="ux" type="checkbox" value="1"<?=(isset($ux) ? ' checked' : '')?>></td>
		</tr>
		<tr>
			<td class='admintable'><?php echo $str_group; ?></td>
			<td><input name="gr" type="checkbox" value="4"<?=(isset($gr) ? ' checked' : '')?>></td>
			<td><input name="gw" type="checkbox" value="2"<?=(isset($gw) ? ' checked' : '')?>></td>
			<td><input name="gx" type="checkbox" value="1"<?=(isset($gx) ? ' checked' : '')?>></td>
		</tr>
		<tr>
			<td class='admintable'><?php echo $str_all_other; ?></td>
			<td><input name="or" type="checkbox" value="4"<?=(isset($or) ? ' checked' : '')?>></td>
			<td><input name="ow" type="checkbox" value="2"<?=(isset($ow) ? ' checked' : '')?>></td>
			<td><input name="ox" type="checkbox" value="1"<?=(isset($ox) ? ' checked' : '')?>></td>
		</tr>
	</table>
	<br />
	<input type="Submit" name="Submit" value="<?php echo $submit_button_folder; ?>">

	<input type="hidden" name="todo" value="change_perm">
	<?php echo getparams(); ?>
    </FIELDSET>
	</FORM>

<?php
}

function change_perm()
{
	global $new_perms_success_msg, $str_error_changing_perm;

	isset($_POST['ur']) ? $ur = $_POST['ur'] : $ur = 0;
	isset($_POST['uw']) ? $uw = $_POST['uw'] : $uw = 0;
	isset($_POST['ux']) ? $ux = $_POST['ux'] : $ux = 0;
	isset($_POST['gr']) ? $gr = $_POST['gr'] : $gr = 0;
	isset($_POST['gw']) ? $gw = $_POST['gw'] : $gw = 0;
	isset($_POST['gx']) ? $gx = $_POST['gx'] : $gx = 0;
	isset($_POST['or']) ? $or = $_POST['or'] : $or = 0;
	isset($_POST['ow']) ? $ow = $_POST['ow'] : $ow = 0;
	isset($_POST['ox']) ? $ox = $_POST['ox'] : $ox = 0;

	$u = $ur+$uw+$ux;
	$g = $gr+$gw+$gx;
	$o = $or+$ow+$ox;
	
	$mode = $u.$g.$o;
	
	echo '<div align="center"><h1>';
	if(chmod($_REQUEST['f'],intval($mode,8)))
	{
        linpha_log('filemanager','notice','User '.$_SESSION['user_name'].": changed directory permissions of (".$_REQUEST['f'].")");
		echo $new_perms_success_msg;
	}
	else
	{
		echo $str_error_changing_perm;
        linpha_log('filemanager','warning',
            'User '.$_SESSION['user_name'].": failed to change permissions of (".$_REQUEST['f'].")");
	}
	echo '</h1></div>';
}

// ----------------------------------------------------------------------------
function copy_form()
{
	global $dirleft, $default, $str_copy, $str_copy_to;

	$filelist = filelist();
	if(isset($filelist[0])) {
		$filename = $filelist[0][0];
	}
	if (isset($filename))
	{
		$originame = $dirleft.'/'.$filename;
?>
	<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES); ?>?page=ftp' method='POST'>
	<fieldset>
		<legend><?php printf($str_copy_to,$originame); ?></legend>
		<font class="mono"><?php echo $default['STARTDIR_LEFT']; ?>/</font>
		<input type='text' name='copy_to' value='<?php echo htmlspecialchars(str_replace($default['STARTDIR_LEFT'].'/','',$dirleft.'/'),ENT_QUOTES); ?>'>
		<input type='hidden' name='todo' value='docopy'>
		<input type='hidden' name='originame' value='<?php echo htmlspecialchars($originame,ENT_QUOTES); ?>'>
		<input type='submit' name='Submit' value='<?php echo $str_copy; ?>'>
		<?php echo getparams(); ?>
	</fieldset>
	</form>
<?php
	}
}

function copy_recursive()
{
	global $default;

	/**
	* don't allow in parent directories!
	*/
	if(strpos($_POST['copy_to'],'..') === false)
	{
		copy_r($_POST['originame'],$default['STARTDIR_LEFT'].'/'.$_POST['copy_to']);
        linpha_log('filemanager','notice',
            'User '.$_SESSION['user_name'].": made copy of (".$_POST['originame'].") => (".$_POST['copy_to'].")");
	}
	else
	{
		die(pageheader() . STR_ACCESS_DENIED . pagefooter());
        linpha_log('filemanager','warning',
            'User '.$_SESSION['user_name'].": tried copy of (".$_POST['originame'].") => (".$_POST['copy_to'].") failed");
	}
	
}

// ----------------------------------------------------------------------------
function rename_form()
{
	global $dirleft, $default, $str_rename_to;

	$filelist = filelist();
	if(isset($filelist[0])) {
		$filename = $filelist[0][0];
	}
	if (isset($filename))
	{
		$originame = $dirleft.'/'.$filename;
?>
	<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES); ?>?page=ftp' method='POST'>
	<fieldset>
		<legend><?php printf($str_rename_to,$originame); ?></legend>
		<font class="mono"><?php echo $default['STARTDIR_LEFT']; ?>/</font>
		<input type='text' name='rename_to' value='<?php echo htmlspcialchars(str_replace($default['STARTDIR_LEFT'].'/','',$originame),ENT_QUOTES); ?>'>
		<input type='hidden' name='todo' value='dorename'>
		<input type='hidden' name='originame' value='<?php echo htmlspecialchars($originame,ENT_QUOTES); ?>'>
		<input type='submit' name='Submit' value='<?php echo STR_RENAME; ?>'>
		<?php echo getparams(); ?>
	</fieldset>
	</form>
<?php
	}
}

function dorename()
{
	global $default;

	if(strpos($_POST['rename_to'],'..') === false)	// don't allow renames to other than allowed directories
	{
		rename( $_POST['originame'] , $default['STARTDIR_LEFT'].'/'.$_POST['rename_to']);
        linpha_log('filemanager','notice',
            'User '.$_SESSION['user_name'].": renamed (".$_POST['originame'].") => (".$_POST['rename_to'].")");
		/**
		* rename folder in database
		*/
		rename_folder_in_db($_POST['originame'], $default['STARTDIR_LEFT'].'/'.$_POST['rename_to']);
	}
	else
	{
		die(pageheader() . STR_ACCESS_DENIED . pagefooter());
        linpha_log('filemanager','warning',
            'User '.$_SESSION['user_name'].": tried to rename (".$_POST['originame'].") => (".$_POST['rename_to'].") failed");
	}
}

// ----------------------------------------------------------------------------
function mkdir_form($parentdir)
{
	global $dirleft, $default;
?>
	<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES); ?>?page=ftp' method='POST'>
	<fieldset>
		<legend><?php echo STR_CREATEDIRLEGEND; ?></legend>
		<font class="mono"><?php echo $default['STARTDIR_LEFT']; ?>/</font>
		<input type='text' name='dirname' value='<?php echo htmlspecialchars(str_replace($default['STARTDIR_LEFT'].'/','',$dirleft.'/'),ENT_QUOTES); ?>'>
		<input type='hidden' name='todo' value='createdir'>
		<input type='submit' name='Submit' value='<?php echo STR_CREATEDIRBUTTON; ?>'>
		<?php echo getparams(); ?>
	</fieldset>
	</form>
<?php
}

function create_directory()
{
	global $default;

	/**
	* don't allow in parent directories!
	*/
	if(strpos($_POST['dirname'],'..') === false)
	{
		mkdir_p($default['STARTDIR_LEFT'] . '/' . $_POST['dirname'], 0700);
		//copy_r($_POST['originame'],$default['STARTDIR_LEFT'].'/'.$_POST['copy_to']); display();
        linpha_log('filemanager','notice',
            'User '.$_SESSION['user_name'].": created new directory (".$_POST['dirname'].")");
	}
	else
	{
		die(pageheader() . STR_ACCESS_DENIED . pagefooter());
        linpha_log('filemanager','warning',
            'User '.$_SESSION['user_name'].": tried to create directory (".$_POST['dirname'].") failed");
	}
	
}

// ----------------------------------------------------------------------------

function upload()
{
	global $message, $dirleft;

	for ($i = 0; $i < $GLOBALS['default']['UPLOAD_NUMBER_OF_FILE_CONTROLS']; $i++ )
	{
		if ( isset( $_FILES[ 'file' . $i ] ) && !empty( $_FILES[ 'file' . $i]['name'] ) )	// need empty check because it file$i exists in PHP 4.1
		{
			$thisfile = $_FILES[ 'file' . $i ];
			$failed   = 0;

			if (isset($thisfile['error']) && $thisfile['error'] != 0 )	// ['error']  was added in PHP 4.2.0
			{
				switch ( $thisfile['error'] )
				{
				case 1: 
                    $message .= '<LI>'. sprintf(STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE, $thisfile['name'], ini_get('upload_max_filesize') ); 
                    linpha_log('filemanager','error',
                        'User '.$_SESSION['user_name'].": upload failed for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE.")");
                    break;				
                case 2:
                    $message .= '<LI>'. sprintf(STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE, $thisfile['name'] );
                    linpha_log('filemanager','error',
                        'User '.$_SESSION['user_name'].": upload failed for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE.")");
                    break;				
                case 3:
                    $message .= '<LI>'. sprintf(STR_FILE_UPLOAD_ERROR_FILE_PARTIAL, $thisfile['name'] );
                    linpha_log('filemanager','error',
                        'User '.$_SESSION['user_name'].": upload failed for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_ERROR_FILE_PARTIAL.")");
                    break;
				}
			}
			else
			{

				if ( !move_uploaded_file( $thisfile['tmp_name'], $_POST['targetdir'] . '/' . $thisfile['name'])	)
				{
					$failed = 1;
                   
				}
                
				if ( $_POST[ 'app' . $i ] != '-' )	// extracting selected
				{
					include_once(TOP_DIR.'/include/archiver.class.php');	// this part must be before chdir()!
					$apps = new Archive_Applications();
					$command = $apps->apps[$_POST['app'.$i]]['command_extract'];
					$apps->searchApp($_POST['app'.$i]);

					$executable = $apps->found_apps[$_POST['app'.$i]].$apps->apps[$_POST['app'.$i]]['executable_extract'];

					$command = str_replace('{executable}',$executable,$command);
					$command = str_replace('{archive_name}',escape_string($thisfile['name']),$command);
					
					$oldpwd = getcwd();
					if ( !chdir( $_POST['targetdir'] ) ) {
						$failed = 2;
					}
					else
					{
						$output = array(); $return_value = '';	// do not this inside exec() !!!!!!!!!! it will overwrite the returned content !!
						exec( $command, $output, $return_value );
						chdir( $oldpwd );
                        
						
						echo  '<LI>' .
							$command . '<BR>' . NL .
							'<TEXTAREA  cols=80 ROWS=4>' .
							implode( NL, $output ) .
							'</TEXTAREA><BR>';
						
						unset($output);

						if ( isset( $_POST[ 'drop' . $i ] ) && ( $_POST[ 'drop' . $i ] == 'on' ) )
						{
							if (!unlink( $_POST['targetdir'] . '/' . $thisfile['name'] )) {
								$failed = 3;
							}
						}
					}
				}

				switch ($failed)
				{
                    case 0:
                        linpha_log('filemanager','notice',
                            'User '.$_SESSION['user_name'].": uploaded file (".$thisfile['tmp_name']." ".$_POST['targetdir'].'/'.$thisfile['name'].")");
                    
                        break;
					case 1: 
                        $message .= '<LI>' . sprintf( STR_FILE_UPLOAD_ERROR, $thisfile[ 'name' ], $_POST['targetdir'] ); 
                        linpha_log('filemanager','error',
                            'User '.$_SESSION['user_name'].": upload failed for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_ERROR.")");
                        break;
					case 2:
                        $message .= '<LI>' . sprintf( STR_FILE_UPLOAD_CHDIR_ERROR, $_POST['targetdir'], $thisfile[ 'name' ] );
					    linpha_log('filemanager','error',
                            'User '.$_SESSION['user_name'].": upload chdir failed for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_CHDIR_ERROR.")");
                        break;
                    case 3:
                        $message .= '<LI>' . sprintf( STR_FILE_UPLOAD_UNLINK_ERROR, $_POST['targetdir'], $thisfile[ 'name' ] ); break;
                        linpha_log('filemanager','error',
                            'User '.$_SESSION['user_name'].": upload unlink for(".$thisfile['name'].") message: (".STR_FILE_UPLOAD_UNLINK_ERROR.")");
                        break;
				}
			}
		}
	}
}

// ----------------------------------------------------------------------------
function uploadform($targetdir) {
global $default, $dirleft, $sortpass, $str_files_to_upload, $str_extract_with, $str_add_more_apps, $str_note_upload;

  $nav  =
    '<A HREF="'.htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES).'?'.
      'lt='.urlencode($dirleft).AMP.
      'page=ftp'.AMP.
      $sortpass . '">'.STR_BACK.'</A> ';
  if (!ini_get('file_uploads')) {

    echo
      pageheader().
      '<PRE>'.
      $nav .
      '</PRE>'.
      STR_FILE_UPLOAD_DISABLED.
      pagefooter();
    return;

  }
  else {

    $files      = '';
    $appselect  = '<OPTION VALUE="-">'. STR_FILE_UPLOAD_NOTHING;
    
	include_once(TOP_DIR.'/include/archiver.class.php');
	$apps = new Archive_Applications();
	$apps->searchApps();
	
	foreach($apps->found_apps AS $key=>$value)
	{
		$value = $key.' (.'.$apps->apps[$key]['file_ext'].')';
		$appselect .= '<option value="'.$key.'">'.$value.'</option>';
	}

    for ($i = 0; $i < $GLOBALS['default']['UPLOAD_NUMBER_OF_FILE_CONTROLS']; $i++ ) {

		($i % 2 ) ? $colorclass=" class=alternate " : $colorclass =' '; // row colors

	  $files .=
		'<TR ' .$colorclass.'>'.'<TD class=uploaderbrbb>&nbsp;<b>'.
		STR_FILE_UPLOAD_FILE . ' '.($i+1).': '.'<INPUT TYPE=FILE NAME="file'.$i.'"></b></TD>'.

		'<td class=uploaderbb>&nbsp;<SELECT NAME="app'.$i.'" ID="appselect'.$i.'">' .$appselect .'</SELECT>';
        if($i == 0)
        {
            $files .= ' <b>'.$str_add_more_apps.'</b>';

            ob_start();
            putHelpButton('archive_apps');
            $files .= ob_get_contents();
            ob_end_clean(); 
        }
        $files .= '</td></tr>' .
		'<tr ' .$colorclass.'>'.
		'<td class=uploaderbbs colspan=2><INPUT TYPE=CHECKBOX ID="dropcbx' . $i . '" NAME="drop'.$i.'">'.
         '<LABEL FOR="dropcbx'.$i.'">'. STR_FILE_UPLOAD_DROPFILE . '</LABEL></td></tr>' .
         '</TD></TR>';
	unset($colorclass);
	}
    echo
      pageheader().
      '<PRE>'.
      $nav.
      '</PRE>'.
      '<FORM METHOD=POST ENCTYPE="multipart/form-data" ACTION="'.htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES).'?page=ftp">'.NL.
      '<INPUT TYPE=HIDDEN NAME="todo" VALUE="upload">'.NL.
      '<INPUT TYPE=HIDDEN NAME="page" VALUE="ftp">'.NL.
	  '<INPUT TYPE=HIDDEN NAME="targetdir" VALUE="'.htmlspecialchars($targetdir,ENT_QUOTES).'">'.NL.
      getparams() .
      '<B>'.STR_FILE_UPLOAD_TARGET.': '.htmlspecialchars($targetdir).'</B><BR>'.NL.
      '<BR>'.
      STR_FILE_UPLOAD_DESC.'<BR>'.NL.
      STR_FILE_UPLOAD_MAXFILESIZE.': '.ini_get('upload_max_filesize').'<BR><BR>'.NL.
      $str_note_upload.NL.
      '<br /><br /><TABLE class=blackborder CELLPADDING=0 cellspacing=0 width=100%%>'.NL.
      '<tr class="alternate"><td class="uploaderbbs">'.$str_files_to_upload.':</td><td class="uploaderbbs">'.$str_extract_with.':</td></tr>'.NL.
      $files.
      '</TABLE>'.
      '<BR>'.
      '<INPUT TYPE=SUBMIT VALUE="'.STR_FILE_UPLOAD.'">'.
      '</FORM>'.
      pagefooter();
  }
}

// ----------------------------------------------------------------------------
function init() {
global
  $default, $sortpass,
  $message, $current, $dirleft;

  // catch forbidden directory access
  if(isset($_REQUEST['f']))
  {
  	if(strpos($_REQUEST['f'], $default['STARTDIR_LEFT']) === false)
  	{
  	    die(pageheader() . STR_ACCESS_DENIED . pagefooter());
  	}
  }		

  // setting commonly used global variables
  $message = '';
  $old_error_handler = set_error_handler("fsguideErrorHandler");

  $current  = _r(getcwd());
  $dirleft  = isset($_REQUEST['lt']) ? $_REQUEST['lt'] :
          (
           strlen($default['STARTDIR_LEFT'])  ?
              _r($default['STARTDIR_LEFT'])  :
              $current
          );
  if (
      !eregi('^('.addslashes(_r(implode('|',$default['DIRACCESS']))).').*$',$dirleft) ||
      eregi('\.\.',$dirleft)
     )
	{
    die(pageheader() . STR_ACCESS_DENIED . pagefooter());
	}
  $sortpasses   = Array();
  $sortpasses[] = 'sortby0=' .(isset($_REQUEST['sortby0'])  ? $_REQUEST['sortby0']  : $default['PANEL_SORTBY']);
  $sortpasses[] = 'sortdir0='.(isset($_REQUEST['sortdir0']) ? $_REQUEST['sortdir0'] : $default['PANEL_SORTDIRECTION']);
  $sortpass     = implode(AMP, $sortpasses); // sorting parameters for GET
}

// ----------------------------------------------------------------------------
function filesystem_action($from, $to, $actionType) {
global $message;
  if (is_dir($from)) {

    $thisdir = opendir($from);

    while ($thisobject = readdir($thisdir))
      if (!ereg('^\.{1,2}$', $thisobject)) {

        if (is_dir("$from/$thisobject")) {
          $fullname = "$to/$thisobject";
          if ($actionType != 2) {
            mkdir($fullname);
            linpha_log('filemanager','notice',
                'User '.$_SESSION['user_name'].": created new dir (".$fullname.")");
          } 

          filesystem_action("$from/$thisobject", $fullname, $actionType);

          if ($actionType) {
            rmdir("$from/$thisobject");
            linpha_log('filemanager','notice',
                'User '.$_SESSION['user_name'].": removed dir (".$from/$thisobject.")");
          } 
        }
        else
          filesystem_action("$from/$thisobject", $to, $actionType);
      }
    closedir($thisdir);
  }
  else {
    $to .= "/" . basename($from);
    switch ($actionType) {
      case 1:  rename($from, $to); break;
      case 2:  unlink($from); break;
      default: $message .= "undefined action"; break;
    }
  }
}

// ----------------------------------------------------------------------------
function execute_action($action) {

global $dirleft, $message;

  $filelist = filelist();

  foreach($filelist as $sideflag=>$sidefiles) {
   	$sourceDir      = $dirleft;
    $destinationDir = $dirleft;

	foreach($sidefiles as $f) {

      switch ($action) {
        case 'delete': $passAction = 2; break;
        default:       $message .= 'Undefined action:' . $action . "<BR>\n";
      }
      
      $source = "$sourceDir/$f";
      $source_is_dir = is_dir($source);
      $destination = $destinationDir;

      if ($source_is_dir && ($passAction<2)) {
        $destination .= "/$f";
        mkdir($destination);
        linpha_log('filemanager','notice',
            'User '.$_SESSION['user_name'].": created new dir (".$destination.")");
      }

		/**
		* security check
		*/
		if($passAction == 2 && $f == 'albums')
		{
			echo 'For security reasons, we disable the delete function if the album to delete is "albums".<br />';
			echo 'You have to delete it with an ftp program or something similiar, sorry.<br />';
		}
		else
		{
	      filesystem_action($source, $destination, $passAction);
	
	      if (($passAction>0) && $source_is_dir) {
	        rmdir($source);
            linpha_log('filemanager','notice',
                'User '.$_SESSION['user_name'].": removed dir (".$source.")");
          }
        }
    }
  }
}

// ----------------------------------------------------------------------------
function determine_filetype($filename) {
global $default;

  // DETERMINE BY EXTENSION ---------------------------------------------------

  if (eregi('^.*\.(mp3)$',$filename))     	return 'audio/mp3';

  if (eregi('^.*\.(inc|phtml|php(3-4)?)$',$filename))
  						return 'text/phps';
  if (eregi('^.*\.(htm|html)$',$filename))
  						return 'text/html';
  if (eregi('^.*\.(doc|dot)$',$filename))       return 'text/msword';
  if (eregi('^.*\.(xls|xlt)$',$filename))       return 'text/msexcel';
  if (eregi('^.*\.rtf$',$filename))     	return 'text/rtf';
  if (eregi('^.*\.pdf$',$filename))     	return 'text/pdf';
  if (eregi('^.*\.ps$',$filename))      	return 'text/ps';

  // DETERMINE BY FILE CONTENTS -----------------------------------------------
  //
  // ... using the first $default['PAGER_BYTES'] bytes of the file
  // (we have to avoid reading the entire file into memory)

  $content = '';
  $file = fopen($filename,'r');
  $content = fread($file, $default['PAGER_BYTES']);
  fclose($file);

  // IMAGE by content -------------------------------
     $dimensions = strlen($content) ? linpha_getimagesize($filename) : '';
     if (is_array($dimensions))
       return 'image';

  // BINARY by content ------------------------------
     if (preg_replace('/[^\x09\x0c\x0d\x0a\x20-\x7f\x9f-\xfe]/',
           '.',$content)!=$content)
       return 'binary';

  // WHEN IT'S NOT BINARY NOR A KNOWN FILETYPE => TEXT

  return 'text/plain';

}

// ----------------------------------------------------------------------------
function display_file($filename) {
global $dirleft, $default;

  include_once(TOP_DIR.'/plugins/ftp/includes/viewer.inc.php');

  $pager_bytes = $default['PAGER_BYTES'];
  if (isset($_COOKIE['pager_bytes']))
    $pager_bytes = $_COOKIE['pager_bytes'];

  $start = 0;
  if (isset($_REQUEST['start'])) $start = $_REQUEST['start'];

  $type = determine_filetype($filename);
  switch ($type) {
    case 'image':	 view_image($filename, $pager_bytes); break;
    case 'audio/mp3':	 view_with_content_type($filename,'audio/mpeg'); break;
    case 'text/plain':   view_text($filename, $start, $pager_bytes); break;
    case 'text/html':    view_html($filename, $start, $pager_bytes); break;
    case 'text/phps':	 view_php($filename, $start, $pager_bytes); break;
    case 'text/msword':	 view_with_content_type($filename,'application/msword'); break;
    case 'text/msexcel': view_with_content_type($filename,'application/msexcel'); break;
    case 'text/pdf': 	 view_with_content_type($filename,'application/pdf'); break;
    case 'text/rtf': 	 view_with_content_type($filename,'application/rtf'); break;
    case 'text/ps': 	 view_with_content_type($filename,'application/postscript'); break;
    default:	         view_binary($filename, $start, $pager_bytes); break;
  }
}

// ----------------------------------------------------------------------------
function edit_file($filename) {
global $dirleft, $default;

  include_once(TOP_DIR.'/plugins/ftp/includes/editor.inc.php');

  $start = 0;
  if (isset($_REQUEST['start'])) $start = $_REQUEST['start'];

  $type = determine_filetype($filename);
  switch ($type) {
    case 'text/plain':   edit_text($filename); break;
    case 'text/phps':    edit_text($filename); break;
    default:	         edit_binary($filename); break;
  }
}

// ----------------------------------------------------------------------------
function save_textfile() {
global $message;
  if (is_writable($_REQUEST['f'])) {
    $f = fopen ( $_REQUEST['f'], 'w' );
    fputs ( $f, $_REQUEST['contents'] ) ;
    fclose ( $f ) ;
  }
  else
    $message .= sprintf(STR_EDITOR_SAVE_ERROR,$_REQUEST['f']);
}

// ----------------------------------------------------------------------------
function save_binaryfile() {
global $message, $default;

  if (is_writable($_REQUEST['f'])) {
    $string = '';

    $start = $_REQUEST['start'];
    $i = $start;
    while (isset($_REQUEST['i_'.$i])) {
      if ($default['EDITOR_BINEDITOR_DECIMAL_EDIT'])
        // decimal edit
        $check = ereg('^[0-9]{1,2}$',$_REQUEST['i_'.$i]);
      else
   	// hexadecimal editing
        $check = ereg('^[0-9a-fA-F]{1,2}$',$_REQUEST['i_'.$i]);

      if (!$check) {
        $message .= sprintf(
          STR_EDITOR_SAVE_ERROR_WRONG_VALUE .
          (
           $default['EDITOR_BINEDITOR_DECIMAL_EDIT'] ?
           STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED :
           STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED
          ),
          $_REQUEST['f'], $i, $_REQUEST['i_'.$i]
        );
        unset($_REQUEST['i_'.$i]);
      }
      else {
        $string .= chr(hexdec(trim($_REQUEST['i_'.$i])));
        $i++;
      }
    }

    if (!strlen($message)) {
      $f = fopen( $_REQUEST['f'], 'rb+' );
      flock($f, LOCK_EX);
      fseek($f, $start);
      fputs($f, $string, strlen($string));
      flock($f, LOCK_UN);
      fclose($f);
    }
  }
  else
    $message .= sprintf(STR_EDITOR_SAVE_ERROR,$_REQUEST['f']);

}

// ----------------------------------------------------------------------------
function panel($dir, $sideflag) {
global $default, $sortpass, $dirleft, $message, $filetypes, $filealts;

  if (!($hnd = @opendir($dir)))
    return '<TR><TD>'.STR_ERROR_DIR.'</TD></TR>';

  $dirleftparent  = fixed_dirname($dirleft);

  // COLLECT DIRECTORY INFORMATION
  //
  // $files is a kinda pervert multi-dimensional array
  // (uses eg. $files['filesize'][$number_of_file] instead of
  // $files[$number_of_file]['filesize'])
  // but I had to use this approach because the multisort() function
  // expects arrays of this structure

  $files = Array(
    'rowbegin' => Array(),  'icon'      => Array(),  'dir' => Array(),
    'isdotdir' => Array(),  'isdotdir1' => Array(),  'sortname' => Array(),
    'filename' => Array(),  'size'      => Array(),  'link' => Array(),
    'ctime' =>    Array(),  'atime'     => Array(),  'mtime' => Array(),
    'rights' =>   Array()
  );

  $i = 0;
  $sum['size']  = 0;
  $sum['files'] = 0;
  
  $use_posix = check_posix();
  
  if($use_posix) {
    $uid = @posix_getuid(); // get user id of current process
  } else {
    $uid = 0;
  }

  while(($filename = readdir($hnd))!==false)
  {

    $isdotdir1 = ($filename == '.');
    $isdotdir2 = ($filename == '..');
    $isdotdir  = $isdotdir1 || $isdotdir2;
	$dir = is_dir($dirleft . '/' . $filename );
    $passdirleft  = $dirleft;
    if (!$sideflag && $dir)
      $passdirleft =
        $isdotdir2 ?
          $dirleftparent
          :
          $dirleft . ($isdotdir1 ? '' : '/' . $filename);

    $icon    = '';
    $iconalt = '';

    eregi("^.*(\.([^\.]+))$", $filename, $nameparts);

    if (isset($nameparts[2])) {
      $ext = strtolower($nameparts[2]);
      foreach ($filetypes as $key=>$value) {
        $extensions = explode(',' , $value);
        if (in_array( $ext, $extensions )) {
          $icon    = $key;
          $iconalt = $filealts[$key];
        }
      }
      unset($nameparts);
    }

    if ($dir && !$isdotdir) { $icon = 'folder'; $iconalt = $filealts['folder']; }
    if ($isdotdir2) 	    { $icon = 'back';   $iconalt = $filealts['parentdir']; }

    $thisfileWithPath = $dirleft . '/' . $filename;
    $link = htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES)."?lt=".urlencode($passdirleft). AMP . "page=ftp" . AMP .
    
      $sortpass .
      ($dir ?
        '' : AMP . 'todo=openfile' . AMP . 'f=' . urlencode($thisfileWithPath));

    $stat = stat($thisfileWithPath);

    if ( !$isdotdir ) {
      $sum['size']  += $stat['size'];
      $sum['files']++;
    }

	if($use_posix) {
		$owner_info = @posix_getpwuid($stat['uid']);  // use @ because check_posix() can return true even if it fails...
		$group_info = @posix_getgrgid($stat['gid']);
	} else {
		$owner_info['name'] = '';
		$group_info['name'] = '';
	}

	/**
	* pay attention!!!!!
	* if you add entries in $files, you have to add them also in the array_multisort() function in line ~1043 !!
	*/

    $files['icon'][$i]      = ( strlen($icon) ? "<IMG BORDER=0 ALT='$iconalt' TITLE='$iconalt' SRC='plugins/ftp/images/icons/$icon.png'>" : SP);
    $files['dir'][$i]       = $dir;
    $files['isdotdir'][$i]  = $isdotdir;
    $files['isdotdir1'][$i] = $isdotdir1;
    $files['filename'][$i]  = htmlspecialchars($filename, ENT_QUOTES);
    $files['sortname'][$i]  = strtoupper($filename);
    $files['link'][$i]      = $link;
    $files['size'][$i]      = $stat['size'];
//    $files['ctime'][$i]     = date("Y-m-d H:i:s",$stat['ctime']);
//    $files['atime'][$i]     = date("Y-m-d H:i:s",$stat['atime']);
//    $files['mtime'][$i]     = date("Y-m-d H:i:s",$stat['mtime']);
    $files['ctime'][$i]     = linpha_strftime('',$stat['ctime']);
	$files['atime'][$i]     = linpha_strftime('',$stat['atime']);
	$files['mtime'][$i]     = linpha_strftime('',$stat['mtime']);
	$files['uid'][$i]       = $stat['uid'];
	$files['gid'][$i]       = $stat['gid'];
	$files['ownername'][$i] = $owner_info['name'];
	$files['groupname'][$i] = $group_info['name'];

	
	// file permissions
	if(getOS() == 'win')
	{
		$files['rights'][$i]    =
			'[' .
			(is_readable($thisfileWithPath) ? '<FONT CLASS="green">r</FONT>' : SP) .
			(is_writable($thisfileWithPath) ? '<FONT CLASS="red">w</FONT>' : SP) .
			(function_exists('is_executable') ?
				(is_executable($thisfileWithPath) ? '<FONT CLASS="blue">x</FONT>' : SP)
				:
				SP
				) .
			']';
	} else {
		$perm = '['.get_readable_fileperms($thisfileWithPath).']';
		
		$perm = str_replace('r','<FONT CLASS="green">r</FONT>',$perm);
		$perm = str_replace('w','<FONT CLASS="red">w</FONT>',$perm);
		$perm = str_replace('x','<FONT CLASS="blue">x</FONT>',$perm);
		
		if($uid == $stat['uid'])
		{
			$files['rights'][$i] = '<a href="'.htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES).'?lt='.urlencode($dirleft). AMP .
				'todo=change_perm_form'. AMP .
				'f='.urlencode($thisfileWithPath). AMP .
				'page=ftp">'. $perm .
				'</a>';
		}
		else
		{
			$files['rights'][$i] = $perm;
		}
	}
	
    $i++;
  }

  closedir($hnd);

  // SORT CONTENTS ------------------------------------------------------------

  // 'sort by' field per side and 'sort by' field of current panel ------------
  $sortby0 = $default['PANEL_SORTBY'];

  if (isset($_REQUEST['sortby0']) && in_array($_REQUEST['sortby0'],Array('name','size','mtime')))
    $sortby0 = $_REQUEST['sortby0'];
  $sortby = $sortby0;

  // 'sort direction' per side and 'sort direction' of current panel ----------
  $sortdir0 = $default['PANEL_SORTDIRECTION'];

  if (isset($_REQUEST['sortdir0']) && ($_REQUEST['sortdir0']=='desc'))
    $sortdir0 = SORT_DESC;
  $sortdir = $sortdir0;

  // the $sort array is going to be a two-dimensional array.
  // it's gonna contain arrays that are containing the parameter-
  // triples for multisort():
  //
  //   $sort[n] = Array('field_name_of_files_array', sort_direction, sort_type);
  //
  // as defined below ($bydir, $byfilename, etc.)
  // these arrays are going to be inserted into the $sort array
  // in the order needed
  //
  $bydir      = Array('dir',      SORT_DESC, SORT_STRING);
  $byfilename = Array('sortname', SORT_ASC,  SORT_STRING);
  $bysize     = Array('size',     SORT_ASC,  SORT_NUMERIC);
  $bymtime    = Array('mtime',    SORT_ASC,  SORT_STRING);

  $sort = Array();

  // in the parameter-array corresponding the user-chosen sort
  // field (eg. $by...) we always change the second field (the
  // sort direction), that's what $by...[1] = $sortdir; is for.
  // other fields' sort order are used as defaults

  // if the user wants to see the directories first,
  // we only have to change the order of arrays

  if ($default['PANEL_DIRSFIRST'])
    switch ($sortby) {
      case 'size':  $bysize[1]  = $sortdir;     $sort = Array($bydir, $bysize, $byfilename, $bymtime); break;
      case 'mtime': $bymtime[1] = $sortdir;     $sort = Array($bydir, $bymtime, $byfilename, $bysize); break;
      default:      $byfilename[1]  = $sortdir; $sort = Array($bydir, $byfilename, $bysize, $bymtime); break;
    }
  else
    switch ($sortby) {
      case 'size':  $bysize[1]  = $sortdir;     $sort = Array($bysize, $byfilename, $bymtime, $bydir); break;
      case 'mtime': $bymtime[1] = $sortdir;     $sort = Array($bymtime, $byfilename, $bysize, $bydir); break;
      default:      $byfilename[1]  = $sortdir; $sort = Array($byfilename, $bysize, $bymtime, $bydir); break;
    }

  array_multisort(
    // 'dot directories' (eg. '.' and '..') are always
    // in the first place
  	$files['isdotdir'],  SORT_DESC, SORT_STRING,
    $files['isdotdir1'], SORT_DESC, SORT_STRING,

    $files[ $sort[0][0] ], $sort[0][1], $sort[0][2],
    $files[ $sort[1][0] ], $sort[1][1], $sort[1][2],
    $files[ $sort[2][0] ], $sort[2][1], $sort[2][2],
    $files[ $sort[3][0] ], $sort[3][1], $sort[3][2],

    /*
       we have to include remaining fields in the sorting procedure
       too, to keep the multi-dimensional array consistent
    */

    $files['atime'],
    $files['ctime'],
    $files['rights'],
    $files['icon'],
    $files['link'],
    $files['filename'],
	$files['ownername'],
	$files['groupname']
  );

  // RENDERING FILEPANEL

  $out = '';

  for ($i = 0; $i < count($files['filename']); $i++) {
    $showname = $files['filename'][$i];
    if (strlen($showname) > $default['PANEL_FILENAME_MAXLENGTH'])
      $showname = substr($files['filename'][$i],0, $default['PANEL_FILENAME_MAXLENGTH']) . $default['PANEL_FILENAME_APPEND'];
//       ($files['isdotdir1'][$i] ? "<INPUT TYPE=CHECKBOX NAME='cbxall' ONCLICK='fillboxes($sideflag)'>" : '') .

    $out .=
      '<TR '.($i % 2 == 0 ? 'CLASS="alternate" ' : '').'>'. NL .
      '  <TD CLASS="ftpborderright" WIDTH="25">' .
        (!$files['isdotdir'][$i] ? "<INPUT TYPE=CHECKBOX NAME='cbx$sideflag$i' VALUE='".htmlspecialchars($files['filename'][$i],ENT_QUOTES)."'>" : '') .
        '&nbsp;'.
      '</TD>' . NL .

      '  <TD CLASS="ftpborderright" width="25">' .
        $files['icon'][$i] .
      '</TD>' . NL .

      '  <TD CLASS="ftpborderright" width="50%">' .
        "<A class='mainfileview' TITLE='".$files['filename'][$i]."' HREF='".$files['link'][$i]."'>" .
          ($files['dir'][$i] ? '<B>'.$showname.'</B>' : $showname) . "</A>" .
      '</TD>' . NL .

      '  <TD CLASS="ftpborderright" ALIGN=RIGHT>' .
        (!$files['isdotdir'][$i] && !$files['dir'][$i] ? number_format($files['size'][$i]) : SP) .
      '</TD>' . NL .

      '  <TD CLASS="ftpsmall ftpborderright" ALIGN=CENTER TITLE="created: '.
        $files['ctime'][$i].', last access: '.$files['atime'][$i].'">' .
        $files['mtime'][$i] .
      '</TD>' . NL.
      '<TD WIDTH=20 CLASS="mono" title="'.$files['ownername'][$i].' '.$files['groupname'][$i].'">' .
        $files['rights'][$i] .
      '</TD>' . NL .
      '</TR>' . NL;
  }

  // APPLY HEADER AND FOOTER ON THE CURRENT PANEL -----------------------------

  $sortdir  = $sortdir  == 4 ? 'asc' : 'desc';
  $sortdir0 = $sortdir0 == 4 ? 'asc' : 'desc';
  //$sortdir1 = $sortdir1 == 4 ? 'asc' : 'desc';

  $sortlink ='<A HREF="'.htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES).AMP.'lt='.str_replace("%","%%", urlencode($dirleft)). AMP;

  if ($sideflag==0)
    $sortlink .=
      'page=ftp'.AMP.
      'sortby0=%s'.AMP.
      'sortdir0=%s">%s</A>';
  else
    $sortlink .=
      'sortby0='.  $sortby0 .AMP.
      'sortdir0='. $sortdir0.AMP.
      'page=ftp';

  $out =
    '<TR CLASS="headerfooter">'. NL .
    '<TD CLASS="ftpborderright ftpborderhoriz">'.SP.'</TD>'.NL.
    '<TD CLASS="ftpborderright ftpborderhoriz">'.SP.'</TD>'.NL.
    '<TD CLASS="ftpborderright ftpborderhoriz">'.STR_FILENAME.'&nbsp;'.
       sprintf($sortlink,'name', 'asc', sprintf(SORT_UP, STR_FILENAME)).
       sprintf($sortlink,'name', 'desc',sprintf(SORT_DN, STR_FILENAME)).'</TD>'.NL.
    '<TD CLASS="ftpborderright ftpborderhoriz">'.STR_FILESIZE.
       sprintf($sortlink,'size', 'asc', sprintf(SORT_UP, STR_FILESIZE)).
       sprintf($sortlink,'size', 'desc',sprintf(SORT_DN, STR_FILESIZE)).'</TD>'.NL.
    '<TD CLASS="ftpborderright ftpborderhoriz">'.STR_LASTMODIFIED.'&nbsp;'.
       sprintf($sortlink,'mtime','asc', sprintf(SORT_UP, STR_LASTMODIFIED)).
       sprintf($sortlink,'mtime','desc',sprintf(SORT_DN, STR_LASTMODIFIED)).'</TD>'.NL.
    '<TD CLASS="ftpborderhoriz">'.SP.'</TD>'.NL.
    '</TR>'.NL.

      $out .

    '<TR CLASS="headerfooter">'. NL .
    '<TD CLASS="ftpborderright ftpborderhoriz">'.SP.'</TD>'.NL.
    '<TD COLSPAN=3 CLASS="ftpborderright ftpborderhoriz" ALIGN=CENTER>'.
       sprintf(STR_SUM, number_format( $sum['size'] ), $sum['files'] ).
       '</TD>'.NL.
    '<TD CLASS="ftpborderright ftpborderhoriz">'.SP.'</TD>'.NL.
    '<TD CLASS="ftpborderhoriz">'.SP.'</TD>'.NL.
    '</TR>'.NL;

  // hunt and replace the image of the current order to an inverted image
  // by the link around it
  // (sort_up.gif => sort_inv_up.gif, sort_dn.gif => sort_inv_dn.gif )
  // [it's much easier than placing dozens of 'if' or ' ? : ' structures
  //  in the previous block]

  $regexp =
    "(<A.*sortby".$sideflag."=".$sortby.".*sortdir".$sideflag."=".$sortdir.".*SRC=.*)sort_(.*) (.*<\/A>)";
  $out    = preg_replace("/$regexp/U","\\1sort_inv_\\2 \\3",$out);

  return $out;

}

// ----------------------------------------------------------------------------
function display() {
global $dirleft, $message, $str_copy;

  $hiddenparameters =
    "<INPUT TYPE='hidden' NAME='lt' VALUE= '".htmlspecialchars($dirleft,ENT_QUOTES)."'>".NL.
    "<INPUT TYPE='hidden' NAME='page' VALUE= 'ftp'>".NL.
	"<INPUT TYPE='hidden' NAME='todo' VALUE= ''>".NL.
  //  getparams(Array('sortby0','sortdir0','sortby1','sortdir1'));
  getparams(Array('sortby0','sortdir0'));

  $columnskeleton =
    '<TD VALIGN=TOP WIDTH=50%%>'.NL.
    '  <TABLE CELLPADDING=0 CELLSPACING=0 WIDTH=100%%>'.NL.
    '    <CAPTION CLASS="naviline">'.STR_FILE_UPLOAD_NAVI_HINT.': %s</CAPTION>'.NL.
    '%s'.
    '</TABLE>'.NL.
    '</TD>';

  $menu = indent(
    '<CENTER>' . NL .
    '' . NL .
    '<TABLE CELLSPACING=5 CELLPADDING=0 BORDER=0>' . NL .
    '<TR>' .
      '<TD>'.'<A HREF="#%s">%s</A>'.'</TD>'.
      '<TD ALIGN=RIGHT>'.
      '  <INPUT TYPE="button" CLASS="button" NAME="submit_button" onclick="submit_todo(\'rename_form\')" VALUE="'.STR_RENAME.'">'.NL.
      '  <INPUT TYPE="button" CLASS="button" NAME="submit_button" onclick="submit_todo(\'copy_form\')" VALUE="'.$str_copy.'">'.NL.
      '  <INPUT TYPE="button" CLASS="button" NAME="submit_button" onclick="submit_todo(\'delete\')" VALUE="'.STR_DELETE.'">'.NL.
      '  <INPUT TYPE="button" CLASS="button" NAME="submit_button" onclick="submit_todo(\'mkdir_form\')" VALUE="'.STR_MKDIR.'">'.NL.
        (ini_get('file_uploads') ?
          '  <INPUT TYPE="button" CLASS="button" NAME="submit_button" onclick="submit_todo(\'upload_form\')" VALUE="'.STR_FILE_UPLOAD_MAIN.'">'.NL
          : '').
      '</TD>'.
	  '<TD>'.'<A HREF="#%s">%s</A>'.'</TD>'.
      '</TR>'.
      '</TABLE>'. NL.
    '</CENTER>'.NL,
    '  ');

  define('DISPLAY_ERRORS', 1);
?>
<script language="JavaScript" type="text/javascript">
function submit_todo(var_todo)
{
	document.theform.todo.value = var_todo;
	document.theform.submit();
}
</script>

<?php

  echo
    pageheader() .
    (strlen($message) ?
      sprintf($message, $hiddenparameters) . NL : '') .
    "<FORM METHOD=GET NAME='theform' ACTION='".htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES)."'>" . NL .
      $hiddenparameters . NL .
      sprintf($menu,'bottom',STR_BOTTOM,'bottom',STR_BOTTOM) . NL .
    "  <TABLE WIDTH='100%' CELLPADDING=0 CELLSPACING=0 CLASS='blackborder'>".NL.
    "    <TR>" . NL.

        indent(
          sprintf(
            $columnskeleton,
            navigatorline($dirleft,  0),
            indent(panel($dirleft, 0),'    ')),
          '      ') . NL .
    "    </TR>". NL .
    "  </TABLE>". NL .
      sprintf($menu,'top',STR_TOP,'top',STR_TOP) . NL .
    "</FORM>" . NL .
    pagefooter();
}

// ----------------------------------------------------------------------------
function driveletters($sideflag) {
global $default, $dirleft, $sortpass;

  // drive selector should be used under Windows only

  $out = '';

  if (eregi('^.*WIN.*$',PHP_OS)) {

    $drives = $default['DRIVES'];
    if (!count($drives)) {

      // setup an array containing possible drive letters: A-Z
      for ($i='A'; $i<'Z'; $i = chr(ord($i) + 1))
        $possible_drives[] = $i;

      // grep drive letters to scan specified by config
      foreach ($default['DRIVES_TO_SCAN'] as $value) {
        $driveinterval = preg_grep('/['.$value.']/', $possible_drives);
        foreach ($driveinterval as $drivetoscan)
            $drives[] = $drivetoscan;
      }
    }
    foreach ($drives as $key=>$value)
      if (!is_dir($value.':'))
        unset($drives[$key]);

    asort($drives);

    $out .= '<BR>'.STR_FILE_UPLOAD_DRIVES.'';
    foreach ($drives as $value) {
      $value = strtolower($value) . ':';
      $out .='<A CLASS="naviline" HREF="'.htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES).'?'.
         'lt='.($sideflag==0 ? $value : $dirleft) .
         AMP.'page=ftp'.AMP.
         $sortpass .
         '">'.$value .'</A> ';
    }
  }

  return $out;
}

// ----------------------------------------------------------------------------
function navigatorline($d, $sd) {
global $sortpass;

 $p = "<A class='naviline' HREF='".htmlspecialchars($_SERVER['PHP_SELF'],ENT_QUOTES)."?lt=%s". AMP . "page=ftp'>%s</A>";
if (ereg('^([a-zA-Z]?:?\/?)$', $d, $r))
{
	$d = $r[1];
	return sprintf($p, urlencode($d), htmlspecialchars($d, ENT_QUOTES));
}else
{
	$b = basename($d);
	$d = fixed_dirname($d);
	$x = $d=='/' ? $d . $b : "$d/$b";

	return
	navigatorline($d, $sd) .
	($d=='/' ? '' : '/') .
        sprintf($p, urlencode($d), htmlspecialchars($b, ENT_QUOTES));
}
}

// ----------------------------------------------------------------------------
function filelist() {

  $f = Array();
  foreach($_REQUEST as $k=>$v)
  {
    if (ereg('^cbx([01]{1})[0-9]+$', $k, $results))
    {
      $f[$results[1]][] = $v;
    }
  }
  return $f;

}

// ----------------------------------------------------------------------------
function fixed_dirname($s) {

  $s = _r(dirname($s));
  if (ereg("([A-Za-z]:)/$", $s, $r))
    $s = $r[1];
  return $s;

}

// ----------------------------------------------------------------------------
function _r($s) {
  return str_replace('\\', '/', $s);
}

// ----------------------------------------------------------------------------
function indent($string, $indent) {
  return preg_replace('/^(.*)$/m',$indent."\\1",$string);
}

// ----------------------------------------------------------------------------
function pageheader() {
global $default;

  return '<A NAME="top"></A>'.NL;
}

// ----------------------------------------------------------------------------
function pagefooter() {
  return '<A NAME="bottom"></A>'.NL;
}

// ----------------------------------------------------------------------------
function getparams
  (
 // $params = Array('lt','rt','sortby0','sortdir0','sortby1','sortdir1','f')
    $params = Array('lt','sortby0','sortdir0','f')
  ) {
  $out = '';
  foreach ($params as $value) {
    if (isset($_REQUEST[$value]))
      $out .= '<INPUT TYPE=HIDDEN NAME="'.$value.'" VALUE="'.htmlspecialchars($_REQUEST[$value], ENT_QUOTES).'">' . NL;
  }
  return $out;
}

/**
* found on http://ch.php.net/manual/en/function.fileperms.php
* @author  flo
*/
function get_readable_fileperms($file)
{
	$perms = fileperms($file);
	
	$info = '';
	
	if (($perms & 0xC000) == 0xC000) {
	// Socket
	$info .= 's';
	} elseif (($perms & 0xA000) == 0xA000) {
	// Symbolic Link
	$info .= 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
	// Regular
	$info .= '-';
	} elseif (($perms & 0x6000) == 0x6000) {
	// Block special
	$info .= 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
	// Directory
	$info .= 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
	// Character special
	$info .= 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	// FIFO pipe
	$info .= 'p';
	} else {
	// Unknown
	$info .= 'u';
	}
	
	// Owner
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
			(($perms & 0x0800) ? 's' : 'x' ) :
			(($perms & 0x0800) ? 'S' : '-'));
	
	// Group
	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
			(($perms & 0x0400) ? 's' : 'x' ) :
			(($perms & 0x0400) ? 'S' : '-'));
	
	// World
	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
			(($perms & 0x0200) ? 't' : 'x' ) :
			(($perms & 0x0200) ? 'T' : '-'));
	

	return $info;
}

?>