<!DOCTYPE html>                                                                                                                                         
<html>
<head>
<title>Page commande</title>
  <meta charset="utf-8">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="Stylecommande.css" />
  <?php
// Tout début du code PHP. Situé en haut de la page webg
ini_set("display_errors",0);error_reporting(0);
?>
</head>
<img style="width:500px;" src="pizzalogo.png" />
<div id="menu">
	<a href="pizzamaison.html">Accueil</a>
	<a href="Pagecarte.php">La caaarte!</a>
</div>
<form method="post" action="Pagecommande.php">
	<div class="panier">
	
	<h1>Commande</h1>
	<?php
	foreach ($_POST['pizza'] as $valeur) {
		echo "Pizza: ".$valeur."€</br>";
	}
	?>
</div>
</br>
	<body>
<table class="pizza">
	<?php
	$Xml = 'catalogue-pizzas.xml';
	$catalogue = simplexml_load_file($Xml);
	foreach ($catalogue as $P){
		$file = $P->image; // vas chercher le nom du fichier
		$img = str_replace('.jpg','.png',$file); //remplace l'extention de l'image
		$compo = $P->composition;
		$nomp = $P->nom;
		echo "<tr><td><img class=ipizza src='".$img."'/>".$nomp.'<h5>'.$compo.'</h5></td><td><input id=bouton type="submit" value="Ajouteeeer"></td></tr>';
		foreach ($P->prix->attributes() as $taille => $prix) {
		echo "<tr><td><input type='checkbox'name='pizza[]' value='".$nomp.' = '.$prix."'/>".$taille.' = '.$prix.'€</td></tr>';
		}
	}
	?> 
</table>
</form>
<div class="formulair">
<form method="post" action="remerciement.php">
	<p>
        <label>Votre Nom</label> : <input type="text" name="nom" /></br>
        <label>Votre Prenom</label> : <input type="text" name="prenom" /></br>
		<label>Votre Adress</label> : <input type="text" name="adress" /></br>
        <label>Votre mail</label> : <input type="email" name="mail" ></br>
        <input id="comfir" type="submit" value="Mangeeer!" >
    </p>
</form>
</div>
</body>
</html>