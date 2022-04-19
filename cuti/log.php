<?php
include 'koneksi.php';
session_start();

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$password = md5($password);
$op = $_GET['op'];

if($op=="in"){
$cek = mysql_query("SELECT * FROM user_akses WHERE username='$username' AND password='$password'");
if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
$c = mysql_fetch_array($cek);
$_SESSION['nama_lengkap'] = $c['nama_lengkap'];
$_SESSION['username'] = $c['username'];
$_SESSION['level'] = $c['level'];

if($c['level']=="ADMIN"){
header("location:_menu_admin.php");			//USER
}else if($c['level']=="KARYAWAN"){	
header("location:_menu_karyawan.php");	//USER
}else if($c['level']=="MANAGER"){	
header("location:_menu_manager.php");	//USER
}
}else{
die("Username and Password are not registered! <a href=\"javascript:history.back()\">back to LOGIN</a>");
}
}else if($op=="out"){
unset($_SESSION['username']);
unset($_SESSION['level']);
unset($_SESSION['nama_lengkap']);
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';    
  exit;
}

?>