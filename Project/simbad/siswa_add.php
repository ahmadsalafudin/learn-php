<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# TOMBOL SIMPAN DIKLIK
if(isset($_POST['btnSimpan'])){
	// Skrip validasi dan Simpan data
	# Baca Variabel Form
	$txtNis			= $_POST['txtNis'];
	$txtNama		= $_POST['txtNama'];
	$cmbKelamin		= $_POST['cmbKelamin'];
	$cmbAgama		= $_POST['cmbAgama'];
	$txtTempatLahir	= $_POST['txtTempatLahir'];
	$txtTanggal		= InggrisTgl($_POST['txtTanggal']);
	$txtAlamat		= $_POST['txtAlamat'];
	$txtNoTelepon	= $_POST['txtNoTelepon'];
	$cmbAngkatan	= $_POST['cmbAngkatan'];
	$cmbStatus		= $_POST['cmbStatus'];

	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	if(trim($txtNis)=="") {
		$pesanError[] = "Data <b>NIP</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($txtNama)=="") {
		$pesanError[] = "Data <b>Nama Pelajar</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($cmbKelamin)=="KOSONG") {
		$pesanError[] = "Data <b>Jenis Kelamin</b> belum dipilih !";		
	}
	if(trim($cmbAgama)=="KOSONG") {
		$pesanError[] = "Data <b>Agama</b> belum dipilih !";		
	}
	if(trim($txtTempatLahir)=="") {
		$pesanError[] = "Data <b>Tempat Lahir</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($txtTanggal)=="") {
		$pesanError[] = "Data <b>Tanggal Lahir</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($txtAlamat)=="") {
		$pesanError[] = "Data <b>Alamat Tinggal</b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($txtNoTelepon)=="") {
		$pesanError[] = "Data <b>No. Telepon </b> tidak boleh kosong, harus diisi !";		
	}
	if(trim($cmbAngkatan)=="KOSONG") {
		$pesanError[] = "Data <b>Tahun Angkatan</b> belum dipilih !";		
	}
	if(trim($cmbStatus)=="KOSONG") {
		$pesanError[] = "Data <b>Status</b> belum dipilih !";		
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
		// Membuat Kode Siswa
		$kodeBaru	= buatKode("siswa", "S");

		# SKRIP UNTUK MENYIMPAN FOTO/GAMBAR
		if (! empty($_FILES['namaFile']['tmp_name'])) {
			// Membaca nama file foto/gambar
			$file_foto = $_FILES['namaFile']['name'];
			$file_foto = stripslashes($file_foto);
			$file_foto = str_replace("'","",$file_foto);
			
			// Simpan gambar
			$file_foto = $kodeBaru.".".$file_foto;
			copy($_FILES['namaFile']['tmp_name'],"foto/".$file_foto);
		}
		else {
			// Jika tidak ada foto/gambar
			$file_foto = "";
		}

		// Simpan data dari form ke Database
		$mySql	= "INSERT INTO siswa ( 
								kode_siswa, nis, nama_siswa,
								kelamin, agama, tempat_lahir, 
								tanggal_lahir, alamat, no_telepon, 
								foto, tahun_angkatan, status)
							VALUES ( 
									'$kodeBaru', '$txtNis', '$txtNama', 
									'$cmbKelamin', '$cmbAgama', '$txtTempatLahir', 
									'$txtTanggal',  '$txtAlamat', '$txtNoTelepon', 
									'$file_foto', '$cmbAngkatan', '$cmbStatus')";		
		$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
		if($myQry){
			// Setelah data disimpan, Refresh
			echo "<meta http-equiv='refresh' content='0; url=?open=Siswa-Add'>";
		}
		exit;
	}	
}

# MEMBUAT NILAI DATA PADA FORM
$dataKode		= buatKode("siswa", "S");
$dataNis		= isset($_POST['txtNis']) ? $_POST['txtNis'] : '';
$dataNama		= isset($_POST['txtNama']) ? $_POST['txtNama'] : '';
$dataKelamin	= isset($_POST['cmbKelamin']) ? $_POST['cmbKelamin'] : '';
$dataAgama		= isset($_POST['cmbAgama']) ? $_POST['cmbAgama'] : '';
$dataTempatLahir= isset($_POST['txtTempatLahir']) ? $_POST['txtTempatLahir'] : '';
$dataTanggal	= isset($_POST['txtTanggal']) ? $_POST['txtTanggal'] : date('d-m-Y');
$dataAlamat		= isset($_POST['txtAlamat']) ? $_POST['txtAlamat'] : '';
$dataNoTelepon	= isset($_POST['txtNoTelepon']) ? $_POST['txtNoTelepon'] : '';
$dataAngkatan	= isset($_POST['cmbAngkatan']) ? $_POST['cmbAngkatan'] : date('Y');
$dataStatus		= isset($_POST['rbStatus']) ? $_POST['rbStatus'] : '';
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" enctype="multipart/form-data" target="_self">
  <table class="table-list" width="700" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><strong>TAMBAH DATA PELAJAR</strong> </td>
    </tr>
    <tr>
      <td width="184"><strong>Kode</strong></td>
      <td width="5"><strong>:</strong></td>
      <td width="489"><input name="textfield" type="text" value="<?php echo $dataKode; ?>" size="10" maxlength="10" readonly="readonly"></td>
    </tr>
    <tr>
      <td><strong>NIP</strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtNis" type="text" value="<?php echo $dataNis; ?>" size="30" maxlength="20"></td>
    </tr>
    <tr>
      <td><strong>Nama Pelajar </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtNama" type="text" value="<?php echo $dataNama; ?>" size="80" maxlength="100"></td>
    </tr>
    <tr>
      <td><strong>Jenis Kelamin </strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbKelamin">
        <option value="KOSONG">....</option>
        <?php
		   $pilihan = array("Laki-laki", "Perempuan");
          foreach ($pilihan as $kelamin) {
            if ($dataKelamin==$kelamin) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$kelamin' $cek>$kelamin</option>";
          }
          ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Agama</strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbAgama">
        <option value="KOSONG">....</option>
        <?php
		   $pilihan = array("Islam", "Kristen", "Katolik", "Hindu", "Budha");
          foreach ($pilihan as $agama) {
            if ($dataAgama==$agama) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$agama' $cek>$agama</option>";
          }
          ?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Tempat, Tgl Lahir </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtTempatLahir" type="text" value="<?php echo $dataTempatLahir; ?>" size="40" maxlength="100"> ,
       <input name="txtTanggal" type="text" class="tcal" value="<?php echo $dataTanggal; ?>" size="20" maxlength="20" /></td>
    </tr>
    <tr>
      <td><strong>Alamat Lengkap </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtAlamat" type="text" value="<?php echo $dataAlamat; ?>" size="80" maxlength="100"></td>
    </tr>
    <tr>
      <td><strong>No. Telepon</strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtNoTelepon" type="text" value="<?php echo $dataNoTelepon; ?>" size="30" maxlength="30"></td>
    </tr>
    <tr>
      <td><strong>Foto Pelajar </strong></td>
      <td><strong>:</strong></td>
      <td><input name="namaFile" type="file" size="60" /></td>
    </tr>
    <tr>
      <td><strong>Tahun Angkatan </strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbAngkatan">
        <option value="KOSONG">....</option>
        <?php 
		for ($thn = date('Y') - 4; $thn <= date('Y'); $thn++) {
			if($thn==$dataAngkatan) { $cek=" selected";} else { $cek="";}
			echo "<option value='$thn' $cek>$thn</option>";
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td><strong>Status Aktif </strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbStatus">
        <option value="KOSONG">....</option>
        <?php
		   $pilihan = array("Aktif", "Lulus", "Keluar");
          foreach ($pilihan as $status) {
            if ($dataStatus==$status) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$status' $cek>$status</option>";
          }
          ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btnSimpan" type="submit" value=" Simpan "></td>
    </tr>
  </table>
</form>
