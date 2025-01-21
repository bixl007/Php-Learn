<?php
$sub1 = readline("Enter the marks in sub1: ");
$sub2 = readline("Enter the marks in sub2: ");
$sub3 = readline("Enter the marks in sub3: ");
$sub4 = readline("Enter the marks in sub4: ");
$sub5 = readline("Enter the marks in sub5: ");

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percent = $total / 500 * 100;

echo "The percentage of the student is " . number_format($percent, 2);
?>