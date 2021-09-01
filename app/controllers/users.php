<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

$errors = array();

$tenant_id = "";
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
    $_SESSION['first_name'] = $user['tenant_fname'];
    $_SESSION['last_name'] = $user['tenant_lname'];
    $_SESSION['dob'] = $user['tenant_DOB'];
    $_SESSION['email'] = $user['tenant_email'];
    $_SESSION['phone_no'] = $user['tenant_phone_no'];
    $_SESSION['occupation'] = $user['tenant_occupation'];
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

    if(isset($_POST['register-btn'])) {
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
    }

    return $errors;
}

//validate user login
function validateLogin($user_data, $user_record) {
    $errors=array();
    $checkPassword = true;

    //prevents null error
    if(!empty($user_data['tenant_email']) && (!empty($user_record))) {
        $checkPassword = password_verify($user_data['tenant_password'], $user_record['tenant_password']);
    }
    
    if(empty($user_data['tenant_email'])) {
        array_push($errors, 'Email is required');
    } elseif(empty($user_record)) {
        array_push($errors, "Invalid Email");
    } elseif($user_record && !empty($user_data['tenant_password'])) {
        if($checkPassword == false) {
            array_push($errors, "Invalid Password");
        }
    }

    if(empty($user_data['tenant_password'])) {
        array_push($errors, 'Password is required');
    }

    return $errors;
}

function validatePassword($user) {
    $errors = array();

    if(empty($user['tenant_password'])) {
        array_push($errors, 'Password is required');
    }

    if(empty($user['tenant_passwordConf'])) {
        array_push($errors, 'Re-type password is required');
    }

    if(!empty($user['tenant_password']) && !empty($user['tenant_passwordConf'])) {
        if($user['tenant_passwordConf'] !== $user['tenant_password']) {
            array_push($errors, 'Passwords do not match');
        }   
    }

    return $errors;
}

//User Registration (Create User)
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
    $errors = validateLogin($_POST, $user);

    if(count($errors) == 0) {
        loginUser($user);
    } else {
        $tenant_email = $_POST['tenant_email'];
        $tenant_password = $_POST['tenant_password'];
    }  
}

//update user
    //Retrieve and display data on form
if(isset($_GET['id'])) {
    $user = selectOne('tenant', ['id' => $_GET['id']]);

    $tenant_id = $user['id'];
    $tenant_fname = $user['tenant_fname'];
    $tenant_lname = $user['tenant_lname'];
    $tenant_DOB = $user['tenant_DOB'];
    $tenant_email = $user['tenant_email'];
    $tenant_phone_no = $user['tenant_phone_no'];
    $tenant_occupation = $user['tenant_occupation'];
}

    //Call update function
if(isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if(count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['id']);

        update('tenant', $id, $_POST);
        $current_user = selectOne('tenant', ['id' => $id]); 

        //redirect to page and display message
        $_SESSION['id'] = $current_user['id'];
        $_SESSION['first_name'] = $current_user['tenant_fname'];
        $_SESSION['last_name'] = $current_user['tenant_lname'];
        $_SESSION['dob'] = $current_user['tenant_DOB'];
        $_SESSION['email'] = $current_user['tenant_email'];
        $_SESSION['phone_no'] = $current_user['tenant_phone_no'];
        $_SESSION['occupation'] = $current_user['tenant_occupation'];
        $_SESSION['message'] = 'User Details were Updated Successfully';
        $_SESSION['type'] = 'success';
        header('location: http://localhost/Rental-Management-System/user-profile.php');
        exit();
    } else {
        $tenant_fname = $_POST['tenant_fname'];
        $tenant_lname = $_POST['tenant_lname'];
        $tenant_DOB = $_POST['tenant_DOB'];
        $tenant_email = $_POST['tenant_email'];
        $tenant_phone_no = $_POST['tenant_phone_no'];
        $tenant_occupation = $_POST['tenant_occupation'];
    }
}

    //update user password
    if(isset($_GET['id'])) {
        $user = selectOne('tenant', ['id' => $_GET['id']]);
    
        $tenant_id = $user['id'];
    }

    if(isset($_POST['update-password'])) {
        //dd($_POST);
        $errors = validatePassword($_POST);

        if(count($errors) == 0) {
            $id = $_POST['id'];
            unset($_POST['tenant_passwordConf'], $_POST['update-password'], $_POST['id']);
            $_POST['tenant_password'] = password_hash($_POST['tenant_password'], PASSWORD_DEFAULT);

            update('tenant', $id, $_POST);

            $_SESSION['message'] = 'Password Updated Successfully';
            $_SESSION['type'] = 'success';
            header('location: http://localhost/Rental-Management-System/user-profile.php');
            exit();
        } else {
            $tenant_password = $_POST['tenant_password'];
            $tenant_passwordConf = $_POST['tenant_passwordConf'];
        }
    }