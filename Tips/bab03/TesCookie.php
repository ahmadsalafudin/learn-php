<?php
/* TesCookie.php */

// Jika variabel belum di-set, set cookie
if(!isset($_GET['myCookie'])) {
    setcookie('myCookie', 'nilai cookie');
    header('Location: ' .$_SERVER[PHP_SELF].
    '?myCookie=1');
    exit;

} else {
    if(isset($_COOKIE['myCookie'])) {
        setcookie('myCookie');
        echo 'ok, support cookie <br>';
        // print cookie
        print_r($_COOKIE);
    } else {
        echo 'Tidak support cookie...!!';
    }
}

?>

