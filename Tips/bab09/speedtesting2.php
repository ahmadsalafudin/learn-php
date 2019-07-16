<?php
/* speedtesting2.php */

// Include class PEAR::Benchmark Iterate
require 'Benchmark/Iterate.php';

$arr = array('a'=> 'satu', 'b'=> 'dua',
     'c'=> 'tiga', 'd'=> 'empat', 'e'=> 'lima');

$loops = 1000;  // loop 1000 kali

function use_key($arr) {
   global $loops;
   for ($i=0; $i<$loops; $i++) {
       if (array_key_exists('c', $arr)) {
          // elemen ditemukan
       } else { exit('err1...'); }
   }
}

function use_isset($arr) {
   global $loops;
   for ($i=0; $i<$loops; $i++) {
       if (isset($arr['c'])) {
          // elemen ditemukan
       } else { exit('err2...'); }
   }
}

$timer =& new Benchmark_Iterate;

$timer->run($loops,'use_key', $arr);
$res1 = $timer->get();

$timer->run($loops,'use_isset', $arr);
$res2 = $timer->get();

echo '<h4>Summary</h4>';
echo "<p>Mean execution time of key:  $res1[mean]";
echo "<p>Mean execution time of isset: $res2[mean]";

?>