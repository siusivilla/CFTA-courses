<?php
ob_start();
session_start();

$nome_mittente = $_POST['nome_cont'];
$mail_mittente = $_POST['email_cont'];
$oggetto = $_POST['oggetto_cont'];
$testo = $_POST['testo_cont'];
$mail_destinatario = "Killerproteam123@gmail.com";

$mail_oggetto = "richiesta di contatto";
$mail_corpo = "Richiesta di contatto da: ".$mail_mittente." che scrive oggetto: ".$oggetto." - Contenuto del messaggio: ".$testo;

$mail_headers = "From: ".$nome_mittente." <".$mail_mittente.">\r\n ";
$mail_headers .="X-Mailer: PHP/".phpversion();

if(mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
//if(mail("Killerproteam123@gmail.com", "test", "whatttttt", "from me")){
    $mail=1;
    $_SESSION['email']=$mail;
    //header('location:../contatti.php');
} else {
    $mail=0;
    $_SESSION['email']=$mail;
    //header('location:../contatti.php');
}

?>