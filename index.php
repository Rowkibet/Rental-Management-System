<?php include("C:xampp\htdocs\Rental-Management-System\app\controllers\users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Homepage</title>
</head>
<body>
    <!-- navigation bar  -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>

    <!-- Login Message -->
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message <?php echo $_SESSION['type']; ?>">
            <li><?php echo $_SESSION['message']; ?></li>

            <!-- The msg will disappear when the page is refreshed -->
            <?php
                unset($_SESSION['message']);
                unset($_SESSION['type']);
            ?>
        </div>
    <?php endif; ?>

    <!-- page wrapper -->
    <div class="page-wrapper">
        <h1 class="houses-title"> Houses </h1>
        <div class="house-wrapper">
            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/maisonette-house.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> House No. 1 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>

            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/maisonette-house.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> House No. 2 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>

            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/maisonette-house.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> House No. 3 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>
        </div>

        <a href="houses.php" class="btn browse-btn submit-btn"> Browse More Houses</a>

        <h1 class="houses-title"> Apartments </h1>
        <div class="house-wrapper">
            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/apartment-1.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> Apartment No. 1 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>

            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/apartment-2.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> Apartment No. 2 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>

            <div class="houses house-1">
                <div class="house-image">
                    <img src="images/apartment-3.jpg" alt="">
                </div>
                <div class="house-text">
                    <h1 class=""> Apartment No. 3 </h1>
                    <p>Deposit Amount: 12345</p>
                    <p>Rent Amount: 12345</p>
                    <p>Status: Available</p>
                    
                    <a href="single-house.php" class="btn book-btn"> Book Now</a>
                </div>
            </div>
        </div>

        <a href="apartments.php" class="btn browse-btn submit-btn"> Browse More Apartments</a>

        <!-- footer -->
        <?php
            include("C:xampp/htdocs/Rental-Management-System/includes/footer.php");
        ?>
        
</body>
</html>