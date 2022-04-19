<?php
	include('config.php');
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat']; 
	$nohp = $_POST['nohp'];
	$email = $_POST['email']; 
	$foto = $_POST['foto'];
	
	
	$result = $mysqli->query("INSERT INTO `customers` (`id_c`, `nama`, `alamat`, `nohp`,  `email`, `foto`) 
								VALUES (NULL, '".$nama."', '".$alamat."', '".$nohp."', '".$email."', '".$foto."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: pelanggan.php');
	}
?>