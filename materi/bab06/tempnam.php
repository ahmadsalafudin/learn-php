<?php
/* tempnam.php */

$tmp = tempnam('C:\tmp', 'test');
$fp = fopen($tmp, 'w+');
fwrite($fp, 'test temporary');
fclose($fp);

// Membaca isi file temp
$data = file_get_contents($tmp);
echo $data;

// Get lokasi file temp
echo $tmp;

// Hapus file temp
unlink($tmp);

?>
