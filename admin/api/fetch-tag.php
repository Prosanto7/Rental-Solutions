<?php 
    require_once('../../includes/functions.php');

    $allTags = executeQuery("SELECT * FROM tags");
    $data = "";

    while ($row = $allTags->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["tag_id"]."</td>";
        $data.="<td>".$row["tag_name"]."</td>";
        $data.="<td><button class='danger' type='button' id='delete' data-id=" . $row["tag_id"] .">Delete</button></td>";
        $data.="</tr>";
    }

    echo $data;
?>