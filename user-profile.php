<?php include("C:xampp\htdocs\Rental-Management-System\app\controllers\users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>User Profile Page</title>
</head>
<body>
    <!-- navigation bar  -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>

    <!-- success message -->
    <?php
        include("C:xampp/htdocs/Rental-Management-System/includes/flashMessage.php");
    ?>

    <div class="user-page-wrapper">
        <div class="user-wrapper">
            <div class="inner-wrapper">
                <div class="user-image">
                    <img src="assets/images/user-icon.png" alt="">
                </div>
                <div class="user-details">
                    <p><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></p>
                    <p>Occupation: <?php echo $_SESSION['occupation']; ?></p>
                    <p>Tenant ID: <?php echo $_SESSION['id']; ?></p>
                    <a href="edit_user.php?id=<?php echo $_SESSION['id']; ?>">Edit Details</a>
                    <a href="#">Add Photo</a>
                    <!-- <a href="#">Change Photo</a> -->
                    <a href="password-change.php?id=<?php echo $_SESSION['id']; ?>">Change Password</a>
                </div> 
            </div>
            <div class="user-more-info">
                <table>
                    <tr>
                        <td>Phone:</td>
                        <td><?php echo $_SESSION['phone_no']; ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $_SESSION['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td><?php echo $_SESSION['dob']; ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="user-content-wrapper">
            <div class="payment">
                <div class="rent-payment">
                    <h2>Rent Payment</h2>
                    <table style="margin-left: -30px">
                        <tr>
                            <td>Amount Remaining:</td>
                            <td>5000</td>
                        </tr>
                        <tr>
                            <td>Due Date:</td>
                            <td>21/08/2021</td>
                        </tr>
                        <tr>
                            <td>Overpayment:</td>
                            <td>0</td>
                        </tr>                       
                    </table>

                    <button class="btn small-btn submit-btn"><a href="">Make Payment</a></button>
                </div>
                
                <div class="payment-history">
                    <h2>Payment History</h2>
                    <table>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Rent Amount</th>
                            <th>Amount Left</th>
                            <th>Due Date</th>
                        </tr>
                        <tr>
                            <td>1102</td>
                            <td>8000</td>
                            <td>3000</td>
                            <td>21/08/2021</td>
                        </tr>
                        <tr>
                            <td>1101</td>
                            <td>2000</td>
                            <td>5000</td>
                            <td>15/07/2021</td>
                        </tr>
                    </table>
                </div>
                
            </div>
            
            <div class="issue-form">
                <h2>Issue Form</h2>
                <form action="">
                    <div class="form-control">
                        <label>Title</label>
                        <input type="text" name="issue_title" id="">
                    </div>
                    
                    <div class="form-control">
                        <label>Select Category</label>
                        <select name="issue_category" id="">
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    
                    <div class="form-control">
                         <label>Issue Description</label>
                         <textarea name="issue_body" id="" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include("C:xampp/htdocs/Rental-Management-System/includes/footer.php");
    ?>
</body>
</html>