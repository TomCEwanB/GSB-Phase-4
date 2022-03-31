<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Renseigner</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<header>
		<h2> Renseigner une fiche </h2>
		</header>

		<div class = "bouton_AR">
		<input type ="button" value = "Accueil"onclick="window.location.href = 'index.php'">
		</div>
		<section>
		<form method="post" action="choix.php">
			<label for="Mois de la demande"> Mois </label> <input type="text" ,id="date">
			<label for="raison"> Raison </label> <input type="text" ,id="text">
			<label for="Montant"> Montant </label> <input type="text" ,id="text">
			<label for="Etat"> Etat </label> <input type="text" ,id="text">
			<label for="Valider"> </label> <input type="submit" name="Valider"  id="Valider">
		</form>
    </section>
	</body>
</html>