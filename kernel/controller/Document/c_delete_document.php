<?php
	include("../../model/m_generique.php");
	include("../../model/m_document.php");
	include("../../model/m_histo_document.php");
	
	$doc = new document ('','','','','');
	$hdoc = new histo_document ('','','','','','','');
	$doc->deleted($_POST['id']);
	$hdoc->read($_POST['id']);
	//print_r($doc);
	
	include("../../view/Document/v_delete_document.php");
	
	echo'<script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
	<script src="../../js/undocument.js"></script>';
?>