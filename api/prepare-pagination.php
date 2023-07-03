
<?php
    $data = "";
    $data .= "<li class='page-item'><a class='page-link' href='#'>Previous</a></li>";
    
    
    $postCount = $_POST["count"];
   

    if ($_POST["width"] > 700) {
        if ($postCount < 10) {
            for ($i = 1; $i <= $postCount; $i++) {
                $data .= printLink($i, $data);
            }  
        } else {
            for ($i = 1; $i <= 4; $i++) {
                $data .= printLink($i, $data);
            }

            $data .= "<li class='page-item'><a class='page-link'>..</a></li>";


            for ($i = $postCount - 4; $i <= $postCount; $i++) {
                $data .= printLink($i, $data);
            }
           
        }
    } else {
        if ($postCount < 5) {
            for ($i = 1; $i <= $postCount; $i++) {
                $data .= printLink($i, $data);
            }  
        } else {
            for ($i = 1; $i <= 5; $i++) {
                $data .= printLink($i, $data);
            }
        }
    }
    $data .= "<li class='page-item'><a class='page-link' href='#'>Next</a></li>";
    echo $data;
?>

<?php 
    function printLink($i) {
        if ($i == $_GET["no"]) {
            return "<li class='page-item active'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
        } else {
            return "<li class='page-item'><a class='page-link' href='index.php?page=home&no={$i}'>{$i}</a></li>";
        }
    }
?>
