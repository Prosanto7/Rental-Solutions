<?php 
    $pageTitle = "Registration";
    $message = "Registration completed! Please login now.";
    $url = "register-user.php";
    $action = "Register";

    if ($_GET["page"] == "profile") {
        $row = executeQuery("SELECT * FROM users WHERE user_id = " . $_SESSION["user_id"])->fetch_assoc();
        $pageTitle = "Profile";
        $message = "Profile updated successfully.";
        $url = "update-profile.php";
        $action = "Update Profile";
    }
?>
<main>
    <div class="container">
        <h2 class="text-center mt-5">User <?php echo $pageTitle ?></h2>

        <form class="form" id="userForm" autocomplete="off">
            <label class="form-label mt-3">First Name</label>
            <input type="text" class="form-control" placeholder="Enter your first name..." name="first_name" id="firstName"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_first_name']}'";
                }
            ?>>

            <label class="form-label mt-3">Last Name</label>
            <input type="text" class="form-control" placeholder="Enter your last name..." name="last_name" id="lastName"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_last_name']}'";
                }
            ?>>

            <label class="form-label mt-3">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter email address..." name="email_address" id="emailAddress"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_email']}' disabled";
                }
            ?>>

            <label class="form-label mt-3">Date of birth</label>
            <input type="date" class="form-control" placeholder="Enter date of birth..." name="date_of_birth" id="dateOfBirth"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_date_of_birth']}'";
                }
            ?>>

            <label class="form-label mt-3">Present address</label>
            <input type="text" class="form-control" placeholder="Enter present address..." name="present_address" id="presentAddress"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_present_address']}'";
                }
            ?>>

            <label class="form-label mt-3">Contact Number</label>
            <input type="text" class="form-control" placeholder="Enter contact number..." name="contact_number" id="contactNumber"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_contact_number']}'";
                }
            ?>>

            <label class="form-label mt-3">Username</label>
            <input type="text" class="form-control" placeholder="Enter username..." name="user_name" id="userName"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['username']}' disabled";
                }
            ?>>

            <label class="form-label mt-3"><?php if (isset($_SESSION["user_id"])) { echo "Encrypted"; } ?> Password</label>
            <input type="password" class="form-control" placeholder="Enter password..." name="user_password" id="userPassword"
            <?php 
                if (isset($_SESSION["user_id"])) {
                    echo "value='{$row['user_password']}'";
                }
            ?>>

            <input type="submit" value="<?php echo $action ?>" class="btn btn-primary mt-3" id="button">
        </form>
        <script>
            $(document).ready(function() {

                $(document).on("click", "#button", function(e) {
                    e.preventDefault();

                    if ($("#firstName").val() == "") {
                        showAlertMessage("Error", "Please enter your first name...");
                        return;
                    }

                    if ($("#lastName").val() == "") {
                        showAlertMessage("Error", "Please enter your last name...");
                        return;
                    }

                    if ($("#emailAddress").val() == "") {
                        showAlertMessage("Error", "Please enter your email address...");
                        return;
                    }

                    if ($("#dateOfBirth").val() == "") {
                        showAlertMessage("Error", "Please select your date of birth...");
                        return;
                    }

                    if ($("#presentAddress").val() == "") {
                        showAlertMessage("Error", "Please enter your present address...");
                        return;
                    }

                    if ($("#contactNumber").val() == "") {
                        showAlertMessage("Error", "Please enter your contact number...");
                        return;
                    }

                    if ($("#userName").val() == "") {
                        showAlertMessage("Error", "Please enter your username...");
                        return;
                    }

                    if ($("#userPassword").val() == "") {
                        showAlertMessage("Error", "Please enter your password...");
                        return;
                    }

                    var form = new FormData(document.getElementById('userForm'));

                    $.ajax({
                        url: 'api/<?php echo $url ?>',
                        type: 'post',
                        data: form,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            if (data == 1) {
                                showAlertMessage("Success", "<?php echo $message ?>");
                            } else {
                                showAlertMessage("Error", "Username or email already exists...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>