<?php
session_start();
include'verificaLog.php';
include'header.php';
?>
<div class="container">
<?php
include'menu.php';
?>

<div class="jumbotron" style="color:black;text-align:center">
  <h1>Area riservata!</h1>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum recusandae quis corporis dolor neque assumenda quisquam dignissimos eaque voluptates quaerat.</p>
</div>

<a href="index.php">Vai alla home page</a>

<?php
//collego al database
include("signup/reg/db_connection.php");
//seleziono tutti gli utenti del database
$sql="SELECT * FROM registra";
$s=$pdo->prepare($sql);
$s->execute();
$totale=$s->rowCount();
//creo tabella di gestione utenti
echo("<h3>Ecco gli utenti iscritti: $totale </h3>")
?>
<table class="table" style="text-align:left">
  <th style="width:150px">ID</th>
  <th style="width:150px">Email</th>
  <th style="width:150px">Cancella</th>
</table>
<?php
while($row=$s->fetch(PDO::FETCH_ASSOC)){
  ?>
<table class="table table-stripped" style="text-align:left">
<tr>
  <td style="width:150px"><?php echo($row['id'])?></td>
  <td style="width:150px"><?php echo($row['email'])?></td>
  <td style="width:150px">
  <a href="signup/delete.php?id=<?php echo($row['id']); ?>">
  <button class="btn btn-danger">X</button></a>
  </td>
  </tr>
</table> 
<?php
}
include'footer.php';
?>