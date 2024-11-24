<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data safely
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate fields
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Set up email details (optional)
    $to = "champsaraogi17@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nContact Number: $phone\nEmail: $email\nMessage:\n$message";
    $headers = "From: no-reply@example.com"; // Replace with a valid domain

    // Send email (optional)
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
} else {
    echo "Invalid Request Method.";
}
?>