//controle sur l'affichage du formulaire avec le type de client
var nouveauClient = document.getElementById("newclient");
var clientExistant = document.getElementById("clientexistant");


nouveauClient.addEventListener("click",(event)=>{
    event.preventDefault();
    var formulaire = document.getElementById("formulaire");
    var recherche = document.getElementById("search");

    formulaire.style.display="block";
    recherche.style.display="none";
    
})

clientExistant.addEventListener("click",(event)=>{
    event.preventDefault();
    var formulaire = document.getElementById("formulaire");
    var recherche = document.getElementById("search");

    formulaire.style.display="block";
    recherche.style.display="block";
    
})

//controle sur l'affichage des champs avec le type de compte
var selection = document.getElementById("typeCompte");
selection.addEventListener("change",(event)=>{
     event.preventDefault();     
     console.log(selection.value);
     
     var donnees_comptes = document.getElementById('dataComptes');
     var duree_blocage = document.getElementById("dureeBlocage");
     var frais_ouverture = document.getElementById("fraisOuverture");
     var agios = document.getElementById("agios");
    

    if (selection.value=="1" || selection.value=="2" || selection.value=="3") {
        document.getElementById("dataComptes").style.display="block";
    }
    else{
        document.getElementById("dataComptes").style.display="none";
    }
    if(selection.value=="1"){
      
        document.getElementById("dureeBlocage").style.display="none";
        document.getElementById("fraisOuverture").style.display="none";
        
    }
    else{
        /*prenom.removeAttribute("readonly");*/
        document.getElementById("dureeBlocage").style.display="block";
        document.getElementById("fraisOuverture").style.display="block";
        
      
    }
    if(selection.value=="2" || selection.value=="3"){
       
        document.getElementById("agios").style.display="none";
        document.getElementById("salaire").style.display="none";
       
        if(selection.value=="2"){
            document.getElementById("dureeBlocage").style.display="none";
        }
        else{
            document.getElementById("dureeBlocage").style.display="block";
        }

    }
    else{
    
        document.getElementById("agios").style.display="block";
        document.getElementById("salaire").style.display="block";
    }
  
})
