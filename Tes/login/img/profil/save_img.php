<html>
<body>
<p>
  <?php
$namafolder="profil/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","") or die("Gagal");
mysql_select_db("idm")  or die("Gagal");
if (!empty($_FILES["nama_img"]["img/profil"]))
{
    $jenis_gambar=$_FILES['nama_img']['type'];
    $judul_gambar=$_POST['img_profil'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" ||$jenis_gambar=="image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['nama_img']['name']);       
        if (move_uploaded_file($_FILES['nama_img']['img/profil'], $gambar)) {
            echo "Gambar berhasil dikirim ke".$gambar;
            $sql="insert into tb_gambar (img_profil,nama_img) values ('$img_profil','$gambar')";
            $res=mysql_query($sql) or die (mysql_error());
        } else {
           echo "Gambar gagal dikirim";
        }
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg";
   }
} else {
    echo "Anda belum memilih gambar";
}
?>
</p>
<p>Lihat gambar <a href="display_img.php">DISINI</a></p>
</body>
</html>