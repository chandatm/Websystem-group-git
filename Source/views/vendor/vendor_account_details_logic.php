<?php

    if (isset($_POST['btnVendorAccountDetails']))
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

        if (($vendor_account_company_name == null) || (strlen($vendor_account_company_name) < 4))
        {
            $_SESSION['vendor_company_name_error'] = "Company Name must be at least FOUR(4) characters long.";
            $_SESSION['error_flag']++;
        }
        else
        {
            $_SESSION['vendor_company_name_error'] = "";
        }

        // Checks form fields for errors
        if ($_SESSION['error_flag'] > 0)
        {
            // Redirects user to error page
            header("Location: vendor_account_details.php");
        }
        else
        {
            // Uncomment for Windows DB connection
            // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

            // Mac DB connection
            $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

            // Retrieve ID from session
            $Id = $_SESSION['vendor_id'];

            $query= "UPDATE vendor SET Company_name = '$vendor_account_company_name' WHERE Id = '$Id'";

            mysqli_query($conn, $query) or die ("Could not insert into table");

            mysqli_close($conn);

            $_SESSION['account_details_success_message'] = "Profile Updated Successfully!";

            header("Location: vendor_account_details.php");
        }
    }