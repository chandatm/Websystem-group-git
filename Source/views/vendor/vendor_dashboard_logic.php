<?php

if (isset($_POST['btnAddVendorProducts']))
{
    header("Location: vendor_add_products.php");
}

if (isset($_POST['btnEditVendorProducts']))
{
    header("Location: vendor_edit_products.php");
}

if (isset($_POST['btnDeleteVendorProducts']))
{
    header("Location: vendor_delete_products.php");
}