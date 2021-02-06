<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<style type="text/css">
BODY, TD {font-family:verdana,arial;font-size:8pt}
</style>
<body>

<?php
/* CacheQuery.php */

$file = 'cache.txt';
// waktu expire = 1 jam (60x60=3600)
$expire = 3600;

if (file_exists($file) && filemtime($file) > (time() - $expire)) {
   $data = unserialize(file_get_contents($file));
   echo '(Ket: retrieve dari file cache)';

} else {
   $db = mysql_connect('localhost','didik','', 'myDB');
   $sql = 'SELECT kode, judul, pengarang, id_penerbit, tahun FROM buku';
   $res = mysql_query($db, $sql);
   if ($res != null) {
      while ($r = mysql_fetch_array($res)) {
        $data[] = $r;
      }
      $dump = serialize($data);
      $fp = fopen($file,"w");
      fputs($fp, $dump);
      fclose($fp);
   }
   mysqli_free_result($res);
   echo '(Ket: retrieve dari database)';
   mysqli_close($db);
}
?>

<table width=400 border=1>
<tr>
   <td>Kode</td><td>Judul</td><td>Pengarang</td>
   <td>Penerbit</td><td>Tahun</td>
</tr>

<?php
foreach ($data as $key => $row) { ?>
   <tr><td> <?=$row[0]?> </td>
   <td> <?=$row[1]?> </td>
   <td> <?=$row[2]?> </td>
   <td> <?=$row[3]?> </td>
   <td> <?=$row[4]?> </td></tr>

<?php } ?>