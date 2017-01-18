<?php

//We can switch from $query to anything we want, as long as it describe what it does. Like now, I've changed it to $db
$db = require 'core/bootstrap.php';

require 'routes.php';

// We're getting the URI that we need minus the / on the front and back of the URI
$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = Router::load('routes.php');

require $router->direct($uri);