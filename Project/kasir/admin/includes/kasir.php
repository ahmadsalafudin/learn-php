<div class="container mt-5">
	
	<h2>Data Petugas Kasir Toko Kaisar</h2>
	<hr>

	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<a href="?h=tambah-kasir" class="btn btn-primary btn-sm float-right">Tambah Petugas Kasir</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Petugas</th>
				<th>Password</th>
				<th>Jabatan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_kasir as $kasir): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $kasir['nama'] ?></td>
				<td><?= $kasir['password'] ?></td>
				<td><?= $kasir['jabatan'] ?></td>
				<td>
					<div class="d-inline">
						<a href="?h=detail-kasir&id=<?= $kasir['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
						<a href="?h=edit-kasir&id=<?= $kasir['id'] ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="?h=hapus-kasir&id=<?= $kasir['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</div>