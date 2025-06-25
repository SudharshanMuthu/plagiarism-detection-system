<?php
session_start();
if ($_SESSION['role'] != 'admin') die("Access denied");
?>

<form method="post" enctype="multipart/form-data">
    Upload Reference File: <input type="file" name="file" required><br><br>
    <button type="submit">Upload</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['file'])) {

    // 🛠 Ensure 'uploads/' folder exists
    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    $filename = basename($_FILES["file"]["name"]);
    $targetPath = "uploads/" . $filename;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetPath)) {
        echo "✅ File uploaded successfully: <strong>$filename</strong>";
    } else {
        echo "❌ Error: File upload failed.";
    }
}
?>
