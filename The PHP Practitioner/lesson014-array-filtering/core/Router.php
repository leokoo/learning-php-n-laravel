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

	public function direct($uri)
	{
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

		throw new Exception('No routes defined for this URI.');
	}
}