<?php 
//panggil file conn.php untuk menghubung ke server
include "../../system/config/conn.php";
$nm_kelas=$_POST['nm_kelas'];
$tanggal=$_POST['tanggal'];

if(isset($_POST['info'])){
	if(!empty($_POST['hadir'])){
		//parameter
		$nim=$_POST['hadir'];
		$jumlah=count($nim);
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("INSERT INTO absensi(nim,nm_kelas,ket,tanggal,info) VALUES ('$nim[$i]','$nm_kelas','H','$tanggal','succes')",$connect);
		}
		?>
		<script language="javascript">window.location.href="page.php?data-absensi&kelas=<?php echo $nm_kelas;?>&tanggal=<?php echo $tanggal;?>&message=absen-success";</script>
		<?php 
	}
	
	if(!empty($_POST['sakit'])){
		//parameter
		$nim=$_POST['sakit'];
		$jumlah=count($nim);
		for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("INSERT INTO absensi(nim,nm_kelas,ket,tanggal,info) VALUES ('$nim[$i]','$nm_kelas','S','$tanggal','succes')",$connect);
		}
		?>
		<script language="javascript">window.location.href="page.php?data-absensi&kelas=<?php echo $nm_kelas;?>&tanggal=<?php echo $tanggal;?>&message=absen-success";</script>
		<?php 
	}
	
	if(!empty($_POST['ijin'])){
		//parameter
		$nim=$_POST['ijin'];
		$jumlah=count($nim);
			for($i=0;$i<$jumlah;$i++){
			$hadir=mysql_query("INSERT INTO absensi(nim,nm_kelas,ket,tanggal,info) VALUES ('$nim[$i]','$nm_kelas','I','$tanggal','succes')",$connect);
		}
		?>
		<script language="javascript">window.location.href="page.php?data-absensi&kelas=<?php echo $nm_kelas;?>&tanggal=<?php echo $tanggal;?>&message=absen-success";</script>
		<?php 
	}
	
	if(!empty($_POST['alfa'])){
		//parameter
		$nim=$_POST['alfa'];
		$jumlah=count($nim);
		for($i=0;$i<$jumlah;$i++){
			$hadir = mysql_query("INSERT INTO absensi(nim,nm_kelas,ket,tanggal,info) VALUES ('$nim[$i]','$nm_kelas','A','$tanggal','succes')",$connect);
		}
		?>
		<script language="javascript">window.location.href="page.php?data-absensi&kelas=<?php echo $nm_kelas;?>&tanggal=<?php echo $tanggal;?>&message=absen-success";</script>
		<?php 
	}
	
}else{
	unset($_POST['info']);
	?><script language="javascript">window.location.href="page.php?absen-mahasiswa&kelas=<?php echo $nm_kelas;?>";</script><?php
}
?>