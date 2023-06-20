<?php 
    require_once('../includes/functions.php');

    $loginData = executeQuery("SELECT * FROM users WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] ."'");
   
    if ($loginData->num_rows == 1) {
        echo 1;
    } else {
        echo 0;
    }
?>