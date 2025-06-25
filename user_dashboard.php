<div class="container">
    <h2>User Dashboard</h2>
    <form method="post" action="check.php" enctype="multipart/form-data">
        <label>Option 1: Type or paste your code</label><br>
        <textarea name="user_input" rows="6" placeholder="Type or paste your code here..."></textarea><br><br>

        <label>Option 2: Upload a Python (.py) or Text (.txt) file</label><br>
        <input type="file" name="user_file" accept=".txt,.py"><br><br>

        <button type="submit">Check Plagiarism</button>
    </form>
</div>

