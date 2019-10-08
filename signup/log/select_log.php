<?php
try
{
  $sql="SELECT * FROM registra WHERE email=:email AND password=:password";
  $s=$pdo->prepare($sql);
  /* $s->bindValue(':email', "killer@gmail.com");
  $s->bindValue(':password',"c17054b0785e42e68bd8d16ac9ffc31a"); */
  $s->bindValue(':email', $email_log);
  $s->bindValue(':password', $pwd_log);
  $s->execute();

  $num_row=$s->rowCount($s);
}
catch (PDOException $e)
{
  $error = 'Errore recupero: '.$e->getMessage();
  echo $error;
  exit();
}
?>