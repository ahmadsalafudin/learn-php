<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['user'])) {
	header('Location: ../index.php');
}

if (isset($_SESSION['list_pembelian'], $_SESSION['total_bayar'])) {
	foreach ($_SESSION['list_pembelian'] as $beli) {
		$barang 		= $conn->query("SELECT * FROM tb_barang WHERE nama_barang='".$beli['nama_barang']."'");
		$data_barang 	= $barang->fetch_assoc();

		$dt_tr = $conn->query("SELECT * FROM tb_transaksi WHERE id_barang = '".$data_barang['id']."' AND id_user = '".$_SESSION['id_user']."'");
		$dt_arr 	= $dt_tr->fetch_assoc();
		
		$jumlah_stok = ($data_barang['stok_barang'] - $beli['jumlah']);

		if ($dt_tr->num_rows > 0) {
			
			$jml_brg_tr  = ($dt_arr['jumlah_barang'] + $beli['jumlah']);

			$update = $conn->query("UPDATE tb_transaksi SET jumlah_barang = '".$jml_brg_tr."' WHERE id = '".$dt_arr['id']."'");
			
			$update_data_barang = $conn->query("UPDATE tb_barang SET stok_barang = '".$jumlah_stok."' WHERE id = '".$data_barang['id']."'");

		} else {

			$transaksi 		= $conn->query("INSERT INTO `tb_transaksi`(`id`, `id_barang`, `id_user`, `jumlah_barang`) VALUES ('','".$data_barang['id']."','".$_SESSION['id_user']."','".$beli['jumlah']."')");

			$update_data_barang = $conn->query("UPDATE tb_barang SET stok_barang = '".$jumlah_stok."' WHERE id = '".$data_barang['id']."'");

		}


	}
	unset($_SESSION['list_pembelian'], $_SESSION['total_bayar']);
}

// Mengelurkan seluruh data barang yang ada di Databae
$sql 			= "SELECT * FROM tb_barang";
$query 			= $conn->query($sql);
$data_barang 	= $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
require_once 'includes/barang.php';
require_once 'includes/footer.php';