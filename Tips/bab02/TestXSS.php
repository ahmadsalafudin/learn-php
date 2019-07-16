<?php
/* TestXSS.php */

setcookie('myCookie', 'Isi Cookie');
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method=POST>
<textarea name="msg" rows="6" cols="35">
</textarea><br>
<input type=submit value="Submit" name=submit>
</form>

<?php
if (isset($_POST['submit']) &&
isset($_COOKIE['myCookie'])) {

    $msg = $_POST['msg'];
    echo '<br>' .$msg. '<br>';

}
?>