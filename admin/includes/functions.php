<?php 
    function setCenterComponent($service) {
        if ($service == "dashboard") {
            include("main-section.php");
        } else if ($service = "category") {
            include("category.php");
        }
    }
?>