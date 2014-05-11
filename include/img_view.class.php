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
* used stuff for slideshow
*/
if(isset($_GET['imgid'])) {
    if(isset($_GET['img_view']) && $_GET['img_view'] == 'slideshow')
    {
        $show_header = false;
        //include_once(TOP_DIR.'/include/browser.php'); // browser.php needs to be before session.php!
        //include_once(TOP_DIR.'/include/session.php');
        include_once(language_file());
    
    } else {
        $show_header = true;
    }
} else {
    $show_header = true;
}

/**
* used in commenting system
*/
if(isset($_GET['imgid']) && isset($_GET['img_view']) && $_GET['img_view'] == 'comment' && read_plugins_config('facetmap'))
{
    include_once(TOP_DIR.'/plugins/facetmap/functions.php');
}

/**
 * used for basket
 */
if(isset($_REQUEST['view']) && $_REQUEST['view'] == 'basket')
{
	$show_leftcontent = false;
}
else
{
	$show_leftcontent = true;
}

class ImgView
{

var $mode;
var $view,$img_view;
var $sql,$sql_where,$order;
var $link_address;

/**
* fullsize image variables
*/
var $filename,$prev_path,$name,$md5sum;
var $nw,$nh,$org_type,$org_width,$org_height;
var $prev_next_id = Array(), $prev_next_name = Array();
//var $stage_height, $stage_width;  // video mode only
var $number,$current_img,$no_views;
var $exif_data;

/**
* thumbnail variables
*/
var $pages,$num_cols,$num_rows,$num_photos,$num_tot_per_page;
var $str_pageregister;
var $query;
var $fields;
//var $sql_detail_view_summarize;   // only in detailed mode

/**
* constructor
*/
function ImgView()
{
    $this->num_cols = read_config('photos_col');
    $this->num_rows = read_config('photos_row');
    $this->num_tot_per_page = $this->num_cols*$this->num_rows;
    
    $this->str_pageregister = '';
}

/**
* values are: 'viewer', 'search', 'new_images', 'facetmap'
*/
function setMode($mode)
{
    $this->mode = $mode;
}

/**
* set used link, values are: './viewer.php?albid=x&stage=y', './new_images. php?
* 1=1', './search.php?1=1', './plugins/facetmap/browse_album.php? fmlocation=z'
*/
function setLinkAdress($address)
{
    $this->link_address = $address;
}

/**
* switch between 'normal' and 'detail' thumbnail view
*/
function setDefaultView($default_view)
{
    if(isset($_REQUEST['view']))
    {
        $this->view = $_REQUEST['view'];

        if($default_view != $_REQUEST['view'])
        {
            $this->link_address .= '&view='.$_REQUEST['view'];
        }
    }
    else
    {
        $this->view = $default_view;
    }
    
    /**
    * workaround in detail thumbnail view
    */
    if($this->view == 'detail')
    {
        /**
        * set variables
        */
        $this->num_tot_per_page = 20;
        $this->num_cols = 4;
        
        /**
        * set default fields
        *
        * can be changed individual with the function setDefaultViewFields()
        */
        $this->fields = Array('filename','date','description','album');
    }
    
    $this->setDefaultImageView('normal');
}

function setDefaultViewFields($fields)
{
    $this->fields = $fields;
}

/**
* switch between img_view: 'normal', 'slideshow', 'comment'
*/
function setDefaultImageView($default_img_view)
{
    if(isset($_GET['img_view']))
    {
        $this->img_view = $_GET['img_view'];

        if($default_img_view != $_GET['img_view'])
        {
            $this->link_address .= '&img_view='.$_GET['img_view'];
        }
    }
    else
    {
        $this->img_view = $default_img_view;
    }
}

/**
* set default order by for thumbnails and prev_next in fullsize mode
*/
function setDefaultOrder($default_order)
{
    if(isset($_REQUEST['order']))
    {
        $this->order = $_REQUEST['order'];
        
        if($default_order != $_REQUEST['order'])
        {
            $this->link_address .= '&order='.$_REQUEST['order'];
        }
    }
    else
    {
        $this->order = $default_order;
    }
}

/**
* set sql query string
*/
function setSql($sql_begin,$sql_where)
{
    $this->sql_where = $sql_where." ".sql_perm()." AND ".
        PREFIX."photos.prev_path LIKE ".$GLOBALS['db']->Concat(PREFIX."first_lev_album.path","'%'").
        " ORDER by ".P.".".get_thumb_order($this->order);

    if(empty($sql_begin))
    {
        $sql_begin = "SELECT ".P.".id AS id, ".P.".name As name, ".P.".filename AS filename, " .
        		"".P.".prev_path AS prev_path, ".P.".date AS date, " .
        		"".P.".level AS level, ".P.".md5sum AS md5sum";

    }
    $this->sql = $sql_begin.$this->sql_where;
    $query = $GLOBALS['db']->Execute($this->sql);
    $this->num_photos = $query->RecordCount();
}

/**
* Fullsize Image functions
*/
function setFileInfo()
{
    $query = $GLOBALS['db']->Execute(sql_query_str(array('prev_path', 'name', 'filename', 'md5sum', 'level'),PREFIX."photos.id='".linpha_addslashes($_GET['imgid'])."'"));
    $album_info=$query->FetchRow(ADODB_FETCH_ASSOC);
    
    $this->prev_path = $album_info['prev_path'];
    $this->name = $album_info['name'];
    $this->filename = $album_info['filename'];
    $this->md5sum = $album_info['md5sum'];
    $this->level = $album_info['level'];
    
    if(!isset($_GET['albid']) OR !isset($_GET['stage']))
    {
        $_GET['stage'] = get_stage_from_prev_path($album_info['prev_path']);
        $_GET['albid'] = get_albid($album_info['prev_path'],$_GET['stage']);
    }

    // receive image information
    list($this->org_width,$this->org_height,$this->org_type) = linpha_getimagesize(TOP_DIR.'/'.$this->prev_path.'/'.$this->filename);
    
    if($this->img_view == 'comment')
    {
        $this->max_width = 400;
        $this->max_height = 250;
    }
    else
    {
        $this->max_width = read_config("photo_width");
        $this->max_height = read_config("photo_height");
    }
    
    // portrait/landscape?
    $array = scale_to_fit($this->org_height,$this->org_width,$this->max_height,$this->max_width,1);
    $this->nw = $array['w'];
    $this->nh = $array['h'];

    /**
    * read number of views
    */
    $query = $GLOBALS['db']->Execute("SELECT res FROM ".PREFIX."photos WHERE id = '".linpha_addslashes($_GET['imgid'])."'");
    $data = $query->FetchRow();
    $this->no_views = $data[0];
}
    

function printImage()
{
    switch($this->img_view)
    {
    case 'normal':
        $this->setFileInfo();
        $this->setPrevNextImage();
        $this->showImage();
    break;
    case 'comment':
        $this->setFileInfo();
        $this->setPrevNextImage();
        $this->showCommentSystem();
    break;
    case 'slideshow':
        $this->showSlideshow();
    break;
    default:
        echo 'undefined access';
    break;
    }
}

function showSlideshow()
{
    global $slideshow;

    $w = read_config("photo_width");
    $h = read_config("photo_height");
    //$enableTransitions = ($GLOBALS['_browser']->property('browser')=='ie');

    $sql=$GLOBALS['db']->Execute($this->sql);
    
    $pics = array();
    while($row = $sql->FetchRow(ADODB_FETCH_ASSOC))
    {
        /**
        * exclude videos
        */
        if($row['level'] == 0)
        {
            $pics[$row['id']] = $row;
            $pics[$row['id']]['id'] = $pics[$row['id']]['id'];
        }
    }
    
    html_header();
    ?>
    
    <title><?php echo $slideshow; ?> - LinPHA</title>
    <style type='text/css'>
    body,a:link, a:visited, a:hover, td, select, option {
        font-family:Verdana, Arial, Helvetica, sans-serif;
        font-weight: normal;
        font-size: 10pt;
        color: #888888;
        background-color: solid black;
    }
    a:link, a:visited {
        font-weight: bold;
        text-decoration:none;
    }
    a:hover {
        font-weight: bold;
        text-decoration:underline;
    }
    select,option {
        color: black;
    }
    </style>
    </head>
    
    <body bgcolor='#000000' onLoad='body_OnLoadProc()'>
    
    <!-- JavaScript code -->
    <?php /*<script language='JavaScript' src='<?php echo TOP_DIR; ?>/include/client_sniff.js' type='text/javascript'></script>
    */ ?>

    <script language='JavaScript' type='text/javascript'>
    
    /**
    * copied from client_sniff.js which now is removed
    */
    var agt=navigator.userAgent.toLowerCase();
    var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
        && (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
        && (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1));
    var is_opera = (agt.indexOf('opera')!=-1);
    
    // This is the complete list of all the pictures that will be played in the
    // slideshow
    var db = [
    <?php
        $order=1;
        $start_idx = 1;
        foreach ($pics as $id=>$record)
        {
            if($record['id'] == $_GET['imgid'])
            {
                $start_idx = $order;
            }
            
            echo "    { pos: $order, ";
            $order++;
            /*foreach ($record as $key=>$val)
            {
                echo $key.': "'.linpha_addslashes($val).'", ';
            }*/
            echo 'id: "'.$record['id'].'", ';
            echo 'filename: "'.$record['filename'].'", ';
            echo 'prev_path: "'.$record['prev_path'].'", ';
            echo " random: false}";
            if ($order <= count($pics)) {
            echo ",";
            }
            echo "\n";
        
        }
    ?>
    ];
    
    <?php /*if ($enableTransitions) { ?>
    var transition = [
        { name: "None",     filter: "none" },
        { name: "Random effect",filter: "random"},
        { name: "Fade",     filter: "progid:DXImageTransform.Microsoft.Fade(duration=2)"},
        { name: "Blinds",   filter: "progid:DXImageTransform.Microsoft.Blinds(Duration=2,bands=20)"},
        { name: "Checkboard",   filter: "progid:DXImageTransform.Microsoft.Checkerboard(Duration=2,squaresX=20,squaresY=20)"},
        { name: "Strips",   filter: "progid:DXImageTransform.Microsoft.Strips(Duration=2,motion=rightdown)"},
        { name: "Baen",     filter: "progid:DXImageTransform.Microsoft.Barn(Duration=2,orientation=vertical)"},
        { name: "Gradient Wipe",filter: "progid:DXImageTransform.Microsoft.GradientWipe(duration=2)"},
        { name: "Iris",     filter: "progid:DXImageTransform.Microsoft.Iris(Duration=2,motion=out)"},
        { name: "Wheel",    filter: "progid:DXImageTransform.Microsoft.Wheel(Duration=2,spokes=12)"},
        { name: "Pixelate", filter: "progid:DXImageTransform.Microsoft.Pixelate(maxSquare=10,duration=2)"},
        { name: "RadialWipe",   filter: "progid:DXImageTransform.Microsoft.RadialWipe(Duration=2,wipeStyle=clock)"},
        { name: "RandomBars",   filter: "progid:DXImageTransform.Microsoft.RandomBars(Duration=2,orientation=vertical)"},
        { name: "Slide",    filter: "progid:DXImageTransform.Microsoft.Slide(Duration=2,slideStyle=push)"},
        { name: "Random Dissolve", filter: "progid:DXImageTransform.Microsoft.RandomDissolve(Duration=2,orientation=vertical)"},
        { name: "Spiral",   filter: "progid:DXImageTransform.Microsoft.Spiral(Duration=2,gridSizeX=40,gridSizeY=40)"},
        { name: "Stretch",  filter: "progid:DXImageTransform.Microsoft.Stretch(Duration=2,stretchStyle=push)"}
    ];
    var paramTransition = 0;
    <?php }*/ ?>
    
    //var imagesFolder = "$prev_path";
    var currentTimerID;         // ID of the current timer
    var currentDelay = 5000;    // TODO: Set to the right value
    var nextImage;              // Image being loaded
    var nextImageIdx = <?php echo isset($start_idx) ? $start_idx-1 : 0; ?>;       // Idx inside db of next img
    var isTimerExpired = true;
    var isImagePreloaded = true;
    var abortPreload = false;
    
    var paramLoop = false;
    var paramRandom = false;
    var paramRunning = true;
    
    var imgPlay = new Image();
    imgPlay.src = '<?php echo TOP_DIR; ?>/graphics/ss_play.gif';
    
    var imgStop = new Image();
    imgStop.src = '<?php echo TOP_DIR; ?>/graphics/ss_stop.gif';
    
    var imgRandom = new Image();
    imgRandom.src = '<?php echo TOP_DIR; ?>/graphics/ss_random.gif';
    
    var imgNoRandom = new Image();
    imgNoRandom.src = '<?php echo TOP_DIR; ?>/graphics/ss_norandom.gif';
    
    var imgLoop = new Image();
    imgLoop.src = '<?php echo TOP_DIR; ?>/graphics/ss_loop.gif';
    
    var imgNoLoop = new Image();
    imgNoLoop.src = '<?php echo TOP_DIR; ?>/graphics/ss_noloop.gif';
    
    function body_OnLoadProc() {
        refreshDetails(true);
        loadNextImage(false, false);
    }
    
    function loadImmediate(idx) {
        nextImageIdx = idx;
        if (!isTimerExpired)
        {
            clearTimeout(currentTimerID);
            isTimerExpired = true;
        }
        if (!isImagePreloaded)
        {
            abortPreload = true;
        }
        loadNextImage(false, false);
    }
    
    function rewind() {
        loadImmediate(0);
    }
    
    function prev() {
    	if(paramRunning)
    	{
	        if (nextImageIdx > 1) {
		        loadImmediate(nextImageIdx-2);
	        } else if (nextImageIdx > 0) {
		        loadImmediate(nextImageIdx-1);
	        }
    	}
    	else
    	{
	        if (nextImageIdx > 0) {
		        loadImmediate(nextImageIdx-1);
	        }
    	}
    }
    
    function startstop() {
        if (paramRunning) {
            enableGlobe(false);
            document.btnStartStop.src = imgPlay.src;
            paramRunning = false;
            if (!isTimerExpired) {
                clearTimeout(currentTimerID);
                timerExpired();
            }
            // ?? do not abort image loading, because refreshDetails() would show the wrong img nr. and
            // prev/next doesnt work correctly as nextImageIdx is already set to the next image 
            // if (!isImagePreloaded) {
			// 	abortPreload = true;
            // }
        } else {
            document.btnStartStop.src = imgStop.src;
            paramRunning = true;

        	// on end of slideshow begin on first image again
        	if( !paramRandom && nextImageIdx >= (db.length-1)) {
				nextImageIdx = 0;
		        loadNextImage(false, false);
        	}
        	else
        	{
		        loadNextImage(false, true);
        	}
        }
        refreshDetails(false);
    }
    
    function changeRandom() {
        if (paramRandom) {
        document.btnRandom.src = imgRandom.src;
        paramRandom = false;
        } else {
        document.btnRandom.src = imgNoRandom.src;
        paramRandom = true;
        }
        refreshDetails(true);
    }
    
    function changeLoop() {
        if (paramLoop) {
        document.btnLoop.src = imgLoop.src;
        paramLoop = false;
        } else {
        document.btnLoop.src = imgNoLoop.src;
        paramLoop = true;
        }
        refreshDetails(true);
    }
    
    function next() {
        if (nextImageIdx < db.length-1) {
        	// if we load the next image while running we would skip each second image
        	// so set timer to be expired and try to replace image (if it isnt preloaded, do nothing)
        	if(paramRunning)
        	{
        		clearTimeout(currentTimerID);
        		timerExpired();
        	}
        	else
        	{
            	loadImmediate(nextImageIdx+1);
        	}
        }
    }
    function last() {
        loadImmediate(db.length-1);
    }
    function changeDelay() {
        currentDelay=document.optionsForm.delay.options[document.optionsForm.delay.selectedIndex].value * 1000;
    }
    
    // Returns true to stop the slideshow (end of album and no loop)
    function incrementImagePtr() {
        if (paramRandom) {
            nextImageIdx = Math.floor(Math.random() * db.length-1);
            return false;
        }
        else
        {
            if (nextImageIdx >= db.length-1) {
                if (paramLoop) {
                    nextImageIdx = 0;
                } else {
                    return true;
                }
            }
            else
            {
            	nextImageIdx++;
            }
            return false;
        }
    }
    
    // This function is called after the browser has finished to load the
    // first "Please Wait" image
    //
    
    function loadNextImage(doDelay, incrImage) {
    	abortPreload = false;
        if (doDelay == true) {
            isTimerExpired = false;
            currentTimerID = setTimeout("timerExpired()", currentDelay);
        } else {
            isTimerExpired = true;
        }
        isImagePreloaded = false;
        enableGlobe(true);
        nextImage = new Image();
        nextImage.onload = preloadImage_completed;
        if (incrImage) {
            if (incrementImagePtr()) { // incrementImagePtr returns true -> end of slideshow
                paramRunning = false;
                elem = document.getElementById("divRun");
                elem.innerHTML = 'End of album <a href=javascript:window.close();><font color="#00FF00"> <u><b>exit slideshow</b></u></font></a>';
	        	document.btnStartStop.src = imgPlay.src;
                enableGlobe(false);
                clearTimeout(currentTimerID);
                return;
            }
        }
    
        switch(document.optionsForm.img_size.value)
        {
            case "fullscreen":
                if (is_nav || is_opera) {
                    screenWidth  = window.innerWidth;
                    screenHeight = window.innerHeight - 75; // without header
                } else {
                    screenWidth  = screen.availWidth - 50; // document.body.scrollWidth;
                    screenHeight = screen.availHeight - 30; //document.body.scrollHeight; "-30": without header
                }
            break;
            case "640x480":
                screenWidth = 640;
                screenHeight = 480;
            break;
            case "800x600":
                screenWidth = 800;
                screenHeight = 600;
            break;
            case "1024x768":
                screenWidth = 1024;
                screenHeight = 768;
            break;
            default:
                screenWidth = <?php echo $w; ?>;
                screenHeight = <?php echo $h; ?>;
            break;
        }
        nextImage.src = '<?php echo TOP_DIR; ?>/get_thumbs_on_fly.php?imgid=' + db[nextImageIdx].id + '&nw=' + screenWidth + '&nh=' + screenHeight + '&slideshow=1';
        
        // workaround for opera browser which has problems with the
        // nextImage.onload = preloadImage_completed; statement
        // -> no preload of images in opera
 
        if(is_opera)
        {
            isImagePreloaded = true;
            enableGlobe(false);
            if (!abortPreload) {
                replaceImage();
            } else {
                abortPreload = false;
            }

        }
    }
    
    function preloadImage_completed() {
        isImagePreloaded = true;
        enableGlobe(false);
        if (!abortPreload) {
            replaceImage();
        } else {
            abortPreload = false;
        }
    }
    
    function timerExpired() {
        isTimerExpired = true;
        replaceImage();
    }
    
    function replaceImage()
    {
        if (isTimerExpired && isImagePreloaded) {
            refreshDetails(false);

            document.main_image.src = nextImage.src;
        
            if (paramRunning) {
                loadNextImage(true, true);
            }
        } else if (isTimerExpired && !isImagePreloaded) {
            enableSlowNet(true);
        } else if (!isTimerExpired && isImagePreloaded) {
            enableSlowNet(false);
        }
    }
    
    function refreshDetails(all) {
        elem = document.getElementById("divRun");
        if (paramRunning) {
        	elem.innerHTML = '<b>Playing...</b>';
        } else {
        	elem.innerHTML = '<b>STOP <a href=javascript:window.close();> <font color="#00FF00"><u>exit slideshow</u></font></a></b>';
        }

        elem = document.getElementById("divName");
        elem.innerHTML = 'Image ' + (nextImageIdx + 1).toString() + '/' + db.length.toString() ;



        if (!all) {
          return;
        }
    
        elem = document.getElementById("divLoop");
        if (paramLoop) {
          elem.innerHTML = "<b>LOOP</b>";
        } else {
          elem.innerHTML = "&nbsp;";
        }
    
        elem = document.getElementById("divRandom");
        if (paramRandom) {
          elem.innerHTML = "<b>Random</b>";
        } else {
          elem.innerHTML = "&nbsp;";
        }
    }
    
    
    var imgGlobe = new Image();
    imgGlobe.src = '<?php echo TOP_DIR; ?>/graphics/globe.gif';
    
    function enableGlobe(enable) {
        elem = document.getElementById("divGlobe");
        if (enable) {
          elem.innerHTML = "<img name='globeImage' alt='globe'/>";
          document.globeImage.src = imgGlobe.src;
        } else {
          elem.innerHTML = "&nbsp;";
        }
    }
    
    
    var bSlowNet   = false;
    var imgSlowNet = new Image();
    imgSlowNet.src = '<?php echo TOP_DIR; ?>/graphics/exclam.gif';
    
    function enableSlowNet(enable) {
        if (bSlowNet == enable) {
          return;
        }
        elem = document.getElementById("divSlowNet");
        if (enable) {
          elem.innerHTML = "<img name='slownetImage' alt='slownet' />";
          document.slownetImage.src = imgSlowNet.src;
          bSlowNet = true;
        } else {
          elem.innerHTML = "&nbsp;";
          bSlowNet = false;
        }
    }
    
    </script>
    <!-- ======================================================================== -->
    
    <form name='optionsForm' action=''>
    <table width='100%' cellspacing='0' cellpadding='0' border='0'>
    <tr>
        <td>
        <table cellspacing='0' cellpadding='4' border='0'> <?php /* bgcolor='#B3BCDE'> */ ?>
        <tr>
        <td><a href='javascript:rewind();' title='Go to the first photo' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_rewind.gif' alt='Go to the first photo' border='0' /></a></td>
        <td><a href='javascript:prev();' title='Show the previous photo' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_previous.gif' alt='Show the previous photo' border='0' /></a></td>
        <td><a href='javascript:startstop();' title='Start/Stop slideshow' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_stop.gif' alt='Start/Stop slideshow' name='btnStartStop' border='0' /></a></td>
        <td><a href='javascript:next();' title='Show the next photo' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_next.gif' alt='Show the next photo' border='0' /></a></td>
        <td><a href='javascript:last();' title='Show the last photo' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_last.gif' alt='Show the last photo' border='0' /></a></td>
        <td><a href='javascript:changeLoop();' title='Enable/disable loop' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_loop.gif' alt='Enable/disable loop' name='btnLoop' border='0' /></a></td>
        <td><a href='javascript:changeRandom();' title='Random/sequential order' ><img src='<?php echo TOP_DIR; ?>/graphics/ss_random.gif' alt='Enable/disable random' name='btnRandom' border='0' /></a></td>
        <td>
            Delay: <select name="delay" size=1  onchange="changeDelay()">
            <option value="3"> 3 second</option>
            <option value="4"> 4 second</option>
            <option value="5" selected> 5 second</option>
            <option value="10"> 10 seconds</option>
            <option value="15"> 15 seconds</option>
            <option value="30"> 30 seconds</option>
            <option value="45"> 45 seconds</option>
            <option value="60"> 60 seconds</option>
            </select>
            </td>
        <td>Size:
            <select name="img_size" size="1">
                <?php echo '<option value="'.$w.'x'.$h.'">'.$w.' x '.$h.'</option>'; ?>
                <option value="640x480">640 x 480</option>
                <option value="800x600">800 x 600</option>
                <option value="1024x768">1024 x 768</option>
                <option value="fullscreen" selected>Fullscreen</option>
            </select>
        </td>
        <td><div align='left' id='divSlowNet'>&nbsp;</div></td>
    
        <?php /*if ($enableTransitions) { ?>
        <td>
            Transition: <select name="effect" size=1  onchange="changeEffect()">
            <script language='JavaScript' type='text/javascript'>
            for (var i = 0; i < transition.length; ++i) {
            document.write('<option value=' + i);
            if (i == paramTransition) {
                document.write(' selected');
            }
                document.write('>' + transition[i].name);
            }
            </script>
            </select>
        </td>
        <?php }*/ ?>
        <td>&nbsp;</td>
        <td><div align='center' id='divRun'></div></td>
        <td><div align='center' id='divLoop'></div></td>
        <td><div align='center' id='divRandom'></div></td>
        <td><div align='center' id='divName'></div></td>
        <td><div align='center' id='divGlobe'>&nbsp;</div></td>
        </tr>
        </table>      
        </td>
    </tr>
    </table>
    
    <hr size='1' />
    
    <!-- **************** IMAGE GOES HERE ************** -->
    <table width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tr valign='middle'>
        <td align='center'><img src='<?php echo TOP_DIR; ?>/graphics/slideshow_wait.jpg' name='main_image' border='0' alt='main_image' /></td>
    </tr>
    </table>
    </form>
    </body>
    </html>
    <?php
}

function showCommentSystem()
{
    global $wm_available_images, $comment_hint, $comment_beginning, $current_name, $comment_end, $img_detail;
    global $comment_edit_img, $comment_change_img_details, $img_cat, $seach_multiple_select_use, $control_key;
    global $new_cat_header, $img_des, $submit_button_folder, $add_img_com, $gb_name, $formatting_possibilities;
    global $comment_last_comments, $img_info_stored, $comment_comment_by, $lang_plugins;
    global $str_chars_entered, $str_information_lost, $detail_header1;
	global $blacklist_opts, $blacklist_onoff, $blacklist_keywords, $button_off_msg, $button_on_msg; 
    

    $link_base64 = base64_encode($this->link_address."&imgid=".$_GET['imgid']);
    
    /**
    * left side thumbnails
    */
    ?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo $wm_available_images."\n"; ?>
			</div>
            <div align='center'><br/>
            <?php echo $comment_hint; ?><br/>
            <hr noshade>
            <?php

    /**
    * previous image
    */
    if(isset($this->prev_next_id['prev']))
    {
        echo "<a href='".$this->link_address."&imgid=".$this->prev_next_id['prev']."'>";
        print_thumbnail($this->prev_next_id['prev'],0);
        echo "<br /></a>".cut_string($this->prev_next_name['prev'],20,1)."<br /><br />";
    } else {
        echo '<table style="border:2px solid black; border-spacing:10px">'.
            '<tr><td height="50" width="100"><b>'.$comment_beginning.'</b></td></tr></table><br /><br />';
    }
    
    /**
    * current image
    */
    print_thumbnail($_GET['imgid'],0);
    echo "<br />".cut_string($this->current_img_name,20,1)."<br /><br />";
    
    /**
    * next image
    */
    if(isset($this->prev_next_id['next']))
    {
        echo "<a href='".$this->link_address."&imgid=".$this->prev_next_id['next']."'>";
        print_thumbnail($this->prev_next_id['next'],0);
        echo "<br /></a>".cut_string($this->prev_next_name['next'],20,1)."<br /><br />";
    } else {
        echo '<table style="border:2px solid black; border-spacing:10px"><tr><td height="50" width="100"><b>'.$comment_end.'</b></td></tr></table>';
    }
    
    
    /**
    * back to image view href
    */
	?>
            </div>
        </td>
        <td class='mainwindow' height='100%' colspan='2'>
        <?php
           /* if($this->level != 0)
            {
                echo 'Description for videos not yet supported<br />';
            }
            else
            {*/
            ?>
            <table class='maintable' width='100%' cellspacing='0'>
                <tr>
                    <td class='commenthead' width='100%' colspan='3' style='padding-left: 15px; border: 0px;'>
                        <br /><h2>
                        <?php echo $img_detail." [".$this->filename."]"; ?>
                        </h2>
                        <i><?php echo $comment_edit_img; ?></i>
                    </td>
                </tr>
                <tr>
                    <td class='viewimage' valign='top' colspan='3'>
                        <div align='left'>
                        <a class='linkbutton leftmenu' href='<?php echo $this->link_address.'&imgid='.$_GET['imgid']; ?>&img_view=normal'>
                        &nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;
                        </a>
                        </div>
                        <br />
    <?php
                // comment stored msg
                if(isset($_GET['cmt'])): echo "<h1>! $img_info_stored !</h1>";endif;
    ?>
                        <table width='95%' align='center' border='0'>
    <?php
    /**
     * workarround for missing mdusum in photos table (as seen at SF :-()
     * update 13.08.2005: really need this workaround because many videos don't
     * have yet a md5sum
     */
    if(empty($this->md5sum))
    {
        if(is_video($this->org_type))
        {
        	$this->md5sum = md5($this->prev_path."/".$this->filename);
        }
        elseif(is_supported_image($this->org_type) )
        {
        	$this->md5sum = get_file_md5sum(TOP_DIR."/".$this->prev_path."/".$this->filename);
        }
        
        $sql=$GLOBALS['db']->Execute("UPDATE ".PREFIX."photos SET md5sum='".$this->md5sum."' 
                        WHERE id='".$_GET['imgid']."'");
    }


/*#############################################
## edit image description/ category 
#############################################*/
	if(check_permissions('img_description',$_GET['imgid']))    
    {
     	?>
        <script language="JavaScript" type='text/javascript'>
        <!--
        maxChars = 255;

        function txtshow( txt2show )
        {
            var viewer = document.getElementById("text");
            viewer.innerHTML=txt2show;
        }

        function keyup(what)
        {
            var str = new String(what.value);
            var len = str.length;
            var showstr = len + " <?php echo $detail_header1; ?> " + maxChars + " <?php echo $str_chars_entered; ?>";
            if (len > maxChars) showstr += '<br /><?php echo $str_information_lost; ?>';
            txtshow( showstr );
        }
        //-->
        </script>    
       	<?php
        $img_info=$GLOBALS['db']->Execute("SELECT category, description FROM ".PREFIX."image_comments ".
                            "WHERE md5sum='".$this->md5sum."'");
        $image_info=$img_info->FetchRow(ADODB_FETCH_ASSOC);
		?>
        <form name='image_properties' method=POST action='<?php echo TOP_DIR; ?>/actions/store_comment.php'>
        <tr>
            <td align='center' class='commenthead' colspan='2' style='border: 1px dotted; height: 25px; '>
                <?php echo $comment_change_img_details; ?>
            </td>
        </tr>
        <tr>
            <td valign='top' align='center' class='commenthead' width='25%' style='border: 1px solid;' >
                <?php echo $img_cat."&nbsp;&nbsp;(".$seach_multiple_select_use." '".$control_key."')"; ?>
                <br />
                <a href='<?php echo TOP_DIR; ?>/admin.php?page=category'><?php echo $new_cat_header; ?></a>
            </td>
            <td>
                <select name="category[]" size="6" style="width:100%" multiple>
                    <?php
                    $array_categorie = explode(";",@$image_info['category']);
                    get_category_select($array_categorie);
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align='center' class='commenthead' style='border: 1px solid;'>
                <?php echo $img_des; ?>
            </td>
            <td>
                <input type='text' name='description' onkeyup='keyup(this)' style='width: 100%;' value='<?php echo @htmlspecialchars($image_info["description"], ENT_QUOTES); ?>'>
            </td>
        </tr>
        <tr>
            <td align='left' colspan="2">
        <?php
            if(!empty($image_info['category']) || !empty($image_info['description'])) // toggle update/insert
            {
                echo "<input class='linkbutton' type=submit name='update_image_info' value='".$lang_plugins['update']."'>";
                echo "<input type='hidden' name='action' value='update'>";
            } else // insert
            {
                echo "<input class='linkbutton' type=submit name='insert_image_info' value='".$submit_button_folder."'>";
                echo "<input type='hidden' name='action' value='insert'>";
            }
        ?>
                <div class='pagenumber' id='text'></div>
                <input type='hidden' name='job' value='image'>
                <input type='hidden' name='md5sum' value='<?php echo $this->md5sum; ?>'>
                <input type='hidden' name='ref' value='<?php echo $link_base64; ?>'>
            </td>
        </tr>
        </form>
        <tr>
            <td colspan='2' height='3'><br /></td>
        </tr>
        <?php
    }
    /*#############################################
    ## build comment section
    #############################################*/
    if(check_permissions('img_comments',$_GET['imgid']))
    {
    ?>
    <form name='image_comments' method='POST' action='<?php echo TOP_DIR; ?>/actions/store_comment.php'>
    <tr>
        <td align='center' class='commenthead' colspan='2' style='border: 1px dotted; height:25px;'><?php echo $add_img_com; ?></td>
    </tr>
    <tr>
        <td width='50%' class='maintable'>
            <?php echo $gb_name; ?>:<br />
            <input type=text name='uname' style='width: 100%' value='<?php echo @$_SESSION['user_name']; ?>'>
        </td>
        <td valign='middle' align='center' rowspan='3'>
            <img src='<?php
            if(is_supported_image($this->org_type)) // don't show exif, diashow, comments on videos
            {
                echo TOP_DIR.'/get_thumbs_on_fly.php?imgid='.$_GET['imgid']."&nw=".$this->nw."&nh=".$this->nh."' width='".$this->nw."' height='".$this->nh; 
            }
            elseif(is_video($this->org_type))
            {
                echo TOP_DIR.'/graphics/avi_mov.gif';
            }
            
            ?>' border='1' alt='mainimage'>
        </td>
    </tr>
    <tr>
        <td width='50%' valign='top' class='maintable'>
            <a href='<?php echo TOP_DIR; ?>/plugins/guestbook/guestbook_view.php?mode=formatting'><?php echo $formatting_possibilities; ?></a><br />
            <textarea name='comment' cols='25' rows='10' style='width: 100%;'></textarea>
            <!-- <div class='pagenumber' id='txtmsg'></div> -->
        </td>
    </tr>
    <tr>
        <td align='left'>
            <input type='hidden' name='job' value='image'>
            <input type='hidden' name='md5sum' value='<?php echo $this->md5sum; ?>'>
            <input type='hidden' name='description' value='<?php echo @$image_info['description']; ?>'>
            <input type='hidden' name='category' value='<?php echo @$image_info['category']; ?>'>
            <input type='hidden' name='imgid' value='<?php echo $_GET['imgid']; ?>'>
            <input type='hidden' name='ref' value='<?php echo $link_base64; ?>'>
            <input type='hidden' name='docomment' value='1'>
            <input class='linkbutton' type='submit' name='img_comment' value='<?php echo $submit_button_folder; ?>'>&nbsp;&nbsp;&nbsp;&nbsp;
            
            <?php /*
            <a class='linkbutton leftmenu' href='<?php echo $this->link_address.'&imgid='.$_GET['imgid']; ?>&img_view=normal'>
            &nbsp;&lt;&lt;&nbsp;<?php echo STR_BACK; ?>&nbsp;&lt;&lt;&nbsp;
            </a>
            <br /><br /> */ ?>
        </td>
    </tr>
    </form>
    <tr>
        <td colspan="2" height="3"><br /></td>
    </tr>
    <?php
    }
        

/*######################################################
### blacklist/SPAM stuff
######################################################*/
if(in_group('admin'))
{
$bl_filter=read_config('blacklist_comments');
$query = $GLOBALS['db']->Execute("SELECT value FROM ".PREFIX."blacklist WHERE action= 'comment'");
$blacklistet_words = $query->FetchRow();

($bl_filter) ? $bl_on='checked' : $bl_off='checked';
?>
<tr>
<td colspan="2">
<form name='blacklist_comments' method='POST' action='<?php echo TOP_DIR; ?>/actions/store_comment.php'>
<table class='admintable' width='100%' cellspacing='0'>
	<tr><th class='maintable' colspan='4'><?php echo $blacklist_opts; ?></th></tr>
	<tr><td class='maintable'><?php echo $blacklist_onoff; ?></td>
		<td class='maintable'>
		<?php echo $button_on_msg; ?><input type='radio' name='bl_on_off' <?php echo @$bl_on; ?> value='1'>
		<?php echo $button_off_msg; ?><input type='radio' name='bl_on_off' <?php echo @$bl_off; ?> value='0'>
		</td></tr>
	<?php
	if(read_config("blacklist_comments"))
	{?>
	<tr><td class='maintable'><?php echo $blacklist_keywords ?></td>
	<td class='maintable'>
		<textarea name='bl_keywords' style='width: 400px; height:100px;'><?php echo $blacklistet_words[0]; ?></textarea>
	</td></tr>
	<?php
	}
	?>
	<tr><td class='maintable' colspan='4' align='center'>
	<input type='hidden' name='ref' value='<?php echo $link_base64; ?>'> 
	<input type='hidden' name='job' value='blacklist_comments'>
	<input type='submit' value='<?php echo $submit_button_folder; ?>'>
</table>
</form>
<tr>
    <td colspan="2" height="3"><br /></td>
</tr>
<?php
}
?>
<!-- image comments //-->
<table width='95%' cellspacing='0' cellpadding='0' border='0'>
    <tr>
        <td align='center' class='commenthead' colspan='2' style='border: 1px dotted; height:25px;'>
            <?php echo $comment_last_comments; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="3"><br /></td>
    </tr>
    <tr>
        <td colspan='2'>
            <table width='100%' border='0' align='center'> 

<?php

    $comments=$GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."image_comments WHERE md5sum='".$this->md5sum."' ORDER BY date DESC");

    while($result=$comments->FetchRow())
    {
        if(!empty($result[4])){
        echo "<tr><td class='commenthead' style='border: 1px dotted;'>".$comment_comment_by." [".$result[3]."]
        <div align='right'>".nice_date(@$result[0])."&nbsp;&nbsp;";
        if($GLOBALS['passed'] && in_group('admin'))
        {
            echo "<a href='".TOP_DIR."/actions/delete_comment.php?&id=".$result[0]."&job=comment&ref=".$link_base64."'>[".STR_DELETE."]</a>";
        }
        
        echo "</div></td></tr><tr><td class='commentbody' colspan='3'>".htmltag(stripslashes($result[4]))."</td></tr>
        <tr><td height='3'></td></tr>";
        }
    }
?>
            </table>
        </td>
    </tr>
                    </table>
<?php
    //FacetMap
/*
    if(read_plugins_config('facetmap'))
    {
        $fmlocation = '';
        $fmtype = '';
    
        $sql = "SELECT fmkey_location, fmkey_type FROM ".PREFIX."photos WHERE ID = '".$_GET['imgid']."'";
        $query=$GLOBALS['db']->Execute($sql);
    
        if ($row=$query->FetchRow())
        {
            $fmlocation = $row['fmkey_location'];
            $fmtype = $row['fmkey_type'];
        }
        $query->free();

        print "<div style='text-align: left;'>\n";
        print "<h4>FacetMap:</h4>";
        print "<form action='".TOP_DIR."/actions/store_comment.php' method='post'>";
        print "Location: <select name='fmlocation'>";
        print fm_select_options('location',$fmlocation)."</select><br>";

        print "Image type: <select name='fmtype'>";
        print fm_select_options('imagetype',$fmtype)."</select><br>";
        ?>
        <input type='submit' value='Save'>
        <input type='hidden' name='job' value='facetmap'>
        <input type='hidden' name='imgid' value='<?php echo $_GET['imgid']; ?>'>
        <input type='hidden' name='ref' value='<?php echo $link_base64; ?>'>
        
        <?php
        print "</form></div>\n";
    }
*/
?>
                </td>
            </tr>
        </table>
        <?php
        /*}*/   // end check for video
        ?>
    </td>
</tr>
<?php
}

function showImage()
{
    global $img_detail,$detail_header,$detail_header1,$views,$comment_comment_by;
    

    /**
    * store number of views in DB
    * do this here, because we don't want count it in the commenting system
    * the images viewed in the slideshow are counted by get_thumbs_on_fly.php
    */
    $update = $GLOBALS['db']->Execute("UPDATE ".PREFIX."photos SET res=res+1, date=date WHERE id='".linpha_addslashes($_GET['imgid'])."'");
	include_once(TOP_DIR.'/plugins/stats/stats.class.php');
	linStats('view',$this->md5sum);
    ?>
	<tr>
		<td width='200' valign='top' class='leftmenu'>
			<div class='leftmenuhead'>
				<?php echo $img_detail."\n"; ?>
			</div>
            <div align='center'>
            <?php
            if(is_supported_image($this->org_type)) // don't show exif, diashow, comments on videos
            {
                $this->leftSideImage();
            }
            elseif(is_video($this->org_type))
            {
                $this->leftSideVideo();
            }

			$this->leftSideCommentStuff();

            echo '<hr noshade><br />';
            
        /**
         * back button - take care if we came from basket view. eg. we need job
         * and pn to avoid broken << back << link 
         */
         if(isset($_GET['job']) && isset($_GET['pn']) && $_GET['job'] != 'create_all_thumbs')
         {
         	$basket_vars="&pn=".$_GET['pn']."&job=".$_GET['job']."";	
         }
		 else
         {
         	$basket_vars="";
         }

	     /**
		 * special case - we came from create_all_thumps.php and clicked 
		 * one of the duplicates, so special redirect is needed here
		 */	
         if(isset($_GET['job']) && $_GET['job'] == 'create_all_thumbs')
         {
         	echo "<a class='linkbutton leftmenu' href='".TOP_DIR."/create_all_thumbs.php?cat=true'>&nbsp;&lt;&lt;&nbsp;".
					STR_BACK."&nbsp;&lt;&lt;&nbsp;</a><br /><br /><br />";
         }
         else
         {
			echo "<a class='linkbutton leftmenu' href='".$this->link_address."&ref_imgid=".$_GET['imgid']."$basket_vars'>&nbsp;&lt;&lt;&nbsp;".
					STR_BACK."&nbsp;&lt;&lt;&nbsp;</a><br /><br /><br />";
         }

            ?>
            </div>
        </td>
        <td class='mainwindow' height='100%' colspan='2' style='border:0px;'>
            <table class='maintable' width='100%' cellspacing='0' cellpadding='0' style='border:0px; height: 100%;'>
                <tr>
                    <th class='maintable' colspan='3'>
                        <table class='maintable' width='100%' cellspacing='0' cellpadding='0' border="0" style='height: 100%;'>
                            <tr>
                                <th class='maintable' align='left' style='border:0px;'>
                                    <?php
                                        build_navigation_view($_GET['stage'],$_GET['albid'],$_GET['imgid']);
                                    ?>
                                </th>
                                <th class='maintable' align='right' style='border:0px;'>
                                    <?php
                                        echo $detail_header." ".$this->current_img." ".$detail_header1." ".$this->number;
                                        echo ",&nbsp;&nbsp;".$this->no_views." ".$views;
                                    ?>
                                </th>
                            </tr>
                        </table>
                    </th>
                </tr>
                <tr>
                    <?php $this->printPrevNextImage('prev'); ?>
                    <td class='viewimage'>
                    <?php
                        if(is_supported_image($this->org_type))
                        {
                            $this->mainViewImage();
                        }
                        elseif(is_video($this->org_type))
                        {
                            $this->mainViewVideo();
                        }
                    ?>
                    </td>
                    <?php $this->printPrevNextImage('next'); ?>
                </tr>
                <tr>
                    <td colspan='3' align='center'>
                        <table width='80%'>
    <?php
    /**
    * comments
    */
    $comments=$GLOBALS['db']->Execute("SELECT * FROM ".PREFIX."image_comments ".
        "WHERE md5sum='".$this->md5sum."' AND comment!='NULL' ORDER BY date DESC");

    if($comments->NumRows() == 0) {
        echo "<tr><td></td></tr>";
    }

    while($result=$comments->FetchRow())
    {
        if(!empty($result[4])){
            echo "<tr><td class='commenthead' style='border: 1px dotted;'>";
            echo $comment_comment_by." [".$result[3]."] ".nice_date($result[0]);
            echo "</td></tr>";
            echo "<tr><td class='commentbody' colspan='3'>".htmltag(stripslashes($result[4]))."</td></tr>";
            echo "<tr><td height='3'></td></tr>";
        }
    }
    ?>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

<?php
}

function leftSideImage()
{
    global $img_size, $img_name, $start_slide;

    print_thumbnail($_GET['imgid'],0);

/**
* image info (exif)
*/
    ?>
    <table cellpadding='0' cellspacing='1' width='95%'>
        <tr>
            <td width='50%'><span class='leftmenuexiflabel'><?php echo $img_name; ?></span></td>
            <td width='50%'><span class='leftmenuexifvalue'><?php echo cut_string($this->filename,20,1); ?></span></td>
        </tr>
        <tr>
            <td><span class='leftmenuexiflabel'><?php echo $img_size; ?></span></td>
            <td><span class='leftmenuexifvalue'><?php echo $this->org_width." x ".$this->org_height; ?></span></td>
        </tr>
    <?php
    if(read_config('iptcinfo'))
    {
        include_once(TOP_DIR.'/include/metadata.class.php');
        $metadata = new MetaData();

        /**
         * check if there is already IPTC info in db if not, get IPTC
         * information from file and store it in the db
         */
        $query = $GLOBALS['db']->Execute("SELECT md5sum ".
            "FROM ".PREFIX."meta_iptc WHERE md5sum = '".$this->md5sum."' " .
            		"AND marked_ignored = '0' ");
        $num = $query->numRows();
        
        if($num != 1)
        {
            include_once(TOP_DIR.'/include/phpmeta/Photoshop_IRB.php'); 
            include_once(TOP_DIR.'/include/phpmeta/JPEG.php');                      
            $result = $metadata->saveIptcData(TOP_DIR.'/'.$this->prev_path.'/'.$this->filename,$this->md5sum);
        }
        if(@$result===true || $num >= 1 ) 
        {
        	$metadata->showIptcData($this->md5sum);
        }
    }

    if(read_config('exifinfo'))
    {
        if(!isset($metadata))
        {
            include_once(TOP_DIR.'/include/metadata.class.php');
            $metadata = new MetaData();
        }
		
        /**
         * check if exif information are already in db
         * if not, read exif information from file and store it in the db
         */
        $query = $GLOBALS['db']->Execute("SELECT md5sum ".
            "FROM ".PREFIX."meta_exif WHERE md5sum = '".$this->md5sum."'");
        $num = $query->RecordCount();
        if($num != 1)
        {
        	include_once(TOP_DIR.'/include/phpmeta/JPEG.php'); // used for jpeg comment
            include_once(TOP_DIR.'/include/phpmeta/EXIF.php');
            $metadata->saveExifData(TOP_DIR.'/'.$this->prev_path.'/'.$this->filename,$this->md5sum);
        }
        
        $metadata->showExifData($this->md5sum);
    }

    $this->desc = '';
    if(!empty($metadata->exif_imagedescription))
    {
        $this->desc .= $metadata->exif_imagedescription." (exif)";
    }
    
    if(!empty($metadata->iptc_imagedescription))
    {
        $this->desc .= $metadata->iptc_imagedescription." (iptc)";
    }

    $this->usercomment = '';
    if(isset($metadata->exif_jpegcomment) && !empty($metadata->exif_jpegcomment))
    {
        $this->usercomment .= $metadata->exif_jpegcomment;
    }
    
    if(!empty($metadata->iptc_usercomment))
    {
        $this->usercomment .= $metadata->iptc_usercomment;
    }
    ?>

    </table>
    <hr noshade>
    
    <?php

/**
* slideshow 
*/
    if(read_config("slideshow"))
    {
        show_slideshow_function($_GET['imgid']);
        echo "<br /><hr />";
    }
}

function leftSideVideo()
{
	/**
	 * define desc and comment variables
	 * (not really used with videos, but with images, they are filled with
	 * exif/iptc info)
	 */
	$this->desc = '';
	$this->usercomment = '';
	
    /**
    * Receive additional information provided by getID3() 
    * Supported filetypes this time: avi/mov/mp4/mpg
    */
    include_once(TOP_DIR.'/plugins/getid3/getid3.php');
    define('GETID3_HELPERAPPSDIR', TOP_DIR); // needs to be set to a valid dir, otherwise it doesn't work under windows
    $getID3 = new getID3;
    $file_info = $getID3->analyze($this->prev_path.'/'.$this->filename);

    //print_r($file_info);
    $file_width = @$file_info['video']['resolution_x'];
    $file_height = @$file_info['video']['resolution_y'];
    
    // default fallback
    if($file_width==0): $file_width=320; endif;
    if($file_height==0): $file_height=240; endif;

    $this->stage_width= $file_width;    // used in the applet
    $this->stage_height= $file_height;
    $playsize = "".$file_width."x".$file_height." pixel";
    $filesize=nice_filesize(filesize($this->prev_path.'/'.$this->filename), 2); // LinPHA internal

    $str_printf = "<tr><td><b>%s:</b></td><td>%s</td></tr>";
?>
    <table border="0" width='100%' cellspacing='5'>
<?php
    printf($str_printf,'<u>File</u>','&nbsp;');
    printf($str_printf,'Filename',cut_string($this->filename,15,1));
    printf($str_printf,'Filesize',$filesize);
    isset($file_info['playtime_string']) ? printf($str_printf,'Duration', $file_info['playtime_string'].' Seconds') : '';
    printf($str_printf,'<br /><u>Sound</u>', '&nbsp;');
    isset($file_info['audio']['codec']) ? printf($str_printf,'Codec', cut_string($file_info['audio']['codec'],12,1)) : '';
    isset($file_info['audio']['bitrate']) ? printf($str_printf,'Bitrate', round($file_info['audio']['bitrate']/1000).' kbit/s') : '';
    printf($str_printf,'<br /><u>Video</u>','&nbsp;');
    printf($str_printf,'Framesize',$playsize);
    isset($file_info['video']['codec']) ? printf($str_printf,'Codec', cut_string($file_info['video']['codec'],10,1)) : '';
    isset($file_info['video']['dataformat']) ? printf($str_printf,'Dataformat', cut_string($file_info['video']['dataformat'],12,1)) : '';
    isset($file_info['video']['bitrate']) ? printf($str_printf,'Bitrate', round($file_info['video']['bitrate']/1000).' kbit/s') : '';
?>
    </table>
    <hr noshade>
<?php
}

function leftSideCommentStuff()
{
	global $img_des, $comment_comment_by, $radio_comment;
/**
* comment / description
*/
    $info_img=$GLOBALS['db']->Execute("SELECT comment, description, author FROM ".PREFIX."image_comments
                        WHERE md5sum='".$this->md5sum."' ORDER BY date DESC");
    $number_commments=$info_img->RecordCount();
    $comments=$info_img->FetchRow(ADODB_FETCH_ASSOC);
    
    echo "<br /><table width='90%' cellspacing='0'>";
    echo "<tr><td class='commenthead'>:: ".$img_des." </td></tr>";
    
/**
 * description exif/iptc/user
 * 
 * $desc is defined in leftSideImage() (filled with exif/iptc if available) or
 * leftSideVideo() (empty)
 */
    if(!empty($comments['description']))
    {
        $this->desc .= "\n".$comments['description'];
    }
    
    if(empty($this->desc))
    {
        $this->desc = '<br />';
    }
    
    echo "<tr><td class='commentbody'>".cut_overloaded_strings($this->desc, 25)."</td></tr>";

/**
 * user comment exif/iptc/user
 */
    /**
     * append comment from db only if it has a comment and if there aren't exif
     * and iptc comment because of space problems (-> the comment is shown
     * anyway under the image)
     */
    if(!empty($comments['comment']) && empty($usercomment))
    {
        $this->usercomment .= "\n".$comments['comment'];
    }
    
    if(!empty($this->usercomment))
    {
        if(!empty($comments['author']))
        {
        	$author = $comment_comment_by." [".$comments['author']."]";
        }
        else
        {
        	$author = $radio_comment;
        }
        
        echo "<tr><td style='padding: 3px;'></td></tr>";
        echo "<tr><td class='commenthead'>:: ".$author."</td></tr>";
        echo "<tr><td class='commentbody'>".htmltag(stripslashes(cut_overloaded_strings(cut_string($this->usercomment,300,0), 25)))."</td></tr>";

    }
    echo "</table>";

/**
* add comments
*/
	global $add_img_com, $please_login, $comment_edit_img;
	if(check_permissions('img_description',$_GET['imgid']))
	{
		echo "<br /><a class='leftmenu' href='".$this->link_address."&imgid=".$_GET['imgid']."&img_view=comment'><u>";
		echo $comment_edit_img;
        echo "</u></a><br />";
	}
	elseif(check_permissions('img_comments',$_GET['imgid']))
    {
		echo "<br /><a class='leftmenu' href='".$this->link_address."&imgid=".$_GET['imgid']."&img_view=comment'><u>";
    	echo $add_img_com;
        echo "</u></a><br />";
    }
    else
    {
        echo "<br /><span class='leftmenulabel'>".$please_login."</span><br />";
    }
}

function mainViewImage()
{
    global $pano_view, $img_rotate_ok, $str_rotation_disabled, $str_no_write_perm;
	
	/**
	 * EXIF autorotation stuff, we already need to know right here if the 
	 * image needs rotation, to flip the values for width and height. 
	 */
	if(read_config('exif_image_autorotate'))
	{
		$info_rotate = $GLOBALS['db']->Execute("SELECT rotation " .
						"FROM ".PREFIX."photos " .
						"WHERE md5sum='".$this->md5sum."'");
    	$rotate = $info_rotate->FetchRow();
    	$rotate = $rotate['0'];
    	
    	/**
    	 * flip values for width and height if necesarry
    	 */
    	if($rotate != "0" && $rotate != "180")
    	{
    		$tempw = $this->nw;
    		$this->nw = $this->nh;
    		$this->nh = $tempw;
    	}
	}
				
    $array = get_rgb_from_all(read_config('thumb_border_color'));
    $color = get_html_color_from_rgb($array['r'],$array['g'],$array['b']);

    echo "<img src='".TOP_DIR."/get_thumbs_on_fly.php?imgid=".$_GET['imgid']."&nw=".$this->nw."&nh=".$this->nh."' ".
        "width='".$this->nw."' height='".$this->nh."' style='border: ".read_config('thumb_border').'px '.$color." solid;' alt='mainimage'><br/>";

// hrefs to 640x480 /800x600 / fullsize */
    print_resized_view($_GET['imgid'], $this->org_width, $this->org_height, 0);

// panorama images
    if(is_panorama_image($this->org_width,$this->org_height))
    {
        echo "&nbsp;<a href='".TOP_DIR."/actions/image_panorama_view.php?imgid=".$_GET['imgid']."&nw=".$this->org_width."&nh=".$this->org_height."' target='_blank'>[".$pano_view."]</a>";
    }

// download
    $this->printDownloadLink();

    /*###############################################
    ## stuff for image rotating
    ## make sure image is writeable and if GD is used, PHP is >=4.3.0
    ## (earlier versions do NOT support imagerotate() )
    ###############################################*/
    if(in_group('admin') && read_config('img_rotation'))
    {
        if(is_writable($this->prev_path."/".$this->filename))
        {
            $printf_str = "<a href='".TOP_DIR."/actions/rotate.php?imgid=".$_GET['imgid']."&rotate=%s&ref=".
                base64_encode($this->link_address)."'>".
                "<img src='".TOP_DIR."/graphics/rotate_%s.png' alt='left' border='0'></a>";
            
            echo "<br/>";
            printf($printf_str,'left','left');
            echo "&nbsp;&nbsp;<b>..:: $img_rotate_ok ::..</b>&nbsp;&nbsp;";
            printf($printf_str,'right','right');
        }
        else
        {
            echo '<br /><b>..:: '.$str_rotation_disabled.': '.$str_no_write_perm.' ::..</b>';
        }
    }
}

function mainViewVideo()
{
    /*?>
        <object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="<?php echo $this->stage_height; ?>" width="<?php echo $this->stage_width; ?>">
            <param name="bgcolor" value="#a3a3a3">
            <param name="src" value="<?php echo TOP_DIR."/actions/file_download.php?imgid=".$_GET['imgid']; ?>">
            <param name="autoplay" value="false">
            <param name="controller" value="true">
            <embed height="<?php echo $this->stage_height; ?>" width="<?php echo $this->stage_width; ?>" pluginspage="http://www.apple.com/quicktime/download/" src="<?php echo TOP_DIR."/actions/file_download.php?imgid=".$_GET['imgid']; ?>" type="video/quicktime" controller="true" autoplay="false">
        </object>
        <br />
    <?php*/
    ?>
    <embed type="application/x-mplayer2" 
        src="<?php echo TOP_DIR."/actions/file_download.php?imgid=".$_GET['imgid']."&ignore=true"; ?>"
        width="<?php echo $this->stage_width; ?>"
        height="<?php echo ($this->stage_height + 45); ?>"
        transparentatstart="true"
        autostart="true"
        animationatstart="true"
        showcontrols="true"
        showaudiocontrols="true"
        showpositioncontrols="true"
        autosize="false"
        showstatusbar="true"
        displaysize="true"
        hspace="4">
    </embed>
    <br />
    <?php
    $this->printDownloadLink();
}

function setPrevNextImage()
{
    $stop_at_next = false; 

    $query = $GLOBALS['db']->Execute($this->sql);
    $this->number = $query->RecordCount();

    for($i=1; $data=$query->FetchRow(ADODB_FETCH_ASSOC); $i++)

    {
        if($stop_at_next)
        {
            $this->prev_next_id['next'] = $data['id']; //id
            $this->prev_next_name['next'] = $data['filename']; // filename
            break;
        }
        
        if($data[0]==$_GET['imgid']) //id
        {
            if(isset($prev_id) && isset($prev_name)) {
                $this->prev_next_id['prev'] = $prev_id;
                $this->prev_next_name['prev'] = $prev_name;
            }
            $this->current_img = $i;
            $this->current_img_name = $data['filename']; //filename
            $stop_at_next = true;
        }
        
        $prev_id = $data['id']; //id
        $prev_name = $data['filename']; //'filename'
    }
}

function printPrevNextImage($prev_next)
{
    global $button_next, $button_prev;
    
    if($prev_next == 'next')
    {
        $button = $button_next;
        $graphic = 'forward';
    }
    elseif($prev_next == 'prev')
    {
        $button = $button_prev;
        $graphic = 'back';
    }
    ?>
    <td class='minithumbnail' align='center' width='<?php print (read_config('prev_next_full_size') == "1") ? (read_config('thumb_size') + 20) : 90; ?>'>
    <?php
    if(isset($this->prev_next_id[$prev_next]))
    {
        echo "<a href='".$this->link_address."&imgid=".$this->prev_next_id[$prev_next]."'>";
    
        // use mini previews of next/prev image as buttons ?
        switch(read_config('mini_img_preview'))
        {
            case "large" :
            {
                print_thumbnail($this->prev_next_id[$prev_next],0);
                break;
            }
            case "default" :
            {
                echo "<img src='".TOP_DIR."/get_thumbs.php?id=".$this->prev_next_id[$prev_next]."' ".
                    "border='0' width='40' height='40'>";
            	break;
            }
            case "off" :
            {
            	echo "<img src='".TOP_DIR."/graphics/".$graphic.".gif' " .
            			"alt='previous' width='32' height='32' border='0'>";
            	break;
        	}
        	default :
        	{
                echo "<img src='".TOP_DIR."/get_thumbs.php?id=".$this->prev_next_id[$prev_next]."' ".
                    "border='0' width='40' height='40'>";
            	break;
        	}        	
        }
        echo "<br />".$button."</a>";
    }
    ?>
    </td>
    <?php
}

function printDownloadLink()
{
    if(check_permissions('download',$_GET['imgid']))
    {
        $download_size=nice_filesize(@filesize($this->prev_path."/".$this->filename), 1);
        echo "&nbsp;<a href='".TOP_DIR."/actions/file_download.php?imgid=".$_GET['imgid']."'>".
            "[download (".$download_size.")]</a>";
    }
}


/**
* Thumbnail functions
*/

function printTableHeader($name)
{
?>
            <table class='maintable' width='100%' cellspacing='0' cellpadding='0' border='0'>

                <tr>
                    <th class='maintable' colspan='<?php echo $this->num_cols-1; ?>'>
                        <?php echo $name."\n"; ?>
                    </th>
                    <th class='maintable'>
                        <a name='tn'></a>
                        <?php build_javascript_menu(); ?>
                    </th>
                </tr>
<?php
}

function printTableFooter()
{
?>
            </table>
<?php
}

function printThumbnails($name='')
{
    if($this->num_photos > 0)
    {
        $this->query = $GLOBALS['db']->SelectLimit($this->sql, $this->num_tot_per_page, $this->lower_limit);
    
        switch($this->view)
        {
        case 'normal':
	        $this->printTableHeader($name);
            $this->showNormalPageRegister();
            $this->showNormalThumbnails();
            $this->showNormalPageRegister();
            $this->printTableFooter();
        break;
        case 'detail':
	        $this->printTableHeader($name);
            if(!isset($_GET['pn']) OR $_GET['pn'] == 1)  {
                $this->showDetailSummarize();
            }
            $this->showDetailChangeOrder();
            $this->showDetailPageRegister();
            $this->showDetailThumbnails();
            $this->showDetailPageRegister();
            $this->printTableFooter();
        break;
         case 'basket':
            $this->showBasket();
        break;
        }
    }
}



/**
* 'detail' view functions
*/
function showDetailSummarize()
{
    global $str_new_images_in_these_folders;
    $query = $GLOBALS['db']->Execute($this->sql);
    //$num = $query->RecordCount();
    ?>
    <tr>
        <td class='maintable' style='border:0px;' colspan='<?php echo $this->num_cols; ?>'>
            <b><?php echo $str_new_images_in_these_folders; ?></b>
        </td>
    </tr>
    <?php
    /**
    * since we have a problem with the get_stage_from_path query under
    * postgres, we do the select distinct using PHP array functionallity
    */
    //print_r($query);
    //$query = $this->query;
    while($data = $query->FetchRow(ADODB_FETCH_ASSOC))
    {
        $array[] = $data['prev_path']; //prev_path
    }
    $unique_array= array_unique($array);
    foreach ($unique_array as $path)
    {
        $stage = get_stage_from_prev_path($path);
        $albid = get_albid($path,$stage);
    ?>  
        <tr>
            <td class='maintable' style='border:0px;' colspan='<?php echo $this->num_cols; ?>'>
                <?php build_navigation_view($stage,$albid,0); ?>
            </td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan='<?php echo $this->num_cols; ?>'><hr></td>
    </tr>
    <?php
}

function showDetailChangeOrder()
{
    global $str_order_by, $str_album, $radio_file, $str_age, $str_View, $str_normal, $str_detail;
    ?>
    <tr>
        <td class='maintable' style='border:0px;' colspan='<?php echo $this->num_cols-1; ?>' width='75%'>
            <b><?php echo $str_order_by; ?>:</b> <a href="<?php echo $this->link_address; ?>&order=date"><?php echo $str_age; ?></a> :: 
            <a href="<?php echo $this->link_address; ?>&order=prev_path"><?php echo $str_album; ?></a> ::
            <a href="<?php echo $this->link_address; ?>&order=file"><?php echo $radio_file; ?></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b><?php echo $str_View; ?>:</b> <a href="<?php echo $this->link_address; ?>&view=normal"><?php echo $str_normal; ?></a> ::
            <a href="<?php echo $this->link_address; ?>&view=detail"><?php echo $str_detail; ?></a>
        </td>
        <td width='25%'>&nbsp;</td>
    </tr>
    <?php
}

function showDetailPageRegister()
{
    ?>
    <tr>
        <td class='maintable' style='border:0px;' align='center' colspan='<?php echo $this->num_cols; ?>'>
            <?php echo $this->str_pageregister; ?>
        </td>
    </tr>
    <?php
}

function showDetailThumbnails()
{
    global $timespanfmt, $radio_file, $thumb_hint_msg, $thumb_order_date, $str_age, $str_in_album, $radio_descript;
    ?>
    <tr>
        <td colspan='<?php echo $this->num_cols; ?>'><hr /></td>
    </tr>
    <?php
    while($data = $this->query->FetchRow(ADODB_FETCH_ASSOC)) //ADODB_FETCH_ASSOC
    {
        $stage = get_stage_from_prev_path($data['prev_path']); //'prev_path'
        $albid = get_albid($data['prev_path'],$stage); //'prev_path'

        //$timestamp = get_timestamp_from_sqldate($data['date']); //'date'
        $timestamp = $GLOBALS['db']->UnixTimeStamp($data['date']);
        $date = linpha_strftime('',$timestamp);
        $age_in_sec = time()-$timestamp;
        $arr_age = get_time_from_sec($age_in_sec);
        $age = sprintf($timespanfmt,$arr_age[0],$arr_age[1],$arr_age[2],$arr_age[3]);
        
        $descr = read_description("description", $data['md5sum']); //'md5sum'
        
        $link = $this->link_address."&imgid=".$data['id']; //'id'
        $class = "class='maintable' style='border:0px;'";
        
        echo "<tr>".
            "<td rowspan='5' width='150' align='center' ".$class.">".
                "<a href='".$link."'>";
                    print_thumbnail($data['id']); //'id'
                echo "</a>".
            "</td>".
        "</tr>";
        
        if(in_array('filename',$this->fields))
        {
            echo "<tr>".
                "<td width='100' ".$class.">".$radio_file.":</td>".
                "<td ".$class.">".
                    "<a href='".$link."'>".cut_overloaded_strings($data['filename'],55)."</a>". //'filename'
                "</td>".
                "<td>&nbsp;</td>".
            "</tr>";
        }

        if(in_array('date',$this->fields))
        {
            echo "<tr>".
                    "<td ".$class.">".$thumb_order_date.":</td>".
                    "<td ".$class.">".$date."</td>".
                    "<td>&nbsp;</td>".
                "</tr>";
        }
        
        if(in_array('album',$this->fields))
        {
            echo "<tr>".
                "<td ".$class.">".$str_in_album.":</td>".
                "<td ".$class.">";
                    build_navigation_view($stage,$albid,$data['id']); // id
                echo "</td>".
                "<td>&nbsp;</td>".
            "</tr>";
        }
        
        if(in_array('description',$this->fields))
        {
            echo "<tr>".
                "<td ".$class.">".$radio_descript.":</td>".
                "<td ".$class.">".$descr."</td>".
                "<td>&nbsp;</td>".
            "</tr>";
        }

        
        if(in_array('age',$this->fields))
        {
            echo "<tr>".
                "<td ".$class.">".$str_age.":</td>".
                "<td ".$class.">".$age."</td>".
                "<td>&nbsp;</td>".
            "</tr>";
        }
        
        echo "<tr>".
            "<td colspan='".$this->num_cols."'><hr /></td>".
        "</tr>";
    }
}

/**
* 'normal' view functions
*/
function showNormalThumbnails()
{
    global $thumb_hint_msg;

    $rows = $this->query->RecordCount();
    $percent_width = round(100/$this->num_cols);    // calc percentage of td width (IE explorer fix)

    // number of images to display
    for($i=0 ; $i<$rows ; $i++)
    {
        echo "\n<tr>\n";
        for($y=0 ; $y<$this->num_cols ; $y++)
        {
            $data = $this->query->FetchRow(ADODB_FETCH_ASSOC);
      
            if(!empty($data['filename']))
            {

                echo "\t<td class='maintable' width='".$percent_width."%' height='140'>\n";
                echo "\t\t<div align='center'>\n";
                
                echo "\t\t<a href='".$this->link_address."&imgid=".$data['id']."'>";
                print_thumbnail($data['id']);
                echo "<br /></a>\n";
                
                if(read_config('filenames') AND !empty($data['filename']) )
                {
                    echo "\t\t".cut_string($data['filename'],25,1)."<br />\n";
                }
                
                $description = read_description("description", $data['md5sum']);
                if(!empty($description))
                {
                    echo "\t\t".cut_string($description,25,1)."<br />\n";
                }

                echo "\t\t</div>\n";
                echo "\t</td>\n";
            }
            else
            {
                echo "\t<td class='maintable' width='".$percent_width."%' height='140'>&nbsp;</td>\n";
            }
        }
        echo "</tr>\n";
        $i=$i+($y-1);
    }
}

function showNormalPageRegister()
{
?>
    <tr>
        <td class='maintable' align='center' colspan='<?php echo $this->num_cols; ?>'>
            <?php echo $this->str_pageregister; ?>
        </td>
    </tr>
<?php
}

function showBasket()
{
	include_once(TOP_DIR.'/include/basket.php');
}

/**
* Page register functions
*/
function setPageRegister()
{
	if($this->view == "basket")
	{
     	$this->num_tot_per_page = $this->num_photos;
     	$this->lower_limit = 0;
		$this->num_cols = 5;
	}
	else
	{
    	$this->pnCountPages();
    	$this->pnSetPageNumber();
    	$this->pnSetLowerLimit();
    	$this->pnCreatePageRegister();
	}
}

function pnCountPages()
{
    /**
    * count the pages
    */
    if($this->num_photos <= $this->num_tot_per_page)    // we have lesser images as we have space
    {
        $this->pages = 1;
    }
    else
    {
        $this->pages = ceil($this->num_photos/$this->num_tot_per_page); // ceil = round up
    }
}

function pnSetPageNumber()
{
    /**
    * set pagenumber (pn) to 1 if empty or missing
    */
    if(!isset($_GET["pn"]) or $_GET["pn"]==0 or empty($_GET["pn"]))
    {
        /**
        * use the reference imgid to get the actual page
        */
        if(isset($_GET['ref_imgid']))
        {
            $query = $GLOBALS['db']->Execute($this->sql);
            $num = $query->RecordCount();
            if($num > 1)
            {
                for($i=0,$continue=true ; $content=$query->FetchRow(ADODB_FETCH_ASSOC),$continue ; $i++)
                {
                    if($content['id']==$_GET['ref_imgid'])
                    {
                        $continue = false;
                    }
                }
                
                if(!$continue)
                {
                    $_GET['pn'] = ceil($i/$this->num_tot_per_page); // ceil = round up
                }
            }
        }
        
        if(!isset($_GET['pn'])) {
            $_GET['pn'] = 1;
        }
    }
}

function pnSetLowerLimit()
{
    /**
    * get the lower_limit (-> used for the SelectLimit() as start condition)
    */
    $this->lower_limit =($_GET['pn']-1)*($this->num_tot_per_page);

    if($this->lower_limit > $this->num_photos) {    // in which condition can this happen..?! flo
        $this->lower_limit = $this->num_photos - $this->num_tot_per_page;
    }
}

function pnCreatePageRegister()
{
    /**
    * left and right dots
    */
    $counter=1; //counter in for()
    if($this->pages > 10)
    {
        $dummy=$this->pages;
        $counter=$_GET['pn'];
    
        if($_GET['pn'] >= $dummy-5){ // we reached end of album
            $this->pages=$dummy;
            $counter=$this->pages-10;
            $left_dots="...";
            $right_dots="";
        }elseif($counter<=5){ // we are at the beginning
            $this->pages=10;
            $counter=1;
            $left_dots="";
            $right_dots="...";
        }else{
            $this->pages=$counter+5;
            $counter=$counter-5;
            if($_GET['pn']!="6") : $left_dots="..."; endif;
            $right_dots="...";
        }
    }
    
    /**
    * create left arrows (enabled/disabled)
    */
    if($_GET['pn'] > 1)
    {
        $page_counted=$_GET['pn'];
        $page_counted--;
        $left_arrow = "&nbsp;<a href='".$this->link_address."&pn=".$page_counted."#tn'>&#171;</a>&nbsp;";   // a name=tn: if you have a big album comment, you have every time to scroll down if you go to the next page
    }
    else
    {
        $left_arrow = "&nbsp;&#171;&nbsp;";// disable link
    }
    
    /**
    * create right arrows (enabled/disabled)
    */
    if($_GET['pn'] < $this->pages /*|| $_GET['pn'] < @$_GET['page'] not used anymore?? */)
    {
        if($_GET['pn']<1)
        {
            $page_dummy=2;
        }else
        $page_dummy=$_GET['pn']+1;
        $right_arrow = "&nbsp;<a href='".$this->link_address."&pn=".$page_dummy."#tn'>&#187;</a>&nbsp;";    // a name=tn: if you have a big album comment, you have every time to scroll down if you go to the next page
    }
    else
    {
        $right_arrow = "&nbsp;&#187;&nbsp;";
    }
    
    /** 
    * create pageregister
    */
    $this->str_pageregister .= "\n<div class='pagenumber'>".$left_arrow.@$left_dots;
    for($a=$counter; $a<=$this->pages; $a++)
    {
        if($a==$_GET['pn'])
        {
            $this->str_pageregister .= "&nbsp;<span class='thispage'>".$a."</span>&nbsp;\n";
        }
        else
        {
            $this->str_pageregister .= "&nbsp;<a href='".$this->link_address."&pn=".$a."#tn'>".$a."</a> \n";    // a name=tn: if you have a big album comment, you have every time to scroll down if you go to the next page
        }
    }
    $this->str_pageregister .= @$right_dots.$right_arrow;
    $this->str_pageregister .= "</div>\n";
}

}

?>
