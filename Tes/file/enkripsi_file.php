<?php
$mp3 = "1.mp3";
$encripsi= base64_encode(file_get_contents($mp3));
echo $encripsi;
?>