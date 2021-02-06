<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# Tahun Terpilih
$dataKelas 		= isset($_POST['cmbKelas']) ? $_POST['cmbKelas'] : '';
$dataPelajaran 	= isset($_POST['cmbPelajaran']) ? $_POST['cmbPelajaran'] : '';
$dataSemester	= isset($_POST['cmbSemester']) ? $_POST['cmbSemester'] : '';

# Filter Data Nilai berdasarkan Combo yang dipilih
$filterSQL	= "";
if(isset($_POST['btnPilih1'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas'";
}
elseif(isset($_POST['btnPilih2'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas' AND nilai.kode_pelajaran = '$dataPelajaran'";
}
elseif(isset($_POST['btnPilih3'])) {
	$filterSQL = " WHERE nilai.kode_kelas = '$dataKelas' AND nilai.kode_pelajaran = '$dataPelajaran' AND nilai.semester = '$dataSemester'";
}
else {
	$filterSQL = "";
}
?>
<table  class="table-border" width="700" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td align="right"><h1><strong>DATA NILAI</strong></h1></td>
  </tr>
  <tr>
    <td><form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1">
      <table class="table-list" width="500" border="0" cellspacing="1" cellpadding="3">
 		
      </table>
                </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table  class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <th width="5%" bgcolor="#CCCCCC"><strong>No</strong></th>
        <th width="10%" bgcolor="#CCCCCC"><strong>NIP</strong></th>
        <th width="27%" bgcolor="#CCCCCC"><strong>Nama Pelajar</strong></th>
        <th width="10%" bgcolor="#CCCCCC"><strong>Keterangan</strong></th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tools</strong></td>
        </tr>
    <?php
	// Skrip menampilkan data Nilai
	$mySql = "SELECT nilai.*, pelajaran.nama_pelajaran, siswa.nama_siswa, siswa.nis FROM nilai
				LEFT JOIN pelajaran ON nilai.kode_pelajaran = pelajaran.kode_pelajaran
				LEFT JOIN siswa ON nilai.kode_siswa = siswa.kode_siswa
				$filterSQL ORDER BY semester, kode_pelajaran ASC"; 
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['id'];
	?>
	  <tr>
		<td> <?php echo $nomor; ?> </td>
		<td> <?php echo $myData['nis']; ?> </td>
		<td> <?php echo $myData['nama_siswa']; ?> </td>
		<td> <?php echo $myData['keterangan']; ?> </td>
		<td width="7%" align="center"><a href="?open=Nilai-Edit&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Edit</a></td>
		<td width="7%" align="center"><a href="?open=Nilai-Delete&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA NILAI PELAJARAN INI ... ?')">Delete</a></td>
	  </tr>
	<?php } ?>
    </table></td>
  </tr>
</table>
