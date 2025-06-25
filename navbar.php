<div class="navbar">
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
    <?php if (isset($_SESSION['user'])): ?>
        <a href="<?php echo $_SESSION['role'] == 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php'; ?>">Dashboard</a>
        <a href="logout.php">Logout (<?php echo $_SESSION['user']; ?>)</a>
    <?php endif; ?>
</div>
