<?php 
  //connetto al database
include'db_connection.php';


?>
<?php
ob_start();
session_start();

if(isset($_POST["email"])){
    
    include'db_connection.php';

    //raccolgo i dati inseriti
    //recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
    $email_reg1=trim($_POST["email"]);
    $email_reg=htmlspecialchars($email_reg1);
    
    $pwd_reg1=trim($_POST["password"]);
    $pwd_reg2=htmlspecialchars($pwd_reg1);
    $pwd_reg=md5($pwd_reg2);

    //controllo esistenza utente
    try
    {
      $sql="SELECT * FROM users WHERE email=:email";
      $s=$pdo->prepare($sql);
      $s->bindValue(':email', $email_reg);
      $s->execute();

      $num_row=$s->rowCount($s);

    }
    catch (PDOExeption $e)
    {
        $error = 'Errore: '.$e->getMessage();
        echo $error;
        exit();
    }

    //se non esiste registro utente
    if($num_row==0)
    {
      //registro l'utente
      //invio email di conferma o rimando semplicemente al login
    }
    else
    {
        $err=1;
        $_SESSION['err']=$err;
        
        header('location:signup.php?e=problemi_registrazione');
    }
}
else{
    $err=1;
    $_SESSION['err']=$err;
}
?>