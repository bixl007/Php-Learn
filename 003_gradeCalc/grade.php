<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST["marks"];
    $grade = "";
    if ($marks >= 90 && $marks <= 100) {
        $grade = "A";
    } elseif ($marks >= 80 && $marks < 90) {
        $grade = "B";
    } elseif ($marks >= 70 && $marks < 80) {
        $grade = "C";
    } elseif ($marks >= 60 && $marks < 70) {
        $grade = "D";
    } elseif ($marks >= 50 && $marks < 60) {
        $grade = "E";
    } else {
        $grade = "F";
    }
    echo "The grade of the student is " . $grade;
}
?>