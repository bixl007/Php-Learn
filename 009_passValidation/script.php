<html>

<head>
    <title>Password Validation</title>
</head>

<body>
    <h1>Password Validation</h1>
    <form action="script.php" method="post">
        <label for="password">Enter password:</label>
        <input type="password" name="password" id="password">
        <input type="checkbox" onclick="togglePassword()"> Show Password
        <input type="submit" value="Validate">
    </form>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>

    <?php
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (validatePassword($password)) {
            echo "<p>Password is valid</p>";
        } else {
            echo "<p>Password is not valid</p>";
        }
    }

    function validatePassword($password)
    {
        if (strlen($password) < 8) {
            return false;
        }
        if (!preg_match("/[A-Z]/", $password)) {
            return false;
        }
        if (!preg_match("/[a-z]/", $password)) {
            return false;
        }
        if (!preg_match("/[0-9]/", $password)) {
            return false;
        }
        if (!preg_match("/[^A-Za-z0-9]/", $password)) {
            return false;
        }
        return true;
    }
    ?>
</body>

</html>
