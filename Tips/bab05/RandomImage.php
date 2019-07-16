<?php
/* RandomImage.php */

// Start session
session_start();

// Karakter alpha numerik untuk kode
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

// Men-generate 5 karakter kode verifikasi
// secara random, dengan str_shuffle()
$rand = substr(str_shuffle($str), 0, 5);

// Random background images, min=1 dan max=3
$no = rand(1, 3);
$image = imagecreatefromjpeg("./img/bg$no.jpg");

$font = 5;
$black = imagecolorallocate ($image, 0, 0, 0);
$y = (imagesy($image)-imagefontheight($font)) / 2;

// Menulis kode verifikasi di background
imagestring ($image, $font, 8, $y, $rand, $black);

// Hash hasil random, dan simpan di session
$_SESSION['RandVal'] = md5($rand);

header('Content-type: image/jpeg');
imagejpeg($image);
imagedestroy($image);
?>
