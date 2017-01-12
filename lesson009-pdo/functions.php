<?php

function connectToDb()
{
	// We use exceptions to find out if the PDO connects to the DB
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
	} catch (PDOException $e) {
		die($e->getMessage()); //getMessage() will return a description of what went wrong
	}
}

function fetchAllTasks($pdo)
{
	$statement = $pdo->prepare('select * from todos');

	$statement->execute();

//fetchAll fetches all results. We have to careful with this. Perhaps fetch is there's too many results
//PDO::FETCH_OBJ stores each row into an object
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($input) {
	echo '<pre>';
		die(var_dump($input));
	echo '</pre>';
}

?>