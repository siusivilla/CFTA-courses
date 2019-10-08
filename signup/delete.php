<?php
$id=$_GET["id"];

include("log/db_connection.php");

try
{
$sql="DELETE FROM registra WHERE id=:id";
$s=$pdo->prepare($sql);
$s->bindValue(':id', $id);
$s->execute();
}
catch (PDOException $e)
{
  $error = 'Errore cancellazione: '.$e->getMessage();
  echo $error;
  exit();
}
header('location:../pagriservata.php');
?>