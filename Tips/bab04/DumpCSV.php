<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<style type="text/css">
BODY,TD {font-family:verdana,arial;font-size:9pt}
</style>
<body>

<?php
/* DumpCSV.php */

$file = 'C:/temp/data.csv';

$db = mysqli_connect('localhost', 'didik', '', 'myDB');
$sql = 'SELECT kode, judul, pengarang, id_penerbit, tahun FROM buku';
$res = mysqli_query($db, $sql);
?>

<table width=500 border=1>
<tr>
   <td>Kode</td><td>Judul</td><td>Pengarang</td>
   <td>Penerbit</td><td>Tahun</td>
</tr>

<?php
$csv = '';
if ($res != null) {
   while ($row = mysqli_fetch_row($res)) {
      echo '<tr><td>' .$row[0]. '</td>
      <td>' .$row[1]. '</td> <td>' .$row[2].
      '</td><td>' .$row[3]. '</td>
      <td>' .$row[4]. '</td></tr>';
      // Mengembalikan string dari elemen array
      // glue/delimeter string adalah titik koma
      $csv.= implode(';', $row)."\n";
   }
   echo '</table> <br>';

   mysqli_free_result($res);

   // Membuka file untuk operasi penulisan saja
   $fp = fopen($file, 'w')
   or die('Tidak bisa membuka file '.$file);
   // Menulis string ke file
   $fw = fwrite($fp, $csv);
   fclose($fp);

   // buat link, jika berhasil menulis file
   if ($fw) {
      echo '<a href='.$file.'>download</a>';
   }

}

mysqli_close($db);

?>