<?php
include "koneksi.php";
include "fungsi.php";
if(isset($_GET['id'])){
	//JIKA id yang diambil menggunakan method GET sudah ada datanya, maka nilai id disimpan dalam sebuah variable bernama $id_berita
	$id_berita = $_GET['id'];
}else {
	die("ERROR</b> tidak ada ID yang dipilih");
}

phpkeword($id_berita);
 
//memasukan query yang telah dibuat kedalam MySQL(database)
$sql = mysql_query(" SELECT * FROM tbberita WHERE Id='$id_berita' ");
$data = mysql_fetch_array($sql);

$id_berita = $data['Id'];	
$judul = stripslashes($data['Judul']);
$isi_berita = nl2br(stripslashes($data['Berita']));
?>

<html>
<body>
	<div>
		ID : <?php echo $id_berita; ?>
	</div>
	<div>
		Judul (Kategori) : <strong><?php echo $judul;?></strong>
	</div>
	<div>
		Isi : <br/>
		<?php echo $isi_berita; ?>
	</div>
</body>
</html>