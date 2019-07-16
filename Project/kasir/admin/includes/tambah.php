<div class="container mt-5">
	
	<h2>Tambah Data Barang Toko Kaisar</h2>
	<hr>
	
	<a href="data-barang.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<form action="proses/tambah_barang.php" method="POST" class="mt-3" autocomplete="off">
		<div class="form-group">
			<label for="nama_barang">Nama Barang</label>
			<input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" autofocus required>
		</div>
		<div class="form-group">
			<label for="stok_barang">Stok Barang</label>
			<input type="number" name="stok_barang" placeholder="Nama Barang" min="1" max="1000" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="jenis_barang">Jenis Barang</label>
			<select name="jenis_barang" class="form-control" required>
				<option value="">-- Pilih Jenis Barang --</option>
				<option value="makanan">Makanan</option>
				<option value="snack">Snack</option>
				<option value="rumah_tangga">Rumah Tangga</option>
			</select>
		</div>
		<div class="form-group">
			<label for="harga">Harga Barang</label>
			<input type="number" name="harga" placeholder="Harga Barang" class="form-control" required>
		</div>
		<button type="submit" class="btn btn-primary float-right">Tambah Barang</button>
	</form>

</div>