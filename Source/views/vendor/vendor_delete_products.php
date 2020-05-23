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
                        <span>Delete Product</span>
                    </h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Remove product from inventory.
                    </p>
                </div>
            </div>
            <div class="cform" id="contact-form">
                <form action="vendor_delete_products.php" method="post" role="form" class="contactForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="id" placeholder="Enter Product ID to delete..." aria-label="Delete">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-lg btn-primary" type="submit" name="delete">Delete product</button>
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
                    $query = "DELETE FROM `products` WHERE `ProductId`= $id";

                    $runqry = mysqli_query($conn, $query) or die("Could not find data.");

                    mysqli_close($conn);

                    $message = "Product removed successfully";
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
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Manufacturer</th>
                        <th>Manufacturer Date</th>
                        <th>Product Type</th>
                        <th>Product Description</th>
                        <th>Cost Price</th>
                        <th>Slaes Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                    <?php
                    // Uncomment for Windows DB connection
                    // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

                    // Mac DB connection
                    $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

                    $query = "SELECT * FROM products";

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