<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs mb-4"> <a href="index.php">Home</a>
                        <span class="mx-1">/</span> <a href="#!">All Posts</a>
                    </div>
                </div>
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Post ID</th>
                                <th>Date & Time</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>Content</th>
                                <th>Status</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="userPostTableBody">
                            
                        </tbody>
                    </table>  
                    <script>
                        $(document).ready(function() {
                            populate('api/fetch-all-posts.php', 'post', '#userPostTableBody');
                        });
                    </script>  
                </div>
            </div>
        </div>
    </section>
</main>