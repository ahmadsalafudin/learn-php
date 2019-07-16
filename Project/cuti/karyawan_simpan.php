<?php
include 'koneksi.php';

$idx			= $_POST['idx'];
$tgl_masuk		= $_POST['tgl_masuk'];
$nik			= $_POST['nik'];
$nama			= $_POST['nama'];
$tempat_lahir	= $_POST['tempat_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$alamat   		= $_POST['alamat'];
$hp		    	= $_POST['hp'];
$departemen		= $_POST['departemen'];
$status		    = $_POST['status'];

$sql="INSERT INTO karyawan VALUES(
		'$idx','$tgl_masuk','$nik','$nama','$tempat_lahir','$tgl_lahir','$alamat','$hp','$departemen','$status')";

if ($rs=mysql_query($sql))
	header("location:karyawan_tambah.php");
else die('Gagal Menyimpan karena'.mysql_error());

?>