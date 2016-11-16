<?php

Class Connection
{
	public static function make() 
	{
		try {
			//We're trying to remove the hardcoded database info. Thus, we create config.php to call the data from the DB
			//We don't want the password to be hardcoded, just in case there's an error and people gain access to it
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'homestead', 'secret');
		} catch (PDOException $e) {
			die($e->getMessage()); //getMessage() will return a description of what went wrong
		}
	}

}

// To call a static function, we don't need a new instance. So..
// Connection::make();
// Thus to get a new connection, we do
// $pdo = Connection::make();