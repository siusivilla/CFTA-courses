    <!--NAVIGAZIONE-->
<div id="header">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="primarynav">
    <div class="container-fluid">
		<!-- logo -->
      <a class="navbar-brand" href="<?php echo BASE_URL?>index.php">
        <img src="<?php echo BASE_URL?>assets/img/logo-b.svg" alt="KillerPro"><span class="sr-only">(current)</span>
      </a>
		<!-- toggler per mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
		<!-- menu -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto ml-4">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>about.php">Chi siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>contact.php">Contattaci</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Modalita
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo BASE_URL?>mod/suicidi.php"><i class="fas fa-fill-drip mr-1"></i>&nbsp;Suicidi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo BASE_URL?>mod/naturali.php"><i class="fas fa-skull-crossbones mr-1"></i>&nbsp;Naturali</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo BASE_URL?>mod/vip.php"><i class="fas fa-bomb mr-1"></i>&nbsp;VIP</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo BASE_URL?>mod/incidenti.php"><i class="fas fa-car-crash mr-1"></i>&nbsp;Incidenti</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL?>coverage.php">Dove operiamo</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <?php
            if(isLog()) { ?>
            <li><a class="nav-link" href="<?php echo BASE_URL?>backend/">Area riservata</a></li>
            <li><a class="nav-link" href="<?php echo BASE_URL?>user/logout.php">Esci</a></li>
          <?php
          } else { ?>
            <li><a class="nav-link" href="<?php echo BASE_URL?>user/signin.php">Accedi</a></li>
          <?php } ?>
        </ul>

      </div>
    </div>
  </nav>
</div>
<!-- end navigazione -->