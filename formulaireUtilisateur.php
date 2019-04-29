<?php
	include 'Fonctions.php';
	include 'Tableau.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$jeu = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$jeu = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
?>

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

    <!-- Mise en forme du header  -->
    <header id="header" class="jumbotron-fluid text-center">
    
    <p><br>
    <img id="logo" src="logo.jpg" alt="LOGO"><hr>
   	Pour ajouter un jeux
    </p><br>
    
    </header>


<!-- Début de la page -->

	<!-- Début du "formulaire" -->
	<form action="createUpdate.php" method="get">
		<p>	<br/>
		<a class="btn btn-outline-dark col-4 offset-4" href="index.php">Retour liste des jeux</a>
		<br/><br/>

	<div class="card col-6 offset-4 " style="width: 18rem;">	
		
		<input type="hidden" class="form-control" name="id" value="<?php echo $jeu['id'];  ?>"/>
		<input type="hidden" class="form-control" name="action" value="<?php echo $action;  ?>"/>
		<br>
		 <div>
        	<label for="name">Title :</label><br>
        	<input type="text" class="form-control" id="Title" name="Title" value="<?php echo $jeu['Title'];  ?>">
	    </div><hr>
	    <div>
	        <label for="prenom">ReleaseDate :</label><br>
	        <input type="text"  class="form-control"  id="prenom" name="Date de sortie" value="<?php echo $jeu['ReleaseDate'];  ?>">
	    </div><hr>
	    <div>
	        <label for="age">idPlatform :</label><br>
	        <input type="text"  class="form-control" id="age" name="idPlatform" value="<?php echo $jeu['idPlatform'];  ?>">
	    </div><hr>
	    <div>
	        <label for="adresse">idPublisher :</label><br>
	        <textarea type="text"  class="form-control"  id="adresse" name="idPublisher" placeholder="<?php echo $jeu['idPublisher'];  ?>"></textarea>
	    </div><hr>
	    <div>
	        <label for="age">idDeveloper :</label><br>
	        <input type="text"  class="form-control" id="age" name="idDeveloper" value="<?php echo $jeu['idDeveloper'];  ?>">
	    </div><br/>
</div>

		<div class="button">
			<button class="btn btn-outline-dark col-4 offset-4" type="submit"><?php echo $libelle;  ?></button>
		</div>
		</p>
		</form>
		<br>



	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $jeu['id'];  ?>"/>
		<p>
		<div class="button">
			<button class="btn btn-danger col-2 offset-4" type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>
	

	<footer class="jumbotron-fluid text-center">
        
      <p><br>
      FOOTER
      </p><br>

    </footer>

    <!-- Pour Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
    <!-- Pour JavaScript -->
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

  </body>
  </html>