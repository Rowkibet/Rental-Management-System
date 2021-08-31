<?php
include("C:xampp/htdocs/Rental-Management-System/app/database/db.php");

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


//User Registration
if(isset($_POST['register-btn'])) {
    unset($_POST['register-btn'], $_POST["tenant_passwordConf"]);
    $_POST['admin_status'] = 0;
    $_POST['tenant_password'] = password_hash($_POST['tenant_password'], PASSWORD_DEFAULT);

    $user_id = create('tenant', $_POST);
    $user =  selectOne('tenant', ['id' => $user_id]); 

    loginUser($user);
}

if(isset($_POST['login-btn'])) {
    // dd($_POST);
    $user = selectOne('tenant', ['tenant_email' => $_POST['tenant_email']]);

    if($user && password_verify($_POST['tenant_password'], $user['tenant_password'])) {
        loginUser($user);
    }
}