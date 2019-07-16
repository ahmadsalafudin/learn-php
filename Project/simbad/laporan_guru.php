<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$baris	= 50;
$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM guru";
$pageQry= mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jumlah	= mysql_num_rows($pageQry);
$maks	= ceil($jumlah/$baris);
$mulai	= $baris * ($hal-1); 
?>
<h2> LAPORAN DATA TUTOR </h2>
<table class="table-print" width="800" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="25" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="50" bgcolor="#F5F5F5"><strong>Kode</strong></td>
    <td width="70" bgcolor="#F5F5F5"><strong>NIP</strong></td>
    <td width="180" bgcolor="#F5F5F5"><strong>Nama Tutor </strong></td>
    <td width="59" bgcolor="#F5F5F5"><strong>Kelamin</strong></td>
    <td width="276" bgcolor="#F5F5F5"><strong>Alamat</strong></td>
    <td width="90" bgcolor="#F5F5F5"><strong>No. Telepon</strong></td>
  </tr>
	<?php
	$mySql = "SELECT * FROM guru ORDER BY kode_guru ASC LIMIT $mulai, $baris";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
	$nomor  = $hal; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kode_guru'];
	?>
    <tr>
		<td> <?php echo $nomor; ?> </td>
		<td> <?php echo $myData['kode_guru']; ?> </td>
		<td> <?php echo $myData['nip']; ?> </td>
		<td> <?php echo $myData['nama_guru']; ?> </td>
		<td> <?php echo $myData['kelamin']; ?> </td>
		<td> <?php echo $myData['alamat']; ?> </td>
		<td> <?php echo $myData['no_telepon']; ?> </td>
    </tr>
  <?php } ?>
  <tr>
    <td colspan="3" bgcolor="#F5F5F5"> <strong>Jumlah Data : </strong> <?php echo $jumlah; ?> </td>
    <td colspan="4" align="right" bgcolor="#F5F5F5">
	<strong>Halaman Ke : </strong>
	<?php
	for ($h = 1; $h <= $maks; $h++) {
		echo " <a href='?open=Laporan-Guru&hal=$h'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>



