
<?php
ob_start();
session_start();

include('header.php');

?>

<?php  

//connessione al database
include_once('amministrazione/db_config.php');

//seleziono eventi nel database
$sql="SELECT * FROM eventi";
$result = $conn->query($sql);

//$num_row=$s->rowCount($s);

//se mi sono loggato imposto la variabile di controllo per i pulsanti
if (isset($_SESSION['id'])) {
  $user=0;
  $id_utente=$_SESSION['id'];
}else{
  $user=1;
}
?>
<div class="container">
<?php  
include('menu.php');
include('partials/slider.php');
?>
<br>
<?php
include('partials/segui.php');
?>


<div class="container" style="margin:5% auto;">
  <div class="row">
  <?php
  if ($result->num_rows>0) {
    //finchè ci sono eventi
    while ($row=$result->fetch_assoc()){
      $id_evento=$row['id'];
      ?>
      <!-- Scheda evento -->
      <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom:3rem; height:700px;">
        <div class="cornice">
          <div class="text-center">
            <img src="amministrazione/imagesuploadedf/<?php echo $row['immagine'];?>" alt="<?php echo $row['titolo'];?>" 
            style="width:200px !important;">
          </div>
          <h3 class="text-center"><?php echo $row['titolo'];?></h3>
          <?php echo $row['descrizione'];?>
        </div>
      <?php 
      //a seconda della registrazione compongo l'elenco dei bottoni
      if ($user==0) {?>
        <div class="row">
          <div class="col-md-4">
            <a href="prenotazioni/insert_prenotazioni.php?id_evento=<?php echo($id_evento);?>&id_utente=<?php echo($id_utente);?>">
              <button type="submit" class="btn btn-success btn-lg" style="margin-bottom: 15px" value="prenota">Prenota</button>
            </a>
          </div>
          <div class="col-md-4">
            <a href="evento.php?id_evento=<?php echo($id_evento);?>">
              <button type="submit" class="btn btn-warning btn-lg" style="margin-bottom: 15px" value="dettagli">Dettagli</button>
            </a>
          </div>
          <div class="col-md-4">
            <a href="download.php?file=brocure.zip">
              <button type="submit" class="btn btn-primary btn-lg" style="margin-bottom: 15px" value="brochure">Brochure</button>
            </a>
          </div>
        </div>
      <?php
      } 
      else {?>
        <div class="col-md-offset-2 col-md-8">
          <a href="log.php">
            <button type="submit" class="btn btn-success btn-block" style="margin-bottom:15px; padding:10px" value="accedi">Accedi per prenotare</button>
          </a>
        </div>
      <?php
      }
      ?>
      </div>
      <!-- fine scheda evento -->
    <?php
    }
  }
  else {
    echo ("nessun evento trovato");
  }
  $conn->close();
  ?>
  </div>
</div>
<br>
<?php
include('partials/segui.php');
?>
<br>
<?php
include('footer.php');
?>
