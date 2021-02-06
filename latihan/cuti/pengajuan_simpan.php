<?php
include 'koneksi.php';

$id_cuti			= $_POST['id_cuti'];
$tanggal			= $_POST['tanggal'];
$idx				= $_POST['idx'];
$id_departemen		= $_POST['id_departemen'];
$cuti_awal			= $_POST['cuti_awal'];
$cuti_ambil			= $_POST['cuti_ambil'];
$tgl_awal			= $_POST['tgl_awal'];
$tgl_akhir			= $_POST['tgl_akhir'];
$alasan				= $_POST['alasan'];

$sql="INSERT INTO input_cuti VALUES(
		'$id_cuti','$tanggal','$idx','$id_departemen','$cuti_awal','$cuti_ambil','','$tgl_awal','$tgl_akhir','$alasan','WAITING APPROVE')";


if ($rs=mysql_query($sql))
	header("location:pengajuan.php");
else die('Nama karyawan ini sudah pernah diberikan akses...');

?>