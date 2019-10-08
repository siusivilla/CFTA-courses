<?php
try
{
  //creo oggetto PDO per il collegamento al database di MAMP
  $pdo = new PDO('mysql:host=localhost:8889;dbname=viaggi', 'root', 'root');
  
  //$pdo = new PDO('mysql:host=localhost;dbname=viaggi', 'root', 'root');
  //ERRMODE_SILENT Error reporting,ERRMODE_EXCEPTION: Throw exceptions
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
//catturo l'eccezione
catch (PDOException $e)
{
  //messaggio di errore
  $output = 'Impossibile connettersi al DB.';
  //stampo il messaggio
  echo $output;
  //esco dalla procedura
  exit();
}
//proseguo nella procedura
$output = 'Database connection stabilita.';

?>