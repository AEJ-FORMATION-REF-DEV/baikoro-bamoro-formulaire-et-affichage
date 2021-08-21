<?php
session_start();

/*appelle de fichier de connexion à a base */
require('dbconnect.php');

/*declaration des variables */
$nom=$_POST['nom'];
$renom=$_POST['prenom'];
$aej=$_POST['aej'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$domaine=$_POST['domaine'];
/*début d'insertion */
$insert=$db->prepare("INSERT INTO inscris(nom, prenom, aej, tel, email, domaine) VALUES(?,?,?,?,?,?)");
$insert->execute(array($nom,$renom,$aej,$tel,$email,$domaine));
/*redirection à la page principale*/
if($insert){
$Message='Vous venez de vous inscrire';

}else{

    $Message='Echec d inscription';
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>

     <p>          <?php   echo  $Message; ?>  </p>


</body>


</html>

