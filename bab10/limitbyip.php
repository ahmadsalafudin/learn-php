<?php

$userIP  = $_SERVER['REMOTE_ADDR'];
$allowed = '127.0.0.1';  // localhost

if ($userIP != $allowed) {
exit ('Sorry, Restricted Access...!');
}

// Jika akses dari IP 127.0.0.1,
// bagian ini akan dieksekusi
// Letakkan data sensitif di sini

echo 'Yup, you are allowed...';

?>