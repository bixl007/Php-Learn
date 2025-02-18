<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Check</title>
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
        <label for="num">Enter a number:</label>
        <input type="number" name="num" id="num" placeholder="Number..." required>
        <input type="submit" value="Check" name="checkint">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["checkint"])){
            $num = (int)$_POST["num"];
            if(is_int($num)){ 
                if ($num > 0) {
                    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The number $num is positive.</p>";
                } elseif ($num < 0) {
                    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The number $num is negative.</p>";
                } else {
                    echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The number $num is zero.</p>";
                }
            }
            else {
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The number $num is not an integer.</p>";
            }
        }
    }
    ?>
</body>
</html>
