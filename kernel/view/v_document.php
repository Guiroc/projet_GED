<?php
	echo '<head>
		<link href="css/v_document.css" rel="stylesheet" media="all" type="text/css"/>
		<title>Affichage des documents</title>
	</head>
	<div>
		<div class="colonne1">
			Nom
		</div>
		<div class="colonne2">
			création
		</div>';
		foreach($sql2 as $undocument){
			echo "<div class='div1'>
					<div class='colonne1'>
						$undocument[nom_document]
					</div>
					<div class='colonne2'>
						$undocument[date_creation]
					</div>
					<button class='read' data-id='$undocument[id_document]' type='button'>afficher</button>
				</div>";
		}
	echo "</div>";
?>