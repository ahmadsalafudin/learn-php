<?php
/* StringToArray.php */

$str = 'PHP, JavaScript, ASP, HTML';

// Split string dengan string ","
$arr = explode(',', $str);

echo 'Isi Array: <br>';
foreach($arr as $val) {
   echo $val, '<br>';
}

?>