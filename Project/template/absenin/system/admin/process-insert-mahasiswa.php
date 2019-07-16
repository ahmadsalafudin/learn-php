<?php
//panggil file config.php untuk menghubung ke server
include('system/config/conn.php');

//tempat menyimpan file
$folder="system/images/"; 

//tangkap data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nm_kelas = $_POST['nm_kelas'];
$jns_kel = $_POST['jns_kel'];
$alamat = $_POST['alamat'];
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];

//menghindari duplikat nim
$cek="SELECT nim FROM mahasiswa WHERE nim='$nim'";
$ada=mysql_query($cek) or die (mysql_error());
if(mysql_num_rows($ada)>0)
{
	echo "<script>alert ('NIM Telah Terdaftar ! Silahkan Periksa Kembali !');window.location='page.php?tambah-mahasiswa' </script> ";
	}

else if (!empty($_FILES["file"]["tmp_name"]))
{
$jenis_foto=$_FILES['file']['type'];

if($jenis_foto=="image/jpeg" || $jenis_foto=="image/jpg" || $jenis_foto=="image/gif" || $jenis_foto=="image/png")
	{			
		$foto = $folder . basename($_FILES['file']['name']);		
		if (move_uploaded_file($_FILES['file']['tmp_name'], $foto)) {
	$query = mysql_query ("INSERT INTO mahasiswa VALUES('','$nama','$nim','$jns_kel','$tgl_lahir','$tmpt_lahir','$alamat','$nm_kelas','$foto')")
			or die (mysql_error());
	header('location:page.php?data-semua-mahasiswa&message=insert-success');
	
} else {
	echo "<script>alert ('Gagal Mengedit data ini !');window.location='page.php?tambah-mahasiswa' </script> ";
}
} else {
	echo "<script>alert ('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png');window.location='page.php?tambah-mahasiswa' </script> "; 
}
} else {
	echo "<script>alert ('Anda Belum Memilih Gambar !');window.location='page.php?tambah-mahasiswa' </script> ";
}

?>