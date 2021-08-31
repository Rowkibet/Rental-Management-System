<?php include("C:xampp/htdocs/Rental-Management-System/app/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sign Up Page</title>
</head>
<body>
    <!-- navigation bar -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>

    <div class="form-container">
        <div class="auth-form">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Please fill in this form with your details</p>
            </div>
    
            <form action="register.php" method="post" novalidate>
                <!-- error messages -->
                <?php if(count($errors) > 0): ?>
                    <div class="message error">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="form-control">
                    <label for="">First Name</label>
                    <input type="text" name="tenant_fname" value= "<?php echo $tenant_fname; ?>" id="firstname">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Last Name</label>
                    <input type="text" name="tenant_lname" value= "<?php echo $tenant_lname; ?>" id="lastname">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Date Of Birth</label>
                    <input type="date" name="tenant_DOB" value= "<?php echo $tenant_DOB; ?>" id="dob">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Email Address</label>
                    <input type="email" name="tenant_email" value= "<?php echo $tenant_email; ?>" id="email">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Phone Number</label>
                    <input type="tel" name="tenant_phone_no" value= "<?php echo $tenant_phone_no; ?>" id="phone-number">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for=""> Occupation </label>
                    <input type="text" name="tenant_occupation" value= "<?php echo $tenant_occupation; ?>" id="occupation">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="tenant_password" value= "<?php echo $tenant_password; ?>" id="password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small style="margin-right: -5px">Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Confirm Password</label>
                    <input type="password" name="tenant_passwordConf" value= "<?php echo $tenant_passwordConf; ?>" id="confirm-password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <button type="submit" name="register-btn" class="btn submit-btn">Submit</button>

                <p>Or <a href="http://localhost/Rental-Management-System/login.php">Login</a></p>
            </form>
        </div>
    </div>
    
    <!-- <script src="js/register.js"></script> -->
</body>
</html>