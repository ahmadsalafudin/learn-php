<div class="container mt-5">
	
	<h2>Tambah Data Petugas Kasir Toko Kaisar</h2>
	<hr>
	
	<a href="petugas-kasir.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<form action="proses/tambah_kasir.php" method="POST" class="mt-3" autocomplete="off">
		<div class="form-group">
			<label for="nama">Nama Petugas</label>
			<input type="text" name="nama" placeholder="Nama Petugas" class="form-control" autofocus required>
		</div>
		<div class="form-group">
			<label for="password">Password Kasir</label>
			<input type="text" name="password" placeholder="Password Kasir" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="jabatan">Jabatan</label>
			<input type="text" name="jabatan" value="kasir" class="form-control" required readonly>
		</div>
		<button type="submit" class="btn btn-primary float-right">Tambah Petugas Kasir</button>
	</form>

</div>