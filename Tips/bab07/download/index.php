<?php
/* index.php */

error_reporting(E_ALL);

$page = $_SERVER['PHP_SELF'];

// Lokasi file yang bisa di-download
$dir = './';
$dh = opendir($dir) or die('error');
while (($f = readdir($dh)) !== false) {
   if (is_file($dir.$f)) {
      if (file_exists($f.'.inc')) {
         $counter = file_get_contents($f.'.inc');
         echo "<li><a href='$page?file=$f'>$f</a> <small>($counter kali)</small></li>";
      } else {
         echo "<li><a href='$page?file=$f'>$f</a> </li>";
      }
   }
}
closedir($dh);

// Jika file ada dan request dari method GET
if (isset($_GET['file']) && file_exists($dir.$_GET['file'])) {
   $file = $_GET['file'];
   $txt = ($file.'.inc');
   // Baca isi file counter
   $count = file_get_contents($txt);
   // Increment counter
   $count=$count + 1 ;
   // Simpan nilai baru
   file_put_contents($txt, $count);
   // Redirect ke file download
   header('Location: '.$dir.$file);
}

?>