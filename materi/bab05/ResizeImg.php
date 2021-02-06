<?php
/* resizeimg.php */

$filename = './img/elex.jpg';

// Get ukuran image (lebar & tinggi)
list($width, $height) = getimagesize($filename);

// Resize 200%
$new_w1 = $width * 2;
$new_h1 = $height * 2;
// Resize 50%
$new_w2 = $width / 2;
$new_h2 = $height / 2;

// Load image
$tmp1 = imagecreatetruecolor($new_w1, $new_h1);
$tmp2 = imagecreatetruecolor($new_w2, $new_h2);
$source = imagecreatefromjpeg($filename);

// Resize image
imagecopyresampled($tmp1, $source, 0, 0, 0, 0, $new_w1, $new_h1, $width, $height);
imagecopyresampled($tmp2, $source, 0, 0, 0, 0, $new_w2, $new_w2, $width, $height);

// Output image ke file
imagejpeg($tmp1, './img/out1.jpg');
imagejpeg($tmp2, './img/out2.jpg');

imagedestroy($tmp1);
imagedestroy($tmp2);
imagedestroy($source);
?>

<html>
<body>
<table width=450>
<tr><td valign=top>
Original image<br>
<img src='<?=$filename?>'>
<br>W= <?=$width ?> pixels
<br>H= <?=$height ?> pixels
</td>

<td>
Resize 200% <br>
<img src="./img/out1.jpg">
<br>W= <?=$new_w1 ?> pixels
<br>H= <?=$new_h1 ?> pixels
</td>

<td valign=top>
Resize 50% <br>
<img src="./img/out2.jpg">
<br>W= <?=$new_w2 ?> pixels
<br>H= <?=$new_h2 ?> pixels
</td>
</tr>
</table>
</body>
</html>