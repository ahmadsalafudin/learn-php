<div class="container mt-5">
	
	<h2>Data Barang Toko Kaisar</h2>
	<hr>

	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Stok</th>
				<th>Jenis</th>
				<th>Harga</th>
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
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</div>