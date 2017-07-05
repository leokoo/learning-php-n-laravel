<?php

class Request
{
	public static function uri()
	{
		return trim(
			/*
			 	Parse_url ensures that the url is broken down the various components
				http://php.net/manual/en/function.parse-url.php 
			*/

			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
			);
		// We're getting the URI that we need minus the / on the front and back of the URI
		// return trim($_SERVER['REQUEST_URI'], '/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}