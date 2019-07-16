<?php
	include('config.php');
	$kriteria = $_POST['kriteria'];
	$kurang = $_POST['kurang']; 
	$cukup = $_POST['cukup'];
	$baik = $_POST['baik'];	
	$bobot_kriteria = $_POST['bobot_kriteria'];
	
	$result = $mysqli->query("INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kurang`, `cukup`, `baik`, `bobot_kriteria`) 
								VALUES (NULL, '".$kriteria."', '".$kurang."', '".$cukup."', '".$baik."', '".$bobot_kriteria."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>