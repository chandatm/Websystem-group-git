<?php

    session_start();

    //check if validations failed from accounts_login page
    if(isset($_SESSION['error_flag']))
    {
        // Removes error_flag session
        unset($_SESSION['error_flag']);
    }
    else
    {
        $_SESSION['email_error'] = "";
        $_SESSION['error_message'] = "";
    }
?>


<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../shared/head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../shared/main_navbar_template.php' ?>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Login</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Order from our wide range of products.
                    </p>
                    <p style="color: red;" class="text-danger"><?php echo $_SESSION['error_message']; ?></p>
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
                        <form action="accounts_login_validate.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>Email Address</label>
                                <p class="text-danger"><?php echo $_SESSION['email_error']; ?></p>
                                <input type="text" name="email" class="form-control" title="Enter Email Address" placeholder="Email Address" value="<?php echo $_SESSION['email'];?>" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" title="Enter password" name="password" placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <form action="accounts_login_validate.php" method="post">
                                    <button type="submit" name="btnVendorLogin" class="btn btn-lg btn-theme">Login</button>
                                </form>
                            </div>
                        </form>
                    </div>
                    <!-- end vendor login form -->
                </div>
                <div class="col-md-6">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="accounts_login_validate.php" method="post">
                            <button type="submit" name="btnVendorRegister" class="btn btn-lg btn-primary">Register as a Vendor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact -->

<!-- footer -->
<?php include '../shared/footer_template.php' ?>

<!-- javascript -->
<?php include '../shared/javascript_template.php'?>
</body>
</html>