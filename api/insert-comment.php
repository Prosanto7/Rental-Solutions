<?php session_start(); ?>
<?php 
    require_once('../includes/functions.php');
    date_default_timezone_set("Asia/Dhaka");
    $commentDate = date("Y-m-d H:i:s");

    try {
        executeQuery("INSERT INTO `comments` VALUES (null, '" . $_SESSION["user_id"] . "',".$_GET['id'].", '" . $_SESSION["user_first_name"] . " " . $_SESSION["user_last_name"] . "', '" . $_SESSION["user_email"] . "', '" . $_POST["comment"] . "', '$commentDate')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>