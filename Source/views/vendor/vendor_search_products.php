<?php
session_start();
?>

<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/vendor/vendor_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/vendor/vendor_dashboard_navbar_template.php' ?>

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
                    <form action="vendor_search_products.php" method="POST" role="form" class="contactForm">
                        <div class="form-group">
                            <input class="form-control" type="text" name="search" placeholder="Search for your favourite product..." value="<?php echo $_SESSION['search_text']; ?>" aria-label="Search">
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
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Manufacturer</th>
                        <th>Manufacturer Date</th>
                        <th>Product Type</th>
                        <th>Product Description</th>
                        <th>Cost Price</th>
                        <th>Sales Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
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

                        $query = "SELECT * FROM products WHERE Name LIKE '%$searchvalue%' 
                        OR Type LIKE '%$searchvalue%' OR Manufacturer LIKE '%$searchvalue%'";

                        $runqry = mysqli_query($conn, $query) or die("Could not find data.");

                        while($row = mysqli_fetch_assoc($runqry))
                        {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['ProductId']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Code']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Manufacturer']; ?>
                                </td>
                                <td>
                                    <?php echo $row['ManufacturerDate']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Type']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Description']; ?>
                                </td>
                                <td>
                                    <?php echo $row['CostPrice']; ?>
                                </td>
                                <td>
                                    <?php echo $row['SalesPrice']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Quantity']; ?>
                                </td>
                                <td>
                                    <?php echo $row['Image']; ?>
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
<?php include '../../shared/vendor/vendor_footer_template.php' ?>

<!-- javascript -->
<?php include '../../shared/vendor/vendor_javascript_template.php'?>
</body>
</html>
