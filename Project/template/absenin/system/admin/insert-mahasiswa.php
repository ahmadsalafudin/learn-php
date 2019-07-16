<?php 
//panggil file session-admin.php untuk menentukan apakah admin atau bukan
include('system/inc/session-admin.php');
//panggil file conn.php untuk menghubung ke server
include('system/config/conn.php');
//panggil file header.php untuk menghubungkan konten bagian atas
include('system/inc/header.php');
//memberi judul halaman
echo '<title>Tambah MAhasiswa - Absen In</title>';
//panggil file css.php untuk desain atau tema
include('system/inc/css.php');
//panggil file navi-admin.php untuk menghubungkan navigasi admin ke konten
include('system/inc/nav-admin.php');
?>

	<div class="page-content">
		<div class="container-fluid">
		
			<section class="card">
				<h6 align="center" class="with-border m-t-lg"><strong>TAMBAH MAHASISWA</strong></h6>	
				<div class="card-block"> 
					<div class="row">
						<form id="form-insert" name="form-insert" action="page.php?process-insert-mahasiswa" enctype="multipart/form-data" method="POST">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="insert-nama"><i class="font-icon font-icon-user"></i> Nama</label>
									<div class="form-control-wrapper">
										<input id="insert-nama" class="form-control" name="nama" placeholder="Nama Mahasiswa" type="text"
										data-validation="[L>=1]"
										data-validation-message="Nama Mahasiswa Tidak Boleh Kosong">
									</div>
								</div>
								
								<div class="form-group">
									<label class="form-label" for="insert-nim"><i class="font-icon font-icon-contacts"></i> NIM</label>
									<div class="form-control-wrapper">
										<input id="insert-nim" class="form-control" name="nim" placeholder="NIM Mahasiswa" type="text"
										data-validation="[L>=1]"
										data-validation-message="NIM Mahasiswa Tidak Boleh Kosong">
									</div>
								</div>
								
								<div class="form-group">
									<label class="color-blue-grey-lighter" for="insert-kelas"><i class="font-icon font-icon-learn"></i>  Pilih Kelas</label>
									<div class="form-control-wrapper">	
										<select  class="bootstrap-select" name="nm_kelas">
										<?php 
										$query=mysql_query("SELECT * FROM kelas ORDER BY nm_kelas ASC",$connect);
										while($row=mysql_fetch_array($query))
										{
										?>
										<option value="<?php  echo $row['nm_kelas']; ?>"><?php  echo $row['nm_kelas']; ?></option>
										<?php 
										}
										?>
										</select>	
									</div>
								</div>
							
								<div class="form-group">
									<label class="form-label" for="insert-jns_kel"><i class="font-icon font-icon-users"></i> Jenis Kelamin</label>
									<div class="form-control-wrapper">
										<select class="bootstrap-select" name="jns_kel" >
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
										</select>
										<br/>
									</div>
								</div>
							
								<div class="form-group">
									<label class="form-label" for="insert-alamat"><i class="font-icon font-icon-home"></i> Alamat</label>
									<div class="form-control-wrapper">
										<input id="insert-alamat" class="form-control" name="alamat" placeholder="Alamat Mahasiswa" type="text"
										data-validation="[L>=1]"
										data-validation-message="Alamat Mahasiswa Tidak Boleh Kosong">
									</div>
								</div>
							</div><!--.col-md-6-->
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label" for="insert-tmpt_lahir"><i class="font-icon font-icon-pin-2"></i> Tempat Lahir</label>
									<div class="form-control-wrapper">
										<input id="insert-Jenis Kelamin" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir Mahasiswa" type="text"
										data-validation="[L>=1]"
										data-validation-message="Tempat Lahir Mahasiswa Tidak Boleh Kosong">
									</div>
								</div>
								
								<div class="form-group">
									<label class="form-label" for="insert-tgl_lahir"><i class="font-icon font-icon-calend"></i> Tanggal Lahir</label>
									<div class="form-control-wrapper">
										<input class="form-control" id="daterange3" type="text" name="tgl_lahir" value="22/10/1998"
										data-validation="[L>=1]"
										data-validation-message="Tanggal Lahir Mahasiswa Tidak Boleh Kosong">
									</div>
								</div>
								
								<div class="form-group">
									<br>
									<div class="form-control-wrapper">
										<div class="drop-zone">
											<i class="font-icon font-icon-picture-2"></i>
											<div class="drop-zone-caption">Tambahkan Foto Mahasiswa</div>
											<span class="btn btn-rounded btn-file"><span>Cari Foto</span>
											<input  id="insert-file" name="file" type="file" >
											</span>
										</div>
									</div>
								</div>
							</div><!--.col-md-6-->

							<div class="col-md-12 m-t-lg">
								<div class="form-group" align="center">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-default font-icon font-icon-plus" data-toggle="tooltip" data-placement="top" title="Tambah?"></button>
										<a href="javascript:history.back()" class="btn btn-default font-icon font-icon-refresh-2" data-toggle="tooltip" data-placement="top" title="Kembali?"></a>
									</div>
								</div>
							</div><!--.col-md-12-->
						</form>
					</div><!--.row-->
				</div><!--.card-block-->
			</section>
		
		</div><!--.container-fluid-->
	</div><!--.page-content-->	

<?php 
//panggil file footer.php untuk menghubungkan konten bagian bawah
include('system/inc/footer.php');
?>