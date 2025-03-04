<!DOCTYPE html>
<html>

<head>
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #0046a5;
        }

        h2 {
            color: #1a6f1c;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="number"] {
            padding: 5px;
            width: 100px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #0046a5;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #003569;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            gap: 20px;
        }
    </style>
</head>

<body>
    <h1>Factorial Calculator</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        function factorial($n)
        {
            if ($n == 1 || $n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        if ($number < 0) {
            echo "<h2>Factorial is not defined for negative numbers</h2>";
            return;
        }

        $result = factorial($number);
        echo "<h2>Factorial of $number is: $result</h2>";
    }
    ?>
</body>

</html>