<?php 
ob_start();
session_start();
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
    $pwd_new = password_generate(10);
    //cripto
    $pwd_reset=md5($pwd_new);

    //inserisco nel db aggiornando l'utente
    //UPDATE users SET password = '7adfca2f2aba4cd301a02b9f33ca9f' WHERE `users`.`id` = 3
    try {
      $sql="UPDATE users SET password = :password WHERE `users`.`id` = :id";
      $u=$pdo->prepare($sql);
      $u->bindValue(':password', $pwd_reset);
      $u->bindValue(':id', $user_id);
      $u->execute();
      
      $num_row=$u->rowCount($u);
    } catch (PDOException $e) {
      $error = 'Errore inserimento: '.$e->getMessage();
      echo $error;
      exit();
    }
    
    var_dump($num_row);

    //se non ci sono errori proseguo
    if ($num_row>0) {
      //invio email con password temporanea chiedendo di cambiarla
      include("../mailer/send_pwd.php");
      //email inviata, ritorno avvisando che email stata inviata
      // messaggio inviato con successo ha $_SESSION['err']==2
      $err=2;
      $_SESSION['err']=$err;
      header('location:forgotpwd.php?pn='.$pwd_new);

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