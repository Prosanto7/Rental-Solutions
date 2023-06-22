<?php 
    require_once('../../includes/functions.php');

    echo executeQuery("SELECT * FROM posts WHERE post_status = '" . $_GET["status"] . "'")->num_rows;
?>