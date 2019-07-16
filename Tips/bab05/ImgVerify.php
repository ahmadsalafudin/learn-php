<html>
<body>
Press <strong>Refresh</strong>, if you can't read the code. <br>
<small><B>Note:</b> The code you enter is case sensitive!</small>

<p>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<img src="RandomImage.php" border=1> <br>
Kode <input type="text" name="kode"> <br>
<input type="submit" name="ok" value="Send">
</form>
</body>
</html>

<?php
// Start session
session_start();

if (isset($_POST['ok']) && isset($_POST['kode'])) {
   $kode = trim($_POST['kode']);
   if (md5($kode) === $_SESSION['RandVal']) {
       echo 'OK, you are verified...';

       // Letakkan kode proses lain di sini

   } else {
       echo 'Sorry, invalid code. Please try again';
   }

   if (!isset($_SESSION['RandVal'])) {
    // Re-generate id session
    if (function_exists('session_regenerate_id')) {
	  session_regenerate_id(true);
    }
   }
}
?>