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
            // Save to database and redirect user now sign in

            // Uncomment for Windows DB connection
    //            $conn = mysqli_connect("localhost", "root", "root", "WSDI_jselectronic") or die ("Could not connect to database");

            // Mac DB connection
            $conn = mysqli_connect("localhost:8889", "root", "root", "WSDI_jselectronic") or die ("Could not connect to database");

            $query= "UPDATE Vendor SET Company_name = '$vendor_company_name' WHERE Id = '$vendor_Id'";

            mysqli_query($conn, $query) or die ("Could not insert into table");

            $_SESSION['account_details_success_message'] = "Profile Updated Successfully!";

            header("Location: vendor_account_details.php");

            mysqli_close($conn);
        }
    }