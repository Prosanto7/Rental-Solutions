<?php 
    require_once('../../includes/functions.php');

    $allUsers = executeQuery("SELECT * FROM users");
    $data = "";

    while ($row = $allUsers->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["user_id"]."</td>";
        $data.="<td>".$row["username"]."</td>";
        $data.="<td>".$row["user_first_name"]."</td>";
        $data.="<td>".$row["user_last_name"]."</td>";
        $data.="<td>".$row["user_email"]."</td>";
        $data.="<td><button class='danger' type='button' id='delete' data-id=" . $row["user_id"] .">Delete</button></td>";
        $data.="</tr>";
    }

    echo $data;
?>