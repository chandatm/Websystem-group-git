<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/vendor/vendor_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/vendor/vendor_navbar_template.php' ?>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Vendor Login</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Order from our wide range of products.
                    </p>
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
                        <form action="vendor_login_validate.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="vendor_email" class="form-control" title="Enter Email Address" placeholder="Email Address" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" title="Enter password" name="vendor_password" placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <form action="vendor_login_validate.php" method="post">
                                    <button type="submit" name="btnVendorLogin" class="btn btn-lg btn-theme">Login</button>
                                </form>
                            </div>
                        </form>
                    </div>
                    <!-- end vendor login form -->
                </div>
                <div class="col-md-6">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="vendor_login_validate.php" method="post">
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
<?php include '../../shared/vendor/vendor_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/vendor/vendor_javascript_template.php'?>
</body>
</html>