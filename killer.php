<?php
  include_once('inc/config.php');
  $pageTitle = "Località";
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>
<?php 
include_once('inc/db_config.php');

if(isset($_GET['id'])){
  $target = $_GET['id'];
  $sql="SELECT * FROM killers WHERE id = '".$target."'";

  $result = $conn->query($sql);

  $err=0;
  $_SESSION['err']=$err;
} 
else {
  $err=1;
  $_SESSION['err']=$err;
}
  //seleziono eventi nel database

?>
<!-- MAIN -->
<main role="main" id="killer">
<div class="jumbotron jumbotron-fluid page-title d-flex">
  <div class="container text-center align-self-center">
    <h1 class="text-center">I nostri specialisti</h1>
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
  </div>
</div>
<?php 
if ($result->num_rows>0) {
//finchè ci sono eventi
$row=$result->fetch_assoc()
?>
<div class="container">
  <div class="row">
    <!-- profilo Killer -->
    <div class="col-sm-8">
      <div class="row">
        <div class="col-7 col-sm-5">
          <img src="<?php echo $row['immagine'];?>" class="img-thumbnail" alt="...">
        </div>
        <div class="col-5 col-sm-7">
          <h2 class="my-3"><?php echo $row['nome'];?></h2>
          <p><?php echo $row['descrizione'];?></p>
        </div>
      </div>
    </div>
    <!-- fine profilo Killer -->
    <!-- acquisto -->
    <div class="col-sm-4">
      <div class="p-3 shadow ml-lg-4 rounded">
        <p class="text-muted"><span class="text-success h2">$<?php echo $row['prezzo'];?></span> unica soluzione</p>
        <hr class="my-4">
        <form action="acquisto.php" method="post">
          <input type="hidden" class="form-control" name="idKiller" id="idKiller" value="<?php echo $row['id'];?>">
          <input type="hidden" class="form-control" name="idClient" id="idClient" value="<?php echo $_SESSION['id'];?>">
          <input type="hidden" class="form-control" name="prezzo" id="prezzo" value="<?php echo $row['prezzo'];?>">
          <button type="submit" class="btn btn-success btn-block">Prenota</button>
        </form>
        <p class="text-muted text-sm text-center mt-2">Per urgenze contattateci.</p>
        <hr class="my-4">
        <div class="text-center">
          <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> Salva tra i preferiti</a></p>
          <p class="text-muted text-sm">79 persone lo hanno già fatto!</p>
        </div>
      </div>
    </div>
    <!-- fine acquisto -->
  </div>
</div>

<div class="container">
  <div class="row">
  <!-- da decidere -->
  </div>
</div>

<?php } ?>
</main>
<!-- end main -->

<?php
include_once('inc/footer.php');
include_once('script/aos.php'); 
?>

</body>
</html>