<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'recipient@example.com';

    // Set the email subject
    $subject = 'New Contact Form Submission';

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email content
    $emailContent = "Name: $name<br>";
    $emailContent .= "Email: $email<br>";
    $emailContent .= "Message: $message<br>";

    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you for your message. We'll get back to you shortly.";
    } else {
        echo "Oops! An error occurred while sending the email.";
    }
}
?>
