<?php
/* Test.php */

$fp = fopen('xxx', 'r');
// Jika gagal membuka file,
// kedua baris ini akan tetap dieksekusi
$data = fread($fp, 1024);
fclose($fp);

?>