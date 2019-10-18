<?php 
ob_start();
session_start();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail_utente = $email_reset;//$_POST['email'];

try {
//Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'Killerproteam123@gmail.com';            // SMTP username
  $mail->Password   = 'Killerproteam123!';                    // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('KillerProTeam@gmail.com', 'KillerPro Admin');
  $mail->addAddress($mail_utente);               // Name is optional

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Ripristino Password KillerPro';
  $mail->Body    = "Recupero password per l'account ".$mail_utente."<br>
  Per poter resettare la password <a href='http://localhost:8888/KillerPro/user/new_pwd.php?tk=".$token."&email=".$mail_utente."&action=reset'>clicca qui!</a>
   entro il ".$expDate;

  $mail->send();

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  $err=1;
  $_SESSION['err']=$err;
  header('location:forgotpwd.php?e=errinvio');
}
?>