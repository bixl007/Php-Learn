<!-- Php is not case sensitive for keywords -->
<!-- Php is loosly typed language -->

<?php
echo "Hello World", "<br>";
echo "Hey", "<br>", "There";

$a = 10;
$b = 20;

echo "The addition is " . $a + $b . "<br>";
echo "The subtraction is " . $a - $b . "<br>";
echo "The multiplication is " . $a * $b . "<br>";
echo "The division is " . $a / $b . "<br>";
echo "The modulus is " . $a % $b . "<br>";
echo "The exponent is " . $a ** $b . "<br>";

var_dump(value: $a); // type of variable
var_dump(value: $b);

echo "The size of int is: " . PHP_INT_SIZE . "<br>";
echo "The max value of int is: " . PHP_INT_MAX . "<br>";
echo "The min value of int is: " . PHP_INT_MIN . "<br>";

$num = 10;
echo "The number is $num <br>";
echo 'The number is ' . $num . ' <br>';

echo pi() . "<br>";
$str = "Xyz";
echo str_word_count($str) . "<br>";
echo strlen($str) . "<br>";
echo strpos($str, "Xyz" . "<br>");
echo str_repeat($str, 2) . "<br>";

$name = "Rahul";
if (is_null($name)) {
    echo "The name is null <br>";
} else {
    echo "The name is not null <br>";
}
$nullPrint = null;
if (is_null($nullPrint)) {
    echo "The name is null <br>";
} else {
    echo "The name is not null <br>";
}

?>