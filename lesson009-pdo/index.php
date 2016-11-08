<?php
// require 'functions.php';

// Catching exceptions as we try to connect to our database
try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
} catch (PDOException $e) {
	die($e->getMessage()); //getMessage() will return a description of what went wrong
}

	$statement = $pdo->prepare('select * from todos');

	$statement->execute();

//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
//PDO::FETCH_OBJ stores each row into an object
	$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//require calls the view file
require 'index.view.php';
?>