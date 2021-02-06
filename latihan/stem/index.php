<?php
include_once "semmingArifin.php";
// hasilkan kata dasar
 
$kata = "mengatakan";
 
$kamus_kata=array("kata","sayang","benci");
 $kata_dasar = semmingArifin($kata,$kamus_kata);
 
echo $kata_dasar;
 
?>
