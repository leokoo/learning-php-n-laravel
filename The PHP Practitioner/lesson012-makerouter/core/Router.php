<?php

class Router
{
	protected $routes = [];

	public static function load($file)
	{
		$router = new static;

		require $file;
		// we return the $router and not $this, because this is a static method, not an instance method. $router is initialized and saved as an instance here.
		return $router;
	}

	public function define($routes) 
	{
		$this->routes = $routes;
	}

// http://php.net/manual/en/function.array-key-exists.php
	
	public function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

	// http://php.net/manual/en/language.exceptions.php

		throw new Exception('No routes defined for this URI.');
	}
}