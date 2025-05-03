<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply.fancynumber@gmail.com';
        $mail->Password   = 'ynjy uanx ngrm jdli';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('noreply.fancynumber@gmail.com', 'Website Contact');
        $mail->addAddress('raipurnumbers@gmail.com');
        // $mail->addAddress('priyadarsak@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h3>Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> <a href='mailto:{$email}'>{$email}</a></p>
            <p><strong>Phone:</strong> <a href='tel:{$phone}'>{$phone}</a></p>
            <p><strong>Service:</strong> {$service}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        $mail->send();
        echo '<div class="alert alert-success">Thank you! Your message has been sent.<br>We will get back to you soon.</div>';
    } catch (Exception $e) {
        echo '<div class="alert alert-danger">Mailer Error: ' . $mail->ErrorInfo . '</div>';
    }
}
