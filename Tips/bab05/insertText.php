<?php
/* insertText.php */

// Inisialisasi variabel $text
(isset($_GET['text'])) ?
$text = (string) trim($_GET['text']) :
$text = 'Label Gambar di sini';

$date = date('d-F-Y  H:i:s');

// Load image, dan alokasikan warna putih
$img = imagecreatefromjpeg("C:\\tmp\\world.jpg");
$white = imagecolorallocate($img,255,255,255);

// set font teks dan size font (pixel)
$font = 'Verdana';
$size = 10;

setCenter($img, $size, 0, imagesy($img)-15, $white, $font, $text);
setCenter($img, $size-3, 0, imagesy($img)-5, $white, $font, $date);

// Set header page
header('Content-type: image/jpeg');

// Cetak output JPG/JPEG
imagejpeg($img);

// hapus resource
imagedestroy($img);

/**
 * Fungsi untuk men-set posisi teks image
 * di tengah image (background)
 * @return fungsi imagettftext yang
 * parameternya sudah di-set, kecuali $y
 */
function setCenter($img, $size, $angle, $y, $col, $font, $txt) {
   $tbox  = imagettfbbox($size, $angle, $font, $txt);
   $txt_w = abs($tbox[2] - $tbox[0]);
   $img_w = (int) imagesx($img);
   $x = (int) ($img_w - $txt_w) / 2;

   return imagettftext($img, $size, $angle, $x, $y, $col, $font, $txt);
}

?>