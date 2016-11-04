<?php
// require 'functions.php';

// Catching exceptions
try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
} catch (PDOException $e) {
	die('Cannot connect lah');
}

	$statement = $pdo->prepare('select * from todos');

	$statement->execute();

	var_dump($statement->fetchAll());

//require calls the view file
//require 'index.view.php';
?>