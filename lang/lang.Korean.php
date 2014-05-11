<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */


/**
for the translators do not forget this changes!!

02. Aug 2004  $path_2_cache  changed default path from '/sql/cache' to 'sql/cache'
10. Sep 2004  $href_user_conf  removed 'group'
10. Sep 2004  $new_user_name_info  removed ':'
09. Oct 2004  $session_path_found_msg remvoed part "LinPHA login should work properly."
09. Oct 2004  $session_path_miss_msg removed part "You MUST set session_save_path
			in php.ini or you will NOT be able to be login later!!"
09. Oct 2004  $session_path_check_msg outdated, can be deleted
11. Oct 2004  renamed $basedir_activE_msg to $basedir_active_msg
11. Oct 2004  outdated, to delete: $basedir_active_msg1, $gd_basedir_err
12. Oct 2004  $lostpw_error_nothing_found  replaced password with email
13. Oct 2004  $general_thumb_border and $general_thumb_border_info replaced, old entries can be deleted (about line 594)
13. Oct 2004  $alb_th replaced, old entry can be deleted (about line 24)
30. Oct 2004  $str_allow_these_persons updated in line 1008, old one can be removed (about line 1004)
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="<br />�׸� ������";

/* alerts */
$alert_fopen="����! ������ �� �� �����ϴ�.";
$printing_probs="�μ� ����";
$printing_probs_msg="�μ����� ����� �� �����ϴ�!";

/* global messages */
$subfolders="����������";
$img_th="������";
$in_th="in"; /* used for the photos in $foldername */
//$alb_th="�ٹ� �� ���� ���� : ";
$thumb_hint_msg="�����׸��� ������ Ŭ���ϼ���.";
$latest_photo="�ֱ� ��� ";
$view_at="���� ���� : ";
$close_button="�ݱ�";
$help="����";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="LinPHA�� ���� ���� ȯ���մϴ�.";
$welc_text="�ȳ�, &quot;The Linux Photo Archive&quot; aka LinPHA �� �⺻�������Դϴ�.
			LinPHA�� ó������ �����Ͽ����ϴ�. �׷��Ƿ� ��ġ�� �ϼž� �մϴ�.";

$welc_hint="<b>������ �����ϱ� ����:</b>";
$welc_hint1="&quot;<b>linpha/sql</b>&quot; ���丮�� ���� ������ �ο��ϼ���!
			(i.e. chmod 777 sql)";
$next_button="����"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA ��ġ"; /* used as left menu header in all 4 stages */
$inst_status_1="�� ������ ��, &quot;����&quot;�� ��������.";
$inst_status_step1="1 / 4 �ܰ�";

/* sec_stage_install (page 2) */
$inst_access_msg="Database ���� ���� ����";
$inst_full_access_msg="<b>�� !</b><br> ���� MySQL database�� ������ �� �ִ� ��� ������ �ֽ��ϴ�. <br>
						���� ���ο� �����ͺ��̽��� ����ڸ� ������ �� �ֽ��ϴ�. : �̰� �� �����Դϴ�!";
$inst_limited_access_msg="<b>�ƴϿ� !</b><br> ���� MySQL database ������ ���������� ������ �� �ֽ��ϴ�.<br>
						���� ISP�� ���ο� �����ͺ��̽��� ����ڸ� ���� �� �ֵ��� ������ ������� �ʾҽ��ϴ�.";
$inst_status_2="Database ���� ������ ��Ȯ�� ���� ���ϸ� �ƴϿ�! �� �����ϼ���.";
$inst_status_step2="2 / 4 �ܰ�";

/* requirements */
$req_check_msg="�ý��� �ʼ��׸� �˻�";
$req_found_msg="ã��";
$req_miss_msg="��ã��";
$req_safe_fail="Ȱ��";
$req_safe_ok="��Ȱ��";
$php_safemode_check_msg="PHP safe mode �˻�...";
$php_version_check_msg="PHP version > 4.1.0 �˻�...";
$mem_check_msg="PHP memory limit �˻�...";
$gd_check_msg="GD library �˻�...";
$convert_check_msg="ImageMagick �˻�...";
$exif_check_msg="EXIF ���� �˻�...";
$summary_msg="���:";
$safe_mode_err="����� ������ PHP safe_mode�� ����ϰ� �����Ǿ� �ֽ��ϴ�. php.ini ���Ͽ� safe_mode
			 ������ ��쿣 LinPHA�� ������ ����� �� �����ϴ�!";
$inst_abort_msg="!!! ��ġ ��� !!!";
$php_version_err="PHP ������ 4.1.0.���� ���� ��� LinPHA�� ����� �� �����ϴ�.
			 PHP�� ���׷��̵��Ͻñ� �ٶ��ϴ�.";
$gd_convert_err="ImageMagick �Ǵ� GD library�� ã�� �� �����ϴ�. LinPHA�� �� �� �ϳ���
			 �ʿ�� �ϹǷ� ��ġ�Ͻñ� �ٶ��ϴ�.";
$convert_sum_found_msg="ImageMagic�� �߰��� �� �����ϴ�. �̰��� LinPHA��
			���� ǰ���� ������� ����µ� �ʿ�� �մϴ�.";
$convert_sum_miss_msg="ImageMagick�� ã�� �� �����ϴ�.
			���� ǰ���� ������� ����ϴ�.";
$exif_sum_found_msg="EXIF�� �߰��Ͽ����ϴ�. �̰��� LinPHA����
			�׸��� ���������� ���� �� �ֽ��ϴ�.";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="exif ������ �߰����� ���߽��ϴ�. Going to make
			use of the LinPHA included EXIF parser instead.";
/* TODO next 3 */
//$session_path_check_msg="session_safe_path �˻�...";
$session_path_found_msg="���� ���� ��ΰ� php.ini�� �����Ǿ� �ֽ��ϴ�. LinPHA�� �ùٸ��� �α����� �� �ֽ��ϴ�.";
$session_path_miss_msg="session_save_path�� ã�� �� �����ϴ�. php.ini ���Ͽ� session_save_path�� �������� ������ ���������� �α����� �� �����ϴ�!!";
$mem_limit_ok_msg="�����ϴ�, PHP memory ������ 16MB���� ũ�� �����Ǿ� �ֽ��ϴ�. ������� ���� ��
			������ ����Ű�� �ʽ��ϴ�.";
$mem_limit_low_msg="PHP memory ������ 16MB���� �۽��ϴ�. ������� ������ �� ������ �� �� �ֽ��ϴ�.
			php.ini ������ memory_limit�� ������Ű�ų� ����� �׸��� ���� �ػ󵵷� ��ȯ�� �� ��õ� �Ͻñ�
			�ٶ��ϴ�.";
$choose_def_quali="�׸��� �⺻ ǰ�� ����";
$choose_def_quali_warn="CPU �ӵ��� 1GHz ������ ��쿣 ���� ǰ���� �������� ������.(heavy CPU load)";

/* third_stage_install (page 3) */
$inst_superadmin_header="MySQL Database ������ ����";
$inst_superadmin_name="MySQL DB ������ ���̵�:";
$inst_superadmin_name_info="&lt;-MySQL Database ������ ���̵� (must exist in DB)";
$inst_superadmin_pass="MySQL DB ������ ��й�ȣ:";
$inst_superadmin_pass_info="&lt;-MySQL ������ ��й�ȣ (must exist in DB)";

$inst_admin_header="LinPHA ������ ����";
$inst_admin_name="LinPHA ������ ���̵�:";
$inst_admin_name_info="&lt;-the LinPHA ������ ���̵�";
$inst_admin_pass="LinPHA ������ ��й�ȣ:";
$inst_admin_pass_info="&lt;-LinPHA ������ ��й�ȣ";
$inst_admin_email="������ email:";
$inst_admin_email_info="&lt;-������ email �ּ�";

$inst_db_header="LinPHA Database ���� ����";
$inst_db_host="ȣ��Ʈ��:";
$inst_db_host_info="&lt;-ȣ��Ʈ��: �Ϲ������� &quot;localhost&quot;";
$inst_db_host_info2="&lt;-ȣ��Ʈ��: MySQL database ȣ��Ʈ��";
$inst_db_host_port="��Ʈ��ȣ:";
$inst_db_host_port_info="&lt;-��Ʈ��ȣ: �� �𸣸� �׳� �� ��";
$inst_db_name="LinPHA Database �̸�:";
$inst_db_name_info="&lt;-LinPHA Database �̸�, �Ϲ������� &quot;linpha&quot;";
$inst_db_name2="Database �̸�:";
$inst_db_name_info2="&lt;-ISP���� �����ϴ� database �̸�";
$inst_table_prefix="LinPHA tables�� ����� ���ξ�";
$inst_table_prefix_info="&lt;-��� LinPHA tables�� ����� ���ξ�";

$general_header="�⺻ �ɼ� ����";
$general_album_title="���� �ٹ��� ����";
$general_album_title_info="&lt;-����θ� �⺻�̸� ���";
$general_photos_row="ȭ�鿡 ������ �� ��:";
$general_photos_row_info="&lt;-i.e. ȭ�鿡 ������ ������� �� ��";
$general_photos_col="ȭ�鿡 ������ �� ��:";
$general_photos_col_info="&lt;-i.e. ȭ�鿡 ������ ������� �� ��";
$general_photos_width="�⺻ ������ ũ�� ����(�ʺ�):";
$general_photos_width_info="&lt;- 512 (�⺻ ũ��)";
$general_photos_height="�⺻ ������ ũ�� ����(����):";
$general_photos_height_info="&lt;- 384 (�⺻ ũ��)";
$general_img_quality="�⺻ ������ ǰ��:";
$general_img_quality_info="&lt;- �̹��� ǰ���� 0~100�� ������ �� �ִ�. (�⺻�� 75)";

$inst_status_3="��� �׸� ���� �Է��ϼ���!";
$inst_status_step3="3 / 4 �ܰ�";

/* forth_stage_install (page 4) */
$inst_status_4="��ġ�� �Ϸ� �Ǿ����ϴ�! LinPHA�� ����� �� �ֽ��ϴ�.";
$inst_status_step4="4 / 4 �ܰ�";
$inst_submit="����";
$inst_db_tryconn="Database ���� ����";
$inst_db_tryconn_error="Database ���� ���ӿ� �����Ͽ����ϴ�. using:";
$inst_db_tryconn_ok="�����!";
$inst_db_tryinst="Database ����:";
$inst_db_tryinst_error="Database ���� ����:";
$inst_db_tryinst_ok="������!";
$inst_create_tb_msg="��� tables ������";

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
$inst_db_connect_inc_msg="Database ���� ���� ����!";
$inst_db_connect_inc_msg1="DB���� $db_realname �� �����ϴ� �� ���� �߻�.<br>
	�� �޽����� ��ġ�ϴ� ���� ��Ÿ���ٸ�, linpha ���� ���丮 �� &quot;sql&quot; �Ʒ���
	db_connect.php ������ �����ϼ���.";
/* ------------------------------------------------------------------ */

$table_create="���̺� ���� ��:";
$table_create_error="���̺� ���� ����!";
$table_create_ok="���� ����!";
$table_insert_admin="Admin ���� ���� ��:";
$table_insert_admin_error="Admin ���� ���� ����!";
$table_insert_admin_ok="���� ����!";
$write_db_config="Database ���� ���� ���� ��";
$fopen_error="sql/db_config.php�� ����� �� �� �����ϴ�. chmod 777 �� ���� ���� �� �ٽ� ��ġ�ϼ���.";
$fopen_ok="���� �ۼ�!";
$install_finish_msg="��ġ �Ϸ�!!";
$admin_task="click�ϸ� ��� ����˴ϴ�.";
$file_create_ok="���� ����!";
$configure_error="��� �ʵ忡 ���� ä���ּ��� !!!";
$could_not_open="���̺� ����� ���� ����! DB�� ���ο� ����ڸ� ����� �� �ִ� ������ ���� ���Դϴ�.<br>
				��ġ ���� �� 2��° ���������� �������� ���Ӹ޴��� �����ϼ���.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The Linux Photo �����";
$head_title="The Linux Photo �����";
$book_home="Ȩ";
$book_about="about";
$book_admin="������";
$book_admin_user="����";
$book_links="����";
$book_search="�˻�";
$book_logout="�α׾ƿ�";
$book_login="�α���";
$num_pictures="������:";
$user_visits=": �湮��";
$user_online=": �������� �����";
$guest="�մ�";
$html_lang="ko";
$html_charset="euc-kr";

/*#################################################
## index.php
#################################################*/
$index_welc_text="�ȳ��ϼ���. &quot;The Linux Photo �����&quot; aka LinPHA �� �ʱ� ������ �Դϴ�.
			�ֱ� ������Ʈ�� ������ <a href='http://linpha.sf.net/'><u>LinPHA</u></a>���� ���� �� �ֽ��ϴ�.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-�˻�";
$radio_all="���";
$radio_descript="���";
$radio_comment="����";
$radio_category="�з�";
$radio_file="���ϸ�";
$search_in="�ٹ����� ã��";
$search_all="��� �ٹ����� ã��";
$search_for="�˻���";
$search_button="�˻�";
$photos_found="ã����";
$search_info="LinPHA �˻� ������";
$search_msg="LinPHA �����ͺ��̽����� ã��:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="�̹��� ����";
$img_size="����ũ��";
$img_com="����";
$img_des="���";
$img_cat="�з�";
$img_name="�̸�";
$img_info_stored="DB�� �ڸ�Ʈ ����";
$please_login="�ڸ�Ʈ�� �ۼ��ϱ� ���ؼ� <a href='login.php'><font color='#000099'><u>�α���</u></font></a>�� �ϼž� �մϴ�.";
$back_to_thumbs="<b><u>����� ��� ����</u></b>";
$back_to_search="<b><u>�˻����� ����</u></b>";
$button_next="����";
$button_prev="����";
$exif_ext_error="�� PHP ������ EXIF�� �������� �ʽ��ϴ�.";
$exif_error="�̹����� exif ������ ��� ���� �ʽ��ϴ�!";
$exif_more="���� ����";
$exif_less="��� ����";
$detail_header="����";
$detail_header1="/";
$detail_header2="���� ��������<br>";
$php_to_old="PHP < 4.2.0 EXIF ��Ȱ��!";
$views="ȸ ��ȸ";
$slideshow="�����̵� ��";
$seconds="��";
$go="����";
$stopslide="����";
/* image rotating */ /* TODO next */
$img_rotate_ok="�̹��� ��ȯ ����";
$img_rotating="�̹��� ��ȯ ����"; // TOC entry
$img_rotating_hint1="�̹��� ��ȯ ��Ȱ��!";
$img_rotating_hint2="to see why";

/*#################################################
## login.php
#################################################*/
$login_msg="�α����ϼ���!";
$login_error="�� �� ���� ����� �Ǵ� ��й�ȣ";
$login_name="����� ID";
$login_pass="��й�ȣ";
$login_info="LinPHA �α��� ������";
$login_request_account_info="���ο� ���� ��û:"; /* TODO change! */
$login_request_target="LinPHA �����ڿ��� ����"; /* TODO */
$login_admin_info="���� �۾��� ���ؼ� LinPHA admin �������� �α��ؾ� �մϴ�.";
$login_friend_account_info="���� &quot;ģ��&quot; ������ ������ �ִٸ�,
���κ� ������ �̰����� ������ �� �ֽ��ϴ�.";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA ����";
$please_turn_off_msg="�̹����� ����� �ڿ��� '����� �ڵ� ����/����'�� ��Ȱ��ȭ�ϼ���.<br>
						LinPHA�� 10�� �̻� �������ϴ�. :)";
/* left menu */
$logout_msg="�α׾ƿ�";
$welc_msg="ȯ���մϴ� ";
$stat_msg="����� �׸��� <b>�ڸ�Ʈ</b>�� ������ �� �� �ִ� ������ �ο��޾ҽ��ϴ�.";
$back_to_msg="<b>�׸������ ���ư���</b>";
$href_general_conf="�Ϲ� ȯ�漳��";
$href_user_conf="����� ����";
$href_folder_conf="���� ����";
$href_sql="MySQL DB ����"; /* TODO */
$href_ftp="FTP ����";
$href_stats="LinPHA ����ڷ�";
$href_other_conf="����� EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA �⺻ ���";
$default_language_info="&lt;--�⺻ ��� ����";
$general_auto_lang="��� �ڵ� ���� Ȱ��/��Ȱ��"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- �湮�� �������� �� �ڵ� �˻�";
$general_success_msg="! ���� �Ϸ� !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="�̹��� ��ȯ Ȱ��/��Ȱ��";
$general_rotate_info="&lt;-- <b>ū �������� ���Ͽ� ������ ��</b>";
$general_exifinfo="��� EXIF ���� Ȱ��/��Ȱ��";
$general_exifinfo_info="&lt;-- EXIF ��� Ȱ��/��Ȱ��";
$general_exifdefault="�⺻���� EXIF ���� ����";
$general_exifdefault_info="&lt;-- �⺻���� EXIF ���� ���� Ȱ��ȭ";

$general_exiflevel="EXIF ���� �ܰ�";
$general_exiflevel_info="&lt;-- EXIF ���� �ܰ� ����";
$exif_low="����";
$exif_medium="�߰�";
$exif_high="����";
$general_filename="���ϸ� ���̱� Ȱ��/��Ȱ��";
$general_filename_info="&lt;-- ����� �ؿ� ���ϸ� ���̱�";
$general_thumb_order="����� ���� ����";
$general_thumb_order_info="&lt;-- ���ϸ� Ȥ�� ��¥�� ����Ϻ��� ������ ���Ѵ�.";
$thumb_order_date="��¥";
$thumb_order_file="���ϸ�";
$general_autoconf="����� �ڵ� ����/����";
$general_autoconf_info="&lt;-- <b>��Ȱ������ �����ϸ� �ӵ��� ����</b>";
$general_counterstat="counter Ȱ��/��Ȱ��";
$general_counterstat_info="&lt;-- �⺻���� Ȱ��";
$general_blocking="IP�� Count ���� �ð�(��)";
$general_blocking_info="&lt;-- ������ �ð� ���� ���Ӱ� Count���� �ʴ´�.";
$general_theme="LinPHA �׸� ����";
$general_theme_info="&lt;-- LinPHA �⺻ �׸� ����";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="HQ ����ϰ� �̹��� Ȱ��/��Ȱ��";
$general_hq_info="&lt;-- ��Ȱ���̸� �ӵ��� �����ȴ�.";
$submit_button_general="������� ����";
$button_on_msg="Ȱ��";
$button_off_msg="��Ȱ��";
$basic_opts="�⺻";
$advanced_opts="���";
$show_basics="::�⺻ �ɼ����� ����::";
$show_advanced="::��� �ɼ����� ����::";
$general_printing="�մ԰��� �μ� ���� Ȱ��/��Ȱ��";
$general_printing_info="&lt;-- Ȱ������ ������ �� ��� ����� �μ� ������";
$general_slideshow="�����̵�� Ȱ��/��Ȱ��";
$general_slideshow_info="&lt;-- �����̵� Ȱ��ȭ�ϰų� ��Ȱ��ȭ�Ѵ�.";
$general_mini_preview="����/���� ��ư �̹��� ����/ũ��";
$general_mini_preview_info="&lt;-- ��Ȱ������ ������ ��� ���� �뿪�������� ���� ����ڰ� ����� �� ����";

/* modify existing user table */
$mod_user_header="���� ���� ����";
$submit_button_mod_user="���� ����";
$mod_user_success_msg="! ���� ���� !";
$submit_button_delete="����";
$del_user_success_msg="! ���� ���� !";

/* add new user table */
$new_user_header="���ο� ����� ����";
$new_user_name_info="����� ���̵�";
$new_user_pass_info="��й�ȣ";
$new_user_mail_info="�̸���";
$new_user_level_info="����ڵ��";
$friend="ģ��";
$submit_button_new_user="����� ����";
$new_user_success_msg="! ����� ����!";

/* friends account table */
$friend_user_header="���� ����";
$submit_button_friend_user="���� ����";
$delete_button_friend_user="���� ����";
$friend_info_msg="���� ȯ�� ����/����";

/* add new category table */
$new_cat_header="�� �з� �߰�";
$new_cat_info="���� �߰��� �з���";
$submit_button_new_cat="�з� ����";
$new_cat_success_msg="! �з��� ������!";
$mod_cat_header="�з� ����/����";
$cat_name_header="�з���";
$cat_mod_header="�з� ����";
$cat_del_header="�з� ����";
$submit_button_mod_cat="����";

/* set directory permissions */
$set_dir_perms_header="���� ���� ����";
$dir_name="����";
$dir_perms="����";
$action="����";
$submit_button_folder="Ȯ��";
$public="����";
$friends="ģ����";
$private="�����";
$new_perms_success_msg="! ���� �����!";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="��ü ���";
$stats_over_photos="����� �̹�����:";
$stats_over_views="��ü ��ȸ��:";
$stats_over_albums="����� �ٹ���:";
$stats_over_most_alb_visists="���� ���� �湮�� �ٹ�:";
$stats_over_space="��� �ٹ��� �����ϴ� ��ũ����:";
$stats_over_visitors="�湮�ڼ�:";
$stats_over_users="��� �����:";
$stats_top_ten="��ȸ�� Top 10";
$stats_rank="����:";
$stats_no_views="��ȸ��:";
$stats_last_view="�ֱ� ��ȸ:";
$stats_alb_name="�ٹ� �̸�:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="ù��° �Ľ�";
$parse_sec="�ι�° �Ľ�";
$parse_third="����° �Ľ�";
$parse="���� �Ľ�";
$parsed="�Ľ̵�:";
$dirs="���� ���丮��";
$done="��� ó����";
$not_allowed_msg="�� ��ũ��Ʈ�� �����ϵ��� �㰡���� �ʾҽ��ϴ�!";
/* these entries are called from within admin.php */
$th_msg="��� ����� �ѹ��� �����!";
$table_hint_msg="��� �������丮�� ������� �ٽ� ����ϴ�!";
$start_button="����!";
$recreate_thumbs_header="��� ����� �ٽ� �����";
$recreate_thums_msg="��� ������� �ٽ� ����ϴ�! ��� �ڸ�Ʈ, ����, ���� ������ ������ϴ�!";
$recreate_thums_warning="�� �۾��� ��� �ڸ�Ʈ, ����, ���� ������ ������ϴ�. ���� ������ ���� �����ϴ�. ���� �����ϱ� ���Ͻʴϱ�?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="�μ� ���̾ƿ� ����";
$images_page="�̹�����/������";
$indexprint="ã�ƺ��� �μ� (28)";
$note="<strong>�޸�:</strong> �μ��ϱ� �� �� �������� \"������ ����\"����
			�������� ��� �׸��� ��µ� �� �ֵ��� �����ؾ� �մϴ�!!!";
$print_button="�μ� �̸�����";
$href_check_all="��� ����";
$href_clear_all="��� ���";
$print_error="����, �̹����� �������� �ʾҽ��ϴ� !!!";
$print_mode="�μ� ���";
$print_image="�̹��� �μ�";
$videos_msg="���� ������ �μ��� �� �����ϴ�";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL �����ͺ��̽� ���� �ý��� ver.";
$mysql_cancel="���";
$mysql_DHTML_hint="DHTML ���� ��Ȱ�� - ����� �����ϴ� ���� �ٸ� ���� ���� �ʴ� ��쿡 ���";
$mysql_select_all="��� ����";
$mysql_deselect_all="��� ���þ���";
$mysql_create_backup="��� �����";
$mysql_back_menu="�޴��� ���ư���";
$mysql_table_checks="��� Table �˻�...";
$mysql_table_check="Table �˻�";
$mysql_struct_msg="���� �����";
$mysql_in_file_dump_msg="�ڷ� ����ޱ�";
$mysql_progress="��ü ���� ����:";
$mysql_back_complete="��� �Ϸ� in";
$mysql_back_menu_long="MySQL �����ͺ��̽� ��� �ʱ� �޴��� ���ư���";
$mysql_open_warn1="<B>���:</B> ���� ���� ";
$mysql_open_warn2="���丮�� ������ 777�� ��ȯ�Ͻÿ�!<BR><BR><I>CHMOD 777</I>";
$mysql_date_msg="������ "; // it follows time of the day...
$mysql_last_backup="MySQL �����ͺ��̽� ������ ��ü ���: ";
$mysql_backup_hint="�Ϲ������� 1���Ͽ� �� �� �̻��� ��� �۾��� �ʿ����.";
$mysql_down_backup="���� ��ü ��� �ٿ�ε� ";
$mysql_down_backup_part="������ �Ϻ� ��� �ٿ�ε� ";
$mysql_down_backup_struct="������ ������ ��� �ٿ�ε� ";
$mysql_down_backup1="(������-Ŭ��, �ٸ� �̸����� ����...)";
$mysql_unknown_backup="������ MySQL �����ͺ��̽� ���: <I>�� �� ����</I>";
$mysql_href_recom="�� ��ü ��� ����, ���(��õ)";
$mysql_href_standard="�� ��ü ��� ����, ǥ��(���� ������)";
$mysql_href_partial="�� ��ü ��� ����, ���õ� ���̺�";
$mysql_href_structure="�� ��ü ��� ����, ���̺� ������";
$mysql_days_last="��";
$mysql_hours_last="��";
$mysql_min_last="��";
$mysql_sec_last="��";
$ago="����"; // reads in context "some days ago"
$backup="���";
$restore="����";
$optimize="����ȭ";
$optimize_tables="table ����ȭ";
$opt_table_name="���̺��";
$opt_table_check="���̺� �˻�";
$opt_table_optimize="���̺� ����ȭ";
$opt_table_msg="Type of message";
$opt_start_msg="��� DB Table�� ����ȭ�� �����մϴ�.";
$fullback_hint_msg="���� �����ͺ��̽��� ����ϰ� �ִٸ� <b>�Ϻ�</b> ��� ����� �����ϼ���.";
$restore_last_fullback="������ <b>��ü</b> ��� ����:";
$restore_last_partback="������ <b>�Ϻ�</b> ��� ����:";
$restore_error="��������� �� �� ������ �߻��߽��ϴ�. ������ ã�� �� �����ϴ�!";
$restore_success="���� �Ϸ�!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>���� ����</H1> �� ���丮�� ������ �� �ִ� ������ �����ϴ�');
define('STR_BACK',	'�ڷ�');
define('STR_LESS',	'����');
define('STR_MORE',	'��');
define('STR_LINES',	'�� ��');
define('STR_FUNCTIONLIST', '�Լ� ���');
define('STR_EDIT',	'����');
define('STR_VIEW',	'����');
define('STR_RENAME',	'�̸�����');
define('STR_MKDIR',		'���丮����');
define('STR_DELETE',	'����');
define('STR_BOTTOM',	'�Ʒ�');
define('STR_TOP',		'��');
define('STR_FILENAME',	   '���ϸ�');
define('STR_FILESIZE',	   'ũ��');
define('STR_LASTMODIFIED', '������ ������');
define('STR_SUM', '<B>%s</B> ����Ʈ in <B>%s</B> �׸��');
define('STR_CREATEDIRLEGEND', '���丮 ����');
define('STR_CREATEDIR',       '������ ���丮 �̸�:');
define('STR_CREATEDIRBUTTON', '���丮 ����');
define('STR_RENAMELEGEND',       '�̸�����');
define('STR_RENAMEENTERNEWNAME', '���ο� �̸� �Է� %s:');
define('STR_RENAMEBUTTON',       '�̸�����');
define('STR_ERROR_DIR','����: ���丮�� ������ ���� �� �����ϴ�.');
define('STR_AUDIO',            '�����');
define('STR_COMPRESSED',       '����');
define('STR_EXECUTABLE',       '����');
define('STR_IMAGE',            '�̹���');
define('STR_SOURCE_CODE',      '�ҽ� �ڵ�');
define('STR_TEXT_OR_DOCUMENT', '����');
define('STR_WEB_ENABLED_FILE', '���� ����');
define('STR_VIDEO',            '����');
define('STR_DIRECTORY',        '���丮');
define('STR_PARENT_DIRECTORY', '���� ���丮');
define('STR_EDITOR_SAVE',      '����');
define('STR_EDITOR_SAVE_ERROR','<I>%s</I> ������ �� �� ���ų� �������� �ʽ��ϴ�');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','00���� FF ������ 16���� ���� �Է��Ͻÿ�.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','0���� 255 ������ 10���� ���� �Է��Ͻÿ�.');
define('STR_FILE_UPLOAD_NAVI_HINT', '���� �̵�');
define('STR_FILE_UPLOAD_DRIVES', '����̺�:');
define('STR_FILE_UPLOAD', '���ε�');
define('STR_FILE_UPLOAD_MAIN', '���ε�');
define('STR_FILE_UPLOAD_DISABLED', 'php.ini ���Ͽ� ���ε� ����� ��Ȱ������ �����Ǿ� �ֽ��ϴ�.');
define('STR_FILE_UPLOAD_DESC','���ε带 �Ϸ��� ������ �����ϼ���. �׸��� ���ε尡 �Ϸ�� �� ������ �����ϼ���.');
define('STR_FILE_UPLOAD_FILE','����');
define('STR_FILE_UPLOAD_TARGET','���ε� ��ġ ');
define('STR_FILE_UPLOAD_ACTION','���ε� ���� �� ����:');
define('STR_FILE_UPLOAD_NOTHING','���۾���');
define('STR_FILE_UPLOAD_DROPFILE','������ ���� �Ϸ� �� ���ε� ���� ����');
define('STR_FILE_UPLOAD_MAXFILESIZE','php.ini�� ������ 1���� ���ϸ��� ���Ǵ� �ִ� �뷮 ');
define('STR_FILE_UPLOAD_ERROR',        '����: %s ������ %s ���丮�� �̵��� �� �����ϴ�.');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '����: Unable to switch (chdir) to %s directory. File being processed: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '����: Unable to delete %s after processing.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '����: php.ini ������ upload_max_filesize �ʰ� %s - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','����: HTML FORM �±��� ���ε� ������ �ʰ� %s');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '����: The uploaded file %s was only partially uploaded');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="�ĳ�� ����"; /* (img_view.php) -- new [panorama view] href  */
$close_win="â �ݱ�"; /* (various files) -- javascript close window */
$nav_hint="���콺�� ȭ��ǥ Ű�� �̿��Ͽ� �̵��ϼ���."; /* (image_panorama_view.php) --  */
$pano_view_of="�ĳ�� ����"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="PHP�� open basedir ���� �˻� "; /* (sec_stage_install.php) --  */
$req_basedir_fail="�ȵ�"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="����, \"open_basedir\" PHP ���� ����. !<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ LinPHA will use GD lib to create thumbs, however expect some problems<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ If possible, please unset \"open_basedir\" in PHP.ini"; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ If possible, please unset \"open_basedir\" in PHP.ini or recompile PHP with GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="*.tar.gz ���� Ǯ�� (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="*.tar.bz2 ���� Ǯ�� (UNIX)"; /* (index.php) --  */
$extract_gz="gzip Ǯ�� (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip Ǯ�� (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="pkzip Ǯ�� (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! �׷� �߰� !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! �׷� ���� !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! �׷� ���� !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! ī�װ� ���� !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! ī�װ� ���� !"; /* (admin.php) -- redirect message */
$href_groups="�׷� �߰� �Ǵ� ����"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="���: �� �������� �α��� �ϼ���!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="���� ������ ����"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="����� ������ ����"; /* (build_user_conf.php) -- navi href  */
$header_new_group="�� �׷� �߰�"; /* (build_user_conf.php) -- table header */
$header_groupname="�׷��"; /* (build_user_conf.php) -- table header */
$button_addgroup="�׷� �߰�"; /* (build_user_conf.php) -- submit button */
$header_mod_group="�׷� ����/����"; /* (build_user_conf.php) -- table header */
$mod_group_header="�׷� ����"; /* (build_user_conf.php) -- table header */
$del_group_header="�׷� ����"; /* (build_user_conf.php) -- table header */
$search_to_short="�˻�� �ʹ� ª���ϴ�. �ּ� 2���� �̻��̾�� �մϴ�."; /* (search.php) --  */
$general_thumb_size="����� ũ�� ����"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="&lt;-- �ִ� ����� ũ�� ����(px)"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="����� �׵θ� Ȱ��/��Ȱ��"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<-- ����Ͽ� �׵θ��� ǥ������ ����"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="����� ũ�� ����"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="�׵θ� ����"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="�̹��� �׵θ� Ȱ��"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="�̹��� �׵θ� ��Ȱ��"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="�߸���, you configured PHP to make use of \"safe_mode\" restrictions!<br />"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ If possible, please unset \"safe_mode\" in PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="�͸� �ڸ�Ʈ �ޱ� ���/����"; /* (build_general_conf.php) --  */
$general_anon_post_info="&lt;-- �͸� �ڸ�Ʈ �ޱ� ����"; /* (build_general_conf.php) --  */
$stats_over_comment="�ڸ�Ʈ ���"; /* (build_stats.php) --  */
$top10_downs_href="�ٿ�ε� top 10"; /* (build_stats.php) --  */
$top10_views_href="��ȸ�� top 10"; /* (build_stats.php) --  */
$stats_head_downs="�ٿ�ε� top 10"; /* (build_stats.php) --  */
$no_downloads="�ٿ�ε� ȸ��"; /* (build_stats.php) --  */
$general_anon_download="�͸� �ٿ�ε� Ȱ��/��Ȱ��"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- �ٿ�ε� ��ũ�� ���ϰ��� ������ ����"; /* (build_general_config.php) --  */
$seach_multiple_select_use="���� ���� ���"; /* (search.php) --  */
$search_and="�׸���"; /* (search.php) --  */
$search_or="�Ǵ�"; /* (search.php) --  */
$search_categories="ī�װ�"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="�ٹ� ����"; /* (search.php) --  */
$search_date_from_to="��¥ from / to"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="�� ��й�ȣ"; /* (build_user_conf.php) --  */
$new_user_error4="����ڸ��� ���� �� �����ϴ�."; /* (admin.php) --  */
$new_user_error5="����ڸ��� �̹� �����մϴ�."; /* (admin.php) --  */
$new_user_error1="���� ��й�ȣ�� ��ĥ �� �����ϴ�"; /* (admin.php) --  */
$new_user_error2="���� �Է��� �н����尡 ���Է��� �н������ ��ġ���� �ʽ��ϴ�."; /* (admin.php) --  */
$new_user_error3="Email�� ��ĥ �� �����ϴ�"; /* (admin.php) --  */
$new_user_old_password="���� ��й�ȣ"; /* (admin.php) --  */
$new_user_retype_password="���ο� ��й�ȣ ���Է�"; /* (admin.php) --  */
$select_db_header="Database ���� ����"; /* (sec_stage_install.php) --  */
$mysql_info="MySQL database ���� ����"; /* (sec_stage_install.php) --  */
$postgres_info="PostgreSQL �����ͺ��̽� ���� ����"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="�ڵ� �α�"; /* (toc.php) --  */
$login_autologin_user="�ڵ� �α� ����� ����"; /* (toc.php) --  */
$toc_timer="Ÿ�̸�"; /* (toc.php) --  */
$general_autologin="�ڵ� �α� Ȱ��/��Ȱ��"; /* (build_general_conf.php) --  */
$general_autologin_info="&lt;-- �ڵ� �α� �ɼ� ����"; /* (build_general_conf.php) --  */
$general_timer="Ÿ�̸� Ȱ��/��Ȱ��"; /* (build_general_conf.php) --  */
$general_timer_info="&lt;-- activate the output of the parsetime in the footer"; /* (build_general_conf.php) --  */
$login_autlogin="�ڵ� �α�"; /* (login.php) --  */
$lostpw_title="��й�ȣ ã��"; /* (login.php) --  */
$lostpw_question="��й�ȣ ã��"; /* (login.php) --  */
$lostpw_type_user_or_email="�̸��̳� �̸����� ��������."; /* (login.php) --  */
$lostpw_email1="Somebody has made use of the lost password function. If it wasn't you, just ignore this message and nothing will happen with your password. If it was you, put this code in the demanded field:"; /* (login.php) --  */
$lostpw_email1_part2="( ���� : �̰��� ����� �� �н����尡 �ƴմϴ�! )"; /* (login.php) --  */
$lostpw_email1_part3="Linpha ������"; /* (login.php) --  */
$lostpw_email_error="����: �̸����� ���� �� �����ϴ�. �����ڿ��� �����ϼ���."; /* (login.php) --  */
$lostpw_error_nothing_found="����ڸ��̳� ��й�ȣ�� ã�� �� �����ϴ�."; /* (login.php) --  */
$lostpw_email_sent="�̸����� ��ſ��� ���½��ϴ�."; /* (login.php) --  */
$lostpw_should_receive="�� �� ���� ������ ������ �� �ְ�, ���� �̸����� �ڵ带 �� �ʵ忡 �Է��ϼ��� : "; /* (login.php) --  */
$lostpw_go_back="�ڷ�"; /* (login.php) --  */
$lostpw_email2="��й�ȣ ���� ����. ���ο� ��й�ȣ:"; /* (login.php) --  */
$lostpw_email2_part2="You can change it later by using the \"my settings\" link."; /* (login.php) --  */
$lostpw_new_password="�� ��й�ȣ"; /* (login.php) --  */
$lostpw_successfully_changed="��й�ȣ ���� ����, �� ���ο� ��й�ȣ�� Email�� ���� ���� �� ���� ���Դϴ�."; /* (login.php) --  */
$lostpw_error_wrong_code="Sorry, that isn't correct."; /* (login.php) --  */
$lostpw_enter_correct_code="Enter the correct code from the email in this field:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA �÷�����"; /* (admin.php) --  */
$lang_plugins['watermark']="���͸�ũ"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="��ġ��ũ"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB ����"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="Ȱ��ȭ�� �÷�����"; /* (admin.php) --  */
$lang_plugins['enabled']="Ȱ��"; /* (plugins.php) --  */
$lang_plugins['disabled']="��Ȱ��"; /* (plugins.php) --  */
$lang_plugins['update']="����"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="�÷����� ����"; /* (admin.php, plugins.php) --  */
$wm_wm_man="���͸�ũ ���� "; /* (watermark.php) --  */
$wm_disable="���͸�ũ ��Ȱ�� "; /* (watermark.php) --  */
$wm_change_example_img="���� �̹��� ���� "; /* (watermark.php) --  */
$wm_no_input_files_found="������ ã�� �� �����ϴ�. "; /* (watermark.php) --  */
$wm_image_quality="�̹��� ǰ�� (�̸����⿡�� �����) "; /* (watermark.php) --  */
$wm_enable_text="���� Ȱ�� "; /* (watermark.php) --  */
$wm_text="���� "; /* (watermark.php) --  */
$wm_font="�۲� "; /* (watermark.php) --  */
$wm_fontsize="����ũ�� "; /* (watermark.php) --  */
$wm_fontcolor="���ڻ��� "; /* (watermark.php) --  */
$wm_align="���� "; /* (watermark.php) --  */
$wm_pos_hor="���� ��ġ "; /* (watermark.php) --  */
$wm_pos_ver="���� ��ġ "; /* (watermark.php) --  */
$wm_height="���ڿ� ���� "; /* (watermark.php) --  */
$wm_width="���ڿ� �ʺ� "; /* (watermark.php) --  */
$wm_shadow_size="�׸��� ũ�� "; /* (watermark.php) --  */
$wm_shadow_color="�׸��� ���� "; /* (watermark.php) --  */
$wm_enable_image="�̹��� Ȱ��"; /* (watermark.php) --  */
$wm_available_images="��밡�� �̹���"; /* (watermark.php) --  */
$wm_no_images_found="�̹����� ã�� �� �����ϴ�."; /* (watermark.php) --  */
$wm_dissolve="���պ���"; /* (watermark.php) --  */
$wm_preview="�̸�����"; /* (watermark.php) --  */
$wm_linebreak="�ٹٲ�"; /* (watermark.php) --  */
$wm_enable_shadow="�׸��� Ȱ��"; /* (watermark.php) --  */
$wm_enable_rectangle="���簢�� Ȱ��"; /* (watermark.php) --  */
$wm_rectangle_color="����"; /* (watermark.php) --  */
$wm_enable_ext_shadow="Ȯ�� �׸��� Ȱ��"; /* (watermark.php) --  */
$wm_status="����"; /* (watermark.php) --  */
$wm_enabled="Ȱ��"; /* (watermark.php) --  */
$wm_disabled="��Ȱ��"; /* (watermark.php) --  */
$wm_restore_to="�缳��"; /* (watermark.php) --  */
$wm_inital_settings="���� �ʱ�ȭ"; /* (watermark.php) --  */
$wm_add_more_examples="You can add more example images in your linpha directory in the folder"; /* (watermark.php) --  */
$wm_example="����"; /* (watermark.php) --  */
$wm_shadow_fontsize="�׸��� ����ũ��"; /* (watermark.php) --  */
$wm_settings_for_both="�̹����� ���� ����"; /* (watermark.php) --  */
$wm_center="���"; /* (watermark.php) --  */
$wm_north="��"; /* (watermark.php) --  */
$wm_northeast="�� ������"; /* (watermark.php) --  */
$wm_northwest="�� ����"; /* (watermark.php) --  */
$wm_south="�Ʒ�"; /* (watermark.php) --  */
$wm_southeast="�Ʒ� ������"; /* (watermark.php) --  */
$wm_southwest="�Ʒ� ����"; /* (watermark.php) --  */
$wm_east="������"; /* (watermark.php) --  */
$wm_west="����"; /* (watermark.php) --  */
$bm_file_err="����, ������ �������� �ʾҽ��ϴ�";
$bm_var_err="����, �Էº����� �˻��ϼ���";
$bm_notfound_err="����, ������ ã�� �� �����ϴ�";
$bm_noimg_err="����, �̹��� ������ �ƴմϴ�";
$bm_tmpfile_err="����, �ӽ� �̹��� ���ϻ��� ����";
$bm_tmpfile_warn="����: �ӽ� �̹��� ������ ���� �� �����ϴ�";
$bm_time_total="��ü ���� �ð�: ";
$bm_img_sec="1���� �̹��� ó�� �ð�: ";
$bm_avg_img="Average time for each image (mouse over to update image): ";
$bm_qual_size="ǰ��/ũ��";
$bm_quality="ǰ��: ";
$bm_height="����: ";
$bm_width="�ʺ�: ";
$bm_size="�̹��� ũ��: ";
$bm_create = "Creating benchmark with conversion utility";
$bm_interval = "����";
$bm_calc = "�����";
$bm_img = "�̹���";
$bm_inloop="���� ������";
$bm_qual_range="ǰ�� ����: ";
$bm_size_range="ũ�� ���� (���̸�): ";
$bm_repeats="�ݺ�: ";
$bm_con_util="��ȯ ���� ����: ";
$bm_current_settings="���� ����"; /* (benchmark.php) --  */
$bm_preview="�̸�����"; /* (benchmark.php) --  */
$bm_save_settings="���� ����"; /* (benchmark.php) --  */
$wm_addexamples="���͸�ũ: �����̹��� �߰�"; /* (watermark.php) --  */
$wm_addimg="���͸�ũ: ���͸�ũ �̹��� �߰�"; /* (watermark.php) --  */
$wm_addfont="���͸�ũ: ��Ʈ �߰�"; /* (watermark.php) --  */
$wm_colorsetting="���͸�ũ: ���� ����"; /* (watermark.php) --  */
$comment_hint="��Ʈ: �ٹ��� �ٸ� �̹����� �̵��Ϸ��� ��, �Ʒ� �̹����� �����ϼ���."; /* (linpha_comments.php) --  */
$comment_end="�ٹ��� ������ �̹����Դϴ�."; /* (linpha_comments.php) --  */
$comment_beginning="�ٹ��� ���� �̹����� �����ϴ�."; /* (linpha_comments.php) --  */
$comment_back="�̹��� ����� ���ư���"; /* (linpha_comments.php) --  */
$comment_edit_img="ī�װ�/�ڸ�Ʈ ����"; /* (linpha_comments.php) --  */
$comment_change_img_details="�̹��� ���� ����"; /* (linpha_comments.php) --  */
$comment_last_comments="������ �ڸ�Ʈ"; /* (linpha_comments.php) --  */
$comment_comment_by="comment by"; /* (linpha_comments.php) --  */
$category_delete_warning="Warning: Categories already assigned to images get lost"; /* (build_category_conf.php) --  */
$pass_2_short="����, ��й�ȣ�� �ּ��� 3�� �̻��̾�� �մϴ�"; /* (various) --  */
$album_edit="�ٹ� �ڸ�Ʈ ����"; /* (linpha_comments.php) --  */
$album_details="�ٹ� �󼼺���"; /* (linpha_comments.php) --  */
$wm_save_note="�޸�: ���͸�ũ�� �α����� ����ڿ��Դ� ������ �ʽ��ϴ�. ���� �α׾ƿ��� �� ���͸�ũ�� Ȯ���ϼ���."; /* (watermark.php) --  */
$lang_plugins['guestbook']="����"; /* (admin.php) --  */
$print_low_quality="���� ǰ��"; /* (printing_view.php) --  */
$print_high_quality="���� ǰ�� (�ſ� ����!)"; /* (printing_view.php) --  */
$gb_title="LinPHA ����";
$gb_sign="LinPHA ����! �� �޽��� �߰�";
$gb_from="��ġ";
$gb_from_no="No Location given";
$gb_pages="������";
$gb_messages="���� �޽���";
$gb_msg_error="�̸��� �ڸ�Ʈ�� �ʼ� �Է� �����Դϴ�.";
$gb_new_msg="�� �޽��� �߰�";
$gb_name="�̸�";
$gb_email="Email";
$gb_hp="Ȩ������";
$gb_country="�Ҽ� ����";
$gb_header="LinPHA ����";
$gb_opts="���� �ɼ�";
$gb_rows="�� �������� ������ �޽��� ��";
$gb_anon="�͸� �޽��� ��� Ȱ�� ����";
$gb_order="���� ����";
$wm_resize="���͸�ũ ũ�⸦ �̹��� ũ���� X% �׻� ����"; /* (watermark.php) --  */
$wm_help_and_descr="����"; /* (watermark.php) --  */
$folder_remove_hint="���� ��� ���� �� �Ǿ��ٸ� /install ������ ���켼��.(����)..."; /* (forth_stage_install.php) --  */
$add_alb_com="�ٹ� �ڸ�Ʈ �߰�"; /* (img_view.php) --  */
$add_img_com="�̹��� �ڸ�Ʈ �߰�"; /* (img_view.php) --  */
$album_com="�ٹ� �ڸ�Ʈ"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML �±� ����"; /* (various) --  */
$stat_cache_elements="ĳ�� �׸�"; /* (build_stats.php) --  */
$stat_cache_first="���ο� ĳ�� �׸�"; /* (build_stats.php) --  */
$stat_cache_hits="ĳ�� ����"; /* (build_stats.php) --  */
$stat_cache_hits_max="�ִ� ĳ�� ���� (���� �̹���)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="��� ĳ�� ���� (��� �̹���)"; /* (build_stats.php) --  */
$stat_cache_size="ĳ�� ũ��"; /* (build_stats.php) --  */
$stat_cache_convert_time="ĳ�÷� ���� ����ð�"; /* (build_stats.php) --  */
$stat_cache_size="ĳ�� ��� ũ��"; /* (build_stats.php) --  */
$cache_options="�̹��� ĳ�� �ɼ�";
$cache_max_size="�ִ� ĳ�� ũ�� (0 = ������)";
$path_2_cache="ĳ�� ���丮 (�⺻�� sql/cache)";
$cache_optimize="�̹��� ĳ�� ����ȭ/����"; 
$cache_maintain="�̹��� ĳ�� ��������";
$cache_opt_msg="!! ĳ�� ����ȭ !!";
$lang_plugins['cache']="�̹��� ĳ��"; /* () --  */
$stat_cache_title="�̹��� ĳ�� ����"; /* (cache.php) --  */
$bm_saved="���� ����"; /* (admin.php) --  */
$cache_optimize_by_size="Delete all cache elements where size (in kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Delete all cache elements not used for days:"; /* (cache.php) --  */
$elements_rem="�׸� ����"; /* (cache.php) --  */
$general_anon_album_downs="�͸����� �ٹ� �����Ͽ� �ٿ�ε� ���/�ź�"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- �͸� ����ڰ� �ٹ��� �����Ͽ� �ٿ�ε� �޵��� ������� ����"; /* (build_general_conf.php) --  */
$general_download_speed="�ٿ�ε� �ӵ� ����(kb/sec, 0=������)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- �ٿ�ε� �ӵ� �ִ밪 ����"; /* (build_general_conf.php) --  */
$general_navigation="�׺������ Ȱ��/��Ȱ��"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- ����� �������� �׺������ Ȱ�� ����"; /* (build_general_conf.php) --  */
$toc_navigation="�׺���̼� Ȱ��/��Ȱ��"; /* (doc/) --  */
$toc_zip_download="�͸� �ٹ� �ٿ�ε� Ȱ��/��Ȱ��"; /* (doc/) --  */
$toc_albdownlimit="�ٿ�ε� �ӵ� ����"; /* (doc/) --  */
$choose_zips_msg="������ �̹��� �ٿ�ε�"; /* (build_zip_view.php) --  */
$zip_button="���� �ٿ�ε�"; /* (build_zip_view.php) --  */
$type_of_archive="���� ���� ����"; /* (build_zip_view.php) --  */
$create_tar="tar �����"; /* (build_zip_view.php) --  */
$create_tgz="tar.gz �����"; /* (build_zip_view.php) --  */
$create_bz2="tar.bz2 �����"; /* (build_zip_view.php) --  */
$create_zip="zip �����"; /* (build_zip_view.php) --  */
$create_rar="rar �����"; /* (build_zip_view.php) --  */
$menumsg['advanced']="��� �ɼ�"; /* () --  */
$menumsg['printmode']="������ ���"; /* () --  */
$menumsg['printprobs']="Printing Disabled?"; /* () --  */
$menumsg['downloadmode']="�ٿ�ε� ���"; /* () --  */
$menumsg['mailmode']="���� ���"; /* () --  */
$menumsg['addcomment']="�ٹ� �ڸ�Ʈ �߰�"; /* () --  */
$menumsg['delcomment']="�ٹ� �ڸ�Ʈ ����"; /* () --  */
$menumsg['editcomment']="�ٹ� �ڸ�Ʈ ����"; /* () --  */
$album_up="������"; /* (album_comment.php) --  */
$album_ins="���Ե�"; /* (album_comment.php) --  */
$mail_link="���ϸ� ����Ʈ"; /* (header.php) --  */
$mail_title="LinPHA ���ϸ� ����Ʈ"; /* (mail.php) --  */
$mail_send_link="���� ����"; /* (mail.php) --  */
$mail_return_address="ȸ�� �ּ�:"; /* (mail.php) --  */
$mail_block="Mail Block Size:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="���ϸ� ����Ʈ �ɼ�"; /* (mail.php) --  */
$mail_go_back="�ڷ�"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail �޽���"; /* (mail_form.php) --  */
$mail_form_subject="����:"; /* (mail_form.php) --  */
$mail_form_msg="����:"; /* (mail_form.php) --  */
$mail_total_sent="Total e-mail(s) sent:"; /* (mail_form.php) --  */
$mail_subscribe="����"; /* (mail_users.php) --  */
$mail_unsubscribe="��������"; /* (mail_users.php) --  */
$mail_activate="Ȱ��ȭ"; /* (mail_users.php) --  */
$mail_user_name="�̸�:"; /* (mail_users.php) --  */
$mail_user_email="E-Mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Confirm E-Mail:"; /* (mail_users.php) --  */
$mail_user_code="Activation Code:"; /* (mail_users.php) --  */
$mail_user_code_sent="An e-mail with the activation code has been sent to your e-mail account."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing List Activation"; /* (mail_users.php) --  */
$mail_user_activated="Your account has been activated!"; /* (mail_users.php) --  */
$mail_user_activate_error="There was an error in activating your account!"; /* (mail_users.php) --  */
$mail_user_email_not_found="���ϸ� ����Ʈ�� �������."; /* (mail_users.php) --  */
$mail_user_remove_ok="���ϸ� ����Ʈ���� ����."; /* (mail_users.php) --  */
$mail_user_remove_fail="���ϸ� ����Ʈ���� ���� �Ұ���."; /* (mail_users.php) --  */
$mail_user_empty="Fill in all fields."; /* () --  */
$mail_user_no_match="E-Mail ��ġ����."; /* () --  */
$mail_user_exists="�̹� ��ϵ� E-Mail�Դϴ�."; /* (mail_users.php) --  */
$lang_plugins['mail']="���ϸ� ����Ʈ"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="��Ʈ"; /* (mail.php) --  */
$mail_user_permission="All users in the group 'mail' are able to send messages to the mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Current subscribers"; /* (mail.php) --  */
$mail_name="�̸�"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Subscribing Date"; /* (mail.php) --  */
$mail_active="Ȱ��"; /* (mail.php) --  */
$mail_sent_to="Email sent to"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="Miscellaneous Help"; /* () --  */
$mail_create_group="(You have to create the group 'mail' yourself.)"; /* (mail.php) --  */
$alb_th="�ٹ��� ���� ����"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1��','2' => '2��','3' => '3��','4' => '4��','5' => '5��','6' => '6��','7' => '7��','8' => '8��','9' => '9��','10' => '10��','11' => '11��','12' => '12��'); /* abrevations of months */
$arr_month_long = Array('1' => '1��','2' => '2��','3' => '3��','4' => '4��','5' => '5��','6' => '6��','7' => '7��','8' => '8��','9' => '9��','10' => '10��','11' => '11��','12' => '12��'); /* months */
$arr_day_short = Array('��','��','ȭ','��','��','��','��'); /* abrevations of weekdays */
$arr_day_long = Array('�Ͽ���','������','ȭ����','������','�����','�ݿ���','�����'); /* weekdays */
$layout="���̾ƿ�";
$features="Ư¡";
$perform="����";
$general_comment_in_subfolder = '���� ���� �ڸ�Ʈ �ޱ� Ȱ��/��Ȱ��';
$general_comment_in_subfolder_info = '<-- ���� ���� �̸����⿡�� �ٹ� �ڸ�Ʈ ����';
$general_default_date_format = '��¥ ǥ�� ����';
$general_default_date_format_info = '<- ��: 06/28/2004, �ڼ��� ����';
$general_default_time_format = '�ð� ǥ�� ����';
$general_default_time_format_info = '<- ��: 01:45:50 PM, �ڼ��� ����';
$general_new_images_folder = '������ "���ο� �̹���" ����';
$general_new_images_folder_info = '<- "���ο� �̹���"�� ���� ���� ����';
$general_new_images_folder_age = '"���ο� �̹���"�� ǥ���� ��¥';
$general_new_images_folder_age_info = '<- ���ο� �̹����� ǥ���� �ִ� ��¥';
$control_key="Ctrl"; /* (various) --  */
$search_date="��¥"; /* (search.php) -- reads: date from to... */
$search_from="����"; /* (search.php) -- reads: date from to... */
$search_to="����"; /* (search.php) -- reads: date from to... */
$start_slide="�����̵�� ����"; /* (img_view.php) --  */
$pass_msg="�� �н������ �α��Ͻÿ�."; /* (build_my_settings.php) --  */
$str_new_images = "���� ��ϵ� �̹���"; /* (new_images.php) -- */
$str_order_by = "���ļ��� : "; /* (new_images.php) -- */
$str_age = "�Ⱓ"; /* (new_images.php) -- */
$str_album = "�ٹ�"; /* (new_images.php) -- */
$str_in_album = "In �ٹ�"; /* (new_images.php) -- */
$str_img_newer_than = "���� %s�� ���� ��ϵ� �� �̹���"; /* (new_images.php) -- */
$timespanfmt = "%s�� %s�ð� %s�� %s��"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Delete all cached images with watermarks"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="���� ����:"; /* (plugins/ftp/index.php) --  */
$str_read="�б�"; /* (plugins/ftp/index.php) --  */
$str_write="����"; /* (plugins/ftp/index.php) --  */
$str_execute="����"; /* (plugins/ftp/index.php) --  */
$str_owner="������"; /* () --  */
$str_group="�����׷�"; /* (plugins/ftp/index.php) --  */
$str_all_other="�׿� �����"; /* (plugins/ftp/index.php) --  */
$str_copy="����"; /* (plugins/ftp/index.php) --  */
$str_copy_to="%s�� ����:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="%s�� �̸�����:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="�̹��� ��ȯ ��Ȱ��"; /* (img_view.php) --  */
$str_no_write_perm="���� ���� ����"; /* (img_view.php) --  */
$str_new_images_in_these_folders="���� ��ϵ� �̹����� �ִ� �ٹ�:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="LinPHA�� �缳ġ�Ϸ���, ���� ./sql/db_connect.php ������ �����ؾ� �մϴ�! (You can do this with the integrated filemanager in the admin section)"; /* (install_header.php) --  */
$str_Version="����"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="����: PHP ȯ�漳������ �����ͺ��̽� ����� �������� �ʽ��ϴ�"; /* (sec_stage_install.php) --  */
$str_extract_with="When upload is completed, extract archive with"; /* (ftp/index.php) --  */
$str_files_to_upload="���ε�"; /* (ftp/index.php) --  */
$posix_check_msg="POSIX ���� �˻�..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Found POSIX support in your PHP installation. All functions of the integrated file management tool are activated."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="No POSIX support found in your PHP installation. Unable to use some functions of the integrated file management tool (Especially changing permissions of files)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Error: Settings could not be saved. Make sure your the path is spelled correctly and you have permissions to write into that directory."; /* (admin.php) --  */
$str_create_archive="%s ���� ���� ����"; /* (build_zip_view.php) --  */
$str_download_error="ERROR! The download couldn't be started for some reasons, sorry"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Search all images taken %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="If it takes too long to load, try a lower resolution:"; /* (image_panorama_view.php) --  */
$str_current_resolution="current resolution:"; /* (image_panorama_view.php) --  */
$href_group_conf="�׷� ����"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="������:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="�÷�����"; /* (plugin.php) --  */
$choose_mail_msg="Select images to mail"; /* () --  */
$new_user_full_name="��ü �̸�"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="ī�װ� ����"; /* (admin.php) --  */
$cat_private="��������"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Add more apps"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="checking for valid session settings..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session settings not correctly set. You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="All session settings correctly set. LinPHA should work properly."; /* (sec_stage_install.php) --  */
$new_user_error6="Error: You are not using your own account?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="�������� �� ������:"; /* (index.php) --  */
$str_select_row="�� ����"; /* (basket.php) --  */
$str_select="����"; /* (basket.php) --  */
$str_new_window="�� â"; /* (basket.php) --  */
$general_anon_mail_mode="�͸� ������� ���� ��� ���/�ź�"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- �͸� ������� ���� �̹��� ��� ����"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mail ���: �ִ� ���� ũ��"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- byte ������ �ִ� ũ��"; /* (build_general_conf.php) --  */
$general_thumbnail_view="����� ����"; /* (build_general_conf.php) --  */
$general_image_view="�̹��� ����"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL ���� ĳ�� Ȱ��/��Ȱ��"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- enable if slow SQL server or no PHP accelerator is used"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL ���� ĳ�� �ð�:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- set max caching time in minutes"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL ���� ĳ�� ���:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- ���� ĳ�� �����͸� ������ ��"; /* (build_general_conf.php) --  */
$str_other_features="��Ÿ Ư¡"; /* (build_general_conf.php) --  */
$str_language_settings="��� ����"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Sql ���� ĳ��"; /* (build_general_conf.php) --  */
$general_thumb_border="�ȼ������� ����� ���� ũ��"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0�̸� ��Ȱ��, �⺻���� 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="����� ���� ����"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- see info for details"; /* (build_general_conf.php) --  */
$str_recipient="�޴»��"; /* (basket_mail.php) --  */
$str_sender="�����»��"; /* (basket_mail.php) --  */
$str_mail_too_big="����: E-Mail�� �ʹ� Ů�ϴ�.<br /><br />��� ũ��: %sBytes. ������ �̹��� ũ�� %sBytes.<br /><br />�̹��� �Ϻθ� ����ų� ���� �ٿ�ε� ����� �̿��ϼ���!"; /* (basket_mail.php) --  */
$str_size_of_email="E-Mail ũ��: %s."; /* (basket_mail.php) --  */
$str_new_search="�� �˻�"; /* (search.php) --  */
$str_edit_search="���� �˻� ����"; /* (search.php) --  */
$str_View="����"; /* (img_view.class.php) --  */
$str_normal="����"; /* (img_view.class.php) --  */
$str_detail="�ڼ���"; /* (img_view.class.php) --  */
$search_result_empty="�־��� ���ǿ� ��ġ�ϴ� �׸��� �����ϴ�."; /* (search.php) --  */
$str_chars_entered="characters entered"; /* (img_view.class.php) --  */
$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="�ʱ� �������� ���� �̹��� Ȱ��/��Ȱ��"; /* () --  */
$general_random_image_info="<-- �ʱ� �������� ���� �̹��� ǥ�� ����"; /* () --  */
$general_random_image_size="�ʱ� ������ ���� �̹����� �ִ� ũ��"; /* () --  */
$general_random_image_size_info="<-- �ȼ� ������ �̹��� ũ�� "; /* () --  */
$str_edit_watermark="���͸�ũ ����"; /* (watermark.php) --  */
$str_edit_permissions="���͸�ũ ���� ����"; /* () --  */
$str_Everyone="���"; /* () --  */
$str_Nobody="�ƹ���"; /* () --  */
$str_only_logged_in_users=" �α��� ����ڸ�"; /* () --  */
$str_except_these_groups="����� �׷�:"; /* () --  */
$str_additionally_groups="������ �׷�:"; /* () --  */
$str_allow_these_persons="No watermarks for these users/groups"; /* () --  */
$str_album_based_permissions="Album based permissions"; /* () --  */
$str_all_albums_but_without_these="All albums, except these:"; /* () --  */
$str_only_on_these_albums="Only on these albums:"; /* () --  */
$str_allow_these_persons="����� ���"; /* (db_api.php) --  */
$str_no_watermarks="No watermarks for these persons"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="The default setting is 'Logged in users only' AND 'All albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA will probably NOT work correctly"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Try to create thumbnails for videos"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Turn off if you encounter problems with creating thumbnails for videos"; /* (build_generl_config.php) --  */
$general_update_notice="LinPHA ������Ʈ �˻� Ȱ��/��Ȱ��"; /* (build_generl_config.php) --  */
$general_update_notice_info="&lt;-- �� �ֿ� �ѹ��� ������Ʈ �˻�"; /* (build_general_config.php) --  */
$large="large"; /* (build_general_config) -- selectfield for mini images size */
$directories="���丮"; /* (build_thumbnail_conf.php) --  */
$do_nothing="���۾���"; /* (build_thumbnail_conf.php) --  */
$create="����"; /* (build_thumbnail_conf.php) --  */
$recreate="�����"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF ���� ��Ȱ����"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC ���� ��Ȱ����"; /* (build_thumbnail_conf.php) --  */
$silent_mode="ħ�� ���(e.g ħ�� ���� ����� ���� ǥ�þ���)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="�����"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA �α�"; /* (log.php) --  */
$log_options="LinPHA �α� �ɼ�"; /* (log.php) --  */
$log_method_label="Log to:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="����� �α���"; /* (log.php) --  */
$str_log_events['thumbnail']="����� ����"; /* (log.php) --  */
$str_log_events['update']="������Ʈ"; /* (log.php) --  */
$str_log_events['db']="�����ͺ��̽�"; /* (log.php) --  */
$str_log_events['filemanager']="���ϸŴ���"; /* (log.php) --  */
$str_events="�̺�Ʈ"; /* (log.php) --  */
$find_duplicates="�ߺ� �̹��� ã��"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Not enabled in PHP config (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="����"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="����� ����"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="��� ��� ����"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="���� ���� �̹���"; /* (build_general_conf.php) --  */
$str_download_images="�̹��� �ϳ� �ٿ�ε�"; /* (build_perms.php) --  */
$str_add_image_comments="�̹��� �ڸ�Ʈ �߰�"; /* (build_perms.php) --  */
$str_add_image_description="�̹��� ���� �� ī�װ� �߰�"; /* (build_perms.php) --  */
$str_mail_add_all_users="��� linpha ����� ���ϸ� ��Ͽ� �߰�"; /* (plugins/mail.php) --  */
$str_note_upload="<b>�޸�:</b> You don't have to upload your images through this form. You can use whatever you want (ftp,scp,nfs,local,...). Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Blacklist options (SPAM blocking)"; /* (varios) --  */
$blacklist_onoff="Enable message filtering"; /* (varios) --  */
$blacklist_keywords="Words to block:"; /* (varios) --  */
$str_entire_path="Entire path"; /* (search.php) --  */
$mail_format="Mail ����:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (�̹��� ÷��)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (�̹��� ����)"; /* (basket_mail.php) --  */
$mail_toggle_active="���"; /* (mail.php) --  */
$statistics="���"; /* (various) --  */
$stats_total_images="�� �̹���"; /* () --  */
$stats_total_img_views="�� �̹��� ����"; /* () --  */
$stats_total_img_downs="�� �̹��� �ٿ�ε�"; /* () --  */
$stats_total_img_downs="�� �̹��� �ٿ�ε�"; /* () --  */
$stats_total_img_selected="�� �̹��� ���� ����"; /* () --  */
$stats_total_downs_selected="�� �̹��� �ٿ�ε� ����"; /* () --  */
$stats_downloads="�ٿ�ε�"; /* () --  */
$stats_downl_size="�ٿ�ε� ũ��"; /* () --  */
$stats_coments_total="�� �ڸ�Ʈ"; /* () --  */
$stats_coments_sel="�ڸ�Ʈ ���õ�"; /* () --  */
$str_log_events['guestbook']="����"; /* (log.php) --  */
$stats_realtime="�ǽð� ��� Ȱ��/��Ȱ��"; /* (build_stats.php) --  */
$stats_realtime_info="<-- �ǽð��� ��� ��� ���� ǥ��(ĳ�� ������)"; /* (build_stats.php) --  */
$stats_cache_time="ĳ�� �ð� ���"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="�����"; /* (stats_view.php) --  */
$stats_image_info="�̹���"; /* (stats_view.php) --  */
$stats_comments_info="�ڸ�Ʈ"; /* (stats_view.php) --  */
$stats_general_info="�Ϲ�"; /* (stats_view.php) --  */
$spam_blocked="SPAM ���� ����"; /* () --  */
$mail_current_status="���� ����"; /* (mailing.php) --  */
$mail_sending_to="�߼� ��: "; /* (mailing.php) --  */
$mail_counters="���� (����/����/����)"; /* (mailing.php) --  */
$mail_send_fail="�߼� ����: "; /* (mailing.php) --  */
$mail_send_ok="�߼� ����: "; /* (mailing.php) --  */
$mail_all_complete="��� �Ϸ�!"; /* (mailing.php) --  */
$mail_failed_list="������ �ּ� ���"; /* (mailing.php) --  */
$mail_ok_list="�߼� �ּ� ���"; /* (mailing.php) --  */
$mail_mailer_error=" - ���Ϸ� ����: "; /* (mailing.php) --  */
$str_log_events['comments']="Comment Entry"; /* (log.php) --  */
$str_edit_members="��� ����"; /* (build_user.conf.php) --  */
$edit_groups="�׷� ���� "; /* (build_user.conf.php) --  */
$str_basket="�ٱ���"; /* (various) --  */
$lang_plugins['log']="�α�"; /* (admin.php) --  */
$rss_created="XML RSS ���� ���� ����"; /* () --  */
$rss_not_created="RSS ���� �ȵ�, �ֳ��ϸ� ����� ������ �����Ƿ�"; /* () --  */
$rss_settings_saved="RSS ���� ����"; /* () --  */
$lang_plugins['stats']="���"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="���͸�ũ ������"; /* () --  */
$str_with_watermarks="���͸�ũ ���"; /* () --  */
$str_create_cache_img="�̹��� ĳ�� ����"; /* () --  */
$str_reset_button="�缳��"; /* () --  */
$cache_stats="�̹��� ĳ�� ����"; /* () --  */
$drop_duplicates="�ߺ� �׸� ����"; /* () --  */
$general_exif_rotate="EXIF ������ �ڵ� ��ȯ Ȱ��/��Ȱ�� "; /* () --  */
$general_exif_rotate_info="<-- EXIF ������ �ڵ� ��ȯ"; /* () --  */
$lang_plugins['maps']="Google/Yahoo Maps"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo Maps ����"; /* () -- maps plugin */
$maps_setup_yahoo_id="Yahoo Application ID"; /* (maps plugin) --  */
$maps_setup_google_key="Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="�� �÷������� PHP ���� 4.2.0 �̻��� �ʿ�� �մϴ�.PHP�� ���������ϼ���."; /* (maps plugin) --  */
$maps_select_type="Map ���� ����:"; /* (maps plugin) --  */
$maps_select_type_info="<-- select whether to use Google or Yahoo maps"; /* (maps plugin) --  */
$maps_select_display_type="Please choose Map display Type:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- show Hybrid, Sat or Regular Map"; /* (maps plugin) --  */
$maps_zoom_level="Default Zoom Level: 1-16 (Default 16, World Map)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- set default zoom level for Maps"; /* (maps plugin) --  */
$maps_zoom_location="Default location to center in view"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- default location to center in Map"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google Map controls size"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- adjust Google Maps slider and pan size"; /* (maps plugin) --  */
$maps_str="����"; /* (maps plugin) --  */
$map_type_ctrl="Enable Map Type Controls"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- show Map type controls in Map"; /* (maps plugin) --  */
$map_slide_ctrl="Enable Map Slide Controls"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- show Map slide controls in Map"; /* (maps plugin) --  */
$map_pan_ctrl="Enable Map Pan Controls"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- show Map pan controls in Map"; /* (maps plugin) --  */
$map_auto_popup="Enable Marker Auto Popup"; /* (maps plugin) --  */
$map_auto_popup_info="<-- auto show Marker Popups on mousover"; /* (maps plugin) --  */
$map_album_add="�ٹ� �߰�"; /* (maps plugin) --  */
$map_marker_del="ǥ�� ����"; /* (maps plugin) --  */
$map_search_location="�� ��� �˻�/�߰�"; /* (maps plugin) --  */
$map_location_here="����� ��δ� ����"; /* (maps plugin) --  */
$map_search_loc_button="��� �˻�"; /* (maps plugin) --  */
$map_add_location="�� ��� �߰�"; /* (maps plugin) --  */
$map_assign_album="Assign Album to Map Location"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>