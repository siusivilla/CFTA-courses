function checkForm_cont(form)
{
  
      //controllo nome
      if(form.nome_cont.value == "") {
        alert("Errore: il nome non puo' essere bianco!");
      
        return false;
      }


    //controllo email
    if(form.email_cont.value == "") {
      alert("Errore: la email non puo' essere bianca!");
    
      return false;
    }

      re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!re.test(form.email_cont.value)) {
     alert("Error: la email deve essere scritta correttamente!");
 
      return false;
    }
    
    //controllo oggetto
    if(form.oggetto_cont.value == "") {
      alert("Errore: l'oggetto non puo' essere bianco!");
    
      return false;
    }

    //controllo testo email
    if(form.testo_cont.value == "") {
      alert("Errore: non hai inserito un testo!");
    
      return false;
    }
  }
