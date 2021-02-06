<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<?php 
include "config/koneksi.php";
if(isset($_GET['noktp'])):
if(isset($_POST['btn'])):
	$ktp=$mysqli->prepare("UPDATE penduduk set nama=?,jk=?, tgl=?, tempatlahir=?, alamat=? WHERE noktp=?");
	$ktp->bind_param('ssssss',$nama,$jk,$tgl,$tempatlahir,$alamat,$noktp);

	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$tgl=$_POST['tgl'];
	$tempatlahir=$_POST['tempatlahir'];
	$alamat=$_POST['alamat'];
	$noktp=$_POST['noktp'];
	if($ktp->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$ktp->error."')</script>";
	endif;
endif;
$table=$mysqli->query("SELECT * FROM penduduk WHERE noktp =".$_GET['noktp']);
$row=$table->fetch_assoc();
?>
<form method="post">
	 <p><input type="text" value="<?php echo $row['noktp'] ?>" name="noktp"/></p>
     <p><input type="text" value="<?php echo $row['nama'] ?>" name="nama"/></p>
     <p><input type="text" value="<?php echo $row['jk'] ?>" name="jk"/></p>
     <p><input type="text" value="<?php echo $row['tgl'] ?>" name="tgl"/></p>
     <p><input type="text" value="<?php echo $row['tempatlahir'] ?>" name="tempatlahir"/></p>
     <p><input type="text" value="<?php echo $row['alamat'] ?>" name="alamat"/></p>

     <input type="submit" value="Update" name="btn"/>
</form>
<?php
endif;
?>

</body>
</html>