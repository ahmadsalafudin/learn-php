<HTML>
<HEAD>
<META HTTP-EQUIV="Set-Cookie" CONTENT="mycookie1=My Cookie1">
</HEAD>
<BODY>

<?php
if (isset($_COOKIE['mycookie1'])) {
    echo 'Isi Cookie: ', $_COOKIE['mycookie1'];
} else {
    echo 'Cookie belum di-set';
}

?>