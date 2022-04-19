<?php
	include('config.php');
	$nama = $_POST['nama'];
	$email = $_POST['email']; 
	$isi_pesan = $_POST['isi_pesan'];
	
	
	$result = $mysqli->query("INSERT INTO `pesan` (`nama`, `email`, `isi_pesan`) 
								VALUES ('".$nama."', '".$email."', '".$isi_pesan."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: index.php');
	}
?>