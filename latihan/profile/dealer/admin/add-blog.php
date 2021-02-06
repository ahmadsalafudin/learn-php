<?php
	include('config.php');
	$title_blog = $_POST['title_blog'];
	$isi_blog = $_POST['isi_blog']; 
	
	
	$result = $mysqli->query("INSERT INTO `blog` (`id_blog`, `title_blog`, `isi_blog`) 
								VALUES (NULL, '".$title_blog."', '".$isi_blog."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: blog.php');
	}
?>