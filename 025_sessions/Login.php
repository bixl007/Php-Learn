<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Basic validation
    if (empty($username) || empty($email) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check session for user data
    if (isset($_SESSION['user']) && $_SESSION['user']['username'] === $username && $_SESSION['user']['email'] === $email) {
        echo "Login successful. Welcome back, $username!";
    } else {
        echo "Invalid credentials or user not registered.";
    }
}
?>
