<?php
/* cekproxy.php */

if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   echo 'Anda mengakses dengan proxy server<br>';
   echo 'IP Anda: ',
        $_SERVER['HTTP_X_FORWARDED_FOR'], '<br>';
   echo 'Terkoneksi lewat engine: ',
        $_SERVER['HTTP_VIA'], '<br>';
   echo 'IP Proxy Server: ',
        $_SERVER['REMOTE_ADDR'];
} else {
   echo 'Anda terkoneksi tanpa proxy <br>';
   echo 'IP Anda: ', $_SERVER['REMOTE_ADDR'];
}

?>
