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
    Bienvenu sur la page de Die & Retry
    </p><br>
    
    </header>
    
    <!-- Conteneur de la page -->
    <div class="container">
            <br/><br/>


<button type="button" class="btn btn-default btn-lg">
  
</button>

            <!-- Pour le bouton d'ajout  -->
        		<a class="btn btn-outline-dark d-block col-4 text-center" href=formulaireUtilisateur.php?id=0 >
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Ajouter un jeu 
            </a> 

            <!-- Pour afficher le tableau -->
            <?php
            	include 'Fonctions.php';
            	include 'Tableau.php';

              $headers = getHeaderTable();
              $jeux = getAllUsers();
              afficherTableau($jeux, $headers);
            ?>
    </div>
    <br/><br/><br/>
    <!-- Fin de la page -->
    
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

