<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>
<table width=300 border=0>
<tr>

<?php
/* EnableDisable.php */

// array menu
$menu = array(
    'Home'     => 'EnableDisable.php',
    'Articles' => 'article.php',
    'News'     => 'news.php',
    'Tips'     => 'tips.php',
    'Tricks'   => 'tricks.php');

foreach ($menu as $key => $val) {
   if (!isCurrPage($val)) { ?>
      <td><a href="<?=$val?>" title="<?=$key?>">
         <?=$key?> </a>
      </td>
   <?php } else { ?>
      <td> <?=$key?> </td>
   <?php } ?>
<?php }

function isCurrPage($url) {
   if (strpos($_SERVER["SCRIPT_NAME"],
   $url)===false) {
      return false;
   } else {
      return true;
   }
}

?>

</tr>
</table>
</body>
</html>