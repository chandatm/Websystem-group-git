<?php

// Start the session
session_start();

// user clicks search button
if (isset($_POST['btn_search']))
{
    foreach ($_POST as $key => $value)
    {
        $$key = $value;
        $_SESSION[$key] = $value;
    }

    $_SESSION['search_text'] = $_POST['search'];
}
?>

<html lang="en">
<!-- head -->
<?php include '../../shared/admin/admin_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/admin/admin_dashboard_navbar_template.php' ?>

<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3>
                        <span>Vendors</span>
                    </h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Our vendors using our system.
                    </p>
                </div>
            </div>
            <div>
                <div class="cform" id="contact-form">
                    <form action="admin_vendors_search.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" placeholder="Search for your favourite vendor..." aria-label="Search">
                            <button class="btn btn-lg btn-primary" type='submit' name='btn_search'>Search</button>
                        </div>
                    </form>
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
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_add_vendor.php" method="post">
                            <button type="submit" name="btnAddVendor" class="btn btn-lg btn-primary">Add a Vendor</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_edit_vendor.php" method="post">
                            <button type="submit" name="btnEditVendor" class="btn btn-lg btn-theme">Edit a Vendor</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" style="margin-top: 80px;">
                        <form action="admin_delete_vendor.php" method="post">
                            <button type="submit" name="btnDeleteVendor" class="btn btn-lg btn-danger">Delete a Vendor</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<?php include '../../shared/admin/admin_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/admin/vendor_javascript_template.php'?>
</body>
</html>