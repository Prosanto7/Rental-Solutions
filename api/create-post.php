<?php session_start() ?>
<?php 
    require_once('../includes/functions.php');

    date_default_timezone_set("Asia/Dhaka");
    $postDate = date("Y-m-d H:i:s");
    $imageName = date("YmdHis");

    $file_name = $_FILES["post_image"]["name"];
    $image_array = explode('.', $file_name);

    if (sizeof($image_array) == 2) {
        $new_image_name = $imageName.'.'.$image_array[1];
        $upload_path = '../images/post/'.$new_image_name;
        move_uploaded_file($_FILES["post_image"]['tmp_name'], $upload_path);
    } else {
        $new_image_name = "";
    }

    $query = "INSERT INTO `posts` (`post_id`, `user_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES (NULL, '" . $_SESSION["user_id"] . "', '" . $_POST["post_category_id"] . "', '" . $_POST["post_title"] . "', '" . $_SESSION["user_first_name"] . " " . $_SESSION["user_last_name"] . "', '" . $postDate . "', '" . $new_image_name . "', '" . $_POST["editor_data"] . "', '" . $_POST["post_tags"] . "', '0', 'draft')";
    
    try {
        executeQuery($query);
        echo getLastID();
    } catch (Exception $e) {
        echo 0;
    }
?>