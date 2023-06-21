<main>
    <div class="container">
        <h2 class="text-center mt-5">Login</h2>
        <form class="form" autocomplete="off" id="loginForm">
            <label class="form-label mt-3">Username</label>
            <input type="text" class="form-control" placeholder="Enter username..." name="user_name">
            <label class="form-label mt-3">Password</label>
            <input type="password" class="form-control" placeholder="Enter password..." name="user_password">
            <input type="submit" value="Login" class="btn btn-primary mt-3" id="loginButton">
        </form>
        <script>
            $(document).ready(function() {
                $(document).on("click", "#loginButton", function(e) {
                    e.preventDefault();

                    var form = new FormData(document.getElementById('loginForm'));

                    $.ajax({
                        url: 'api/validate-login.php',
                        type: 'post',
                        data: form,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            if (data == 1) {
                                showAlertMessage("Success", "Redirecting to Home page");
                                setTimeout(
                                    function() {
                                        window.location.href = "index.php";
                                    }, 1000);
                                
                            } else {
                                showAlertMessage("Error", "Please enter valid user name and password...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>