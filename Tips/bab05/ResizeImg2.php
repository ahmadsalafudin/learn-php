<?php
/* resizeimg2.php */

$filename = './img/elex.jpg';

// Get ukuran image (lebar & tinggi)
list($width, $height) = getimagesize($filename);

// Resize 200%
$new_w1 = $width * 2;
$new_h1 = $height * 2;
// Resize 50%
$new_w2 = $width / 2;
$new_h2 = $height / 2;

?>

<html>
<body>
<table width=450>
<tr><td valign=top>
Original image<br>
<img src='<?=$filename?>' width='<?=$width?>' height='<?=$height?>'>
<br>W= <?=$width ?> pixels
<br>H= <?=$height ?> pixels
</td>

<td>
Resize 200% <br>
<img src='<?=$filename?>' width='<?=$new_w1?>' height='<?=$new_h1?>'>
<br>W= <?=$new_w1 ?> pixels
<br>H= <?=$new_h1 ?> pixels
</td>

<td valign=top>
Resize 50% <br>
<img src='<?=$filename?>' width='<?=$new_w2?>' height='<?=$new_h2?>'>
<br>W= <?=$new_w2 ?> pixels
<br>H= <?=$new_h2 ?> pixels
</td>
</tr>
</table>
</body>
</html>