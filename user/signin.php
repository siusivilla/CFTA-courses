<?php
  include_once('../inc/config.php');
  $pageTitle ="Accedi";
  include_once('../inc/header.php');
  include_once('../inc/menu.php');
?>
<main role="main" id="signin">
  <div class="container pt-5 pb-5">
      <!-- Content -->
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <form class="js-validate" novalidate="novalidate" id="signForm" method="post" action="login.php">
            <!-- Signin -->
            <div id="signin" data-target-group="idForm">
              <!-- Title -->
              <header class="text-center mb-5">
                <h2 class="h4 mb-0">Accedi</h2>
                <p>Accedi per gestire il tuo account.</p>
              </header>
              <!-- End Title -->
    
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
    
              <!-- Input -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-lock form__text-inner"></span>
                    </span>
                  </div>
                  <input type="password" class="form-control form__input" name="password" id="password" required="" placeholder="Password" aria-label="Password" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                </div>
              </div>
              <!-- End Input -->
    
              <div class="row mb-4">
                <div class="col-6">
                  <!-- Checkbox -->
                  <div class="custom-control custom-checkbox d-flex align-items-center">
                    <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                    <label class="custom-control-label" for="rememberMeCheckbox">
                      Ricordami
                    </label>
                  </div>
                  <!-- End Checkbox -->
                </div>
    
                <div class="col-6 text-right">
                  <a class="js-animation-link float-right" href="forgotpwd.php" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Password Dimenticata?</a>
                </div>
              </div>
    
              <div class="mb-4">
                <button type="submit" class="btn btn-block btn-dark">Accedi</button>
              </div>
    
              <div class="text-center mb-4">
                <p class="text-center">
                  Non hai un account?
                  <a class="js-animation-link" href="signup.php" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Registrati
                  </a>
                </p>
              </div>
  
            </div>
            <!-- End Signin -->
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