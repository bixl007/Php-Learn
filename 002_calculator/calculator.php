<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if (isset($_POST["add"])) {
        $num3 = $num1 + $num2;
        echo "The sum of $num1 and $num2 is $num3<br>";
    }
    if (isset($_POST["sub"])) {
        $num3 = $num1 - $num2;
        echo "The subtraction of $num1 and $num2 is $num3<br>";
    }
    if (isset($_POST["mul"])) {
        $num3 = $num1 * $num2;
        echo "The multiplication of $num1 and $num2 is $num3<br>";
    }
    if (isset($_POST["div"])) {
        if ($num2 != 0) {
            $num3 = $num1 / $num2;
            echo "The division of $num1 and $num2 is $num3<br>";
        } else {
            echo "Division by zero is not allowed.<br>";
        }
    }
    if (isset($_POST["mod"])) {
        if ($num2 != 0) {
            $num3 = $num1 % $num2;
            echo "The modulus of $num1 and $num2 is $num3<br>";
        } else {
            echo "Modulus by zero is not allowed.<br>";
        }
    }
}
?>