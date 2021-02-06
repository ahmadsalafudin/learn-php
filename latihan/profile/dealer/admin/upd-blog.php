<?php
	include('config.php');
	$title_blog = $_POST['title_blog']; 
	$isi_blog = $_POST['isi_blog']; 
	
	echo $title_blog." - ".$isi_blog;
	
	$result = $mysqli->query("UPDATE blog SET `title_blog` = '".$title_blog."', `isi_blog` = '".$isi_blog."'  WHERE `id_blog` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: blog.php');
	}
?>