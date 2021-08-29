<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Single House</title>
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
    <div class="single-house">
        <div class="house-image">
            <img src="images/maisonette-house.jpg" alt="">
        </div>
        <div class="house-text">
            <h1 class=""> House Description </h1>
            <p>House No: 1</p>
            <p>House Type: Maisonette</p>
            <p>Rooms: 2 Bedroom</p>
            <p>House Status: Available</p>
            <p>Deposit: 20,000</p>
            <p>Rent: 15,000 (Monthly)</p>
            
            <a href="single_house.html" class="btn book-house"> Book House</a>
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