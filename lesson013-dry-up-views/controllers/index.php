<?php

$tasks = $app['database']->selectAll('todos');

//require calls the view file
require 'views/index.view.php';