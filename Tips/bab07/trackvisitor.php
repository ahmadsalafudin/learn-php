<?php
/* trackvisitor.php */

// Memeriksa halaman yang di-refer
if (!$_SERVER['HTTP_REFERER']) {
    $ref = 'None';
} else {
    $ref = $_SERVER['HTTP_REFERER'];
}

$date = date('d/m/Y H:i:s');
$ip   = $_SERVER['REMOTE_ADDR'];

$data = 'IP Address: '. $ip. ' - ';
$data .= 'Date: '. $date. ' - ';
$data .= 'Referer: '. $ref. "\n";

// Tulis informasi ke file log, mode Append.
// Pointer diletakkan di bawah record
file_put_contents('./track.log', $data, FILE_APPEND)
or die('Ooops, could not writing...');

?>