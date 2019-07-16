<?php
//panggil file conn.php untuk menghubung ke server
include('system/config/conn.php');
$id_mahasiswa = $_GET['id'];
$query = mysql_query("DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'") or die(mysql_error());
if ($query) {
header('location:page.php?data-semua-mahasiswa&message=delete-success');
}
?>