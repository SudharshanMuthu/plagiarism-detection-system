<?php
include "db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];  // plain text password from form
    $role = $conn->real_escape_string($_POST['role']);

    $res = $conn->query("SELECT * FROM users WHERE username='$username' AND role='$role'");

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $role;
            if ($role == 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found or role mismatch.";
    }
} else {
    echo "Invalid request method.";
}
?>
