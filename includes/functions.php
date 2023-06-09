<?php require_once('db.php'); ?>

<?php
    function executeQuery($sql) {
        global $connection;
        return $connection->query($sql);
    }

    function showAllCategories() {
        $allTags = executeQuery("SELECT * FROM categories");
        while ($row = $allTags->fetch_assoc()) {
            echo "<a class='dropdown-item' href=''>" . $row["category_name"] . "</a>";
        }
    }

    function showAllTags() {
        $allTags = executeQuery("SELECT * FROM tags");
        while ($row = $allTags->fetch_assoc()) {
            echo "<li><a href=''>" . $row["tag_name"] . "</a></li>";
        }
    }

    function showHomePagePosts() {
        $allPosts = executeQuery("SELECT * FROM posts");
        while ($row = $allPosts->fetch_assoc()) {
            showSinglePost($row);

            $anotherRow = $allPosts->fetch_assoc();

            if ($anotherRow) {
                showSinglePost($anotherRow);
            }
        }
    }

    function showTimeDifference($time) {
        date_default_timezone_set("Asia/Dhaka");

        $timeDifference = time() - strtotime($time);

        if ($timeDifference >= 0 & $timeDifference < 60) {
            return $timeDifference . "seconds";
        } else if ($timeDifference >= 60 & $timeDifference < 120) {
            return "1 mintue";
        } else if ($timeDifference >= 120 & $timeDifference < 3600) {
            return round($timeDifference / 60) . " mintues";
        } else if ($timeDifference >= 3600 & $timeDifference < (3600 * 2)) {
            return "1 hour";
        } else if ($timeDifference >= (3600 * 2) & $timeDifference < 86400) {
            return round($timeDifference / 3600) . " hours";
        } else if ($timeDifference >= 86400  & $timeDifference < (86400 * 2)) {
            return "1 day";
        } else {
            return round($timeDifference / 86400) . " days";
        }
    }

    function showTags($tags) {
        $tagArray = explode((","), $tags);

        foreach ($tagArray as $tag) {
            echo "<li class='mr-2'> <a href=''> {$tag} </a> </li>";
        }
    }

    function getFormattedDate($date) {
        return date("d M y", strtotime($date));
    }

    function showSinglePost($row) {
        ?>
            <div class="col-md-6 mb-4">
                <article class="card article-card article-card-sm h-100">
                    <a href="post.php?id=<?php echo $row["post_id"]; ?>">
                        <div class="card-image">
                            <div class="post-info"> <span class="text-uppercase"><?php echo getFormattedDate($row["post_date"]) ?></span>
                                <span class="text-uppercase"><?php echo showTimeDifference($row["post_date"]) ?> ago</span>
                            </div>
                            <img loading="lazy" decoding="async" src="images/post/<?php echo $row["post_image"]?>" alt="Post Thumbnail" class="w-100">
                        </div>
                    </a>
                    <div class="card-body px-0 pb-0">
                        <ul class="post-meta mb-2">
                            <?php showTags($row["post_tags"]) ?>
                        </ul>
                        <h2>
                            <a class="post-title" href="post.php?id=<?php echo $row["post_id"]; ?>"><?php echo $row["post_title"] ?></a>
                        </h2>
                        <p class="card-text" style="max-height:100px; overflow:hidden"><?php echo $row["post_content"] ?></p>
                        <div class="content"> 
                            <a class="read-more-btn" href="post.php?id=<?php echo $row["post_id"]; ?>">See Full Post</a>
                        </div>
                    </div>
                </article>
            </div>
        <?php
    }

    function showSimilarPosts() {
        $similarPosts = executeQuery("SELECT * FROM posts LIMIT 4");
         
        while ($row = $similarPosts->fetch_assoc()) {
            ?>
				<a class="media align-items-center" href="post.php?id=<?php echo $row["post_id"]; ?>">
					<img loading="lazy" decoding="async" src="images/post/<?php echo $row["post_image"]; ?>"
									alt="Post Thumbnail" class="w-100">
					<div class="media-body ml-3">
                    <h3 style="margin-top:-5px"><?php echo $row["post_title"]; ?></h3>
                    <p class="mb-0 small" style="max-height: 60px; overflow:hidden"><?php echo $row["post_content"]; ?></p>
					</div>
				</a>
            <?php 
        }                         
    }
?>