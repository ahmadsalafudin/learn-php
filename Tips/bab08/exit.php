<?php
/* exit.php */

// Set directive display_errors disable
// Letakkan di bagian atas kode program
ini_set('display_errors', FALSE);

$fp = fopen('xxx', 'r') or exit ('Unable to open file');

// Jika gagal membuka file,
// kode berikutnya tidak dieksekusi
$data = fread($fp, 1024);
fclose($fp);

// Variasi penulisan pernyataan exit()
// Keluar dari program secara normal
exit;
exit();
exit(0);

// Keluar dari program, dengan kode error
exit(1);
exit(0376);

?>