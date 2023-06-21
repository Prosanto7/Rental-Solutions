<?php session_start(); ?>

<?php
    require_once('../includes/functions.php');

    $username = real_escape($_POST['user_name']);
    $password = real_escape($_POST['user_password']);

    if ($username == "admin" && $password == "admin") {
        $_SESSION["admin"] = "admin";
        echo 1;
    } else {
        echo 0;
    }
?>