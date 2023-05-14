function verif() {
    var em = document.getElementById("emaili").value;
    if (em.length == 0) {
        alert("Entrez mail  !!");
        return false;
    }
    var pos1 = em.indexOf('@');
    var pos2 = em.lastIndexOf('.');
    var ch = em.substring(pos1 + 1, pos2);
    for (i = 0; i < ch.length; i++) {
        if ((ch.charAt(i).toUpperCase() < 'A') || (ch.charAt(i).toUpperCase() > 'Z')) {
            alert("Entrez mail valide !!");
            return false;
        }
    }
    var ch2 = em.substring(pos2 + 1, em.length);
    for (i = 0; i < ch2.length; i++) {
        if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
            alert("Entrez mail valide !!");
            return false;
        }
    }
    if (document.getElementById("name").value.length == 0) {
        alert("Entrez votre Nom!!");
        return false;
    }
    if (document.getElementById("prenom").value.length == 0) {
        alert("Entrez votre Prenom!!");
        return false;
    }
    if (document.getElementById("pwd").value.length<9){
        alert("Le mot de passe doit etre 8 caractere ou plus !!");
        return false ;
    }
    if (document.getElementById("pwd").value!=document.getElementById("cpwd").value){
        alert("le mot de passe doit etre identique !!");
        return false ;
    }
    if (document.getElementById("number").value.length !== 8) {
        alert("Entrez votre number!!");
        return false;
    }
    if (document.getElementById("cin").value.length !=8) {
        alert("Entrez votre cin doit etre egale a 8!!");
        return false;
    }
    if (document.getElementById("gv").value.length ==0) {
        alert("Entrez votre gouvernorat!!");
        return false;
    }



}