<?php
session_start();
include('config/dbcon.php');

if(!isset($_SESSION['auth']))
{
    $_SESSION['status'] = "Login to Access Dashboard";
    $_SESSION['status_code'] = "success";
    header("Location: ../login.php");
    exit(0);
}
else
{
    if ($_SESSION['auth_role'] != "1")
    {
        $_SESSION['status'] = "You are not authorized as ADMIN";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit(0);
    }
}

?>

