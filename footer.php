 <div class="container">

  <br>
    <div class="col-md-12">
        <div class="col-md-4 col-xs-6 col-sm-4">
           
            <img src="img/page/gazzelle.jpg" width="60" height="70" alt="" style="float: left;margin-right: 30px;" class="thumbnail">
            
                <p>Viaggi organizzati da : <br><a href="#">Web </a></p>
                <br>
                <br>
                <img src="img/logo/logo1.jpg" width="60" height="70" alt="" style="float: left;margin-right: 30px;" class="thumbnail">
            
                <p>Imparare<br><a href="#">Web</a></p>
        </div>
        
        <div class="col-md-4 hidden-xs col-sm-4">
    
            <p style="margin-left: 40px;">Menu</p>
            <ul style="list-style:none;">
                <a href=""><li>home</li></a>
                <a href=""><li>about</li></a>
                <a href=""><li>contatti</li></a>
                <a href=""><li>viaggi</li></a>
                <a href=""><li>area riservata</li></a>
            </ul>
                
        </div>
        <div class="col-md-4 col-xs-6 col-sm-4 text-left" >
            <br>
            <img src="img/logo/web.jpg" width="70" height="60" alt="" style="float: left;margin-right: 30px;" class="thumbnail">
            sito realizzato da <br> 
            <a href="">web per il marketing 
            </a> <br>
            <br>
                © Copyright.
            Tutti i diritti riervati
        
            
        </div>
            
        </div>
        
    </div>
    
</div>



</body>



<!--flexslider per fotografia -->
<!--
<script src="plugin/flexslider/js/jquery.flexslider.js"></script>
<script src="js/flex.js"></script>
-->

<!--carosello foto-->
<!--
<script src="plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script src="js/fancy.js"></script>
-->
<script src="js/jquery-2.1.1.js"></script>

 <script src="js/control_reg.js"></script>
 <script src="js/control_log.js"></script>
 <script src="js/control_cont.js"></script>

<!-- codice ajax -->
<script type="text/javascript">
//quando clicco su id specificati #pwd_log,#email_log lancia funzione verificata
$("#pwd_log,#email_log").on("keyup",verificata);

//definisco la funzione di verifica
function verificata(){
    //inserisco il contenuto dei campi del form in variabili
    var contenuto = $("#pwd_log").val();
    var email_log = $("#email_log").val();

    $.ajax({
        url: "signup/pwd_usr.php",
        data: { 
            "pwd_log": contenuto,
            "email_log": email_log
        },
        success: mostra //se ho successo chiama la funzione mostra
    });
};

function mostra(ritorno){
    if (ritorno == "vero") {
        $("#mostra").html("<h4 class='text-success'>utente e/o password validi e password "+$("#pwd_log").val()+"</h4>");
    }
    else {
        $("#mostra").html("<h4 class='text-danger'>utente e/o password "+$("#pwd_log").val()+"non validi</h4>");
    }
};
</script>
</html>