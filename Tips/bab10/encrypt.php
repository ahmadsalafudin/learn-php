<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>

<form action="<?$_SERVER['PHP_SELF']?>" method="POST">
<table>
<tr>
  <td>Nama</td>
  <td><input type=text name="nama"></td>
</tr>
<tr>
  <td>Password</td>
  <td><input type=password name="pass"></td>
</tr>
</table>
<input type=submit name="ok" value="OK">
</form>


<?php
/* enkripsi.php */

if (!empty($_POST['nama']) && !empty($_POST['pass'])) {
   if (strpos($_POST['nama'], ';')) die ('Incorrect input');

   $db = mysqli_connect('localhost', 'didik', '', 'mydb')
   or die('Unable to connect...');

   $auth = false;
   $nama = Encrypt(myMagic($_POST['nama']));
   $pass = Encrypt(myMagic($_POST['pass']));

   $sql = 'SELECT nama, password FROM user WHERE nama="'.$nama.'" AND password="'.$pass.'"';
   $res = mysqli_query($db, $sql);
   if (mysqli_num_rows($res) == 1) {
       $auth = true;
   }
   mysqli_free_result($res);

   if ($auth) {
      echo 'Valid...';
   } else {
      exit('Invalid account...');
   }
}

// Enkripsi plain text, return cipher text
function Encrypt($str) {
   // di-hash kemudian dienkripsi
   $cipher = crypt(md5($str), md5($str));
   return $cipher;
}

function myMagic($str) {
   if (get_magic_quotes_gpc()) {
      $str = stripslashes($str);
   }
   $str = strip_tags(trim($str));
   return mysql_real_escape_string($str);
}

?>