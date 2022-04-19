<?php
/* logout.php */

if (!isset($_GET['quit'])) { ?>
   You're still logged in, go
   <a href="./authlogin.php"> back </a>
   <p>
   To complete your log out, press "Cancel" at this
   <a href="logout.php?quit=1">log in prompt</a>.

<?php
} else {
   header('WWW-Authenticate: Basic realm="Please, just press Cancel"');
   header('HTTP/1.0 401 Unauthorized');
   session_start();
   $_SESSION['destroy'] = "ok";
   ?>

   <h4>Logged out, successfull...!!</h4>
   <a href="./authlogin.php">Try again ahh...</a>

<?php } ?>