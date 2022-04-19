<html>
<style type="text/css">
TD {font-family:verdana,arial; font-size:10px; font-weight:bold;}
A { text-decoration: none; font-size: 11px;
  font-family:verdana,arial; color:blue; font-weight:bold; }
</style>
<body>

<?php
/* MapMenu.php */

// Set original path, url base, dan title root dir
$originalpath = $_SERVER['PHP_SELF'];
$urlbase = 'http://'.$_SERVER['HTTP_HOST'];
$roottitle = 'Home';

// Split path ke dalam array dengan menggunakan slash
$path = explode ('/', $originalpath);

// Mendapatkan jumlah total elemen array
$jml_elm = count ($path);

echo '<table bgcolor=#CCCCCC style="border:1pt solid #666666;"><tr><td>';
echo '<a href='.$urlbase.'>'.$roottitle.'</a>';

// loop dan cetak tiap direktori/file
for ($i=1; $i<$jml_elm ; $i++) {
    // Menambahkan direktori/file berikutnya
    $urlbase = $urlbase . '/' . $path[$i];
    /* Mengatur format teks link */
    // Menghapus ekstensi .php
    $path[$i] = str_replace('.php', '', $path[$i]);
    // Set kapital pada awal kata
    $path[$i] = ucwords($path[$i]);
    echo ' > <a href=' .$urlbase. '>' .$path[$i]. '</a>';
}

echo '</td></tr></table>';
?>

</body>
</html>