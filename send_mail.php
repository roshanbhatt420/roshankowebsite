<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = "roshanbhatta605@gmail.com";
    $subject = "New Message from Website Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
