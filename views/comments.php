<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs mb-4"> <a href="index.php">Home</a>
                        <span class="mx-1">/</span> <a href="#!">All Comments</a>
                    </div>
                </div>
                <div class="col-12">
                    <h2 class="text-center mb-5">Other's Comments</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Comment ID</th>
                                <th>Post ID</th>
                                <th>Date & Time</th>
                                <th>Author Name</th>
                                <th>Author Email</th>
                                <th>Content</th>
                                <th>See Post</th>
                            </tr>
                        </thead>
                        <tbody id="commentTableBody">
                            
                        </tbody>
                    </table>  
                    <script>
                        $(document).ready(function() {
                            populate('api/fetch-all-comments.php?type=other', 'post', '#commentTableBody');
                        });
                    </script>  
                </div>

                <div class="col-12">
                    <h2 class="text-center mb-5">My Comments</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Comment ID</th>
                                <th>Post ID</th>
                                <th>Date & Time</th>
                                <th>Content</th>
                                <th>See Post</th>
                            </tr>
                        </thead>
                        <tbody id="ownCommentTableBody">
                            
                        </tbody>
                    </table>  
                    <script>
                        $(document).ready(function() {
                            populate('api/fetch-all-comments.php?type=own', 'post', '#ownCommentTableBody');
                        });
                    </script>  
                </div>
            </div>
        </div>
    </section>
</main>