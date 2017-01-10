<?php
date_default_timezone_set('Etc/UTC');
require_once('PHPMailer/PHPMailerAutoload.php');
$to = $_POST["email"];
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "devitapp@itats.ac.id";//e-mail pengguna
$mail->Password = "akumahapatuh";//password pengguna
$mail->SetFrom("devitapp@itats.ac.id");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress($to);
$mail->SMTPOptions = array (
    'ssl' => array (
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 ?>