<?php
/* IfElse.php */

$pass = 'okey';

if ($pass == 'oke') {
    echo 'OKE <br>';
} else {
    echo 'NOT OKE <br>';
}

// ekuivalen dengan:
echo ($pass == 'oke') ? 'OKE' : 'NOT OKE';
// Hasil: NOT OKE


?>
