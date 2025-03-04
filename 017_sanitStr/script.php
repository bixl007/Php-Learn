<?php
$username = "A m i t <h1>";
$sanitized = filter_var($username, FILTER_SANITIZE_STRING);
echo $sanitized;
$ip = "172.157.2.1";
$sanitized = filter_var($ip, FILTER_VALIDATE_IP);
echo $sanitized;
$email = "fsd@glksdjfsl.com";
$sanitized = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $sanitized;
$url = "http://www.google.com";
$sanitized = filter_var($url, FILTER_VALIDATE_URL);
echo $sanitized;
$number = "123";
$sanitized = filter_var($number, FILTER_VALIDATE_INT);
echo $sanitized;
$video = "http://www.youtube.com/watch?v=123";
$sanitized = filter_var($video, FILTER_VALIDATE_URL);
?>