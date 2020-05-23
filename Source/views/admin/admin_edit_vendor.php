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
    $_SESSION['vendor_company_name_error'] = "";
    $_SESSION['vendor_email_error'] = "";
    $_SESSION['vendor_password_error'] = "";
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

<!-- Get all vendors section -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3>
                        <span>Current Vendors</span>
                    </h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Current vendors on our system.
                    </p>
                    <p style="color: green;" class="text-success">
                        <?php echo $_SESSION['admin_edit_success_message']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <?php
                    // Uncomment for Windows DB connection
                    // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

                    // Mac DB connection
                    $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

                    $query = "SELECT * FROM vendor";

                    $runqry = mysqli_query($conn, $query) or die("Could not find data.");

                    while($row = mysqli_fetch_assoc($runqry))
                    {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['Id'];?>
                            </td>
                            <td>
                                <?php echo $row['Company_name']; ?>
                            </td>
                            <td>
                                <?php echo $row['Email']; ?>
                            </td>
                            <td>
                                <?php echo $row['Password']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- section contact -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Edit Vendor</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Edit existing vendors on our platform.
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
                        <form action="admin_edit_vendor_logic.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>ID</label>
                                <input class="form-control" type="text" name="vendor_id" placeholder="User ID" required />
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_company_name_error']; ?></p>
                                <input type="text" name="vendor_company_name" class="form-control" title="Enter Company Name" placeholder="Company name" required />
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_email_error']; ?></p>
                                <input type="text" name="vendor_email" class="form-control" title="Enter Email Address" placeholder="Email Address" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_password_error']; ?></p>
                                <input class="form-control" type="password" title="Enter password" name="vendor_password" placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <form action="#" method="post">
                                    <button type="submit" name="btnUpdateVendorAccount" class="btn btn-theme btn-lg">Update Vendor</button>
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