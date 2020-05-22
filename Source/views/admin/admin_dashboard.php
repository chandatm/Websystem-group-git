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
                    <h3><span>Manage Users & Vendors</span></h3>
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
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_dashboard_logic.php" method="post">
                            <button type="submit" name="btnAddUserAccount" class="btn btn-lg btn-primary">Add a User Account</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_dashboard_logic.php" method="post">
                            <button type="submit" name="btnEditUserAccount" class="btn btn-lg btn-theme">Edit a User Account</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_dashboard_logic.php" method="post">
                            <button type="submit" name="btnDeleteUserAccount" class="btn btn-lg btn-danger">Delete a User Account</button>
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
<?php include '../../shared/admin/admin_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/admin/vendor_javascript_template.php'?>
</body>
</html>