<?php
/* includepath.php */

// Men-set directive
// platform Windows menggunakan titik koma
ini_set('include_path', '.;C:/tmp/inc');

// platform Unix/Linux, titik dua
// ini_set('include_path', '.:/tmp/inc');

// include file header, file ini berada
// di lokasi C:\tmp\inc
include('header.inc.php');

// Memanggil fungsi di file header
printTxt();

?>