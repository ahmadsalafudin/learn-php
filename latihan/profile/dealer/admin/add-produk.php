<?php
	include('config.php');
	$nama_produk = $_POST['nama_produk'];
	$gambar = $_POST['gambar']; 
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	
	
	$result = $mysqli->query("INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `deskripsi`, `harga`) 
								VALUES (NULL, '".$nama_produk."', '".$gambar."', '".$deskripsi."', '".$harga."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: produk.php');
	}
?>