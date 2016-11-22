<?php
	echo '<link href="css/v_read_document.css" rel="stylesheet" media="all" type="text/css"/>
	<div>
	<div id="base">
		<div class="colonne1">
			Id
		</div>
		<div class="colonne2">
			Nom
		</div>
		<div class="colonne3">
			Ouvert
		</div>
		<div class="colonne4">
			date creation
		</div>
		<div class="colonne5">
			createur
		</div>
		<div class="colonne6">
			date suppression
		</div><div class="colonne7">
			Suppresseur
		</div>';
		
		echo "<div class='div1'>
					<div class='colonne1'>
						{$doc->get_id_document()}
					</div>
					<div class='colonne2'>
						{$doc->get_nom_document()}
					</div>
					<div class='colonne3'>
						{$doc->get_verrouille_document()}
					</div>
					<div class='colonne4'>
						{$doc->get_date_creation()}
					</div>
					<div class='colonne5'>
						{$doc->get_id_creation()}
					</div>
					<div class='colonne6'>
						{$doc->get_date_suppression()}
					</div>
					<div class='colonne7'>
						{$doc->get_id_suppression()}
					</div>
					
				</div>";
	echo "</div>
	</div>";

//print_r($_POST);

?>