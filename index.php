<?php
// Start session and include necessary files
session_start();
require_once 'includes/config.php';
require_once 'includes/db.php';

// Check if user is logged in, redirect to game.php if logged in
if (isset($_SESSION['user_id'])) {
    header('Location: game.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cannabis Simulator</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="container">
        <h1>Welcome to Cannabis Simulator</h1>
        <p>Start growing and breeding your own cannabis strains in this 8-bit styled simulator.</p>
        <a href="register.php" class="btn">Get Started</a>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>