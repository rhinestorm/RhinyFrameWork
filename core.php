<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = explode("/", $uri);

$uri = array_splice($uri, 1);

$_Query = $uri;

?>
