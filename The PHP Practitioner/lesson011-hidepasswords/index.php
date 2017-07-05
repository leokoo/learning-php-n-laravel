<?php

//We can switch from $query to anything we want, as long as it describe what it does. Like now, I've changed it to $db
$db = require 'bootstrap.php';
// We removed the require 'tasks.php', as we could do without it.

$tasks = $db->selectAll('todos');

//require calls the view file
require 'index.view.php';
?>