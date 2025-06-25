<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'admin') {
    die("Access denied");
}
include 'navbar.php';
?>

<div class="container">
    <h2>Admin Dashboard</h2>
    <form method="post" enctype="multipart/form-data">
        Upload Reference File: <input type="file" name="file" required><br>
        <button type="submit">Upload</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['file'])) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) mkdir($uploadDir);

        $filePath = $uploadDir . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {
            echo "<p style='color:green;'>File uploaded successfully.</p>";
        } else {
            echo "<p style='color:red;'>Upload failed.</p>";
        }
    }
    ?>
</div>

