<?php
/* TestVerify2.php */
session_start();

if (!isset($_SESSION['user'])) {
    session_regenerate_id();
    $_SESSION['user'] = true;
} else {
    echo 'Welcome ', $_SESSION['user'];
}
?>
