<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "Devin.loyo@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your submission! We will be in touch shortly.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
