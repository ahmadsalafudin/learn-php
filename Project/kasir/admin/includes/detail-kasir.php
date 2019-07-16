<div class="container mt-5">
	
	<h2>Detail Data Barang Toko Kaisar</h2>
	<hr>
	
	<a href="petugas-kasir.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>
	
	<?php 
		$sql = $conn->query("SELECT * FROM tb_users WHERE id = '".$_GET['id']."'");
		$data = $sql->fetch_assoc();
	?>

	<div class="card mt-3">
		<div class="card-header">
			<?= $data['nama'] ?>
		</div>
		<div class="card-body">
			<p>Stok barang : <?= $data['nama'] ?></p>
			<p>Jenis barang : <?= $data['jabatan'] ?></p>
		</div>
	</div>

</div>