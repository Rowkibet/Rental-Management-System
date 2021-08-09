<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'rental management system';


// This object creates a connection to the specified database
$conn = new MySQLi($host, $user, $pass, $db_name);

// To check if there is any error while establishing connection
// if ($conn->connect_error) {
//     die('Database connection error: ' . $conn->connect_error);// The app will stop executing
// } else {
//     echo "DB connection successful";    
// }
?>