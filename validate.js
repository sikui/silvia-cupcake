function validateEmail( email ){
    
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(reg.test(email) == false) {
        return false;
   }
   return true;
}

function validate(){
    
    // check se il campo del nome non è vuoto
    if( document.formContatti.nome.value.trim() == "" ) {
        
        alert( "Attenzione! il campo NOME non puo' essere vuoto ");
        $(document.formContatti.nome).highlight();
        return false;
    }
    // check se il campo cognome non è vuoto
    else if ( document.formContatti.cognome.value.trim() == "" ){
        
        alert( "Attenzione! il campo COGNOME non puo' essere vuoto ");
        $(document.formContatti.cognome).highlight();
        return false;
    }
    // check se il campo email non e' vuoto
    else if( document.formContatti.email.value.trim() == "" ) {
        
        alert( "Attenzione! il campo EMAIL non puo' essere vuoto ");
        $(document.formContatti.email).highlight();
        return false;
    }
    // valid email 
    else if ( ! validateEmail( document.formContatti.email.value ) ){
    
        alert('Email non valida. Si prega di inserire un indirizzo email valido del tipo me@example.com');
        return false;
    }
    // check se il campo richiesta non è vuoto
    else if ( document.formContatti.testo.value.trim() == "" ){
       
        alert( "Attenzione! il campo COMMENTO/RICHIESTA non puo' essere vuoto ");
        $(document.formContatti.testo).highlight();
        return false;
    }
    
    return true;
}
