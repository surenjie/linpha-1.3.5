<?php
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */


/**
for the translators do not forget this changes!!

* 12. Mar 2007  lishk translate this file to zh-cn(utf-8) base on linpha V1.3.0
*/
/**
Author   : lishk
Home     : www.lishk.com 
Language : zh-cn , utf-8
E-mail   : sunkeyli@163.com
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="���";

/* alerts */
$alert_fopen="����! �ļ��޷���...";
$printing_probs="��ӡ����";
$printing_probs_msg="��ֹ��ӡ���뿴";

/* global messages */
$subfolders="��Ŀ¼";
$img_th="ͼƬ";
$in_th="λ��"; /* used for the photos in $foldername */
$thumb_hint_msg="��һ����ʾ";
$latest_photo="���µ�";
$view_at="Ԥ���ֱ���";
$close_button="�ر�";
$help="˵��";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="��ӭʹ��LinPHA���ϵͳ";
$welc_text="��ӭ���٣�����LinPHA���ϵͳ����ҳ�����������ƺ����״�ʹ�� LinPHA���ϵͳ���������ؽ��а�װ.";
$welc_hint="<b>����֮ǰ:</b>";
$welc_hint1="1. ����������д�����ϵ�Ŀ¼&quot;<b>linpha/sql</b>&quot;! (���� chmod 777 sql)";
$next_button="��һ��"; /* used as left menu header in all 4 stages */
$inst_msg="��װLINPHA���ϵͳ"; /* used as left menu header in all 4 stages */
$inst_status_1="��ѡ�����Բ����&quot;��һ��&quot;";
$inst_status_step1="���� 1 (��4��)";

/* sec_stage_install (page 2) */
$inst_access_msg="�������ݿ��ȡ��ʽ";
$inst_full_access_msg="<b>�ǵ� !</b><br> ������ȫ��ȡ MySQL ���ݿ⣬���ܽ����µ�<br> ���ݿ⼰�û�������˵�������ҵ�������";
$inst_limited_access_msg="<b>���� !</b><br> �ҽ������޶ȴ�ȡ<br>MySQL���ݿ⡣ �ҵ�ISP���������ҽ����µ����ݿ⼰�û���";
$inst_status_2="��ѡ�����ݿ�����з�ʽ������ȷ����ѡ ����!";
$inst_status_step2="���� 2 (��4��)";

/* requirements */
$req_check_msg="���ϵͳ����";
$req_found_msg="���ҵ�";
$req_miss_msg="û�ҵ�";
$req_safe_fail="��Ч";
$req_safe_ok="��Ч";
$php_safemode_check_msg="��� PHP �İ�ȫģʽ...";
$php_version_check_msg="��� PHP �汾> 4.1.0...";
$mem_check_msg="��� PHP �ڴ�����...";
$gd_check_msg="��� GD ������...";
$convert_check_msg="��� ImageMagick...";
$exif_check_msg="��� EXIF ֧��...";
$summary_msg="ժҪ��";
$safe_mode_err="����ϵͳ�ѱ����ó�ʹ�� PHP �İ�ȫģʽ����php.ini���ð�ȫģʽ����ʱ��LinPHA���ϵͳ(LinPHA)���޷���������!";
$inst_abort_msg="!!! ��װʧ�� !!!";
$php_version_err="����ϵͳ�����е� PHP �汾 < 4.1.0��ϵͳ��������PHP֮ǰ���޷����С�";
$gd_convert_err="ImageMagick��GD�����ⶼ�Ҳ�����ϵͳ��ȱ������֮һʱ���޷����С�";
$convert_sum_found_msg="���ҵ�ImageMagick�ڴ������ڡ���ʹϵͳ�ܳ��ָ�Ʒ�ʵ���ͼ��";
$convert_sum_miss_msg="�Ҳ���ImageMagick�ڴ�������.��ʹ��ͼ���е�Ʒ�ʡ�";
$exif_sum_found_msg="����PHP��֧��EXIF���⽫����ϵͳ��ʾͼƬ����ϸ���ϡ�";
$exif_sum_miss_msg="����װ��PHP����֧��EXIF���⽫���� LinPHA���ϵͳ ��ʾͼƬ����ϸ���ϡ�";

/* TODO next 3 */
$session_path_found_msg="session·��������php.ini��ϵͳ�ĵ�¼���ܿ�������������·�������ڣ� ";
$session_path_miss_msg="��session·����û���ҵ���ȷ����ֵ��������� php.ini ��������ȷ��session·�����������Ժ��㽫������ȷ��¼ϵͳ!!";
$mem_limit_ok_msg="�ܺ�, ��� PHP �ڴ�����Ϊ >= 16MB. ������������ͼʱ�������κ�����T.";
$mem_limit_low_msg="��, ��� PHP �ڴ�����Ϊ <=16MB. �����������ʧ��ͼ������, ����ȥ���� php.ini�е� memory_limit �����ǽ���ͼ�ķֱ��ʽ���֮������һ��...";
$choose_def_quali="��ѡ��Ĭ�ϵ�ͼƬƷ��";
$choose_def_quali_warn="��Ҫ��Ϊ��Ʒ�ʣ������� CPU �ٶ� &lt; 1Ghz (�� CPU����)";

/* third_stage_install (page 3) */
$inst_superadmin_header="����MySQL ���ݿ�Ĺ���Ա";
$inst_superadmin_name="MySQL ���ݿ��û�����";
$inst_superadmin_name_info="&lt;-MySQL ���û���(������������ݿ���)";
$inst_superadmin_pass="MySQL ���ݿ����룺";
$inst_superadmin_pass_info="&lt;-MySQL ������(������������ݿ���)";

$inst_admin_header="����ϵͳ����Ա";
$inst_admin_name="LinPHA���ϵͳ����Ա�û�����";
$inst_admin_name_info="&lt;-����Ա���û���";
$inst_admin_pass="LinPHA���ϵͳ����Ա�����룺";
$inst_admin_pass_info="&lt;-����Ա������";
$inst_admin_email="����Ա�ĵ������䣺";
$inst_admin_email_info="&lt;-���ù���Ա�ĵ�������";

$inst_db_header="����ϵͳ���ݿ�����ӷ�ʽ";
$inst_db_host="�������ƣ�";
$inst_db_host_info="&lt;-�������ƣ� һ��Ϊ &quot;localhost&quot;";
$inst_db_host_info2="&lt;-�������ƣ� MySQL����������";
$inst_db_host_port="���Ӷ˿ڣ�";
$inst_db_host_port_info="&lt;-���Ӷ˿ڣ�����ȷ����ʡ�ԣ�";
$inst_db_name="���ݿ����ƣ�";
$inst_db_name_info="&lt;-ϵͳ��ʹ�õ����ݿ����ƣ�һ��Ϊ&quot;linpha&quot;";
$inst_db_name2="���ݿ����ƣ�";
$inst_db_name_info2="&lt;-ISP����������ݿ�����";
$inst_table_prefix="���ݱ�ǰ׺";
$inst_table_prefix_info="&lt;-���������ݱ�����ǰ׺";

$general_header="һ��ѡ������";
$general_album_title="������";
$general_album_title_info="&lt;- ������ʹ��Ĭ������";
$general_photos_row="������";
$general_photos_row_info="&lt;- ÿһ����ʾ����";
$general_photos_col="������";
$general_photos_col_info="&lt;- ÿһ����ʾ����";
$general_photos_width="����ͼƬ��ʾ��С (���):";
$general_photos_width_info="&lt;- 512 (Ĭ�ϴ�С)";
$general_photos_height="����ͼƬ��ʾ��С (�߶�):";
$general_photos_height_info="&lt;- 384 (Ĭ�ϴ�С)";
$general_img_quality="ͼƬƷ��";
$general_img_quality_info="&lt;- ����ͼƬƷ�� 0-100 (Ĭ��Ϊ 75)";

$inst_status_3="����д������Ŀ!";
$inst_status_step3="���� 3(��4��)";

/* forth_stage_install (page 4) */
$inst_status_4="��ϲ������װ�����! LinPHA���ϵͳ�ѿ���ʹ����";
$inst_status_step4="���� 4(��4��)";
$inst_submit="���";
$inst_db_tryconn="�������ӵ����ݿ�����";
$inst_db_tryconn_error="���ӵ����ݿ�����ʱ�������� using:";
$inst_db_tryconn_ok="���ӳɹ�!";
$inst_db_tryinst="�����������ݿ⣺";
$inst_db_tryinst_error="�������ݿ�ʱ��������";
$inst_db_tryinst_ok="�����ɹ�!";
$inst_create_tb_msg="�����������ݱ�";

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
$inst_db_connect_inc_msg="�������ݿ�������������!";
$inst_db_connect_inc_msg1="�����ݿ���ѡ�� ".@$db_realname." ʱ��������<br>����װʱ��������Ϣ���뽫db_connect.php��<br> Ŀ¼&quot;sql&quot; ��ɾ��!";
/* ------------------------------------------------------------------ */

$table_create="�������ݱ�";
$table_create_error="���ݱ�����ʱ��������!";
$table_create_ok="�������!";
$table_insert_admin="��������Ա�û�����";
$table_insert_admin_error="��������Ա�û���ʱ��������!";
$table_insert_admin_ok="�ɹ�����!";
$write_db_config="�����ݿ����ñ�����ļ�";
$fopen_error="�޷�д�� sql/db_config.php�������� chmod 777 �����°�װ";
$fopen_ok="������д��!";
$install_finish_msg="��װ�ɹ�!!";
$admin_task="������һ��";
$file_create_ok="�ɹ�����!";
$configure_error="����д���б�Ҫ��Ŀ!!!";
$could_not_open="�޷���users���ݱ�! ���ƺ�������Ȩ�����û��������ݿ���<br>���ڵڶ�ҳѡ���Ϊ���еİ�װ��ʽ<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA���ϵͳ";
$head_title="LinPHA���ϵͳ";
$book_home="��ҳ";
$book_about="˵��";
$book_admin="����";
$book_admin_user="������Ϣ";
$book_links="����";
$book_search="����";
$book_logout="ע��";
$book_login="��¼";
$num_pictures="ͼƬ����:";
$user_visits="λ�ο�";
$user_online="λ�����û�";
$guest="�ο�";
$html_lang="zh-cn";
$html_charset="gbk";

/*#################################################
## index.php
#################################################*/
$index_welc_text="��ӭ������ᡣ�붨�ڷ��� <a href='http://linpha.sf.net/'><u>LinPHA.</u></a> �Ի�ȡ��������°汾��";

/*#################################################
## search.php
#################################################*/
$search_header="����";
$radio_all="ȫ��";
$radio_descript="����";
$radio_comment="����";
$radio_category="����";
$radio_file="�ļ���";
$search_in="�������";
$search_all="�������";
$search_for="�����ؼ���";
$search_button="����";
$photos_found="��������";
$search_info="ϵͳ����ҳ";
$search_msg="�����ݿ��пɸ���������Ϣ����ͼƬ��";

/*#################################################
## img_view.php
#################################################*/
$img_detail="ͼƬ��Ϣ";
$img_size="��С";
$img_com="���";
$img_des="ͼƬ����";
$img_cat="��������";
$img_name="����";
$img_info_stored="������д�����ݿ�";
$please_login="��<a href='login.php'><u>��¼</u></a> �Ա㷢������";
$back_to_thumbs="<b><u>�ص��б���ʾ</u></b>";
$back_to_search="<b><u>�ص�����ҳ��</u></b>";
$button_next="��һ��";
$button_prev="��һ��";
$exif_ext_error="��Ǹ���˰汾��PHPû�� EXIF ֧��";
$exif_error="��Ǹ��ͼƬ�������κ� EXIF ��Ϣ!";
$exif_more="����ϸ��";
$exif_less="������Ϣ";
$detail_header="";
$detail_header1="/";
$detail_header2="��ͼƬ�ڴ����<br>";
$php_to_old="PHP < 4.2.0 EXIF ��Ч!";
$views="�����";
$slideshow="�õ�Ƭ��ʾ";
$econds="��";
$go="Go";
$stopslide="ֹͣ�õ�Ƭ��ʾ";
/* image rotating */ /* TODO next */
$img_rotate_ok="��תͼƬ";
$img_rotating="��תͼƬ����"; // TOC entry
$img_rotating_hint1="������תͼƬ���밴����";
$img_rotating_hint2="�鿴ԭ��";

/*#################################################
## login.php
#################################################*/
$login_msg="���¼��";
$login_error="����ȷ���û���������";
$login_name="�û���";
$login_pass="����";
$login_info="��¼ҳ��";
$login_request_account_info="��Ҫ�����û����밴 <u>����</u>��";
$login_request_target="����ϵͳ�Ĺ���Ա";
$login_admin_info="ִ�й���������ʹ�ù���Ա�û�����¼";
$login_friend_account_info="�������� &quot;����&quot; �û������ɵ�¼���޸ĸ�������";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA���ϵͳ";
$please_turn_off_msg="ͼƬ�������ʱ�����á��Զ� ����/ɾ�� ��ͼ��Ϊ�رա�<br> ϵͳ���ܼӿ�Ѳ���ٶ� :)";
/* left menu */
$logout_msg="ע��";
$welc_msg="��ӭ";
$stat_msg="���Ѿ�����Ȩ���й��������� <b>����</b> ��ͼƬ����";
$back_to_msg="<b>�ص���ʾ���</b>";
$href_general_conf="һ������";
$href_user_conf="�û�����";
$href_folder_conf="Ŀ¼����";
$href_sql="MySQL���ݿ����";
$href_ftp="�ļ�����";
$href_stats="ͳ������";
$href_other_conf="��������";


/* general config */
/* uses also entries from install.php */
$default_language="Ĭ��ʹ�õ�����";
$default_language_info="&lt;- ����Ĭ��ʹ�õ�����";
$general_auto_lang="�����Զ���⹦��"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- �Զ���������������";
$general_success_msg="! �޸ĳɹ� !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="ͼƬ��ת����";
$general_rotate_info="&lt;-- <b>�����ļ���ʾ! �δ���</b>";
$general_exifinfo="���� EXIF ֧��";
$general_exifinfo_info="&lt;-- ʹ�� EXIF ����";
$general_exifdefault="Ĭ����ʾ EXIF ��Ϣ";
$general_exifdefault_info="&lt;-- Ĭ�ϼ�����ʾ EXIF ��Ϣ";

$general_exiflevel="��ʾ EXIF ��Ϣ�ĳ̶�";
$general_exiflevel_info="&lt;-- ���� EXIF ��Ϣ�ķ���̶�";
$exif_low="����";
$exif_medium="�е�";
$exif_high="���";
$general_filename="��ʾ�ļ���";
$general_filename_info="&lt;-- ���ʱ��ʾ�ļ���";
$general_thumb_order="ͼƬ����ʽ";
$general_thumb_order_info="&lt;- ����Ԥ��ʱ�����ļ�������������";
$thumb_order_date="����";
$thumb_order_file="�ļ���";
$general_autoconf="�Զ� ����/ɾ�� ��ͼ";
$general_autoconf_info="&lt;- <b>�رմ���Ŀ�������Ч��</b>";
$general_counterstat="������";
$general_counterstat_info="&lt;-- Ĭ��Ϊ����";
$general_blocking="IP ����ʱ��(����)";
$general_blocking_info="&lt;--�� x �����ڽ����ᵱ�����οͼ���";
$general_theme="ѡ��ģ��";
$general_theme_info="&lt;- ����Ĭ����ʾģ��";
$aqua_theme="ǳɫϵ";
$colored_theme="��ɫϵ";
$neptune_theme="������";
$shadow_theme="��Ӱ";
$general_hq="��Ʒ�����ͼƬ";
$general_hq_info="&lt;--�رմ���Ŀ��������ٶ�";
$submit_button_general="�����޸�";
$button_on_msg="����";
$button_off_msg="�ر�";
$basic_opts="����";
$advanced_opts="����";
$show_basics="������ʾ����ѡ��";
$show_advanced="������ʾ����ѡ��";
$general_printing="�οʹ�ӡ����";
$general_printing_info="&lt;-- �����������˶����Դ�ӡͼƬ";
$general_slideshow="�õ�Ƭ��ʾ";
$general_slideshow_info="&lt;-- �õ�Ƭ��ʾ";
$general_mini_preview="����ͼƬ";
$general_mini_preview_info="&lt;-- ��������ο�ʹ��խ����ر�";

/* modify existing user table */
$mod_user_header="�޸��Ѵ��ڵ��û�";
$submit_button_mod_user="�޸��û�";
$mod_user_success_msg="! �û����޸� !";
$submit_button_delete="ɾ��";
$del_user_success_msg="! �û���ɾ�� !";

/* add new user table */
$new_user_header="�����û�";
$new_user_name_info="�û���";
$new_user_pass_info="����";
$new_user_mail_info="�����ʼ�";
$new_user_level_info="Ȩ������";
$friend="����";
$submit_button_new_user="�����û�";
$new_user_success_msg="! �û������� !";

/* friends account table */
$friend_user_header="�û�����";
$submit_button_friend_user="�޸��û�";
$delete_button_friend_user="ɾ���û�";
$friend_info_msg="����/�޸� �û�����";

/* add new category table */
$new_cat_header="��������";
$new_cat_info="�·�������";
$submit_button_new_cat="��������";
$new_cat_success_msg="! ���������� !";
$mod_cat_header="�޸�/ɾ�� ����";
$cat_name_header="��������";
$cat_mod_header="�޸ķ���";
$cat_del_header="ɾ������";
$submit_button_mod_cat="�޸�";

/* set directory permissions */
$set_dir_perms_header="�������Ȩ��";
$dir_name="���";
$dir_perms="Ȩ������";
$action="����";
$submit_button_folder="�ύ";
$public="����";
$friends="����";
$private="˽��";
$new_perms_success_msg="! Ȩ���Ѹı� !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="����ͳ��";
$stats_over_photos="ͼƬ������";
$stats_over_views="�����������";
$stats_over_albums="���������";
$stats_over_most_alb_visists="�����ŵ���᣺";
$stats_over_space="��ʹ�ô��̿ռ�(�������):";
$stats_over_visitors="�������������";
$stats_over_users="��ע���û�����";
$stats_top_ten="ʮ���������";
$stats_rank="���Σ�";
$stats_no_views="���������";
$stats_last_view="ǰһ�����ʱ�䣺";
$stats_alb_name="������ƣ�";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="��һ�׶��﷨����";
$parse_sec="�ڶ��׶��﷨����";
$parse_third="�����׶��﷨����";
$parse="�������ڽ����﷨����";
$parsed="�﷨������";
$dirs="��Ŀ¼";
$done="ȫ�����...";
$not_allowed_msg="��Ǹ���㲢δ������ִ���������";
/* these entries are called from within admin.php */
$th_msg="����������ͼ��";
$table_hint_msg="���� ��ʼ ��������������Ŀ¼�µ���ͼ��";
$start_button="��ʼ��";
$recreate_thumbs_header="�����������е���ͼ";
$recreate_thums_msg="����������������������е���ͼ�����е�ͳ�����Ͻ��ᶪʧ��";
$recreate_thums_warning="��ȷ�����Ƿ����Ҫ�����������е���ͼ������Ҫɾ�����е����ۣ�������ͳ�����ϣ���ע�⣬����������ָܻ���ȷ������������";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="ѡ���ӡ����";
$images_page="ͼƬ/ҳ";
$indexprint="������ӡ (28)";
$note="<strong>ע�⣺</strong> �ڴ�ӡ֮ǰ����Ե���������е� \"���ô�ӡ��ʽ\"ȷ�����е�ͼƬ���ܷ��ϴ�ӡҳ��Ĵ�С������";
$print_button="Ԥ����ӡ";
$href_check_all="ѡ��ȫ��";
$href_clear_all="���ȫ��";
$print_error="����û��ѡ���κ���Ƭ������";
$print_mode="��ӡģʽ";
$print_image="��ӡͼƬ";
$videos_msg="���ܴ�ӡ��̬ͼƬ";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="���ݿ����ϵͳ�汾.";
$mysql_cancel="ȡ��";
$mysql_DHTML_hint="�ر� DHTML ��ʾ - �ڱ������֮ǰ�㿴�����κζ�����";
$mysql_select_all="ѡ��ȫ��";
$mysql_deselect_all="����ѡ��ȫ��";
$mysql_create_backup="���ɱ���";
$mysql_back_menu="�ص����˵�";
$mysql_table_checks="������ݱ�...";
$mysql_table_check="���ݱ�����";
$mysql_struct_msg="Creating structure for";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="ȫ���Ĺ���:";
$mysql_back_complete="���ݹ��������";
$mysql_back_menu_long="�ص� MySQL ���ݿⱸ�����˵�";
$mysql_open_warn1="<B>����:</B> ����ʧ�� ";
$mysql_open_warn2="д��������!��Ŀ¼��ִ��<BR><BR><I>CHMOD 777</I> ������Խ���������.";
$mysql_date_msg="����ʱ���� "; // it follows time of the day...
$mysql_last_backup="��һ���������� MySQL ���ݿ��ڣ� ";
$mysql_backup_hint="һ����˵��ÿ�ܱ���һ�ξͿ�����.";
$mysql_down_backup="������һ�������������ɵı����ļ�";
$mysql_down_backup_part="������һ��ֻ���оֲ����ݵı����ļ� ";
$mysql_down_backup_struct="������һ��ֻ���ݱ�ṹ�ı����ļ� ";
$mysql_down_backup1="(�����Ҽ���ѡ���Ŀ��(A)...)";
$mysql_unknown_backup="��һ�ε� MySQL ���ݿⱸ����: <I>δ֪</I>";
$mysql_href_recom="����һ���µ��������ݣ�ȫ������ (����)";
$mysql_href_standard="����һ���µ��������ݣ���׼���� (��С)";
$mysql_href_partial="����һ���µľֲ����ݣ�ֻ����ѡ��ı� (����ȫ������)";
$mysql_href_structure="����һ���µ��������ݣ�ֻ���ݱ�ṹ";
$mysql_days_last="��";
$mysql_hours_last="Сʱ";
$mysql_min_last="����";
$mysql_sec_last="��";
$ago="ǰ"; // reads in context "some days ago"
$backup="����";
$restore="��ԭ";
$optimize="�Ż�";
$optimize_tables="�Ż���";
$opt_table_name="������";
$opt_table_check="����";
$opt_table_optimize="�Ż���";
$opt_table_msg="��Ϣ����";
$opt_start_msg="������Ż����ݱ�";
$fullback_hint_msg="������ж�����ݿ⣬��ѡ�� <b>�ֲ�</b> ����";
$restore_last_fullback="��ԭ��һ�ε� <b>����</b> ���ݣ�";
$restore_last_partback="��ԭ��һ�ε� <b>����</b> ���ݣ�";
$restore_error="���󣡽��б���ʱ�����Ҳ����ļ���";
$restore_success="��ԭ�ɹ���!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>��ֹ��ȡ</H1> ��û���㹻��Ȩ����ʹ�����Ŀ¼');
define('STR_BACK',	'����');
define('STR_LESS',	'����');
define('STR_MORE',	'����');
define('STR_LINES',	'��');
define('STR_FUNCTIONLIST', '�����б�');
define('STR_EDIT',	'�༭');
define('STR_VIEW',	'��ʾ');
define('STR_RENAME',	'������');
define('STR_MKDIR',		'������Ŀ¼');
define('STR_DELETE',	'ɾ��');
define('STR_BOTTOM',	'���·�');
define('STR_TOP',		'���Ϸ�');
define('STR_FILENAME',	  '����');
define('STR_FILESIZE',	  '��С');
define('STR_LASTMODIFIED', '������');
define('STR_SUM', '<B>%s</B> �ֽڣ�����<B>%s</B>��');
define('STR_CREATEDIRLEGEND', '����һ����Ŀ¼');
define('STR_CREATEDIR',       'Ҫ������Ŀ¼���ƣ�');
define('STR_CREATEDIRBUTTON', '����Ŀ¼');
define('STR_RENAMELEGEND',       '������');
define('STR_RENAMEENTERNEWNAME', '���������Ƹ� %s:');
define('STR_RENAMEBUTTON',       '������');
define('STR_ERROR_DIR','����: �޷���ȡĿ¼����');
define('STR_AUDIO',            '��Ƶ');
define('STR_COMPRESSED',       '��ѹ��');
define('STR_EXECUTABLE',       '��ִ��');
define('STR_IMAGE',            'ͼƬ');
define('STR_SOURCE_CODE',      'ԭʼ��');
define('STR_TEXT_OR_DOCUMENT', '���ֵ����ļ���');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            '��Ƶ');
define('STR_DIRECTORY',        'Ŀ¼');
define('STR_PARENT_DIRECTORY', '��һ��Ŀ¼');
define('STR_EDITOR_SAVE',      '�����ļ�');
define('STR_EDITOR_SAVE_ERROR','�ļ� <I>%s</I> Ϊ����д����ǲ�����');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', '���ٵ���');
define('STR_FILE_UPLOAD_DRIVES', 'Ӳ��:');
define('STR_FILE_UPLOAD', '�ϴ�');
define('STR_FILE_UPLOAD_MAIN', '�ϴ�');
define('STR_FILE_UPLOAD_DISABLED', '��Ǹ,�� php.ini ���õ��н�ֹ�ļ��ϴ�');
define('STR_FILE_UPLOAD_DESC','ѡ������Ҫ�ϴ����ļ��ͳɹ��ϴ�֮��Ҫ���еĲ���.');
define('STR_FILE_UPLOAD_FILE','�ļ�');
define('STR_FILE_UPLOAD_TARGET','�ϴ��ļ���');
define('STR_FILE_UPLOAD_ACTION','�ϴ���Ϻ����:');
define('STR_FILE_UPLOAD_NOTHING','����ʲô');
define('STR_FILE_UPLOAD_DROPFILE','����ѡ��Ĳ���������֮��ɾ�����ϴ����ļ�');
define('STR_FILE_UPLOAD_MAXFILESIZE','���������� php.ini �ļ��������������ļ���С(ÿһ���ļ�!)Ϊ');
define('STR_FILE_UPLOAD_ERROR',        '����: �޷��ƶ��ļ� %s ��Ŀ¼ %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '����: �޷��л� (chdir) �� %s Ŀ¼. �ļ��Ѿ�����: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '����: �޷�ɾ�� %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '����: �ϴ��ļ� %s ���� php.ini ���õ���ָ���� - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','����: �ϴ��ļ� %s �Ĵ�С���� HTML ��������');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '����: �ϴ��ļ� %s ֻ�в����ϴ����');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="ȫ��ģʽ"; /* (img_view.php) -- new [panorama view] href  */
$close_win="�رմ���"; /* (various files) -- javascript close window */
$nav_hint="Please use mouse or arrow keys to navigate!"; /* (image_panorama_view.php) --  */
$pano_view_of="ȫ���鿴ͼƬ"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="����Ƿ�������PHP����·��..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="��"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="���, ���PHP������\"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ ϵͳ��ʹ�� GD lib ��������ͼ, ����ܻ���Щ����<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ �������, �벻Ҫ���� \"open_basedir\" �� PHP.ini"; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ �������, �벻Ҫ���� \"open_basedir\" �� PHP.ini �������±��� PHP ������ GD lib ��֧�� (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract an *.tar.gz archive (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract an *.tar.bz2 archive (UNIX)"; /* (index.php) --  */
$extract_gz="unzip with gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip with unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip with pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! Ⱥ�������� !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! Ⱥ�����޸� !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! Ⱥ����ɾ�� !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! �������޸� !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! ������ɾ�� !"; /* (admin.php) -- redirect message */
$href_groups="�����������޸�Ⱥ��"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="����: �������˻���¼!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="�ص�Ŀ¼����˵�"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="�ص��û�����˵�"; /* (build_user_conf.php) -- navi href  */
$header_new_group="������Ⱥ��"; /* (build_user_conf.php) -- table header */
$header_groupname="Ⱥ������"; /* (build_user_conf.php) -- table header */
$button_addgroup="����Ⱥ��"; /* (build_user_conf.php) -- submit button */
$header_mod_group="�޸�/ɾ�� Ⱥ��"; /* (build_user_conf.php) -- table header */
$mod_group_header="�޸�Ⱥ��"; /* (build_user_conf.php) -- table header */
$del_group_header="ɾ��Ⱥ��"; /* (build_user_conf.php) -- table header */
$search_to_short="�ؼ���̫��, ����2���ַ�!"; /* (search.php) --  */
$general_thumb_size="�޸�Ԥ����С"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<- �������Ԥ���ߴ������ֵ"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="Ԥ���߿�"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<- ����Ϊ��������Ϊ��ͼ����ϱ߿�"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="��ѡ��Ԥ����С"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="�߿�����"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="����ͼƬ�߿���"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="�ر�ͼƬ�߿���"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="�����, ���PHP�����ڰ�ȫ����ģʽ!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ ������ԵĻ�, �벻Ҫ���� \"safe_mode\" �� PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="��������"; /* (build_general_conf.php) --  */
$general_anon_post_info="<- ���������û���������"; /* (build_general_conf.php) --  */
$stats_over_comment="������"; /* (build_stats.php) --  */
$top10_downs_href="ʮ����������"; /* (build_stats.php) --  */
$top10_views_href="ʮ������ͼƬ"; /* (build_stats.php) --  */
$stats_head_downs="ʮ����������"; /* (build_stats.php) --  */
$no_downloads="���ش���"; /* (build_stats.php) --  */
$general_anon_download="��������"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- ��ʾ/���� ͼƬ����������λַ"; /* (build_general_config.php) --  */
$seach_multiple_select_use="Ҫ��ѡ��ʹ��"; /* (search.php) --  */
$search_and="��"; /* (search.php) --  */
$search_or="��"; /* (search.php) --  */
$search_categories="����"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="ѡ�����"; /* (search.php) --  */
$search_date_from_to="���� �� / ��"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="������"; /* (build_user_conf.php) --  */
$new_user_error4="�û�������Ϊ�հ�"; /* (admin.php) --  */
$new_user_error5="�û����Ѿ�����"; /* (admin.php) --  */
$new_user_error1="�����벻��ȷ"; /* (admin.php) --  */
$new_user_error2="���������ٴ�����ʱ�����벻һ��"; /* (admin.php) --  */
$new_user_error3="�����ʼ�����ȷ"; /* (admin.php) --  */
$new_user_old_password="������"; /* (admin.php) --  */
$new_user_retype_password="�ٴ�����������"; /* (admin.php) --  */
$select_db_header="��ѡ�����ݿ�����"; /* (sec_stage_install.php) --  */
$mysql_info="Ҫʹ�� MySQL ���ݿ���ѡ����"; /* (sec_stage_install.php) --  */
$postgres_info="Ҫʹ�� PostgreSQL ���ݿ���ѡ����뿴"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="�Զ���¼"; /* (toc.php) --  */
$login_autologin_user="�Զ���¼�û���Ϣ"; /* (toc.php) --  */
$toc_timer="��ʱ��"; /* (toc.php) --  */
$general_autologin="�Զ���¼"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- ����ʹ���Զ���¼����"; /* (build_general_conf.php) --  */
$general_timer="��ʱ��"; /* (build_general_conf.php) --  */
$general_timer_info="<-- ��ҳβ����﷨������ʱ��"; /* (build_general_conf.php) --  */
$login_autlogin="�Զ���¼"; /* (login.php) --  */
$lostpw_title="��������"; /* (login.php) --  */
$lostpw_question="���������룿"; /* (login.php) --  */
$lostpw_type_user_or_email="��������û�������ĵ����ʼ�"; /* (login.php) --  */
$lostpw_email1="����ʹ�����һ����빦�ܡ����������Ļ�����ֻ��Ҫ���������Ϣ����������㷢������Ҫ���������������뵽��Ҫ����Ŀ�"; /* (login.php) --  */
$lostpw_email1_part2="(��ע�⣺�Ⲣ������������룡)"; /* (login.php) --  */
$lostpw_email1_part3="�װ��Ĺ���Ա"; /* (login.php) --  */
$lostpw_email_error="�����޷��ύ�����������Ա."; /* (login.php) --  */
$lostpw_error_nothing_found="��Ǹ��û���������������������û����������롣"; /* (login.php) --  */
$lostpw_email_sent="�Ѿ����͵����ʼ�����."; /* (login.php) --  */
$lostpw_should_receive="��Ӧ���Ѿ��յ��ĸ���ĵ����ʼ��ˣ��������Ŀ��������ʼ����ṩ�����룺"; /* (login.php) --  */
$lostpw_go_back="����"; /* (login.php) --  */
$lostpw_email2="�����޸ĳɹ�������������ǣ�"; /* (login.php) --  */
$lostpw_email2_part2="��������Ժ�ʹ�����\"������Ϣ\"�������޸ġ�"; /* (login.php) --  */
$lostpw_new_password="������"; /* (login.php) --  */
$lostpw_successfully_changed="�����޸ĳɹ������һ�»��յ�һ����������ĵ����ʼ�."; /* (login.php) --  */
$lostpw_error_wrong_code="��Ǹ�����벻��ȷ."; /* (login.php) --  */
$lostpw_enter_correct_code="�������Ŀ������ȷ�ĵ����ʼ���"; /* (login.php) --  */
$lang_plugins['plugins']="���"; /* (admin.php) --  */
$lang_plugins['watermark']="ˮӡ"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="���ܲ���"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="���ݿ����"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="�����õĲ��"; /* (admin.php) --  */
$lang_plugins['enabled']="����"; /* (plugins.php) --  */
$lang_plugins['disabled']="�ر�"; /* (plugins.php) --  */
$lang_plugins['update']="����"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="����Ѹ���"; /* (admin.php, plugins.php) --  */
$wm_wm_man="ˮӡ���� "; /* (watermark.php) --  */
$wm_disable="�ر�ˮӡ���� "; /* (watermark.php) --  */
$wm_change_example_img="�޸ķ���ͼƬ"; /* (watermark.php) --  */
$wm_no_input_files_found="�����ļ������� "; /* (watermark.php) --  */
$wm_image_quality="ͼƬƷ��(����Ԥ����)"; /* (watermark.php) --  */
$wm_enable_text="����: ���� "; /* (watermark.php) --  */
$wm_text="���� "; /* (watermark.php) --  */
$wm_font="���� "; /* (watermark.php) --  */
$wm_fontsize="���δ�С "; /* (watermark.php) --  */
$wm_fontcolor="������ɫ "; /* (watermark.php) --  */
$wm_align="λ�� "; /* (watermark.php) --  */
$wm_pos_hor="ˮƽλ�� "; /* (watermark.php) --  */
$wm_pos_ver="��ֱλ�� "; /* (watermark.php) --  */
$wm_height="���ָ߶� "; /* (watermark.php) --  */
$wm_width="���ָ߶� "; /* (watermark.php) --  */
$wm_shadow_size="��Ӱ��С "; /* (watermark.php) --  */
$wm_shadow_color="��Ӱ��ɫ "; /* (watermark.php) --  */
$wm_enable_image="����: ͼƬ"; /* (watermark.php) --  */
$wm_available_images="���õ�ͼƬ"; /* (watermark.php) --  */
$wm_no_images_found="�Ҳ���ͼƬ�ļ�"; /* (watermark.php) --  */
$wm_dissolve="�ܽ⻭��"; /* (watermark.php) --  */
$wm_preview="Ԥ��"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="����������Ӱ"; /* (watermark.php) --  */
$wm_enable_rectangle="�������"; /* (watermark.php) --  */
$wm_rectangle_color="��ɫ"; /* (watermark.php) --  */
$wm_enable_ext_shadow="����������Ӱ"; /* (watermark.php) --  */
$wm_status="״̬"; /* (watermark.php) --  */
$wm_enabled="�Ѽ���"; /* (watermark.php) --  */
$wm_disabled="�ѹر�"; /* (watermark.php) --  */
$wm_restore_to="��ԭ��"; /* (watermark.php) --  */
$wm_inital_settings="��ʼ����"; /* (watermark.php) --  */
$wm_add_more_examples="����Լ������ķ���ͼƬ�����Ŀ¼�е���Ŀ¼"; /* (watermark.php) --  */
$wm_example="����"; /* (watermark.php) --  */
$wm_shadow_fontsize="��Ӱ���δ�С"; /* (watermark.php) --  */
$wm_settings_for_both="ͼƬ�����ֵ�����"; /* (watermark.php) --  */
$wm_center="����"; /* (watermark.php) --  */
$wm_north="�Ϸ�"; /* (watermark.php) --  */
$wm_northeast="���Ϸ�"; /* (watermark.php) --  */
$wm_northwest="���Ϸ�"; /* (watermark.php) --  */
$wm_south="�·�"; /* (watermark.php) --  */
$wm_southeast="���·�"; /* (watermark.php) --  */
$wm_southwest="���·�"; /* (watermark.php) --  */
$wm_east="�ҷ�"; /* (watermark.php) --  */
$wm_west="��"; /* (watermark.php) --  */
$bm_file_err="����û��ָ���ļ�";
$bm_var_err="���������������";
$bm_notfound_err="�����ļ�������";
$bm_noimg_err="�����ļ�����ͼƬ�ļ�";
$bm_tmpfile_err="���󣬵������ݴ�ͼƬ�ļ�ʱ";
$bm_tmpfile_warn="���棺�ݴ�ͼƬ�ļ����ܱ�ɾ��";
$bm_time_total="ͳ��ִ��ʱ��: ";
$bm_img_sec="ÿ����ͼƬ��: ";
$bm_avg_img="ÿһ��ͼƬ��ƽ��ʱ�� (�����ƹ��ͻ����ͼƬ��С����): ";
$bm_qual_size="Ʒ��/��С";
$bm_quality="Ʒ��";
$bm_height="�߶�: ";
$bm_width="���: ";
$bm_size="ͼƬ��С: ";
$bm_create = "��ѡȡ����ͼ���߽������ܲ���";
$bm_interval = "���";
$bm_calc = "������";
$bm_img = "��ͼƬ";
$bm_inloop="ִ�д���";
$bm_qual_range="Ʒ�ʷ�Χ: ";
$bm_size_range="��С��Χ(��ָ�߶�)";
$bm_repeats="�ظ�����: ";
$bm_con_util="��ѡ����ͼ����: ";
$bm_current_settings="��ǰ����"; /* (benchmark.php) --  */
$bm_preview="Ԥ��"; /* (benchmark.php) --  */
$bm_save_settings="��������"; /* (benchmark.php) --  */
$wm_addexamples="ˮӡ: ���Ӹ����ˮӡͼƬ"; /* (watermark.php) --  */
$wm_addimg="ˮӡ: ���Ӹ����ˮӡͼƬ"; /* (watermark.php) --  */
$wm_addfont="ˮӡ: ���Ӹ��������"; /* (watermark.php) --  */
$wm_colorsetting="ˮӡ: ��ɫ����"; /* (watermark.php) --  */
$comment_hint="��ʾ: ������Ϸ������·���ͼƬ�Ծ����"; /* (linpha_comments.php) --  */
$comment_end="�����û��ͼƬ"; /* (linpha_comments.php) --  */
$comment_beginning="û��ǰһ��ͼƬ"; /* (linpha_comments.php) --  */
$comment_back="�ص�ͼƬ��ʾ"; /* (linpha_comments.php) --  */
$comment_edit_img="�༭ ����/����"; /* (linpha_comments.php) --  */
$comment_change_img_details="�޸�ͼƬ����ϸ˵��"; /* (linpha_comments.php) --  */
$comment_last_comments="��������"; /* (linpha_comments.php) --  */
$comment_comment_by="������"; /* (linpha_comments.php) --  */
$category_delete_warning="���棺�����Ѵ��ڣ��ظ�ָ������ʧȥͼƬ"; /* (build_category_conf.php) --  */
$pass_2_short="�������볤������Ҫ3λ..."; /* (various) --  */
$album_edit="�༭�����"; /* (linpha_comments.php) --  */
$album_details="������ϸ˵��"; /* (linpha_comments.php) --  */
$wm_save_note="ע�⣺ע���û����ῴ��ˮӡ��.. �������ע�� (��Ϊһ���ο�) ���������ʱ����ˮӡ��"; /* (watermark.php) --  */
$lang_plugins['guestbook']="����"; /* (admin.php) --  */
$print_low_quality="��Ʒ��"; /* (printing_view.php) --  */
$print_high_quality="��Ʒ�� (����!)"; /* (printing_view.php) --  */
$gb_title="����";
$gb_sign="����������";
$gb_from="����";
$gb_from_no="δ�ṩ���Ժδ�";
$gb_pages="ҳ";
$gb_messages="������";
$gb_msg_error="��Ǹ����ν�����Բ�����Ϊ�հ�";
$gb_new_msg="��Ҫ����";
$gb_name="��ν";
$gb_email="�����ʼ�";
$gb_hp="��վ";
$gb_country="����(����)";
$gb_header="���Ա�";
$gb_opts="���Ա�ѡ��";
$gb_rows="ÿһҳ��������";
$gb_anon="���������û������Ա�����������";
$gb_order="���Ե���ʾ˳��";
$wm_resize="ˮӡ��Զ��ͼƬ��С�� X% ������ʾ"; /* (watermark.php) --  */
$wm_help_and_descr="˵��������"; /* (watermark.php) --  */
$folder_remove_hint="���һ�ж�û���⣬�����ڿ���ɾ�� /install �����Ŀ¼ (��ȫ����)..."; /* (forth_stage_install.php) --  */
$add_alb_com="���������"; /* (img_view.php) --  */
$add_img_com="��ͼƬ��������"; /* (img_view.php) --  */
$album_com="�����"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML ��ʽ��ǩ"; /* (various) --  */
$stat_cache_elements="�ѻ�����Ŀ"; /* (build_stats.php) --  */
$stat_cache_first="�»�����Ŀ"; /* (build_stats.php) --  */
$stat_cache_hits="��������"; /* (build_stats.php) --  */
$stat_cache_hits_max="��󻺴����� (��һͼƬ)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="ƽ���������� (����ͼƬ)"; /* (build_stats.php) --  */
$stat_cache_size="�����С"; /* (build_stats.php) --  */
$stat_cache_convert_time="�������ʱ��"; /* (build_stats.php) --  */
$stat_cache_size="������ʹ�õ��ڴ��С"; /* (build_stats.php) --  */
$cache_options="ͼƬ����ѡ��";
$cache_max_size="��󻺴��СΪ�����ֽ� (0 = ������)";
$path_2_cache="����Ŀ¼ (Ĭ��Ϊ /sql/cache)";
$cache_optimize="�Ż�/��� ͼƬ��������"; 
$cache_maintain="ͼƬ����ά��";
$cache_opt_msg="!! �����Ѿ��Ż� !!";
$lang_plugins['cache']="ͼƬ����"; /* () --  */
$stat_cache_title="ͼƬ����ͳ��"; /* (cache.php) --  */
$bm_saved="�����ѱ���"; /* (admin.php) --  */
$cache_optimize_by_size="ɾ�����л�����Ŀ��С (�� kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="ɾ��������֮��δʹ�õĻ�����Ŀ:"; /* (cache.php) --  */
$elements_rem="��Ŀ��ɾ��"; /* (cache.php) --  */
$general_anon_album_downs="����/��ֹ ����ѹ���������"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- ���������û�����ѹ�������"; /* (build_general_conf.php) --  */
$general_download_speed="�����ٶ����� kb/sec (0=������)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- ����ͼƬ���ص��ٶ�����"; /* (build_general_conf.php) --  */
$general_navigation="������"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- �����������ͼҳ"; /* (build_general_conf.php) --  */
$toc_navigation="������"; /* (doc/) --  */
$toc_zip_download="�����û��������"; /* (doc/) --  */
$toc_albdownlimit="�����ٶ�����"; /* (doc/) --  */
$choose_zips_msg="ѡ��Ҫ���ص�ͼƬ"; /* (build_zip_view.php) --  */
$zip_button="�����ļ�"; /* (build_zip_view.php) --  */
$type_of_archive="ѡ�������ļ�����"; /* (build_zip_view.php) --  */
$create_tar="���� tar �ļ�"; /* (build_zip_view.php) --  */
$create_tgz="���� tar.gz �ļ�"; /* (build_zip_view.php) --  */
$create_bz2="���� tar.bz2 �ļ�"; /* (build_zip_view.php) --  */
$create_zip="���� zip �ļ�"; /* (build_zip_view.php) --  */
$create_rar="���� rar �ļ�"; /* (build_zip_view.php) --  */
$menumsg['advanced']="�߼�����ѡ��"; /* () --  */
$menumsg['printmode']="��ӡģʽ"; /* () --  */
$menumsg['printprobs']="�رմ�ӡ?"; /* () --  */
$menumsg['downloadmode']="����ģʽ"; /* () --  */
$menumsg['mailmode']="�ʼ�ģʽ"; /* () --  */
$menumsg['addcomment']="���������"; /* () --  */
$menumsg['delcomment']="ɾ�������"; /* () --  */
$menumsg['editcomment']="�༭�����"; /* () --  */
$album_up="�Ѹ���"; /* (album_comment.php) --  */
$album_ins="�Ѳ���"; /* (album_comment.php) --  */
$mail_link="�ʼ��б�"; /* (header.php) --  */
$mail_title="�ʼ��б�"; /* (mail.php) --  */
$mail_send_link="�����ʼ�"; /* (mail.php) --  */
$mail_return_address="���ص�ַ:"; /* (mail.php) --  */
$mail_block="�ʼ������С:"; /* (mail.php) --  */
$mail_block_help="# ÿ�η���email���������Ա���PHP�ĳ�ʱ����."; /* (mail.php) --  */
$mail_options="�ʼ��б�ѡ��"; /* (mail.php) --  */
$mail_go_back="����"; /* (various mail plugin files) --  */
$mail_form_title="�����ʼ���Ϣ"; /* (mail_form.php) --  */
$mail_form_subject="����:"; /* (mail_form.php) --  */
$mail_form_msg="��Ϣ:"; /* (mail_form.php) --  */
$mail_total_sent="���͵ĵ����ʼ�����:"; /* (mail_form.php) --  */
$mail_subscribe="����"; /* (mail_users.php) --  */
$mail_unsubscribe="�˶�"; /* (mail_users.php) --  */
$mail_activate="����"; /* (mail_users.php) --  */
$mail_user_name="��ĳ�ν:"; /* (mail_users.php) --  */
$mail_user_email="��ĵ����ʼ�:"; /* (mail_users.php) --  */
$mail_user_email_confirm="ȷ�ϵ����ʼ�:"; /* (mail_users.php) --  */
$mail_user_code="������:"; /* (mail_users.php) --  */
$mail_user_code_sent="һ����м�������ʼ��Ѿ��ĸ���."; /* (mail_users.php) --  */
$mail_user_code_subject="�ʼ��б���"; /* (mail_users.php) --  */
$mail_user_activated="����˻��Ѿ�������!"; /* (mail_users.php) --  */
$mail_user_activate_error="�ڼ�������˻�ʱ��������!"; /* (mail_users.php) --  */
$mail_user_email_not_found="�������������ǵ��ʼ��б���."; /* (mail_users.php) --  */
$mail_user_remove_ok="�Ѿ������ǵ��ʼ��б���ɾ��."; /* (mail_users.php) --  */
$mail_user_remove_fail="�޷������ǵ��ʼ��б���ɾ��."; /* (mail_users.php) --  */
$mail_user_empty="����д������Ŀ."; /* () --  */
$mail_user_no_match="�����ʼ�����."; /* () --  */
$mail_user_exists="�����ʼ��Ѵ��������ǵ��ʼ��б�."; /* (mail_users.php) --  */
$lang_plugins['mail']="�ʼ��б�"; /* (admin.php) --  */
$mail_activate_message="�𾴵� %s,\n\n������������Ϣ��������ʼ��б��˻�.\n\n������: %s\n\n��л!\n����Ա"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="��ʾ"; /* (mail.php) --  */
$mail_user_permission="������Ⱥ�� 'mail' �е��û������Է�����Ϣ���ʼ��б�."; /* (mail.php) --  */
$mail_current_subscribers="���ж���"; /* (mail.php) --  */
$mail_name="��ν"; /* (mail.php) --  */
$mail_mail="�����ʼ�"; /* (mail.php) --  */
$mail_subscribing_date="��������"; /* (mail.php) --  */
$mail_active="����"; /* (mail.php) --  */
$mail_sent_to="���͵����ʼ���"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> �� <b>[Email]</b> �����û���Ϣ����Ӧ�����滻."; /* (form_mailing.php) --  */
$misc_help="����˵��"; /* () --  */
$mail_create_group="(��Ҫ�����������Լ��� 'mail' Ⱥ��.)"; /* (mail.php) --  */
$alb_th="��Ŀ¼�����"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1��','2' => '2��','3' => '3��','4' => '4��','5' => '5��','6' => '6��','7' => '7��','8' => '8��','9' => '9��','10' => '10��','11' => '11��','12' => '12��'); /* abrevations of months */
$arr_month_long = Array('1' => '1��','2' => '2��','3' => '3��','4' => '4��','5' => '5��','6' => '6��','7' => '7��','8' => '8��','9' => '9��','10' => '10��','11' => '11��','12' => '12��'); /* months */
$arr_day_short = Array('����','��һ','�ܶ�','����','����','����','����'); /* abrevations of weekdays */
$arr_day_long = Array('����','��һ','�ܶ�','����','����','����','����'); /* weekdays */
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
$layout="��������";
$features="��������";
$perform="ϵͳ�Ż�";
$general_comment_in_subfolder = '��Ŀ¼�е������';
$general_comment_in_subfolder_info = '<-- ��Ԥ����Ŀ¼ʱ��ʾ�����';
$general_default_date_format = 'Ĭ�����ڸ�ʽ';
$general_default_date_format_info = '<- ��: 06/28/2004, ������ʾ';
$general_default_time_format = 'Ĭ��ʱ���ʽ';
$general_default_time_format_info = '<- ��: 01:45:50 PM, ������ʾ';
$general_new_images_folder = '���� "��ͼƬ" Ŀ¼';
$general_new_images_folder_info = '<- ��ʾһ�������¼���ͼƬ������Ŀ¼';
$general_new_images_folder_age = '�����ڵ�ͼƬ����"��ͼƬ"Ŀ¼';
$general_new_images_folder_age_info = '<- ��ʾ��༸���ڵ���ͼƬ';
$control_key="Ctrl"; /* (various) --  */
$search_date="����"; /* (search.php) -- reads: date from to... */
$search_from="��"; /* (search.php) -- reads: date from to... */
$search_to="��"; /* (search.php) -- reads: date from to... */
$start_slide="��ʼ�õ�Ƭ��ʾ"; /* (img_view.php) --  */
$pass_msg="���Ѿ�����������������¼"; /* (build_my_settings.php) --  */
$str_new_images = "��ͼƬ"; /* (new_images.php) -- */
$str_order_by = "����"; /* (new_images.php) -- */
$str_age = "ʱ��"; /* (new_images.php) -- */
$str_album = "���"; /* (new_images.php) -- */
$str_in_album = "�������"; /* (new_images.php) -- */
$str_img_newer_than = "����ͼƬ���� %s ����������"; /* (new_images.php) -- */
$timespanfmt = "%s ��, %s Сʱ, %s �� %s ��"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="ɾ��������ˮӡ�Ļ���ͼƬ"; /* (watermark.php) --  */
$str_error_changing_perm="�޷��޸��ļ�Ȩ��! (������û����Ӧ��Ȩ��)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="�޸����µ�Ȩ��:"; /* (plugins/ftp/index.php) --  */
$str_read="��"; /* (plugins/ftp/index.php) --  */
$str_write="д"; /* (plugins/ftp/index.php) --  */
$str_execute="ִ��"; /* (plugins/ftp/index.php) --  */
$str_owner="ӵ����"; /* () --  */
$str_group="Ⱥ��"; /* (plugins/ftp/index.php) --  */
$str_all_other="��������"; /* (plugins/ftp/index.php) --  */
$str_copy="����"; /* (plugins/ftp/index.php) --  */
$str_copy_to="���� %s ��:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="���� %s ��:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="�޷���תͼƬ"; /* (img_view.php) --  */
$str_no_write_perm="��д��Ȩ��"; /* (img_view.php) --  */
$str_new_images_in_these_folders="�������������ͼƬ:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="�����Ҫ���°�װϵͳ, ��Ҫ��ɾ�������ļ� ./sql/db_connect.php! (�����ʹ�������ڹ���ѡ���е��ļ���������ɾ�����ļ�)"; /* (install_header.php) --  */
$str_Version="�汾"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="����: ����PHP��������û������֧�ֵ����ݿ�"; /* (sec_stage_install.php) --  */
$str_extract_with="���ϴ����, ��ѹ���ļ���"; /* (ftp/index.php) --  */
$str_files_to_upload="Ҫ�ϴ����ļ�"; /* (ftp/index.php) --  */
$posix_check_msg="��� POSIX ֧��..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="������װ��PHP������֧��POSIX. �����ϵ��ļ������������еĹ��ܶ���ʹ��."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="������װ��PHP��û��֧��POSIX. �����ϵ��ļ�����������Щ�����޷�ʹ��(�ر����޸��ļ�Ȩ��ʱ)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="����: �޷���������. ��ȷ��·���Ƿ���ȷ�������д�����Ŀ¼��Ȩ��."; /* (admin.php) --  */
$str_create_archive="���� %s �ļ�"; /* (build_zip_view.php) --  */
$str_download_error="����! ����ĳЩԭ���޷���ʼ����, ��Ǹ"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="��������ͼƬ��ʹ�� %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="����������, �볢���ýϵ͵ķֱ���:"; /* (image_panorama_view.php) --  */
$str_current_resolution="���ڵķֱ���:"; /* (image_panorama_view.php) --  */
$href_group_conf="Ⱥ�����"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */

$href_tools_section="����:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="���"; /* (plugin.php) --  */
$choose_mail_msg="ѡ��Ҫ�ʼĵ�ͼƬ"; /* () --  */
$new_user_full_name="�ǳ�"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="����ͼƬ��ʾΪ������ͼ"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- ��������ʾͼƬʱ�ڵײ���ʾ������ͼ"; /* (build_general_conf.php) --  */
$href_category_conf="�������"; /* (admin.php) --  */
$cat_private="˽��"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="ƽ��ͼ"; /* (plugins.php) --  */
$str_add_more_apps="�������Ӧ�ó���"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="���Session����..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session��������ȷ��."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session���ò���ȷ."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session���ò���ȷ. �������php.ini�и������ϵĴ���������ʹϵͳ�޷���������!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="���е�Session���ö���ȷ. ϵͳ������������Ĺ���."; /* (sec_stage_install.php) --  */
$new_user_error6="����: ���������Լ����û�����?"; /* (build_my_settings.php) --  */
$str_old_comments="������ (�Ѳ�������ĳ��ͼƬ):"; /* (build_stats.php) --  */
$str_last_viewed_page="��������ҳ��:"; /* (index.php) --  */
$str_select_row="ѡ����"; /* (basket.php) --  */
$str_select="ѡ��"; /* (basket.php) --  */
$str_new_window="�´���"; /* (basket.php) --  */
$general_anon_mail_mode="����/��ֹ �����û�ʹ���ʼ�ģʽ"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- ���������û��ʼ�ͼƬ"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="�ʼ�ģʽ: ����ʼ���С"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- ���ֵΪ�����ֽ�"; /* (build_general_conf.php) --  */
$general_thumbnail_view="��ͼ��ʾ"; /* (build_general_conf.php) --  */
$general_image_view="ͼƬ��ʾ"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL��ѯ����"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- SQL̫������PHP�������뿪������"; /* (build_general_conf.php) --  */
$general_ado_time_msg="����ʱ��:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- �Է���Ϊ��λ������󻺴�ʱ��"; /* (build_general_conf.php) --  */
$general_ado_path_msg="�����·��:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- ����ѯ�������ϱ����ںδ�"; /* (build_general_conf.php) --  */
$str_other_features="��������"; /* (build_general_conf.php) --  */
$str_language_settings="��������"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL ��ѯ����"; /* (build_general_conf.php) --  */
$general_thumb_border="��ͼ�߿�ߴ������ֵ"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- ����Ϊ0��ر�, Ĭ��: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="��ͼ�߿���ɫ"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- ������ʾ"; /* (build_general_conf.php) --  */
$str_recipient="�ռ���"; /* (basket_mail.php) --  */
$str_sender="������"; /* (basket_mail.php) --  */
$str_mail_too_big="����: �˵����ʼ�̫��.<br /><br />������ļ���СΪ: %sBytes. ����ѡ���ͼƬ��ʹ���� %sBytes.<br /><br />��ɾ��һЩͼƬ����ʹ������ѹ����Ṧ��!"; /* (basket_mail.php) --  */
$str_size_of_email="�����ʼ���С: %s."; /* (basket_mail.php) --  */
$str_new_search="��������"; /* (search.php) --  */
$str_edit_search="�༭����"; /* (search.php) --  */
$str_View="���"; /* (img_view.class.php) --  */
$str_normal="һ��"; /* (img_view.class.php) --  */
$str_detail="��ϸ"; /* (img_view.class.php) --  */
$search_result_empty="��Ǹ, δ�ҵ��κ����������"; /* (search.php) --  */
$str_chars_entered="���ַ�"; /* (img_view.class.php) --  */
$str_information_lost="��Щ��Ϣ����ʧ, ���޸��������."; /* (img_view.class.php) --  */
$general_random_image="��ҳ��ʾ���ͼƬ"; /* () --  */
$general_random_image_info="<-- �����ͼƬ��ʾ����ҳ"; /* () --  */
$general_random_image_size="���ͼƬ���ֵ"; /* () --  */
$general_random_image_size_info="<-- �������ͼƬ������ֵ"; /* () --  */
$str_edit_watermark="�༭ˮӡ"; /* (watermark.php) --  */
$str_edit_permissions="�༭ˮӡȨ��"; /* () --  */
$str_Everyone="������"; /* () --  */
$str_Nobody="û����"; /* () --  */
$str_only_logged_in_users=" ����¼���û�"; /* () --  */
$str_except_these_groups="���������:"; /* () --  */
$str_additionally_groups="����Ȩ������:"; /* () --  */
$str_allow_these_persons="û��Ϊ��Щ �û�/Ⱥ�� ���õ�ˮӡ"; /* () --  */
$str_album_based_permissions="��������Ȩ��"; /* () --  */
$str_all_albums_but_without_these="�������, �������µ�:"; /* () --  */
$str_only_on_these_albums="����Щ���:"; /* () --  */
$str_allow_these_persons="����������"; /* (db_api.php) --  */
$str_no_watermarks="�����˲���ˮӡ"; /* (db_api.php) --  */
$str_watermark_perm_part1="Ϊ�����û�, ����û�, ��/�� �������ˮӡ."; /* (watermark.php) --  */
$str_watermark_perm_part2="Ĭ��Ϊ'����¼���û�' �� '�������'."; /* (watermark.php) --  */
$str_watermark_perm_part3="����ζ�ŵ�¼���û���������������е�ͼƬ������ˮӡ."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="ϵͳ����������"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="���ϵͳ��GD�ⲻ֧��jpeg!. JPEGͼƬ������������ʾ!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Ϊ��Ƶ������ͼ"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--�����������������رմ���"; /* (build_generl_config.php) --  */
$general_update_notice="���¼��"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- ÿ�ܼ��һ�γ������"; /* (build_general_config.php) --  */
$large="��"; /* (build_general_config) -- selectfield for mini images size */
$directories="Ŀ¼"; /* (build_thumbnail_conf.php) --  */
$do_nothing="����ʲô"; /* (build_thumbnail_conf.php) --  */
$create="����"; /* (build_thumbnail_conf.php) --  */
$recreate="�ؽ�"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="config�����н�ֹ��ʾEXIF��Ϣ"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="config�����н�ֹ��ʾIPTC��Ϣ"; /* (build_thumbnail_conf.php) --  */
$silent_mode="�Ѻ�ģʽ(�� ����ʾ������Ϣ)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="��ͼ"; /* (build_thumbnail_conf.php) --  */
$log_title="��־"; /* (log.php) --  */
$log_options="��־ѡ��"; /* (log.php) --  */
$log_method_label="��¼��:"; /* (log.php) --  */
$str_extra_headers="ͷ:"; /* (log.php) --  */
$str_log_events['login']="�û���¼"; /* (log.php) --  */
$str_log_events['thumbnail']="��ͼ����"; /* (log.php) --  */
$str_log_events['update']="����"; /* (log.php) --  */
$str_log_events['db']="���ݿ�"; /* (log.php) --  */
$str_log_events['filemanager']="�ļ�����"; /* (log.php) --  */
$str_events="��־"; /* (log.php) --  */
$find_duplicates="�����ظ�ͼƬ"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="û����PHP����������(php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Warning"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="��ͼ����ɾ��"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="All Statistics will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="��ҳ���ͼƬ��ʾ"; /* (build_general_conf.php) --  */
$str_download_images="���ص���ͼƬ"; /* (build_perms.php) --  */
$str_add_image_comments="��ͼƬ��������"; /* (build_perms.php) --  */
$str_add_image_description="���ͼƬ�������ͷ���"; /* (build_perms.php) --  */
$str_mail_add_all_users="�������û������ʼ��б�"; /* (plugins/mail.php) --  */
$str_note_upload="<b>��ʾ:</b> �㲻��һ��Ҫͨ������ύͼƬ. ��������κ���ϲ���ķ�ʽ (ftp,scp,nfs,local,...). ֻҪ�����Ƿŵ�albumsĿ¼����."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="������ѡ��(���������еĹ��)"; /* (varios) --  */
$blacklist_onoff="ʹ����Ϣ����"; /* (varios) --  */
$blacklist_keywords="���˵Ĵ���:"; /* (varios) --  */
$str_entire_path="�ļ�·��"; /* (search.php) --  */
$mail_format="Mail format:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (images attached)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (images inline)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="ͳ��"; /* (various) --  */
$stats_total_images="ͼƬ����"; /* () --  */
$stats_total_img_views="�������"; /* () --  */
$stats_total_img_downs="��������"; /* () --  */
$stats_total_img_selected="�������ͼƬ����"; /* () --  */
$stats_total_downs_selected="�����ص�ͼƬ����"; /* () --  */
$stats_downloads="���ش���"; /* () --  */
$stats_downl_size="��������"; /* () --  */
$stats_coments_total="��������"; /* () --  */
$stats_coments_sel="�����۵�ͼƬ����"; /* () --  */
$str_log_events['guestbook']="����"; /* (log.php) --  */
$stats_realtime="����/�ر�ʵʱͳ��"; /* (build_stats.php) --  */
$stats_realtime_info="<-- ʵʱ��ʾͳ����Ϣ(��ʹ�û���)"; /* (build_stats.php) --  */
$stats_cache_time="ͳ�ƻ���ʱ��"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- ���ָ��ʱ��ˢ��ͳ�� (��������)"; /* (build_stats.php) --  */
$stats_user_info="�û�"; /* (stats_view.php) --  */
$stats_image_info="ͼƬ"; /* (stats_view.php) --  */
$stats_comments_info="����"; /* (stats_view.php) --  */
$stats_general_info="����"; /* (stats_view.php) --  */
$spam_blocked="���ع��Ĵ���"; /* () --  */
$mail_current_status="Current Status"; /* (mailing.php) --  */
$mail_sending_to="Sending to: "; /* (mailing.php) --  */
$mail_counters="Counters (Success/Fail/Total)"; /* (mailing.php) --  */
$mail_send_fail="Send FAIL: "; /* (mailing.php) --  */
$mail_send_ok="Send OK: "; /* (mailing.php) --  */
$mail_all_complete="All Completed!"; /* (mailing.php) --  */
$mail_failed_list="List of failed addresses"; /* (mailing.php) --  */
$mail_ok_list="List of sent addresses"; /* (mailing.php) --  */
$mail_mailer_error=" - Mailer Error: "; /* (mailing.php) --  */
$str_log_events['comments']="����"; /* (log.php) --  */
$str_edit_members="�༭�û�"; /* (build_user.conf.php) --  */
$edit_groups="�༭�û���"; /* (build_user.conf.php) --  */
$str_basket="����"; /* (various) --  */
$lang_plugins['log']="��־"; /* (admin.php) --  */
$rss_created="XML RSS file generated successfully"; /* () --  */
$rss_not_created="RSS has not been built, because no change has been found"; /* () --  */
$rss_settings_saved="RSS settings saved"; /* () --  */
$lang_plugins['stats']="ͳ��"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="����ˮӡ"; /* () --  */
$str_with_watermarks="���ˮӡ"; /* () --  */
$str_create_cache_img="����ͼƬ����"; /* () --  */
$str_reset_button="����"; /* () --  */
$cache_stats="ͼƬ������Ϣ"; /* () --  */
$drop_duplicates="ɾ���ظ��ļ�"; /* () --  */
$general_exif_rotate="����/�ر�ͼƬ�Զ���ת"; /* () --  */
$general_exif_rotate_info="<-- ����EXIF�����Զ���תͼƬ"; /* () --  */
$lang_plugins['maps']="�ȸ�/�Ż���ͼ"; /* () -- maps plugin */
$maps_setup_info_header="�ȸ�/�Ż���ͼ����"; /* () -- maps plugin */
$maps_setup_yahoo_id="����Ż�Ӧ��ID"; /* (maps plugin) --  */
$maps_setup_google_key="��Ĺȸ�Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="�Բ��� - �˲����ҪPHP�汾4.2.0����µİ汾. ����� PHP"; /* (maps plugin) --  */
$maps_select_type="��ѡ���ͼ����:"; /* (maps plugin) --  */
$maps_select_type_info="<-- ѡ��ʹ�ùȸ��ͼ���Ż���ͼ"; /* (maps plugin) --  */
$maps_select_display_type="��ѡ���ͼ��ʾ����:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- ��ʾ Hybrid, Sat or Regular��ͼ"; /* (maps plugin) --  */
$maps_zoom_level="Ĭ�����ŵȼ�: 1-16 (Ĭ�� 16, �����ͼ)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- ���õ�ͼ��Ĭ�����ŵȼ�"; /* (maps plugin) --  */
$maps_zoom_location="Ĭ�ϵ��������λ��"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- Ĭ�ϵĵ�ͼ����λ��"; /* (maps plugin) --  */
$maps_google_ctrl_size="�ȸ��ͼ���Ƴߴ�"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- �����ȸ��ͼ���������ߴ�"; /* (maps plugin) --  */
$maps_str="��ͼ"; /* (maps plugin) --  */
$map_type_ctrl="�����ͼ���Ϳ���"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- �ڵ�ͼ����ʾ��ͼ���Ϳ���"; /* (maps plugin) --  */
$map_slide_ctrl="�����ͼ��������"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- �ڵ�ͼ����ʾ��ͼ��������"; /* (maps plugin) --  */
$map_pan_ctrl="�����ͼ������"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- �ڵ�ͼ����ʾ��ͼ������"; /* (maps plugin) --  */
$map_auto_popup="�������Զ�����"; /* (maps plugin) --  */
$map_auto_popup_info="<-- ����ƹ�ʱ�Զ���ʾ��ǵ�����"; /* (maps plugin) --  */
$map_album_add="����ͼ��"; /* (maps plugin) --  */
$map_marker_del="ɾ�����"; /* (maps plugin) --  */
$map_search_location="����/������λ��"; /* (maps plugin) --  */
$map_location_here="���λ��"; /* (maps plugin) --  */
$map_search_loc_button="����λ��"; /* (maps plugin) --  */
$map_add_location="������λ��"; /* (maps plugin) --  */
$map_assign_album="����ͼ������ͼλ��"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>