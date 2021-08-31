<?php include("C:xampp\htdocs\Rental-Management-System\app\controllers\users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login Page</title>
</head>

<body>
    <!-- navigation bar  -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>
    
    <div class="form-container">
        <div class="auth-form">
            <div class="form-header">
                <h2>Login</h2>
            </div>
    
            <form action="login.php" method="post" novalidate>
                <div class="form-control">
                    <label for="">Email Address</label>
                    <input type="email" name="tenant_email" id="email">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="tenant_password" id="password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <button type="submit" name="login-btn" class="btn submit-btn">Submit</button>

                <p>Or <a href="http://localhost/Rental-Management-System/register.php">SignUp</a></p>
                
            </form>
        </div>
    </div>

    <!-- <script src="js/login.js"></script> -->
</body>
</html>