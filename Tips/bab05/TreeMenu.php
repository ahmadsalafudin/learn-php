<html>
<style type="text/css">
TD {font-family:verdana,arial; font-size:11px; }
A { text-decoration: none; font-size: 11px;
  font-family:verdana,arial; color:blue; }
</style>
<body>

<?php
/* TreeMenu.php */

// array menu (multi-dimensi)
$menu = array (
    'menu1' => array (
         0          => 'Articles',
        'SubMenu 1' => 'link1-1',
        'SubMenu 2' => 'link1-2',
     ),
    'menu2' => array (
         0          => 'Tutorials',
        'SubMenu 1' => 'link2-1',
        'SubMenu 2' => 'link2-2',
        'SubMenu 3' => 'link2-3',
     ),
    'menu3' => array (
         0          => 'Tips & Tricks',
        'SubMenu 1' => 'link3-1',
        'SubMenu 2' => 'link3-2',
     ),
    'menu4' => array (0 => 'Resources'),
    'menu5' => array (
         0          => 'Downloads',
        'SubMenu 1' => 'link5-1',
        'SubMenu 2' => 'link5-2',
     ),
);

$qs   = $_SERVER['QUERY_STRING'];
$page = $_SERVER['PHP_SELF'];
$plus = '<img src="C:\\tmp\\plus.gif" border=0> ';
$minus= '<img src="C:\\tmp\\minus.gif" border=0> ';

echo '<table style="border:1pt solid #666666;" cellspacing=4 cellpadding=4>
<tr><td style="border:1pt solid #666666;" bgcolor=#CCFFCC>';

while (list($name,$mnu) = each($menu)) {
   // Jika string $name; tidak ada di query string
   if (!strstr($qs, "$name;")) {
      $s = "<a href=\"$page?$qs$name;\"> $plus<b>{$mnu[0]}</b></a>\n";
      echo nl2br($s);
      continue;
   }

   // replace $name; di qs menjadi kosong
   $tmp = str_replace("$name;", "",$qs);
   $s = "<a href=\"$page?$tmp\"> $minus<b>{$mnu[0]}</b></a>\n";
   echo nl2br($s);

   // return nilai array berikutnya
   next($mnu);
   // loop assign list variabel
   while (list($sub,$url) = each($mnu)) {
      $s = "&nbsp;&nbsp;&nbsp; ";
      $s .= "<a href=\"$url\">$minus $sub</a>\n";
      echo nl2br($s);
   }
   echo '<br>';
}

echo '</td>';
echo '<td style="border:1pt solid #666666;" valign=top width=300>
contents web here...
</td>';
echo '</tr></table>';


?>
