<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
      rel="stylesheet"
    />
    <title>Le Quai Antique</title>
    <meta
      name="description"
      content="Le restaurant Le Quai Antique à
    Chambéry vous propose ses spécialités de la Savoie, les Diots, les Crozets, la Tartiflette, 
    la célèbre raclette savoyarde traditionnelle ou à l’ancienne, une expérience gastromique et une cuisine sans artifice"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./Assets/css/style.css">
  
	<title>Interface d'administration</title>
	<link rel="stylesheet" type="text/css" href="./styles.php">
</head>
<body>

<?php

// Vérifier si les informations de connexion sont correctes
if ($_POST["username"] === "admin" && $_POST["password"] === "password") {
	// Si les informations de connexion sont correctes, rediriger vers la page d'administration
	header("Location: admin.php");
	exit;
} else {
	// Si les informations de connexion sont incorrectes, afficher un message d'erreur
	echo "Nom d'utilisateur ou mot de passe incorrect.";
}

?>



	<div class="espaceAdmin" align="center">
		<h1>Espace de connexion admin</h1>
		<form action="login.php" method="post">
			<label for="username">Nom d'utilisateur :</label>
			<input type="text" id="username" name="username">
			<br>
			<label for="password">Mot de passe :</label>
			<input type="password" id="password" name="password">
			<br>
			<input type="submit" value="Se connecter">
		</form>
	</div>
</body>
</html>
