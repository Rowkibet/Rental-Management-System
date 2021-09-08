<?php include("C:xampp/htdocs/Rental-Management-System/app/controllers/houses.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Edit House</title>
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
                    <li><a href="../tenants/index.php">Manage Tenants</a></li>
                    <li><a href="../tenants/create.php">Add Tenant</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Houses <i class="fa fa-chevron-down" style="font-size: .8em"></i></i></a>
                <ul>
                    <li><a href="index.php">Manage Houses</a></li>
                    <li><a href="create.php">Add House</a></li>
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

        <h2 class="page-title">Edit House</h2>

        <!-- error messages -->
        <?php
            include("C:xampp/htdocs/Rental-Management-System/includes/formErrors.php");
        ?>

        <form action="edit.php" method="post">

        <input type="hidden" name="house_id" value="<?php echo $house_id; ?>">
            <div class="form-control">
                <label>House Type</label>
                <select name="house_type" id="">
                    <?php if($house_type == 'Maisonette'): ?>
                        <option value=""></option>
                        <option selected value="Maisonette">Maisonette</option>
                        <option value="Apartment">Apartment</option>
                    <?php elseif($house_type == 'Apartment'): ?>
                        <option value=""></option>
                        <option value="Maisonette">Maisonette</option>
                        <option selected value="Apartment">Apartment</option>
                    <?php else: ?>
                        <option value=""></option>
                        <option value="Maisonette">Maisonette</option>
                        <option value="Apartment">Apartment</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-control">
                <label>Rooms</label>
                <input type="text" name="house_rooms" value="<?php echo $house_rooms; ?>" class="text-input">
            </div>
            <div class="form-control">
                <label>Deposit</label>
                <input type="text" name="house_deposit" value="<?php echo $house_deposit; ?>" class="text-input">
            </div>
            <div class="form-control">
                <label>Rent Price</label>
                <input type="text" name="house_rent" value="<?php echo $house_rent; ?>" class="text-input">
            </div>
            <div class="form-control">
            <label>Payment Period</label>
            <select name="payment_period" id="">
                <?php if($payment_period == 'Weekly'): ?>
                    <option value=""></option>
                    <option selected value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Annually">Annually</option>
                <?php elseif($payment_period == 'Monthly'): ?>
                    <option value=""></option>
                    <option value="Weekly">Weekly</option>
                    <option selected value="Monthly">Monthly</option>
                    <option value="Annually">Annually</option>
                <?php elseif($payment_period == 'Annually'): ?>
                    <option value=""></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option selected value="Annually">Annually</option>
                <?php else: ?>
                    <option value=""></option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Annually">Annually</option>
                <?php endif; ?>
            </select>
            </div>

            <div class="form-control">
                <?php if($house_status == 1): ?>
                    <input checked type="checkbox" name="house_status" class="checkbox">
                    House Status
                <?php else: ?>
                    <input type="checkbox" name="house_status" class="checkbox">
                    House Status
                <?php endif; ?>
            </div>
            
            <div>
                <button type="submit" name="update-house" class="btn submit-btn small-btn">Update House</button>
            </div>
        </form>
        <!-- // Admin Content -->
        </div>
    </div>
    <!-- // Admin Page Wrapper -->

    <script src="..\..\assets\js\admin.js"></script>

</body>
</html>