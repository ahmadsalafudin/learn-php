<?php

/**
 * Kode ini diletakkan di atas konfigurasi.
 * Eksekusi kode akan berhenti setelah
 * menampilkan pesan. Baris berikutnya
 * tidak dieksekusi lagi.
 */
if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF'])
    exit('Naughty, Naughty, Very Naughty...!');

// Kode konfigurasi di sini...

$host = "localhost";   //Nama host
$user = "root";        //Nama user database
$pass = "password";    //Password user database

$conn = mysql_connect($host, $user, $pass);


?>