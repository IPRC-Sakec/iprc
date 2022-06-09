<?php
require_once '../requirements/autoload.php';
if(!isset($_POST["signup"])){
    echo "success";
    echo "<script>alert('anuthorised access')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
    //exit();
}else
{
    require_once "signup.contr.class.php";
    // Grabing the data
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    $signup=new SignupContr($fname, $mname, $lname, $email, $department, $password, $confirmPassword);
    if($signup->emptyInput()){
        if($signup->validatePassword()){
            if($signup->validateEmail()){
                if(!$signup->existence()){
                    if($signup->signup()){
                        echo "<script>alert('Registration successful!')</script>";
                        $_SESSION["email"] = $email;
                        echo "<script>window.open('../index.php', '_self')</script>";
                        exit();
                    }
                    else{
                        echo "<script>alert('Registration failed!')</script>";
                        echo "<script>window.open('../index.php', '_self')</script>";
                        exit();
                    }
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
