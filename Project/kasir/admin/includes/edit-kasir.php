<div class="container mt-5">
	
	<h2>Edit Data Petugas Kasir Toko Kaisar</h2>
	<hr>
	
	<a href="petugas-kasir.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<?php 
	$kasir = $conn->query("SELECT * FROM tb_users WHERE id = '".$_GET['id']."'");
	$data = $kasir->fetch_assoc();
	?>

	<form action="proses/edit_kasir.php" method="POST" class="mt-3" autocomplete="off">
		<div class="form-group">
			<label for="nama">Nama Petugas</label>
			<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" autofocus required>
		</div>
		<div class="form-group">
			<label for="password">Password Kasir</label>
			<input type="text" name="password" value="<?= $data['password'] ?>" class="form-control" required readonly>
		</div>
		<div class="form-group">
			<label for="jabatan">Jabatan</label>
			<input type="text" name="jabatan" value="<?= $data['jabatan'] ?>" class="form-control" required>
		</div>
		<input type="hidden" name="id" value="<?= $data['id'] ?>">
		<button type="submit" class="btn btn-primary float-right">Edit Petugas Kasir</button>
	</form>

</div>