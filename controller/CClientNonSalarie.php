<?php
include("../model/connexion.php");
//include ("ClientSalarie.php");
    
$envoyer = $_POST['envoyer'];

    /*echo "$nom, $adresse, $telephone, $email";*/

if(isset($_POST['envoyer'])){
    
    //recupération des valeurs du formulaire
    $nom = $_POST['nom']; 
    $prenom = $_POST['prenom']; 
    $adresse = $_POST['Adresse'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $carte_identite = $_POST['identite'];
    $validite_CIN = $_POST['validite'];
    $activite = $_POST['profession'];
    $numero_compte = $_POST['numero_compte'];
    $cle_rib = $_POST['cle_rib'];
    $numero_agence = $_POST['numero_agence'];
    $date_ouverture = $_POST['date_ouverture'];
    //$durée_blocage = $_POST['duree_blocage'];
    $solde = $_POST['solde'];
    $frais_ouverture = $_POST['frais_ouverture'];
    
    
    //insertion dans mysql

    $requete="INSERT INTO clients VALUES(NULL, :nom, :adresse, :telephone, :email)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'nom' => $_POST["nom"],
        'adresse' => $_POST["Adresse"],
        'telephone' => $_POST["telephone"],
        'email' => $_POST["email"]
     ));

        $requete_insertion->closeCursor();


    $requete="INSERT INTO client_non_salarie VALUES(NULL, :prenom, :activite, :id_client, :carte_identite, :validite_CIN)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'prenom' => $_POST["prenom"],
        'activite' => $_POST["profession"],
        'id_client' => 1,
        'carte_identite' => $_POST["identite"],
        'validite_CIN' => $_POST["validite"]
     ));

        $requete_insertion->closeCursor();


    $requete="INSERT INTO comptes VALUES(NULL, :num_compte, :num_agence, :cle_rib, :id_client, :id_resp_compte, :date_ouverture, :solde)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'num_compte' => $_POST["numero_compte"],
        'num_agence' => $_POST["numero_agence"],
        'cle_rib' => $_POST["cle_rib"],
        'id_client' => 1,
        'id_resp_compte' => 1,
        'date_ouverture' => $_POST["date_ouverture"],
        'solde' => $_POST["solde"]
     ));

        $requete_insertion->closeCursor();


    $requete="INSERT INTO compte_epargne VALUES(NULL, :frais_compte, :id_compte, :montant_renumeration)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'frais_compte' => $_POST["frais_ouverture"],
        'id_compte' => 1,
        'montant_renumeration' => 1000
    ));

        $requete_insertion->closeCursor();   
           
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>OUVERTURE COMPTE</title>
        <link rel="stylesheet" href="../public/css/style.css"/>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="../public/img/logobp.png"/>
            </div>
            <div id="welcome">
                <h1>BIENVENUE DANS LA BANQUE DU PEUPLE !!</h1>
            </div>
        </header>
            <div>
                <button><a href="../index.php">RETOUR A L'ACCUEIL</a></button>
            </div>
            <div id="confirm" style="background-color: white; margin: 15px;" >
            <p style="text-align: center;font-size: 30px;">
                <?php
                    if($requete_insertion)
                    {
                        echo 'Client enregistré dans la base de données';
                    }
                    else
                    {
                        echo "Client non enregistré dans la base de données";
                    }
                ?>  
            </p>
                
            </div>
    </body>
</html>


       










































 