<div class="container mt-5">
	
	<div class="row text-center">
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
					$sql = $conn->query("SELECT (tb_barang.harga * tb_transaksi.jumlah_barang) AS Total FROM `tb_transaksi` LEFT JOIN `tb_barang` ON tb_transaksi.id_barang = tb_barang.id");
					$array_total = $sql->fetch_all(MYSQLI_ASSOC);
					$total = [];
					for ($i=0; $i < $sql->num_rows; $i++) { 
						array_push($total, $array_total[$i]['Total']);
					}
					$total_transaksi = array_sum($total);
					?>
					<h5 class="card-title">Total Transaksi</h5>
					<p class="card-text">Total transakti Toko Kaisar</p>
					<h4>Rp. <?= number_format($total_transaksi) ?></h4>
					<a href="transaksi.php" class="card-link">Lihat Transaksi</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
					$sql = $conn->query("SELECT COUNT(*) AS TotalBarang FROM tb_barang");
					$barang = $sql->fetch_assoc();
					?>
					<h5 class="card-title">Data Barang</h5>
					<p class="card-text">Data barang Toko Kaisar</p>
					<h3><?= $barang['TotalBarang'] ?></h3>
					<a href="data-barang.php" class="card-link">Lihat Data Barang</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<?php 
					$sql = $conn->query("SELECT COUNT(*) AS TotalKasir FROM tb_users WHERE jabatan = 'kasir'");
					$barang = $sql->fetch_assoc();
					?>
					<h5 class="card-title">Data Kasir</h5>
					<p class="card-text">Data petugas kasir Toko Kaisar</p>
					<h3><?= $barang['TotalKasir'] ?></h3>
					<a href="petugas-kasir.php" class="card-link">Lihat Data Kasir</a>
				</div>
			</div>
		</div>
	</div>

</div>