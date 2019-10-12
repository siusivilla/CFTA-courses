<?php
  include_once('inc/config.php');
  $pageTitle ="KillerPro";
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>

<!-- MAIN -->
<main role="main" id="home">

<!-- Introduzione -->
<section id="introduzione" class="bg-dark">
<div class="container text-center">
	<!-- <h1><img src="./assets/img/logo-b.svg" class="logo" alt="KillerPro"></h1> -->
	<!-- <h1>Killerpro</h1> -->
	<h1 class="logo"><i class="icon icon-kp-basic-gunsight point-positive logo invisible"></i>KillerPro</h1>
	<p class="lead">KillerPro nasce da oltre 15 anni di <span class="rilievo">esperienza</span> nel campo dell'omicidio incaricato.
	La nostra storia inizia nello scialbo garage di tre programmatori, i quali consideravano l'arte dell'assassinio un vero mestiere. Il progetto si è infine evoluto in KillerPro, dando vita al sito web di assoldamento di sicari per <span class="rilievo">eccellenza</span>. </p>
	<p class="lead">
	<span class="rilievo">Anonimato</span>, <span class="rilievo">efficacia</span> e <span class="rilievo">fiducia</span> fanno di noi il miglior servizio di killer a livello globale.
	</p>
	<p class="lead">
	Scegliere KillerPro significa ottenere prestazioni di qualità, <span class="rilievo">sicurezza</span> nel lavoro e <span class="rilievo">risultati</span> eccellenti.
	</p>
</div>	
</section>
<!-- end introduzione -->

<!-- Categorie -->
<section id="categorie" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-md-2 offset-md-2">
          <a href="<?php echo BASE_URL?>modalita.php?t=suicidio">
            <i class="fas fa-fill-drip"></i>
            <p>Suicidi</p>
          </a>
      </div>
      <div class="col-sm-3 col-md-2 ">
        <a href="<?php echo BASE_URL?>modalita.php?t=naturale">
          <i class="fas fa-skull-crossbones"></i>
          <p>Naturale</p>
        </a>
      </div>
      <div class="col-sm-3 col-md-2 ">
        <a href="<?php echo BASE_URL?>modalita.php?t=vip">
          <i class="fas fa-bomb"></i>
          <p>VIP</p>
        </a>
      </div>
      <div class="col-sm-3 col-md-2 ">
        <a href="<?php echo BASE_URL?>modalita.php?t=incidente">
          <i class="fas fa-car-crash"></i>
          <p>Incidenti</p>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- end categorie -->

<!-- Come funziona -->
<section id="come-funziona">
  <div class="container">
    <div class="row text-center">
      <div class="col-12"><h2>Come funziona KillerPro</h2></div>
    </div>
    <div class="row mb-2">
      <div class="col-md-4">
        <i class="fas  icon icon-kp-list"></i>
        <div href="#" class="badge-step bg-dark">1</div>
        <h3>Modalit&aacute;</h3>
        <p class="subtitle">Seleziona la modalità di omicidio che più rispecchia le tue esigenze, scegliendo tra le nostre quattro categorie: Naturali, Suicidi, VIP e Incidenti.</p>
      </div><!-- /.col-md-4 -->
      <div class="col-md-4">
        <i class="fas icon icon-kp-torsos-all"></i>
        <div href="#" class="badge-step bg-dark">2</div>
        <h3>Killer</h3>
        <p class="subtitle">Trova il killer più indicato alla tua commissione tra la vasta scelta a tua disposizione, avendo cura di controllare il suo territorio di pertinenza.</p>
      </div><!-- /.col-md-4 -->
      <div class="col-md-4">
        <i class="fas icon icon-kp-check"></i>
        <div href="#" class="badge-step bg-dark">3</div>
        <h3>Prenota</h3>
        <p class="subtitle">Prenota comodamente il tuo killer personale, in totale sicurezza, e fissa con lui le condizioni e i termini del delitto.<br />Ora non ti resta che pazientare!</p>
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div>
</section>
<!-- end come funziona -->
	
<!-- Recensioni -->
<section id="review">
  <div class="container">
    <div class="row">
      <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide card text-center">
            <div class="card-body">
              
                <i class="fas fa-user-injured placeholder card-img-top"></i>
              <h5 class="card-title">Mr. Jack the Ripper</h5>
              <p class="card-text">DaCastilloXavier</p>
              <div class="point">
                  <i class="icon icon-kp-crosshair point-positive"></i>
                  <i class="icon icon-kp-crosshair point-positive"></i>
                  <i class="icon icon-kp-crosshair point-positive"></i>
                  <i class="icon icon-kp-crosshair point-positive"></i>
                  <i class="icon icon-kp-crosshair point-positive"></i>
                  <i class="icon icon-kp-crosshair point-negativa"></i>
              </div>
              <blockquote class="blockquote text-center">
                  <p class="mb-0">Se sono qui a scrivere una recensione per un sito web che ho usato per far ammazzare il mio capo, direi che lo ritengo sicurissimo!!!<br/>
                    Non si corre nessun rischio con KillerPro. Mi sono trovato BENISSIMO!!<br/>
                    Sicuramente lo userò ancora molto presto.</p>
              </blockquote>
          </div>
        </div>
        <div class="swiper-slide card text-center">
          <div class="card-body">
            
              <i class="fas fa-user-secret placeholder card-img-top"></i>
            <h5 class="card-title">Lady Myrna Harrod</h5>
            <p class="card-text">AntaresTechnologies1963</p>
            <div class="point">
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
            </div>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Massima discrezione, efficienza più che eccellente, sicuro contro ogni mia previsione.<br/>
                  Molto più affidabile del vecchio modo di assoldare sicari.</p>
              </blockquote>
          </div>
        </div>
        <div class="swiper-slide card text-center">
          <div class="card-body">
            
              <i class="fas fa-user placeholder card-img-top"></i>
            <h5 class="card-title">Lady Elizabeth Bathory</h5>
            <p class="card-text">ItsConnorWalshHere</p>
            <div class="point">
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-positive"></i>
              <i class="icon icon-kp-crosshair point-negative"></i>
            </div>
            <blockquote class="blockquote text-center">
                <p class="mb-0">All'inizio ero restio ad utilizzare questo sito web. Ero convinto che coloro i quali gestiscono KillerPro o il sicario stesso avrebbero potuto nuocermi in qualche modo. E invece ho scoperto che era solo una mia paranoia.<br/>
                                Hai avrei creduto che assoldare un killer avrebbe potuto essere così semplice!</p>
                              </blockquote>
                          </div>
                        </div>
                        <div class="swiper-slide card text-center">
                          <div class="card-body">
                            
                              <i class="fas fa-theater-masks placeholder card-img-top"></i>
                            <h5 class="card-title">Mr. Jason Voorhees</h5>
                            <p class="card-text">SignorDarcyKiller</p>
                            <div class="point">
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-negative"></i>
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">C'è dell'ingegno nei programmatori di questo sito.<br/>
                  È palese la loro passione per l'argomento. Ammirevole inoltre il loro impegno nel renderlo il servizio migliore del web.<br/>
                  Missione compiuta oserei dire!</p>
                              </blockquote>
                          </div>
                        </div>
                        <div class="swiper-slide card text-center">
                          <div class="card-body">
                              <i class="fas fa-user-nurse placeholder card-img-top"></i>
                            <h5 class="card-title">Mr. Edward Hyde</h5>
                            <p class="card-text">Sinclair82Emily</p>
                            <div class="point">
                              <i class="icon icon-kp-crosshair point-positive "></i>
                              <i class="icon icon-kp-crosshair point-positive "></i>
                              <i class="icon icon-kp-crosshair point-positive "></i>
                              <i class="icon icon-kp-crosshair point-positive "></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Non potete immaginare quanto mi sono divertito a lavorare con Mr. Edward Hyde! Il lavoro di sicariato migliore in assoluto <i class="fas fa-dumbbell"></i>&nbsp;<i class="fas fa-dumbbell"></i>&nbsp;<i class="fas fa-dumbbell"></i></p>
                              </blockquote>
                          </div>
                        </div>
                        <div class="swiper-slide card text-center">
                          <div class="card-body">
                            
                              <i class="fas fa-user-ninja placeholder card-img-top"></i>
                            <h5 class="card-title">Mr. Francis Dolarhyde</h5>
                            <p class="card-text">ADPhilDenvers</p>
                            <div class="point">
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Aver scelto KillerPro significa aver optato per il vivere senza alcuna minaccia. Ora posso godermi a pieno la mia vita!</p>
                              </blockquote>
                          </div>
                        </div>
                        <div class="swiper-slide card text-center">
                          <div class="card-body">
                            
                              <i class="fas fa-user-tie placeholder card-img-top"></i>
                            <h5 class="card-title">Mr. Edward Hyde</h5>
                            <p class="card-text">BornToBeEveRothlo</p>
                            <div class="point">
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-positive"></i>
                              <i class="icon icon-kp-crosshair point-negative"></i>
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Non ci credo.<br/>
                  HANNO DAVVERO CREATO UN SITO DOVE SI PUÒ FAR UCCIDERE PERSONE?!<br/>
                  ...<br/>
                  ED È DAVVERO COSI EFFICIENTE E FACILE?!?!??!?!<br/>
                  ...<br/>
                  ED IO L'HO USATO E MI SONO TROVATA BENEEE?!?!??!?!<br/>
                  Incredibilmente perfetto</p>
              </blockquote>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <!-- end swiper -->
  </div>
  </div>
</section>
<!-- end recensioni -->

</main>
<!-- end main -->

<?php
  include_once('inc/footer.php');
  include_once('script/swiper.php');
  include_once('script/aos.php');
?>

</body>
</html>