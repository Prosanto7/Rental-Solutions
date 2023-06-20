<style>
    .container {
        grid-template-columns: 15rem auto 8rem;
    }
</style>

<main>
    <div class="styledTable posts">
        <h2>All Users</h2>
        <table id="userTable">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>User First Name</th>
                    <th>User Last Name</th>
                    <th>User Email</th>
                    <th>User Date of Birth</th>
                    <th>User Present Address</th>
                    <th>User Contact Info</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="userTableBody">

            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                populate('api/fetch-user.php', 'post', '#userTableBody');
                deleteRow('api/delete-user.php', 'api/fetch-user.php', 'post', '#userTableBody');
            });
        </script>
    </div>
</main>