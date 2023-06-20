<?php 
    require_once('../includes/functions.php');

    $username = real_escape($_POST['user_name']);
    $password = real_escape($_POST['user_password']);

    $loginData = executeQuery("SELECT * FROM users WHERE BINARY username = '" . $username . "' AND user_password = '" . $password."'");
   
    if ($loginData->num_rows == 1) {
        echo 1;
    } else {
        echo 0;
    }
?>