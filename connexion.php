<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Se connecter</title>
    <link href="style.css" rel="stylesheet"/>
	
  </head>
  <body>
    <header>
      <h2> Connexion </h2>
    </header>
  <body>
    </br>
    <div class = "bouton_Ab">
      <input type ="button" value = "Accueil" onclick="window.location.href = 'index.php'">
    </br> </br> </br>
      <input type ="button" value = "CGU" onclick="window.location.href = 'cgu.php'">
      </div>
     
    <div class = "form1">
		<form method="post" action="connexionbis.php">
			<label for="pseudo"> Login </label> <input type="text" name="login" id="Login" required>
			</br>
			</br>
			<label for="mdp"> Mot de passe </label> <input type="password" name="mdp" id="mdp" required>
			</br>
			</br>
			<label for="Valider"> </label> <input type="submit" name="Valider"  id="Valider" >
		</form>
    </div>
	
  </body>
</html>
