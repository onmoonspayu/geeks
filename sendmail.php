<?php
header('Content-Type: application/json'); // Set response as JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo json_encode(["success" => false, "message" => "All fields are required!"]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email format!"]);
        exit;
    }

    // Email Settings
    $to_email = "support@appliancia.com"; // Change this to your email
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send email
    if (mail($to_email, $email_subject, $email_body, $headers)) {
        echo json_encode(["success" => true, "message" => "Thank you! Your message has been sent."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: Message could not be sent."]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request!"]);
}
?>
