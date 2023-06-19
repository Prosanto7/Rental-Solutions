<?php 
    require_once('../includes/functions.php');

    $allCategories = executeQuery("SELECT * FROM categories");
    $data = "";

    while ($row = $allCategories->fetch_assoc()) {
        $data.="<option value='".$row["category_id"]."'>". $row["category_name"] ."</option>";
    }

    echo $data;
?>