<?php
/* FungsiTime.php */

$time = date("G");

if ($time < 12) {
    $say = 'Good morning..';
} elseif ($time < 17) {
    $say = 'Good afternoon..';
} else {
    $say = 'Good evening..';
}

echo $say;

// Menggunakan fungsi
function greeting($tNow) {
    if (!$tNow) return '';
    if ($tNow < 12) return 'Good Morning..';
    if ($tNow < 17) return 'Good afternoon..';
    if ($tNow > 17) return 'Good evening..';
}

echo greeting($time);

?>
