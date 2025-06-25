<?php include "db.php"; session_start(); ?>
<?php include 'navbar.php'; ?>

<div class="container">
    <h2>Welcome to the Plagiarism Detection System</h2>
    <p>Login or Register to continue.</p>
</div>

<form method="post">
    Username: <input name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $res = $conn->query("SELECT * FROM users WHERE username='$uname'");
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $uname;
            $_SESSION['role'] = $row['role'];
            header("Location: " . ($row['role'] == 'admin' ? "admin_dashboard.php" : "user_dashboard.php"));
        } else echo "Invalid password.";
    } else echo "User not found.";
}
?>
