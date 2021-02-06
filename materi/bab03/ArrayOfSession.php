<html>
<body>
<form action="<?$_SERVER['PHP_SELF']?>" method="post">
Enter a word: <input type="text" name="word">
<input type="submit" value="Add to List" name="ok">
</form>
</body>
</html>

<?php
session_start();

if ((isset($_POST['ok'])) && (isset($_POST['word']))) {
   // Assign input ke array session
   $_SESSION['words'][] = $_POST['word'];

   // Cetak array session
   if (is_array(@$_SESSION['words'])) {
      foreach($_SESSION['words'] as $word) {
         echo '<li>' .$word . '<br>';
      }
   }

// print/debug session
print_r($_SESSION);

}

?>