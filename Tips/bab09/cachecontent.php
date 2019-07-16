<?php
/* cachecontent.php */

// Include class PEAR::Cache_Lite Output
require_once 'Cache/Lite/Output.php';

// Konfigurasi option Cache_Lite
$opts = array(
    'cacheDir'        => './cache/',
    'writeControl'    => 'true',
    'readControl'     => 'true',
    'readControlType' => 'md5'
);

// Membuat objek Cache_Lite_Output
$cache = new Cache_Lite_Output($opts);

// Set lifetime caching (1 minggu)
$cache->setLifeTime(302400);

// Start caching dengan id header
if (!$cache->start('header', 'Static')) {
   ?>
   <html>
   <head>
   <title>Caching with PEAR::Cache_Lite</title>
   <body> <center>
   <p> Simulasi Header Page <br>
   Last modified @ <?=date('H:i:s')?> <hr><p>

   <?php
   // Output di-buffer sampai pemanggilan
   // method end(), dan simpan ke cache
   $cache->end();
}

// Simulasi content body dinamis
// Lifetime = 5 detik
$cache->setLifeTime(5);
if (!$cache->start('body', 'Dynamic')) {
   echo 'Body already modified... <br>';
   echo 'Last modified @ ', date('H:i:s');
   $cache->end();
}

// Content footer, statis
$cache->setLifeTime(302400);
if (!$cache->start('footer', 'Static')) {
   ?>

   <p><hr> Simulasi Footer Page <br>
   Last modified @ <?=date('H:i:s')?>
   </body>
   </html>

   <?php
   $cache->end();
}
?>