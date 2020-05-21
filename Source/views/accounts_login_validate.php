<?php

    if (isset($_POST['btnVendorLogin']))
    {
        // Create a session
        session_start();

        $_SESSION['error_flag'] = 0;

        foreach ($_POST as $key => $value)
        {
            $$key = $value;
            $_SESSION[$key] = $value;
        }

        // Validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $_SESSION['email_error'] = "Please enter a valid email address.";
            $_SESSION['error_flag']++;
        }
        else
        {
            $_SESSION['email_error'] = "";
        }


        // Checks form fields for errors
        if ($_SESSION['error_flag'] > 0)
        {
            // Redirects user to error page
            header("Location: accounts_login.php");
        }
        else
        {
            // Uncomment for Windows DB connection
            // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

            // Mac DB connection
            $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

            if ($email == "jelectricsAdmin@gmail.com" and $password == "moreandmore#789")
            {
                // Set user type
                $_SESSION['UserType'] = "admin";

                // Navigate to Admin pages
            }
            else
            {
                $sql = "SELECT * FROM Vendor WHERE email = '$email' AND password = '$password'";

                $result = $conn->query($sql);

                $count = mysqli_num_rows($result);

                // If result matched, table row must be 1 row
                if($count == 1)
                {
                    // Set user type
                    $_SESSION['UserType'] = "vendor";

                    // Store values from DB


                    header("Location: ../views/vendor/vendor_dashboard.php");
                }
                else
                {
                    $_SESSION['error_message'] = "Invalid email address or Password";
                    header("location: accounts_login.php");
                }

                $conn->close();
            }
        }
    }

    if (isset($_POST['btnVendorRegister']))
    {
        header("Location: accounts_register.php");
    }