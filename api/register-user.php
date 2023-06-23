<?php 
    require_once('../includes/functions.php');

    $password = crypt(real_escape($_POST['user_password']), '$2y$10$iusesomecrazystrings22');

    try {
        executeQuery("INSERT INTO `users` VALUES (null, '". real_escape($_POST['user_name'])."', '". real_escape($_POST['date_of_birth'])."', '".real_escape($_POST['present_address'])."', '" . real_escape($_POST["contact_number"]). "', '".$password."', '". real_escape($_POST['first_name'])."', '".real_escape($_POST['last_name'])."', '".real_escape($_POST['email_address'])."')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>