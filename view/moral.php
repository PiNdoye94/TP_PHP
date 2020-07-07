<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Authentification</title>
        <link rel="stylesheet" href="../public/css/style.css"/>
    </head>
    <boby>
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
                    <input type="search" name="recherche_client" class="btn_search"placeholder="ID client"/>
                    <input type="button" name="bouton_de_recherche" class="btn_search" value="Rechercher"/>
                  </div>
          </form>
          <form id="formulaire" name="ouvertureCompte" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">  
                <fieldset id="donneesClient">
                  <legend>Informations client</legend>
                        <div>
                            <label for="lname">Nom Entreprise<span id="error_nom"></span></label>
                            <input type="text" id="lname" name="nom" class="input_saisi" />
                            <span id="error_nomMessage"></span>
                        </div>
                        <div>
                            <label for="adress">Adresse Entreprise<span id="error_adress"></span></label>
                            <input type="text" id="adress" name="Adresse" class="input_saisi"/>
                            <span id="error_adressMessage"></span>
                        </div>
                        <div>
                            <label for="phone">N° Téléphone<span id="error_phone"></span> </label>
                            <input type="tel" id="phone" name="telephone" class="input_saisi"/>
                           <span id="error_phoneMessage"></span>
                        </div>
                        <div>
                            <label for="mail">Adresse Email<span id="error_mail"></span> </label>
                            <input type="email" id="mail" name="email" class="input_saisie"/>
                            <span id="error_mailMessage"></span>
                        </div>
                        <div>
                            <label for="cin">Type d'entreprise<span id="error_cin"></span> </label>
                            <input type="text" id="cin" name="identite" class="input_saisie"/>
                           <span id="error_cinMessage"></span>
                        </div>
                        <div>
                           <label for="validite">N° de Registre<span id="error_valid"></span></label>
                            <input type="text" id="validite" name="validite" class="input_saisie"/>
                           <span id="error_validMessage"></span>
                        </div>   
                        <div> 
                            <label for="nameProf">Domaine d'activité<span id="error_nameProf"></span> </label>
                            <input type="text" id="nameProf" name="profession" class="input_saisie"/>
                            <span id="error_nameProfMessage"></span>
                        </div>
                </fieldset>

                <!--div id="ajout">
                    <input type="button" name="" value="Ajouter Client" id="btnAjout">
                </div-->
        
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
                        <div>
                            <label for="numero_compte">N° Compte </label>
                            <input type="text" name="numero_compte" id="numero_compte" class="input_saisie"/>
                        </div>
                        <div>
                            <label for="cle_rib">Clé Rib </label>
                            <input type="text" name="cle_rib" id="cle_rib" class="input_saisie">
                        </div>
                        <div>
                            <label for="numero_agence"> N° Agence </label>
                            <input type="text" name="numero_agence" id="numero_agence" class="input_saisie"/>
                        </div>
                        <div>
                            <label for="date_ouverture">Date d'ouverture<em>*</em></label>
                            <input type="date" id="date_ouverture" name="date_ouverture" value="" min="" max="" class="input_saisie"/> 
                        </div>
                        <div id="dureeBlocage">                            
                            <label for="durée_blocage">Durée de Blocage </label>
                            <input type="date" name="durée_blocage" id="durée_blocage" class="input_saisie"/>
                        </div>
                        <div>                            
                            <label for="solde">Solde </label>
                            <input type="text" name="solde" id="solde" class="input_saisie"/>
                        </div>
                        <div id="fraisOuverture">
                            <label for="frais_ouverture">Fais d'ouverture Compte </label>
                            <input type="text" name="frais_ouverture" id="frais_ouverture" class="input_saisie"/>
                        </div>
                      </div>
                </fieldset>

                <div id="save">
                    <input type="submit" class="bouton" id="boutonsave" name="envoyer" value="Enregistrer" onclick="valider()">
                    <input type="reset" class="bouton" value="Annuler">    
                </div>

                <div id="message">  

                </div>

          </form>
       
    <script src="../public/js/ouverture.js"></script>
    </boby>
</html>