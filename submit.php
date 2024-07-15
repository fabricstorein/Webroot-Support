<?php 
$name   = $_POST['name'];
$email  = $_POST['email'];
$mobile =$_POST['mobile'];
$message =$_POST['message'];
$invoice    =$_POST['invoice'];
$refund_reason_code =$_POST['refund_reason_code'];

require "vender/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth= true;

$mail->Host ="smtp.example.com";
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port =587;

$mail->Username ="bhushankumarroy@gmail.com";
$mail->Password="adhiraj@321";

$mail->setForm($email, $name);
$mail->addAddress("bhushankumarroy@gmail.com", "Bhushan");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";





