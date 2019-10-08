<?php
try
{
  $sql="SELECT * FROM registra WHERE email=:email";
  $s=$pdo->prepare($sql);
  $s->bindValue(':email', $email_reg);
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