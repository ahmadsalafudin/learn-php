<div class="container mt-5">
	<?php foreach ($data_barang as $barang): ?>
		<?php if ($barang['stok_barang'] < 5): ?>
			<div class="alert alert-danger" role="alert">
			  <strong>Perhatian!!</strong> Stok <strong><?= $barang['nama_barang'] ?></strong> kurang dari 5.
			</div>
		<?php endif ?>
	<?php endforeach ?>
	<div class="card">
		<div class="card-header">
			Petugas Kasir : <?= $_SESSION['user'] ?>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-3" autocomplete="off">
						<div class="form-group">
							<label for="id_barang">Nama Barang</label>
							<input list="barang" name="nama_barang" class="form-control" required>
							<datalist id="barang">
								<?php foreach ($data_barang as $barang): ?>
								<option value="<?= $barang['nama_barang'] ?>">
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label for="jumlah_barang">Jumlah Barang</label>
							<input type="number" name="jumlah_barang" placeholder="Jumlah Barang" min="1" max="1000" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary float-right">Input Transaksi</button>
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="col-md-6">
					<h3>Data Pembelian</h3>
					<?php 

					if (isset($_POST['nama_barang'], $_POST['jumlah_barang'])) {
						
						$nama_barang 	= $_POST['nama_barang'];
						$jumlah_barang 	= $_POST['jumlah_barang'];
						$id_user 		= $_SESSION['id_user'];

						$barang 		= $conn->query("SELECT * FROM tb_barang WHERE nama_barang='".$nama_barang."'");
						$data_barang 	= $barang->fetch_assoc();

						if (!isset($_SESSION['list_pembelian'])) {
							$_SESSION['list_pembelian']	= [];
						}

						array_push($_SESSION['list_pembelian'], [
							'nama_barang' => $nama_barang, 
							'jumlah' => $jumlah_barang, 
							'harga' => $data_barang['harga']
						]);

						if (!isset($_SESSION['total_bayar'])) {
							$_SESSION['total_bayar'] = [];
						}

						$total_bayar = ($jumlah_barang * $data_barang['harga']);
						array_push($_SESSION['total_bayar'], $total_bayar);
						$bayar = array_sum($_SESSION['total_bayar']);
					?>
					<?php foreach ($_SESSION['list_pembelian'] as $pembelian): ?>
						<p><?= $pembelian['nama_barang'] ?> (<?= $pembelian['jumlah'] . ' x ' . $pembelian['harga'] ?>)</p>
					<?php endforeach ?>
					<hr>
					<h3 class="float-right">Total : Rp. <?= number_format($bayar) ?></h3>
					<div class="clearfix"></div>
					<a href="data-barang.php" class="btn btn-success btn-block">Bayar</a>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>