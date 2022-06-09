<?php
session_start();
if(isset($_SESSION['email'])){
    unset($_SESSION['email']);
    //echo "<script>alert('Logout successful!')</script>";
    echo "<SCRIPT>window.location = '../index.php';</SCRIPT>";
}else{
    echo "<SCRIPT>alert('some error occured)</SCRIPT>";
    echo "<SCRIPT>window.location = '../index.php';</SCRIPT>";
}
?>