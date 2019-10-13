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

$mittente_nome = $_POST['nome'];
$mittente_email = $_POST['email'];
$mail_oggetto = $_POST['oggetto'];
$mail_messaggio = $_POST['messaggio'];

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

  $mail->setFrom($mittente_email, $mittente_nome);
  //Recipients
  $mail->addAddress('Killerproteam123@gmail.com', 'KillerPro team');               // Name is optional

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'KillerPro - richiesta di contatto';
  $mail->Body    = "Richiesta di contatto da: ".$mittente_nome." <br /><br />Oggetto: ".$mail_oggetto."<br />Messaggio: ".$mail_messaggio;

  $mail->send();

  $mail_result=1;

  $_SESSION['email']=$mail_result;
  header('location:../contact.php?m=inviata');

} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  $err=1;
  $_SESSION['err']=$err;
  header('location:../contact.php?e=errinvio');
}
?>