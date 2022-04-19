<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>

<h4>Insert new user</h4>
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
<input type=submit name="ok" value="INSERT">
</form>

<?php
if (isset($_POST['ok'])) {
   $db = mysqli_connect('localhost', 'didik', '', 'mydb')
   or die('Unable to connect...');

   $nama = Encrypt(myMagic($_POST['nama']));
   $pass = Encrypt(myMagic($_POST['pass']));

   $sql = 'INSERT INTO user(nama, password) VALUES ("'.$nama.'", "'.$pass.'")';
   $res = mysqli_query($db, $sql) or die('SQL error '. mysqli_error($db));

   if ($res != null) {
      echo 'New user was added';
   } else {
      echo 'Error: '. mysqli_error($db);
   }
   mysqli_free_result($res);
   mysqli_close($db);
}

function myMagic($str) {
   if (get_magic_quotes_gpc()) {
      $str = stripslashes($str);
   }
   $str = strip_tags(trim($str));
   return mysql_real_escape_string($str);
}

// Enkripsi plain text, return cipher text
function Encrypt($str) {
   // di-hash kemudian dienkripsi
   $cipher = crypt(md5($str), md5($str));
   return $cipher;
}

?>