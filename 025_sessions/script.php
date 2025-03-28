<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$sql = "INSERT INTO user (username, email, password) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[password]') ";

if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>