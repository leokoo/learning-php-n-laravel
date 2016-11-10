<?php
require 'functions.php';
require 'database/Connection.php';
require 'Task.php';

$pdo = Connection::make();
$tasks = fetchAllTasks($pdo);

//require calls the view file
require 'index.view.php';
?>