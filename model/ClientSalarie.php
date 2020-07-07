<?php

    //include "connexion.php";
    //include "../controller/CClientSalarie.php";

    function addCostumers(){
    $requete="INSERT INTO clients VALUES(NULL, :nom, :adresse, :telephone, :email)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'nom' => $_POST["nom"],
        'adresse' => $_POST["adresse"],
        'telephone' => $_POST["telephone"],
        'email' => $_POST["email"]
     ));

            if($execute)
            {
                echo 'Données clients insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion";
            }
        $requete_insertion->closeCursor();

    }

    function addSalariedCostumers(){
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
        'carte_identite' => $_POST["carte_identite"],
        'validite_CIN' => $_POST["validite"]
     ));

    }

    function addAccount(){
    $requete="INSERT INTO comptes VALUES(NULL, :num_compte, :num_agence, :cle_rib id_client, :id_resp_compte, :date_ouverture, :solde)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'num_compte' => $_POST["numero_compte"],
        'num_agence' => $_POST["numero_agence"],
        'cle_rib' => $_POST["cle_rib"],
        'id_client' => 1,
        'id_cresp_compte' => 1,
        'date_ouverture' => $_POST["date_ouverture"],
        'solde' => $_POST["solde"]
     ));
    }

    function addCurrentAccount(){
    $requete="INSERT INTO compte_courant VALUES(NULL, :nom_employeur, :adresse_employeur, :raison_social, :id_compte, :id_agios)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'nom_employeur' => $_POST["nom_Employeur"],
        'adresse_employeur' => $_POST["Adresse_employeur"],
        'raison_social' => $_POST["raison_sociale"],
        'id_client' => 1,
        'id_agios' => 1
    ));
    }

    function addBlockedAccount(){
    $requete="INSERT INTO compte_bloque VALUES(NULL, :frais_compte, :duree_blocage , :id_compte, :montant_renumeration)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'frais_compte' => $_POST["frais_ouverture"],
        'duree_blocage' => $_POST["duree_blocage"],
        'id_client' => 1,
        'montant_renumeration' => ""
    ));
    }

    function addSavingsAccount(){
    $requete="INSERT INTO compte_epargne VALUES(NULL, :frais_compte, :id_compte, :montant_renumeration)";
    $requete_insertion=$db->prepare($requete);
    $requete_insertion->execute(array(
        'frais_compte' => $_POST["frais_ouverture"],
        'id_client' => 1,
        'montant_renumeration' => ""
    )); 
    }

    

?>