<?php

if (isset($_POST['btnAddUserAccount']))
{
    header("Location: admin_add_user_account.php");
}

if (isset($_POST['btnEditUserAccount']))
{
    header("Location: admin_edit_user_account.php");
}

if (isset($_POST['btnDeleteUserAccount']))
{
    header("Location: admin_delete_user_account.php");
}