<?php
/* geturlpage.php */

getURLPage('http://localhost/', 'page.html');

function getURLPage($page, $file) {
   $ch = curl_init($page);
   $cf = fopen($file, 'w');
   // Simpan page ke file
   curl_setopt($ch, CURLOPT_FILE, $cf);

   // Ambil halaman URL
   curl_exec($ch) or die(curl_error($sh));

   echo 'Size download: ',
   curl_getInfo( $ch, CURLINFO_SIZE_DOWNLOAD);
   echo '<br>Speed download: ',
   curl_getInfo($ch, CURLINFO_SPEED_DOWNLOAD);

   curl_close($ch);
   fclose($cf);
   echo '<p><a href='.$file.'> View page </a>';
}

?>