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
<table width="700" border="0" cellpadding="2" cellspacing="0" class="table-border">
  <tr>
    <td colspan="2" align="right"><h1><b>DAFTAR TUTOR</b></h1></td>
  </tr>
  <tr>
    <td colspan="2"><a href="?open=Guru-Add" target="_self"><img src="images/btn_add_data.png" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
	<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <th width="5%" bgcolor="#CCCCCC">No</th>
        <th width="10%" bgcolor="#CCCCCC">Kode</th>
        <th width="14%" bgcolor="#CCCCCC">NIP</th>
        <th width="45%" bgcolor="#CCCCCC">Nama Tutor </th>
        <th width="12%" bgcolor="#CCCCCC">Kelamin</th>
        <th colspan="2" bgcolor="#CCCCCC">Tools</th>
        </tr>
    <?php
	$mySql = "SELECT * FROM guru ORDER BY kode_guru ASC LIMIT $mulai, $baris";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
	$nomor = $mulai; 
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
        <td width="7%" align="center"><a href="?open=Guru-Edit&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Edit</a></td>
        <td width="7%" align="center"><a href="?open=Guru-Delete&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data"  onclick="return confirm('YAKIN AKAN MENGHAPUS DATA GURU INI ... ?')">Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td width="332" height="22" bgcolor="#CCCCCC"><b>Jumlah Data :</b> <?php echo $jumlah; ?></td>
    <td width="360" align="right" bgcolor="#CCCCCC"><b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $maks; $h++) {
		echo " <a href='?open=Guru-Data&hal=$h'>$h</a> ";
	}
	?> </td>
  </tr>
</table>
