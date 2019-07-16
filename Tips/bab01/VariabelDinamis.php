<?php
/* VariabelDinamis.php */

$a = "Hello";
$$a = "World";

// Memanggil variabel dinamis
echo "${$a}";

// ekuivalen dengan berikut:
echo "$Hello";

// Memanggil semua (kedua) variabel
echo "$a $Hello";

?>
