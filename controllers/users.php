<?php
include("C:xampp/htdocs/Rental-Management-System/database/db.php");

//User Registration
if(isset($_POST['register-btn'])) {
    unset($_POST['register-btn'], $_POST["tenant_passwordConf"]);
    $_POST['admin_status'] = 0;
    $_POST['tenant_password'] = password_hash($_POST['tenant_password'], PASSWORD_DEFAULT);

    $user_id = create('tenant', $_POST);

    if($user_id) {
        echo "Registration Successful";
    }
}