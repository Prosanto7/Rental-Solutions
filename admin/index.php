<?php
    require_once('includes/header.php');
    require_once('../includes/functions.php');
    require_once('includes/functions.php');
    require_once('includes/navigation.php');
  
    if (isset($_GET["page"])) {
        setCenterComponent($_GET["page"]);
    }
    
    require_once('includes/footer.php');
?>