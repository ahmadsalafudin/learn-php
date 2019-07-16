<?php
	include('config.php');
	
	$result = $mysqli->query("delete from kriteria where id_kriteria = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>