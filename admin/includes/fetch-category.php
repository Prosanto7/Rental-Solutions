<?php 
    require_once('../../includes/functions.php');

    $allCategories = executeQuery("SELECT * FROM categories");
    $data = "";

    while ($row = $allCategories->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["category_id"]."</td>";
        $data.="<td>".$row["category_name"]."</td>";
        $data.="<td><button type='button' id='delete' data-id=" . $row["category_id"] .">Delete</button></td>";
        $data.="</tr>";
    }

    echo $data;
?>