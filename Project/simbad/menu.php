<?php
if(isset($_SESSION['SES_ADMIN'])){
?>
	<ul>
	<li><a href="?open" target="_self"> Home </a></li>
	<li><a href="?open=User-Data" target="_self"> Daftar Admin</a></li>
	<li><a href="?open=Pelajaran-Data" target="_self"> Daftar Materi</a></li>
	<li><a href="?open=Guru-Data" target="_self"> Daftar Tutor</a></li>
	<li><a href="?open=Siswa-Data" target="_self"> Daftar Pelajar</a></li>
	<li><a href="?open=Kelas-Data" target="_self"> Daftar Kelas</a></li>
	<li><a href="?open=Nilai-Data" target="_self">Pembayaran</a></li>
	<li><a href="?open=Laporan" target="_self"> Laporan</a></li>
	<li><a href="?open=Logout" target="_self"> Logout</a></li>
	</ul>
<?php
}
else { ?>
	<ul>
	<li><a href="?open=Login" target="_self">Login</a></li>	
	</ul>
<?php 
}
?>