<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
?>
<h2> LAPORAN DATA MATERI </h2>
<table class="table-print"  width="700" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="30" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="70" bgcolor="#F5F5F5"><strong>Kode</strong></td>
    <td width="361" bgcolor="#F5F5F5"><strong>Nama Materi </strong></td>
    <td width="210" bgcolor="#F5F5F5"><strong>Keterangan</strong></td>
  </tr>
  <?php
	$mySql = "SELECT * FROM pelajaran ORDER BY kode_pelajaran ASC";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
	?>
  <tr>
    <td> <?php echo $nomor; ?> </td>
    <td> <?php echo $myData['kode_pelajaran']; ?> </td>
    <td> <?php echo $myData['nama_pelajaran']; ?> </td>
    <td> <?php echo $myData['keterangan']; ?> </td>
  </tr>
  <?php } ?>
</table>
