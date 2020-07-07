 <?php

 //function connexion(){

 	$host = 'localhost';
 	$username = 'root';
 	$password = '';
 	$dbname = 'banque_du_peuple';

 	$dsn = "mysql:host=$host;dbname=$dbname";

 	try{

        $db = new PDO ($dsn,$username,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }catch(EXCEPTION $e){

        die('Erreur: '. $e->getMessage());
    }
    //return $db;
 //}   

?>