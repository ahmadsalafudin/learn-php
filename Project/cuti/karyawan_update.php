<?php
include 'koneksi.php';

$idx			= $_POST['idx'];
$tgl_masuk		= $_POST['tgl_masuk'];
$nik	    	= $_POST['nik'];
$nama			= $_POST['nama'];
$tempat_lahir	= $_POST['tempat_lahir'];
$tgl_lahir		= $_POST['tgl_lahir'];
$alamat			= $_POST['alamat'];
$hp				= $_POST['hp'];
$departemen		= $_POST['departemen'];
$status			= $_POST['status'];


//update data di database sesuai id
$query = mysql_query("update karyawan set tgl_masuk='$tgl_masuk', nik='$nik', 
nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat'
, hp='$hp', departemen='$departemen', status='$status' 
WHERE idx='$idx'") or die(mysql_error());
 
if ($query) {
    header('location:karyawan_tambah.php?message=success');
}
?>