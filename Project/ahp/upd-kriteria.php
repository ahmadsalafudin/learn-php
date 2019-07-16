<?php
	include('config.php');
	$kriteria = $_POST['kriteria']; 
	$cukup = $_POST['cukup']; 
	$kurang = $_POST['kurang'];
	$baik = $_POST['baik']; 
	$bobot_kriteria = $_POST['bobot_kriteria'];
	
	echo $kriteria." - ".$cukup." - ".$kurang." - ".$baik;
	
	$result = $mysqli->query("UPDATE kriteria SET `kriteria` = '".$kriteria."', `cukup` = '".$cukup."',`kurang` = '".$kurang."',`baik` = '".$baik."',`bobot_kriteria` = '".$bobot_kriteria."' 
					WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>