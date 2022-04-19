<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "stripcode-web";

	$conn = mysqli_connet($host, $user, $password, $dbname);
	if ($conn == false){
	echo "Koneksi gagal"
	}
?>