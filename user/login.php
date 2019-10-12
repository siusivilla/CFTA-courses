<?php
ob_start();
session_start();

if(isset($_POST["email"])){
    
    include'db_connection.php';
    
    $email_log1=trim($_POST["email"]);
    $email_log=htmlspecialchars($email_log1);
    
    $pwd_log1=trim($_POST["password"]);
    $pwd_log2=htmlspecialchars($pwd_log1);
    $pwd_log=md5($pwd_log2);
    
    include'select_user.php';

    if($num_row>0)
    {
        $row = $s->fetch(PDO::FETCH_ASSOC);

        $_SESSION['id']=$row['id'];
        $_SESSION['email']=$email_log;
        $_SESSION['password']=$pwd_log;

        $err=0;
        $_SESSION['err']=$err;

        header('location:../index.php'); 
    }
    else
    {
        $err=1;
        $_SESSION['err']=$err;
        
        header('location:signin.php?e=problemi_accesso');
    }
}
else{
    $err=1;
    $_SESSION['err']=$err;
}
?>