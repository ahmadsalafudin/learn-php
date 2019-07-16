<?php
include 'koneksi.php';
$id = $_GET['id'];

   	
$query = "SELECT * FROM _pengajuan_cuti WHERE id_cuti ='$id'"; //mencari kode yang paling besar atau kode yang baru masuk
$hasil = mysql_query($query);
$data=mysql_fetch_array($hasil);
$cuti_awal = $data['cuti_awal'];	
$cuti_ambil = $data['cuti_ambil'];	
$cuti_sisa = $cuti_awal - $cuti_ambil;
$nik = $data['idx'];	

$query2 = "SELECT * FROM karyawan WHERE idx ='$nik'"; //mencari kode yang paling besar atau kode yang baru masuk
$hasil2 = mysql_query($query2);
$data2=mysql_fetch_array($hasil2);
$hp = $data2['hp'];	



function KirimSMS($notujuan,$isipesan,$userkey,$passkey){
	$isi=urlencode($isipesan);
	$hp=str_replace('+62', '0', $notujuan);
	$hp=str_replace(' ', '', $hp);
	$hp=str_replace('.', '', $hp);
	$hp=str_replace(',', '', $hp);
	$ho=trim($hp);
	  $url="https://reguler.zenziva.net/apps/smsapi.php?userkey=$userkey&passkey=$passkey&nohp=$hp&pesan=$isi";
	$data=file_get_contents($url);
	$a = "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i";
	if(preg_match($a, $data)){
		$hasil='1';
	}else{
		$hasil='0';
	}
	return $hasil;
}

//setingan ini ada di menu API Key zenziva anda
$userkey='vc6huk';
$passkey='skripsi';

//isi nomor tujuan
$notujuan=$hp;
//isi pesan
$isipesan='Permintaan Cuti Anda telah di ACC oleh Manager';


	
$query1 = mysql_query("UPDATE input_cuti SET status = 'ACC CUTI', cuti_sisa = '$cuti_sisa' where id_cuti='$id'") or die(mysql_error());
if ($query1) {
$query2 = mysql_query("UPDATE cuti_awal SET jml_cuti = '$cuti_sisa' where nik='$nik'") or die(mysql_error());
if ($query2) {

$kirim=KirimSMS($notujuan,$isipesan,$userkey,$passkey);
if($kirim=='1'){
   echo 'Gagal';
}else{
   echo 'SMS konfirmasi cuti sudah terkirim';
}
    header('location:approval.php');
}
}
?>