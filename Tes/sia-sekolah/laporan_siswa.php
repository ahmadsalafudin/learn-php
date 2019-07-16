<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# Tahun Terpilih
$filterSql		= "";
$tahun 			= isset($_GET['tahun']) ? $_GET['tahun'] : date('Y');
$dataTahunAngk 	= isset($_POST['cmbTahunAngk']) ? $_POST['cmbTahunAngk'] : $tahun;

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$baris	= 50;
$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM siswa WHERE tahun_angkatan='$dataTahunAngk'";
$pageQry= mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jumlah	= mysql_num_rows($pageQry);
$maks	= ceil($jumlah/$baris);
$mulai	= $baris * ($hal-1); 
?>
<h2> LAPORAN DATA PELAJAR </h2>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table class="table-print" width="400" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><strong>FILTER DATA </strong></td>
    </tr>
    <tr>
      <td width="125"><strong>Gelombang </strong></td>
      <td width="3">:</td>
      <td width="250">
	<select name="cmbTahunAngk">
	<?php
	$dataSql = "SELECT tahun_angkatan FROM siswa GROUP BY tahun_angkatan ORDER BY tahun_angkatan";
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	while ($dataRow = mysql_fetch_array($dataQry)) {
	if ($dataTahunAngk == $dataRow['tahun_angkatan']) {
		$cek = " selected";
		} else { $cek=""; }
		echo "<option value='$dataRow[tahun_angkatan]' $cek>$dataRow[tahun_angkatan]</option>";
	}
	?>
	</select>
        <strong>
        <input name="btnTampil" type="submit" value="Tampilkan" />
        </strong></td>
    </tr>
  </table>
</form> 
<table width="800" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="25" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="60" bgcolor="#F5F5F5"><strong>Kode</strong></td>
    <td width="75" bgcolor="#F5F5F5"><strong>NIP</strong></td>
    <td width="175" bgcolor="#F5F5F5"><strong>Nama Pelajar</strong></td>
    <td width="60" bgcolor="#F5F5F5"><strong>Kelamin</strong></td>
    <td width="200" bgcolor="#F5F5F5"><strong>Alamat</strong></td>
    <td width="90" bgcolor="#F5F5F5"><strong>No. Telepon</strong></td>
    <td width="58" bgcolor="#F5F5F5"><strong>Angkatan</strong></td>
  </tr>
  <?php
  	// Menampilkan Semua data Siswa dengan Filter per Tahun
	$mySql = "SELECT * FROM siswa WHERE tahun_angkatan='$dataTahunAngk' 
				ORDER BY kode_siswa ASC LIMIT $mulai, $baris";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
	$nomor  = $hal; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kode_siswa'];
	?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $myData['kode_siswa']; ?></td>
    <td><?php echo $myData['nis']; ?></td>
    <td><?php echo $myData['nama_siswa']; ?></td>
    <td><?php echo $myData['kelamin']; ?></td>
    <td><?php echo $myData['alamat']; ?></td>
    <td><?php echo $myData['no_telepon']; ?></td>
    <td><?php echo $myData['tahun_angkatan']; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="4" bgcolor="#F5F5F5"><strong>Jumlah Data : </strong>  <?php echo $jumlah; ?></td>
    <td colspan="4" align="right" bgcolor="#F5F5F5"><strong>Halaman Ke : </strong> 
	<?php
	for ($h = 1; $h <= $maks; $h++) {
		echo " <a href='?open=Laporan-Siswa&hal=$h&tahun=$dataTahunAngk'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>


