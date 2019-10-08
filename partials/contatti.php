

<div class="inner contact">
<br>
<h1 style="text-align:center" id="title">CONTATTACI</h1>
<br>
<!-- Form Area -->
<div class="contact-form">
    <!-- Form -->
    <form id="contact-us" method="post" action="contact/send_email.php" method="post" onsubmit="return checkForm_cont(this);">
        <!-- Left Inputs -->
        <div class="container">
        <div class="row">
        <div class="col-md-6 wow animated slideInLeft" data-wow-delay=".5s">
            <!-- Name -->
            <input type="text" name="nome_cont" id="nome_cont" class="form" placeholder="Nome" />
            <!-- Email -->
            <input type="text" name="email_cont" id="email_cont" class="form" placeholder="Email" />
            <!-- Subject -->
            <input type="text" name="oggetto_cont" id="oggetto_cont" class="form" placeholder="oggetto" />
        </div><!-- End Left Inputs -->
        <!-- Right Inputs -->
        <div class="col-md-6 wow animated slideInRight" data-wow-delay=".5s">
            <!-- Message -->
        
        <textarea name="testo_cont" id="testo_cont" class="form textarea"  placeholder="scrivi il tuo messaggio"></textarea>
            
        </div><!-- End Right Inputs -->
        </div>
        </div>
        <!-- Bottom Submit -->
        <div class="relative fullwidth col-xs-12">
            <!-- Send Button -->
            <button type="submit" id="submit" name="submit" class="form-btn semibold">Invia messaggio</button> 
        </div><!-- End Bottom Submit -->
        <!-- Clear -->
        <div class="clear"></div>
    </form>
<br>
    

</div><!-- End Contact Form Area -->
</div>