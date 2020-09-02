<?php

if (isset($_POST['register-submit'])) {
    
    require('../confs/config.php');

    $username = $_POST['username'];
    $email = $_POST['mail'];
    $password = $_POST['password'];

    if(empty($username) || empty($email) || empty($password)) {
        header("location: ../register.php?error=emptyFields&username=".$username."&mail=".$email);
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../register.php?error=invalidmail&username=".$username);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$",$username)) {
        header("location: ../register.php?error=invalidusername&mail=".$email);
        exit();
    }
}