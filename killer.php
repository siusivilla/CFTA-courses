<?php
  include_once('inc/config.php');
  $pageTitle = "Killer Dettaglio";
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
$row=$result->fetch_assoc();
$price = $row['prezzo'];
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
        <p class="text-muted"><span class="text-success h2">&euro;<?php echo number_format($row['prezzo'], 0,",",".");?></span> unica soluzione</p>
        <hr class="my-4">
        <div id="paypal-button-container"></div>
        <p class="text-sm text-center mt-2">Per urgenze <a href="contact.php" style="text-decoration: underline">contattateci</a>.</p>
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
<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=ATsV08s4wngDu55BEZYFDAv2fUNVWk5h3pag0f0xhgnnjOLTPU2gRgyhVjciVkg_AaVhRptmN_X1jSvN&currency=EUR"></script>

<script>
    var price = "<?php echo $row['prezzo']; ?>";
    document.write(price);
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
      // impostazioni di stile
      style: {
                color:  'gold',
                shape:  'rect',
                label:  'pay',
                size: 'responsive',
                layout: 'horizontal'
            },
        // Set up the transaction
        commit: true, // Optional: show a 'Pay Now' button in the checkout flow
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: price
                    }
                }]
            });
        },
        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
                // Call your server to save the transaction
                return fetch('/paypal-transaction-complete', {
                  method: 'post',
                  headers: {
                    'content-type': 'application/json'
                  },
                  body: JSON.stringify({
                    orderID: data.orderID
                  })
                });
            });
        }
    }).render('#paypal-button-container');
</script>
<?php
include_once('inc/footer.php');
include_once('script/aos.php'); 
?>

</body>
</html>