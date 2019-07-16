<html>
<head>
<style type="text/css">
BODY, TD {font-family:verdana,arial;font-size:9pt}
</style>
</head>
<body>

<?php
/* bargraph.php */

$arrData = array(
    'Soto'=> 89,
    'Sate'=> 73,
    'Bakso'=> 15,
    'Bakwan'=> 56,
    'Lainnya'=> 48);

// Konfigurasi lebar grafik dan tinggi bar
$graphWMax = 300;
$bar_h = 8;
// Mencari nilai max elemen array
$barMax = max($arrData);
?>

<b>Hasil Polling</b>
<br> <i> "Makanan Favorit" </i>
<p>
<table style="border:1pt solid #666666;">

<?php
foreach($arrData as $label => $rating) {
   // Get integer lebar bar tiap elemen
   $bar_w = intval($graphWMax * $rating/$barMax);
?>

   <tr>
   <td> <?=$label?> </td>
   <td>

   <?php
   if ($rating > 50) { ?>
      <img src="./blue.png" width="<?=$bar_w?>"
      height="<?=$bar_h?>" border=0> <?=$rating?>

   <?php } else { ?>

      <img src="./red.png" width="<?=$bar_w?>"
      height="<?=$bar_h?>" border=0> <?=$rating?>

   <?php } ?>

   </td>
   </tr>

<?php } ?>

</table>
<small>(Sumber: Majalah Nyam-Nyam)</small>
