<?php
$host='localhost';
$user='root';
$pass='';
$dbnm='cuti_lukman';
$conn=mysql_connect($host,$user,$pass);

if ($conn){
	$buka=mysql_select_db($dbnm);
	if(!$buka){
		die("Database Tidak Bisa Dibuka");
	}
}else{ 
	die('Server Database Tidak Terhubung');	
}
?>