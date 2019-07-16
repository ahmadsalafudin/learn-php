<?php 
//panggil file session-admin.php untuk menentukan apakah admin atau bukan
include('system/inc/session-admin.php');
//panggil file conn.php untuk menghubung ke server
include('system/config/conn.php');
//panggil file header.php untuk menghubungkan konten bagian atas
include('system/inc/header.php');
//memberi judul halaman
echo '<title>Tentang - Absen In</title>';
//panggil file css.php untuk desain atau tema
include('system/inc/css.php');
//panggil file navi-admin.php untuk menghubungkan navigasi admin ke konten
include('system/inc/nav-admin.php');
?>

	<div class="page-content">
		<div class="container-fluid">
			<div class="box-typical box-typical-padding documentation">
				<header class="documentation-header">
					<h5 align="center" class="with-border m-t-lg"><strong>Tentang Aplikasi Absenin (Absensi Mahasiswa Berbasis Web) </strong></h5>
					<div class="documentation-header-by">
						Ditulis  Oleh :
						<div class="avatar-preview avatar-preview-24">
						<img src="system/images/Salaph.jpg" alt="">
						</div>
						<a href="">Salaph Alghibrany</a>, Pada Tanggal 27 Januari 2017
					</div>
				</header>
			  
				<div class="text-block text-block-typical">
					<p>Aplikasi ini bernama Absenin atau absensi mahasiswa berbasis web.  Sengaja dibuat oleh admin bertujuan sebagai salah satu syarat mengikuti kegiatan Uji Kompetensi disekolahnya.</p>
				 	<p>Fungsi dari Absenin ini adalah menyimpan data absensi mahasiswa kemudian disimpan ke database. Aplikasi ini juga dapat menampilkan data absensi mahasiswa yang sebelumnya telah dibuat. </p>
					<p>Kelebihan dari aplikasi ini adalah kita bisa menghemat biaya untuk membeli kertas, karena aplikasi Absenin ini lebih efisien dan dapat mudah diakses diperangkat mana saja, asalkan ada sedikit koneksi internet. </p>
				</div>
			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

<?php 
//panggil file footer.php untuk menghubungkan konten bagian bawah
include('system/inc/footer.php');
?>