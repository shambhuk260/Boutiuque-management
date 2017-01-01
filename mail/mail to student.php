<?php
require_once('PHPMailerAutoload.php');

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
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body = "Hello";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}
?>
