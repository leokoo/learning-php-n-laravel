<?php

Class Connection
{
	public static function make() 
	{
		try {
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
		} catch (PDOException $e) {
			die($e->getMessage()); //getMessage() will return a description of what went wrong
		}
	}

}

// To call a static function, we don't need a new instance. So..
// Connection::make();
// Thus to get a new connection, we do
// $pdo = Connection::make();