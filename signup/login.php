<?php


if(!isset($_POST["loginbtn"])){
    echo "<script>alert('anuthorised access')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
    exit();
}
session_start();
require_once "signup.contr.class.php";
class Login extends SignupContr{
    public function __construct($email, $password){
        $this->connect();
        $this->email = $email;
        $this->password = $password;
    }
    public function login(){
        $sql = "SELECT * FROM ipr_users WHERE email_id = '$this->email' AND password = '$this->password'";
        $result = $this->conn->query($sql);
        if($result->num_rows){
            $row = $result->fetch_assoc();
            if($this->password===$row["password"]){
                $_SESSION["email"] = $this->email;
                echo "<script>alert('Login successful!')</script>";
                echo "<script>window.open('../index.php', '_self')</script>";
            }
            else{
                echo "<script>alert('Invalid Password!')</script>";
                echo "<script>window.open('signup.php', '_self')</script>";
            }
        }else{
            echo "<script>alert('Login failed!')</script>";
            echo "<script>window.open('signup.php', '_self')</script>";
        }
    }
}
$email = $_POST["emailid"];
$password = $_POST["password"];

$login=new Login($email, $password);
if($login->validateEmail()){
    if($login->existence()){
        $login->login();
    }else{
        echo "<script>alert('Email not registered! Please signup')</script>";
        echo "<script>window.open('../index.php', '_self')</script>";
    }  
}else{
    echo "<script>alert('Enter valid email!')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
}
