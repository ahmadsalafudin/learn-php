<html>
<head>
<style type="text/css">
BODY, TD {font-family:verdana,arial;font-size:8pt}
</style>
</head>
<body>

<?php
/* PagingWeb.php */

$flname = $_SERVER['PHP_SELF'];

$db = mysqli_connect('localhost', 'didik', '', 'myDB');
$sql = 'SELECT kode, judul, pengarang, id_penerbit, tahun FROM buku';
$res = mysqli_query($db, $sql);

if ($res != null) {
   $jml = mysqli_num_rows($res);
   if ($jml == 0) {
       echo 'Tabel kosong';
       exit;
   }

   // Batas baris per halaman
   $batas = 4;
   if (($jml%$batas) == 0) {
       $jmlpage = (int)($jml/$batas);
   } else {
       $jmlpage = ((int)$jml/$batas)+1;
   }

   // Inisialisasi variabel page
   (isset($_GET['page'])) ?
   $page = (int)$_GET['page'] : $page =1;

   if ($page > $jmlpage)
       $page=$jmlpage;

   while ($rows = mysqli_fetch_array($res)) {
       $arrdata[]=$rows;
   }
   mysqli_free_result($res);
   mysqli_close($db);

   // Set end dan start page
   $end  = (int)($page*$batas)-1;
   $start= (int)$end-($batas-1);

   if ($end>$jml)
       $end=$jml-1;

   for ($i=$start; $i<=$end; $i++) {
       $arr[] = $arrdata[$i];
   }
   ?>

   <center><table width=400
   style="border:1pt solid #666666;">

   <?php
   foreach ($arr as $row) { ?>
       <tr><td>Kode Buku</td>
       <td>: <?=$row[0]?> </td></tr>
       <tr><td width=120>Judul</td>
       <td>: <?=$row[1]?> </td></tr>
       <tr><td>Pengarang</td>
       <td>: <?=$row[2]?> </td></tr>
       <tr><td>Id Penerbit</td>
       <td>: <?=$row[3]?> </td></tr>
       <tr><td>Tahun</td>
       <td>: <?=$row[4]?> </td></tr>
       <tr><td>&nbsp;</td></tr>

   <?php
   }
   echo '</table> <br>';

   // View link dan periksa halaman aktif
   for ($n=1; $n<=$jmlpage; $n++) {
      echo ($n != $page) ?
      " <a href='$flname?page=$n'>Hal $n</a> " :
      "<font color='gray'><b>Hal $n</b></font>";
   }
}

?>