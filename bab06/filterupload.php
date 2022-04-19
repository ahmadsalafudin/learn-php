<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title></title>
</head>
<body>

<form method="POST" enctype="multipart/form-data" action="<?$_SERVER['PHP_SELF']?>">
<input type="hidden" name="MAX_FILE_SIZE" size="10240">
File: <input type="file" name="myFile"> <br>
<p><input type="submit" name="ok" value="Upload">
</form>

<?php

if (isset($_POST['ok']) && isset($_FILES['myFile'])) {
   $dir = './download/';
   $file = $_FILES['myFile']['tmp_name'];
   $tipe = $_FILES['myFile']['type'];
   $name = $_FILES['myFile']['name'];

   // Mendefinisikan tipe MIME
   $exts = array('image/jpeg', 'image/pjpeg',
            'image/png', 'image/x-png');

   // Periksa tipe MIME file
   if (!in_array(($tipe), $exts)) {
      echo 'Please upload a PNG or JPEG image';
      exit;
   }

   if (!move_uploaded_file($file, $dir.$name)) {
       echo 'Unable to upload file';
   } else {
       echo 'File Uploaded...';
   }

}
?>