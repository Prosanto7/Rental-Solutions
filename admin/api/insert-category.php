<?php 
    require_once('../../includes/functions.php');
    try {
        executeQuery("INSERT INTO categories VALUES (null, '".$_POST['category_name']."')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>