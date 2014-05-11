<?php

// ----------------------------------------------------------------------------
function edit_binary($filename) {
global $default, $sortpass, $dirleft;

  $file = fopen($filename,'r');
  if ($file) {
    $start = 0;
    if (isset($_REQUEST['start']))
      $start = $_REQUEST['start'];

    fseek($file, $start);

    $content  = fread($file, $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']);
    $perline  = $default['EDITOR_BINEDITOR_BYTES_PERLINE'];
    $fieldlen = $default['EDITOR_BINEDITOR_DECIMAL_EDIT'] ? 3 : 2;
    $form     = "<TABLE BORDER=1 CELLPADDING=1 CELLSPACING=0>";

    $thisedit = '';
    $thisline = '';

    $i = $start;
    $cellcount = 0;

    while (($i-$start) < $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']) {

      if (($i != $start) && ($cellcount == $perline)) {
        $form .=
          '<TR>'.
          '<TD>'.
            strtoupper(str_pad(dechex($i-$perline),8,'0',STR_PAD_LEFT)).
          '</TD>'.
            $thisedit.
          '<TD CLASS="mono">'.
            preg_replace('/[\x00-\x20\x7f-\x9f]/', '.', htmlspecialchars(substr($content, ($i-$start)-$perline, $perline))).
          '</TD>'.
          '</TR>';
        $form .= '</TR>'.NL.'<TR>';
        $thisedit = '';
        $cellcount = 0;
      }

      $value =
        $default['EDITOR_BINEDITOR_DECIMAL_EDIT'] ?
          ord(substr($content,($i-$start),1)) :
          strtoupper(bin2hex(substr($content,($i-$start),1)));

      $thisedit .=
        '<TD><INPUT NAME="i_'.$i.'" VALUE="'.$value.'" SIZE='.$fieldlen.' MAXLENGTH='.$fieldlen.' TYPE=TEXT></TD>';
      $i++;
      $cellcount++;
    }

//    if (($i != $start) && ($cellcount == $perline))
//      $form .= '</TR>';
//    else
    $form .=
      '<TR>'.
        '<TD>'.
          strtoupper(str_pad(dechex($i - $cellcount),8,'0',STR_PAD_LEFT)).
        '</TD>'.
        $thisedit.
        str_repeat('<TD></TD>',$perline - $cellcount).
      '<TD CLASS="mono">'.
          preg_replace('/[\x00-\x20\x7f-\x9f]/', '.', htmlspecialchars(substr($content, ($i-$start) - $cellcount, $perline))).
      '</TD>'.
      '</TR>';

    $form .= "</TABLE>";

    $i = 0;
    $pager    = '';
    $filesize = filesize($filename);
    $optcount = 0;
    $current  = round($start / $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']);
    $all      = floor($filesize / $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']);
    $limits   = ceil($all * ($default['EDITOR_BINEDITOR_PAGER_PERCENTS']/100));

    while ($i < $filesize) {
      if (
          ($optcount < 1) ||
          (abs($current-$optcount) <= 5) ||
          ($optcount % $limits == 0 ) ||
          ($optcount == $all)
         )
        $pager .=
          '<OPTION VALUE="'.$i.'">0x'.
            str_pad(dechex($i),8,'0',STR_PAD_LEFT).
            '&nbsp;|&nbsp;'.
            str_pad($i,10,'.',STR_PAD_LEFT).
            '&nbsp;|&nbsp;#'.
            str_pad($optcount,5,'.',STR_PAD_LEFT).
            '&nbsp;|&nbsp;'.
            str_pad(round(100 * $i / $filesize),3,'.',STR_PAD_LEFT) . '%' .
          '</OPTION>' . NL;

      $i = $i + $default['EDITOR_BINEDITOR_BYTES_PERSCREEN'];
      $optcount++;
    }

    $pager = str_replace('VALUE="'.$start.'"','VALUE="'.$start.'" SELECTED',$pager);

    $nav =
      '<A HREF="'.$PHP_SELF.'?'.
        'lt='.$dirleft . AMP .
        'page=ftp'. AMP .
        $sortpass . '">'.STR_BACK.'</A> '.
      '<A HREF="'.$PHP_SELF.'?todo=openfile'. AMP .
        'f='.$filename . AMP .
        'lt='.$dirleft . AMP .
        'page=ftp'. AMP .
        $sortpass . '">'.STR_VIEW.'</A> '.
        $filename. ' ';

    if ($filesize > $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']) {
      $n =
        "<A HREF='$PHP_SELF?".
          "todo=edit" . AMP .
          "f=" . $_REQUEST['f'] . AMP .
          "lt=$dirleft" . AMP .
          "page=ftp" . AMP .
          $sortpass . AMP .
          "start=%d'>%s</A>";

      $nav .=
        "- " .
        ($start ? sprintf($n, $start - $default['EDITOR_BINEDITOR_BYTES_PERSCREEN'], STR_LESS) : '') .
        ' ' .
        ($start + $default['EDITOR_BINEDITOR_BYTES_PERSCREEN']<$filesize ? sprintf($n, $start+$default['EDITOR_BINEDITOR_BYTES_PERSCREEN'], STR_MORE) : '');
    }

    echo
      pageheader().
      '<PRE>'.
      $nav.
      '</PRE>'.
      '<FORM METHOD=POST ACTION="'.$PHP_SELF.'">'.NL.
      '<INPUT TYPE=HIDDEN NAME="todo" VALUE="edit">'.NL.
      getparams() .
      '<SELECT CLASS="mono" NAME="start">'. NL .
        '<OPTION VALUE="0">'.
            'hex offset'.          '&nbsp;|&nbsp;'.
            'dec offset'.          '&nbsp;|&nbsp;&nbsp;&nbsp;'.
            'page'.                '&nbsp;|&nbsp;'.
            'percent'.
        '</OPTION>' . NL.
      str_replace('.','&nbsp;',$pager) .
      '</SELECT>'. NL .
      '<INPUT TYPE=SUBMIT VALUE="open">'.
      '</FORM>'.
      '<HR>'.
      '<FORM METHOD=POST ACTION="'.$PHP_SELF.'">'.
      '<INPUT TYPE=HIDDEN NAME="todo" VALUE="save_binaryfile">'.NL.
      '<INPUT TYPE=HIDDEN NAME="start" VALUE="'.$start.'">'.NL.
      getparams().
      $form .
      '<INPUT TYPE=SUBMIT VALUE="'.STR_EDITOR_SAVE.'">'.NL.
      '</FORM>'.
      pagefooter();
  }
}

// ----------------------------------------------------------------------------
function edit_text($filename) {
global $dirleft, $sortpass, $default;

  $content =
    function_exists('file_get_contents') ?
      file_get_contents($filename) :
      implode('',file($filename));

  $chars  = count_chars($content, 0);

  $nav =
    "<A HREF='$PHP_SELF?lt=$dirleft" . AMP .
         "page=ftp" . AMP .
         $sortpass . "'>".STR_BACK.
         "</A> " .
    "<A HREF='$PHP_SELF?todo=openfile". AMP .
      "lt=$dirleft" . AMP .
      "page=ftp" . AMP .
      $sortpass . AMP .
      "f=".urlencode($filename).
      "'>".STR_VIEW."</A>".
    ' '.$filename.' ';

  $content = htmlspecialchars($content);
  echo
    pageheader().
    '<PRE>'.
    $nav.NL.
    '</PRE>'.
    '<HR>'.
    ($chars[13]+1) . ' '.STR_LINES.NL.
    '<HR>'.NL.
    '<FORM METHOD=POST ACTION="'.$PHP_SELF.'">'.NL.
    '<INPUT TYPE=HIDDEN NAME="todo" VALUE="save_textfile">'.NL.
    getParams().
    '<TEXTAREA COLS='.$default['EDITOR_COLS'].' ROWS='.$default['EDITOR_ROWS'].' NAME="contents">'.
    $content.
    '</TEXTAREA><BR>'.NL.
    '<INPUT TYPE=SUBMIT VALUE="'.STR_EDITOR_SAVE.'">'.NL.
    '</FORM>'.NL.
    '<HR>'.NL.
    '<PRE>'.
    $nav.
    '</PRE>'.
    pagefooter();

}

?>
