<?php
require_once('class.smtp.php');
require_once('class.phpmailer.php');
function sendmail($to,$nameto,$subject,$message,$altmess)  {

  $from  = "info@lela.lk";
  $namefrom = "Lela";
  $mail = new PHPMailer();  
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();   // by SMTP
  $mail->SMTPAuth   = true;   // user and password
  $mail->Host       = "";
  $mail->Port       = 465;
  $mail->Username   = $from;  
  $mail->Password   = "";
  $mail->SMTPSecure = "ssl";    // options: 'ssl', 'tls' , ''  
  $mail->setFrom($from,$namefrom);   // From (origin)
     // There is also addBCC
  $mail->Subject  = $subject;
  $mail->AltBody  = $altmess;
  $mail->Body = $message;
  $mail->isHTML();   // Set HTML type
//$mail->addAttachment("attachment");  
  $mail->addAddress($to, $nameto);
  return $mail->send();
}
$sub="Your ticket to CodezHub V1.0";
$msg="<html><head></head></html>";

sendmail($row['email'],$row['fullname'],$sub,$msg,'') ;
?>