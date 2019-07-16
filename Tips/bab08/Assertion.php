<?php
/* Assertion.php */

// Enable evaluasi assert()
assert_options(ASSERT_ACTIVE, 1);
// Disable error reporting selama evaluasi
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);
// Untuk memanggil fungsi jika assertion gagal
assert_options( ASSERT_CALLBACK, 'assertHandler');

$x = 10;
$y = 0;

// Periksa jika assertion FALSE
// Melakukan pembagian dengan nol
assert('$z = $x / $y;  //Comment: $y harus lebih dari nol');

// Jika TRUE, ini dieksekusi
echo 'Hasil pembagian= ' .$z;

function assertHandler($file, $line, $code) {
   echo 'Error in: <b>', $file,'</b> <br>';
   echo 'Line: <b>', $line,'</b> :<br>';
   echo 'Code: <b>', $code, '</b> <br>';
   exit;
}

?>