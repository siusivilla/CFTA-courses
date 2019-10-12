<?php
  include_once('inc/config.php');
  $pageTitle = "Modalità";
  include_once('inc/header.php');
  include_once('inc/menu.php');
?>
 
<!-- MAIN -->
<main role="main" id="modalita">
<?php 
include_once('inc/db_config.php');

if(isset($_GET['t'])){
  $target = $_GET['t'];
  $sql="SELECT * FROM killers WHERE specialita = '".$target."'";
} 
else {
  $sql="SELECT * FROM killers";
}
  //seleziono eventi nel database
$result = $conn->query($sql);
?>
<div class="jumbotron jumbotron-fluid page-title d-flex">
  <div class="container text-center align-self-center">
    <h1 class="text-center">I nostri specialisti</h1>
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
  </div>
</div>
<?php 
if ($result->num_rows>0) {
  //finchè ci sono eventi
  ?>
  <div class="container" id="deck"> 
    <!-- Schede killer -->
  <div class="card-deck justify-content-around mt-5">
    <?php
    while ($row=$result->fetch_assoc()){
    $killer=$row['id'];
      ?>
      <!-- Scheda -->
      <div class="card" data-aos="flip-left">
        <img src="<?php echo $row['immagine'];?>" class="card-img-top" alt="<?php echo $row['nome'];?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['nome'];?></h5>
          <p class="card-text"><?php echo $row['descrizione'];?></p>
        </div>
        <div class="card-footer d-flex justify-content-around">
        <?php
        if (isLog()) {
          echo '<a class="btn btn-danger btn-lg btn-block" href="killer.php?id='.$row['id'].'" role="button">Prenota</a>';
        }else {
          echo '<a class="btn btn-info btn-lg btn-block" href="user/signin.php" role="button">Registrati per prenotare</a>';
        }
        ?>
        </div>
      </div>
      <!-- fine scheda -->
      <?php
    }
    ?>
  </div>
  </div>
  <!-- fine schede killer -->
  <?php
}
else {
  echo ("Non ci sono killer disponibili.");
}
$conn->close();
?>
</main>
<!-- end main -->

<?php
include_once('inc/footer.php');
include_once('script/aos.php'); 
?>

</body>
</html>