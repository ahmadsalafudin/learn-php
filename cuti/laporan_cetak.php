<?php 
include('koneksibaru.php');

$today = date("d-m-Y");
$Dari=$_POST['Dari'];
$Sampai=$_POST['Sampai'];
$result=mysql_query("SELECT * FROM _pengajuan_cuti WHERE tanggal BETWEEN '$Dari' AND '$Sampai';") or die(mysql_error());

echo "<table> 
<tr> 	 
		<td><img src='images/logo_cetak.jpg'></td></tr>
		</tr>"; 
echo "</table>"; 
echo "<b><hr></b>";

echo "<U><h3><b>LAPORAN CUTI KARYAWAN</b></h3></U>"; 

echo "<table class='box table-condensed' border='1'> 
<tr> 	 
						
		<th align='left' width='60'>ID</th>
		<th align='left' width='110'>NIK</th>
		<th align='left' width='160'>Nama Karyawan</th>
		<th align='left' width='150'>Departemen</th>
		<th align='left' width='60'>SISA</th>
		<th align='left' width='60'>AMBIL</th>
		<th align='left' width='100'>Tgl Cuti</th>
		<th align='left' width='170'>Alasan</th>
		<th align='left' width='120'>Status</th>
		
		</tr>"; 
 $tampil= mysql_query("SELECT * FROM _pengajuan_cuti"); 

 while ($r=mysql_fetch_array($tampil))
 { echo "<tr><td class='left'>$r[id_cuti]</td> 
			<td class='left'>$r[nik]</td> 
			<td class='left'>$r[nama]</td> 
			<td class='left'>$r[nm_departemen]</td>
			<td class='center'>$r[cuti_awal]</td>
			<td class='center'>$r[cuti_ambil]</td>
			<td class='left'>$r[tgl_awal]</td>
			<td class='left'>$r[alasan]</td>
			<td class='left'>$r[status]</td>";

} 
echo "</table>"; 
echo "<br>$today";
echo "<br> Staff HRD"; 

$vw="<script language=javascript> function prints() { bV = parseInt(navigator.appVersion); 
if (bV >= 100) window.print();} prints(); </script>"; 
echo $vw; 
?>
 
