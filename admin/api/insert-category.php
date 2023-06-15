<?php 
    require_once('../../includes/functions.php');
    if(executeQuery("INSERT INTO categories VALUES (null, '".$_POST['category_name']."')")) {
        echo "true";
    } else {
        echo "false";
    }
?>