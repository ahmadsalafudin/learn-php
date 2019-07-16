<?php
/* button.php */

// Inisialisasi variabel $text
(isset($_GET['text'])) ?
$text = (string) trim($_GET['text']) :
$text = 'Button';

$img = ImageCreateFromPNG("C:\\tmp\\btn.png");
$white = ImageColorAllocate($img,255,255,255);

// Set ukuran font teks (integer)
$font = 2;

// Get lebar(w) dan tinggi(h) font
$txt_w = ImageFontWidth($font) * strlen($text);
$txt_h = ImageFontHeight($font);
// Get lebar (w) dan tinggi(h) image
$img_w = ImageSX($img);
$img_h = ImageSY($img);

// Set posisi x dan y teks
$x = (int)($img_w - $txt_w) / 2;
$y = (int)($img_h - $txt_h) / 2 ;

// Cetak teks pada image
ImageString($img, $font, $x, $y, $text, $white);

// Set header page
header('Content-type: image/png');
// Cetak output PNG
ImagePNG($img);
// hapus resource
ImageDestroy($img);

?>
