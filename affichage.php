<?php
session_start();

/*appelle de fichier de connexion à a base */
$user='root';
$pass='';
$db='geek';
$db=new mysqli('localhost',$user,$pass,$db)
 or die  ("unable to connect");


$sql="select*from inscris";
$result=mysqli_query($db,$sql) or die("bad quey");

while($row=mysqli_fetch_assoc($result)) {

    echo"{$row['nom']}  {$row['prenom']}   {$row['aej']}  {$row['tel']} {$row['email']} {$row['domaine']} <br>";
}
?>