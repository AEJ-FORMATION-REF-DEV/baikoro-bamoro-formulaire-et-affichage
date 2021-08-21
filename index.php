<!doctype>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>




<div class="formulaire">
    
    <div class="texte-formulaire">Formulaire</div>
    <div class="zonedetexe">
         <form method="post" action="formulaire.php">

                          
                         <span>Nom </span>
                         <input type="text" name="nom" placeholder="Votre nom de famille ?" >
             
                         <span>Prénom </span>
                         <input type="text" name="prenom" placeholder="Quel est votre prénom ?" >
             

                         <span>Numéro AEJ </span>
                         <input type="text" name="aej" placeholder="Entrez votre numéro AEJ" >

                         <span>Téléphone </span>
                         <input type="tel" name="tel" placeholder="Votre numéro de téléphone" >

                         <span>E-mail </span>
                         <input type="email" name="email" placeholder="Votre mail " >

                        
                         <span>domaine de formation </span>
                              <select name="domaine" id="domaine" >
                                  <option value="referent digital">referent digital</option>
                                  <option value="developpement web">developpement web</option>
                                  <option value="developpement data IA">developpement data IA</option>

                                 </select>
        
                                 <input type="submit" value="Je m'inscris" class="bouton">
        
        
          </form>



     </div>
<br>
                <h1> <a href="affichage.php"  class="texte-formulaire"> voir les inscrirs </a></h1>




       





</body>


</html>