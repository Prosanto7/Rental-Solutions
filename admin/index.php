<?php
    require_once('includes/header.php');
    require_once('includes/functions.php');
    require_once('includes/navigation.php');
  
    if (isset($_GET["service"])) {
        setCenterComponent($_GET["service"]);
    }
    
    require_once('includes/footer.php');
?>