<?php

define('AMP', '&amp;');
define('SP', '&nbsp;');
define('NL',"\n");
define('SORT_UP','<IMG ALT="sort by %s, ascending order" SRC="plugins/ftp/images/sort_up.gif" BORDER=0>');
define('SORT_DN','<IMG ALT="sort by %s, descending order" SRC="plugins/ftp/images/sort_dn.gif" BORDER=0>');

$filealts['audio']      = STR_AUDIO;
$filealts['compressed'] = STR_COMPRESSED;
$filealts['executable'] = STR_EXECUTABLE;
$filealts['images']     = STR_IMAGE;
$filealts['sources']    = STR_SOURCE_CODE;
$filealts['text']       = STR_TEXT_OR_DOCUMENT;
$filealts['web']        = STR_WEB_ENABLED_FILE;
$filealts['video']      = STR_VIDEO;
$filealts['folder']     = STR_DIRECTORY;
$filealts['parentdir']  = STR_PARENT_DIRECTORY;

$filetypes['audio']      = 'mp2,mp3,wav,ra,xm,it,s3m,mod,mid';
$filetypes['compressed'] = 'rar,arc,arj,ace,zip,z,jar,ice,lha,lzh,ain,cab,chz,ha,rpm,sqz,bz,bz2,bzip,gz,tar,tgz,uc2,zoo,hqx,sea,sit,uue';
$filetypes['executable'] = 'exe,com,bat,class,jar';
$filetypes['images']     = 'bmp,jfif,jpe,jpg,jpeg,gif,png,tiff,wmf,dxf,ico,psd,pcx,tga,iff';
$filetypes['sources']    = 'c,cpp,h,pas,pl,py,js,for,phtml,php3,php4,php,asp,conf,sh,shar,csh,ksh,tcl,java';
$filetypes['text']  	 = 'txt,pdf,doc,dot,rtf,ps,ai,dvi,eps,tex,diz,eml,wks,xls,xlt';
$filetypes['web'] 	 = 'html,css,htm,shtml,dtd,xml,swf';
$filetypes['video']      = 'avi,mov,mpg,mpeg,qt,qtm,ram,rm,mpe,mpeg4,fli';

?>
