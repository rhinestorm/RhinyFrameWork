<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = explode("/", $uri);

$uri = array_splice($uri, 1);

$_Query = $uri;

switch($_Query[0]){
	
	case "phpinfo" :
	
		phpinfo();
	
	break;
	
	case "admin" :
	
		echo "Admin Console";
	
	case "api" :
	
		echo "This is API! Code is : <b>{$_POST["command"]}</b>";
	
	break;
	
	default :
	
	//	include "new.html";
		
	break;
	
}

?>
