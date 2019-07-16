<?php
/* sqliteUDF.php */

function sqliteSum($a, $b) {
	return $a + $b;
}

// menciptakan database di memori
$db = sqlite_open(':memory:');
sqlite_query($db, 'CREATE TABLE test(bil1 INTEGER PRIMARY KEY, bil2 INTEGER)');

for ($i=0; $i<=10; $i++) {
    sqlite_unbuffered_query($db, 'INSERT INTO test VALUES(NULL, '.$i.')');
}

sqlite_create_function($db, 'mySUM', 'sqliteSum', 2);


$arr = sqlite_array_query($db,
'SELECT bil1, bil2, mySUM(bil1, bil2) AS sum FROM test', SQLITE_ASSOC);


foreach ($arr as $row) {
  $x = 'bil1: ' .$row['bil1']. ', ';
  $x .= ' bil2: ' .$row['bil2']. ' -> ';
  $x .= ' sum: '. $row['sum']. '<br>';
  echo $x;
}

?>