<?php session_start() ?>
<?php 
    require_once('../includes/functions.php');

    $allposts = executeQuery("SELECT * FROM posts WHERE user_id = " . $_SESSION["user_id"]);
    $data = "";

    while ($row = $allposts->fetch_assoc()) {
        $data.="<tr>";
        $data.="<td>".$row["post_id"]."</td>";
        $data.="<td>".$row["post_date"]."</td>";
        $data.="<td>".$row["post_title"]."</td>";
        $data.="<td>".getCategoryByID($row["post_category_id"])."</td>";
        $data.="<td>".$row["post_tags"]."</td>";
        $data.="<td>". substr($row["post_content"], 0, 25)."...</td>";
        $data.="<td>".$row["post_status"]."</td>";
        $data.="<td><a href='index.php?page=post&id={$row["post_id"]}'>View Post</a></td>";        
        $data.="<td><a href='index.php?page=edit-post&id={$row["post_id"]}'>Edit Post</a></td>";
        $data.="<td><button class='btn btn-danger' type='button' id='delete' data-id=" . $row["post_id"] .">Delete</button></td>";   
        $data.="</tr>";
    }

    echo $data;
?>