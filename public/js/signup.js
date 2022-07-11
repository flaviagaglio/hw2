function validazione(event) { 
	if (form.name.value.length === 0 || form.surname.value.length === 0 || form.email.value.length === 0 || form.username.value.length === 0 ||
		form.password.value.length === 0 || form.confermapassword.value.length === 0) {
			alert("Compilare tutti i campi");
			event.preventDefault();
	}
	
	if (form.password.value !== form.confermapassword.value) {
		alert("Le password non coincidono");
		event.preventDefault();
	}
    else{
	if(form.password.value.length < 6){
		alert("La password deve contenere almeno 6 caratteri");
		event.preventDefault();
	 }
    }
	 if (form.password.value.length > 15){
        alert("Password troppo lunga, inserire meno di 15 caratteri");
        event.preventDefault();
      } else{
       
        if ((form.password.value.match(/[A-Z]/)) && (form.password.value.match(/[a-z]/)) && (form.password.value.match(/[0-9]/))) {
          return true;
          }
          else {
            alert("La password deve contenere almeno un carattere maiuscolo, almeno uno minuscolo e almeno una cifra");
            event.preventDefault();

          }}
	const mail = form.email.value;
	if (form.email.value.length !== 0 && mail.indexOf("@") <= -1) {
		alert("Email non valida");
		event.preventDefault();
	}
	
	
    
	
	
}




const signupform = document.forms["form"];
signupform.addEventListener("submit", validazione);


