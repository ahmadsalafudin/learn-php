<?php
/* LockRead.php */

$file = 'C:/tmp/test.txt';
if (file_exists($file)) {
    $fp = fopen($file, 'r');
    echo 'Waiting for lock...<br>';

    // Locking file (shared lock)
    flock($fp, LOCK_SH);
    echo 'Locking  [OK] <br>';
    echo 'Reading file contents<br>';

    // Membaca isi file
    echo fread($fp, 1024), '<br>';
    echo 'Releasing lock...<br>';

    // Unlock file
    flock($fp, LOCK_UN);
    echo 'Unlock  [OK] <br>';
    fclose($fp);
    sleep(1);
}

?>
