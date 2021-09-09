<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

$table = 'houses';

$errors = array();
$house_id = "";
$house_type = "";
$house_rooms = "";
$house_deposit = "";
$house_rent = "";
$payment_period = "";
$house_status = "";

$tenant_name = "";
$rent_status = "";
$house_condition = "";

$allHouses = selectAll($table);

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
            header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
        } else {
            $_SESSION['message'] = 'Adding house failed';
            $_SESSION['type'] = 'error';
            header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
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

//displaying on view page
if(isset($_GET['view_id'])) {
    $id = $_GET['view_id'];
    $house = selectOne($table, ['id' => $id]);

    $house_id = $id;
    $house_type = $house['house_type'];
    $tenant_name = 'n/a';
    $house_rooms = $house['house_rooms'];
    $house_deposit = $house['house_deposit'];
    $house_rent = $house['house_rent'];
    $rent_status = 'n/a';
    $house_condition = 'n/a';
}

//update house
    //display details
if(isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $house = selectOne($table, ['id' => $id]);

    $house_id = $id;
    $house_type = $house['house_type'];
    $house_rooms = $house['house_rooms'];
    $house_deposit = $house['house_deposit'];
    $house_rent = $house['house_rent'];
    $payment_period = $house['payment_period'];
    $house_status = $house['house_status'] == 1 ? 1 : 0;
}

if(isset($_POST['update-house'])) {
    $errors = validateHouse($_POST);
    
    if(count($errors) == 0) {
        $id = $_POST['house_id'];
        unset($_POST['update-house'], $_POST['house_id']);
        $_POST['house_status'] = isset($_POST['house_status']) ? 1 : 0;

        $count = update($table, $id, $_POST);
        if($count) {
            $_SESSION['message'] = 'House updated successfully';
            $_SESSION['type'] = 'success';
            header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
        } else {
            $_SESSION['message'] = 'Updating house failed';
            $_SESSION['type'] = 'error';
            header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
        }
    } else {
        $house_id = $_POST['house_id'];
        $house_type = $_POST['house_type'];
        $house_rooms = $_POST['house_rooms'];
        $house_deposit = $_POST['house_deposit'];
        $house_rent = $_POST['house_rent'];
        $payment_period = $_POST['payment_period'];
        $house_status = isset($_POST['house_status']) ? 1 : 0;
    }
}

//delete house
if(isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);

    if($count == 1) {
        $_SESSION['message'] = 'House deleted successfully';
        $_SESSION['type'] = 'success';
        header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
    } else {
        $_SESSION['message'] = 'Deleting house failed';
        $_SESSION['type'] = 'error';
        header('location: http://localhost/Rental-Management-System/admin/houses/all-houses.php');
    }
}