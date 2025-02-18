<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $sub3 = $_POST["sub3"];
    $sub4 = $_POST["sub4"];
    $sub5 = $_POST["sub5"];

    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $percent = $total / 500 * 100;
    $grade = "";
    if ($percent >= 90 && $percent <= 100) {
        $grade = "A";
    } elseif ($percent >= 80 && $percent < 90) {
        $grade = "B";
    } elseif ($percent >= 70 && $percent < 80) {
        $grade = "C";
    } elseif ($percent >= 60 && $percent < 70) {
        $grade = "D";
    } elseif ($percent >= 50 && $percent < 60) {
        $grade = "E";
    } else {
        $grade = "F";
    }
    echo "The total marks of the student is " . $total . "<br>";
    echo "The percentage of the student is " . number_format($percent, 2) . "<br>";
    echo "The grade of the student is " . $grade;
}
?>