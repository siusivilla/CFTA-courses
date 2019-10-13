
<script src="<?php echo BASE_URL?>assets/js/jquery.validate.js"></script>
<!-- Impostazioni personalizzate Javascript -->
<script>
// validazione form login
  $("#signForm").validate(
  {
    rules: {
      password: {
        required: true,
        minlength: 6
        },
      email: {
        required: true,
        email: true
        }
    },
    messages: {
      password: {
        required: "Inserire una password",
        minlength: "La password deve avere almeno 6 caratteri"
      },
      email: {
        required: "Inserire un email",
        email: "Inserire un email valida",
      }
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
        // Add the `invalid-feedback` class to the error element
        error.addClass( "invalid-feedback" );
        
        if ( element.prop( "id" ) === "password" ) {
            error.insertAfter(".input-group-append");
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

// validazione form recupero password
  $("#forgotForm").validate(
  {
    rules: {
      email: {
        required: true,
        email: true
        }
    },
    messages: {
      email: {
        required: "Inserire un email",
        email: "Inserire un email valida",
      }
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

// validazione form registrazione
  $("#signupForm").validate(
  {
    rules: {
      password: {
        required: true,
        minlength: 6
        },
      email: {
        required: true,
        email: true
        },
      confirm_password: {
        required: true,
        minlength: 6,
        equalTo: "#password"
      },
      privacyCheck: "required"
    },
    messages: {
      password: {
        required: "Inserire una password",
        minlength: "La password deve avere almeno 6 caratteri"
      },
      email: {
        required: "Inserire un email",
        email: "Inserire un email valida",
      },
      confirm_password: {
        required: "Inserire la password",
        minlength: "La password deve avere almeno 6 caratteri",
        equalTo: "Le password non coincidono"
      },
      privacyCheck: "Accettare le regole sulla Privacy"
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
        if ( element.prop( "id" ) === "password" ) {
            error.insertAfter(".input-group-append");
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