<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
    if (!isset($_SESSION["admin"])) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Material CDN -->
        <link href="https://fonts.googleapis.com/css?family=Material+Symbols+Sharp" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body>

    