<?php
/* FileTemp.php */

$tmp = tmpfile();
fwrite($tmp, 'test temporary');

// Set posisi file
fseek($tmp, 0);

// Membaca isi file temp
$data = fread($tmp, 1024);
echo $data;

?>