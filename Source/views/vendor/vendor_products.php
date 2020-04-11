<?php

    session_start();

    //check if validations failed from vendor_products page
    if(isset($_SESSION['error_flag']))
    {
        // Removes error_flag session
        unset($_SESSION['error_flag']);
    }
    else
    {
        $_SESSION['vendor_product_name'] = "";
        $_SESSION['vendor_product_description'] = "";
        $_SESSION['vendor_product_quantity'] = "";
        $_SESSION['vendor_product_price'] = "";
        $_SESSION['vendor_product_image'] = "";
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
                    <h3><span>Products</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        List products for your customers.
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
                        <form action="vendor_products_validate.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>Product Name</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_product_name_error']; ?></p>
                                <input type="text" name="vendor_product_name" class="form-control" title="Enter Product Name" placeholder="Product Name" value="<?php echo $_SESSION['vendor_product_name'];?>" required />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_product_description_error']; ?></p>
                                <input type="text" name="vendor_product_description" class="form-control" title="Enter Product Description" placeholder="Product Description" value="<?php echo $_SESSION['vendor_product_description'];?>" required />
                            </div>
                            <div class="form-group">
                                <label>Quantity in Stock</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_product_quantity_error']; ?></p>
                                <input type="number" name="vendor_product_quantity" min="1" class="form-control" title="Enter Product Quantity" placeholder="Price" value="<?php echo $_SESSION['vendor_product_quantity'];?>" required />
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_product_price_error']; ?></p>
                                <input type="number" name="vendor_product_price" min="1" class="form-control" title="Enter Product Price" placeholder="Price" value="<?php echo $_SESSION['vendor_product_price'];?>" required />
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <p class="text-danger"><?php echo $_SESSION['vendor_product_image_error']; ?></p>
                                <input class="form-control" type="file" title="Upload product image" name="vendor_product_image" placeholder="Product image" required>
                            </div>
                            <div class="text-center">
                                <form action="vendor_products_validate.php" method="post">
                                    <button type="submit" name="btnVendorSaveProduct" class="btn btn-lg btn-theme">Add to inventory</button>
                                </form>
                            </div>
                        </form>
                    </div>
                    <!-- end vendor login form -->
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