<?php //limitbyIPrange.php
/* limitbyrange.php */

$userIP  = $_SERVER['REMOTE_ADDR'];

// Alamat yang diijinkan 192.168.xxx
// xxx = 0 - 255
$rangeIP = '192.168.0.';

if ((strstr($userIP, $rangeIP)) == false) {
    exit('You\'re not in my neighborhood');
}

echo 'Yup, you are allowed...';

?>