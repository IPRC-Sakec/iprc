<?php
if(!isset($_POST["signup"])){
    echo "success";
    echo "<script>alert('anuthorised access')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
    //exit();
}else
{
    require_once "signup.contr.class.php";
    session_start();
    
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $name=$fname.' '.$mname .' '.$lname;
    $department = $_POST["department"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    $signup=new SignupContr($name, $email, $department, $password, $confirmPassword);

    if($signup->emptyInput()){
        if($signup->validatePassword()){
            if($signup->validateEmail()){
                if(!$signup->existence()){
                    $signup->signup();
                }else{
                    echo "<script>alert('Email already registered!')</script>";
                    echo "<script>window.open('../index.php', '_self')</script>";
                    exit();
                }
            }else{
                echo "<script>alert('Invalid Email id!')</script>";
                echo "<script>window.open('../index.php', '_self')</script>";
                exit();
            }
        }else{
            echo "<script>alert('Passwords do not match!')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
            exit();
        }
    }
    else{
        echo "<script>alert('Fill all the fields!')</script>";
        echo "<script>window.open('../index.php', '_self')</script>";
        exit();
    }
}
