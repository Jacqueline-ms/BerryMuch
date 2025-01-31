<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "your-email@example.com";
    $subject = "New Message from Contact Form";
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>