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

myFormat($img, $size, 0, imagesy($img)-15, $white, $font, $text, 'C');
myFormat($img, $size-3, 0, imagesy($img)-5, $white, $font, $date, 'R');

// Set header page
header('Content-type: image/jpeg');

// Cetak output JPG/JPEG
imagejpeg($img);

// hapus resource
Imagedestroy($img);

/**
 * Fungsi untuk men-set posisi teks image
 * sesuai parameter $alignment.
 * Nilai L=Left, R=Right, C=Center
 * @return fungsi imagettftext custom formatted
 */
function myFormat($img, $size, $angle, $y, $col, $font, $txt, $alignment) {
   $tbox  = imagettfbbox ($size, $angle, $font, $txt);
   $txt_w = abs($tbox[2] - $tbox[0]);
   $img_w = imagesx($img);

   switch ($alignment) {
   case 'L':
      $x = $img_w-$img_w;
      break;
   case 'R': /* 2 = nilai toleransi */
      $x = ($img_w - $txt_w) - 2;
      break;
   case 'C':
      $x = ($img_w - $txt_w) / 2;
      break;
   }
   return imagettftext($img, $size, $angle, $x, $y, $col, $font, $txt, $alignment);
}

?>