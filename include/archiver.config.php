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
* you can add own paths or new apps
*
* use only forward slashes ('/') for paths, even under windows
*
* if 'look_for' is an array with the first entry 'no', this app isn't searched
* use this only if you are sure that this app is in the path, like 'tar' which is normally always
* in one of the path variable
*
* {executable}, {archive_name} and {files} will be replaced with the correct parameters
* hint: {executable} will be replaced with the fullpath executable, not only the executable given
* in the array $appps[]['executable']
*
* the extract commands are used for the integrated filemanager, so don't forget
*
* you cannot use spaces in the executable path!! if you want to use a program which is installed in c:/program files/...
* you have to use c:/progra~1/...
* alternatively you can install it in another place or add the executable path to the PATH variable
*
* and if it works, please mail me a copy of your new entries
* at linpha AT angehrn DOT com
* OR bzrudi AT tuxpower DOT de
*/

switch(getOS())
{
	case 'unix':
		// tar
		$this->apps['tar'] = Array('look_for' => Array('no'),
									'executable' => 'tar',
									'command' => 'tar -cf {archive_name} {files}',
									'executable_extract' => 'tar',
									'command_extract' => 'tar -xf {archive_name}',
									'file_ext' => 'tar',
									'mime' => 'application/x-tar');

		// gzip
		$this->apps['gzip'] = Array('look_for' => Array('/bin','/usr/bin','/usr/local/bin'),
									'executable' => 'gzip',
									'command' => 'tar -cf - {files} | {executable} -1 > {archive_name}',
									'executable_extract' => 'gzip',
									'command_extract' => '{executable} -d < {archive_name} | tar -xvf -',
									'file_ext' => 'tar.gz',
									'mime' => 'application/x-compressed-tar');
		
		// bzip2
		$this->apps['bzip2'] = Array('look_for' => Array('/usr/bin','/bin','/usr/local/bin'),
									'executable' => 'bzip2',
									'command' => 'tar -cf - {files} | {executable} -1 > {archive_name}',
									'executable_extract' => 'bzip2',
									'command_extract' => '{executable} -d < {archive_name} | tar -xvf -',
									'file_ext' => 'tar.bz2',
									'mime' => 'application/x-bzip-compressed-tar');

		// zip
		$this->apps['unixzip'] = Array('look_for' => Array('/usr/bin','/bin','/usr/local/bin'),
									'executable' => 'zip',
									'command' => '{executable} -1jvn '.$this->ignoreFileext('.',':').' {archive_name} {files}',
									'executable_extract' => 'unzip',
									'command_extract' => '{executable} -o -L {archive_name}',
									'file_ext' => 'zip',
									'mime' => 'application/zip');
		
		// rar
		$this->apps['winrar'] = Array('look_for' => Array('/usr/bin','/bin','/usr/local/bin'),
									'executable' => 'rar',
									'command' => '{executable} a -ms['.$this->ignoreFileext('',',').'] {archive_name} {files}',
									'executable_extract' => 'rar',
									'command_extract' => '{executable} x -y {archive_name}',
									'file_ext' => 'rar',
									'mime' => 'application/x-rar-compressed');
		/**
		* @todo  arj, ??
		*/

		//$this->path_delimiter = ':';		
	break;
	case 'win':
		// WinZip Command Line Support Add-On
		// tested with WinZip version 9.0
		// not working with the evalution mode!!
        // not working if cmd string is longer than 2048 chars!
        // this problem does not exists with winrar and 7-Zip
		$this->apps['winzip'] = Array('look_for' => Array('c:/progra~1/winzip','c:/winzip'),
									'executable' => 'wzzip.exe',
									'command' => '{executable} -ybc {archive_name} {files}',
									'executable_extract' => 'wzunzip.exe',
									'command_extract' => '{executable} -ybc {archive_name}',		// x: extract, -y answer always 'yes' (for overwriting)
									'file_ext' => 'zip',
									'mime' => 'application/zip');

	
		// winrar
		// tested with winrar version 3.2
		$this->apps['winrar'] = Array('look_for' => Array('c:/progra~1/winrar','c:/winrar'),
									'executable' => 'rar.exe',
									'command' => '{executable} a -ms['.$this->ignoreFileext('',',').'] {archive_name} {files}',
									'executable_extract' => 'rar.exe',
									'command_extract' => '{executable} x -y {archive_name}',		// x: extract, -y answer always 'yes' (for overwriting)
									'file_ext' => 'rar',
									'mime' => 'application/x-rar');

		// PowerArchiver Command Line (PACL)
		// tested with PowerArchiver Command Line Version 3.51			
		$this->apps['PAcl_zip'] = Array('look_for' => Array('c:/Pacl','c:/progra~1/Pacl'),
									'executable' => 'Pacomp.exe',
									'command' => '{executable} -a {archive_name} {files}',
									'executable_extract' => 'Paext.exe',
									'command_extract' => '{executable} -d {archive_name}',
									'file_ext' => 'zip',
									'mime' => 'application/zip');

		// pkzip
		/* doesn't supported!! pkzip only allows a few images as parameters, use pkzip32 or pkzipc instead!
		$this->apps['pkzip'] = Array('look_for' => Array(),
									'executable' => 'pkzip.exe',
									'command' => '{executable} -a {archive_name} {files}',
									'executable_extract' => '',
									'command_extract' => '',
									'file_ext' => 'zip',
									'mime' => 'application/zip');
		*/

		// pkzip32
		/* not yet tested, does pkzip32 still exists..?!
		$this->apps['pkzip32'] = Array('look_for' => Array(),
									'executable' => 'pkzip32.exe',
									'command' => '',
									'executable_extract' => '',
									'command_extract' => '{executable} -nofix -ext -dir -overwrite -nozipextension {archive_name} 2>&1';
									'file_ext' => 'zip',
									'mime' => 'application/zip');
		*/

		// pkzipc PKZIP Command Line
		// tested with pkzip cli version 8.0
		$this->apps['pkzipc'] = Array('look_for' => Array('c:/progra~1/pkware/pkzipc'),
									'executable' => 'pkzipc.exe',
									'command' => '{executable} -add {archive_name} {files}',
									'executable_extract' => 'pkzipc.exe',
									'command_extract' => '{executable} -extract -overwrite=all {archive_name}',
									'file_ext' => 'zip',
									'mime' => 'application/zip');

		// Commandline Ace (ACE für DOS) 
		// tested with  Commandline Ace version 2.04
		// no default installation directory
		$this->apps['ace'] = Array('look_for' => Array('c:/progra~1/WinAce','c:/ace'),
									'executable' => 'Ace32.exe',
									'command' => '{executable} a {archive_name} {files}',
									'executable_extract' => 'Ace32.exe',
									'command_extract' => '{executable} x -o -y {archive_name}',		// -o: overwrite, -y answer always 'yes'
									'file_ext' => 'ace',
									'mime' => 'application/x-ace');

        // 7-Zip http://www.7-zip.org/
        // tested with Version 3.13
        // thanks to adrian
        $this->apps['7Zip'] = Array('look_for' => Array('c:/progra~1/7-Zip','c:/progra~1/xampp/7Zip'),
                                    'executable' => '7z.exe',
                                    'command' => '{executable} a -tzip {archive_name} {files}',
                                    'executable_extract' => '7z.exe',
                                    'command_extract' => '{executable} e {archive_name}',
                                    'file_ext' => 'zip',
                                    'mime' => 'application/Zip'); 

		/**
		* @todo  !Freebyte Zip http://www.freebyte.com/fbzip/#cmd
		* @todo  Ultimate Zip http://www.ultimatezip.com/download.htm
@todo  Arj http://arj.sourceforge.net/
		*/

		//$this->path_delimiter = ';';
	break;
}


?>