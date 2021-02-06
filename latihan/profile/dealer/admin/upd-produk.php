<?php
	include('config.php');
	$nama_produk = $_POST['nama_produk']; 
	$gambar = $_POST['gambar']; 
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	
	echo $nama_produk." - ".$gambar." - ".$deskripsi." - ".$harga;
	
	$result = $mysqli->query("UPDATE produk SET `nama_produk` = '".$nama_produk."', `gambar` = '".$gambar."',`deskripsi` = '".$deskripsi."',`harga` = '".$harga."'	WHERE `id_produk` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: produk.php');
	}
?>