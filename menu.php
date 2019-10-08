<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><icon class="fa fa-home" style="font-size:21px;"></icon></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="about.php">about<span class="sr-only">(current)</span></a></li>
        <li><a href="contatti.php">contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Viaggi<span class="caret"></span></a>
          <ul class="dropdown-menu" style="text-align:center">
            <li><a href="america_dinamica.php">America dinamica</a></li>
                <li role="separator" class="divider"></li>
            <li><a href="america.php">America</a></li>
                <li role="separator" class="divider"></li>
            <li><a href="json/lista.php">lista json</a></li>
                <li role="separator" class="divider"></li>
            <li><a href="#">Europa</a></li>
             <li role="separator" class="divider"></li>
              <li><a href="#">Italia</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Invia</button>
      </form>

      <?php
        if(isset($_SESSION['pwd_log'])AND isset($_SESSION['email_log'])) {
      ?>
        <ul class="nav navbar-nav">
          <li><a>Ciao <?php echo($_SESSION['email_log']);?></a></li>
          <li><a href="esci.php">Esci</a></li>
        </ul>
      <?php
        }
      ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="log.php">area riservata </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>