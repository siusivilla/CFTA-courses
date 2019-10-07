<?php
try
{
    $pdo = new PDO('mysql:host=localhost:8889;dbname=killerpro', 'root', 'root');
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $output = 'Impossibile connettersi al database.';
    echo $output;
    exit();
}
$output = 'Connessione al database stabilita.';
?>
