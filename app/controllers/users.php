<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

$errors = array();

$tenant_fname = "";
$tenant_lname = "";
$tenant_DOB = "";
$tenant_email = "";
$tenant_phone_no = "";
$tenant_occupation = "";
$tenant_password = "";
$tenant_passwordConf = "";

function loginUser($user) {
    //Log User In
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['tenant_fname'];
    $_SESSION['admin'] = $user['admin_status'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    //Direct the user to respective page
    header('location: http://localhost/Rental-Management-System/index.php');
}

//Validate User Registration
function validateUser($user) {
    $errors=array();

    if(empty($user['tenant_fname'])) {
        array_push($errors, 'First name is required');
    }

    if(empty($user['tenant_lname'])) {
        array_push($errors, 'Last name is required');
    }

    if(empty($user['tenant_DOB'])) {
        array_push($errors, 'Date of birth is required');
    }

    if(empty($user['tenant_email'])) {
        array_push($errors, 'Email is required');
    }

    if(empty($user['tenant_phone_no'])) {
        array_push($errors, 'Phone number is required');
    }

    if(empty($user['tenant_occupation'])) {
        array_push($errors, 'Occupation is required');
    }

    if(empty($user['tenant_password'])) {
        array_push($errors, 'Password is required');
    }

    if($user['tenant_passwordConf'] !== $user['tenant_password']) {
        array_push($errors, 'Passwords do not match');
    } 

    $existingUser = selectOne('tenant', ['tenant_email' => $user['tenant_email']]);
    if($existingUser) {
        array_push($errors, 'Email already exists');
    }

    return $errors;
}

//User Registration
if(isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);

    if(count($errors) == 0) {
        unset($_POST['register-btn'], $_POST["tenant_passwordConf"]);
        $_POST['admin_status'] = 0;
        $_POST['tenant_password'] = password_hash($_POST['tenant_password'], PASSWORD_DEFAULT);

        $user_id = create('tenant', $_POST);
        $user =  selectOne('tenant', ['id' => $user_id]); 

        loginUser($user); 
    } else {
        $tenant_fname = $_POST['tenant_fname'];
        $tenant_lname = $_POST['tenant_lname'];
        $tenant_DOB = $_POST['tenant_DOB'];
        $tenant_email = $_POST['tenant_email'];
        $tenant_phone_no = $_POST['tenant_phone_no'];
        $tenant_occupation = $_POST['tenant_occupation'];
        $tenant_password = $_POST['tenant_password'];
        $tenant_passwordConf = $_POST['tenant_passwordConf'];
    }
}

if(isset($_POST['login-btn'])) {
    $user = selectOne('tenant', ['tenant_email' => $_POST['tenant_email']]);

    if($user && password_verify($_POST['tenant_password'], $user['tenant_password'])) {
        loginUser($user);
    }
}