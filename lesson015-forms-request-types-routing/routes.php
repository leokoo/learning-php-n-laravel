<?php

// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/about-culture.php',
// 	'contact' => 'controllers/contact.php',
// 	// We add the 'names' route that when we have a request for that endpoint, we'll load up the add-name controller
// 	'names' => 'controllers/add-name.php'  // only for POST types
// ]);

//We are changing the router to separate between the get and post types
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');