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

include_once(TOP_DIR.'/include/session.php');

/**
 * Take good care of possible XSS. We can easily make use of is_numeric()
 * here, as albid and friends always are expected to be numeric 
 */
$numeric_test = array('albid', 'stage', 'imgid', 'pn', 'exif', 'ref_imgid');
xss_security_check($numeric_test, 'int');

$string_test = array('job', 'view');
xss_security_check($string_test, 'string');

//end XSS checking



if(isset($_GET['album']))
{
    if(get_magic_quotes_gpc()) { $_GET['album'] = stripcslashes($_GET['album']); }
	$_GET['stage'] = get_stage_from_prev_path($_GET['album']);
	$_GET['albid'] = get_albid($_GET['album'],$_GET['stage']);
	
	if(isset($_GET['img']))
	{
		$query = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."photos ".
			"WHERE filename = '".linpha_addslashes($_GET['img'])."' AND ".
			"prev_path = '".linpha_addslashes($_GET['album'])."'");
		$data = $query->FetchRow();
		$_GET['imgid'] = $data[0];
	}
}

$stage = get_stage();

$query = $GLOBALS['db']->Execute("SELECT id, name, path FROM ".PREFIX.$stage."_lev_album WHERE id='".linpha_addslashes($_GET['albid'])."'");
$album_info=$query->FetchRow(ADODB_FETCH_ASSOC);
$prev_path=$album_info['path'];
$name=$album_info['name'];

if(read_config('autoconf'))
{
	first_lev_funct();

	switch($_GET['stage'])
	{
	case 1:
		sec_lev_funct($prev_path, $name, $came_from_first=false);
	break;
	case 2:
		third_lev_funct($prev_path, $name, $call_from_delete=false);
	break;
	case 3:
		forth_lev_funct($prev_path, $name, @$alert);
	break;
	}
}

include_once(TOP_DIR.'/include/img_view.class.php');
$img_view = new ImgView();
$img_view->setMode('folder');
$img_view->setLinkAdress(TOP_DIR.'/viewer.php?albid='.$_GET['albid'].'&stage='.$_GET['stage'].'');
$img_view->setDefaultView('normal');
$img_view->setDefaultOrder(read_config('sort_thumbs'));
$img_view->setSql(''," FROM ".PREFIX."first_lev_album, ".P." WHERE ".P.".prev_path='".linpha_addslashes($prev_path)."' AND ");

if($show_header)
{
    include_once(TOP_DIR.'/header.php');
}

/**
* switch between thumbnail view and image view
*/
if(!isset($_GET['imgid']))
{
	$img_view->setPageRegister();	// define $_GET['pn'] (needed in build_navigation_view())

	if($show_leftcontent)
	{
		include_once(TOP_DIR.'/include/left_menu.class.php');
		$menu = new LeftMenuView();
		$menu->generateTableHead();
			$menu->buildMenu();
			$menu->generateTableFooter();			
	?>
			<td class='mainwindow' colspan='2'>
				<table class='maintable' width='100%' cellspacing='0' border='0'>
	<?php
			/**
			* navigation view
			*/
			if(read_config('navigation_view'))
			{
	?>
					<tr>
						<th class='maintable' align="left">
							<?php build_navigation_view($_GET['stage'],$_GET['albid'],0); ?>
						</th>
					</tr>
	<?php
			}
			
			/**
			* album comment
			*/
			$query_comment = $GLOBALS['db']->Execute("SELECT comment, id FROM ".PREFIX."album_comments
									WHERE album='".linpha_addslashes($prev_path)."'");
			$alb_comment=$query_comment->FetchRow(ADODB_FETCH_ASSOC);
			
			if(!empty($alb_comment['comment']))
			{
	?>
					<tr>
						<td class='albumcomment'>
							<b><?php echo $album_com; ?>:</b>&nbsp;
							<i><?php echo htmltag(stripslashes($alb_comment['comment'])); ?></i>
						</td>
					</tr>
	<?php
			}
			
			/**
			* javascript menu if no images
			*/
			if($img_view->num_photos == 0)
			{
	?>
					<tr>
						<th>
							<?php build_javascript_menu(); ?>
						</th>
					</tr>
	<?php
			}
	?>
				</table>
	<?php
			
			/**
			* Sub folders
			*/
			show_sub_folders();
			
			
			/**
			* Thumbnails
			*/
			$img_view->printThumbnails($img_th." ".$in_th." ".$album_info['name']);
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
else
{
	$img_view->printImage();
}

if($show_header)
{
	include_once(TOP_DIR.'/footer.php');
}

/**
* Functions
*/
function show_sub_folders()
{
	global $alb_th, $num_pictures, $subfolders, $latest_photo;
	global $album_info;

	/**
	* in stage 3 we haven't subfolders...
	*/
	if($_GET['stage'] < 3)
	{
		$sub_stage = get_stage($_GET['stage']+1);
		$query = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id, path, name FROM ".PREFIX.$sub_stage."_lev_album ".
			"WHERE path LIKE '".linpha_addslashes($album_info['path'])."/%' ".
			"AND name <> 'has_images' ".
			"ORDER by name");
		$num = $query->RecordCount();
	}
	else
	{
		$num = 0;
	}
	
	if($num > 0)
	{
		echo "<div align='center'><br>
			<table class='subfoldertable' width='90%' cellspacing='0'>
			<tr><th class='subfoldertable' colspan='4'>".$alb_th." ".htmlspecialchars($album_info['name'],ENT_QUOTES)."</th></tr>";
	
		// generate html output using table (2 columns * "x" rows) 
		$maxruns=2; 
		for($i=0 ; $i<$num ; $i++)
		{
			echo "<tr>";

			// number of columns in folder preview
			if($i==$num-1): $maxruns=1; endif;
	
			for($y=0 ; $y<$maxruns ; $y++)
			{
				$data = $query->FetchRow();
				
				// fetch latest picture from subfolder depends on thumbnail order  
				$query_cont_prev = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id, filename FROM ".PREFIX."photos
												WHERE prev_path='".linpha_addslashes($data[1])."' 
												ORDER BY ".get_thumb_order()." LIMIT 3"); //path
                $content=$query_cont_prev->FetchRow();
                /**
                * If we have no images in subfolder cause it just holds another 
                * couple of subfolders, try to fetch an image from there instead
                * of displaying the nice gimp logo ;-)
                */
                if(empty($content[0])) //id
                {
                	/**
                	 * hmmh, I have no idea why we need to do the query this way
                	 * but PG fails for level IS NULL :-(
                	 */
            	 	//(DB_TYPE == "pgsql") ? $syntax = "level = '0'" : $syntax = 'level IS NULL';
	                $query_cont_prev = $GLOBALS['db']->Execute("SELECT id FROM ".PREFIX."photos
                                            WHERE prev_path LIKE '".linpha_addslashes($data[1])."%'
                                            AND level = '0' LIMIT 20"); //path
                                           
                /** 
                * OK, we should try to receive a random image from all available
                * subfolders found. I did a couple of tests and it seems to me 
                * that make use of arrays is the fastet solution...
                */
                    while($content = $query_cont_prev->FetchRow())
                    {
                        $random[] = $content[0]; //id
                    }

					if(isset($random))
					{
		                srand((float) microtime() * 10000000); 
		                $rand_id = rand(0, count($random)-1);
		                $content[0]= @$random[$rand_id]; //id
		                unset($random);
					}
                }                

				echo "<td class='subfoldertable' width='25%' height='130'>";
				echo "<div align='center'>";
				
                /**
                * OK, we do really have no images here, so display the gimp logo
                */
				if(empty($content[0])) // id
				{
					/* does this really make sense..? the picture isn't displayed anyway...
					no images created yet, start it now
					if(read_config('autoconf')): 
					third_lev_funct($row['path'], $row['name'], $call_from_delete=false); endif;*/
					$img_src = TOP_DIR."/graphics/subfolder_image.png";
				}
				else // display image
				{
					$img_src = TOP_DIR."/get_thumbs.php?id=".$content[0]; //id
				}
				
                $array = get_rgb_from_all(read_config('thumb_border_color'));
                $color = get_html_color_from_rgb($array['r'],$array['g'],$array['b']);
                
                echo "<a href='".TOP_DIR."/viewer.php?albid=".$data[0]."&stage=".($_GET['stage']+1)."'>".
						"<img src='".$img_src."' alt='thumbnail' style='border: ".read_config('thumb_border').'px '.$color." solid;'></a>"; //id

				echo "</div></td>";
				echo "<td class='subfoldertable' width='25%'>";
				echo "&nbsp;&nbsp;<img src='".TOP_DIR."/graphics/fileopen.png' alt='folder'>";
				echo "<a href='".TOP_DIR."/viewer.php?albid=".$data[0]."&stage=".($_GET['stage']+1)."'>"; //id
				echo "<b><u>".htmlspecialchars($data[2],ENT_QUOTES)."</u></b></a><br /><br />"; //name

				if(read_config('show_comments_in_subfolder'))
				{
					$cut_chars = 400;
	
					$query_comment = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT comment FROM ".PREFIX."album_comments ".
						"WHERE album='".linpha_addslashes($data[1])."'"); //
					$data_c = $query_comment->FetchRow();
					
					if($data_c[0]){ //comment
						echo '&nbsp;&nbsp;'.htmltag(cut_string($data_c[0],$cut_chars,0)).'<br /><br />';
					}
				}
				/**
				* query number of subfolders in album
				*/
				if($_GET['stage']==1)
				{
					$sub2_stage = get_stage($_GET['stage']+2);
					$query_subfolders = $GLOBALS['db']->$GLOBALS['query_statement']("SELECT id FROM ".PREFIX.$sub2_stage."_lev_album ".
									"WHERE prev_alb_name='".linpha_addslashes($data[2])."' ".
									"AND path LIKE '".linpha_addslashes($data[1])."%' ".
									"AND name!='has_images'");

					$num_subfolders = $query_subfolders->RecordCount();
				} else {
					$num_subfolders = 0;
				}

				echo "&nbsp;&nbsp;$num_pictures&nbsp;";
				num_subfolder_photos($data[2], $data[1]);
				echo "<br />";
				
				echo "&nbsp;&nbsp;$subfolders: $num_subfolders";
				echo "<br />";
				
				echo "&nbsp;&nbsp;$latest_photo:&nbsp;";
                get_photo_date($data[2], $data[1]);

				echo "</td>";

				if ($maxruns==1)
				{
					echo "<td class='subfoldertable' width='25%' nowrap>&nbsp;</td>";
					echo "<td class='subfoldertable' width='25%' nowrap>&nbsp;</td>";
				}
			} 
			echo "</tr>";
			$i=$i+($y-1); // increase $i to get only every second entry 
		} 
		echo "</table></div><br />";
	}
}

/**
* get date of latest added photo
*
* @return  string  date
*/
function get_photo_date($name_value, $path)
{
    $date_query=$GLOBALS['db']->$GLOBALS['query_statement']("SELECT date FROM ".PREFIX."photos
                            WHERE name='".linpha_addslashes($name_value)."' AND prev_path='".linpha_addslashes($path)."'
                            ORDER BY date DESC LIMIT 3");
    $result=$date_query->FetchRow();

    /**
    * If subfolder contains no images, we have to query for latest date within 
    * all the available subfolders, rather than the folder itself for a non 
    * existing name value within the photos table. e.g. if there is no image,
    * there is no name value for the folder in photos 
    */
    if(!$result)
    {
        $date_query=$GLOBALS['db']->$GLOBALS['query_statement']("SELECT date FROM ".PREFIX."photos
                            WHERE prev_path LIKE '".linpha_addslashes($path)."%'
                            ORDER BY date DESC LIMIT 1");
        $result=$date_query->FetchRow();
    }
    /*
    $year=substr($result[0],0,4);
    $month=substr($result[0],4,2);
    $day=substr($result[0],6,2);
    
    $timestamp = mktime(0,0,0,$month,$day,$year);
	*/
	$timestamp = $GLOBALS['db']->UnixTimeStamp($result[0]);
	if(!empty($timestamp) AND $timestamp != 0)
	{
		echo linpha_strftime(get_date_format(), $timestamp);
	}
}

?>