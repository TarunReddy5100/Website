<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'tarunreddy94786@gmail.com'; // Your email address
    $subject = 'Contact Form Submission';

    // Collect and sanitize form data
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phoneNum = filter_input(INPUT_POST, 'phoneNum', FILTER_SANITIZE_STRING);
    $companyName = filter_input(INPUT_POST, 'companyName', FILTER_SANITIZE_STRING);
    $sub = filter_input(INPUT_POST, 'sub', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Check if all fields are valid
    if ($fname && $lname && $email && $phoneNum && $companyName && $sub && $message) {
        // Construct email message
        $body = "First Name: $fname\n\nLast Name: $lname\n\nEmail Id: $email\n\nPhone Number: $phoneNum\n\nCompany Name: $companyName\n\nSubject: $sub\n\nMessage:\n\t\t\t$message";

        // Send email
        if (mail($to, $subject, $body)) {
            echo 'Your message has been sent successfully.';
        } else {
            echo 'There was a problem sending your message. Please try again later.';
        }
    } else {
        echo 'Please fill in all fields correctly.';
    }
} else {
    echo 'Invalid request.';
}
?>


