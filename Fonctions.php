<?php 
	
	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "";
			$pdo = new PDO('mysql:host=localhost;dbname=videogames', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// Pour récuperer tous les jeux
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * FROM videogames';



		$rows = $con->query($requete);
		return $rows;
	}

	// Pour creer un jeu
	function createUser($Title, $ReleaseDate, $idPlatform, $idPublisher, $idDeveloper) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO videogames (Title, ReleaseDate, idPlatform, idPublisher, idDeveloper) 
					VALUES ('$Title', '$ReleaseDate', '$idPlatform', '$idPublisher', '$idDeveloper')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Pour récuperer un jeu
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT DISTINCT * from videogames";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}

	// Pour mettre a jour un jeu
	function updateUser($id, $Title, $ReleaseDate, $idPlatform, $idPublisher, $idDeveloper) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE videogames set 
						Title = '$Title',
						ReleaseDate = '$ReleaseDate',
						idPlatform = '$idPlatform',
						idPublisher = '$idPublisher', 
						idDeveloper = '$idDeveloper'
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// Supprime un jeu
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from videogames where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$jeu['id'] = "";
		$jeu['Title'] = "";
		$jeu['ReleaseDate'] = "";
		$jeu['idPlatform'] = "";
		$jeu['idPublisher'] = "";
		$jeu['idDeveloper'] = "";
		
	}
 ?>