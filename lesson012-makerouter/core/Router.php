<?php

class Router
{
	protected $routes = [];

	public function define($routes) 
	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{
		if (array_key_exist($uri, $this->routes) {
			return $this->routes['about/culture'];
		}

		throw new Exception('No routes defined for this URI');
	}
}