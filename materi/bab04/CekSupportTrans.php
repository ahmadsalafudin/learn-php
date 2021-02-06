<?php
/* CekSupportTrans.php */

$db = mysqli_connect('localhost', 'didik', '');
$sql = 'SHOW VARIABLES LIKE "have_innodb"';

if ($res = mysqli_query($db, $sql)) {
   while ($row = mysqli_fetch_row($res)) {
      echo $row[0], ': ', $row[1];
   }

   mysqli_free_result($res);
}

mysqli_close($db);

?>
