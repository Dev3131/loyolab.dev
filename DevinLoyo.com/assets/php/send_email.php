<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "devin_loyo@outlook.com"; // Your email address
    $email_subject = "New Contact Form Submission: $subject";
    $email_content = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $email_subject, $email_content, $headers)) {
        echo "<p>Thank you for your message. It has been sent.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>
