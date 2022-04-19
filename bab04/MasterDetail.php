<?php
/* MasterDetail.php */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<style type="text/css">
BODY,TD {font-family:verdana,arial;font-size:8pt}
TH,H4 {font-family:verdana,arial;font-size:8pt}
</style>
<body>

<?php
$page = $_SERVER['PHP_SELF'];
$db = mysqli_connect('localhost', 'didik', '', 'myDB');
$sql = 'SELECT id, nama, alamat FROM penerbit';

if ($res = mysqli_query($db, $sql)) { ?>

   <h4> MASTER DATA </h4>
   <table border=1 cellpadding=2 width=380>
   <tr><th> Id </th> <th> Nama </th>
       <th> Alamat </th>
       <th colspan=2> Detail </th>
   </tr>

   <?php
   while($r = mysqli_fetch_array($res)) {
   $idx = "id=$r[0]";
   ?>
       <tr><td><?=$r[0]?></td>
       <td><?=$r[1]?></td><td><?=$r[2]?></td>
       <td align=center>
       <a href="<?=$page.'?id='.$r[0].'&nama='.$r[1]?>"> detail</a></td>
       </tr>

   <?php } ?>
</table><hr>

<?php mysqli_free_result($res);
}

if (isset($_GET['id']) && isset($_GET['nama'])) {
   $id = (int)$_GET['id'];
   $sql = "SELECT kode, judul, pengarang, id_penerbit FROM buku WHERE id_penerbit='$id'";
   $res = mysqli_query($db, $sql);

   // memeriksa jumlah baris data
   if (mysqli_num_rows($res) != 0) { ?>
      </table>
      <h4> DETAIL DATA </h4>
      Penerbit: <?=$_GET['nama']?>
      <table border=1 cellpadding=3 width=380>
      <th> Kode Buku </th>
      <th> Judul</th> <th> Pengarang </th>

      <?php
      while($r = mysqli_fetch_array($res)) { ?>

         <tr><td><?=$r[0]?>  </td>
         <td><?=$r[1]?></td><td><?=$r[2]?></td>
         </tr>

      <?php
      }
   } else {
    echo "<h4> Tidak Ada Detail</h4>";
   }
   mysqli_free_result($res);
}

mysqli_close($db);

?>

</body></html>