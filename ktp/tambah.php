<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<?php 
include "config/koneksi.php";
//isset dari input  name btn
if(isset($_POST['btn'])):
	$ktp=$mysqli->prepare("INSERT INTO penduduk (noktp,nama,jk,tgl,tempatlahir,alamat) VALUES(?,?,?,?,?,?)");
	$ktp->bind_param('ssssss',$noktp,$nama,$jk,$tgl,$tempatlahir,$alamat);
	
	$noktp=$_POST['noktp'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$tgl=$_POST['tgl'];
	$tempatlahir=$_POST['tempatlahir'];
	$alamat=$_POST['alamat'];
	if($ktp->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$ktp->error."')</script>";
	endif;
endif;
?>
<form method="post" class="form-horizontal">
<p><input type="text" placeholder="No KTP" name="noktp"/></p>
<p><input type="text" placeholder="Name" name="nama"/></p>
<p><input type="text" placeholder="Jenis Kelamin" name="jk"/></p>
<p><input type="text" placeholder="Tanggal Lahir" name="tgl"/></p>
<p><input type="text" placeholder="Tempat lahir" name="tempatlahir"/></p>
<p><input type="text" placeholder="Alamat" name="alamat"/></p>
<input type="submit" value="Save" name="btn"/>
</form>

</body>
</html>