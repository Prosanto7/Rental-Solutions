<?php 
    require_once('../includes/functions.php');

    try {
        executeQuery("INSERT INTO `users` VALUES (null, '".$_POST['user_name']."', '".$_POST['date_of_birth']."', '".$_POST['present_address']."', '" . $_POST["contact_number"] . "', '".$_POST['user_password']."', '".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['email_address']."', '')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>