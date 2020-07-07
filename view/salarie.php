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
        
          <form id="typeClient">
                <h1 id="ouCompte">OUVERTURE COMPTE</h1>
                  <div id="btns">
                    <input type="button" value="Nouveau Client" class="btn" id="newclient"/>
                    <input type="button" value="Client Existant" class="btn" id="clientexistant"/>
                  </div>
                  <div id="search">
                    <input type="search" name="recherche_client" class="btn_search"placeholder="Saisir le N° CIN du Client"/>
                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
                  </div>
          </form>

          <form id="formulaire" name="ouvertureCompte" action="../controller/CClientSalarie.php" method="POST" onsubmit="return validateForm();">  
                <fieldset id="donneesClient">
                  <legend>Informations client</legend>
                        <div>
                            <label for="lname">Nom<span id="error_nom"></span> </label>
                            <input type="text" id="lname" name="nom" class="input_saisi" value="" />
                            <span id="error_nomMessage"></span>
                        </div>
                        <div>   
                            <label for="fname">Prénom<span id="error_prenom"></span> </label>
                            <input type="text" id="fname" name="prenom" class="input_saisie"/>
                            <span id="error_prenomMessage"></span>
                        </div>
                        <div>
                            <label for="adress">Adresse<span id="error_adress"></span></label>
                            <input type="text" id="adress" name="Adresse" class="input_saisi"/>
                            <span id="error_adressMessage"></span>
                        </div>
                        <div>
                            <label for="phone">Téléphone<span id="error_phone"></span> </label>
                            <input type="tel" id="phone" name="telephone" class="input_saisi"/>
                            <span id="error_phoneMessage"></span>
                        </div>
                        <div>
                            <label for="mail">Adresse Email<span id="error_mail"></span> </label>
                            <input type="email" id="mail" name="email" class="input_saisie"/>
                            <span id="error_mailMessage"></span>
                        </div>
                        <div>
                            <label for="cin">N° Carte d'identité<span id="error_cin"></span> </label>
                            <input type="text" id="cin" name="identite" class="input_saisie"/>
                            <span id="error_cinMessage"></span>
                        </div>
                        <div>
                           <label for="validite">Validité CIN<span id="error_valid"></span></label>
                            <input type="date" id="validite" name="validite" class="input_saisie"/>
                            <span id="error_validMessage"></span>
                        </div>   
                        <div> 
                            <label for="nameProf">Profession<span id="error_nameProf"></span> </label>
                            <input type="text" id="nameProf" name="profession" class="input_saisie"/>
                            <span id="error_nameProfMessage"></span>
                        </div>
                        <div>
                            <label for="nameEnt">Nom de l'entreprise<span id="error_nameEnt"></span> </label>
                            <input type="text" id="nameEnt" name="nom_entreprise" class="input_saisie"/>
                            <span id="error_nameEntMessage"></span>
                        </div>
                        <div>
                           <label for="adressEnt">Adresse entreprise<span id="error_adressEnt"></span> </label>
                            <input type="text" id="adressEnt" name="adresse_entreprise" class="input_saisie"/>
                            <span id="error_adressEntMessage"></span>
                        </div>
                        <div id="obligatoire"></div>
                </fieldset>

                <fieldset id="donneesCompte">
                    <legend>Informations comptes client</legend>
                        <div id="comptes">
                            <select id="typeCompte">
                                <option value="0" selected>Type de Compte</option>
                                <option value="1" class="tcompte">Compte Courant</option>
                                <option value="2" class="tcompte">Compte Epargne</option>
                                <option value="3" class="tcompte">Compte Bloqué</option>
                            </select>
                        </div>
                      <div id="dataComptes">
                        <div id="salaire">
                            <label for="salaire_client">Montant Salaire<span id="error_salaire"></span> </label>
                            <input type="text" name="salaire_client" id="salaire_client" class="input_saisie"/>
                            <span id="error_salaireMessage"></span>
                        </div>
                        <div>
                            <label for="numero_compte">N° Compte<span id="error_NCompte"></span> </label>
                            <input type="text" name="numero_compte" id="numero_compte" class="input_saisie"/>
                            <span id="error_NCompteMessage"></span>
                        </div>
                        <div>
                            <label for="cle_rib">Clé Rib<span id="error_clerib"></span> </label>
                            <input type="text" name="cle_rib" id="cle_rib" class="input_saisie">
                            <span id="error_cleribMessage"></span>
                        </div>
                        <div>
                            <label for="numero_agence"> N° Agence<span id="error_nAgence"></span> </label>
                            <input type="text" name="numero_agence" id="numero_agence" class="input_saisie"/>
                            <span id="error_nAgenceMessage"></span>
                        </div>
                        <div id="nomEmployeur">
                            <label for="nom_Employeur">Nom Employeur<span id="error_nomEmp"></span> </label>
                            <input type="text" name="nom_Employeur" id="nom_Employeur" class="input_saisie"/>
                            <span id="error_nomEmpMessage"></span>
                        </div>
                        <div id="raisonSociale">
                            <label for="raison_sociale">Raison Sociale Employeur<span id="error_rSociale"></span> </label>
                            <input type="text" name="raison_sociale" id="raison_social" class="input_saisie"/>
                            <span id="error_rSocialeMessage"></span>
                        </div>
                        <div id="idEmployeur">
                            <label for="identifiant_employeur">ID Employeur<span id="error_idEmpMessage"></span> </label>
                            <input type="text" name="identifiant_employeur" id="identifiant_employeur" class="input_saisie"/>
                            <span id="error_idEmpMessage"></span>
                        </div>
                        <div id="adresseEmployeur">
                            <label for="Adresse_employeur">Adresse Employeur<span id="error_adresseEmp"></span> </label>
                            <input type="text" name="Adresse_employeur" id="Adresse_employeur" class="input_saisie"/>
                            <span id="error_adresseEmpMessage"></span>
                        </div>
                        <div>
                            <label for="date_ouverture">Date d'ouverture<span id="error_dateOuverture"></span></label>
                            <input type="date" id="date_ouverture" name="date_ouverture" value="" min="" max="" class="input_saisie"/> 
                            <span id="error_dateOuvertureMessage"></span>
                        </div>
                        <div id="dureeBlocage">                            
                            <label for="duree_blocage">Durée de Blocage<span id="error_dureeBlocage"></span> </label>
                            <input type="date" name="duree_blocage" id="duree_blocage" class="input_saisie"/>
                            <span id="error_dureeBlocageMessage"></span>
                        </div>
                        <div>                            
                            <label for="solde">Solde<span id="error_solde"></span> </label>
                            <input type="text" name="solde" id="solde" class="input_saisie"/>
                            <span id="error_soldeMessage"></span>
                        </div>
                        <div id="fraisOuverture">
                            <label for="frais_ouverture">Fais d'ouverture Compte<span id="error_fraisOuverture"></span> </label>
                            <input type="text" name="frais_ouverture" id="frais_ouverture" class="input_saisie"/>
                            <span id="error_fraisOuvertureMessage"></span>
                        </div>
                        <div id="agios">
                            <label for="agios_compte_courant">Agios<span id="error_agios"></span> </label>
                            <input type="text" name="agios_compte_courant" id="agios_compte_courant" class="input_saisie">
                            <span id="error_agiosMessage"></span>
                        </div>
                      </div>
                </fieldset>

                <div id="save">
                    <input type="submit" class="bouton" id="boutonsave" name="envoyer" value="Enregistrer">
                    <input type="reset" class="bouton" value="Annuler">    
                </div>

                <div id="message">  

                </div>

          </form>

        <script src="../public/js/ouverture.js"></script>
    </body>
</html>