<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'info@azagava.com'; // Your email address
    $subject = 'Contact Form Submission';

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct email message
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'There was a problem sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request.';
}
?>
