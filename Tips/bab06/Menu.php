<?php
/* Menu.php */

/* Contoh yang SALAH, bisa mengancam
 * sekuriti, dengan remote file.
 * ex: file.php?page=http://bla bla bla
 */
if (isset($_GET['page'])) {
    include($_GET['page']);
}

/* Contoh yang BAIK, misal memanfaatkan
 * array untuk mendefinisikan file include.
 * Tidak akan menerima file selain yang
 * sudah didefinisikan
 */
$inc = array('header.php', 'footer.php');

if (isset($_GET['page'])) {
    // verifikasi input dari GET
    cekInclude($_GET['page'], $inc);
}

function cekInclude($page, $arr) {
   if (in_array($page, $arr)) {
       include($page);
   } else {
       exit('Try other sites..!');
   }
}

?>