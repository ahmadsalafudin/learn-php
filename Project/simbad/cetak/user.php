<?php
session_start();
include_once "../library/inc.sesadmin.php";
include_once "../library/inc.connection.php";
include_once "../library/inc.library.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> :: Laporan Cetak Data User</title>
</head>
<body>
<h2> LAPORAN DATA USER </h2>

<table width="700" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <td width="30" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="80" bgcolor="#F5F5F5"><strong>Kode</strong></td>
    <td width="411" bgcolor="#F5F5F5"><strong>Nama User </strong></td>
    <td width="150" bgcolor="#F5F5F5"><strong>Username</strong></td>
  </tr>
  <?php
	$mySql = "SELECT * FROM user ORDER BY kode_user ASC";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
	?>
  <tr>
    <td><?php echo $nomor; ?> </td>
    <td><?php echo $myData['kode_user']; ?> </td>
    <td><?php echo $myData['nama_user']; ?> </td>
    <td><?php echo $myData['username']; ?> </td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
