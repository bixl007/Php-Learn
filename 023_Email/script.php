<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$to = "xyrix007@gmail.com";
$from = "xyrix007@gmail.com";
$subject = "Test Email";
$message = "This is a test email";
$headers = "From: $from";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully to $to";
} else {
    echo "Email not sent from $from. Check your SMTP configuration.";
}
