
<?php
    $data = "";
    $data .= "<li class='page-item'><a class='page-link' href='#'>Previous</a></li>";
    
    
    $postCount = $_POST["count"];

    if ($_POST["width"] > 700) {
       
        if ($postCount < 10) {
            $data .= "<li class='page-item'><a class='page-link' href='#'>{$postCount}</a></li>";
            for ($i = 1; $i <= $postCount; $i++) {
                if ((isset($_GET["no"]) && $i == $_GET["no"]) || (!isset($_GET["no"]) && $i == 1)) {
                    $data .= "<li class='page-item active'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                } else {
                    $data .= "<li class='page-item'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                }
            }
        } else {
            for ($i = 1; $i <= 4; $i++) {
                if ((isset($_GET["no"]) && $i == $_GET["no"]) || (!isset($_GET["no"]) && $i == 1)) {
                    $data .= "<li class='page-item active'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                } else {
                    $data .= "<li class='page-item'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                }
            }

            $data .= "<li class='page-item'><a class='page-link'>..</a></li>";


            for ($i = $postCount - 4; $i <= $postCount; $i++) {
                if ((isset($_GET["no"]) && $i == $_GET["no"]) || (!isset($_GET["no"]) && $i == 1)) {
                    $data .= "<li class='page-item active'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                } else {
                    $data .= "<li class='page-item'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
                }
            }
        }
    }
    $data .= "<li class='page-item'><a class='page-link' href='#'>Next</a></li>";
    echo $data;
?>
