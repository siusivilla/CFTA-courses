<?php
ob_start();
session_start();

include('header.php');
?>
<div class="container">
<?php  
include('menu.php');
?>

  <div id="footer">
  <div class="container">
      <div class="row ">
          <div class="col-md-6  col-md-offset-3" style="margin-top:2%">
              <div class="form-box">
                  <h1 style="color:white">Benvenuto <span>Area riservata</span></h1>
                  
                  <form role="form" id="contact-form" action="signup/log/trovato_log.php" method="post" onsubmit="return checkForm_log(this);">
                      <!-- name field -->
                      <div class="form-group">
                          <div id="nameError" class="sr-only" role="alert"></div>
                          <label for="email_log" class="sr-only">Nome</label>
                          <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                              <input type="text" class="form-control" id="email_log" value="" placeholder="email" name="email_log"> </div>
                      </div>
                      <!-- email field -->
                      <div class="form-group">
                          <div id="emailError" class="sr-only" role="alert"></div>
                          <label for="pwd_log" class="sr-only">Password</label>
                          <div class="input-group">
                              <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                              <input type="password" class="form-control" id="pwd_log" value="" placeholder="password" name="pwd_log"> </div>
                      </div>
                      <!-- <div class="checkbox">
                          <label id="label">
                              <input type="checkbox" id="checkbox-form">accetto le regole privacy </label>
                      </div> -->
                      <!-- div mostra errori  -->
                      <div id="mostra"></div>
                      <button type="submit" class="btn btn-success btn-block">Invia</button>
                  </form>
          
            
  <div class="text-center">
    <h2><a href="registrati.php" style="color:white !important;">Registrati</a></h2>
      <br> </div>
      <br> </div>
    </div>
    
  </div>
  </div>
</div>

</div>
        <br>

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