<div class="container mt-5">
	
	<h2>Data Transaksi Toko Kaisar</h2>
	<hr>

	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>

	<table class="table table-sm mt-3">
		<thead>
			<tr>
				<th>No</th>
				<th>Petugas</th>
				<th>Nama Barang</th>
				<th>Jumlah Barang</th>
				<th>Tanggal Transaksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_tb_transaksi as $data): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $data['nama'] ?></td>
				<td><?= $data['nama_barang'] ?></td>
				<td><?= $data['jumlah_barang'] ?></td>
				<td><?= date('d/m/Y', strtotime($data['tanggal_transaksi'])) ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>

</div>