<?php
/**
* for translators:
* please check if there are new entries in the english language file yourself
* because there are not automatically added to the other language files like
* in the main language files
*
* you can use the new file 'check_files.php' to check if there are missing entries in
* your language file
*
*
* also don't forget to update these changed entries!
*
* 02. Aug 2004  flo  doc_entry_cachesize
* 02. Aug 2004  flo  doc_entry_cachepath
* 02. Aug 2004  flo  doc_entry_wm_delete_all_cached_images
* 16. Aug 2004  flo  wm_delete_all_cached_images
* 16. Aug 2004  flo  doc_entry_printprobs (deleted)
* 16. Aug 2004  flo  doc_entry_imgrotate (deleted)
* 16. Aug 2004  flo  doc_entry_autolang (switched default to 'on')
* 16. Aug 2004  flo  doc_entry_autolanguage (added missing bracket)
* 15. Oct 2004  flo  doc_thumb_border
* 03. Mar 2005  bzrudi entry_createthumbs (rewrite)
* 03. Mar 2005  bzrudi entry_recreatethumbs (removed, obsolete)
* 03. Mar 2005  bzrudi entry_full_thumbnail (removed, obsolete)
* 04. Apr 2005  bzrudi exif_iptc_search_info
* 08. Aug 2006  bzrudi exifrotateonoff
* 08. Feb 2007  bzrudi added various info for the maps plugin
*/

$lang['archive_apps'] = 'Archive applications';
$lang['default_date_time_format'] = 'Default date and time format';
$lang['sql'] = 'DB Management';
$lang['plugins'] = 'LinPHA Plugins';
$lang['benchmark'] = 'Benchmark';
$lang['watermark'] = 'Watermark';
$lang['cache'] = 'Image Cache';
$lang['mail']="Mailing list plugin";
$lang['guestbook']="Guestbook plugin";
$lang['wm_delete_all_cached_images']="Watermark: Delete all cached images with watermarks";
$lang['thumbborder'] = "Thumbnail border";
$lang['log'] = "Logger plugin";
$lang['iptcinfo'] = "Image IPTC information";
$lang['iptclevel'] = "Level of IPTC information";
$lang['exif_iptc_search_info'] = "Search EXIF/IPTC information";
$lang['search_and_or_info'] = "Search information";
$lang['rss']="RSS";
$lang['stats']="Statistics";
$lang['statscaching']="Enable/disable realtime Statistics";
$lang['exifrotateonoff'] = "Enable/Disable image auto rotation by EXIF data";
$lang['maps'] = "Google and Yahoo Maps Plugin";
$lang['yahooid'] = "How to get a Yahoo ID";
$lang['googlekey'] = "How to get a Google Map Key";
$lang['maptypes'] = "Map Type Controls";
$lang['mapslide'] = "Map Slide Controls";
$lang['mappan'] = "Map Pan Controls";
$lang['mapmarkerpop'] = "Map Marker Controls";


$lang['doc_entry_mapmarkerpop'] = "" .
	"This option let's you control whether or not the Album markers on the " .
	"Map should popup when Mouseover. This works at least for Yahoo Maps. If " .
	"disabled you have to click a marker first to make it popup.";

$lang['doc_entry_mappan'] = "" .
	"This option let's you control whether or not to display the Map pan " .
	"controls on the Map. If enabled the pan Navigation is displayed on " .
	"the Map.";

$lang['doc_entry_mapslide'] = "" .
	"This option let's you control whether or not to display the Map slide " .
	"controls on the Map. If enabled the slide Navigation is displayed on " .
	"the Map.";

$lang['doc_entry_maptypes'] = "" .
	"This option let's you control whether or not to display the Map type " .
	"controls on the Map. If enabled the type controls are displayed on " .
	"the Map. These are usually Regular, Satellite, and Hybrid Map.";
	
$lang['doc_entry_googlekey'] = "" .
	"To make use of Google Maps and the \"search location\" option you will " .
	"need a so called Google Key and sign up for the Maps API. Get one from:<br /> " .
	"http://www.google.com/apis/maps/signup.html " .
	"and enter it here."; 

$lang['doc_entry_yahooid'] = "" .
	"To make use of Yahoo Maps you will need a Yahoo ID. Get one from:<br /> " .
	"http://api.search.yahoo.com/webservices/register_application " .
	"and enter it here."; 

$lang['doc_entry_maps'] = "" .
	"This Plugin allows you to playce your Albums as a marker on a Google or " .
	"Yahoo Map. To get it working, you need at least a <a href='#googlekey'>" .
	"Google Key</a>, or a <a href='#yahooid'>Yahoo Application ID</a>.";


$lang['doc_entry_exifrotateonoff'] = "
	Many Images shot with a modern Camera feature so called EXIF data. Some " .
	"Cameras provide an \"Orientation\" tag which contains information about " .
	"the orientation of the image when it was shot. LinPHA can read this tag " .
	"and auto rotate images to be displayed with the right orientation, without " .
	"touching the original image, it's just something like a \"virtual\" " .
	"rotation. If you have setup a PHP with an acceptable \"memory_limit\" " .
	"value > 8MB and your server is fast enough, you should enable this feature " .
	"as it's saves you from having all images rotated in the right direction " .
	"before you use them with LinPHA.";	
	
$lang['doc_entry_search_and_or_info'] = "To get the expected search results, it's " .
	"important to understand the way how to query for keywords. The following is " .
	"a list which explains what to expect when querying:<br> " .
	"<ul><li><b>my cat</b> ==> returns all results for <b><i>my</i></b> AND/OR <b><i>cat</i></b><br>" .
	"e.g. <i><b>my</b> house, <b>my cat</b>, cute <b>cat</b></i>...</li>" .
	"<li><b>&quot;my cat&quot;</b> ==> returns all results for <b><i>my cat</i></b><br>" .
	"e.g. <i>this is <b>my cat</b></i>, but not <i>a cute cat, this is my house</i>...&quot</li>" .
	"<li><b>\&quot;my cat\&quot;</b> ==> returns all results for <b><i>&quot;my cat&quot;</i></b><br>" .
	"e.g. <i>this is <b>&quot;my cat&quot;</b> smilla</i>, but not <i>this is my cat smilla...</i>" .
	"</ul>";   

$lang['doc_entry_exif_iptc_search_info'] = "For a better performance " .
	"LinPHA will no longer extract any EXIF/IPTC metainfo during the create of thumbnails. " .
	"This means you need to have all EXIF/IPTC information ready before you can perform any " .
	"kind of search in EXIF/IPTC metadata.<br> " .
	"EXIF/IPTC data is created in two ways. Either when you view an image the first time, " .
	"and/or if you made use of the \"create all information once\" option found in the " .
	"LinPHA admin section under the \"Thumbnails EXIF/IPTC\". link.<br> " .
	"For details please see:<a href='#createthumbs'>Thumbnails EXIF/IPTC</a><br> " .
	"You may want to modify the available EXIF/IPTC search tags by editing the file" .
	"/include/metadata.config.php.";
		
$lang['doc_entry_iptclevel'] = "
	The amount of IPTC information is defined in <b>three levels</b> (low/medium/high).
	The higher you set this level, the amount of displayed IPTC information increases.<br>
	Default: medium
	";
	
$lang['doc_entry_iptcinfo'] = "Some images contain so called IPTC metadata. This " .
	"kind of data is mostly used by Adobe Photoshop to add/get some useful descriptions, " .
	"copyright, keywords or other data to/from images. If enabled, LinPHA will display " .
	"the IPTC info of an image (if found).<br> " .
	"Default: Off";
	
$lang['doc_entry_video_thumbnail'] = " This option allows you to enable thumbnails " .
	"even for some kinds of videos. As this is an long time and huge memory consumption " .
	"task, it's strongly recommended to disable this feature on slow servers, " .
	"or so called shared servers!<br>".
	"Default: On";
	 
$lang['doc_entry_update_notice'] = "This option allows you to disable the weekly " .
	"update notice for admins. You should leave it on (default) to always be " .
	"informed about updates, which includes security updates also!<br> " .
	"NOTE: There is no personal data transmited or stored somewhere during the check!<br>" .
	"Default: On";
	
$lang['doc_entry_random_image_size'] = "This option allows you to change the ".
    "size of the random image displayed in index.php (if enabled)<br>".
    "Default: 300 px";
    
$lang['doc_entry_random_index_image'] = "This option allows you to replace the LinPHA ".
    "default logo on index.php with a random image of your image collection.<br>".
    "Everytime you revisit LinPHA you will see a different image from your ".
    "image collection<br>".
    "Default: off";
    
$lang['doc_entry_adodb_caching'] = "Especially on slow SQL servers you should ".
    "enable this feature. It stores the results of SQL querys in a directory ".
    "structure within the /sql/adocache directory (default) for a given time ".
    "in minutes (adodb caching time). Usually it makes no sense to enable this".
    "feature when having a CPU > 1GHz.".
    "<br /><br />Default: off";

$lang['doc_entry_adodb_cache_path'] = "The path where SQL results are " .
    "stored. If you change the default (sql/adocache) make sure the webserver ".
    "has full write permissions to the new directory";

$lang['doc_entry_adodb_cache_time'] = "The caching time for querys in minutes.";

$lang['doc_entry_mail_mode_anon'] = "If enabled, everyone is allowed to send ".
    "images to other people via email. If disabled only registered users will ".
    "have the option to send images as email.".
    "<br><br>Default: disabled".
    "";
$lang['doc_entry_mail_mode_max_size'] = "This option allows you to set the ".
    "max allowed size for emails in bytes.".
    "<br><br>Default: 2097152 (2 MB)";

$lang['doc_entry_archive_apps'] = "Additional applications to create archives or extract files can be defined in the file ".
	"linpha/include/archiver.config.php.<br /><br />".
	"Note: These applications <b>cannot</b> be installed in directories which contains spaces! ".
	"If you want to use a program which is installed in C:/Program Files/... you have to use C:/Progra~1/...<br />".
	"Alternatively you can install the program in another directory OR you can add the directory to the PATH variable, ".
	"this will work too.<br /><br />".
	"Another reason why your application doesn't appear in the select box: safe_mode or open_basedir restrictions. ".
	"If possible, disable safe_mode or open_basedir, or use the programs which are in the allowed paths of safe_mode ".
	"or open_basedir.";

$lang['doc_entry_default_date_time_format'] = 
	"The default date and time format is only used if it isn't defined in the language file ".
	"(for example in the english file because the time format is different in US and UK).<br />".
	"See <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>".
	"http://www.php.net/manual/en/function.strftime.php</a> for definitions.";

$lang['doc_entry_wm_delete_all_cached_images'] = 
	"With this option you can delete all cached images which have a watermark. This option may".
	"be useful if you have images already cached and you are changing the watermark. <br />".
	"(This option is only available if watermark and image cache are enabled.)";

$lang['doc_entry_mail'] = "
		This plugin adds a mailing list where users can register themself to receive news from you later.<br>
		In addition (allowed) users can send out mail to all other mailing list members. Some new configuration 
		options will show up in admin section to allow you to change the behavior of this plugin.<br><br>
		Default: off
		";
$lang['doc_entry_guestbook']="This plugin adds a guestbook where user can leave you a message.<br>
		In addition some new config options will be available in the admin section to configure the
		guestbook behavior.<br><br>
		Default: off
		";
$lang['doc_entry_new_images']="
		With this option enabled, a new \"virtual folder\" will be displayed in the left menu.<br>
		It will show all new added images from all albums (you are allowed to view) without 
		wasting any additional webspace!<br>
		The preview of images depends on the <a href=\"#new_images_age\">max age</a> setting below.<br>
		The folder will disapear as soon as the \"max age\" is reached and show up again as soon as you add<br>
		some new images (isn't that magic :-))<br><br>
		Default: On
		";
$lang['doc_entry_new_images_age']="This setting defines (in days) how long new added images show up in the \"new images\" 
		folder<br><br>
		Default: 7 days
		";
$lang['doc_entry_comment_in_subfolder']="If set to on, this will display an album comment also in the \"subfolder preview\"
		for the subalbums and not only in the album itself.<br>
		You should consider to turn this feature off if you have long album comments as it may break the layout
		of the subfolder preview.<br><br>
		Default: on
		";
$lang['doc_entry_fullaccess'] = "
		If you are going to install LinPHA at your <b>Home-PC</b> or a so called \"root-server\"
		on the internet, this is the option to choose. You also need full access rights to a SQL
		database server to create a new linpha user.
	";
$lang['doc_entry_limitedaccess'] = "
		If you are going to install LinPHA somewhere on <b>the internet</b>, this is the option
		to choose. Most internetproviders do not allow full access to the SQL database.
	";
$lang['doc_entry_dbselect'] = "
		Some notes about the different supported Databases:<br>
		<b>MySQL database:</b> To continue, you need to have a root password (set) 
		for your MySQL database. Please see the 
		<a href=\"http://linpha.sourceforge.net/nuke/modules.php?name=FAQ\">LinPHA FAQ</a> for more details.<br><br>
		<b>PostgreSQL database:</b> Other than MySQL LinPHA will not create the DB 
		itself for you. Therefore you need to run <b><i>createdb linpha</i></b> from the command line to create a new database called &quot;linpha&quot; before you continue. The rest is similar to the MySQL installation without the need of having a password set for your DB.
		<br>For all RDBMS make sure that there is PHP support for your DB!!!!
	";
$lang['doc_entry_sqladminname'] = "
		The name of your MySQL database admin. This is often the so called \"root\" account.
	";
$lang['doc_entry_sqladminpass'] = "
		The password for the MySQL admin/root account. <b>NOTE:</b> For security reasons
		LinPHA will NOT install on systems without an admin password, so make sure to
		have an admin/root account incl. password ready!
	";
$lang['doc_entry_linphaname'] = "
		The name of the LinPHA administrator. You can later login with this name to perform
		administrative LinPHA tasks.
	";
$lang['doc_entry_linphapass'] = "
		The password for the LinPHA administrator.
	";
$lang['doc_entry_linphamail'] = "
		Email address of LinPHA administrator.
	";
$lang['doc_entry_dbhost'] = "
		The hostname of the MySQL database server. This is often \"localhost\" for Home-PC's and
		something like \"mysql.somewhere.org\" for ISP's.
	";
$lang['doc_entry_dbport'] = "
		The MySQL serverport. In most cases this is the default 3306.
	";
$lang['doc_entry_dbname_full'] = "
		The name of the database to hold all LinPHA tables. If unsure leave the default \"linpha\".<br>

		If you are going to install several versions or instances of LinPHA
		change the database name here.
	";
$lang['doc_entry_dbname'] = "
		The name of the database to connect. This name is <b>given you</b> by your ISP.
	";
$lang['doc_entry_dbprefix'] = "
		The prefix for all LinPHA tables. All LinPHA tables will have the <b>prefix \"linpha_\"</b>
		in your database. Feel free to change it to whatever you like.
	";
$lang['doc_entry_albumtitle'] = "
		This option allows you to set the name of the LinPHA photo album. 
		Leave the option blank to use the default name.<br>
		Default: blank (The Linux Photo Archive)
	";
$lang['doc_entry_photoscol'] = "
		This option allows you to increase/decrease the <b>number of columns</b> with thumbnails.
		It takes effect in all pages were thumbnails are displayed.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>

		Default: 4 columns
	";
$lang['doc_entry_photosrow'] = "
		This option allows you to increase/decrease the <b>number of rows</b> with thumbnails.
		It takes effect in all pages were thumbnails are displayed.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>
		Default: 3 rows
	";
$lang['doc_entry_photoswidth'] = "
		This option allows you to set the default <b>width of photos</b> displayed in img_view.php.
		I.e. the displayed \"medium\" sized image when a thumbnail was clicked.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>

		Default: 512
	";
$lang['doc_entry_photosheight'] = "
		This option allows you to set the default <b>height of photos</b> displayed in img_view.php.
		I.e. the displayed \"medium\" sized image when a thumbnail was clicked.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>
		Default: 384
	";
$lang['doc_entry_imgquality'] = "
		This option allows you to set the default <b>quality of images</b> in img_view.php.
		(the image that appears after you click a thumbnail). You may increase loading speed
		due set to a lower value. Examples:<br>
		Image size (quality 75) = 28.55 KB<br>

		Image size (quality 50) = 18.47 KB<br>
		Image size (quality 40) = 15.80 KB<br>
		Default: 75
	";
$lang['doc_entry_rotateonoff'] = "
		This option allows you to enable/disable the image rotation feature in img_view.php
		PLEASE NOTE:<br>
		If you are using the GD library please note that <b><font color=\"FF0000\">ALL OF THE IMAGE EXIF INFORMATION
		WILL GET LOST !!!</font></b> during image rotation.<br>I already wrote a bug report to the PHP developers but they
		told me that they will NOT fix this bug! :-(<br><br>
		If you are using the convert tool from the ImageMagick suite you should be save but please make sure
		to test it!<br>

		Default: off
	";
$lang['doc_entry_exifonoff'] = "
		Many images in jpg format contain some special information known as EXIF.
		This option allows you to enable/disable the display of EXIF information in img_view.php.
		(the site that appears after you click a thumbnail) If there is no good reason
		you should leave the default (on).<br>
		HINT: If enabled you should also see:<br>
		<a href='#exifdefault'>EXIF default settings</a><br>
		<a href='#exiflevel'>EXIF verbosity level settings</a>
	";
$lang['doc_entry_exifdefault'] = "
		This option allows you to display the image EXIF information in img_view.php
		(the site that appears after you click a thumbnail) by default.
		Otherwise users have to click the <b>\"more details\"</b> link to get the EXIF information.<br>

		Default: off
	";
$lang['doc_entry_exiflevel'] = "
	The amount of EXIF information is defined in <b>three levels</b> (low/medium/high).
	The higher you set this level, the amount of displayed EXIF information increases.<br>
	Default: medium
	";
$lang['doc_entry_filename'] = "
		This option allows you whether to display the filename below the thumbnail or not.<br>
		Default: on
	";
$lang['doc_entry_thumborder'] = "
		This option allows you to change the order of the thumbnails. You can choose between
		<b>\"order by date\"</b> (latest photo first) and <b>\"order by filename\"</b> (descent).<br>

		Default: date
	";
$lang['doc_entry_thumbsize'] = "
		This option allows you to change the size of the thumbnails. You can choose between
		90, 120 and 150 pixel max size. Please note that a change will <b>NOT</b> update the existing thumbnails.
		so you have to recreate them manually.<br>
		please see: <a href='#recreatethumbs'>recreate thumbnails</a> found under &quot;Other options&quot;<br>
		Default: 120 pixel
	";
$lang['doc_entry_thumbborder'] = 
        "This option allows you to add a border to the thumbnails. (Size of the border in pixel.)
        <br />
        Set to 0 to disable the border.
        <br /><br />
        How to change the color, see <a href='#wm_color'>Border Color</a>.
        <br /><br />
		Default: On";
    
         /*(ImageMagick only).
        Please note that a change will <b>NOT</b> update the existing thumbnails, so you have
        to recreate them manually.<br>

        please see: <a href='#recreatethumbs'>recreate thumbnails</a> found under &quot;Other options&quot;
        */
        
$lang['doc_entry_autoconf'] = "
		With this option set ON, LinPHA detects all changes in your albums automatically. This means
		LinPHA auto creates thumbnails for new added images, and deletes everything from DB if
		you remove an image or album.<br>
		Since this task causes heavy CPU load, you should set it OFF and only enable it if
		you changed something. Better leave it OFF and make use of the \"Auto create/delete thumbnails\"
		feature! <a href='#createthumbs'>(INFO)</a><br>
		Default: off
	";
$lang['doc_entry_counter'] = "
		This option allows you to define, whether to display the user counter in the upper right or not.<br>

		Default: enable
	";
$lang['doc_entry_ipblocking'] = "
		This option allows you to define the time an ip adress <b>is blocked</b>. This means
		during this value the user is not counted as a new visitor.<br>
		Default: 15 minutes
	";
$lang['doc_entry_language'] = "
		The LinPHA default language. If you enabled \"language auto-detect\" this
		is the default fallback language.<br>
	";
$lang['doc_entry_autolanguage'] = "
		If enabled, LinPHA welcomes a vistor in his native language (if supported). If an unsupported
		language is detected, LinPHA uses the default language as fallback.
		(please see <a href='#language'>default language</a>)<br>
		Default: on
	";
$lang['doc_entry_theme'] = "
		This option allows you to change the default LinPHA look and feel. Choose from <b>three
		avilable</b> themes. (Aqua/Colored/Shadow)<br>

		Default: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
		This option allows you to create high quality thumbnails using the GD library. They look
		much smoother but this causes <b>very high CPU load</b>.<br>
		Do not enable if your CPU is slower 1 GHz!!<br>
		Default: off
	";
$lang['doc_entry_printing'] = "
		This option allows you to enable the LinPHA printing feature for guest users. If enabled
		everyone is allowed to print (eg. the \"Print mode\" link and icon are visible).
		If set off, users must first login to be able to print.<br>
		Default: off
	";
$lang['doc_entry_slideshow'] = "
		This option allows you to enable/disable the LinPHA slideshow feature. If your server has
		low bandwidth or CPU < 300MHz you should disable the slideshow.<br>
		Default: on
	";
$lang['doc_entry_miniprev'] = "
		This option allows you to enable/disable the use of images as next/previous button
		in img_view.php instead of arrow icons. If you have many visiors wih a low bandwidth
		you should disable this feature as it causes a 7kb \"overhead\" compared to the arrow icons.<br>

		Default: on
	";
$lang['doc_entry_anonpost'] = "
		This option allows you to enable/disable anonymous postings. If enabled, every visitor 
		is allowed to write a comment for images. If disabled, ONLY registered users are allowed to 
		write a comment.<br>
		Default: off
	";
$lang['doc_entry_anondown'] = "
		This option allows you to enable/disable anonymous downloads. If enabled, every visitor 
		is allowed to download your images (download link is enabled below image). If disabled, 
		the download link is enabled ONLY for registered users.<br>
		Default: off
	";
$lang['doc_entry_autologin'] = "
		If this option is activated, users have the option to use the autologin. The autologin
		creates a cookie in which the encrypted password is stored (MD5 hash). It should really
		only be used if it is their own computer. You can disable it if that's a problem for you.<br/>
		Default: on
	";
$lang['doc_entry_autologinuser'] = "
		If this option is activated, you don't have to login every time. The autologin creates a cookie
		in which the encrypted password is stored (MD5 hash). It should really only be used if that is your
		own computer.
	";
$lang['doc_entry_timer'] = "
		This option allows you to enable/disable the output of the parsetime in the footer bottem right.
		<br/>Default: off
	";
$lang['doc_entry_anonalbdown'] = "
		This option allows you to enable/disable the function to download zipped albums for anonymous users.
		<br/>Default: off
	";
$lang['doc_entry_albdownlimit'] = "
		This option allows you to set a speed limit for the download of zipped albums.
		<br/>Default: unlimited
	";
$lang['doc_entry_navigation'] = "
		This option allows you to enable/disable the navigation bar on the thumbnail pages.
		<br/>Default: off
	";
$lang['doc_entry_usermod'] = "
		Change user names,  passwords, and email address here. You may also delete users here.
	";
$lang['doc_entry_usernew'] = "
		Use this form to create new user accounts and assign them password, email adress and user group.<br>
		The user groups (friend/admin) allows you to set the users privileges. <b>Warning!</b> if set
		admin, the user gains the same rights as YOU!<br>

	";
$lang['doc_entry_groupnew'] = "
		Use this form to create new groups. LinPHA comes with 3 default groups:<br>
		Admin (can't be deleted), friends and uploaders.
	";
$lang['doc_entry_groupmod'] = "
		Use this form to delete/modify groups. The uploaders group is a special one, 
		if you add a user to be member of this group, he/she can use the LinPHA filemanager
		for uploads in their \"my settings\" page.<br>
		Therefore it should not be deleted.
	";
$lang['doc_entry_folderperms'] = "
		This page allows you to hide albums/folders. LinPHA knows for stages by default. Of
		course you can add more groups if you need to:<br>
		<b>PUBLIC:</b> Visible to any user, no need to login.<br>
		<b>FRIEND:</b> Visible only to users which are member of this group.<br>

		<b>ADMIN:</b> Visible only to admin users. (not friends)<br>
		<b>UPLOADER</b> Pseudo group. Enables the filemanger for thoses users in their \"my settings\" page, so they can upload images<br>
	";

$lang['doc_entry_createthumbs'] = "
		Also LinPHA is capable of creating all thumbnails and IPTC/EXIF data if 
		<a href='#autoconf'>Auto create/delete thumbnails</a> is enabled on
		the fly, you still may want to create thumbs and/or EXIF/IPTC in
		advance. Well, you are in the right place!<br>
		Please keep in mind, that the above operations may fail due PHP  
		runtime limits when using the PHP included GD lib, convert is known  
		to work fine.<br>
		So, if you run into problems with mass creating metadata or thumbs  
		(e.g. not all thumbs of an album where created, just a couple of 
		them...), best leave <a href='#autoconf'>Auto create/delete thumbnails</a>  
		turned on and things should work smoothly.<br/><br/> 
		<ul>
		<li><strong>Directories:</strong> This options just creates/recreates 
			the album structure and prepares the md5sum for the thumbnails. 
		<li><strong>Thumbnails:</strong> This option creates/recreates 
			thumbnails for the images. (and removes the once for images which  
			are no longer in you collection) 
		<li><strong>EXIF:</strong> This option creates/recreates the EXIF  
			information found in images. 
		<li><strong>IPTC:</strong> This option creates/recreates the IPTC  
			information found in images. 
		<li><strong>Silent Mode:</strong> Prevent detailed information of  
			the create/recreate process. Just show the progress information  
			in percent. 
		</ul>
	";

$lang['doc_entry_catnew'] = "
		LinPHA allows you to create categories. These categories are NOT visible to the users 
		if you choose to set them \"private\". Otherwise they were visible for guest and 
		registered users in the search page.<br>
		This allows you to <b>organize your photos</b> within categories like Holliday, Cars, 
		Cat, whatever.
		The main purpose is to <b>find them</b> much easier later via the search page,
		and for a better overview.
	";
$lang['doc_entry_catmod'] = "
		Modify/delete all your categories here...
	";
$lang['doc_entry_benchmark'] = "
		The benchmark plugin allows you to find the best settings for the size of the images
		and the quality depending on your server performance.
	";
$lang['doc_entry_watermark'] = "
		The Watermark plugin allows you to place a watermark over each image.
		The Watermark doesn't change your images, it is generated on the fly.
		You can take an own image or you can put your own text over each image.
	";
$lang['doc_entry_wm_addexamples'] = "
		To add more example images, just put it in your linpha directory
		in the folder 'plugins/watermark/examples'
	";
$lang['doc_entry_wm_addimg'] = "
		To add more example images, just put it in your linpha directory
		in the folder 'plugins/watermark/watermarks'
	";
$lang['doc_entry_wm_addfont'] = "
		To add more fonts, just put it in your linpha directory
		in the folder 'plugins/watermark/font'. The fonts have to
		be Truetype-Fonts (.ttf). You will find a lot on the I-Net:
		<a href=\"http://directory.google.com/Top/Computers/Software/Fonts/\" target=\"_blank\">Google Directory of Fonts</a>

	";
$lang['doc_entry_wm_color'] = "
		To set the color, you can use the html color format ('#00FF00' or '00FF00') or normal text like 'blue' 'darkblue' etc.
	";
$lang['doc_entry_sql'] = "
		With the SQL DB Management you can create backups of your current database.
	";
$lang['doc_entry_cache'] = "
		The image cache plugin allows you to cache the medium sized images (the ones you see after clicking
		a thumbnail)This will greatly speedup LinPHA, especially on slow hardware.<br>
		Of course at the cost of additional webspace usage.
		<br/>Default: OFF (enable if CPU < 500 MHz)
	";
$lang['doc_entry_cachesize'] = "
		This option allows you to specify the maximum disk space, in bytes, used by the cache. 
		<br/>Default: 0 (= unlimited)
	";
$lang['doc_entry_cachepath'] = "
		This option allows you to change the cache directory.<br />
		If you change this directory, all cached files are deleted!<br />
		If the new directory doesn't exists, linpha tries to create it.<br />
		<br />Default: sql/cache
	";
$lang['doc_entry_cacheoptimize'] = "
		This option allows you to cleanup/optimize the image cache.
	";

$lang['doc_entry_log'] = "
		This plugin adds logging functionality to LinPHA. Each type of Event can
		be logged to a seperate destination.<br />
		Currently supported events: login, update, thumbnail and database.<br />
		Currently supported destinations: none, system, file, email and database.<br /><br />
		Default: off
		";

$lang['doc_entry_rss'] = "
		This plugin allows your visitors to be informed about changes in LinPHA by subscribing an RSS 2.0 feed. When you have uploaded pictures, or created a new album, just click on \"Generate RSS\" (or \"preview RSS\" if you wish to view the XML file without building it) and it will create a new RSS file, based on the the change date of the folders. <br />
		When enabled, an RSS 2.0 logo is added to the bottom. Draged and droped to an aggregator, it will display the updates.<br />
		On configuration section, you will find the following options:<ul>
		<li><strong>Title</strong> --> the title displayed in the feed reader for your channel</li>
		<li><strong>Description</strong> --> the description of your channel</li>
		<li><strong>Link</strong> --> link to your site</li>
		<li><strong>Language</strong> --> the language of your feed</li>
		<li><strong>Copyright</strong> --> Any copyright you wish to add</li>
		<li><strong>Genric title</strong> --> The text that will figure before the name of the folder in the description of the item.</li></ul>
		";

$lang['doc_entry_stats'] = "
		This plugin allows you and your visitors to view some Statistics of LinPHA.<br />
		Like number of comments, number of downloads, most visited image and album, and so on...
		";

$lang['doc_entry_statscaching'] = "
		Especially on large image collections and/or high traffic sites, you 
		should consider to disable \"realtime statistics\".<br>
		As this option <b>takes only effect on the \"Downloads size\" value</b>
		in the	\"user\" section, it is mostly save to disable 
		\"realtime_stats\" on large collections to prevent high server load!<br>
		Again: Even if disabled, <b>all Statistics are realtime besides</b> the
		value for \"Downloads size\".
		";
?>
