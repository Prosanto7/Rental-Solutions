<?php 
    require_once('../includes/functions.php');
    date_default_timezone_set("Asia/Dhaka");
    $commentDate = date("Y-m-d H:i:s");

    try {
        executeQuery("INSERT INTO comments VALUES (null, ".$_GET['id'].", 'Prosanto DEB', '', '" . $_POST["comment"] . "', '$commentDate')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>