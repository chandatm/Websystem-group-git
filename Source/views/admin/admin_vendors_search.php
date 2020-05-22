<?php
session_start();
?>

<!doctype html>
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
                        <!--                      <span>Search Results for '--><?php //echo $_SESSION['search_text']; ?><!--'</span>-->
                        <span>Search Results</span>
                    </h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Products found from our inventory.
                    </p>
                </div>
            </div>
            <div>
                <div class="cform" id="contact-form">
                    <form action="admin_vendors_search.php" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" placeholder="Search for users..." value="<?php echo $_SESSION['search_text']; ?>" aria-label="Search">
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

                    if(isset($_POST['btn_search']))
                    {
                        $searchvalue = "";
                        $searchvalue = $_POST['search'];

                        $query = "SELECT * FROM vendor WHERE Company_name LIKE '%$searchvalue%' 
                        OR Email LIKE '%$searchvalue%'";

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
