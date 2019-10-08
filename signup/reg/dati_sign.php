<?php
//recupero email pulendo da quel che potrebbe indicare un codice malevolo sql injection
$email_reg1=trim($_POST["email_reg"]);
$email_reg=htmlspecialchars($email_reg1);

$pwd_reg1=trim($_POST["pwd_reg"]);
$pwd_reg2=htmlspecialchars($pwd_reg1);
$pwd_reg=md5($pwd_reg2);
?>