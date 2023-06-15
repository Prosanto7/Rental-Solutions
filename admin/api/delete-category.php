<?php 
    require_once('../../includes/functions.php');

    $sql = "DELETE FROM categories WHERE category_id=".$_POST["id"];
    executeQuery($sql);
?>