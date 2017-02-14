<?php

//We can switch from $query to anything we want, as long as it describe what it does. Like now, I've changed it to $db
require 'core/bootstrap.php';

require Router::load('routes.php')
->direct(Request::uri(), Request::method());