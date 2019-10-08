<?php
ob_start();
session_start();

include('header.php');
//connessione al database
include_once('signup/db_connection.php');
//imposto id evento locale
$id_evento=$_GET['id_evento'];

//seleziono i dati dell'evento
try
{
  $sql="SELECT * FROM eventi WHERE id=:id_evento";
  $s=$pdo->prepare($sql);
  $s->bindValue(':id_evento', $id_evento);
  $s->execute();

  $num_row=$s->rowCount($s);
}
catch (PDOException $e)
{
  $error = 'Errore recupero: '.$e->getMessage();
  echo $error;
  exit();
}

//popolo la pagina con i dati del singolo evento
?>

<div class="container">
<?php  
include('menu.php');
//include('partials/slider.php');
?>

<br>

<?php
//include('partials/segui.php');
?>

<!-- dettagli dell'evento -->
<div class="container">
  <div class="row">

  <?php
  if ($num_row>0) {
    $row = $s->fetch(PDO::FETCH_ASSOC);
    ?>
    <h3 class="text-center text-uppercase"><?php echo $row['titolo'];?></h3>
    <div class="col-md-4 col-xs-3">
      <img src="amministrazione/imagesuploadedf/<?php echo $row['immagine'];?>" alt="<?php echo $row['titolo'];?>" 
       class="img-responsive img-thumbnail">
    </div>
    <div class="col-md-8 col-xs-9">
      <?php echo $row['descrizione'];?>
    </div>
    <?php
  } 
  else {
    //chissà
  }
  ?>

  </div>
</div>
<!-- fine container dettagli evento -->
<br>
<?php
include('partials/segui.php');
?>
<br>
<?php
include('footer.php');
?>