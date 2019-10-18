<?php
ob_start();
session_start();

if(isset($_POST["password"]) && isset($_POST["resetid"]) && isset($_POST["email"])){
  include'db_connection.php';
  print_r($_POST);
  $delete_id = $_POST["resetid"];
  $email=$_POST["email"];
  //controllo che utente esista
  try {
    $sql="SELECT * FROM users WHERE email=:email";
    $s=$pdo->prepare($sql);
    $s->bindValue(':email', $email);
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
  if($num_row>0) {
    $pwd_new1=trim($_POST["password"]);
    $pwd_new2=htmlspecialchars($pwd_new1);
    $pwd_new=md5($pwd_new2);

    //inserisco nel db aggiornando l'utente
    //UPDATE users SET password = '7adfca2f2aba4cd301a02b9f33ca9f' WHERE `users`.`id` = 3
    try {
      $sql="UPDATE users SET password = :password WHERE `users`.`id` = :id";
      $u=$pdo->prepare($sql);
      $u->bindValue(':password', $pwd_new);
      $u->bindValue(':id', $user_id);
      $u->execute();
      $num_row=$u->rowCount($u);
    } catch (PDOException $e) {
      $error = 'Errore inserimento: '.$e->getMessage();
      echo $error;
      exit();
    }

    //se non ci sono errori proseguo
    if ($num_row>0) {
      
      $err=2;
      $_SESSION['err']=$err;

      //"DELETE FROM `password_reset_temp` WHERE `password_reset_temp`.`id` = 7"?
      try {
        $sql="DELETE FROM password_reset_temp WHERE `password_reset_temp`.`id` = :id";
        $r=$pdo->prepare($sql);
        $r->bindValue(':id', $delete_id);
        $r->execute();
      } catch (PDOException $e) {
        $error = 'Errore inserimento: '.$e->getMessage();
        echo $error;
      }
      header('location:signin.php?e=newpwd');
    } else { //torno indietro avvisando dell'errore
      $err=1;
      $_SESSION['err']=$err;
      header('location:new_pwd.php?e=wrongupdate');
    }
  } else { //utente non esiste
    //torno indietro avvisando che non risulta utente
    $err=1;
    $_SESSION['err']=$err;
    header('location:new_pwd.php?e=nonesiste');
  }
}
else{
  //nessun dato post
  $err=1;
  $_SESSION['err']=$err;
  header('location:new_pwd.php?e=nomail');
}
?>