<!DOCTYPE html>
<html>
<head>
    <title>User Cookie</title>
</head>
<body>
    <h2>Enter Username</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" name="set" value="Set Cookie">
        <input type="submit" name="delete" value="Delete Cookie">
    </form>

    <?php
    if (isset($_POST['set']) && !empty($_POST['username'])) {
        $username = $_POST['username'];
        setcookie("username", $username, time() + 12300);
        echo "Cookie set for username: " . $username;
    }

    if (isset($_POST['delete'])) {
        setcookie("username", "", time() - 12300);
        echo "Cookie deleted.";
    }

    if (isset($_COOKIE['username'])) {
        echo "<p>Stored Cookie: " . $_COOKIE['username'] . "</p>";
    }
    ?>
</body>
</html>