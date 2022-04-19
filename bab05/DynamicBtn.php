<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<body>

<html>
<body>
<table width=500 border=0 align=center><tr><td>

<table height=300 width="100%" style="border:1pt solid #666666;">
<tr>
<td valign=top width=100>
<table align=center width=100 style="border:1pt solid #666666;">
<tr><td valign=top align=center>
<?php
/* DynamicBtn.php */

// array menu
$menu = array(
    'Home'      => 'DynamicBtn.php',
    'Articles'  => 'article.php',
    'News'      => 'news.php',
    'Tutorials' => 'tutorial.php',
    'Tricks'    => 'tricks.php');

$btn = './button.php';

foreach ($menu as $key => $val) {
   if (!isCurrPage($val)) { ?>
      <a href="<?=$val?>" title="<?=$key?>">
      <img src="<?=$btn.'?text='.$key ?>"
      border=0></a> <br>
   <?php } else { ?>
      <img src="<?=$btn.'?text='.$key ?>"
      border=0 alt="<?=$key?>"> <br>
   <?php } ?>
<?php }

/**
 * Memeriksa apakah URL = current page
 * @param $url nama URL
 * @return true jika URL = curr page
 */
function isCurrPage($url) {
   if (strpos($_SERVER["SCRIPT_NAME"],
   $url)===false) {
      return false;
   } else {
      return true;
   }
}

?>
</td></tr>
</table>
</td>
<td valign=top>
<table width="100%" height="100%" style="border:1pt solid #666666;">
<tr><td valign=top>

</td</tr></table>
</td>
</tr>
</table>
</table>
</body>
</html>