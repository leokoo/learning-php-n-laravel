<?php
require 'functions.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

//require calls the view file
require 'index.view.php';
?>