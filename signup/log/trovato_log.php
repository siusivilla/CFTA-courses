<?php
//inizio la sessione
ob_start();
session_start();

//controllo esistenza email
if(isset($_POST["email_log"])){
  //controllo esistenza utente
  include('form_login.php');
  //se utente esiste
  if($num_row>0)
  {
    //inserisco i dati del db in array
    $row = $s->fetch(PDO::FETCH_ASSOC);
    
    //imposto i dati della sessione
    $_SESSION['id']=$row['id'];
    $_SESSION['email_log']=$email_log;
    $_SESSION['pwd_log']=$pwd_log;

    $err=0;
    $_SESSION['err']=$err;

    //rimando all'area riservata
    header('location:../../pagriservata.php');
  }
  //se utente non esiste
  else
  {
    //restituisci errore
    $err=1;
    $_SESSION['err']=$err;
    //e rimanda alla registrazione
    header('location:../../registrati.php');
  }
}
//se non esiste email
else{
  //restituisci errore
  $err=1;
  $_SESSION['err']=$err;
}
?>
