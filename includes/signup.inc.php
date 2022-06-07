<?php

if(isset($_POST["submit"]))
{
    // Grabing the data
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
}

// Instantiate Signupcontr class

include "../clsses/signup.classes.php";
include "../classes/signup.contr.classes.php";
$signup = new SignupContr($fname, $mname, $lname, $email, $department, $password, $confirmPassword);

// Running error handlers and user signup

// Going back to front page