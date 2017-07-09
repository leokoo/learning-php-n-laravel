<?php

namespace App\Core;

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

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

		public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			
			// die($this->routes[$requestType][$uri]; results in PageController@home without the request type
			return $this->callAction(
				// Splat operator - http://php.net/manual/en/migration56.new-features.php
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception('No routes defined for this URI.');
	}

	protected function callAction($controller, $action)
	{
		/*	method_exists — Checks if the class method exists
			http://php.net/manual/en/function.method-exists.php */

		$controller = "App\\Controllers\\{$controller}"; // because $controller = PagesController
		$controller = new $controller;

		if (! method_exists($controller, $action))
		{
			throw new Exception(
				"{$controller} does not respond to {$action} action"
			);
		}

		return $controller->$action();
	}
}