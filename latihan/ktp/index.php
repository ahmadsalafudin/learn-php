<!DOCTYPE html>
<html>
<head>
	<title>DATA PENDUDUK</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<h2 align="center">DATA PENDUDUK</h2>
<div class="container">
<a href="tambah.php" class="btn btn-primary">Tambah</a>
<table class="table table-bordered">
<thead>
	<tr>
		<th>No KTP</th>
		<th>Nama Lengkap</th>
		<th>Jenis Kelamin</th>
		<th>Tangal lahir</th>
		<th>Tempat Lahir</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
    <?php
    //include file koneksi
	include"config/koneksi.php";
	//query menampilkan data
	$table = $mysqli->query("SELECT * FROM penduduk");
	//looping data
	while ($row = $table->fetch_assoc()):
	?>
	<tr>
		<td><?php echo $row['noktp'] ?></td>
		<td><?php echo $row['nama'] ?></td>
		<td><?php echo $row['jk'] ?></td>
		<td><?php echo $row['tgl'] ?></td>
		<td><?php echo $row['tempatlahir'] ?></td>
		<td><?php echo $row['alamat'] ?></td>
		<td>
			<a href="edit.php?noktp=<?php echo $row['noktp'] ?>">Edit</a>|
			<a href="hapus.php?noktp=<?php echo $row['noktp'] ?>">Hapus</a>
		</td>
	</tr>
	<?php
	endwhile;
	?>
</tbody>
</table>
</div>
</body>
</html>