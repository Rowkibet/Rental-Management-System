<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Add House</title>
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
                <li><a href="#">Dashboard</a></li>
                <li class="drop-down-menu"><a href="#">Tenants <i class="fa fa-chevron-down" style="font-size: .8em"></i></a>
                <ul>
                    <li><a href="#">Manage Tenants</a></li>
                    <li><a href="#">Add Tenant</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Houses <i class="fa fa-chevron-down" style="font-size: .8em"></i></i></a>
                <ul>
                    <li><a href="#">Manage Houses</a></li>
                    <li><a href="#">Add House</a></li>
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
                    <li><a href="#">Manage Users</a></li>
                    <li><a href="#">Add User</a></li>
                </ul>
                </li>
            </ul>
        </div>
        <!-- // left sidebar -->

        <!-- Admin content -->
        <div class="admin-content">

        <h2 class="page-title">Add House</h2>

        <form action="create.php" method="post">
            <div class="form-control">
                <label>House Type</label>
                <input type="text" name="house_type" class="text-input">
            </div>
            <div class="form-control">
                <label>Rooms</label>
                <input type="text" name="rooms" class="text-input">
            </div>
            <div class="form-control">
                <label>Deposit</label>
                <input type="text" name="deposit" class="text-input">
            </div>
            <div class="form-control">
                <label>Rent Price</label>
                <input type="text" name="rent_price" class="text-input">
            </div>
            <div class="form-control">
            <label>Payment Period</label>
            <select name="payment_period" id="">
                <option value=""></option>
                <option value="1">Weekly</option>
                <option value="2">Monthly</option>
                <option value="3">Annually</option>
            </select>
            </div>

            <div class="form-control">
                <input type="checkbox" name="house_status" class="checkbox">
                House Status
            </div>
            
            <div>
                <button type="submit" class="btn submit-btn small-btn">Add House</button>
            </div>
        </form>
        <!-- // Admin Content -->
        </div>
    </div>
    <!-- // Admin Page Wrapper -->

    <script src="..\..\assets\js\admin.js"></script>

</body>
</html>