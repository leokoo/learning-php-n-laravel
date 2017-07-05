<?php

class Router
{
	public $routes = [
// Registering routes for get and post requests
	'GET' => [],
	'POST' => []
	];

	public static function load($file)
	{
		$router = new static;

		require $file;
		// we return the $router and not $this, because this is a static method, not an instance method. $router is initialized and saved as an instance here.
		return $router;
	}

		//$this->routes['GET'] looks funny but actually returns an array
		//Thus it'll be:
		//$getRoutes = ['foo'];
		//$getRoutes = ['Leo'];
		//$getRoutes['uri'] = ['Baz'];

		//[
		// 0 => 'foo',
		// 1 => 'Leo',
		// 'uri' => 'Baz'
		//]

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
		/* 
			Hack : $this->routes['GET'] = [array_item]
			[array_item][$uri] results in key => $uri
		*/
	}

		public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->routes[$requestType][$uri];
		}

		throw new Exception('No routes defined for this URI.');
	}
}