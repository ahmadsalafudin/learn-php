<?php
include "koneksi.php";


if(isset($_GET['id'])){
	//JIKA id yang diambil menggunakan method GET sudah ada datanya, maka nilai id disimpan dalam sebuah variable bernama $id_berita
	$id_berita = $_GET['id'];
}else {
	die("ERROR</b> tidak ada ID yang dipilih");
}

//ambil data sesuai Id
$sql = mysql_query(" SELECT * FROM tbberita WHERE Id='$id_berita' ");
$data = mysql_fetch_array($sql);

$id_berita = $data['Id'];	
$judul = stripslashes($data['Judul']);
$isi_berita = nl2br(stripslashes($data['Berita']));
 
require_once("assets/dompdf/dompdf_config.inc.php");//memanggil file dompdf_config.inc.php
 
//yang akan ditampilkan
$html =
  '<html><body>'.
  '<h1>Berita Indexing Didi</h1>'.
  '<table border=1 cellspacing=0 cellpadding=0><tr><td>ID</td><td> : </td><td>'.$id_berita.'</td></tr>'.
  '<tr><td>Kategori(judul)</td><td> : </td><td>'.$judul.'</td></tr>'.
  '<tr><td>Isi berita</td><td> : </td><td>'.$isi_berita.'</td></tr>'.
  '</table></body></html>';
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('berita_'.$id_berita.'.pdf');
 
?>