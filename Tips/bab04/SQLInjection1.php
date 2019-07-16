<?php
/* SQLInjection1.php */

$match = false;
if (isset($_POST['submit'])) {
   $nama = $_POST['nama'];
   $pass = $_POST['pass'];

   $db = mysqli_connect('localhost', 'didik', '', 'myDB');
   $sql = "SELECT nama, password FROM user WHERE nama='$nama' AND password='$pass'";

   $res = mysqli_query($db, $sql);
   // Jika $res berhasil, dan row yang
   // dikembalikan=1, set $match=true
   if ($res && mysqli_num_rows($res) == 1) {
       $match = true;
       mysqli_free_result($res);
   } else {
   echo 'err'.mysqli_error($db);
   }

   if ($match === true) {
      echo 'Account Match';
   } else {
      echo 'Invalid Account';
   }

   echo '<br>', $sql;
   mysqli_close($db);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<body>
<form action="<?=$_SERVER['PHP_SELF']?>" method=POST>
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
<input type=submit name="submit" value="oke">
</form>
</body>
</html>

