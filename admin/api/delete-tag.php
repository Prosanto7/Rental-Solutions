<?php 
    require_once('../../includes/functions.php');

    try {
        executeQuery("DELETE FROM tags WHERE tag_id=".$_POST["id"]);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
 
?>