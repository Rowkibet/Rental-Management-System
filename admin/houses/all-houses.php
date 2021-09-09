<?php include("C:xampp/htdocs/Rental-Management-System/app/controllers/houses.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Manage Houses</title>
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

            <a href="index.php" class="btn submit-btn small-btn" style="width: 200px">Occupied Houses</a>

            <h2 class="page-title">All Houses</h2>

            <!-- Success Message -->
            <?php
                include("C:xampp/htdocs/Rental-Management-System/includes/flashMessage.php");
            ?>

            <?php if(isset($_SESSION['message'])): ?>
                <p>success message</p>
            <?php endif; ?>

            <div class="table-wrapper">
                <table>
                    <!-- columns and their names -->
                    <thead>
                        <th>House No</th>
                        <th>House Type</th>
                        <th>House Status</th>
                        <th colspan="3">Action</th>
                    </thead>

                    <!-- table rows -->
                    <?php foreach($allHouses as $key => $house): ?>
                        <tr>
                            <td><?php echo $house['id']; ?></td>
                            <td><?php echo $house['house_type']; ?></td>
                            <td><?php echo $house['house_status'] == 1 ? 'Occupied' : 'Available'; ?></td>
                            <td><a href="view.php?view_id=<?php echo $house['id']; ?>" class="view">view all details</a></td>
                            <td><a href="edit.php?edit_id=<?php echo $house['id']; ?>" class="edit">edit</a></td>
                            <td><a href="edit.php?del_id=<?php echo $house['id']; ?>" class="delete">delete</a></td>    
                        </tr>
                    <?php endforeach; ?> 

                </table>
            </div>
            
        <!-- // Admin Content -->
        </div>
    </div>
    <!-- // Admin Page Wrapper -->

    <script src="..\..\assets\js\admin.js"></script>

</body>
</html>