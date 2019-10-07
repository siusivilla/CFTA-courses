<?php
  include_once('../inc/config.php');
  $pageTitle ="Dashboard";
  include_once('header.php');
?>
<body>
<div class="wrapper">
  <?php include_once("sidebar.php"); ?>

  <div class="main-panel">
    <?php include_once("navbar.php"); ?>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h1 class="display-4">Benvenvenuto <?php echo $_SESSION["email"] ?>!</h1>
        </div>
      </div>
    </div>

    <?php include_once("footer.php"); ?>
  </div>
</div>

</body>
<?php include_once("main_script.php"); ?>
</html>