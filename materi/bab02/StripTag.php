<?php
/* StripTag.php */
?>

<form action="<?$_SERVER['PHP_SELF']?>" method=POST>
<textarea name="msg" rows="6" cols="35">
</textarea><br>
<input type=submit value="Submit" name=submit>
</form>

<?php
if (isset($_POST['submit']) &&
isset($_POST['msg'])) {
    $msg = $_POST['msg'];
    $msg1 = strip_tags(trim($msg));
    echo '<br>' .$msg1. '<br>';

    // mengijinkan tag <b>
    $msg2 = strip_tags(trim($msg), '<b>');
    echo '<br>' .$msg2. '<br>';

    $msg3 = htmlentities(trim($msg));
    echo '<br>' .$msg3. '<br>';

    $msg4 = htmlentities(trim($msg),
    ENT_QUOTES);
    echo '<br>' .$msg4. '<br>';

    $msg5 = htmlspecialchars(trim($msg));
    echo '<br>' .$msg5. '<br>';

    $msg6 = htmlspecialchars(trim($msg),
    ENT_QUOTES);
    echo '<br>' .$msg6. '<br>';

    $msg7 = htmlspecialchars(trim($msg),
    ENT_NOQUOTES);
    echo '<br>' .$msg7. '<br>';
}
?>