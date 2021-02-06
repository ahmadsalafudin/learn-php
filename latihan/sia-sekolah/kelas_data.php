<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";


# UNTUK PAGING (PEMBAGIAN HALAMAN)
$baris = 50;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM kelas";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jumlah	 = mysql_num_rows($pageQry);
$maksData= ceil($jumlah/$baris);
?>
<table width="700" border="0" cellspacing="1" cellpadding="3" class="table-border">
  <tr>
    <td align="right"><h1><b>DAFTAR KELAS </b></h1></td>
  </tr>
  <tr>
    <td><a href="?open=Kelas-Add" target="_self"><img src="images/btn_add_data.png" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <th width="4%" bgcolor="#F5F5F5"><strong>No</strong></th>
        <th width="8%" bgcolor="#F5F5F5"><strong>Kode</strong></th>
        <th width="16%" bgcolor="#F5F5F5"><strong>Gelombang </strong></th>
        <th width="24%" bgcolor="#F5F5F5"><strong>Nama Kelas </strong></th>
        <th width="9%" bgcolor="#F5F5F5"><strong>Pelajar</strong></th>
        <th width="25%" bgcolor="#F5F5F5"><strong>Ketua Kelas </strong></th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tools</strong></td>
        </tr>
    <?php
	# Skrip menampilkan data Kelas
	$mySql = "SELECT kelas.*, guru.nama_guru FROM kelas
				LEFT JOIN guru ON kelas.kode_guru = guru.kode_guru
				ORDER BY kelas.tahun_ajar, kelas.kode_kelas ASC LIMIT $hal, $baris";
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
        <td> <?php echo $nomor; ?></td>
        <td> <?php echo $myData['kode_kelas']; ?> </td>
        <td> <?php echo $myData['tahun_ajar']; ?> </td>
        <td> <?php echo $myData['kelas']." | ".$myData['nama_kelas']; ?> </td>
        <td> <?php echo $my2Data['total_siswa']; ?> </td>
        <td> <?php echo $myData['nama_guru']; ?> </td>
        <td width="7%"><a href="?open=Kelas-Edit&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Edit</a></td>
        <td width="7%"><a href="?open=Kelas-Delete&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA KELAS INI ... ?')">Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b></td>
  </tr>
</table>
