<?php

$num1 = readline("Enter the First Number: ");
$num2 = readline("Enter the Second Number: ");
$operation = readline("Enter the operations (+, -, *, /, **, %): ");

switch ($operation) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        $result = $num1 / $num2;
        break;
    case "**":
        $result = $num1 ** $num2;
        break;
    case "%":
        $result = $num1 % $num2;
        break;
    default:
        echo "Wrong operation selected" . "<br>";
}

echo "First Number is " . $num1 . " Second Number is " . $num2 . " Operation is " . $operation . " result is " . $result;


?>