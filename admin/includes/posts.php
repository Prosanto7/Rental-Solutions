<style>
    .container {
        grid-template-columns: 15rem auto 8rem;
    }
</style>

<main>
    <div class="styledTable posts">
        <h2>Pending Posts</h2>
        <table id="pendingPostTable">
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
            <tbody id="pendingPostTableBody">

            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-post.php?status=draft', 'post', '#pendingPostTableBody');
                deleteRow('api/delete-post.php', 'api/fetch-post.php?status=draft', 'post', '#pendingPostTableBody');
            });
        </script>
    </div>

    <div class="styledTable posts">
        <h2>Approved Posts</h2>
        <table id="approvedPostTable">
            <thead>
                <tr>
                    <th>Post ID</th>
                    <th>Date & Time</th>
                    <th>Posted By</th>
                    <th>Post Title</th>
                    <th>Post Category</th>
                    <th>Action</th>
                    <th>See Details</th>
                </tr>
            </thead>
            <tbody id="approvedPostTableBody">

            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-post.php?status=approved', 'post', '#approvedPostTableBody');
                deleteRow('api/delete-post.php', 'api/fetch-post.php?status=approved', 'post', '#approvedPostTableBody');
                $(document).on("click", "#approve", function() {
                    var id = $(this).data("id");

                    $.ajax({
                        url: 'api/approve-post.php',
                        type: 'post',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            populate('api/fetch-post.php?status=approved', 'post', '#approvedPostTableBody');
                            populate('api/fetch-post.php?status=draft', 'post', '#pendingPostTableBody');

                            if (data == 1) {
                                showAlertMessage("Success", "Post approved successfully...");
                            } else {
                                showAlertMessage("Error", "Post could not be approved.");
                            }
                        }
                    });
                })
            });
        </script>
    </div>
</main>