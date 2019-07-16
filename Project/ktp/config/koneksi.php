<?php
$mysqli=new mysqli("localhost","root","","ktp");
if($mysqli->connect_errno){

	echo "Failed Connect:".
	$mysqli->connect_error;

}
?>