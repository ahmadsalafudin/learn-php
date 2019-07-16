<?php
/* noparam */

if ($_SERVER['argc'] != 0) {
   echo 'Naughty Naught, Very Naughty<p>';

   // Print/debug nilai parameter
   $param = $_SERVER['argv'];
   print_r($param);

} else {
    echo 'Thanks guys...';
}

?>
