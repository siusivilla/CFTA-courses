<?php
try
{
  $sql="INSERT INTO registra (`email`, `password`) VALUES (:email, :password)";
  $s=$pdo->prepare($sql);
  $s->bindValue(':email', $email_reg);
  $s->bindValue(':password', $pwd_reg);
  $s->execute();

  $num_row=$s->rowCount($s);
}
catch (PDOException $e)
{
  $error = 'Errore inserimento: '.$e->getMessage();
  echo $error;
  exit();
}
?>