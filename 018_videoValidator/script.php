<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Validator</title>
</head>
<body>
    <h1>Video URL Validator</h1>
    <form action="script.php" method="post">
        <label for="videoUrl">Video URL:</label>
        <input type="url" id="videoUrl" name="videoUrl" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <input type="submit" value="Validate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $videoUrl = filter_input(INPUT_POST, 'videoUrl', FILTER_SANITIZE_URL);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

        if (filter_var($videoUrl, FILTER_VALIDATE_URL)) {
            echo "<p>Valid URL: " . htmlspecialchars($videoUrl) . "</p>";
            echo "<p>Description: " . htmlspecialchars($description) . "</p>";
        } else {
            echo "<p>Invalid URL</p>";
        }
    }
    ?>
</body>
</html>
