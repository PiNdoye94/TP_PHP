var nouveau_client1 = document.getElementById("newclient1");
var client_existant1 = document.getElementById("clientexistant1");
nouveau_client1.addEventListener("click",(event)=>{
    event.preventDefault();
    var formulaire1 = document.getElementById("divform1");
    var recherche1 = document.getElementById("search1");
    var numero_compte = document.getElementById("numCompte");
    var cle_rib = document.getElementById("cleRib");
    var numero_agence = document.getElementById("numAgence");
    formulaire1.style.display="block";
    recherche1.style.display="none";
    numero_compte.style.display="none";
    cle_rib.style.display="none";
    numero_agence.style.display="none";
})
client_existant1.addEventListener("click",(event)=>{
    event.preventDefault();
    var formulaire1 = document.getElementById("divform1");
    var recherche1 = document.getElementById("search1");
    var numero_compte = document.getElementById("numCompte");
    var cle_rib = document.getElementById("cleRib");
    var numero_agence = document.getElementById("numAgence");
    formulaire1.style.display="block";
    recherche1.style.display="block";
    numero_compte.style.display="block";
    cle_rib.style.display="block";
    numero_agence.style.display="block";
})

/*var selection = document.getElementById("typeCompte");
selection.addEventListener("change",(event)=>{
     event.preventDefault();
     console.log(selection.value);
     var duree_blocage = document.getElementById("dureeblocage");
     
    if(selection.value=="2"){
        
        document.getElementById("dureeblocage").style.display="none";
       
    }
    else{
        
        document.getElementById("dureeblocage").style.display="inline-block";
        
    }
}*/