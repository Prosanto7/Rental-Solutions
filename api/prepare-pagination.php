
<?php
    $data = "";
 
    if ($_GET["no"] != 1) {
        $data .= "<li class='page-item'><a class='page-link' href='/Rental-Solutions/page/". ($_GET["no"] - 1) ."'>Previous</a></li>";
    }
    
    $pageCount = $_POST["count"];
   

    if ($_POST["width"] > 700) {
        if ($pageCount < 10) {
            for ($i = 1; $i <= $pageCount; $i++) {
                $data .= printLink($i);
            }  
        } else {
            $start = 1; $end = 4;

            if ($_GET["no"] >= 4) {
                $start = $_GET["no"] - 2;
                $end = $_GET["no"] + 1;
            }

            if ($_GET["no"] >= $pageCount - 4) {
                $start =  $pageCount - 7;
                $end =  $pageCount - 4;
            }

            for ($i = $start; $i <= $end; $i++) {
                $data .= printLink($i);
            }

            $data .= "<li class='page-item'><a class='page-link'>..</a></li>";


            for ($i = $pageCount - 3; $i <= $pageCount; $i++) {
                $data .= printLink($i);
            }
           
        }
    } else {
        if ($pageCount < 5) {
            for ($i = 1; $i <= $pageCount; $i++) {
                $data .= printLink($i);
            }  
        } else {
            $start = 1; $end = 5;

            if ($_GET["no"] >= 4) {
                $start = $_GET["no"] - 2;
                $end = $_GET["no"] + 1;
            }

            if ($_GET["no"] == $pageCount) {
                $start = $pageCount - 3;
                $end = $pageCount;
            }

            for ($i = $start; $i <= $end; $i++) {
                $data .= printLink($i);
            }
        }
    }

    if ($_GET["no"] != $pageCount) {
        $data .= "<li class='page-item'><a class='page-link' href='/Rental-Solutions/page/". ($_GET["no"] + 1) ."'>Next</a></li>";
    }

    echo $data;
?>

<?php 
    function printLink($i) {
        if ($i == $_GET["no"]) {
            return "<li class='page-item active'><a class='page-link' href='/Rental-Solutions/page/{$i}'>{$i}</a></li>";
        } else {
            return "<li class='page-item'><a class='page-link' href='/Rental-Solutions/page/{$i}'>{$i}</a></li>";
        }
    }
?>
