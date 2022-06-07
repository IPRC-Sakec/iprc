<?php

class SignupContr{

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

    private function emptyInput(){
    static $result;
        if(empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->email) || empty($this->department) || empty($this->password) || empty($this->confirmPassword)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function validateInput(){
        static $result;
        if(!preg_match("/^[a-zA-Z]*$/", $this->fname) || !preg_match("/^[a-zA-Z]*$/", $this->mname) || !preg_match("/^[a-zA-Z]*$/", $this->lname) || !preg_match("/^[a-zA-Z]*$/", $this->department)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function validateEmail(){
        static $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function validatePassword(){
        static $result;
        if($this->password != $this->confirmPassword){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}
