<main>
    <div class="container">
        <h2 class="text-center mt-5">Login</h2>
        <form class="form" autocomplete="off">
            <label class="form-label mt-3">Username</label>
            <input type="text" class="form-control" placeholder="Enter username...">
            <label class="form-label mt-3">Password</label>
            <input type="password" class="form-control" placeholder="Enter password...">
            <input type="submit" value="Login" class="btn btn-primary mt-3" id="login">
        </form>
        <script>
            $(document).ready(function() {
                $(document).on("click", "#postCommentButton", function(e) {
                    $.ajax({
                        url: 'api/validate-login.php',
                        type: 'post',
                        data: form,
                        success: function(data) {
                            
                        }
                    });
                });
            });
        </script>
    </div>
</main>