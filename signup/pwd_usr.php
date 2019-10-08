<?php
//recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
//$email_log1=trim($_POST["email_log"]);
//$email_log=htmlspecialchars($email_log1);

$pwd_log1=trim($_GET["pwd_log"]);
$pwd_log2=htmlspecialchars($pwd_log1);
$pwd_log=md5($pwd_log2);

$email_log=$_GET["email_log"];

include_once("db_connection.php");

  $sql="SELECT * FROM registra WHERE email=:email AND password=:password";
  $s=$pdo->prepare($sql);
  $s->bindValue(':email', $email_log);
  $s->bindValue(':password', $pwd_log);
  $s->execute();

  $num_row=$s->rowCount($s);

  if($num_row == 0){
    $ritorno = "falso";
    echo $ritorno;
  }
  else{
    $ritorno = "vero";
    echo $ritorno;
  };

?>