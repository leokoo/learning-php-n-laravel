<?php

namespace App\Core;
/*
	links:
	 	http://php.net/manual/en/function.array-key-exists.php
*/
class App 
{
	protected static $registry = [];

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}

	public static function get($key)
	{
		if (! array_key_exists($key, static::$registry)) {
			throw new Exception("No {$key} is found in the container.");
		}

		return static::$registry[$key];
	}
}