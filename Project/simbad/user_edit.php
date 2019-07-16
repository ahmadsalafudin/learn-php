<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# TOMBOL SIMPAN DIKLIK
if(isset($_POST['btnSimpan'])){
	// Skrip validasi form dan Simpan data
	# BACA DATA DALAM FORM, masukkan datake variabel
	$txtNama		= $_POST['txtNama'];
	$txtUsername	= $_POST['txtUsername'];
	$txtPassword	= $_POST['txtPassword'];

	
	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	if (trim($txtNama)=="") {
		$pesanError[] = "Data <b>Nama User</b> tidak boleh kosong !";		
	}
	if (trim($txtUsername)=="") {
		$pesanError[] = "Data <b>Username</b> tidak boleh kosong !";		
	}
	if (trim($txtPassword)=="") {
		$pesanError[] = "Data <b>Password</b> tidak boleh kosong !";		
	}

	# VALIDASI USERNAME, jika sudah ada akan ditolak
	$Kode	= $_POST['txtKode'];
	$cekSql	= "SELECT * FROM user WHERE username='$txtUsername' AND NOT(kode_user='$Kode')";
	$cekQry	= mysql_query($cekSql, $koneksidb) or die ("Eror Query".mysql_error()); 
	if(mysql_num_rows($cekQry)>=1){
		$pesanError[] = "Maaf, Username <b> $txtUsername </b> sudah ada, ganti dengan yang lain";
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
		# SIMPAN DATA KE DATABASE. Jika tidak menemukan pesan error, simpan data ke database
		# Skirp Update Password baru
		if (trim($txtPassword)=="") {
			$txtPassLama = $_POST['txtPassLama'];
			$sqlSub = " password='$txtPassLama'";
		}
		else {
			$sqlSub = "  password ='".md5($txtPassword)."'";
		}
		
		// Jika tidak menemukan error, simpan data ke database
		$Kode	= $_POST['txtKode'];
		$mySql  = "UPDATE user SET nama_user='$txtNama', username='$txtUsername', 
					$sqlSub  WHERE kode_user='$Kode'";
		$myQry=mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
		if($myQry){
			echo "<meta http-equiv='refresh' content='0; url=?open=User-Data'>";
		}
		exit;
	}	
}


# MEMBACA DATA DARI DATABASE, Untuk ditampilkan kembali ke form edit
// Skrip membaca variable dari URL
$Kode	= isset($_GET['Kode']) ?  $_GET['Kode'] : $_POST['txtKode']; 

// Skrip membaca data dari database
$mySql 	= "SELECT * FROM user WHERE kode_user='$Kode'";
$myQry 	= mysql_query($mySql, $koneksidb)  or die ("Query ambil data salah : ".mysql_error());
$myData = mysql_fetch_array($myQry);

	// Membuat Nilai Data pada Variabel Form
	$dataKode		= $myData['kode_user'];
	$dataNama		= isset($_POST['txtNama']) ? $_POST['txtNama'] : $myData['nama_user'];
	$dataUsername	= isset($_POST['txtUsername']) ? $_POST['txtUsername'] : $myData['username'];
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table width="700" class="table-list" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><b>UBAH  DATA ADMIN </b></td>
    </tr>
    <tr>
      <td width="183"><b>Kode</b></td>
      <td width="5"><b>:</b></td>
      <td width="490"><input name="textfield" type="text" value="<?php echo $dataKode; ?>" size="10" maxlength="10" readonly="readonly"/>
      <input name="txtKode" type="hidden" value="<?php echo $dataKode; ?>" /></td>
    </tr>
    <tr>
      <td><b>Nama Admin </b></td>
      <td><b>:</b></td>
      <td><input name="txtNama" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td><b>Username</b></td>
      <td><b>:</b></td>
      <td><input name="txtUsername" type="text"  value="<?php echo $dataUsername; ?>" size="30" maxlength="30" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><b>:</b></td>
      <td><input name="txtPassword" type="password"  size="30" maxlength="30" />
      <input name="txtPassLama" type="hidden" value="<?php echo $myData['password']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSimpan" value=" Simpan " /></td>
    </tr>
  </table>
</form>
