<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/resetPassword.css">
    <title>IPR | reset-password</title>
</head>

<body>

    <?php 
        require_once '../requirements/config.php';

        if(isset($_GET['token'])){
            $token = $_GET['token'];
            $query = "SELECT * FROM ipr_users WHERE token = '$token'";
            $result = mysqli_query($conn, $query);
    
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                $email = $row['email_id'];
            }   
        }
    
    ?>
    <div class="container text-center" id="container">
        <h2>Reset Password</h2>
        <div class="form-container">

            <form id="ResetPasswordForm">

                <div class="form-message" id="msg"></div>
                <input type="email" name="emailid" id="username"  class="form-input" value="<?php echo $email;?>">

                <input type="password" name="password" id="password" class="form-input" placeholder="New Password" required />
                <input type="password" name="confirm_password" id="confirm_password" class="form-input" placeholder="Confirm Password" required />
                <br>
                <input type="submit" name="submit" id="submit" class="button" value="Update" />
            </form>

        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../javascript/reset.js"></script>
    
</body>

</html>