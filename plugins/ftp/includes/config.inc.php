<?php
/*
access to directories above the ones in this array will be denied
DO NOT USE trailing \ or /

OK, now we have to rebuild the "real" path to the users webroot. This is some kind
of trick but works. The original way failed on vservers and ~xyz homes ;-)
we use the scriptname to build the path

restrict access to linpha directory OR to albums/ if uploader group
*/

if(in_group('uploader'))
{
    $linpha_dir = realpath(TOP_DIR);
	$linpha_dir = str_replace('\\','/',$linpha_dir);
	
	if(in_group('admin'))
	{
		$default['DIRACCESS'] = Array($linpha_dir);
		$default['STARTDIR_LEFT']   = $linpha_dir;
	}
	else
	{
		$default['DIRACCESS'] = Array($linpha_dir.'/albums');
		$default['STARTDIR_LEFT']   = $linpha_dir.'/albums';
	}
}
else
{
	$default['DIRACCESS'] = Array('asdfasdfasdf');	// doesnt work if it is empty!!
	$default['STARTDIR_LEFT']   = '';
}


// ------------ GENERAL AND ACCESS --------------------------------------------

$default['LOCALE']  = "$html_lang"; // read from language file
$default['CHARSET'] = "$html_charset";




// drives to access under Windows
// - if you leave the array empty, FSGuide will scan all available drives
//   (see next config option)
// - do NOT use ':' after the drive letters, for example:
//     Array('C','D','W');
//
// - empty it for Linux, like: Array();
//
$default['DRIVES']              = Array();

// you can specify drive letters or letter intervals to scan
//
// - it's ONLY used if you leave the $default['DRIVES'] array empty.
// - FSGuide will try to open the root dirs of all the drives specified,
//   that's why it's a good reason to use this parameter
// eg.:
//   Array('C-H');
//   Array('C-E','J','S-Z');
//
$default['DRIVES_TO_SCAN']      = Array();

// ------------ PANEL CONTENTS ------------------------------------------------

// show directories first in the panels (true or false)
$default['PANEL_DIRSFIRST']          = true;

// default sort field ('name', 'size', or 'mtime')
$default['PANEL_SORTBY']             = 'name';

// default sort direction
$default['PANEL_SORTDIRECTION']      = SORT_ASC;   // SORT_ASC, SORT_DESC

// too long filenames are cut, you can specify maximum filename length
$default['PANEL_FILENAME_MAXLENGTH'] = 55;

// you may append a string (eg. '...', '&gt;' or anything else)
// when a filename is cut
$default['PANEL_FILENAME_APPEND']    = '...';

// ------------ EDITOR --------------------------------------------------------

// size of textarea field for text editing
$default['EDITOR_COLS'] = 80;
$default['EDITOR_ROWS'] = 25;

// use decimal values in binary editor?
$default['EDITOR_BINEDITOR_DECIMAL_EDIT'] = 0;

// recommended [default]: 256 bytes per page and 16 bytes per line
$default['EDITOR_BINEDITOR_BYTES_PERSCREEN'] = 252;
$default['EDITOR_BINEDITOR_BYTES_PERLINE']   = 16;

// there's a page selector select box when editing binary files
// you can specify the resolution of this pager in percents
//
// (having a 120kb file, and a 10% setting you'll have a select option
// at every 12kbs)
$default['EDITOR_BINEDITOR_PAGER_PERCENTS']  = 5;

// ------------ VIEWER --------------------------------------------------------

// the 'built-in PHP viewer' creates a function list
// you can specify the number of functions in the listing table per row
$default['VIEWER_FUNCTIONS_PER_LINE'] = 4;

// number of bytes (characters) to display - both for binary files and
// textfiles
$default['PAGER_BYTES']               = 20000;

// HTML highlighter colors:

  // HTML tag delimiter ( the '<' and '>' characters)
  $default['VIEWER_HTML_COLORS_TAG']      = '#808080';

  // HTML tag name ( eg. BODY )
  $default['VIEWER_HTML_COLORS_TAGNAME']  = '#0000FF';

  // HTML parameter name ( eg. WIDTH )
  $default['VIEWER_HTML_COLORS_PARNAME']  = '#000080';

  // HTML parameter value ( eg. "100%" )
  $default['VIEWER_HTML_COLORS_PARVALUE'] = '#800000';

// ------------ FILE UPLOADER -------------------------------------------------

// defines how much file inputs to show when uploading a file
$default['UPLOAD_NUMBER_OF_FILE_CONTROLS'] = 5;

// applications offered to run upon successful file upload
// you can use the following replacements:
//
//   %fullname - the full file path and filename of the uploaded file
//		 in the target directory (eg. /uploaded/files/example.zip)
//   %filename - only the filename of the uploaded file (eg. example.zip)
//   %dir      - only the target directory path, no trailing slash
//		 (eg. /uploaded/files)

/*
$default['UPLOAD_APPLICATIONS'] =
  Array(
		Array(
		'name' 		=> "$extract_tar_gz",
		'commandline' 	=> 'gzip -d < "%fullname" | tar -xvf -'
		),
		Array(
		'name' 		=> "$extract_tar_bz2",
		'commandline' 	=> 'bzip2 -d < "%fullname" | tar -xvf -'
		),
		Array(
		'name' 		=> "$extract_gz",
		'commandline' 	=> 'gzip -d "%fullname"'
		),
		Array(
		'name' 		=> "$extract_zip",
		'commandline' 	=> 'unzip -o -L "%fullname" -d "%dir"'
		),
		Array(
		'name' 		=> "$extract_winzip",
		'commandline' 	=> 'pkzip32 -nofix -ext -dir -overwrite -nozipextension "%fullname" "%dir" 2>&1'
		)
  );*/
?>
