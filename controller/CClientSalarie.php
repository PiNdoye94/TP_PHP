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
    $profession = $_POST['profession'];
    $nom_entreprise = $_POST['nom_entreprise'];
    $adresse_entreprise = $_POST['adresse_entreprise'];
    $salaire_client = $_POST['salaire_client'];
    $numero_compte = $_POST['numero_compte'];
    $cle_rib = $_POST['cle_rib'];
    $numero_agence = $_POST['numero_agence'];
    $nom_Employeur = $_POST['nom_Employeur'];
    $raison_sociale = $_POST['raison_sociale'];
    $identifiant_employeur = $_POST['identifiant_employeur'];
    $Adresse_employeur = $_POST['Adresse_employeur'];
    $date_ouverture = $_POST['date_ouverture'];
    $durée_blocage = $_POST['duree_blocage'];
    $solde = $_POST['solde'];
    $frais_ouverture = $_POST['frais_ouverture'];
    $agios_compte_courant = $_POST['agios_compte_courant'];
    
    //insertion dans mysql

    $requete="INSERT INTO clients VALUES(NULL, :nom, :adresse, :telephone, :email)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'nom' => $_POST["nom"],
        'adresse' => $_POST["Adresse"],
        'telephone' => $_POST["telephone"],
        'email' => $_POST["email"]
     ));

           /* if($requete_insertion)
            {
                echo 'Données clients insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion";
            }*/
        $requete_insertion->closeCursor();


    $requete="INSERT INTO client_salarie VALUES(NULL, :prenom, :profession, :salaire, :nom_entreprise, :adresse_entreprise, :id_client, :identifiant_employeur, :carte_identite, :validite_CIN)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'prenom' => $_POST["prenom"],
        'profession' => $_POST["profession"],
        'salaire' => $_POST["salaire_client"],
        'nom_entreprise' => $_POST["nom_entreprise"],
        'adresse_entreprise' => $_POST["adresse_entreprise"],
        'id_client' => 1,
        'identifiant_employeur' => $_POST["identifiant_employeur"],
        'carte_identite' => $_POST["identite"],
        'validite_CIN' => $_POST["validite"]
     ));

            /*if($requete_insertion)
            {
                echo 'Données client salarie insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion client salarie";
            }*/
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

        /*if($requete_insertion)
            {
                echo 'Données compte insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion compte";
            }*/
        $requete_insertion->closeCursor();


    $requete="INSERT INTO compte_courant VALUES(NULL, :nom_employeur, :adresse_employeur, :raison_social, :id_compte, :id_agios)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'nom_employeur' => $_POST["nom_Employeur"],
        'adresse_employeur' => $_POST["Adresse_employeur"],
        'raison_social' => $_POST["raison_sociale"],
        'id_compte' => 1,
        'id_agios' => 1
    ));

        /*if($requete_insertion)
            {
                echo 'Données compte courant insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion compte courant";
            }*/
        $requete_insertion->closeCursor();   
           
}
 

    /*$sql="INSERT INTO etudiant1(nom,prenom,age,email,cv,photo) VALUES('$nom','$prenom',$age,'$email','$cv','$photo')";
           
    $res = $conn->query($sql);
    
    if($res){
        header("location:ajout_etudiant1.php?m=1");exit;
    }else{
        header("location:ajout_etudiant1.php?m=0");exit;
    }*/

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
            <p style="text-align: center;font-size: 30px;"><?php
                if($requete_insertion)
                {
                    echo 'Client enregistré dans la base de données';
                }
                else
                {
                    echo "Client non enregistré dans la base de données";
                }
            ?></p>
                
            </div>
    </body>
</html>


       










































 