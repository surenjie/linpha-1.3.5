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
/*
Author   : [D.L.S]BxGz
language : Simplified Chinese
E-mail   : dreamlandstudio@msn.com
Date     : 2007.03.10 for LinPHA Version 1.3.0
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="我的相册";

/* alerts */
$alert_fopen="错误! 文件无法打开...";
$printing_probs="打印错误";
$printing_probs_msg="禁止打印！请看";

/* global messages */
$subfolders="子目录";
$img_th="图片";
$in_th="位于"; /* used for the photos in $foldername */
//$alb_th="Albums in subfolder";
$thumb_hint_msg="点击放大";
$latest_photo="最新的";
$view_at="选择分辨率";
$close_button="关闭";
$help="帮助";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="欢迎使用 LinPHA";
$welc_text="嗨，这是 &quot;The Linux Photo Archive&quot; LinPHA 系统首页。<br><br>首次使用请先进行系统安装。";
$welc_hint="<b>继续之前:</b>";
$welc_hint1="1. 建立允许能写入资料的目录&quot;<b>linpha/sql</b>&quot;! (例如 chmod 777 sql)";
$next_button="下一步"; /* used as left menu header in all 4 stages */
$inst_msg="安装 LinPHA"; /* used as left menu header in all 4 stages */
$inst_status_1="请选择语言并点击&quot;下一步&quot;";
$inst_status_step1="步骤 1 (共4步)";

/* sec_stage_install (page 2) */
$inst_access_msg="设置数据库访问类型";
$inst_full_access_msg="<b>YES !</b><br> 我能完全存取 MySQL 数据库，我能建立新的数据库及用户。<br>也就是说，这是我的主机！";
$inst_limited_access_msg="<b>NO !</b><br> 我仅能有限度存取MySQL数据库。<br>我的ISP并不允许我建立新的数据库及用户。";
$inst_status_2="请选择数据库访问类型，若不确定请选 NO!";
$inst_status_step2="步骤 2 (共4步)";

/* requirements */
$req_check_msg="检查系统需求";
$req_found_msg="已找到";
$req_miss_msg="未找到";
$req_safe_fail="开启";
$req_safe_ok="关闭";
$php_safemode_check_msg="检查 PHP 的安全模式...";
$php_version_check_msg="检查 PHP 版本> 4.1.0...";
$mem_check_msg="检查 PHP 内存限制...";
$gd_check_msg="检查 GD 函数库...";
$convert_check_msg="检查 ImageMagick...";
$exif_check_msg="检查 EXIF 支持...";
$summary_msg="摘要：";
$safe_mode_err="您的服务器正在使用 PHP 的安全模式。当 php.ini 中的设置 safe_mode = On 时，LinPHA 将无法运行！";
$inst_abort_msg="!!! 安装失败 !!!";
$php_version_err="您的服务器运行的 PHP 版本低于 4.1.0。请升级您的 PHP 版本，否则 LinPHA 将无法运行！";
$gd_convert_err="ImageMagick 及 GD 函数库均检测不到，系统将无法运行。";
$convert_sum_found_msg="服务器上已检测到 ImageMagick ，LinPHA 将能创建高品质的缩略图。";
$convert_sum_miss_msg="服务器上未检测到 ImageMagick ，系统将仅能输出低品质的缩略图。";
$exif_sum_found_msg="检测到您的 PHP 环境支持 EXIF 。这将允许 LinPHA 显示图片的 EXIF 信息。";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="检测到您的 PHP 环境不支持 EXIF 。LinPHA 将使用自带的 EXIF 分析程序。";
/* TODO next 3 */
//$session_path_check_msg="检查 session.save_path 设置";
$session_path_found_msg="php.ini 中 session.save_path 设置的路径为：";
$session_path_miss_msg="session.save_path 路径未设置。";
$mem_limit_ok_msg="很好，您的 PHP 设置中内存限制为 >= 16MB。 这样在生成缩图时不会有任何问题。";
$mem_limit_low_msg="嗯，您的 PHP 设置中的内存限制为 <=16MB。如果在生成缩略图时遇到问题，可以试着增大 php.in 中 memory_limit 的值，或者降低缩略图分辨率然后再试试……";
$choose_def_quali="请选择图片的默认品质";
$choose_def_quali_warn="如果您的 CPU &lt; 1Ghz，请不要设为高品质";

/* third_stage_install (page 3) */
$inst_superadmin_header="设置 MySQL 数据库";
$inst_superadmin_name="MySQL 数据库 用户名：";
$inst_superadmin_name_info="&lt;-- MySQL 的用户名(必须存在于数据库中)";
$inst_superadmin_pass="MySQL 数据库 密码：";
$inst_superadmin_pass_info="&lt;-- MySQL 的密码(必须存在于数据库中)";

$inst_admin_header="设置 LinPHA 系统管理员";
$inst_admin_name="LinPHA 管理员用户名：";
$inst_admin_name_info="&lt;-- 管理员的用户名";
$inst_admin_pass="LinPHA 管理员密码：";
$inst_admin_pass_info="&lt;-- 管理员的密码";
$inst_admin_email="管理员 Email：";
$inst_admin_email_info="&lt;-设置管理员的电子邮件地址";

$inst_db_header="设置 LinPHA 数据库连接";
$inst_db_host="主机名称：";
$inst_db_host_info="&lt;-主机名称：通常为 &quot;localhost&quot;";
$inst_db_host_info2="&lt;-主机名称：MySQL 数据库主机名称";
$inst_db_host_port="端口：";
$inst_db_host_port_info="&lt;-连接端口：若不确定则省略！";
$inst_db_name="LinPHA 数据库名称：";
$inst_db_name_info="&lt;-- LinPHA 所使用的数据库名称，通常为 &quot;linpha&quot;";
$inst_db_name2="数据库名称：";
$inst_db_name_info2="&lt;-ISP所提供的数据库名称";
$inst_table_prefix="数据表前缀";
$inst_table_prefix_info="&lt;-在所有数据表名称前缀";

$general_header="基本设置";
$general_album_title="相册标题";
$general_album_title_info="&lt;- 留空则使用默认名称";
$general_photos_row="显示行数：";
$general_photos_row_info="&lt;-- 也就是每一列显示的数量";
$general_photos_col="显示列数：";
$general_photos_col_info="&lt;-- 也就是每一行显示的数量";
$general_photos_width="图片显示宽度：";
$general_photos_width_info="&lt;- 512 (默认)";
$general_photos_height="图片显示高度：";
$general_photos_height_info="&lt;- 384 (默认)";
$general_img_quality="图片品质：";
$general_img_quality_info="&lt;- 调整图片品质 0-100 (默认为 75)";

$inst_status_3="请填写所有项目!";
$inst_status_step3="步骤 3(共4步)";

/* forth_stage_install (page 4) */
$inst_status_4="恭喜，安装已完成！LinPHA 现在已经可以使用了。";
$inst_status_step4="步骤 4(共4步)";
$inst_submit="完成";
$inst_db_tryconn="尝试连接到数据库主机";
$inst_db_tryconn_error="连接到数据库主机时发生错误， using:";
$inst_db_tryconn_ok="连接成功!";
$inst_db_tryinst="尝试创建新数据库：";
$inst_db_tryinst_error="创建新数据库时发生错误：";
$inst_db_tryinst_ok="创建成功！";
$inst_create_tb_msg="创建所需的数据表";

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
$inst_db_connect_inc_msg="连接数据库主机发生错误!";
$inst_db_connect_inc_msg1="选取数据库 ".@$db_realname." 时发生错误<br>如果此信息是在安装时发生，请将 LinPHA 文件夹 &quot;sql&quot; 中的 db_connect.php 文件删除！";
/* ------------------------------------------------------------------ */

$table_create="创建表：";
$table_create_error="创建表时发生错误！";
$table_create_ok="创建完成！";
$table_insert_admin="建立系统管理员：";
$table_insert_admin_error="建立管理员时发生错误!";
$table_insert_admin_ok="建立完成！";
$write_db_config="保存数据库配置文件";
$fopen_error="文件 sql/db_config.php 无法写入，请设置文件夹权限为 777。";
$fopen_ok="配置文件已保存！";
$install_finish_msg="安装完成！！";
$admin_task="点击继续";
$file_create_ok="创建成功！";
$configure_error="请填写所有必要项目！！！";
$could_not_open="错误，无法访问 users 数据表! 可能您没有在数据库中增加新用户的权限，<br>请返回安装第二页选择其他的数据库访问方式。";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The PHP Photo Archive";
$head_title="The PHP Photo Archive";
$book_home="首页";
$book_about="关于";
$book_admin="管理";
$book_admin_user="个人设置";
$book_links="链接";
$book_search="搜索";
$book_logout="退出";
$book_login="登录";
$num_pictures="图片总数:";
$user_visits="访问人次";
$user_online="位在线用户";
$guest="游客";
$html_lang="ZH-CN";
$html_charset="GB2312";

/*#################################################
## index.php
#################################################*/
$index_welc_text="嗨，欢迎访问 &quot;The PHP Photo Archive&quot; " .
		"<a href='http://linpha.sf.net/'><u>LinPHA.</u></a>官方网站。";

/*#################################################
## search.php
#################################################*/
$search_header="搜索";
$radio_all="全部";
$radio_descript="描述";
$radio_comment="评论";
$radio_category="分类";
$radio_file="文件名";
$search_in="搜索相册";
$search_all="所有相册";
$search_for="搜索关键字";
$search_button="搜索";
$photos_found="符合条件";
$search_info="系统搜索页";
$search_msg="在数据库中根据以下信息搜索图片：";

/*#################################################
## img_view.php
#################################################*/
$img_detail="图片信息";
$img_size="最大";
$img_com="简介";
$img_des="图片描述";
$img_cat="所属分类";
$img_name="名称";
$img_info_stored="评论已保存至数据库中";
$please_login="请 <a href='login.php'><font color='#000099'><u>登录</u></font></a> 以便发表评论";
$back_to_thumbs="<b><u>返回缩略图模式</u></b>";
$back_to_search="<b><u>返回搜索页面h</u></b>";
$button_next="下一张";
$button_prev="上一张";
$exif_ext_error="抱歉，PHP 没有启用 EXIF";
$exif_error="抱歉，图片不包含任何 EXIF 信息!";
$exif_more="更多细节";
$exif_less="简略信息";
$detail_header="图片";
$detail_header1="/";
$detail_header2="张图片在此相册";
$php_to_old="PHP < 4.2.0 EXIF 禁用！";
$views="次浏览";
$slideshow="幻灯片";
$seconds="秒";
$go="Go";
$stopslide="停止幻灯片";
/* image rotating */ /* TODO next */
$img_rotate_ok="旋转图片";
$img_rotating="旋转图片错误"; // TOC entry
$img_rotating_hint1="不可旋转图片！请按这里";
$img_rotating_hint2="查看原因";

/*#################################################
## login.php
#################################################*/
$login_msg="请登录！";
$login_error="用户名或密码不正确";
$login_name="用户名";
$login_pass="密码";
$login_info="登录页面";
$login_request_account_info="申请帐号：";
$login_request_target="请与管理员联系。";
$login_admin_info="执行管理任务必须使用管理员帐号登录。";
$login_friend_account_info="如果您已经拥有了一个帐号，那么登录后可以修改个人的资料信息。";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="系统管理";
$please_turn_off_msg="当图片添加完毕后，请将 '自动创建/删除缩略图' 设置为关闭。<br> LinPHA 系统将运行的更加迅速 :)";
/* left menu */
$logout_msg="退出";
$welc_msg="欢迎光临 ";
$stat_msg="您已经授权进行管理工作，如发表评论、添加图片描述。";
$back_to_msg="<b>返回显示相册</b>";
$href_general_conf="基本设置";
$href_user_conf="用户管理";
$href_folder_conf="目录管理";
$href_sql="MySQL数据库管理";
$href_ftp="文件管理";
$href_stats="统计资料";
$href_other_conf="生成缩略图";


/* general config */
/* uses also entries from install.php */
$default_language="默认语言";
$default_language_info="&lt;-- 设置默认语言";
$general_auto_lang="自动检测语言"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- 自动检测浏览器使用语言";
$general_success_msg="! 修改成功 !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="图片旋转功能";
$general_rotate_info="&lt;-- <b>特别注意！请查看帮助</b>";
$general_exifinfo="图像 EXIF 信息";
$general_exifinfo_info="&lt;-- 开启/关闭 图像 EXIF 信息支持";
$general_exifdefault="默认显示 EXIF 信息";
$general_exifdefault_info="&lt;-- 默认激活显示图像 EXIF 信息";

$general_exiflevel="显示 EXIF 信息的程度";
$general_exiflevel_info="&lt;-- 设置 EXIF 信息的繁简程度";
$exif_low="最少";
$exif_medium="中等";
$exif_high="最多";
$general_filename="显示文件名";
$general_filename_info="&lt;-- 在缩略图下显示文件名";
$general_thumb_order="缩略图排序方式";
$general_thumb_order_info="&lt;-- 设置缩略图按照文件名或日期排序";
$thumb_order_date="日期";
$thumb_order_file="文件名";
$general_autoconf="自动 创建/删除 缩图";
$general_autoconf_info="&lt;-- <b>关闭此项，系统性能将大幅提升。</b>";
$general_counterstat="计数器";
$general_counterstat_info="&lt;-- 默认开启";
$general_blocking="锁定 IP 时间（分钟）";
$general_blocking_info="&lt;-- 在指定时间内同一IP地址将不会作为新的访问统计";
$general_theme="选择主题风格";
$general_theme_info="&lt;-- 设置默认风格主题";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="为缩略图和图片使用高品质";
$general_hq_info="&lt;-- 关闭此项，系统性能将大幅提升。";
$submit_button_general="保存修改";
$button_on_msg="启用";
$button_off_msg="禁用";
$basic_opts="基本";
$advanced_opts="高级";
$show_basics="点击显示基本选项设置";
$show_advanced="点击显示高级选项设置";
$general_printing="游客打印功能";
$general_printing_info="&lt;-- 启用则任何人均允许打印图片";
$general_slideshow="幻灯片显示";
$general_slideshow_info="&lt;-- 是否允许以幻灯片方式显示";
$general_mini_preview="上下张图盘按钮样式/尺寸";
$general_mini_preview_info="&lt;-- 如果大多数用户带宽较低，那么请禁用。";

/* modify existing user table */
$mod_user_header="修改已存在的用户";
$submit_button_mod_user="修改用户";
$mod_user_success_msg="! 用户已修改 !";
$submit_button_delete="删除";
$del_user_success_msg="! 用户已删除 !";

/* add new user table */
$new_user_header="新增用户";
$new_user_name_info="用户名";
$new_user_pass_info="密码";
$new_user_mail_info="电子邮件";
$new_user_level_info="权限设置";
$friend="好友";
$submit_button_new_user="新增用户";
$new_user_success_msg="! 用户已新增 !";

/* friends account table */
$friend_user_header="帐户设置";
$submit_button_friend_user="更新帐户";
$delete_button_friend_user="删除帐户";
$friend_info_msg="设置/修改您的帐户";

/* add new category table */
$new_cat_header="新增分类";
$new_cat_info="新分类名称";
$submit_button_new_cat="新增分类";
$new_cat_success_msg="! 分类已新增 !";
$mod_cat_header="修改/删除 分类";
$cat_name_header="分类名称";
$cat_mod_header="修改分类";
$cat_del_header="删除分类";
$submit_button_mod_cat="修改";

/* set directory permissions */
$set_dir_perms_header="设置文件夹权限";
$dir_name="文件夹";
$dir_perms="权限设置";
$action="操作";
$submit_button_folder="提交";
$public="公开";
$friends="好友";
$private="私人";
$new_perms_success_msg="! 权限已改变 !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="总体统计";
$stats_over_photos="图片数量：";
$stats_over_views="总浏览次数：";
$stats_over_albums="相册数量：";
$stats_over_most_alb_visists="最热门的相册：";
$stats_over_space="磁盘使用空间(所有相册)：";
$stats_over_visitors="迄今访问人数：";
$stats_over_users="已注册用户数：";
$stats_top_ten="十大热门浏览";
$stats_rank="排名";
$stats_no_views="浏览次数：";
$stats_last_view="最后浏览时间：";
$stats_alb_name="相册名称：";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="第一阶段";
$parse_sec="第二阶段";
$parse_third="第三阶段";
$parse="正在分析";
$parsed="分析：";
$dirs="子目录";
$done="全部完成...";
$not_allowed_msg="抱歉，您没有权限执行这个脚本！";
/* these entries are called from within admin.php */
$th_msg="立即创建所有缩略图！";
$table_hint_msg="点击开始立即创建所有子目录下的缩略图！";
$start_button="开始！";
$recreate_thumbs_header="重新生成所有缩略图";
$recreate_thums_msg="将重新生成所有缩略图！所有的统计资料将会丢失！";
$recreate_thums_warning="请确认您是否真的要重新生成所有的缩略图，并且要删除所有的评论，描述及统计资料！请注意，这个操作不能恢复。确定继续进行吗？";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="请选择打印版式";
$images_page="张/页";
$indexprint="索引打印 (28)";
$note="<strong>注意：</strong> 在打印之前您可以调整浏览器中的 \"设置打印格式\"确保所有的图片都能符合打印页面的大小！！！";
$print_button="打印预览";
$href_check_all="全部选定";
$href_clear_all="全部取消";
$print_error="错误，没有选择任何图片！！！";
$print_mode="打印模式";
$print_image="打印图片";
$videos_msg="不能打印动态图片";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL 数据库管理系统 ver.";
$mysql_cancel="取消";
$mysql_DHTML_hint="关闭 DHTML 显示 - 备份完成之前将不会显示任何信息。";
$mysql_select_all="全部选定";
$mysql_deselect_all="全部取消";
$mysql_create_backup="创建备份";
$mysql_back_menu="返回主菜单";
$mysql_table_checks="检查数据表...";
$mysql_table_check="数据表检查中";
$mysql_struct_msg="Creating structure for";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="整体进度：";
$mysql_back_complete="完成备份用时";
$mysql_back_menu_long="返回 MySQL 数据库备份首页";
$mysql_open_warn1="<B>警告:</B> 打开失败 ";
$mysql_open_warn2="无法写入！请修改文件夹权限为<BR><BR><I>CHMOD 777</I>";
$mysql_date_msg="现在时间 "; // it follows time of the day...
$mysql_last_backup="最后完整备份 MySQL 数据库：";
$mysql_backup_hint="通常每周备份一次即可。";
$mysql_down_backup="下载完整数据库备份文件";
$mysql_down_backup_part="下载以选择方式进行备份的备份文件";
$mysql_down_backup_struct="下载仅包含数据库结构的备份文件";
$mysql_down_backup1="(鼠标右键，目标另存为...)";
$mysql_unknown_backup="最后备份 MySQL 数据库时间：<I>未知</I>";
$mysql_href_recom="创建新的完整备份，完全插入（推荐）";
$mysql_href_standard="创建新的完整备份，标准插入（较小）";
$mysql_href_partial="创建选择性备份，只备份选择的表（包含完整插入）";
$mysql_href_structure="创建新的完整备份，只备份表结构";
$mysql_days_last="天";
$mysql_hours_last="小时";
$mysql_min_last="分钟";
$mysql_sec_last="秒";
$ago="前"; // reads in context "some days ago"
$backup="备份";
$restore="还原";
$optimize="优化";
$optimize_tables="优化表";
$opt_table_name="表名称";
$opt_table_check="检查表";
$opt_table_optimize="优化表";
$opt_table_msg="Type of message";
$opt_start_msg="开始检查并优化数据库所有表";
$fullback_hint_msg="如果拥有多个数据库，请使用选择性备份。";
$restore_last_fullback="还原最后<b>完整</b>备份：";
$restore_last_partback="还原最后<b>选择性</b>备份：";
$restore_error="访问备份文件发生错误。文件未找到！";
$restore_success="还原成功！!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>禁止访问</H1> 您没有权限访问该目录');
define('STR_BACK',	'返回');
define('STR_LESS',	'较少');
define('STR_MORE',	'更多');
define('STR_LINES',	'行');
define('STR_FUNCTIONLIST', '功能列表');
define('STR_EDIT',	'编辑');
define('STR_VIEW',	'查看');
define('STR_RENAME',	'重命名');
define('STR_MKDIR',		'新建目录');
define('STR_DELETE',	'删除');
define('STR_BOTTOM',	'底部');
define('STR_TOP',		'顶部');
define('STR_FILENAME',	  '文件名');
define('STR_FILESIZE',	  '大小');
define('STR_LASTMODIFIED', '修改时间');
define('STR_SUM', '<B>%s</B> 字节，共 <B>%s</B> 个对象。');
define('STR_CREATEDIRLEGEND', '新建目录');
define('STR_CREATEDIR',       '新建目录名称：');
define('STR_CREATEDIRBUTTON', '新建目录');
define('STR_RENAMELEGEND',       '重命名');
define('STR_RENAMEENTERNEWNAME', '输入 %s 新名称:');
define('STR_RENAMEBUTTON',       '重命名');
define('STR_ERROR_DIR','错误：无法读取目录内容');
define('STR_AUDIO',            '音频文件');
define('STR_COMPRESSED',       '压缩文件');
define('STR_EXECUTABLE',       '应用程序');
define('STR_IMAGE',            '图像文件');
define('STR_SOURCE_CODE',      '代码文件');
define('STR_TEXT_OR_DOCUMENT', '文本文档');
define('STR_WEB_ENABLED_FILE', '网页文件');
define('STR_VIDEO',            '视频文件');
define('STR_DIRECTORY',        '文件夹');
define('STR_PARENT_DIRECTORY', '上级目录');
define('STR_EDITOR_SAVE',      '保存文件');
define('STR_EDITOR_SAVE_ERROR','文件 <I>%s</I> 为只读或是已不存在');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', '快速导航');
define('STR_FILE_UPLOAD_DRIVES', '硬盘:');
define('STR_FILE_UPLOAD', '上传');
define('STR_FILE_UPLOAD_MAIN', '上传');
define('STR_FILE_UPLOAD_DISABLED', '抱歉，php.ini 中禁用文件上传。');
define('STR_FILE_UPLOAD_DESC','请选择要上传的文件，并设定传输完成时要进行的操作。');
define('STR_FILE_UPLOAD_FILE','文件');
define('STR_FILE_UPLOAD_TARGET','上传文件到');
define('STR_FILE_UPLOAD_ACTION','传输完成后进行:');
define('STR_FILE_UPLOAD_NOTHING','空闲');
define('STR_FILE_UPLOAD_DROPFILE','当所选择的操作进行完之后删除已上传的文件');
define('STR_FILE_UPLOAD_MAXFILESIZE','php.ini 中设置允许上传的单个文件最大为：');
define('STR_FILE_UPLOAD_ERROR',        '错误: 无法移动文件 %s 到目录 %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '错误: 无法切换 (chdir) 到 %s 目录. 文件已经处理: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '错误: 无法删除 %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '错误: 上传文件 %s 超过 php.ini 设置中指定的大小 - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','错误: 上传文件 %s 的大小超过 HTML 表单的设置');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '错误: 上传文件 %s 只有部分上传完毕');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="全屏模式"; /* (img_view.php) -- new [panorama view] href  */
$close_win="关闭窗口"; /* (various files) -- javascript close window */
$nav_hint="请使用鼠标或方向键进行操作！"; /* (image_panorama_view.php) --  */
$pano_view_of="全屏查看图片"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="检测 php 是否设置了open_basedir..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="否"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="糟糕，您的php设置了 open_basedir 路径 \"open_basedir\". ！<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ LinPHA 将会使用 GD 函数库来创建缩略图，但可能会有问题<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ 如果允许，请不要在 PHP.ini 中设置 \"open_basedir\""; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ 如果允许，请不要在 PHP.ini 中设置 \"open_basedir\" 或是重新编译 PHP 并加上 GD函数库的支持(--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="解压缩 *.tar.gz 档案文件 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="解压缩 *.tar.bz2 档案文件 (UNIX)"; /* (index.php) --  */
$extract_gz="使用 gzip 解压缩 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="使用 unzip 解压缩 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="使用 pkzip 解压缩 (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! 用户组已增加 !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! 用户组已修改 !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! 用户组已删除 !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! 分类已修改 !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! 分类已删除 !"; /* (admin.php) -- redirect message */
$href_groups="点击新增或修改用户组"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="警告：请用您的新帐号进行登录！！！"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="返回目录管理首页"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="返回用户管理首页"; /* (build_user_conf.php) -- navi href  */
$header_new_group="新增用户组"; /* (build_user_conf.php) -- table header */
$header_groupname="用户组名称"; /* (build_user_conf.php) -- table header */
$button_addgroup="新增用户组"; /* (build_user_conf.php) -- submit button */
$header_mod_group="修改/删除 用户组"; /* (build_user_conf.php) -- table header */
$mod_group_header="修改用户组"; /* (build_user_conf.php) -- table header */
$del_group_header="删除用户组"; /* (build_user_conf.php) -- table header */
$search_to_short="搜索关键字太短, 最少2个字符!"; /* (search.php) --  */
$general_thumb_size="修改缩略图尺寸"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- 设置缩略图最大尺寸，单位：像素"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="缩略图边框"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<-- 为缩略图加上边框"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="请选择缩略图大小"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="边框设置"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="开启图片边框"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="关闭图片边框"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="糟糕，您的 PHP 运行于安全模式 \"safe_mode\" ！<br />"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ 如果允许，请不要在 PHP.ini 中启用安全模式 \"safe_mode\""; /* (sec_stage_install.php) --  */
$general_anon_post="匿名发布"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- 允许匿名发表评论"; /* (build_general_conf.php) --  */
$stats_over_comment="评论数"; /* (build_stats.php) --  */
$top10_downs_href="十大热门下载"; /* (build_stats.php) --  */
$top10_views_href="十大热门图片"; /* (build_stats.php) --  */
$stats_head_downs="十大热门下载"; /* (build_stats.php) --  */
$no_downloads="下载次数"; /* (build_stats.php) --  */
$general_anon_download="游客下载"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- 显示/隐藏 图片下载链接地址"; /* (build_general_config.php) --  */
$seach_multiple_select_use="多选请使用"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="分类"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="选择相册"; /* (search.php) --  */
$search_date_from_to="日期 从 / 到"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="新密码"; /* (build_user_conf.php) --  */
$new_user_error4="用户名不能为空白"; /* (admin.php) --  */
$new_user_error5="用户名已经存在"; /* (admin.php) --  */
$new_user_error1="旧密码不正确"; /* (admin.php) --  */
$new_user_error2="两次输入的新密码不一致"; /* (admin.php) --  */
$new_user_error3="电子邮件不正确"; /* (admin.php) --  */
$new_user_old_password="旧密码"; /* (admin.php) --  */
$new_user_retype_password="再次输入新密码"; /* (admin.php) --  */
$select_db_header="请选择数据库类型"; /* (sec_stage_install.php) --  */
$mysql_info="使用 MySQL 数据库请选此项"; /* (sec_stage_install.php) --  */
$postgres_info="使用 PostgreSQL 数据库请选此项。请看"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="自动登录"; /* (toc.php) --  */
$login_autologin_user="自动登录用户信息"; /* (toc.php) --  */
$toc_timer="计时器"; /* (toc.php) --  */
$general_autologin="自动登录"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- 启用自动登录功能"; /* (build_general_conf.php) --  */
$general_timer="计时器"; /* (build_general_conf.php) --  */
$general_timer_info="<-- 在页脚显示页面执行时间"; /* (build_general_conf.php) --  */
$login_autlogin="自动登录"; /* (login.php) --  */
$lostpw_title="忘记密码"; /* (login.php) --  */
$lostpw_question="忘记了密码？"; /* (login.php) --  */
$lostpw_type_user_or_email="输入您的用户名或电子邮件地址"; /* (login.php) --  */
$lostpw_email1="有人使用了找回密码功能。如果不是您的话，您可以忽略这封信息。如果这是您发出来的要求，请输入以下密码到需要的项目里："; /* (login.php) --  */
$lostpw_email1_part2="(请注意：这并不是您的新密码！)"; /* (login.php) --  */
$lostpw_email1_part3="系统管理员"; /* (login.php) --  */
$lostpw_email_error="错误：邮件无法发送，请与管理员联系。"; /* (login.php) --  */
$lostpw_error_nothing_found="抱歉，没有与您输入的资料相符的用户名或密码。"; /* (login.php) --  */
$lostpw_email_sent="您的电子邮件已寄出。"; /* (login.php) --  */
$lostpw_should_receive="稍后您将收到一封电子邮件，请在这里输入邮件里提供的密码："; /* (login.php) --  */
$lostpw_go_back="返回"; /* (login.php) --  */
$lostpw_email2="密码修改成功。您的新密码是："; /* (login.php) --  */
$lostpw_email2_part2="稍后您可以在 \"个人设置\" 中进行更改。"; /* (login.php) --  */
$lostpw_new_password="新密码"; /* (login.php) --  */
$lostpw_successfully_changed="密码修改成功，稍后您将收到包含新密码的电子邮件。"; /* (login.php) --  */
$lostpw_error_wrong_code="抱歉，输入不正确."; /* (login.php) --  */
$lostpw_enter_correct_code="请输入正确的电子邮件地址："; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA 插件"; /* (admin.php) --  */
$lang_plugins['watermark']="水印管理"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="系统基准测试"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="数据库管理"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="已启用插件"; /* (admin.php) --  */
$lang_plugins['enabled']="启用"; /* (plugins.php) --  */
$lang_plugins['disabled']="禁用"; /* (plugins.php) --  */
$lang_plugins['update']="更新"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="插件已更新"; /* (admin.php, plugins.php) --  */
$wm_wm_man="水印管理 "; /* (watermark.php) --  */
$wm_disable="禁用水印功能 "; /* (watermark.php) --  */
$wm_change_example_img="选择示例图片"; /* (watermark.php) --  */
$wm_no_input_files_found="输入文件不存在 "; /* (watermark.php) --  */
$wm_image_quality="图片品质(仅供预览用)"; /* (watermark.php) --  */
$wm_enable_text="启用：文字水印"; /* (watermark.php) --  */
$wm_text="文字"; /* (watermark.php) --  */
$wm_font="字体"; /* (watermark.php) --  */
$wm_fontsize="字体大小"; /* (watermark.php) --  */
$wm_fontcolor="字体颜色"; /* (watermark.php) --  */
$wm_align="水印位置"; /* (watermark.php) --  */
$wm_pos_hor="水平位置"; /* (watermark.php) --  */
$wm_pos_ver="垂直位置"; /* (watermark.php) --  */
$wm_height="文字区域高度"; /* (watermark.php) --  */
$wm_width="文字区域宽度"; /* (watermark.php) --  */
$wm_shadow_size="阴影大小"; /* (watermark.php) --  */
$wm_shadow_color="阴影颜色"; /* (watermark.php) --  */
$wm_enable_image="启用：图片水印"; /* (watermark.php) --  */
$wm_available_images="可用图片"; /* (watermark.php) --  */
$wm_no_images_found="找不到图片文件"; /* (watermark.php) --  */
$wm_dissolve="透明度"; /* (watermark.php) --  */
$wm_preview="预览"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="启用文字阴影"; /* (watermark.php) --  */
$wm_enable_rectangle="启用矩形"; /* (watermark.php) --  */
$wm_rectangle_color="颜色"; /* (watermark.php) --  */
$wm_enable_ext_shadow="启用延伸阴影"; /* (watermark.php) --  */
$wm_status="状态"; /* (watermark.php) --  */
$wm_enabled="启用"; /* (watermark.php) --  */
$wm_disabled="禁用"; /* (watermark.php) --  */
$wm_restore_to="还原至"; /* (watermark.php) --  */
$wm_inital_settings="初始设定"; /* (watermark.php) --  */
$wm_add_more_examples="您可以在 linpha 对应文件夹中添加更多的示例图片"; /* (watermark.php) --  */
$wm_example="示例"; /* (watermark.php) --  */
$wm_shadow_fontsize="阴影字体大小"; /* (watermark.php) --  */
$wm_settings_for_both="图片与文字的设置"; /* (watermark.php) --  */
$wm_center="居中"; /* (watermark.php) --  */
$wm_north="顶部"; /* (watermark.php) --  */
$wm_northeast="顶部居右"; /* (watermark.php) --  */
$wm_northwest="顶部居左"; /* (watermark.php) --  */
$wm_south="底部"; /* (watermark.php) --  */
$wm_southeast="底部居右"; /* (watermark.php) --  */
$wm_southwest="底部居左"; /* (watermark.php) --  */
$wm_east="居右"; /* (watermark.php) --  */
$wm_west="居左"; /* (watermark.php) --  */
$bm_file_err="错误，没有指定文件";
$bm_var_err="错误，请检查输入变量";
$bm_notfound_err="错误，文件不存在";
$bm_noimg_err="错误，不是图片文件";
$bm_tmpfile_err="错误，当生成临时图片文件时";
$bm_tmpfile_warn="警告：临时图片文件无法删除";
$bm_time_total="总共执行时间: ";
$bm_img_sec="每秒钟图片数: ";
$bm_avg_img="处理每张图片平均用时 (移动鼠标将显示相应的图片): ";
$bm_qual_size="品质/大小";
$bm_quality="品质";
$bm_height="高度: ";
$bm_width="宽度: ";
$bm_size="图片大小: ";
$bm_create = "对所选择的转换工具进行基准测试";
$bm_interval = "间隔";
$bm_calc = "计算了";
$bm_img = "张图片";
$bm_inloop="循环运行";
$bm_qual_range="品质范围: ";
$bm_size_range="大小范围(仅指高度)";
$bm_repeats="重复次数: ";
$bm_con_util="请选择转换工具：";
$bm_current_settings="当前设置"; /* (benchmark.php) --  */
$bm_preview="预览"; /* (benchmark.php) --  */
$bm_save_settings="保存设置"; /* (benchmark.php) --  */
$wm_addexamples="水印：添加更多示例图片"; /* (watermark.php) --  */
$wm_addimg="水印：添加更多图片水印"; /* (watermark.php) --  */
$wm_addfont="水印：添加更多字体"; /* (watermark.php) --  */
$wm_colorsetting="水印: 颜色设置"; /* (watermark.php) --  */
$comment_hint="提示：点击上方或下方图片能使相册滚动"; /* (linpha_comments.php) --  */
$comment_end="相册中没有图片"; /* (linpha_comments.php) --  */
$comment_beginning="没有前一张图片"; /* (linpha_comments.php) --  */
$comment_back="返回图片显示"; /* (linpha_comments.php) --  */
$comment_edit_img="编辑 分类/评论"; /* (linpha_comments.php) --  */
$comment_change_img_details="修改图片的详细说明"; /* (linpha_comments.php) --  */
$comment_last_comments="最新评论"; /* (linpha_comments.php) --  */
$comment_comment_by="评论人"; /* (linpha_comments.php) --  */
$category_delete_warning="警告：分类已存在，重复指定将会失去图片"; /* (build_category_conf.php) --  */
$pass_2_short="错误，密码长度最少要3位..."; /* (various) --  */
$album_edit="编辑相册简介"; /* (linpha_comments.php) --  */
$album_details="相册的详细说明"; /* (linpha_comments.php) --  */
$wm_save_note="注意：注册用户将看不到水印效果！您必须退出登录（成为访客）再进行浏览才能看到水印效果！"; /* (watermark.php) --  */
$lang_plugins['guestbook']="留言本"; /* (admin.php) --  */
$print_low_quality="低品质"; /* (printing_view.php) --  */
$print_high_quality="高品质 (很慢！)"; /* (printing_view.php) --  */
$gb_title="LinPHA 留言本";
$gb_sign="发表留言";
$gb_from="来自";
$gb_from_no="未提供来自何处";
$gb_pages="页";
$gb_messages="条留言";
$gb_msg_error="抱歉，姓名与留言不可以为空白";
$gb_new_msg="我要留言";
$gb_name="姓名";
$gb_email="Email";
$gb_hp="主页";
$gb_country="来自(国家)";
$gb_header="LinPHA 留言本";
$gb_opts="留言本选项";
$gb_rows="每页留言数";
$gb_anon="允许匿名用户留言";
$gb_order="显示顺序";
$wm_resize="水印始终以图片大小比例显示"; /* (watermark.php) --  */
$wm_help_and_descr="帮助与说明"; /* (watermark.php) --  */
$folder_remove_hint="如果一切都没有问题，出于安全考虑您现在可以删除 /install 文件夹。"; /* (forth_stage_install.php) --  */
$add_alb_com="添加相册简介"; /* (img_view.php) --  */
$add_img_com="对图片发表评论"; /* (img_view.php) --  */
$album_com="相册简介"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML 格式标签"; /* (various) --  */
$stat_cache_elements="已缓存项目"; /* (build_stats.php) --  */
$stat_cache_first="新缓存项目"; /* (build_stats.php) --  */
$stat_cache_hits="缓存请求"; /* (build_stats.php) --  */
$stat_cache_hits_max="最高缓存请求量 (单一图片)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="平均缓存请求量 (所有图片)"; /* (build_stats.php) --  */
$stat_cache_size="缓存大小"; /* (build_stats.php) --  */
$stat_cache_convert_time="缓存加速时间"; /* (build_stats.php) --  */
$stat_cache_size="缓存已使用空间"; /* (build_stats.php) --  */
$cache_options="图片缓存选项";
$cache_max_size="最大缓存限制，单位：bytes (0 = 无限制)";
$path_2_cache="缓存目录 (默认为 sql/cache)";
$cache_optimize="优化/清理 图片缓存数据"; 
$cache_maintain="图片缓存维护";
$cache_opt_msg="!! 缓存已经优化 !!";
$lang_plugins['cache']="图片缓存"; /* () --  */
$stat_cache_title="图片缓存统计"; /* (cache.php) --  */
$bm_saved="设置已保存"; /* (admin.php) --  */
$cache_optimize_by_size="删除所有大于等于指定大小的缓存项目 (单位：kb)"; /* (cache.php) --  */
$cache_optimize_by_date="删除所有指定天数之内未使用的缓存项目："; /* (cache.php) --  */
$elements_rem="项目已删除"; /* (cache.php) --  */
$general_anon_album_downs="允许/禁止 匿名压缩相册下载"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- 允许匿名用户下载压缩的相册"; /* (build_general_conf.php) --  */
$general_download_speed="下载速度限制 kb/sec (0=无限制)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- 设置图片下载的速度限制"; /* (build_general_conf.php) --  */
$general_navigation="导航栏"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- 在缩略图页面启用导航栏"; /* (build_general_conf.php) --  */
$toc_navigation="导航栏"; /* (doc/) --  */
$toc_zip_download="匿名用户下载相册"; /* (doc/) --  */
$toc_albdownlimit="下载速度限制"; /* (doc/) --  */
$choose_zips_msg="选择要下载的图片"; /* (build_zip_view.php) --  */
$zip_button="下载压缩文件"; /* (build_zip_view.php) --  */
$type_of_archive="选择下载文件类型"; /* (build_zip_view.php) --  */
$create_tar="生成 tar 文件"; /* (build_zip_view.php) --  */
$create_tgz="生成 tar.gz 文件"; /* (build_zip_view.php) --  */
$create_bz2="生成 tar.bz2 文件"; /* (build_zip_view.php) --  */
$create_zip="生成 zip 文件"; /* (build_zip_view.php) --  */
$create_rar="生成 rar 文件"; /* (build_zip_view.php) --  */
$menumsg['advanced']="高级功能选项"; /* () --  */
$menumsg['printmode']="打印模式"; /* () --  */
$menumsg['printprobs']="关闭打印?"; /* () --  */
$menumsg['downloadmode']="下载模式"; /* () --  */
$menumsg['mailmode']="邮寄模式"; /* () --  */
$menumsg['addcomment']="添加相册简介"; /* () --  */
$menumsg['delcomment']="删除相册简介"; /* () --  */
$menumsg['editcomment']="编辑相册简介"; /* () --  */
$album_up="已更新"; /* (album_comment.php) --  */
$album_ins="已插入"; /* (album_comment.php) --  */
$mail_link="邮件列表"; /* (header.php) --  */
$mail_title="LinPHA 邮件列表"; /* (mail.php) --  */
$mail_send_link="发送邮件"; /* (mail.php) --  */
$mail_return_address="寄信人："; /* (mail.php) --  */
$mail_block="邮件组大小："; /* (mail.php) --  */
$mail_block_help="# 每次发送邮件的数量，以避免PHP的超时。"; /* (mail.php) --  */
$mail_options="邮件列表选项"; /* (mail.php) --  */
$mail_go_back="返回"; /* (various mail plugin files) --  */
$mail_form_title="邮件信息"; /* (mail_form.php) --  */
$mail_form_subject="主题:"; /* (mail_form.php) --  */
$mail_form_msg="正文："; /* (mail_form.php) --  */
$mail_total_sent="已发送邮件："; /* (mail_form.php) --  */
$mail_subscribe="订阅"; /* (mail_users.php) --  */
$mail_unsubscribe="退订"; /* (mail_users.php) --  */
$mail_activate="激活"; /* (mail_users.php) --  */
$mail_user_name="您的姓名："; /* (mail_users.php) --  */
$mail_user_email="您的电子邮件:"; /* (mail_users.php) --  */
$mail_user_email_confirm="确认邮件："; /* (mail_users.php) --  */
$mail_user_code="激活码:"; /* (mail_users.php) --  */
$mail_user_code_sent="一封带有激活码的邮件已经发往您的信箱。"; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA 邮件列表激活"; /* (mail_users.php) --  */
$mail_user_activated="您的账户已经激活！"; /* (mail_users.php) --  */
$mail_user_activate_error="激活您的帐号时发生一个错误！"; /* (mail_users.php) --  */
$mail_user_email_not_found="并不存在于我们的邮件列表中."; /* (mail_users.php) --  */
$mail_user_remove_ok="已经从我们的邮件列表中删除."; /* (mail_users.php) --  */
$mail_user_remove_fail="无法从我们的邮件列表中删除."; /* (mail_users.php) --  */
$mail_user_empty="请填写所有项目."; /* () --  */
$mail_user_no_match="电子邮件不符."; /* () --  */
$mail_user_exists="电子邮件已存在于我们的邮件列表."; /* (mail_users.php) --  */
$lang_plugins['mail']="邮件列表"; /* (admin.php) --  */
$mail_activate_message="尊敬的 %s,\n\n请输入以下信息激活你的邮件列表账户.\n\n激活码: %s\n\n谢谢!\n管理员"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="提示"; /* (mail.php) --  */
$mail_user_permission="'mail' 组中的所有用户都可以发送信息到邮件列表。"; /* (mail.php) --  */
$mail_current_subscribers="当前订阅用户"; /* (mail.php) --  */
$mail_name="名称"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="订阅日期"; /* (mail.php) --  */
$mail_active="激活"; /* (mail.php) --  */
$mail_sent_to="发送邮件给"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> 和 <b>[Email]</b> 将被用户信息中相应部分替换."; /* (form_mailing.php) --  */
$misc_help="其他帮助"; /* () --  */
$mail_create_group="(您要创建属于您自己的 'mail' 群组。)"; /* (mail.php) --  */
$alb_th="子目录位于相册"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1月','2' => '2月','3' => '3月','4' => '4月','5' => '5月','6' => '6月','7' => '7月','8' => '8月','9' => '9月','10' => '10月','11' => '11月','12' => '12月'); /* abrevations of months */
$arr_month_long = Array('1' => '一月','2' => '二月','3' => '三月','4' => '四月','5' => '五月','6' => '六月','7' => '七月','8' => '八月','9' => '九月','10' => '十月','11' => '十一月','12' => '十二月'); /* months */
$arr_day_short = Array('周日','周一','周二','周三','周四','周五','周六'); /* abrevations of weekdays */
$arr_day_long = Array('周日','周一','周二','周三','周四','周五','周六'); /* weekdays */
$layout="版面设置";
$features="功能设置";
$perform="性能设置";
$general_comment_in_subfolder = '相册子目录的简介';
$general_comment_in_subfolder_info = '<-- 在预览子目录时显示相册简介';
$general_default_date_format = '默认日期格式';
$general_default_date_format_info = '<- 如：06/28/2004，更多详情请看帮助';
$general_default_time_format = '默认时间格式';
$general_default_time_format_info = '<- 如：01:45:50 PM，更多详情请看帮助';
$general_new_images_folder = '虚拟目录"最新图片"';
$general_new_images_folder_info = '<- 显示一个包含新加入图片的虚拟目录';
$general_new_images_folder_age = '几天内的图片放在"最新图片"目录';
$general_new_images_folder_age_info = '<- 显示最多几天内的新图片';
$control_key="Ctrl"; /* (various) --  */
$search_date="日期"; /* (search.php) -- reads: date from to... */
$search_from="从"; /* (search.php) -- reads: date from to... */
$search_to="至"; /* (search.php) -- reads: date from to... */
$start_slide="开始幻灯片显示"; /* (img_view.php) --  */
$pass_msg="请用您的新密码进行登录"; /* (build_my_settings.php) --  */
$str_new_images = "最新图片"; /* (new_images.php) -- */
$str_order_by = "排序按"; /* (new_images.php) -- */
$str_age = "时间"; /* (new_images.php) -- */
$str_album = "相册"; /* (new_images.php) -- */
$str_in_album = "所属相册"; /* (new_images.php) -- */
$str_img_newer_than = "以下图片是在 %s 天内新添加的"; /* (new_images.php) -- */
$timespanfmt = "%s 天, %s 小时, %s 分 %s 秒"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="删除所有带水印的图片缓存"; /* (watermark.php) --  */
$str_error_changing_perm="错误，没有修改此文件的权限！"; /* (plugins/ftp/index.php) --  */
$str_change_perm="修改以下的权限:"; /* (plugins/ftp/index.php) --  */
$str_read="读"; /* (plugins/ftp/index.php) --  */
$str_write="写"; /* (plugins/ftp/index.php) --  */
$str_execute="执行"; /* (plugins/ftp/index.php) --  */
$str_owner="拥有者"; /* () --  */
$str_group="群组"; /* (plugins/ftp/index.php) --  */
$str_all_other="其他所有"; /* (plugins/ftp/index.php) --  */
$str_copy="复制"; /* (plugins/ftp/index.php) --  */
$str_copy_to="复制 %s 到:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="重命名 %s 为："; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="图片旋转已禁用"; /* (img_view.php) --  */
$str_no_write_perm="无写入权限"; /* (img_view.php) --  */
$str_new_images_in_these_folders="以下相册中有新图片:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="如果您要重新安装 LinPHA，您必须删除 ./sql/db_connect.php 文件！(您可以使用管理区域中的文件管理功能来进行此操作)"; /* (install_header.php) --  */
$str_Version="版本"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="错误: 您的 PHP 的配置中没有设置支持的数据库"; /* (sec_stage_install.php) --  */
$str_extract_with="当上传完毕, 解压缩文件用"; /* (ftp/index.php) --  */
$str_files_to_upload="要上传的文件"; /* (ftp/index.php) --  */
$posix_check_msg="检查 POSIX 支持..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="您的 PHP 环境支持 POSIX 。在整合的文件管理工具中的所有功能都能正常使用。"; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="您的 PHP 环境支持 POSIX 。在整合的文件管理工具中有些功能无法使用(特别是修改文件权限时)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="错误：设置无法保存。请确认路径是否正确并且您拥有此目录写入的权限Error: Settings could not be saved. Make sure your the path is spelled correctly and you have permissions to write into that directory."; /* (admin.php) --  */
$str_create_archive="生成 %s 文件"; /* (build_zip_view.php) --  */
$str_download_error="错误! 由于某些原因无法开始下载, 抱歉"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="搜索所有图片共使用 %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="如果载入较慢, 请尝试用较低的分辨率:"; /* (image_panorama_view.php) --  */
$str_current_resolution="现在的分辨率:"; /* (image_panorama_view.php) --  */
$href_group_conf="用户组管理"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="管理工具："; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="插件"; /* (plugin.php) --  */
$choose_mail_msg="选择要邮寄的图片"; /* () --  */
$new_user_full_name="全名"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="分类管理"; /* (admin.php) --  */
$cat_private="私有"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="平面图"; /* (plugins.php) --  */
$str_add_more_apps="添加更多应用程序"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="检查 Session 设置..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session 设置正确."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session 设置不正确."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session 设置不正确。您必须在 php.ini 中设置以更正上面的错误否则 LinPHA 可能无法工作！！"; /* (sec_stage_install.php) --  */
$session_ok_msg="所有的 Session 设置都正确. 系统可以正常无误的工作."; /* (sec_stage_install.php) --  */
$new_user_error6="错误：您使用的是您自己的帐户吗？！？"; /* (build_my_settings.php) --  */
$str_old_comments="旧评论 (已不再属于某张图片):"; /* (build_stats.php) --  */
$str_last_viewed_page="最后浏览的页面:"; /* (index.php) --  */
$str_select_row="选择本行"; /* (basket.php) --  */
$str_select="选择"; /* (basket.php) --  */
$str_new_window="新窗口"; /* (basket.php) --  */
$general_anon_mail_mode="允许/禁止 匿名用户使用邮寄模式"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- 允许匿名用户邮寄图片"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="邮寄模式: 邮件大小"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- 最大值，单位：bytes"; /* (build_general_conf.php) --  */
$general_thumbnail_view="缩图显示"; /* (build_general_conf.php) --  */
$general_image_view="图片显示"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL查询缓存"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- SQL 服务器太慢或 PHP 没有启用加速器那么请启用此项"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL 查询缓存时间："; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- 设置最大缓存时间，单位分钟"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL 查询缓存路径："; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- 储存查询缓存数据路径"; /* (build_general_conf.php) --  */
$str_other_features="其他功能"; /* (build_general_conf.php) --  */
$str_language_settings="语言设置"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL 查询缓存"; /* (build_general_conf.php) --  */
$general_thumb_border="缩略图边框尺寸，单位：像素"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 设置为0则关闭, 默认: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="缩略图边框颜色"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- 完整显示"; /* (build_general_conf.php) --  */
$str_recipient="收件人"; /* (basket_mail.php) --  */
$str_sender="发件人"; /* (basket_mail.php) --  */
$str_mail_too_big="错误：邮件太大。<br /><br />允许的尺寸为： %sBytes。您所选择的图片共计 %sBytes.<br /><br />请删除一些图片或者使用下载压缩相册功能！"; /* (basket_mail.php) --  */
$str_size_of_email="邮件大小: %s."; /* (basket_mail.php) --  */
$str_new_search="重新搜索"; /* (search.php) --  */
$str_edit_search="编辑搜索"; /* (search.php) --  */
$str_View="浏览"; /* (img_view.class.php) --  */
$str_normal="标准"; /* (img_view.class.php) --  */
$str_detail="详细"; /* (img_view.class.php) --  */
$search_result_empty="抱歉，找不到任何与之相符的内容"; /* (search.php) --  */
$str_chars_entered="个字符"; /* (img_view.class.php) --  */
$str_information_lost="有些信息将丢失, 请修改相关内容."; /* (img_view.class.php) --  */
$general_random_image="首页随机显示图片"; /* () --  */
$general_random_image_info="<-- 在首页随机显示图片"; /* () --  */
$general_random_image_size="随机显示图片的最大尺寸"; /* () --  */
$general_random_image_size_info="<-- 设置图片最大尺寸，单位：像素"; /* () --  */
$str_edit_watermark="编辑水印"; /* (watermark.php) --  */
$str_edit_permissions="编辑水印权限"; /* () --  */
$str_Everyone="任何人"; /* () --  */
$str_Nobody="均无权限"; /* () --  */
$str_only_logged_in_users="仅登录用户"; /* () --  */
$str_except_these_groups="以下组除外:"; /* () --  */
$str_additionally_groups="但授权以下组:"; /* () --  */
$str_allow_these_persons="没有为这些 用户/群组 设置的水印"; /* () --  */
$str_album_based_permissions="基于相册的权限"; /* () --  */
$str_all_albums_but_without_these="所有相册, 除了以下的:"; /* () --  */
$str_only_on_these_albums="仅这些相册:"; /* () --  */
$str_allow_these_persons="允许以下人员"; /* (db_api.php) --  */
$str_no_watermarks="以下人员不添加水印"; /* (db_api.php) --  */
$str_watermark_perm_part1="为单用户、多用户或者相册设置水印。"; /* (watermark.php) --  */
$str_watermark_perm_part2="默认为'仅登录的用户' 和 '所有相册'."; /* (watermark.php) --  */
$str_watermark_perm_part3="这意味着登录的用户看到的所有相册中的图片都不带水印."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA 或许不能正常运作"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="您的系统的 GD 库不支持 jpeg！JPEG 格式的图片将不能显示！"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="尝试为视频创建缩略图"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--如果创建出现问题请禁用此项"; /* (build_generl_config.php) --  */
$general_update_notice="LinPHA 系统检查更新"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- 允许每周检查一次"; /* (build_general_config.php) --  */
$large="大"; /* (build_general_config) -- selectfield for mini images size */
$directories="目录"; /* (build_thumbnail_conf.php) --  */
$do_nothing="空闲"; /* (build_thumbnail_conf.php) --  */
$create="创建"; /* (build_thumbnail_conf.php) --  */
$recreate="重建"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="配置禁止显示 EXIF 信息"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="配置禁止显示 IPTC 信息"; /* (build_thumbnail_conf.php) --  */
$silent_mode="安静模式 (如，安静的运行，不显示任何调试信息)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="缩略图"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA 日志"; /* (log.php) --  */
$log_options="LinPHA 日志选项"; /* (log.php) --  */
$log_method_label="记录到:"; /* (log.php) --  */
$str_extra_headers="扩展标题："; /* (log.php) --  */
$str_log_events['login']="用户登录"; /* (log.php) --  */
$str_log_events['thumbnail']="缩略图生成"; /* (log.php) --  */
$str_log_events['update']="更新"; /* (log.php) --  */
$str_log_events['db']="数据库"; /* (log.php) --  */
$str_log_events['filemanager']="文件管理"; /* (log.php) --  */
$str_events="事件"; /* (log.php) --  */
$find_duplicates="查找重复图片"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="在 PHP 配置（php.ini）中没有启用"; /* (sec_stage_install.php) --  */
$str_warning="警告"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="缩略图将被删除"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="所有统计将被删除"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="首页随机图片显示"; /* (build_general_conf.php) --  */
$str_download_images="下载单个图片"; /* (build_perms.php) --  */
$str_add_image_comments="对图片发表评论"; /* (build_perms.php) --  */
$str_add_image_description="添加图片的描述和分类"; /* (build_perms.php) --  */
$str_mail_add_all_users="将所有用户加入邮件列表"; /* (plugins/mail.php) --  */
$str_note_upload="<b>提示:</b> 您不必一定要通过表单提交图片. 您可以用任何您喜欢的方式 (ftp,scp,nfs,local,...). 只要将它们放到 albums 目录即可."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="黑名单选项 (垃圾信息过滤)"; /* (varios) --  */
$blacklist_onoff="使用信息过滤"; /* (varios) --  */
$blacklist_keywords="过滤的词语:"; /* (varios) --  */
$str_entire_path="完整路径"; /* (search.php) --  */
$mail_format="邮件格式："; /* (basket_mail.php) --  */
$mail_format_is_txt="纯文本 (图片附件形式)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (图片排列其中)"; /* (basket_mail.php) --  */
$mail_toggle_active="有效激活"; /* (mail.php) --  */
$statistics="统计"; /* (various) --  */
$stats_total_images="图片总数"; /* () --  */
$stats_total_img_views="总浏览量"; /* () --  */
$stats_total_img_downs="总下载量"; /* () --  */
$stats_total_img_selected="浏览图片数"; /* () --  */
$stats_total_downs_selected="下载图片数"; /* () --  */
$stats_downloads="下载次数"; /* () --  */
$stats_downl_size="下载流量"; /* () --  */
$stats_coments_total="总评论数"; /* () --  */
$stats_coments_sel="所选评论"; /* () --  */
$str_log_events['guestbook']="留言"; /* (log.php) --  */
$stats_realtime="启用/关闭实时统计"; /* (build_stats.php) --  */
$stats_realtime_info="<-- 实时显示统计信息(不使用缓存)"; /* (build_stats.php) --  */
$stats_cache_time="统计缓存时间"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- 指定时间刷新下载流量统计"; /* (build_stats.php) --  */
$stats_user_info="用户"; /* (stats_view.php) --  */
$stats_image_info="图片"; /* (stats_view.php) --  */
$stats_comments_info="评论"; /* (stats_view.php) --  */
$stats_general_info="常规"; /* (stats_view.php) --  */
$spam_blocked="过滤次数"; /* () --  */
$mail_current_status="当前状态"; /* (mailing.php) --  */
$mail_sending_to="发送至："; /* (mailing.php) --  */
$mail_counters="统计 (成功/失败/总数)"; /* (mailing.php) --  */
$mail_send_fail="发送失败："; /* (mailing.php) --  */
$mail_send_ok="发送完毕："; /* (mailing.php) --  */
$mail_all_complete="全部完成！"; /* (mailing.php) --  */
$mail_failed_list="失败地址列表"; /* (mailing.php) --  */
$mail_ok_list="发送地址列表"; /* (mailing.php) --  */
$mail_mailer_error=" - 邮寄错误："; /* (mailing.php) --  */
$str_log_events['comments']="Comment Entry"; /* (log.php) --  */
$str_edit_members="编辑用户"; /* (build_user.conf.php) --  */
$edit_groups="编辑用户组"; /* (build_user.conf.php) --  */
$str_basket="其它"; /* (various) --  */
$lang_plugins['log']="LinPHA 日志"; /* (admin.php) --  */
$rss_created="成功生成 XML RSS 文件"; /* () --  */
$rss_not_created="没有生成 RSS ，因为没有发现与之前有任何改变"; /* () --  */
$rss_settings_saved="RSS 设置已保存"; /* () --  */
$lang_plugins['stats']="统计资料"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="不加水印"; /* () --  */
$str_with_watermarks="添加水印"; /* () --  */
$str_create_cache_img="创建图片缓存"; /* () --  */
$str_reset_button="重置"; /* () --  */
$cache_stats="图像缓存统计"; /* () --  */
$drop_duplicates="删除重复文件"; /* () --  */
$general_exif_rotate="启用/禁用图片自动旋转"; /* () --  */
$general_exif_rotate_info="<-- 根据 EXIF 数据自动旋转图片"; /* () --  */
$lang_plugins['maps']="Google/Yahoo 地图"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo 地图设置"; /* () -- maps plugin */
$maps_setup_yahoo_id="您的 Yahoo Application ID"; /* (maps plugin) --  */
$maps_setup_google_key="您的 Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="抱歉 - 这个插件要求 PHP v4.2.0 或更新版本。请升级 PHP"; /* (maps plugin) --  */
$maps_select_type="请选择地图类型："; /* (maps plugin) --  */
$maps_select_type_info="<-- 选择使用 Google 或 Yahoo 地图"; /* (maps plugin) --  */
$maps_select_display_type="请选择地图显示类型："; /* (maps plugin) --  */
$maps_select_display_type_info="<-- 显示混合图、卫星图或普通地图"; /* (maps plugin) --  */
$maps_zoom_level="默认放大级别：1-16 (默认 16，世界地图)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- 设置地图默认放大级别"; /* (maps plugin) --  */
$maps_zoom_location="默认居中显示地址"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- 地图默认居中显示的地址"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google 地图控制大小"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- 调节 Google 地图浮块和面板的大小"; /* (maps plugin) --  */
$maps_str="地图"; /* (maps plugin) --  */
$map_type_ctrl="显示地图类型控制"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- 在地图中显示地图类型控制"; /* (maps plugin) --  */
$map_slide_ctrl="显示地图缩放控制"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- 在地图中显示缩放控制"; /* (maps plugin) --  */
$map_pan_ctrl="显示地图平移控制"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- 在地图中显示平移控制"; /* (maps plugin) --  */
$map_auto_popup="自动显示标记"; /* (maps plugin) --  */
$map_auto_popup_info="<-- 鼠标指向标记自动弹出显示标记信息"; /* (maps plugin) --  */
$map_album_add="加入相册"; /* (maps plugin) --  */
$map_marker_del="删除标记"; /* (maps plugin) --  */
$map_search_location="搜索/添加新地址"; /* (maps plugin) --  */
$map_location_here="这是您的地址"; /* (maps plugin) --  */
$map_search_loc_button="位置搜索"; /* (maps plugin) --  */
$map_add_location="添加新地址"; /* (maps plugin) --  */
$map_assign_album="分配相册到地图的指定地址"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>