<?php

$lang['default_date_time_format'] = 'デフォルトの日付と時間の書式';
$lang['sql'] = 'DB 管理';
$lang['plugins'] = 'LinPHA プラグイン';
$lang['benchmark'] = 'ベンチマーク';
$lang['watermark'] = 'ウォーターマーク';
$lang['cache'] = '画像キャッシュ';
$lang['mail']="メーリングリストプラグイン";
$lang['guestbook']="ゲストブックプラグイン";
$lang['wm_delete_all_cached_images']="ウォーターマーク: すべてのキャッシュ済み画像を削除する";

$lang['doc_entry_mail'] = "
		This plugin adds a mailing list where users can register themself to receive news from you later.<br>
		In addition (allowed) users can send out mail to all other mailing list members. Some new configuration 
		options will show up in admin section to allow you to change the behavior of this plugin.<br><br>
		デフォルト: オフ
		";
$lang['doc_entry_guestbook']="This plugin adds a guestbook where user can leave you a message.<br>
		In addition some new config options will be available in the admin section to configure the
		guestbook behavior.<br><br>
		デフォルト: オフ
		";
$lang['doc_entry_new_images']="
		With this option enabled, a new \"virtual folder\" will be displayed in the left menu.<br>
		It will show all new added images from all albums (you are allowed to view) without 
		wasting any additional webspace!<br>
		The preview of images depends on the <a href=\"#new_images_age\">max age</a> setting below.<br>
		The folder will disapear as soon as the \"max age\" is reached and show up again as soon as you add<br>
		some new images (isn't that magic :-))<br><br>
		デフォルト: オン
		";
$lang['doc_entry_new_images_age']="This setting defines (in days) how long new added images show up in the \"new images\" 
		folder<br><br>
		デフォルト: 7 日
		";
$lang['doc_entry_comment_in_subfolder']="If set to on, this will display an album comment also in the \"subfolder preview\"
		for the subalbums and not only in the album itself.<br>
		You should consider to turn this feature off if you have long album comments as it may break the layout
		of the subfolder preview.<br><br>
		デフォルト: オン
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
		MySQL データベース管理者名です。これは多くの場合 \"root\" と呼ばれます。
	";
$lang['doc_entry_sqladminpass'] = "
		MySQL 管理者/root アカウントのパスワードです。<b>NOTE:</b> For security reasons
		LinPHA will NOT install on systems without an admin password, so make sure to
		have an admin/root account incl. password ready!
	";
$lang['doc_entry_linphaname'] = "
		LinPHA 管理者名です。この名前でログインした後に LinPHA の管理タスクをすることが出来ます。
	";
$lang['doc_entry_linphapass'] = "
		LinPHA 管理者のますワードです。
	";
$lang['doc_entry_linphamail'] = "
		LinPHA 管理者の電子メールアドレスです。
	";
$lang['doc_entry_dbhost'] = "
		MySQL データベースサーバーのホスト名です。This is often \"localhost\" for Home-PC's and
		something like \"mysql.somewhere.org\" for ISP's.
	";
$lang['doc_entry_dbport'] = "
		MySQL サーバーのポート番号です。ほとんどの場合、これはデフォルトの 3306 です。
	";
$lang['doc_entry_dbname_full'] = "
		The name of the database to hold all LinPHA tables. If unsure leave the default \"linpha\".<br>

		If you are going to install several versions or instances of LinPHA
		change the database name here.
	";
$lang['doc_entry_dbname'] = "
		接続するデータベース名です。この名前は ISP があなたに提供します。
	";
$lang['doc_entry_dbprefix'] = "
		すべての LinPHA テーブルの接頭語です。All LinPHA tables will have the <b>prefix \"linpha_\"</b>
		in your database. Feel free to change it to whatever you like.
	";
$lang['doc_entry_albumtitle'] = "
		This option allows you to set the name of the LinPHA photo album. 
		Leave the option blank to use the default name.<br>
		デフォルト: blank (The Linux Photo Archive)
	";
$lang['doc_entry_photoscol'] = "
		This option allows you to increase/decrease the <b>列数</b> with thumbnails.
		It takes effect in all pages were thumbnails are displayed.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>

		デフォルト: 4 列
	";
$lang['doc_entry_photosrow'] = "
		This option allows you to increase/decrease the <b>number of rows</b> with thumbnails.
		It takes effect in all pages were thumbnails are displayed.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>
		デフォルト: 3 行
	";
$lang['doc_entry_photoswidth'] = "
		This option allows you to set the default <b>写真の幅</b> displayed in img_view.php.
		I.e. the displayed \"medium\" sized image when a thumbnail was clicked.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>

		デフォルト: 512
	";
$lang['doc_entry_photosheight'] = "
		This option allows you to set the default <b>写真の高さ</b> displayed in img_view.php.
		I.e. the displayed \"medium\" sized image when a thumbnail was clicked.<br>
		You may increase this value when running LinPHA in high resolution > 1024x768<br>
		デフォルト: 384
	";
$lang['doc_entry_imgquality'] = "
		This option allows you to set the default <b>quality of images</b> in img_view.php.
		(the image that appears after you click a thumbnail). You may increase loading speed
		due set to a lower value. Examples:<br>
		画像容量 (品質 75) = 28.55 KB<br>

		画像容量 (品質 50) = 18.47 KB<br>
		画像容量 (品質 40) = 15.80 KB<br>
		デフォルト: 75
	";
$lang['doc_entry_rotateonoff'] = "
		This option allows you to enable/disable the image rotation feature in img_view.php
		PLEASE NOTE:<br>
		If you are using the GD library please note that <b><font color=\"FF0000\">ALL OF THE IMAGE EXIF INFORMATION
		WILL GET LOST !!!</font></b> during image rotation.<br>I already wrote a bug report to the PHP developers but they
		told me that they will NOT fix this bug! :-(<br><br>
		If you are using the convert tool from the ImageMagick suite you should be save but please make sure
		to test it!<br>

		デフォルト: オフ
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

		デフォルト: オフ
	";
$lang['doc_entry_exiflevel'] = "
	The amount of EXIF information is defined in <b>3つのレベル</b> (低/中/高).
	The higher you set this level, the amount of displayed EXIF information increases.<br>
	デフォルト: medium
	";
$lang['doc_entry_filename'] = "
		This option allows you whether to display the filename below the thumbnail or not.<br>
		デフォルト: オン
	";
$lang['doc_entry_thumborder'] = "
		This option allows you to change the order of the thumbnails. You can choose between
		<b>\"order by date\"</b> (latest photo first) and <b>\"order by filename\"</b> (descent).<br>

		デフォルト: 日付
	";
$lang['doc_entry_thumbsize'] = "
		This option allows you to change the size of the thumbnails. You can choose between
		90, 120 and 150 pixel max size. Please note that a change will <b>NOT</b> update the existing thumbnails.
		so you have to recreate them manually.<br>
		please see: <a href='#recreatethumbs'>recreate thumbnails</a> found under &quot;Other options&quot;<br>
		デフォルト: 120 pixel
	";
$lang['doc_entry_thumbborder'] = "
		This option allows you to add a border to the thumbnails. (ImageMagick only).
		Please note that a change will <b>NOT</b> update the existing thumbnails, so you have
		to recreate them manually.<br>

		please see: <a href='#recreatethumbs'>recreate thumbnails</a> found under &quot;Other options&quot;<br><br>
		デフォルト: オン
	";
$lang['doc_entry_autoconf'] = "
		With this option set ON, LinPHA detects all changes in your albums automatically. This means
		LinPHA auto creates thumbnails for new added images, and deletes everything from DB if
		you remove an image or album.<br>
		Since this task causes heavy CPU load, you should set it OFF and only enable it if
		you changed something. Better leave it OFF and make use of the \"create all thumbs at once\"
		feature! <a href='#createthumbs'>(INFO)</a><br>
		デフォルト: オフ
	";
$lang['doc_entry_counter'] = "
		This option allows you to define, whether to display the user counter in the upper right or not.<br>

		デフォルト: 有効
	";
$lang['doc_entry_ipblocking'] = "
		This option allows you to define the time an ip adress <b>is blocked</b>. This means
		during this value the user is not counted as a new visitor.<br>
		デフォルト: 15 分
	";
$lang['doc_entry_language'] = "
		LinPHA のデフォルト言語です。If you enabled \"language auto-detect\" this
		is the default fallback language.<br>
	";
$lang['doc_entry_autolanguage'] = "
		If enabled, LinPHA welcomes a vistor in his native language (if supported). If an unsupported
		language is detected, LinPHA uses the default language as fallback.
		(please see <a href='#language'>デフォルト言語</a><br>
		デフォルト: オフ
	";
$lang['doc_entry_theme'] = "
		This option allows you to change the default LinPHA look and feel. Choose from <b>three
		avilable</b> themes. (Aqua/Colored/Shadow)<br>

		デフォルト: Aqua
	";
$lang['doc_entry_hqthumbs'] = "
		This option allows you to create high quality thumbnails using the GD library. They look
		much smoother but this causes <b>very high CPU load</b>.<br>
		Do not enable if your CPU is slower 1 GHz!!<br>
		デフォルト: オフ
	";
$lang['doc_entry_printing'] = "
		This option allows you to enable the LinPHA printing feature for guest users. If enabled
		everyone is allowed to print (eg. the \"Print mode\" link and icon are visible).
		If set off, users must first login to be able to print.<br>
		デフォルト: オフ
	";
$lang['doc_entry_slideshow'] = "
		This option allows you to enable/disable the LinPHA slideshow feature. If your server has
		low bandwidth or CPU < 300MHz you should disable the slideshow.<br>
		デフォルト: オン
	";
$lang['doc_entry_miniprev'] = "
		This option allows you to enable/disable the use of images as next/previous button
		in img_view.php instead of arrow icons. If you have many visiors wih a low bandwidth
		you should disable this feature as it causes a 7kb \"overhead\" compared to the arrow icons.<br>

		デフォルト: オン
	";
$lang['doc_entry_anonpost'] = "
		This option allows you to enable/disable anonymous postings. If enabled, every visitor 
		is allowed to write a comment for images. If disabled, ONLY registered users are allowed to 
		write a comment.<br>
		デフォルト: オフ
	";
$lang['doc_entry_anondown'] = "
		This option allows you to enable/disable anonymous downloads. If enabled, every visitor 
		is allowed to download your images (download link is enabled below image). If disabled, 
		the download link is enabled ONLY for registered users.<br>
		デフォルト: オフ
	";
$lang['doc_entry_autologin'] = "
		If this option is activated, users have the option to use the autologin. The autologin
		creates a cookie in which the encrypted password is stored (MD5 hash). It should really
		only be used if it is their own computer. You can disable it if that's a problem for you.<br/>
		デフォルト: オン
	";
$lang['doc_entry_autologinuser'] = "
		If this option is activated, you don't have to login every time. The autologin creates a cookie
		in which the encrypted password is stored (MD5 hash). It should really only be used if that is your
		own computer.
	";
$lang['doc_entry_timer'] = "
		This option allows you to enable/disable the output of the parsetime in the footer bottem right.
		<br/>デフォルト: オフ
	";
$lang['doc_entry_anonalbdown'] = "
		This option allows you to enable/disable the function to download zipped albums for anonymous users.
		<br/>デフォルト: オフ
	";
$lang['doc_entry_albdownlimit'] = "
		This option allows you to set a speed limit for the download of zipped albums.
		<br/>デフォルト: 無制限
	";
$lang['doc_entry_navigation'] = "
		このオプションはサムネイルページ上のナビゲーションバーの有効・無効の許可をします。
		<br/>デフォルト: オフ
	";
$lang['doc_entry_usermod'] = "
		ここでユーザー名・パスワードと電子メールアドレスを変更します。さらにここでユーザー削除をもするでしょう。
	";
$lang['doc_entry_usernew'] = "
		新しいアカウントを作成しするにはこのフォームを使用します。また、パスワードと電子メールアドレスとユーザーグループの割り当てをします。<br>
		The user groups (friend/admin) allows you to set the users privileges. <b>Warning!</b> if set
		admin, the user gains the same rights as YOU!<br>

	";
$lang['doc_entry_groupnew'] = "
		新しいグループを作るにはこのフォームを使用します。LinPHA comes with 3 default groups:<br>
		Admin (削除できません), friends and uploaders.
	";
$lang['doc_entry_groupmod'] = "
		グループの削除・修正をするにはこのフォームを使用します。The uploaders group is a special one, 
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
		This allows you to create/delete all thumbnails <b>without interaction</b>.
		Depending at the amount of new added/deleted images, this may <b>take some time</b> to finish!<br>

		Other then <a href='#autoconf'>Auto configure</a>, this script creates/deletes
		ALL new/deleted thumbnails in ALL folders (recursive).
	";
$lang['doc_entry_recreatethumbs'] = "
		This allows you to RECREATE all thumbnails <b>without interaction</b>.
		Other than <a href='#createthumbs'>Create all thumbs</a> this script recreates
		ALL thumbnails in ALL folders (recursive) AND ALL album permissions, and some statistics will
		get lost.<br>
	";
$lang['doc_entry_catnew'] = "
		LinPHA はカテゴリ作成を許可します。These categories are NOT visible to the users 
		if you choose to set them \"private\". Otherwise they were visible for guest and 
		registered users in the search page.<br>
		This allows you to <b>organize your photos</b> within categories like Holliday, Cars, 
		Cat, whatever.
		The main purpose is to <b>find them</b> much easier later via the search page,
		and for a better overview.
	";
$lang['doc_entry_catmod'] = "
		ここであなたのカテゴリーをすべて修正する/削除します...
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
		<br/>デフォルト: オフ (enable if CPU < 500 MHz)
	";
$lang['doc_entry_cachesize'] = "
		This option allows you to specify the maximum disk space, in bytes, used by the cache. 
		<br/>サイズ <= 0: ディスクスペース無制限です。
		<br/>デフォルト: 0 = 無制限
	";
$lang['doc_entry_cachepath'] = "
		このオプションは画像キャッシュディレクトリの変更を許可します。
		<br/>デフォルト: sql/cache
	";
$lang['doc_entry_cacheoptimize'] = "
		このオプションは画像キャッシュの掃除と最適化を許可します。
	";
$lang['doc_entry_imgrotate'] = "
		If the LinPHA image rotation feature is disabled please make sure that:<br><br>
		<b>1. You set the right file permissions!</b><br>
		Either you have to change the ownership of the files to the
		one Apache is running at. (maybe nobody/apache/wwwrun...)
		Or do a chmod 666 (UNIX only)...<br>

		<b>2. あなたの PHP バージョンをチェックします!</b><br>
		If you have installed convert from the ImageMagick suite you are save :-)<br><br>
		If you are using GD lib to create thumbnails, your PHP version MUST be at least
		<b>>=4.3.0</b>. All earlier versions do not support image rotating.
		(see http://your_domain/linpha/info.php for the installed PHP version)<br>
		Maybe you have to upgrade, sorry...
	";
$lang['doc_entry_printprobs'] = "
		If the LinPHA printing feature is disabled please make sure that:<br><br>
		1. Your PHP version is at least <b>>=4.3.0</b>. All earlier versions
		do not support image rotating which is required for printing.<br><br>

		2. If you don't like to update your PHP version you should consider to
		install the convert tool from the ImageMagick suite which does not depend
		on the installed PHP version.<br>
		(remember to set \"use_convert\" = \"1\" after install in the linpha_config table!!!)</b><br><br>
		3. You can disable this message (for guest visitors) due setting
		\"guest printing\" off in the admin section. see <a href='#printing'>LinPHA printing</a>
	";
$lang['doc_entry_default_date_time_format'] = 
	"The default date and time format is only used if it isn't defined in the language file ".
	"(for example in the english file because the time format is different in US and UK).<br />".
	"See <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>".
	"http://www.php.net/manual/en/function.strftime.php</a> for definitions.";

$lang['doc_entry_wm_delete_all_cached_images'] = 
	"With this option you can delete all cached images with have a watermark. This option may".
	"be useful if you have images already cached and you changed the watermark. <br />".
	"(This option is only available if watermark and image cache are enabled.)";
	
?>