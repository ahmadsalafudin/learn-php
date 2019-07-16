<?php
/* CompareIfElse.php */

$pass = 'okey';
echo ($pass == 'oke') ? 'OKE' : 'NOT OKE';
// Hasil: NOT OKE

// Perhatikan operator untuk komparasi..!!
$pass1 = 'okey';
echo ($pass1 = 'oke') ? 'OKE' : 'NOT OKE';
// Hasil: OKE


$pass2 = 'okey';
echo ('oke' = $pass2) ? 'OKE' : 'NOT OKE';
// Hasil: Pesan Error, kode tidak dieksekusi


?>
