<?php
//fichier de connexion
try{

    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $db=new PDO ('mysql:host=127.0.0.1; dbname=geek','root','');
    $db->setAttribute (PDO::ATTR_CASE, PDO::CASE_LOWER);//Mettre les nom des champs en majuscule
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//lancer les exceptions e cas d'erreur

    
}
catch (PDOException $e){
die('Erreur:'.$e->getMessage());

}


?>