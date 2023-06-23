<?php session_start(); ?>

<?php 
    require_once('../includes/functions.php');

    $username = real_escape($_POST['user_name']);
    $password = real_escape($_POST['user_password']);

    $loginData = executeQuery("SELECT * FROM users WHERE BINARY username = '" . $username . "' AND user_password = '" . crypt($password, '$2y$10$iusesomecrazystrings22')."'");
   
    if ($loginData->num_rows == 1) {
        $row = $loginData->fetch_assoc();
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["user_first_name"] = $row["user_first_name"];
        $_SESSION["user_last_name"] = $row["user_last_name"];
        $_SESSION["user_email"] = $row["user_email"];
        echo 1;
    } else {
        echo 0;
    }
?>