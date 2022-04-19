<?php
include 'koneksi.php';
 
$id = $_GET['id'];
 
$query = mysql_query("delete from karyawan where idx='$id'") or die(mysql_error());
 
if ($query) {
    header('location:karyawan_tambah.php');
}
?>
