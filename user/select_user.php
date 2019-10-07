<?php
try
{
    $sql = "SELECT * FROM `users` WHERE email=:email AND password=:password";
    $s=$pdo->prepare($sql);
    $s->bindValue(':email', $email_log);
    $s->bindValue(':password', $pwd_log);
    $s->execute();
    
    $num_row=$s->rowCount($s);
}
catch (PDOExeption $e)
{
    $error = 'Errore di recupero: '.$e->getMessage();
    echo $error;
    exit();
}
?>