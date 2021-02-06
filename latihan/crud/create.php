<!--
Author : Aguzrybudy
Created : Selasa, 08-Novermber-2016
Title : Crud Php Mysqli Dilengkapi dengan upload gambar dan ckeditor
-->
<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$gambar = $_FILES['gambar']['name'];
$mysqli->query("INSERT INTO customers(nama,email,nohp,alamat,gambar) VALUES('$nama','$email','$nohp','$alamat','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
header('location:index.php');
?>