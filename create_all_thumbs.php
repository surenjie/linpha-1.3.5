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
 * show errors if php run into a time or memory limit for example!
 */
error_reporting(1);
@set_time_limit(0);

include_once(TOP_DIR.'/include/session.php');
include_once(TOP_DIR.'/plugins/cache/func.cache.php');
include_once(language_file());

$DHTMLenabled       = true;     // Displays progress with DHTML
                                // set to FALSE for use with Netscape

// DHTML Warning Text
$DHTML_txt_warning = "<table class='admintable' width='100%' cellspacing='0'><tr><th class='maintable'>Notices</th></tr><td><div style='height:10.0em;width:100%;overflow:auto;' ><table class='admintable' width='100%' cellspacing='0' style='border:0'><!-- notice end --></table></div></td></table>";

/**
 * init some vars to prevent notices
 */                                
if(!isset($_POST['doubles'])): $_POST['doubles'] = false; endif;
if(!isset($_POST['dropdoubles'])): $_POST['dropdoubles'] = false; endif;

/**
 * take care when coming back from image view (douplicates view)
 * e.g. do not run things again like thumbnails, folders, EXIF ...
 * */
if(isset($_GET['cat']))
{
	$_POST['thumbnails'] = 'nothing';
	$_POST['directories'] = 'nothing';
	$_POST['exif'] = 'nothing';
	$_POST['iptc'] = 'nothing';
	$_POST['doubles'] = true; //make sure doubles show up again
} 

if ($DHTMLenabled) {
include_once(TOP_DIR.'/header.php');
?>
  <tr>
    <td>
      <table cellspacing='0' cellpadding='0' style='height: 100%;'>
        <tr>
          <td class='leftmenu'></td>
        </tr>
      </table>
    </td>
    <td class='adminpages' colspan='2' style='vertical-align: top;'>
<?php
}

/**
 * check permissions
 */
if(!$passed OR !in_group('admin'))
{
  echo $not_allowed_msg;
  echo "<br /><a href='".TOP_DIR."/index.php'><font color='#000033'><strong>".$admin_task."</strong></font></a>";
  if ($DHTMLenabled) {
      include_once(TOP_DIR.'/footer.php');
  }
  exit();
}

if ($DHTMLenabled) {
?>
      <div style="text-align: center; "><h1>Thumbnails EXIF/IPTC</h1></div><br />
      <table class='admintable' width='100%' cellspacing='0'>
        <tr>
          <th class='maintable' width='150px'>
            Type
          </th>
          <th class='maintable' colspan='3'>
            Status (Currently Processing)
          </th>
        </tr>
        <tr>
          <td class='admintable' width='150px' rowspan='3'>
            <strong>Directories</strong>
          </td>
          <td class='admintable' width='100px' align='right'>
            <span id='count_dir_1'>0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='dir_1'><?php echo $_POST['directories']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='100px' align='right'>
            <span id='count_dir_2'>0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='dir_2'><?php echo $_POST['directories']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='100px' align='right'>
            <span id='count_dir_3'>0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='dir_3'><?php echo $_POST['directories']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='150px'>
            <strong>Thumbnails</strong>
          </td>
          <td class='admintable' width='100px' align='right'>
            <span id='count_thumb'>0 of 0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='thumb'><?php echo $_POST['thumbnails']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='150px'>
            <strong>EXIF</strong>
          </td>
          <td class='admintable' width='100px' align='right'>
            <span id='count_exif'>0 of 0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='exif'><?php echo $_POST['exif']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='150px'>
            <strong>IPTC</strong>
          </td>
          <td class='admintable' width='100px' align='right'>
            <span id='count_iptc'>0 of 0</span>
          </td>
          <td class='admintable' colspan='2'>
            <span id='iptc'><?php echo $_POST['iptc']; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='150px'>
            <strong>Duplicates</strong>
          </td>
          <td class='admintable' colspan='3'>
            <span id='dup'><?php echo $_POST['doubles'] ? 'search':'nothing'; ?></span>
          </td>
        </tr>
        <tr>
          <td class='admintable' width='150px'>
            <strong>Delete Duplicates</strong>
          </td>
          <td class='admintable' colspan='3'>
            <span id='dropdup'><?php echo $_POST['dropdoubles'] ? 'delete':'nothing'; ?></span>
          </td>
        </tr>
      </table>
      <br><span class='admintable' id="notices"></span>
      <br><span class='admintable' id="dup_found"></span>
      <br><span class='admintable' id="dup_drop"></span>
      <br><span class='admintable' id="done_links"></span>
    </td>
  </tr>
<?php
include_once(TOP_DIR.'/footer.php');

  @ob_flush();
  @flush();
}

/**
 * directories
 */
if($_POST['directories'] != 'nothing')
{
  if (!$DHTMLenabled) {
    echo "<b>Starting update of files and folders (and preparing md5sum for images)</b><br /><br />";
  }
    if($_POST['directories'] == 'recreate')
    {
      /**
      * make sure to keep folder permnissions
      */
      $level_query=$GLOBALS['db']->Execute("SELECT name, groups, photos FROM ".PREFIX."first_lev_album");
      while($row=$level_query->FetchRow())
      {
        $backup_array[] = array($row[0] => $row[1]);
        $imageno_array[] = array($row[0] => $row[2]);
      }

      /**
      * empty inherited tables
      */
      if(DB_TYPE == "sqlite")
      {
        $sql_cmd = "DELETE FROM";
      }
      else
      {
        $sql_cmd = "TRUNCATE";
      }

    $empty_first=$GLOBALS['db']->Execute($sql_cmd." ".PREFIX."first_lev_album");
    $empty_sec=$GLOBALS['db']->Execute($sql_cmd." ".PREFIX."sec_lev_album");
    $empty_third=$GLOBALS['db']->Execute($sql_cmd." ".PREFIX."third_lev_album");
    $empty_photos=$GLOBALS['db']->Execute($sql_cmd." ".PREFIX."photos");


        /**
         * delete all cached images
         */

        photo_cache_cleanup_by_date(-10);   // delete all cached images (-10: delete all images older than 10 days in future -> this should be all images)
    }

    /**
    * disable autocreate of thumbs in config to prevent trouble
    */
    if(read_config('autoconf')){
      update_config(0, 'autoconf');
      $auto_config = true;
    } else {
      $auto_config = false;
    }

    /**
     * if we have adocache enabled, make sure to clear all cached entries
     * otherwise the menu will be broken after the rebuild
     */
    if(read_config('adodb_caching')){
        $GLOBALS['db']->CacheFlush();
        if (!$DHTMLenabled) {
          echo "Flushing Cache...<br>";
        }
    }


    /* call first level to create required entries */
    first_lev_funct();
    if (!$DHTMLenabled) {
      print("$parse_first<br>");
      @ob_flush();
      @flush();
    }
    /* initialize counter var */
    $parse_count=0;

    /* run sec_lev_function for every registered entry in first_lev_album */
    $query_first=$GLOBALS['db']->Execute("SELECT path, name FROM ".PREFIX."first_lev_album");

    while($row=$query_first->FetchRow())
    {
        $parse_count++;
        if ($DHTMLenabled) {
          echo '<SCRIPT>document.getElementById("dir_1").innerHTML="'.$row[0].'"</SCRIPT>';
          echo '<SCRIPT>document.getElementById("count_dir_1").innerHTML="'.$parse_count.'"</SCRIPT>';
        } else {
          echo "$parse: <b>$row[1]</b><br>";
        }
        sec_lev_funct($row[0], $row[1], $came_from_first=false);
        @ob_flush();
        @flush();
    }

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("dir_1").innerHTML="DONE"</SCRIPT>';
    } else {
      print("$parsed $parse_count $dirs<br><br>");
      print("$parse_sec<br>");
    }
    @ob_flush();
    @flush();

    /* run third_lev_funct for every registered entry in sec_lev_album */
    $query_sec=$GLOBALS['db']->Execute("SELECT path, name FROM ".PREFIX."sec_lev_album");
    $parse_count=0;
    while($row=$query_sec->FetchRow())
    {
        if($row[1]!="has_images")
      {
        $parse_count++;
        third_lev_funct($row[0], $row[1], $call_from_delete=false);
        if ($DHTMLenabled) {
          echo '<SCRIPT>document.getElementById("dir_2").innerHTML="'.$row[0].'"</SCRIPT>';
          echo '<SCRIPT>document.getElementById("count_dir_2").innerHTML="'.$parse_count.'"</SCRIPT>';
        } else {
          echo "$parse: <b>$row[1]</b><br>";
        }
        @ob_flush();
        @flush();
      }
    }

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("dir_2").innerHTML="DONE"</SCRIPT>';
    } else {
      print("$parsed $parse_count $dirs<br><br>");
      print("$parse_third<br>");
    }
    @ob_flush();
    @flush();

    /* run forth_lev_funct for every registered entry in third_lev_album */
    $query_third=$GLOBALS['db']->Execute("SELECT path, name FROM ".PREFIX."third_lev_album");
    $parse_count=0;
    while($row=$query_third->FetchRow())
    {
      if($row[1]!="has_images")
      {
        $parse_count++;
        forth_lev_funct($row[0], $row[1]);
        if ($DHTMLenabled) {
          echo '<SCRIPT>document.getElementById("dir_3").innerHTML="'.$row[0].'"</SCRIPT>';
          echo '<SCRIPT>document.getElementById("count_dir_3").innerHTML="'.$parse_count.'"</SCRIPT>';
        } else {
          echo "$parse: <b>$row[1]</b><br>";
        }
        @ob_flush();
        @flush();
      }
    }

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("dir_3").innerHTML="DONE"</SCRIPT>';
    } else {
      echo "$parsed $parse_count $dirs<br /><br /><br />$done<br /><br /><br />";
    }
    @ob_flush();
    @flush();

    // write back folder settings (groups) in first_lev_album
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

    /* enable autocreate of thumbs in config */
    if($auto_config):update_config(1, 'autoconf');endif;
}

/**
 * thumbnails
 */
if($_POST['thumbnails'] != 'nothing')
{
  /**
   * default values for progress info (startcondition)
  */
  $echopoint = 0;

    if (!$DHTMLenabled){
      echo "<b>Starting create/recreate of thumbnails</b><br /><br />";
    }

    if($_POST['thumbnails'] == 'recreate')
    {
      if ($DHTMLenabled) {
        echo '<SCRIPT>document.getElementById("thumb").innerHTML="Deleting all existing thumbnails..."</SCRIPT>';
      } else {
        echo "Deleting all existing thumbnails... ";
      }
      @ob_flush();
      @flush();
      $db->Execute("UPDATE ".PREFIX."photos SET thumbnail = NULL");
      if (!$DHTMLenabled) {
        echo "<b>done!</b><br /><br />";
        @ob_flush();
        @flush();
      }
    }

    $query = $db->Execute("SELECT count(*) FROM ".PREFIX."photos");
    $data = $query->FetchRow();
    $max = $data[0];

    $query = $db->Execute("SELECT id, prev_path, filename FROM ".PREFIX."photos WHERE thumbnail is NULL");
    $num = $query->RecordCount();

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("count_thumb").innerHTML="0 of '.$max.'"</SCRIPT>';
    } else {
      echo $num." of ".$max." thumbnails need to be created<br /><br />";
    }
    @ob_flush();
    @flush();

    $counter = 1;
    while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
    {

      $done = number_format(($counter*100)/$num, 2 , '.', '');
      $counter++;
      $src_file = "".$data['prev_path'].'/'.$data['filename']."";
        //echo "<b>".$done." % done</b>, creating thumbnail for: ".$data['prev_path'].'/'.$data['filename']." ";
        echo '<SCRIPT>document.getElementById("count_thumb").innerHTML="'.($counter - 1).' of '.$num.'"</SCRIPT>';
        echo '<SCRIPT>document.getElementById("thumb").innerHTML="'.$src_file.'"</SCRIPT>'.chr(10);
        echo progress($done, $src_file);
        @ob_flush();
        @flush();

        if(file_exists(TOP_DIR.'/'.$data['prev_path'].'/'.$data['filename']))
        {
            make_thumb($data['id']);
        }
        else
        {
            echo "Warning file does not exists anymore: Consider create/recreate Directories first!";
        }
    }
    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("thumb").innerHTML="DONE"</SCRIPT>';
    } else {
      echo "<br /><br />";
    }
    @ob_flush();
    @flush();
}

/**
 * exif
 */
if($_POST['exif'] != 'nothing')
{
  /**
  * default values for progress info (startcondition)
  */
  $echopoint = 0;

    if (!$DHTMLenabled) {
      echo "<b>Reading EXIF information</b><br /><br />";
    }

    include_once(TOP_DIR.'/include/metadata.class.php');
    include_once(TOP_DIR.'/include/phpmeta/EXIF.php');
    $metadata = new MetaData();

    if($_POST['exif'] == 'recreate')
    {
      if ($DHTMLenabled) {
        echo '<SCRIPT>document.getElementById("exif").innerHTML="Deleting all existing exif information..."</SCRIPT>';
      } else {
        echo "Deleting all existing exif information... ";
      }
      @ob_flush();
      @flush();

      if(DB_TYPE == "sqlite")
      {
          $db->Execute("DELETE FROM ".PREFIX."meta_exif");
      }
      else
      {
          $db->Execute("TRUNCATE ".PREFIX."meta_exif");
      }
      if (!$DHTMLenabled) {
        echo "<b>done!</b><br /><br />";
        @ob_flush();
        @flush();
      }
    }

    $query = $db->Execute("SELECT count(*) FROM ".PREFIX."photos WHERE level = '0'");
    $data = $query->FetchRow();
    $max = $data[0];

    $query = $db->Execute("SELECT p.id AS id, p.md5sum AS md5sum, " .
      "p.prev_path AS prev_path, p.filename AS filename ".
        "FROM ".PREFIX."photos AS p LEFT OUTER JOIN ".PREFIX."meta_exif AS e ".
        "ON e.md5sum = p.md5sum WHERE e.md5sum is NULL AND level = '0'");
    $num = $query->RecordCount();

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("count_exif").innerHTML="0 of '.$max.'"</SCRIPT>';
    } else {
      echo $num." of ".$max." files need to be read<br /><br />";
    }
    @ob_flush();
    @flush();

    $counter=1;
    while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
    {
      $src_file = TOP_DIR.'/'.$data['prev_path'].'/'.$data['filename'];

      $done = number_format(($counter*100)/$num, 2 , '.', '');
      $counter++;

      if ($DHTMLenabled) {
        echo chr(10).'<SCRIPT>document.getElementById("exif").innerHTML="'.$data['prev_path'].'/'.$data['filename'].'"</SCRIPT>';
        echo '<SCRIPT>document.getElementById("count_exif").innerHTML="'.($counter - 1).' of '.$max.'"</SCRIPT>';
      }

      echo progress($done, $src_file);
      @ob_flush();
      @flush();

      if(file_exists($src_file))
      {
        $metadata->saveExifData($src_file,$data['md5sum']);
      }
      else
      {
        echo "Warning file does not exists anymore: Consider create/recreate Directories first!";
      }
    }
    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("exif").innerHTML="DONE"</SCRIPT>';
    } else {
      echo "<br /><br />";
    }
    @ob_flush();
    @flush();
}

/**
 * iptc
 */
if($_POST['iptc'] != 'nothing')
{
  /**
  * default values for progress info (startcondition)
  */
  $echopoint = 0;

    if (!$DHTMLenabled) {
      echo "<b>Reading IPTC information</b><br /><br />";
    }

    if(!isset($metadata))
    {
        include_once(TOP_DIR.'/include/metadata.class.php');
        $metadata = new MetaData();
    }
    include_once(TOP_DIR.'/include/phpmeta/Photoshop_IRB.php');
    include_once(TOP_DIR.'/include/phpmeta/JPEG.php');

    if($_POST['iptc'] == 'recreate')
    {
      if ($DHTMLenabled) {
        echo '<SCRIPT>document.getElementById("iptc").innerHTML="Deleting all existing iptc information..."</SCRIPT>';
      } else {
        echo "Deleting all existing iptc information... ";
      }
      @ob_flush();
      @flush();

      if(DB_TYPE == "sqlite")
      {
          $db->Execute("DELETE FROM ".PREFIX."meta_iptc");
      }
      else
      {
          $db->Execute("TRUNCATE ".PREFIX."meta_iptc");
      }
      if (!$DHTMLenabled) {
        echo "<b>done!</b><br /><br />";
        @ob_flush();
        @flush();
      }
    }

    $query = $db->Execute("SELECT count(*) FROM ".PREFIX."photos WHERE level = '0'");
    $data = $query->FetchRow();
    $max = $data[0];

    $query = $db->Execute("SELECT p.id AS id, p.md5sum AS md5sum, " .
      "p.prev_path AS prev_path, p.filename AS filename ".
        "FROM ".PREFIX."photos AS p LEFT OUTER JOIN ".PREFIX."meta_iptc AS e ".
        "ON e.md5sum = p.md5sum WHERE e.md5sum is NULL AND level = '0'");
    $num = $query->RecordCount();

    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("count_iptc").innerHTML="0 of '.$max.'"</SCRIPT>';
    } else {
      echo $num." of ".$max." files need to be read<br /><br />";
    }
    @ob_flush();
    @flush();

  $counter = 1;
    while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
    {
      $src_file = TOP_DIR.'/'.$data['prev_path'].'/'.$data['filename'];

      $done = number_format(($counter*100)/$num, 2 , '.', '');
      $counter++;

      if ($DHTMLenabled) {
        echo '<SCRIPT>document.getElementById("count_iptc").innerHTML="'.($counter - 1).' of '.$max.'"</SCRIPT>';
        echo '<SCRIPT>document.getElementById("iptc").innerHTML="'.$data['prev_path'].'/'.$data['filename'].'"</SCRIPT>'.chr(10);
      }

      echo progress($done, $src_file);
      @ob_flush();
      @flush();

        if(file_exists($src_file))
        {
            $metadata->saveIptcData($src_file,$data['md5sum']);
        }
        else
        {
            echo "Warning file does not exists anymore: Consider create/recreate Directories first!";
        }
    }
    if ($DHTMLenabled) {
      echo '<SCRIPT>document.getElementById("iptc").innerHTML="DONE"</SCRIPT>';
    } else {
      echo "<br /><br />";
    }
    @ob_flush();
    @flush();
}

/**
 * delete doubles first so they don't show up in the search
 */
if($_POST['dropdoubles'])
{
  if ($DHTMLenabled) {
    echo chr(10)."<SCRIPT>document.getElementById(\"dup_drop\").innerHTML='".drop_duplicates()."'</SCRIPT>";
  } else {
    echo "<b>Dropping duplicates</b><br /><br />";
    echo drop_duplicates();
  }
  @ob_flush();
  @flush();
}

/**
 * find / print duplicates
 */
if($_POST['doubles'])
{
  if ($DHTMLenabled) {
    echo chr(10)."<SCRIPT>document.getElementById(\"dup_found\").innerHTML='".find_duplicates()."'</SCRIPT>";
  } else {
    echo "<b>Searching for duplicates</b><br /><br />";
    echo find_duplicates();
  }
  @ob_flush();
  @flush();
}

/**
 * if cache is disabled, nothing will happen
 */
photo_cache_cleanup_invalid($force=false);

  $done_links  = "<a href=\"index.php\"><strong>".$admin_task."</strong></a><br /><br />";
  $done_links .= "<a href=\"".TOP_DIR."/admin.php?page=other\"><strong>".STR_BACK."</strong></a> ";

  if ($DHTMLenabled) {
    echo "<SCRIPT>document.getElementById(\"done_links\").innerHTML='".$done_links."'</SCRIPT>";
    @ob_flush();
    @flush();
  } else {
    echo $done_links;
  }

/**
 * This method takes care of the progress info in creating iptc/exif and thumbs.
 * It features 2 ways of info, either silent (show only percentage progress in
 * 5% steps, or info for each single file )
 */
function progress($done, $src_file)
{
  global $echopoint;
  global $DHTMLenabled;
  $output = '';
  if (!$DHTMLenabled) {
    if(!$_POST['silent'])
    {
      $output .= "<b>".$done." % done</b>, working on file: ".$src_file." ";
      $output .= "<br />".chr(10);
    }
      else
    {
      if(intval($done) >= $echopoint)
      {
        $output .= "<b>".round($done)." % done</b>";
        $output .= "<br />".chr(10);

        $echopoint = $echopoint+5;
      }
  }
  }
  return $output;
}

/**
 * find duplicates in collection based on md5sum and print locations
 */
function find_duplicates()
{
  global $DHTMLenabled;
  $output = '';
  $query=$GLOBALS['db']->Execute("SELECT md5sum, count(md5sum) " .
      "FROM ".PREFIX."photos " .
      "WHERE level = '0' " .
      "GROUP BY md5sum HAVING COUNT(md5sum)>1");

  if ($query->RecordCount() > 0) {
    if ($DHTMLenabled) {
      $output .= "<br /><table class=\"admintable\" border=\"1\" cellpadding=\"0\" width=\"100%\">";
      echo "<SCRIPT>document.getElementById(\"dup\").innerHTML='".$query->RecordCount().' Duplicates found!'."'</SCRIPT>";
      @ob_flush();
      @flush();
    } else {
      $output .= "<table border=\"1\" cellpadding=\"5\">";
    }
    $output .= "<tr><th class=\"maintable\" width=\"150px\">Image</th><th class=\"maintable\">found duplicates...</th></tr>";

    while($result = $query->fetchRow())
    {
    $query_doubles=$GLOBALS['db']->Execute("SELECT id, prev_path, filename FROM ".PREFIX."photos " .
        "WHERE md5sum = '".$result[0]."' ");
    $loops = 0;

      while($duplicate = $query_doubles->FetchRow(ADODB_FETCH_ASSOC))
      {
      	$stage = get_stage_from_prev_path($duplicate['prev_path']);
        $albid = get_albid($duplicate[1],$stage);

        if($loops == 0)
        {
          $output .= '<tr>';
          $output .= '<td align="center" width="150px"><img src="'.TOP_DIR.'/get_thumbs.php?id='.$duplicate['id'].'" border="0"></td>';
          $output .= '<td><a href="'.TOP_DIR.'/viewer.php?imgid='.$duplicate['id'].'&albid='.$albid.'&stage='.$stage.'&job=create_all_thumbs">';
          $output .= $duplicate['prev_path'].'/'.$duplicate['filename'].'</a><br>';
        }
        else
        {
          $output .= '<a href="'.TOP_DIR.'/viewer.php?imgid='.$duplicate['id'].'&albid='.$albid.'&stage='.$stage.'&job=create_all_thumbs">';
          $output .= $duplicate['prev_path'].'/'.$duplicate['filename'].'</a><br>';
        }
      $loops++;
      }

    unset($loops);

    }
  } else {
    if ($DHTMLenabled) {
      echo "<SCRIPT>document.getElementById(\"dup\").innerHTML='".'No duplicates found!'."'</SCRIPT>";
      @ob_flush();
      @flush();
    }
  }
  $output .= "</td></tr></tr></table>";
  $output .= "<br>";
  return $output;
}

/**
 * drop duplicates in collection based on md5sum
 * @return bool true/false
 */
function drop_duplicates()
{
  global $DHTMLenabled;
  $output = '';
  $query=$GLOBALS['db']->Execute("SELECT md5sum, count(md5sum) " .
      "FROM ".PREFIX."photos " .
      "WHERE level = '0' " .
      "GROUP BY md5sum HAVING COUNT(md5sum)>1");
  $dels ='0';

  if ($DHTMLenabled) {
    $output .= "<br /><table class=\"admintable\" border=\"1\" cellpadding=\"0\" width=\"100%\">";
    echo "<SCRIPT>document.getElementById(\"dropdup\").innerHTML='Deleting Duplicates!'</SCRIPT>";
    @ob_flush();
    @flush();
  } else {
    $output .= "<table border=\"1\" cellpadding=\"5\">";
  }
  $output .= "<tr><th class=\"maintable\">Deleted Duplicates Status</th></tr>";

  while($result = $query->fetchRow())
  {
  $query_doubles=$GLOBALS['db']->Execute("SELECT id, prev_path, filename " .
      "FROM ".PREFIX."photos " .
      "WHERE md5sum = '".$result[0]."' ");
  $loops = '0';


    while($duplicate = $query_doubles->FetchRow(ADODB_FETCH_ASSOC))
    {
      /**
       * keep first entry
       */
       if($loops >= '1')
       {
         if ($DHTMLenabled) {
           echo '<SCRIPT>document.getElementById("dropdup").innerHTML="'.$duplicate['prev_path']."/".$duplicate['filename'].'"</SCRIPT>';
         } else {
           echo "<br>Dropping:".$duplicate['prev_path']."/".$duplicate['filename']."<br><br>";
         }

        if( @!unlink($duplicate['prev_path']."/".$duplicate['filename']))
        {
          if ($DHTMLenabled) {
            $output .= "<tr><td><strong>FATAL:</strong> Permission problems when trying to delete:&nbsp;";
            $output .= $duplicate['prev_path']."/".$duplicate['filename'];
            $output .= "<br>Please check permissions and or ownership...</td></tr>";
          } else {
            echo "FATAL: Permission problems when trying to delete:&nbsp;";
            echo $duplicate['prev_path']."/".$duplicate['filename']."<br>";
            echo "Please check permissions and or ownership...<br>";
          }
          $dels--;
        } else {
          if ($DHTMLenabled) {
            $output .= "<tr><td>DELETED: &nbsp;".$duplicate['prev_path']."/".$duplicate['filename']."</td></tr>";
          }
        }
        $dels++;
       }
    $loops++;
    }
  }

  if ($DHTMLenabled) {
    echo '<SCRIPT>document.getElementById("dropdup").innerHTML="'.$dels.' duplicates removed!"</SCRIPT>';
  } else {
    echo "<br><br><b>Stats: $dels duplicates removed...</b><br><br>";
  }
  $output .= "</table>";
  $output .= "<br>";
  return $output;
}

?>
