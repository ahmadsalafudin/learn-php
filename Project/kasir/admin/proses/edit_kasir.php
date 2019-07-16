<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['user'])) {
	header('Location: ../../index.php');
}

$nama 	= $_POST['nama'];
$jabatan = $_POST['jabatan'];
$id = $_POST['id'];

$update = $conn->query("UPDATE tb_users SET nama = '".$nama."', jabatan = '".$jabatan."' WHERE id = '".$id."'");

if ($update) {
	header('Location: ../petugas-kasir.php');
} else {
	header('Location: ../petugas-kasir.php?h=edit-kasir&id=2');
}