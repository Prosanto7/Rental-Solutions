<?php session_start(); ?>
<?php 
    require_once('../includes/functions.php');

    $query = "UPDATE `users` SET `user_first_name` = '{$_POST["first_name"]}'";
    $query .= ", `user_last_name` = '{$_POST["last_name"]}'";
    $query .= ", `user_date_of_birth` = '{$_POST["date_of_birth"]}'";
    $query .= ", `user_present_address` = '{$_POST["present_address"]}'";
    $query .= ", `user_contact_number` = '{$_POST["contact_number"]}'";
    $query .= ", `user_password` = '{$_POST["user_password"]}'";
    $query .= " WHERE `users`.`user_id` = " . $_SESSION["user_id"];
    
    try {
        executeQuery($query);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>