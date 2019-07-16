<?php
	include('config.php');
	
	$result = $mysqli->query("delete from produk where id_produk = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: produk.php');
	}
?>