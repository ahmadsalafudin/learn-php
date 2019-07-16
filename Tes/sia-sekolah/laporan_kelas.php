<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# Tahun Terpilih
$tahun 			= isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
$dataAjaran 	= isset($_POST['cmbAjaran']) ? $_POST['cmbAjaran'] : $tahun;

if(isset($dataAjaran)) {
	$filterSQL	= "WHERE kelas.tahun_ajar = '$dataAjaran' ";
}
else {
	$filterSQL	= "";
}
?>
<h2> LAPORAN DATA KELAS </h2>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self"> 
  <table class="table-print" width="400" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><strong>FILTER DATA </strong></td>
    </tr>
    <tr>
      <td width="100"><strong>Tahun Ajaran </strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="273">
	<select name="cmbAjaran">
	<?php
	$dataSql = "SELECT tahun_ajar FROM kelas GROUP BY tahun_ajar ORDER BY tahun_ajar";
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	while ($dataRow = mysql_fetch_array($dataQry)) {
	if ($dataAjaran == $dataRow['tahun_ajar']) {
		$cek = " selected";
		} else { $cek=""; }
		echo "<option value='$dataRow[tahun_ajar]' $cek>$dataRow[tahun_ajar]</option>";
	}
	?>
	</select>
        <input name="btnTampil" type="submit" value="Tampilkan" /></td>
    </tr>
  </table>
</form>
<table class="table-print" width="700" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="30" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="70" bgcolor="#F5F5F5"><strong>Kode</strong></td>
    <td width="120" bgcolor="#F5F5F5"><strong>Gelombang</strong></td>
    <td width="130" bgcolor="#F5F5F5"><strong>Nama Kelas </strong></td>
    <td width="75" bgcolor="#F5F5F5"><strong>Qty Pelajar</strong></td>
    <td width="232" bgcolor="#F5F5F5"><strong>Wali Kelas </strong></td>
  </tr>
	<?php
	# Skrip menampilkan data Kelas
	$mySql = "SELECT kelas.*, guru.nama_guru FROM kelas
				LEFT JOIN guru ON kelas.kode_guru = guru.kode_guru
				$filterSQL ORDER BY kelas.tahun_ajar, kelas.kode_kelas ASC";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kode_kelas'];
		
		# Sub Skrip menghitung jumlah siswa
		$my2Sql = "SELECT COUNT(*) AS total_siswa FROM kelas_siswa WHERE kode_kelas='$Kode'";
		$my2Qry = mysql_query($my2Sql, $koneksidb)  or die ("Query 2 salah : ".mysql_error());
		$my2Data= mysql_fetch_array($my2Qry);
	?>
  <tr>
    <td> <?php echo $nomor; ?> </td>
    <td> <?php echo $myData['kode_kelas']; ?> </td>
    <td> <?php echo $myData['tahun_ajar']; ?> </td>
    <td> <?php echo $myData['kelas']." | ".$myData['nama_kelas']; ?> </td>
    <td> <?php echo $my2Data['total_siswa']; ?> </td>
    <td> <?php echo $myData['nama_guru']; ?> </td>
  </tr>
  <?php } ?>
</table>
