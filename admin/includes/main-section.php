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

        <div class="post-ratio">
            <span class="material-symbols-sharp">safety_divider</span>
            <div class="middle">
                <div class="left">
                    <h3>User/Post Ratio</h3>
                    <h1>34%</h1>
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

        <div class="total-posts">
            <span class="material-symbols-sharp">summarize</span>
            <div class="middle">
                <div class="left">
                    <h3>Total Posts</h3>
                    <h1><?php echo executeQuery("SELECT * FROM `posts`")->num_rows ?></h1>
                </div>
            </div>
        </div> 
    </div>
</main>