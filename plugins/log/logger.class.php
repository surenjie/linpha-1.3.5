<?php
/*
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


$array_types = Array('login'=>'login',
                    'db'=>'db',
                    'filemanager'=>'filemanager',
                    'thumbnail'=>'thumbnail',
                    'update'=>'update',
                    'guestbook'=>'guestbook',
                    'comments'=>'comments');

$array_methods = Array('none'=>'none',
					   'syslog'=>'syslog',
					   'file'=>'file',
					   'email'=>'email',
					   'db'=>'db');
 
/**
 * linpha logging function
 * 
 * valid log types:
 * login
 * thumbnail
 * update
 * db
 * filemanager
 * guestbook
 * comments
 * 
 * Severity:
 * notice
 * warning
 * error
 * fatal
 * 
 * @author  Vytautas
 * @param  string  $type  log types
 * @param  string  $severity  from notice - fatal error
 * @param  string  $text
 */

function linpha_log($type,$severity,$text)
{
    if(read_plugins_config('log'))
    {
        $method_str = read_config('log_method_'.$type);
        $methods = explode(';',$method_str);
    
		$type_msg = linpha_log_type($type);    
        
    /**
         * Set Log Severity Output Message
         */
        switch($severity)
        {
        case 'notice':
            $severity_msg = 'NOTICE';
            $severity_syslog = LOG_NOTICE;
            break;
        case 'warning':
            $severity_msg = 'WARNING';
            $severity_syslog = LOG_WARNING;
            break;
        case 'error':
            $severity_msg = 'ERROR';
            $severity_syslog = LOG_ERR;
            break;
        case 'fatal':
            $severity_msg = 'FATAL ERROR';
            $severity_syslog = LOG_CRIT;
            break;
        }
        
        /**
         * Setup Log Time Output Message & Remote IP
         * 
         * do not use linpha_strftime() because language file is not included
         * most times (for example during upgrade, logout, login)
         */
        $time = strftime("%Y%m%d %H%M%S",time());
        $ip   = $_SERVER["REMOTE_ADDR"];

		/**
		 * don't trust $text (contains $_GET and $_POST data)
		 * see also linpha advisory http://secunia.com/advisories/18808/
		 * and for more details http://retrogod.altervista.org/linpha_10_local.html 
		 */
		$text = htmlspecialchars($text, ENT_QUOTES);

        /**
         * Process Log
         */
        if(in_array('syslog',$methods))
        {
            syslog($severity_syslog, "LinPHA $type_msg | $severity_msg | $time | $ip | $text");
        }
    
        if(in_array('file',$methods))
        {
            $filename = get_full_path(read_config('log_filename'));
            error_log("$type_msg | $severity_msg | $time | $ip | $text\n", 3, $filename);
        }
    
        if(in_array('email',$methods))
        {
            $email = read_config('log_email');
            $email_subject = read_config('log_email_subject');
            $email_headers = read_config('log_email_headers');
    
            mail($email,$email_subject,"$type_msg | $severity_msg | $time | $ip | $text",$email_headers);
        }
    
        if(in_array('db',$methods))
        {
            $insert = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."log (time, type, severity, message, ip) ".
                "VALUES ('".time()."','".$type_msg."','".$severity_msg."','".$text."','".$ip."')");
        }

    }	// end if read_plugins_config('log'))
}

function linpha_log_type($type) {
	
	switch($type)
    {
    case 'login':
        return 'USER';
        break;
    case 'update':
        return 'UPDATE';
        break;
    case 'thumbnail':
        return 'THUMBNAIL';
        break;
    case 'filemanager':
        return 'FILEMANAGER';
        break;
    case 'db':
        return 'DATABASE';
        break;
	case 'guestbook':
		return 'GUESTBOOK';
        break;
	case 'comments':
	    return 'COMMENTS';
        break;
    }
}