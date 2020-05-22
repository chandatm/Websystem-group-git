<?php

    session_start();

    //check if validations failed from accounts_register page
    if(isset($_SESSION['error_flag']))
    {
        // Removes error_flag session
        unset($_SESSION['error_flag']);
    }
    else
    {
        $_SESSION['user_first_name_error'] = "";
        $_SESSION['user_last_name_error'] = "";
        $_SESSION['user_date_of_birth'] = "";
        $_SESSION['user_email_error'] = "";
        $_SESSION['user_password_error'] = "";
        $_SESSION['success_message'] = "";
    }
?>


<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/admin/admin_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/admin/admin_dashboard_navbar_template.php' ?>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Add Vendor</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Add vendors to our platform.
                    </p>
                    <p style="color: green;" class="text-success"><?php echo $_SESSION['success_message']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <!-- start vendor login form -->
                    <div class="cform" id="contact-form">
                        <form action="admin_add_user_account_logic.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>Company Name</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_company_name_error']; ?></p>
                                <input type="text" name="company_name" class="form-control" title="Enter Company Name" placeholder="Company name" required />
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_email_error']; ?></p>
                                <input type="text" name="vendor_email" class="form-control" title="Enter Email Address" placeholder="Email Address" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_password_error']; ?></p>
                                <input class="form-control" type="password" title="Enter password" name="user_password" placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <form action="#" method="post">
                                    <button type="submit" name="btnAddUserAccount" class="btn btn-theme btn-lg">Add Vendor</button>
                                </form>
                            </div>
                        </form>
                    </div>
                    <!-- END vendor login form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact -->

<!-- footer -->
<?php include '../../shared/admin/admin_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/admin/vendor_javascript_template.php'?>
</body>
</html>