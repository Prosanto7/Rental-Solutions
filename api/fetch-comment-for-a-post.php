<?php 
    require_once('../includes/functions.php');

    $allComments = executeQuery("SELECT * FROM comments WHERE comment_post_id= ". $_GET["id"]);
    $data = "";

    while ($row = $allComments->fetch_assoc()) {
        $data.="<div>";
        $data.="<h3 class='text-primary mb-1'>".$row["comment_author"]."</h3>";
        $data.="<p class='text-muted small mb-0'>".$row["comment_date"]."</p>";
        $data.="</div>";
        $data.="<p class='mt-3 mb-3 pb-2'>".$row["comment_content"]."</p>";
    }

    echo $data;
?>