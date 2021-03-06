<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/admin/admin_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/admin/admin_dashboard_navbar_template.php' ?>


<!-- Get all users section -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3>
                        <span>Current Users</span>
                    </h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Current users on our system.
                    </p>
                </div>
            </div>
            <div class="cform" id="contact-form">
                <form action="admin_delete_user_account.php" method="post" role="form" class="contactForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="id" placeholder="Enter User ID to delete user..." aria-label="Delete">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-primary" type="submit" name="delete">Delete User</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            if(isset($_POST['delete']))
            {
                $id = $_POST['id'];

                // Uncomment for Windows DB connection
                // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

                // Mac DB connection
                $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

                if($conn)
                {
                    $query = "DELETE FROM `Users` WHERE `Id`= $id";

                    $runqry = mysqli_query($conn, $query) or die("Could not find data.");

                    mysqli_close($conn);

                    $message = "User removed successfully";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Code</th>
                        <th>DOB</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    <?php
                    // Uncomment for Windows DB connection
                    // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

                    // Mac DB connection
                    $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

                    $query = "SELECT * FROM Users";

                    $runqry = mysqli_query($conn, $query) or die("Could not find data.");

                    while($row = mysqli_fetch_assoc($runqry))
                    {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['Id'];?>
                            </td>
                            <td>
                                <?php echo $row['FirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['LastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['DOB']; ?>
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

<!-- footer -->
<?php include '../../shared/admin/admin_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/admin/vendor_javascript_template.php'?>
</body>
</html>