<?php
ob_start();
session_start();

if(isset($_POST["email"])){
    
    include'db_connection.php';

    //raccolgo i dati inseriti
    //recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
    $email_reg1=trim($_POST["email"]);
    $email_reg=htmlspecialchars($email_reg1);
    //recupero password
    $pwd_reg1=trim($_POST["password"]);
    $pwd_reg2=htmlspecialchars($pwd_reg1);
    $pwd_reg=md5($pwd_reg2);

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

    //se esiste già l'email
    if($num_row>0)
    {
      $err=1;
      $_SESSION['err']=$err;
      
      header('location:signup.php?e=esiste');
    }
    else
    {
      //se non ho trovato righe inserisco nuovo utente attraverso INSERT
      try {
        $sql="INSERT INTO users (email, password) VALUES (:email, :password)";
        $s=$pdo->prepare($sql);
        $s->bindValue(':email', $email_reg);
        $s->bindValue(':password', $pwd_reg);
        $s->execute();

        $num_row=$s->rowCount($s);

      } catch (PDOException $e) {
        $error = 'Errore inserimento: '.$e->getMessage();
        echo $error;
        exit();
      }

      //invio email di conferma o rimando semplicemente al login
      //loggo l'utente
      $_SESSION['id']=$row['id'];
      $_SESSION['email']=$email_reg;
      $_SESSION['password']=$pwd_reg;
      //inseriscilo
      $err=0;
      $_SESSION['err']=$err;
      //header('location:../mail/mailchimp.php');
      header('location:../index.php');
    }
}
else{
    $err=1;
    $_SESSION['err']=$err;
}
?>