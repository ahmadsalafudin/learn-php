<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
<title> Selamat Datang </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="bootstrap/css/img.css">
<html>
<body>
 <body>
    <div class="img">
      <a target="_blank" href="img3.png">
        <img src="img/profil/img3.png" alt="gambar 1" >
      </a>
      <div class="desc">
	<p align="center"><b>Ahmad Salafudin</b><br>311410500</p>
      </div>
    </div>
<form action="save_img.php" method="post" enctype="multipart/form-data" name="FUpload" id="FUpload">
  <p>Judul Gambar :
    <input name="img_profil" type="text" id="img_profil" size="30" maxlength="30" />
  </p>
  <p>File Gambar :
    <input name="nama_img" type="file" id="nama_file" size="30" />
</p>
  <p><input type="submit" name="btnSimpan" id="btnSimpan" value="Simpan" /></p>
</form>
</body>
</html>