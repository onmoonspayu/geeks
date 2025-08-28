<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include_once('layout/config.php');
require 'vendor/autoload.php'; // Make sure you have PHPMailer installed via Composer

$siteTitle = "Appliancia";
$to = 'support@appliancia.com';
$host = 'appliancia.com';
$emailAddress = 'support@appliancia.com';
$password = 'gnZV(5ieev[~';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $host; // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = $emailAddress;     // Your email
        $mail->Password   = $password;        // App Password or email password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($to, $siteTitle); // Your receiving email

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Request: $subject";
        $mail->Body    = "
            <h3>New Inquiry Received</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='thank-you.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
