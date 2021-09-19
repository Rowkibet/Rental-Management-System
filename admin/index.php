<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/fontawesome/css/all.min.css"  rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Dashboard</title>
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
                <li><a href="index.php">Dashboard</a></li>
                <li class="drop-down-menu"><a href="#">Tenants <i class="fa fa-chevron-down" style="font-size: .8em"></i></a>
                <ul>
                    <li><a href="tenants/index.php">Manage Tenants</a></li>
                    <li><a href="tenants/create.php">Add Tenant</a></li>
                </ul>
                </li>
                <li class="drop-down-menu"><a href="#">Houses <i class="fa fa-chevron-down" style="font-size: .8em"></i></i></a>
                <ul>
                    <li><a href="houses/index.php">Manage Houses</a></li>
                    <li><a href="houses/create.php">Add House</a></li>
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
                    <li><a href="admin-users/index.php">Manage Users</a></li>
                    <li><a href="admin-users/create.php">Add User</a></li>
                </ul>
                </li>
            </ul>
        </div>
        <!-- // left sidebar -->

        <!-- Admin content -->
        <div class="admin-content">
            
            <div class="card-wrapper">
                <div class="preview-card flex">
                    <p>Registered Tenants</p>
                    <p>12</p>
                </div>

                <div class="preview-card flex">
                    <p>House Units</p>
                    <p>16</p>
                </div>

                <div class="preview-card flex">
                    <p>Payments</p>
                    <p>5</p>
                </div> 
            </div>
            
            <div class="card-wrapper payments-preview">
                <div class="preview-card">
                    <h2>Recent Payments</h2>

                    <table>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Rent Amount</th>
                            <th>Amount Left</th>
                            <th>Due Date</th>
                        </tr>
                        <tr>
                            <td>1102</td>
                            <td>8000</td>
                            <td>3000</td>
                            <td>21/08/2021</td>
                        </tr>
                        <tr>
                            <td>1101</td>
                            <td>2000</td>
                            <td>5000</td>
                            <td>15/07/2021</td>
                        </tr>

                    </table>
                </div>

                <div class="preview-card">
                    <h2>Unpaid Invoices</h2>

                    <table>
                        <tr>
                            <th>Invoice ID</th>
                            <th>Invoiced To</th>
                            <th>House No</th>
                            <th>Due Date</th>
                        </tr>
                        <tr>
                            <td>1105</td>
                            <td>John</td>
                            <td>3</td>
                            <td>21/08/2021</td>
                        </tr>
                        <tr>
                            <td>1108</td>
                            <td>Peter</td>
                            <td>6</td>
                            <td>15/07/2021</td>
                        </tr>
                </div>
            </div>

        <!-- // Admin Content -->
        </div>
    </div>
    <!-- // Admin Page Wrapper -->

    <script src="..\assets\js\admin.js"></script>

</body>
</html>