<?php
session_start();
include 'navbar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['user_input'];

    // Save user input to temp file for Python script
    file_put_contents("ml/temp_user_input.txt", $input);

    // Run Python script (capture cleaned output)
    $command = escapeshellcmd("python ml/check_plagiarism.py");
    $output = shell_exec($command);

    // Validate the percentage (expecting number only)
    $percent = floatval(trim($output));  // float, not int

    // Cap max value to 100
    if ($percent > 100) {
        $percent = 100;
    }

    $color = "green";
    if ($percent == 100) $color = "red";
    elseif ($percent >= 50) $color = "orange";
    ?>

    <div class="container">
        <h3>Plagiarism Detected: <span style="color:<?= $color ?>"><?= $percent ?>%</span></h3>
        <a href="user_dashboard.php"><button>Back</button></a>
    </div>

<?php } else {
    header("Location: user_dashboard.php");
    exit;
}
?>



