<?php
/* speedtesting.php */

require_once 'myprofiler.php';

$arr = array('a'=> 'satu', 'b'=> 'dua',
     'c'=> 'tiga', 'd'=> 'empat', 'e'=> 'lima');

$loops = 1000000;


startTest('array_key_exists()', 'use_key', $loops);
startTest('isset()', 'use_isset', $loops);

function use_key($loops) {
   global $arr;
   for ($i=0; $i<$loops; $i++) {
       if (array_key_exists('c', $arr)) {
          // elemen ditemukan
       } else { exit('err1...'); }
   }
}

function use_isset($loops) {
   global $arr;
   for ($i=0; $i<$loops; $i++) {
       if (isset($arr['c'])) {
          // elemen ditemukan
       } else { exit('err2...'); }
   }
}

?>