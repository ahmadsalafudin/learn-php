<?php
/* Exception.php */

ini_set('display_errors', FALSE);

try {
    // Kode yang bisa membangkitkan exception
    $fp = fopen('xxx', 'r');
    // Melempar exception
    throw new Exception($fp);

    // Kode yang mengikuti exception
    // tidak pernah dieksekusi
    echo 'hii...';

// Menangkap exception
} catch (Exception $ex) {
   echo 'Caught exception: <br>';
   echo $ex;
}

// Eksekusi dilanjutkan
echo 'hello...';

?>