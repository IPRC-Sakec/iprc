<?php
require_once '../requirements/autoload.php';
class SignupContr {
    use DB;
    private $fname;
    private $mname;
    private $lname;
    private $email;
    private $department;
    private $password;
    private $confirmPassword;

    public function __construct($fname, $mname, $lname, $email, $department, $password, $confirmPassword){
        $this->fname = $fname;
        $this->mname = $mname;
        $this->lname = $lname;
        $this->email = $email;
        $this->department = $department;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }
    public function signup(){

        $role=(true)?2:3;
        
        // Inserting the data into the database
        $sql = "INSERT INTO `ipr_users` (`name`, `email_id`, `password`, `department`, `role`, `reg_no`) VALUES (?,?,?,?,?,?)";
        //$smt = $this->conn->prepare($sql);
        //$smt->bind_param("ssssis", $this->fname, $this->email, $this->password, $this->department, $role, "0");
        if($this->conn->query($sql) === TRUE){
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
        if(empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->email) || empty($this->department) || empty($this->password) || empty($this->confirmPassword)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    public function existence(){
        static $result;
        $sql = "SELECT * FROM users WHERE email = '$this->email'";
        $result = $this->conn->query($sql);
        // if($result->num_rows > 0){
        //     $result = true;
        // }
        // else{
        //     $result = false;
        // }
        // return $result;
        return true;
    }

    public function validateInput(){
        static $result;
        if(!preg_match("/^[a-zA-Z]*$/", $this->fname) || !preg_match("/^[a-zA-Z]*$/", $this->mname) || !preg_match("/^[a-zA-Z]*$/", $this->lname) ){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
    public function validateEmail(){
        $result=(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) ?  false :  true;
        return $result;
    }

    public function validatePassword(){
        $result=($this->password != $this->confirmPassword)? false: true;
        return $result;
    }
}
