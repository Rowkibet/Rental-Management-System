<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

$errors = array();

$table = 'tenant';

$tenant_id = "";
$tenant_fname = "";
$tenant_lname = "";
$tenant_DOB = "";
$tenant_email = "";
$tenant_phone_no = "";
$tenant_occupation = "";
$tenant_password = "";
$tenant_passwordConf = "";

$tenant_house = "";
$tenant_rent_status = "";

$allTenants = selectAll($table);

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

    if(isset($user['register-btn'])) {
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

    if(isset($user['update-tenant'])) {
        if(!empty($user['tenant_password']) || !empty($user['tenant_passwordConf'])) {
            if($user['tenant_passwordConf'] !== $user['tenant_password']) {
                array_push($errors, 'Passwords do not match');
            } 
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

        $user_id = create($table, $_POST);
        $user =  selectOne($table, ['id' => $user_id]); 

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
    $user = selectOne($table, ['tenant_email' => $_POST['tenant_email']]);
    $errors = validateLogin($_POST, $user);

    if(count($errors) == 0) {
        loginUser($user);
    } else {
        $tenant_email = $_POST['tenant_email'];
        $tenant_password = $_POST['tenant_password'];
    }  
}

//update user (for both user-profile and admin pages)
    //Retrieve and display data on form
if(isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $tenant_id = $user['id'];
    $tenant_fname = $user['tenant_fname'];
    $tenant_lname = $user['tenant_lname'];
    $tenant_DOB = $user['tenant_DOB'];
    $tenant_email = $user['tenant_email'];
    $tenant_phone_no = $user['tenant_phone_no'];
    $tenant_occupation = $user['tenant_occupation'];
}

    //Call update function
if(isset($_POST['update-user']) || isset($_POST['update-tenant'])) {
    $errors = validateUser($_POST);

    if(count($errors) == 0) {
        $id = $_POST['id'];
        $update_user = isset($_POST['update-user']);

        if(isset($_POST['update-tenant'])) {
            unset($_POST['tenant_password'], $_POST['tenant_passwordConf']);   
        }
        unset($_POST['update-user'], $_POST['id'], $_POST['update-tenant']);

        $count = update($table, $id, $_POST);
        $current_user = selectOne($table, ['id' => $id]); 

        //redirect to page and display message
        if($count == 1) {
            if($update_user) {
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
                $_SESSION['message'] = 'Tenant Details were Updated Successfully';
                $_SESSION['type'] = 'success';
                header('location: http://localhost/Rental-Management-System/admin/tenants/index.php'); 
                exit();
            }
        } elseif($count == -1) {
            if($update_user) {
                $_SESSION['message'] = 'Updating user details failed';
                $_SESSION['type'] = 'error';
                header('location: http://localhost/Rental-Management-System/user-profile.php');
                exit();
            } else {
                $_SESSION['message'] = 'Updating tenant details failed';
                $_SESSION['type'] = 'error';
                header('location: http://localhost/Rental-Management-System/admin/tenants/index.php'); 
                exit();
            }
        } else {
            $_SESSION['message'] = 'No changes made';
            $_SESSION['type'] = 'error';
            if($update_user) {
                header('location: http://localhost/Rental-Management-System/user-profile.php');
                exit();   
            } else {
                header('location: http://localhost/Rental-Management-System/admin/tenants/index.php'); 
                exit();   
            }
            
        }
        
    } else {
        $tenant_fname = $_POST['tenant_fname'];
        $tenant_lname = $_POST['tenant_lname'];
        $tenant_DOB = $_POST['tenant_DOB'];
        $tenant_email = $_POST['tenant_email'];
        $tenant_phone_no = $_POST['tenant_phone_no'];
        $tenant_occupation = $_POST['tenant_occupation'];
        if(isset($_POST['update-tenant'])) {
            $tenant_password = $_POST['tenant_password'];
            $tenant_passwordConf = $_POST['tenant_passwordConf']; 
        }
    }
}

    //update user password
    if(isset($_GET['id'])) {
        $user = selectOne($table, ['id' => $_GET['id']]);
    
        $tenant_id = $user['id'];
    }

    if(isset($_POST['update-password'])) {
        $errors = validatePassword($_POST);

        if(count($errors) == 0) {
            $id = $_POST['id'];
            unset($_POST['tenant_passwordConf'], $_POST['update-password'], $_POST['id']);
            $_POST['tenant_password'] = password_hash($_POST['tenant_password'], PASSWORD_DEFAULT);

            update($table, $id, $_POST);

            $_SESSION['message'] = 'Password Updated Successfully';
            $_SESSION['type'] = 'success';
            header('location: http://localhost/Rental-Management-System/user-profile.php');
            exit();
        } else {
            $tenant_password = $_POST['tenant_password'];
            $tenant_passwordConf = $_POST['tenant_passwordConf'];
        }
    }

    //Display details on view.php
    if(isset($_GET['view_id'])) {
        $id = $_GET['view_id'];
        $user = selectOne($table, ['id' => $id]);

        $tenant_id = $user['id'];
        $tenant_fname = $user['tenant_fname'];
        $tenant_lname = $user['tenant_lname'];
        $tenant_DOB = $user['tenant_DOB'];
        $tenant_email = $user['tenant_email'];
        $tenant_phone_no = $user['tenant_phone_no'];
        $tenant_occupation = $user['tenant_occupation'];
        $tenant_house = 'n/a';
        $tenant_rent_status = 'n/a';
    }

    //delete tenant
    if(isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $count = delete($table, $id);

        if($count == 1) {
            $_SESSION['message'] = 'Tenant deleted successfully';
            $_SESSION['type'] = 'success';
            header('location: http://localhost/Rental-Management-System/admin/tenants/index.php');
        } else {
            $_SESSION['message'] = 'Deleting house failed';
            $_SESSION['type'] = 'error';
            header('location: http://localhost/Rental-Management-System/admin/tenants/index.php');
        }
    }