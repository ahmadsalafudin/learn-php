<?php
/* LockWrite.php */

$fp = fopen('C:/tmp/test.txt', 'w');

// Locking file (eksklusif)
echo 'Waiting for lock...<br>';
flock($fp, LOCK_EX);
echo 'Locking [OK] <br>';

// Menulis ke file
echo 'Attempt to write <br>';
$date =  date('d/m/Y H:i:s');
fwrite($fp, $date);
echo 'Writing [OK] <br>';

// Set delay eksekusi 1 detik
sleep(1);

// Unlock file
echo 'Releasing lock...<br>';
flock($fp, LOCK_UN);
echo 'Unlock  [OK] <br>';

fclose($fp);

?>
