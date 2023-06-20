<?php 
    require_once('../includes/functions.php');

    $allComments = executeQuery("SELECT * FROM comments");
    $data = "";

    while ($row = $allComments->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["comment_id"]."</td>";
        $data.="<td>".$row["comment_post_id"]."</td>";
        $data.="<td>".$row["comment_date"]."</td>";
        $data.="<td>".$row["comment_author"]."</td>";
        $data.="<td>".$row["comment_author_email"]."</td>";
        $data.="<td>". substr($row["comment_content"], 0, 25)."...</td>";
        $data.="<td><a href='index.php?page=post&id={$row["comment_post_id"]}'>See Post</a></td>";
        $data.="</tr>";
    }

    echo $data;
?>