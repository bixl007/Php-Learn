<?php
$num1 = 10;
$num2 = 10.89;

if (is_int($num1)) {
    echo "The number is int ";
} else {
    echo "The number is not int";
}

if (filter_var($num2)) { // In case we use getline then we have to use filter_var
    echo "The number is float ";
} else {
    echo "The number is not float";
}

?>