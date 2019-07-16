<?php
$mysqli = new mysqli('localhost','root','','ahp');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}

?>