<?php

//We can switch from $query to anything we want, as long as it describe what it does. Like now, I've changed it to $db
$db = require 'core/bootstrap.php';

$routes = [
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about-culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php'
]
?>