<?php 
    function setCenterComponent($page) {
        if ($page == "dashboard") {
            include("main-section.php");
        } else if ($page == "categories") {
            include("categories.php");
        } else if ($page == "posts") {
            include("posts.php");
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
                    <a href="">
                        <span class="danger">Delete</span>
                    </a>
                </td>
            </tr>        
            <?php
        }
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
                    <a href="">
                        <span class="danger">Delete</span>
                    </a>
                </td>
            </tr>        
            <?php
        }
    }
?>