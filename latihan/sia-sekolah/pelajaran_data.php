<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
?>
<table width="700" border="0" cellpadding="2" cellspacing="0" class="table-border">
  <tr>
    <td align="right"><h1><b>DAFTAR MATERI </b></h1></td>
  </tr>
  <tr>
    <td><a href="?open=Pelajaran-Add" target="_self"><img src="images/btn_add_data.png" height="30" border="0" /></a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="3">
      <tr>
        <th width="5%" bgcolor="#CCCCCC"><strong>No</strong></th>
        <th width="12%" bgcolor="#CCCCCC"><strong>Kode</strong></th>
        <th width="41%" bgcolor="#CCCCCC"><strong>Nama Materi</strong></th>
        <th width="28%" bgcolor="#CCCCCC"><strong>Keterangan</strong></th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tools</strong></td>
      </tr>
    <?php
	$mySql = "SELECT * FROM pelajaran ORDER BY kode_pelajaran ASC";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query pelajaran salah : ".mysql_error());
	$nomor = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['kode_pelajaran'];
	?>
      <tr>
        <td> <?php echo $nomor; ?> </td>
        <td> <?php echo $myData['kode_pelajaran']; ?> </td> 
        <td> <?php echo $myData['nama_pelajaran']; ?> </td>
        <td> <?php echo $myData['keterangan']; ?> </td>
        <td width="7%" align="center"><a href="?open=Pelajaran-Edit&Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data">Edit</a></td>
        <td width="7%"><a href="?open=Pelajaran-Delete&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PELAJARAN INI ... ?')">Delete</a></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
</table>
