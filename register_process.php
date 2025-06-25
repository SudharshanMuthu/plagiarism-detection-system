<?php
include "db.php";  // Your database connection file
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Secure password hash
    $role = $conn->real_escape_string($_POST['role']);

    // Check if username already exists
    $res = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($res->num_rows > 0) {
        echo "User already exists. Please choose a different username.";
    } else {
        // Insert new user
        $conn->query("INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')");
        echo "Registration successful. <a href='login.php'>Login here</a>";
    }
} else {
    echo "Invalid request method.";
}
?>
