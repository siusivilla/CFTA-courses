<?php
session_start();

if(isset($_POST["email_reg"])){
    
    include('form_sign.php');
    //se ho fatto la selezione: SELECT  e ho trovato una riga, allora sono registrato
    if($num_row>0)   
    {
        $err=1;
        $_SESSION['err']=$err;
        //scrivi che utente è registrato mandando in un altra pagina
        header('location:../../utenteregistrato.php');
    } else
    {
        //se non ho trovato righe (else) inseriscilo attraverso INSERT
        include('insert_sign.php');
        $_SESSION['email_reg']=$email_reg;
        $_SESSION['pwd_reg']=$pwd_reg;
        //inseriscilo
        $err=0;
        $_SESSION['err']=$err;
        //header('location:../mail/mailchimp.php');
        header('location:../../index.php');
    }
}
?>
