<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<body>

<form action="<?$_SERVER['PHP_SELF']?>" method="GET">
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
<input type=submit name="ok" value="submit">
</form>

<?php

if (isset($_GET['ok'])) {
   $user = $_GET['nama'];
   $pass = $_GET['pass'];

   $res = verify($user, $pass);
   if ($res) {
       $valid = 1;
   }

   if ($valid) {
       // halaman sensitif
       echo 'valid user';
   } else {
       echo 'Invalid';
   }
}

function verify($user, $pass) {
    // simulasi id user dan password
    $u = 'admin';
    $p = 'admin';
    if (($user == $u) && ($pass == $p)) {
       return true;
    } else {
       return false;
    }
}

/*
Dalam keadaan register_globals enable, user
dengan mudah bisa mendapatkan akses yang valid
misal:
http://nama_host/variabelattack.php?nama=&pass=&ok=submit&valid=1
*/
?>