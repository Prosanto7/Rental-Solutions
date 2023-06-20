<main>
    <div class="container">
        <h2 class="text-center mt-5">User Registration</h2>
        <form class="form" id="registrationForm">
            <label class="form-label mt-3">First Name</label>
            <input type="text" class="form-control" placeholder="Enter your first name..." name="first_name" id="firstName">

            <label class="form-label mt-3">Last Name</label>
            <input type="text" class="form-control" placeholder="Enter your last name..." name="last_name" id="lastName">

            <label class="form-label mt-3">Email Address</label>
            <input type="email" class="form-control" placeholder="Enter email address..." name="email_addres" id="emailAddress">

            <label class="form-label mt-3">Date of birth</label>
            <input type="date" class="form-control" placeholder="Enter date of birth..." name="date_of_birth" id="dateOfBirth">

            <label class="form-label mt-3">Present address</label>
            <input type="text" class="form-control" placeholder="Enter present address..." name="present_address" id="presentAddress">

            <label class="form-label mt-3">Contact Number</label>
            <input type="text" class="form-control" placeholder="Enter contact number..." name="contact_number" id="contactNumber">

            <label class="form-label mt-3">Username</label>
            <input type="text" class="form-control" placeholder="Enter username..." name="user_name" id="userName">

            <label class="form-label mt-3">Password</label>
            <input type="password" class="form-control" placeholder="Enter password..." name="user_password" id="userPassword">
            
            <input type="submit" value="Login" class="btn btn-primary mt-3" id="loginButton">
        </form>
        <script>
            $(document).ready(function() {
                
                $(document).on("click", "#loginButton", function(e) {
                    e.preventDefault();

                    console.log("HI");

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

                    var form = new FormData(document.getElementById('registrationForm'));

                    $.ajax({
                        url: 'api/',
                        type: 'post',
                        data: form,
                        success: function(data) {
                            console.log(data);
                            if (data == 1) {
                                showAlertMessage("Success", "Post successfully...");
                            } else {
                                showAlertMessage("Error", "Post could not be ...");
                            }
                        }
                    });
                });
            });
        </script>
    </div>
</main>