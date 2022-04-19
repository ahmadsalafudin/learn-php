<?php
session_start();
if ((isset($_POST['ffamily'])) || (isset($_POST['size']))) {
   $_SESSION['family'] = $_POST['ffamily'];
   $_SESSION['size'] = $_POST['fsize'];
} else {
   $_SESSION['family'] = 'TimesNewRoman';
   $_SESSION['size'] = 12;
}
?>

<html>
<head>
<style type="text/css">
BODY, P {font-family:<?=$_SESSION['family']?>;
font-size:<?=$_SESSION['size']?>pt;}
</style>
</head>
<body>

<b>Set Your Preferences</b>
<form action="<?$_SERVER['PHP_SELF']?>" method="post">
<p>Font Family:<br>
<input type="radio" name="ffamily" value="Arial"> Arial
<input type="radio" name="ffamily" value="Verdana"> Verdana
<p>Font Size:<br>
<input type="radio" name="fsize" value=8> 8pt
<input type="radio" name="fsize" value=12> 12pt

<p><input type="submit" value="Apply"></p>

<p> Your display preferences <br>
Font family:<b> <?=$_SESSION['family']?> </b><br>
Font size: <b> <?=$_SESSION['size']?> </b>


</form>
</body>
</html>

