<?php

require_once('mail/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->SMTPSecure = 'tls';
$mail->Host = 'tls://smtp.gmail.com:587';
//$mail->Port = 587;
$mail->Username = 'shambhuk260@gmail.com';
$mail->Password = 'astha4638';
$mail->SMTPAuth = true;

$mail->From = 'shambhuk260@gmail.com';
$mail->FromName = 'Varsana';
$mail->AddAddress('subhadiplayek@gmail.com');
$mail->AddReplyTo('shambhuk260@gmail.com', 'Varsana');

$mail->IsHTML(true);
$mail->Subject    = "Varsana Booking Confirmation Details";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body = "<html><head></head><body><p>Hello subha</p></body></html>";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}

?>