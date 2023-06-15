<?php 
    function setCenterComponent($page) {
        if ($page == "dashboard") {
            include("main-section.php");
        } else if ($page == "categories") {
            include("categories.php");
        } else if ($page == "posts") {
            include("posts.php");
        } else if ($page == "tags") {
            include("tags.php");
        }
    }

    function showPostTable() {
        $allPosts = executeQuery("SELECT * FROM posts ORDER BY post_id desc");

        while ($row = $allPosts->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <?php echo $row["post_id"] ?>
                    </td>
                    <td>
                        <?php echo $row["post_date"] ?>
                    </td>
                    <td>
                        <?php echo $row["post_author"] ?>
                    </td>
                    <td>
                        <?php echo $row["post_title"] ?>
                    </td>
                    <td>
                        <?php echo $row["post_category_id"] ?>
                    </td>
                    <td>
                        <a href="">
                            <span class="success">Approve</span>
                        </a>
                    </td>
                    <td>
                        <a href="">
                            <span class="danger">Reject</span>
                        </a>
                    </td>
                    <td>
                        <a href="../post.php?id=<?php echo $row["post_id"] ?>">See Details</a>
                    </td>
                </tr>
            <?php
        }
    }

    function showCategoryTable() {
        $allCategories = executeQuery("SELECT * FROM categories");

        while ($row = $allCategories->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $row["category_id"] ?>
                </td>
                <td>
                    <?php echo $row["category_name"] ?>
                </td>
                <td>
                    <form action="<?php 
                        if (isset($_POST["delete"])) {
                            executeQuery("DELETE FROM categories WHERE category_id = " . $_POST["delete"]);
                            header("Refresh:0");
                        }
                    ?>" method="POST">
                        <button type="submit" value="<?php echo $row["category_id"] ?>" name="delete">
                            <span class="danger">Delete</span>
                        </button>
                    </form>
                </td>
            </tr>        
            <?php
        }
    }

    function shshowCategoryTableForAjax() {
        $allCategories = executeQuery("SELECT * FROM categories");
        $data = "";

        while ($row = $allCategories->fetch_assoc()) {
            $data.="<tr>";
            $data.="<td>".$row["category_id"]."</td>";
            $data.="<td>".$row["category_name"]."</td>";
            $data.="<td><button type='button' id='delete' data-id=" . $row["category_id"] .">Delete</button></td>";
            $data.="</tr>";
        }

        echo $data;
    }


    function showTagTable() {
        $allTags = executeQuery("SELECT * FROM tags");

        while ($row = $allTags->fetch_assoc()) {
            ?>
            <tr>
                <td>
                    <?php echo $row["tag_id"] ?>
                </td>
                <td>
                    <?php echo $row["tag_name"] ?>
                </td>
                <td>
                    <form action="<?php 
                        if (isset($_POST["delete"])) {
                            executeQuery("DELETE FROM tags WHERE tag_id = " . $_POST["delete"]);
                            header("Refresh:0");
                        }
                    ?>" method="POST">
                        <button type="submit" value="<?php echo $row["tag_id"] ?>" name="delete">
                            <span class="danger">Delete</span>
                        </button>
                    </form>
                </td>
            </tr>        
            <?php
        }
    }


    function addCategory($category) {

    }
?>