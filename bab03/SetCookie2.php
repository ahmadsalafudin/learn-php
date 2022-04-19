<?php
/* SetCookie2.php */
header('Set-Cookie: mycookie2=My Cookie2');

if (isset($_COOKIE['mycookie2'])) {
    echo 'Isi Cookie: ', $_COOKIE['mycookie2'];
} else {
    echo 'Cookie belum di-set';
}

?>