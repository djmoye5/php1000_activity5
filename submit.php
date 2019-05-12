<?php

// Set session variables
$_SESSION['username'] = "admin";
 $_SESSION['password'] = "pass1234";
 if(isset($_SESSION['username'], $_SESSION['password'])){
    header('Location: home.php');
    exit;
 }
 ?>
