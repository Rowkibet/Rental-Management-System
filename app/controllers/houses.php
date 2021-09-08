<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

$table = 'houses';

$errors = array();
$house_type = "";
$house_rooms = "";
$house_deposit = "";
$house_rent = "";
$payment_period = "";
$house_status = "";

function validateHouse($house) {
    $errors = array();

    if(empty($house['house_type'])) {
        array_push($errors, 'House type is required');
    }

    if(empty($house['house_rooms'])) {
        array_push($errors, 'Rooms is required');
    }

    if(empty($house['house_deposit'])) {
        array_push($errors, 'Deposit is required');
    }

    if(empty($house['house_rent'])) {
        array_push($errors, 'Rent is required');
    }

    if(empty($house['payment_period'])) {
        array_push($errors, 'Payment period is required');
    }

    return $errors;
}

//create house
if(isset($_POST['add-house'])) {
    $errors = validateHouse($_POST);

    if(count($errors) == 0) {
       unset($_POST['add-house']);

        $_POST['house_status'] = isset($_POST['house_status']) ? 1 : 0;
        $house_id = create($table, $_POST);
        if($house_id) {
            $_SESSION['message'] = 'House added successfully';
            $_SESSION['type'] = 'success';
            header('location: http://localhost/Rental-Management-System/admin/houses/index.php');
        } else {
            $_SESSION['message'] = 'Adding house failed';
            $_SESSION['type'] = 'error';
            header('location: http://localhost/Rental-Management-System/admin/houses/index.php');
        } 
    } else {
        $house_type = $_POST['house_type'];
        $house_rooms = $_POST['house_rooms'];
        $house_deposit = $_POST['house_deposit'];
        $house_rent = $_POST['house_rent'];
        $payment_period = $_POST['payment_period'];
        $house_status = isset($_POST['house_status']) ? 1 : 0;
    }   
}

