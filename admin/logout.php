<?php session_start();
unset($_SESSION['username']);
session_destroy();
error_reporting(0);
header('location:../login.php');
?>



