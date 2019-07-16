<?php
include 'koneksi.php';

$idx			= $_POST['idx'];

$query = "select * from karyawan WHERE idx LIKE '$idx%'"; 
$hasil = mysql_query($query);
$data=mysql_fetch_array($hasil);
$nama = $data['nama'];

$username		= $_POST['username'];
$level			= $_POST['level'];


$sql="INSERT INTO user_akses VALUES(
		'$idx','$nama','$username',MD5('$username'),'$level')";

if ($rs=mysql_query($sql))
	header("location:user_tambah.php");
else die('Nama karyawan ini sudah pernah diberikan akses...');

?>