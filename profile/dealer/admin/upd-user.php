<?php
	include('config.php');
	$nama = $_POST['nama']; 
	$username = $_POST['username'];
	$password = $_POST['password']; 
	echo $nama." - ".$username." - ".$password;
	
	$result = $mysqli->query("UPDATE user SET `nama` = '".$nama."', `username` = '".$username."',`password` = '".$password."' 
					WHERE `id` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: user.php');
	}
?>