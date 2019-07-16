<?php
	include('config.php');
	
	$result = $mysqli->query("delete from pesan where id_p = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: pesan.php');
	}
?>