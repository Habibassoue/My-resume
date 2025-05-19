<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Your email address (where the messages will be sent)
    $to = "habibassoue299@gmail.com";

    // Email subject and content
    $subject = "New message from your online resume";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Try to send the email

    
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your message has been sent successfully. I will get back to you soon.</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again later.</h2>";
    }
} else {
    echo "<h2>Invalid request method.</h2>";
}
?>
