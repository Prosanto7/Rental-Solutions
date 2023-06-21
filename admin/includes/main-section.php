<main>
    <h1>Dashboard</h1>
    <div class="insights">
        <div class="approved-posts">
            <span class="material-symbols-sharp">check_circle</span>
            <div class="middle">
                <div class="left">
                    <h3>Approved Posts</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `posts` WHERE post_status = 'approved'")->num_rows ?></h1>
                </div>
            </div>
        </div> 

        <div class="pending-posts">
            <span class="material-symbols-sharp">hourglass_top</span>
            <div class="middle">
                <div class="left">
                    <h3>Pending Posts</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `posts` WHERE post_status = 'draft'")->num_rows ?></h1>
                </div>
            </div>
        </div> 

        <div class="total-users">
            <span class="material-symbols-sharp">groups</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Users</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `users`")->num_rows ?></h1>
                </div>
            </div>
        </div> 

        <div class="post-ratio">
            <span class="material-symbols-sharp">comment</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Comments</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `comments`")->num_rows ?></h1>
                </div>
            </div>
        </div> 

        <div class="post-ratio">
            <span class="material-symbols-sharp">category</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Categories</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `categories`")->num_rows ?></h1>
                </div>
            </div>
        </div> 

        <div class="post-ratio">
            <span class="material-symbols-sharp">sell</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Tags</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `tags`")->num_rows ?></h1>
                </div>
            </div>
        </div> 
    </div>
</main>