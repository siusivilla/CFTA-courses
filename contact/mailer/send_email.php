<?php
ob_start();
session_start();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'Killerproteam123@gmail.com';            // SMTP username
$mail->Password   = 'Killerproteam123!';                    // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to


$nome_mittente = $_POST['nome_cont'];
$mail_mittente = $_POST['email_cont'];
$oggetto = $_POST['oggetto_cont'];
$testo = $_POST['testo_cont'];

$mail_oggetto = $oggetto;

$mail_corpo = "Richiesta di contatto da: ".$mail_mittente." che scrive oggetto: ".$oggetto." - Contenuto del messaggio: ".$testo;

$mail->setFrom($mail_mittente, $nome_mittente);
$mail->addAddress('Killerproteam123@gmail.com','Killerproteam123!');

// Content
  $mail->isHTML(true);                               // Set email format to HTML
  $mail->Subject = "Viaggi - richiesta di contatto";
  $mail->Body    = $mail_corpo;

if ($mail->send()) {
  $mail=1;
  $_SESSION['email']=$mail;
  header('location:../../contatti.php#invio');
} else {
  $mail=0;
  $_SESSION['email']=$mail;
  header('location:../../contatti.php#invio');
}
?>