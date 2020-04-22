<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/vendor/vendor_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/vendor/vendor_dashboard_navbar_template.php' ?>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Manage products & services</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Keep products updated for your customers.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="vendor_dashboard_logic.php" method="post">
                            <button type="submit" name="btnVendorProducts" class="btn btn-lg btn-primary">Manage Products</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="vendor_dashboard_logic.php" method="post">
                            <button type="submit" name="btnVendorAccountDetails" class="btn btn-lg btn-theme">Edit Account Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section contact -->
<br>
<!-- footer -->
<?php include '../../shared/vendor/vendor_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/vendor/vendor_javascript_template.php'?>
</body>
</html>