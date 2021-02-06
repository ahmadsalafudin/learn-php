<?php
/* Swap.php */

$x = 5;
$y = 10;

echo '$x= ', $x, ', $y= ', $y, '<br>';
echo 'setelah di-swap <br>';

// Swapping dengan variabel temporary
$temp = $x;
$x = $y;
$y = $temp;
echo '$x= ', $x, ', $y= ', $y, '<br>';

// Menggunakan list() dan array()
list($x, $y) = array($y, $x);
echo '$x= ', $x, ', $y= ', $y, '<br>';

?>