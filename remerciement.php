<!DOCTYPE <!DOCTYPE html>
  <html>
    <head>
	  <title>remerciement</title>
	    <meta charset="UTF-8"/> 
	    <link rel="stylesheet" type="text/css" href="css.css" />
	    <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
    </head>

<body> 


<?php
$nom = $_POST['nom'];
$url = $_POST['mail'];
mail( $url, 'Votre Pizza', 'Votre pizza arrivra dans quel que anner');
?>


   <div class="message">
      <p> Cher Clients,

Nous vous remercions pour avoir effectué votre commande sur notre site et pour la confiance que vous avez accordé à nos produits. 
Nous vous prions d’agréer,Madame,Monsieur, nos plus sincères salutations.

     <p>L'équipe G.Y.K.E ;-)</p>
   </div>

</body>

  </html>