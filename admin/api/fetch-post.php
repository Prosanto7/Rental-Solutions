<?php 
    require_once('../../includes/functions.php');

    $allPosts = executeQuery("SELECT * FROM posts WHERE post_status = '" . $_GET["status"] . "'");
    $data = "";

    while ($row = $allPosts->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["post_id"]."</td>";
        $data.="<td>".$row["post_date"]."</td>";
        $data.="<td>".$row["post_author"]."</td>";
        $data.="<td>".$row["post_title"]."</td>";
        $data.="<td>". getCategoryByID($row["post_category_id"]). "</td>";

        if ($_GET["status"] == "draft") {
            $data.="<td><button class='success' type='button' id='approve' data-id=" . $row["post_id"] .">Approve</button></td>";
            $data.="<td><button class='danger' type='button' id='delete' data-id=" . $row["post_id"] .">Reject</button></td>";    
        } else {
            $data.="<td><button class='danger' type='button' id='delete' data-id=" . $row["post_id"] .">Delete</button></td>";    
        }

        $data.="<td><a href='../index.php?page=post&id={$row['post_id']}'>See Details</a></td>";
        $data.="</tr>";
    }

    echo $data;
?>