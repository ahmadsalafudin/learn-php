<div class="container mt-5">
	
	<h2>Data Barang Toko Kaisar</h2>
	<hr>

	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<a href="?h=tambah" class="btn btn-primary btn-sm float-right">Tambah Barang</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Jenis</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_barang as $barang): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $barang['nama_barang'] ?></td>
				<td><?= $barang['stok_barang'] ?></td>
				<td><?= $barang['jenis_barang'] ?></td>
				<td><?= $barang['harga'] ?></td>
				<td>
					<div class="d-inline">
						<a href="?h=detail&id=<?= $barang['id'] ?>" class="btn btn-primary btn-sm">Detail</a>
						<a href="?h=edit-barang&id=<?= $barang['id'] ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="?h=hapus&id=<?= $barang['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</div>