<?php
/* LoopArray.php */

$arr = array('PHP', 'JavaScript', 'ASP', 'HTML');

// Kurang efisien
for ($i=0; $i<count($arr); $i++) {
	echo $arr[$i]. '<br>';
}

// Lebih efisien
$n = count($arr);
for ($i=0; $i<$n; $i++) {
	echo $arr[$i]. '<br>';
}

?>

