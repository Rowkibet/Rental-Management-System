<?php include("C:xampp/htdocs/Rental-Management-System/app/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Password Change</title>
</head>
<body>
    <!-- navigation bar -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>

    <div class="form-container">
        <div class="auth-form">
            <div class="form-header">
                <h2>Change Password</h2>
                <p>Please fill in this form with your details</p>
            </div>
    
            <form action="password-change.php" method="post" novalidate>
                <!-- error messages -->
                <?php
                    include("C:xampp/htdocs/Rental-Management-System/includes/formErrors.php");
                ?>

                <input type="hidden" name="id" value="<?php echo $tenant_id; ?>">

                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="tenant_password" value="<?php echo $tenant_password; ?>" id="password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small style="margin-right: -5px">Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Re-type Password</label>
                    <input type="password" name="tenant_passwordConf" value="<?php echo $tenant_passwordConf; ?>" id="confirm-password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <button type="submit" name="update-password" class="btn submit-btn">Update</button>

            </form>
        </div>
    </div>
    
    <!-- <script src="js/register.js"></script> -->
</body>
</html>