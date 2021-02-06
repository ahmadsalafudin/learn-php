<?php
/* SQLiteTimeout.php */

$dbhandle = sqlite_open('sqlitedb');

// set timeout to 10 seconds
sqlite_busy_timeout($dbhandle, 10000);

// disable busy handler
sqlite_busy_timeout($dbhandle, 0);

?>
