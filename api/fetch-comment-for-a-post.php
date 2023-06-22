<?php session_start(); ?>
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

        if (isset($_SESSION["user_id"])) {
            $isAuthor = executeQuery("SELECT * FROM `posts` WHERE posts.post_id = ". $_GET["id"]." AND posts.user_id = " . $_SESSION["user_id"])->num_rows;
            $isCommentor = executeQuery("SELECT * FROM `comments` WHERE comments.comment_post_id = ". $_GET["id"]." AND comments.user_id = " . $_SESSION["user_id"]. " AND comments.comment_id = " . $row["comment_id"])->num_rows;

            if ($isAuthor > 0 || $isCommentor > 0) {
                $data.="<div class='d-flex flex-row-reverse'>";
                $data.="<button class='btn btn-danger mb-3' type='button' id='delete' data-id=" . $row["comment_id"] .">Delete</button>";
                $data.="</div>";
            }
        }
    }

    echo $data;
?>