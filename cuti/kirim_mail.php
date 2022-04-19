<?php
include 'koneksi.php';
$id = $_GET['id'];

$query = mysql_query("UPDATE input_cuti SET status = 'DITOLAK' where id_cuti='$id'") or die(mysql_error());
if ($query) {
    header('location:approval.php');
}
?>