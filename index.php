<?php
    require_once('includes/header.php');
    require_once('includes/functions.php');
    require_once('includes/navigation.php');

    if (isset($_GET["page"])) {
        setCenterView($_GET["page"]);
    } else {
        setCenterView("");
    }
    
    require_once('includes/footer.php');
?>