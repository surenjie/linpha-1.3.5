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
20. Mar 2007 $mail_replace_words updated to contain [My_LinPHA] replacement variable.
*/

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="我的相簿集";

/* alerts */
$alert_fopen="錯誤! 檔案無法開啟...";
$printing_probs="列印錯誤";
$printing_probs_msg="禁止列印！請看";

/* global messages */
$subfolders="子資料夾";
$img_th="相片";
$in_th="附屬在"; /* used for the photos in $foldername */
$alb_th="相本附屬在";
$thumb_hint_msg="進一步檢視";
$latest_photo="最新的";
$view_at="預覽解析度";
$close_button="關閉";
$help="說明";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="歡迎來到 儷菲系統";
$welc_text="嗨，這是 &quot;The Linux Photo Archive&quot; 的首頁，簡稱儷菲(LinPHA)。看起來您似乎是首次啟動 儷菲，因此請務必進行安裝.";
$welc_hint="<b>Before you continue:</b>";
$welc_hint1="1. 建立允許能寫入資料的資料夾&quot;<b>linpha/sql</b>&quot;! (例如 chmod 777 sql)";
$next_button="下一步"; /* used as left menu header in all 4 stages */
$inst_msg="安裝儷菲"; /* used as left menu header in all 4 stages */
$inst_status_1="請選擇語言及點選&quot;下一步&quot;";
$inst_status_step1="步驟 1 共有 4 步驟";

/* sec_stage_install (page 2) */
$inst_access_msg="設定資料庫存取方式";
$inst_full_access_msg="<b>是的 !</b><br> 我能完全存取 MySQL 資料庫，我能建立新的<br> 資料庫及使用者。或者說：這是我的主機！";
$inst_limited_access_msg="<b>不行 !</b><br> 我僅能有限度存取<br> MySQL 資料庫。 我的 ISP 並不允許我建立新的資料庫及使用者。";
$inst_status_2="請選擇SQL 的運行方式，若不確定請選 不行!";
$inst_status_step2="步驟 2 共有 4 步驟";

/* requirements */
$req_check_msg="查驗系統需求";
$req_found_msg="已找到";
$req_miss_msg="沒找到";
$req_safe_fail="有效";
$req_safe_ok="無效";
$php_safemode_check_msg="查驗 PHP 的安全模式...";
$php_version_check_msg="查驗 PHP 版本> 4.1.0...";
$mem_check_msg="查驗 PHP 記憶體限制...";
$gd_check_msg="查驗 GD 函式庫...";
$convert_check_msg="查驗 ImageMagick...";
$exif_check_msg="查驗 EXIF 支援...";
$summary_msg="摘要：";
$safe_mode_err="您的系統已被設定成使用 PHP 的安全模式。當php.ini設定安全模式啟動時，儷菲(LinPHA)將無法持續運作!";
$inst_abort_msg="!!! 安裝失敗 !!!";
$php_version_err="您的系統所運行的 PHP 版本 < 4.1.0。儷菲(LinPHA)在您升級 PHP 之前將無法有效運作。";
$gd_convert_err="ImageMagick 及 GD 函式庫皆無法尋獲。儷菲再缺乏其中之一時將無法持續運作。";
$convert_sum_found_msg="已尋獲ImageMagick於此主機內。這使 儷菲 能呈現高品質的圖片列表。";
$convert_sum_miss_msg="無法尋獲ImageMagick於此主機內。這使圖片列表僅有低品質。";
$exif_sum_found_msg="您安裝的PHP有支援EXIF。這將允許 儷菲 顯示圖片的詳細資料。";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="您安裝的PHP並不支援EXIF。這將妨礙 儷菲 顯示圖片的詳細資料。";
/* TODO next 3 */
$session_path_check_msg="查驗 session_safe_path...";
$session_path_found_msg="會談存放路徑設定於 php.ini。LinPHA 的登入功能必須正常工作。路徑設定於： ";
$session_path_miss_msg="在會談存放路徑裡沒有找到正確的數值。你必須在 php.ini 中設定正確的會談存放路徑，或者是稍後你將不能正確登入系統!!";
$mem_limit_ok_msg="很好, 你的 PHP 記憶體限制為 >= 16MB. 這樣在產生縮圖時不會有任何問題T.";
$mem_limit_low_msg="嗯, 你的 PHP 記憶體限制為 <=16MB. 如果你遇到遺失縮圖的問題, 試著去增加 php.ini中的 memory_limit 或者是將縮圖的解析度降低之後再試一次...";
$choose_def_quali="請選擇預設的相片品質";
$choose_def_quali_warn="不要設為高品質，如果你的 CPU 速度 &lt; 1Ghz (高 CPU 負載)";

/* third_stage_install (page 3) */
$inst_superadmin_header="設定MySQL 資料庫的管理者";
$inst_superadmin_name="MySQL 資料庫管理者帳號：";
$inst_superadmin_name_info="&lt;-MySQL 的管理者帳號(必須存在於資料庫中))";
$inst_superadmin_pass="MySQL 資料庫管理者密碼：";
$inst_superadmin_pass_info="&lt;-MySQL 的管理者密碼(必須存在於資料庫中)";

$inst_admin_header="設定儷菲系統管理者";
$inst_admin_name="儷菲管理者帳號：";
$inst_admin_name_info="&lt;-管理者的登入帳號";
$inst_admin_pass="儷菲管理者的密碼：";
$inst_admin_pass_info="&lt;-管理者的登入密碼";
$inst_admin_email="管理者的電子信箱：";
$inst_admin_email_info="&lt;-設定管理者的電子信箱";

$inst_db_header="設定儷菲資料庫的連接方式";
$inst_db_host="主機名稱：";
$inst_db_host_info="&lt;-主機名稱： 一般標示為 &quot;localhost&quot;";
$inst_db_host_info2="&lt;-主機名稱： MySQL主機的名稱";
$inst_db_host_port="連接埠：";
$inst_db_host_port_info="&lt;-連接埠：若不確定則省略！";
$inst_db_name="資料庫名稱：";
$inst_db_name_info="&lt;-儷菲所使用的資料庫名稱，一般被標示為&quot;linpha&quot;";
$inst_db_name2="資料庫名稱：";
$inst_db_name_info2="&lt;-ISP所給予的資料庫名稱";
$inst_table_prefix="資料表附加字首";
$inst_table_prefix_info="&lt;-在所有資料表名稱附加字首";

$general_header="一般選項設定";
$general_album_title="相本標題";
$general_album_title_info="&lt;- 保留空白可以使用預設名稱";
$general_photos_row="橫列顯示數目：";
$general_photos_row_info="&lt;- 每一橫列顯示數量";
$general_photos_col="直行顯示數目：";
$general_photos_col_info="&lt;- 每一直行顯示數量";
$general_photos_width="單張照片顯示大小 (寬度):";
$general_photos_width_info="&lt;- 512 (預設大小)";
$general_photos_height="單張照片顯示大小 (高度):";
$general_photos_height_info="&lt;- 384 (預設大小)";
$general_img_quality="詳細的相片品質";
$general_img_quality_info="&lt;- 調整影像品質 0-100 (預設為 75)";

$inst_status_3="請填寫所有欄位!";
$inst_status_step3="步驟 3 共有 4 步驟";

/* forth_stage_install (page 4) */
$inst_status_4="恭喜您，安裝已完成! 儷菲(LinPHA)已預備開始使用";
$inst_status_step4="步驟 4 共有 4 步驟";
$inst_submit="完成";
$inst_db_tryconn="嘗試連接到資料庫主機";
$inst_db_tryconn_error="連接到資料庫主機時發生錯誤， using:";
$inst_db_tryconn_ok="連線成功!";
$inst_db_tryinst="嘗試新增資料庫：";
$inst_db_tryinst_error="新增資料庫時發生錯誤：";
$inst_db_tryinst_ok="新增成功!";
$inst_create_tb_msg="建立所需資料表";

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
$inst_db_connect_inc_msg="連接資料庫主機發生錯誤!";
$inst_db_connect_inc_msg1="自資料庫中選擇 ".@$db_realname." 時發生錯誤<br>若安裝時發生此訊息，請將db_connect.php自<br> 資料夾&quot;sql&quot; 中移除!";
/* ------------------------------------------------------------------ */

$table_create="新增資料表：";
$table_create_error="資料表新增時發生錯誤!";
$table_create_ok="新增完畢!";
$table_insert_admin="建立管理者帳號：";
$table_insert_admin_error="建立管理者帳號時發生錯誤!";
$table_insert_admin_ok="成功建立!";
$write_db_config="將資料庫設定儲存成檔案";
$fopen_error="無法寫入 sql/db_config.php，請設定 chmod 777 及重新安裝";
$fopen_ok="設定已寫入!";
$install_finish_msg="安裝成功!!";
$admin_task="進行下一步";
$file_create_ok="成功建立!";
$configure_error="請填寫所有必要欄位!!!";
$could_not_open="無法開啟users資料表! 您似乎不被授權新增帳號到資料庫中<br>請在第二頁選擇較為可行的安裝方式<br>";

/*#################################################
## header.php
#################################################*/
$page_title="儷菲 LinPHA - The Linux Photo Archive";
$head_title="儷菲相本系統";
$book_home="首頁";
$book_about="說明";
$book_admin="管理";
$book_admin_user="我的設定";
$book_links="連結";
$book_search="搜尋";
$book_logout="登出";
$book_login="登入";
$num_pictures="照片數量:";
$user_visits="位訪客";
$user_online="位線上使用者";
$guest="訪客";
$html_lang="zh-tw";
$html_charset="utf8";

/*#################################################
## index.php
#################################################*/
$index_welc_text="嗨，這是&quot;The Linux Photo Archive&quot;系統的首頁，簡稱 LinPHA‧ 請常到 <a href='http://sf.net/projects/linpha/'><u>Sourceforge</u></a> 參觀，以取得最新版本。";

/*#################################################
## search.php
#################################################*/
$search_header="搜尋儷菲(Linpha)";
$radio_all="全部";
$radio_descript="描述";
$radio_comment="意見";
$radio_category="分類";
$radio_file="檔名";
$search_in="搜尋相本";
$search_all="所有相本";
$search_for="搜尋關鍵字";
$search_button="搜尋";
$photos_found="尋獲";
$search_info="儷菲搜尋頁";
$search_msg="在 儷菲 資料庫中可根據以下資訊搜尋相片：";

/*#################################################
## img_view.php
#################################################*/
$img_detail="圖片細節";
$img_size="完整大小";
$img_com="意見";
$img_des="描述";
$img_cat="分類";
$img_name="名稱";
$img_info_stored="將意見寫入資料庫";
$please_login="請先 <a href='login.php'><u>登入</u></a> 以便新增意見";
$back_to_thumbs="<b><u>回到列表顯示</u></b>";
$back_to_search="<b><u>回到搜尋頁面</u></b>";
$button_next="下一張";
$button_prev="上一張";
$exif_ext_error="抱歉，此版本的PHP沒有 EXIF 支援";
$exif_error="抱歉，圖片不包含任何 EXIF 訊息!";
$exif_more="更多細節";
$exif_less="簡略資訊";
$detail_header="第";
$detail_header1="共";
$detail_header2="張照片在此相簿<br>";
$php_to_old="PHP < 4.2.0 EXIF 無效!";
$views="已閱覽次數";
$slideshow="幻燈片顯示";
$econds="秒";
$go="衝";
$stopslide="停止幻燈片顯示";
/* image rotating */ /* TODO next */
$img_rotate_ok="旋轉照片";
$img_rotating="旋轉照片錯誤"; // TOC entry
$img_rotating_hint1="不可旋轉照片！ 請按這裡";
$img_rotating_hint2="查看原因";

/*#################################################
## login.php
#################################################*/
$login_msg="請先登入！";
$login_error="不正確的帳號或密碼";
$login_name="登入帳號";
$login_pass="登入密碼";
$login_info="LinPHA 登入頁面";
$login_request_account_info="想要申請帳號請按 <u>這裡</u>：";
$login_request_target="聯絡 LinPHA 的管理者";
$login_admin_info="執行管理工作必須使用管理者帳號登入";
$login_friend_account_info="若你已有 &quot;好友&quot; 帳號，可在這裡修改個人資料";

/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="儷菲圖庫管理";
$please_turn_off_msg="相片新增完畢時請設定『自動 新增/刪除 檔案閱覽』為關閉。<br> LinPHA 將能加快巡視速度 :)";
/* left menu */
$logout_msg="登出";
$welc_msg="歡迎";
$stat_msg="你已經被授權進行管理，含新增 <b>意見</b> 和相片描述";
$back_to_msg="<b>回到顯示相本</b>";
$href_general_conf="一般設定";
$href_user_conf="使用者/群組 管理";
$href_folder_conf="目錄管理";
$href_sql="MySQL 資料庫管理";
$href_ftp="檔案管理";
$href_stats="LinPHA 統計資料";
$href_other_conf="縮圖的 EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA 預設使用的語系";
$default_language_info="&lt;- 設定預設使用的語系";
$general_auto_lang="開啟/關閉 語系自動偵測功能"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- 自動偵測參觀者瀏覽器使用的語系";
$general_success_msg="! 改變已經生效 !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="開啟/關閉 影像旋轉功能";
$general_rotate_info="&lt;-- <b>超大檔案警示! click info</b>";
$general_exifinfo="開啟/關閉 所有 EXIF 支援";
$general_exifinfo_info="&lt;-- 開啟/關閉 使用 EXIF 功能";
$general_exifdefault="預設顯示 EXIF 資訊";
$general_exifdefault_info="&lt;-- 預設啟動顯示 EXIF 資訊";

$general_exiflevel="顯示 EXIF 資訊的程度";
$general_exiflevel_info="&lt;-- 設定 EXIF 訊息的繁簡程度";
$exif_low="最少";
$exif_medium="中等";
$exif_high="最多";
$general_filename="顯示/不顯示 檔案名稱";
$general_filename_info="&lt;-- 瀏覽時顯示檔案名稱";
$general_thumb_order="閱覽排列順序";
$general_thumb_order_info="&lt;- 設定預覽時按照檔案名稱或日期排序";
$thumb_order_date="日期";
$thumb_order_file="檔案名稱";
$general_autoconf="自動 新增/刪除 檔案閱覽";
$general_autoconf_info="&lt;- <b>關閉此項目將能提高效率</b>";
$general_counterstat="開啟/關閉 計數器";
$general_counterstat_info="&lt;-- 預設為開啟";
$general_blocking="IP 鎖定時間(分鐘)";
$general_blocking_info="&lt;--在 x 分鐘內將不會當成新訪客計算";
$general_theme="變更 LinPHA 樣板主題";
$general_theme_info="&lt;- 設定 儷菲 的預設顯示樣版";
$aqua_theme="淺色系";
$colored_theme="彩色系";
$neptune_theme="海王星";
$shadow_theme="陰影";
$general_hq="開啟/關閉 高品質閱覽與相片";
$general_hq_info="&lt;--關閉此項目將能提高速度";
$submit_button_general="將變更寫入資料庫";
$button_on_msg="開啟";
$button_off_msg="關閉";
$basic_opts="基本";
$advanced_opts="進階";
$show_basics="按此顯示基本選項";
$show_advanced="按此顯示進階選項";
$general_printing="開啟/關閉 訪客列印功能";
$general_printing_info="&lt;-- 開啟，所有人都可以列印照片";
$general_slideshow="開啟/關閉 幻燈片顯示";
$general_slideshow_info="&lt;-- 設定幻燈片顯示功能開啟或關閉";
$general_mini_preview="開啟/關閉 迷你影像";
$general_mini_preview_info="&lt;-- 如果有許多參觀者為窄頻使用者的話請設為關閉";

/* modify existing user table */
$mod_user_header="修改已存在之帳號";
$submit_button_mod_user="帳號修改";
$mod_user_success_msg="! 帳號已修改 !";
$submit_button_delete="刪除";
$del_user_success_msg="! 帳號已刪除 !";

/* add new user table */
$new_user_header="新增使用者帳號";
$new_user_name_info="帳號";
$new_user_pass_info="密碼";
$new_user_mail_info="電子郵件";
$new_user_level_info="權限層級";
$friend="好友";
$submit_button_new_user="新增帳號";
$new_user_success_msg="! 帳號已新增 !";

/* friends account table */
$friend_user_header="帳號設定";
$submit_button_friend_user="帳號修改";
$delete_button_friend_user="帳號刪除";
$friend_info_msg="設定/修改 帳號設定";

/* add new category table */
$new_cat_header="新增分類";
$new_cat_info="新分類名稱";
$submit_button_new_cat="新增分類";
$new_cat_success_msg="! 分類已新增 !";
$mod_cat_header="修改/刪除 分類";
$cat_name_header="分類名稱";
$cat_mod_header="修改分類";
$cat_del_header="刪除分類";
$submit_button_mod_cat="修改";

/* set directory permissions */
$set_dir_perms_header="設定相簿權限";
$dir_name="相簿";
$dir_perms="權限層級";
$action="執行";
$submit_button_folder="送出";
$public="公開";
$friends="好友";
$private="私人";
$new_perms_success_msg="! 權限已改變 !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="整體統計";
$stats_over_photos="在資料庫中的照片：";
$stats_over_views="總閱覽次數：";
$stats_over_albums="在資料庫中的相簿：";
$stats_over_most_alb_visists="最熱門的相本：";
$stats_over_space="已使用磁碟空間(所有相本):";
$stats_over_visitors="迄今參觀人數：";
$stats_over_users="已註冊帳號：";
$stats_top_ten="前十大熱門閱覽";
$stats_rank="名次：";
$stats_no_views="點閱次數：";
$stats_last_view="前一次閱覽時間：";
$stats_alb_name="相本名稱：";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="第一階段語法分析";
$parse_sec="第二階段語法分析";
$parse_third="第三階段語法分析";
$parse="現在正在進行語法分析";
$parsed="語法分析：";
$dirs="子目錄";
$done="全部完成...";
$not_allowed_msg="抱歉，你並未被允許執行這個指令稿！";
/* these entries are called from within admin.php */
$th_msg="一次產生你所有的預覽圖！";
$table_hint_msg="按下 開始 立刻產生所有子目錄下的所有預覽圖！";
$start_button="開始！";
$recreate_thumbs_header="重新產生所有的預覽圖";
$recreate_thums_msg="這個動作將會重新產生你所有的預覽圖！所有的統計資料將會遺失！";
$recreate_thums_warning="請確認你是否真的要重新產生所有的預覽圖，並且要刪除所有的意見，描述及統計資料！請注意，這個動作不能被復原。你確定你要繼續進行嗎？";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="選擇列印編排";
$images_page="相片/頁";
$indexprint="索引列印 (28)";
$note="<strong>注意：</strong> 在列印之前你可以調整瀏覽器中的 \"設定列印格式\"確保所有的照片都能符合列印頁面的大小！！！";
$print_button="預覽列印";
$href_check_all="選擇全部";
$href_clear_all="清除全部";
$print_error="錯誤，沒有選擇任何相！！！";
$print_mode="列印模式";
$print_image="列印相片";
$videos_msg="不能列印動態影像";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL 資料庫管理系統版本.";
$mysql_cancel="取消";
$mysql_DHTML_hint="關閉 DHTML 顯示 - 在備份完成之前你看不到任何東西。";
$mysql_select_all="選擇全部";
$mysql_deselect_all="放棄選擇全部";
$mysql_create_backup="產生備份";
$mysql_back_menu="回到主選單";
$mysql_table_checks="檢查資料表...";
$mysql_table_check="資料表檢查中";
$mysql_struct_msg="建立結構給";
$mysql_in_file_dump_msg="轉儲資料給";
$mysql_progress="全部的過程:";
$mysql_back_complete="備份工作完成於";
$mysql_back_menu_long="回到 MySQL 資料庫備份主選單";
$mysql_open_warn1="<B>警告:</B> 開啟失敗 ";
$mysql_open_warn2="寫入有問題!在目錄裡執行<BR><BR><I>CHMOD 777</I> 指令可以解決這個問題.";
$mysql_date_msg="現在時間是 "; // it follows time of the day...
$mysql_last_backup="上一次完整備份 MySQL 資料庫於： ";
$mysql_backup_hint="大體而言，備份工作並不需要在每一週進行一次以上的備份.";
$mysql_down_backup="下載上一次完整備份產生的備份檔案";
$mysql_down_backup_part="下載上一次只進行局部備份的備份檔案 ";
$mysql_down_backup_struct="下載上一次只備份表單結構的備份檔案 ";
$mysql_down_backup1="(按滑鼠右鍵，選另存目標(A)...)";
$mysql_unknown_backup="上一次的 MySQL 資料庫備份於: <I>未知</I>";
$mysql_href_recom="產生一份新的完整備份，全部插入 (建議)";
$mysql_href_standard="產生一份新的完整備份，標準插入 (較小)";
$mysql_href_partial="產生一份新的局部備份，只備份選擇的表單 (包含全部插入)";
$mysql_href_structure="產生一份新的完整備份，只備份表單結構";
$mysql_days_last="天";
$mysql_hours_last="小時";
$mysql_min_last="分鐘";
$mysql_sec_last="秒";
$ago="前"; // reads in context "some days ago"
$backup="備份";
$restore="還原";
$optimize="最佳化";
$optimize_tables="最佳化表單";
$opt_table_name="表單名稱";
$opt_table_check="檢查表單";
$opt_table_optimize="最佳化表單";
$opt_table_msg="訊息類型";
$opt_start_msg="開始檢查與最佳化資料庫裡的表格";
$fullback_hint_msg="如果你有多個資料庫，請選擇 <b>局部</b> 備份方式";
$restore_last_fullback="回存上一次的 <b>完整</b> 備份檔：";
$restore_last_partback="回存上一次的 <b>部分</b> 備份檔：";
$restore_error="錯誤！開啟備份檔時有誤。找不到檔案！";
$restore_success="回存成功！!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>禁止存取</H1> 你沒有足夠的權限來使用這個目錄');
define('STR_BACK',	'返回');
define('STR_LESS',	'less');
define('STR_MORE',	'more');
define('STR_LINES',	'lines');
define('STR_FUNCTIONLIST', '功能列表');
define('STR_EDIT',	'編輯');
define('STR_VIEW',	'檢視');
define('STR_RENAME',	'變更名稱');
define('STR_MKDIR',		'建立子目錄');
define('STR_DELETE',	'刪除');
define('STR_BOTTOM',	'最下方');
define('STR_TOP',		'最上方');
define('STR_FILENAME',	   '檔名');
define('STR_FILESIZE',	   '大小');
define('STR_LASTMODIFIED', '最後更新時間');
define('STR_SUM', '<B>%s</B> byte(s) in <B>%s</B> item(s)');
define('STR_CREATEDIRLEGEND', '建立一個新目錄');
define('STR_CREATEDIR',       '要建立的目錄名稱：');
define('STR_CREATEDIRBUTTON', '建立目錄');
define('STR_RENAMELEGEND',       '變更檔名');
define('STR_RENAMEENTERNEWNAME', '輸入新檔名給 %s:');
define('STR_RENAMEBUTTON',       '變更檔名');
define('STR_ERROR_DIR','錯誤: 無法讀取目錄內容');
define('STR_AUDIO',            '音訊');
define('STR_COMPRESSED',       '已壓縮');
define('STR_EXECUTABLE',       '可執行');
define('STR_IMAGE',            '影像');
define('STR_SOURCE_CODE',      '原始碼');
define('STR_TEXT_OR_DOCUMENT', '文字檔或文件檔');
define('STR_WEB_ENABLED_FILE', 'web-enabled file');
define('STR_VIDEO',            '視訊');
define('STR_DIRECTORY',        '目錄');
define('STR_PARENT_DIRECTORY', '上一層目錄');
define('STR_EDITOR_SAVE',      '儲存檔案');
define('STR_EDITOR_SAVE_ERROR','檔案 <I>%s</I> 為不可寫入或是不存在');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','according to the settings, you have to provide a positive hexadecimal value between 00 and FF.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','according to the settings, you have to provide a whole, positive decimal value between 0 and 255.');
define('STR_FILE_UPLOAD_NAVI_HINT', '快速導航');
define('STR_FILE_UPLOAD_DRIVES', '磁碟機:');
define('STR_FILE_UPLOAD', '上傳');
define('STR_FILE_UPLOAD_MAIN', '上傳');
define('STR_FILE_UPLOAD_DISABLED', '抱歉,在 php.ini 設定檔中禁止檔案上傳');
define('STR_FILE_UPLOAD_DESC','選擇你想要上傳的檔案. 選擇當成功上傳之後想要進行的行動.');
define('STR_FILE_UPLOAD_FILE','檔案');
define('STR_FILE_UPLOAD_TARGET','上傳檔案到');
define('STR_FILE_UPLOAD_ACTION','當上傳完畢後進行:');
define('STR_FILE_UPLOAD_NOTHING','do nothing');
define('STR_FILE_UPLOAD_DROPFILE','當所選擇的動作進行完之後刪除已上傳完畢的檔案');
define('STR_FILE_UPLOAD_MAXFILESIZE','現在設定於 php.ini 檔案中所允許的最大檔案大小(每一個檔案!)為');
define('STR_FILE_UPLOAD_ERROR',        '錯誤: 無法搬移檔案 %s 到目錄 %s');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '錯誤: 無法切換 (chdir) 到 %s 目錄. 檔案已經處理: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '錯誤: 無法刪除 %s .');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '錯誤: 上傳檔案 %s 超過 php.ini 設定檔中指定的 - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','錯誤: 上傳檔案 %s 的大小超過 HTML FORM 的設定');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '錯誤: 上傳檔案 %s 只有部分上傳完畢');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="全景觀看"; /* (img_view.php) -- new [panorama view] href  */
$close_win="關閉視窗"; /* (various files) -- javascript close window */
$nav_hint="請使用滑鼠或方向鍵進行導覽!"; /* (image_panorama_view.php) --  */
$pano_view_of="全景觀看相片"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="檢查 PHP 是否有開啟 basedir 設定..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="沒有"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="糟 糟 糟, 你設定 PHP 可以使用 \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ LinPHA 會使用 GD lib 來產生縮圖, 這可能會有些問題<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ 如果可以, 請不要設定 \"open_basedir\" 在 PHP.ini"; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ 如果可以, 請不要設定 \"open_basedir\" 在 PHP.ini 或是重新編譯 PHP 並加上 GD lib 的支援 (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="extract an *.tar.gz archive (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="extract an *.tar.bz2 archive (UNIX)"; /* (index.php) --  */
$extract_gz="使用gzip解壓縮zip檔 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="使用unzip解壓縮zip檔 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="使用pkzip解壓縮zip檔 (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! 群組已增加 !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! 群組已修改 !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! 群組已刪除 !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! 分類已修改 !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! 分類已刪除 !"; /* (admin.php) -- redirect message */
$href_groups="按此新增或修改群組"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="警告: 你已經使用你的新帳號登入!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="回到目錄管理選單"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="回到使用者管理選單"; /* (build_user_conf.php) -- navi href  */
$header_new_group="增加新群組"; /* (build_user_conf.php) -- table header */
$header_groupname="群組名稱"; /* (build_user_conf.php) -- table header */
$button_addgroup="增加群組"; /* (build_user_conf.php) -- submit button */
$header_mod_group="修改/刪除 群組"; /* (build_user_conf.php) -- table header */
$mod_group_header="修改群組"; /* (build_user_conf.php) -- table header */
$del_group_header="刪除群組"; /* (build_user_conf.php) -- table header */
$search_to_short="搜尋字串太短，最少要有兩個字元長度!"; /* (search.php) --  */
$general_thumb_size="變更閱覽大小"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<- 設定最大預覽尺寸的像素值"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="開啟/關閉 預覽邊框"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<- 設定為開啟可以為預覽圖像加上邊框"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="請選擇預覽大小"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="邊框設定"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="開啟影像邊框功能"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="關閉影像邊框功能"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Bad bad bad, you configured PHP to make use of \"safe_mode\" restrictions!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ 如果可以的話, 請不要設定 \"safe_mode\" 在 PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="允許/禁止 匿名張貼"; /* (build_general_conf.php) --  */
$general_anon_post_info="<- 允許匿名使用者加入意見"; /* (build_general_conf.php) --  */
$stats_over_comment="意見張貼數"; /* (build_stats.php) --  */
$top10_downs_href="顯示前十大熱門下載"; /* (build_stats.php) --  */
$top10_views_href="顯示前十大熱門相片"; /* (build_stats.php) --  */
$stats_head_downs="前十大熱門下載"; /* (build_stats.php) --  */
$no_downloads="下載次數"; /* (build_stats.php) --  */
$general_anon_download="開啟/關閉 匿名下載"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- 顯示/隱藏 相片的下載連結位址"; /* (build_general_config.php) --  */
$seach_multiple_select_use="要多重選擇請使用"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="分類"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="選擇相本"; /* (search.php) --  */
$search_date_from_to="日期 從 / 到"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="新密碼"; /* (build_user_conf.php) --  */
$new_user_error4="使用者名稱不可為空白"; /* (admin.php) --  */
$new_user_error5="使用者名稱已經存在"; /* (admin.php) --  */
$new_user_error1="舊密碼不正確"; /* (admin.php) --  */
$new_user_error2="新密碼與再次輸入時的密碼不一致"; /* (admin.php) --  */
$new_user_error3="電子郵件不正確"; /* (admin.php) --  */
$new_user_old_password="舊密碼"; /* (admin.php) --  */
$new_user_retype_password="再次輸入新密碼"; /* (admin.php) --  */
$select_db_header="請選擇資料庫類型"; /* (sec_stage_install.php) --  */
$mysql_info="要使用 MySQL 資料庫請選此項"; /* (sec_stage_install.php) --  */
$postgres_info="要使用 PostgreSQL 資料庫請選此項。請看"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="自動登入"; /* (toc.php) --  */
$login_autologin_user="自動登入使用者資訊"; /* (toc.php) --  */
$toc_timer="定時器"; /* (toc.php) --  */
$general_autologin="開啟/關閉 自動登入"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- 啟用此選項可以使用自動登入功能"; /* (build_general_conf.php) --  */
$general_timer="開啟/關閉 計時器"; /* (build_general_conf.php) --  */
$general_timer_info="<-- 啟用此選項可以在頁尾輸出語法解析的時間"; /* (build_general_conf.php) --  */
$login_autlogin="自動登入"; /* (login.php) --  */
$lostpw_title="遺失密碼"; /* (login.php) --  */
$lostpw_question="你遺失了密碼嗎？"; /* (login.php) --  */
$lostpw_type_user_or_email="輸入你的使用者名稱或你的 Linpha 電子郵件"; /* (login.php) --  */
$lostpw_email1="有人使用了遺失密碼功能。如果不是你的話，你只需要忽略這封訊息同時你的密碼也不會做任何變更。如果這是你發出來的要求，請輸入以下密碼到需要的欄位裡："; /* (login.php) --  */
$lostpw_email1_part2="(請記得： 這並不是你的新密碼！)"; /* (login.php) --  */
$lostpw_email1_part3="你親愛的 Linpha 管理者"; /* (login.php) --  */
$lostpw_email_error="錯誤：無法送出，請聯絡管理者."; /* (login.php) --  */
$lostpw_error_nothing_found="抱歉，沒有與你輸入的資料相符的使用者名稱或是密碼。"; /* (login.php) --  */
$lostpw_email_sent="已經寄送電子郵件給你."; /* (login.php) --  */
$lostpw_should_receive="你應該已經收到寄給你的電子郵件了，在這個欄位輸入電子郵件裡提供的密碼："; /* (login.php) --  */
$lostpw_go_back="返回"; /* (login.php) --  */
$lostpw_email2="密碼變更成功。你的新密碼是："; /* (login.php) --  */
$lostpw_email2_part2="你可以在稍後使用這個\"my settings\"連結來變更。"; /* (login.php) --  */
$lostpw_new_password="新密碼"; /* (login.php) --  */
$lostpw_successfully_changed="密碼變更成功，你等一下便會收到一封有新密碼的電子郵件."; /* (login.php) --  */
$lostpw_error_wrong_code="抱歉，輸入不正確."; /* (login.php) --  */
$lostpw_enter_correct_code="在這個欄位輸入正確的電子郵件："; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA 外掛程式"; /* (admin.php) --  */
$lang_plugins['watermark']="浮水印"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="效能測試"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="資料庫管理"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="已啟動的外掛程式"; /* (admin.php) --  */
$lang_plugins['enabled']="開啟"; /* (plugins.php) --  */
$lang_plugins['disabled']="關閉"; /* (plugins.php) --  */
$lang_plugins['update']="更新"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="外掛程式已更新"; /* (admin.php, plugins.php) --  */
$wm_wm_man="浮水印管理 "; /* (watermark.php) --  */
$wm_disable="關閉浮水印功能 "; /* (watermark.php) --  */
$wm_change_example_img="變更範例影像 "; /* (watermark.php) --  */
$wm_no_input_files_found="輸入檔案不存在 "; /* (watermark.php) --  */
$wm_image_quality="影像品質 (僅提供預覽用) "; /* (watermark.php) --  */
$wm_enable_text="開啟: 文字 "; /* (watermark.php) --  */
$wm_text="文字 "; /* (watermark.php) --  */
$wm_font="字形 "; /* (watermark.php) --  */
$wm_fontsize="字形大小 "; /* (watermark.php) --  */
$wm_fontcolor="字形顏色 "; /* (watermark.php) --  */
$wm_align="排列於 "; /* (watermark.php) --  */
$wm_pos_hor="水平位置 "; /* (watermark.php) --  */
$wm_pos_ver="垂直位置 "; /* (watermark.php) --  */
$wm_height="文字欄位高度 "; /* (watermark.php) --  */
$wm_width="文字欄位高度 "; /* (watermark.php) --  */
$wm_shadow_size="陰影大小 "; /* (watermark.php) --  */
$wm_shadow_color="陰影顏色 "; /* (watermark.php) --  */
$wm_enable_image="開啟: 影像"; /* (watermark.php) --  */
$wm_available_images="可用的影像"; /* (watermark.php) --  */
$wm_no_images_found="找不到影像檔"; /* (watermark.php) --  */
$wm_dissolve="疊化畫面"; /* (watermark.php) --  */
$wm_preview="預覽"; /* (watermark.php) --  */
$wm_linebreak="斷行"; /* (watermark.php) --  */
$wm_enable_shadow="開啟文字陰影"; /* (watermark.php) --  */
$wm_enable_rectangle="啟動長方形"; /* (watermark.php) --  */
$wm_rectangle_color="顏色"; /* (watermark.php) --  */
$wm_enable_ext_shadow="開啟延伸陰影"; /* (watermark.php) --  */
$wm_status="狀態"; /* (watermark.php) --  */
$wm_enabled="已啟動"; /* (watermark.php) --  */
$wm_disabled="已關閉"; /* (watermark.php) --  */
$wm_restore_to="回復至"; /* (watermark.php) --  */
$wm_inital_settings="初始設定"; /* (watermark.php) --  */
$wm_add_more_examples="你可以加入更多的範例影像到你的 linpha 目錄中的子目錄"; /* (watermark.php) --  */
$wm_example="範例"; /* (watermark.php) --  */
$wm_shadow_fontsize="陰影字形大小"; /* (watermark.php) --  */
$wm_settings_for_both="影像與文字的設定"; /* (watermark.php) --  */
$wm_center="中央"; /* (watermark.php) --  */
$wm_north="上方"; /* (watermark.php) --  */
$wm_northeast="上右方"; /* (watermark.php) --  */
$wm_northwest="上左方"; /* (watermark.php) --  */
$wm_south="下方"; /* (watermark.php) --  */
$wm_southeast="下右方"; /* (watermark.php) --  */
$wm_southwest="下左方"; /* (watermark.php) --  */
$wm_east="右方"; /* (watermark.php) --  */
$wm_west="左方"; /* (watermark.php) --  */
$bm_file_err="錯誤，沒有指定檔案";
$bm_var_err="錯誤，請檢查輸入變數";
$bm_notfound_err="錯誤，檔案不存在";
$bm_noimg_err="錯誤，檔案不是影像檔";
$bm_tmpfile_err="錯誤，當產生暫存影像檔時";
$bm_tmpfile_warn="警告：暫存影像檔不能被刪除";
$bm_time_total="總計執行時間: ";
$bm_img_sec="每秒鐘影像數: ";
$bm_avg_img="每一個影像的平均時間 (滑鼠移過就會進行影像大小更新): ";
$bm_qual_size="品質/大小";
$bm_quality="品質: ";
$bm_height="高度: ";
$bm_width="寬度: ";
$bm_size="影像大小: ";
$bm_create = "以選取的影像轉換工具進行效能測試";
$bm_interval = "間格";
$bm_calc = "計算了";
$bm_img = "張影像";
$bm_inloop="執行次數";
$bm_qual_range="品質範圍: ";
$bm_size_range="大小範圍 (僅指高度): ";
$bm_repeats="重複次數: ";
$bm_con_util="請選擇影像轉換工具: ";
$bm_current_settings="現行設定"; /* (benchmark.php) --  */
$bm_preview="預覽"; /* (benchmark.php) --  */
$bm_save_settings="儲存設定"; /* (benchmark.php) --  */
$wm_addexamples="浮水印: 增加更多的浮水印影像"; /* (watermark.php) --  */
$wm_addimg="浮水印: 增加更多的浮水印影像"; /* (watermark.php) --  */
$wm_addfont="浮水印: 增加更多的字型"; /* (watermark.php) --  */
$wm_colorsetting="浮水印: 顏色設定"; /* (watermark.php) --  */
$comment_hint="建議: 點擊最上方或最下方的相片以捲動相本"; /* (linpha_comments.php) --  */
$comment_end="相本中已無任何照片"; /* (linpha_comments.php) --  */
$comment_beginning="相本中已無前一張照片"; /* (linpha_comments.php) --  */
$comment_back="回到相片檢視"; /* (linpha_comments.php) --  */
$comment_edit_img="編輯 分類/意見"; /* (linpha_comments.php) --  */
$comment_change_img_details="變更影像的詳細說明"; /* (linpha_comments.php) --  */
$comment_last_comments="上一則意見"; /* (linpha_comments.php) --  */
$comment_comment_by="意見來自"; /* (linpha_comments.php) --  */
$category_delete_warning="警告： 分類已存在，重複指定將會失去照片"; /* (build_category_conf.php) --  */
$pass_2_short="錯誤，密碼長度最少要3位數..."; /* (various) --  */
$album_edit="編輯相本說明"; /* (linpha_comments.php) --  */
$album_details="相本的詳細說明"; /* (linpha_comments.php) --  */
$wm_save_note="注意：註冊使用者不會看到浮水印！.. 你必須先登出 (成為一般訪客) 才能在瀏覽 LinPHA 時看到你的浮水印！"; /* (watermark.php) --  */
$lang_plugins['guestbook']="訪客留言"; /* (admin.php) --  */
$print_low_quality="低品質"; /* (printing_view.php) --  */
$print_high_quality="高品質 (較慢!)"; /* (printing_view.php) --  */
$gb_title="LinPHA 訪客留言";
$gb_sign="LinPHA 訪客留言！ 加入新留言";
$gb_from="來自";
$gb_from_no="未提供來自何處";
$gb_pages="頁";
$gb_messages="個訊息在訪客留言中";
$gb_msg_error="抱歉，名字與意見不可以為空白";
$gb_new_msg="加入新留言";
$gb_name="名字";
$gb_email="電子郵件";
$gb_hp="首頁";
$gb_country="訪客來自 (國家)";
$gb_header="LinPHA 訪客留言本";
$gb_opts="訪客留言本選項";
$gb_rows="每一頁的留言數";
$gb_anon="允許匿名使用者在訪客留言本中張貼留言";
$gb_order="留言的顯示順序";
$wm_resize="浮水印永遠以影像大小的 X% 比例顯示"; /* (watermark.php) --  */
$wm_help_and_descr="說明與描述"; /* (watermark.php) --  */
$folder_remove_hint="如果一切都沒問題，你現在可以移除 /install 這個子目錄 (安全因素)..."; /* (forth_stage_install.php) --  */
$add_alb_com="新增相本註解"; /* (img_view.php) --  */
$add_img_com="新增影像意見"; /* (img_view.php) --  */
$album_com="相本註解"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML 格式標籤"; /* (various) --  */
$stat_cache_elements="已快取元件"; /* (build_stats.php) --  */
$stat_cache_first="新快取元件"; /* (build_stats.php) --  */
$stat_cache_hits="快取命中"; /* (build_stats.php) --  */
$stat_cache_hits_max="最大快取命中 (單一影像)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="平均快取命中 (所有影像)"; /* (build_stats.php) --  */
$stat_cache_size="快取大小"; /* (build_stats.php) --  */
$stat_cache_convert_time="快取加速時間"; /* (build_stats.php) --  */
$stat_cache_size="快取已使用的記憶體大小"; /* (build_stats.php) --  */
$cache_options="影像快取選項";
$cache_max_size="最大快取大小為多少位元組 (0 = 無限制)";
$path_2_cache="快取目錄 (預設為 /sql/cache)";
$cache_optimize="最佳化/清除 影像快取資料"; 
$cache_maintain="影像快取維護";
$cache_opt_msg="!! 快取已經最佳化 !!";
$lang_plugins['cache']="影像快取"; /* () --  */
$stat_cache_title="影像快取統計"; /* (cache.php) --  */
$bm_saved="設定已儲存"; /* (admin.php) --  */
$cache_optimize_by_size="刪除所有快取元件大小 (以 kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="刪除所有快取元件多少天之內未使用:"; /* (cache.php) --  */
$elements_rem="元件已移除"; /* (cache.php) --  */
$general_anon_album_downs="允許/禁止 匿名壓縮相本下載"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- 允許匿名使用者下載壓縮的相本"; /* (build_general_conf.php) --  */
$general_download_speed="設定下載速度限制為多少 kb/sec (0=無限制)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- 設定相本下載時的下載速度限制"; /* (build_general_conf.php) --  */
$general_navigation="開啟/關閉 導覽列"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- 啟動導覽列於縮圖頁"; /* (build_general_conf.php) --  */
$toc_navigation="開啟/關閉 導覽列"; /* (doc/) --  */
$toc_zip_download="開啟/關閉 匿名使用者下載相本"; /* (doc/) --  */
$toc_albdownlimit="下載速度限制"; /* (doc/) --  */
$choose_zips_msg="選擇要下載的相片"; /* (build_zip_view.php) --  */
$zip_button="下載檔案"; /* (build_zip_view.php) --  */
$type_of_archive="選擇下載檔案類型"; /* (build_zip_view.php) --  */
$create_tar="產生 tar 檔案"; /* (build_zip_view.php) --  */
$create_tgz="產生 tar.gz 檔案"; /* (build_zip_view.php) --  */
$create_bz2="產生 tar.bz2 檔案"; /* (build_zip_view.php) --  */
$create_zip="產生 zip 檔案"; /* (build_zip_view.php) --  */
$create_rar="產生 rar 檔案"; /* (build_zip_view.php) --  */
$menumsg['advanced']="先進功能選項"; /* () --  */
$menumsg['printmode']="列印模式"; /* () --  */
$menumsg['printprobs']="關閉列印?"; /* () --  */
$menumsg['downloadmode']="下載模式"; /* () --  */
$menumsg['mailmode']="郵寄模式"; /* () --  */
$menumsg['addcomment']="新增相本說明"; /* () --  */
$menumsg['delcomment']="刪除相本說明"; /* () --  */
$menumsg['editcomment']="編輯相本說明"; /* () --  */
$album_up="已更新"; /* (album_comment.php) --  */
$album_ins="已插入"; /* (album_comment.php) --  */
$mail_link="郵寄名單"; /* (header.php) --  */
$mail_title="LinPHA 郵寄名單"; /* (mail.php) --  */
$mail_send_link="傳送郵件"; /* (mail.php) --  */
$mail_return_address="返回郵件位址:"; /* (mail.php) --  */
$mail_block="郵件區塊大小:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="郵寄名單選項"; /* (mail.php) --  */
$mail_go_back="Go Back"; /* (various mail plugin files) --  */
$mail_form_title="電子郵件訊息"; /* (mail_form.php) --  */
$mail_form_subject="主旨:"; /* (mail_form.php) --  */
$mail_form_msg="訊息:"; /* (mail_form.php) --  */
$mail_total_sent="傳送的電子郵件共計:"; /* (mail_form.php) --  */
$mail_subscribe="訂閱/subscribe"; /* (mail_users.php) --  */
$mail_unsubscribe="解除訂閱/Unsubscribe"; /* (mail_users.php) --  */
$mail_activate="啟動"; /* (mail_users.php) --  */
$mail_user_name="你的名字:"; /* (mail_users.php) --  */
$mail_user_email="你的電子郵件:"; /* (mail_users.php) --  */
$mail_user_email_confirm="確認電子郵件:"; /* (mail_users.php) --  */
$mail_user_code="啟動碼:"; /* (mail_users.php) --  */
$mail_user_code_sent="一封帶有啟動碼的電子郵件已經寄送到你的電子郵件帳號中."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA 郵寄名單啟動"; /* (mail_users.php) --  */
$mail_user_activated="你的帳號已經被啟動!"; /* (mail_users.php) --  */
$mail_user_activate_error="在啟動你的帳號時發生錯誤!"; /* (mail_users.php) --  */
$mail_user_email_not_found="並不存在於我們的郵寄名單中."; /* (mail_users.php) --  */
$mail_user_remove_ok="已經從我們的郵寄名單中移除."; /* (mail_users.php) --  */
$mail_user_remove_fail="無法從我們的郵寄名單中移除."; /* (mail_users.php) --  */
$mail_user_empty="請填入所有欄位."; /* () --  */
$mail_user_no_match="電子郵件不符."; /* () --  */
$mail_user_exists="電子郵件已存在於我們的郵寄名單."; /* (mail_users.php) --  */
$lang_plugins['mail']="郵寄名單"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="提示"; /* (mail.php) --  */
$mail_user_permission="所有在群組 'mail' 中的使用者都可以傳送訊息到郵寄名單."; /* (mail.php) --  */
$mail_current_subscribers="現有訂戶"; /* (mail.php) --  */
$mail_name="名字"; /* (mail.php) --  */
$mail_mail="電子郵件"; /* (mail.php) --  */
$mail_subscribing_date="訂閱日期"; /* (mail.php) --  */
$mail_active="啟動"; /* (mail.php) --  */
$mail_sent_to="傳送電子郵件給"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="雜項說明"; /* () --  */
$mail_create_group="(你要產生屬於你自己的 'mail' 群組.)"; /* (mail.php) --  */
$alb_th="子目錄在相本"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '一月','2' => '二月','3' => '三月','4' => '四月','5' => '五月','6' => '六月','7' => '七月','8' => '八月','9' => '九月','10' => '十月','11' => '十一月','12' => '十二月'); /* abrevations of months */
$arr_month_long = Array('1' => '一月','2' => '二月','3' => '三月','4' => '四月','5' => '五月','6' => '六月','7' => '七月','8' => '八月','9' => '九月','10' => '十月','11' => '十一月','12' => '十二月'); /* months */
$arr_day_short = Array('星期天','星期一','星期二','星期三','星期四','星期五','星期六'); /* abrevations of weekdays */
$arr_day_long = Array('星期天','星期一','星期二','星期三','星期四','星期五','星期六'); /* weekdays */
$layout="版面編排設定";
$features="功能特色設定";
$perform="效能設定";
$general_comment_in_subfolder = '啟動/關閉 子目錄中的相本說明';
$general_comment_in_subfolder_info = '<-- 在預覽子目錄中顯示相本說明';
$general_default_date_format = '預設日期格式';
$general_default_date_format_info = '<- 範例: 06/28/2004, 檢視詳細資訊';
$general_default_time_format = '預設時間格式';
$general_default_time_format_info = '<- 範例: 01:45:50 PM, 檢視詳細資訊';
$general_new_images_folder = '虛擬 "新相片" 目錄';
$general_new_images_folder_info = '<- 顯示一個包含新加入相片的虛擬目錄';
$general_new_images_folder_age = '多久以內的相片放在"新相片" 目錄';
$general_new_images_folder_age_info = '<- 顯示最多幾天內的新相片';
$control_key="Ctrl"; /* (various) --  */
$search_date="日期"; /* (search.php) -- reads: date from to... */
$search_from="從"; /* (search.php) -- reads: date from to... */
$search_to="到"; /* (search.php) -- reads: date from to... */
$start_slide="開始幻燈片顯示"; /* (img_view.php) --  */
$pass_msg="你已經可以用新密碼來登入"; /* (build_my_settings.php) --  */
$str_new_images = "新相片"; /* (new_images.php) -- */
$str_order_by = "排序由"; /* (new_images.php) -- */
$str_age = "時間"; /* (new_images.php) -- */
$str_album = "相本"; /* (new_images.php) -- */
$str_in_album = "在哪個相本"; /* (new_images.php) -- */
$str_img_newer_than = "所有相片都是在 %s 天內新增的"; /* (new_images.php) -- */
$timespanfmt = "%s days, %s hours, %s minutes and %s seconds"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="刪除所有有浮水印的快取影像"; /* (watermark.php) --  */
$str_error_changing_perm="錯誤, 檔案權限不能被變更! (或許你沒有這個權限)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="變更權限:"; /* (plugins/ftp/index.php) --  */
$str_read="讀"; /* (plugins/ftp/index.php) --  */
$str_write="寫"; /* (plugins/ftp/index.php) --  */
$str_execute="執行"; /* (plugins/ftp/index.php) --  */
$str_owner="擁有者"; /* () --  */
$str_group="群組"; /* (plugins/ftp/index.php) --  */
$str_all_other="All others"; /* (plugins/ftp/index.php) --  */
$str_copy="複製"; /* (plugins/ftp/index.php) --  */
$str_copy_to="複製 %s 到:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="更名 %s 到:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="無法旋轉影像"; /* (img_view.php) --  */
$str_no_write_perm="無寫入權限"; /* (img_view.php) --  */
$str_new_images_in_these_folders="新相片是在以下相本中所找到的:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="如果你要重新安裝 LinPHA, 你要先刪除以下檔案 ./sql/db_connect.php! (你可以使用整合在管理選項中的檔案管理功能來刪除此檔)"; /* (install_header.php) --  */
$str_Version="版本"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="錯誤: 在你的PHP設定中並未支援這種資料庫"; /* (sec_stage_install.php) --  */
$str_extract_with="當上傳完畢, 解壓縮檔案用"; /* (ftp/index.php) --  */
$str_files_to_upload="要上傳的檔案"; /* (ftp/index.php) --  */
$posix_check_msg="查驗 POSIX 支援..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="你所安裝的PHP中已有支援POSIX. 在整合的檔案管理工具中所有的功能都能使用."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="你所安裝的PHP中沒有支援POSIX. 在整合的檔案管理工具中有些功能無法使用(特別是變更檔案權限時)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="錯誤: 無法儲存設定. 請確認你的路徑是否拼寫正確而且你具有寫入這個目錄的權限."; /* (admin.php) --  */
$str_create_archive="產生 %s 檔案"; /* (build_zip_view.php) --  */
$str_download_error="錯誤! 因為某些原因無法開始下載, 抱歉"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="搜尋所有相片共使用 %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="如果在載入時會浪費太多時間, 請嘗試用較低的解析度:"; /* (image_panorama_view.php) --  */
$str_current_resolution="現在的解析度:"; /* (image_panorama_view.php) --  */
$href_group_conf="群組管理"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_group_conf="群組管理"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="工具:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="外掛"; /* (plugin.php) --  */
$choose_mail_msg="選擇要郵寄的相片"; /* () --  */
$new_user_full_name="全名"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="啟動/關閉 前/後 迷你影像顯示為大型縮圖"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- 啟動在檢視相片時在底部顯示大型縮圖"; /* (build_general_conf.php) --  */
$href_category_conf="分類管理"; /* (admin.php) --  */
$cat_private="私人"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="加入更多應用程式"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="查驗有效的會談設定..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="會談設定是正確的."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="會談設定不正確."; /* (sec_stage_install.php) --  */
$session_miss_msg="會談設定不正確. 你必須在php.ini中更正以上的錯誤否則待會 LinPHA 將無法正常工作!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="所有的會談設定都正確. LinPHA 可以正常無誤的工作."; /* (sec_stage_install.php) --  */
$new_user_error6="錯誤: 你是用你自己的帳號嗎?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="最後觀看的頁面:"; /* (index.php) --  */
$str_select_row="選擇本行"; /* (basket.php) --  */
$str_select="選擇"; /* (basket.php) --  */
$str_new_window="新視窗"; /* (basket.php) --  */
$general_anon_mail_mode="允許/禁止 匿名使用者使用郵寄模式"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- 允許匿名使用者可以郵寄相片"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="郵寄模式: 最大郵件大小"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- 最大大小為多少位元組"; /* (build_general_conf.php) --  */
$general_thumbnail_view="縮圖檢視"; /* (build_general_conf.php) --  */
$general_image_view="影像檢視"; /* (build_general_conf.php) --  */
$general_ado_msg="開啟/關閉 SQL 查詢快取"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- 如果 SQL server 太慢或是無 PHP 加速器可用的話請開啟此選項"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL 查詢快取時間:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- 以分鐘為單位設定最大快取時間"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL 查詢快取的路徑:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- 將查詢快取資料儲存在何處"; /* (build_general_conf.php) --  */
$str_other_features="其他功能"; /* (build_general_conf.php) --  */
$str_language_settings="語系設定"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL 查詢快取"; /* (build_general_conf.php) --  */
$general_thumb_border="縮圖外框尺寸的像素值"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 設定為0則關閉, 預設: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="縮圖外框顏色"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- 檢視詳細資訊"; /* (build_general_conf.php) --  */
$str_recipient="收件者"; /* (basket_mail.php) --  */
$str_sender="寄件者"; /* (basket_mail.php) --  */
$str_mail_too_big="錯誤: 此電子郵件太大.<br /><br />允許的檔案大小為: %sBytes. 你所選擇的相片共使用了 %sBytes.<br /><br />請移除一些相片或是使用下載壓縮相本功能!"; /* (basket_mail.php) --  */
$str_size_of_email="電子郵件大小: %s."; /* (basket_mail.php) --  */
$str_new_search="重新搜尋"; /* (search.php) --  */
$str_edit_search="編輯搜尋"; /* (search.php) --  */
$str_View="觀看"; /* (img_view.class.php) --  */
$str_normal="一般"; /* (img_view.class.php) --  */
$str_detail="詳細"; /* (img_view.class.php) --  */
$search_result_empty="抱歉, 你的搜尋並未找到任何相符的內容"; /* (search.php) --  */
$str_chars_entered="characters entered"; /* (img_view.class.php) --  */
$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="開啟/關閉 首頁的隨機相片"; /* () --  */
$general_random_image_info="<-- 啟用此選項會在首頁顯示隨機相片"; /* () --  */
$general_random_image_size="首頁隨機相片的最大尺寸"; /* () --  */
$general_random_image_size_info="<-- 以像素(pixel)來設定相片最大尺寸"; /* () --  */
$str_edit_watermark="編輯浮水印"; /* (watermark.php) --  */
$str_edit_permissions="編輯浮水印權限"; /* () --  */
$str_Everyone="每個人"; /* () --  */
$str_Nobody="無人"; /* () --  */
$str_only_logged_in_users="只有已經登入的使用者"; /* () --  */
$str_except_these_groups="除了這些群組:"; /* () --  */
$str_additionally_groups="除了這些群組:"; /* () --  */
$str_allow_these_persons="對這些 使用者/群組 不需要使用浮水印"; /* () --  */
$str_album_based_permissions="相本基本權限"; /* () --  */
$str_all_albums_but_without_these="所有相本, 除了這些:"; /* () --  */
$str_only_on_these_albums="只有這些相本:"; /* () --  */
$str_allow_these_persons="允許這些人"; /* (db_api.php) --  */
$str_no_watermarks="對這些人不需要使用浮水印"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="The default setting is 'Logged in users only' AND 'All albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA will probably NOT work correctly"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="嘗試建立影片的預覽圖"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--如果你在嘗試建立影片的預覽圖時遇到問題的話請關閉此選項"; /* (build_generl_config.php) --  */
$general_update_notice="開啟/關閉 LinPHA 更新檢查"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- 啟動每週檢查一次是否有可用的更新版本"; /* (build_general_config.php) --  */
$large="大"; /* (build_general_config) -- selectfield for mini images size */
$directories="目錄"; /* (build_thumbnail_conf.php) --  */
$do_nothing="不變更"; /* (build_thumbnail_conf.php) --  */
$create="建立"; /* (build_thumbnail_conf.php) --  */
$recreate="重新建立"; /* (build_thumbnail_conf.php) --  */
$recreate="重新建立"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF 資訊於config中設定關閉"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC 資訊於config中設定關閉"; /* (build_thumbnail_conf.php) --  */
$silent_mode="靜默模式 (使用靜默模式不會列出除錯訊息)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="預覽圖"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA 記錄器"; /* (log.php) --  */
$log_options="LinPHA 記錄器選項"; /* (log.php) --  */
$log_method_label="紀錄到:"; /* (log.php) --  */
$str_extra_headers="更多的檔頭"; /* (log.php) --  */
$str_log_events['login']="使用者登入"; /* (log.php) --  */
$str_log_events['thumbnail']="預覽圖產生"; /* (log.php) --  */
$str_log_events['update']="更新"; /* (log.php) --  */
$str_log_events['db']="資料庫"; /* (log.php) --  */
$str_log_events['filemanager']="檔案管理"; /* (log.php) --  */
$str_events="事件"; /* (log.php) --  */
$find_duplicates="於相本中找出重複的相片"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="在PHP設定檔中並未開啟這項功能 (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="警告"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="預覽圖將被刪除"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="所有統計資料將被刪除"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="隨機首頁相片"; /* (build_general_conf.php) --  */
$str_download_images="下載單一相片"; /* (build_perms.php) --  */
$str_add_image_comments="加入相片意見"; /* (build_perms.php) --  */
$str_add_image_description="加入相片描述與分類"; /* (build_perms.php) --  */
$str_mail_add_all_users="將所有的linpha使用者加入這份郵寄名單"; /* (plugins/mail.php) --  */
$str_note_upload="<b>Note:</b> You don't have to upload your images through this form. You can use whatever you want (ftp,scp,nfs,local,...). Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="黑名單選項 (SPAM 封鎖)"; /* (varios) --  */
$blacklist_onoff="啟動留言過濾"; /* (varios) --  */
$blacklist_keywords="封鎖字:"; /* (varios) --  */
$str_entire_path="整體路徑"; /* (search.php) --  */
$mail_format="郵寄格式:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (相片以附件傳送)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (線上相片)"; /* (basket_mail.php) --  */
$mail_toggle_active="切換啟動狀態"; /* (mail.php) --  */
$statistics="統計"; /* (various) --  */
$stats_total_images="相片總數"; /* () --  */
$stats_total_img_views="相片閱覽總數"; /* () --  */
$stats_total_img_downs="相片下載總數"; /* () --  */
$stats_total_img_downs="相片下載總數"; /* () --  */
$stats_total_img_selected="選擇式相片閱覽總數"; /* () --  */
$stats_total_downs_selected="選擇式相片下載總數"; /* () --  */
$stats_downloads="下載次數"; /* () --  */
$stats_downl_size="下載大小"; /* () --  */
$stats_coments_total="意見總數"; /* () --  */
$stats_coments_sel="已選擇意見"; /* () --  */
$str_log_events['guestbook']="訪客留言"; /* (log.php) --  */
$stats_realtime="開啟/關閉 即時統計"; /* (build_stats.php) --  */
$stats_realtime_info="<-- 即時顯示所有的統計資訊 (無快取)"; /* (build_stats.php) --  */
$stats_cache_time="快取時間統計"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="使用者"; /* (stats_view.php) --  */
$stats_image_info="相片"; /* (stats_view.php) --  */
$stats_comments_info="意見"; /* (stats_view.php) --  */
$stats_general_info="一般"; /* (stats_view.php) --  */
$spam_blocked="已封鎖SPAM攻擊"; /* () --  */
$mail_current_status="現在狀態"; /* (mailing.php) --  */
$mail_sending_to="傳送給: "; /* (mailing.php) --  */
$mail_counters="計數器 (成功/失敗/全部)"; /* (mailing.php) --  */
$mail_send_fail="傳送失敗: "; /* (mailing.php) --  */
$mail_send_ok="傳送成功: "; /* (mailing.php) --  */
$mail_all_complete="全部完成!"; /* (mailing.php) --  */
$mail_failed_list="傳送郵件失敗列表"; /* (mailing.php) --  */
$mail_ok_list="傳送郵件成功列表"; /* (mailing.php) --  */
$mail_mailer_error=" - 郵件錯誤: "; /* (mailing.php) --  */
$str_log_events['comments']="意見輸入"; /* (log.php) --  */
$str_edit_members="編輯成員"; /* (build_user.conf.php) --  */
$edit_groups="編輯群組"; /* (build_user.conf.php) --  */
$str_basket="Basket"; /* (various) --  */
$lang_plugins['log']="記錄器"; /* (admin.php) --  */
$rss_created="XML RSS 檔案成功建立"; /* () --  */
$rss_not_created="RSS has not been built, because no change has been found"; /* () --  */
$rss_settings_saved="RSS 設定已儲存"; /* () --  */
$lang_plugins['stats']="統計"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="無浮水印"; /* () --  */
$str_with_watermarks="有浮水印"; /* () --  */
$str_create_cache_img="建立快取影像"; /* () --  */
$str_reset_button="重置"; /* () --  */
$cache_stats="影像快取統計"; /* () --  */
$drop_duplicates="丟棄重複照片"; /* () --  */
$general_exif_rotate="啟動/關閉照片自動旋轉功能"; /* () --  */
$general_exif_rotate_info="<-- 經由EXIF資料自動旋轉照片"; /* () --  */
$lang_plugins['maps']="Google/Yahoo Maps"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo Maps 設定"; /* () -- maps plugin */
$maps_setup_yahoo_id="你的 Yahoo 應用 ID"; /* (maps plugin) --  */
$maps_setup_google_key="你的 Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="抱歉 - 這個外掛需要最低 PHP 版本為 4.2.0 或更新的. 請更新 PHP"; /* (maps plugin) --  */
$maps_select_type="請選擇地圖類型:"; /* (maps plugin) --  */
$maps_select_type_info="<-- 選擇要使用 Google 或 Yahoo 地圖"; /* (maps plugin) --  */
$maps_select_display_type="請選擇地圖顯示類型:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- 顯示 混和, 衛星 或 一般地圖"; /* (maps plugin) --  */
$maps_zoom_level="預設縮放比例: 1-16 (預設為 16, 世界地圖)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- 設定地圖預設的縮放比例"; /* (maps plugin) --  */
$maps_zoom_location="預設觀看的中點位置"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- 地圖中點的預設位置"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google 地圖的控制大小"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- 調整 Google 地圖滑動與平移的大小"; /* (maps plugin) --  */
$maps_str="地圖"; /* (maps plugin) --  */
$map_type_ctrl="啟動地圖類型控制"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- 顯示地圖上的地圖類型控制"; /* (maps plugin) --  */
$map_slide_ctrl="啟動地圖滑動控制"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- 顯示地圖上的地圖滑動控制"; /* (maps plugin) --  */
$map_pan_ctrl="啟動地圖平移控制"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- 顯示地圖上的地圖平移控制"; /* (maps plugin) --  */
$map_auto_popup="啟動標示自動跳出功能"; /* (maps plugin) --  */
$map_auto_popup_info="<-- 當滑鼠移過時自動跳出標示"; /* (maps plugin) --  */
$map_album_add="新增相本"; /* (maps plugin) --  */
$map_marker_del="刪除標示"; /* (maps plugin) --  */
$map_search_location="搜尋/新增 位置"; /* (maps plugin) --  */
$map_location_here="你現在的位置"; /* (maps plugin) --  */
$map_search_loc_button="搜尋位置"; /* (maps plugin) --  */
$map_add_location="新增位置"; /* (maps plugin) --  */
$map_assign_album="指派相本到地圖位置"; /* (maps plugin) --  */
$general_ignored_files="收藏中要忽略的檔案"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- 要忽略的檔案files to ignore (用 , (逗號)分隔)"; /* (build_general_config.php) --  */
$general_ignored_fileext="收藏中要忽略的附屬檔名"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- 要忽略的附屬檔名 (用 , (逗號)分隔)"; /*(build_general_config.php) --  */
?>