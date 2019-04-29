<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Base</title>
      <!-- Pour Bootsrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Pour le CSS -->
      <link rel="stylesheet" type="text/css" href="/Dieandretry/style.css">
      <!-- Lien Pour les Icones Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>

<body>

	<div class="container">

<?php
	include 'Fonctions.php';
	include 'Tableau.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} 
	else {
		$id = $_GET["id"];
		$Title = $_GET["Title"];
		$ReleaseDate = $_GET["ReleaseDate"];
		$idPlatform = $_GET["idPlatform"];
		$idPublisher = $_GET["idPublisher"];
		$idDeveloper = $_GET["idDeveloper"];
	}
	
	if ($action == "CREATE") {
		createUser();
		echo "<p class='text-center'>Le jeu à bien était ajouté</p> <br>";
		echo "<a class='btn btn-primary' href='index.php'>Retour à la liste des jeux</a>";	
	}

	if ($action == "UPDATE") {
		updateUser($Title, $ReleaseDate, $idPlatform, $idPublisher, $idDeveloper);
		echo "jeu update <br>";
		echo "<a href='index.php'>Retour à la liste des jeux</a>";
	}

	if ($action == "DELETE") {
		deleteUser($id);
		echo "<p class='text-center'>Jeu supprimé</p> <br>";
		echo "<a class='btn btn-primary' href='index.php'>Retour à la liste des jeux</a>";
	}
	?>

</div>


    <!-- Pour Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
    <!-- Pour JavaScript -->
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

  </body>
  </html>