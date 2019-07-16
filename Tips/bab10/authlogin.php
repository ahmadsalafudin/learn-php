<?php
/* authlogin.php */

// Verifikasi id user dan password
if (!valid($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
   auth();
} else {
   session_start();
   // Jika session logout sudah di-set
   if ($_SESSION['destroy'] == 'ok') {
      session_unset();
      session_destroy();
      auth();
   } ?>

You're verified...
<p><a href="logout.php?quit=1"> Log out </a>
<?php
}

// Menampilkan prompt login
function auth() {
   $realm = rand(1, 123456789);
   header('WWW-Authenticate: Basic realm="Realm ID='.time().'"');
   header('HTTP/1.0 401 Unauthorized');
   die("Unauthorized access forbidden..!");
}

// Simulasi otentikasi id dan password
function valid($user, $pass) {
   $users = array('salaph' => 's@l4v',
                  'admin'  => '4dm!n');
   if (isset($users[$user]) && ($users[$user] == $pass)) {
      return true;
   } else {
      return false;
   }
}

?>