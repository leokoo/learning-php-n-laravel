<?php

//We can switch from $query to anything we want, as long as it describe what it does. Like now, I've changed it to $db
require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')
->direct(Request::uri(), Request::method());