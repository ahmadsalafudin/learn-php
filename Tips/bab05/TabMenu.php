<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
<style>
a { text-decoration: none; font-size: 11px; font-family: verdana; color: blue; font-weight: bold; }
</style>
</head>
<body>

<?php
/* TabMenu.php */

$menu = array(
    'Tutorials' => 'tutorials.php',
    'Articles'   => 'article.php',
    'News'      => 'news.php',
    'Tips'      => 'tips.html',
    'Tricks'    => 'tricks.php');

@$page = (string)$_GET['page'];

/**
 * Men-generate tab menu
 * @param $arr adalah array menu
 * @param $pg adalah nama page
 */
function createTab($arr, $pg) {
  foreach ($arr as $key => $val) {
    if ($key == $pg) {
       echo '<td width=100 height=20 rowspan=2 align=center>
       <a href="TabMenu.php?page='.$key.'">'.$key.'</a></td>';
    } else {
       echo '<td bgcolor=#999999 align=center>
       <a href="TabMenu.php?page='.$key.'">'.$key.'</a></td>';
    }
    echo '<td bgcolor=#666666 width=1 height=17></td>';
  }
}

/**
 * Memeriksa apakah tab aktif
 * @param $arr adalah array menu
 * @param $pg adalah nama page
 * Jika tab aktif, hilangkan batas bawah
 */
function isCurrTab($arr, $pg) {
    foreach ($arr as $key => $val) {
       if ($key == $pg) {
        echo '';
       } else {
        echo '<td bgcolor=#666666 width=100 height=1></td>';
       }
    echo '<td bgcolor=#666666 width=1 height=1></td>';
    }
}

// Mengembalikan nama file
function printFile($arr, $pg) {
    global $file;
    foreach ($arr as $key => $val) {
       if ($key == $pg) {
          $file = $val;
       }
    }
return $file;
}
?>

<table align=center width=520>
  <tr><td>
  <table cellspacing=0 cellpadding=0 height=240 style="border:1pt solid #666666;">
    <tr>
       <? createTab($menu, $page); ?>
    </tr>
    <tr>
       <? isCurrTab($menu, $page); ?>
    </tr>
    <tr>
       <td colspan=10>
       <table width="100%" height="100%" cellpadding=2 border=0>
       <tr>
          <td valign=top><br>
          <?php
          $str = 'include file ' .printFile($menu, $page). ' di sini';
          echo $str;
          ?>
          </td>
       </tr>
       </table>
       </td>
    </tr>
  </table>

  </td></tr>
</table>

</body>
</html>