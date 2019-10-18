<?php
  include_once('../inc/config.php');

  /*
  * FORM CREAZIONE NUOVA PWD 
  */
  //se è già registrato non deve stare quà
  if (isLog()) { header('location:index.php');}

  // esistono variabili in GET
  if (isset($_GET['tk']) && isset($_GET['email']) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"])) {
    //recupero valori da usere per le operazioni
    $token = $_GET["tk"];
    $email = $_GET["email"];
    
    include'db_connection.php';
    
    //controllo la coppia token utente
    //esistenza
    try {
      $sql="SELECT * FROM password_reset_temp WHERE token=:token and email=:email";
      $s=$pdo->prepare($sql);
      $s->bindValue(':email', $email);
      $s->bindValue(':token', $token);
      $s->execute();
      $num_row=$s->rowCount($s);
      //registro dati reset pwd in array
      $resetRow= $s->fetchAll();
    } catch (PDOException $e) {
      $error = 'Errore inserimento: '.$e->getMessage();
      echo $error;
      exit();
    }
    
    //se coppia esiste
    if ($num_row>0) {
      //print_r($resetRow);
      //recupero id per eliminazione token dal db
      $curDate = date("Y-m-d H:i:s");
      $reset_it = $resetRow[0]['id'];
      //echo 'token con id: '.$reset_it;
      $expDate = $resetRow[0]['expDate'];
      ///echo ' con scadenza: '.$expDate;
      //echo ' ora sono: '.$curDate;
      if ($expDate <= $curDate){
        $err=1;
        $_SESSION['err']=$err;
        header('location:forgotpwd.php?e=errreset');
      } else {

        $pageTitle ="Nuova password";
        include_once('../inc/header.php');
        include_once('../inc/menu.php');
        //Form nuova password
        ?>
          <!-- MAIN -->
          <main role="main" id="new_pwd">
          <div class="container pt-5 pb-5">
          <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <!-- Newpwd -->
          <form class="js-validate" novalidate="novalidate" id="newpwdForm" method="post" action="update_pwd.php">
            <div data-target-group="idForm">
              <!-- Title -->
              <header class="text-center mb-5">
                <h2 class="h4 mb-0">Nuova Password</h2>
                <p>Per l'utente <?php echo $email; ?></p>
                <p>Riempi tutti i campi per creare una nuova password.</p>
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
                    case 'errreset':
                      $message = "Il link non è valido oppure e scaduto.";
                      break;
                    case 'wrongupdate':
                      $message = "Problemi nell'aggiornamento, riprovare.";
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
              }
              unset ($_SESSION["err"]);
              ?>
              <!-- Message end -->

              <!-- Password -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-lock form__text-inner"></span>
                    </span>
                  </div>
                  <input type="password" class="form-control form__input" name="password" id="password" required="" placeholder="Nuova Password" aria-label="Password" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                  <div class="input-group-append form__append">
                    <span class="input-group-text form__text" title="Clicca qui per mostrare/nascondere password">
                      <span class="fa fa-eye form__text-inner toggle-password" toggle="#password"></span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End password -->

              <!-- Confirm password -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-key form__text-inner"></span>
                    </span>
                  </div>
                  <input type="password" class="form-control form__input" name="confirm_password" id="confirm_password" required="" placeholder="Conferma Password" aria-label="Confirm Password" data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
                  <div class="input-group-append form__append">
                    <span class="input-group-text form__text" title="Clicca qui per mostrare/nascondere password">
                      <span class="fa fa-eye form__text-inner toggle-password" toggle="#confirm_password"></span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End confirm password -->
              <!-- input nascosti -->
              <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
              <input type="hidden" id="resetid" name="resetid" value="<?php echo $reset_it; ?>">
              <div class="mb-4">
                <button type="submit" class="btn btn-block btn-dark">Aggiorna Password</button>
              </div>
            </div>
          </form>
          <!-- End Newpwd -->
          </div>
          </div>
          <!-- End container -->
          </main>
          <!-- end main -->
        <?php
        include_once('../inc/footer.php');
        include_once('../script/validate.php');
        include_once('../script/form.php');
        ?>
        </body>
        </html>
      <?php
      }
      //verifico validità del token

    } else { //torno indietro avvisando dell'errore
      $err=1;
      $_SESSION['err']=$err;
      header('location:forgotpwd.php?e=errreset');
    }

  } else { //non esistono
    $err=1;
    $_SESSION['err']=$err;
    print_r($_GET);
    //header('location:forgotpwd.php');
  }
  
  //controllo che siano vere e corrispondano con utente
?>