<?php
/* TransMySQL.php */

$db = mysqli_connect('localhost', 'didik', '', 'myDB');

// set autocommit Off
mysqli_autocommit($db, FALSE);

$sql = "INSERT INTO myInnoDB VALUES
       (1, 'guest'),
       (2, 'user'),
       (3, 'admin')";

// insert rows
if ($res = mysqli_query($db, $sql)) {
    printf("%d rows di-insert <br>\n",
    mysqli_affected_rows($db));
    mysqli_free_result($res);

}

// commit transaksi (insert)
mysqli_commit($db);
echo 'commit transaksi <br>';

if ($res = mysqli_query($db,
'SELECT id FROM myInnoDB')) {
   $jml = mysqli_num_rows($res);
   printf("%d rows in table <br>", $jml);
   mysqli_free_result($res);
}

// delete semua row
if ($res = mysqli_query($db,
'DELETE FROM myInnoDB')) {
    printf("%d rows di-delete <br>",
    mysqli_affected_rows($db));
    mysqli_free_result($res);
}

// rollback transaksi (batal delete)
mysqli_rollback($db);
echo 'rollback transaksi <br>';

if ($res = mysqli_query($db,
'SELECT id FROM myInnoDB')) {
   $jml = mysqli_num_rows($res);
   printf("%d rows in table\n", $jml);
   mysqli_free_result($res);
}

mysqli_close($db);

?>