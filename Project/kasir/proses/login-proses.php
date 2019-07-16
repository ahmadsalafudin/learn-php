<?php

session_start();

require_once '../config/db.php';

$nama 		= $_POST['nama'];
$password	= md5($_POST['password']);
$jabatan	= $_POST['jabatan'];

if (empty($nama) || empty($password) || empty($jabatan)) {
	header('Location: ../index.php');
}

$sql 	= "SELECT * FROM tb_users WHERE nama = '".$nama."' AND password = '".$password."' AND jabatan = '".$jabatan."'";
$query 	= $conn->query($sql);
$result = $query->fetch_assoc();

if ($query->num_rows > 0) {
	
	$_SESSION['user'] = $result['nama'];
	$_SESSION['id_user'] = $result['id'];
	
	if ($result['jabatan'] == 'admin') {
		header('Location: ../admin/index.php');
	} else {
		header('Location: ../petugas/index.php');
	}

} else {

	header('Location: ../index.php');
	
}