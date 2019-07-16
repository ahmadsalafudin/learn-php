<?php

$fp = fopen('./mylog.log','w') or
die('Unable to open file');

$ch = curl_init('http://localhost/form.php');
// Menulis output ke standar error
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'nama=didik');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Lokasi alternatif untuk mencetak error
curl_setopt($ch, CURLOPT_STDERR, $fp);
curl_exec($ch);

curl_close($ch);
fclose($fp);

?>