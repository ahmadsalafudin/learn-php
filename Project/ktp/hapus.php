<!DOCTYPE html>
<html>
<head>
	<title>Hapus</title>
</head>
<body>
<?php
include "config/koneksi.php";
if(isset($_GET['noktp'])):
	$ktp=$mysqli->prepare("DELETE FROM penduduk WHERE noktp=?");
	$ktp->bind_param('s',$noktp);
	$noktp=$_GET['noktp'];

	if($ktp->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$ktp->error."'')</script>";
	endif;
endif;


?>

</body>
</html>