<?php 
    require_once('../../includes/functions.php');
    try {
        executeQuery("UPDATE `posts` SET post_status = 'approved' WHERE post_id = ".$_POST['id']); 
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>