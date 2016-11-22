<?php
	include("/wamp64/www/projet_GED/kernel/model/m_generique.php");
	include("/wamp64/www/projet_GED/kernel/model/m_document.php");
	$desdocuments = new Document ('','','','','');
	$sql2 = $desdocuments->readall();
	//print_r($sql2);
	include("/wamp64/www/projet_GED/kernel/view/Document/v_document.php");
	echo'<script
			  src="https://code.jquery.com/jquery-3.1.1.js"
			  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
			  crossorigin="anonymous"></script>
	<script src="js/undocument.js"></script>';
?>