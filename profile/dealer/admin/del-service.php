<?php
	include('config.php');
	
	$result = $mysqli->query("delete from perbaikan where id_s = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: service.php');
	}
?>