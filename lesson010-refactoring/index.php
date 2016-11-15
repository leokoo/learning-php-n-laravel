<?php
$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos');

//require calls the view file
require 'index.view.php';
?>