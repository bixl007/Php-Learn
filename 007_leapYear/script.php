<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Check</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
            margin: auto;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 5px;
            margin: 200px auto;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="year">Enter a year:</label>
        <input type="number" name="year" id="year" placeholder="Year..." required>
        <input type="submit" value="Check" name="checkLeapYear">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["checkLeapYear"])){
            $year = (int)$_POST["year"];
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        echo "<p style='text-align: center; font-family: Arial, sans-serif;'>$year is a leap year.</p>";
                    } else {
                        echo "<p style='text-align: center; font-family: Arial, sans-serif;'>$year is not a leap year.</p>";
                    }
                } else {
                    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>$year is a leap year.</p>";
                }
            } else {
                echo "<p style='text-align: center; font-family: Arial, sans-serif; color: red'>$year is not a leap year.</p>";
            }
        }
    }
    ?>
</body>
</html>

