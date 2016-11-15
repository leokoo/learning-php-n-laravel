<?php
require 'bootstrap.php';

require 'Task.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos');

//require calls the view file
require 'index.view.php';
?>