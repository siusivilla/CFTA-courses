//Controllo i campi del form contattaci
function checkContact(form) {
  
  //controllo nome - obbligatorio
  if(form.nome_cont.value == "") {
    alert("Errore: non hai inserito il tuo nome");
    return false;
  }

  //controllo email - obbligatorio
  if(form.email_cont.value == "") {
    alert("Errore: manca l'email");
    return false;
  }

  //controllo email - email corretta sintatticamente
  re=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!re.test(form.email_cont.value)) {
    alert("Error: controlla che l'email inserita sia corretta!");
    return false;
  }

  //controllo oggetto - obbligatorio
  if(form.oggetto_cont.value == "") {
    alert("Errore: non hai scritto un oggetto");
    return false;
  }

  //controllo testo email - obbligatorio
  if(form.testo_cont.value == "") {
    alert("Errore: non hai inserito un testo!");
    return false;
  }

}