<?php include("C:xampp\htdocs\Rental-Management-System\app\controllers\users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Single House</title>
</head>
<body>
    <!-- navigation bar  -->
    <?php
        include("C:xampp\htdocs\Rental-Management-System\includes\header.php");
    ?>

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
            
            <button class="btn submit-btn small-btn"><a href="single_house.html" > Book House</a></button>
        </div>
    </div>

    <!-- footer -->
    <?php
        include("C:xampp/htdocs/Rental-Management-System/includes/footer.php");
    ?>
</body>
</html>