<?php

// include('../classes/DB.class.php');

require_once '../requirements/config.php';

if(isset($_POST['email'])){

    $email = $_POST['email'];
    //echo $email;

    $query = "SELECT * FROM ipr_users WHERE email_id = '$email'";
    $result = mysqli_query($conn, $query);

    if(empty($email)){

        echo "Field is Empty";
    }else{

        if(mysqli_num_rows($result) > 0){

        $token = uniqid(md5(time()));

        $query = "UPDATE ipr_users SET token = '$token' WHERE email_id = '$email'";
        $res = mysqli_query($conn, $query);

        echo "Click <a href='reset.php?token=$token'>here</a> to reset your password";
    //     $to = "rahul.dummy04@gmail.com";
    //     echo $to;
    //     $subject = "Reset Password Link";
    //     $msg = "Click <a href='http://localhost/iprc/signup/reset.php?token='.$token'>here</a> to reset your password";
    
    //     $message = "Email: ". $email . "\n\n"." ". $msg;

    //     $headers = "MIME-Version: 1.0" . "\r\n";
    //     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    //     $headers .= "From: ". $email;
    //         echo "<br>". $message." " .$to ." " .$subject ." " .$headers;
    //         echo "hello ". mail($to, $subject, $message, $headers);
    //     if(mail($to, $subject, $message, $headers)){
    //         echo "Password link is sent to yor email";
    //     }else{
    //         echo "Invalid Email ID";
    //     }
    }
}
}
?>