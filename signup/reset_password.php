<?php

require_once '../requirements/config.php';

if(isset($_POST['email']) || ($_POST['password']) || ($_POST['confirm_password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($password) || empty($confirm_password)){

        echo "Field is Empty";
    }else{

        if($password == $confirm_password){

            $hashed = ($password);
            $query = "UPDATE `ipr_users` SET `password`='$hashed' WHERE `email_id`= '$email'";            
         
            $res = mysqli_query($conn, $query);

            echo "Password Updated Successfully! Click <a href='signup.php'>here</a> to login";
        }else{

            echo "Confirm Password does not match";
        }
    }
}
?>