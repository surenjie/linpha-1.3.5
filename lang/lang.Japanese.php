<?php
/* Sync EN-Revision: 1.243 */
/* language file */
/* Feel free to modify this file to make use of your native language.
If you do so, please save it as lang.YourLanguage.php in the LinPHA /lang dir
and PLEASE mail me a copy! mailto:bzrudi@tuxpower.de */

/*#################################################
## linpha messages
#################################################*/
/* left menu */
$album="自分の写真書庫";

/* alerts */
$alert_fopen="エラー! ファイルを開くことが出来ません......";
$printing_probs="印刷の問題";
$printing_probs_msg="印刷は無効です! 参照:";

/* global messages */
$subfolders="サブフォルダー";
$img_th="写真一覧";
$in_th="フォルダー:"; /* used for the photos in $foldername */
$alb_th="アルバム中のサブフォルダー";
$thumb_hint_msg="クリックで詳細表示";
$latest_photo="最新";
$view_at="表示形式";
$close_button="閉じる";
$help="ヘルプ";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="ようこそ LinPHA へ";
$welc_text="こんにちは。これは、LinPHA で知られる &quot;The Linux Photo Archive&quot; のホームです。
			あなたは初めて LinPHA を実行しているように見えます。あなたはインストーラーを実行する必要があります!";
$welc_hint="<b>続ける前に:</b>";
$welc_hint1="ディレクトリ &quot;<b>linpha/sql</b>&quot; をワールドライタブルにしてください!
			(例えば chmod 777 sql)";
$next_button="続ける"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA インストール"; /* used as left menu header in all 4 stages */
$inst_status_1="言語を選択して&quot;続ける&quot;をクリックしてください。";
$inst_status_step1="ステップ 1/4";

/* sec_stage_install (page 2) */
$inst_access_msg="データベースアクセスタイプの構成";
$inst_full_access_msg="<b>はい !</b><br> わたしは MySQL データベースにフルアクセスの権限をもっています。私は新規データベースと新規ユーザーの作成が許可されています。言いかえればこれは私のサーバーです!";
$inst_limited_access_msg="<b>いいえ !</b><br> 私は MySQL データベースへのアクセスは限定された権限をもっています。私の ISP は、新しいデータベースあるいはユーザーの生成を許可していません。";
$inst_status_2="SQL アクセスタイプを選択してください。分からないときは &quot;いいえ&quot; を選んでください!";
$inst_status_step2="ステップ 2/4";

/* requirements */
$req_check_msg="システム要求を調査中";
$req_found_msg="OK 発見しました";
$req_miss_msg="見つけられません";
$req_safe_fail="有効";
$req_safe_ok="無効";
$php_safemode_check_msg="PHP セーフモードを調査中...";
$php_version_check_msg="PHP バージョン 4.1.0 以上か調査中...";
$mem_check_msg="PHP メモリ制限調査中...";
$gd_check_msg="GD ライブラリを調査中...";
$convert_check_msg="ImageMagick を調査中...";
$exif_check_msg="EXIF サポートを調査中...";
$summary_msg="要約:";
$safe_mode_err="あなたのサーバーの PHP は PHP safe_mode に設定されています。LinPHA は php.ini で safe_mode が有効では動作しないでしょう !";
$inst_abort_msg="!!! インストールを中止しました。 !!!";
$php_version_err="あなたのサーバーは PHP 4.1.0 未満が実行されています。PHP をアップグレードしない限り、LinPHA は動作しません。";
$gd_convert_err="ImageMagick も GD ライブラリも見つけられませんでした。それらのうちの 1 つをインストールしない限り、LinPHAは動作しません。";
$convert_sum_found_msg="ImageMagick がこのサーバーに見つかりました。これは、LinPHA が高品質なサムネイルを作成することを可能にします。";
$convert_sum_miss_msg="このサーバーで ImageMagick が見つかりません。低品質のサムネイルを返すでしょう。";
$exif_sum_found_msg="EXIF をサポートする PHP がインストールされています。これは、LinPHA が詳細な写真情報を表示することを可能にします。";

/* TODO (change this one)
$exif_sum_miss_msg="exif をサポートしない PHP がインストールされています。これは、LinPHA が詳細な写真情報を表示することを防ぐでしょう。";
to ==>*/
$exif_sum_miss_msg="exif をサポートしない PHP がインストールされています。Going to make
			use of the LinPHA included EXIF parser instead.";
/* TODO next 3 */
$session_path_check_msg="session_safe_path の調査中...";
$session_path_found_msg="セッションを保存するパスが php.ini に設定されています。LinPHA ログインは適切に動作するはずです。パスは次のものにセットされます:";
$session_path_miss_msg="session_save_path の値が設定されていません。 You MUST set session_save_path
			in php.ini or you will NOT be able to be login later!!";
$mem_limit_ok_msg="PHP のメモリ制限が 16MB 以上です。サムネイル作成に問題ないはずです。";
$mem_limit_low_msg="PHP のメモリ制限が 16MB 未満です。If you encounter problems
			with missing thumbnails, try to increase the memory_limit in php.ini or resize your
			pictures to a lower resolution and try again...";
$choose_def_quali="写真のデフォルトをクオリティを選択";
$choose_def_quali_warn="あなたの CPU が 1GHz 未満なら設定高品質に設定しません(非常に CPU 負荷が高いです)";

/* third_stage_install (page 3) */
$inst_superadmin_header="MySQL データベース管理設定";
$inst_superadmin_name="MySQL データベース管理者名:";
$inst_superadmin_name_info="&lt;-MySQL データベースの管理者名 (データベース中に存在しているはずです)";
$inst_superadmin_pass="MySQL データベース管理者パスワード:";
$inst_superadmin_pass_info="&lt;-MySQL 管理者のパスワード (データベース中に存在しているはずです)";

$inst_admin_header="LinPHA 管理者設定";
$inst_admin_name="LinPHA 管理者名:";
$inst_admin_name_info="&lt;-LinPHA 管理者名";
$inst_admin_pass="LinPHA 管理者パスワード:";
$inst_admin_pass_info="&lt;-the LinPHA 管理者パスワード";
$inst_admin_email="管理者電子メール:";
$inst_admin_email_info="&lt;-管理者の電子メールアドレスを設定する";

$inst_db_header="LinPHA データベース接続設定";
$inst_db_host="ホスト名:";
$inst_db_host_info="&lt;-ホスト名: 代表的には &quot;localhost&quot; です";
$inst_db_host_info2="&lt;-ホスト名: MySQL データベースホスト名";
$inst_db_host_port="ポート番号:";
$inst_db_host_port_info="&lt;-ポート番号: 不確実な場合、そのまま残します";
$inst_db_name="LinPHA データベース名:";
$inst_db_name_info="&lt;-LinPHA のためのデータベース名。, 代表的には &quot;linpha&quot; です";
$inst_db_name2="データベース名:";
$inst_db_name_info2="&lt;-ISP から与えられたデータベース名";
$inst_table_prefix="すべての LinPHA テーブルで使用する接頭語";
$inst_table_prefix_info="&lt;-すべての LinPHA テーブルで使用する接頭語";

$general_header="一般オプション設定";
$general_album_title="フォトアルバムのタイトル";
$general_album_title_info="&lt;-未記入でなくすとデフォルト名として使う";
$general_photos_row="表示する行数:";
$general_photos_row_info="&lt;-i.e. サムネイル表示の行数";
$general_photos_col="表示する列数:";
$general_photos_col_info="&lt;-i.e. サムネイル表示の列数";
$general_photos_width="詳細な写真表示サイズ (幅):";
$general_photos_width_info="&lt;- 512 (デフォルトサイズ)";
$general_photos_height="詳細な写真表示サイズ (高さ):";
$general_photos_height_info="&lt;- 384 (デフォルトサイズ)";
$general_img_quality="詳細な写真のクオリティ:";
$general_img_quality_info="&lt;- 画像品質の調整 0-100 (デフォルト 75)";

$inst_status_3="すべての項目を入力してください!";
$inst_status_step3="ステップ 3/4";

/* forth_stage_install (page 4) */
$inst_status_4="おめでとうございます。インストールに成功しました! ただいま LinPHA を使う準備ができました。";
$inst_status_step4="ステップ 4/4";
$inst_submit="完了";
$inst_db_tryconn="データベースへの接続に挑戦します。";
$inst_db_tryconn_error="データベースサーバーへの接続のを試みましたがエラーが発生しました。using:";
$inst_db_tryconn_ok="OK, 接続しました!";
$inst_db_tryinst="データベースの作成を試みます。";
$inst_db_tryinst_error="データベースの作成中のエラー:";
$inst_db_tryinst_ok="OK, 作成しました!";
$inst_create_tb_msg="OK, 全テーブルを作成中";

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
$inst_db_connect_inc_msg="データベース接続エラー!";
$inst_db_connect_inc_msg1="Error while trying to select ".@$db_realname." from DB<br>
	If this message occures while running install, you have to REMOVE the file db_connect.php<br>
	in the linpha &quot;sql&quot; subdir!";
/* ------------------------------------------------------------------ */

$table_create="テーブル作成中:";
$table_create_error="テーブルの作成中のエラーです!";
$table_create_ok="OK, 作成しました!";
$table_insert_admin="管理者で使用する名前を作成中:";
$table_insert_admin_error="管理アカウントの作成中のエラーです!";
$table_insert_admin_ok="OK, 作成しました!";
$write_db_config="データベース構成をファイルに保存";
$fopen_error="sql/db_config.php を書き込むために開けませんでした。chmod 777 を実行してインストール作業を再度開始してください。";
$fopen_ok="OK, 構成を書き込みました!";
$install_finish_msg="OK. インストール完了です!!";
$admin_task="クリックで続けます";
$file_create_ok="OK, 作成しました!";
$configure_error="すべてのフィールドの入力を要求します!!!";
$could_not_open="Error, could not open table users! Seems you are not allowed to add new users to DB<br>
				Please choose limited access installation method at page 2 during install<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The PHP Photo Archive";
$head_title="The PHP Photo Archive";
$book_home="ホーム";
$book_about="about";
$book_admin="管理";
$book_admin_user="自分の設定";
$book_links="links";
$book_search="検索";
$book_logout="ログアウト";
$book_login="ログイン";
$num_pictures="画像数:";
$user_visits="閲覧";
$user_online="オンラインユーザー";
$guest="ゲスト";
$html_lang="ja";
$html_charset="utf-8";

/*#################################################
## index.php
#################################################*/
$index_welc_text="こんにちは。これは、LinPHA で知られる &quot;The Linux Photo Archive&quot; のホームです。
			最近の最新版は <a href='http://linpha.sf.net/'><u>Sourceforge</u></a> を参照してください。";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha 検索";
$radio_all="すべて";
$radio_descript="説明";
$radio_comment="コメント";
$radio_category="カテゴリ";
$radio_file="ファイル名";
$search_in="アルバム中を検索";
$search_all="すべてのアルバム";
$search_for="検索キーワード";
$search_button="検索";
$photos_found="発見";
$search_info="LinPHA 検索ページ";
$search_msg="下記の項目を用いてLinPHA データベース中の写真を検索します:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="画像詳細";
$img_size="フルサイズ";
$img_com="コメント";
$img_des="説明";
$img_cat="カテゴリ";
$img_name="名前";
$img_info_stored="データベースへコメントを書き込みました。";
$please_login="<a href='login.php'><font color='#000099'><u>ログイン</u></font></a> してコメントを追加する";
$back_to_thumbs="<b><u>サムネイル表示に戻る</u></b>";
$back_to_search="<b><u>検索に戻る</u></b>";
$button_next="次へ";
$button_prev="前へ";
$exif_ext_error="EXIF をサポートしない PHP バージョンです。";
$exif_error="画像は EXIF 情報を含んでいません!";
$exif_more="より詳細へ";
$exif_less="簡易へ";
$detail_header="写真";
$detail_header1="/";
$detail_header2="フォルダー内";
$php_to_old="PHP バージョン 4.2.0 未満は EXIF が無効です!";
$views="表示";
$slideshow="スライドショー";
$seconds="秒";
$go="レッツラゴ";
$stopslide="スライドショー停止";
/* image rotating */ /* TODO next */
$img_rotate_ok="写真の回転";
$img_rotating="画像の回転に問題"; // TOC entry
$img_rotating_hint1="Image rotation DISABLED! click";
$img_rotating_hint2="to see why";

/*#################################################
## login.php
#################################################*/
$login_msg="ログインしてください!";
$login_error="ユーザーかパスワードが分かりません。";
$login_name="ユーザー名";
$login_pass="パスワード";
$login_info="LinPHA ログインページ";
$login_request_account_info="新規アカウント申請:";
$login_request_target="LinPHA 管理者へ連絡";
$login_admin_info="LinPHA 管理者アカウントでログインし、管理タスクを行います。";
$login_friend_account_info="もし既に &quot;friend&quot; アカウントを持っているときは、ここで個人の設定を修正することができます。";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA 管理";
$please_turn_off_msg="写真の追加を終えたら「サムネイル自動作成/削除」をオフに設定してください。<br>
						LinPHA should work arround 10 times faster then :)";
/* left menu */
$logout_msg="ログアウト";
$welc_msg="ようこそ ";
$stat_msg="You are now authorized to do administrative tasks as well, as add <b>comments</b> and descriptions to pictures";
$back_to_msg="<b>写真一覧に戻る</b>";
$href_general_conf="一般設定";
$href_user_conf="ユーザー/グループ管理";
$href_folder_conf="フォルダー管理";
$href_sql="MySQL データベース管理";
$href_ftp="ファイル管理";
$href_stats="LinPHA 統計";
$href_other_conf="その他のオプション";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA デフォルト言語";
$default_language_info="&lt;--デフォルト言語設定";
$general_auto_lang="言語自動検知 有効/無効"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- 訪問者のブラウザ言語を自動検知します";
$general_success_msg="! 修正を書き込みました !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="画像の回転 有効/無効";
$general_rotate_info="&lt;-- <b>big fat warning! click info</b>";
$general_exifinfo="すべての EXIF サポート 有効/無効";
$general_exifinfo_info="&lt;-- EXIF 機能の使用を有効/無効化";
$general_exifdefault="デフォルトでEXIF情報表示";
$general_exifdefault_info="&lt;-- 有効にするとデフォルトで EXIF 情報を表示します";

$general_exiflevel="EXIF 情報のレベル";
$general_exiflevel_info="&lt;-- EXIF 情報の冗長設定";
$exif_low="低";
$exif_medium="中";
$exif_high="高";
$general_filename="ファイル名 有効/無効";
$general_filename_info="&lt;-- 有効にするとサムネイルの下にファイル名を表示します";
$general_thumb_order="サムネイル順序基準";
$general_thumb_order_info="&lt;-- サムネイルの順序をファイル名か日付で設定します";
$thumb_order_date="日付";
$thumb_order_file="ファイル名";
$general_autoconf="サムネイル自動作成/削除";
$general_autoconf_info="&lt;-- <b>主に速度改善のために OFF にします</b>";
$general_counterstat="カウンター 有効/無効";
$general_counterstat_info="&lt;-- デフォルトオン(有効)";
$general_blocking="IP ブロック時間を分で指定";
$general_blocking_info="&lt;-- ユーザーは新しく x 分と数えません";
$general_theme="LinPHA テーマ変更";
$general_theme_info="&lt;-- LinPHA でデフォルトで使用するテーマ";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="高品質なサムネイルと写真 有効/無効";
$general_hq_info="&lt;-- 大幅な速度改善のために無効にします";
$submit_button_general="変更をデータベースに書き込む";
$button_on_msg="オン";
$button_off_msg="オフ";
$basic_opts="基本";
$advanced_opts="高度";
$show_basics="クリックすると基本オプションを表示";
$show_advanced="クリックすると高度なオプションを表示";
$general_printing="ゲスト印刷 有効/無効";
$general_printing_info="&lt;-- オンにすると誰でも印刷を許可";
$general_slideshow="スライドショー 有効/無効";
$general_slideshow_info="&lt;-- スライド機能設定 オン/オフ";
$general_mini_preview="小さい画像 有効/無効";
$general_mini_preview_info="&lt;-- もし多くのユーザーのバンド幅が低い場合はオフに設定します";

/* modify existing user table */
$mod_user_header="既存ユーザー修正";
$submit_button_mod_user="ユーザー修正";
$mod_user_success_msg="! ユーザーを修正しました !";
$submit_button_delete="削除";
$del_user_success_msg="! ユーザーを削除しました !";

/* add new user table */
$new_user_header="新規ユーザー追加";
$new_user_name_info="ユーザー名";
$new_user_pass_info="パスワード";
$new_user_mail_info="電子メール";
$new_user_level_info="ユーザーレベル";
$friend="友人";
$submit_button_new_user="ユーザー追加";
$new_user_success_msg="! ユーザーを追加しました !";

/* friends account table */
$friend_user_header="アカウント設定";
$submit_button_friend_user="アカウント更新";
$delete_button_friend_user="アカウント削除";
$friend_info_msg="アカウント設定の設定/変更";

/* add new category table */
$new_cat_header="新規カテゴリ追加";
$new_cat_info="新規追加するカテゴリ名";
$submit_button_new_cat="カテゴリ追加";
$new_cat_success_msg="! カテゴリを追加しました !";
$mod_cat_header="カテゴリ修正/削除";
$cat_name_header="カテゴリ名";
$cat_mod_header="カテゴリ修正";
$cat_del_header="カテゴリ削除";
$submit_button_mod_cat="修正";

/* set directory permissions */
$set_dir_perms_header="フォルダーの許可を設定する";
$dir_name="フォルダー";
$dir_perms="許可";
$action="操作";
$submit_button_folder="送信";
$public="公開";
$friends="友人";
$private="プライベート";
$new_perms_success_msg="! 許可の変更をしました !";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="全体的な統計";
$stats_over_photos="データベース中の画像数:";
$stats_over_views="全体で表示した写真数:";
$stats_over_albums="データベース中のアルバム数:";
$stats_over_most_alb_visists="一番来訪が多いアルバム:";
$stats_over_space="ディスク使用容量 (全アルバム):";
$stats_over_visitors="これまでの来訪者:";
$stats_over_users="登録済みユーザー数:";
$stats_top_ten="閲覧数トップ店";
$stats_rank="ランク:";
$stats_no_views="閲覧数:";
$stats_last_view="最終閲覧日時:";
$stats_alb_name="アルバム名:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="解析第1ステージ";
$parse_sec="解析第2ステージ";
$parse_third="解析第3ステージ";
$parse="ただいま解析中";
$parsed="解析数:";
$dirs="サブディレクトリ";
$done="すべて終了...";
$not_allowed_msg="すみません。このスクリプトの実行は許可されていません!";
/* these entries are called from within admin.php */
$th_msg="一度にすべてのサムネイルを作成!";
$table_hint_msg="クリックするとすべてのサブフォルダからすべてのサムネイルを作成開始します!";
$start_button="開始!";
$recreate_thumbs_header="すべてのサムネイルの再生成";
$recreate_thums_msg="すべてのサムネイルを再生成します! すべての統計を失うことになるでしょう!";
$recreate_thums_warning="サムネイルの再生性と、すべてのコメント・説明と統計を削除する意思を確認してください! この操作は中断できません。今冬に続けますか?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="印刷レイアウト選択";
$images_page="画像/ページ";
$indexprint="インデックス印刷 (28)";
$note="<strong>注:</strong> 写真がすべてページにフィットすることを確かめるために、印刷の前にブラウザーの「ページ設定」で設定しなければならないかもしれません!!!";
$print_button="印刷プレビュー";
$href_check_all="すべてチェック";
$href_clear_all="すべて消去";
$print_error="エラー: 画像が選択されていません !!!";
$print_mode="印刷モード";
$print_image="画像印刷";
$videos_msg="ビデオは印刷できません。";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL データベース管理システム バージョン";
$mysql_cancel="取り消し";
$mysql_DHTML_hint="DHTML 表示は無効です - you won\'t see anything until the backup is complete.";
$mysql_select_all="全選択";
$mysql_deselect_all="全選択取り消し";
$mysql_create_backup="バックアップ作成";
$mysql_back_menu="メニューに戻る";
$mysql_table_checks="テーブルの調査中...";
$mysql_table_check="テーブルのチェック中";
$mysql_struct_msg="構造作成 テーブル:";
$mysql_in_file_dump_msg="ダンプデータ出力 テーブル:";
$mysql_progress="Overall Progress:";
$mysql_back_complete="Backup complete in";
$mysql_back_menu_long="MySQL データベースバックアップのメインメニューに戻る";
$mysql_open_warn1="<B>警告:</B> オープンに失敗しました。 ";
$mysql_open_warn2="書き込みをするために! ディレクトリで <BR><BR><I>CHMOD 777</I> をして修正するべきです。";
$mysql_date_msg="今現在 "; // it follows time of the day...
$mysql_last_backup="MySQL の最終フルバックアップ: ";
$mysql_backup_hint="Generally, backing up more than once a week is not neccesary.";
$mysql_down_backup="前回のフルバックアップをダウンロード ";
$mysql_down_backup_part="前回の部分バックアップのダウンロード ";
$mysql_down_backup_struct="前回の構造のみのバックアップのダウンロード ";
$mysql_down_backup1="(右クリックで「対象をファイルに保存」する)";
$mysql_unknown_backup="MySQL データベースの最終バックアップ: <I>unknow</I>";
$mysql_href_recom="新規フルバックアップ作成 完全なインサート (推奨)";
$mysql_href_standard="新規フルバックアップ作成 標準的なインサート (小さい)";
$mysql_href_partial="新規部分バックアップ作成 選択されたテーブルのみ (with complete inserts)";
$mysql_href_structure="新規フルバックアップ作成 テーブル構造のみ";
$mysql_days_last="日";
$mysql_hours_last="時";
$mysql_min_last="分";
$mysql_sec_last="秒";
$ago="前"; // reads in context "some days ago"
$backup="バックアップ";
$restore="復元";
$optimize="最適化";
$optimize_tables="テーブル最適化";
$opt_table_name="テーブル名";
$opt_table_check="テーブル検査";
$opt_table_optimize="テーブル最適化";
$opt_table_msg="メッセージの種類";
$opt_start_msg="クリックするとすべてのデータベーステーブルの最適化を開始";
$fullback_hint_msg="もし複数のデータベースを所有する場合、<b>部分</b>バックアップの方法を選択してください。";
$restore_last_fullback="最後の <b>フル</b> バックアップを復元:";
$restore_last_partback="最後の <b>部分</b> バックアップを復元:";
$restore_error="バックアップファイルのオープン中にエラーです。ファイルが見つかりません!";
$restore_success="リストアに成功しました!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>アクセス拒否</H1> このディレクトリのアクセスの許可がありません。');
define('STR_BACK',	'戻る');
define('STR_LESS',	'less');
define('STR_MORE',	'more');
define('STR_LINES',	'lines');
define('STR_FUNCTIONLIST', '機能一覧');
define('STR_EDIT',	'編集');
define('STR_VIEW',	'表示');
define('STR_RENAME',	'名称変更');
define('STR_MKDIR',		'ディレクトリ作成');
define('STR_DELETE',	'削除');
define('STR_BOTTOM',	'一番下');
define('STR_TOP',		'一番上');
define('STR_FILENAME',	   'ファイル名');
define('STR_FILESIZE',	   'サイズ');
define('STR_LASTMODIFIED', '最終修正');
define('STR_SUM', '<B>%s</B> バイト <B>%s</B> 個のアイテム');
define('STR_CREATEDIRLEGEND', 'ディレクトリ作成');
define('STR_CREATEDIR',       '作成するディレクトリの名前:');
define('STR_CREATEDIRBUTTON', 'ディレクトリ作成');
define('STR_RENAMELEGEND',       '名称変更');
define('STR_RENAMEENTERNEWNAME', '%s の新規名称入力:');
define('STR_RENAMEBUTTON',       '名称変更');
define('STR_ERROR_DIR','エラー: ディレクトリの内容の読み込みができません。');
define('STR_AUDIO',            '音声');
define('STR_COMPRESSED',       '圧縮済み');
define('STR_EXECUTABLE',       '実行');
define('STR_IMAGE',            '画像');
define('STR_SOURCE_CODE',      'ソースコード');
define('STR_TEXT_OR_DOCUMENT', 'テキストドキュメント');
define('STR_WEB_ENABLED_FILE', 'ウェブ化ファイル');
define('STR_VIDEO',            '映像');
define('STR_DIRECTORY',        'ディレクトリ');
define('STR_PARENT_DIRECTORY', '親ディレクトリ');
define('STR_EDITOR_SAVE',      'ファイル保存');
define('STR_EDITOR_SAVE_ERROR','ファイル <I>%s</I> は書き込めないか存在しません。');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','設定により、00 から FF の正しい 16 進数を与えなければいけません。');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','設定により、0 から 255 の正しい数値を与えなければいけません。');
define('STR_FILE_UPLOAD_NAVI_HINT', 'クイックナビゲーター');
define('STR_FILE_UPLOAD_DRIVES', 'Drives:');
define('STR_FILE_UPLOAD', 'アップロード');
define('STR_FILE_UPLOAD_MAIN', 'アップロード');
define('STR_FILE_UPLOAD_DISABLED', 'すみません。php.iniでファイルアップロードが無効化されています。');
define('STR_FILE_UPLOAD_DESC','アップロードしたいファイルを選択します。Choose desired action to accomplish upon succesful upload.');
define('STR_FILE_UPLOAD_FILE','ファイル');
define('STR_FILE_UPLOAD_TARGET','ファイルアップロード 対象');
define('STR_FILE_UPLOAD_ACTION','アップロード完了後に実行:');
define('STR_FILE_UPLOAD_NOTHING','何もしない');
define('STR_FILE_UPLOAD_DROPFILE','選択した操作の終了後、アップロードされたファイルを削除する');
define('STR_FILE_UPLOAD_MAXFILESIZE','php.ini で設定された現在の許可最大ファイルサイズ(ファイル単位)');
define('STR_FILE_UPLOAD_ERROR',        'エラー: ファイル「%s」をディレクトリ「%s」に移動できませんでした。');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  'エラー: ディレクトリ「%s」に移動できませんでした。File being processed: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', 'エラー: 処理の後に %s を削除できませんでした。');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', 'エラー: アップロードされたファイル %s は php.ini 中の upload_max_filesize ディレクティブを超過しています - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','エラー: アップロードされたファイル %s のサイズは HTML フォーム設定を超過します。');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          'エラー: アップロードされたファイル %s は、分割形式のうちのひとつがアップロードされました。');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="パノラマ表示"; /* (img_view.php) -- new [panorama view] href  */
$close_win="ウィンドウを閉じる"; /* (various files) -- javascript close window */
$nav_hint="マウスかカーソルキーでナビゲートしてください!"; /* (image_panorama_view.php) --  */
$pano_view_of="画像のパノラマビュー"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="PHP で open basedir が設定されているか調査中..."; /* (sec_stage_install.php) --  */
$req_basedir_fail="いいえ"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="Bad bad bad, you configured PHP to make use of \"open_basedir\". !<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg1="+ LinPHA will use GD lib to create thumbs, however expect some problems<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ If possible, please unset \"open_basedir\" in PHP.ini"; /* (sec_stage_install.php) --  */
$gd_basedir_err="+ If possible, please unset \"open_basedir\" in PHP.ini or recompile PHP with GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="*.tar.gz 書庫を展開 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="*.tar.bz2 書庫を展開 (UNIX)"; /* (index.php) --  */
$extract_gz="gzip で展開 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip で展開 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="pkzip で展開 (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! グループを追加しました !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! グループを修正しました !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! グループを削除しました !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! カテゴリを修正しました !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! カテゴリを削除しました !"; /* (admin.php) -- redirect message */
$href_groups="クリックするとグループ追加・修正を表示"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="警告: 新しいアカウントでログインしてください!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="フォルダー管理に戻る"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="ユーザー管理に戻る"; /* (build_user_conf.php) -- navi href  */
$header_new_group="新規グループ追加"; /* (build_user_conf.php) -- table header */
$header_groupname="グループ名"; /* (build_user_conf.php) -- table header */
$button_addgroup="グループ追加"; /* (build_user_conf.php) -- submit button */
$header_mod_group="グループ修正/削除"; /* (build_user_conf.php) -- table header */
$mod_group_header="グループ修正"; /* (build_user_conf.php) -- table header */
$del_group_header="グループ削除"; /* (build_user_conf.php) -- table header */
$search_to_short="検索文字列が短いです。2 文字以上必要です!"; /* (search.php) --  */
$general_thumb_size="サムネイルサイズ変更"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="<-- 最大サムネイルサイズをピクセルで設定"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_border="サムネイル境界線 有効/無効"; /* (build_general_conf.php) -- thumb border stuff */
$general_thumb_border_info="<-- 有効にするとサムネイルに境界線を追加する"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="サムネイルサイズの選択"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="境界線設定"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="画像境界線 有効"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="画像境界線 無効"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="Bad bad bad, you configured PHP to make use of \"safe_mode\" restrictions!<br>"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ If possible, please unset \"safe_mode\" in PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="匿名投稿許可/不許可"; /* (build_general_conf.php) --  */
$general_anon_post_info="<-- 匿名にコメント追加を許可する"; /* (build_general_conf.php) --  */
$stats_over_comment="コメント投稿数"; /* (build_stats.php) --  */
$top10_downs_href="トップテンダウンロード閲覧"; /* (build_stats.php) --  */
$top10_views_href="トップテン表示閲覧"; /* (build_stats.php) --  */
$stats_head_downs="トップテンダウンロード一覧"; /* (build_stats.php) --  */
$no_downloads="ダウンロード数"; /* (build_stats.php) --  */
$general_anon_download="匿名ダウンロード 有効/無効"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- 画像へのダウンロードリンクの表示/非表示"; /* (build_general_config.php) --  */
$seach_multiple_select_use="複数選択は"; /* (search.php) --  */
$search_and="AND"; /* (search.php) --  */
$search_or="OR"; /* (search.php) --  */
$search_categories="カテゴリ一覧"; /* (search.php) --  */
$search_with_available_filters="有効なフィルター"; /* (search.php) --  */
$search_select_album="アルバム選択"; /* (search.php) --  */
$search_date_from_to="日付指定 開始 / 終了"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="新規パスワード"; /* (build_user_conf.php) --  */
$new_user_error4="ユーザー名が指定されていません。"; /* (admin.php) --  */
$new_user_error5="そのユーザー名はすでに存在します。"; /* (admin.php) --  */
$new_user_error1="古いパスワードを間違えています。"; /* (admin.php) --  */
$new_user_error2="新しいパスワードが確認パスワードと一致しません。"; /* (admin.php) --  */
$new_user_error3="電子メールを間違えています。"; /* (admin.php) --  */
$new_user_old_password="古いパスワード"; /* (admin.php) --  */
$new_user_retype_password="新規パスワード(確認)"; /* (admin.php) --  */
$select_db_header="データベースタイプを選択してください"; /* (sec_stage_install.php) --  */
$mysql_info="MySQL データベースへのアクセスにはこれを選んでください。"; /* (sec_stage_install.php) --  */
$postgres_info="PostgreSQL データベースへのアクセスにはこれを選んでください。こちらも参照してください"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="自動ログイン"; /* (toc.php) --  */
$login_autologin_user="自動ログイン ユーザー情報"; /* (toc.php) --  */
$toc_timer="タイマー"; /* (toc.php) --  */
$general_autologin="自動ログイン 有効/無効"; /* (build_general_conf.php) --  */
$general_autologin_info="<-- オプションを有効にすると自動ログインを使う"; /* (build_general_conf.php) --  */
$general_timer="時間表示 有効/無効"; /* (build_general_conf.php) --  */
$general_timer_info="<-- フッタに解析時間の出力を有効化"; /* (build_general_conf.php) --  */
$login_autlogin="自動ログイン"; /* (login.php) --  */
$lostpw_title="パスワード紛失"; /* (login.php) --  */
$lostpw_question="パスワードを忘れました?"; /* (login.php) --  */
$lostpw_type_user_or_email="ユーザー名か Linpha の電子メールアドレスを入力してください。"; /* (login.php) --  */
$lostpw_email1="Somebody has made use of the lost password function. If it wasn't you, just ignore this message and nothing will happen with your password. If it was you, put this code in the demanded field:"; /* (login.php) --  */
$lostpw_email1_part2="(Remember: This is NOT your new password!)"; /* (login.php) --  */
$lostpw_email1_part3="Your Linpha-Administrator"; /* (login.php) --  */
$lostpw_email_error="エラー: 電子メールが送信できません。管理者に連絡してください。"; /* (login.php) --  */
$lostpw_error_nothing_found="Sorry, no username or password has been found that match your criterias."; /* (login.php) --  */
$lostpw_email_sent="電子メールを送信しました"; /* (login.php) --  */
$lostpw_should_receive="You should receive it within a minute. Enter the code from the email in this field:"; /* (login.php) --  */
$lostpw_go_back="戻る"; /* (login.php) --  */
$lostpw_email2="パスワードの変更に成功しました。新しいパスワードは:"; /* (login.php) --  */
$lostpw_email2_part2="「自分の設定」のリンクを用いて後で変更できます。"; /* (login.php) --  */
$lostpw_new_password="新規パスワード"; /* (login.php) --  */
$lostpw_successfully_changed="パスワードの変更に成功しました。you should receive an email within a minute with the new password."; /* (login.php) --  */
$lostpw_error_wrong_code="すみません。それは正しくありません。"; /* (login.php) --  */
$lostpw_enter_correct_code="このフィールドに電子メールから正しいコードを入力します:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA プラグイン"; /* (admin.php) --  */
$lang_plugins['watermark']="ウォーターマーク"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="ベンチマーク"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="データベース管理"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="有効なプラグイン一覧"; /* (admin.php) --  */
$lang_plugins['enabled']="有効化"; /* (plugins.php) --  */
$lang_plugins['disabled']="無効化"; /* (plugins.php) --  */
$lang_plugins['update']="更新"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="プラグイン更新"; /* (admin.php, plugins.php) --  */
$wm_wm_man="ウォーターマーク管理 "; /* (watermark.php) --  */
$wm_disable="ウォーターマーク無効 "; /* (watermark.php) --  */
$wm_change_example_img="画像例変更 "; /* (watermark.php) --  */
$wm_no_input_files_found="入力ファイルが見つかりません。"; /* (watermark.php) --  */
$wm_image_quality="画像クオリティ (プレビューのみ) "; /* (watermark.php) --  */
$wm_enable_text="有効: テキスト "; /* (watermark.php) --  */
$wm_text="テキスト "; /* (watermark.php) --  */
$wm_font="フォント "; /* (watermark.php) --  */
$wm_fontsize="フォントサイズ "; /* (watermark.php) --  */
$wm_fontcolor="フォント色 "; /* (watermark.php) --  */
$wm_align="位置 "; /* (watermark.php) --  */
$wm_pos_hor="水平位置 "; /* (watermark.php) --  */
$wm_pos_ver="垂直位置 "; /* (watermark.php) --  */
$wm_height="テキストフィールド高さ "; /* (watermark.php) --  */
$wm_width="テキストフィールド幅 "; /* (watermark.php) --  */
$wm_shadow_size="影サイズ "; /* (watermark.php) --  */
$wm_shadow_color="影色 "; /* (watermark.php) --  */
$wm_enable_image="有効: 画像"; /* (watermark.php) --  */
$wm_available_images="有効な画像"; /* (watermark.php) --  */
$wm_no_images_found="画像が見つかりません"; /* (watermark.php) --  */
$wm_dissolve="溶解度"; /* (watermark.php) --  */
$wm_preview="プレビュー"; /* (watermark.php) --  */
$wm_linebreak="で改行"; /* (watermark.php) --  */
$wm_enable_shadow="影有効"; /* (watermark.php) --  */
$wm_enable_rectangle="レクタングル有効"; /* (watermark.php) --  */
$wm_rectangle_color="色"; /* (watermark.php) --  */
$wm_enable_ext_shadow="拡張影有効"; /* (watermark.php) --  */
$wm_status="状態"; /* (watermark.php) --  */
$wm_enabled="有効です"; /* (watermark.php) --  */
$wm_disabled="無効です"; /* (watermark.php) --  */
$wm_restore_to="次に復元"; /* (watermark.php) --  */
$wm_inital_settings="初期設定"; /* (watermark.php) --  */
$wm_add_more_examples="You can add more example images in your linpha directory in the folder"; /* (watermark.php) --  */
$wm_example="例"; /* (watermark.php) --  */
$wm_shadow_fontsize="影フォントサイズ"; /* (watermark.php) --  */
$wm_settings_for_both="画像とテキストの設定"; /* (watermark.php) --  */
$wm_center="中央"; /* (watermark.php) --  */
$wm_north="上"; /* (watermark.php) --  */
$wm_northeast="右上"; /* (watermark.php) --  */
$wm_northwest="左上"; /* (watermark.php) --  */
$wm_south="下"; /* (watermark.php) --  */
$wm_southeast="右下"; /* (watermark.php) --  */
$wm_southwest="左下"; /* (watermark.php) --  */
$wm_east="右"; /* (watermark.php) --  */
$wm_west="左"; /* (watermark.php) --  */
$bm_file_err="Error, no file specified";
$bm_var_err="エラーです。入力値を確認してください。";
$bm_notfound_err="エラーです。ファイルが見つかりません。";
$bm_noimg_err="エラーです。ファイルは画像ではありません。";
$bm_tmpfile_err="一時画像ファイルの作成中のえらーです。";
$bm_tmpfile_warn="警告: 一時画像の削除ができませんでした。";
$bm_time_total="総実行時間: ";
$bm_img_sec="画像/秒: ";
$bm_avg_img="各画像の平均時間 (mouse over to update image): ";
$bm_qual_size="クオリティ/サイズ";
$bm_quality="クオリティ: ";
$bm_height="高さ: ";
$bm_width="幅: ";
$bm_size="画像サイズ: ";
$bm_create = "変換ユーティリティのベンチマーク作成中";
$bm_interval = "間隔";
$bm_calc = "計算中";
$bm_img = "画像";
$bm_inloop="ループ実行";
$bm_qual_range="クオリティ範囲: ";
$bm_size_range="サイズ範囲 (高さのみ): ";
$bm_repeats="繰り返し回数: ";
$bm_con_util="変換ユーティリティを選択してください: ";
$bm_current_settings="現在の設定"; /* (benchmark.php) --  */
$bm_preview="プレビュー"; /* (benchmark.php) --  */
$bm_save_settings="この設定を保存"; /* (benchmark.php) --  */
$wm_addexamples="ウォーターマーク: もっとサンプル画像を追加する"; /* (watermark.php) --  */
$wm_addimg="ウォーターマーク: もっとサンプル画像を追加する"; /* (watermark.php) --  */
$wm_addfont="ウォーターマーク: もっとフォントを追加する"; /* (watermark.php) --  */
$wm_colorsetting="ウォーターマーク: 色設定"; /* (watermark.php) --  */
$comment_hint="ヒント: アルバムをスクロールするには、一番上か一番下の画像をクリックしてください。"; /* (linpha_comments.php) --  */
$comment_end="このアルバムには次の画像はありません。"; /* (linpha_comments.php) --  */
$comment_beginning="このアルバムには前の画像はありません。"; /* (linpha_comments.php) --  */
$comment_back="画像表示に戻る"; /* (linpha_comments.php) --  */
$comment_edit_img="カテゴリ/コメント編集"; /* (linpha_comments.php) --  */
$comment_change_img_details="画像説明の変更"; /* (linpha_comments.php) --  */
$comment_last_comments="最新のコメント"; /* (linpha_comments.php) --  */
$comment_comment_by="投稿者"; /* (linpha_comments.php) --  */
$category_delete_warning="警告: Categories already assigned to images get lost"; /* (build_category_conf.php) --  */
$pass_2_short="エラーです。パスワードは3文字以上必要です..."; /* (various) --  */
$album_edit="アルバムのコメント修正"; /* (linpha_comments.php) --  */
$album_details="アルバム詳細"; /* (linpha_comments.php) --  */
$wm_save_note="NOTE: Watermarks aren NOT visible for registered users!. You MUST log out first (be guest) to see your watermarks while browsing LinPHA!"; /* (watermark.php) --  */
$lang_plugins['guestbook']="ゲストブック"; /* (admin.php) --  */
$print_low_quality="通常品質"; /* (printing_view.php) --  */
$print_high_quality="高品質 (非常に遅いです!)"; /* (printing_view.php) --  */
$gb_title="LinPHA ゲストブック";
$gb_sign="LinPHA ゲストブック! 新規メッセージ追加";
$gb_from="地域";
$gb_from_no="地域指定なし";
$gb_pages="ページ";
$gb_messages="メッセージがゲストブックにあります。";
$gb_msg_error="すみませんが、名前とコメントは省略できません。";
$gb_new_msg="新規メッセージ追加";
$gb_name="名前";
$gb_email="電子メール";
$gb_hp="ホームページ";
$gb_country="どちらからいらっしゃいました?";
$gb_header="LinPHA ゲストブック";
$gb_opts="ゲストブックオプション";
$gb_rows="ページ毎に表示する投稿数";
$gb_anon="匿名のゲストブックへの投稿を許可する";
$gb_order="投稿順序";
$wm_resize="常に画像サイズの X% のスケールでウォーターマークをする"; /* (watermark.php) --  */
$wm_help_and_descr="説明とヘルプ"; /* (watermark.php) --  */
$folder_remove_hint="もしすべてうまくいったなら、(セキュリティの為)/install サブフォルダーを削除してください。"; /* (forth_stage_install.php) --  */
$add_alb_com="アルバムにコメント追加"; /* (img_view.php) --  */
$add_img_com="画像にコメント追加"; /* (img_view.php) --  */
$album_com="アルバムコメント"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML 書式タグ"; /* (various) --  */
$stat_cache_elements="キャッシュ要素数"; /* (build_stats.php) --  */
$stat_cache_first="新規キャッシュされた要素数"; /* (build_stats.php) --  */
$stat_cache_hits="キャッシュヒット数"; /* (build_stats.php) --  */
$stat_cache_hits_max="最大ヒット数 単一画像)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="平均的なヒット数 (全画像)"; /* (build_stats.php) --  */
$stat_cache_size="キャッシュ容量"; /* (build_stats.php) --  */
$stat_cache_convert_time="キャッシュで高速化した時間"; /* (build_stats.php) --  */
$stat_cache_size="使用済みキャッシュ容量"; /* (build_stats.php) --  */
$cache_options="画像キャッシュオプション";
$cache_max_size="最大キャッシュサイズ(単位:バイト) (0 = 無制限)";
$path_2_cache="キャッシュディレクトリ (デフォルト /sql/cache)";
$cache_optimize="画像キャッシュデータ最適化/整理"; 
$cache_maintain="画像キャッシュメンテナンス";
$cache_opt_msg="!! キャッシュを最適化しました !!";
$lang_plugins['cache']="画像キャッシュ"; /* () --  */
$stat_cache_title="画像キャッシュ状況"; /* (cache.php) --  */
$bm_saved="設定を保存しました。"; /* (admin.php) --  */
$cache_optimize_by_size="指定サイズより大きいすべてのキャッシュ要素を削除 (単位:キロバイト) >="; /* (cache.php) --  */
$cache_optimize_by_date="指定日以降使用されていないすべてのキャッシュ要素を削除:"; /* (cache.php) --  */
$elements_rem="Removed elements"; /* (cache.php) --  */
$general_anon_album_downs="匿名のZIPアルバムダウンロード 許可/拒否"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- 匿名にZIP化されたアルバムのダウンロードを許可"; /* (build_general_conf.php) --  */
$general_download_speed="ダウンロード速度制限設定 キロバイト/秒 (0=無制限)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- アルバムダウンロードの速度制限"; /* (build_general_conf.php) --  */
$general_navigation="ナビゲーションバー 有効/無効"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- 有効にするとサムネイルページにナビゲーションバーを置きます"; /* (build_general_conf.php) --  */
$toc_navigation="ナビゲーションバー 有効/無効"; /* (doc/) --  */
$toc_zip_download="匿名のアルバムダウンロード 有効/無効"; /* (doc/) --  */
$toc_albdownlimit="ダウンロード速度制限"; /* (doc/) --  */
$choose_zips_msg="選択画像のダウンロード"; /* (build_zip_view.php) --  */
$zip_button="アーカイブダウンロード"; /* (build_zip_view.php) --  */
$type_of_archive="アーカイブの種類を選択"; /* (build_zip_view.php) --  */
$create_tar="tar アーカイブの作成"; /* (build_zip_view.php) --  */
$create_tgz="tar.gz アーカイブの作成"; /* (build_zip_view.php) --  */
$create_bz2="tar.bz2 アーカイブの作成"; /* (build_zip_view.php) --  */
$create_zip="zip アーカイブの作成"; /* (build_zip_view.php) --  */
$create_rar="rar アーカイブの作成"; /* (build_zip_view.php) --  */
$menumsg['advanced']="高度なオプション"; /* () --  */
$menumsg['printmode']="印刷モード"; /* () --  */
$menumsg['printprobs']="印刷無効?"; /* () --  */
$menumsg['downloadmode']="ダウンロードモード"; /* () --  */
$menumsg['mailmode']="メールモード"; /* () --  */
$menumsg['addcomment']="アルバムコメントの追加"; /* () --  */
$menumsg['delcomment']="アルバムコメントの削除"; /* () --  */
$menumsg['editcomment']="アルバムコメントの編集"; /* () --  */
$album_up="更新しました。"; /* (album_comment.php) --  */
$album_ins="挿入しました。"; /* (album_comment.php) --  */
$mail_link="メーリングリスト"; /* (header.php) --  */
$mail_title="LinPHA メーリングリスト"; /* (mail.php) --  */
$mail_send_link="メール送信"; /* (mail.php) --  */
$mail_return_address="返信アドレス:"; /* (mail.php) --  */
$mail_block="メールブロック容量:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="メーリングリストオプション"; /* (mail.php) --  */
$mail_go_back="戻る"; /* (various mail plugin files) --  */
$mail_form_title="電子メールメッセージ"; /* (mail_form.php) --  */
$mail_form_subject="件名:"; /* (mail_form.php) --  */
$mail_form_msg="本文:"; /* (mail_form.php) --  */
$mail_total_sent="総電子メール送信数:"; /* (mail_form.php) --  */
$mail_subscribe="購読"; /* (mail_users.php) --  */
$mail_unsubscribe="購読解除"; /* (mail_users.php) --  */
$mail_activate="アクティベート"; /* (mail_users.php) --  */
$mail_user_name="あなたの名前:"; /* (mail_users.php) --  */
$mail_user_email="あなたの電子メールアドレス:"; /* (mail_users.php) --  */
$mail_user_email_confirm="電子メールアドレス(確認):"; /* (mail_users.php) --  */
$mail_user_code="アクティベーションコード:"; /* (mail_users.php) --  */
$mail_user_code_sent="あなたの電子メールアカウントにアクティベーションコードを含むメールを送信しました。"; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA メーリングリストアクティベーション"; /* (mail_users.php) --  */
$mail_user_activated="アカウントはアクティベートされました!"; /* (mail_users.php) --  */
$mail_user_activate_error="あなたのアカウントの有効化にエラーがありました!"; /* (mail_users.php) --  */
$mail_user_email_not_found="メーリングリストに存在しません。"; /* (mail_users.php) --  */
$mail_user_remove_ok="メーリングリストから削除。"; /* (mail_users.php) --  */
$mail_user_remove_fail="メーリングリストから削除できませんでした。"; /* (mail_users.php) --  */
$mail_user_empty="すべてのフィールドを埋めます。"; /* () --  */
$mail_user_no_match="電子メールアドレスが一致しません。"; /* () --  */
$mail_user_exists="電子メールアドレスはリストに既に存在します。"; /* (mail_users.php) --  */
$lang_plugins['mail']="メーリングリスト"; /* (admin.php) --  */
$mail_activate_message="%s さん。\n\nメーリングリストアカウントを有効化するために、詳細を入力してください\n\nアクティベーションコード: %s\n\nありがとう!\n管理者より"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="ヒント"; /* (mail.php) --  */
$mail_user_permission="グループ 'mail' 中の全ユーザーはメーリングリストにメッセージを送ることができます"; /* (mail.php) --  */
$mail_current_subscribers="現在の購読者一覧"; /* (mail.php) --  */
$mail_name="名前"; /* (mail.php) --  */
$mail_mail="電子メール"; /* (mail.php) --  */
$mail_subscribing_date="購読日"; /* (mail.php) --  */
$mail_active="アクティブ"; /* (mail.php) --  */
$mail_sent_to="電子メール送信 送信先:"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> と <b>[Email]</b>は特定ユーザーの名前と電子メールアドレスに置き換えられます。"; /* (form_mailing.php) --  */
$misc_help="さまざまなヘルプ"; /* () --  */
$mail_create_group="(グループ 'mai' は自分で作成しなければなりません)"; /* (mail.php) --  */
$alb_th="アルバム中のサブフォルダー フォルダー名:"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1月','2' => '2月','3' => '3月','4' => '4月','5' => '5月','6' => '6月','7' => '7月','8' => '8月','9' => '9月','10' => '10月','11' => '11月','12' => '12月'); /* abrevations of months */
$arr_month_long = Array('1' => '1月','2' => '2月','3' => '3月','4' => '4月','5' => '5月','6' => '6月','7' => '7月','8' => '8月','9' => '9月','10' => '10月','11' => '11月','12' => '12月'); /* months */
$arr_day_short = Array('日','月','火','水','木','金','土'); /* abrevations of weekdays */
$arr_day_long = Array('日曜','月曜','火曜','水曜','木曜','金曜','土曜'); /* weekdays */
$layout="レイアウト";
$features="機能";
$perform="パフォーマンス";
$general_comment_in_subfolder = 'サブフォルダーのアルバムコメント 有効/無効';
$general_comment_in_subfolder_info = '<-- サブフォルダープレビュー時にアルバムコメントを表示します';
$general_default_date_format = 'デフォルト日付書式';
$general_default_date_format_info = '<- 例: 06/28/2004, 詳細は info を参照してください';
$general_default_time_format = 'デフォルト時間書式';
$general_default_time_format_info = '<- 例: 01:45:50 PM, 詳細は info を参照してください';
$general_new_images_folder = '仮想 "新規画像" フォルダー';
$general_new_images_folder_info = '<- 仮想フォルダーと追加された画像を表示します';
$general_new_images_folder_age = '"新規画像" 中の生存日数';
$general_new_images_folder_age_info = '<- 画像表示の最大日数です';
$control_key="Ctrl"; /* (various) --  */
$search_date="日付"; /* (search.php) -- reads: date from to... */
$search_from="開始"; /* (search.php) -- reads: date from to... */
$search_to="終了"; /* (search.php) -- reads: date from to... */
$start_slide="スライドショー開始"; /* (img_view.php) --  */
$pass_msg="新しいパスワードでログインしなければなりません。"; /* (build_my_settings.php) --  */
$str_new_images = "新規画像"; /* (new_images.php) -- */
$str_order_by = "ソート基準"; /* (new_images.php) -- */
$str_age = "経過時間"; /* (new_images.php) -- */
$str_album = "アルバム"; /* (new_images.php) -- */
$str_in_album = "アルバム"; /* (new_images.php) -- */
$str_img_newer_than = "%s 日前より新しいすべての画像"; /* (new_images.php) -- */
$timespanfmt = "%s 日 %s 時間 %s 分 %s 秒経過"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="すべてのキャッシュ済み画像とウォーターマークの削除"; /* (watermark.php) --  */
$str_error_changing_perm="エラーです。ファイルパーミッションを変更できませんでした! (おそらく変更許可を持っていません)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="パーミッション変更 対象:"; /* (plugins/ftp/index.php) --  */
$str_read="読み込み"; /* (plugins/ftp/index.php) --  */
$str_write="書き込み"; /* (plugins/ftp/index.php) --  */
$str_execute="実行"; /* (plugins/ftp/index.php) --  */
$str_owner="所有者"; /* () --  */
$str_group="グループ"; /* (plugins/ftp/index.php) --  */
$str_all_other="その他すべて"; /* (plugins/ftp/index.php) --  */
$str_copy="コピー"; /* (plugins/ftp/index.php) --  */
$str_copy_to="%s をコピー (コピー先を指定)"; /* (plugins/ftp/index.php) --  */
$str_rename_to="%s の名称変更 (新規名称を指定)"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="画像回転が無効です。"; /* (img_view.php) --  */
$str_no_write_perm="書き込み許可がありません。"; /* (img_view.php) --  */
$str_new_images_in_these_folders="下記のアルバムで新規画像を見つけました:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="もしあなたが LinPHA の再インストールをしたいなら、
まずはじめにファイル ./sql/db_connect.php を削除してください! (管理セクション中の統合ファイル管理でこれをすることができます)"; /* (install_header.php) --  */
$str_Version="バージョン"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="エラー: PHP の構成でデータベースのサポートが有効なものがありませんでした。"; /* (sec_stage_install.php) --  */
$str_extract_with="アップロードの完了時に展開するアーカイブ形式"; /* (ftp/index.php) --  */
$str_files_to_upload="ファイルをアップロード"; /* (ftp/index.php) --  */
$posix_check_msg="POSIX サポートを調査中..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="POSIX をサポートする PHP がインストールされています。すべての統合ファイル管理ツール機能は有効です。"; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="POSIX をサポートしない PHP がインストールされています。統合ファイル管理機能のいくつかの機能を使用することができません (特にファイルのパーミッションを変更すること)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="エラー: 設定を保存できませんでした。パスが正確につづられているか、またディレクトリに書き込み許可があるか確かめてください。"; /* (admin.php) --  */
$str_create_archive="アーカイブ「%s」作成"; /* (build_zip_view.php) --  */
$str_download_error="エラー! 残念ながらなんらかの理由でダウンロードができないかもしれません。"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="%s から取得したすべての画像を検索"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="ロードするのにあまりにも長くかかる場合は、より低い解像度を試みてください:"; /* (image_panorama_view.php) --  */
$str_current_resolution="現在の解像度:"; /* (image_panorama_view.php) --  */
$href_group_conf="グループ管理"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="ツール一覧:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="プラグイン"; /* (plugin.php) --  */
$choose_mail_msg="選択画像をメール"; /* () --  */
$new_user_full_name="フルネーム"; /* (build_my_settings.php) -- And build_user_conf.php */
$general_mini_preview_full_thm="前へ/次への小さな画像をフルサムネイルにする 有効/無効"; /* (build_general_conf.php) --  */
$general_mini_preview_full_thm_info="<-- 有効にすると、画像ビューアでフルサムネイルをボタンで表示します。"; /* (build_general_conf.php) --  */
$href_category_conf="カテゴリ管理"; /* (admin.php) --  */
$cat_private="プライベート"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="もっとアプリケーションを追加する"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="有効なセッション設定を確認中..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="セッションの保存をするハンドラーを正しく設定しました。"; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="セッションの保存をするハンドラーを正しく設定できませんでした。"; /* (sec_stage_install.php) --  */
$session_miss_msg="セッションの設定が正しくできませんでした。You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="すべてのセッションの設定は正しく設定されました。LinPHA は適切に動作するはずです。"; /* (sec_stage_install.php) --  */
$new_user_error6="エラー: 自分のアカウントを使用していますか?!?"; /* (build_my_settings.php) --  */
$str_old_comments="古いコメント (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="最終訪問ページ:"; /* (index.php) --  */
$str_select_row="行選択"; /* (basket.php) --  */
$str_select="選択"; /* (basket.php) --  */
$str_new_window="新規ウィンドウ"; /* (basket.php) --  */
$general_anon_mail_mode="匿名ユーザーのメールモード有効/無効"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- 匿名ユーザーが画像をメールすることを許可します"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="メールモード: 最大メールサイズ"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- バイトで最大サイズ"; /* (build_general_conf.php) --  */
$general_thumbnail_view="サムネイル閲覧"; /* (build_general_conf.php) --  */
$general_image_view="画像閲覧"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL 照会のキャッシュ 有効/無効"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- もし SQL サーバーが遅かったり、PHP アクセラレーターを使用していなかったら有効にします"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL 照会キャッシュ時間:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- 分単位で最大キャッシュ時間を設定します"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL 照会キャッシュのパス:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- どこへ照会キャッシュデータを保存するか指定します"; /* (build_general_conf.php) --  */
$str_other_features="他の特徴"; /* (build_general_conf.php) --  */
$str_language_settings="言語設定"; /* (build_general_conf.php) --  */
$str_sql_query_caching="SQL 照会キャッシュ"; /* (build_general_conf.php) --  */
$general_thumb_border="サムネイルのボーダーサイズをピクセルで指定"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0 を設定すると無効 デフォルト: 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="サムネイルのボーダー色"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- 詳細の情報を参照します"; /* (build_general_conf.php) --  */
$str_recipient="受信者"; /* (basket_mail.php) --  */
$str_sender="送信者"; /* (basket_mail.php) --  */
$str_mail_too_big="エラー: 電子メールが大きすぎます。<br /><br />許可サイズ: %s バイト/選択された画像は %s バイト。<br /><br />いくつかの画像を削除するか、zip化アルバム機能を使ってダウンロードしてください!"; /* (basket_mail.php) --  */
$str_size_of_email="電子メールのサイズ: %s."; /* (basket_mail.php) --  */
$str_new_search="新規検索"; /* (search.php) --  */
$str_edit_search="検索編集"; /* (search.php) --  */
$str_View="閲覧"; /* (img_view.class.php) --  */
$str_normal="通常"; /* (img_view.class.php) --  */
$str_detail="詳細"; /* (img_view.class.php) --  */
$search_result_empty="すみません、あなたの探索は内容と一致しませんでした。"; /* (search.php) --  */
$str_chars_entered="文字入力済"; /* (img_view.class.php) --  */
$str_information_lost="いくつかの情報が消失します。エントリを修正してください。"; /* (img_view.class.php) --  */
$general_random_image="インデックスページでランダム画像を有効/無効"; /* () --  */
$general_random_image_info="<-- index.php でランダム画像を有効にします"; /* () --  */
$general_random_image_size="index.php のランダム画像の最大サイズ"; /* () --  */
$general_random_image_size_info="<-- ピクセルで画像の最大サイズを設定します"; /* () --  */
$str_edit_watermark="ウォーターマーク編集"; /* (watermark.php) --  */
$str_edit_permissions="ウォーターマーク許可編集"; /* () --  */
$str_Everyone="すべて"; /* () --  */
$str_Nobody="匿名"; /* () --  */
$str_only_logged_in_users=" ログインユーザーのみ"; /* () --  */
$str_except_these_groups="これらのグループを除外する:"; /* () --  */
$str_additionally_groups="これらのグループがなかった:"; /* () --  */
$str_allow_these_persons="No watermarks for these users/groups"; /* () --  */
$str_album_based_permissions="アルバムベースの許可"; /* () --  */
$str_all_albums_but_without_these="これら以外のすべてのアルバム:"; /* () --  */
$str_only_on_these_albums="これらのアルバムでのみ:"; /* () --  */
$str_allow_these_persons="この人たちを許可する"; /* (db_api.php) --  */
$str_no_watermarks="この人たちのウォーターマークはありません"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="デフォルトの設定は「ログインユーザーのみ」で「すべてのアルバム」です。"; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */

$inst_linpha_not_work_correctly="LinPHA はおそらく正確に処理しません。"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="ビデオからサムネイルの作成を試みる"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--ビデオからサムネイルの作成の問題に遭遇したらオフに切り替えます"; /* (build_generl_config.php) --  */
$general_update_notice="LinPHA アップデートの確認 有効/無効"; /* (build_generl_config.php) --  */
$general_update_notice_info="<-- 有効にすると利用できるアップデートを週に一回確認します"; /* (build_general_config.php) --  */
$directories="ディレクトリ"; /* (build_thumbnail_conf.php) --  */
$do_nothing="何もしません"; /* (build_thumbnail_conf.php) --  */
$create="作成"; /* (build_thumbnail_conf.php) --  */
$recreate="再作成"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="設定で EXIF 情報が無効です。"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="設定で IPTC 情報が無効です。"; /* (build_thumbnail_conf.php) --  */
$silent_mode="静粛モード (例えばデバグ情報を表示しない静粛実行)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="サムネイル"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA ログ記録"; /* (log.php) --  */
$log_options="LinPHA ログ記録オプション"; /* (log.php) --  */
$log_method_label="ログ記録対象:"; /* (log.php) --  */
$str_extra_headers="その他のヘッダー:"; /* (log.php) --  */
$str_log_events['login']="ユーザーログイン"; /* (log.php) --  */
$str_log_events['thumbnail']="サムネイルの作成"; /* (log.php) --  */
$str_log_events['update']="更新"; /* (log.php) --  */
$str_log_events['db']="データベース"; /* (log.php) --  */
$str_log_events['filemanager']="ファイルマネージャー"; /* (log.php) --  */
$str_events="イベント"; /* (log.php) --  */
$find_duplicates="画像コレクションから複製を見つける"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="PHP の設定(php.ini)で有効ではありません"; /* (sec_stage_install.php) --  */
$str_warning="警告"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="サムネイルは削除されるでしょう"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="すべての統計は削除されるでしょう"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="ランダムな画像一覧"; /* (build_general_conf.php) --  */
$str_download_images="単一画像のダウンロード"; /* (build_perms.php) --  */
$str_add_image_comments="画像へのコメントの追加"; /* (build_perms.php) --  */
$str_add_image_description="画像の説明とカテゴリの追加"; /* (build_perms.php) --  */
$str_mail_add_all_users="すべての linpha ユーザーをメーリングリストに追加する"; /* (plugins/mail.php) --  */
$str_note_upload="<b>注意:</b> You don't have to upload your images through this form. 使用したいどれか (ftp,scp,nfs,local,...) を選ぶことができます。Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="ブラックリストオプション (SPAM 防御)"; /* (varios) --  */
$blacklist_onoff="メッセージフィルターを有効にする"; /* (varios) --  */
$blacklist_keywords="阻止する単語:"; /* (varios) --  */
$str_entire_path="パスの入力"; /* (search.php) --  */
$mail_format="メールの形式:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (添付画像)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (インライン画像)"; /* (basket_mail.php) --  */
$mail_toggle_active="Toggle Active"; /* (mail.php) --  */
$statistics="統計"; /* (various) --  */
$stats_total_images="総画像数"; /* () --  */
$stats_total_img_views="総画像閲覧数"; /* () --  */
$stats_total_img_downs="総画像ダウンロード数"; /* () --  */
$stats_total_img_selected="選択画像の総閲覧数"; /* () --  */
$stats_total_downs_selected="選択画像の総ダウンロード数"; /* () --  */
$stats_downloads="ダウンロード数"; /* () --  */
$stats_downl_size="ダウンロードサイズ"; /* () --  */
$stats_coments_total="総コメント数"; /* () --  */
$stats_coments_sel="選択コメント数"; /* () --  */
$str_log_events['guestbook']="ゲストブック"; /* (log.php) --  */
$stats_realtime="有効/無効 リアルタイム統計"; /* (build_stats.php) --  */
$stats_realtime_info="<-- すべての統計情報をリアルタイムに表示する (キャッシュなし)"; /* (build_stats.php) --  */
$stats_cache_time="キャッシュ時間統計"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="ユーザー"; /* (stats_view.php) --  */
$stats_image_info="画像"; /* (stats_view.php) --  */
$stats_comments_info="コメント数"; /* (stats_view.php) --  */
$stats_general_info="全体"; /* (stats_view.php) --  */
$spam_blocked="SPAM アタックを防御した"; /* () --  */
$mail_current_status="現在の状態"; /* (mailing.php) --  */
$mail_sending_to="送信先: "; /* (mailing.php) --  */
$mail_counters="カウンター (成功/失敗/合計)"; /* (mailing.php) --  */
$mail_send_fail="送信に失敗: "; /* (mailing.php) --  */
$mail_send_ok="送信に成功: "; /* (mailing.php) --  */
$mail_all_complete="すべて完了しました!"; /* (mailing.php) --  */
$mail_failed_list="失敗したアドレスの一覧"; /* (mailing.php) --  */
$mail_ok_list="送信したアドレスの一覧"; /* (mailing.php) --  */
$mail_mailer_error=" - メーラーエラー: "; /* (mailing.php) --  */
$str_log_events['comments']="エントリコメント"; /* (log.php) --  */
$str_edit_members="メンバーを編集する"; /* (build_user.conf.php) --  */
$edit_groups="グループを編集する "; /* (build_user.conf.php) --  */
$str_basket="バスケット"; /* (various) --  */
$lang_plugins['log']="ログ記録"; /* (admin.php) --  */
$rss_created="XML RSS ファイルの生成に成功しました"; /* () --  */
$rss_not_created="RSS は変更が見つからないため、構築していません。"; /* () --  */
$rss_settings_saved="RSS 設定を保存しました"; /* () --  */
$lang_plugins['stats']="統計"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="ウォーターマークなし"; /* () --  */
$str_with_watermarks="ウォーターマークあり"; /* () --  */
$str_create_cache_img="キャッシュされた画像の作成"; /* () --  */
$str_reset_button="リセットする"; /* () --  */
$cache_stats="画像キャッシュの状態"; /* () --  */
$drop_duplicates="複製を棄てる"; /* () --  */
$general_exif_rotate="画像の自動回転の有効/無効 "; /* () --  */
$general_exif_rotate_info="<-- EXIF データによる画像の自動回転の有効化/無効化"; /* () --  */
$lang_plugins['maps']="Google/Yahoo マップ"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo マップの設定"; /* () -- maps plugin */
$maps_setup_yahoo_id="Yahoo アプリケーション ID"; /* (maps plugin) --  */
$maps_setup_google_key="Google キー"; /* (maps plugin) --  */
$maps_setup_php_version_warning="ごめんなさい - このプラグインは少なくとも PHP バージョン 4.2.0 以上を要求しています。PHP を更新してください。"; /* (maps plugin) --  */
$maps_select_type="地図の種類の選択:"; /* (maps plugin) --  */
$maps_select_type_info="<-- Google マップか Yahoo マップのうちどちらかを選択します"; /* (maps plugin) --  */
$maps_select_display_type="地図表示の種類を選択してください:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- show Hybrid, Sat or Regular Map"; /* (maps plugin) --  */
$maps_zoom_level="標準のズームレベル: 1-16 (標準は 16 で、世界地図です)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- 地図の標準のズームレベルです"; /* (maps plugin) --  */
$maps_zoom_location="標準の場所を表示の中央にする"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- 地図の中央に標準の場所を表示します"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google マップ制御サイズ"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- Google マップとパンの大きさを調整します"; /* (maps plugin) --  */
$maps_str="Maps"; /* (maps plugin) --  */
$map_type_ctrl="地図の種類制御を有効にする"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- show Map type controls in Map"; /* (maps plugin) --  */
$map_slide_ctrl="地図のスライドの制御を有効にする"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- 地図上に地図のスライド制御を表示します"; /* (maps plugin) --  */
$map_pan_ctrl="地図のパン制御を有効にする"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- 地図上に地図のパン制御を表示します"; /* (maps plugin) --  */
$map_auto_popup="マーカーの自動ポップアップを有効にする"; /* (maps plugin) --  */
$map_auto_popup_info="<-- 自動的にマウス通貨でマーカーポップアップを表示します"; /* (maps plugin) --  */
$map_album_add="アルバムを追加する"; /* (maps plugin) --  */
$map_marker_del="マーカーを削除する"; /* (maps plugin) --  */
$map_search_location="新しい場所の追加/検索"; /* (maps plugin) --  */
$map_location_here="Your Location Here"; /* (maps plugin) --  */
$map_search_loc_button="場所を検索する"; /* (maps plugin) --  */
$map_add_location="新しい場所を追加する"; /* (maps plugin) --  */
$map_assign_album="地図の場所にアルバムを割り当てる"; /* (maps plugin) --  */
$general_ignored_files="収集した無効にするファイル"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- 無視するファイル (半角カンマ区切り)"; /* (build_general_config.php) --  */
$general_ignored_fileext="収集した無効にするファイル拡張子"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- 無視するファイル拡張子 (半角カンマ区切り)"; /* (build_general_config.php) --  */
?>
