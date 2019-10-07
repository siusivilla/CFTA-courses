<?php
  include_once('../inc/config.php');
  $pageTitle ="Accedi";
  include_once('../inc/header.php');
  include_once('../inc/menu.php');
?>

<!-- MAIN -->
<main role="main" id="singup">
    <div class="container pt-5 pb-5">
        <!-- Content -->
        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
          <form class="js-validate" novalidate="novalidate" id="signupForm" method="post" action="login.php">
            <form class="js-validate" novalidate="novalidate">
                      <!-- Signup -->
            <div id="signup"  data-target-group="idForm">
              <!-- Title -->
              <header class="text-center mb-5">
                <h2 class="h4 mb-0">Registrati</h2>
                <p>Riempi tutti i campi per partire.</p>
              </header>
              <!-- End Title -->
  
              <!-- Email -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-user-ninja form__text-inner"></span>
                    </span>
                  </div>
                  <input type="email" class="form-control form__input" name="email" required="" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                </div>
              </div>
              <!-- End email -->
    
              <!-- Password -->
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
              <!-- End password -->
    
              <!-- Confirm password -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="input-group-prepend form__prepend">
                    <span class="input-group-text form__text">
                      <span class="fa fa-key form__text-inner"></span>
                    </span>
                  </div>
                  <input type="password" class="form-control form__input" name="confirm_password" id="confirm_password" required="" placeholder="Confirm Password" aria-label="Confirm Password" data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
                </div>
              </div>
              <!-- End confirm password -->
          
        <!-- Privacy -->
              <div class="js-form-message mb-4">
                <div class="js-focus-state input-group form">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="privacyCheck" name="privacyCheck">
                    <label class="form-check-label" for="privacyCheck">
                    Accetto le regole <a href="#">privacy</a>
                    </label>
                  </div>
                </div>
              </div>
    <!-- End privacy -->
            
              <div class="mb-4">
                <button type="submit" class="btn btn-block btn-dark">Registrati</button>
              </div>
    
              <div class="text-center mb-4">
                <p class="text-center">
                  Sei già registrato?
                  <a class="js-animation-link" href="signin.php" data-target="#signin" data-link-group="idForm" data-animation-in="fadeIn">Accedi
                  </a>
                </p>
              </div>
            </div>
            <!-- End Signup -->
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