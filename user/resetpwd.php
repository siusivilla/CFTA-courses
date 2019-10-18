<?php
ob_start();
session_start();
/* 
 * CREAZIONE ED INVIO TOKEN RECUPERO PASSWORD 
 */

//includo funzione random password
include_once('../inc/function.php');

//ricezione dati POST
if(isset($_POST["email"])){
  include'db_connection.php';

  //raccolgo i dati inseriti
  //recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
  $email_reset1=trim($_POST["email"]);
  $email_reset=htmlspecialchars($email_reset1);

  //controllo che utente esista
  try {
    $sql="SELECT * FROM users WHERE email=:email";
    $s=$pdo->prepare($sql);
    $s->bindValue(':email', $email_reset);
    $s->execute();
    $num_row=$s->rowCount($s);
    $user = $s->fetchAll();
    $user_id= $user[0]['id'];

  } catch (PDOExeption $e) {
    $error = 'Errore: '.$e->getMessage();
    echo $error;
    exit();
  }
  //utente esiste, proseguo con reset password
  if($num_row>0)
  {
    //creo password temporanea
    $token = token_generate(10);
    
    //strtotime ( string $time [, int $now = time() ] ) : int
    //strtotime — Parse about any English textual datetime description into a Unix timestamp
    //now - The timestamp which is used as a base for the calculation of relative dates.
    //creo la data di scadenza aggiungendo a now un ora
    //$expFormat = strtotime('+1 hour');

    $expFormat = mktime(date("H")+1, date("i"), date("s"), date("m") ,date("d"), date("Y"));
    $expDate = date("Y-m-d H:i:s",$expFormat);

    //inserisco nel db aggiornando l'utente
    //INSERT INTO `password_reset_temp` (`id`, `email`, `key`, `expDate`) VALUES ('1', 'killerpro@test.it', '1234rtgbhG', '2019-10-17 17:00:00');
    try {
      //$sql="INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES (':email', ':token', ':scadenza')";
      $sql="INSERT INTO `password_reset_temp` (`email`, `token`, `expDate`) VALUES ('".$email_reset."', '".$token."', '".$expDate."')";
      $u=$pdo->prepare($sql);
      /* $u->bindValue(':email', $email_reset);
      $u->bindValue(':token', $token);
      $u->bindValue(':scadenza', $expDate); */
      $u->execute();
      
      $num_row=$u->rowCount($u);
    } catch (PDOException $e) {
      $error = 'Errore inserimento: '.$e->getMessage();
      echo $error;
      exit();
    }
    
    //se non ci sono errori proseguo
    if ($num_row>0) {
      //invio email con password temporanea chiedendo di cambiarla
      include("../mailer/send_pwd.php");
      //email inviata, ritorno avvisando che email stata inviata
      //messaggio inviato con successo ha $_SESSION['err']==2
      $err=2;
      $_SESSION['err']=$err;
      header('location:forgotpwd.php');

    } else { //torno indietro avvisando dell'errore
      $err=1;
      $_SESSION['err']=$err;
      header('location:forgotpwd.php?e=wrongupdate');
    }
  }
  else { //utente non esiste
    //torno indietro avvisando che non risulta utente
    $err=1;
    $_SESSION['err']=$err;
    header('location:forgotpwd.php?e=nonesiste');
  }
}
else{
  //nessun dato post
  $err=1;
  $_SESSION['err']=$err;
  header('location:forgotpwd.php?e=nomail');
}
?>