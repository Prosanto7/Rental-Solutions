<div class="container">
    <aside>
        <div class="top">
            <div class="logo">
                <img id="logoImage" src="images/logo.png" alt="Rental Solutions">
            </div>
            <div class="close" id="close-btn">
                <span class="material-symbols-sharp">close</span>
            </div>
        </div>

        <div class="sidebar">
            <a onclick="location.href='index.php?page=dashboard'" 
                <?php 
                    if($_GET["page"] == "dashboard") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">grid_view</span>
                <h3>Dashboard</h3>
            </a>
            <a onclick="location.href='index.php?page=posts'"
                <?php 
                    if($_GET["page"] == "posts") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">post</span>
                <h3>Posts</h3>
                <span class="post-count">26</span>
            </a>
            <a onclick="location.href='index.php?page=categories'"
                <?php 
                    if($_GET["page"] == "categories") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">category</span>
                <h3>Categories</h3>
            </a>
            <a onclick="location.href='index.php?page=tags'"
                <?php 
                    if($_GET["page"] == "tags") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">sell</span>
                <h3>Tags</h3>
            </a>
            <a onclick="location.href='index.php?page=users'"
                <?php 
                    if($_GET["page"] == "users") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">group</span>
                <h3>Users</h3>
            </a>
            <a onclick="location.href='index.php?page=messages'"
                <?php 
                    if($_GET["page"] == "messages") {
                        echo "class='active'";
                    }
                ?>>
                <span class="material-symbols-sharp">mail</span>
                <h3>Messages</h3>
            </a>
            <a href="../index.php">
                <span class="material-symbols-sharp">web</span>
                <h3>See website</h3>
            </a>
            <a href="api/logout.php">
                <span class="material-symbols-sharp">logout</span>
                <h3>Log Out</h3>
            </a>
        </div>
    </aside>
