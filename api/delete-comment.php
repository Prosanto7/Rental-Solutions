<?php 
    require_once('../includes/functions.php');

    try {
        executeQuery("DELETE FROM comments WHERE comment_id=".$_POST["id"]);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
 
?>