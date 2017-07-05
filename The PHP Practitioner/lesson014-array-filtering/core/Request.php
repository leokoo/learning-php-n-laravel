<?php

class Request
{
	public static function uri()
	{
		// We're getting the URI that we need minus the / on the front and back of the URI
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}