<?php
  include_once('../inc/config.php');
  $pageTitle ="Recupero password";
  include_once('../inc/header.php');
  include_once('../inc/menu.php');
?>
<!-- MAIN -->
<main role="main" id="forgot">
    <div class="container pt-5 pb-5">
        <!-- Content -->
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <form class="js-validate" novalidate="novalidate" id="forgotForm" method="post" action="resetpwd.php">    
                      <!-- Forgot Password -->
            <div id="forgotPassword" data-target-group="idForm">
              <!-- Title -->
              <header class="text-center mb-5">
                <h2 class="h4 mb-0">Recupera password</h2>
                <p>Inserisci la tua email e riceverai le istruzioni per recuperare la tua password.</p>
              </header>
              <!-- End Title -->
              
              <!-- Message area -->
              <?php
              //c'è stato un errore
              if (isset($_SESSION['err'])){
                if ($_SESSION['err']==1) {
                  switch ($_GET['e']) {
                    //non esiste utente
                    case 'nonesiste':
                      $message = "Utente non registrato!";
                      break;
                    case 'nomail':
                      $message = "Problema di sistema temporaneo, riprovare più tardi";
                      break;
                    case 'errinvio':
                      $message = "Problema nell'invio della password temporanea, riprovare più tardi";
                      break;
                    //errore generale nella rigenerazione della password
                    default:
                      $message = "Problemi con il recupero della password, riprovare più tardi";
                      break;
                  }
                  echo '<div class="alert alert-danger text-center" role="alert">';
                  echo $message;
                  echo "</div>";
                }
                // messaggio inviato con successo
                if ($_SESSION['err']==2) {
                  echo '<div class="alert alert-success" role="alert">
                  Password provvisoria inviata all\'email di registrazione, aggiornare al primo ingresso!
                  </div>';
                }
              }
              unset ($_SESSION["err"]);
              ?>
              <!-- Message end -->

              <!-- Input -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-user-ninja form__text-inner"></span>
                    </span>
                  </div>
                  <input type="text" class="form-control form__input" name="email" id="email" required="" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                </div>
              </div>
              <!-- End Input -->

              <div class="mb-3">
                <button type="submit" class="btn btn-block btn-dark">Recupera password</button>
              </div>
    
              <div class="text-center mb-3">
                <p class="text-center">
                  Sei già registrato?
                  <a class="js-animation-link" href="signin.php" data-target="#signin" data-link-group="idForm" data-animation-in="fadeIn">Accedi
                  </a>
                </p>
              </div>
            </div>
            <!-- End Forgot Password -->
            </form>
          </div>
          <!-- End Content -->
    </div>
    </main>
    <!-- end main -->
	

    <?php
  include_once('../inc/footer.php');
  include_once('../script/validate.php');
?>

</body>
</html>