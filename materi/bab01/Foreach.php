<?php
/* Foreach.php */

$arr = array('PHP'        => 'Server-side',
             'JavaScript' => 'Client-side',
             'ASP'        => 'Server-side',
             'HTML'       => 'Client-side');

foreach($arr as $key => $val) {
   echo 'Key: ', $key, ' Value: ', $val, '<br>';
}

?>

