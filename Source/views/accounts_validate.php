<?php

if (isset($_POST["btnVendorLogin"]))
{
    // Redirects user to Vendor pages
    header("Location: ../views/vendor/vendor_login.php");
}
else if (isset($_POST["btnAdminLogin"]))
{
    // Redirects to user to Admin pages
    header("Location: ");
}