<?php
	include('config.php');
	
	$result = $mysqli->query("delete from pelanggan where id_c = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: pelanggan.php');
	}
?>