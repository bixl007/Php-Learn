<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote Eligibility Check</title>
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
        <label for="age">Enter your age:</label>
        <input type="number" name="age" id="age" placeholder="Age..." required>
        <input type="submit" value="Check" name="checkEligibility">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["checkEligibility"])){
            $age = (int)$_POST["age"];
            if ($age >= 18) {
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>You are eligible to vote.</p>";
            } else {
                echo "<p style='text-align: center; font-family: Arial, sans-serif; color: red;'>You are not eligible to vote.</p>";
            }
        }
    }
    ?>
</body>
</html>
