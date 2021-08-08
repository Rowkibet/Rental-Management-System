<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up Page</title>
</head>
<body>
    <header>
        <div class="logo"> Logo </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>   

    <div class="form-container">
        <div class="auth-form">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Please fill in this form with your details</p>
            </div>
    
            <form action="register.php" novalidate>
                <div class="form-control">
                    <label for="">First Name</label>
                    <input type="text" name="tenant_fname" id="firstname">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Last Name</label>
                    <input type="text" name="tenant_lname" id="lastname">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Date Of Birth</label>
                    <input type="date" name="tenant_DOB" id="dob">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Email Address</label>
                    <input type="email" name="tenant_email" id="email">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Phone Number</label>
                    <input type="tel" name="tenant_phone_no" id="phone-number">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for=""> Occupation </label>
                    <input type="text" name="tenant_occupation" id="occupation">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="tenant_password" id="password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small style="margin-right: -5px">Error message</small>
                </div>

                <div class="form-control">
                    <label for="">Confirm Password</label>
                    <input type="password" name="tenant_passwordConf" id="confirm-password">
                    <i class="fas fa-check-circle icon"></i>
                    <i class="fas fa-exclamation-circle icon"></i>
                    <small>Error message</small>
                </div>

                <button type="submit" name="register.btn">Submit</button>
            </form>
        </div>
    </div>
    
    <script src="js/register.js"></script>
</body>
</html>