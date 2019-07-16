<?php
include 'koneksi.php';

$idx			= $_POST['idx'];
$jml_cuti	   	= $_POST['jml_cuti'];

$sql="INSERT INTO cuti_awal VALUES(
		'$idx','$jml_cuti')";

if ($rs=mysql_query($sql))
	header("location:cuti_awal.php");
else die('Nama karyawan ini sudah pernah diinput cuti awalnya...');

?>