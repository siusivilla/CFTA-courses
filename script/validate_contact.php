
<script src="<?php echo BASE_URL?>assets/js/jquery.validate.js"></script>

<!-- Impostazioni personalizzate Javascript -->
<script>
$("#contactForm").validate(
  {
    rules: {
      email: {
        required: true,
        email: true
        },
      nome:{
        required: true,
        minlength: 3
        },
      oggetto:{
        required: true,
        minlength: 3
        },
      messaggio:{
        required: true,
        minlength: 3
        },
      agreeCheck: "required"
    },
    messages: {
      nome: { required: "Inserire un nome",
        minlength: "Inserire un nome" },
      oggetto: { required: "Inserire un oggetto", 
        minlength: "Inserire un oggetto"},
      messaggio: { required: "Inserire un messaggio",
        minlength: "Inserire un messaggio" },
      email: {
        required: "Inserire un email",
        email: "Inserire un email valida",
      },
      agreeCheck: "Accettare le condizioni"
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
        // Add the `invalid-feedback` class to the error element
        error.addClass( "invalid-feedback" );

        if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
        } else {
            error.insertAfter( element );
        }
    },
    highlight: function ( element, errorClass, validClass ) {
        $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
        $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  });
</script>