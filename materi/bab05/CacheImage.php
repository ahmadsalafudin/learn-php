<?php
/* CacheImage.php */

header('Content-type: image/png');

$file = './date.png';

// waktu expire 1 hari (24 jam)
// 24 jam = (12x3600 =43200 detik)
$expire = 43200;

// retrieve image dari cache file
if (file_exists($file) && filemtime($file) > (time() - $expire)) {
    readfile($file);
    exit;
}

// Jika file tidak ada dan nilai update
// terakhir lebih dari (time()-expired)
// Generate file image baru
$image = imagecreatetruecolor(100,25);
$white = imagecolorallocate($image,255,255,255);
$black = imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$white);
imagerectangle($image,0,0,99,24,$black);
imagestring($image,5,5,5,date("d/m/Y"),$black);

// Output image ke file (replace file lama)
imagepng($image,$file);

// Output image ke browser
imagepng($image);

imagedestroy($image);

?>