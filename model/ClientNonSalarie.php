<?php
    
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
    $durée_blocage = $_POST['durée_blocage'];
    $solde = $_POST['solde'];
    $frais_ouverture = $_POST['frais_ouverture'];
     

    //echo "$nom,$prenom,$adresse,$telephone,$email,$identifiant_employeur";

    // connexion à la base de données
    require_once "connexion.php";

    function addCostumer() {
    // insertion de données dans la table clients
    $sql = "INSERT INTO clients (nom, adresse, telephone, email) VALUES (:nom,:adresse,:telephone,:email)";
    $res = $db->prepare($sql);
    $exec = $res->execute(array("nom"=>$nom,"adresse"=>$adresse,"telephone"=>$telephone,"email"=>$email));

    $connect = connexion();

    return $connect->exec($sql);

            if($exec)
            {
                echo 'Données clients insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion";
            }

            $res->closeCursor();
    }


    function addSalariedCostumer() {
    //insertion de données dans la table client salarie
    $sql1 = "INSERT INTO client_salarie (prenom, profession, salaire, nom_entreprise, adresse_entreprise, id_client, identifiant_employeur, carte_identite,  validite_CIN) VALUES (:prenom,:profession,:salaire,:nom_entreprise,:adresse_entreprise,:id_client,:identifiant_employeur,:identite,:validite)";
    $res1 = $db->prepare($sql1);
    $exec1 = $res1->execute(array("prenom"=>$prenom,"profession"=>$profession,"salaire"=>$salaire,"nom_entreprise"=>$nom_entreprise,"adresse_entreprise"=>$adresse_entreprise,"id_client"=>1,"identifiant_employeur"=>$identifiant_employeur,"identite"=>$carte_identite,"validite"=>$validite_CIN));

    $connect = connexion();

    return $connect->exec1($sql1);

            if($exec1)
            {
                echo 'Données clients salaries insérées';
            }
            else
            {
                echo "Échec de l'opération d'insertion";
            }

            $res1->closeCursor();

    }

    function addAccount(){
//insertion de données dans la table comptes
    $sql2 = "INSERT INTO comptes (num_compte, num_agence, cle_rib, id_client, id_resp_compte, date_ouverture, solde) VALUES (:numero_compte, :numero_agence, :cle_rib, :id_client, :id_resp_compte, :date_ouverture, :solde)";
    $res2 = $db->prepare($sql2);
    $exec2 = $res2->execute(array("num_compte"=> $numero_compte, "num_agence"=>$numero_agence, "cle_rib"=>$cle_rib, "id_client"=>1, "id_resp_compte"=>1, "date_ouverture"=>$date_ouverture, "solde"=>$solde));

    $connect = connexion();

    return $connect->exec2($sql2);

            if ($exec2) 
            {
               echo 'Données comptes insérées'; 
            }
             else
            {
                echo "Échec de l'opération d'insertion";
            }

    $res2->closeCursor();
}


function addCurrentAccount(){
    //insertion de données dans la table compte courant
    $sql3 = "INSERT INTO compte_courant (nom_employeur, adresse_employeur, raison_social, id_compte, id_agios) VALUES (:nom_Employeur, :Adresse_employeur, :raison_sociale, :id_compte, :id_agios)";
    $res3 = $db->prepare($sql3);
    $exec3 = $res3->execute(array("nom_Employeur"=>$nom_Employeur, "Adresse_employeur"=>$Adresse_employeur, "raison_sociale"=>$raison_sociale, "id_compte"=>1, "id_agios"=>1));

    $connect = connexion();

    return $connect->exec3($sql3);

            if ($exec3) 
            {
               echo 'Données compte courant insérées'; 
            }
             else
            {
                echo "Échec de l'opération d'insertion";
            }

    $res3->closeCursor();
}


function addSavingsAccount(){
    //insertion de données dans la table compte épargne
    $sql4 = "INSERT INTO compte_epargne (frais_compte, id_compte) VALUES (:frais_ouverture, :id_compte)";
    $res4 = $db->prepare($sql4);
    $exec4 = $res4->execute(array("frais_ouverture"=>$frais_ouverture, "id_compte"=>1));

    $connect = connexion();

    return $connect->exec4($sql4);

            if ($exec4) 
            {
               echo 'Données compte épargne insérées'; 
            }
             else
            {
                echo "Échec de l'opération d'insertion";
            }

    $res4->closeCursor();
}


function addBlockedAccount(){
    //insertion de données dans la table compte bloqué
    $sql5 = "INSERT INTO compte_bloque (frais_compte, duree_blocage, id_compte) VALUES (:frais_ouverture, :durée_blocage, :id_compte)";
    $res5 = $db->prepare($sql5);
    $exec5 = $res5->execute(array("frais_ouverture"=>$frais_ouverture, "durée_blocage"=>$durée_blocage, "id_compte"=>1));

    $connect = connexion();

    return $connect->exec5($sql5);

            if ($exec5) 
            {
               echo 'Données compte bloqué insérées'; 
            }
             else
            {
                echo "Échec de l'opération d'insertion";
            }

    $res5->closeCursor();
}

?>