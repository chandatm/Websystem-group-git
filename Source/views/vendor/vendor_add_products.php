<?PHP
//continue session continued from the validate.php
session_start();

/* prints the values in the session if it has values */
//print_r($_SESSION);

if(isset($_SESSION['errflag']))
{
    foreach($_SESSION as $key => $value)    //store SESSION values in to local variables
    {
        $$key = $value;
    }
    //session_destroy();        //destroys the session once the values are loaded. REFRESH to clear the fields
}
else
{
    // default variable values
    $profilePic = "";

    // default error message
    $imgerr = "";

    session_destroy();
}
?>

<!doctype html>
<html lang="en">

<!-- head -->
<?php include '../../shared/vendor/vendor_head_template.php' ?>

<body>
<!-- navbar -->
<?php include '../../shared/vendor/vendor_dashboard_navbar_template.php' ?>

<?php
    if(isset($_POST['submit']))
    {
        $productName = $_POST["product_name"];
        $productCode = $_POST["product_code"];
        $manufacturer = $_POST["manufacturer"];
        $manufacturerDate = $_POST["manufacturer_date"];
        $productType = $_POST["product_type"];
        $productDescription = $_POST["product_description"];
        $costPrice = $_POST["cost_price"];
        $salesPrice = $_POST["sales_price"];
        $quantity = $_POST["quantity_in_stock"];

        // VALIDATION OF IMAGE UPLOAD

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profilePic"]["name"]);   // e.g. uploads/filename.png

        //rawurlencode(var) converts file name to raw URL encode (e.g " " => %20)

        $exists = 0;
        $uploadOk = 1;  //status of upload
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        //  if(isset($_POST["btn_submit"]))
        //  {
        $check = getimagesize($_FILES["profilePic"]["tmp_name"]);

        if($check !== false)
        {
            $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>File is an image - " . $check["mime"] . ".</p>";
            $uploadOk = 1;
        }
        else
        {
            $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%'>File is not an image.</p>";
            $uploadOk = 0;
            //$errflag = true;
        }
        //}
        // Check if file already exists
        if (file_exists($target_file))
        {
            $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>Sorry, file already exists.</p>";
            //$uploadOk = 0;
            //$errflag = true;
            $exists = 1;
        }

        // Check file size
        if ($_FILES["profilePic"]["size"] > 5000000) //image larger than 5000KB / 5MB
        {
            $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%' 
                >Sorry, your file is too large. File Limit: <strong>5MB</strong></p>";
            $uploadOk = 0;
            $errflag = true;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"   && $imageFileType != "gif" )
        {
            $_SESSION['imgerr'] = "<p style = 'color:red; font-size: 50%'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
            $uploadOk = 0;
            $errflag = true;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
            $errflag = true;
            // if everything is ok, try to upload file
        }
        else
        {
            //upload the file NOW

            if ($exists == 0)
            {
                move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file);
                $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.</p>";
                $_SESSION['profilePic'] = $target_file;
            }
            else
            {
                $_SESSION['imgerr'] = "<p style = 'color:green; font-size: 50%'>The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.</p>";
                $_SESSION['profilePic'] = $target_file;
            }
        }

        // Uncomment for Windows DB connection
        // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

        // Mac DB connection
        $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

        $query= "INSERT INTO products(Name, Code, Manufacturer, ManufacturerDate, Type, Description, CostPrice, SalesPrice, Quantity, Image) 
                    VALUES ('$productName', '$productCode', '$manufacturer', '$manufacturerDate', '$productType', '$productDescription', '$costPrice', '$salesPrice', '$quantity', '$target_file')";

        mysqli_query($conn, $query) or die ("Could not insert into table");
        $message = "Product added successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";

        mysqli_close($conn);
    }
?>

<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h3><span>Add Product</span></h3>
                </div>
                <div class="sub-heading">
                    <p>
                        Add new products for customers.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- start add product form -->
                <div class="cform" id="contact-form">
                    <form action="vendor_add_products.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" name="product_name" placeholder="Product Name" required />
                        </div>
                        <div class="form-group">
                            <label>Product Code/Serial Number</label>
                            <input class="form-control" type="text" name="product_code" placeholder="Product Code/Serial Number" required />
                        </div>
                        <div class="form-group">
                            <label>Manufacturer</label>
                            <input type="text" name="manufacturer" placeholder="Manufacturer" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Manufacturer Date</label>
                            <input class="form-control" type="date" name="manufacturer_date" required />
                        </div>
                        <div class="form-group">
                            <label>Product Type</label>
                            <select class="form-control" name="product_type" required>
                                <option value="">*Please select*</option>
                                <option value="Accessory">Accessory</option>
                                <option value="Phones">Phones/Tablets </option>
                                <option value="USB">USB Storage</option>
                                <option value="Consoles">Consoles</option>
                                <option value="Games">Games </option>
                                <option value="Laptop">Laptop/PC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" name="product_description"rows="5" placeholder="Product Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cost Price</label>
                            <input class="form-control" type="text" pattern="[0-9.]+" name="cost_price" placeholder="Cost Price ($)" required />
                        </div>
                        <div class="form-group">
                            <label>Sales Price</label>
                            <input class="form-control" type="text" pattern="[0-9.]+" name="sales_price" placeholder="Sales Price ($)" required />
                        </div>
                        <div class="form-group">
                            <label>Quantity In Stock</label>
                            <input class="form-control" type="text" pattern="[0-9.]+" name="quantity_in_stock" placeholder="Quantity In Stock ($)" required />
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <input class="form-control" type="file" name = "profilePic" id = "profilePic" accept = "image/*" required value = <?php echo $profilePic; ?>/></br><?php echo $imgerr; ?>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">Add product</button>
                        </div>
                    </form>
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