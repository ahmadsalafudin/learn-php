<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="panel panel-default">
<div class=panel-heading>Data</div>
<div class=panel-body>
<p>Berikut ini adalah data yang diposting oleh user</p>
</div>
<table class=table>
<thead>
<tr>
<th>Nama</th>
<th>Deskripsi</th>
<th>Harga</th>
<th>Image</th>
</tr>
</thead>
<tbody>
<?php
include "koneksi-database.php";
$data = "SELECT * from produk";
$bacadata = mysql_query($data);
while($select_result = mysql_fetch_array($bacadata))
{
$nama_produk        = $select_result['nama_produk'];
$deskrpsi    = $select_result['deskrpsi'];
$harga        = $select_result['harga'];
$gambar        = $select_result['gambar'];

echo"<tr> <td>$nama_produk</td><td>$deskrpsi</td><td>$harga</td><td><img src='$gambar' height='150'></td></tr> ";
//ganti imagesup dengan nama folder dimana anda menempatkan image hasil upload
}?>
</tbody>
</table>
</div>
</div>
</body>
</html>