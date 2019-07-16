<?php
/* Suppression.php */

$fp = @fopen('xxx', 'r');

// Operator @ tidak menyembunyikan
// parser Error (e.g. kurang tanda kutip)
$fp = @fopen('xxx', 'r);

?>