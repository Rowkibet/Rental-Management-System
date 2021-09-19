<?php include("C:xampp/htdocs/Rental-Management-System/app/controllers/users.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Edit Tenant</title>
</head>


<body>
    <!-- navigation bar -->
    <header>
        <a href="../index.php" class="logo">
            <h1 class="logo-text">Logo</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-user" style="margin-right: 3px"></i>
                     Rowland
                    <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                </a>
                <ul>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">
        <!-- left sidebar -->
        <div class="left-sidebar">
        <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li class="drop-down-menu"><a href="#">Tenants <i class="fa fa-chevron-down" style="font-size: .8em"></i></a>
                <ul>
                    <li><a href="index.php">Manage Tenants</a></li>
                    <li><a href="create.php">Add Tenant</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Houses <i class="fa fa-chevron-down" style="font-size: .8em"></i></i></a>
                <ul>
                    <li><a href="../houses/index.php">Manage Houses</a></li>
                    <li><a href="../houses/create.php">Add House</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Payments <i class="fa fa-chevron-down" style="font-size: .8em"></i></a>
                <ul>
                    <li><a href="#">Invoices</a></li>
                    <li><a href="#">Receipts</a></li>
                    <li><a href="#">Outstanding Balances</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Admin Users <i class="fa fa-chevron-down" style="font-size: .8em"></i></a>
                <ul>
                    <li><a href="../admin-users/index.php">Manage Users</a></li>
                    <li><a href="../admin-users/create.php">Add User</a></li>
                </ul>
                </li>
            </ul>
        </div>
        <!-- // left sidebar -->

        <!-- Admin content -->
        <div class="admin-content">

        <h2 class="page-title">Edit Tenant</h2>

        <!-- error messages -->
        <?php
            include("C:xampp/htdocs/Rental-Management-System/includes/formErrors.php");
        ?>

        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $tenant_id; ?>">

            <div class="form-control">
                <label>First Name</label>
                <input type="text" name="tenant_fname" value="<?php echo $tenant_fname; ?>">
            </div>
            <div class="form-control">
                <label>Last Name</label>
                <input type="text" name="tenant_lname" value="<?php echo $tenant_lname; ?>">
            </div>
            <div class="form-control">
                <label>Date of Birth</label>
                <input type="date" name="tenant_DOB" value="<?php echo $tenant_DOB; ?>">
            </div>
            <div class="form-control">
                <label>Email Address</label>
                <input type="text" name="tenant_email" value="<?php echo $tenant_email; ?>">
            </div>
            <div class="form-control">
                <label>Phone Number</label>
                <input type="text" name="tenant_phone_no" value="<?php echo $tenant_phone_no; ?>">
            </div>
            <div class="form-control">
                <label>Occupation</label>
                <input type="text" name="tenant_occupation" value="<?php echo $tenant_occupation; ?>">
            </div>
            <div class="form-control">
                <label>Password</label>
                <input type="password" name="tenant_password" value="<?php echo $tenant_password; ?>">
            </div>
            <div class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="tenant_passwordConf" value="<?php echo $tenant_passwordConf; ?>">
            </div>
            
            <div>
                <button type="submit" name="update-tenant" class="btn submit-btn small-btn">Update Tenant</button>
            </div>
        </form>
        <!-- // Admin Content -->
        </div>
    </div>
    <!-- // Admin Page Wrapper -->

    <script src="..\..\assets\js\admin.js"></script>

</body>
</html>