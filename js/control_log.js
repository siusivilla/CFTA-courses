  function checkForm_log(form)
  {
    if(form.email_log.value == "") {
      alert("Errore: la email non puo' essere bianca!");
    
      return false;
    }

      re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!re.test(form.email_log.value)) {
     alert("Error: la email deve essere scritta correttamente!");
 
      return false;
    }

    if(form.pwd_log.value != "" ) {
      if(form.pwd_log.value.length < 6) {
        alert("Error: la password deve contenere almeno sei caratteri!");
 
        return false;
      }

      re = /[0-9]/;
      if(!re.test(form.pwd_log.value)) {
        alert("Errore: la password deve contenere almeno un numero (0-9)!");

        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd_log.value)) {
        alert("Errore: password deve contenere almeno una lettera!");
        form.pwd_log.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd_log.value)) {
        alert("Errore: password deve contenere almeno una lettera maiuscola (A-Z)!");

        return false;
      }
    } else {
      alert("Errore: Controlla se hai inserito una password valida!");
   
      return false;
    }

     // checkbox
  var checkBox = document.getElementById("checkbox-form");
 // checkbox è checked?
  if (checkBox.checked !== true){
 alert("Errore: Devi accettare la privacy!");
      
    return false;  
  }
      
        alert("hai inserito una password valida: " + form.pwd_log.value);
    return true;
  }
