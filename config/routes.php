<?php

use
	ephFrame\core\Router,
	ephFrame\core\Route
	;

$router = Router::getInstance();
$router->addRoutes(array(
	
	'page' => new Route('/(?<path>.*)?', array(
		'controller' => 'lola\controller\PageController',
		'action' => 'show',
		'path' => 'index',
	)),
	
	// generic scaffolding routes
	'root' => new Route('/*', array(
		'controller' => 'lola\controller\PageController',
		'action' => 'show',
		'page' => 'index'
	)),

));