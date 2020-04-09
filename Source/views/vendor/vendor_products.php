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
                        <form action="vendor_products_logic.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="vendor_product_name" class="form-control" title="Enter Product Name" placeholder="Product Name" required />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <input type="text" name="vendor_product_description" class="form-control" title="Enter Product Description" placeholder="Product Description" required />
                            </div>
                            <div class="form-group">
                                <label>Quantity in Stock</label>
                                <input type="number" name="vendor_product_quantity" min="1" class="form-control" title="Enter Product Price" placeholder="Price" required />
                            </div>
                            <div class="form-group">
                                <label>Product Price</label>
                                <input type="number" name="vendor_product_price" min="1" class="form-control" title="Enter Product Price" placeholder="Price" required />
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input class="form-control" type="file" title="Upload product image" name="vendor_product_image" placeholder="Product image" required>
                            </div>
                            <div class="text-center">
                                <form action="vendor_products_logic.php" method="post">
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