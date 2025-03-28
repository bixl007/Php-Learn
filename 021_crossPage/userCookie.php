<?php
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    setcookie('preferred_language', $language, time() + (7 * 24 * 60 * 60));
    header('Location: displayCookie.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Language Preference</title>
</head>
<body>
    <form method="post" action="">
        <label for="language">Choose your preferred language:</label>
        <select name="language" id="language">
            <option value="English">English</option>
            <option value="French">French</option>
        </select>
        <button type="submit">Save Preference</button>
    </form>
</body>
</html>
