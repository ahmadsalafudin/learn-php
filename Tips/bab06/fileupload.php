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
/* fileupload.php */

if (isset($_POST['ok']) && isset($_FILES['myFile'])) {
   $dir = 'C:/tmp/';
   $file = $_FILES['myFile']['tmp_name'];
   $name = $_FILES['myFile']['name'];
   $size = $_FILES['myFile']['size'];

   if (($size != 0) && ($size > 10240)) {
       exit('File size is to large...');
   }

   if (!move_uploaded_file($file, $dir.$name)) {
       echo 'Unable to upload file';
   } else {
       echo 'File Uploaded...';
   }
}

?>