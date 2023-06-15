<?php 
    require_once('../../includes/functions.php');
    try {
        executeQuery("INSERT INTO tags VALUES (null, '".$_POST['tag_name']."')"); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>