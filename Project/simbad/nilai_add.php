<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";

# TOMBOL SIMPAN DIKLIK
if(isset($_POST['btnSimpan'])){
	// Skrip untuk Validasi dan Simpan data
	# Baca Variabel Form
	$cmbKelas		= $_POST['cmbKelas'];
	$cmbPelajaran	= $_POST['cmbPelajaran'];
	$cmbGuru		= $_POST['cmbGuru'];
	$txtKeterangan	= $_POST['txtKeterangan'];

	# Validasi form, jika kosong sampaikan pesan error
	$pesanError = array();
	
	if (trim($cmbPelajaran)=="KOSONG") {
		$pesanError[] = "Data <b>Nama Materi</b> belum dipilih !";	
	}
	if (trim($cmbGuru)=="KOSONG") {
		$pesanError[] = "Data <b>Nama Tutor</b> belum dipilih !";	
	}
	if (trim($cmbKelas)=="KOSONG") {
		$pesanError[] = "Data <b>Kelas</b> belum dipilih !";	
	}
	if (trim($txtKeterangan)=="") {
		$pesanError[] = "Data <b>Keterangan</b> belum diisi !";
	}
			
	# Validasi Nilai, jika sudah ada akan ditolak
	$sqlCek="SELECT * FROM nilai WHERE kode_kelas='$cmbKelas' 
									AND kode_pelajaran='$cmbPelajaran' ";
	$qryCek=mysql_query($sqlCek, $koneksidb) or die ("Eror Query".mysql_error()); 
	if(mysql_num_rows($qryCek)>=1){
		$pesanError[] = "<b>DATA PEMBAYARAN UNTUK PELAJAR TERSEBUT SUDAH DIMASUKAN</b>";
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
		$mySql	= "INSERT INTO nilai (semester, kode_pelajaran, kode_guru, kode_kelas, 
									  kode_siswa, nilai_tugas1, nilai_tugas2, 
									  nilai_uts, nilai_uas, keterangan) 
					VALUES ('$cmbSemester', '$cmbPelajaran', '$cmbGuru', '$cmbKelas', 
							'$cmbSiswa', '$txtTugas1', '$txtTugas2', 
							'$txtNilaiUTS', '$txtNilaiUAS', '$txtKeterangan')";
		$myQry	= mysql_query($mySql, $koneksidb) or die ("Gagal query".mysql_error());
		if($myQry){
			// Refresh
			echo "<meta http-equiv='refresh' content='0; url=?open=Nilai-Add'>";
		}
		exit;
	}	
}

# Membuat Nilai Data pada Variabel Form
$dataSemester	= isset($_POST['cmbSemester']) ? $_POST['cmbSemester'] : '';
$dataPelajaran	= isset($_POST['cmbPelajaran']) ? $_POST['cmbPelajaran'] : '';
$dataGuru		= isset($_POST['cmbGuru']) ? $_POST['cmbGuru'] : '';
$dataKelas 		= isset($_POST['cmbKelas']) ? $_POST['cmbKelas'] : '';
$dataSiswa 		= isset($_POST['cmbSiswa']) ? $_POST['cmbSiswa'] : '';
$dataTugas1 	= isset($_POST['txtTugas1']) ? $_POST['txtTugas1'] : '';
$dataTugas2 	= isset($_POST['txtTugas2']) ? $_POST['txtTugas2'] : '';
$dataNilaiUTS 	= isset($_POST['txtNilaiUTS']) ? $_POST['txtNilaiUTS'] : '';
$dataNilaiUAS 	= isset($_POST['txtNilaiUAS']) ? $_POST['txtNilaiUAS'] : '';
$dataKeterangan	= isset($_POST['txtKeterangan']) ? $_POST['txtKeterangan'] : '';
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table  class="table-list" width="700" border="0" cellspacing="1" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><h1><strong>MEMBUAT DATA PEMBAYARAN PELAJAR</strong></h1></td>
    </tr>
    <tr>
      <td width="27%" bgcolor="#CCCCCC"><strong>DATA MATERI </strong></td>
      <td width="2%">&nbsp;</td>
      <td width="71%">&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Materi</strong></td>
      <td><b>:</b></td>
      <td>
		<select name="cmbPelajaran">
		<option value="KOSONG">....</option>
		<?php
		$dataSql = "SELECT * FROM pelajaran ORDER BY kode_pelajaran";
		$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
		while ($dataRow = mysql_fetch_array($dataQry)) {
			if ($dataRow['kode_pelajaran'] == $dataPelajaran) {
				$cek = " selected";
			} else { $cek=""; }
			echo "<option value='$dataRow[kode_pelajaran]' $cek> $dataRow[nama_pelajaran]</option>";
		}
		?>
		</select></td>
    </tr>
    <tr>
      <td><b>Nama Tutor </b></td>
      <td><b>:</b></td>
      <td>
	<select name="cmbGuru">
	<option value="KOSONG">....</option>
	<?php
	$dataSql = "SELECT * FROM guru ORDER BY kode_guru";
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	while ($dataRow = mysql_fetch_array($dataQry)) {
		if ($dataRow['kode_guru'] == $dataGuru) {
			$cek = " selected";
		} else { $cek=""; }
		echo "<option value='$dataRow[kode_guru]' $cek> $dataRow[nama_guru]</option>";
	}
	?>
	</select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>DATA  PELAJAR </strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><b>Pilih Kelas </b></td>
      <td><b>:</b></td>
      <td>
	<select name="cmbKelas">
	<option value="KOSONG">....</option>
	<?php
	$dataSql = "SELECT * FROM kelas ORDER BY tahun_ajar";
	$dataQry = mysql_query($dataSql, $koneksidb) or die ("Gagal Query".mysql_error());
	while ($dataRow = mysql_fetch_array($dataQry)) {
		if ($dataRow['kode_kelas'] == $dataKelas) {
			$cek = " selected";
		} else { $cek=""; }
		echo "<option value='$dataRow[kode_kelas]' $cek>$dataRow[kelas] | $dataRow[nama_kelas] ( $dataRow[tahun_ajar] )</option>";
	}

	?>
	</select>
    <input name="btnPilih" type="submit" value=" Pilih " /></td>
    </tr>
	</select></td>
    </tr>
    <tr>
      <td><strong>Keterangan</strong></td>
      <td><b>:</b></td>
      <td><input name="txtKeterangan" type="text" value="<?php echo $dataKeterangan; ?>" size="70" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSimpan" value=" SIMPAN DATA " style="cursor:pointer;" /></td>
    </tr>
  </table>
</form>
