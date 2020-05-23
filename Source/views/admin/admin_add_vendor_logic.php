<?php

    if (isset($_POST['btnAddVendorAccount']))
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

        if (($vendor_company_name == null) || (strlen($vendor_company_name) < 4))
        {
            $_SESSION['vendor_company_name_error'] = "Company Name must be at least FOUR(4) characters long.";
            $_SESSION['error_flag']++;
        }
        else
        {
            $_SESSION['vendor_company_name_error'] = "";
        }

        if (!filter_var($vendor_email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['vendor_email_error'] = "Please enter a valid email address.";
            $_SESSION['error_flag']++;
        }
        else
        {
            $_SESSION['vendor_email_error'] = "";
        }

        if (($vendor_password == null))
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
            header("Location: admin_add_vendor.php");
        }
        else
        {
            // Uncomment for Windows DB connection
            // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

            // Mac DB connection
            $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

            // Generate random integer of ID
            $randomID = rand(1, 1000);

            $query= "INSERT INTO vendor(Id, Company_name, Email, Password) 
                    VALUES ('$randomID', '$vendor_company_name', '$vendor_email', '$vendor_password')";

            mysqli_query($conn, $query) or die ("Could not insert into table");

            $_SESSION['success_message'] = "Vendor Registered Successfully!";

            header("Location: admin_add_vendor.php");

            mysqli_close($conn);
        }
    }