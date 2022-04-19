<?php
include 'koneksi.php';
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
$notujuan='08812183368';
//isi pesan
$isipesan='Permintaan Cuti Anda telah di ACC oleh Manager';

//mengikirim sms
$kirim=KirimSMS($notujuan,$isipesan,$userkey,$passkey);
if($kirim=='1'){
   echo 'Gagal';
}else{
   echo 'SMS konfirmasi ke customer sudah terkirim';
}
?>