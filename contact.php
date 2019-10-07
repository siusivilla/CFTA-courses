<?php
  include_once('inc/config.php');
  $pageTitle ="Contattaci";
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>

<!-- MAIN -->
<main role="main" id="contact">

<div id="contatti" class="bg_primary">
<div class="container">
<div class="row" >
<div class="col-md-6 maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col-md-6">
  <h2 class="text-uppercase mt-3 font-weight-bold text-white titoli">CONTATTACI</h2>
  <form class="js-validate" novalidate="novalidate" id="contactForm" method="post" action="send_email.php" method="post">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Username">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <input type="text" id="oggetto" name="oggetto" class="form-control mb-2" placeholder="Oggetto">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <input type="text" id="email" name="email" class="form-control mb-2" placeholder="Email">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <textarea class="form-control mb-2" id="messaggio" name="messaggio" placeholder="Messaggio" rows="3"></textarea>
        </div>
      </div>
      <div class="col-12">
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="agreeCheck" name="agreeCheck">
          <label class="form-check-label" for="agreeCheck" style="color: white">
            Accetta le condizioni
          </label>
        </div>
      </div>
      </div>
      <div class="col-12">
        <button class="btn btn-block btn-light" type="submit"><span style="font-size: 1.2rem">Invia</span></button>
      </div>
    </div>
  </form>
  <div class="text-white">
  <h2 class="text-uppercase mt-4 font-weight-bold titoli">dove siamo</h2>

  <i class="fas fa-phone mt-3"></i> <a href="tel:+393923033789">(+39) 78910</a><br>
  <i class="fas fa-phone mt-3"></i> <a href="tel:+393923033789">(+39) 123456</a><br>
  <i class="fa fa-envelope mt-3"></i>KillerProteam123@gmail.com<br>
  <i class="fas fa-globe mt-3"></i> Favela das Nações, Quadra 807<br>
  <i class="fas fa-globe mt-3"></i> กรุงเทพมหานคร, Bangkok, Thailandia, 9<br>
  </div>
</div>

</div>
</div>
</div>

</main>
<!-- end main -->

<?php
  include_once('inc/footer.php');
  include_once('script/validate_contact.php');
?>

</body>
</html>