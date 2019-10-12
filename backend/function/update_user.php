<?php
  // UPDATE users SET `email` = 'siusi.villa@gmail.con', `password` = MD5('susannavilla') WHERE `users`.`id` = 2
  if (isset($_POST['update_button'])) {
    //update action
  } else if (isset($_POST['delete_button'])) {
      //delete action
  } else {
      //no button pressed
  }
  //controllo esistenza utente
  try {
    $sql="SELECT * FROM users WHERE email=:email";
    $s=$pdo->prepare($sql);
    $s->bindValue(':email', $email_reg);
    $s->execute();
    $num_row=$s->rowCount($s);
  } catch (PDOExeption $e) {
      $error = 'Errore: '.$e->getMessage();
      echo $error;
      exit();
  } 
?>