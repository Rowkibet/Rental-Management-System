<header>
        <a href="index.php" class="logo">
            <h1 class="logo-text">Logo</h1>
        </a>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Properties</a>
            <ul>
                <li><a href="houses.php">Houses</a></li>
                <li><a href="apartments.php">Apartments</a></l>
            </ul>    
        
            </li>

            <?php if(isset($_SESSION['id'])): ?>
                <li>
                    <a href="#">
                        <i class="fa fa-user" style="margin-right: 3px"></i>
                        <?php echo $_SESSION['first_name']; ?>
                        <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                    </a>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="user-profile.php">Profile</a></li>
                        <li><a href="logout.php" class="logout">Logout</a></l>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </header>