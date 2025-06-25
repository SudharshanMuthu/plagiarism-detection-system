<?php include 'navbar.php'; ?>

<div class="container">
    <h2>Login</h2>
    <form method="post" action="login_process.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <select name="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>
        <button type="submit">Login</button>
    </form>
</div>
