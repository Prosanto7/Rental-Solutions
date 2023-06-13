<style>
    .container{
        grid-template-columns: 15rem auto 0rem;
    }
</style>

<main>
    <div class="posts">
        <h2>All Posts</h2>
        <table>
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
            <tbody>
                <?php showPostTable(); ?>
            </tbody>
        </table>
    </div>
</main>