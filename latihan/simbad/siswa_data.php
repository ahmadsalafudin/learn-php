<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

$pencarianSQL	= "";
# PENCARIAN DATA 
if(isset($_POST['btnCari'])) {
	$txtKataKunci	= trim($_POST['txtKataKunci']);

	// Menyusun sub query pencarian
	$pencarianSQL	= "WHERE nis='$txtKataKunci' OR nama_siswa LIKE '%$txtKataKunci%' ";
}

# Teks pada form
$dataKataKunci = isset($_POST['txtKataKunci']) ? $_POST['txtKataKunci'] : '';


# UNTUK PAGING (PEMBAGIAN HALAMAN)
$baris	= 50;
$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
$pageSql= "SELECT * FROM siswa $pencarianSQL";
$pageQry= mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jumlah	= mysql_num_rows($pageQry);
$maks	= ceil($jumlah/$baris);
$mulai	= $baris * ($hal-1); 
?>
<table width="700" border="0" cellspacing="1" cellpadding="3" class="table-border">
  <tr>
    <td colspan="2" align="right"><h1><b>DAFTAR PELAJAR </b></h1></td>
  </tr>
  <tr>
    <td colspan="2"><form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1">
      <table  class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr>
          <td colspan="2" bgcolor="#F5F5F5"><strong>PENCARIAN</strong></td>
          </tr>
        <tr>
          <td width="30%"><strong>Pencarian Pelajar (Nip/Nama)</strong> </td>
          <td width="70%"><input name="txtKataKunci" type="text" value="<?php echo $dataKataKunci; ?>" size="35" maxlength="100" />
            <input name="btnCari" type="submit" value=" Cari " /></td>
        </tr>
      </table>
                </form>
    </td>
  </tr>
  <tr>
    <td colspan="2"><a href="?open=Siswa-Add" target="_self"><img src="images/btn_add_data.png" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
	<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <th width="5%" bgcolor="#F5F5F5"><strong>No</strong></th>
        <th width="8%" bgcolor="#F5F5F5"><strong>Kode</strong></th>
        <th width="11%" bgcolor="#F5F5F5"><strong>Nip</strong></th>
        <th width="51%" bgcolor="#F5F5F5"><strong>Nama Pelajar </strong></th>
        <th width="11%" bgcolor="#F5F5F5"><strong>Kelamin</strong></th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tools</strong></td>
      </tr>
    <?php
	$mySql = "SELECT * FROM siswa $pencarianSQL ORDER BY kode_siswa ASC LIMIT $mulai, $baris";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
	$nomor = $mulai; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kode_siswa'];
	?>		
      <tr>
        <td> <?php echo $nomor; ?> </td>
        <td> <?php echo $myData['kode_siswa']; ?> </td>
        <td> <?php echo $myData['nis']; ?> </td>
        <td> <?php echo $myData['nama_siswa']; ?> </td>
        <td> <?php echo $myData['kelamin']; ?> </td>
        <td width="7%"><a href="?open=Siswa-Edit&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Edit</a></td>
        <td width="7%"><a href="?open=Siswa-Delete&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data"  onclick="return confirm('YAKIN AKAN MENGHAPUS DATA SISWA INI ... ?')">Delete</a></td>
      </tr>
	  <?php } ?>
    </table></td>
  </tr>
  <tr>
    <td width="334" bgcolor="#F5F5F5"><b>Jumlah Data :<?php echo $jumlah; ?></b></td>
    <td width="351" align="right" bgcolor="#F5F5F5"><b>Halaman ke :</b>
      <?php
	for ($h = 1; $h <= $maks; $h++) {
		echo " <a href='?open=Siswa-Data&hal=$h'>$h</a> ";
	}
	?></td>
  </tr>
</table>
  