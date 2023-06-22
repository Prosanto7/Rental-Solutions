<?php 
    require_once('../includes/functions.php');

    date_default_timezone_set("Asia/Dhaka");
    $postDate = date("Y-m-d H:i:s");
    $imageName = date("YmdHis");

    $query = "UPDATE `posts` SET `post_category_id` = {$_POST["post_category_id"]}";
    $query .= ", `post_title` = '{$_POST["post_title"]}'";
    

    $file_name = $_FILES["post_image"]["name"];
    $image_array = explode('.', $file_name);

    if (sizeof($image_array) == 2) {
        $new_image_name = $imageName.'.'.$image_array[1];
        $upload_path = '../images/post/'.$new_image_name;
        move_uploaded_file($_FILES["post_image"]['tmp_name'], $upload_path);
        $query .= ", `post_image` = '{$new_image_name}'";
    }

    $query .= ", `post_content` = '{$_POST["editor_data"]}'";
    $query .= ", `post_tags` = '{$_POST["post_tags"]}'";
    $query .= " WHERE `posts`.`post_id` = " . $_GET["id"];
    

    try {
        executeQuery($query);
        echo 1;
    } catch (Exception $e) {
        echo 0;
    }
?>