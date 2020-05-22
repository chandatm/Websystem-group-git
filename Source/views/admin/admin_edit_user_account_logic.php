<?php

if (isset($_POST['btnUpdateUserAccount']))
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

    // Validate first name
    if (($user_first_name == null) || (strlen($user_first_name) < 4))
    {
        $_SESSION['user_first_name_error'] = "First Name must be at least FOUR(4) characters long.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['user_full_name_error'] = "";
    }

    // Validate last name
    if (($user_last_name == null) || (strlen($user_last_name) < 4))
    {
        $_SESSION['user_last_name_error'] = "Last Name must be at least FOUR(4) characters long.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['user_full_name_error'] = "";
    }

    // Validate DOB
    if (($user_date_of_birth == null))
    {
        $_SESSION['user_date_of_birth_error'] = "DOB is required";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['user_date_of_birth_error'] = "";
    }

    // Validate email
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL))
    {
        $_SESSION['user_email_error'] = "Please enter a valid email address.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['user_email_error'] = "";
    }

    // Validate password
    if (($user_password == null) || (strlen($user_password) < 4))
    {
        $_SESSION['user_password_error'] = "Password must be at least FIVE(5) characters.";
        $_SESSION['error_flag']++;
    }
    else
    {
        $_SESSION['user_password_error'] = "";
    }

    // Checks form fields for errors
    if ($_SESSION['error_flag'] > 0)
    {
        // Redirects user to error page
        header("Location: admin_edit_user_account.php");
    }
    else
    {
        // Uncomment for Windows DB connection
        // $conn = mysqli_connect("localhost", "root", "root", "jselectronic") or die ("Could not connect to database");

        // Mac DB connection
        $conn = mysqli_connect("localhost:8889", "root", "root", "jselectronic") or die ("Could not connect to database");

        $query= "UPDATE `Users` SET `FirstName`='$user_first_name',`LastName`='$user_last_name',`DOB`='$user_date_of_birth',`Email`='$user_email',`Password`='$user_password' WHERE `Id`= '$user_id'";

        $result = mysqli_query($conn, $query) or die ("Could not insert into table");

        if ($result)
        {
            $_SESSION['account_edit_success_message'] = "User Account updated successfully";
            header("Location: admin_edit_user_account.php");
        }

        mysqli_close($conn);
    }
}