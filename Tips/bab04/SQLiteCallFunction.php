<?php
/* SQLiteCallFunction.php */

$str = array('skeT', 'ini', 'hadus', 'esrever-id');

$db = sqlite_open(':memory:');
sqlite_query($db, 'CREATE TABLE test(teks VARCHAR(25))');

foreach ($str as $val) {
   $strval = sqlite_escape_string($val);
   sqlite_unbuffered_query($db, "INSERT INTO test VALUES('$strval')");
}

$arr = sqlite_array_query($db, "SELECT PHP('strrev', teks) AS value FROM test", SQLITE_ASSOC);

foreach ($arr as $row) {
  echo $row['value']. ' ';
}

?>