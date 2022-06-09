<?php
require_once '../requirements/autoload.php';
class SignupContr {
    use DB;
    protected $name;
    protected $email;
    protected $department;
    protected $password;
    protected $confirmPassword;
    
    public function __construct($name, $email, $department, $password, $confirmPassword){
        $this->connect();
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;

    }
    public function signup(){

        $role=(true)?2:3;

        $sql = "INSERT INTO `ipr_users` (`name`, `email_id`, `password`, `department`, `role`, `reg_no`) VALUES ('$this->name','$this->email', '$this->password', '$this->department', $role, '0')";
        if( $this->conn->query($sql) === TRUE){
            echo "<script>alert('Registration successful!')</script>";
            $_SESSION["email"] = $this->email;
            echo "<script>window.open('../index.php', '_self')</script>";
            exit();
        }
        else{
            echo "<script>alert('Registration failed!')</script>";
            echo "<script>window.open('../index.php', '_self')</script>";
            exit();
        }
    }

    public function emptyInput(){
    static $result;
        if(empty($this->name) || empty($this->email) || empty($this->department) || empty($this->password) || empty($this->confirmPassword)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    public function validateInput(){
        static $result;
        if(!preg_match("/^[a-zA-Z]*$/", $this->name) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
    public function validateEmail(){
        $result=(filter_var($this->email, FILTER_VALIDATE_EMAIL)) ?  true :  false;
        return $result;
    }

    public function validatePassword(){
        $result=($this->password != $this->confirmPassword)? false: true;
        return $result;
    }

    public function existence(){
        static $result;
        $sql = "SELECT * FROM ipr_users WHERE email_id = '$this->email'";
        $result = $this->conn->query($sql);
        $result=$result->num_rows?true:false;
        return $result;
    }
}

