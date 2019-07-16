<?php

$ch = curl_init('http://localhost/form.php');
// Include header ke output
curl_setopt($ch, CURLOPT_HEADER, 1);
// Melakukan POST reguler
curl_setopt($ch, CURLOPT_POST, 1);
// Data yang dikirim ke operasi
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=didik');
// Mengembalikan string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
// Tampilkan response
echo $response;
curl_close($ch);

?>