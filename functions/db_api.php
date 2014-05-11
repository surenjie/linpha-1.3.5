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
* db_api.php: SQL related functions
*/

if(!defined('TOP_DIR')) { define('TOP_DIR','..'); }

include_once(TOP_DIR.'/include/db_connect.php');
include_once(TOP_DIR.'/functions/functions.php');


$mydirectory="albums";
global $db;


define('P',PREFIX."photos");
define('C',PREFIX."image_comments");
define('E',PREFIX."meta_exif");
define('I',PREFIX."meta_iptc");
define('A',PREFIX."album_comments");

/**
* create linpha_config array
*
* $linpha_config is used by read_config() !
*/
function reload_config()
{
	global $linpha_config;
	$query = $GLOBALS['db']->Execute("SELECT option_name, option_value " .
			"FROM ".PREFIX."config");
	while($data = $query->FetchRow(ADODB_FETCH_NUM))
	{
		$linpha_config[$data[0]] = $data[1];
	}
}

reload_config();

/**
* stuff for AdoDB query caching.
*/
global $query_statement;

if(!isset($query_statement)) {
	if(read_config('adodb_caching')){
		$query_statement = "CacheExecute";
		$ADODB_CACHE_DIR = get_full_path(read_config('adodb_cache_path')); 
		$GLOBALS['db']->cacheSecs = (read_config('adodb_cache_time')*60);
	} else {
		$query_statement="Execute";
	}
}

if(!defined('DB_TYPE')): define ('DB_TYPE', read_config('db_type')); endif;

function get_group_id_from_name($group_name)
{
	$query = $GLOBALS['db']->Execute("SELECT ID FROM ".PREFIX."groups ".
		"WHERE groups = '".linpha_addslashes($group_name)."'");
	$data = $query->FetchRow();
	return $data[0];	
}

/**
* who: 0 = nobody, 1 = anonymous, 2 = everybody
* groups_exceptions = ';group_id1;group_id2;'
* groups_additional = ';'

* currently disabled!
* * and_or: 0 = and, 1 = or
* alb: 0 = without, 1 = only
* album_select = '//albums/test//albums/test2//'    two '//' as delimiter
* 
* at basket_print, basket_download, basket_mail, it is not imgid based, but
* albid
*/
function check_permissions($type/*,$imgid*/)
{
    /**
    * get data
    */    
    $query = $GLOBALS['db']->Execute("SELECT who, groups_exceptions, groups_additional " .	// , and_or, alb, albums
    		"FROM ".PREFIX."permissions WHERE type = '".linpha_addslashes($type)."'");
    $data = $query->FetchRow(ADODB_FETCH_ASSOC);
    
    /**
    * check for group permissions
    */
    $passed_groups = false;
    if($data['who'] == 2)   // everybody
    {
        $passed_groups = true;
    }
    else
    {
        /**
        * quick check for default values (empty groups)
        */
        if($data['who'] == 0 &&    // nobody
            (empty($data['groups_additional']) OR $data['groups_additional'] == ';'))
        {
            /**
            * nobody and no additional groups -> not possible -> disable
            */
            $passed_groups = false;
        }
        elseif($data['who'] == 1 && $GLOBALS['passed'] &&   // only logged in (not anonymous)
            (empty($data['groups_exceptions']) OR $data['groups_exceptions'] == ';'))
        {
            /**
            * logged in (not anonymous) and no exceptions -> valid
            */
            $passed_groups = true;
        }
        else
        {
            /**
            * get groups
            */
            $query = $GLOBALS['db']->Execute("SELECT id, groups FROM ".PREFIX."groups");
            while($groups_data = $query->FetchRow())
            {
                $groups[$groups_data['id']] = $groups_data['groups'];
            }
            
            /**
            * get array with groups which current user is member of
            */
            $my_groups = Array();
            if(isset($_SESSION['user_groups']))
            {
                $group_member_of = explode_and_slice($_SESSION['user_groups'],';');
                foreach($group_member_of AS $value)
                {
                    if( isset($groups[$value]) )
                    {
                        $my_groups[] = $value;
                    }
                }
            }
            
            if($data['who'] == 0)   // nobody
            {
                /**
                * need to be in one of $groups_additional
                */
    
                $groups_additional = explode_and_slice($data['groups_additional'],';');
                $array = array_intersect($my_groups,$groups_additional);
                if(count($array) > 0)
                {
                    $passed_groups = true;
                }
            }
            elseif($data['who'] == 1)   // only logged in (not anonymous)
            {
                /**
                * need to be logged in and not to be in one of the $groups_exceptions
                */
    			if(!isset($my_groups)) : $my_groups = array(); endif; //prevent notice
    			
                $groups_exceptions = explode_and_slice($data['groups_exceptions'],';');
                $array = array_intersect($my_groups,$groups_exceptions);
                if($GLOBALS['passed'] && count($array) == 0)
                {
                    $passed_groups = true;
                }
            }
        }
    }

    /**
    * if the condition is OR and $passed_groups = true the album check is waste time
    
    if($data['and_or'] == 1 && $passed_groups)
    {
        return true;
    }
    
    /**
    * check for albums permissions
    

    /**
    * check if there selected albums
    
    $passed_albums = false;
    if(empty($data['albums']) OR $data['albums'] == '//')
    {
        $empty_data = true;
    }
    else
    {
        $empty_data = false;
    }
    
    if($data['alb'] == 0)   // without
    {
        if($empty_data)
        {
            $passed_albums = true;
            $need_detail_check = false;
        }
        else
        {
            $need_detail_check = true;
        }
    }
    elseif($data['alb'] == 1)   // only
    {
        if($empty_data)
        {
            $passed_albums = false;
            $need_detail_check = false;
        }
        else
        {
            $need_detail_check = true;
        }
    }
    
    if($need_detail_check)
    {
        /**
        * at basket_print, basket_download, basket_mail, it is not imgid based, but
		* albid
        * only for javascript menu
        * in basket_build_*.php each imgid is checked, because the albid could
        * be changed from a user
        
        $pos = strpos($imgid,'basket_');
        if($pos !== false)
        {
            $stage = get_stage();
            $albid = substr($imgid,7);
            $query = $GLOBALS['db']->Execute("SELECT path FROM ".PREFIX.$stage."_lev_album ".
                "WHERE id = '".linpha_addslashes($albid)."'");
            $img_data = $query->FetchRow(ADODB_FETCH_ASSOC);
            $path = $img_data['path'];
        }
        else
        {
            $query = $GLOBALS['db']->Execute("SELECT prev_path FROM ".PREFIX."photos ".
                "WHERE id = '".linpha_addslashes($imgid)."'");
            $img_data = $query->FetchRow(ADODB_FETCH_ASSOC);
            $path = $img_data['prev_path'];
        }
        
        /**
        * remove leading 'albums/'
        
	    $pos = strpos($path,'/');
	    $path = substr($path,$pos+1);

        
        $array_albums = explode_and_slice($data['albums'],'//');
        
        /**
        * @todo  if $img_data['prev_path'] is folder1/subfolder1 and $array_albums[1] = folder1
        *        $passed_albums should also be true
        
        if(in_array($path,$array_albums))
        {
            if($data['alb'] == 1)   // only
            {
                $passed_albums = true;
            }
        }
        else
        {
            if($data['alb'] == 0)   // without
            {
                $passed_albums = true;
            }
        }
    }

    /**
    * take care of and/or
    
    if($data['and_or'] == 0)    // and
    {
        if($passed_groups AND $passed_albums)
        {
            return true;
        }
    }
    else    // or
    {
        if($passed_groups OR $passed_albums)
        {
            return true;
        }
    }
    */
    if( $passed_groups )
    {
        return true;
    }    
    return false;
}


function print_permissions($type,$action_link)
{
    global $str_Everyone, $str_Nobody, $str_only_logged_in_users, $str_except_these_groups;
    global $str_additionally_groups, $str_allow_these_persons, $str_album_based_permissions;
    global $str_all_albums_but_without_these, $str_only_on_these_albums, $str_no_watermarks;
    global $seach_multiple_select_use;
    global $submit_button_folder;
    global $search_and, $search_or;
    
    /**
    * update data
    */
    if(isset($_POST['change_permissions']))
    {
    	/**
    	 * some data checks
    	 */
    	if(!isset($_POST['who'])) { $_POST['who']=0; }
    	if(!isset($_POST['and_or'])) { $_POST['and_or']=0; }
    	if(!isset($_POST['alb'])) { $_POST['alb']=0; }
    	
        /**
        * create group string
        */
        $groups_additional_str = ';';
        if(isset($_POST['groups_additional']))
        {
            foreach($_POST['groups_additional'] AS $value)
            {
                $groups_additional_str .= linpha_addslashes($value).';';
            }
        }
        
        $groups_exceptions_str = ';';
        if(isset($_POST['groups_exceptions']))
        {
            foreach($_POST['groups_exceptions'] AS $value)
            {
                $groups_exceptions_str .= linpha_addslashes($value).';';
            }
        }
        
        /**
        * create albums string
        *
        * delimiter is '//'
        * use double forward slash because this is the only one which isn't valid for a path
        */
        $albums_str = '//';
        if(isset($_POST['album_select']))
        {
            foreach($_POST['album_select'] AS $value)
            {
                $path = get_path_from_id($value,$without_leading_albums=true);
                $albums_str .= linpha_addslashes($path).'//';
            }
        }

            
        /**
        * update data
        * (insert if not exists, shouldn't be the case, but was already
        * reported in the forum)
        */
        $query = $GLOBALS['db']->Execute("SELECT type FROM ".PREFIX."permissions WHERE type = '".linpha_addslashes($type)."'");
        $num = $query->RecordCount();
        if($num >= 1)
        {
	        $GLOBALS['db']->Execute("UPDATE ".PREFIX."permissions SET ".
	            "who = '".linpha_addslashes($_POST['who'])."', ".
	            "groups_exceptions = '".$groups_exceptions_str."', ".
	            "groups_additional = '".$groups_additional_str."', ".
	            "and_or = '".linpha_addslashes($_POST['and_or'])."', ".
	            "alb = '".linpha_addslashes($_POST['alb'])."', ".
	            "albums = '".$albums_str."' ".
	            "WHERE type = '".linpha_addslashes($type)."'");
        }
        else
        {
        	$GLOBALS['db']->Execute( "INSERT into ".PREFIX."permissions ".
        		"(type, who, groups_exceptions, groups_additional, and_or, alb, albums) VALUES ".
        		"('".linpha_addslashes($type)."', ".
        		"'".linpha_addslashes($_POST['who'])."', ".
				"'".$groups_exceptions_str."', ".
				"'".$groups_additional_str."', ".
				"'".linpha_addslashes($_POST['and_or'])."', ".
				"'".linpha_addslashes($_POST['alb'])."', ".
				"'".$albums_str."')" );
        }
    }
 
    /**
    * fetch available groups
    */
    $query = $GLOBALS['db']->Execute("SELECT id, groups FROM ".PREFIX."groups ORDER by groups");
    while($data = $query->FetchRow())
    {
        $groups[$data[0]] = $data[1];
    }
    
    if(!isset($groups)) : $groups = array(); endif; //prevent notice
    
    /**
    * get data
    *
    * who: 0 = nobody, 1 = only logged in (not anonymous), 2 = everybody
    * groups_exceptions = ';group_id1;group_id2;'
    * groups_additional = ';'
    * and_or: 0 = and, 1 = or
    * alb: 0 = without, 1 = only
    * album_select = '//albums/test//albums/test2//'    two '//' as delimiter
    *
    * INSERT into linpha_permissions (type, who, groups_exceptions, groups_additional, and_or, alb, albums)
    *   VALUES ('watermark', 1, '', '', 0, 0, '');
    */
    $query = $GLOBALS['db']->Execute("SELECT who, groups_exceptions, groups_additional, and_or, ".
        "alb, albums FROM ".PREFIX."permissions WHERE type = '".linpha_addslashes($type)."'");
    $data = $query->FetchRow(ADODB_FETCH_ASSOC);

    ?>
    
    <form name="perm" method="post" action="<?php echo $action_link."&redirector=general"; ?>">
    <table border="0">
        <tr>
            <td colspan="3" class="mainwindow" style="border-left:0px;">
                <b>
                <?php
                if($type == 'watermark')
                {
                    echo $str_no_watermarks;
                }
                else
                {
                    echo $str_allow_these_persons;
                }
                ?>
                </b>
            </td>
        </tr>
        <tr>
            <td class="admintable">
                <input type="radio" id="nobody" name="who" value="0"<?php echo ($data['who'] == '0' ? ' checked="checked"' : ''); ?> onClick="update_forms()">
                <?php echo $str_Nobody; ?>
            </td>
            <td width="200" class="admintable">
                <input type="radio" id="anonymous" name="who" value="1"<?php echo ($data['who'] == '1' ? ' checked="checked"' : ''); ?> onClick="update_forms()">
                <?php echo $str_only_logged_in_users; ?>
            </td>
            <td class="admintable">
                <input type="radio" id="everyone" name="who" value="2"<?php echo ($data['who'] == '2' ? ' checked="checked"' : ''); ?> onClick="update_forms()">
                <?php echo $str_Everyone; ?>
            </td>
        </tr>
        <tr>
            <td class="admintable">
                <?php
                    echo $str_additionally_groups.'<br />';
                    form_generate_select('groups_additional[]', '5', ' id="additional" style="width: 150px;" multiple="multiple"', explode_and_slice($data['groups_additional'],';'), $groups);
                ?>
                <br />
                <font size='-2'>(<?php echo $seach_multiple_select_use; ?> 'Ctrl')</font>
            </td>
            <td class="admintable">
                <?php
                    echo $str_except_these_groups.'<br />';
                    form_generate_select('groups_exceptions[]', '5', ' id="exceptions" style="width: 150px;" multiple="multiple"', explode_and_slice($data['groups_exceptions'],';'), $groups);
                ?>
                <br />
                <font size='-2'>(<?php echo $seach_multiple_select_use; ?> 'Ctrl')</font>
            </td>
            <td class="admintable">&nbsp;</td>
        </tr>
        <?php
        
        /*
        <tr>
            <td colspan="3">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" class="mainwindow" style="border-left:0px;">
                <input type="radio" id="and" name="and_or" value="0"<?php echo ($data['and_or'] == '0' ? ' checked="checked"' : ''); ?>>
                <?php echo $search_and; ?>
                <input type="radio" id="or" name="and_or" value="1"<?php echo ($data['and_or'] == '1' ? ' checked="checked"' : ''); ?>>
                <?php echo $search_or; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="3" class="mainwindow" style="border-left:0px;">
                <b><?php echo $str_album_based_permissions; ?></b>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="admintable">
                <input type="radio" id="without" name="alb" value="0"<?php echo ($data['alb'] == '0' ? ' checked="checked"' : ''); ?>>
                <?php echo $str_all_albums_but_without_these; ?>
            </td>
            <td class="admintable">
                <input type="radio" id="only" name="alb" value="1"<?php echo ($data['alb'] == '1' ? ' checked="checked"' : ''); ?>>
                <?php echo $str_only_on_these_albums; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" class="admintable">
                <?php
                $_REQUEST['album_select'] = explode_and_slice($data['albums'],'//');
                build_album_select($with_all_albs_entry=false);
                ?>
            </td>
        </tr>
        */
        ?>
        <tr>
            <td colspan="3">
                <br />
                <input type="hidden" name="and_or" value="0">
                <input type="hidden" name="alb" value="0">
                
                <input type="hidden" name="change_permissions" value="true">
                <input class="linkbutton" type="submit" name="submit" value="<?php echo $submit_button_folder; ?>">
            </td>
        </tr>
    </table>
    
    <script language="JavaScript" type="text/javascript">
    
    function update_forms()
    {
        var nobody = document.getElementById('nobody');
        var anonymous = document.getElementById('anonymous');
        var everyone = document.getElementById('everyone');
        
        var exceptions = document.getElementById('exceptions');
        var additional = document.getElementById('additional');
        
        
        if(nobody.checked)
        {
            exceptions.disabled = true;
            exceptions.selectedIndex = -1;
            additional.disabled = false;
        }
        
        if(anonymous.checked)
        {
            exceptions.disabled = false;
            additional.disabled = true;
            additional.selectedIndex = -1;
        }

        if(everyone.checked)
        {
            exceptions.disabled = true;
            exceptions.selectedIndex = -1;
            additional.disabled = true;
            additional.selectedIndex = -1;
        }
    }
    update_forms();
    
    </script>
    
    </form>
<?php
}

/**
* explode string to array and remove first and last entry of array because they are empty
*/
function explode_and_slice($string,$del)
{
    $array = explode($del,$string);
    $array = array_slice($array,1,-1);
    
    return $array;
}

/**
* gets the stage from prev_path
* counts the number of slashes in the prev_path
*
* @author  flo
* @param  string  $prev_path  prev_path from database column 'prev_path' from table linpha_photos
* @return  string  $stage
* @uses  new_images.php,search.php
* @package  database
* @subpackage  get_alb_from_imgid
*/
function get_stage_from_prev_path($prev_path)
{
	$num = substr_count($prev_path, "/");
	return $num;
}

/**
* gets the album ID from prev_path and stage
* gets the correct albid from the *_lev_album tables
*
* @author  flo
* @param  string  $prev_path  prev_path from database column 'prev_path' from table linpha_photos
* @param  string  $stage  $stage
* @return  int  albumid
* @uses  new_images.php,search.php
* @package  database
* @subpackage  get_alb_from_imgid
*/
function get_albid($prev_path,$stage)
{
	$query = get_stage($stage);
	$select = $GLOBALS['db']->Execute("SELECT ID FROM ".PREFIX.$query."_lev_album WHERE path = '".linpha_addslashes($prev_path)."'");
	$data = $select->FetchRow();
	return $data[0];
}

/**
* creates the sql permission string
* example of admin user: 1=1
* of normal user: (linpha_first_lev_album.groups LIKE '%;public;%' OR linpha_first_lev_album.groups LIKE '%;friend;%') 
* of anonymous: (linpha_first_lev_album.groups LIKE '%;public;%')
*
* @author  flo
* @return  string  sql query part
* @uses  include/img_view.class.php, sql_query_str()
*/
function sql_perm()
{
	if(!in_group('admin'))
	{
		$str_where_perm = "(".PREFIX."first_lev_album.groups LIKE '%;public;%'";
		if(isset($_SESSION["user_groups"]))
		{
			$str_groups = substr($_SESSION["user_groups"],0,strlen($_SESSION["user_groups"])-1);	// remove last ';'
			$group_member_of=explode(";",$str_groups);
			$group_member_of = addslashes_array($group_member_of);
			
			$str_perm = implode(";%' OR ".PREFIX."first_lev_album.groups LIKE '%;",$group_member_of);
			$str_perm = PREFIX."first_lev_album.groups LIKE '%;".$str_perm.";%'";
			
			$str_where_perm .= " OR ".$str_perm;
		}
		$str_where_perm .= ")";
	}
	else
	{
		$str_where_perm = "1=1";
	}
	
	return $str_where_perm;
}

/**
* create the sql string for the table linpha_photos
*
* @author  flo
* @param  Array  $columns  Array of columns in the SELECT statement (if the column contains no '.', then the prefix 'linpha_photos.' is automatically added)
* @param  String  $str_where_conditions  WHERE condition, for example: linpha_photos.id = '5'
* @param  String  $order_by  if empty: no order by, if 'default': the default order from config is taken 
* @param  Array  $additional_tables  normally, linpha_first_lev_album and linpha_photos are in the FROM statement
* @return  string  sql query
* @uses  get_thumbs.php, get_thumbs_on_fly.php, include/left_menu.class.php, include/img_view.class.php
*/
function sql_query_str($columns,$str_where_conditions,$order_by='',$additional_tables=array(),$group_by='')
{
	$str_columns = '';
	foreach($columns AS $value)
	{
		if(strpos($value,'.') === false)
		{
			$str_columns .= PREFIX."photos.".$value." AS ".$value.", ";
		}
		else
		{
			$str_columns .= $value.", ";
		}
	}
	$str_columns = substr($str_columns,0,strlen($str_columns)-2);	// remove last ", "
	
	$tables = array_merge(array('photos','first_lev_album'),$additional_tables);
	$str_tables = implode(', '.PREFIX,$tables);
	$str_tables = PREFIX.$str_tables;
	
	$str_where = PREFIX."photos.prev_path LIKE ".$GLOBALS['db']->Concat(PREFIX."first_lev_album.path","'%'");
	
	if(empty($order_by))
	{
		$str_orderby = '';
	}
	elseif($order_by == 'default')
	{
		$str_orderby = " ORDER by ".get_thumb_order(read_config('sort_thumbs'));
	}
	else
	{
		$str_orderby = " ORDER by ".get_thumb_order($order_by);
	}
	
	if(empty($group_by))
	{
		$str_groupby = '';
	}
	else
	{
		$str_groupby = ' GROUP by '.$group_by;
	}
	
	$sql = "SELECT ".$str_columns." FROM ".$str_tables." WHERE ".$str_where." AND ".sql_perm()." AND (".$str_where_conditions.")".$str_groupby.$str_orderby;
	
	return $sql;
}

/**
* This function creates the SQL query string for new_images
* used 3 times
*
* @author  flo
* @return  string  sql query string
* @uses  new_images.php,include/left_menu.class.php
* @package  database
*/
function new_images_sql_query_str()
{
	$days = read_config('showNewImagesFolderDays');
	
	$days_in_sec = $days*60*60*24;
	$lower_date = time()-$days_in_sec;
	
	switch(DB_TYPE)
	{
		case "mysql":
		$sql = "UNIX_TIMESTAMP(".PREFIX."photos.date) >= '".$lower_date."'";
		break;
		
		case "sqlite":
		$sql = "strftime('%s',".PREFIX."photos.date) >= '".$lower_date."'";
		break;
		
		case "pgsql":
		$sql = "EXTRACT(EPOCH FROM ".PREFIX."photos.date)>= '".$lower_date."'";
		break;
		
	}
	return $sql;
}

/**
* This function renames a folder in the database, with
* this function, the album comment doesn't get lost
* (and thumbnails aren't created new) (this isn't implemented yet,
* that would be much much work i think...)
* this function first checks if the old and new folder are
* folders in the "album" directory
*
* hint: these works only if the albums are in the subfolder "albums" !
* (may change in future...)
*
* @author  flo
* @param  string $old_name
* @param  string $new_name
* @uses  plugins/ftp/index.php
*/
function rename_folder_in_db($old_name,$new_name)
{
	global $mydirectory;
	$album_dir = $mydirectory.'/';

	/**
	example contents of these variables:
	$old_name = 'C:/xampp/htdocs/linpha_cvs/linpha/albums/test4';
	$new_name = 'C:/xampp/htdocs/linpha_cvs/linpha/albums/test3';
	$rootdir = 'C:/xampp/htdocs/linpha_cvs/linpha';
        realpath(TOP_DIR) = 'C:/xampp/htdocs/linpha_cvs/linpha/admin.php';    don't use $_SERVER['PATH_TRANSLATED'] and $_SERVER['SCRIPT_FILENAME'] or array_shift(get_included_files()) anymore
		TOP_DIR = '.';
	$old_name_translated = 'albums/test4';
	$new_name_translated = 'albums/test3';
	*/

    $rootdir = realpath(TOP_DIR);
	
	$old_name_translated = substr($old_name,strlen($rootdir)+1,strlen($old_name)-strlen($rootdir)-1);	// +1 -1 because of leading '/'
	$new_name_translated = substr($new_name,strlen($rootdir)+1,strlen($new_name)-strlen($rootdir)-1);	// +1 -1 because of leading '/'

	if(substr($old_name_translated,0,strlen($album_dir)) == $album_dir &&
		substr($new_name_translated,0,strlen($album_dir)) == $album_dir)
	{
		// update album comments
		$update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."album_comments ".
							"SET album = '".linpha_addslashes($new_name_translated)."' ".
							"WHERE album = '".linpha_addslashes($old_name_translated)."'");
							
							
		/**
		* @todo  update entries in *_lev_album
		*/
	}

}

/**
* This function checks if we are in the specific group
*
* if we are in the group "admin", we are automatically in
* every group
*
* @uses  several
*/
function in_group($group)
{
	if(!isset($_SESSION["user_groups"]))
	{
		return false;
	}

	/**
	* create array with all groups, user is member of
	*/
	$group_member_of=explode_and_slice($_SESSION["user_groups"],";");

	/**
	* admin's have permissions for all groups
	*/
	$query = $GLOBALS['db']->Execute("SELECT ID FROM ".PREFIX."groups ".
		"WHERE groups = 'admin'");
	$data = $query->FetchRow();
	$group_id = $data[0];
	
	if(in_array($group_id, $group_member_of)) {
		return true;
	}


	$group_id = get_group_id_from_name($group);

	if(in_array($group_id, $group_member_of)) {
		return true;
	} else {
		return false;
	}
}

function get_thumb_order($order_by='')
{
/*##########################################################
## used in: *stage_album.php/img_view.php/search.php
## This function sets the thumborder according to config
## returns:
## sort order for the thumbnails
##########################################################*/

	if(empty($order_by)) {
		$order_by = read_config('sort_thumbs');
	}

	switch($order_by)
	{
		case "file": $order_by="filename ASC"; break;
		case "filedesc": $order_by="filename DESC"; break;
		case "date": $order_by="date DESC"; break;
		case "dateasc": $order_by="date ASC"; break;
		case "prev_path": $order_by="prev_path ASC"; break;
		case "prev_pathdesc": $order_by="prev_path DESC"; break;
		
		// stats_view.php
		case "nr_countdesc_max_timedesc": $order_by="nr_count DESC, max_time DESC"; break;

		/**
		 * no default because we need sometimes an own order (sql_query_str())
		 * 09/08/2007 adding again default sort, because of security issue!!
		 * 			  every possible order must be defined here! (flo)
		 */ 
		default: $order_by="filename ASC"; break;
	}
	return $order_by;
}

function calculate_images($album, $split)
{
/*##########################################################
## used in: various
## This function calculates the number of all images for each "main" folder and
## stores them in first_lev_album. (used by count_pictures() later)
##########################################################*/
	
	global $mydirectory;
	
	if($split)
	{
		$split_path=explode("/", $album); // we have no album name in third/forth level, so explode from path
		$album=$split_path[1];
	}
	$img_query=$GLOBALS['db']->$GLOBALS['query_statement']("SELECT COUNT(filename) FROM ".PREFIX."photos
					WHERE prev_path LIKE '%".linpha_addslashes($mydirectory."/".$album)."%' ");
	$number=$img_query->FetchRow();

	$update_query = $GLOBALS['db']->Execute("UPDATE ".PREFIX."first_lev_album ".
					"SET photos='".$number[0]."' WHERE name = '".linpha_addslashes($album)."'");
}

function user_counter($ip)
{
/*##########################################################
## used in: header.php
## This one counts and stores the number of visitors
##########################################################*/
	// query ip block time (in minutes)
	$block_time=read_config('ip_blocking');
//	$time_now=time();
	$time_diff=$block_time*60;
	$time_old=$GLOBALS['db']->DBTimeStamp(time() - $time_diff);	
	
	//$timestamp = $GLOBALS['db']->DBTimeStamp('date');	// Is this needed for anything / what does it do?
	$delete_ips=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."counter_stats
							WHERE date < $time_old");
	$query_ip=$GLOBALS['db']->Execute("SELECT ip FROM ".PREFIX."counter_stats");
	
	// compare stored ips with current ip 
	$ips_found=0;
	while($ips = $query_ip->FetchRow())
	{
		// still online, update timestamp 
		if($ips[0]==$ip)
		{
		$mytime=mktime();
			$timestamp = $GLOBALS['db']->DBTimeStamp(time());
			$update_ip=$GLOBALS['db']->Execute("UPDATE ".PREFIX."counter_stats
									SET date=".$timestamp." WHERE ip='$ips[0]'");
			$ips_found++;
		}
	
	}
	// not online, create new entry for current ip 
	if($ips_found==0 || empty($ips_found))
	{
		$timestamp = $GLOBALS['db']->DBTimeStamp(time());
		$insert_ip=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."counter_stats (date, ip) VALUES (".$timestamp.", '$ip')");
	
		// count user in config 
		$all_users=read_config('users');
		$new_users_value=$all_users+1;
	
		$update_config=$GLOBALS['db']->Execute("UPDATE ".PREFIX."config
					SET option_value='$new_users_value' WHERE option_name='users'");
	}
	unset($ips_found);
}

function current_online()
{
	/*##########################################################
	## used in: header.php
	## current online?
	## returns:
	## the number of current online users
	##########################################################*/
	
	$online_query=$GLOBALS['db']->Execute("SELECT ip FROM ".PREFIX."counter_stats");
	$result=$online_query->RecordCount();
	
	echo $result;
}

function num_subfolder_photos($name_value, $path)
{
/*##########################################################
## used in: *_stage_album.php
## count number of photos in subfolder
## returns:
## the number of photos for the current album
##########################################################*/

	$query=$GLOBALS['db']->$GLOBALS['query_statement']("SELECT id FROM ".PREFIX."photos
						WHERE name='".linpha_addslashes($name_value)."' AND prev_path='".linpha_addslashes($path)."'");
	$num=$query->RecordCount();
	echo $num;
}

function read_description($value, $md5sum)
{
/*##########################################################
## used in: img_view.php/thumbnails views
## read info (comment/description)
## returns:
## either the description or comment for the photo. 
##########################################################*/

	$info=$GLOBALS['db']->Execute("SELECT $value FROM ".PREFIX."image_comments
						WHERE md5sum='".$md5sum."'");
	$result=$info->FetchRow();
	
	if(!empty($result[0])): return $result[0];endif;
}

function read_plugins_config($value)
{
/*##########################################################
## used in: various
## read plugin configuration
## returns:
## plugin active status
##########################################################*/

	$query=$GLOBALS['db']->Execute("SELECT active FROM ".PREFIX."plugins ".
		"WHERE name='".linpha_addslashes($value)."'");
	$result=$query->FetchRow();
	
	return $result[0];
}

function update_config($value, $name)
{
/*##########################################################
## used in: various
## update DB config entries
##########################################################*/

	$update=$GLOBALS['db']->Execute("UPDATE ".PREFIX."config ".
						"SET option_value='".linpha_addslashes($value)."' ".
						"WHERE option_name='".linpha_addslashes($name)."'");
}

function write_config($name, $value)
{
/*##########################################################
## used in: various
## write new DB config entries
##########################################################*/

	$write=$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."config (option_name, option_value) ".
						"VALUES ('".linpha_addslashes($name)."','".linpha_addslashes($value)."')");
}

/**
* count number of photos in DB take care of user level/group
*
* @uses  header.php, build_stats.php
* @return number of photos
*/
function count_pictures()
{
	$query = $GLOBALS['db']->Execute("SELECT SUM(photos) FROM ".PREFIX."first_lev_album WHERE ".sql_perm());
	$data = $query->FetchRow();
	
	if($data[0] == 0): $data[0] = "calculating..."; endif;
	return $data[0];
}

function del_obsolete_pictures($prev_path, $name)
{
/*##########################################################
## used in: image.php
## delete obsolete pictures from DB
##########################################################*/
	
	$query=$GLOBALS['db']->Execute("SELECT filename FROM ".PREFIX."photos
						WHERE name='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."'");
	
	while($data=$query->FetchRow())
	{
		if(!file_exists("$prev_path/$data[0]"))
	    {
			$remove=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."photos
								WHERE filename='".linpha_addslashes($data[0])."'
								AND name='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."'");
		}
	}
}

/**
* get an array with ignored filenames
*
* @author  flo/bzrudi
* @return  Array  array with filenames
* @uses  rw_new_entries()
*/
function get_ignore_filelist()
{
$ignored_files = explode(",", str_replace(" ", "," ,read_config('files_2_ignore')));

    if(is_array($ignored_files))
    {
        return $ignored_files;
    }
    else
    {
        return array();
    }
}

/**
* get an array with ignored file extensions
*
* @author  flo/bzrudi
* @return  Array  array with file extensions
* @uses  rw_new_entries()
*/
function get_ignore_fileext()
{
$ignored_fileext = explode(",", str_replace(" ", "," , read_config('fileext_2_ignore')));

    if(is_array($ignored_fileext))
    {
        return $ignored_fileext;
    }
    else
    {
        return array();
    }
}

function rw_new_entries($prev_path, $name, $alb_name)
{
/*##########################################################
## used in: 
## Write changed data (photos) into tables sec_lev_album/third_lev_album.
## writes new albums/folders to the *_level_album table
##########################################################*/
	
	// DHTML Support
	global $DHTMLenabled;
	global $DHTML_txt_warning;
	
	$prev_path = $prev_path;
	if(!empty($prev_path) && is_dir($prev_path))
	{
		$dir_names = dir("$prev_path/");
		
		$rec_time = $GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."photos
								WHERE name='".linpha_addslashes($name)."'
								AND prev_path='".linpha_addslashes($prev_path)."'
								ORDER BY date DESC LIMIT 3");
		$db_time=$rec_time->FetchRow();
		$db_time[0] = $GLOBALS['db']->UnixTimeStamp($db_time[0]);
		
		while($entry=$dir_names->read())
		{
			$ext = get_fileext_from_path($entry);
			if($entry{0} != '.' 	// don't show hidden files (linux) 
				&& !in_array($entry,get_ignore_filelist())
				&& !in_array($ext,get_ignore_fileext())
				&& is_readable($prev_path.'/'.$entry))
			{
				if(is_dir("$prev_path/$entry"))
				{
					// let's see if dir already exists 
					$dir_exists=$GLOBALS['db']->Execute("SELECT ID FROM $alb_name
											WHERE path='".linpha_addslashes($prev_path)."/".linpha_addslashes($entry)."'
											AND name='".linpha_addslashes($entry)."'
											AND prev_alb_name='".linpha_addslashes($name)."'
											LIMIT 1");
					$existing_rows=$dir_exists->RecordCount();
					
					if($existing_rows < 1) // start writing of album entry if !exists
					{
					$timestamp = $GLOBALS['db']->DBTimeStamp(time());
					$fill_albums_table =$GLOBALS['db']->Execute("INSERT INTO $alb_name (date, path, name, prev_alb_name)
								VALUES (".$timestamp.", '".linpha_addslashes($prev_path)."/".linpha_addslashes($entry)."','".linpha_addslashes($entry)."','".linpha_addslashes($name)."')");
					}
				}
				else
				{
                    list($org_width,$org_height,$org_type) = linpha_getimagesize("$prev_path/$entry");
                    if( is_video($org_type) OR is_supported_image($org_type))
                    {
    					/**
    					* we need filectime() (instead of filemtime()), because if we copy some images in an existing folder, the access and modification time don't get changed of this file, only the inode time (filectime()) !
    					*/
    					$file_ctime = filectime("$prev_path/$entry");
    		
    					if($file_ctime > $db_time[0])
    					{
    						// take care of mofified photo, e.g. do not create thumbnail twice 
    						$img_check=$GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."photos
    									WHERE name='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."'
    									AND filename='".linpha_addslashes($entry)."' LIMIT 1");
    						$img_result=$img_check->FetchRow();
    
                            /**
                             * calculate md5sum (not for videos we have
                             * plenty of memory_limit problems here...)
                             */
                            if(is_video($org_type))
                            {
                            	$special_file = 1;
                            	$md5sum = md5("$prev_path/$entry");
                            }
                            elseif( is_supported_image($org_type) )
                            {
                            	$special_file = 0;
                            	$md5sum = get_file_md5sum("$prev_path/$entry");
                            }

    						if(!empty($img_result[0]))
    						{
    							// OK, just update timestamp and create new thumb later 
    							$timestamp = $GLOBALS['db']->DBTimeStamp(time());
    							$update_img= $GLOBALS['db']->Execute("UPDATE ".PREFIX."photos ".
    										"SET date=".$timestamp.", md5sum='".$md5sum."', level='".$special_file."' ".
    										"WHERE name ='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."' 	".
    										"AND filename='".linpha_addslashes($entry)."'");
    						}
    						else
    						{
    							// write new entry and create thumb
    							$timestamp = $GLOBALS['db']->DBTimeStamp(time()); 
    							$fill_img = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."photos (date, name, filename, prev_path, md5sum, level)
    										VALUES (".$timestamp.", '".linpha_addslashes($name)."','".linpha_addslashes($entry)."','".linpha_addslashes($prev_path)."', '".$md5sum."', '".$special_file."')");
    						}
    						$has_images=1;
    					}
    					$has_images=1;
                    }
                    else
                    {
                        $omitting_why = "Omitting not supported file or broken image";
                        $omitting_str = "<b>".$prev_path.'/'.$entry."</b> (Reported type: ".$org_type.")";

						if ($DHTMLenabled) {	
							$part1 = substr($DHTML_txt_warning, 0, strpos($DHTML_txt_warning, '<!-- notice end -->'));
							$part2 = substr($DHTML_txt_warning, strpos($DHTML_txt_warning, '<!-- notice end -->'));
	
							$DHTML_txt_warning = $part1.'<tr><td class="admintable" width="20%">'.$omitting_why.'</td><td class="admintable" width="80%">'.$omitting_str.'</td></tr>'.$part2;
				
							echo '<SCRIPT>document.getElementById("notices").innerHTML='.$DHTML_txt_warning.'</SCRIPT>';
						} else {
							echo $omitting_why.": ".$omitting_str.'<br />';
						}
					}
				} 
			}
			elseif($entry != '.' && $entry != '..')
			{
				if($entry{0} == '.')
				{
					$omitting_why = "Omitting hidden file";
					$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
				}
				elseif(!is_readable($prev_path.'/'.$entry))
				{	
					$omitting_why = "Omitting not readable file (Maybe you have to change the permissions)";
					$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
				}
				elseif(in_array($entry,get_ignore_filelist()))
				{
					$omitting_why = "Omitting ignored file";
					$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
				}
				elseif(in_array($ext,get_ignore_fileext()))
				{
					$omitting_why = "Omitting ignored file extension of file";
					$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
				}
				if ($DHTMLenabled) {	
					$part1 = substr($DHTML_txt_warning, 0, strpos($DHTML_txt_warning, '<!-- notice end -->'));
					$part2 = substr($DHTML_txt_warning, strpos($DHTML_txt_warning, '<!-- notice end -->'));
	
					$DHTML_txt_warning = $part1.'<tr><td class="admintable" width="20%">'.$omitting_why.'</td><td class="admintable" width="80%">'.$omitting_str.'</td></tr>'.$part2;
				
					echo '<SCRIPT>document.getElementById("notices").innerHTML='.$DHTML_txt_warning.'</SCRIPT>';
				} else {
					echo $omitting_why.": ".$omitting_str.'<br />';
				}
			}
			clearstatcache();
		} // end while 
		
		// if any pictures found, make entry in sec_lev_album
		// where name == has_images but prevent it if the "has_images" is already there
		$img_query=$GLOBALS['db']->Execute("SELECT ID FROM $alb_name
								WHERE path='".linpha_addslashes($prev_path)."/'
								AND prev_alb_name='".linpha_addslashes($name)."'
								AND name='has_images' LIMIT 1");
		$img_rows=$img_query->RecordCount();
		
		if(@$has_images==1 && $img_rows < 1)
		{
			$timestamp = $GLOBALS['db']->DBTimeStamp(time());
			$fill_albums_table =$GLOBALS['db']->Execute("INSERT INTO $alb_name (date, path, name, prev_alb_name)
							VALUES (".$timestamp.", '".linpha_addslashes($prev_path)."/','has_images','".linpha_addslashes($name)."')");
		
			unset($has_images);
		}
		$dir_names->close();
	}
	
	// remove deleted pictures from DB 
	del_obsolete_pictures($prev_path, $name);
}

function first_lev_funct()
{
/*##########################################################
## used in:
## create/delete first level album entries in db
## create all entries for the fisrt level in first_level_album table
##########################################################*/
	global $mydirectory;
	
	clearstatcache();	// here would a comment be useful ;-)
	$query_album = $GLOBALS['db']->Execute("SELECT name FROM ".PREFIX."first_lev_album");
	$content_db = Array();
	while($row = $query_album->FetchRow()) {
		$content_db[] = $row[0];
	}		

	if(compare_array_with_folder($content_db, $mydirectory))
	{
		$get_data = $GLOBALS['db']->Execute("SELECT date, path, name
								FROM ".PREFIX."first_lev_album");
		
		while($read=$get_data->FetchRow())
		{
			$read[0] = $GLOBALS['db']->UnixTimeStamp($read[0]);
			if(!file_exists("$read[1]"))
			{
				/*#########################################################
				## think some mainfolders were deleted, now we have to take care of all
				## existing subfolders down to stage 3 as well, as all photos!!!
				#########################################################*/
				// call required functions 
				sec_lev_funct($read[1], $read[2], $came_from_first=true);
				del_obsolete_pictures($read[1], $read[2]);
			}
		}
	
		// save current folder settings (groups/photos) for later use TODO: use ONE array for groups AND pictures
		$level_query=$GLOBALS['db']->Execute("SELECT name, groups, photos FROM ".PREFIX."first_lev_album");
	
		while($row=$level_query->FetchRow())
		{
			$backup_array[] = array($row[0] => $row[1]);
			$imageno_array[] = array($row[0] => $row[2]);
		}
	
		// directory modified !! flush old table 
		$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."first_lev_album");
		$dir_names = dir ("$mydirectory/");
	
		// write new subdir entries to first_lev_album table 
		while($entry=$dir_names->read())
		{
		if (is_dir(dirname(__FILE__)."/../albums/$entry") && is_readable(dirname(__FILE__)."/../albums/$entry") && $entry != "lost+found" && $entry != "." && $entry != ".." && $entry != "CVS")
			{
				// magic quotes runtime stuff 
				(!get_magic_quotes_runtime()==1) ? $entry=linpha_addslashes($entry): '';
				$timestamp = $GLOBALS['db']->DBTimeStamp(time());		
				$fill_db =$GLOBALS['db']->Execute("INSERT INTO ".PREFIX."first_lev_album (date, path, name, level, photos) ".
								"VALUES (".$timestamp.", 'albums/$entry', '$entry', '0', '0')");
			}
		}
		$dir_names->close();
	
		// write back folder settings (groups) TODO: use ONE array for groups AND pictures
		$counter=0;
		while(list($album_name, $allowed_groups)=@each($backup_array[$counter]))
		{
			$update_query=$GLOBALS['db']->Execute("UPDATE ".PREFIX."first_lev_album
										SET groups='$allowed_groups' 
										WHERE name='".linpha_addslashes($album_name)."'");
		$counter++;
		}
		// write back number of pictures TODO: use ONE array for groups AND pictures 
		$counter=0;
		while(list($album_name, $num_of_images)=@each($imageno_array[$counter]))
		{
			$update_query=$GLOBALS['db']->Execute("UPDATE ".PREFIX."first_lev_album
										SET photos='$num_of_images' 
										WHERE name='".linpha_addslashes($album_name)."'");
		$counter++;
		}
		unset($backup_array, $imageno_array);
        
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * to make sure new folders and images appear correctly
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }
	
	}
}

function sec_lev_funct($prev_path, $name, $came_from_first)
{
/*##########################################################
## used in:
## create/delete second level album entries
## take care of removed subfolders/mainfolders...
##########################################################*/

$alb_name="".PREFIX."sec_lev_album";

// we have to query the "name" of the album first, to build the full path later. we need this
// to recognize same called subfolders in sec_level_album  
$getname = $GLOBALS['db']->Execute("SELECT name FROM ".PREFIX."sec_lev_album
						WHERE prev_alb_name='".linpha_addslashes($name)."'
						AND name!='has_images' ORDER BY date DESC");
$is_name=$getname->FetchRow();

// any entries for that dir ? 
$count = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."sec_lev_album
						WHERE prev_alb_name='".linpha_addslashes($name)."'
						AND path='".linpha_addslashes($prev_path)."/".linpha_addslashes($is_name[0])."'
						AND name!='has_images' ORDER BY date DESC");
$rows = $count->RecordCount();

// we have existing subfolders AND/OR "has_images" entry in DB
if($rows > 0)
{
	$time_result = $GLOBALS['db']->Execute("SELECT date, path, name, prev_alb_name
								FROM ".PREFIX."sec_lev_album
								WHERE prev_alb_name='".linpha_addslashes($name)."'
								AND name!='has_images'
								ORDER BY date DESC");
	$prev_dir_mtime = @filemtime("$prev_path/");

	/*##############################################
	## maybe we are called from first_lev_funct(), so take care of subfolders
	## and images to be deleted. (i.e we lost the mainfolder)
	##############################################*/
	if(strlen($prev_dir_mtime)<2)
	{
	// which subfolder to delete? 
	while($time=$time_result->FetchRow())
	{
		$time[0] = $GLOBALS['db']->UnixTimeStamp($time[0]);
		
		if(!file_exists($time[1]))
		{
			$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."sec_lev_album
									WHERE prev_alb_name='".linpha_addslashes($time[3])."'");

			// call third_lev_album to delete all remaining subfolders and photos 
			// therefore explode some info from path (i.e album name)
			$third_name=explode("/",$time[1]);
			
			// let third_lev_alb() know, it has just to delete this path 
			third_lev_funct($time[1], $third_name[2], $call_from_delete=true);
			del_obsolete_pictures($time[1], $third_name[2]);
			calculate_images($name, $split=false);
		}
	} // end while 

	// remove the "has_images" entry in table
	$delete_has_images=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."sec_lev_album
									WHERE name='has_images' AND prev_alb_name='".linpha_addslashes($name)."'");
	} // end if 

	/*##################################################
	## sec_lev_funct() itself has detected a changes,
	## if something is removed take care of all remaining subfolders and photos
	##################################################*/
	$query = $GLOBALS['db']->Execute("SELECT date, path FROM ".PREFIX."sec_lev_album
							WHERE prev_alb_name='".linpha_addslashes($name)."'
							AND name!='has_images'
							ORDER BY date DESC");	
	$dummy=$query->FetchRow();
	$dummy[0] = $GLOBALS['db']->UnixTimeStamp($dummy[0]);

	if(strlen($dummy[0])<2) :$dummy[0]=$prev_dir_mtime+100;endif;

	// this check doesn't work under windows with fat32:
	if($prev_dir_mtime >= $dummy[0])
	{
		while($time=$time_result->FetchRow())
		{
			if(!file_exists($time[1]))
			{
				// selected album directory is modified !! 
				// therefore explode info from path 
				$third_name=explode("/",$time[1]);
				third_lev_funct($time[1], $third_name[2], $call_from_delete=true);
				del_obsolete_pictures($time[1], $third_name[2]);
				calculate_images($name, $split=false);
			}
		}
		// flush old entries 
		$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."sec_lev_album
								WHERE prev_alb_name='".linpha_addslashes($name)."'");
		rw_new_entries($prev_path, $name, $alb_name);
		calculate_images($name, $split=false);
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * to make sure new folders and images appear correctly
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }        
	} // end if 
//	rw_new_entries($prev_path, $name, $alb_name); dow e need this ??
}
else
{
	/* no subdirs exist/ subdir modified, creating/delete entries!
	prevent rw_new_entries() from call if we found "has_images"
	and nothing is changed but make sure to run it, if called by first_lev_funct()*/
	$query = $GLOBALS['db']->Execute("SELECT date, name FROM ".PREFIX."sec_lev_album
						WHERE prev_alb_name='".linpha_addslashes($name)."'
						AND name='has_images'");	
	$result=$query->FetchRow();
	$result[0] = $GLOBALS['db']->UnixTimeStamp($result[0]);
	
	/**
	 * for some strang reasons if name is null $result contains only
	 * Array ( [0] => )
	 */
	if(!isset($result[1]))
	{
		$result[1] = '';
	}
	
	if(!file_exists($prev_path))
	{
		$delete_has_images=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."sec_lev_album
					WHERE name='has_images' AND prev_alb_name='".linpha_addslashes($name)."'");
	}
	else
	{
		$dir_mod_time = @filemtime("$prev_path/");
		if($result[1] != "has_images")
		{
			if(!$came_from_first){
				rw_new_entries($prev_path, $name, $alb_name);
				calculate_images($name, $split=false);}
		}
		// this check doesn't work under windows with fat32:
		elseif($result[1]=="has_images" && $dir_mod_time > $result[0])
		{
			$delete_has_images=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."sec_lev_album
								WHERE name='has_images' AND prev_alb_name='".linpha_addslashes($name)."'");
			if(!$came_from_first){
			rw_new_entries($prev_path, $name, $alb_name);
			calculate_images($name, $split=false);}
	        /**
	        * if we have adocache enabled, make sure to clear all cached entries
	        * to make sure new folders and images appear correctly
	        */
	        if(read_config('adodb_caching')){
	            $GLOBALS['db']->CacheFlush();
	        }
		}
	}
	unset($came_from_first);

}
} 

function third_lev_funct($prev_path, $name, $call_from_delete)
{
/*##############################################################
## used in:
## creates third level album entries
##############################################################*/

$alb_name="".PREFIX."third_lev_album";

/* we have to query the "name" of the album first, to build the full path later. we need this
to recognize same called subfolders in third_level_album */
$get_name = $GLOBALS['db']->Execute("SELECT name FROM ".PREFIX."third_lev_album
						WHERE prev_alb_name='".linpha_addslashes($name)."'
						AND name!='has_images' ORDER BY date DESC");
$isname=$get_name->FetchRow();

// entries for that dir ? 
$count = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."third_lev_album
						WHERE prev_alb_name='".linpha_addslashes($name)."'
						AND path='".linpha_addslashes($prev_path)."/".linpha_addslashes($isname[0])."'
						AND name!='has_images' ORDER BY date DESC");
$rows = $count->RecordCount();

/* prevent from call if we have has_images and nothing is changed
used later in (elseif in this function) */
$query_has_images=$GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."third_lev_album
					WHERE prev_alb_name='".linpha_addslashes($name)."'
					AND path='".linpha_addslashes($prev_path)."/'
					AND name='has_images'");
$result_has_images=$query_has_images->RecordCount();

// OK we have existing subfolders for that dir, let's see if something has changed
if($rows > 0)
{
	$time_result = $GLOBALS['db']->Execute("SELECT date, path, name
								FROM ".PREFIX."third_lev_album
								WHERE prev_alb_name='".linpha_addslashes($name)."'
								AND name!='has_images'
								ORDER BY date DESC");
									
	$prev_dir_mtime = @filemtime("$prev_path/");

	/*#####################################################
	## maybe we are called from sec_lev_funct() so start delete of obsolete folders
	## this is the case when the subfolder is removed and as a result the
	## $prev_dir_mtime variable is empty
	#####################################################*/
	if(strlen($prev_dir_mtime)<2)
	{
		while($time = $time_result->FetchRow())
		{
			$time[0] = $GLOBALS['db']->UnixTimeStamp($time[0]);
			
			if(!file_exists($time[1]))
			{
				$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
										WHERE name='".linpha_addslashes($time[2])."'
										AND path='".linpha_addslashes($time[1])."'");
				del_obsolete_pictures($time[1], $time[2]);
				calculate_images($time[1], $split=true);
			}
		$delete_has_images=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
										WHERE name='has_images'
										AND prev_alb_name='".linpha_addslashes($name)."'
										AND path='".linpha_addslashes($prev_path)."/"."'");

		} 
	} 

	/*##################################################
	## third_lev_funct() itself has detected a changes,
	## if something is removed take care of all remaining subfolders and photos
	##################################################*/
	$query = $GLOBALS['db']->Execute("SELECT date, path
						FROM ".PREFIX."third_lev_album
						WHERE path='".linpha_addslashes($prev_path)."/".linpha_addslashes($isname[0])."'
						AND name != 'has_images'
						ORDER BY date DESC");
	$dummy=$query->FetchRow();
	$dummy[0] = $GLOBALS['db']->UnixTimeStamp($dummy[0]);

	if(strlen($dummy[0])<2): $dummy[0]=$prev_dir_mtime+100;endif;

	// this check doesn't work under windows with fat32:
	if($prev_dir_mtime >= $dummy[0])
	{
		while($time=$time_result->FetchRow())
		{
			if(!file_exists($time[1]))
			{
        		$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
										WHERE name='".linpha_addslashes($time[2])."'");
				del_obsolete_pictures($time[1], $time[2]);
				calculate_images($time[1], $split=true);
			}
		} 
		// flush old entries 
		$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
								WHERE prev_alb_name='".linpha_addslashes($name)."'");
		rw_new_entries($prev_path, $name, $alb_name);
		calculate_images($prev_path, $split=true);
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * to make sure new folders and images appear correctly
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }
	}
//rw_new_entries($prev_path, $name, $alb_name);
}

/*##########################################################
## we are called from sec_lev_funct() and number of rows==0
## make sure to remove all entries and prevent from running rw_new_entries()
##########################################################*/

elseif($rows==0 && $call_from_delete==true)
{
	// flush old entries 
	$do_delete=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
							WHERE prev_alb_name='".linpha_addslashes($name)."'");
	unset($call_from_delete);
}

/*#########################################################
## ok there is a whole lotta nothing, even noe has_images
## so run the rw_new_entries...
#########################################################*/

else
{
	// has images entry? entries for that dir (NEW STYLE) 
	$count = $GLOBALS['db']->Execute("SELECT date, name FROM ".PREFIX."third_lev_album
							WHERE prev_alb_name='".linpha_addslashes($name)."'
							AND path='".linpha_addslashes($prev_path)."/".linpha_addslashes($isname[0])."'
							AND name='has_images'");
	$result=@$count->FetchRow();
	$result[0] = $GLOBALS['db']->UnixTimeStamp($result[0]);
	/**
	 * for some strang reasons if name is null $result contains only
	 * Array ( [0] => )
	 */
	if(!isset($result[1]))
	{
		$result[1] = '';
	}

	$dir_mod_time = @filemtime("$prev_path/");
	
	if($result[1] != "has_images")
	{
		rw_new_entries($prev_path, $name, $alb_name);
		calculate_images($prev_path, $split=true);
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * to make sure new folders and images appear correctly
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }
	}
	// this check doesn't work under windows with fat32:
	elseif($result[1]=="has_images" && $dir_mod_time > $result[0])
	{
		$delete_has_images=$GLOBALS['db']->Execute("DELETE FROM ".PREFIX."third_lev_album
										WHERE name='has_images' AND prev_alb_name='".linpha_addslashes($name)."'");
		rw_new_entries($prev_path, $name, $alb_name);
		calculate_images($prev_path, $split=true);
        /**
        * if we have adocache enabled, make sure to clear all cached entries
        * to make sure new folders and images appear correctly
        */
        if(read_config('adodb_caching')){
            $GLOBALS['db']->CacheFlush();
        }
	}
} 
}

function forth_lev_funct($prev_path, $name)
{
/*##############################################################
## used in:
## create forth level album entries (this is slight different from
## the previous ones, since we do NOT expect more subdirs to be here)
##############################################################*/

	// DHTML Support
	global $DHTMLenabled;
	global $DHTML_txt_warning;

    //clearstatcache();
    $dir_names = dir("$prev_path/");
    
    // get date of newest picture in table photos once 
    $rec_time=$GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."photos
    							WHERE name='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."'
    							ORDER BY date DESC LIMIT 3");
    $db_time=@$rec_time->FetchRow();
    $db_time[0] = $GLOBALS['db']->UnixTimeStamp($db_time[0]);
	
	while($entry=$dir_names->read())
	{
		$ext = get_fileext_from_path($entry);
		if($entry{0} != '.' 	// don't show hidden files (linux) 
			&& !in_array($entry,get_ignore_filelist())
			&& !in_array($ext,get_ignore_fileext())
			&& is_readable($prev_path.'/'.$entry))
		{
            if(is_dir("$prev_path/$entry"))
            {
                // this warning would be printed every time
                //echo "Warning: currently only three subfolders supported, ignoring folder: ".$entry;
            }
            else
            {
                $file_ctime = filemtime("$prev_path/$entry");
    
    			if($file_ctime > $db_time[0] || filemtime("$prev_path/") > $db_time[0])
    			{
    				// take care of mofified photo, e.g. do not create thumbnail twice 
    				$img_check=$GLOBALS['db']->Execute("SELECT date FROM ".PREFIX."photos
    							WHERE name='".linpha_addslashes($name)."' AND prev_path='".linpha_addslashes($prev_path)."'
    							AND filename='".linpha_addslashes($entry)."' LIMIT 1");
    				$img_result=$img_check->FetchRow();

                    /**
                     * calculate md5sum (not for videos we have
                     * plenty of memory_limit problems here...)
                     */
      				list($org_width,$org_height,$org_type)=linpha_getimagesize("$prev_path/$entry");

                    if(is_video($org_type))
                    {
                    	$special_file = 1;
                    	$md5sum = md5("$prev_path/$entry");
                    }
                    elseif( is_supported_image($org_type) )
                    {
                    	$special_file = 0;
                    	$md5sum = get_file_md5sum("$prev_path/$entry");
                    }
                    
    				if(!empty($img_result[0]))
    				{
    					// OK, just update timestamp and create new thumb later
    					$timestamp = $GLOBALS['db']->DBTimeStamp(time()); 
    					$update_img= $GLOBALS['db']->Execute("UPDATE ".PREFIX."photos
    								  SET date=".$timestamp.", md5sum='".$md5sum."' WHERE name ='".linpha_addslashes($name)."'
    								  AND prev_path='".linpha_addslashes($prev_path)."'
    								  AND filename='".linpha_addslashes($entry)."'");
    				}
    				else
    				{
    					// write new entry and create thumb
    					$timestamp = $GLOBALS['db']->DBTimeStamp(time()); 
    					$fill_img = $GLOBALS['db']->Execute("INSERT INTO ".PREFIX."photos (date, name, filename, prev_path, md5sum, level)
    								VALUES (".$timestamp.", '".linpha_addslashes($name)."','".linpha_addslashes($entry)."','".linpha_addslashes($prev_path)."', '".$md5sum."', '".$special_file."')");
    				}
    		        //make_thumbs($prev_path, $entry, $name);
    			}
            }
		}
		elseif($entry != '.' && $entry != '..')
		{
			if($entry{0} == '.')
			{
				$omitting_why = "Omitting hidden file";
				$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
			}
            elseif(!is_readable($prev_path.'/'.$entry))
            {
                $omitting_why = "Omitting not readable file (Maybe you have to change the permissions)";
                $omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
            }
			elseif(in_array($entry,get_ignore_filelist()))
			{
				$omitting_why = "Omitting ignored file";
				$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
			}
			elseif(in_array($ext,get_ignore_fileext()))
			{
				$omitting_why = "Omitting ignored file extension of file";
				$omitting_str = "<b>".$prev_path.'/'.$entry."</b>";
			}
			if ($DHTMLenabled) {	
				$part1 = substr($DHTML_txt_warning, 0, strpos($DHTML_txt_warning, '<!-- notice end -->'));
				$part2 = substr($DHTML_txt_warning, strpos($DHTML_txt_warning, '<!-- notice end -->'));
  
				$DHTML_txt_warning = $part1.'<tr><td class="admintable" width="20%">'.$omitting_why.'</td><td class="admintable" width="80%">'.$omitting_str.'</td></tr>'.$part2;
				
				echo '<SCRIPT>document.getElementById("notices").innerHTML='.$DHTML_txt_warning.'</SCRIPT>';
            } else {
				echo $omitting_why.": ".$omitting_str.'<br />';
			}
		}
	} // end while 
    // remove deleted pictures from DB 
    $dir_mod_time = @filemtime("$prev_path/");
    if($dir_mod_time > $db_time[0])
    {
    	del_obsolete_pictures($prev_path, $name);
    	calculate_images($prev_path, $split=true);
    }
}

/**
 * include logger function at the end of the startup
 * because if there are erros during the startup, linpha_log will be called but
 * read_config for example isn't initialized
 */
include_once(TOP_DIR.'/plugins/log/logger.class.php');
?>
