<style>
    .container{
        grid-template-columns: 15rem auto 8rem;
    }
</style>

<main>
    <div class="styledTable posts">
        <h2>All Posts</h2>
        <table id="postTable">
            <thead>
                <tr>
                    <th>Post ID</th>
                    <th>Date & Time</th>
                    <th>Posted By</th>
                    <th>Post Title</th>
                    <th>Post Category</th>
                    <th>Approve</th>
                    <th>Reject</th>
                    <th>See Details</th>
                </tr>
            </thead>
            <tbody id="postTableBody">
                
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-post.php', 'post', '#postTableBody');
                deleteRow('api/delete-post.php', 'api/fetch-post.php', 'post', '#postTableBody');
            });
        </script>
    </div>
</main>