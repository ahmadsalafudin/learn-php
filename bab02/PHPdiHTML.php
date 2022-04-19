<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Kode PHP di HTML</title>
</head>
<body>

<?php
/* PHPdiHTML.php */

$arr = array('PHP', 'JavaScript', 'ASP', 'HTML');
$pil ='';
if (isset($_POST['ok'])) {
   $pil = $_POST['bahasa'];
   ?>

   Pilihan: <?=$pil?> <br>
   <!-- membuat link -->
   <a href="<?=$_SERVER['PHP_SELF']?>?bahasa=<?=$pil?>">
   <?=$pil?> </a>

<?php
}
?>

<form action="<?$_SERVER['PHP_SELF']?>" method="post">
<select name="bahasa">

<?php
foreach($arr as $val) { ?>
   <option value="<?=$val?>"

   <?php
   // Set opsi yang dipilih
   if ($val === $pil) {
      echo 'SELECTED';
   }
   ?>
   > <?=$val?> </option>

<?php
}
?>

</select>
<input type="submit" name="ok" value="submit">
</form>

</body>
</html>