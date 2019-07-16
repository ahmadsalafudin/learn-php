<?php
/* LoggingError.php */

$conn = @mysqli_connect('Unknown', 'didik', '');

if (!$conn) {
   // Kirim pesan ke browser
   echo 'Sorry, Connect failed <br>';
   // Tulis pesan error ke file
   writeLog('Koneksi Gagal ' .mysqli_connect_error());
}

if (!$fp = @fopen('xxx', 'r')) {
   echo 'Unable to open file';
   // Tulis pesan error ke file
   writeLog('Gagal membuka file');
}

function writeLog($msg) {
   $date = date('d/m/Y H:i:s ');
   $file = 'C:/tmp/err.log';
   // Tipe log=3 (menulis ke file lokal)
   return error_log($date.$msg."\n", 3, $file);
}

?>