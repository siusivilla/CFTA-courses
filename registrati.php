<?php
session_start();
include('header.php');
?>
<div class="container">
<?php
include('menu.php');
?>

       <div id="footerR">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
                    <div class="form-box">
                        <h1 style="color:white">REGISTRATI</h1>
                        <h4 id="register" style="color:white;">Tutti i campi sono obbligatori</h4>
                        
                        <form role="form" id="contact-form" action="signup/reg/trovato_signup.php" method="post" onsubmit="return checkForm_reg(this);">
                            <!-- name field -->
                            <div class="form-group">
                                <div id="nameError" class="sr-only" role="alert"></div>
                                <label for="form-name-field" class="sr-only">email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                    <input type="text" class="form-control" id="email_reg"  placeholder="email" name="email_reg" novalidate=""> </div>
                            </div>
                            <!-- email field -->
                            <div class="form-group">
                                <div id="emailError" class="sr-only" role="alert"></div>
                                <label for="form-email-field" class="sr-only">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input type="password" class="form-control" id="pwd_reg" value="" placeholder="password" name="pwd_reg"> </div>
                            </div>
                            <div class="checkbox">
                                <label id="label">
                                    <input type="checkbox" id="checkbox-form" value="si" name="checkbox-form">accetto le regole privacy </label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Invia</button>
                        </form>
                        <div class="text-center">
              <h2><a href="log.php" style="color:white !important;">accedi</a></h2>
                        <br> </div></div>
                </div>

            </div>
        </div>
    </div>

</div>

           <?php

include('footer.php');

if(isset($_SESSION['err'])){
    if ($_SESSION['err']==1) {
      echo header('location:log.php');
    } else {
      header('location:pagriservata.php');
    }
  }
?>
