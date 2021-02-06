<?php
/* PrevError.php */

error_reporting(0);

// Aktifkan directive track_errors
if (!ini_get('track_errors')) {
   ini_set('track_errors', TRUE);
}

if (!$fp = fopen('xxx', 'r')) {
   // Menampilkan previous error
   echo 'error: ' .$php_errormsg;
}

?>