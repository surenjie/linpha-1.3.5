<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */
/*
Author   : Lee YeeKang ���1d
Date     : 20030922 v0.3
language : zh-tw , taiwan-big5

Modify   : Lu YaKu ��
E-mail   : bell@bell.idv.tw
Date     : 20040703 for linpha V0.9.4
Date	 : 20041029 for linpha V1.0BETA2
*/
/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="�ڪ���ï��";

/* alerts */
$alert_fopen="��~! �ɮ׵L�k�}��...";
$printing_probs="�C�L��~";
$printing_probs_msg="�T��C�L�I�Ь�";

/* global messages */
$subfolders="�l��Ƨ�";
$img_th="�ۤ�";
$in_th="���ݦb"; /* used for the photos in $foldername */
$alb_th="�ۥ����ݦb";
$thumb_hint_msg="�i�@�B�˵�";
$latest_photo="�̷s��";
$view_at="�w��ѪR��";
$close_button="��";
$help="����";
$misc_help="����";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="�w��Ө� �׵�t��";
$welc_text="�١A�o�O &quot;The Linux Photo Archive&quot; �������A²���׵�(LinPHA)�C�ݰ_�ӱz��G�O�����Ұ� �׵�A�]���аȥ��i��w��.";
$welc_hint="<b>Before you continue:</b>";
$welc_hint1="1. �إߤ��\��g�J��ƪ���Ƨ�&quot;<b>linpha/sql</b>&quot;! (�Ҧp chmod 777 sql)";
$next_button="�U�@�B"; /* used as left menu header in all 4 stages */
$inst_msg="�w���׵�"; /* used as left menu header in all 4 stages */
$inst_status_1="�п�ܻy�����I��&quot;�U�@�B&quot;";
$inst_status_step1="�B�J 1 �@�� 4 �B�J";

/* sec_stage_install (page 2) */
$inst_access_msg="�]�w��Ʈw�s��覡";
$inst_full_access_msg="<b>�O�� !</b><br> �گ৹���s�� MySQL ��Ʈw�A�گ�إ߷s��<br> ��Ʈw�ΨϥΪ̡C�Ϊ̻��G�o�O�ڪ��D��I";
$inst_limited_access_msg="<b>���� !</b><br> �ڶȯ঳���צs��<br> MySQL ��Ʈw�C �ڪ� ISP �ä����\�ګإ߷s����Ʈw�ΨϥΪ̡C";
$inst_status_2="�п��SQL ���B��覡�A�Y���T�w�п� ����!";
$inst_status_step2="�B�J 2 �@�� 4 �B�J";

/* requirements */
$req_check_msg="�d��t�λݨD";
$req_found_msg="�w���";
$req_miss_msg="�S���";
$req_safe_fail="����";
$req_safe_ok="�L��";
$php_safemode_check_msg="�d�� PHP ���w���Ҧ�...";
$php_version_check_msg="�d�� PHP ����> 4.1.0...";
$mem_check_msg="�d�� PHP �O���魭��...";
$gd_check_msg="�d�� GD �禡�w...";
$convert_check_msg="�d�� ImageMagick...";
$exif_check_msg="�d�� EXIF �䴩...";
$summary_msg="�K�n�G";
$safe_mode_err="�z���t�Τw�Q�]�w���ϥ� PHP ���w���Ҧ��C��php.ini�]�w�w���Ҧ��ҰʮɡA�׵�(LinPHA)�N�L�k����B�@!";
$inst_abort_msg="!!! �w�˥��� !!!";
$php_version_err="�z���t�ΩҹB�檺 PHP ���� < 4.1.0�C�׵�(LinPHA)�b�z�ɯ� PHP ���e�N�L�k���ĹB�@�C";
$gd_convert_err="ImageMagick �� GD �禡�w�ҵL�k�M��C�׵�A�ʥF�䤤���@�ɱN�L�k����B�@�C";
$convert_sum_found_msg="�w�M��ImageMagick�󦹥D��C�o�� �׵� ��e�{���~�誺�Ϥ�C��C";
$convert_sum_miss_msg="�L�k�M��ImageMagick�󦹥D��C�o�ϹϤ�C��Ȧ��C�~��C";
$exif_sum_found_msg="�z�w�˪�PHP���䴩EXIF�C�o�N���\ �׵� ��ܹϤ�ԲӸ�ơC";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="�z�w�˪�PHP�ä��䴩EXIF�C�o�N��ê �׵� ��ܹϤ�ԲӸ�ơC";
/* TODO next 3 */
$session_path_check_msg="�d�� session_safe_path...";
$session_path_found_msg="�|�ͦs���|�]�w�� php.ini�CLinPHA ���n�J�\�ॲ�����`�u�@�C��|�]�w��G ";
$session_path_miss_msg="�b�|�ͦs���|�̨S����쥿�T���ƭȡC�A�����b php.ini ���]�w���T���|�ͦs���|�A�Ϊ̬O�y��A�N���ॿ�T�n�J�t��!!";
$mem_limit_ok_msg="�ܦn, �A�� PHP �O���魭� >= 16MB. �o�˦b�����Y�Ϯɤ��|�������DT.";
$mem_limit_low_msg="��, �A�� PHP �O���魭� <=16MB. �p�G�A�J����Y�Ϫ����D, �յۥh�W�[ php.ini���� memory_limit �Ϊ̬O�N�Y�Ϫ��ѪR�׭��C����A�դ@��...";
$choose_def_quali="�п�ܹw�]���ۤ�~��";
$choose_def_quali_warn="���n�]�����~��A�p�G�A�� CPU �t�� &lt; 1Ghz (�� CPU �t��)";

/* third_stage_install (page 3) */
$inst_superadmin_header="�]�wMySQL ��Ʈw���޲z��";
$inst_superadmin_name="MySQL ��Ʈw�޲z�̱b���G";
$inst_superadmin_name_info="&lt;-MySQL ���޲z�̱b��(�����s�b���Ʈw��))";
$inst_superadmin_pass="MySQL ��Ʈw�޲z�̱K�X�G";
$inst_superadmin_pass_info="&lt;-MySQL ���޲z�̱K�X(�����s�b���Ʈw��)";

$inst_admin_header="�]�w�׵�t�κ޲z��";
$inst_admin_name="�׵�޲z�̱b���G";
$inst_admin_name_info="&lt;-�޲z�̪��n�J�b��";
$inst_admin_pass="�׵�޲z�̪��K�X�G";
$inst_admin_pass_info="&lt;-�޲z�̪��n�J�K�X";
$inst_admin_email="�޲z�̪��q�l�H�c�G";
$inst_admin_email_info="&lt;-�]�w�޲z�̪��q�l�H�c";

$inst_db_header="�]�w�׵��Ʈw���s���覡";
$inst_db_host="�D��W�١G";
$inst_db_host_info="&lt;-�D��W�١G �@��Хܬ� &quot;localhost&quot;";
$inst_db_host_info2="&lt;-�D��W�١G MySQL�D��W��";
$inst_db_host_port="�s����G";
$inst_db_host_port_info="&lt;-�s����G�Y���T�w�h�ٲ��I";
$inst_db_name="��Ʈw�W�١G";
$inst_db_name_info="&lt;-�׵�ҨϥΪ���Ʈw�W�١A�@��Q�Хܬ�&quot;linpha&quot;";
$inst_db_name2="��Ʈw�W�١G";
$inst_db_name_info2="&lt;-ISP�ҵ�������Ʈw�W��";
$inst_table_prefix="��ƪ���[�r��";
$inst_table_prefix_info="&lt;-�b�Ҧ���ƪ�W�٪��[�r��";

$general_header="�@��ﶵ�]�w";
$general_album_title="�ۥ����D";
$general_album_title_info="&lt;- �O�d�ťեi�H�ϥιw�]�W��";
$general_photos_row="��C��ܼƥءG";
$general_photos_row_info="&lt;- �C�@��C��ܼƶq";
$general_photos_col="������ܼƥءG";
$general_photos_col_info="&lt;- �C�@������ܼƶq";
$general_photos_width="��i�Ӥ���ܤj�p (�e��):";
$general_photos_width_info="&lt;- 512 (�w�]�j�p)";
$general_photos_height="��i�Ӥ���ܤj�p (����):";
$general_photos_height_info="&lt;- 384 (�w�]�j�p)";
$general_img_quality="�ԲӪ��ۤ�~��";
$general_img_quality_info="&lt;- �վ�v���~�� 0-100 (�w�]�� 75)";

$inst_status_3="�ж�g�Ҧ����!";
$inst_status_step3="�B�J 3 �@�� 4 �B�J";

/* forth_stage_install (page 4) */
$inst_status_4="���߱z�A�w�ˤw����! �׵�(LinPHA)�w�w�ƶ}�l�ϥ�";
$inst_status_step4="�B�J 4 �@�� 4 �B�J";
$inst_submit="����";
$inst_db_tryconn="�xճs�����Ʈw�D��";
$inst_db_tryconn_error="�s�����Ʈw�D��ɵo�Ϳ�~�A using:";
$inst_db_tryconn_ok="�s�u���\!";
$inst_db_tryinst="�xշs�W��Ʈw�G";
$inst_db_tryinst_error="�s�W��Ʈw�ɵo�Ϳ�~�G";
$inst_db_tryinst_ok="�s�W���\!";
$inst_create_tb_msg="�إߩһݸ�ƪ�";

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
$inst_db_connect_inc_msg="�s����Ʈw�D��o�Ϳ�~!";
$inst_db_connect_inc_msg1="�۸�Ʈw����� ".@$db_realname." �ɵo�Ϳ�~<br>�Y�w�ˮɵo�ͦ��T���A�бNdb_connect.php��<br> ��Ƨ�&quot;sql&quot; ������!";
/* ------------------------------------------------------------------ */

$table_create="�s�W��ƪ�G";
$table_create_error="��ƪ�s�W�ɵo�Ϳ�~!";
$table_create_ok="�s�W����!";
$table_insert_admin="�إߺ޲z�̱b���G";
$table_insert_admin_error="�إߺ޲z�̱b���ɵo�Ϳ�~!";
$table_insert_admin_ok="���\�إ�!";
$write_db_config="�N��Ʈw�]�w�x�s���ɮ�";
$fopen_error="�L�k�g�J sql/db_config.php�A�г]�w chmod 777 �έ��s�w��";
$fopen_ok="�]�w�w�g�J!";
$install_finish_msg="�w�˦��\!!";
$admin_task="�i��U�@�B";
$file_create_ok="���\�إ�!";
$configure_error="�ж�g�Ҧ����n���!!!";
$could_not_open="�L�k�}��users��ƪ�! �z��G���Q���v�s�W�b�����Ʈw��<br>�Цb�ĤG����ܸ�i�檺�w�ˤ覡<br>";

/*#################################################
## header.php
#################################################*/
$page_title="�׵� LinPHA - The Linux Photo Archive";
$head_title="�׵�ۥ��t��";
$book_home="����";
$book_about="����";
$book_admin="�޲z";
$book_admin_user="�ڪ��]�w";
$book_links="�s��";
$book_search="�j�M";
$book_logout="�n�X";
$book_login="�n�J";
$num_pictures="�Ӥ�ƶq:";
$user_visits="��X��";
$user_online="��u�W�ϥΪ�";
$guest="�X��";
$html_lang="zh-TW";
$html_charset="Big5";

/*#################################################
## index.php
#################################################*/
$index_welc_text="�١A�o�O&quot;The Linux Photo Archive&quot;�t�Ϊ������A²�� LinPHA�E �б`�� <a href='http://sf.net/projects/linpha/'><u>Sourceforge</u></a> ���[�A�H��o�̷s�����C";

/*#################################################
## search.php
#################################################*/
$search_header="�j�M�׵�(Linpha)";
$radio_all="����";
$radio_descript="�y�z";
$radio_comment="�N��";
$radio_category="����";
$radio_file="�ɦW";
$search_in="�j�M�ۥ�";
$search_all="�Ҧ��ۥ�";
$search_for="�j�M����r";
$search_button="�j�M";
$photos_found="�M��";
$search_info="�׵�j�M��";
$search_msg="�b �׵� ��Ʈw���i�ھڥH�U��T�j�M�ۤ�G";

/*#################################################
## img_view.php
#################################################*/
$img_detail="�Ϥ�Ӹ`";
$img_size="����j�p";
$img_com="�N��";
$img_des="�y�z";
$img_cat="����";
$img_name="�W��";
$img_info_stored="�N�N���g�J��Ʈw";
$please_login="�Х� <a href='login.php'><u>�n�J</u></a> �H�K�s�W�N��";
$back_to_thumbs="<b><u>�^��C�����</u></b>";
$back_to_search="<b><u>�^��j�M����</u></b>";
$button_next="�U�@�i";
$button_prev="�W�@�i";
$exif_ext_error="��p�A��������PHP�S�� EXIF �䴩";
$exif_error="��p�A�Ϥ�]�t��� EXIF �T��!";
$exif_more="��h�Ӹ`";
$exif_less="²����T";
$detail_header="��";
$detail_header1="�@";
$detail_header2="�i�Ӥ�b����ï<br>";
$php_to_old="PHP < 4.2.0 EXIF �L��!";
$views="�w�\���";
$slideshow="�ۿO�����";
$econds="��";
$go="Go";
$stopslide="����ۿO�����";
/* image rotating */ /* TODO next */
$img_rotate_ok="����Ӥ�";
$img_rotating="����Ӥ��~"; // TOC entry
$img_rotating_hint1="���i����Ӥ�I �Ы�o��";
$img_rotating_hint2="�d�ݭ�]";

/*#################################################
## login.php
#################################################*/
$login_msg="�Х�n�J�I";
$login_error="�����T���b���αK�X";
$login_name="�n�J�b��";
$login_pass="�n�J�K�X";
$login_info="LinPHA �n�J����";
$login_request_account_info="�Q�n�ӽбb���Ы� <u>�o��</u>�G";
$login_request_target="�p�� LinPHA ���޲z��";
$login_admin_info="���޲z�u�@�����ϥκ޲z�̱b���n�J";
$login_friend_account_info="�Y�A�w�� &quot;�n��&quot; �b���A�i�b�o�̭ק�ӤH���";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="�׵�Ϯw�޲z";
$please_turn_off_msg="�ۤ�s�W�����ɽг]�w�y�۰� �s�W/�R�� �ɮ׾\��z����C<br> LinPHA �N��[�֨���t�� :)";
/* left menu */
$logout_msg="�n�X";
$welc_msg="�w��";
$stat_msg="�A�w�g�Q���v�i��޲z�A�t�s�W <b>�N��</b> �M�ۤ�y�z";
$back_to_msg="<b>�^����ܬۥ�</b>";
$href_general_conf="�@��]�w";
$href_user_conf="�ϥΪ�/�s�� �޲z";
$href_folder_conf="�ؿ�޲z";
$href_sql="MySQL ��Ʈw�޲z";
$href_ftp="�ɮ׺޲z";
$href_stats="LinPHA �έp���";
$href_other_conf="��L�ﶵ";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA �w�]�ϥΪ��y�t";
$default_language_info="&lt;- �]�w�w�]�ϥΪ��y�t";
$general_auto_lang="�}��/�� �y�t�۰ʰ���\��"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- �۰ʰ�����[���s��ϥΪ��y�t";
$general_success_msg="! ���ܤw�g�ͮ� !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="�}��/�� �v������\��";
$general_rotate_info="&lt;-- <b>�W�j�ɮ�ĵ��! click info</b>";
$general_exifinfo="�}��/�� �Ҧ� EXIF �䴩";
$general_exifinfo_info="&lt;-- �}��/�� �ϥ� EXIF �\��";
$general_exifdefault="�w�]��� EXIF ��T";
$general_exifdefault_info="&lt;-- �w�]�Ұ���� EXIF ��T";

$general_exiflevel="��� EXIF ��T���{��";
$general_exiflevel_info="&lt;-- �]�w EXIF �T�����c²�{��";
$exif_low="�̤�";
$exif_medium="����";
$exif_high="�̦h";
$general_filename="���/����� �ɮצW��";
$general_filename_info="&lt;-- �s�������ɮצW��";
$general_thumb_order="�\��ƦC����";
$general_thumb_order_info="&lt;- �]�w�w��ɫ���ɮצW�٩Τ�qƧ�";
$thumb_order_date="���";
$thumb_order_file="�ɮצW��";
$general_autoconf="�۰� �s�W/�R�� �ɮ׾\��";
$general_autoconf_info="&lt;- <b>������رN�ണ���Ĳv</b>";
$general_counterstat="�}��/�� �p�ƾ�";
$general_counterstat_info="&lt;-- �w�]���}��";
$general_blocking="IP ��w�ɶ�(����)";
$general_blocking_info="&lt;--�b x ���d��N���|�?�s�X�ȭp��";
$general_theme="�ܧ� LinPHA �˪O�D�D";
$general_theme_info="&lt;- �]�w �׵� ���w�]��ܼ˪�";
$aqua_theme="�L��t";
$colored_theme="�m��t";
$neptune_theme="���P";
$shadow_theme="���v";
$general_hq="�}��/�� ���~��\��P�ۤ�";
$general_hq_info="&lt;--������رN�ണ���t��";
$submit_button_general="�N�ܧ�g�J��Ʈw";
$button_on_msg="�}��";
$button_off_msg="��";
$basic_opts="��";
$advanced_opts="�i��";
$show_basics="����ܰ򥻿ﶵ";
$show_advanced="����ܶi���ﶵ";
$general_printing="�}��/�� �X�ȦC�L�\��";
$general_printing_info="&lt;-- �}�ҡA�Ҧ��H���i�H�C�L�Ӥ�";
$general_slideshow="�}��/�� �ۿO�����";
$general_slideshow_info="&lt;-- �]�w�ۿO����ܥ\��}�ҩ���";
$general_mini_preview="�}��/�� �g�A�v��";
$general_mini_preview_info="&lt;-- �p�G���\�h���[�̬����W�ϥΪ̪��ܽг]����";

/* modify existing user table */
$mod_user_header="�ק�w�s�b���b��";
$submit_button_mod_user="�b���ק�";
$mod_user_success_msg="! �b���w�ק� !";
$submit_button_delete="�R��";
$del_user_success_msg="! �b���w�R�� !";

/* add new user table */
$new_user_header="�s�W�ϥΪ̱b��";
$new_user_name_info="�b��";
$new_user_pass_info="�K�X";
$new_user_mail_info="�q�l�l��";
$new_user_level_info="�v���h��";
$friend="�n��";
$submit_button_new_user="�s�W�b��";
$new_user_success_msg="! �b���w�s�W !";

/* friends account table */
$friend_user_header="�b���]�w";
$submit_button_friend_user="�b���ק�";
$delete_button_friend_user="�b���R��";
$friend_info_msg="�]�w/�ק� �b���]�w";

/* add new category table */
$new_cat_header="�s�W����";
$new_cat_info="�s�����W��";
$submit_button_new_cat="�s�W����";
$new_cat_success_msg="! �����w�s�W !";
$mod_cat_header="�ק�/�R�� ����";
$cat_name_header="�����W��";
$cat_mod_header="�ק����";
$cat_del_header="�R������";
$submit_button_mod_cat="�ק�";

/* set directory permissions */
$set_dir_perms_header="�]�w��ï�v��";
$dir_name="��ï";
$dir_perms="�v���h��";
$action="���";
$submit_button_folder="�e�X";
$public="���}";
$friends="�n��";
$private="�p�H";
$new_perms_success_msg="! �v���w���� !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="����έp";
$stats_over_photos="�b��Ʈw�����Ӥ�G";
$stats_over_views="�`�\��ơG";
$stats_over_albums="�b��Ʈw������ï�G";
$stats_over_most_alb_visists="�̼��ۥ��G";
$stats_over_space="�w�ϥκϺЪŶ�(�Ҧ��ۥ�):";
$stats_over_visitors="�������[�H�ơG";
$stats_over_users="�w��U�b���G";
$stats_top_ten="�e�Q�j���\��";
$stats_rank="�W���G";
$stats_no_views="�I�\���ơG";
$stats_last_view="�e�@���\��ɶ��G";
$stats_alb_name="�ۥ��W�١G";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="�Ĥ@���q�y�k�*R";
$parse_sec="�ĤG���q�y�k�*R";
$parse_third="�ĤT���q�y�k�*R";
$parse="�{�b���b�i��y�k�*R";
$parsed="�y�k�*R�G";
$dirs="�l�ؿ�";
$done="��������...";
$not_allowed_msg="��p�A�A�å��Q���\���o�ӫ�O�Z�I";
/* these entries are called from within admin.php */
$th_msg="�@�����ͧA�Ҧ����w��ϡI";
$table_hint_msg="��U �}�l �ߨ貣�ͩҦ��l�ؿ�U���Ҧ��w��ϡI";
$start_button="�}�l�I";
$recreate_thumbs_header="���s���ͩҦ����w���";
$recreate_thums_msg="�o�Ӱʧ@�N�|���s���ͧA�Ҧ����w��ϡI�Ҧ����έp��ƱN�|�򥢡I";
$recreate_thums_warning="�нT�{�A�O�_�u���n���s���ͩҦ����w��ϡA�åB�n�R���Ҧ����N���A�y�z�βέp��ơI�Ъ`�N�A�o�Ӱʧ@����Q�_��C�A�T�w�A�n�~��i��ܡH";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="��ܦC�L�s��";
$images_page="�ۤ�/��";
$indexprint="�dަC�L (28)";
$note="<strong>�`�N�G</strong> �b�C�L���e�A�i�H�վ��s��� \"�]�w�C�L�榡\"�T�O�Ҧ����Ӥ��ŦX�C�L�������j�p�I�I�I";
$print_button="�w��C�L";
$href_check_all="��ܥ���";
$href_clear_all="�M������";
$print_error="��~�A�S����ܥ��ۡI�I�I";
$print_mode="�C�L�Ҧ�";
$print_image="�C�L�ۤ�";
$videos_msg="����C�L�ʺA�v��";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL ��Ʈw�޲z�t�Ϊ���.";
$mysql_cancel="���";
$mysql_DHTML_hint="�� DHTML ��� - �b�ƥ�����e�A�ݤ�����F��C";
$mysql_select_all="��ܥ���";
$mysql_deselect_all="����ܥ���";
$mysql_create_backup="���ͳƥ�";
$mysql_back_menu="�^��D���";
$mysql_table_checks="�ˬd��ƪ�...";
$mysql_table_check="��ƪ��ˬd��";
$mysql_struct_msg="Creating structure for";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="�������L�{:";
$mysql_back_complete="�ƥ�u�@������";
$mysql_back_menu_long="�^�� MySQL ��Ʈw�ƥ�D���";
$mysql_open_warn1="<B>ĵ�i:</B> �}�ҥ��� ";
$mysql_open_warn2="�g�J�����D!�b�ؿ�̰��<BR><BR><I>CHMOD 777</I> ��O�i�H�ѨM�o�Ӱ��D.";
$mysql_date_msg="�{�b�ɶ��O "; // it follows time of the day...
$mysql_last_backup="�W�@������ƥ� MySQL ��Ʈw��G ";
$mysql_backup_hint="�j��Ө��A�ƥ�u�@�ä��ݭn�b�C�@�g�i��@���H�W���ƥ�.";
$mysql_down_backup="�U��W�@������ƥ�ͪ��ƥ��ɮ�";
$mysql_down_backup_part="�U��W�@���u�i�槽���ƥ�ƥ��ɮ� ";
$mysql_down_backup_struct="�U��W�@���u�ƥ��浲�c���ƥ��ɮ� ";
$mysql_down_backup1="(��ƹ��k��A��t�s�ؼ�(A)...)";
$mysql_unknown_backup="�W�@���� MySQL ��Ʈw�ƥ��: <I>����</I>";
$mysql_href_recom="���ͤ@��s������ƥ�A�������J (��ĳ)";
$mysql_href_standard="���ͤ@��s������ƥ�A�зǴ��J (��p)";
$mysql_href_partial="���ͤ@��s�������ƥ�A�u�ƥ��ܪ���� (�]�t�������J)";
$mysql_href_structure="���ͤ@��s������ƥ�A�u�ƥ��浲�c";
$mysql_days_last="��";
$mysql_hours_last="�p��";
$mysql_min_last="����";
$mysql_sec_last="��";
$ago="�e"; // reads in context "some days ago"
$backup="�ƥ�";
$restore="�٭�";
$optimize="�̨Τ�";
$optimize_tables="�̨Τƪ��";
$opt_table_name="���W��";
$opt_table_check="�ˬd���";
$opt_table_optimize="�̨Τƪ��";
$opt_table_msg="�T������";
$opt_start_msg="�}�l�ˬd�P�̨ΤƸ�Ʈw�̪����";
$fullback_hint_msg="�p�G�A���h�Ӹ�Ʈw�A�п�� <b>����</b> �ƥ�覡";
$restore_last_fullback="�^�s�W�@���� <b>����</b> �ƥ��ɡG";
$restore_last_partback="�^�s�W�@���� <b>����</b> �ƥ��ɡG";
$restore_error="��~�I�}�ҳƥ��ɮɦ��~�C�䤣���ɮסI";
$restore_success="�^�s���\�I!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>�T��s��</H1> �A�S�������v���Өϥγo�ӥؿ�');
define('STR_BACK',	'��^');
define('STR_LESS',	'less');
define('STR_MORE',	'more');
define('STR_LINES',	'lines');
define('STR_FUNCTIONLIST', '�\��C��');
define('STR_EDIT',	'�s��');
define('STR_VIEW',	'�˵�');
define('STR_RENAME',	'�ܧ�W��');
define('STR_MKDIR',		'�إߤl�ؿ�');
define('STR_DELETE',	'�R��');
define('STR_BOTTOM',	'�̤U��');
define('STR_TOP',		'�̤W��');
define('STR_FILENAME',	   '�ɦW');
define('STR_FILESIZE',	   '�j�p');
define('STR_LASTMODIFIED', '�̫��s�ɶ�');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> item(s)');
define('STR_CREATEDIRLEGEND', '�إߤ@�ӷs�ؿ�');
define('STR_CREATEDIR',       '�n�إߪ��ؿ�W�١G');
define('STR_CREATEDIRBUTTON', '�إߥؿ�');
define('STR_RENAMELEGEND',       '�ܧ��ɦW');
define('STR_RENAMEENTERNEWNAME', '��J�s�ɦW�� %s:');
define('STR_RENAMEBUTTON',       '�ܧ��ɦW');
define('STR_ERROR_DIR','��~: �L�kŪ��ؿ�e');
define('STR_AUDIO',            '���T');
define('STR_COMPRESSED',       '�w#�Y');
define('STR_EXECUTABLE',       '�i���');
define('STR_IMAGE',            '�v��');
define('STR_SOURCE_CODE',      '��l�X');
define('STR_TEXT_OR_DOCUMENT', '��r�ɩΤ����');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            '��T');
define('STR_DIRECTORY',        '�ؿ�');
define('STR_PARENT_DIRECTORY', '�W�@�h�ؿ�');
define('STR_EDITOR_SAVE',      '�x�s�ɮ�');
define('STR_EDITOR_SAVE_ERROR','�ɮ� <I>%s</I> �����i�g�J�άO���s�b');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', '�ֳt�ɯ�');
define('STR_FILE_UPLOAD_DRIVES', '�Ϻо�:');
define('STR_FILE_UPLOAD', '�W��');
define('STR_FILE_UPLOAD_MAIN', '�W��');
define('STR_FILE_UPLOAD_DISABLED', '��p,�b php.ini �]�w�ɤ��T���ɮפW��');
define('STR_FILE_UPLOAD_DESC','��ܧA�Q�n�W�Ǫ��ɮ�. ��ܷ?�\�W�Ǥ���Q�n�i�檺���.');
define('STR_FILE_UPLOAD_FILE','�ɮ�');
define('STR_FILE_UPLOAD_TARGET','�W���ɮר�');
define('STR_FILE_UPLOAD_ACTION','��W�ǧ�����i��:');
define('STR_FILE_UPLOAD_NOTHING','do nothing');
define('STR_FILE_UPLOAD_DROPFILE','��ҿ�ܪ��ʧ@�i�槹����R���w�W�ǧ������ɮ�');
define('STR_FILE_UPLOAD_MAXFILESIZE','�{�b�]�w�� php.ini �ɮפ��Ҥ��\���̤j�ɮפj�p(�C�@���ɮ�!)��');
define('STR_FILE_UPLOAD_ERROR',        '��~: �L�k�h���ɮ� %s ��ؿ� %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '��~: �L�k�t� (chdir) �� %s �ؿ�. �ɮפw�g�B�z: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '��~: �L�k�R�� %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '��~: �W���ɮ� %s �W�L php.ini �]�w�ɤ���w�� - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','��~: �W���ɮ� %s ���j�p�W�L HTML FORM ���]�w');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '��~: �W���ɮ� %s �u�����$W�ǧ���');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="panorama view"; /* (img_view.php) -- new [panorama view] href  */
$close_win="Close window"; /* (various files) -- javascript close window */
$nav_hint="Please use mouse or arrow keys to navigate!"; /* (image_panorama_view.php) --  */
$pano_view_of="Panorama view of image"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="checking if PHP open basedir is set..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="NO"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Bad bad bad, you configured PHP to make use of \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA �|�ϥ� GD lib �Ӳ����Y��, �o�i��|���ǰ��D<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ �p�G�i�H, �Ф��n�]�w \"open_basedir\" �b PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ �p�G�i�H, �Ф��n�]�w \"open_basedir\" �b PHP.ini �άO���s�sĶ PHP �å[�W GD lib ���䴩 (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract an *.tar.gz archive (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract an *.tar.bz2 archive (UNIX)"; /* (index.php) --  */
$extract_gz="unzip with gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip with unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip with pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! �s�դw�W�[ !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! �s�դw�ק� !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! �s�դw�R�� !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! �����w�ק� !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! �����w�R�� !"; /* (admin.php) -- redirect message */
$href_groups="��s�W�έק�s��"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="WARNING: You have to login with your new account !!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="�^��ؿ�޲z���"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="�^��ϥΪ̺޲z���"; /* (build_user_conf.php) -- navi href  */
$header_new_group="�W�[�s�s��"; /* (build_user_conf.php) -- table header */
$header_groupname="�s�զW��"; /* (build_user_conf.php) -- table header */
$button_addgroup="�W�[�s��"; /* (build_user_conf.php) -- submit button */
$header_mod_group="�ק�/�R�� �s��"; /* (build_user_conf.php) -- table header */
$mod_group_header="�ק�s��"; /* (build_user_conf.php) -- table header */
$del_group_header="�R���s��"; /* (build_user_conf.php) -- table header */
$search_to_short="Search string to short, must be at least 2 characters long!"; /* (search.php) --  */
$general_thumb_size="�ܧ�\��j�p"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<- �]�w�̤j�w��ؤo�����-�"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="�}��/�� �w�����"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<- �]�w���}�ҥi�H���w��Ϲ��[�W���"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="�п�ܹw��j�p"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="��س]�w"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="�}�Ҽv����إ\��"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="��v����إ\��"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Bad bad bad, you configured PHP to make use of \"safe_mode\" restrictions!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ �p�G�i�H����, �Ф��n�]�w \"safe_mode\" �b PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="���\/�T�� �ΦW�i�K"; /* (build_general_conf.php) --  */
$general_anon_post_info="<- ���\�ΦW�ϥΪ̥[�J�N��"; /* (build_general_conf.php) --  */
$stats_over_comment="�N���i�K��"; /* (build_stats.php) --  */
$top10_downs_href="��ܫe�Q�j���U��"; /* (build_stats.php) --  */
$top10_views_href="��ܫe�Q�j���ۤ�"; /* (build_stats.php) --  */
$stats_head_downs="�e�Q�j���U��"; /* (build_stats.php) --  */
$no_downloads="�U���"; /* (build_stats.php) --  */
$general_anon_download="�}��/�� �ΦW�U��"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- ���/���� �ۤ�U��s����}"; /* (build_general_config.php) --  */
$seach_multiple_select_use="�n�h����ܽШϥ�"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="����"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="��ܬۥ�"; /* (search.php) --  */
$search_date_from_to="��� �q / ��"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="�s�K�X"; /* (build_user_conf.php) --  */
$new_user_error4="�ϥΪ̦W�٤��i���ť�"; /* (admin.php) --  */
$new_user_error5="�ϥΪ̦W�٤w�g�s�b"; /* (admin.php) --  */
$new_user_error1="�±K�X�����T"; /* (admin.php) --  */
$new_user_error2="�s�K�X�P�A����J�ɪ��K�X���@�P"; /* (admin.php) --  */
$new_user_error3="�q�l�l�󤣥��T"; /* (admin.php) --  */
$new_user_old_password="�±K�X"; /* (admin.php) --  */
$new_user_retype_password="�A����J�s�K�X"; /* (admin.php) --  */
$select_db_header="�п�ܸ�Ʈw����"; /* (sec_stage_install.php) --  */
$mysql_info="�n�ϥ� MySQL ��Ʈw�п惡��"; /* (sec_stage_install.php) --  */
$postgres_info="�n�ϥ� PostgreSQL ��Ʈw�п惡���C�Ь�"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="�۰ʵn�J"; /* (toc.php) --  */
$login_autologin_user="�۰ʵn�J�ϥΪ̸�T"; /* (toc.php) --  */
$toc_timer="Timer"; /* (toc.php) --  */
$general_autologin="�}��/�� �۰ʵn�J"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- �ҥΦ��ﶵ�i�H�ϥΦ۰ʵn�J�\��"; /* (build_general_conf.php) --  */
$general_timer="�}��/�� �p�ɾ�"; /* (build_general_conf.php) --  */
$general_timer_info="<-- �ҥΦ��ﶵ�i�H�b���?�X�y�k�ѪR���ɶ�"; /* (build_general_conf.php) --  */
$login_autlogin="�۰ʵn�J"; /* (login.php) --  */
$lostpw_title="�򥢱K�X"; /* (login.php) --  */
$lostpw_question="�A�򥢤F�K�X�ܡH"; /* (login.php) --  */
$lostpw_type_user_or_email="��J�A���ϥΪ̦W�٩ΧA�� Linpha �q�l�l��"; /* (login.php) --  */
$lostpw_email1="���H�ϥΤF�򥢱K�X�\��C�p�G���O�A���ܡA�A�u�ݭn�����o�ʰT���P�ɧA���K�X�]���|������ܧ�C�p�G�o�O�A�o�X�Ӫ��n�D�A�п�J�H�U�K�X��ݭn�����̡G"; /* (login.php) --  */
$lostpw_email1_part2="(�аO�o�G �o�ä��O�A���s�K�X�I)"; /* (login.php) --  */
$lostpw_email1_part3="�A�˷R�� Linpha �޲z��"; /* (login.php) --  */
$lostpw_email_error="��~�G�L�k�e�X�A���p���޲z��."; /* (login.php) --  */
$lostpw_error_nothing_found="��p�A�S���P�A��J����Ƭ۲Ū��ϥΪ̦W�٩άO�K�X�C"; /* (login.php) --  */
$lostpw_email_sent="�w�g�H�e�q�l�l�󵹧A."; /* (login.php) --  */
$lostpw_should_receive="�A3�Ӥw�g����H���A���q�l�l��F�A�b�o������J�q�l�l��̴��Ѫ��K�X�G"; /* (login.php) --  */
$lostpw_go_back="��^"; /* (login.php) --  */
$lostpw_email2="�K�X�ܧ󦨥\�C�A���s�K�X�O�G"; /* (login.php) --  */
$lostpw_email2_part2="�A�i�H�b�y��ϥγo��\"my settings\"�s�����ܧ�C"; /* (login.php) --  */
$lostpw_new_password="�s�K�X"; /* (login.php) --  */
$lostpw_successfully_changed="�K�X�ܧ󦨥\�A�A���@�U�K�|����@�ʦ��s�K�X���q�l�l��."; /* (login.php) --  */
$lostpw_error_wrong_code="��p�A��J�����T."; /* (login.php) --  */
$lostpw_enter_correct_code="�b�o������J���T���q�l�l��G"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA �~���{��"; /* (admin.php) --  */
$lang_plugins['watermark']="�B��L"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="�į���"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="��Ʈw�޲z"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="�w�Ұʪ��~���{��"; /* (admin.php) --  */
$lang_plugins['enabled']="�}��"; /* (plugins.php) --  */
$lang_plugins['disabled']="��"; /* (plugins.php) --  */
$lang_plugins['update']="��s"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="�~���{���w��s"; /* (admin.php, plugins.php) --  */
$wm_wm_man="�B��L�޲z "; /* (watermark.php) --  */
$wm_disable="��B��L�\�� "; /* (watermark.php) --  */
$wm_change_example_img="�ܧ�d�Ҽv�� "; /* (watermark.php) --  */
$wm_no_input_files_found="��J�ɮפ��s�b "; /* (watermark.php) --  */
$wm_image_quality="�v���~�� (�ȴ��ѹw���) "; /* (watermark.php) --  */
$wm_enable_text="�}��: ��r "; /* (watermark.php) --  */
$wm_text="��r "; /* (watermark.php) --  */
$wm_font="�r�� "; /* (watermark.php) --  */
$wm_fontsize="�r�Τj�p "; /* (watermark.php) --  */
$wm_fontcolor="�r���C�� "; /* (watermark.php) --  */
$wm_align="�ƦC�� "; /* (watermark.php) --  */
$wm_pos_hor="���m "; /* (watermark.php) --  */
$wm_pos_ver="������m "; /* (watermark.php) --  */
$wm_height="��r��찪�� "; /* (watermark.php) --  */
$wm_width="��r��찪�� "; /* (watermark.php) --  */
$wm_shadow_size="���v�j�p "; /* (watermark.php) --  */
$wm_shadow_color="���v�C�� "; /* (watermark.php) --  */
$wm_enable_image="�}��: �v��"; /* (watermark.php) --  */
$wm_available_images="�i�Ϊ��v��"; /* (watermark.php) --  */
$wm_no_images_found="�䤣��v����"; /* (watermark.php) --  */
$wm_dissolve="�|�Ƶe��"; /* (watermark.php) --  */
$wm_preview="�w��"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="�}�Ҥ�r���v"; /* (watermark.php) --  */
$wm_enable_rectangle="�Ұʪ���"; /* (watermark.php) --  */
$wm_rectangle_color="�C��"; /* (watermark.php) --  */
$wm_enable_ext_shadow="�}�ҩ���v"; /* (watermark.php) --  */
$wm_status="���A"; /* (watermark.php) --  */
$wm_enabled="�w�Ұ�"; /* (watermark.php) --  */
$wm_disabled="�w��"; /* (watermark.php) --  */
$wm_restore_to="�^�_��"; /* (watermark.php) --  */
$wm_inital_settings="��l�]�w"; /* (watermark.php) --  */
$wm_add_more_examples="�A�i�H�[�J��h���d�Ҽv����A�� linpha �ؿ�l�ؿ�"; /* (watermark.php) --  */
$wm_example="�d��"; /* (watermark.php) --  */
$wm_shadow_fontsize="���v�r�Τj�p"; /* (watermark.php) --  */
$wm_settings_for_both="�v���P��r���]�w"; /* (watermark.php) --  */
$wm_center="����"; /* (watermark.php) --  */
$wm_north="�W��"; /* (watermark.php) --  */
$wm_northeast="�W�k��"; /* (watermark.php) --  */
$wm_northwest="�W����"; /* (watermark.php) --  */
$wm_south="�U��"; /* (watermark.php) --  */
$wm_southeast="�U�k��"; /* (watermark.php) --  */
$wm_southwest="�U����"; /* (watermark.php) --  */
$wm_east="�k��"; /* (watermark.php) --  */
$wm_west="����"; /* (watermark.php) --  */
$bm_file_err="��~�A�S����w�ɮ�";
$bm_var_err="��~�A���ˬd��J�ܼ�";
$bm_notfound_err="��~�A�ɮפ��s�b";
$bm_noimg_err="��~�A�ɮפ��O�v����";
$bm_tmpfile_err="��~�A�?�ͼȦs�v���ɮ�";
$bm_tmpfile_warn="ĵ�i�G�Ȧs�v���ɤ���Q�R��";
$bm_time_total="�`�p���ɶ�: ";
$bm_img_sec="�C���|v����: ";
$bm_avg_img="�C�@�Ӽv���������ɶ� (�ƹ����L�N�|�i��v���j�p��s): ";
$bm_qual_size="�~��/�j�p";
$bm_quality="�~��: ";
$bm_height="����: ";
$bm_width="�e��: ";
$bm_size="�v���j�p: ";
$bm_create = "�H���v���ഫ�u��i��į���";
$bm_interval = "����";
$bm_calc = "�p��F";
$bm_img = "�i�v��";
$bm_inloop="��榸��";
$bm_qual_range="�~��d��: ";
$bm_size_range="�j�p�d�� (�ȫ��): ";
$bm_repeats="���Ʀ���: ";
$bm_con_util="�п�ܼv���ഫ�u��: ";
$bm_current_settings="�{��]�w"; /* (benchmark.php) --  */
$bm_preview="�w��"; /* (benchmark.php) --  */
$bm_save_settings="�x�s�]�w"; /* (benchmark.php) --  */
$wm_addexamples="�B��L: �W�[��h���B��L�v��"; /* (watermark.php) --  */
$wm_addimg="�B��L: �W�[��h���B��L�v��"; /* (watermark.php) --  */
$wm_addfont="�B��L: �W�[��h���r��"; /* (watermark.php) --  */
$wm_colorsetting="�B��L: �C��]�w"; /* (watermark.php) --  */
$comment_hint="��ĳ: �I;�̤W��γ̤U�誺�ۤ�H���ʬۥ�"; /* (linpha_comments.php) --  */
$comment_end="�ۥ����w�L���Ӥ�"; /* (linpha_comments.php) --  */
$comment_beginning="�ۥ����w�L�e�@�i�Ӥ�"; /* (linpha_comments.php) --  */
$comment_back="�^��ۤ��˵�"; /* (linpha_comments.php) --  */
$comment_edit_img="�s�� ����/�N��"; /* (linpha_comments.php) --  */
$comment_change_img_details="�ܧ�v�����Բӻ���"; /* (linpha_comments.php) --  */
$comment_last_comments="�W�@�h�N��"; /* (linpha_comments.php) --  */
$comment_comment_by="�N���Ӧ�"; /* (linpha_comments.php) --  */
$category_delete_warning="ĵ�i�G �����w�s�b�A���ƫ�w�N�|���h�Ӥ�"; /* (build_category_conf.php) --  */
$pass_2_short="��~�A�K�X��׳̤֭n3���..."; /* (various) --  */
$album_edit="�s��ۥ�����"; /* (linpha_comments.php) --  */
$album_details="�ۥ����Բӻ���"; /* (linpha_comments.php) --  */
$wm_save_note="�`�N�G��U�ϥΪ̤��|�ݨ�B��L�I.. �A������n�X (�����@��X��) �~��b�s�� LinPHA �ɬݨ�A���B��L�I"; /* (watermark.php) --  */
$lang_plugins['guestbook']="�X�ȯd��"; /* (admin.php) --  */
$print_low_quality="�C�~��"; /* (printing_view.php) --  */
$print_high_quality="���~�� (��C!)"; /* (printing_view.php) --  */
$gb_title="LinPHA �X�ȯd��";
$gb_sign="LinPHA �X�ȯd���I �[�J�s�d��";
$gb_from="�Ӧ�";
$gb_from_no="�����ѨӦۦ�B";
$gb_pages="��";
$gb_messages="�ӰT���b�X�ȯd����";
$gb_msg_error="��p�A�W�r�P�N�����i�H���ť�";
$gb_new_msg="�[�J�s�d��";
$gb_name="�W�r";
$gb_email="�q�l�l��";
$gb_hp="����";
$gb_country="�X�ȨӦ� (��a)";
$gb_header="LinPHA �X�ȯd����";
$gb_opts="�X�ȯd�����ﶵ";
$gb_rows="�C�@�����d����";
$gb_anon="���\�ΦW�ϥΪ̦b�X�ȯd�������i�K�d��";
$gb_order="�d������ܶ���";
$wm_resize="�B��L�û��H�v���j�p�� X% ������"; /* (watermark.php) --  */
$wm_help_and_descr="����P�y�z"; /* (watermark.php) --  */
$folder_remove_hint="�p�G�@�s��S���D�A�A�{�b�i�H���� /install �o�Ӥl�ؿ� (�w���]��)..."; /* (forth_stage_install.php) --  */
$add_alb_com="�s�W�ۥ����"; /* (img_view.php) --  */
$add_img_com="�s�W�v���N��"; /* (img_view.php) --  */
$album_com="�ۥ����"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML �榡����"; /* (various) --  */
$stat_cache_elements="�w�֨��"; /* (build_stats.php) --  */
$stat_cache_first="�s�֨��"; /* (build_stats.php) --  */
$stat_cache_hits="�֨�R��"; /* (build_stats.php) --  */
$stat_cache_hits_max="�̤j�֨�R�� (��@�v��)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="�����֨�R�� (�Ҧ��v��)"; /* (build_stats.php) --  */
$stat_cache_size="�֨�j�p"; /* (build_stats.php) --  */
$stat_cache_convert_time="�֨�[�t�ɶ�"; /* (build_stats.php) --  */
$stat_cache_size="�֨�w�ϥΪ��O����j�p"; /* (build_stats.php) --  */
$cache_options="�v���֨�ﶵ";
$cache_max_size="�̤j�֨�j�p���h�֦줸�� (0 = �L����)";
$path_2_cache="�֨�ؿ� (�w�]�� /sql/cache)";
$cache_optimize="�̨Τ�/�M�� �v���֨���"; 
$cache_maintain="�v���֨���@";
$cache_opt_msg="!! �֨�w�g�̨Τ� !!";
$lang_plugins['cache']="�v���֨�"; /* () --  */
$stat_cache_title="�v���֨�έp"; /* (cache.php) --  */
$bm_saved="�]�w�w�x�s"; /* (admin.php) --  */
$cache_optimize_by_size="�R���Ҧ��֨��j�p (�H kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="�R���Ҧ��֨��h�֤Ѥ������ϥ�:"; /* (cache.php) --  */
$elements_rem="����w����"; /* (cache.php) --  */
$general_anon_album_downs="���\/�T�� �ΦW#�Y�ۥ��U��"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- ���\�ΦW�ϥΪ̤U��#�Y���ۥ�"; /* (build_general_conf.php) --  */
$general_download_speed="�]�w�U��t�׭���h�� kb/sec (0=�L����)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- �]�w�ۥ��U��ɪ��U��t�׭���"; /* (build_general_conf.php) --  */
$general_navigation="�}��/�� ����C"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- �Ұʾ���C���Y�ϭ�"; /* (build_general_conf.php) --  */
$toc_navigation="�}��/�� ����C"; /* (doc/) --  */
$toc_zip_download="�}��/�� �ΦW�ϥΪ̤U��ۥ�"; /* (doc/) --  */
$toc_albdownlimit="�U��t�׭���"; /* (doc/) --  */
$choose_zips_msg="��ܭn�U��ۤ�"; /* (build_zip_view.php) --  */
$zip_button="�U���ɮ�"; /* (build_zip_view.php) --  */
$type_of_archive="��ܤU���ɮ�����"; /* (build_zip_view.php) --  */
$create_tar="���� tar �ɮ�"; /* (build_zip_view.php) --  */
$create_tgz="���� tar.gz �ɮ�"; /* (build_zip_view.php) --  */
$create_bz2="���� tar.bz2 �ɮ�"; /* (build_zip_view.php) --  */
$create_zip="���� zip �ɮ�"; /* (build_zip_view.php) --  */
$create_rar="���� rar �ɮ�"; /* (build_zip_view.php) --  */
$menumsg['advanced']="��i�\��ﶵ"; /* () --  */
$menumsg['printmode']="�C�L�Ҧ�"; /* () --  */
$menumsg['printprobs']="��C�L?"; /* () --  */
$menumsg['downloadmode']="�U��Ҧ�"; /* () --  */
$menumsg['mailmode']="�l�H�Ҧ�"; /* () --  */
$menumsg['addcomment']="�s�W�ۥ�����"; /* () --  */
$menumsg['delcomment']="�R���ۥ�����"; /* () --  */
$menumsg['editcomment']="�s��ۥ�����"; /* () --  */
$album_up="�w��s"; /* (album_comment.php) --  */
$album_ins="�w���J"; /* (album_comment.php) --  */
$mail_link="�l�H�W��"; /* (header.php) --  */
$mail_title="LinPHA �l�H�W��"; /* (mail.php) --  */
$mail_send_link="�ǰe�l��"; /* (mail.php) --  */
$mail_return_address="Return address:"; /* (mail.php) --  */
$mail_block="�l��϶�j�p:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="�l�H�W��ﶵ"; /* (mail.php) --  */
$mail_go_back="Go Back"; /* (various mail plugin files) --  */
$mail_form_title="�q�l�l��T��"; /* (mail_form.php) --  */
$mail_form_subject="�D��:"; /* (mail_form.php) --  */
$mail_form_msg="�T��:"; /* (mail_form.php) --  */
$mail_total_sent="�ǰe���q�l�l��@�p:"; /* (mail_form.php) --  */
$mail_subscribe="Subscribe"; /* (mail_users.php) --  */
$mail_unsubscribe="Unsubscribe"; /* (mail_users.php) --  */
$mail_activate="�Ұ�"; /* (mail_users.php) --  */
$mail_user_name="�A���W�r:"; /* (mail_users.php) --  */
$mail_user_email="�A���q�l�l��:"; /* (mail_users.php) --  */
$mail_user_email_confirm="�T�{�q�l�l��:"; /* (mail_users.php) --  */
$mail_user_code="�ҰʽX:"; /* (mail_users.php) --  */
$mail_user_code_sent="�@�ʱa���ҰʽX���q�l�l��w�g�H�e��A���q�l�l��b����."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA �l�H�W��Ұ�"; /* (mail_users.php) --  */
$mail_user_activated="�A���b���w�g�Q�Ұ�!"; /* (mail_users.php) --  */
$mail_user_activate_error="�b�ҰʧA���b���ɵo�Ϳ�~!"; /* (mail_users.php) --  */
$mail_user_email_not_found="�ä��s�b��ڭ̪��l�H�W�椤."; /* (mail_users.php) --  */
$mail_user_remove_ok="�w�g�q�ڭ̪��l�H�W�椤����."; /* (mail_users.php) --  */
$mail_user_remove_fail="�L�k�q�ڭ̪��l�H�W�椤����."; /* (mail_users.php) --  */
$mail_user_empty="�ж�J�Ҧ����."; /* () --  */
$mail_user_no_match="�q�l�l�󤣲�."; /* () --  */
$mail_user_exists="�q�l�l��w�s�b��ڭ̪��l�H�W��."; /* (mail_users.php) --  */
$lang_plugins['mail']="�l�H�W��"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="����"; /* (mail.php) --  */
$mail_user_permission="�Ҧ��b�s�� 'mail' �����ϥΪ̳��i�H�ǰe�T����l�H�W��."; /* (mail.php) --  */
$mail_current_subscribers="�{���q��"; /* (mail.php) --  */
$mail_name="�W�r"; /* (mail.php) --  */
$mail_mail="�q�l�l��"; /* (mail.php) --  */
$mail_subscribing_date="�q�\���"; /* (mail.php) --  */
$mail_active="�Ұ�"; /* (mail.php) --  */
$mail_sent_to="�ǰe�q�l�l��"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="����"; /* () --  */
$mail_create_group="(�A�n�����ݩ�A�ۤv�� 'mail' �s��.)"; /* (mail.php) --  */
$alb_th="�l�ؿ�b�ۥ�"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => 'Jan','2' => 'Feb','3' => 'Mar','4' => 'Apr','5' => 'May','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Oct','11' => 'Nov','12' => 'Dec'); /* abrevations of months */
$arr_month_long = Array('1' => 'January','2' => 'February','3' => 'March','4' => 'April','5' => 'May','6' => 'June','7' => 'July','8' => 'August','9' => 'September','10' => 'October','11' => 'November','12' => 'December'); /* months */
$arr_day_short = Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'); /* abrevations of weekdays */
$arr_day_long = Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'); /* weekdays */
/*
If the time and date format in your country is different with these formats,
please uncomment these lines and set it to the right format. Otherwise, leave
it as it is. See http://www.php.net/manual/en/function.strftime.php for definitions.
(Don't apply this to the english language file, the default date and time format are
set in the options page of linpha. This is because the date format is different within
the english spoken countries.)
$date_format = "%m/%d/%Y";
$time_format = "%I:%M:%S %p";
*/
$layout="�����s��";
$features="�\��S��";
$perform="�į�";
$general_comment_in_subfolder = '�Ұ�/�� �l�ؿ�ۥ�����';
$general_comment_in_subfolder_info = '<-- �b�w��l�ؿ���ܬۥ�����';
$general_default_date_format = '�w�]��n榡';
$general_default_date_format_info = '<- �d��: 06/28/2004, �˵�ԲӸ�T';
$general_default_time_format = '�w�]�ɶ��榡';
$general_default_time_format_info = '<- �d��: 01:45:50 PM, �˵�ԲӸ�T';
$general_new_images_folder = '���� "�s�ۤ�" �ؿ�';
$general_new_images_folder_info = '<- ��ܤ@�ӥ]�t�s�[�J�ۤ���%ؿ�';
$general_new_images_folder_age = '�h�[�H�����ۤ��b"�s�ۤ�" �ؿ�';
$general_new_images_folder_age_info = '<- ��̦ܳh�X�Ѥ����s�ۤ�';
$control_key="Ctrl"; /* (various) --  */
$search_date="���"; /* (search.php) -- reads: date from to... */
$search_from="�q"; /* (search.php) -- reads: date from to... */
$search_to="��"; /* (search.php) -- reads: date from to... */
$start_slide="�}�l�ۿO�����"; /* (img_view.php) --  */
$pass_msg="�A�w�g�i�H�ηs�K�X�ӵn�J"; /* (build_my_settings.php) --  */
$str_new_images = "�s�ۤ�"; /* (new_images.php) -- */
$str_order_by = "�Ƨǥ�"; /* (new_images.php) -- */
$str_age = "�ɶ�"; /* (new_images.php) -- */
$str_album = "�ۥ�"; /* (new_images.php) -- */
$str_in_album = "�b���Ӭۥ�"; /* (new_images.php) -- */
$str_img_newer_than = "�Ҧ��ۤ�O�b %s �Ѥ��s�W��"; /* (new_images.php) -- */
$timespanfmt = "%s days, %s hours, %s minutes and %s seconds"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="�R���Ҧ����B��L���֨�v��"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="Change permission of:"; /* (plugins/ftp/index.php) --  */
$str_read="Ū"; /* (plugins/ftp/index.php) --  */
$str_write="�g"; /* (plugins/ftp/index.php) --  */
$str_execute="���"; /* (plugins/ftp/index.php) --  */
$str_owner="�֦���"; /* () --  */
$str_group="�s��"; /* (plugins/ftp/index.php) --  */
$str_all_other="All others"; /* (plugins/ftp/index.php) --  */
$str_copy="�ƻs"; /* (plugins/ftp/index.php) --  */
$str_copy_to="�ƻs %s ��:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="��W %s ��:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="�L�k����v��"; /* (img_view.php) --  */
$str_no_write_perm="�L�g�J�v��"; /* (img_view.php) --  */
$str_new_images_in_these_folders="�s�ۤ�O�b�H�U�ۥ����ҧ�쪺:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="�p�G�A�n���s�w�� LinPHA, �A�n��R���H�U�ɮ� ./sql/db_connect.php! (�A�i�H�ϥξ�X�b�޲z�ﶵ�����ɮ׺޲z�\��ӧR������)"; /* (install_header.php) --  */
$str_Version="����"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="Error: No supported database activated in your PHP configuration"; /* (sec_stage_install.php) --  */
$str_extract_with="��W�ǧ���, ��#�Y�ɮץ�"; /* (ftp/index.php) --  */
$str_files_to_upload="�n�W�Ǫ��ɮ�"; /* (ftp/index.php) --  */
$posix_check_msg="�d�� POSIX �䴩..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="�A�Ҧw�˪�PHP���w���䴩POSIX. �b��X���ɮ׺޲z�u�㤤�Ҧ����\�ೣ��ϥ�."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="�A�Ҧw�˪�PHP���S���䴩POSIX. �b��X���ɮ׺޲z�u�㤤���ǥ\��L�k�ϥ�(�S�O�O�ܧ��ɮ��v����)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="��~: �L�k�x�s�]�w. �нT�{�A����|�O�_��g���T�ӥB�A�㦳�g�J�o�ӥؿ��v��."; /* (admin.php) --  */
$str_create_archive="���� %s �ɮ�"; /* (build_zip_view.php) --  */
$str_download_error="��~! �]���Y�ǭ�]�L�k�}�l�U��, ��p"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="�j�M�Ҧ��ۤ�@�ϥ� %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="�p�G�b��J�ɷ|��O�Ӧh�ɶ�, �йxեθ�C���ѪR��:"; /* (image_panorama_view.php) --  */
$str_current_resolution="�{�b���ѪR��:"; /* (image_panorama_view.php) --  */
$href_group_conf="�s�պ޲z"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_group_conf="�s�պ޲z"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="�u��:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="�~��"; /* (plugin.php) --  */
$choose_mail_msg="��ܭn�l�H���ۤ�"; /* () --  */
$new_user_full_name="���W"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="�Ұ�/�� �e/�� �g�A�v����ܬ��j���Y��"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- �Ұʦb�˵�ۤ�ɦb������ܤj���Y��"; /* (build_general_conf.php) --  */
$href_category_conf="�����޲z"; /* (admin.php) --  */
$cat_private="�p�H"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="�[�J��h3�ε{��"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="�d�禳�Ī��|�ͳ]�w..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="�|�ͳ]�w�O���T��."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="�|�ͳ]�w�����T."; /* (sec_stage_install.php) --  */
$session_miss_msg="�|�ͳ]�w�����T. �A�����bphp.ini���󥿥H�W����~�_�h�ݷ| LinPHA �N�L�k���`�u�@!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="�Ҧ����|�ͳ]�w�����T. LinPHA �i�H���`�L�~���u�@."; /* (sec_stage_install.php) --  */
$new_user_error6="��~: �A�O�ΧA�ۤv���b����?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="�̫��[�ݪ�����:"; /* (index.php) --  */
$str_select_row="��ܥ���"; /* (basket.php) --  */
$str_select="���"; /* (basket.php) --  */
$str_new_window="�s��"; /* (basket.php) --  */
$general_anon_mail_mode="���\/�T�� �ΦW�ϥΪ̨ϥζl�H�Ҧ�"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- ���\�ΦW�ϥΪ̥i�H�l�H�ۤ�"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="�l�H�Ҧ�: �̤j�l��j�p"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- �̤j�j�p���h�֦줸��"; /* (build_general_conf.php) --  */
$general_thumbnail_view="�Y���˵�"; /* (build_general_conf.php) --  */
$general_image_view="�v���˵�"; /* (build_general_conf.php) --  */
$general_ado_msg="�}��/�� SQL �d�ߧ֨�"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- �p�G SQL server �ӺC�άO�L PHP �[�t���i�Ϊ��ܽж}�Ҧ��ﶵ"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL �d�ߧ֨�ɶ�:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- �H���l����]�w�̤j�֨�ɶ�"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL �d�ߧ֨��|:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- �N�d�ߧ֨����x�s�b��B"; /* (build_general_conf.php) --  */
$str_other_features="��L�\��"; /* (build_general_conf.php) --  */
$str_language_settings="�y�t�]�w"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL �d�ߧ֨�"; /* (build_general_conf.php) --  */
$general_thumb_border="�Y�ϥ~�ؤؤo�����-�"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- �]�w��0�h��, �w�]: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="�Y�ϥ~���C��"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- �˵�ԲӸ�T"; /* (build_general_conf.php) --  */
$str_recipient="�����"; /* (basket_mail.php) --  */
$str_sender="�H���"; /* (basket_mail.php) --  */
$str_mail_too_big="��~: ���q�l�l��Ӥj.<br /><br />���\���ɮפj�p��: %sBytes. �A�ҿ�ܪ��ۤ�@�ϥΤF %sBytes.<br /><br />�в����@�Ǭۤ�άO�ϥΤU��#�Y�ۥ��\��!"; /* (basket_mail.php) --  */
$str_size_of_email="�q�l�l��j�p: %s."; /* (basket_mail.php) --  */
$str_new_search="���s�j�M"; /* (search.php) --  */
$str_edit_search="�s��j�M"; /* (search.php) --  */
$str_View="�[��"; /* (img_view.class.php) --  */
$str_normal="�@��"; /* (img_view.class.php) --  */
$str_detail="�Բ�"; /* (img_view.class.php) --  */
$search_result_empty="��p, �A���j�M�å������۲Ū����e"; /* (search.php) --  */
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
$large="large"; /* (build_general_config) -- selectfield for mini images size */
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