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
        $_SESSION['account_details_success_message'] = "";
    }
?>


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
                    <h4>Welcome <span class="text-success" style="font-size: 30px;"><?php echo $_SESSION['vendor_email']; ?>!</span></h4>
                </div>
                <div class="sub-heading">
                    <p style="color: green;" class="text-success"><?php echo $_SESSION['account_details_success_message']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3>My Account Details</h3>
                    <div class="cform" id="contact-form">
                        <form role="form" class="contactForm">
                            <?php
                            // Uncomment for Windows DB connection
                            // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

                            // Mac DB connection
                            $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

                            $email = $_SESSION['vendor_email'];

//                            var_dump($email);

                            if($conn)
                            {
                                $query = "SELECT * FROM `vendor` WHERE `Email` = '$email'";
//                            $query = "SELECT * FROM `vendor`";

                                $runquery = mysqli_query($conn, $query) or die("Could not find data.");

                                while($row = mysqli_fetch_assoc($runquery))
                                {
                                    // Create session to store ID fro DB
                                    $_SESSION['vendor_id'] = $row['Id'];
                                    ?>
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" name="vendor_company_name" class="form-control" title="Enter Company Name" placeholder="Company Name" value="<?php echo $row['Company_name']; ?>" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="vendor_email" class="form-control" title="Enter Email Address" placeholder="Email Address" value="<?php echo $row['Email']; ?>" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" title="Enter password" name="vendor_password" placeholder="Password" value="<?php echo $row['Password']; ?>" readonly>
                                    </div>
                                    <?php
                                }

                                mysqli_close($conn);
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Edit Account Details</h3>
                    <div class="cform" id="contact-form">
                        <form action="vendor_account_details_logic.php" method="post" class="contactForm">
                            <div class="form-group">
                                <label>Company Name</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_company_name_error']; ?></p>
                                <input type="text" name="vendor_account_company_name" class="form-control" title="Enter Company Name" placeholder="Company Name" required />
                            </div>
                            <div class="text-center">
                                <button type="submit" name="btnVendorAccountDetails" class="btn btn-lg btn-theme">Update Account Details</button>
                            </div>
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