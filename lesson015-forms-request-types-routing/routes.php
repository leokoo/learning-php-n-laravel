<?php

$router->define([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php',
	// We add the 'names' route that when we have a request for that endpoint, we'll load up the add-name controller
	'names' => 'controllers/add-name.php'
]);