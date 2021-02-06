<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# MEMBACA TOMBOL SIMPAN DIKLIKT
if(isset($_POST['btnSimpan'])){
	# Baca Variabel Form
	$txtPelajaran	= $_POST['txtPelajaran'];
	$txtPelajaran	= str_replace("'","&acute;",$txtPelajaran);
	$txtKeterangan	= $_POST['txtKeterangan'];

	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	if (trim($txtPelajaran)=="") {
		$pesanError[] = "Data <b>Nama Pelajaran</b> tidak boleh kosong !";		
	}
	if (trim($txtKeterangan)=="") {
		$pesanError[] = "Data <b>Keterangan</b> tidak boleh kosong !";	
	}

	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 ){
		echo "<div class='mssgBox'>";
		echo "<img src='images/attention.png'> <br><hr>";
			$noPesan=0;
			foreach ($pesanError as $indeks=>$pesan_tampil) { 
			$noPesan++;
				echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";	
			} 
		echo "</div> <br>"; 
	}
	else {
		# SIMPAN DATA KE DATABASE. Jika jumlah error $pesanError tidak ada, simpan datanya
		// Membuat kode baru secara otomatis
		$kodeBaru	= buatKode("pelajaran", "P");
		
		// Skrip menyimpan data ke database
		$mySql	= "INSERT INTO pelajaran (kode_pelajaran, nama_pelajaran, keterangan) VALUES ('$kodeBaru', '$txtPelajaran', '$txtKeterangan')";
		$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?open=Pelajaran-Add'>";
		}
		exit;
	}	
}

# MEMBUAT NILAI DATA PADA FORM
$dataKode		= buatKode("pelajaran", "P");
$dataPelajaran	= isset($_POST['txtPelajaran']) ? $_POST['txtPelajaran'] : '';
$dataKeterangan	= isset($_POST['txtKeterangan']) ? $_POST['txtKeterangan'] : '';
?> 
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table class="table-list" width="700" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <th colspan="3">TAMBAH DATA PELAJARAN </th>
    </tr>
    <tr>
      <td width="184"><strong>Kode</strong></td>
      <td width="3"><strong>:</strong></td>
      <td width="491"><input name="textfield" type="text" value="<?php echo $dataKode; ?>" size="10" maxlength="10" readonly="readonly"></td>
    </tr>
    <tr>
      <td><strong>Nama Pelajaran </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtPelajaran" value="<?php echo $dataPelajaran; ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td><strong>Keterangan</strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtKeterangan" value="<?php echo $dataKeterangan; ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSimpan" value=" SIMPAN "></td>
    </tr>
  </table>
</form>
