<?php
require 'functions.php';
require 'Task.php';


$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement->execute();

//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
//PDO::FETCH_OBJ stores each row into an object
	$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

//require calls the view file
require 'index.view.php';
?>