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

	$results = $statement->fetchAll(PDO::FETCH_OBJ);

	var_dump($results[1]->description);

//require calls the view file
require 'index.view.php';
?>