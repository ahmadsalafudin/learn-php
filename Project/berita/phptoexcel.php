<?php
include "koneksi.php";
include "fungsi.php";

if(isset($_GET['id'])){
	//JIKA id yang diambil menggunakan method GET sudah ada datanya, maka nilai id disimpan dalam sebuah variable bernama $id_berita
	$id_berita = $_GET['id'];
}else {
	die("ERROR</b> tidak ada ID yang dipilih");
}

phpkeexcel($id_berita);

//memasukan query yang telah dibuat kedalam MySQL(database)
$sql = mysql_query(" SELECT * FROM tbberita WHERE Id='$id_berita' ");
$data = mysql_fetch_array($sql);

$id_berita = $data['Id'];	
$judul = stripslashes($data['Judul']);
$isi_berita = nl2br(stripslashes($data['Berita']));
?>

	<table border=1 width=100% cellpadding=0 cellspacing=0>
		<tr>
			<th>ID</th>
			<th>Judul(Kategori)</th>
			<th>Isi</th>
		</tr>
		<tr>
			<td><?php echo $id_berita; ?></td>
			<td><?php echo $judul; ?></td>
			<td><?php echo $isi_berita; ?></td>
		</tr>
	</table>
