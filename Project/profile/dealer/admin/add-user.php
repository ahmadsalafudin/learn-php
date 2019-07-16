<?php
    include('config.php');
    $nama = $_POST['nama']; 
    $username = $_POST['username'];
    $password = $_POST['password']; 
    
    
    $result = $mysqli->query("INSERT INTO `user` (`id`, `nama`, `username`, `password`) 
                                VALUES (NULL, '".$nama."', '".$username."', '".$password."');");
    if(!$result){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    else{
        header('Location: user.php');
    }
?>