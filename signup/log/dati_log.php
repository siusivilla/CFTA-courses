<?php
//recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
$email_log1=trim($_POST["email_log"]);
$email_log=htmlspecialchars($email_log1);

$pwd_log1=trim($_POST["pwd_log"]);
//$pwd_log2=htmlspecialchars($pwd_log1);
//$pwd_log=md5($pwd_log2);
//cripto la variabile
$pwd_log=md5($pwd_log1);
?>