<head>
		<link href="css/index.css" rel="stylesheet" media="all" type="text/css"/>
	</head>
<?php
	include("/wamp64/www/projet_GED/kernel/view/layout/default/v_bandeau.php");
	include("/wamp64/www/projet_GED/kernel/view/layout/default/v_menu.php");
?>
<div id="base">
<?php
	include("/wamp64/www/projet_GED/kernel/controller/Document/c_document.php");
?>
</div>
<?php
	include("/wamp64/www/projet_GED/kernel/view/layout/default/v_bas_page.php");
?>