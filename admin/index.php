<?php
    require_once('includes/header.php');
    require_once('../includes/functions.php');
    require_once('includes/functions.php');
  
    if (isset($_GET["page"])) {
        require_once('includes/navigation.php');
        setCenterComponent($_GET["page"]);
    } else {
        header("Location: index.php?page=dashboard");
    }
    
    require_once('includes/top-navigation.php');
    require_once('includes/footer.php');
?>