<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/signup.css">
    <title>IPR | Signup | Login</title>
    <style>
        /* .userContent {
            padding: 10px 20px;
            margin: auto;
            width: 350px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .userContent h3 {
            font-size: 17px;
        }

        .userContent p {
            font-size: 15px;
        }

        .userContent img {
            max-width: 100%;
            margin-bottom: 5px;
        } */
    </style>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container col-sm-12">
            <h1>SIGN UP</h1>
            <p>Please enter all the fields carefully</p>

            <?php //For developer : please do not modify name attribute and required status of the input fields 
            ?>
            <form action="signup.contr.php" method="POST">
                <input name="fname" id='fname' type="text" placeholder="Enter First Name" required />
                <input name="mname" id='mname' type="text" placeholder="Enter Middle Name" required />
                <input name="lname" id='lname' type="text" placeholder="Enter Last Name" required />
                <input name="email" id='email' type="email" placeholder="Enter Email" required />
                <select name="department" id="department" required>
                    <option value="none" selected disabled hidden>Select department</option>
                    <option value="elec">Electronics and Computer Science</option>
                    <option value="elc">Electronic Engineering</option>
                    <option value="cs">Computer Engineering</option>
                    <option value="it">Information Tecnology</option>
                    <option value="extc">Electronics and Telecommunication</option>
                    <option value="aids">Artificial Intelligence and Data Science</option>
                    <option value="cybsec">Cyber Security</option>
                </select>
                <input name="password" id='password' type="password" placeholder="Enter password" autocomplete="off" required />
                <input name="confirmPassword" id='cpassword' type="password" class="form__field" placeholder="Enter Comfirm password" autocomplete="off" required />
                </br>
                <button name="signup">Sign Up</button>
                
                <div class="spacer" style="height: 10px;"></div>
                <div class="small-device">
                    <p>Already have an Account! </p>
                    <a class="btn" id="login">Sign-In</a>
                </div>
            </form>
        </div>
        <!-- Login starts -->
        <div class="form-container sign-in-container">
            <h1>LOGIN</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <input type="email" name="emailid" class="form__field" placeholder="Enter Username" id='username' required />
                <input type="password" name="password" class="form__field" placeholder="Enter Password" id='name' autocomplete="off" required />
                </br>
                <button value="login" name="loginbtn" href="#">Login</button>
                <div class="spacer" style="height: 20px;"></div>
                <div class="small-device">
                    <p>Don't have an Account? </p>
                    <a class="btn" id="signUp">Create Now</a>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left col-md-12">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us.</p>
                    <p>Already have an Account! </p>
                    <button class="btn" id="login-big">Sign-In</button>
                </div>
                <div class="overlay-panel overlay-right col-md-12">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal information.</p>
                    <p>Don't have an Account? </p>
                    <button class="btn" id="signUp-big">Create Now</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('login');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () =>
            container.classList.add('right-panel-active')
        );

        signInButton.addEventListener('click', () =>
            container.classList.remove('right-panel-active')
        );

        // bigger devices
        const signUpButtonBig = document.getElementById('signUp-big');
        const signInButtonBig = document.getElementById('login-big');

        signUpButtonBig.addEventListener('click', () =>
            container.classList.add('right-panel-active')
        );

        signInButtonBig.addEventListener('click', () =>
            container.classList.remove('right-panel-active')
        );
    </script>
</body>

</html>