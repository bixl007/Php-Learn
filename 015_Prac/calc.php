<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Num1:
        <input type="number" name="num1">
        Num2:
        <input type="number" name="num2">
        <input type="submit" value="add" name="add">
        <input type="submit" value="sub" name="sub">
        <input type="submit" value="mul" name="mul">
        <input type="submit" value="div" name="div">
        <input type="submit" value="mod" name="mod">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        if(isset($_POST["add"])) {
            $num3 = $num1 + $num2;
            echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The result is $num3.</p>";
        } elseif(isset($_POST["sub"])) {
            $num3 = $num1 - $num2;
            echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The result is $num3.</p>";
        } elseif(isset($_POST["mul"])) {
            $num3 = $num1 * $num2;
            echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The result is $num3.</p>";
        } elseif(isset($_POST["div"])) {
            if ($num2 != 0) {
                $num3 = $num1 / $num2;
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The result is $num3.</p>";
            } else {
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>Cannot divide by zero.</p>";
            }
        } elseif(isset($_POST["mod"])) {
            if ($num2 != 0) {
                $num3 = $num1 % $num2;
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>The result is $num3.</p>";
            } else {
                echo "<p style='text-align: center; font-family: Arial, sans-serif;'>Cannot divide by zero.</p>";
            }
        }
    }
?>