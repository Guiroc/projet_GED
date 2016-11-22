<?php
	//charger des choses qui sont exterieur à l'application
	/*define ("WEBROOT",str_replace("index.php","",$_SERVER["SCRIPT_NAME"]));
	define ("ROOT",str_replace("index.php","",$_SERVER["SCRIPT_FILENAME"]));
	define ("CSS", WEBROOT."css/");
	define ("JS", WEBROOT."js/");
	define ("KERNEL", ROOT."kernel/");
	define ("CONTROLLER", ROOT."controller/");
	define ("VIEW", ROOT."view/");
	
	if(empty($GET)){
		$controller = "accueil";
		$parap = array ();
	} else {
		$param = explode("/",$_get($p[]));
		
	}
	
	if (!empty ($param[1])) {
		$action = $param[1];
	} else {
		$action = 'index';
	}
	
	require (COMTROLLER ./. $controller.'.php');
	$controller = new $conroller();
	if (method_exists ($controller, $action)) {
		unset ($param[0]);
		unset ($param[1]);
		call_user_func_array(array($controller,$action),$param);
	}
	else {
		echo 'YAPADPAGE !!!';
	}
	
	
	*/
	
	include("/wamp64/www/projet_GED/kernel/view/layout/default/v_index.php");
?>
