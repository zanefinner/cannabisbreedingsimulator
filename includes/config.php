<?php
// Database configuration
define('DB_HOST', 'localhost');    // Replace with your database host
define('DB_USERNAME', 'root');     // Replace with your database username
define('DB_PASSWORD', '5245');         // Replace with your database password
define('DB_NAME', 'cannabis_simulator');   // Replace with your database name
define('DB_SOCKET', '/var/run/mysqld/mysqld.sock');

// Create a database connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>