<?php
/* LockWrite2.php */

$file = 'C:/tmp/test.txt';

// Locking file (eksklusif)
echo 'Waiting for lock...<br>';
echo 'Attempt to write <br>';
$date =  date('d/m/Y H:i:s');
file_put_contents($file, $date, LOCK_EX);
echo 'Locking [OK] <br>';
echo 'Writing [OK] <br>';

// Set delay eksekusi 1 detik
sleep(1);

// Unlock file
// Lock dilepas, ketika kode selesai
// dieksekusi.
?>
