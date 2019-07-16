<?php
	include('config.php');
	
	$result = $mysqli->query("delete from blog where id_blog = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: blog.php');
	}
?>