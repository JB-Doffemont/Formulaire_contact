 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php
        
        echo "Nous avons bien reçu vos données !<br>" ;
        if (isset($_POST["nom"])) { // isset me permet de m'assurer que la variable existe bien dans la requête
            if (strtolower($_POST["nom"]) == "teapot") // je compare si le nom (mis en minuscule) est égal à "teapot"
            {
                // si oui on met le code de réponse à 418 
                http_response_code(418) ;
            }
            echo "Votre nom est : ".$_POST["nom"]."<br>" ;
    
        }
        if (isset($_POST["prenom"])) {
            echo "Votre prénom est : ".$_POST["prenom"]."<br>" ;
        }
        if (isset($_POST["email"])) {
            echo "Votre email est : ".$_POST["email"]."<br>" ;
        }
        if (isset($_POST["tel"])) {
            echo "Votre téléphone est : ".$_POST["tel"]."<br>" ;
        }
        if (isset($_POST["message"])) {
            echo "Votre message est : ".$_POST["message"]."<br>" ;
        }
    
     ?>
 </body>
 </html>