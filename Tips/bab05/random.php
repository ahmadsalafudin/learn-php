<?php
/* random.php */

// Jumlah image yang akan di-random
$jml_img = 3;
// Random antara 1 s/d 3
$rnd = rand(1, $jml_img);
?>

<html>
<!-- Auto-refresh tiap 5 detik -->
<meta http-equiv="refresh" content="5">

<!-- Misal: lokasi image di folder img
Nama image: image1.jpg, image2.jpg dst -->
<img src="./img/image<?=$rnd?>.jpg"
 border=1 width=100 height=70>

</html>