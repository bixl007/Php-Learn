<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $license = $_POST["license"];
    $experience = $_POST["experience"];

    // Eligibility criteria
    if ($age >= 18 && strtolower($license) == "yes") {
        if ($experience >= 1) {
            echo "<p>You are eligible for car insurance.</p>";
        } else {
            echo "<p>You are eligible for car insurance, but may have higher premiums due to limited driving experience.</p>";
        }
    } else {
        echo "<p>You are not eligible for car insurance.</p>";
    }
}
?>