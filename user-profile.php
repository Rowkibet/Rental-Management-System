<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>User Profile Page</title>
</head>
<body>
    <header>
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
            <h1 class="logo-text">Logo</h1>
        </a>

        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>

            <?php if(isset($_SESSION['id'])): ?>
                <li>
                    <a href="#">
                        <i class="fa fa-user" style="margin-right: 3px"></i>
                        Rowland
                        <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                    </a>
                    <ul>
                        <?php if($_SESSION['admin']): ?>
                            <li><a href="#">Dashboard</a></li>
                        <?php endif; ?>
                            <li><a href="#" class="logout">Logout</a></l>
                    </ul>
                 </li>
            <!-- If there are no session variables -->
            <?php else: ?> 
                <!-- <li><a href="#">Sign Up</a></li>
                <li><a href="#">Login</a></li> -->
            <?php endif; ?>   
        </ul>
    </header>

    <!-- main content -->

    <div class="user-page-wrapper">
        <div class="user-wrapper">
            <div class="inner-wrapper">
                <div class="user-image">
                    <img src="images/user-icon.png" alt="">
                </div>
                <div class="user-details">
                    <p>Mike Brown</p>
                    <p>Occupation: Self Employed</p>
                    <p>Tenant ID: 12345</p>
                    <a href="">Edit Details</a>
                    <a href="">Change Password</a>
                </div> 
            </div>
            <div class="user-more-info">
                <table>
                    <tr>
                        <td>Phone:</td>
                        <td>12345678</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>mikebrown@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td>23rd September</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="user-content-wrapper">
            <div class="payment">
                <h2>Rent Payment</h2>
                <table class=payment-table>
                    <tr>
                        <td>Amount Remaining</td>
                        <td>5000</td>
                    </tr>
                    <tr>
                        <td>Due Date</td>
                        <td>21/08/2021</td>
                    </tr>
                    <tr>
                        <td>Overpayment</td>
                        <td>0</td>
                    </tr>

                    <a href="">Make Payment</a>
                </table>

                <h2>Payment History</h2>
                <table>
                    <th>
                        <td>Invoice ID</td>
                        <td>Rent Amount</td>
                        <td>Amount Left</td>
                        <td>Due Date</td>
                    </th>
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

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-wrapper">
            <div class="address">
                <h1 class="logo-text">Logo</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Similique, quibusdam distinctio, adipisci omnis soluta
                    inventore obcaecati sequi nesciunt ad fuga consequuntur,
                    temporibus voluptatem
                </p>
            </div>

            <div class="quick-links">
                <h2> Quick Links</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Houses</a></li>
                        <li><a href="#">Apartments</a></li>
                    </ul>
            </div>

            <div class="contact-us">
                <h2> Contact Us </h2> <br>
                <div class="contact">
                    <p><i class="fas fa-phone"></i> &nbsp; 123-456-789</p>
                    <p><i class="fas fa-envelope"></i> &nbsp; info@meadows.edu</p>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright-footer">
            &copy;2020 Copyright
        </div>
    </footer>
</body>
</html>