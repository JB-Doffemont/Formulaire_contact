 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form action="contact.php" method="POST">
         <label for="lastName">Nom</label>
         <input type="text" name="name" id="lastName">
            <br>
            <br>
         <label for="firstName">Prenom</label>
         <input type="text" name="firstName" id="firstName">
            <br>
            <br>
         <label for="email">E-mail</label>
         <input type="email" name="email" id="email">
            <br>
            <br>
         <label for="phone">Numéro de téléphone</label>
         <input type="tel" name="phone" id="phone">
            <br>
            <br>
         <label for="message">Message</label>
         <textarea name="message" id="message" cols="30" rows="10"></textarea>
    
         <input type="submit" value="submit">
     </form>
 </body>
 </html>