<?php
$user_text = $_POST['user_content'];
$user_text = escapeshellarg($user_text); // secure input
$output = shell_exec("python ml/check_plagiarism.py $user_text");
echo "<h2>Plagiarism Detected: $output%</h2>";
?>