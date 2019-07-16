<?php
/* SetCookie3.php */
setcookie('mycookie3', 'My Cookie3');

if (isset($_COOKIE['mycookie3'])) {
    echo 'Isi Cookie: ', $_COOKIE['mycookie3'];
} else {
    echo 'Cookie belum di-set';
}

?>