<?php
/*
// config file for dbase connection setting.. http://firstplato.com email:admin@firstplato.com
*/

$mysqli = new mysqli('localhost','root','','ahpd');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}

?>