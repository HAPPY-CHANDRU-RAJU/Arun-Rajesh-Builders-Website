<?php
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->SMTPDebug = 0;  
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

//auth credential information
$mail->Username = "";
$mail->Password = "";

$mail->IsHTML(true);
$mail->SingleTo = true;

$mail->setFrom('no.reply.happie@gmail.com', 'AR Builders - Website Bot'); #your email id
