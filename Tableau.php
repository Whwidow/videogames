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


<?php

function afficherTableau($rows, $headers) {
		?>
<!-- On créer un tableau  -->
	<div class="table-responsive scrollbar">
		<table class="table table-striped " cellspacing="0">
			<thead class="thead-dark">
			    <tr>
			    <?php foreach ($headers as $header): ?>
			        <th><?php echo $header; ?></th>
			    <?php endforeach; ?>
			    </tr>
			</thead>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): 
			    	 if ($k == 0){ ?>
			    	<td><?php echo '<a href=formulaireUtilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    	<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>
		</table>
	</div>

<?php
}
	function getHeaderTable() {
		$headers = array();
		$headers[] = "ID";
		$headers[] = "Titre";
		$headers[] = "Date de sortie";
		$headers[] = "idPlatform";
		$headers[] = "idPublisher";
		$headers[] = "idDeveloper";
		return $headers;
	}
?>

    <!-- Pour Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script> 
    <!-- Pour JavaScript -->
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>

  </body>
  </html>


 