<?php
// Start session and include necessary files
session_start();
require_once 'includes/config.php';
require_once 'includes/db.php';

// Check if user is already logged in, redirect to game.php
if (isset($_SESSION['user_id'])) {
    header('Location: game.php');
    exit();
}

// Check if the registration form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // TODO: Validate form data (e.g., check for empty fields, validate username and password format)

    // Create a new user in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $hashedPassword);
    $stmt->execute();

    // Redirect to login page after successful registration
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cannabis Simulator - Register</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>