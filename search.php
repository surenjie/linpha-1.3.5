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

if(!defined('TOP_DIR')) { define('TOP_DIR','.'); }

/**
 * used in header.php
 */
$title = 'search';

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/include/img_view.class.php');
$img_view = new ImgView();
$img_view->setMode('search');
$img_view->setLinkAdress(TOP_DIR.'/search.php?1=1');
$img_view->setDefaultView('detail');
$img_view->setDefaultOrder(read_config('sort_thumbs'));

if($show_header)
{
	include_once(TOP_DIR.'/header.php');
}


/**
* call from exif href in img_view
*/
if(isset($_REQUEST['sk'])) {
	$_REQUEST['date_from']=$_REQUEST['sk']; 
	$_REQUEST['date_to']=$_REQUEST['sk']; 
	$_REQUEST['album_select'] = Array('all'=>'all');
	$_REQUEST['cmd'] = 'search';
}

if(isset($_REQUEST['cmd']))
{
	switch($_REQUEST['cmd'])
	{
	case 'search':
		
		/**
		* search string to short
		*/
		if( !empty($_REQUEST['search_text']) && strlen($_REQUEST['search_text']) < 2 )
		{
			$error = 1;
		}
		/**
		* check for valid input
		*/
		elseif ((!empty($_REQUEST['search_text']) && strlen($_REQUEST['search_text'])>=2) OR
			isset($_REQUEST['category']) OR
			(!empty($_REQUEST['date_from']) OR !empty($_REQUEST['date_to'])))
		{
			/**
			* save search string in session
			*/
			if(get_magic_quotes_gpc())
			{
				$_REQUEST['search_text'] = stripslashes(@$_REQUEST['search_text']);
			}
			$_SESSION['search'] = $_REQUEST;
		}
		else
		{
			$error = 2;
		}

	break;
	case 'new':
		unset($_SESSION['search']);
        $_REQUEST['b_all'] = true;
	break;
	case 'edit':
		if(isset($_SESSION['search']))
		{
			/**
			 * copy session to request
			 */
			foreach($_SESSION['search'] AS $key=>$value)
			{
				$_REQUEST[$key] = $value;
			}
			unset($_SESSION['search']);
		}
	break;
	}
}
else
{
	$_REQUEST['b_all'] = 1;
}

if(isset($_SESSION['search']))
{
/**
* create sql search query
*/
	/**
	 * copy session to request
	 */
	foreach($_SESSION['search'] AS $key=>$value)
	{
		$_REQUEST[$key] = $value;
	}

	/**
	* buttons
	*/

	$sql_buttons = '';
	if(!empty($_REQUEST['search_text']))
	{
	/**
	* Split textfield into particular words
	*/

		/**
		* replace \" with {quotes} to be sure the \" isn't handled as delimiter
		* later it will be replaced back
		*/
		$_REQUEST['search_text'] = str_replace('\"','{quotes}',$_REQUEST['search_text']);

		/**
		* extract strings with '"blal asdf"' into 'blal asdf'
		*/
		$array_strings = Array();
		while( ($pos1 = strpos($_REQUEST['search_text'],'"')) !== false)
		{
			/**
			* no ending " found, take the whole string after $pos1
			*/
			if( ($pos2 = strpos(substr($_REQUEST['search_text'],$pos1+1),'"')) === false)
			{
				$substr = substr($_REQUEST['search_text'],$pos1);
			}
			else
			{
				$substr = substr($_REQUEST['search_text'],$pos1,$pos2+2);
			}
			
			/**
			* delete this entry in the search string to be sure the next time we get the next entry
			*/
			$_REQUEST['search_text'] = str_replace($substr,'',$_REQUEST['search_text']);
			
			/**
			* add the string to the array (without starting and ending '"')
			*/
			$array_strings[] = substr($substr,1,strlen($substr)-2);
		}
		
		/**
		* extract normal strings with 'blaab asd' into 'blals' and 'asd'
		*/
		$array_strings = array_merge($array_strings,explode(" ", $_REQUEST['search_text']));
	
		/**
		* remove empty strings and add slashes
		*/
		foreach($array_strings AS $key=>$value)
		{
			if(empty($value)) {
				unset($array_strings[$key]);
			} else {
				$array_strings[$key] = linpha_addslashes($value);
			}
		}
	
		/**
		* build search string
		*/
		$and_or = get_and_or($_REQUEST['text_and_or']);
		$search_string = "{colname} LIKE '%";
		$search_string .= implode("%' ".$and_or." {colname} LIKE '%",$array_strings);
		$search_string .= "%'";
		
		/**
		* replace back {quotes} with "
		*/
		$search_string = str_replace('{quotes}','"',$search_string);

		
		if(isset($_REQUEST['b_all']))
		{
			$_REQUEST['b_desc'] = 1;
			$_REQUEST['b_cmt'] = 1;
			$_REQUEST['b_file'] = 1;
            $_REQUEST['b_prev_path'] = 1;
		}
		
		$sql_buttons = "(1=2";
		
		if(isset($_REQUEST['b_desc']))
		{
			$sql_buttons .= " OR ".str_replace('{colname}',C.".description",$search_string);
			$need_image_comment_table = true;
		}
		if(isset($_REQUEST['b_cmt']))
		{
			$sql_buttons .= " OR ".str_replace('{colname}',C.".comment",$search_string);
			$need_image_comment_table = true;
		}
		if(isset($_REQUEST['b_file']))
		{
			$sql_buttons .= " OR ".str_replace('{colname}',P.".filename",$search_string);
		}
        if(isset($_REQUEST['b_prev_path']))
        {
            $sql_buttons .= " OR ".str_replace('{colname}',P.".prev_path",$search_string);
        }
        if(isset($_REQUEST['b_alb_cmt']))
        {
            $sql_buttons .= " OR ".str_replace('{colname}',A.".comment",$search_string);
            $need_album_comment_table = true;
        }


        /**
         * exif
         */
        if(read_config('exifinfo'))
        {
            include_once(TOP_DIR.'/include/metadata.config.php');
            foreach($exif_search_tags AS $value)
            {
                if(isset($_REQUEST['b_exif_'.$value]) OR isset($_REQUEST['b_exif_all']))
                {
                    $sql_buttons .= " OR ".str_replace('{colname}',E.".".strtolower($value),$search_string);
                    $need_exif_table = true;
                }
                
            }
        }

        /**
         * iptc
         */
        if(read_config('iptcinfo'))
        {
            include_once(TOP_DIR.'/include/metadata.config.php');
            foreach($iptc_search_tags AS $value)
            {
                if(isset($_REQUEST['b_iptc_'.$value]) OR isset($_REQUEST['b_iptc_all']))
                {
                    $sql_buttons .= " OR ".str_replace('{colname}',I.".".$value,$search_string);
                    $need_iptc_table = true;
                }
                
            }
	
        }

		$sql_buttons .= ") AND ";
	}
	
	//echo $sql_buttons.'<br />';

	/**
	* categories
	*/
	$sql_categories = '';
	if(isset($_REQUEST['category']))
	{
		/**
		* add slashes ( and remove empty strings)
		*/
        $_REQUEST['category'] = addslashes_array($_REQUEST['category']);

		$and_or = get_and_or($_REQUEST['and_or']);
		$sql_categories .= "(".C.".category LIKE '%;";
		$sql_categories .= implode(";%' ".$and_or." ".C.".category LIKE '%;",$_REQUEST['category']);
		$sql_categories .= ";%'";
		$sql_categories .= ") AND ";
		
		$need_image_comment_table = true;
	}
	
	//echo $sql_categories.'<br />';


	/**
	* exif date
	*/
	$sql_exif_date = '';
	if( (isset($_REQUEST['date_from']) && $_REQUEST['date_from']!="")
		OR (isset($_REQUEST['date_to']) && $_REQUEST['date_to']!=""))
	{
		if($_REQUEST['date_from']=="") {
			$_REQUEST['date_from'] = "0000:00:00 00:00:00";
		}
		if($_REQUEST['date_to']=="") {
			$_REQUEST['date_to'] = "4000:00:00 00:00:00";
		}
	
		$sql_exif_date = "(".E.".datetimeoriginal between ".
			"'".linpha_addslashes($_REQUEST['date_from'])." 00:00:00' AND ".
			"'".linpha_addslashes($_REQUEST['date_to'])." 23:59:59') AND ";
		
		$need_exif_table = true;
	}
	
	//echo $sql_exif_date.'<br />';
	
	/**
	* albums selected
	*/
	$sql_albums = "";
	if( isset($_REQUEST['album_select']) && !in_array('all',$_REQUEST['album_select']) )
	{
		/**
		* query paths
		*/
		foreach($_REQUEST['album_select'] AS $key=>$value)
		{
			$path = get_path_from_id($value);
			$array_paths[] = linpha_addslashes($path);
		}
		
		$sql_albums .= "(".P.".prev_path = '";
		$sql_albums .= implode("' OR ".P.".prev_path = '",$array_paths);
		$sql_albums .= "'";
		$sql_albums .= ") AND ";
	}
	
	//echo $sql_albums.'<br />';

	
	/**
	* set sql query string
    *DISTINCT
	*/
//	$sql_begin = "SELECT ".P.".md5sum, ".P.".id, ".P.".name, ".P.".filename, ".P.".prev_path, ".P.".date, ".P.".level";
	$sql_begin = "SELECT ".P.".id AS id, ".P.".md5sum AS md5sum, " .
			"".P.".name AS name, ".P.".filename AS filename, " .
			"".P.".prev_path AS prev_path, ".P.".date AS date, ".P.".level AS level ";

	$sql_where = " FROM ".PREFIX."first_lev_album, ".P." ".
        (isset($need_image_comment_table) ? "LEFT OUTER JOIN ".C." ON ".P.".md5sum = ".C.".md5sum " : '').
        (isset($need_exif_table) ? "LEFT OUTER JOIN ".E." ON ".P.".md5sum = ".E.".md5sum " : '').
        (isset($need_iptc_table) ? "LEFT OUTER JOIN ".I." ON ".P.".md5sum = ".I.".md5sum " : '').
		(isset($need_album_comment_table) ? "LEFT OUTER JOIN ".A." ON ".P.".prev_path = ".A.".album " : '').
        "WHERE ".$sql_buttons.$sql_categories.$sql_exif_date.$sql_albums;
	
	$img_view->setSql($sql_begin,$sql_where);
    
	if($show_header)
	{
		include_once(TOP_DIR.'/header.php');
	}

    /**
    * We have to take care if search returns number of results = 0 or
    * search would result in an empty page else, with no option to go back...
    */ 
	if(!isset($_REQUEST['imgid']) && ($img_view->num_photos >= 1))
	{
		$img_view->setPageRegister();	// javascript menu below uses the $_GET['pn']
		
		if($show_leftcontent)
		{
			include_once(TOP_DIR.'/include/left_menu.class.php');
			$menu = new LeftMenuView();
			$menu->generateTableHead();
			$menu->buildMenu();
			$menu->generateTableFooter();
			
			?>
			<td class='mainwindow' colspan='2'>
	        <?php
			$img_view->printThumbnails($img_view->num_photos.' '.$img_th.' '.$photos_found." | ".
				"<a href='".TOP_DIR."/search.php?cmd=new'>".$str_new_search."</a> | ".
				"<a href='".TOP_DIR."/search.php?cmd=edit'>".$str_edit_search."</a>");
	        ?>
			</td>
		</tr>
		<?php
		}
		else
		{
			$img_view->printThumbnails();
		}
	}
    elseif(!isset($_GET['imgid']) && ($img_view->num_photos == 0))
    {
        include_once(TOP_DIR.'/include/left_menu.class.php');
        $menu = new LeftMenuView();
        $menu->generateTableHead();
        $menu->buildMenu();
        $menu->generateTableFooter();
        
        echo "<td class='mainwindow' colspan='2'>";
        /**
        * destroy session var to make sure search link in header gives us 
        * the option to start a new search, rather than coming back with 
        * the same boring (empty) result again and again ;-)
        */
        //unset($_SESSION['search']);
        ?>
        <div align='center'>
        <h2>&nbsp;<?php echo $search_result_empty;?></h2><br>

        <a class='linkbutton leftmenu' href='<?php echo TOP_DIR.'/search.php?cmd=new'?>'>
            <?php echo $str_new_search; ?></a>
        <a class='linkbutton leftmenu' href='<?php echo TOP_DIR.'/search.php?cmd=edit'?>'>
            <?php echo $str_edit_search; ?></a>
        </div>
        </td>
    </tr>
    
    <?php
    }
    else
    {
		$img_view->printImage();
	}
	
	if($show_header)
	{
		include_once(TOP_DIR.'/footer.php');
	}
}
else
{
	include_once(TOP_DIR.'/header.php');
	include_once(TOP_DIR.'/include/left_menu.class.php');
	$menu = new LeftMenuView();
	$menu->generateTableHead();
	$menu->buildMenu();
	$menu->generateTableFooter();
	?>
	<td class='main_whitebg' colspan='2'>
		<br /><img src='<?php echo TOP_DIR; ?>/graphics/xmag.jpg' alt="Searching Linpha">
		&nbsp;&nbsp;<font size='+1'><?php echo $search_info; ?></font>
		<hr noshade>
		<?php
		if(isset($error))
		{
			echo "<div align='center'><b>";
			switch($error)
			{
			case 1:	echo $search_to_short; break;
			case 2:	echo $bm_var_err; break;
			}
			echo "</b><br /><br /></div>";
		}
		?>
		<form name='searchform' method='GET' action='<?php echo TOP_DIR; ?>/search.php'>
		<div align='center'>
		<table class='subfoldertable' cellspacing='50' cellpadding='50' border='1' width='90%'>
			<tr>
				<td class='subfoldertable' valign='top' width='34%'>
					<!-- search text box //-->
					<span class='leftmenulabel'><?php echo $search_for; ?> <?php putHelpButton('search_and_or_info'); ?></span><br />
					<input type='text' name='search_text' style='width:180' value='<?php echo @$_REQUEST['search_text']; ?>'>
					&nbsp;&nbsp;&nbsp;
					<?php
					// text and / or
					if(isset($_REQUEST['text_and_or']))
					{
						if($_REQUEST['text_and_or']=='AND')
						{
							$txt_checked_and = " checked";
							$txt_checked_or = "";
						} else {
							$txt_checked_and = "";
							$txt_checked_or = " checked";
						}
					} else {
						$txt_checked_and = " checked";
						$txt_checked_or = "";
					}
					?>
					<br />
					(<input type='radio' name='text_and_or' value='AND'<?php echo $txt_checked_and; ?>><?php echo $search_and; ?>
					<input type='radio' name='text_and_or' value='OR'<?php echo $txt_checked_or; ?>><?php echo $search_or; ?>)
					<br /><br />
					
					<input type='checkbox' id='b_all' name='b_all' value='1'<?php echo isset($_REQUEST['b_all']) ? ' checked' : ''; ?> onClick="check_all('check','b_',5)">
					<?php echo $radio_all; ?><br />
					<input type='checkbox' id='b_1' name='b_desc' value='1'<?php echo isset($_REQUEST['b_desc']) ? ' checked' : ''; ?>>
					<?php echo $radio_descript; ?><br />
					<input type='checkbox' id='b_2' name='b_cmt' value='1'<?php echo isset($_REQUEST['b_cmt']) ? ' checked' : ''; ?>>
					<?php echo $radio_comment; ?><br />
					<input type='checkbox' id='b_3' name='b_file' value='1'<?php echo isset($_REQUEST['b_file']) ? ' checked' : ''; ?>>
					<?php echo $radio_file; ?><br />
                    <input type='checkbox' id='b_4' name='b_prev_path' value='1'<?php echo isset($_REQUEST['b_prev_path']) ? ' checked' : ''; ?>>
                    <?php echo $str_entire_path; ?><br />
                    <input type='checkbox' id='b_5' name='b_alb_cmt' value='1'<?php echo isset($_REQUEST['b_alb_cmt']) ? ' checked' : ''; ?>>
                    <?php echo $album_com; ?><br />

                    <?php
                    /**
                     * Exif Informations
                     */
                    if(read_config('exifinfo'))
                    {
                        /**
                         * define $exif_search_tags
                         */
                        include_once(TOP_DIR.'/include/metadata.config.php');
                        $exif_count = count($exif_search_tags);
                        ?>
                        <br /><b>Search EXIF</b><?php exif_iptc_adminhelp() ?><br /><br />
                        <input type='checkbox' id='b_exif_all' name='b_exif_all' value='1'<?php echo isset($_REQUEST['b_exif_all']) ? ' checked' : ''; ?> onClick="check_all('check','b_exif_',<?php echo $exif_count; ?>)">
                        <?php
                        echo $radio_all.'<br />';

                        for($i=1; list($key,$value) = each($exif_search_tags); $i++)
                        {
                            echo "<input type='checkbox' id='b_exif_".$i."' name='b_exif_".$value."' value='1'";
                            echo isset($_REQUEST['b_exif_'.$value]) ? " checked='checked'>" : '>';
                            echo $value."<br />";
                        }
                    }

                    /**
                     * Iptc Informations
                     */
                    if(read_config('iptcinfo'))
                    {
                        /**
                         * define $iptc_search_tags
                         */
                        include_once(TOP_DIR.'/include/metadata.config.php');
                        $iptc_count = count($iptc_search_tags);
                        ?>
                        <br /><b>Search IPTC</b><?php exif_iptc_adminhelp() ?><br />
                        <input type='checkbox' id='b_iptc_all' name='b_iptc_all' value='1'<?php echo isset($_REQUEST['b_iptc_all']) ? ' checked' : ''; ?> onClick="check_all('check','b_iptc_',<?php echo $iptc_count; ?>)">
                        <?php
                        echo $radio_all.'<br />';

                        for($i=1; list($key,$value) = each($iptc_search_tags); $i++)
                        {
                            echo "<input type='checkbox' id='b_iptc_".$i."' name='b_iptc_".$value."' value='1'";
                            echo isset($_REQUEST['b_iptc_'.$value]) ? " checked='checked'>" : '>';
                            echo translateIptcSearchTags($value, "single")."<br />";
                        }
                    }
                    ?>
                    <script language="JavaScript" type="text/javascript">
                    function check_all(start,elem_name,elem_count)
                    {
                        for(var i = 1; i <= elem_count; i++)
                        {
                            elem = document.getElementById(elem_name+i);
                            elemall = document.getElementById(elem_name+'all');
                            if(elemall.checked == true) {
                                elem.checked = true;
                                elem.disabled = true;
                            } else {
                                if(start != 'start') {
                                    elem.checked = false;
                                    elem.disabled = false;
                                }
                            }
                        }
                    }
                    // run at startup to select all after startup
                    check_all('start','b_',4);
                    <?php
                    if(isset($exif_count))
                    {
                        echo "check_all('start','b_exif_',".$exif_count.");";
                    }
                    if(isset($iptc_count))
                    {
                        echo "check_all('start','b_iptc_',".$iptc_count.");";
                    }
                    ?>
                    </script>
				</td>
				<td class='subfoldertable' valign='top' width='33%'>
					<!-- select album //-->
					<span class='leftmenulabel'><?php echo $search_in; ?></span><br />
					<?php build_album_select($with_all_albs_entry=true); ?>
				</td>
				<td class='subfoldertable' valign='top' width='33%'>
					<!-- date //-->
					<span class='leftmenulabel'><?php echo $search_date ?> 
						<a class='FromTo' href="javascript:void(0);" onclick="var loginWin = window.open('<?php echo TOP_DIR; ?>/actions/calender.php?form=searchform.date_from','Calender','height=250,width=300,scrollbars=no,menubar=no,status=no');" target="_top"><?php echo $search_from ?></a> / 
						<a class='FromTo' href="javascript:void(0);" onclick="var loginWin = window.open('<?php echo TOP_DIR; ?>/actions/calender.php?form=searchform.date_to','Calender','height=250,width=250,scrollbars=no,menubar=no,status=no');" target="_top"><?php echo $search_to ?></a> (Exif)
					</span><br />
					
					<input type='text' name='date_from' value='<?php echo @$_REQUEST['date_from']; ?>' style='width:80'> / 
					<input type='text' name='date_to' value='<?php echo @$_REQUEST['date_to']; ?>' style='width:80'><br /><br />
					
					<!-- Category //-->
					<?php
					/**
					* only show categories if they are at least one
					*/
					$query = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."category");
					$num = $query->RecordCount();
					if($num > 0)
					{
						// category select
						echo "<span class='leftmenulabel'>".$search_categories."</span><br />\n";
						
						// and / or
						if(isset($_REQUEST['and_or']))
						{
							if($_REQUEST['and_or']=='AND')
							{
								$checked_and = " checked";
								$checked_or = "";
							} else {
								$checked_and = "";
								$checked_or = " checked";
							}
						} else {
							$checked_and = " checked";
							$checked_or = "";
						}
						?>
						
						<input type='radio' name='and_or' value='AND'<?php echo $checked_and; ?>><?php echo $search_and; ?>
						<input type='radio' name='and_or' value='OR'<?php echo $checked_or; ?>><?php echo $search_or; ?><br />
						<select name="category[]" size="5" style="width:180" multiple>
						<?php echo get_category_select(@$_REQUEST['category']); ?>
						</select><br />
						<font size='-2'>(<?php echo $seach_multiple_select_use; ?> 'Ctrl')</font>
					<?php
					}
					?>
				</td>
			</tr>
			<tr>
				<td class='subfoldertable' colspan='3' align='center'>
					<!-- submit //-->
					<input type='hidden' name='cmd' value='search'>
					<input type='submit' name='sub' value='   <?php echo $search_button; ?>   '>
					<a href='<?php echo TOP_DIR; ?>/search.php?cmd=new'><?php echo "$str_reset_button"; ?></a>
				</td>
			</tr>
		</table>
		</div>
		</form>
	</td>
	</tr>
<?php
}


if($show_header)
{
	include_once(TOP_DIR.'/footer.php');
}


/**
* validate incoming data from $_GET
*/
function get_and_or($and_or)
{
	if($and_or == 'AND') {
		return 'AND';
	} else {
		return 'OR';
	}
}

/**
 * print help button for admins  
 */
function exif_iptc_adminhelp()
{
	if(in_group('admin'))
	{
		 putHelpButton('exif_iptc_search_info');
	}
}

?>
