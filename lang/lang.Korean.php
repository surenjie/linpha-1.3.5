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
$album="<br />그림 보관소";

/* alerts */
$alert_fopen="에러! 파일을 열 수 없습니다.";
$printing_probs="인쇄 문제";
$printing_probs_msg="인쇄기능을 사용할 수 없습니다!";

/* global messages */
$subfolders="하위폴더들";
$img_th="사진들";
$in_th="in"; /* used for the photos in $foldername */
//$alb_th="앨범 중 하위 폴더 : ";
$thumb_hint_msg="세부항목을 보려면 클릭하세요.";
$latest_photo="최근 등록 ";
$view_at="보기 선택 : ";
$close_button="닫기";
$help="도움말";

/*#################################################
## installation
#################################################*/
/* install.php (page 1) */
$welc_header="LinPHA에 오신 것을 환영합니다.";
$welc_text="안녕, &quot;The Linux Photo Archive&quot; aka LinPHA 의 기본페이지입니다.
			LinPHA를 처음으로 실행하였습니다. 그러므로 설치를 하셔야 합니다.";

$welc_hint="<b>다음을 선택하기 전에:</b>";
$welc_hint1="&quot;<b>linpha/sql</b>&quot; 디렉토리에 쓰기 권한을 부여하세요!
			(i.e. chmod 777 sql)";
$next_button="다음"; /* used as left menu header in all 4 stages */
$inst_msg="LinPHA 설치"; /* used as left menu header in all 4 stages */
$inst_status_1="언어를 선택한 후, &quot;다음&quot;을 누르세요.";
$inst_status_step1="1 / 4 단계";

/* sec_stage_install (page 2) */
$inst_access_msg="Database 접근 형식 설정";
$inst_full_access_msg="<b>예 !</b><br> 나는 MySQL database에 접근할 수 있는 모든 권한이 있습니다. <br>
						나는 새로운 데이터베이스와 사용자를 생성할 수 있습니다. : 이건 내 서버입니다!";
$inst_limited_access_msg="<b>아니오 !</b><br> 나는 MySQL database 서버에 제한적으로 접속할 수 있습니다.<br>
						나의 ISP는 새로운 데이터베이스와 사용자를 만들 수 있도록 권한을 허용하지 않았습니다.";
$inst_status_2="Database 접근 형식을 정확히 알지 못하면 아니오! 를 선택하세요.";
$inst_status_step2="2 / 4 단계";

/* requirements */
$req_check_msg="시스템 필수항목 검사";
$req_found_msg="찾음";
$req_miss_msg="못찾음";
$req_safe_fail="활성";
$req_safe_ok="비활성";
$php_safemode_check_msg="PHP safe mode 검사...";
$php_version_check_msg="PHP version > 4.1.0 검사...";
$mem_check_msg="PHP memory limit 검사...";
$gd_check_msg="GD library 검사...";
$convert_check_msg="ImageMagick 검사...";
$exif_check_msg="EXIF 지원 검사...";
$summary_msg="요약:";
$safe_mode_err="당신의 서버는 PHP safe_mode를 사용하게 설정되어 있습니다. php.ini 파일에 safe_mode
			 설정한 경우엔 LinPHA를 영원히 사용할 수 없습니다!";
$inst_abort_msg="!!! 설치 취소 !!!";
$php_version_err="PHP 버전이 4.1.0.보다 낮은 경우 LinPHA를 사용할 수 없습니다.
			 PHP를 업그레이드하시기 바랍니다.";
$gd_convert_err="ImageMagick 또는 GD library를 찾을 수 없습니다. LinPHA는 둘 중 하나를
			 필요로 하므로 설치하시기 바랍니다.";
$convert_sum_found_msg="ImageMagic을 발견할 수 없습니다. 이것은 LinPHA가
			높은 품질의 썸네일을 만드는데 필요로 합니다.";
$convert_sum_miss_msg="ImageMagick을 찾을 수 없습니다.
			낮은 품질의 썸네일을 만듭니다.";
$exif_sum_found_msg="EXIF를 발견하였습니다. 이것은 LinPHA에서
			그림의 세부정보를 얻을 수 있습니다.";

/* TODO (change this one)
$exif_sum_miss_msg="NO exif support found in your PHP installation. This will prevent LinPHA
			from showing detailed Photo information.";
to ==>*/
$exif_sum_miss_msg="exif 지원을 발견하지 못했습니다. Going to make
			use of the LinPHA included EXIF parser instead.";
/* TODO next 3 */
//$session_path_check_msg="session_safe_path 검사...";
$session_path_found_msg="세션 저장 경로가 php.ini에 설정되어 있습니다. LinPHA에 올바르게 로그인할 수 있습니다.";
$session_path_miss_msg="session_save_path를 찾을 수 없습니다. php.ini 파일에 session_save_path를 설정하지 않으면 정상적으로 로그인할 수 없습니다!!";
$mem_limit_ok_msg="좋습니다, PHP memory 제한이 16MB보다 크게 설정되어 있습니다. 썸네일을 만들 때
			문제를 일으키지 않습니다.";
$mem_limit_low_msg="PHP memory 제한이 16MB보다 작습니다. 썸네일을 생성할 때 문제가 될 수 있습니다.
			php.ini 파일의 memory_limit를 증가시키거나 등록할 그림을 낮은 해상도로 변환한 후 재시도 하시기
			바랍니다.";
$choose_def_quali="그림의 기본 품질 선택";
$choose_def_quali_warn="CPU 속도가 1GHz 이하인 경우엔 높은 품질로 설정하지 마세요.(heavy CPU load)";

/* third_stage_install (page 3) */
$inst_superadmin_header="MySQL Database 관리자 설정";
$inst_superadmin_name="MySQL DB 관리자 아이디:";
$inst_superadmin_name_info="&lt;-MySQL Database 관리자 아이디 (must exist in DB)";
$inst_superadmin_pass="MySQL DB 관리자 비밀번호:";
$inst_superadmin_pass_info="&lt;-MySQL 관리자 비밀번호 (must exist in DB)";

$inst_admin_header="LinPHA 관리자 설정";
$inst_admin_name="LinPHA 관리자 아이디:";
$inst_admin_name_info="&lt;-the LinPHA 관리자 아이디";
$inst_admin_pass="LinPHA 관리자 비밀번호:";
$inst_admin_pass_info="&lt;-LinPHA 관리자 비밀번호";
$inst_admin_email="관리자 email:";
$inst_admin_email_info="&lt;-관리자 email 주소";

$inst_db_header="LinPHA Database 연결 설정";
$inst_db_host="호스트명:";
$inst_db_host_info="&lt;-호스트명: 일반적으로 &quot;localhost&quot;";
$inst_db_host_info2="&lt;-호스트명: MySQL database 호스트명";
$inst_db_host_port="포트번호:";
$inst_db_host_port_info="&lt;-포트번호: 잘 모르면 그냥 둘 것";
$inst_db_name="LinPHA Database 이름:";
$inst_db_name_info="&lt;-LinPHA Database 이름, 일반적으로 &quot;linpha&quot;";
$inst_db_name2="Database 이름:";
$inst_db_name_info2="&lt;-ISP에서 제공하는 database 이름";
$inst_table_prefix="LinPHA tables이 사용할 접두어";
$inst_table_prefix_info="&lt;-모든 LinPHA tables이 사용할 접두어";

$general_header="기본 옵션 설정";
$general_album_title="포토 앨범의 제목";
$general_album_title_info="&lt;-비워두면 기본이름 사용";
$general_photos_row="화면에 보여질 행 수:";
$general_photos_row_info="&lt;-i.e. 화면에 보여질 썸네일의 행 수";
$general_photos_col="화면에 보여질 열 수:";
$general_photos_col_info="&lt;-i.e. 화면에 보여질 썸네일의 열 수";
$general_photos_width="기본 보기의 크기 설정(너비):";
$general_photos_width_info="&lt;- 512 (기본 크기)";
$general_photos_height="기본 보기의 크기 설정(높이):";
$general_photos_height_info="&lt;- 384 (기본 크기)";
$general_img_quality="기본 보기의 품질:";
$general_img_quality_info="&lt;- 이미지 품질은 0~100로 설정할 수 있다. (기본값 75)";

$inst_status_3="모든 항목에 값을 입력하세요!";
$inst_status_step3="3 / 4 단계";

/* forth_stage_install (page 4) */
$inst_status_4="설치가 완료 되었습니다! LinPHA를 사용할 수 있습니다.";
$inst_status_step4="4 / 4 단계";
$inst_submit="종료";
$inst_db_tryconn="Database 서버 접속";
$inst_db_tryconn_error="Database 서버 접속에 실패하였습니다. using:";
$inst_db_tryconn_ok="연결됨!";
$inst_db_tryinst="Database 생성:";
$inst_db_tryinst_error="Database 생성 오류:";
$inst_db_tryinst_ok="생성됨!";
$inst_create_tb_msg="모든 tables 생성됨";

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
$inst_db_connect_inc_msg="Database 서버 접속 에러!";
$inst_db_connect_inc_msg1="DB에서 $db_realname 를 선택하는 중 에러 발생.<br>
	이 메시지가 설치하는 동안 나타났다면, linpha 하위 디렉토리 중 &quot;sql&quot; 아래의
	db_connect.php 파일을 제거하세요.";
/* ------------------------------------------------------------------ */

$table_create="테이블 생성 중:";
$table_create_error="테이블 생성 에러!";
$table_create_ok="정상 생성!";
$table_insert_admin="Admin 계정 생성 중:";
$table_insert_admin_error="Admin 계정 생성 에러!";
$table_insert_admin_ok="정상 생성!";
$write_db_config="Database 설정 파일 저장 중";
$fopen_error="sql/db_config.php을 쓰기로 열 수 없습니다. chmod 777 로 권한 변경 후 다시 설치하세요.";
$fopen_ok="정상 작성!";
$install_finish_msg="설치 완료!!";
$admin_task="click하면 계속 진행됩니다.";
$file_create_ok="정상 생성!";
$configure_error="모든 필드에 값을 채워주세요 !!!";
$could_not_open="테이블 사용자 설정 에러! DB에 새로운 사용자를 등록할 수 있는 권한이 없어 보입니다.<br>
				설치 과정 중 2번째 페이지에서 제한적인 접속메뉴를 선택하세요.<br>";

/*#################################################
## header.php
#################################################*/
$page_title="LinPHA - The Linux Photo 저장소";
$head_title="The Linux Photo 저장소";
$book_home="홈";
$book_about="about";
$book_admin="관리자";
$book_admin_user="설정";
$book_links="연결";
$book_search="검색";
$book_logout="로그아웃";
$book_login="로그인";
$num_pictures="사진수:";
$user_visits=": 방문자";
$user_online=": 접속중인 사용자";
$guest="손님";
$html_lang="ko";
$html_charset="euc-kr";

/*#################################################
## index.php
#################################################*/
$index_welc_text="안녕하세요. &quot;The Linux Photo 저장소&quot; aka LinPHA 의 초기 페이지 입니다.
			최근 업데이트된 파일은 <a href='http://linpha.sf.net/'><u>LinPHA</u></a>에서 보실 수 있습니다.";

/*#################################################
## search.php
#################################################*/
$search_header="Linpha-검색";
$radio_all="모두";
$radio_descript="요약";
$radio_comment="내용";
$radio_category="분류";
$radio_file="파일명";
$search_in="앨범에서 찾기";
$search_all="모든 앨범에서 찾기";
$search_for="검색어";
$search_button="검색";
$photos_found="찾았음";
$search_info="LinPHA 검색 페이지";
$search_msg="LinPHA 데이터베이스에서 찾기:";

/*#################################################
## img_view.php
#################################################*/
$img_detail="이미지 설명";
$img_size="실제크기";
$img_com="내용";
$img_des="요약";
$img_cat="분류";
$img_name="이름";
$img_info_stored="DB에 코멘트 저장";
$please_login="코멘트를 작성하기 위해선 <a href='login.php'><font color='#000099'><u>로그인</u></font></a>을 하셔야 합니다.";
$back_to_thumbs="<b><u>썸네일 뷰로 가기</u></b>";
$back_to_search="<b><u>검색으로 가기</u></b>";
$button_next="다음";
$button_prev="이전";
$exif_ext_error="이 PHP 버전은 EXIF를 지원하지 않습니다.";
$exif_error="이미지에 exif 정보가 담겨 있지 않습니다!";
$exif_more="세부 설명";
$exif_less="요약 설명";
$detail_header="사진";
$detail_header1="/";
$detail_header2="현재 폴더에서<br>";
$php_to_old="PHP < 4.2.0 EXIF 비활성!";
$views="회 조회";
$slideshow="슬라이드 쇼";
$seconds="초";
$go="실행";
$stopslide="중지";
/* image rotating */ /* TODO next */
$img_rotate_ok="이미지 순환 보기";
$img_rotating="이미지 순환 문제"; // TOC entry
$img_rotating_hint1="이미지 순환 비활성!";
$img_rotating_hint2="to see why";

/*#################################################
## login.php
#################################################*/
$login_msg="로그인하세요!";
$login_error="알 수 없는 사용자 또는 비밀번호";
$login_name="사용자 ID";
$login_pass="비밀번호";
$login_info="LinPHA 로그인 페이지";
$login_request_account_info="새로운 계정 요청:"; /* TODO change! */
$login_request_target="LinPHA 관리자에게 연락"; /* TODO */
$login_admin_info="설정 작업을 위해선 LinPHA admin 계정으로 로긴해야 합니다.";
$login_friend_account_info="만약 &quot;친구&quot; 계정을 가지고 있다면,
개인별 설정을 이곳에서 변경할 수 있습니다.";


/*#################################################
## admin.php
#################################################*/
/* other messages */
$admin_page_header="LinPHA 관리";
$please_turn_off_msg="이미지를 등록한 뒤에는 '썸네일 자동 생성/삭제'를 비활성화하세요.<br>
						LinPHA이 10초 이상 빨라집니다. :)";
/* left menu */
$logout_msg="로그아웃";
$welc_msg="환영합니다 ";
$stat_msg="당신은 그림에 <b>코멘트</b>와 설명을 달 수 있는 권한을 부여받았습니다.";
$back_to_msg="<b>그림보기로 돌아가기</b>";
$href_general_conf="일반 환경설정";
$href_user_conf="사용자 관리";
$href_folder_conf="폴더 관리";
$href_sql="MySQL DB 관리"; /* TODO */
$href_ftp="FTP 관리";
$href_stats="LinPHA 통계자료";
$href_other_conf="썸네일 EXIF/IPTC";


/* general config */
/* uses also entries from install.php */
$default_language="LinPHA 기본 언어";
$default_language_info="&lt;--기본 언어 설정";
$general_auto_lang="언어 자동 선택 활성/비활성"; /* TODO 2 lines*/
$general_auto_lang_info="&lt;-- 방문한 브라우저의 언어를 자동 검색";
$general_success_msg="! 수정 완료 !";

/* TODO 6 lines (addition and REPLACEMENT)*/
$general_rotate="이미지 순환 활성/비활성";
$general_rotate_info="&lt;-- <b>큰 사이즈의 파일엔 주의할 것</b>";
$general_exifinfo="모든 EXIF 지원 활성/비활성";
$general_exifinfo_info="&lt;-- EXIF 기능 활성/비활성";
$general_exifdefault="기본적인 EXIF 정보 보기";
$general_exifdefault_info="&lt;-- 기본적인 EXIF 정보 보기 활성화";

$general_exiflevel="EXIF 정보 단계";
$general_exiflevel_info="&lt;-- EXIF 정보 단계 설정";
$exif_low="낮음";
$exif_medium="중간";
$exif_high="높음";
$general_filename="파일명 보이기 활성/비활성";
$general_filename_info="&lt;-- 썸네일 밑에 파일명 보이기";
$general_thumb_order="썸네일 보기 순서";
$general_thumb_order_info="&lt;-- 파일명 혹은 날짜로 썸네일보기 순서를 정한다.";
$thumb_order_date="날짜";
$thumb_order_file="파일명";
$general_autoconf="썸네일 자동 생성/삭제";
$general_autoconf_info="&lt;-- <b>비활성으로 선택하면 속도가 향상됨</b>";
$general_counterstat="counter 활성/비활성";
$general_counterstat_info="&lt;-- 기본값은 활성";
$general_blocking="IP별 Count 제한 시간(분)";
$general_blocking_info="&lt;-- 정해진 시간 동안 새롭게 Count하지 않는다.";
$general_theme="LinPHA 테마 변경";
$general_theme_info="&lt;-- LinPHA 기본 테마 설정";
$aqua_theme="Aqua";
$colored_theme="Colored";
$neptune_theme="Neptune";
$shadow_theme="Shadow";
$general_hq="HQ 썸네일과 이미지 활성/비활성";
$general_hq_info="&lt;-- 비활성이면 속도가 증가된다.";
$submit_button_general="변경사항 저장";
$button_on_msg="활성";
$button_off_msg="비활성";
$basic_opts="기본";
$advanced_opts="고급";
$show_basics="::기본 옵션으로 가기::";
$show_advanced="::고급 옵션으로 가기::";
$general_printing="손님계정 인쇄 가능 활성/비활성";
$general_printing_info="&lt;-- 활성으로 설정할 때 모든 사람이 인쇄 가능함";
$general_slideshow="슬라이드쇼 활성/비활성";
$general_slideshow_info="&lt;-- 슬라이드쇼를 활성화하거나 비활성화한다.";
$general_mini_preview="이전/다음 버튼 이미지 상태/크기";
$general_mini_preview_info="&lt;-- 비활성으로 선택한 경우 적은 대역폭에서도 많은 사용자가 사용할 수 있음";

/* modify existing user table */
$mod_user_header="기존 계정 수정";
$submit_button_mod_user="계정 수정";
$mod_user_success_msg="! 계정 수정 !";
$submit_button_delete="삭제";
$del_user_success_msg="! 계정 삭제 !";

/* add new user table */
$new_user_header="새로운 사용자 생성";
$new_user_name_info="사용자 아이디";
$new_user_pass_info="비밀번호";
$new_user_mail_info="이메일";
$new_user_level_info="사용자등급";
$friend="친구";
$submit_button_new_user="사용자 생성";
$new_user_success_msg="! 사용자 생성!";

/* friends account table */
$friend_user_header="계정 설정";
$submit_button_friend_user="계정 수정";
$delete_button_friend_user="계정 삭제";
$friend_info_msg="계정 환경 설정/변경";

/* add new category table */
$new_cat_header="새 분류 추가";
$new_cat_info="새로 추가될 분류명";
$submit_button_new_cat="분류 생성";
$new_cat_success_msg="! 분류가 생성됨!";
$mod_cat_header="분류 수정/삭제";
$cat_name_header="분류명";
$cat_mod_header="분류 수정";
$cat_del_header="분류 삭제";
$submit_button_mod_cat="수정";

/* set directory permissions */
$set_dir_perms_header="폴더 권한 설정";
$dir_name="폴더";
$dir_perms="권한";
$action="동작";
$submit_button_folder="확인";
$public="공개";
$friends="친구들";
$private="비공개";
$new_perms_success_msg="! 권한 변경됨!";

/*#################################################
## build_stats.php (called by admin.php)
#################################################*/
$stats_over_header="전체 통계";
$stats_over_photos="저장된 이미지수:";
$stats_over_views="전체 조회수:";
$stats_over_albums="저장된 앨범수:";
$stats_over_most_alb_visists="가장 많이 방문한 앨범:";
$stats_over_space="모든 앨범이 차지하는 디스크공간:";
$stats_over_visitors="방문자수:";
$stats_over_users="등록 사용자:";
$stats_top_ten="조회수 Top 10";
$stats_rank="순위:";
$stats_no_views="조회수:";
$stats_last_view="최근 조회:";
$stats_alb_name="앨범 이름:";

/*#################################################
## create_all_thumbs.php
#################################################*/
$parse_first="첫번째 파싱";
$parse_sec="두번째 파싱";
$parse_third="세번째 파싱";
$parse="지금 파싱";
$parsed="파싱됨:";
$dirs="하위 디렉토리들";
$done="모두 처리됨";
$not_allowed_msg="이 스크립트를 실행하도록 허가되지 않았습니다!";
/* these entries are called from within admin.php */
$th_msg="모든 썸네일 한번에 만들기!";
$table_hint_msg="모든 하위디렉토리의 썸네일을 다시 만듭니다!";
$start_button="시작!";
$recreate_thumbs_header="모든 썸네일 다시 만들기";
$recreate_thums_msg="모든 썸네일을 다시 만듭니다! 모든 코멘트, 설명, 상태 정보가 사라집니다!";
$recreate_thums_warning="이 작업은 모든 코멘트, 설명, 상태 정보가 사라집니다. 또한 복구할 수도 없습니다. 정말 실행하길 원하십니까?";

/*#################################################
## Printing, all files
#################################################*/
$print_layout="인쇄 레이아웃 선택";
$images_page="이미지수/페이지";
$indexprint="찾아보기 인쇄 (28)";
$note="<strong>메모:</strong> 인쇄하기 전 웹 브라우저의 \"페이지 설정\"에서
			페이지에 모든 그림이 출력될 수 있도록 설정해야 합니다!!!";
$print_button="인쇄 미리보기";
$href_check_all="모두 선택";
$href_clear_all="모두 취소";
$print_error="에러, 이미지를 선택하지 않았습니다 !!!";
$print_mode="인쇄 모드";
$print_image="이미지 인쇄";
$videos_msg="비디오 파일은 인쇄할 수 없습니다";

/*#################################################
## FTP, all files
#################################################*/


/*#################################################
## MySQL backup, most files ;-)
#################################################*/
$mysql_info_header="LinPHA MySQL 데이터베이스 관리 시스템 ver.";
$mysql_cancel="취소";
$mysql_DHTML_hint="DHTML 보기 비활성 - 백업을 수행하는 동안 다른 것을 보지 않는 경우에 사용";
$mysql_select_all="모두 선택";
$mysql_deselect_all="모두 선택안함";
$mysql_create_backup="백업 만들기";
$mysql_back_menu="메뉴로 돌아가기";
$mysql_table_checks="모든 Table 검사...";
$mysql_table_check="Table 검사";
$mysql_struct_msg="구조 만들기";
$mysql_in_file_dump_msg="자료 백업받기";
$mysql_progress="전체 진행 상태:";
$mysql_back_complete="백업 완료 in";
$mysql_back_menu_long="MySQL 데이터베이스 백업 초기 메뉴로 돌아가기";
$mysql_open_warn1="<B>경고:</B> 열기 실패 ";
$mysql_open_warn2="디렉토리의 권한을 777로 변환하시오!<BR><BR><I>CHMOD 777</I>";
$mysql_date_msg="지금은 "; // it follows time of the day...
$mysql_last_backup="MySQL 데이터베이스 마지막 전체 백업: ";
$mysql_backup_hint="일반적으로 1주일에 한 번 이상의 백업 작업은 필요없다.";
$mysql_down_backup="이전 전체 백업 다운로드 ";
$mysql_down_backup_part="이전의 일부 백업 다운로드 ";
$mysql_down_backup_struct="이전의 구조만 백업 다운로드 ";
$mysql_down_backup1="(오른쪽-클릭, 다른 이름으로 저장...)";
$mysql_unknown_backup="마지막 MySQL 데이터베이스 백업: <I>알 수 없음</I>";
$mysql_href_recom="새 전체 백업 생성, 모두(추천)";
$mysql_href_standard="새 전체 백업 생성, 표준(작은 사이즈)";
$mysql_href_partial="새 전체 백업 생성, 선택된 테이블만";
$mysql_href_structure="새 전체 백업 생성, 테이블 구조만";
$mysql_days_last="일";
$mysql_hours_last="시";
$mysql_min_last="분";
$mysql_sec_last="초";
$ago="지남"; // reads in context "some days ago"
$backup="백업";
$restore="복구";
$optimize="최적화";
$optimize_tables="table 최적화";
$opt_table_name="테이블명";
$opt_table_check="테이블 검사";
$opt_table_optimize="테이블 최적화";
$opt_table_msg="Type of message";
$opt_start_msg="모든 DB Table의 최적화를 실행합니다.";
$fullback_hint_msg="여러 데이터베이스를 사용하고 있다면 <b>일부</b> 백업 방법을 선택하세요.";
$restore_last_fullback="마지막 <b>전체</b> 백업 복구:";
$restore_last_partback="마지막 <b>일부</b> 백업 복구:";
$restore_error="백업파일을 열 때 오류가 발생했습니다. 파일을 찾을 수 없습니다!";
$restore_success="복구 완료!";

/*########################################################################
### FILEMANGER
########################################################################*/

define('STR_ACCESS_DENIED','<H1>접근 금지</H1> 이 디렉토리에 접근할 수 있는 권한이 없습니다');
define('STR_BACK',	'뒤로');
define('STR_LESS',	'적게');
define('STR_MORE',	'더');
define('STR_LINES',	'줄 수');
define('STR_FUNCTIONLIST', '함수 목록');
define('STR_EDIT',	'수정');
define('STR_VIEW',	'보기');
define('STR_RENAME',	'이름변경');
define('STR_MKDIR',		'디렉토리생성');
define('STR_DELETE',	'삭제');
define('STR_BOTTOM',	'아래');
define('STR_TOP',		'위');
define('STR_FILENAME',	   '파일명');
define('STR_FILESIZE',	   '크기');
define('STR_LASTMODIFIED', '마지막 변경일');
define('STR_SUM', '<B>%s</B> 바이트 in <B>%s</B> 항목들');
define('STR_CREATEDIRLEGEND', '디렉토리 생성');
define('STR_CREATEDIR',       '생성할 디렉토리 이름:');
define('STR_CREATEDIRBUTTON', '디렉토리 생성');
define('STR_RENAMELEGEND',       '이름변경');
define('STR_RENAMEENTERNEWNAME', '새로운 이름 입력 %s:');
define('STR_RENAMEBUTTON',       '이름변경');
define('STR_ERROR_DIR','에러: 디렉토리의 내용을 읽을 수 없습니다.');
define('STR_AUDIO',            '오디오');
define('STR_COMPRESSED',       '압축');
define('STR_EXECUTABLE',       '실행');
define('STR_IMAGE',            '이미지');
define('STR_SOURCE_CODE',      '소스 코드');
define('STR_TEXT_OR_DOCUMENT', '문서');
define('STR_WEB_ENABLED_FILE', '웹용 파일');
define('STR_VIDEO',            '비디오');
define('STR_DIRECTORY',        '디렉토리');
define('STR_PARENT_DIRECTORY', '상위 디렉토리');
define('STR_EDITOR_SAVE',      '저장');
define('STR_EDITOR_SAVE_ERROR','<I>%s</I> 파일을 쓸 수 없거나 존재하지 않습니다');
define('STR_EDITOR_SAVE_ERROR_WRONG_VALUE','while editing the file <I>%s</I>, you have given the following value at byteposition #%s: %s.');
define('STR_EDITOR_SAVE_ERROR_HEX_VALUE_NEEDED','00부터 FF 사이의 16진수 값을 입력하시오.');
define('STR_EDITOR_SAVE_ERROR_DEC_VALUE_NEEDED','0부터 255 사이의 10진수 값을 입력하시오.');
define('STR_FILE_UPLOAD_NAVI_HINT', '빠른 이동');
define('STR_FILE_UPLOAD_DRIVES', '드라이브:');
define('STR_FILE_UPLOAD', '업로드');
define('STR_FILE_UPLOAD_MAIN', '업로드');
define('STR_FILE_UPLOAD_DISABLED', 'php.ini 파일에 업로드 기능이 비활성으로 설정되어 있습니다.');
define('STR_FILE_UPLOAD_DESC','업로드를 하려면 파일을 선택하세요. 그리고 업로드가 완료된 후 동작을 선택하세요.');
define('STR_FILE_UPLOAD_FILE','파일');
define('STR_FILE_UPLOAD_TARGET','업로드 위치 ');
define('STR_FILE_UPLOAD_ACTION','업로드 성공 후 동작:');
define('STR_FILE_UPLOAD_NOTHING','동작없음');
define('STR_FILE_UPLOAD_DROPFILE','선택한 동작 완료 후 업로드 파일 삭제');
define('STR_FILE_UPLOAD_MAXFILESIZE','php.ini에 설정된 1개의 파일마다 허용되는 최대 용량 ');
define('STR_FILE_UPLOAD_ERROR',        '에러: %s 파일을 %s 디렉토리로 이동할 수 없습니다.');
define('STR_FILE_UPLOAD_CHDIR_ERROR',  '에러: Unable to switch (chdir) to %s directory. File being processed: %s');
define('STR_FILE_UPLOAD_UNLINK_ERROR', '에러: Unable to delete %s after processing.');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_INI_SIZE', '에러: php.ini 파일의 upload_max_filesize 초과 %s - %s');
define('STR_FILE_UPLOAD_ERROR_FILE_EXCEEDS_FORM_SIZE','에러: HTML FORM 태그의 업로드 사이즈 초과 %s');
define('STR_FILE_UPLOAD_ERROR_FILE_PARTIAL',          '에러: The uploaded file %s was only partially uploaded');

/*########################################################################
### BIG FAT NOTICE !
### AS OF LINPHA 0.9.0 ALL NEW ENTRIES ARE PLACED BELOW THIS MSG
### DEVELOPERS PLEASE MAKE USE OF THE "LANGUPDATE.PHP" SCRIPT!
########################################################################*/

$pano_view="파노라마 보기"; /* (img_view.php) -- new [panorama view] href  */
$close_win="창 닫기"; /* (various files) -- javascript close window */
$nav_hint="마우스나 화살표 키를 이용하여 이동하세요."; /* (image_panorama_view.php) --  */
$pano_view_of="파노라마 보기"; /* (image_panorama_view.php) -- header message */
$php_basedir_check_msg="PHP의 open basedir 설정 검사 "; /* (sec_stage_install.php) --  */
$req_basedir_fail="안됨"; /* (sec_stage_install.php) -- YES, it\'s really just no/nein ;-) */
$basedir_active_msg="오류, \"open_basedir\" PHP 설정 오류. !<br>"; /* (sec_stage_install.php) --  */
//$basedir_active_msg1="+ LinPHA will use GD lib to create thumbs, however expect some problems<br>"; /* (sec_stage_install.php) --  */
$basedir_active_msg2="+ If possible, please unset \"open_basedir\" in PHP.ini"; /* (sec_stage_install.php) --  */
//$gd_basedir_err="+ If possible, please unset \"open_basedir\" in PHP.ini or recompile PHP with GD lib support (--with-gd)"; /* (sec_stage_install.php) --  */
$extract_tar_gz="*.tar.gz 파일 풀기 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_tar_bz2="*.tar.bz2 파일 풀기 (UNIX)"; /* (index.php) --  */
$extract_gz="gzip 풀기 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_zip="unzip 풀기 (UNIX)"; /* (index.php) -- filemanger upload select */
$extract_winzip="pkzip 풀기 (WINDOWS WINZIP)"; /* (index.php) -- filemanger upload select */
$new_group_success_msg="! 그룹 추가 !"; /* (admin.php) -- redirect message */
$mod_group_success_msg="! 그룹 수정 !"; /* (admin.php) -- redirect message */
$del_group_success_msg="! 그룹 삭제 !"; /* (admin.php) -- redirect message */
$mod_cat_success_msg="! 카테고리 수정 !"; /* (admin.php) -- redirect message */
$del_cat_success_msg="! 카테고리 삭제 !"; /* (admin.php) -- redirect message */
$href_groups="그룹 추가 또는 수정"; /* (build_user_conf/build_folder_conf) -- href message to group management */
$del_warning="경고: 새 계정으로 로그인 하세요!!!"; /* (build_user_conf.php) -- java popup to notify admin user */
$href_to_folder_conf="폴더 관리로 가기"; /* (build_user_conf.php) -- navi href  */
$href_to_user_conf="사용자 관리로 가기"; /* (build_user_conf.php) -- navi href  */
$header_new_group="새 그룹 추가"; /* (build_user_conf.php) -- table header */
$header_groupname="그룹명"; /* (build_user_conf.php) -- table header */
$button_addgroup="그룹 추가"; /* (build_user_conf.php) -- submit button */
$header_mod_group="그룹 수정/삭제"; /* (build_user_conf.php) -- table header */
$mod_group_header="그룹 수정"; /* (build_user_conf.php) -- table header */
$del_group_header="그룹 삭제"; /* (build_user_conf.php) -- table header */
$search_to_short="검색어가 너무 짧습니다. 최소 2글자 이상이어야 합니다."; /* (search.php) --  */
$general_thumb_size="썸네일 크기 변경"; /* (build_general_conf.php) -- thumbsize stuff */
$general_thumb_size_info="&lt;-- 최대 썸네일 크기 설정(px)"; /* (build_general_conf.php) -- thumbsize stuff */
//$general_thumb_border="썸네일 테두리 활성/비활성"; /* (build_general_conf.php) -- thumb border stuff */
//$general_thumb_border_info="<-- 썸네일에 테두리를 표시할지 설정"; /* (build_general_conf.php) -- thumb border stuff */
$inst_thumbsize_header="썸네일 크기 설정"; /* (third_stage_install.php) -- thumb size stuff */
$inst_thumbborder_header="테두리 설정"; /* (third_stage_install.php) -- thumb border stuff */
$inst_thumbborder_enable="이미지 테두리 활성"; /* (third_stage_install.php) -- thumb border checkbox msg */
$inst_thumbborder_disable="이미지 테두리 비활성"; /* (third_stage_install.php) -- thumb border checkbox msg */
$safemode_active_msg="잘못됨, you configured PHP to make use of \"safe_mode\" restrictions!<br />"; /* (sec_stage_install.php) --  */
$safemode_active_msg2="+ If possible, please unset \"safe_mode\" in PHP.ini"; /* (sec_stage_install.php) --  */
$general_anon_post="익명 코멘트 달기 허용/불허"; /* (build_general_conf.php) --  */
$general_anon_post_info="&lt;-- 익명 코멘트 달기 설정"; /* (build_general_conf.php) --  */
$stats_over_comment="코멘트 등록"; /* (build_stats.php) --  */
$top10_downs_href="다운로드 top 10"; /* (build_stats.php) --  */
$top10_views_href="조회수 top 10"; /* (build_stats.php) --  */
$stats_head_downs="다운로드 top 10"; /* (build_stats.php) --  */
$no_downloads="다운로드 회수"; /* (build_stats.php) --  */
$general_anon_download="익명 다운로드 활성/비활성"; /* (build_genera_config.php) --  */
$general_anon_download_info="<-- 다운로드 링크를 보일건지 말건지 설정"; /* (build_general_config.php) --  */
$seach_multiple_select_use="다중 선택 사용"; /* (search.php) --  */
$search_and="그리고"; /* (search.php) --  */
$search_or="또는"; /* (search.php) --  */
$search_categories="카테고리"; /* (search.php) --  */
$search_with_available_filters="With available filters"; /* (search.php) --  */
$search_select_album="앨범 선택"; /* (search.php) --  */
$search_date_from_to="날짜 from / to"; /* (search.php) --  */
$search_combination_and_or="In combination with AND and OR"; /* (search.php) --  */
$new_user_new_password="새 비밀번호"; /* (build_user_conf.php) --  */
$new_user_error4="사용자명은 빈값일 수 없습니다."; /* (admin.php) --  */
$new_user_error5="사용자명이 이미 존재합니다."; /* (admin.php) --  */
$new_user_error1="예전 비밀번호를 고칠 수 없습니다"; /* (admin.php) --  */
$new_user_error2="새로 입력한 패스워드가 재입력한 패스워드와 일치하지 않습니다."; /* (admin.php) --  */
$new_user_error3="Email을 고칠 수 없습니다"; /* (admin.php) --  */
$new_user_old_password="예전 비밀번호"; /* (admin.php) --  */
$new_user_retype_password="새로운 비밀번호 재입력"; /* (admin.php) --  */
$select_db_header="Database 형식 선택"; /* (sec_stage_install.php) --  */
$mysql_info="MySQL database 접속 선택"; /* (sec_stage_install.php) --  */
$postgres_info="PostgreSQL 데이터베이스 접속 선택"; /* (sec_stage_install.php) -- reads: ...Please see info */
$login_autologin="자동 로긴"; /* (toc.php) --  */
$login_autologin_user="자동 로긴 사용자 정보"; /* (toc.php) --  */
$toc_timer="타이머"; /* (toc.php) --  */
$general_autologin="자동 로긴 활성/비활성"; /* (build_general_conf.php) --  */
$general_autologin_info="&lt;-- 자동 로긴 옵션 설정"; /* (build_general_conf.php) --  */
$general_timer="타이머 활성/비활성"; /* (build_general_conf.php) --  */
$general_timer_info="&lt;-- activate the output of the parsetime in the footer"; /* (build_general_conf.php) --  */
$login_autlogin="자동 로긴"; /* (login.php) --  */
$lostpw_title="비밀번호 찾기"; /* (login.php) --  */
$lostpw_question="비밀번호 찾기"; /* (login.php) --  */
$lostpw_type_user_or_email="이름이나 이메일을 적으세요."; /* (login.php) --  */
$lostpw_email1="Somebody has made use of the lost password function. If it wasn't you, just ignore this message and nothing will happen with your password. If it was you, put this code in the demanded field:"; /* (login.php) --  */
$lostpw_email1_part2="( 주의 : 이것은 당신의 새 패스워드가 아닙니다! )"; /* (login.php) --  */
$lostpw_email1_part3="Linpha 관리자"; /* (login.php) --  */
$lostpw_email_error="에러: 이메일을 보낼 수 없습니다. 관리자에게 문의하세요."; /* (login.php) --  */
$lostpw_error_nothing_found="사용자명이나 비밀번호를 찾을 수 없습니다."; /* (login.php) --  */
$lostpw_email_sent="이메일을 당신에게 보냈습니다."; /* (login.php) --  */
$lostpw_should_receive="몇 분 내에 메일을 받으실 수 있고, 받은 이메일의 코드를 이 필드에 입력하세요 : "; /* (login.php) --  */
$lostpw_go_back="뒤로"; /* (login.php) --  */
$lostpw_email2="비밀번호 변경 성공. 새로운 비밀번호:"; /* (login.php) --  */
$lostpw_email2_part2="You can change it later by using the \"my settings\" link."; /* (login.php) --  */
$lostpw_new_password="새 비밀번호"; /* (login.php) --  */
$lostpw_successfully_changed="비밀번호 변경 성공, 곧 새로운 비밀번호를 Email을 통해 받을 수 있을 것입니다."; /* (login.php) --  */
$lostpw_error_wrong_code="Sorry, that isn't correct."; /* (login.php) --  */
$lostpw_enter_correct_code="Enter the correct code from the email in this field:"; /* (login.php) --  */
$lang_plugins['plugins']="LinPHA 플러그인"; /* (admin.php) --  */
$lang_plugins['watermark']="워터마크"; /* (admin.php, toc.php) --  */
$lang_plugins['benchmark']="벤치마크"; /* (admin.php, toc.php) --  */
$lang_plugins['sql']="DB 관리"; /* (admin.php, toc.php) --  */
$lang_plugins['active_plugins']="활성화된 플러그인"; /* (admin.php) --  */
$lang_plugins['enabled']="활성"; /* (plugins.php) --  */
$lang_plugins['disabled']="비활성"; /* (plugins.php) --  */
$lang_plugins['update']="수정"; /* (plugins.php) --  */
$lang_plugins['plugins_updated']="플러그인 수정"; /* (admin.php, plugins.php) --  */
$wm_wm_man="워터마크 관리 "; /* (watermark.php) --  */
$wm_disable="워터마크 비활성 "; /* (watermark.php) --  */
$wm_change_example_img="예제 이미지 변경 "; /* (watermark.php) --  */
$wm_no_input_files_found="파일을 찾을 수 없습니다. "; /* (watermark.php) --  */
$wm_image_quality="이미지 품질 (미리보기에만 적용됨) "; /* (watermark.php) --  */
$wm_enable_text="문자 활성 "; /* (watermark.php) --  */
$wm_text="문자 "; /* (watermark.php) --  */
$wm_font="글꼴 "; /* (watermark.php) --  */
$wm_fontsize="글자크기 "; /* (watermark.php) --  */
$wm_fontcolor="글자색깔 "; /* (watermark.php) --  */
$wm_align="정렬 "; /* (watermark.php) --  */
$wm_pos_hor="수평 위치 "; /* (watermark.php) --  */
$wm_pos_ver="수직 위치 "; /* (watermark.php) --  */
$wm_height="문자열 높이 "; /* (watermark.php) --  */
$wm_width="문자열 너비 "; /* (watermark.php) --  */
$wm_shadow_size="그림자 크기 "; /* (watermark.php) --  */
$wm_shadow_color="그림자 색깔 "; /* (watermark.php) --  */
$wm_enable_image="이미지 활성"; /* (watermark.php) --  */
$wm_available_images="사용가능 이미지"; /* (watermark.php) --  */
$wm_no_images_found="이미지를 찾을 수 없습니다."; /* (watermark.php) --  */
$wm_dissolve="융합비율"; /* (watermark.php) --  */
$wm_preview="미리보기"; /* (watermark.php) --  */
$wm_linebreak="줄바꿈"; /* (watermark.php) --  */
$wm_enable_shadow="그림자 활성"; /* (watermark.php) --  */
$wm_enable_rectangle="직사각형 활성"; /* (watermark.php) --  */
$wm_rectangle_color="색깔"; /* (watermark.php) --  */
$wm_enable_ext_shadow="확장 그림자 활성"; /* (watermark.php) --  */
$wm_status="상태"; /* (watermark.php) --  */
$wm_enabled="활성"; /* (watermark.php) --  */
$wm_disabled="비활성"; /* (watermark.php) --  */
$wm_restore_to="재설정"; /* (watermark.php) --  */
$wm_inital_settings="설정 초기화"; /* (watermark.php) --  */
$wm_add_more_examples="You can add more example images in your linpha directory in the folder"; /* (watermark.php) --  */
$wm_example="예제"; /* (watermark.php) --  */
$wm_shadow_fontsize="그림자 글자크기"; /* (watermark.php) --  */
$wm_settings_for_both="이미지와 문자 설정"; /* (watermark.php) --  */
$wm_center="가운데"; /* (watermark.php) --  */
$wm_north="위"; /* (watermark.php) --  */
$wm_northeast="위 오른쪽"; /* (watermark.php) --  */
$wm_northwest="위 왼쪽"; /* (watermark.php) --  */
$wm_south="아래"; /* (watermark.php) --  */
$wm_southeast="아래 오른쪽"; /* (watermark.php) --  */
$wm_southwest="아래 왼쪽"; /* (watermark.php) --  */
$wm_east="오른쪽"; /* (watermark.php) --  */
$wm_west="왼쪽"; /* (watermark.php) --  */
$bm_file_err="오류, 파일을 선택하지 않았습니다";
$bm_var_err="오류, 입력변수를 검사하세요";
$bm_notfound_err="오류, 파일을 찾을 수 없습니다";
$bm_noimg_err="오류, 이미지 파일이 아닙니다";
$bm_tmpfile_err="오류, 임시 이미지 파일생성 도중";
$bm_tmpfile_warn="주의: 임시 이미지 파일을 지울 수 없습니다";
$bm_time_total="전체 실행 시간: ";
$bm_img_sec="1개의 이미지 처리 시간: ";
$bm_avg_img="Average time for each image (mouse over to update image): ";
$bm_qual_size="품질/크기";
$bm_quality="품질: ";
$bm_height="높이: ";
$bm_width="너비: ";
$bm_size="이미지 크기: ";
$bm_create = "Creating benchmark with conversion utility";
$bm_interval = "간격";
$bm_calc = "계산중";
$bm_img = "이미지";
$bm_inloop="루프 실행중";
$bm_qual_range="품질 범위: ";
$bm_size_range="크기 범위 (높이만): ";
$bm_repeats="반복: ";
$bm_con_util="변환 도구 선택: ";
$bm_current_settings="현재 설정"; /* (benchmark.php) --  */
$bm_preview="미리보기"; /* (benchmark.php) --  */
$bm_save_settings="설정 저장"; /* (benchmark.php) --  */
$wm_addexamples="워터마크: 예제이미지 추가"; /* (watermark.php) --  */
$wm_addimg="워터마크: 워터마크 이미지 추가"; /* (watermark.php) --  */
$wm_addfont="워터마크: 폰트 추가"; /* (watermark.php) --  */
$wm_colorsetting="워터마크: 색상 설정"; /* (watermark.php) --  */
$comment_hint="힌트: 앨범의 다른 이미지로 이동하려면 위, 아래 이미지를 선택하세요."; /* (linpha_comments.php) --  */
$comment_end="앨범의 마지막 이미지입니다."; /* (linpha_comments.php) --  */
$comment_beginning="앨범에 이전 이미지가 없습니다."; /* (linpha_comments.php) --  */
$comment_back="이미지 보기로 돌아가기"; /* (linpha_comments.php) --  */
$comment_edit_img="카테고리/코멘트 수정"; /* (linpha_comments.php) --  */
$comment_change_img_details="이미지 설명 수정"; /* (linpha_comments.php) --  */
$comment_last_comments="마지막 코멘트"; /* (linpha_comments.php) --  */
$comment_comment_by="comment by"; /* (linpha_comments.php) --  */
$category_delete_warning="Warning: Categories already assigned to images get lost"; /* (build_category_conf.php) --  */
$pass_2_short="오류, 비밀번호는 최소한 3자 이상이어야 합니다"; /* (various) --  */
$album_edit="앨범 코멘트 수정"; /* (linpha_comments.php) --  */
$album_details="앨범 상세보기"; /* (linpha_comments.php) --  */
$wm_save_note="메모: 워터마크는 로그인한 사용자에게는 보이지 않습니다. 먼저 로그아웃한 후 워터마크를 확인하세요."; /* (watermark.php) --  */
$lang_plugins['guestbook']="방명록"; /* (admin.php) --  */
$print_low_quality="보통 품질"; /* (printing_view.php) --  */
$print_high_quality="높은 품질 (매우 느림!)"; /* (printing_view.php) --  */
$gb_title="LinPHA 방명록";
$gb_sign="LinPHA 방명록! 새 메시지 추가";
$gb_from="위치";
$gb_from_no="No Location given";
$gb_pages="페이지";
$gb_messages="방명록 메시지";
$gb_msg_error="이름과 코멘트는 필수 입력 사항입니다.";
$gb_new_msg="새 메시지 추가";
$gb_name="이름";
$gb_email="Email";
$gb_hp="홈페이지";
$gb_country="소속 나라";
$gb_header="LinPHA 방명록";
$gb_opts="방명록 옵션";
$gb_rows="한 페이지에 보여질 메시지 수";
$gb_anon="익명 메시지 등록 활성 여부";
$gb_order="정렬 순서";
$wm_resize="워터마크 크기를 이미지 크기의 X% 항상 고정"; /* (watermark.php) --  */
$wm_help_and_descr="도움말"; /* (watermark.php) --  */
$folder_remove_hint="만약 모든 것이 잘 되었다면 /install 폴더를 지우세요.(보안)..."; /* (forth_stage_install.php) --  */
$add_alb_com="앨범 코멘트 추가"; /* (img_view.php) --  */
$add_img_com="이미지 코멘트 추가"; /* (img_view.php) --  */
$album_com="앨범 코멘트"; /* (*_stage_album.php) --  */
$formatting_possibilities="HTML 태그 예제"; /* (various) --  */
$stat_cache_elements="캐시 항목"; /* (build_stats.php) --  */
$stat_cache_first="새로운 캐시 항목"; /* (build_stats.php) --  */
$stat_cache_hits="캐시 적중"; /* (build_stats.php) --  */
$stat_cache_hits_max="최대 캐시 적중 (단일 이미지)"; /* (build_stats.php) --  */
$stat_cache_hits_avg="평균 캐시 적중 (모든 이미지)"; /* (build_stats.php) --  */
$stat_cache_size="캐시 크기"; /* (build_stats.php) --  */
$stat_cache_convert_time="캐시로 인한 절약시간"; /* (build_stats.php) --  */
$stat_cache_size="캐시 사용 크기"; /* (build_stats.php) --  */
$cache_options="이미지 캐시 옵션";
$cache_max_size="최대 캐시 크기 (0 = 무제한)";
$path_2_cache="캐시 디렉토리 (기본값 sql/cache)";
$cache_optimize="이미지 캐시 최적화/제거"; 
$cache_maintain="이미지 캐시 유지관리";
$cache_opt_msg="!! 캐시 최적화 !!";
$lang_plugins['cache']="이미지 캐시"; /* () --  */
$stat_cache_title="이미지 캐시 상태"; /* (cache.php) --  */
$bm_saved="설정 저장"; /* (admin.php) --  */
$cache_optimize_by_size="Delete all cache elements where size (in kb) >="; /* (cache.php) --  */
$cache_optimize_by_date="Delete all cache elements not used for days:"; /* (cache.php) --  */
$elements_rem="항목 삭제"; /* (cache.php) --  */
$general_anon_album_downs="익명으로 앨범 압축하여 다운로드 허용/거부"; /* (build_general_conf.php) --  */
$general_anon_album_downs_info="<-- 익명 사용자가 앨범을 압축하여 다운로드 받도록 허용할지 여부"; /* (build_general_conf.php) --  */
$general_download_speed="다운로드 속도 설정(kb/sec, 0=무제한)"; /* (build_general_conf.php) --  */
$general_download_speed_info="<-- 다운로드 속도 최대값 설정"; /* (build_general_conf.php) --  */
$general_navigation="네비게이터 활성/비활성"; /* (build_general_conf.php) --  */
$general_navigation_info="<-- 썸네일 페이지의 네비게이터 활성 여부"; /* (build_general_conf.php) --  */
$toc_navigation="네비게이션 활성/비활성"; /* (doc/) --  */
$toc_zip_download="익명 앨범 다운로드 활성/비활성"; /* (doc/) --  */
$toc_albdownlimit="다운로드 속도 제한"; /* (doc/) --  */
$choose_zips_msg="선택한 이미지 다운로드"; /* (build_zip_view.php) --  */
$zip_button="압축 다운로드"; /* (build_zip_view.php) --  */
$type_of_archive="압축 형식 선택"; /* (build_zip_view.php) --  */
$create_tar="tar 만들기"; /* (build_zip_view.php) --  */
$create_tgz="tar.gz 만들기"; /* (build_zip_view.php) --  */
$create_bz2="tar.bz2 만들기"; /* (build_zip_view.php) --  */
$create_zip="zip 만들기"; /* (build_zip_view.php) --  */
$create_rar="rar 만들기"; /* (build_zip_view.php) --  */
$menumsg['advanced']="고급 옵션"; /* () --  */
$menumsg['printmode']="프린터 모드"; /* () --  */
$menumsg['printprobs']="Printing Disabled?"; /* () --  */
$menumsg['downloadmode']="다운로드 모드"; /* () --  */
$menumsg['mailmode']="메일 모드"; /* () --  */
$menumsg['addcomment']="앨범 코멘트 추가"; /* () --  */
$menumsg['delcomment']="앨범 코멘트 삭제"; /* () --  */
$menumsg['editcomment']="앨범 코멘트 수정"; /* () --  */
$album_up="수정됨"; /* (album_comment.php) --  */
$album_ins="삽입됨"; /* (album_comment.php) --  */
$mail_link="메일링 리스트"; /* (header.php) --  */
$mail_title="LinPHA 메일링 리스트"; /* (mail.php) --  */
$mail_send_link="메일 전송"; /* (mail.php) --  */
$mail_return_address="회신 주소:"; /* (mail.php) --  */
$mail_block="Mail Block Size:"; /* (mail.php) --  */
$mail_block_help="# of emails in a block before a break to avoid PHP timeouts."; /* (mail.php) --  */
$mail_options="메일링 리스트 옵션"; /* (mail.php) --  */
$mail_go_back="뒤로"; /* (various mail plugin files) --  */
$mail_form_title="E-Mail 메시지"; /* (mail_form.php) --  */
$mail_form_subject="제목:"; /* (mail_form.php) --  */
$mail_form_msg="내용:"; /* (mail_form.php) --  */
$mail_total_sent="Total e-mail(s) sent:"; /* (mail_form.php) --  */
$mail_subscribe="구독"; /* (mail_users.php) --  */
$mail_unsubscribe="구독안함"; /* (mail_users.php) --  */
$mail_activate="활성화"; /* (mail_users.php) --  */
$mail_user_name="이름:"; /* (mail_users.php) --  */
$mail_user_email="E-Mail:"; /* (mail_users.php) --  */
$mail_user_email_confirm="Confirm E-Mail:"; /* (mail_users.php) --  */
$mail_user_code="Activation Code:"; /* (mail_users.php) --  */
$mail_user_code_sent="An e-mail with the activation code has been sent to your e-mail account."; /* (mail_users.php) --  */
$mail_user_code_subject="LinPHA Mailing List Activation"; /* (mail_users.php) --  */
$mail_user_activated="Your account has been activated!"; /* (mail_users.php) --  */
$mail_user_activate_error="There was an error in activating your account!"; /* (mail_users.php) --  */
$mail_user_email_not_found="메일링 리스트에 존재안함."; /* (mail_users.php) --  */
$mail_user_remove_ok="메일링 리스트에서 제거."; /* (mail_users.php) --  */
$mail_user_remove_fail="메일링 리스트에서 제거 불가능."; /* (mail_users.php) --  */
$mail_user_empty="Fill in all fields."; /* () --  */
$mail_user_no_match="E-Mail 일치안함."; /* () --  */
$mail_user_exists="이미 등록된 E-Mail입니다."; /* (mail_users.php) --  */
$lang_plugins['mail']="메일링 리스트"; /* (admin.php) --  */
$mail_activate_message="Dear %s,\n\nPlease enter these details to activate your Mailing List account.\n\nActivation Code: %s\n\nThanks!\nThe Webmaster"; /* (submit_users.php) -- dont delete the %s and the \n ! */
$mail_hint="힌트"; /* (mail.php) --  */
$mail_user_permission="All users in the group 'mail' are able to send messages to the mailing list."; /* (mail.php) --  */
$mail_current_subscribers="Current subscribers"; /* (mail.php) --  */
$mail_name="이름"; /* (mail.php) --  */
$mail_mail="Email"; /* (mail.php) --  */
$mail_subscribing_date="Subscribing Date"; /* (mail.php) --  */
$mail_active="활성"; /* (mail.php) --  */
$mail_sent_to="Email sent to"; /* (mail.php) --  */
$mail_replace_words="<b>[Name]</b> and <b>[Email]</b> will be replaced with the name and email address of the specific users."; /* (form_mailing.php) --  */
$misc_help="Miscellaneous Help"; /* () --  */
$mail_create_group="(You have to create the group 'mail' yourself.)"; /* (mail.php) --  */
$alb_th="앨범의 하위 폴더"; /* (*_stage_album.php) -- overwrites old (wrong) entry */
$arr_month_short = Array('1' => '1월','2' => '2월','3' => '3월','4' => '4월','5' => '5월','6' => '6월','7' => '7월','8' => '8월','9' => '9월','10' => '10월','11' => '11월','12' => '12월'); /* abrevations of months */
$arr_month_long = Array('1' => '1월','2' => '2월','3' => '3월','4' => '4월','5' => '5월','6' => '6월','7' => '7월','8' => '8월','9' => '9월','10' => '10월','11' => '11월','12' => '12월'); /* months */
$arr_day_short = Array('일','월','화','수','목','금','토'); /* abrevations of weekdays */
$arr_day_long = Array('일요일','월요일','화요일','수요일','목요일','금요일','토요일'); /* weekdays */
$layout="레이아웃";
$features="특징";
$perform="성능";
$general_comment_in_subfolder = '하위 폴더 코멘트 달기 활성/비활성';
$general_comment_in_subfolder_info = '<-- 하위 폴드 미리보기에서 앨범 코멘트 보기';
$general_default_date_format = '날짜 표시 형식';
$general_default_date_format_info = '<- 예: 06/28/2004, 자세히 보기';
$general_default_time_format = '시간 표시 형식';
$general_default_time_format_info = '<- 예: 01:45:50 PM, 자세히 보기';
$general_new_images_folder = '가상의 "새로운 이미지" 폴더';
$general_new_images_folder_info = '<- "새로운 이미지"의 가상 폴더 보기';
$general_new_images_folder_age = '"새로운 이미지"로 표시할 날짜';
$general_new_images_folder_age_info = '<- 새로운 이미지로 표시할 최대 날짜';
$control_key="Ctrl"; /* (various) --  */
$search_date="날짜"; /* (search.php) -- reads: date from to... */
$search_from="부터"; /* (search.php) -- reads: date from to... */
$search_to="까지"; /* (search.php) -- reads: date from to... */
$start_slide="슬라이드쇼 시작"; /* (img_view.php) --  */
$pass_msg="새 패스워드로 로긴하시오."; /* (build_my_settings.php) --  */
$str_new_images = "새로 등록된 이미지"; /* (new_images.php) -- */
$str_order_by = "정렬순서 : "; /* (new_images.php) -- */
$str_age = "기간"; /* (new_images.php) -- */
$str_album = "앨범"; /* (new_images.php) -- */
$str_in_album = "In 앨범"; /* (new_images.php) -- */
$str_img_newer_than = "이전 %s일 동안 등록된 새 이미지"; /* (new_images.php) -- */
$timespanfmt = "%s일 %s시간 %s분 %s초"; /* (new_images.php) -- */
$str_delete_all_cached_images_with_watermarks="Delete all cached images with watermarks"; /* (watermark.php) --  */
$str_error_changing_perm="ERROR, the file permissions couldn't be changed! (Maybe you haven't the permission)"; /* (plugins/ftp/index.php) --  */
$str_change_perm="권한 변경:"; /* (plugins/ftp/index.php) --  */
$str_read="읽기"; /* (plugins/ftp/index.php) --  */
$str_write="쓰기"; /* (plugins/ftp/index.php) --  */
$str_execute="실행"; /* (plugins/ftp/index.php) --  */
$str_owner="소유자"; /* () --  */
$str_group="소유그룹"; /* (plugins/ftp/index.php) --  */
$str_all_other="그외 사용자"; /* (plugins/ftp/index.php) --  */
$str_copy="복사"; /* (plugins/ftp/index.php) --  */
$str_copy_to="%s로 복사:"; /* (plugins/ftp/index.php) --  */
$str_rename_to="%s로 이름변경:"; /* (plugins/ftp/index.php) --  */
$str_rotation_disabled="이미지 순환 비활성"; /* (img_view.php) --  */
$str_no_write_perm="쓰기 권한 없음"; /* (img_view.php) --  */
$str_new_images_in_these_folders="새로 등록된 이미지가 있는 앨범:"; /* (new_images.php) --  */
$str_reinstall_remove_dbconnect="LinPHA를 재설치하려면, 먼저 ./sql/db_connect.php 파일을 삭제해야 합니다! (You can do this with the integrated filemanager in the admin section)"; /* (install_header.php) --  */
$str_Version="버전"; /* (sec_stage_install.php) --  */
$str_no_supported_database_activated="오류: PHP 환경설정에서 데이터베이스 기능을 지원하지 않습니다"; /* (sec_stage_install.php) --  */
$str_extract_with="When upload is completed, extract archive with"; /* (ftp/index.php) --  */
$str_files_to_upload="업로드"; /* (ftp/index.php) --  */
$posix_check_msg="POSIX 지원 검사..."; /* (sec_stage_install.php) --  */
$posix_sum_found_msg="Found POSIX support in your PHP installation. All functions of the integrated file management tool are activated."; /* (sec_stage_install.php) --  */
$posix_sum_miss_msg="No POSIX support found in your PHP installation. Unable to use some functions of the integrated file management tool (Especially changing permissions of files)."; /* (sec_stage_install.php) --  */
$mod_cache_fail="Error: Settings could not be saved. Make sure your the path is spelled correctly and you have permissions to write into that directory."; /* (admin.php) --  */
$str_create_archive="%s 압축 파일 생성"; /* (build_zip_view.php) --  */
$str_download_error="ERROR! The download couldn't be started for some reasons, sorry"; /* (build_zip_view.php) --  */
$str_search_all_images_taken="Search all images taken %s"; /* (read_php_exif.php) --  */
$str_try_a_lower_resolution="If it takes too long to load, try a lower resolution:"; /* (image_panorama_view.php) --  */
$str_current_resolution="current resolution:"; /* (image_panorama_view.php) --  */
$href_group_conf="그룹 관리"; /* (admin.php + build_user_conf.php) -- Admin menu item + table heading */
$href_tools_section="도구들:"; /* (admin.php) -- Tools section in admin menu */
$lang_plugins['plugin']="플러그인"; /* (plugin.php) --  */
$choose_mail_msg="Select images to mail"; /* () --  */
$new_user_full_name="전체 이름"; /* (build_my_settings.php) -- And build_user_conf.php */
$href_category_conf="카테고리 관리"; /* (admin.php) --  */
$cat_private="사적영역"; /* (build_category_conf.php) --  */
$lang_plugins['facetmap']="FacetMap"; /* (plugins.php) --  */
$str_add_more_apps="Add more apps"; /* (include/basket_zip.php, ftp/index.p) --  */
$session_check="checking for valid session settings..."; /* (sec_stage_install.php) --  */
$session_save_handler_ok_msg="Session save handler correctly set."; /* (sec_stage_install.php) --  */
$session_save_handler_miss_msg="Session save handler NOT correctly set."; /* (sec_stage_install.php) --  */
$session_miss_msg="Session settings not correctly set. You MUST correct the above errors first in php.ini or LinPHA will probably NOT work correctly later!!"; /* (sec_stage_install.php) --  */
$session_ok_msg="All session settings correctly set. LinPHA should work properly."; /* (sec_stage_install.php) --  */
$new_user_error6="Error: You are not using your own account?!?"; /* (build_my_settings.php) --  */
$str_old_comments="Old comments (they don't belong to an image anymore):"; /* (build_stats.php) --  */
$str_last_viewed_page="마지막에 본 페이지:"; /* (index.php) --  */
$str_select_row="줄 선택"; /* (basket.php) --  */
$str_select="선택"; /* (basket.php) --  */
$str_new_window="새 창"; /* (basket.php) --  */
$general_anon_mail_mode="익명 사용자의 메일 모드 허용/거부"; /* (build_general_conf.php) --  */
$general_anon_mail_mode_info="<-- 익명 사용자의 메일 이미지 허용 여부"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size="Mail 모드: 최대 메일 크기"; /* (build_general_conf.php) --  */
$general_mail_mode_max_size_info="<-- byte 단위의 최대 크기"; /* (build_general_conf.php) --  */
$general_thumbnail_view="썸네일 보기"; /* (build_general_conf.php) --  */
$general_image_view="이미지 보기"; /* (build_general_conf.php) --  */
$general_ado_msg="SQL 퀴리 캐싱 활성/비활성"; /* (build_general_conf.php) --  */
$general_ado_msg_info="<-- enable if slow SQL server or no PHP accelerator is used"; /* (build_general_conf.php) --  */
$general_ado_time_msg="SQL 퀴리 캐싱 시간:"; /* (build_general_conf.php) --  */
$general_ado_time_msg_info="<-- set max caching time in minutes"; /* (build_general_conf.php) --  */
$general_ado_path_msg="SQL 쿼리 캐시 경로:"; /* (build_general_conf.php) --  */
$general_ado_path_msg_info="<-- 퀴리 캐시 데이터를 저장할 곳"; /* (build_general_conf.php) --  */
$str_other_features="기타 특징"; /* (build_general_conf.php) --  */
$str_language_settings="언어 설정"; /* (build_general_conf.php) --  */
$str_sql_query_caching="Sql 쿼리 캐싱"; /* (build_general_conf.php) --  */
$general_thumb_border="픽셀단위의 썸네일 보드 크기"; /* (build_general_conf.php) --  */
$general_thumb_border_info="<-- 0이면 비활성, 기본값은 5"; /* (build_general_conf.php) --  */
$general_thumb_border_color="썸네일 보드 색상"; /* (build_general_conf.php) --  */
$general_thumb_border_color_info="<-- see info for details"; /* (build_general_conf.php) --  */
$str_recipient="받는사람"; /* (basket_mail.php) --  */
$str_sender="보내는사람"; /* (basket_mail.php) --  */
$str_mail_too_big="오류: E-Mail이 너무 큽니다.<br /><br />허용 크기: %sBytes. 선택한 이미지 크기 %sBytes.<br /><br />이미지 일부를 지우거나 압축 다운로드 기능을 이용하세요!"; /* (basket_mail.php) --  */
$str_size_of_email="E-Mail 크기: %s."; /* (basket_mail.php) --  */
$str_new_search="새 검색"; /* (search.php) --  */
$str_edit_search="기존 검색 수정"; /* (search.php) --  */
$str_View="보기"; /* (img_view.class.php) --  */
$str_normal="보통"; /* (img_view.class.php) --  */
$str_detail="자세히"; /* (img_view.class.php) --  */
$search_result_empty="주어진 조건에 일치하는 항목이 없습니다."; /* (search.php) --  */
$str_chars_entered="characters entered"; /* (img_view.class.php) --  */
$str_information_lost="Some information will be lost, please revise your entry."; /* (img_view.class.php) --  */
$general_random_image="초기 페이지에 랜덤 이미지 활성/비활성"; /* () --  */
$general_random_image_info="<-- 초기 페이지에 랜덤 이미지 표시 여부"; /* () --  */
$general_random_image_size="초기 페이지 랜덤 이미지의 최대 크기"; /* () --  */
$general_random_image_size_info="<-- 픽셀 단위의 이미지 크기 "; /* () --  */
$str_edit_watermark="워터마크 수정"; /* (watermark.php) --  */
$str_edit_permissions="워터마크 권한 수정"; /* () --  */
$str_Everyone="모두"; /* () --  */
$str_Nobody="아무게"; /* () --  */
$str_only_logged_in_users=" 로그인 사용자만"; /* () --  */
$str_except_these_groups="허용할 그룹:"; /* () --  */
$str_additionally_groups="제외할 그룹:"; /* () --  */
$str_allow_these_persons="No watermarks for these users/groups"; /* () --  */
$str_album_based_permissions="Album based permissions"; /* () --  */
$str_all_albums_but_without_these="All albums, except these:"; /* () --  */
$str_only_on_these_albums="Only on these albums:"; /* () --  */
$str_allow_these_persons="허용할 사람"; /* (db_api.php) --  */
$str_no_watermarks="No watermarks for these persons"; /* (db_api.php) --  */
$str_watermark_perm_part1="Define image watermarks for a single user, multiple user, and/or album based here."; /* (watermark.php) --  */
$str_watermark_perm_part2="The default setting is 'Logged in users only' AND 'All albums'."; /* (watermark.php) --  */
$str_watermark_perm_part3="Which means that all logged in users are able to view images without watermarks in all albums."; /* (watermark.php) --  */
$inst_linpha_not_work_correctly="LinPHA will probably NOT work correctly"; /* (sec_stage_install.php) --  */
$gd_jpg_missing_msg="Your System lacks jpeg! support in GDlib. JPEG images WILL NOT work!"; /* (sec_stage_install.php) --  */
$general_video_thumbnail="Try to create thumbnails for videos"; /* (build_generl_config.php) --  */
$general_video_thumbnail_info="<--Turn off if you encounter problems with creating thumbnails for videos"; /* (build_generl_config.php) --  */
$general_update_notice="LinPHA 업데이트 검사 활성/비활성"; /* (build_generl_config.php) --  */
$general_update_notice_info="&lt;-- 한 주에 한번씩 업데이트 검사"; /* (build_general_config.php) --  */
$large="large"; /* (build_general_config) -- selectfield for mini images size */
$directories="디렉토리"; /* (build_thumbnail_conf.php) --  */
$do_nothing="동작안함"; /* (build_thumbnail_conf.php) --  */
$create="생성"; /* (build_thumbnail_conf.php) --  */
$recreate="재생성"; /* (build_thumbnail_conf.php) --  */
$exif_disabled_in_conf="EXIF 정보 비활성됨"; /* (build_thumbnail_conf.php) --  */
$iptc_disabled_in_conf="IPTC 정보 비활성됨"; /* (build_thumbnail_conf.php) --  */
$silent_mode="침묵 모드(e.g 침묵 모드는 디버그 정보 표시안함)"; /* (build_thumbnail_conf.php) --  */
$just_thumb_msg="썸네일"; /* (build_thumbnail_conf.php) --  */
$log_title="LinPHA 로그"; /* (log.php) --  */
$log_options="LinPHA 로그 옵션"; /* (log.php) --  */
$log_method_label="Log to:"; /* (log.php) --  */
$str_extra_headers="Extra Headers:"; /* (log.php) --  */
$str_log_events['login']="사용자 로그인"; /* (log.php) --  */
$str_log_events['thumbnail']="썸네일 생성"; /* (log.php) --  */
$str_log_events['update']="엡데이트"; /* (log.php) --  */
$str_log_events['db']="데이터베이스"; /* (log.php) --  */
$str_log_events['filemanager']="파일매니저"; /* (log.php) --  */
$str_events="이벤트"; /* (log.php) --  */
$find_duplicates="중복 이미지 찾기"; /* (build_thumbnail_conf.php) --  */
$str_not_enabled_in_php_config="Not enabled in PHP config (php.ini)"; /* (sec_stage_install.php) --  */
$str_warning="주의"; /* (build_thumbnail_conf.php) --  */
$str_thumbnails_deleted="썸네일 삭제"; /* (build_thumbnail_conf.php) --  */
$str_statistics_deleted="모든 통계 삭제"; /* (build_thumbnail_conf.php) --  */
$str_random_index_image="임의 순서 이미지"; /* (build_general_conf.php) --  */
$str_download_images="이미지 하나 다운로드"; /* (build_perms.php) --  */
$str_add_image_comments="이미지 코멘트 추가"; /* (build_perms.php) --  */
$str_add_image_description="이미지 설명 및 카테고리 추가"; /* (build_perms.php) --  */
$str_mail_add_all_users="모든 linpha 사용자 메일링 목록에 추가"; /* (plugins/mail.php) --  */
$str_note_upload="<b>메모:</b> You don't have to upload your images through this form. You can use whatever you want (ftp,scp,nfs,local,...). Just copy them to the albums folder."; /* (plugins/ftp/index.php) --  */
$blacklist_opts="Blacklist options (SPAM blocking)"; /* (varios) --  */
$blacklist_onoff="Enable message filtering"; /* (varios) --  */
$blacklist_keywords="Words to block:"; /* (varios) --  */
$str_entire_path="Entire path"; /* (search.php) --  */
$mail_format="Mail 형식:"; /* (basket_mail.php) --  */
$mail_format_is_txt="TXT (이미지 첨부)"; /* (basket_mail.php) --  */
$mail_format_is_html="HTML (이미지 포함)"; /* (basket_mail.php) --  */
$mail_toggle_active="토글"; /* (mail.php) --  */
$statistics="통계"; /* (various) --  */
$stats_total_images="총 이미지"; /* () --  */
$stats_total_img_views="총 이미지 보기"; /* () --  */
$stats_total_img_downs="총 이미지 다운로드"; /* () --  */
$stats_total_img_downs="총 이미지 다운로드"; /* () --  */
$stats_total_img_selected="총 이미지 보기 선택"; /* () --  */
$stats_total_downs_selected="총 이미지 다운로드 선택"; /* () --  */
$stats_downloads="다운로드"; /* () --  */
$stats_downl_size="다운로드 크기"; /* () --  */
$stats_coments_total="총 코멘트"; /* () --  */
$stats_coments_sel="코멘트 선택됨"; /* () --  */
$str_log_events['guestbook']="방명록"; /* (log.php) --  */
$stats_realtime="실시간 통계 활성/비활성"; /* (build_stats.php) --  */
$stats_realtime_info="<-- 실시간에 모든 통계 정보 표시(캐시 사용안함)"; /* (build_stats.php) --  */
$stats_cache_time="캐시 시간 통계"; /* (build_stats.php) --  */
$stats_cache_time_info="<-- refresh (download size) Statistics only after given time"; /* (build_stats.php) --  */
$stats_user_info="사용자"; /* (stats_view.php) --  */
$stats_image_info="이미지"; /* (stats_view.php) --  */
$stats_comments_info="코멘트"; /* (stats_view.php) --  */
$stats_general_info="일반"; /* (stats_view.php) --  */
$spam_blocked="SPAM 공격 방지"; /* () --  */
$mail_current_status="현재 상태"; /* (mailing.php) --  */
$mail_sending_to="발송 중: "; /* (mailing.php) --  */
$mail_counters="개수 (성공/실패/총합)"; /* (mailing.php) --  */
$mail_send_fail="발송 실패: "; /* (mailing.php) --  */
$mail_send_ok="발송 성공: "; /* (mailing.php) --  */
$mail_all_complete="모두 완료!"; /* (mailing.php) --  */
$mail_failed_list="실패한 주소 목록"; /* (mailing.php) --  */
$mail_ok_list="발송 주소 목록"; /* (mailing.php) --  */
$mail_mailer_error=" - 메일러 에러: "; /* (mailing.php) --  */
$str_log_events['comments']="Comment Entry"; /* (log.php) --  */
$str_edit_members="멤버 수정"; /* (build_user.conf.php) --  */
$edit_groups="그룹 수정 "; /* (build_user.conf.php) --  */
$str_basket="바구니"; /* (various) --  */
$lang_plugins['log']="로그"; /* (admin.php) --  */
$rss_created="XML RSS 파일 생성 성공"; /* () --  */
$rss_not_created="RSS 생성 안됨, 왜냐하면 변경된 내용이 없으므로"; /* () --  */
$rss_settings_saved="RSS 설정 저장"; /* () --  */
$lang_plugins['stats']="통계"; /* (various) --  */
$lang_plugins['RSS']="RSS"; /* (various) --  */
$str_no_watermarks="워터마크 사용안함"; /* () --  */
$str_with_watermarks="워터마크 사용"; /* () --  */
$str_create_cache_img="이미지 캐시 생성"; /* () --  */
$str_reset_button="재설정"; /* () --  */
$cache_stats="이미지 캐시 상태"; /* () --  */
$drop_duplicates="중복 항목 제거"; /* () --  */
$general_exif_rotate="EXIF 데이터 자동 전환 활성/비활성 "; /* () --  */
$general_exif_rotate_info="<-- EXIF 테이터 자동 전환"; /* () --  */
$lang_plugins['maps']="Google/Yahoo Maps"; /* () -- maps plugin */
$maps_setup_info_header="Google/Yahoo Maps 설정"; /* () -- maps plugin */
$maps_setup_yahoo_id="Yahoo Application ID"; /* (maps plugin) --  */
$maps_setup_google_key="Google Key"; /* (maps plugin) --  */
$maps_setup_php_version_warning="이 플러그인은 PHP 버전 4.2.0 이상을 필요로 합니다.PHP를 업데이터하세요."; /* (maps plugin) --  */
$maps_select_type="Map 형식 선택:"; /* (maps plugin) --  */
$maps_select_type_info="<-- select whether to use Google or Yahoo maps"; /* (maps plugin) --  */
$maps_select_display_type="Please choose Map display Type:"; /* (maps plugin) --  */
$maps_select_display_type_info="<-- show Hybrid, Sat or Regular Map"; /* (maps plugin) --  */
$maps_zoom_level="Default Zoom Level: 1-16 (Default 16, World Map)"; /* (maps plugin) --  */
$maps_zoom_level_info="<-- set default zoom level for Maps"; /* (maps plugin) --  */
$maps_zoom_location="Default location to center in view"; /* (maps plugin) --  */
$maps_zoom_location_info="<-- default location to center in Map"; /* (maps plugin) --  */
$maps_google_ctrl_size="Google Map controls size"; /* (maps plugin) --  */
$maps_google_ctrl_size_info="<-- adjust Google Maps slider and pan size"; /* (maps plugin) --  */
$maps_str="지도"; /* (maps plugin) --  */
$map_type_ctrl="Enable Map Type Controls"; /* (maps plugin) --  */
$map_type_ctrl_info="<-- show Map type controls in Map"; /* (maps plugin) --  */
$map_slide_ctrl="Enable Map Slide Controls"; /* (maps plugin) --  */
$map_slide_ctrl_info="<-- show Map slide controls in Map"; /* (maps plugin) --  */
$map_pan_ctrl="Enable Map Pan Controls"; /* (maps plugin) --  */
$map_pan_ctrl_info="<-- show Map pan controls in Map"; /* (maps plugin) --  */
$map_auto_popup="Enable Marker Auto Popup"; /* (maps plugin) --  */
$map_auto_popup_info="<-- auto show Marker Popups on mousover"; /* (maps plugin) --  */
$map_album_add="앨범 추가"; /* (maps plugin) --  */
$map_marker_del="표시 삭제"; /* (maps plugin) --  */
$map_search_location="새 경로 검색/추가"; /* (maps plugin) --  */
$map_location_here="당신의 경로는 여기"; /* (maps plugin) --  */
$map_search_loc_button="경로 검색"; /* (maps plugin) --  */
$map_add_location="새 경로 추가"; /* (maps plugin) --  */
$map_assign_album="Assign Album to Map Location"; /* (maps plugin) --  */
$general_ignored_files="Files to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_files_info="<-- files to ignore (comma seperated)"; /* (build_general_config.php) --  */
$general_ignored_fileext="File extensions to ignore in collection"; /* (build_general_config.php) --  */
$general_ignored_fileext_info="<-- file extensions to ignore (comma seperated)"; /* (build_general_config.php) --  */
?>