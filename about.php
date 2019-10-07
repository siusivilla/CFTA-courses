<?php
  include_once('inc/config.php');
  $pageTitle ="Chi siamo";
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>
 
<!-- MAIN -->
<main role="main" id="about">
    <div class="container titolo_sezione">
      <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
          <h1 class="text-center text-white">Su di noi</h1>
        </div>
      </div>
    </div>
    
    <div class="container" id="about-step">
      <div class="row about-step">
        <div class="col-md-8 px-5" data-aos="zoom-in">
          <h1 class="text-center">Indiscrezione.</h1>
          <p>Sin da quando la società è stata fondata, la nostra priorità è l'indiscrezione. Operiamo nella massima riservatezza evitando possibili controlli delle autorità grazie all'itilizzo di tecnologia avanzata per la crittografia dei dati.</p>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <img src="assets/img/undraw_access_denied_6w73.svg" style="width: 100%; padding: 0 20%;" alt="" class="src">
        </div>
      </div>
      <hr class="separatore">
      <div class="row about-step">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/undraw_in_sync_xwsa.svg" style="width: 100%" alt="" class="src"></div>
          <div class="col-md-8 px-5" data-aos="zoom-in"><h1 class="text-center">Staff preparato</h1>
          <p>Negli anni siamo riusciti ad assoldare tutti i migliori esperti mondiali nel campo dell'informatica, robotica, meccanica e militare. Abbiamo a disposizione diversi team sparsi nell'intero globo pronti a realizzare ogni desiderio dei nostri clienti.</p>
        </div>
      </div>
      <hr class="separatore">
      <div class="row about-step">
        <div class="col-md-8 px-5" data-aos="zoom-in">
          <h1 class="text-center">Massima professionalità</h1>
          <p>Riusciamo ad offrire uno fra i migliori servizi di Killshipping nel mondo grazie alla professionalità e puntualità che ci contraddistinguono. Il cliente che decide di affidarsi a noi verrà supportato quasi costantemente dal nostro team, il quale gli fornirà materiale come mail, foto, oggetti personali e altro della vittima designata.</p>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <img src="assets/img/undraw_photo_session_clqr.svg" style="width: 100%" alt="" class="src">
        </div>
      </div>
    </div>
    
    </main>
    <!-- end main -->


<?php
include_once('inc/footer.php');
include_once('script/aos.php'); 
?>

</body>
</html>