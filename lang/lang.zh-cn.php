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
$album="相册";

/* alerts */
$alert_fopen="错误! 文件无法打开...";
$printing_probs="打印错误";
$printing_probs_msg="禁止打印！请看";

/* global messages */
$subfolders="子目录";
$img_th="图片";
$in_th="位于"; /* used for the photos in $foldername */
$thumb_hint_msg="进一步显示";
$latest_photo="最新的";
$view_at="预览分辨率";
$close_button="关闭";
$help="说明";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="欢迎使用LinPHA相册系统";
$welc_text="欢迎光临，这是LinPHA相册系统的首页。看起来您似乎是首次使用 LinPHA相册系统，因此请务必进行安装.";
$welc_hint="<b>继续之前:</b>";
$welc_hint1="1. 建立允许能写入资料的目录&quot;<b>linpha/sql</b>&quot;! (例如 chmod 777 sql)";
$next_button="下一步"; /* used as left menu header in all 4 stages */
$inst_msg="安装LINPHA相册系统"; /* used as left menu header in all 4 stages */
$inst_status_1="请选择语言并点击&quot;下一步&quot;";
$inst_status_step1="步骤 1 (共4步)";

/* sec_stage_install (page 2) */
$inst_access_msg="设置数据库存取方式";
$inst_full_access_msg="<b>是的 !</b><br> 我能完全存取 MySQL 数据库，我能建立新的<br> 数据库及用户。或者说：这是我的主机！";
$inst_limited_access_msg="<b>不行 !</b><br> 我仅能有限度存取<br>MySQL数据库。 我的ISP并不允许我建立新的数据库及用户。";
$inst_status_2="请选择数据库的运行方式，若不确定请选 不行!";
$inst_status_step2="步骤 2 (共4步)";

/* requirements */
$req_check_msg="检查系统需求";
$req_found_msg="已找到";
$req_miss_msg="没找到";
$req_safe_fail="有效";
$req_safe_ok="无效";
$php_safemode_check_msg="检查 PHP 的安全模式...";
$php_version_check_msg="检查 PHP 版本> 4.1.0...";
$mem_check_msg="检查 PHP 内存限制...";
$gd_check_msg="检查 GD 函数库...";
$convert_check_msg="检查 ImageMagick...";
$exif_check_msg="检查 EXIF 支持...";
$summary_msg="摘要：";
$safe_mode_err="您的系统已被设置成使用 PHP 的安全模式。当php.ini设置安全模式激活时，LinPHA相册系统(LinPHA)将无法持续运行!";
$inst_abort_msg="!!! 安装失败 !!!";
$php_version_err="您的系统所运行的 PHP 版本 < 4.1.0。系统在您升级PHP之前将无法运行。";
$gd_convert_err="ImageMagick及GD函数库都找不到。系统在缺乏其中之一时将无法运行。";
$convert_sum_found_msg="已找到ImageMagick于此主机内。这使系统能呈现高品质的缩图。";
$convert_sum_miss_msg="找不到ImageMagick于此主机内.这使缩图仅有低品质。";
$exif_sum_found_msg="您的PHP有支持EXIF。这将允许系统显示图片的详细资料。";
$exif_sum_miss_msg="您安装的PHP并不支持EXIF。这将妨碍 LinPHA相册系统 显示图片的详细资料。";

/* TODO next 3 */
$session_path_found_msg="session路径设置于php.ini。系统的登录功能可以正常工作。路径设置于： ";
$session_path_miss_msg="在session路径里没有找到正确的数值。你必须在 php.ini 中设置正确的session路径，或者是稍后你将不能正确登录系统!!";
$mem_limit_ok_msg="很好, 你的 PHP 内存限制为 >= 16MB. 这样在生成缩图时不会有任何问题T.";
$mem_limit_low_msg="嗯, 你的 PHP 内存限制为 <=16MB. 如果你遇到丢失缩图的问题, 试着去增加 php.ini中的 memory_limit 或者是将缩图的分辨率降低之后再试一次...";
$choose_def_quali="请选择默认的图片品质";
$choose_def_quali_warn="不要设为高品质，如果你的 CPU 速度 &lt; 1Ghz (高 CPU负载)";

/* third_stage_install (page 3) */
$inst_superadmin_header="设置MySQL 数据库的管理员";
$inst_superadmin_name="MySQL 数据库用户名：";
$inst_superadmin_name_info="&lt;-MySQL 的用户名(必须存在于数据库中)";
$inst_superadmin_pass="MySQL 数据库密码：";
$inst_superadmin_pass_info="&lt;-MySQL 的密码(必须存在于数据库中)";

$inst_admin_header="设置系统管理员";
$inst_admin_name="LinPHA相册系统管理员用户名：";
$inst_admin_name_info="&lt;-管理员的用户名";
$inst_admin_pass="LinPHA相册系统管理员的密码：";
$inst_admin_pass_info="&lt;-管理员的密码";
$inst_admin_email="管理员的电子信箱：";
$inst_admin_email_info="&lt;-设置管理员的电子信箱";

$inst_db_header="设置系统数据库的连接方式";
$inst_db_host="主机名称：";
$inst_db_host_info="&lt;-主机名称： 一般为 &quot;localhost&quot;";
$inst_db_host_info2="&lt;-主机名称： MySQL主机的名称";
$inst_db_host_port="连接端口：";
$inst_db_host_port_info="&lt;-连接端口：若不确定则省略！";
$inst_db_name="数据库名称：";
$inst_db_name_info="&lt;-系统所使用的数据库名称，一般为&quot;linpha&quot;";
$inst_db_name2="数据库名称：";
$inst_db_name_info2="&lt;-ISP所给予的数据库名称";
$inst_table_prefix="数据表前缀";
$inst_table_prefix_info="&lt;-在所有数据表名称前缀";

$general_header="一般选项设置";
$general_album_title="相册标题";
$general_album_title_info="&lt;- 留空则使用默认名称";
$general_photos_row="行数：";
$general_photos_row_info="&lt;- 每一列显示数量";
$general_photos_col="列数：";
$general_photos_col_info="&lt;- 每一行显示数量";
$general_photos_width="单张图片显示大小 (宽度):";
$general_photos_width_info="&lt;- 512 (默认大小)";
$general_photos_height="单张图片显示大小 (高度):";
$general_photos_height_info="&lt;- 384 (默认大小)";
$general_img_quality="图片品质";
$general_img_quality_info="&lt;- 调整图片品质 0-100 (默认为 75)";

$inst_status_3="请填写所有项目!";
$inst_status_step3="步骤 3(共4步)";

/* forth_stage_install (page 4) */
$inst_status_4="恭喜您，安装已完成! LinPHA相册系统已可以使用了";
$inst_status_step4="步骤 4(共4步)";
$inst_submit="完成";
$inst_db_tryconn="尝试连接到数据库主机";
$inst_db_tryconn_error="连接到数据库主机时发生错误， using:";
$inst_db_tryconn_ok="连接成功!";
$inst_db_tryinst="尝试新增数据库：";
$inst_db_tryinst_error="新增数据库时发生错误：";
$inst_db_tryinst_ok="新增成功!";
$inst_create_tb_msg="建立所需数据表";

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
$inst_db_connect_inc_msg1="自数据库中选择 ".@$db_realname." 时发生错误<br>若安装时发生此信息，请将db_connect.php自<br> 目录&quot;sql&quot; 中删除!";
/* ------------------------------------------------------------------ */

$table_create="新增数据表：";
$table_create_error="数据表新增时发生错误!";
$table_create_ok="新增完毕!";
$table_insert_admin="建立管理员用户名：";
$table_insert_admin_error="建立管理员用户名时发生错误!";
$table_insert_admin_ok="成功建立!";
$write_db_config="将数据库设置保存成文件";
$fopen_error="无法写入 sql/db_config.php，请设置 chmod 777 及重新安装";
$fopen_ok="设置已写入!";
$install_finish_msg="安装成功!!";
$admin_task="进行下一步";
$file_create_ok="成功建立!";
$configure_error="请填写所有必要项目!!!";
$could_not_open="无法打开users数据表! 您似乎不被授权新增用户名到数据库中<br>请在第二页选择较为可行的安装方式<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA相册系统";
$head_title="LinPHA相册系统";
$book_home="首页";
$book_about="说明";
$book_admin="管理";
$book_admin_user="个人信息";
$book_links="连接";
$book_search="搜索";
$book_logout="注销";
$book_login="登录";
$num_pictures="图片数量:";
$user_visits="位游客";
$user_online="位在线用户";
$guest="游客";
$html_lang="zh-cn";
$html_charset="gbk";

/*#################################################
## index.php
#################################################*/
$index_welc_text="欢迎光临相册。请定期访问 <a href='http://linpha.sf.net/'><u>LinPHA.</u></a> 以获取程序的最新版本。";

/*#################################################
## search.php
#################################################*/
$search_header="搜索";
$radio_all="全部";
$radio_descript="描述";
$radio_comment="内容";
$radio_category="分类";
$radio_file="文件名";
$search_in="搜索相册";
$search_all="所有相册";
$search_for="搜索关键字";
$search_button="搜索";
$photos_found="符合条件";
$search_info="系统搜索页";
$search_msg="在数据库中可根据以下信息搜索图片：";

/*#################################################
## img_view.php
#################################################*/
$img_detail="图片信息";
$img_size="大小";
$img_com="简介";
$img_des="图片描述";
$img_cat="所属分类";
$img_name="名称";
$img_info_stored="将评论写入数据库";
$please_login="请<a href='login.php'><u>登录</u></a> 以便发表评论";
$back_to_thumbs="<b><u>回到列表显示</u></b>";
$back_to_search="<b><u>回到搜索页面</u></b>";
$button_next="下一张";
$button_prev="上一张";
$exif_ext_error="抱歉，此版本的PHP没有 EXIF 支持";
$exif_error="抱歉，图片不包含任何 EXIF 信息!";
$exif_more="更多细节";
$exif_less="简略信息";
$detail_header="";
$detail_header1="/";
$detail_header2="张图片在此相册<br>";
$php_to_old="PHP < 4.2.0 EXIF 无效!";
$views="次浏览";
$slideshow="幻灯片显示";
$econds="秒";
$go="Go";
$stopslide="停止幻灯片显示";
/* image rotating */ /* TODO next */
$img_rotate_ok="旋转图片";
$img_rotating="旋转图片错误"; // TOC entry
$img_rotating_hint1="不可旋转图片！请按这里";
$img_rotating_hint2="查看原因";

/*#################################################
## login.php
#################################################*/
$login_msg="请登录！";
$login_error="不正确的用户名或密码";
$login_name="用户名";
$login_pass="密码";
$login_info="登录页面";
$login_request_account_info="想要申请用户名请按 <u>这里</u>：";
$login_request_target="联络系统的管理员";
$login_admin_info="执行管理工作必须使用管理员用户名登录";
$login_friend_account_info="若你已有 &quot;好友&quot; 用户名，可登录后修改个人资料";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA相册系统";
$please_turn_off_msg="图片新增完毕时请设置‘自动 创建/删除 缩图’为关闭。<br> 系统将能加快巡视速度 :)";
/* left menu */
$logout_msg="注销";
$welc_msg="欢迎";
$stat_msg="你已经被授权进行管理，含新增 <b>评论</b> 和图片描述";
$back_to_msg="<b>回到显示相册</b>";
$href_general_conf="一般设置";
$href_user_conf="用户管理";
$href_folder_conf="目录管理";
$href_sql="MySQL数据库管理";
$href_ftp="文件管理";
$href_stats="统计资料";
$href_other_conf="其他工具";


/* general config */
/* uses also entries from install.php */
$default_language="默认使用的语言";
$default_language_info="&lt;- 设置默认使用的语言";
$general_auto_lang="语言自动侦测功能"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- 自动检测浏览器的语言";
$general_success_msg="! 修改成功 !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="图片旋转功能";
$general_rotate_info="&lt;-- <b>超大文件警示! 滴答声</b>";
$general_exifinfo="所有 EXIF 支持";
$general_exifinfo_info="&lt;-- 使用 EXIF 功能";
$general_exifdefault="默认显示 EXIF 信息";
$general_exifdefault_info="&lt;-- 默认激活显示 EXIF 信息";

$general_exiflevel="显示 EXIF 信息的程度";
$general_exiflevel_info="&lt;-- 设置 EXIF 信息的繁简程度";
$exif_low="最少";
$exif_medium="中等";
$exif_high="最多";
$general_filename="显示文件名";
$general_filename_info="&lt;-- 浏览时显示文件名";
$general_thumb_order="图片排序方式";
$general_thumb_order_info="&lt;- 设置预览时按照文件名或日期排序";
$thumb_order_date="日期";
$thumb_order_file="文件名";
$general_autoconf="自动 创建/删除 缩图";
$general_autoconf_info="&lt;- <b>关闭此项目将能提高效率</b>";
$general_counterstat="计数器";
$general_counterstat_info="&lt;-- 默认为开启";
$general_blocking="IP 锁定时间(分钟)";
$general_blocking_info="&lt;--在 x 分钟内将不会当成新游客计算";
$general_theme="选择模版";
$general_theme_info="&lt;- 设置默认显示模版";
$aqua_theme="浅色系";
$colored_theme="彩色系";
$neptune_theme="海王星";
$shadow_theme="阴影";
$general_hq="高品质浏览图片";
$general_hq_info="&lt;--关闭此项目将能提高速度";
$submit_button_general="保存修改";
$button_on_msg="开启";
$button_off_msg="关闭";
$basic_opts="基本";
$advanced_opts="进阶";
$show_basics="按此显示基本选项";
$show_advanced="按此显示进阶选项";
$general_printing="游客打印功能";
$general_printing_info="&lt;-- 开启，所有人都可以打印图片";
$general_slideshow="幻灯片显示";
$general_slideshow_info="&lt;-- 幻灯片显示";
$general_mini_preview="迷你图片";
$general_mini_preview_info="&lt;-- 如果多数游客使用窄带请关闭";

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
$friend_user_header="用户设置";
$submit_button_friend_user="修改用户";
$delete_button_friend_user="删除用户";
$friend_info_msg="设置/修改 用户设置";

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
$set_dir_perms_header="设置相册权限";
$dir_name="相册";
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
$stats_over_header="整体统计";
$stats_over_photos="图片数量：";
$stats_over_views="总浏览次数：";
$stats_over_albums="相册数量：";
$stats_over_most_alb_visists="最热门的相册：";
$stats_over_space="已使用磁盘空间(所有相册):";
$stats_over_visitors="迄今访问人数：";
$stats_over_users="已注册用户数：";
$stats_top_ten="十大热门浏览";
$stats_rank="名次：";
$stats_no_views="浏览次数：";
$stats_last_view="前一次浏览时间：";
$stats_alb_name="相册名称：";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="第一阶段语法分析";
$parse_sec="第二阶段语法分析";
$parse_third="第三阶段语法分析";
$parse="现在正在进行语法分析";
$parsed="语法分析：";
$dirs="子目录";
$done="全部完成...";
$not_allowed_msg="抱歉，你并未被允许执行这个命令";
/* these entries are called from within admin.php */
$th_msg="重新生成缩图！";
$table_hint_msg="按下 开始 立刻生成所有子目录下的缩图！";
$start_button="开始！";
$recreate_thumbs_header="重新生成所有的缩图";
$recreate_thums_msg="这个操作将会重新生成所有的缩图！所有的统计资料将会丢失！";
$recreate_thums_warning="请确认你是否真的要重新生成所有的缩图，并且要删除所有的评论，描述及统计资料！请注意，这个操作不能恢复。确定继续进行吗？";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="选择打印编排";
$images_page="图片/页";
$indexprint="索引打印 (28)";
$note="<strong>注意：</strong> 在打印之前你可以调整浏览器中的 \"设置打印格式\"确保所有的图片都能符合打印页面的大小！！！";
$print_button="预览打印";
$href_check_all="选择全部";
$href_clear_all="清除全部";
$print_error="错误，没有选择任何相片！！！";
$print_mode="打印模式";
$print_image="打印图片";
$videos_msg="不能打印动态图片";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="数据库管理系统版本.";
$mysql_cancel="取消";
$mysql_DHTML_hint="关闭 DHTML 显示 - 在备份完成之前你看不到任何东西。";
$mysql_select_all="选择全部";
$mysql_deselect_all="放弃选择全部";
$mysql_create_backup="生成备份";
$mysql_back_menu="回到主菜单";
$mysql_table_checks="检查数据表...";
$mysql_table_check="数据表检查中";
$mysql_struct_msg="Creating structure for";
$mysql_in_file_dump_msg="dumping data for";
$mysql_progress="全部的过程:";
$mysql_back_complete="备份工作完成于";
$mysql_back_menu_long="回到 MySQL 数据库备份主菜单";
$mysql_open_warn1="<B>警告:</B> 开启失败 ";
$mysql_open_warn2="写入有问题!在目录里执行<BR><BR><I>CHMOD 777</I> 命令可以解决这个问题.";
$mysql_date_msg="现在时间是 "; // it follows time of the day...
$mysql_last_backup="上一次完整备份 MySQL 数据库于： ";
$mysql_backup_hint="一般来说，每周备份一次就可以了.";
$mysql_down_backup="下载上一次完整备份生成的备份文件";
$mysql_down_backup_part="下载上一次只进行局部备份的备份文件 ";
$mysql_down_backup_struct="下载上一次只备份表结构的备份文件 ";
$mysql_down_backup1="(按鼠右键，选另存目标(A)...)";
$mysql_unknown_backup="上一次的 MySQL 数据库备份于: <I>未知</I>";
$mysql_href_recom="生成一份新的完整备份，全部插入 (建议)";
$mysql_href_standard="生成一份新的完整备份，标准插入 (较小)";
$mysql_href_partial="生成一份新的局部备份，只备份选择的表 (包含全部插入)";
$mysql_href_structure="生成一份新的完整备份，只备份表结构";
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
$opt_table_msg="信息类型";
$opt_start_msg="检查与优化数据表";
$fullback_hint_msg="如果你有多个数据库，请选择 <b>局部</b> 备份";
$restore_last_fullback="还原上一次的 <b>完整</b> 备份：";
$restore_last_partback="还原上一次的 <b>部分</b> 备份：";
$restore_error="错误！进行备份时有误。找不到文件！";
$restore_success="还原成功！!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>禁止存取</H1> 你没有足够的权限来使用这个目录');
define('STR_BACK',	'返回');
define('STR_LESS',	'较少');
define('STR_MORE',	'更多');
define('STR_LINES',	'行');
define('STR_FUNCTIONLIST', '功能列表');
define('STR_EDIT',	'编辑');
define('STR_VIEW',	'显示');
define('STR_RENAME',	'重命名');
define('STR_MKDIR',		'建立子目录');
define('STR_DELETE',	'删除');
define('STR_BOTTOM',	'最下方');
define('STR_TOP',		'最上方');
define('STR_FILENAME',	  '名称');
define('STR_FILESIZE',	  '大小');
define('STR_LASTMODIFIED', '更新于');
define('STR_SUM', '<B>%s</B> 字节，共计<B>%s</B>项');
define('STR_CREATEDIRLEGEND', '建立一个新目录');
define('STR_CREATEDIR',       '要建立的目录名称：');
define('STR_CREATEDIRBUTTON', '建立目录');
define('STR_RENAMELEGEND',       '重命名');
define('STR_RENAMEENTERNEWNAME', '输入新名称给 %s:');
define('STR_RENAMEBUTTON',       '重命名');
define('STR_ERROR_DIR','错误: 无法读取目录内容');
define('STR_AUDIO',            '音频');
define('STR_COMPRESSED',       '已压缩');
define('STR_EXECUTABLE',       '可执行');
define('STR_IMAGE',            '图片');
define('STR_SOURCE_CODE',      '原始码');
define('STR_TEXT_OR_DOCUMENT', '文字档或文件档');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            '视频');
define('STR_DIRECTORY',        '目录');
define('STR_PARENT_DIRECTORY', '上一层目录');
define('STR_EDITOR_SAVE',      '保存文件');
define('STR_EDITOR_SAVE_ERROR','文件 <I>%s</I> 为不可写入或是不存在');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', '快速导航');
define('STR_FILE_UPLOAD_DRIVES', '硬盘:');
define('STR_FILE_UPLOAD', '上传');
define('STR_FILE_UPLOAD_MAIN', '上传');
define('STR_FILE_UPLOAD_DISABLED', '抱歉,在 php.ini 设置档中禁止文件上传');
define('STR_FILE_UPLOAD_DESC','选择你想要上传的文件和成功上传之后要进行的操作.');
define('STR_FILE_UPLOAD_FILE','文件');
define('STR_FILE_UPLOAD_TARGET','上传文件到');
define('STR_FILE_UPLOAD_ACTION','上传完毕后进行:');
define('STR_FILE_UPLOAD_NOTHING','不做什么');
define('STR_FILE_UPLOAD_DROPFILE','当所选择的操作进行完之后删除已上传的文件');
define('STR_FILE_UPLOAD_MAXFILESIZE','现在设置于 php.ini 文件中所允许的最大文件大小(每一个文件!)为');
define('STR_FILE_UPLOAD_ERROR',        '错误: 无法移动文件 %s 到目录 %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '错误: 无法切换 (chdir) 到 %s 目录. 文件已经处理: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '错误: 无法删除 %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '错误: 上传文件 %s 超过 php.ini 设置档中指定的 - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','错误: 上传文件 %s 的大小超过 HTML 表单的设置');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '错误: 上传文件 %s 只有部分上传完毕');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="全屏模式"; /* (img_view.php) -- new [panorama view] href  */
$close_win="关闭窗口"; /* (various files) -- javascript close window */
$nav_hint="Please use mouse or arrow keys to navigate!"; /* (image_panorama_view.php) --  */
$pano_view_of="全屏查看图片"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="检查是否设置了PHP基础路径..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="否"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="糟糕, 你的PHP启用了\"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ 系统会使用 GD lib 来生成缩图, 这可能会有些问题<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ 如果可以, 请不要设置 \"open_basedir\" 在 PHP.ini"; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ 如果可以, 请不要设置 \"open_basedir\" 在 PHP.ini 或是重新编译 PHP 并加上 GD lib 的支持 (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract an *.tar.gz archive (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract an *.tar.bz2 archive (UNIX)"; /* (index.php) --  */
$extract_gz="unzip with gzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip with unzip (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="unzip with pkzip (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! 群组已增加 !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! 群组已修改 !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! 群组已删除 !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! 分类已修改 !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! 分类已删除 !"; /* (admin.php) -- redirect message */
$href_groups="按此新增或修改群组"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="警告: 请用新账户登录!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="回到目录管理菜单"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="回到用户管理菜单"; /* (build_user_conf.php) -- navi href  */
$header_new_group="增加新群组"; /* (build_user_conf.php) -- table header */
$header_groupname="群组名称"; /* (build_user_conf.php) -- table header */
$button_addgroup="增加群组"; /* (build_user_conf.php) -- submit button */
$header_mod_group="修改/删除 群组"; /* (build_user_conf.php) -- table header */
$mod_group_header="修改群组"; /* (build_user_conf.php) -- table header */
$del_group_header="删除群组"; /* (build_user_conf.php) -- table header */
$search_to_short="关键字太短, 最少2个字符!"; /* (search.php) --  */
$general_thumb_size="修改预览大小"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<- 设置最大预览尺寸的像素值"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="预览边框"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<- 设置为开启可以为缩图像加上边框"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="请选择预览大小"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="边框设置"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="开启图片边框功能"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="关闭图片边框功能"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="很糟糕, 你的PHP运行于安全限制模式!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ 如果可以的话, 请不要设置 \"safe_mode\" 在 PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="匿名张贴"; /* (build_general_conf.php) --  */
$general_anon_post_info="<- 允许匿名用户发表评论"; /* (build_general_conf.php) --  */
$stats_over_comment="评论数"; /* (build_stats.php) --  */
$top10_downs_href="十大热门下载"; /* (build_stats.php) --  */
$top10_views_href="十大热门图片"; /* (build_stats.php) --  */
$stats_head_downs="十大热门下载"; /* (build_stats.php) --  */
$no_downloads="下载次数"; /* (build_stats.php) --  */
$general_anon_download="匿名下载"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- 显示/隐藏 图片的下载连接位址"; /* (build_general_config.php) --  */
$seach_multiple_select_use="要多选请使用"; /* (search.php) --  */
$search_and="和"; /* (search.php) --  */
$search_or="或"; /* (search.php) --  */
$search_categories="分类"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="选择相册"; /* (search.php) --  */
$search_date_from_to="日期 从 / 到"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="新密码"; /* (build_user_conf.php) --  */
$new_user_error4="用户名不可为空白"; /* (admin.php) --  */
$new_user_error5="用户名已经存在"; /* (admin.php) --  */
$new_user_error1="旧密码不正确"; /* (admin.php) --  */
$new_user_error2="新密码与再次输入时的密码不一致"; /* (admin.php) --  */
$new_user_error3="电子邮件不正确"; /* (admin.php) --  */
$new_user_old_password="旧密码"; /* (admin.php) --  */
$new_user_retype_password="再次输入新密码"; /* (admin.php) --  */
$select_db_header="请选择数据库类型"; /* (sec_stage_install.php) --  */
$mysql_info="要使用 MySQL 数据库请选此项"; /* (sec_stage_install.php) --  */
$postgres_info="要使用 PostgreSQL 数据库请选此项。请看"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="自动登录"; /* (toc.php) --  */
$login_autologin_user="自动登录用户信息"; /* (toc.php) --  */
$toc_timer="计时器"; /* (toc.php) --  */
$general_autologin="自动登录"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- 可以使用自动登录功能"; /* (build_general_conf.php) --  */
$general_timer="计时器"; /* (build_general_conf.php) --  */
$general_timer_info="<-- 在页尾输出语法解析的时间"; /* (build_general_conf.php) --  */
$login_autlogin="自动登录"; /* (login.php) --  */
$lostpw_title="忘记密码"; /* (login.php) --  */
$lostpw_question="忘记了密码？"; /* (login.php) --  */
$lostpw_type_user_or_email="输入你的用户名或你的电子邮件"; /* (login.php) --  */
$lostpw_email1="有人使用了找回密码功能。如果不是你的话，你只需要忽略这封信息。如果这是你发出来的要求，请输入以下密码到需要的项目里："; /* (login.php) --  */
$lostpw_email1_part2="(请注意：这并不是你的新密码！)"; /* (login.php) --  */
$lostpw_email1_part3="亲爱的管理员"; /* (login.php) --  */
$lostpw_email_error="错误：无法提交，请联络管理员."; /* (login.php) --  */
$lostpw_error_nothing_found="抱歉，没有与你输入的资料相符的用户名或是密码。"; /* (login.php) --  */
$lostpw_email_sent="已经寄送电子邮件给你."; /* (login.php) --  */
$lostpw_should_receive="你应该已经收到寄给你的电子邮件了，在这个项目输入电子邮件里提供的密码："; /* (login.php) --  */
$lostpw_go_back="返回"; /* (login.php) --  */
$lostpw_email2="密码修改成功。你的新密码是："; /* (login.php) --  */
$lostpw_email2_part2="你可以在稍后使用这个\"个人信息\"连接来修改。"; /* (login.php) --  */
$lostpw_new_password="新密码"; /* (login.php) --  */
$lostpw_successfully_changed="密码修改成功，你等一下会收到一封有新密码的电子邮件."; /* (login.php) --  */
$lostpw_error_wrong_code="抱歉，输入不正确."; /* (login.php) --  */
$lostpw_enter_correct_code="在这个项目输入正确的电子邮件："; /* (login.php) --  */
$lang_plugins['plugins']="插件"; /* (admin.php) --  */
$lang_plugins['watermark']="水印"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="性能测试"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="数据库管理"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="已启用的插件"; /* (admin.php) --  */
$lang_plugins['enabled']="开启"; /* (plugins.php) --  */
$lang_plugins['disabled']="关闭"; /* (plugins.php) --  */
$lang_plugins['update']="更新"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="插件已更新"; /* (admin.php, plugins.php) --  */
$wm_wm_man="水印管理 "; /* (watermark.php) --  */
$wm_disable="关闭水印功能 "; /* (watermark.php) --  */
$wm_change_example_img="修改范例图片"; /* (watermark.php) --  */
$wm_no_input_files_found="输入文件不存在 "; /* (watermark.php) --  */
$wm_image_quality="图片品质(仅供预览用)"; /* (watermark.php) --  */
$wm_enable_text="开启: 文字 "; /* (watermark.php) --  */
$wm_text="文字 "; /* (watermark.php) --  */
$wm_font="字形 "; /* (watermark.php) --  */
$wm_fontsize="字形大小 "; /* (watermark.php) --  */
$wm_fontcolor="字形颜色 "; /* (watermark.php) --  */
$wm_align="位于 "; /* (watermark.php) --  */
$wm_pos_hor="水平位置 "; /* (watermark.php) --  */
$wm_pos_ver="垂直位置 "; /* (watermark.php) --  */
$wm_height="文字高度 "; /* (watermark.php) --  */
$wm_width="文字高度 "; /* (watermark.php) --  */
$wm_shadow_size="阴影大小 "; /* (watermark.php) --  */
$wm_shadow_color="阴影颜色 "; /* (watermark.php) --  */
$wm_enable_image="开启: 图片"; /* (watermark.php) --  */
$wm_available_images="可用的图片"; /* (watermark.php) --  */
$wm_no_images_found="找不到图片文件"; /* (watermark.php) --  */
$wm_dissolve="溶解画面"; /* (watermark.php) --  */
$wm_preview="预览"; /* (watermark.php) --  */
$wm_linebreak="for linebreak"; /* (watermark.php) --  */
$wm_enable_shadow="开启文字阴影"; /* (watermark.php) --  */
$wm_enable_rectangle="激活长方形"; /* (watermark.php) --  */
$wm_rectangle_color="颜色"; /* (watermark.php) --  */
$wm_enable_ext_shadow="开启延伸阴影"; /* (watermark.php) --  */
$wm_status="状态"; /* (watermark.php) --  */
$wm_enabled="已激活"; /* (watermark.php) --  */
$wm_disabled="已关闭"; /* (watermark.php) --  */
$wm_restore_to="还原至"; /* (watermark.php) --  */
$wm_inital_settings="初始设置"; /* (watermark.php) --  */
$wm_add_more_examples="你可以加入更多的范例图片到你的目录中的子目录"; /* (watermark.php) --  */
$wm_example="范例"; /* (watermark.php) --  */
$wm_shadow_fontsize="阴影字形大小"; /* (watermark.php) --  */
$wm_settings_for_both="图片与文字的设置"; /* (watermark.php) --  */
$wm_center="中央"; /* (watermark.php) --  */
$wm_north="上方"; /* (watermark.php) --  */
$wm_northeast="右上方"; /* (watermark.php) --  */
$wm_northwest="左上方"; /* (watermark.php) --  */
$wm_south="下方"; /* (watermark.php) --  */
$wm_southeast="右下方"; /* (watermark.php) --  */
$wm_southwest="左下方"; /* (watermark.php) --  */
$wm_east="右方"; /* (watermark.php) --  */
$wm_west="左方"; /* (watermark.php) --  */
$bm_file_err="错误，没有指定文件";
$bm_var_err="错误，请检查输入变量";
$bm_notfound_err="错误，文件不存在";
$bm_noimg_err="错误，文件不是图片文件";
$bm_tmpfile_err="错误，当生成暂存图片文件时";
$bm_tmpfile_warn="警告：暂存图片文件不能被删除";
$bm_time_total="统计执行时间: ";
$bm_img_sec="每秒钟图片数: ";
$bm_avg_img="每一个图片的平均时间 (滑鼠移过就会进行图片大小更新): ";
$bm_qual_size="品质/大小";
$bm_quality="品质";
$bm_height="高度: ";
$bm_width="宽度: ";
$bm_size="图片大小: ";
$bm_create = "以选取的缩图工具进行性能测试";
$bm_interval = "间隔";
$bm_calc = "计算了";
$bm_img = "张图片";
$bm_inloop="执行次数";
$bm_qual_range="品质范围: ";
$bm_size_range="大小范围(仅指高度)";
$bm_repeats="重复次数: ";
$bm_con_util="请选择缩图工具: ";
$bm_current_settings="当前设置"; /* (benchmark.php) --  */
$bm_preview="预览"; /* (benchmark.php) --  */
$bm_save_settings="保存设置"; /* (benchmark.php) --  */
$wm_addexamples="水印: 增加更多的水印图片"; /* (watermark.php) --  */
$wm_addimg="水印: 增加更多的水印图片"; /* (watermark.php) --  */
$wm_addfont="水印: 增加更多的字型"; /* (watermark.php) --  */
$wm_colorsetting="水印: 颜色设置"; /* (watermark.php) --  */
$comment_hint="提示: 点击最上方或最下方的图片以卷动相册"; /* (linpha_comments.php) --  */
$comment_end="相册中没有图片"; /* (linpha_comments.php) --  */
$comment_beginning="没有前一张图片"; /* (linpha_comments.php) --  */
$comment_back="回到图片显示"; /* (linpha_comments.php) --  */
$comment_edit_img="编辑 分类/描述"; /* (linpha_comments.php) --  */
$comment_change_img_details="修改图片的详细说明"; /* (linpha_comments.php) --  */
$comment_last_comments="最新评论"; /* (linpha_comments.php) --  */
$comment_comment_by="评论人"; /* (linpha_comments.php) --  */
$category_delete_warning="警告：分类已存在，重复指定将会失去图片"; /* (build_category_conf.php) --  */
$pass_2_short="错误，密码长度最少要3位..."; /* (various) --  */
$album_edit="编辑相册简介"; /* (linpha_comments.php) --  */
$album_details="相册的详细说明"; /* (linpha_comments.php) --  */
$wm_save_note="注意：注册用户不会看到水印！.. 你必须先注销 (成为一般游客) 才能在浏览时看到水印！"; /* (watermark.php) --  */
$lang_plugins['guestbook']="留言"; /* (admin.php) --  */
$print_low_quality="低品质"; /* (printing_view.php) --  */
$print_high_quality="高品质 (较慢!)"; /* (printing_view.php) --  */
$gb_title="留言";
$gb_sign="发表新留言";
$gb_from="来自";
$gb_from_no="未提供来自何处";
$gb_pages="页";
$gb_messages="条留言";
$gb_msg_error="抱歉，称谓与留言不可以为空白";
$gb_new_msg="我要留言";
$gb_name="称谓";
$gb_email="电子邮件";
$gb_hp="网站";
$gb_country="来自(国家)";
$gb_header="留言本";
$gb_opts="留言本选项";
$gb_rows="每一页的留言数";
$gb_anon="允许匿名用户在留言本中张贴留言";
$gb_order="留言的显示顺序";
$wm_resize="水印永远以图片大小的 X% 比例显示"; /* (watermark.php) --  */
$wm_help_and_descr="说明与描述"; /* (watermark.php) --  */
$folder_remove_hint="如果一切都没问题，你现在可以删除 /install 这个子目录 (安全因素)..."; /* (forth_stage_install.php) --  */
$add_alb_com="新增相册简介"; /* (img_view.php) --  */
$add_img_com="对图片发表评论"; /* (img_view.php) --  */
$album_com="相册简介"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML 格式标签"; /* (various) --  */
$stat_cache_elements="已缓存项目"; /* (build_stats.php) --  */
$stat_cache_first="新缓存项目"; /* (build_stats.php) --  */
$stat_cache_hits="缓存点击量"; /* (build_stats.php) --  */
$stat_cache_hits_max="最大缓存点击量 (单一图片)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="平均缓存点击量 (所有图片)"; /* (build_stats.php) --  */
$stat_cache_size="缓存大小"; /* (build_stats.php) --  */
$stat_cache_convert_time="缓存加速时间"; /* (build_stats.php) --  */
$stat_cache_size="缓存已使用的内存大小"; /* (build_stats.php) --  */
$cache_options="图片缓存选项";
$cache_max_size="最大缓存大小为多少字节 (0 = 无限制)";
$path_2_cache="缓存目录 (默认为 /sql/cache)";
$cache_optimize="优化/清除 图片缓存资料"; 
$cache_maintain="图片缓存维护";
$cache_opt_msg="!! 缓存已经优化 !!";
$lang_plugins['cache']="图片缓存"; /* () --  */
$stat_cache_title="图片缓存统计"; /* (cache.php) --  */
$bm_saved="设置已保存"; /* (admin.php) --  */
$cache_optimize_by_size="删除所有缓存项目大小 (以 kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="删除多少天之内未使用的缓存项目:"; /* (cache.php) --  */
$elements_rem="项目已删除"; /* (cache.php) --  */
$general_anon_album_downs="允许/禁止 匿名压缩相册下载"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- 允许匿名用户下载压缩的相册"; /* (build_general_conf.php) --  */
$general_download_speed="下载速度限制 kb/sec (0=无限制)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- 设置图片下载的速度限制"; /* (build_general_conf.php) --  */
$general_navigation="导航栏"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- 激活导航栏于缩图页"; /* (build_general_conf.php) --  */
$toc_navigation="导航栏"; /* (doc/) --  */
$toc_zip_download="匿名用户下载相册"; /* (doc/) --  */
$toc_albdownlimit="下载速度限制"; /* (doc/) --  */
$choose_zips_msg="选择要下载的图片"; /* (build_zip_view.php) --  */
$zip_button="下载文件"; /* (build_zip_view.php) --  */
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
$menumsg['addcomment']="新增相册简介"; /* () --  */
$menumsg['delcomment']="删除相册简介"; /* () --  */
$menumsg['editcomment']="编辑相册简介"; /* () --  */
$album_up="已更新"; /* (album_comment.php) --  */
$album_ins="已插入"; /* (album_comment.php) --  */
$mail_link="邮件列表"; /* (header.php) --  */
$mail_title="邮件列表"; /* (mail.php) --  */
$mail_send_link="发送邮件"; /* (mail.php) --  */
$mail_return_address="返回地址:"; /* (mail.php) --  */
$mail_block="邮件区块大小:"; /* (mail.php) --  */
$mail_block_help="# 每次发送email的数量，以避免PHP的超时限制."; /* (mail.php) --  */
$mail_options="邮件列表选项"; /* (mail.php) --  */
$mail_go_back="返回"; /* (various mail plugin files) --  */
$mail_form_title="电子邮件信息"; /* (mail_form.php) --  */
$mail_form_subject="主题:"; /* (mail_form.php) --  */
$mail_form_msg="信息:"; /* (mail_form.php) --  */
$mail_total_sent="发送的电子邮件共计:"; /* (mail_form.php) --  */
$mail_subscribe="订阅"; /* (mail_users.php) --  */
$mail_unsubscribe="退订"; /* (mail_users.php) --  */
$mail_activate="激活"; /* (mail_users.php) --  */
$mail_user_name="你的称谓:"; /* (mail_users.php) --  */
$mail_user_email="你的电子邮件:"; /* (mail_users.php) --  */
$mail_user_email_confirm="确认电子邮件:"; /* (mail_users.php) --  */
$mail_user_code="激活码:"; /* (mail_users.php) --  */
$mail_user_code_sent="一封带有激活码的邮件已经寄给你."; /* (mail_users.php) --  */
$mail_user_code_subject="邮件列表激活"; /* (mail_users.php) --  */
$mail_user_activated="你的账户已经被激活!"; /* (mail_users.php) --  */
$mail_user_activate_error="在激活你的账户时发生错误!"; /* (mail_users.php) --  */
$mail_user_email_not_found="并不存在于我们的邮件列表中."; /* (mail_users.php) --  */
$mail_user_remove_ok="已经从我们的邮件列表中删除."; /* (mail_users.php) --  */
$mail_user_remove_fail="无法从我们的邮件列表中删除."; /* (mail_users.php) --  */
$mail_user_empty="请填写所有项目."; /* () --  */
$mail_user_no_match="电子邮件不符."; /* () --  */
$mail_user_exists="电子邮件已存在于我们的邮件列表."; /* (mail_users.php) --  */
$lang_plugins['mail']="邮件列表"; /* (admin.php) --  */
$mail_activate_message="尊敬的 %s,\n\n请输入以下信息激活你的邮件列表账户.\n\n激活码: %s\n\n多谢!\n管理员"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="提示"; /* (mail.php) --  */
$mail_user_permission="所有在群组 'mail' 中的用户都可以发送信息到邮件列表."; /* (mail.php) --  */
$mail_current_subscribers="现有订户"; /* (mail.php) --  */
$mail_name="称谓"; /* (mail.php) --  */
$mail_mail="电子邮件"; /* (mail.php) --  */
$mail_subscribing_date="订阅日期"; /* (mail.php) --  */
$mail_active="激活"; /* (mail.php) --  */
$mail_sent_to="发送电子邮件给"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> 和 <b>[Email]</b> 将被用户信息中相应部分替换."; /* (form_mailing.php) --  */
$misc_help="杂项说明"; /* () --  */
$mail_create_group="(你要生成属于你自己的 'mail' 群组.)"; /* (mail.php) --  */
$alb_th="子目录在相册"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1月','2' => '2月','3' => '3月','4' => '4月','5' => '5月','6' => '6月','7' => '7月','8' => '8月','9' => '9月','10' => '10月','11' => '11月','12' => '12月'); /* abrevations of months */
$arr_month_long = Array('1' => '1月','2' => '2月','3' => '3月','4' => '4月','5' => '5月','6' => '6月','7' => '7月','8' => '8月','9' => '9月','10' => '10月','11' => '11月','12' => '12月'); /* months */
$arr_day_short = Array('周日','周一','周二','周三','周四','周五','周六'); /* abrevations of weekdays */
$arr_day_long = Array('周日','周一','周二','周三','周四','周五','周六'); /* weekdays */
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
$layout="界面设置";
$features="功能设置";
$perform="系统优化";
$general_comment_in_subfolder = '子目录中的相册简介';
$general_comment_in_subfolder_info = '<-- 在预览子目录时显示相册简介';
$general_default_date_format = '默认日期格式';
$general_default_date_format_info = '<- 如: 06/28/2004, 完整显示';
$general_default_time_format = '默认时间格式';
$general_default_time_format_info = '<- 如: 01:45:50 PM, 完整显示';
$general_new_images_folder = '虚拟 "新图片" 目录';
$general_new_images_folder_info = '<- 显示一个包含新加入图片的虚拟目录';
$general_new_images_folder_age = '几天内的图片放在"新图片"目录';
$general_new_images_folder_age_info = '<- 显示最多几天内的新图片';
$control_key="Ctrl"; /* (various) --  */
$search_date="日期"; /* (search.php) -- reads: date from to... */
$search_from="从"; /* (search.php) -- reads: date from to... */
$search_to="到"; /* (search.php) -- reads: date from to... */
$start_slide="开始幻灯片显示"; /* (img_view.php) --  */
$pass_msg="你已经可以用新密码来登录"; /* (build_my_settings.php) --  */
$str_new_images = "新图片"; /* (new_images.php) -- */
$str_order_by = "排序按"; /* (new_images.php) -- */
$str_age = "时间"; /* (new_images.php) -- */
$str_album = "相册"; /* (new_images.php) -- */
$str_in_album = "所属相册"; /* (new_images.php) -- */
$str_img_newer_than = "以下图片是在 %s 天内新增的"; /* (new_images.php) -- */
$timespanfmt = "%s 天, %s 小时, %s 分 %s 秒"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="删除所有有水印的缓存图片"; /* (watermark.php) --  */
$str_error_changing_perm="无法修改文件权限! (可能你没有相应的权限)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="修改以下的权限:"; /* (plugins/ftp/index.php) --  */
$str_read="读"; /* (plugins/ftp/index.php) --  */
$str_write="写"; /* (plugins/ftp/index.php) --  */
$str_execute="执行"; /* (plugins/ftp/index.php) --  */
$str_owner="拥有者"; /* () --  */
$str_group="群组"; /* (plugins/ftp/index.php) --  */
$str_all_other="所有其它"; /* (plugins/ftp/index.php) --  */
$str_copy="复制"; /* (plugins/ftp/index.php) --  */
$str_copy_to="复制 %s 到:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="更名 %s 到:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="无法旋转图片"; /* (img_view.php) --  */
$str_no_write_perm="无写入权限"; /* (img_view.php) --  */
$str_new_images_in_these_folders="以下相册中有新图片:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="如果你要重新安装系统, 你要先删除以下文件 ./sql/db_connect.php! (你可以使用整合在管理选项中的文件管理功能来删除此文件)"; /* (install_header.php) --  */
$str_Version="版本"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="错误: 您的PHP的配置中没有设置支持的数据库"; /* (sec_stage_install.php) --  */
$str_extract_with="当上传完毕, 解压缩文件用"; /* (ftp/index.php) --  */
$str_files_to_upload="要上传的文件"; /* (ftp/index.php) --  */
$posix_check_msg="检查 POSIX 支持..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="你所安装的PHP中已有支持POSIX. 在整合的文件管理工具中所有的功能都能使用."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="你所安装的PHP中没有支持POSIX. 在整合的文件管理工具中有些功能无法使用(特别是修改文件权限时)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="错误: 无法保存设置. 请确认路径是否正确且你具有写入这个目录的权限."; /* (admin.php) --  */
$str_create_archive="生成 %s 文件"; /* (build_zip_view.php) --  */
$str_download_error="错误! 由于某些原因无法开始下载, 抱歉"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="搜索所有图片共使用 %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="如果载入较慢, 请尝试用较低的分辨率:"; /* (image_panorama_view.php) --  */
$str_current_resolution="现在的分辨率:"; /* (image_panorama_view.php) --  */
$href_group_conf="群组管理"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */

$href_tools_section="工具:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="插件"; /* (plugin.php) --  */
$choose_mail_msg="选择要邮寄的图片"; /* () --  */
$new_user_full_name="昵称"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="迷你图片显示为大型缩图"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- 激活在显示图片时在底部显示大型缩图"; /* (build_general_conf.php) --  */
$href_category_conf="分类管理"; /* (admin.php) --  */
$cat_private="私人"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="平面图"; /* (plugins.php) --  */
$str_add_more_apps="加入更多应用程序"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="检查Session设置..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session设置是正确的."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session设置不正确."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session设置不正确. 你必须在php.ini中更正以上的错误否则待会使系统无法正常工作!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="所有的Session设置都正确. 系统可以正常无误的工作."; /* (sec_stage_install.php) --  */
$new_user_error6="错误: 你是用你自己的用户名吗?"; /* (build_my_settings.php) --  */
$str_old_comments="旧评论 (已不再属于某张图片):"; /* (build_stats.php) --  */
$str_last_viewed_page="最后浏览的页面:"; /* (index.php) --  */
$str_select_row="选择本行"; /* (basket.php) --  */
$str_select="选择"; /* (basket.php) --  */
$str_new_window="新窗口"; /* (basket.php) --  */
$general_anon_mail_mode="允许/禁止 匿名用户使用邮寄模式"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- 允许匿名用户邮寄图片"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="邮寄模式: 最大邮件大小"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- 最大值为多少字节"; /* (build_general_conf.php) --  */
$general_thumbnail_view="缩图显示"; /* (build_general_conf.php) --  */
$general_image_view="图片显示"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL查询缓存"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- SQL太慢或无PHP加速器请开启此项"; /* (build_general_conf.php) --  */
$general_ado_time_msg="缓存时间:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- 以分钟为单位设置最大缓存时间"; /* (build_general_conf.php) --  */
$general_ado_path_msg="缓存的路径:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- 将查询缓存资料保存在何处"; /* (build_general_conf.php) --  */
$str_other_features="其他功能"; /* (build_general_conf.php) --  */
$str_language_settings="语言设置"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL 查询缓存"; /* (build_general_conf.php) --  */
$general_thumb_border="缩图边框尺寸的像素值"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 设置为0则关闭, 默认: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="缩图边框颜色"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- 完整显示"; /* (build_general_conf.php) --  */
$str_recipient="收件人"; /* (basket_mail.php) --  */
$str_sender="发件人"; /* (basket_mail.php) --  */
$str_mail_too_big="错误: 此电子邮件太大.<br /><br />允许的文件大小为: %sBytes. 你所选择的图片共使用了 %sBytes.<br /><br />请删除一些图片或是使用下载压缩相册功能!"; /* (basket_mail.php) --  */
$str_size_of_email="电子邮件大小: %s."; /* (basket_mail.php) --  */
$str_new_search="重新搜索"; /* (search.php) --  */
$str_edit_search="编辑搜索"; /* (search.php) --  */
$str_View="浏览"; /* (img_view.class.php) --  */
$str_normal="一般"; /* (img_view.class.php) --  */
$str_detail="详细"; /* (img_view.class.php) --  */
$search_result_empty="抱歉, 未找到任何相符的内容"; /* (search.php) --  */
$str_chars_entered="个字符"; /* (img_view.class.php) --  */
$str_information_lost="有些信息将丢失, 请修改相关内容."; /* (img_view.class.php) --  */
$general_random_image="首页显示随机图片"; /* () --  */
$general_random_image_info="<-- 将随机图片显示于首页"; /* () --  */
$general_random_image_size="随机图片最大值"; /* () --  */
$general_random_image_size_info="<-- 设置最大图片的象素值"; /* () --  */
$str_edit_watermark="编辑水印"; /* (watermark.php) --  */
$str_edit_permissions="编辑水印权限"; /* () --  */
$str_Everyone="所有人"; /* () --  */
$str_Nobody="没有人"; /* () --  */
$str_only_logged_in_users=" 仅登录的用户"; /* () --  */
$str_except_these_groups="以下组除外:"; /* () --  */
$str_additionally_groups="但授权以下组:"; /* () --  */
$str_allow_these_persons="没有为这些 用户/群组 设置的水印"; /* () --  */
$str_album_based_permissions="基于相册的权限"; /* () --  */
$str_all_albums_but_without_these="所有相册, 除了以下的:"; /* () --  */
$str_only_on_these_albums="仅这些相册:"; /* () --  */
$str_allow_these_persons="允许以下人"; /* (db_api.php) --  */
$str_no_watermarks="以下人不加水印"; /* (db_api.php) --  */
$str_watermark_perm_part1="为单个用户, 多个用户, 和/或 相册设置水印."; /* (watermark.php) --  */
$str_watermark_perm_part2="默认为'仅登录的用户' 和 '所有相册'."; /* (watermark.php) --  */
$str_watermark_perm_part3="这意味着登录的用户看到的所有相册中的图片都不带水印."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="系统工作不正常"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="你的系统的GD库不支持jpeg!. JPEG图片将不能正常显示!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="为视频创建缩图"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--如果创建出现问题请关闭此项"; /* (build_generl_config.php) --  */
$general_update_notice="更新检查"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- 每周检查一次程序更新"; /* (build_general_config.php) --  */
$large="大"; /* (build_general_config) -- selectfield for mini images size */
$directories="目录"; /* (build_thumbnail_conf.php) --  */
$do_nothing="不做什么"; /* (build_thumbnail_conf.php) --  */
$create="创建"; /* (build_thumbnail_conf.php) --  */
$recreate="重建"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="config配置中禁止显示EXIF信息"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="config配置中禁止显示IPTC信息"; /* (build_thumbnail_conf.php) --  */
$silent_mode="友好模式(如 不显示出错信息)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="缩图"; /* (build_thumbnail_conf.php) --  */
$log_title="日志"; /* (log.php) --  */
$log_options="日志选项"; /* (log.php) --  */
$log_method_label="记录到:"; /* (log.php) --  */
$str_extra_headers="头:"; /* (log.php) --  */
$str_log_events['login']="用户登录"; /* (log.php) --  */
$str_log_events['thumbnail']="缩图生成"; /* (log.php) --  */
$str_log_events['update']="更新"; /* (log.php) --  */
$str_log_events['db']="数据库"; /* (log.php) --  */
$str_log_events['filemanager']="文件管理"; /* (log.php) --  */
$str_events="日志"; /* (log.php) --  */
$find_duplicates="查找重复图片"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="没有在PHP设置中启用(php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="Warning"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="缩图将被删除"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="All Statistics will be deleted"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="首页随机图片显示"; /* (build_general_conf.php) --  */
$str_download_images="下载单个图片"; /* (build_perms.php) --  */
$str_add_image_comments="对图片发表评论"; /* (build_perms.php) --  */
$str_add_image_description="添加图片的描述和分类"; /* (build_perms.php) --  */
$str_mail_add_all_users="将所有用户加入邮件列表"; /* (plugins/mail.php) --  */
$str_note_upload="<b>提示:</b> 你不必一定要通过表格提交图片. 你可以用任何你喜欢的方式 (ftp,scp,nfs,local,...). 只要将它们放到albums目录即可."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="黑名单选项(过滤内容中的广告)"; /* (varios) --  */
$blacklist_onoff="使用信息过滤"; /* (varios) --  */
$blacklist_keywords="过滤的词语:"; /* (varios) --  */
$str_entire_path="文件路径"; /* (search.php) --  */
$mail_format="Mail format:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (images attached)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (images inline)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="统计"; /* (various) --  */
$stats_total_images="图片总数"; /* () --  */
$stats_total_img_views="总浏览量"; /* () --  */
$stats_total_img_downs="总下载量"; /* () --  */
$stats_total_img_selected="被浏览的图片数量"; /* () --  */
$stats_total_downs_selected="被下载的图片数量"; /* () --  */
$stats_downloads="下载次数"; /* () --  */
$stats_downl_size="下载流量"; /* () --  */
$stats_coments_total="总评论数"; /* () --  */
$stats_coments_sel="被评论的图片数量"; /* () --  */
$str_log_events['guestbook']="留言"; /* (log.php) --  */
$stats_realtime="启用/关闭实时统计"; /* (build_stats.php) --  */
$stats_realtime_info="<-- 实时显示统计信息(不使用缓存)"; /* (build_stats.php) --  */
$stats_cache_time="统计缓存时间"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- 间隔指定时间刷新统计 (下载流量)"; /* (build_stats.php) --  */
$stats_user_info="用户"; /* (stats_view.php) --  */
$stats_image_info="图片"; /* (stats_view.php) --  */
$stats_comments_info="评论"; /* (stats_view.php) --  */
$stats_general_info="常规"; /* (stats_view.php) --  */
$spam_blocked="拦截广告的次数"; /* () --  */
$mail_current_status="Current Status"; /* (mailing.php) --  */
$mail_sending_to="Sending to: "; /* (mailing.php) --  */
$mail_counters="Counters (Success/Fail/Total)"; /* (mailing.php) --  */
$mail_send_fail="Send FAIL: "; /* (mailing.php) --  */
$mail_send_ok="Send OK: "; /* (mailing.php) --  */
$mail_all_complete="All Completed!"; /* (mailing.php) --  */
$mail_failed_list="List of failed addresses"; /* (mailing.php) --  */
$mail_ok_list="List of sent addresses"; /* (mailing.php) --  */
$mail_mailer_error=" - Mailer Error: "; /* (mailing.php) --  */
$str_log_events['comments']="评论"; /* (log.php) --  */
$str_edit_members="编辑用户"; /* (build_user.conf.php) --  */
$edit_groups="编辑用户组"; /* (build_user.conf.php) --  */
$str_basket="其它"; /* (various) --  */
$lang_plugins['log']="日志"; /* (admin.php) --  */
$rss_created="XML RSS file generated successfully"; /* () --  */
$rss_not_created="RSS has not been built, because no change has been found"; /* () --  */
$rss_settings_saved="RSS settings saved"; /* () --  */
$lang_plugins['stats']="统计"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="不加水印"; /* () --  */
$str_with_watermarks="添加水印"; /* () --  */
$str_create_cache_img="创建图片缓存"; /* () --  */
$str_reset_button="重置"; /* () --  */
$cache_stats="图片缓存信息"; /* () --  */
$drop_duplicates="删除重复文件"; /* () --  */
$general_exif_rotate="开启/关闭图片自动旋转"; /* () --  */
$general_exif_rotate_info="<-- 根据EXIF数据自动旋转图片"; /* () --  */
$lang_plugins['maps']="谷歌/雅虎地图"; /* () -- maps plugin */
$maps_setup_info_header="谷歌/雅虎地图设置"; /* () -- maps plugin */
$maps_setup_yahoo_id="你的雅虎应用ID"; /* (maps plugin) --  */
$maps_setup_google_key="你的谷歌Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="对不起 - 此插件需要PHP版本4.2.0或更新的版本. 请更新 PHP"; /* (maps plugin) --  */
$maps_select_type="请选择地图类型:"; /* (maps plugin) --  */
$maps_select_type_info="<-- 选择使用谷歌地图或雅虎地图"; /* (maps plugin) --  */
$maps_select_display_type="请选择地图显示类型:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- 显示 Hybrid, Sat or Regular地图"; /* (maps plugin) --  */
$maps_zoom_level="默认缩放等级: 1-16 (默认 16, 世界地图)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- 设置地图的默认缩放等级"; /* (maps plugin) --  */
$maps_zoom_location="默认的浏览中心位置"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- 默认的地图中心位置"; /* (maps plugin) --  */
$maps_google_ctrl_size="谷歌地图控制尺寸"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- 调整谷歌地图滑条和面板尺寸"; /* (maps plugin) --  */
$maps_str="地图"; /* (maps plugin) --  */
$map_type_ctrl="允许地图类型控制"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- 在地图中显示地图类型控制"; /* (maps plugin) --  */
$map_slide_ctrl="允许地图滑动控制"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- 在地图中显示地图滑动控制"; /* (maps plugin) --  */
$map_pan_ctrl="允许地图面板控制"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- 在地图中显示地图面板控制"; /* (maps plugin) --  */
$map_auto_popup="允许标记自动弹出"; /* (maps plugin) --  */
$map_auto_popup_info="<-- 鼠标移过时自动显示标记弹出框"; /* (maps plugin) --  */
$map_album_add="增加图集"; /* (maps plugin) --  */
$map_marker_del="删除标记"; /* (maps plugin) --  */
$map_search_location="搜索/增加新位置"; /* (maps plugin) --  */
$map_location_here="你的位置"; /* (maps plugin) --  */
$map_search_loc_button="搜索位置"; /* (maps plugin) --  */
$map_add_location="增加新位置"; /* (maps plugin) --  */
$map_assign_album="分配图集到地图位置"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>