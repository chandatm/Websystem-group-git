<?php

    if (isset($_POST['btnAccountRegister']))
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

        if (($vendor_company_name == null) || (strlen($vendor_company_name) < 5))
        {
            $_SESSION['vendor_company_name_error'] = "Company Name must be at least FIVE(5) characters long.";
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
            $_SESSION['vendor_password_error'] = "Please enter a valid password.";
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
            header("Location: accounts_register.php");
        }
        else
        {
            // Save to database and redirect user now sign in
        }
    }

    // Redirect to login page
    if (isset($_POST['btnAccountLogin']))
    {
        header("Location: accounts_login.php");
    }
