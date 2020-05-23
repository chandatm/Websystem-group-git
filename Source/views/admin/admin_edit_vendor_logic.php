<?php

if (isset($_POST['btnUpdateVendorAccount']))
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

    // Validate Company name
    if (($vendor_company_name == null) || (strlen($vendor_company_name) < 4))
    {
        $_SESSION['vendor_company_name_error'] = "Company name must be at least FOUR(4) characters long.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_company_name_error'] = "";
    }

    // Validate email
    if (!filter_var($vendor_email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['vendor_email_error'] = "Please enter a valid email address.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_email_error'] = "";
    }

    // Validate password
    if (($vendor_password == null) || (strlen($vendor_password) < 4))
    {
        $_SESSION['vendor_password_error'] = "Password must be at least FIVE(5) characters.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['vendor_password_error'] = "";
    }

    // Checks form fields for errors
    if ($_SESSION['error_flag'] > 0)
    {
        // Redirects user to error page
        header("Location: admin_edit_vendor.php");
    }
    else
    {
        // Uncomment for Windows DB connection
        // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

        // Mac DB connection
        $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

        $query= "UPDATE `vendor` SET `Company_name`='$vendor_company_name',`Email`='$vendor_email',`Password`='$vendor_password' WHERE `Id`= '$vendor_id'";

        $result = mysqli_query($conn, $query) or die ("Could not insert into table");

        if ($result)
        {
            $_SESSION['admin_edit_success_message'] = "Vendor Account updated successfully";
            header("Location: admin_edit_vendor.php");
        }

        mysqli_close($conn);
    }
}