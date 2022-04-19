<?php
/* SmileyForm.php */

// array smilies
$sm=array(
    ':)' => "<img src='img/smile.gif' border=0/>",
    ':(' => "<img src='img/sad.gif' border=0 />",
    ':D' => "<img src='img/biggrin.gif' border=0/>",
    ';)' => "<img src='img/wink.gif' border=0/>",
    ':?' => "<img src='img/question.gif' border=0/>",
    '8'  => "<img src='img/cool.gif' border=0/>",
    ':i' => "<img src='img/idea.gif' border=0/>" );
?>

<SCRIPT LANGUAGE='JavaScript'>
  <!--
      function setIkon(ikon) {
      document.post.msg.value =
      document.post.msg.value + ikon;
  } //-->
</SCRIPT>

Click to add smiley
<?php
    foreach ($sm as $key => $val) { ?>
    <a href="javascript:setIkon('<?=$key?>')"
    title="<?=$key?>"> <?=$val?> </a>
<?php } ?>

<form action="<?$_SERVER['PHP_SELF']?>"
 method="post" name="post" >
<textarea name="msg" rows="6" cols="35">
</textarea><br>
<input type=submit value="Submit" name=submit>
</form>

<?php
if (isset($_POST['submit'])) {
    $msg = $_POST['msg'];
    $msg = htmlspecialchars(trim(
           stripslashes($msg)));
    $msg = str_replace(array_keys($sm),
           array_values($sm), $msg);
    $msg = nl2br($msg);
    echo "Your Message : <br>". $msg;
}
?>