<html>
<body>
<p align="center">
  <?php
//Masukkan koneksi database disini
$namafolder="profil/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("db_latihan")  or die("Gagal");
   $datatamu = mysql_query("select img_profil,nama_img from tb_gambar order by img_profil asc;") or die("Gagal :".mysql_error());  
   echo '<table width="400" align="center" border="1">';  
   echo '<tr>';  
   echo '<th>Judul Gambar</th>';  
   echo '<th>Gambar</th>';  
   echo '</tr>';  
   while ($rec=mysql_fetch_object($datatamu))   
   {      
     echo '<tr>';     
     echo '<td>'.$rec->img_profil.'</td>';     
     echo '<td>';
     //ini bagian memanggil file gambar
     echo '<img src="'.$rec->nama_img.'" alt="'.$rec->img_profil.'" title="'.$rec->img_profil.'" width="100" />';
     echo '</td>';     
     echo '</tr>';  
   }  
   echo '</table>';  
   mysql_close();//tutup koneksi database  
?>
</p>
<p align="center"><a href="index_profil.php">&lt;&lt; Kembali</a></p>
</body>
</html>