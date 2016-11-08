<?php

function connectToDb()
{
	// Catching exceptions as we try to connect to our database
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
	} catch (PDOException $e) {
		die($e->getMessage()); //getMessage() will return a description of what went wrong
	}
}

function dd($input) {
	echo '<pre>';
		die(var_dump($input));
	echo '</pre>';
}

?>