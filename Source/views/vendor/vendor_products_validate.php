<?php

if (isset($_POST["btnVendorSaveProduct"]))
{
    // Create a session
    session_start();

    $_SESSION['error_flag'] = 0;

    foreach ($_POST as $key => $value)
    {
        $$key = $value;

        // store form value in session
        $_SESSION[$key] = $value;
    }

    if (($vendor_product_name == null) || (strlen($vendor_product_name) < 5))
    {
        $_SESSION['vendor_product_name_error'] = "Product Name must be at least FIVE(5) characters long.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_product_name_error'] = "";
    }

    if (($vendor_product_description == null) || (strlen($vendor_product_description) < 5))
    {
        $_SESSION['vendor_product_description_error'] = "Product Description must be at least FIVE(5) characters long.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_product_description'] = "";
    }

    if ($vendor_product_quantity == 0)
    {
        $_SESSION['vendor_product_quantity_error'] = "Please enter a product quantity";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_product_quantity_error'] = "";
    }

    if ($vendor_product_price == 0)
    {
        $_SESSION['vendor_product_price_error'] = "Please enter a product price";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_product_price_error'] = "";
    }

    if ($vendor_product_image == null)
    {
        $_SESSION['vendor_product_image_error'] = "Please upload an image of the product";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_product_image_error'] = "";
    }

    // Checks form fields for errors
    if ($_SESSION['error_flag'] > 0)
    {
        // Redirects user to show errors
        header("Location: vendor_products.php");
    }
    else
    {
        // Save to database and redirect user to view products page
    }
}
else
{
    header("Location: ../../shared/error_404_template.php");
}
