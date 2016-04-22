<!DOCTYPE html>
<html>
<head>
<title>Page carte</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylepagecarte.css" />
<link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
</head>
<img class="logo" src=" pizzalogo.png" />
<div id="menu">
	<a href="pizzamaison.html">Accueil</a>
	<a href="Pagecommande.php">Commande en ligne!</a>
</div>
<body>
	<table class=carte>
<?php
	$Xml = 'catalogue-pizzas.xml';
	$catalogue = simplexml_load_file($Xml);
	foreach ($catalogue as $P){
		$file = $P->image; // vas chercher le nom du fichier
		$img = str_replace('.jpg','.png',$file); //remplace l'extention de l'image
		$compo = $P->composition;
		$nomp = $P->nom;
		echo "<tr><td><img class=ipizza src='".$img."'/>".$nomp.'<h5>'.$compo.'</h5></td></tr>';
	}
	?>
	</table>
</body>
</html>