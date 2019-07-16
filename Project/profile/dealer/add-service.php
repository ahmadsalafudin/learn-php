<?php
	include('config.php');
	$nama = $_POST['nama'];
	$type = $_POST['type']; 
	$no_plat = $_POST['no_plat'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email']; 
	$tgl = $_POST['tgl'];
	
	
	$result = $mysqli->query("INSERT INTO `perbaikan` (`nama`, `type`, `no_plat`, `nohp`, `email`, `tgl`) 
								VALUES ('".$nama."', '".$type."', '".$no_plat."', '".$nohp."', '".$email."', '".$tgl."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: index.php');
	}
?>