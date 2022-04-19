<?php
$mysqli = new mysqli('localhost','root','','dealer');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}

?>