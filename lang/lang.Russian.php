<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */


/*
for the translators:
changes:
02. Aug 2004  $path_2_cache  changed default path from '/sql/cache' to 'sql/cache'
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="��� ���������";

/* alerts */
$alert_fopen="������! ���� �� ����������...";
$printing_probs="������ ������";
$printing_probs_msg="������ ���������! �����";

/* global messages */
$subfolders="�����������";
$img_th="����������";
$in_th="�"; /* used for the photos in $foldername */
$alb_th="������� � �����������";
$thumb_hint_msg="����� ��� ���������� ���������";
$latest_photo="���������";
$view_at="�������� �";
$close_button="�������";
$help="�������";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="����� ���������� � LinPHA";
$welc_text="����������, ��� �������� &quot;The Linux Photo Archive&quot;, ��� LinPHA.
			�������� ���, ����� �� �������� LinPHA ������ ���, ������� ����
			��������� ���������!.";
$welc_hint="<b>�� �� �����:</b>";
$welc_hint1="���� ������� ���������. &quot;<b>linpha/sql</b>&quot; �������� �� ������!
			(��������� chmod 777 sql)";
$next_button="������"; /* used as left menu header in all 4 stages */
$inst_msg="��������� LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="������ ���� � ����� &quot;������&quot;";
$inst_status_step1="��� 1 �� 4";

/* sec_stage_install (page 2) */
$inst_access_msg="��������� ���� ���� ������";
$inst_full_access_msg="<b>�� ! </b><br> � ���� ���� ������ ������ � �� MySQL, � ���� ��������� �����
						���� � ����� ������. ������ ������: ��� ��� ������!";
$inst_limited_access_msg="<b>��� !</b><br> � ������������ LinPHA � ����������� �������� � MySQL.
						������ ������(��� �����...) �� ���� ��� ��������� ����� ����, � ����� ������.";
$inst_status_2="������ ��� ������ � ��. �� ������ - ������� ���!";
$inst_status_step2="��� 2 �� 4";

/* requirements */
$req_check_msg="�������� ����������� �������";
$req_found_msg="�������";
$req_miss_msg="�� �������";
$req_safe_fail="��������";
$req_safe_ok="���������";
$php_safemode_check_msg="�������� PHP safe mode...";
$php_version_check_msg="�������� PHP ������ > 4.1.0...";
$mem_check_msg="�������� PHP ������ ������...";
$gd_check_msg="�������� GD ����������...";
$convert_check_msg="�������� ImageMagick...";
$exif_check_msg="�������� ��������� EXIF...";
$summary_msg="� �����:";
$safe_mode_err="Your Server is configured using PHP safe_mode. LinPHA will not work
			 as long as safe_mode is enabled in php.ini !";
$inst_abort_msg="!!! ��������� �������� !!!";
$php_version_err="Your Server is running a PHP version < 4.1.0. LinPHA will not work
			 as long as you do not upgrade your PHP installation.";
$gd_convert_err="Neither ImageMagick nor the GD library could be found. LinPHA will not work
			 as long as you do not install one of them.";
$convert_sum_found_msg="ImageMagick was found on this server. This will allow LinPHA
			to create high quality thumbnails.";
$convert_sum_miss_msg="ImageMagick was NOT found on this server. This will result in
			lower quality thumbnails.";
$exif_sum_found_msg="Found EXIF support in your PHP installation. This will allow LinPHA
			to show detailed Photo information.";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="NO exif support found in your PHP installation. Going to make
			use of the LinPHA included EXIF parser instead.";
/* TODO next 3 */
$session_path_check_msg="checking for session_safe_path...";
$session_path_found_msg="Session save path is set in php.ini. LinPHA login should work properly. Path is set to: ";
$session_path_miss_msg="NO value found for session_save_path. You MUST set session_save_path
			in php.ini or you will NOT be able to be login later!!";
$mem_limit_ok_msg="Fine, your PHP memory limit is >= 16MB. There should be no problems
			with thumbnail creation.";
$mem_limit_low_msg="Hmmh, your PHP memory limit is <=16MB. If you encounter problems
			with missing thumbnails, try to increase the memory_limit in php.ini or resize your
			pictures to a lower resolution and try again...";
$choose_def_quali="Choose default quality of photos";
$choose_def_quali_warn="Do NOT set to high quality if your CPU is &lt; 1Ghz (heavy CPU load)";

/* third_stage_install (page 3) */
$inst_superadmin_header="Configure MySQL Database Administrator";
$inst_superadmin_name="MySQL DB Admin name:";
$inst_superadmin_name_info="&lt;-the MySQL Database Admin name (must exist in DB)";
$inst_superadmin_pass="MySQL DB Admin pass:";
$inst_superadmin_pass_info="&lt;-pass for MySQL Administrator (must exist in DB)";

$inst_admin_header="Configure LinPHA Administrator";
$inst_admin_name="LinPHA Admin name:";
$inst_admin_name_info="&lt;-the LinPHA Admin name";
$inst_admin_pass="LinPHA Admin password:";
$inst_admin_pass_info="&lt;-the LinPHA Admin pass";
$inst_admin_email="Admin email:";
$inst_admin_email_info="&lt;-Set email address for Administrator";

$inst_db_header="Configure LinPHA Database connection";
$inst_db_host="Hostname:";
$inst_db_host_info="&lt;-hostname: typical &quot;localhost&quot;";
$inst_db_host_info2="&lt;-hostname: the MySQL database hostname";
$inst_db_host_port="Portnumber:";
$inst_db_host_port_info="&lt;-portnumber: if unsure leave as is";
$inst_db_name="LinPHA Database name:";
$inst_db_name_info="&lt;-the Database name for LinPHA, typical &quot;linpha&quot;";
$inst_db_name2="Database name:";
$inst_db_name_info2="&lt;-the database name given by your ISP";
$inst_table_prefix="Prefix for all LinPHA tables";
$inst_table_prefix_info="&lt;-the prefix to use for all LinPHA tables";

$general_header="Configure general options";
$general_album_title="Title of photo album";
$general_album_title_info="&lt;-Leave blank to use the default name";
$general_photos_row="Number of rows to display:";
$general_photos_row_info="&lt;-i.e. rows of thumbnails to display";
$general_photos_col="Number of columns to display:";
$general_photos_col_info="&lt;-i.e. columns of thumbnails to display";
$general_photos_width="Size of detailed photo view (width):";
$general_photos_width_info="&lt;- 512 (default size)";
$general_photos_height="Size of detailed photo view (height):";
$general_photos_height_info="&lt;- 384 (default size)";
$general_img_quality="Quality of detailed photo:";
$general_img_quality_info="&lt;- adjust image quality 0-100 (default 75)";

$inst_status_3="Please fill in all fields!";
$inst_status_step3="Step 3 of 4";

/* forth_stage_install (page 4) */
$inst_status_4="Congratulations installation completed! LinPHA is now ready to be used";
$inst_status_step4="Step 4 of 4";
$inst_submit="Finish";
$inst_db_tryconn="Trying to connect Database Server";
$inst_db_tryconn_error="Error while trying to connect Database Server, using:";
$inst_db_tryconn_ok="OK, connected!";
$inst_db_tryinst="Trying to create Database:";
$inst_db_tryinst_error="Error while creating Database:";
$inst_db_tryinst_ok="OK, created!";
$inst_create_tb_msg="OK, creating all tables";

/* ------------------------------------------------------------------
 * Note: The two following messages are used to generate the sql/db_connect.php
 * file. The two variables are expanded, put them between single quotes, and
 * then inside the die() command.
 * I.e.: see sql/db_connect:
 *       mysql_connect("localhost:3306","dummy","dummy")or
 *                            die ('Error connecting Database Server!');
 *
 * As you see, the message is included between quotes.
 * As consequence, YOU CANNOT USE QUOTES INSIDE THE STRINGS. If you really need
 * to use single quotes, remember to escape them: \'
 */
$inst_db_connect_inc_msg="Error connecting Database Server!";
$inst_db_connect_inc_msg1="Error while trying to select ".@$db_realname." from DB<br>
	If this message occures while running install, you have to REMOVE the file db_connect.php<br>
	in the linpha &quot;sql&quot; subdir!";
/* ------------------------------------------------------------------ */

$table_create="������� �������:";
$table_create_error="������ �������� �������!";
$table_create_ok="�� ��, ���������!";
$table_insert_admin="������ ������ �� �����:";
$table_insert_admin_error="������ �������� ���������� ��������!";
$table_insert_admin_ok="�� ��, ��������!";
$write_db_config="����� ������ � ����";
$fopen_error="���� sql/db_config.php ���������� ��� ������, ������ chmod 777 ��� ���� �������, � ����� �������";
$fopen_ok="�� ��, ������ ���������!";
$install_finish_msg="��������, ��������� ����������!!";
$admin_task="��� ��� �����������";
$file_create_ok="�� ��, ������!";
$configure_error="������� ��, ��������� ��� !!!";
$could_not_open="Error, could not open table users! Seems you are not allowed to add new users to DB<br>
				Please choose limited access installation method at page 2 during install<br>";
$could_not_open="������, �� ����������� ������� ������! ������ ���� �� ��� ���� � ��� ���<br>
				����� �����, �� ������ ��������, � ������ ������ �����<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - ��������� PHP";
$head_title="��������� PHP";
$book_home="�������";
$book_about="� �����";
$book_admin="�����";
$book_admin_user="��� ���������";
$book_links="������";
$book_search="�����";
$book_logout="�����";
$book_login="����";
$num_pictures="����������:";
$user_visits="�������";
$user_online="������ ������";
$guest="�����";
$html_lang="ru";
$html_charset="KOI8-R";

/*#################################################
## index.php
#################################################*/
$index_welc_text="�������, ��� �������� &quot;���������� PHP&quot; ��� ��� ��� ����� � ���, LinPHA.
			����� ����� ��������� �� <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> � ����������� ������ ��������.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-�����";
$radio_all="���";
$radio_descript="��������";
$radio_comment="�����������";
$radio_category="���������";
$radio_file="��� �����";
$search_in="����� � �������";
$search_all="��� �������";
$search_for="�������� �����";
$search_button="�����";
$photos_found="�������";
$search_info="��������� �������� LinPHA";
$search_msg="����� � LinPHA �������� ��:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="����������� ��������";
$img_size="������ ������";
$img_com="�����������";
$img_des="��������";
$img_cat="���������";
$img_name="���";
$img_info_stored="����������� �������";
$please_login="���������� <a href='login.php'><font color='#000099'><u>����������</u></font></a> ����� �������� �����������";
$back_to_thumbs="<b><u>����� � �������</u></b>";
$back_to_search="<b><u>����� � ������</u></b>";
$button_next="���������";
$button_prev="����������";
$exif_ext_error="���� ������� PHP �� �������������� EXIF, ������";
$exif_error="�����, ����������� �� �������� EXIF ����������!";
$exif_more="������ �������";
$exif_less="������ �������";
$detail_header="����";
$detail_header1="��";
$detail_header2="� ��������";
$php_to_old="PHP < 4.2.0 EXIF ��������!";
$views="����";
$slideshow="��������";
$seconds="������";
$go="������";
$stopslide="���������� ��������";
/* image rotating */ /* TODO next */
$img_rotate_ok="��������� �����������";
$img_rotating="�������� �������� �����������"; // TOC entry
$img_rotating_hint1="������� ���������� ��������! �����";
$img_rotating_hint2="����� ������� �������";

/*#################################################
## login.php
#################################################*/
$login_msg="������� �����������!";
$login_error="��� ������ ����� ��� ������";
$login_name="���";
$login_pass="������";
$login_info="�������� ����� LinPHA";
$login_request_account_info="����� �������� ����� �������:";
$login_request_target="������� � ������� LinPHA";
$login_admin_info="����� �������� ������ �����, ���������� � ��������� ���������";
$login_friend_account_info="���� � ���� ��� ���� &quot;���������&quot; �������,
����� �� ������ ������������� ������������ ���������";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA Administration";
$please_turn_off_msg="Please set 'Auto create/delete thumbnails' OFF when done adding photos.<br>
						LinPHA should work arround 10 times faster then :)";
/* left menu */
$logout_msg="logout";
$welc_msg="�������, ";
$stat_msg="You are now authorized to do administrative tasks as well, as add <b>comments</b> and descriptions to pictures";
$back_to_msg="<b>����� � �����������</b>";
$href_general_conf="General Configuration";
$href_user_conf="User/Group Management";
$href_folder_conf="Folder Management";
$href_sql="MySQL DB Management";
$href_ftp="File Management";
$href_stats="LinPHA statistics";
$href_other_conf="Other Options";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA default language";
$default_language_info="&lt;--set default language";
$general_auto_lang="Enable/disable language auto-detection"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- auto-detect visitors browser language";
$general_success_msg="! Changes written !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="Enable/disable image rotation";
$general_rotate_info="&lt;-- <b>big fat warning! click info</b>";
$general_exifinfo="Enable/disable ALL EXIF support";
$general_exifinfo_info="&lt;-- enable/disable use of EXIF feature";
$general_exifdefault="Show EXIF information by default";
$general_exifdefault_info="&lt;-- enable to show EXIF info by default";

$general_exiflevel="Level of EXIF information";
$general_exiflevel_info="&lt;-- set verbosity of EXIF information";
$exif_low="low";
$exif_medium="medium";
$exif_high="high";
$general_filename="Enable/disable filenames";
$general_filename_info="&lt;-- enable to show filename under thumb";
$general_thumb_order="Order thumbnails by";
$general_thumb_order_info="&lt;-- set order of thumbs by filename or date";
$thumb_order_date="Date";
$thumb_order_file="Filename";
$general_autoconf="Auto create/delete thumbnails";
$general_autoconf_info="&lt;-- <b>turn OFF for major speed improvements</b>";
$general_counterstat="Enable/disable counter";
$general_counterstat_info="&lt;-- default on";
$general_blocking="IP blocking time in minutes";
$general_blocking_info="&lt;-- user is not counted as new for x minutes";
$general_theme="Change the LinPHA theme";
$general_theme_info="&lt;-- set LinPHA default theme to use";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="Enable/disable HQ thumbnails and photos";
$general_hq_info="&lt;-- disable for major speed improvements";
$submit_button_general="Write changes to database";
$button_on_msg="on";
$button_off_msg="off";
$basic_opts="�������";
$advanced_opts="����������";
$show_basics="Click to show Basic Options";
$show_advanced="Click to show Advanced Options";
$general_printing="Enable/disable guest printing";
$general_printing_info="&lt;-- On, everyone is allowed to print";
$general_slideshow="Enable/disable slideshow";
$general_slideshow_info="&lt;-- set slideshow feature on/off";
$general_mini_preview="Enable/disable mini images";
$general_mini_preview_info="&lt;-- set off if many users have low bandwidth";

/* modify existing user table */
$mod_user_header="Modify existing users";
$submit_button_mod_user="Modify user";
$mod_user_success_msg="! User modified !";
$submit_button_delete="Delete";
$del_user_success_msg="! User deleted !";

/* add new user table */
$new_user_header="Add new user";
$new_user_name_info="Username";
$new_user_pass_info="Password";
$new_user_mail_info="Email";
$new_user_level_info="Userlevel";
$friend="friend";
$submit_button_new_user="Add user";
$new_user_success_msg="! User created !";

/* friends account table */
$friend_user_header="Account Configuration";
$submit_button_friend_user="Update Account";
$delete_button_friend_user="Delete Account";
$friend_info_msg="Set/Change your account settings";

/* add new category table */
$new_cat_header="Add new category";
$new_cat_info="new category name to add";
$submit_button_new_cat="add category";
$new_cat_success_msg="! Category added !";
$mod_cat_header="Modify/delete categories";
$cat_name_header="Category name";
$cat_mod_header="Modify category";
$cat_del_header="Delete category";
$submit_button_mod_cat="Modify";

/* set directory permissions */
$set_dir_perms_header="Set Folder Permissions";
$dir_name="Folder";
$dir_perms="Permission";
$action="Action";
$submit_button_folder="���������";
$public="public";
$friends="friends";
$private="private";
$new_perms_success_msg="! Permissions Changed !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="Overall Statistics";
$stats_over_photos="Photos in database:";
$stats_over_views="Overall photo views:";
$stats_over_albums="Albums in database:";
$stats_over_most_alb_visists="Most visited album:";
$stats_over_space="Diskspace used (all albums):";
$stats_over_visitors="Visitors so far:";
$stats_over_users="Registered users:";
$stats_top_ten="Top 10 views";
$stats_rank="Rank:";
$stats_no_views="Number of views:";
$stats_last_view="Last viewed:";
$stats_alb_name="Album Name:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="PARSING FIRST STAGE";
$parse_sec="PARSING SECOND STAGE";
$parse_third="PARSING THIRD STAGE";
$parse="now parsing";
$parsed="parsed:";
$dirs="sub directories";
$done="ALL DONE...";
$not_allowed_msg="Sorry, you are NOT allowed to run this script!";
/* these entries are called from within admin.php */
$th_msg="Create all your thumbnails at once!";
$table_hint_msg="Click start to create all thumbnails in all subfolders now!";
$start_button="Start!";
$recreate_thumbs_header="Recreate all thumbnails";
$recreate_thums_msg="This will RECREATE ALL your thumbnails! All statistics will get LOST!";
$recreate_thums_warning="Please confirm your intention to recreate all the thumbnails, and DELETE ALL THE COMMENTS, DESCRIPTION AND STATS! This operation cannot be undone. Are you sure you want to continue?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="Choose print layout";
$images_page="Images/page";
$indexprint="Index print (28)";
$note="<strong>NOTE:</strong> You may have to adjust your browsers \"page setup\"
			before printing, to make sure all photos fit on page !!!";
$print_button="Print preview";
$href_check_all="Check all";
$href_clear_all="Clear all";
$print_error="ERROR, no images selected !!!";
$print_mode="Print mode";
$print_image="Print image";
$videos_msg="Cannot print videos";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL database management system ver.";
$mysql_cancel="Cancel";
$mysql_DHTML_hint="DHTML display is disabled - you won\'t see anything until the backup is complete.";
$mysql_select_all="Select All";
$mysql_deselect_all="Deselect All";
$mysql_create_backup="Create Backup";
$mysql_back_menu="Back to menu";
$mysql_table_checks="Checking tables...";
$mysql_table_check="Chicking table";
$mysql_struct_msg="Creating structure for";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="Overall Progress:";
$mysql_back_complete="Backup complete in";
$mysql_back_menu_long="Back to MySQL Database Backup main menu";
$mysql_open_warn1="<B>Warning:</B> failed to open ";
$mysql_open_warn2="for writing!<BR><BR><I>CHMOD 777</I> on the directory should fix that.";
$mysql_date_msg="It is now "; // it follows time of the day...
$mysql_last_backup="Last full backup of MySQL databases: ";
$mysql_backup_hint="Generally, backing up more than once a week is not neccesary.";
$mysql_down_backup="Download previous full backup ";
$mysql_down_backup_part="Download previous partial backup ";
$mysql_down_backup_struct="Download previous structure only backup ";
$mysql_down_backup1="(right-click, Save As...)";
$mysql_unknown_backup="Last backup of MySQL databases: <I>unknown</I>";
$mysql_href_recom="Create a new full backup, complete inserts (recommended)";
$mysql_href_standard="Create a new full backup, standard inserts (smaller)";
$mysql_href_partial="Create a new partial backup, selected tables only (with complete inserts)";
$mysql_href_structure="Create a new full backup, table structure only";
$mysql_days_last="days";
$mysql_hours_last="hours";
$mysql_min_last="minutes";
$mysql_sec_last="seconds";
$ago="ago"; // reads in context "some days ago"
$backup="Backup";
$restore="Restore";
$optimize="Optimize";
$optimize_tables="Optimizing tables";
$opt_table_name="Table name";
$opt_table_check="Table check";
$opt_table_optimize="Table optimize";
$opt_table_msg="Type of message";
$opt_start_msg="Start check and optimize of all DB tables";
$fullback_hint_msg="If you have multiple databases, please choose the <b>partial</b> backup method";
$restore_last_fullback="Restore last <b>full</b> backup:";
$restore_last_partback="Restore last <b>partial</b> backup:";
$restore_error="ERROR while opening backup file. File not found!";
$restore_success="successfully restored!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>access denied</H1> you have no permission to access this directory');
define('STR_BACK',	'�����');
define('STR_LESS',	'less');
define('STR_MORE',	'more');
define('STR_LINES',	'lines');
define('STR_FUNCTIONLIST', 'Function list');
define('STR_EDIT',	'edit');
define('STR_VIEW',	'view');
define('STR_RENAME',	'rename');
define('STR_MKDIR',		'mkdir');
define('STR_DELETE',	'delete');
define('STR_BOTTOM',	'bottom');
define('STR_TOP',		'top');
define('STR_FILENAME',	   'filename');
define('STR_FILESIZE',	   'size');
define('STR_LASTMODIFIED', 'last modified');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> item(s)');
define('STR_CREATEDIRLEGEND', 'create a directory');
define('STR_CREATEDIR',       'name of directory to create:');
define('STR_CREATEDIRBUTTON', 'create directory');
define('STR_RENAMELEGEND',       'rename');
define('STR_RENAMEENTERNEWNAME', 'enter new name for %s:');
define('STR_RENAMEBUTTON',       'rename');
define('STR_ERROR_DIR','Error: could not read directory contents');
define('STR_AUDIO',            'audio');
define('STR_COMPRESSED',       'compressed');
define('STR_EXECUTABLE',       'executable');
define('STR_IMAGE',            'image');
define('STR_SOURCE_CODE',      'source code');
define('STR_TEXT_OR_DOCUMENT', 'text or document');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            'video');
define('STR_DIRECTORY',        'directory');
define('STR_PARENT_DIRECTORY', 'parent directory');
define('STR_EDITOR_SAVE',      'save file');
define('STR_EDITOR_SAVE_ERROR','the file <I>%s</I> is not writable or does not exist');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', 'Quick Navigator');
define('STR_FILE_UPLOAD_DRIVES', 'Drives:');
define('STR_FILE_UPLOAD', 'upload');
define('STR_FILE_UPLOAD_MAIN', 'uploader');
define('STR_FILE_UPLOAD_DISABLED', 'sorry, file upload is disabled in php.ini');
define('STR_FILE_UPLOAD_DESC','Choose files you would like to upload. Choose desired action to accomplish upon succesful upload.');
define('STR_FILE_UPLOAD_FILE','File');
define('STR_FILE_UPLOAD_TARGET','Upload file(s) to');
define('STR_FILE_UPLOAD_ACTION','when upload is complete do:');
define('STR_FILE_UPLOAD_NOTHING','do nothing');
define('STR_FILE_UPLOAD_DROPFILE','delete the uploaded file when the selected action is finished');
define('STR_FILE_UPLOAD_MAXFILESIZE','Allowed filesize (each file!) maximum currently set in php.ini is');
define('STR_FILE_UPLOAD_ERROR',        'Error: Unable to move file %s to directory %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'Error: Unable to switch (chdir) to %s directory. File being processed: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'Error: Unable to delete %s after processing.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'Error: The uploaded file %s exceeds the upload_max_filesize directive in php.ini - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','Error: size of uploaded file %s exceeds the HTML FORM settings');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'Error: The uploaded file %s was only partially uploaded');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="���������� ���"; /* (img_view.php) -- new [panorama view] href  */
$close_win="������� ����"; /* (various files) -- javascript close window */
$nav_hint="Please use mouse or arrow keys to navigate!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama view of image"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="checking if PHP open basedir is set..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="���"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Bad bad bad, you configured PHP to make use of \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA will use GD lib to create thumbs, however expect some problems<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ If possible, please unset \"open_basedir\" in PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ If possible, please unset \"open_basedir\" in PHP.ini or recompile PHP with GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract an *.tar.gz archive (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract an *.tar.bz2 archive (UNIX)"; /* (index.php) --  */
$extract_gz="unzip with gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip with unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip with pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Group added !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Group modified !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Group deleted !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! Category modified !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! Category deleted !"; /* (admin.php) -- redirect message */
$href_groups="Click to add or modify groups"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="WARNING: You have to login with your new account !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="back to folder management"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="back to user management"; /* (build_user_conf.php) -- navi href  */
$header_new_group="Add new group"; /* (build_user_conf.php) -- table header */
$header_groupname="Groupname"; /* (build_user_conf.php) -- table header */
$button_addgroup="Add group"; /* (build_user_conf.php) -- submit button */
$header_mod_group="Modify/delete groups"; /* (build_user_conf.php) -- table header */
$mod_group_header="Modify group"; /* (build_user_conf.php) -- table header */
$del_group_header="Delete group"; /* (build_user_conf.php) -- table header */
$search_to_short="Search string to short, must be at least 2 characters long!"; /* (search.php) --  */
$general_thumb_size="Change thumbnail size"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- set max thumbnail size in px"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="Enable/disable thumbnail border"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- enable to add border to thumbnails"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="Choose thumbnail size"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="Border settings"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="enable image border"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="disable image border"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Bad bad bad, you configured PHP to make use of \"safe_mode\" restrictions!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ If possible, please unset \"safe_mode\" in PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="Allow/deny anonymous posts"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- anonymous is allowed to add comments"; /* (build_general_conf.php) --  */
$stats_over_comment="Comments posted"; /* (build_stats.php) --  */
$top10_downs_href="show top 10 downloads"; /* (build_stats.php) --  */
$top10_views_href="show top 10 views"; /* (build_stats.php) --  */
$stats_head_downs="Top 10 downloads"; /* (build_stats.php) --  */
$no_downloads="Number of downloads"; /* (build_stats.php) --  */
$general_anon_download="Enable/disable anonymous downloads"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- show/hide download link for images"; /* (build_general_config.php) --  */
$seach_multiple_select_use="����� ���������� � �������"; /* (search.php) --  */
$search_and="�"; /* (search.php) --  */
$search_or="���"; /* (search.php) --  */
$search_categories="���������"; /* (search.php) --  */
$search_with_available_filters="�� ���������� ���������"; /* (search.php) --  */
$search_select_album="����� �������"; /* (search.php) --  */
$search_date_from_to="���� � / ��"; /* (search.php) --  */
$search_combination_and_or="� ���������� � � � ���"; /* (search.php) --  */
$new_user_new_password="New password"; /* (build_user_conf.php) --  */
$new_user_error4="Username can't be empty"; /* (admin.php) --  */
$new_user_error5="Username already exists"; /* (admin.php) --  */
$new_user_error1="Old Password isn't correct"; /* (admin.php) --  */
$new_user_error2="New password doesn't match with retyped password"; /* (admin.php) --  */
$new_user_error3="Email isn't correct"; /* (admin.php) --  */
$new_user_old_password="Old Password"; /* (admin.php) --  */
$new_user_retype_password="Retype new Password"; /* (admin.php) --  */
$select_db_header="Please select Database type"; /* (sec_stage_install.php) --  */
$mysql_info="Choose this for accessing a MySQL database"; /* (sec_stage_install.php) --  */
$postgres_info="Choose this for accessing a PostgreSQL database. Please see"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="Autologin"; /* (toc.php) --  */
$login_autologin_user="Autologin Userinfo"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="Enable/disable autologin"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- activate the option to use the autologin"; /* (build_general_conf.php) --  */
$general_timer="Enable/disable timer"; /* (build_general_conf.php) --  */
$general_timer_info="<-- activate the output of the parsetime in the footer"; /* (build_general_conf.php) --  */
$login_autlogin="���������"; /* (login.php) --  */
$lostpw_title="��������� ������"; /* (login.php) --  */
$lostpw_question="����� ���� ������?"; /* (login.php) --  */
$lostpw_type_user_or_email="����� ���� ��� ��� e-mail"; /* (login.php) --  */
$lostpw_email1="Somebody has made use of the lost password function. If it wasn't you, just ignore this message and nothing will happen with your password. If it was you, put this code in the demanded field:"; /* (login.php) --  */
$lostpw_email1_part2="(Remember: This is NOT your new password!)"; /* (login.php) --  */
$lostpw_email1_part3="Your Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="Error: E-Mail couldn't be sent. Contact the Administrator."; /* (login.php) --  */
$lostpw_error_nothing_found="Sorry, no username or password has been found that match your criterias."; /* (login.php) --  */
$lostpw_email_sent="E-Mail has been sent to you."; /* (login.php) --  */
$lostpw_should_receive="You should receive it within a minute. Enter the code from the email in this field:"; /* (login.php) --  */
$lostpw_go_back="�����"; /* (login.php) --  */
$lostpw_email2="Password successfully changed. Your new password is:"; /* (login.php) --  */
$lostpw_email2_part2="You can change it later by using the \"my settings\" link."; /* (login.php) --  */
$lostpw_new_password="New Password"; /* (login.php) --  */
$lostpw_successfully_changed="Password successfully changed, you should receive an email within a minute with the new password."; /* (login.php) --  */
$lostpw_error_wrong_code="Sorry, that isn't correct."; /* (login.php) --  */
$lostpw_enter_correct_code="Enter the correct code from the email in this field:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA Plugins"; /* (admin.php) --  */
$lang_plugins['watermark']="Watermark"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="Benchmark"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB Management"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Active Plugins"; /* (admin.php) --  */
$lang_plugins['enabled']="Enabled"; /* (plugins.php) --  */
$lang_plugins['disabled']="Disabled"; /* (plugins.php) --  */
$lang_plugins['update']="Update"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="Plugins updated"; /* (admin.php, plugins.php) --  */
$wm_wm_man="Watermark Management "; /* (watermark.php) --  */
$wm_disable="Disable Watermark "; /* (watermark.php) --  */
$wm_change_example_img="Change example image "; /* (watermark.php) --  */
$wm_no_input_files_found="No input files found "; /* (watermark.php) --  */
$wm_image_quality="Image quality (only for preview) "; /* (watermark.php) --  */
$wm_enable_text="Enable: Text "; /* (watermark.php) --  */
$wm_text="Text "; /* (watermark.php) --  */
$wm_font="Font "; /* (watermark.php) --  */
$wm_fontsize="Fontsize "; /* (watermark.php) --  */
$wm_fontcolor="Fontcolor "; /* (watermark.php) --  */
$wm_align="Align "; /* (watermark.php) --  */
$wm_pos_hor="Position horizontal "; /* (watermark.php) --  */
$wm_pos_ver="Position vertical "; /* (watermark.php) --  */
$wm_height="Textfield height "; /* (watermark.php) --  */
$wm_width="Textfield width "; /* (watermark.php) --  */
$wm_shadow_size="Shadow size "; /* (watermark.php) --  */
$wm_shadow_color="Shadow color "; /* (watermark.php) --  */
$wm_enable_image="Enable: Image"; /* (watermark.php) --  */
$wm_available_images="��������� �����������"; /* (watermark.php) --  */
$wm_no_images_found="No images found"; /* (watermark.php) --  */
$wm_dissolve="Dissolve"; /* (watermark.php) --  */
$wm_preview="Preview"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="Enable shadow"; /* (watermark.php) --  */
$wm_enable_rectangle="Enable rectangle"; /* (watermark.php) --  */
$wm_rectangle_color="Color"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Enable extended shadow"; /* (watermark.php) --  */
$wm_status="Status"; /* (watermark.php) --  */
$wm_enabled="enabled"; /* (watermark.php) --  */
$wm_disabled="disabled"; /* (watermark.php) --  */
$wm_restore_to="Restore to"; /* (watermark.php) --  */
$wm_inital_settings="initial settings"; /* (watermark.php) --  */
$wm_add_more_examples="You can add more example images in your linpha directory in the folder"; /* (watermark.php) --  */
$wm_example="Example"; /* (watermark.php) --  */
$wm_shadow_fontsize="Shadow fontsize"; /* (watermark.php) --  */
$wm_settings_for_both="Settings for image and text"; /* (watermark.php) --  */
$wm_center="center"; /* (watermark.php) --  */
$wm_north="top"; /* (watermark.php) --  */
$wm_northeast="topright"; /* (watermark.php) --  */
$wm_northwest="topleft"; /* (watermark.php) --  */
$wm_south="bottom"; /* (watermark.php) --  */
$wm_southeast="bottomright"; /* (watermark.php) --  */
$wm_southwest="bottomleft"; /* (watermark.php) --  */
$wm_east="right"; /* (watermark.php) --  */
$wm_west="left"; /* (watermark.php) --  */
$bm_file_err="Error, no file specified";
$bm_var_err="Error, please check input variables";
$bm_notfound_err="Error, file not found";
$bm_noimg_err="Error, file is not an image";
$bm_tmpfile_err="Error, while creating temporary image file";
$bm_tmpfile_warn="Warning: Temporary image cannot be deleted";
$bm_time_total="Total execution time: ";
$bm_img_sec="Images per second: ";
$bm_avg_img="Average time for each image (mouse over to update image): ";
$bm_qual_size="Quality/Size";
$bm_quality="Quality: ";
$bm_height="Height: ";
$bm_width="Width: ";
$bm_size="Image size: ";
$bm_create = "Creating benchmark with conversion utility";
$bm_interval = "interval";
$bm_calc = "Calculating";
$bm_img = "Images";
$bm_inloop="Running loop";
$bm_qual_range="Quality range: ";
$bm_size_range="Size range (only height): ";
$bm_repeats="Repeats: ";
$bm_con_util="Please select conversion utility: ";
$bm_current_settings="Current settings"; /* (benchmark.php) --  */
$bm_preview="Preview"; /* (benchmark.php) --  */
$bm_save_settings="Save this settings"; /* (benchmark.php) --  */
$wm_addexamples="Watermark: Add more example images"; /* (watermark.php) --  */
$wm_addimg="Watermark: Add more watermark images"; /* (watermark.php) --  */
$wm_addfont="Watermark: Add more fonts"; /* (watermark.php) --  */
$wm_colorsetting="Watermark: Color settings"; /* (watermark.php) --  */
$comment_hint="������� �� ������ ��� ������� ����������� ��� ��������� �������"; /* (linpha_comments.php) --  */
$comment_end="���������� ������ ���"; /* (linpha_comments.php) --  */
$comment_beginning="no previous image in album"; /* (linpha_comments.php) --  */
$comment_back="back to image view"; /* (linpha_comments.php) --  */
$comment_edit_img="���������/<br>�����������"; /* (linpha_comments.php) --  */
$comment_change_img_details="����� ������������ �����������"; /* (linpha_comments.php) --  */
$comment_last_comments="��������� �����������"; /* (linpha_comments.php) --  */
$comment_comment_by="comment by"; /* (linpha_comments.php) --  */
$category_delete_warning="Warning: Categories already assigned to images get lost"; /* (build_category_conf.php) --  */
$pass_2_short="ERROR, password must be at least 3 characters long..."; /* (various) --  */
$album_edit="Edit album comment"; /* (linpha_comments.php) --  */
$album_details="Album details"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Watermarks aren NOT visible for registered users!. You MUST log out first (be guest) to see your watermarks while browsing LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="Guestbook"; /* (admin.php) --  */
$print_low_quality="Normal quality"; /* (printing_view.php) --  */
$print_high_quality="High quality (very slow!)"; /* (printing_view.php) --  */
$gb_title="LinPHA Guestbook";
$gb_sign="LinPHA Guestbook! Add new Message";
$gb_from="Location";
$gb_from_no="No Location given";
$gb_pages="page(s)";
$gb_messages="messages in guestbook";
$gb_msg_error="Sorry, Name and Comment mustn't be emtpy";
$gb_new_msg="Add new message";
$gb_name="Name";
$gb_email="Email";
$gb_hp="Homepage";
$gb_country="Where you from (Country)";
$gb_header="LinPHA Guestbook";
$gb_opts="Guestbook Options";
$gb_rows="Number of postings per page";
$gb_anon="Allow anonymous guestbook postings";
$gb_order="Order postings";
$wm_resize="Scale watermark always to X% of image size"; /* (watermark.php) --  */
$wm_help_and_descr="Help and description"; /* (watermark.php) --  */
$folder_remove_hint="If all went well, you should now remove the /install subfolder (security)..."; /* (forth_stage_install.php) --  */
$add_alb_com="�������� ����������� � �������"; /* (img_view.php) --  */
$add_img_com="�������� ����������� � �����������"; /* (img_view.php) --  */
$album_com="��������� �����������"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML Formatting Tags"; /* (various) --  */
$stat_cache_elements="Cached elements"; /* (build_stats.php) --  */
$stat_cache_first="New cached elements"; /* (build_stats.php) --  */
$stat_cache_hits="Cache hits"; /* (build_stats.php) --  */
$stat_cache_hits_max="Max hits (single image)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="Average cache hits (all images)"; /* (build_stats.php) --  */
$stat_cache_size="Cache size"; /* (build_stats.php) --  */
$stat_cache_convert_time="Cache speedup time"; /* (build_stats.php) --  */
$stat_cache_size="Cache size used"; /* (build_stats.php) --  */
$cache_options="Image Cache Options";
$cache_max_size="Max cache size in bytes (0 = unlimited)";
$path_2_cache="Cache directory (default sql/cache)";
$cache_optimize="Optimize/cleanup image cache data"; 
$cache_maintain="Image Cache Maintainance";
$cache_opt_msg="!! Cache optimized !!";
$lang_plugins['cache']="Image Cache"; /* () --  */
$stat_cache_title="Image Cache Stats"; /* (cache.php) --  */
$bm_saved="Settings saved"; /* (admin.php) --  */
$cache_optimize_by_size="Delete all cache elements where size (in kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Delete all cache elements not used for days:"; /* (cache.php) --  */
$elements_rem="Removed elements"; /* (cache.php) --  */
$general_anon_album_downs="Allow/deny anonymous zip album downloads"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- anonymous is allowed to download zipped albums"; /* (build_general_conf.php) --  */
$general_download_speed="Set download speed limit in kb/sec (0=unlimited)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- download speed limit for album downloads"; /* (build_general_conf.php) --  */
$general_navigation="Enable/disable navigation bar"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- activate the navigation bar on the thumbnails pages"; /* (build_general_conf.php) --  */
$toc_navigation="Enable/disable navigation bar"; /* (doc/) --  */
$toc_zip_download="Enable/disable anonymous album downloads"; /* (doc/) --  */
$toc_albdownlimit="Download speed limit"; /* (doc/) --  */
$choose_zips_msg="Select images to download"; /* (build_zip_view.php) --  */
$zip_button="Download archive"; /* (build_zip_view.php) --  */
$type_of_archive="Select type of archive"; /* (build_zip_view.php) --  */
$create_tar="create tar archive"; /* (build_zip_view.php) --  */
$create_tgz="create tar.gz archive"; /* (build_zip_view.php) --  */
$create_bz2="create tar.bz2 archive"; /* (build_zip_view.php) --  */
$create_zip="create zip archive"; /* (build_zip_view.php) --  */
$create_rar="create rar archive"; /* (build_zip_view.php) --  */
$menumsg['advanced']="���������� �����"; /* () --  */
$menumsg['printmode']="����� ������"; /* () --  */
$menumsg['printprobs']="������ ���������?"; /* () --  */
$menumsg['downloadmode']="����� ����������"; /* () --  */
$menumsg['mailmode']="����� �����"; /* () --  */
$menumsg['addcomment']="�������� �����������"; /* () --  */
$menumsg['delcomment']="������� �����������"; /* () --  */
$menumsg['editcomment']="������������� �����������"; /* () --  */
$album_up="updated"; /* (album_comment.php) --  */
$album_ins="inserted"; /* (album_comment.php) --  */
$mail_link="mailing list"; /* (header.php) --  */
$mail_title="LinPHA Mailing List"; /* (mail.php) --  */
$mail_send_link="��������� ������"; /* (mail.php) --  */
$mail_return_address="Return address:"; /* (mail.php) --  */
$mail_block="Mail Block Size:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="Mailing List Options"; /* (mail.php) --  */
$mail_go_back="�����"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail Message"; /* (mail_form.php) --  */
$mail_form_subject="Subject:"; /* (mail_form.php) --  */
$mail_form_msg="Message:"; /* (mail_form.php) --  */
$mail_total_sent="Total e-mail(s) sent:"; /* (mail_form.php) --  */
$mail_subscribe="Subscribe"; /* (mail_users.php) --  */
$mail_unsubscribe="Unsubscribe"; /* (mail_users.php) --  */
$mail_activate="Activate"; /* (mail_users.php) --  */
$mail_user_name="Your Name:"; /* (mail_users.php) --  */
$mail_user_email="Your E-Mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Confirm E-Mail:"; /* (mail_users.php) --  */
$mail_user_code="Activation Code:"; /* (mail_users.php) --  */
$mail_user_code_sent="An e-mail with the activation code has been sent to your e-mail account."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing List Activation"; /* (mail_users.php) --  */
$mail_user_activated="Your account has been activated!"; /* (mail_users.php) --  */
$mail_user_activate_error="There was an error in activating your account!"; /* (mail_users.php) --  */
$mail_user_email_not_found="does NOT exist in our mailing list."; /* (mail_users.php) --  */
$mail_user_remove_ok="removed from our mailing list."; /* (mail_users.php) --  */
$mail_user_remove_fail="could not be removed from our mailing list."; /* (mail_users.php) --  */
$mail_user_empty="Fill in all fields."; /* () --  */
$mail_user_no_match="E-Mails don't match."; /* () --  */
$mail_user_exists="E-Mail already exists in our list."; /* (mail_users.php) --  */
$lang_plugins['mail']="Mailing List"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="Hint"; /* (mail.php) --  */
$mail_user_permission="All users in the group 'mail' are able to send messages to the mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Current subscribers"; /* (mail.php) --  */
$mail_name="���"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="���� ��������"; /* (mail.php) --  */
$mail_active="��������"; /* (mail.php) --  */
$mail_sent_to="Email ��������� ��"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="Miscellaneous Help"; /* () --  */
$mail_create_group="(You have to create the group 'mail' yourself.)"; /* (mail.php) --  */
$alb_th="����������� � �������"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '���','2' => '���','3' => '���','4' => '���','5' => '���','6' => '���','7' => '���','8' => '���','9' => '���','10' => '���','11' => '���','12' => '���'); /* abrevations of months */
$arr_month_long = Array('1' => '������','2' => '�������','3' => '����','4' => '������','5' => '���','6' => '����','7' => '����','8' => '������','9' => '��������','10' => '�������','11' => '������','12' => '�������'); /* months */
$arr_day_short = Array('���','���','���','���','���','���','���'); /* abrevations of weekdays */
$arr_day_long = Array('����������','�����������','�������','�����','�������','�������','�������'); /* weekdays */
$layout="Layout";
$features="Features";
$perform="Performance";
$general_comment_in_subfolder = 'Enable/disable album comments in subfolder';
$general_comment_in_subfolder_info = '<-- show album comments in subfolder preview';
$general_default_date_format = 'Default date format';
$general_default_date_format_info = '<- example: 06/28/2004, see info for details';
$general_default_time_format = 'Default time format';
$general_default_time_format_info = '<- example: 01:45:50 PM, see info for details';
$general_new_images_folder = 'Virtual "New images" folder';
$general_new_images_folder_info = '<- shows a virtual folder with new added images';
$general_new_images_folder_age = '"New images" folder age in days';
$general_new_images_folder_age_info = '<- max age of images to be displayed';
$control_key="Ctrl"; /* (various) --  */
$search_date="����"; /* (search.php) -- reads: date from to... */
$search_from="�"; /* (search.php) -- reads: date from to... */
$search_to="��"; /* (search.php) -- reads: date from to... */
$start_slide="��������� �������"; /* (img_view.php) --  */
$pass_msg="You have to login with your new password"; /* (build_my_settings.php) --  */
$str_new_images = "����� �����������"; /* (new_images.php) -- */
$str_order_by = "���������� ��"; /* (new_images.php) -- */
$str_age = "�������"; /* (new_images.php) -- */
$str_album = "������"; /* (new_images.php) -- */
$str_in_album = "� �������"; /* (new_images.php) -- */
$str_img_newer_than = "all images newer than %s days"; /* (new_images.php) -- */
$timespanfmt = "%s days, %s hours, %s minutes and %s seconds"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Delete all cached images with watermarks"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Change permission of:"; /* (plugins/ftp/index.php) --  */
$str_read="Read"; /* (plugins/ftp/index.php) --  */
$str_write="Write"; /* (plugins/ftp/index.php) --  */
$str_execute="Execute"; /* (plugins/ftp/index.php) --  */
$str_owner="Owner"; /* () --  */
$str_group="Group"; /* (plugins/ftp/index.php) --  */
$str_all_other="All others"; /* (plugins/ftp/index.php) --  */
$str_copy="copy"; /* (plugins/ftp/index.php) --  */
$str_copy_to="Copy %s to:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="Rename %s to:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="Image rotation disabled"; /* (img_view.php) --  */
$str_no_write_perm="No write permissions"; /* (img_view.php) --  */
$str_new_images_in_these_folders="New images found in the following albums:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="If you want to reinstall LinPHA, you first have to delete the file ./sql/db_connect.php! (You can do this with the integrated filemanager in the admin section)"; /* (install_header.php) --  */
$str_Version="Version"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Error: No supported database activated in your PHP configuration"; /* (sec_stage_install.php) --  */
$str_extract_with="When upload is completed, extract archive with"; /* (ftp/index.php) --  */
$str_files_to_upload="Files to upload"; /* (ftp/index.php) --  */
$posix_check_msg="checking for POSIX support..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Found POSIX support in your PHP installation. All functions of the integrated file management tool are activated."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="No POSIX support found in your PHP installation. Unable to use some functions of the integrated file management tool (Especially changing permissions of files)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Error: Settings could not be saved. Make sure your the path is spelled correctly and you have permissions to write into that directory."; /* (admin.php) --  */
$str_create_archive="create %s archiv"; /* (build_zip_view.php) --  */
$str_download_error="ERROR! The download couldn't be started for some reasons, sorry"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Search all images taken %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="If it takes too long to load, try a lower resolution:"; /* (image_panorama_view.php) --  */
$str_current_resolution="current resolution:"; /* (image_panorama_view.php) --  */
$href_group_conf="Group Management"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="Tools:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="Plugin"; /* (plugin.php) --  */
$choose_mail_msg="Select images to mail"; /* () --  */
$new_user_full_name="Full name"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="Enable/Disable prev/next mini images as full thumbnails"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- enable to show buttons as full thumbnails in image viewer"; /* (build_general_conf.php) --  */
$href_category_conf="Category Management"; /* (admin.php) --  */
$cat_private="Private"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Add more apps"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="checking for valid session settings..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session settings not correctly set. You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="All session settings correctly set. LinPHA should work properly."; /* (sec_stage_install.php) --  */
$new_user_error6="Error: You are not using your own account?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="Last viewed page:"; /* (index.php) --  */
$str_select_row="Select row"; /* (basket.php) --  */
$str_select="Select"; /* (basket.php) --  */
$str_new_window="new window"; /* (basket.php) --  */
$general_anon_mail_mode="Allow/deny mail mode for anonymous users"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- anonymous users are allowed to mail images"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mail mode: Max mail size"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- max size in bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="Thumbnail View"; /* (build_general_conf.php) --  */
$general_image_view="Image View"; /* (build_general_conf.php) --  */
$general_ado_msg="Enable/disable caching of SQL queries"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- enable if slow SQL server or no PHP accelerator is used"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL query caching time:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- set max caching time in minutes"; /* (build_general_conf.php) --  */
$general_ado_path_msg="Path to SQL query cache:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- where to store query cache data"; /* (build_general_conf.php) --  */
$str_other_features="Other features"; /* (build_general_conf.php) --  */
$str_language_settings="Language settings"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Sql query caching"; /* (build_general_conf.php) --  */
$general_thumb_border="Thumbnail border size in px"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- Set to 0 to disable, default: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="Thumbnail border color"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- see info for details"; /* (build_general_conf.php) --  */
$str_recipient="Recipient"; /* (basket_mail.php) --  */
$str_sender="Sender"; /* (basket_mail.php) --  */
$str_mail_too_big="Error: The E-Mail is too big.<br /><br />Allowed size: %sBytes. Your selected images use %sBytes.<br /><br />Remove some images or use the download zipped albums feature!"; /* (basket_mail.php) --  */
$str_size_of_email="Size of E-Mail: %s."; /* (basket_mail.php) --  */
$str_new_search="New search"; /* (search.php) --  */
$str_edit_search="Edit search"; /* (search.php) --  */
$str_View="View"; /* (img_view.class.php) --  */
$str_normal="normal"; /* (img_view.class.php) --  */
$str_detail="detail"; /* (img_view.class.php) --  */
$search_result_empty="Sorry, Your search did not match any content"; /* (search.php) --  */
$str_chars_entered="characters entered"; /* (img_view.class.php) --  */
$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="Enable/Disable random images in index page"; /* () --  */
$general_random_image_info="<-- enable to have random images in index.php"; /* () --  */
$general_random_image_size="Max size of the random image in index.php"; /* () --  */
$general_random_image_size_info="<-- set image max size in pixel  "; /* () --  */
$str_edit_watermark="Edit watermark"; /* (watermark.php) --  */
$str_edit_permissions="Edit watermark permissions"; /* () --  */
$str_Everyone="Everone"; /* () --  */
$str_Nobody="Nobody"; /* () --  */
$str_only_logged_in_users=" Logged in users only"; /* () --  */
$str_except_these_groups="except these groups:"; /* () --  */
$str_additionally_groups="but for these groups:"; /* () --  */
$str_allow_these_persons="No watermarks for these users/groups"; /* () --  */
$str_album_based_permissions="Album based permissions"; /* () --  */
$str_all_albums_but_without_these="All albums, except these:"; /* () --  */
$str_only_on_these_albums="Only on these albums:"; /* () --  */
$str_allow_these_persons="Allow these persons"; /* (db_api.php) --  */
$str_no_watermarks="No watermarks for these persons"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="The default setting is 'Logged in users only' AND 'All albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA will probably NOT work correctly"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Try to create thumbnails for videos"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Turn off if you encounter problems with creating thumbnails for videos"; /* (build_generl_config.php) --  */
$general_update_notice="Enable/disable LinPHA update check"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- enable to check once a week for available updates"; /* (build_general_config.php) --  */
$directories="Directories"; /* (build_thumbnail_conf.php) --  */
$do_nothing="Do Nothing"; /* (build_thumbnail_conf.php) --  */
$create="Create"; /* (build_thumbnail_conf.php) --  */
$recreate="Recreate"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF info disabled in config"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC info disabled in config"; /* (build_thumbnail_conf.php) --  */
$silent_mode="Silent Mode (e.g run silent, do not print debug info)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="Thumbnails"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA Logger"; /* (log.php) --  */
$log_options="LinPHA Logger Options"; /* (log.php) --  */
$log_method_label="Log to:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="User Login"; /* (log.php) --  */
$str_log_events['thumbnail']="Thumbnail Creation"; /* (log.php) --  */
$str_log_events['update']="Update"; /* (log.php) --  */
$str_log_events['db']="DataBase"; /* (log.php) --  */
$str_log_events['filemanager']="Filemanager"; /* (log.php) --  */
$str_events="Events"; /* (log.php) --  */
$find_duplicates="Find duplicates in image collection"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Not enabled in PHP config (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Warning"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="Thumbnails will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="All Statistics will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="Random index image"; /* (build_general_conf.php) --  */
$str_download_images="Download single images"; /* (build_perms.php) --  */
$str_add_image_comments="Add image comments"; /* (build_perms.php) --  */
$str_add_image_description="Add image descriptions and categories"; /* (build_perms.php) --  */
$str_mail_add_all_users="Add all linpha users to the mailing list"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Note:</b> You don't have to upload your images through this form. You can use whatever you want (ftp,scp,nfs,local,...). Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Blacklist options (SPAM blocking)"; /* (varios) --  */
$blacklist_onoff="Enable message filtering"; /* (varios) --  */
$blacklist_keywords="Words to block:"; /* (varios) --  */
$str_entire_path="Entire path"; /* (search.php) --  */
$mail_format="Mail format:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (images attached)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (images inline)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="statistics"; /* (various) --  */
$stats_total_images="Total images"; /* () --  */
$stats_total_img_views="Total image views"; /* () --  */
$stats_total_img_downs="Total image downloads"; /* () --  */
$stats_total_img_downs="Total image downloads"; /* () --  */
$stats_total_img_selected="Total selected image views"; /* () --  */
$stats_total_downs_selected="Total selected image downloads"; /* () --  */
$stats_downloads="Downloads"; /* () --  */
$stats_downl_size="Downloads size"; /* () --  */
$stats_coments_total="Total comments"; /* () --  */
$stats_coments_sel="Comments selected"; /* () --  */
$str_log_events['guestbook']="Guestbook"; /* (log.php) --  */
$stats_realtime="Enable/disable realtime Statistics"; /* (build_stats.php) --  */
$stats_realtime_info="<-- display all Statistics information realtime (no caching)"; /* (build_stats.php) --  */
$stats_cache_time="Statistics cache time"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="User"; /* (stats_view.php) --  */
$stats_image_info="Image"; /* (stats_view.php) --  */
$stats_comments_info="Comments"; /* (stats_view.php) --  */
$stats_general_info="General"; /* (stats_view.php) --  */
$spam_blocked="Blocked SPAM attacks"; /* () --  */
$mail_current_status="Current Status"; /* (mailing.php) --  */
$mail_sending_to="Sending to: "; /* (mailing.php) --  */
$mail_counters="Counters (Success/Fail/Total)"; /* (mailing.php) --  */
$mail_send_fail="Send FAIL: "; /* (mailing.php) --  */
$mail_send_ok="Send OK: "; /* (mailing.php) --  */
$mail_all_complete="All Completed!"; /* (mailing.php) --  */
$mail_failed_list="List of failed addresses"; /* (mailing.php) --  */
$mail_ok_list="List of sent addresses"; /* (mailing.php) --  */
$mail_mailer_error=" - Mailer Error: "; /* (mailing.php) --  */
$str_log_events['comments']="Comment Entry"; /* (log.php) --  */
$str_edit_members="Edit members"; /* (build_user.conf.php) --  */
$edit_groups="Edit groups "; /* (build_user.conf.php) --  */
$str_basket="Basket"; /* (various) --  */
$lang_plugins['log']="Logger"; /* (admin.php) --  */
$rss_created="XML RSS file generated successfully"; /* () --  */
$rss_not_created="RSS has not been built, because no change has been found"; /* () --  */
$rss_settings_saved="RSS settings saved"; /* () --  */
$lang_plugins['stats']="Statistics"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="No Watermarks"; /* () --  */
$str_with_watermarks="With Watermarks"; /* () --  */
$str_create_cache_img="Create Cached Images"; /* () --  */
$str_reset_button="Reset"; /* () --  */
$cache_stats="Image Cache Stats"; /* () --  */
$drop_duplicates="Drop duplicates"; /* () --  */
$general_exif_rotate="Enable/Disable image auto rotation "; /* () --  */
$general_exif_rotate_info="<-- enable/disable image auto rotation by EXIF data"; /* () --  */
$lang_plugins['maps']="Google/Yahoo Maps"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo Maps Setup"; /* () -- maps plugin */
$maps_setup_yahoo_id="Your Yahoo Application ID"; /* (maps plugin) --  */
$maps_setup_google_key="Your Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="Sorry - This Plugin requires at least PHP Version 4.2.0 or newer. Please update PHP"; /* (maps plugin) --  */
$maps_select_type="Please sleect Map Type:"; /* (maps plugin) --  */
$maps_select_type_info="<-- select whether to use Google or Yahoo maps"; /* (maps plugin) --  */
$maps_select_display_type="Please choose Map display Type:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- show Hybrid, Sat or Regular Map"; /* (maps plugin) --  */
$maps_zoom_level="Default Zoom Level: 1-16 (Default 16, World Map)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- set default zoom level for Maps"; /* (maps plugin) --  */
$maps_zoom_location="Default location to center in view"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- default location to center in Map"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google Map controls size"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- adjust Google Maps slider and pan size"; /* (maps plugin) --  */
$maps_str="Maps"; /* (maps plugin) --  */
$map_type_ctrl="Enable Map Type Controls"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- show Map type controls in Map"; /* (maps plugin) --  */
$map_slide_ctrl="Enable Map Slide Controls"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- show Map slide controls in Map"; /* (maps plugin) --  */
$map_pan_ctrl="Enable Map Pan Controls"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- show Map pan controls in Map"; /* (maps plugin) --  */
$map_auto_popup="Enable Marker Auto Popup"; /* (maps plugin) --  */
$map_auto_popup_info="<-- auto show Marker Popups on mousover"; /* (maps plugin) --  */
$map_album_add="Add Album"; /* (maps plugin) --  */
$map_marker_del="Delete Marker"; /* (maps plugin) --  */
$map_search_location="Search/Add new Location"; /* (maps plugin) --  */
$map_location_here="Your Location Here"; /* (maps plugin) --  */
$map_search_loc_button="Search Location"; /* (maps plugin) --  */
$map_add_location="Add new Location"; /* (maps plugin) --  */
$map_assign_album="Assign Album to Map Location"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>