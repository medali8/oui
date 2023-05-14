function verifForm(){
    if (document.getElementById("email").value==""){
      alert("Entrez votre email s'il vous plait !!");
      return false ;
    }
    if (document.getElementById("pwd_login").value.length<8){
      alert("Entre votre mot de passe s'il vous plait!!");
      return false ;
    }
  
    
    
  }