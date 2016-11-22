<?php
	include("../../model/m_generique.php");
	include("../../model/m_document.php");
	
	$doc = new document ('','','','','');
	$doc->read($_POST['id']);
	//print_r($doc);
	
	include("../../view/Document/v_read_document.php");
	
	echo'<script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
	<script src="../../js/undocument.js"></script>';
?>